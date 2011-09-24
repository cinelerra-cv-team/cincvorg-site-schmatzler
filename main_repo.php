<?php 

include "header.php";
include "funcs.php";
$availlangs = array("EN","ES","EU");
$linfo = pmd_getlang($availlangs);
include "newsidemenu.php"; 
?>

<div class='content'>
<h1>The official unofficial Cinelerra repository</h1>

<h2>The repo</h2>

<p>
The source code of the community Version of Cinelerra is available from a git repository. To get it you need to have git-core installed.
  <p>

<p> You can clone the git repository with:</p>
 <blockquote>
<code>git clone git://git.cinelerra.org/CinelerraCV.git cinelerra-cv</code>
 </blockquote>
<p>To browse the repo just go to the official CinelerraCV <a href="http://git.cinelerra.org/gitweb?p=CinelerraCV.git;a=summary">Gitweb page</a>.</p>

<h2>Guidelines</h2>

<h3>The official repository</h3>

<p>The official CinelerraCV git repository is managed by core developers.</p>
<p>The master branch stores clearly tagged releases. <br>
The official repository can have other branches which are considered experimental.</p>
<p>Changes must be approved by 2 core developers.</p>

<h3>Core developers</h3>

<p>Core developers are Cinelerra hackers that are happy to accept a small 
responsibility to help CinelerraCV grow.<br>
Core developers are volunteers that help Cinelerra in their spare time.<br>
Core developers regularly work on CinCV code (when they can) and regularly 
communicate with the Community (when they can).<br>
Core developers do peer reviewing, discuss about patches by core developers and other contributors. <br>
Core developers keep an eye on the bug tracker.<br>
They also discuss about long term general development choices. <br>
Core developers have access to the official repository.<br>
When a core developer can't be a core developer anymore s/he tells that to the 
Community before disappearing.</p>

<p>There are some minimum requirements for new developers:</p>
<p>Anyone who wants to become core developer of Cinelerra must have had at least
two accepted commits to the official Cinelerra master branch.<br>
Then he/she can send letter of application to mailing list describing
what he/she wants to do as a core developer.<br>
Commit access will be discussed and decided by the core developers.</p>

<h3>Other contributors</h3>

<p>Occasional code contribution is very welcome.</p>

<h4>Patch storage</h4>

<p>We want the contributed code stored in a stable place, with easy access to be sure that we have a copy of 
the original patch forever. That's why we ask contributors to upload the patch on the Cinelerra server (git.cinelerra.org, bugs.cinelerra.org.).<br>
Small patches (max 60KB) can be sent to the mailing list as an e-mail attachment. <br>
The Trac powered bug tracker is set to accept attachements as big as 256KB.<br>
Bigger patches can be committed to the "mob" GIT repository.<br>
Frequent contributors can ask for a personal git repository.</p>

<p>Any patch not immediately available or loaded onto a site that needs some quirk for downloading (registration, waiting times, fees...) will be rejected automatically.</p>

<h4>Mail notification</h4>

<p>Contributions must be notified to the <a href="mailinglists.php">mailing list</a>.<br>
Patches must start a new thread whith subject </p>

<blockquote>
<p>[PATCH] Name of the patch</p>
</blockquote>

<p>The body of the message must contain the description of the patch and must include the reference (link) to the patch.</p>

<h4>Interaction with the community</h4>

<p>Contributors are asked to collaborate for the integration.<br>
Contributors must accept that their contribution will be reviewed by 
core developers, and can thus be rejected, with detailed comments.<br>
Core developers will normally review the contribution within two weeks.<br>
If no reply is given within four weeks, the contributor may send a reminder.</p>

<p>For Cinelerra's sake, contributors are asked to keep up the effort,
improve and resubmit the work.<br>
Please note: the mailing list is not a patch dump, but a place for 
collaborative work.</p>

<h3>Proposed changes (patches or git commits)</h3>

<p>Every change must be approved by at least 2 core developers 
before being integrated into the official repository.<br>
Exceptions that can be commited by one developer are obvious bugfixes or 
fixes to recent commits.</p>

<p>Every change must:</p>

<blockquote>
<h4>1. address a single feature</h4>

<p>Separate, single-feature commits are easier to review and test. They also help 
building a clear history, making reversions possible.<br>
This should apply at any level. For instance, even the creation of a new theme 
requires two commits:<br>
1. making a copy of an old theme and rename it<br>
2. applying changes to the theme</p>

<h4>2. have a descriptive log</h4>

<p>The change must be accompanied by the "what" and "why", 
with a detailed description directed at developers that are likely at least 
half-aware of what is going on in the subsystem that is being changed. <br>
The message should explain what the subsystem _should_ do, 
what it actually does (i.e. the reason of the bug) and how to reproduce 
the problem. If the bug fix is non-obvious, it should be explained as well. 
Possible complications of the change, risks, limitations or known bugs must
also be included.<br>
Every significant (non trivial) change should be linked to a Trac ticket number and possibly to a 
milestone.
</p>

<h4>3. be non-destructive</h4>

<p>Features should not be removed or replaced without a very good reason 
(discussed and approved by core developers).</p>

<h4>4. try hard to be compatible</h4>

<p>Ideally the new version of CinCV should e able to import a project created in a 
former version of CinCV. Yet, when important innovations requires it, compatibility can 
be broken: projects saved from a newer version may not load to previous version. <br>
In such cases, the change will be clearly marked with a tag. The ability
to open old projects will be kept by maintaining an older version, keeping it 
buildable.<br>
Compatibility between CinCV and CinHV is not a priority.</p>

<p>Patches must not introduce new compiler warnings when compiled with modern
compilers. (Warnings can be ignored if the cause is outside of current patch).</p>

<h4>5. follow the style</h4>

<p>The new code should adhere to the coding standard 
that is used in surrounding code. <br>
It is good tone to copy the coding style that you find 
rather than to force your own style onto existing code 
(e.g. white-space style, using tabs, not 8 spaces). </p>
<p>
Different parts of Cinelerra have different coding styles. 
The most common is:</p>

<pre>
int main()<br>
{<br>
        int i;<br>
<br>
        if(i == 1)<br>
        {<br>
                i = 2;<br>
        }<br>
}
</pre>

In this example white spaces are made using tabs as follows:

<pre>
int main()<br>
{<br>
&lt;tab&gt;int i;<br>
<br>
&lt;tab&gt;if(i == 1)<br>
&lt;tab&gt;{<br>
&lt;tab&gt;&lt;tab&gt;i = 2;<br>
&lt;tab&gt;}<br>
}
</pre>

<p>FIXME: add an Howto set up emacs, vi, and so on to follow this style</p>

<p>Patches must not have excessive empty lines, commented out parts of code, debug messages.</p>

</blockquote>

<h4>Notes about new files</h4>

<p>The license of a new file must be compatible with GPLv2.</p>
<p>Files that are not created by the author of the patch must have
the origin mentioned (at least in the commit log).</p>

<p>Every new graphical element is a new file.<br>
It must have a "by" line (at least a notice with the author's name in the commit log) and a copyright notice. <br>
It must be proved that the artwork is permitted to be used in Cinelerra.</p>


<h4>Notes about git commit messages</h4>

<p>The git commit message should be properly formatted:</p>
<blockquote>
        a single summary line (max 76 characters),<br>
        a blank line,<br>
        the detailed description.
</blockquote>
</div> 

<address> Last modified on Sept 21 2011 </address>

<?php include "footer.php"; ?>
</body> </html>
