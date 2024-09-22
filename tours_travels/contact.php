<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(255, 235, 235);
        }
        .main-content{
    margin:0;
    padding:0;
    height: 5rem;
    padding-top: 1px;
}
.nav-div {
    margin-top: 1rem;
    
 
}
.nav {
    height: 78px;
    color: white;
    display: flex; 
    justify-content: end;
    align-items: end;
}
.n-i{
    display: flex; 
    padding-bottom:2rem;
}
.nav a{
    padding : 11px;
    display : flex;
    margin : 16px;
    border:1px solid transparent;
    color:#000;
    text-decoration:none;
}
.logo img{
    float:left;
    margin-left: 4rem;
    height: 8rem;
    width: 12rem;
    margin-bottom:1rem;
}
.nav a:hover{ 
    border:0px solid #fff;
    border-radius: 25px;
    backdrop-filter: blur(50px);
    animation: glowing 10s infinite;
    /* margin-top: 0.1rem;  */
}
@keyframes glowing{
    100%  {
      box-shadow: 0 0 10px rgb(0 ,0 ,0);
    }
    75% {
      box-shadow: 0 0 20px rgb(196, 196, 196);
    }
    50% {
      box-shadow: 0 0 10px rgb(0, 0, 0);
    }
    25% {
      box-shadow: 0 0 10px rgb(187, 187, 187);
    }
    0% {
      box-shadow: 0 0 10px rgb(0, 0, 0);
    }   
}
       .img-div{
        margin-top:7rem;
            border:1rem solid gray;
            border-radius: 5%;
        }
        h1{
            font-family: 'Brush Script MT', cursive;
        }
    </style>
</head>
<body>
<header>
    <div class="main-content">
        <div class="logo"><img src="Tours___Travels_Logo-removebg-preview.png"></div>
        <div class="nav-div">
            <div class="nav">
                <a href="myedit.php" class="n-i" class="link-d"> Home </a>
                <a href="ticket_test.php" class="n-i"> Tour  </a>
                <a href="about.php" class="n-i"> About </a>
                <a href="contact.php"class="n-i"> Contact </a>
            </div>
        </div>
    </div>
</header>
    <div width="100%">
    <img src="img.jpg" class="img-div" width="25%" height="35%">
    <h1>Post: Manager</h1>
    <h1>Name:</h1>
    <p>ParthrajSinh</p>
    <h3>Mobile Number:</h3><p>+91 85114 42739</p>
    </div>
</body>
</html>