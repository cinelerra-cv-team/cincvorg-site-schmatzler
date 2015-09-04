#!/usr/bin/python
# -*- coding: utf-8 -*-
#
######################################################
# (c) Hermann Vosseler <Ichthyostega@web.de>
# This code is free software and may be used under the
# terms and conditions of the GPL version 2
######################################################
#
# proxychange.py - Austausch von Quellmedien in Cinelerra-Session-Dateien.
#                  Zweck: Proxy-Editing, wahlweise mit der Original-Footage oder mit
#                  Proxy-Videos in kleinerer Auflösung arbeiten.
# $Id: proxychange.py 1773 2006-07-09 20:01:50Z hiv $
#
# 04/2006 - wegen 8Hertz...
#
#
# TODO: offset für alle bearbeiteten Edits
# TODO: Cinelerra-XML vorkorrigieren


import sys
import os
import re
import codecs
from optparse import OptionParser
import xml.dom.minidom


#------------CONFIGURATION----------------------------
PROGVER  = 0.1
ENCODING = 'latin1'
#------------CONFIGURATION----------------------------


# -----------parse-cmdline----------------------------
def parseAndDo():
    # -----------------DEBUG
    #    sys.argv = ['proxychange.py', 'proxy.xml', '--from', r'toc/(\w+)\.toc', '--to', r'toc/\1.proxy.mov']
#    sys.argv = ['proxychange.py', 'proxy.xml', '--from', r'toc/(\w+)\.toc', '--to', r'toc/\1.proxy.mov']
    print sys.argv
    # -----------------DEBUG

    usage = "usage: %prog filename.xml --search <PATTERN> --replace <PATTERN> [options]"

    parser = OptionParser(usage=usage, version="proxychange %1.2f" % PROGVER) 

    parser.add_option("-f", "--from",   type="string", dest="src"                                         ,help="Regular Expression to match against the footage filenames")
    parser.add_option("-t", "--to",     type="string", dest="dest"                                        ,help="Template to substitute for the region matched by --from in footage filenames")
    parser.add_option("-v", "--video",                 dest="doVideo", action="store_true", default=False ,help="process video tracks. defaults to True if neither --video nor --audio given")
    parser.add_option("-a", "--audio",                 dest="doAudio", action="store_true", default=False ,help="process audio tracks. defaults to False")
    parser.add_option("-s", "--scale",  type="float",  dest="scale",                        default=1.0   ,help="Scale factor to apply to any camera automation on all processed video tracks")
    parser.add_option("-o", "--offset", type="int",    dest="offset",                       default=0     ,help="Offset added to the start position of any modyfied edits.")

    (options, args) = parser.parse_args()

    if len(args) < 1:
        parser.error("at least the name of the cinelerra session file is required.")

    if (options.src and not (options.doVideo or options.doAudio)):
        options.doVideo=True

    if (options.doVideo or options.doAudio) and not (options.src and options.dest):
        parser.error("need to specify search and replace patterns (--from and --to).")

    # compile regular expression for filename search and replace
    try :
        nameRegExp = re.compile(options.src)
        nameTempl  = options.dest
    except:
        __exerr("Sytax error in reguar expression.")


    #------dispatch-action--------------
    if options.doVideo or options.doAudio:
        dom = readSession(filename=args[0])
        doTransform(dom, doVideo=options.doVideo,doAudio=options.doAudio,
                         regExp=nameRegExp, template=nameTempl,
                         scale=options.scale)
        writeSession(dom,filename=args[0])
        sys.exit(0)

    parser.error("no action specified.")




def readSession(filename):
    # read in a cinelerra session file (XML)
    print "read session %s"%filename
    if not os.path.exists(filename):
        __err("can't find cinelerra session file \"%s\"." % filename)
    srcraw =open(filename, 'r')
    srcfile=codecs.EncodedFile(srcraw,'utf-8', ENCODING)
    #srcfile=srcraw
    dom = xml.dom.minidom.parse(srcfile)
    return dom


def writeSession(dom,filename):
    # wirtes the (probably modified) dom into the given session file,
    # creates a backup beforehand if necessary
    print "writing session %s ...."%filename
    try:
        if os.path.exists(filename):
            if os.path.exists(filename+".bak"):
                os.remove(filename+".bak")
            os.rename(filename,filename+".bak")
    except:
        __exerr("Exception while creating backup")

    try:
        target=codecs.open(filename, 'w', ENCODING)
        target.write(dom.toxml() )
        target.write("\n")
        #print dom.toprettyxml()
        target.close()
    except:
        __exerr("can't write to target file \"%s\"" % filename)

    print "modified %s written to disk."%filename





def doTransform(dom,**args):
    # do the actual work:
    # visit all edits on all audio/video tracks and try to
    # match the footage filename against a regular expression.
    # Modify this filename if it matches.
    # (TODO) Apply offset to any edit source start positions
    print "transform args=%s"%args
    theEdl = dom.getElementsByTagName('EDL')[0]
    tracks = dom.getElementsByTagName('TRACK')
    for track in tracks:
        if not track.parentNode==theEdl: continue       
        # only Tracks in Timeline, not in Clips, not in viewer window
        isVideo = track.getAttribute('TYPE') == 'VIDEO'
        isAudio = track.getAttribute('TYPE') == 'AUDIO'
        if isVideo and not args['doVideo']: continue
        if isAudio and not args['doAudio']: continue

        # modify track data
        really_modified = False
        edits = track.getElementsByTagName('EDIT')
        for edit in edits:
            filenode = edit.getElementsByTagName('FILE')
            if not filenode: continue
            filenode = filenode[0]
            filename = filenode.getAttribute('SRC')
            match = args['regExp'].search(filename)
            if not match: continue
            repl = match.expand(args['template'])
            repl = filename[:match.start()]+repl+filename[match.end():]
            filenode.setAttribute('SRC',repl)
            really_modified = True
                
        if really_modified:
            print "modified Track..."
            
        # rewrite the camera automation to account for the
        # different size of the proxy clip (only if parameter 'scale' given)
        if really_modified and 1.0 != args['scale']:
            camautos = track.getElementsByTagName('CAMERA_Z')
            if camautos:
                camautos = camautos[0].getElementsByTagName('AUTO')
                for camauto in camautos:
                    value = camauto.getAttribute('VALUE')
                    value = float(value)
                    value *= args['scale']
                    value = "%10.8e" % value
                    camauto.setAttribute('VALUE',value)
            else:
                # no existing camera automation
                # create minimal autmation and one default keyframe
                camauto = xml.dom.minidom.Element('CAMERA_Z')
                auto = xml.dom.minidom.Element('AUTO')
                auto.setAttribute('POSITION', '0')
                value = "%10.8e" % args['scale']
                auto.setAttribute('VALUE', value)
                camauto.appendChild(auto)
                track.appendChild(camauto)
                print "WARNING: Tack had no default camera automation node; created new default keyframe"
            
            print "rescaled camera automation..."
            



#
# Cinelerra's XML-parser can't handle the modern
# short-style-closed tags without children (e.g. "<TAG/>")
# to work around this, we hijack the minidom module and
# provide our own writexml()
#
class MyElement(xml.dom.minidom.Element):

# ---------------------------------------copied-code-(xml.dom.minidom.Element)---
    def writexml(self, writer, indent="", addindent="", newl=""):
        # indent = current indentation
        # addindent = indentation to add to higher levels
        # newl = newline string
        writer.write(indent+"<" + self.tagName)
        
        attrs = self._get_attributes()
        a_names = attrs.keys()
        a_names.sort()
        
        for a_name in a_names:
            writer.write(" %s=\"" % a_name)
            xml.dom.minidom._write_data(writer, attrs[a_name].value)
            writer.write("\"")
        if self.childNodes:
            writer.write(">%s"%(newl))
            for node in self.childNodes:
                node.writexml(writer,indent+addindent,addindent,newl)
            writer.write("%s</%s>%s" % (indent,self.tagName,newl))
        else:
            writer.write("></%s>%s" % (self.tagName,newl))
            
# ---------------------------------------copied-code-(xml.dom.minidom.Element)---



print "Minidom wird gehackt...."
#xml.dom.minidom.Document.createElement=hijackedCreateElement
xml.dom.minidom.Element=MyElement
#print "Minidom.createElement=%s" % xml.dom.minidom.Document.createElement
print "Minidom.Element=%s" % xml.dom.minidom.Element



#
# --Messages-and-errors-------------------------------------
#
def __err(text):
    print "--ERROR-------------------------"
    print text
    sys.exit(255)

def __exerr(text):
    raise sys.exc_type,sys.exc_value
    __err(text+": »%s« (%s)" % (sys.exc_type,sys.exc_value))


if __name__=="__main__":
    parseAndDo()

