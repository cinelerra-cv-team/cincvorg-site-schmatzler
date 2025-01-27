<?php 
$title="DevCorner";
include "header.php";
?>

<div class='content'>
<div class="header">
    <h1>Developer's corner</h1>
    <h2>Detailed instructions for coders</h2> 
</div>

<h1>Quick overview</h1>

<h2>Cinelerra-CV repositories</h2>

<p>The source code of Cinelerra-CV is available from stable and experimental git repositories.</p>
<p>To find out more, go to the <a href="/main_repo.php">repository page</a>.</p>

<h2>A short introduction to Cinelerra's source layout</h2>

<p>For a very quick start:</p> 

 <p><strong>Directories:</strong></p>
<ul> 
 <li>guicast - low level gui - direct interaction with X</li>
 <li>cinelerra - the core parts of cinelerra</li>
 <li>plugins - plugins (mostly audio and video effects)</li>
 <li>quicktime, libmpeg3, mpeg2enc - encoders/decoders</li>
</ul>

 <p>The rest can be classified as supporting stuff.</p>

 <p><strong>Some files to start out with:</strong></p>
 <ul>
<li> guicast/{bcwindowbase, bcwindowdraw}.C - base class of all windows</li>
 <li>guicast/thread.C - base class of threads</li>
 <li>guicast/bcsignals.C - signals, debugging helpers</li>
 <li>cinelerra/mwindow{,gui}.C - main (program) window</li>
 <li>cinelerra/cwindow{,gui}.C - composer window</li>
 <li>cinelerra/awindow{,gui}.C - resources window</li>
 <li>cinelerra/vwindow{,gui}.C - viewer</li>
 <li>cnelerra/plugin{,a,v}client.C - base classes for a plugin</li>
</ul>
<p>
 Audio and video are kept in fully separated paths (classes, threads). </p>

<h2>Doxygen documentation</h2>

<p>The source code has been documented using Doxygen.</p>

<blockquote>

<li><a href="doxygen/2.3_d189a04">Doxygen for 2.3</a> (commit <a href="https://git.cinelerra-cv.org/gitweb?p=CinelerraCV.git;a=commit;h=d189a0400ba9088e2da2b09cbae5eb7d96125894">d189a04</a>)</li>

</blockquote>

<p>Thanks to Jens Seidel for suggesting doxygen and Johannes Sixt for providing a template configuration file.</p>

<h1>Guidelines</h1>

<h2>The official repository</h2>

<p>The official CinelerraCV git repository is managed by core developers.</p>
<p>The master branch stores the live development. <br>
Every official release freezes the development into a dedicated branch.</p>
<p>Changes must be approved by a core developer.</p>

<h2>Core developers</h2>

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
Then he/she can send a letter of application to the mailing list describing
what he/she wants to do as a core developer.<br>
Commit access will be discussed and decided by the core developers.</p>

<h2>Other contributors</h2>

<p>Occasional code contribution is very welcome.</p>

<h2>Patch storage</h2>

<p>We want the contributed code stored in a stable place, with easy access to be sure that we'll forever have a copy of 
the original patch. That's why we ask contributors to upload the patch on the Cinelerra server (git.cinelerra-cv.org, bugs.cinelerra-cv.org.).<br>
Small patches (max 60KB) can be sent to the mailing list as an e-mail attachment. <br>
The Trac powered bug tracker is set to accept attachments as big as 256KB.<br>
Bigger patches can be committed to the "mob" GIT repository.<br>
Frequent contributors can ask for a personal git repository.</p>

<p>Any patch not immediately available or loaded onto a site that needs some quirk for downloading (registration, waiting times, fees...) will be rejected automatically.</p>

<h2>Mail notification</h2>

<p>Contributions must be notified to the <a href="contact.php">mailing list</a>.<br>
Patches must start a new thread whith subject </p>

<blockquote>
<p>[PATCH] Name of the patch</p>
</blockquote>

<p>The body of the message must contain the description of the patch and must include the reference (link) to the patch.</p>

<h2>Interaction with the community</h2>

<p>Contributors are asked to collaborate for the integration.<br>
Contributors must accept that their contribution will be reviewed by 
core developers, and can thus be rejected, with detailed comments.<br>
Core developers will normally review the contribution within two weeks.<br>
If no reply is given within four weeks, the contributor may send a reminder.</p>

<p>For Cinelerra's sake, contributors are asked to keep up the effort,
improve and resubmit the work.<br>
Please note: the mailing list is not a patch dump, but a place for 
collaborative work.</p>

<h2>Proposed changes (patches or git commits)</h2>

<p>Every change must be approved by at least one core developer 
before being integrated into the official repository.<br>
Exceptions that can be commited directly are obvious bugfixes or 
fixes to recent commits.</p>

<p>The preferable way to prepare patches is <code>git format-patch</code>, but we
accept patches in all formats that we can understand. We hope that this
makes things simpler for new contributors.</p>

<p>Every patch sent must have a name in the subject of the mail (the
subject must start with [PATCH]) and have a description about what/why/how the
patch does improve Cinelerra-CV.

<h3>How to work with git format-patch</h3>

<p>To create patches with <a href="http://git-scm.com/docs/git-format-patch" target="_blank">git-format-patch</a> and send them with <a href="http://git-scm.com/docs/git-send-email" target="_blank">git-send-email</a> you may have to add a configuration like this to <i>~/.gitconfig</i>:</p>

<pre>
[format]
    suffix = .patch
    numbered = auto
    signOff = true
    coverletter = auto
[sendemail]
    suppresscc=self
    smtpEncryption = ssl
    smtpServer = server.com
    smtpUser = username
    smtpServerPort = 465
</pre>

<p>Afterwards, you can create and send patches like this:</p>

<pre>
    cd cinelerra-cv-2.3.git
    mkdir outgoing
    git format-patch -2 -o outgoing/
    git send-email outgoing/
</pre>

<p>SignOff is not currently required.</p>
 <div class="hint">
   <h3 class="hint">Note:</h3>
   <div class="hintcontent">
     <p>The smtp setup above is just a basic example.<br />
Please consult your internet or hosting provider for more information about smtp settings.</p>
 </div></div>

<h3>Every change must:</h3>

<blockquote>
<h3>1. address a single feature</h3>

<p>Separate, single-feature commits are easier to review and test. They also help 
building a clear history, making reversions possible.<br>
This should apply at any level. For instance, even the creation of a new theme 
requires two commits:<br>
1. making a copy of an old theme and rename it<br>
2. applying changes to the theme</p>

<h3>2. have a descriptive log</h3>

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

<h3>3. be non-destructive</h3>

<p>Features should not be removed or replaced without a very good reason 
(discussed and approved by core developers).</p>

<h3>4. try hard to be compatible</h3>

<p>Ideally the new version of CinCV should be able to import a project created in a 
former version of CinCV. Yet, when important innovations requires it, compatibility can 
be broken: projects saved from a newer version may not load to previous version. <br>
In such cases, the change will be clearly marked with a tag. The ability
to open old projects will be kept by maintaining an older version, keeping it 
buildable.<br>
Compatibility between CinCV and CinHV is not a priority.</p>

<p>Patches must not introduce new compiler warnings when compiled with modern
compilers. (Warnings can be ignored if the cause is outside of current patch).</p>

<h3>5. follow the style</h3>

<p>The new code should adhere to the coding standard 
that is used in surrounding code. <br>
It is good tone to copy the coding style that you find 
rather than to force your own style onto existing code 
(e.g. white-space style, using tabs, not 8 spaces). </p>
<p>
Different parts of Cinelerra have different coding styles. 
The most common is:</p>

<pre>
int main()
{
        int i;

        if(i == 1)
        {
                i = 2;
        }
}
</pre>

In this example white spaces are made using tabs as follows:

<pre>
int main()
{
&lt;tab&gt;int i;

&lt;tab&gt;if(i == 1)
&lt;tab&gt;{
&lt;tab&gt;&lt;tab&gt;i = 2;
&lt;tab&gt;}
}
</pre>

<p>FIXME: add an Howto set up emacs, vi, and so on to follow this style</p>

<p>Patches must not have excessive empty lines, commented out parts of code, debug messages.</p>

</blockquote>

<h3>Notes about new files</h3>

<p>The license of a new file must be compatible with GPLv2.</p>
<p>Files that are not created by the author of the patch must have
the origin mentioned (at least in the commit log).</p>

<p>Every new graphical element is a new file.<br>
It must have a "by" line (at least a notice with the author's name in the commit log) and a copyright notice. <br>
It must be proved that the artwork is permitted to be used in Cinelerra.</p>


<h3>Notes about git commit messages</h3>

<p>The git commit message should be properly formatted:</p>
<blockquote>
        a single summary line (max 76 characters),<br>
        a blank line,<br>
        the detailed description.
</blockquote>

<div class="lastmodified">Last modified on Oct 9, 2015</div>
</div> 

<?php include "footer.php"; ?>
</body> </html>
