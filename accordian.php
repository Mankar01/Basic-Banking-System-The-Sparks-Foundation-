<!DOCTYPE html>
<html>
<head>
	<title>Accoridan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- for icons plus minus font awesome-->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

body{
	margin:0;
	font-family: sans-serif;
	background: linear-gradient(#cea390 , #bb6d6d);
    background-size: 1000%;
	position: relative;
}

*{
	box-sizing: border-box;
	
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

.accordian{
	max-width:600px;
	display: block;
	margin:100px auto;
}

.accordian .card{
	box-shadow: 0px 0px 20px #d4d4d4;
	margin-bottom:20px;
	float: left;
	width: 100%;
}
.accordian .card .card-header h3{
	cursor: pointer;
	color:#ffffff;
	position: relative;
	background-color: #3343a2;
	margin:0;
	padding:15px 20px;

}
.accordian .card .card-header {
	position: relative;
}
.accordian .card .card-header span{
	position: absolute;
	right:20px;
	top:12px;
	height:25px;
	width:25px;
	color:#3343a2;
	background-color: #ffffff;
	border-radius:50%;
	text-align: center;
	line-height:25px;
	font-size:13px;
}

.accordian .card .card-body{
	padding:20px;
}
.accordian .card .card-body{
	display: none;
    
}
/*open one card by default*/
.accordian .card:nth-child(1) .card-body{
 display: block;
}
.accordian .card .card-body p{
	font-size: 15px;
	line-height: 24px;
	color:#000000;
	margin:0px;
}
.card-body{
    background-color:white;
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

  <div class="accordian">
  	  <div class="card">
  	  	  <div class="card-header">
  	  	  	 <h3>How do I change my password? </h3>
  	  	  	 <span class="fa fa-minus"></span>
  	  	  </div>
  	  	  <div class="card-body active">
  	  	  	  <p>After you have logged in, you can change your password using the 
				"Change password" option in the top part of the screen. You have 
				to type your current password and the new password you have chosen
				in their respective boxes.</p>
  	  	  </div>
  	  </div>

  	  <div class="card">
  	  	  <div class="card-header">
  	  	  	 <h3>When will I receive my changed ATM PIN?</h3>
  	  	  	 <span class="fa fa-plus"></span>
  	  	  </div>
  	  	  <div class="card-body">
  	  	  	  <p>You will receive your new ATM PIN by post within 10 days from 
				when your request has been submitted.</p>
  	  	  </div>
  	  </div>
  	  <div class="card">
  	  	  <div class="card-header">
  	  	  	 <h3>What is special about Internet banking?</h3>
  	  	  	 <span class="fa fa-plus"></span>
  	  	  </div>
  	  	  <div class="card-body">
  	  	  	  <p> Internet banking is the most convenient way to bank- anytime,
				any place, at your convenience.</p>
  	  	  </div>
  	  </div>

		<div class="card">
			<div class="card-header">
				 <h3>What is Online Spark?</h3>
				 <span class="fa fa-plus"></span>
			</div>
			<div class="card-body">
				  <p>Online Spark bank is the Internet banking service provided by Spark bank.</p>
			</div>
	  </div>
  </div>


<!-- jqurey code -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
	  $(".card-header").click(function(){
       // self clicking close
       if($(this).next(".card-body").hasClass("active")){
         $(this).next(".card-body").removeClass("active").slideUp()
        $(this).children("span").removeClass("fa-minus").addClass("fa-plus")	
       }
     else{
	   $(".card .card-body").removeClass("active").slideUp()
	   $(".card .card-header span").removeClass("fa-minus").addClass("fa-plus");
       $(this).next(".card-body").addClass("active").slideDown()
        $(this).children("span").removeClass("fa-plus").addClass("fa-minus")
      }
	  })
	})

</script>


</body>
</html>