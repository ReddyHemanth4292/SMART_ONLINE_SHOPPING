<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="productpage.css">
</head>
<body>
    <nav class="nav-full">
        <img src="./images/Screenshot 2023-03-01 at 4.54.16 PM.png" alt="" width="2%" height="2%" id="nav-image" >
        <div class="nav-group">
        <a href="" class="nav-items">Home</a>
        <a href="" class="nav-items">Fassion</a>
        <a href="" class="nav-items">Electronics</a>        
        <a href="" class="nav-items">Gloceries</a>
        
        <a href="" class="nav-items">Accessories</a>
        <a href="" class="nav-items">Fresh</a>
        <a href="./login2.html" class="nav-items">Logout</a>
        <a href="./myprofile.html" class="nav-items">Profile</a>
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
                <a href="">Logout</a>
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
<br>
    <section class="product">
        
        <div class="product-img">
            <center>
            <img src="./images/product1.webp" alt="" width="515px" height="450px">
            <div class="small-img">
                <img src="./images/product1.webp" alt="" width="100px" height="100px">
                <img src="./images/product2.jpeg" alt="" width="100px" height="100px">
                <img src="./images/product3.jpeg" alt="" width="100px" height="100px">
                <img src="./images/product4.jpeg" alt="" width="100px" height="100px">
            </div>
            </center>
        </div>

        <div class="product-description">
            <h1>Allen Solly T-shirt</h1>
            <p>Price : Rs.1100</p>
            <p>Size:</p>
            <div>
                <button class="size-button">XS</button>
                <button class="size-button">S</button>
                <button class="size-button">M</button>
                <button class="size-button">L</button>
                <button class="size-button">XL</button>
                <button class="size-button">XXL</button>
            </div>
            <br>Items:
            <select name="" id="">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
            </select><br><br>
            <span><button>Add to Cart</button></span>
            <span><button>Buy Now</button></span>
            <h2>Product Description</h2>
            <p>uertheiuertht ejvniuehviutnwe w ivtuewihbhgytvir iurhtg ergt ergnjvg jehfgkh rghef rjfnfdjnfkv<br>
                herut ewsdfjgjkvnf  reiuhue rui rehuwth eurytu eriuery uy routyur ur 
                <br>yury reuy urtuwer twrytuiwer tuwerureu  t  tyureyture trutyue rirt<br>
                e huertyurehu h treuhtuerh u htuu   urehtiuhrgiu iurth uierh</p>
        </div>
    </section>
    <section>
        <h1>Related Products</h1>
        <div  class="shopping-all-items">
            <div  class="shopping-item">
                <img src="./images/Screenshot 2023-03-01 at 4.54.16 PM.png" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div  class="shopping-item">
                <img src="./images/Screenshot 2023-03-01 at 4.54.16 PM.png" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div  class="shopping-item">
                <img src="./images/Screenshot 2023-03-01 at 4.54.16 PM.png" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            <div  class="shopping-item">
                <img src="./images/Screenshot 2023-03-01 at 4.54.16 PM.png" alt="" width="98%" height="65%" onclick="window.location.href='product.html'">
                <p>Item-name</p>
                <p>Rs.1100</p>
                <center><button>Add to cart</button></center>
            </div>
            
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