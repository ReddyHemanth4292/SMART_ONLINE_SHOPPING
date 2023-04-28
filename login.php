<?php
    include 'db.php';
    session_start();
     if(isset($_POST['submit'])){
        //  $name=$_POST['name'];
         $email=$_POST['email'];
         $pass=$_POST['password'];
        //  $phoneno =$_POST['phoneno'];
         $verify_query= mysqli_query($con,"SELECT * FROM users WHERE user_email='$email' && user_password='$pass'");
        if(mysqli_num_rows($verify_query)!=0){
            $row=mysqli_fetch_array($verify_query);
            $_SESSION['user_name']=$row['username'];
            header('location:mainpage.php');
        }
        else{
        //     $insert="INSERT INTO users(username,user_email,user_phoneno,user_password) VALUES ('$name','$email','$phoneno','$pass')";
        //     mysqli_query($con,$insert) or die("error occured");
        //     $error[]='Successfully Registred';
        //    header('location:login.php');
            echo 'incorrect credentials';
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
            max-width: 45%;
            margin: 150px auto;
            padding: 5% 0%;
            border: 2px solid black;
            background-color: #ffffff;
        }
        fieldset{
            max-width: 90%;
            border-radius: 1rem;
            margin: 5%;
            padding: auto 2%;
            border-color: black;
        }

        input{
            padding-left: 5%;
            border: none;
            font-size:large;
            min-width: 96%;
            outline: none;
        }
        .login{
            min-width: 10%;
            text-align: center;
            background-color: #EEEEEE;
            margin-left: 5%;
            padding:1.5% 3%;
            border-radius: 1rem;
            font-size:medium;
            border: 1px solid black;
        }

        @media screen and (max-width: 650px){
            div{
                max-width: 70%;
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
            var email=document.myform.email.value;
            var password=document.myform.password.value;
            if(email==""){
                document.getElementById("error").innerHTML="Email Can't be empty";
                document.getElementById("emailborder").style.borderColor="red";
                document.myform.email.focus();
                return false;
            }
            var atpos=email.indexOf('@');
            var dotpos=email.indexOf('.');
            if(atpos==0 || dotpos-atpos<=2 || email.length-dotpos<=2){
                document.getElementById("error").innerHTML="Enter valid Email";
                document.getElementById("emailborder").style.borderColor="red";
                document.myform.email.focus();
                return false;
            }
            if(password==""){
                document.getElementById("error").innerHTML="Password Can't be empty";
                document.getElementById("passwordborder").style.borderColor="red";
                document.myform.password.focus();
                return false;
            }
            if(password.length<6){
                document.getElementById("error").innerHTML="Password Length should reach maximum length";
                document.getElementById("passwordborder").style.borderColor="red";
                document.myform.password.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div >
        <center><h2>LOGIN</h2>
        <form action="" name="myform" method="post" onsubmit="return validate()">
            <fieldset id="emailborder">
                <legend>Email:</legend>
                <input type="text" name="email" id="email">
            </fieldset>
            <fieldset id="passwordborder">
                <legend>Password</legend>
                <input type="password" name="password" id="password">
            </fieldset>
            <p id="error" style="color: red;"></p>
            <br>
            <input type="submit" name="submit" value="Login" class="login"><br><br>
            
            Don't have an Account?  <a href="signin.php">Signup</a>
            <p>Forget Password? <a href="">Click here!</a></p>
        </form></center>
    </div>
</body>
</html>