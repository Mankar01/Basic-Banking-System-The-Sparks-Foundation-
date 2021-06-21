<!DOCTYPE html>
<html lang="en" dir="ltr">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
<head>
    <meta charset="UTF-8">
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
    <div class="container">
   <h1>Connect With Us</h1> 
   <p>We would respond to your queries and help you succeed.<br>Feel 
      free to get in touch with us.</p>
      <div class="contact-box">
          <div class="contact-left">
              <h3>Send your request</h3>
              <form>

                <div class="input-row">
                    <div class="input-group">
                        <label>Name </label>
                        <input type="text" placeholder="Ketaki Mankar">
                    </div>
                    <div class="input-group">
                        <label>Phone </label>
                        <input type="text" placeholder="+1 412 520 3231">
                    </div>
                </div>

                <div class="input-row">
                    <div class="input-group">
                        <label>Email </label>
                        <input type="email" 
                        placeholder="Ketaki@gmail.com">
                    </div>
                    <div class="input-group">
                        <label>Subject </label>
                        <input type="text" placeholder="Queries">
                    </div>
                </div>

                <label>Message</label>
                <textarea rows="5" placeholder="Your Message"></textarea>
                <button type="submit">SEND</button>
            </form>
          </div>
          <div class="contact-right">
              <h3>Reach Us</h3>
              <table>
                  <tr>
                      <td>Email</td>
                      <td>Spark@contactus.com</td>
                  </tr>
                  <tr>
                    <td>Phone</td>
                    <td>+1 012 345 6789</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>Pune,Near Company,some Street.</td>
                </tr>
              </table>
          </div>
      </div>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap');
        *{
            
            margin: 0;
            padding: 0;
        }
        body{
            background: linear-gradient(#cea390 , #bb6d6d);
            background-size: 1000%;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
        }

        .container{
            width:80%;
            margin: 50px auto;
        }
        .contact-box{
            background:#fff;
            display: flex;
        }
        .contact-left{
            flex-basis: 60%;
            padding: 40px 60px;
        }
        .contact-right{
            flex-basis: 40%;
            padding: 40px;
            background:rgb(150, 85, 92) ;
            color: rgb(255, 255, 255);
            }
        h1{
            margin-bottom: 10px;
        }
        .container p{
            margin-bottom: 40px;
        }
        .input-row{
            display:flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .input-row .input-group{
            flex-basis: 45%;
        }
        input{
            width:100%;
            border:none;
            border-bottom: 1px solid #ccc;
            outline: none;
            padding-bottom: 5px;
        }
        textarea{
            width:100%;
            border: 1px solid #ccc;
            outline: none;
            padding: 10px;
            box-sizing: border-box;
        }
        label{
            margin-bottom: 6px;
            display: block;
            color: #1c00b5;
        }
        button{
            background:#1c00b5 ;
            width: 100px;
            border: none;
            outline: none;
            color: #fff;
            height: 35px;
            border-radius: 30px;
            margin-top: 20px;
            box-shadow: 0px 5px 15px 0px rgba(28,0,181,0.3);

        }
        .contact-left h3{
            color: #1c00b5;
            font-weight:600;
            margin-bottom: 30px;
        }
        .contact-right h3{
            font-weight:600;
            margin-bottom: 30px;
        }
        tr td:first-child{
            padding-right: 20px;
        }
        tr td{
            padding-top: 20px;
        }
    </style>
</body> 
</html>
