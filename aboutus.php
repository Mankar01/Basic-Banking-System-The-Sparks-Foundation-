<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  
  <style>

nav{
    width:100%;
    background:black;
    overflow:auto;
}
ul {
    padding:0;
    margin:0 0 0 150px;
    list-style:none;
}
li{
    float:right;
}
.logo img{
     position:absolute;
     margin-top:5px;
     margin-left:10px;
}
nav a{
    width:100px;
    display:block;
    padding:20px 15px;
    text-decoration: none;
    font-family: Arial;
    color:#f8f8f8;
    text-align: center;
}
nav a:hover{
    background:rgb(147, 192, 192);
    transition: 0.5s;
    text-transform: uppercase;
}
  </style>
</head>
  <body>
  
  <div class="logo"><a href ="#"><img src=images/LOGO1.png></a>

<nav>
    <ul>
    <li><a href="accordian.php">FAQ's</a></li>  
      <li><a href="contactus.php">Contact</a></li>
      <li><a href="aboutus.php">AboutUs</a></li>
      <li><a href="index.php">Home</a></li>
    </ul>   
  </nav> 
</div>
    
    <div class = "about-wrapper">
      <div class = "about-left">
        <div class = "about-left-content">
          <div>
            <div class = "shadow">
              <div class = "about-img">
                <img src = "images/hand.jpg" alt = "about image">
              </div>
            </div>

            <h2><br>GRIP SPARK BANKING SYSTEM</h2>
            <h3>Spark_Foundation</h3>
          </div>

          <ul class = "icons">
            <li><a href="https://www.facebook.com/thesparksfoundation.info"></a><i class = "fab fa-facebook-f"></i></li>
            <li><a href=" https://twitter.com/tsfsingapore?lang=en"></a><i class = "fab fa-twitter"></i></li>
            <li><a href=" https://www.youtube.com/hashtag/sparks_foundation"></a><i class = "fab fa-linkedin"></i></li>
          </ul>
        </div>
      </div>

      <div class = "about-right">
        <h1>Overview<span>!!</span></h1>
        <h2>Who We Are</h2>

        <div class = "about-para">
          <p>Spark Bank is one of the best banks.We have all the facilites in our bank.We are the first to set up a private sector bank in 1994.</p>
          <p>Today, Spark Bank has a banking network of 5,50 branches and 3 ATM's in 500 cities/towns.We offer a diverse range of financial products and banking services to customers through a growing branch and ATM network and digital channels such as Netbanking, Phonebanking and MobileBanking.</p>
        </div>
      </div>
    </div>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Poppins', sans-serif;
}
.about-wrapper{
    height: 100vh;
}
.about-left{
    background: #cea390;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
.about-left-content > div{
    background: #bb6d6d;
    padding: 4rem 4rem 2.5rem 5rem;
    text-align: center;
}
.about-left-content{
    box-shadow: 0px 0px 18px -1px rgba(0, 0, 0, 0.39);
    -webkit-box-shadow: 0px 0px 18px -1px rgba(0, 0, 0, 0.39);
    -moz-box-shadow: 0px 0px 18px -1px rgba(0, 0, 0, 0.39);
}
.about-img img{
    display: block;
    width: 200px;
}
.about-img{
    width: 200px;
    height: 200px;
    overflow: hidden;
    border-radius: 50%;
    transition: all 0.5s ease-in-out;
}
.shadow{
    margin-left: auto;
    margin-right: auto;
    border-radius: 50%;
    width: 200px;
    height: 200px;
    position: relative;
    cursor: pointer;
}
.shadow::after{
    content: "";
    position: absolute;
    background: rgba(0, 0, 0, 0.4);
    left: 50%;
    transform: translateX(-50%);
    bottom: -20px;
    height: 7px;
    width: 50px;
    filter: blur(3px);
    -webkit-filter: blur(3px);
    opacity: 0;
    transition: all 0.6s ease;
}
.shadow:hover .about-img{
    transform: translateY(-10px);
}
.shadow:hover::after{
    opacity: 1;
}
.about-left-content h2{
    font-size: 2rem;
    margin: 2.2rem 0 0.6rem 0;
    line-height: 1.2;
    padding-bottom: 1rem;
    border-bottom: 2px solid #edffec;
}
.about-left-content h3{
    text-transform: uppercase;
    font-weight: 300;
    letter-spacing: 5px;
    margin-top: 1.2rem;
}
.icons{
    background: #fff;
    display: flex;
    justify-content: center;
    padding: 0.8rem 0;
}
.icons li{
    list-style-type: none;
    background: #030102;
    color: rgb(238, 235, 234);
    width: 40px;
    height: 40px;
    margin: 0 0.5rem;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.5s ease-in-out;
}
.icons li:hover{
    background: #edffec;
    color: black;
}
.about-right{
    background: #fff;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 5rem;
    text-align: center;
}
.about-right h1{
    font-size: 50px;
    text-transform: uppercase;
}
.about-right h1 span{
    color: #bb6d6d;
}
.about-right h2{
    font-weight: 600;
}


.about-para p{
    font-weight: 300;
    padding: 0.5rem;
    opacity: 0.8;
}

@media screen and (min-width: 992px){
    .about-wrapper{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .about-left{
        position: relative;
    }
    .about-left-content{
        position: absolute;
        right: -50px;
    }
}
    </style>


  </body>
</html>