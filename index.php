<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home Page</title>
    <style>

html{
    min-height:100%;
    width: 100%;
    margin:0;
    padding:0;
    background-image: url(images/bg7.png);
    background-position: center;
    background-size: cover;
    position: relative;
}
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

.container h2{
    text-align: center;
    background-color: #D68950  ;
    color: white;
    font-size:20px;
   


}
.container h1{
    margin-top: 70px;
    text-align: center;
    font-weight: bolder;
    color:#00203FFF;
}
#icon{
    width: 50px;
    height: 50px;
}
.feature-img{
    height:50%;
    width:32%;
    float:right;
    margin: 5px;
}
.content h3{
    font-size: 35px;
    font-weight: 100;
    margin-right: 24px;
    text-align: center;
    margin-bottom: 15px;
    color: #030c35;

}
.content{
    text-align: center;
}
.content p{
    font-size: 20px;
    text-align: center;
    color: #040441;
}


.hero-btn{
    text-align: center;
    display: inline-block;
    text-decoration: none;
    color: rgb(0, 0, 0);
    border: 1px solid rgb(14, 6, 6);
    padding: 5px 7px;
    font-size:20px;
    background:transparent;
    position:relative;
    cursor:pointer;
}

.hero-btn:hover{
    border: 1px solid rgb(147, 192, 192);
    background:rgb(147, 192, 192);
    transition: 1s;
     
}


.foot{
    width:100%;
    height:70px;
    margin: auto;
    padding-top: 260px;
}
.social-media-icons ul {
    list-style: none;
    padding: 0;
    text-align: center;
    color: cornsilk;
}

.social-media-icons a {	
	display: flex;
	text-decoration: none;
	padding: 10px;
    color: cornsilk;
}

 .social-media-icons a:nth-child(1) i {
	color:#666;
}

.social-media-icons a:nth-child(2) i {
	color:#666;
}

.social-media-icons a:nth-child(3) i {
	color:#666;
} 

.social-media-icons a i:hover{
	color: rgb(74, 192, 192);
}
.copyright{
    color: rgb(255, 255, 255);
    padding: 10px;
    text-align: center;
    margin-left:60px;
}



.social-media-icons-col-xs-12{
    background-color: rgb(44, 36, 36);
    padding-top: 20px;
    text-align: center;
}
.fa-facebook-square{
    margin-right:120px;
}
.fa-twitter-square{
    margin-right:110px;
}
.fa-youtube-square{
    margin-right:80px;
}


</style>
</head>

<body>
  <main>

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
<div class="container ">
  <h1><img src="images/BANK.png" id="icon"> GRIP SPARK BANKING SYSTEM <img src="images/BANK.png" id="icon"></h1>
  <h2><marquee behavior="scroll"direction="left">**********WELCOME TO GRIP SPARK BANKING SYSTEM**********</marquee></h2>

  <img src="images/bank2.png" class="feature-img">
  </div>
  <div class="content">
    <h3><br>The right relationship is everything</h3>
   <p>Make it happen with us.</p>
<a href="main.php" class="hero-btn">Click</a>
</div>


<footer>
  <div class="foot">
    
      
      <div class="social-media-icons-col-xs-12">
          <ul class="list-inline-col-xs-12">
            <a href="https://www.facebook.com/thesparksfoundation.info"><i class="fa fa-2x fa-facebook-square"></i></a>
            <a href=" https://twitter.com/tsfsingapore?lang=en"><i class="fa fa-2x fa-twitter-square"></i></a>
            <a href=" https://www.youtube.com/hashtag/sparks_foundation"><i class="fa fa-2x fa-youtube-square"></i></a>  
                        
          </ul>
         <centre class="copyright">Copyright &copy; Web Coding Pro. All Rights Reserved</centre>
        </div>
        
  </div>
  
</footer>


</main>
</body>
</html>