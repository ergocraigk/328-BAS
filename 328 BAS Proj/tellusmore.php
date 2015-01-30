<!DOCTYPE html>



<html>

<head>

    <title>Page Title</title>

    <style>

        #hideSID{

            display: none;

        }

    </style>

</head>

    

<body>

    <!--this will contain due dates and other important information-->

    <div id="due-dates-field">

        

    </div>

    

    <!--this is a jumbotron and will hold each pages content-->

    <div id="main-div">

        <form method="post" action="<?php echo $_POST['degreebtn'];?>.php" id="studentForm" onsubmit="checkSID();">

            <fieldset>

                <legend>Please Select One:</legend>

                <label><input type="radio" name="studentYesNo" value ="yes" id="YesStu" required>I am currently a student at Greenriver<br></label>

                    <div id="hideSID">

                        <label>Student ID (xxxxxxxxx):<input type="text" pattern="^\d{3}\d{3}\d{3}$" name="SID" id="SID"></label><br>

                    </div>

                <label><input type="radio" name="studentYesNo" value ="no" id="NoStu"required>I am a new stuent.</label>

            </fieldset>

            <fieldset>

                <legend>I am a (please check all that apply):</legend>

                <label><input type="checkbox" name="specialstat" value="veteran">Veteran<br></label>

                <label><input type="checkbox" name="specialstat" value="international">International Student<br></label>

                <label><input type="checkbox" name="specialstat" value="runningStart">Running Start Student</label>

            </fieldset>

            <input type="submit" id="submit" value="Continue">

        </form>

    

    </div>

    

    <script>

        var IDnum = document.getElementById("hideSID");

        var StuYes = document.getElementById("YesStu");

        var StuNo = document.getElementById("NoStu");

        StuYes.onclick = toggleDisplayOn;

        StuNo.onclick = toggleDisplayOff;

        //var SIDcheck = document.getElementById("submit");

        //SIDcheck.onclick = checkSID;

        

        function toggleDisplayOn(){

            IDnum.style.display = "block";

        }

        function toggleDisplayOff(){

            IDnum.style.display = "none";

        }

        function checkSID(){

          /*  var SIDvalid = document.getElementById("SID").value;

            if (SIDvalid.length == 9) {

                return true;

            }

            alert("A student ID number should be 9 numbers long.");

            return false;*/

        }

       

        

    </script>

</body>

</html>