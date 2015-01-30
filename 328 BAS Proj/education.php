<!DOCTYPE html>

<html>
<head>
    <title>Education</title>
</head>

<body>
<h1><center>EDUCATION</center></h1>
Select highest degree achieved:
<!-- Reserve for future POST method -->
<form name="degree" action="email2.php" method="POST">
    <select name="degrees">
    <option value="HS">Highschool Diploma or GED</option>
    <option value="AS">Associates degree (AA, AS, AAS, AAS-T)</option>
    <option value="BA">Bachelors degree</option>
    <option value="MA">Masters degree</option>
    <option value="PhD">Ph.D.</option>
    </select>
<br>


  How many college credits have you earned?: 
  <input type="number" name="credits" value=" ">


<p>Upload unofficial transcripts from any college other than Green River.</p>
<button type="button">Upload</button> <br> <br>

<input type="checkbox" id="myCheck" required> I verify that the information submitted here is accurate and complete. <br>

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

<!--carry varibles over from sdpre.php or netpre-->
<input type="hidden" name="prereq" value="<?php echo $_POST['prereq'];?>.php"/>

<input type="submit" id="submit" value="Finish">
</form>
</body>
</html>
