<?php

include "header.php";

include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class="content">
<h2>About Cinelerra</h2>
This is an unofficial SVN repository and community home page for Cinelerra, the
non-linear video editor and compositor for Linux. The <a
href="http://www.heroinewarrior.com/">official home page</a>
 and <a href="http://sourceforge.net/projects/heroines/">the
 Sourceforge page</a> are maintained
 by the original developer.
 <p>This site offers a collection
 of user contributed tutorials, some links, and a SVN repository. It is
 intended for developers and adventurous Linux users who want to
 contribute to the development of Cinelerra. </p>
 <p>If you simply want to <em>use</em>
 Cinelerra, the <a
  href="/docs/cinelerra_cv_manual_en.html">
  manual</a> or the <a href="docs.php#tutorials">tutorials</a>
  are the first places you should go! </p>
  <h2>Why  2 versions of cinelerra?</h2>
  There are two branches of Cinelerra - one can be found at <a
   href="http://heroinewarrior.com/cinelerra.php3">heroine.com</a>
   and the other here.

<p> This website is primarily focussed on the cinelerra-CV (i.e. the
community version of cinelerra) that is downloaded via svn.  </p>

<p> Cinelerra is developed "upstream" by an entity (guy/girl/group)
we'll call HV that is a sharing but not a community sort of
entity.  HV likes to work on its own copy of cinelerra on
its own, releasing code on a periodical basis (every 6
months or so).  </p>

<p> Some developers decided that it would be nice to develop in a
community fashion, (public svn access) but did not really want to fork
(which is seen as being nasty). </p>

<p> Basically we maintain a copy that is fairly similar to the
official release, (i.e. we don't do code-tidying patches).  But apply
our bug fixes, compiler compliance fixes, and enhancements to the svn.
We do try to send the patches upstream, (but it sucks having to apply
a patch to two systems, but that's life!) Thus the CV has a number of
features that the official version does not have. </p>

<p> In terms of stability, unlike other programs, the release that HV
does, I would not describe as a "stable" release (personal opinion
only).  After HV's release there are often issues with HV's release in
the forms of bugs / usability issues (HV only builds for Fedora, and
his compiler, and for his personal needs.) Also not all of the
enhancements we develop make it upstream (e.g. render to YUV pipe). So
when there is a new release, one of the members, (j6t) merges HV's
code with our code taking the enhancements from HV, and re-arranging the
code to be more similar to HV's (whitespace, function naming,
directory naming, slight changes in implementations etc.) After
the merge, the svn is possibly a little unstable until all the issues
with HV's newly added code are fixed (as users find bugs, and as time
permits to fix them.)</p>

<p>I personally see the CV efforts as the community's attempt to
stabalise HV's release, and also to add enhancement in a community
fashion (where we can comment on each other's implementation of new
plugins, etc.), (whist ensuring that we can merge with heroine's new
releases).  In actual fact, HV does keep track of us and at times say
a few words here or there about our implementations (see for example 
<a href='https://init.linpro.no/pipermail/skolelinux.no/cinelerra/2006-April/006012.html'>[1]</a>
<a href='https://init.linpro.no/pipermail/skolelinux.no/cinelerra/2006-January/005042.html'>[2]</a>
 and for 'Heroine Virtual' in the archives).</p>

<p>Given the above discussion, one might say that obtaining the SVN
just before a merge is a stablised version, but then you'll likely run
into issues of project description files not being forward
compatible. Also, HV does find bugs that we didn't. And in some cases fix 
bugs that we point out, and don't get around to fixing.  So what is stable
is really up for question and for you to decide, but if you go with us
and have an issue with the software,  you'll likely get more communication
with us than HV.</p>

<p><i>Pierre Dumuid (2006-05-10)</i><br/>- information obtained from a
video I downloaded of a talk Andraz Tori gave at Pixel conference, and
a little time spent helping out here and there and sitting on the
mailing list.  An <a
href='http://www.linuxdevcenter.com/pub/a/linux/2003/12/30/cinelerra.html'>
interview</a> with the author from 2003 also provided valuable
insight.</p>

<p>See the irc discussion at <a
href='http://cvs.cinelerra-cv.org/irclog/index.php?file=2005-11-05.html'>http://cvs.cinelerra-cv.org/irclog/2005-11-05.html</a>
that led me to the video of Andraz Tori talking at Piksel 5 [<a
href='http://www.nuug.no/pub/herman/piksel5/andraz_tori_cinelerra_2005.10.21.avi'>Original
(Hi Res) Video Link</a> 368M] [<a
href='media/andraz_tori_cinelerra_2005.10.21.ogg'>Audio Extracted</a>
11M].

</div>

<address>Last modified on 8 August 2008</address>
<?php include "footer.php"; ?>
</body>
</html>

