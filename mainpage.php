<?php
    include 'db.php';
    session_start();
    if(!isset($_SESSION['user_name'])){
        header('location:login.php');
    }
    $query="SELECT * from products";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    $product = mysqli_fetch_assoc($data);


?> 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navfor full screen -->
    <nav class="nav-full">
        <img src="./images/Screenshot 2023-03-01 at 4.54.16 PM.png" alt="" width="2%" height="2%" id="nav-image">
        <div class="nav-group">
        <a href="" class="nav-items">Home</a>
        <a href="" class="nav-items">Fassion</a>
        <a href="" class="nav-items">Electronics</a>        
        <a href="" class="nav-items">Gloceries</a>
        
        <a href="" class="nav-items">Accessories</a>
        <a href="" class="nav-items">Fresh</a>
        <a href="logout.php" class="nav-items">Logout</a>
        <a href="myprofile.php" class="nav-items"><?php echo $_SESSION['user_name']; ?></a>
        <input type="search" name="search" id="searchinput" placeholder="search..">
        <input type="submit" value="search" id="search" >

        </div>
    </nav>

    <!-- navfor mini screen -->
    <nav class="nav-mini">
        <div class="dropdwn">
            <button class="dropbtn"></button>
            <div class="dropdown-list" id="dropdown-list">
                <a href="">Home</a>
                <a href="">Fassion</a>
                <a href="">Electronics</a>
                <a href="">Gloceries</a>
                <a href="">Toys</a>
                <a href="">Accessories</a>
                <a href="">Fresh</a>
                <a href="./index.html">Logout</a>
            </div>
        </div>
        <div class="navsearch">
            <input type="search" name="search" id="searchinput" placeholder="search..">
            <input type="submit" value="submit" id="search" >
        </div>
        <div class="drop-log-img">
            <img src="./images/icons8-male-user-50.png" alt=""> 
        </div>
        <div class="drop-log">
            <a href="">Logout</a>
        </div>
    </nav>

    <div class="slideshow-container">
        <div class="slideshow">
            <img src="./images/images (8).jpeg" alt="Image 1">
            <img src="./images/images (4).jpeg" alt="Image 2">
            <img src="./images/images (5).jpeg" alt="Image 3">
            <img src="./images/images (3).jpeg" alt="Image 4">
            <img src="./images/images (2).jpeg" alt="Image 5">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a></div>
        
    </div>

    <!-- shopping items -->
    <section>
        <!-- <div class="homeimage">
            <center><h1>Shop A->Z</h1></center>
        </div> -->
        
        <div class="shopping-all-items">
            <?php
                if($total!=0){
                    while($product = mysqli_fetch_assoc($data)){
            ?>
            <div class="shopping-item">
                <img src="<?php echo $product['product_image']?> " alt="" width="98%" height="65%" onclick="window.location.href='productpage.php'">
                <p><?php echo $product['product_name']?></p>
                <p>Rs. <?php echo $product['product_price']?></p>
                <center><button>Add to cart</button></center>
            </div>
            <?php
                    }
            }
            ?>
            <!-- <div class="shopping-item">
                <img src="./images/photo(1).jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div  class="shopping-item">
                <img src="./images/photo(2).jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div  class="shopping-item">
                <img src="./images/photo(3).jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div class="shopping-item">
                <img src="./images/photo(4).jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div class="shopping-item">
                <img src="./images/photo2.1.jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div class="shopping-item">
                <img src="./images/photo2.2.jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div  class="shopping-item">
                <img src="./images/photo2.3.jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div  class="shopping-item">
                <img src="./images/photo2.4.jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div class="shopping-item">
                <img src="./images/photo3.1.jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div class="shopping-item">
                <img src="./images/photo3.2.jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div class="shopping-item">
                <img src="./images/photo3.3.jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div  class="shopping-item">
                <img src="./images/photo3.4.jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div  class="shopping-item">
                <img src="./images/photo4.1.jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div class="shopping-item">
                <img src="./images/photo4.2.jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div class="shopping-item">
                <img src="./images/photo4.3.jpeg" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div> -->
        </div>
        <div>

            <div class="chatbox">
                <div class="chatbox__support">
                    <div class="chatbox__header">
                        <h2>Chat Bot</h2>
                    </div>
                    <div class="chatbox__messages">
                        <div>
                            <div class="messages__item messages__item--visitor">
                                Hi!
                            </div>
                            <div class="messages__item messages__item--operator">
                                What is it?
                            </div>
                            <!-- .<div class="messages__item messages__item--typing">
                                <span class="messages__dot"></span>
                                <span class="messages__dot"></span>
                                <span class="messages__dot"></span>
                            </div> -->
                        </div>
                    </div>
                    <div class="chatbox__footer">
                        <input type="text" placeholder="Write a message">
                        <button><i class="fa fa-send"></i></button>
        
                    </div>
                </div>
                <div class="chatbox__button">
                    <button>Branch-1</button>
                </div>
            </div>
            <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slideshow")[0].getElementsByTagName("img");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }

    </script>
            <script src="./chat.js"></script>
            <script src="./app.js"></script>
        </div>
    </section><br>
    <footer id="contactus">
        <h3>Contact us:</h3>
        <span>phone.no:+91 5437566533</span>
        <span><a href="http://">Facebook</a></span>
        <span><a href="http://">Instagram</a></span>
        <span><a href="mailto:">mail</a></span>
        <br>
        <address>The article is written by:<b>Hemanth</b> <br>Contact Author at:  
            <a href="mailto:example@gmail.com">Example@gmail.com</a> 
        </address> 
    </footer>
</body>
</html>