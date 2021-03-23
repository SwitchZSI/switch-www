<?php
	define("SITE_ID", 7);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Radio SWITCH | Głosowanie na nowy dzwonek na lekcje</title>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="icon" 
      type="image/png" 
      href="/images/favicon.png">
</head>
<body>

<?php require_once("./menu.php"); ?>

<div class="header">
  <div class="logo">
    <h1><img src="images/LOGO.png"></h1>
  </div>
  <div class="social">
    <ul>
      <li><a target="_blank" href="https://www.facebook.com/zsikielce/"><img src="images/facebook.png" alt="ZSI" /></a><font style="font-size:14px; color:#d13f31; font-family: 'Oswald', sans-serif; font-weight:normal; text-transform:uppercase;">/ ZSI</font></li>
      <li><a target="_blank" href="https://www.facebook.com/zsiswitch/"><img src="images/facebook.png" alt="SWITCH" /></a><font style="font-size:14px; color:#d13f31; font-family: 'Oswald', sans-serif; font-weight:normal; text-transform:uppercase;">/ SWITCH</font></li>
    </ul>
  </div>
</div>

<div class="pasek"></div>

<div class="page">
  <div class="generic">
    <div class="panel">

      <div class="content">
        <div>
          <div class="panel">
            <div class="title">
              <h1> Głosowanie na nowy dzwonek na lekcje </h1>
            </div>
			<div class="content">
				<div class="poll-entry">
					<h3>Cavalry charge - Bugle Call</h3>
					<audio controls><source src='sounds/poll/bugle_call.mp3'  type='audio/mpeg' /></audio>
				</div>
				<div class="poll-entry">
					<h3>Hot Butter - Popcorn</h3>
					<audio controls><source src='sounds/poll/popcorn.wav'  type='audio/mpeg' /></audio>
				</div>
				<div class="poll-entry">
					<h3>Kiss - I Was Made For Lovin' You</h3>
					<audio controls><source src='sounds/poll/kiss.wav'  type='audio/mpeg' /></audio>
				</div>
				<div class="poll-entry">
					<h3>The Equals - Baby come back</h3>
					<audio controls><source src='sounds/poll/baby_come.wav'  type='audio/mpeg' /></audio>
				</div>
				<div class="poll-entry">
					<h3>Village People - YMCA</h3>
					<audio controls><source src='sounds/poll/ymca.wav'  type='audio/mpeg' /></audio>
				</div>
				<div class="poll-entry">
					<h3>Zwykły</h3>
					<audio controls><source src='sounds/poll/zwykly.wav'  type='audio/mpeg' /></audio>
				</div>
				<center>
					<iframe src="https://www.strawpoll.me/embed_1/19036669" style="width:680px;height:625px;border:0;">Loading poll...</iframe>
				</center> 
			</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="clearing"></div>
<BR/>
  <div class="copyright-wrap">
    <div class="panel">
      <div class="content">
        <P>Copyright (c) Radio SWITCH | Designed by <a href="http://patryk.org/">Patryk Piotrowski</a>. </P>
      </div>
    </div>
  </div>
</div>

</body>
</html>
