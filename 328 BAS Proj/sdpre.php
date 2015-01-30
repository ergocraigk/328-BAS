<!DOCTYPE html>
<html>

<head>
<title>Software Dev</title>


<link rel="stylesheet" type="text/css" href="groupstyle.css">
 <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<header>
<div class = "container">
<h1>Green River College</h1>
<h2>BAS Networking and Software Development Online Application</h2>
</header>
</div>
<main>
<div class="container">

<div id="dates">
<h3>Deadlines:</h3>
<p>Important Date 1</p><br>
<p>Important Date 2</p><br>
<p>Important Date 3</p><br>
</div>
<div id="center">
<h2>Software Development Prerequisities</h2><br/>
<h3>Please check all that you have completed.</h3>
<p>NOTE: If you don"t have all of the prerequisites, or have extensive industry experience, an advisor will contact
you to discuss options</p>
<form method="post" action="education.php" >
<Input type="checkbox" id="class" value="programming">Programming 1 and 2 (CS 141&145 or CS 131&132)<br/>
<Input type="checkbox" id="class" value="database">IT 201: Database Fundamentals or equivalent<br/>
<Input type="checkbox" id="class" value="linux">IT 190: Intro to Linux or LPI1, or Linux Essentials<br/>
<Input type="checkbox" id="class" value="html">IT 121: HTML/CSS, or equivalent<br/><br/>
Comments:
<label for="notes">Notes:</label><br/>
<textarea rows="15" cols="50" name="notes">
    
</textarea>

<!--carry variables over from tellusmore.php-->
<input type="hidden" name="studentYesNo" value="<?php echo $_POST['studentYesNo'];?>.php"/>
<input type="hidden" name="SID" value="<?php echo $_POST["SID"];?>.php"/>
<input type="hidden" name="specialstat" value="<?php echo $_POST['specialstat'];?>.php"/>

<!--carry variables over from contactinfo.php-->
<input type="hidden" name="fname" value="<?php echo $_POST['fname'];?>.php"/>
<input type="hidden" name="lname" value="<?php echo $_POST['lname'];?>.php"/>
<input type="hidden" name="degreebtn" value="<?php echo $_POST['degreebtn'];?>.php"/>
<input type="hidden" name="mail" value="<?php echo $_POST['mail'];?>.php"/>
<input type="hidden" name="phone" value="<?php echo $_POST['phone'];?>.php"/>

<input type="submit" name="submit" value="Continue">

</div>

</div>
</main>





<footer>
<div class ="container">
Green River College
</div>
</footer>




</body>
</html>