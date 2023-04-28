<?php
include 'db.php';
session_start();
$username = $_SESSION['user_name'];
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $email = $user['user_email'];
    $address=$user['user_address'];

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
        *{
            padding: 1rem;
        }
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: medium;
            background-color: #eeeeee;
        }
        section{
            background-color: #ffffff;
        }
        a{
            text-decoration: none;
            display: block;
            color: orange;
        }
        section{
            display: flex;
        }
        div{
            margin: 1rem;
        }
        .prof{
            min-width: 60%;
            margin-left: 5rem;
        }
        aside{
            float: right;
        }
        aside,figure,figcaption,hr{
            padding: 0%;
        }

        .nav a:first-child{
            margin-top: 2rem;
        } 
        .nav,.prof{
            border: 1px solid black;
        }
        .nav a:hover{
            background-color: orange;
            color: #ffffff;
        }
        button{
            background-color: #ffffff;
            border-color: orange;
        }
        button:hover{
            color: #ffffff;
            background-color: orange;
        }
        h2{
            color: #ffffff;
            background-color: orange;
        }
        @media screen and (max-width:900px) {
            section{
                display: block;
            }
            .prof{
                margin-left: 1rem;
            }
        }
    </style>
</head>
<body>
    <section>
        <div class="nav">
            <center>
            <a href="">My Orders</a>
            <a href="">Wishlist</a>
            <a href="">Notifications</a>
            <a href="">Settings</a>
        </center>
        </div>
        <div class="prof">
            <h2>My Profile</h2>
            <hr>
            <aside>
                <figure>
                    <img src="./images/photo copy.jpeg" alt="" width="200px" height="200px"><br>
                </figure>
            </aside>
            <p>Name : <?php echo $_SESSION['user_name']; ?></p>
            <p>Email : <?php echo $email?></p>
            <p>Address : <?php echo $address?></p>
            <button>Change Password</button><button>Edit profile</button>
        </div>
    </section>
</body>
</html>