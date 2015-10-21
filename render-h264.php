<?php
$title="YUV4MPEG Tutorial";
include "header.php";
?>

<div class="content">
<div class="header">
    <h1>How to render H.264</h1>
    <h2>Use the YUV4MPEG pipe as a workaround</h2> 
</div>

<h2>Why?</h2>
  <p>If you cannot render videos in the H.264 format, you've stumbled over a major bug.</p>
  <p>As it turns out, recent version of libx264 are incompatible with libquicktime - the library Cinelerra-CV uses to render its videos.</p>
  <p>There is no fix for this yet - but rendering H.264 <b><u>isn't</u></b> completely broken. Please see the instructions below.</p>
  
<h2>How?</h2>
  <p>Video and audio have to be rendered separately and -later on- combined into your final video.</p>
  <p>To render the video portion of your project, we will use the <i>YUV4MPEG</i> pipe. Your render options have to look like this:</p>
  <p><img src=/images/website/tutorial/render-yuv4mpeg.png alt="render-yuv4mpeg" /></p>
  <p>Now open up the additional render options and make sure it's set up like this:</p>
  <p><img src=/images/website/tutorial/render-yuv4mpeg-additional.png alt="render-yuv4mpeg additional" /></p>
  <p>This is the command for easy copy-pasting:</p>
  <pre>ffmpeg -f yuv4mpegpipe -i - -y -threads 0 -vcodec libx264 -crf 21 -preset medium %</pre>
  <p>The various switches explained in detail:
  <ul>
  <li><b>-threads 0</b> - depends on the number of your CPU cores</i></li>
  <li><b>-crf 21</b> - video quality, <a href="https://trac.ffmpeg.org/wiki/Encode/H.264#crf" target="_blank">explained here</a></li>
  <li><b>-preset medium</b> - use this option to control speed&lt;-&gt;filesize, also <a href="https://trac.ffmpeg.org/wiki/Encode/H.264#crf" target="_blank">explained here</a></li>
  </ul>
  <p>You can now render your video.</p>
  <br />
  <p>To render audio, choose the following settings:</p>
  <p><img src=/images/website/tutorial/render-audio.png alt="render-audio" /></p>
  <br/>
  <p>Now two files have been created - <b>myvideo.m2v</b> (video) and <b>myvideo.wav</b> (audio)</p>
  <p>You can combine these into your final video file with a program like <a href="http://mein-neues-blog.de/tragtor-gui-for-ffmpeg/" target="_blank">Tragtor</a> or via commandline:</p>
  <pre>ffmpeg -i myvideo.m2v -i myvideo.wav -acodec libmp3lame -ab 192k -ar 48000 -vcodec copy finalvideo.avi</pre>
  
<h2>Can I get more control?</h2>

  <p>Yes. The <i>YUV4MPEG</i> pipe even allows you to do multi-pass rendering, which is not available through Cinelerra-CV itself.</p>
  <p>Please <a href="https://n1njahacks.wordpress.com/2013/03/11/exporting-h-264-from-cinelerra/" target="_blank">see here</a> for a detailed tutorial by n1njahacks.</p>

<div class="lastmodified">Last modified on Oct 21, 2015</div>
</div>
 
<?php include "footer.php"; ?>
 </body>
</html>
