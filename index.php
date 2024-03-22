<!DOCTYPE html>
<html>
    <head>
        <style>
            .Errormessage{
                color:red;
            }
        </style>

    </head>
    <body style="background-color: #9E9E9E;">
        <h2>Registration Form</h2>
            <form name="myForm" method="POST" action="secondform.php" onsubmit="return validateForm()" >
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <span id="Error" class="Errormessage"></span>
            <br>
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <span id="Error" class="Errormessage"></span>
            <br>
            Enter Your Address:<br>
            <textarea id="address" name="address" rows="2" cols="20"></textarea> <br>
            <span id="Error" class="Errormessage"></span><br>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
            <span id="Error" class="Errormessage"></span>
            <br>
            <!--<p>Skills You Have</p>
            <input type="checkbox" id="html" name="skill[]" value="html">
            <label for="skill1">HTML</label><br>
            <input type="checkbox" id="css" name="skill[]" value="css">
            <label for="skill2">CSS</label><br>
            <input type="checkbox" id="javascript" name="skill[]" value="js">
            <label for="skill3">Javascript</label><br>
            <span id="Error" class="Errormessage"></span>-->
            <br>
            <input type="submit" value="submit"></input>
        </form>
        <script>
            function validateForm()
            {

                var fname=document.getElementById("fname").value;
                if(fname=="")
                {
                    document.getElementById("Error").innerHTML="Please Enter Your First Name";

                    return false;
                }
                var lname=document.getElementById("lname").value;
                if(lname=="")
                {
                    document.getElementById("Error").innerHTML="Please Enter Your Last Name";

                    return false;
                }
                var address=document.getElementById("address").value;
                if(address=="")
                {
                    document.getElementById("Error").innerHTML="Please Enter your Address";

                    return false;
                }
                var g=document.getElementById("male").checked;
                var f=document.getElementById("female").checked;
                if(g==false&&f==false)
                {
                    document.getElementById("Error").innerHTML="Please Select your Gender";

                    return false;
                }
                var g=document.getElementById("html").checked;
                var f=document.getElementById("css").checked;
                var h=document.getElementById("javascript").checked;
                if(g==false&&f==false&&h==false)
                {
                    document.getElementById("Error").innerHTML="Please Select your Skill";

                    return false;
                }

                return true;

            }
        </script>
    </body>

</html>
