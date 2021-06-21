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

body{
            background: linear-gradient(#cea390 , #bb6d6d);
            background-size: 1000%;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
        
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

.button{
    padding: 18px 40px;
    background: transparent;
    outline:none ;
    border: 2px solid black;
    font-weight: bold;
    cursor: pointer;
}
.button:hover{
    background:rgb(147, 192, 192);
    transition: 0.5s;
    text-transform: uppercase;
}

/* FEATURES */

#features{
    padding-top: 50px;
    padding-bottom: 50px;
    margin-top: 100px;
}

.feature-row{
    width: 80%;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
}
.feature-col{
   display: flex;
   flex-direction: column;
   justify-content: space-between;
   height: 300px;
}
.feature-col img{
    width: 200px;
}

.feature-col>a{
    display: inline-block;
}


@media(max-width:450px){
    .container{
        margin-right: 20px;
        margin-left: 20px;
    }
    
    #header{
        min-height: 100vh;
        background-image: none;
       
    }
    
    
    .header-text{
        margin-top: 20px;
    }

    #menuBtn{
        right: 20px;
    }

    #features{
        margin-top: -20px;
    }

    .button {
        margin-top: 10px;
        margin-bottom: 10px;
    }
}
 

@media(max-width:1000px){
    #header{
        background-image: none;
       
    }
    
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



<!---FEATURES--->
<section id="features">
    <div class="feature-row">
        <div class="feature-col">
            <img src="images/customers.png">
           <a href="try.php"> <button class="button" >Our Customers</button></a>
        </div>
        <div class="feature-col">
            <img src="images/transachist.png">
            <a href="thistory.php"><button class="button" >Transaction History</button></a>
        </div>
        <div class="feature-col">
            <img src="images/transfer.png">
            <a href="transfermoney.php"><button class="button" >Transfer Money</button></a>
        </div>
    </div>
    
</section>


</main>
</body>
</html>
