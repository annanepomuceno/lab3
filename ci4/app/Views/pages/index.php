<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> About Me - John Emmanuel Piala </title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header>

<p id="demo"> </p>
<div class = "Adjust">
<h1 class = "Size"><p id="intro"></p></h1>
<h1 id = "glow"><p id="demo1"></p><h1> 
<img src ="images/Me.jpg" alt="JP's picture" id = "Pic" style="width:200px;height;200px">

</div>
</header>
<main>
<a href="https://youtu.be/iSbLHrrqmoM?si=gAvcSK0IsSxTDbV7" target="_blank" class="link" id = "pos"><img src ="images/tooth.gif" alt="gif" style="width:125px;height;100px"></a>
<a href="https://youtu.be/xvFZjo5PgG0?si=Lx0iIYnqWDQrIf1B" target="_blank" class="link"><img src ="images/chika.gif" alt="gif" style="width:100px;height;120px"></a>
<div class = "Bio">
<h2><i class='bx bx-info-circle'></i> <?php echo "Personal Information" ?></h2> <?php // Echo ?>
</div>
<p><strong id = "Neon">Full Name:</strong> John Emmanuel Piala</p></p>
<p><strong id = "Neon">Nickname:</strong> Emman</p>
<p><strong id = "Neon">Age:</strong> 19</p>
<p><strong id = "Neon">Senior High School:</strong> I graduated Senior High School in Asia Pacific College.</p>
<p><strong id = "Neon">Course:</strong> I chose Bachelor of Science in Information Technology in Mobile and Internet Technology.</p>
<p><strong id = "Neon">Scholarship:</strong> Public HS Graduate (50%)</p>

<hr>
<h2><?php function myMessage() {$x = "Did you choose this course?";echo $x;} myMessage();?> </h2> <?php // Variable and Functions ?>

<p id = "p1">Test</p>

<hr>
<div class = "Skills">
<h2><i class='bx bxs-star' ></i> Skills & Interests</h2>
</div>
<h3 id = "Neon">I.T. Experience:</h3>
<p><strong>Programming:</strong> I have some experience in web and mobile application programming. The language used were HTML, JavaScript, CSS, and Python. I also have some experience in developing simple games using the language Python, like this project that we made 2 years ago for example: <a href="https://github.com/Samson-D/Bootcamp-3T2021-SHS-Giddy-s-Plunge-1.git">Giddy's Plunge</a> </p>
<p><strong>Gaming:</strong> I like a variety of games, and among the ones I play, I particularly like <?php $hobby = array("val", "tekken", "eldenring", "mhw", "mlbb"); echo count($hobby);?>, which are Valorant, TEKKEN, Core Keeper, Elden Ring, and Monster Hunter World.</p> <?php // Variable and Functions ?>
<hr>
<h3 id = "Neon">Hobbies:</h3>

<p id = "hobby"> </p> <p id = "Inte"></p>

<hr>

<h3><strong id = "Neon">Pictures about your interests:</strong></h3>
<p><strong>Some of the Games I Played: <?php $hobby = "images/val.jpg images/tekken.jpg images/eldenring.jpg images/mhw.jpg images/mlbb.jpg"; $pattern = "/.jpg/i"; echo preg_match_all($pattern, $hobby);?></strong></p> <?php // RedEx ?>
<a target="_blank" href = "images/val.jpg"><img src ="images/val.jpg" alt="val" style="width:325px;height;250px"> </a>
<a target="_blank" href = "images/tekken.jpg"><img src ="images/tekken.jpg" alt="tekken" style="width:325px;height;200px"> </a>
<a target="_blank" href = "images/eldenring.jpg"><img src ="images/eldenring.jpg" alt="eldenring" style="width:325px;height;200px"> </a>
<a target="_blank" href = "images/mhw.jpg"><img src ="images/mhw.jpg" alt="mhw" style="width:380px;height;200px"> </a>
<a target="_blank" href = "images/mlbb.jpg"><img src ="images/mlbb.jpg" alt="mlbb" style="width:335px;height;200px"> </a>
<br>
<hr>
<footer>
<div class = "Socials">
<h2><strong id = "Neon">Socials:</strong></h2>
<a href="https://www.facebook.com/johnemmanuel.piala"><i class='bx bxl-facebook-circle' id="FB"></i></a>
<a href="https://github.com/jbpiala"><i class='bx bxl-github' id="GH"></i></a>
<a href="https://www.linkedin.com/in/john-emmanuel-piala-a5147a229/"><i class='bx bxl-linkedin-square' id="LI"></i></a>

<div class = "Adjust">
<button class = "btn" onclick = "bg()">dark mode</button> <button class = "btn" onclick = "bg2()">light mode</button>
<br>
<button class = "btn" onclick="this.innerHTML=Date()">The time is?</button>
<p id="demo2"></p>

<hr>

</div>
</footer>
</main>
// This is a single-line comment

# This is also a single-line comment

/* This is a
multi-line comment */
</body>
</html>
<script src="js/script.js" defer></script>
