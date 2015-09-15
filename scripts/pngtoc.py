#!/usr/bin/python

import subprocess

name = raw_input("Enter filename: ")
name = name + ".toc"
x = raw_input("Enter width: ")
y = raw_input("Enter height: ")
fps = raw_input("fps: ")

output = open(name, 'w')
output.write("PNGLIST\n"+str(fps)+"\n"+str(x)+"\n"+str(y)+"\n")

myfolder = subprocess.check_output(r"echo $PWD", shell=True)
content = subprocess.check_output("ls *.png", shell=True)

a=""
for item in content:
    if item != "\n":
        a=a+item
        
    else:
        output.write("/" + myfolder[0:-1] + "/" + a + "\n")
        a = ""

output.close()