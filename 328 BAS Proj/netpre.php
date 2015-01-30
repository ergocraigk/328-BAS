<!DOCTYPE html>
<html>

<head>
<title>Networking</title>


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
<h2>Networking Prerequisities</h2><br>
<h3>Please check all that you have completed.</h3>
<p>NOTE: If you don"t have all of the prerequisites, or have extensive industry experience, an advisor will contact
you to discuss options</p>
<form method="post" action="education.php" >
<input type="checkbox" id="class" name="prereq" value="210">IT 210 or CCENT<br/>
<input type="checkbox" id="class" name="prereq" value="160">IT 160 or MTA<br/>
<input type="checkbox" id="class" name="prereq" value="190">IT 190 or LPI1 or Linux Essentials<br/>
<input type="checkbox" id="class" name="prereq" value="102">IT 102 or a Programming Course<br/><br/>
Comments:
<label for="notes">Notes:</label><br/>
<textarea rows="15" cols="50" name="notes">
    
</textarea>


<!--carry variables over from tellusmore.php-->
<input type="hidden" name="studentYesNo" value="<?php echo $_POST["studentYesNo"];?>.php"/>
<input type="hidden" name="SID" value="<?php echo $_POST["SID"];?>.php"/>
<input type="hidden" name="specialstat" value="<?php echo $_POST["specialstat"];?>.php"/>

<!--carry variables over from contactinfo.php-->
<input type="hidden" name="fname" value="<?php echo $_POST['fname'];?>.php"/>
<input type="hidden" name="lname" value="<?php echo $_POST['lname'];?>.php"/>
<input type="hidden" name="degreebtn" value="<?php echo $_POST['degreebtn'];?>.php"/>
<input type="hidden" name="mail" value="<?php echo $_POST['mail'];?>.php"/>
<input type="hidden" name="phone" value="<?php echo $_POST['phone'];?>.php"/>


<input type="submit" name="submit" value="Continue">
</form>

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