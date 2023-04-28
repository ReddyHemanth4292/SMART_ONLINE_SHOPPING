<?php
    include 'db.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['setpass'];
        $phoneno =$_POST['phoneno'];
        $address=$_POST['address'];
        $verify_query= mysqli_query($con,"SELECT * FROM users WHERE user_email='$email'");
        if(mysqli_num_rows($verify_query)!=0){
            $error[]= 'user already exist!';
        }
        else{
            $insert="INSERT INTO users(username,user_email,user_phoneno,user_password,user_address) VALUES ('$name','$email','$phoneno','$pass','$address')";
            mysqli_query($con,$insert) or die("error occured");
            $error[]='Successfully Registred';
           header('location:login.php');
        }
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #EEEEEE;
        }
        div{
            max-width: 40%;

            border: 2px solid  black;
            padding: 2% 5%;
            margin: 7rem auto;
            background-color: #ffffff;
        }
        fieldset{
            max-width: 90%;
            border-radius: 1rem;
            margin: 2%;
            padding: auto 2%;
        }

        input,textarea{
            min-width: 96%;
            font-size: medium;
            outline: none;
            border: none;
        }
        .signup{
            min-width: 5rem;
            border-radius: 1rem;
            padding:1% 2%;
            border: 1px solid black;
        }


        @media screen and (max-width: 750px){
            div{
                max-width: 65%;
                padding: 2% 3%;
            }
        }
        @media screen and (min-width: 1050px){
            div{
                max-width: 30%;
                padding: 2% 1%;
            }
        
        }
    </style>
    <script>
        function validate(){
            var name=document.myform.name.value;
            var email=document.myform.email.value;
            var phone=document.myform.phoneno.value;
            var newpassword=document.myform.setpass.value;
            var oldpassword=document.myform.confpass.value;
            var address=document.myform.address.value;
            if(name=="" || name.length<6){
                document.getElementById("error").innerHTML="Enter Name with Minimum Length";
                document.myform.name.focus();
                return false;
            }
            var atpos=email.indexOf('@');
            var dotpos=email.indexOf('.');
            if(email==""){
                document.getElementById("error").innerHTML="Email Can't be empty";
                document.myform.email.focus();
                return false;
            }
            if(atpos==0 || dotpos-atpos<=2 || email.length-dotpos<=2){
                document.getElementById("error").innerHTML="Enter valid Email";
                document.myform.email.focus();
                return false;
            }
            if(phone.length!=10){
                document.getElementById("error").innerHTML="Enter valid Phone Number";
                document.myform.phoneno.focus();
                return false;
            }
            if(newpassword==""){
                document.getElementById("error").innerHTML="Set Password Can't be empty";
                document.myform.setpass.focus();
                return false;
            }
            if(oldpassword==""){
                document.getElementById("error").innerHTML="Confirm Password Can't be empty";
                document.myform.confpass.focus();
                return false;
            }
            if(oldpassword!=newpassword){
                document.getElementById("error").innerHTML="Set Password and Confirm Password not matching";
                document.myform.confpass.focus();
                return false;

            }
            if(address==""){
                document.getElementById("error").innerHTML="Enter Address";
                document.myform.address.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div>
        <center><h2>Sign Up</h2>
        <form action="" name="myform" method="post" onsubmit="return validate()">
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo $error;
            };
        };
        ?>
            <fieldset>
                <legend>Name</legend>
                <input type="text" name="name" id="">
            </fieldset>
            <fieldset>
                <legend>Email</legend>
                <input type="email" name="email" id="">
            </fieldset>
            <fieldset>
                <legend>Phone No</legend>
                <input type="tel" name="phoneno" id="">
            </fieldset>
            <fieldset>
                <legend>Set Password</legend>
                <input type="password" name="setpass" id="">
            </fieldset>
            <fieldset>
                <legend>Confirm Password</legend>
                <input type="password" name="confpass" id="">
            </fieldset>
            <fieldset>
                <legend>Address</legend>
                <!-- <input type="text" name="address" id=""> -->
                <textarea rows="4" name="address"></textarea>
            </fieldset>
            <p id="error" style="color: red;"></p><br>
            <input type="submit" name="submit" value="Signup" class="signup">
        </form></center>
        <p>Already have an Account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>