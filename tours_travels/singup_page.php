<html>
    <head>
        <link rel="icon" href="logo.jpg">
        <title> Login</title>
        <link rel="stylesheet" href="signup.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Dancing+Script&family=Merriweather:wght@300&family=Montserrat:wght@300;400;500;600;700&family=Mulish:wght@200&family=Poppins:wght@100;200;400&family=Quicksand:wght@300&family=Raleway:wght@300&family=Roboto+Slab:wght@300&family=Roboto:wght@300&family=Satisfy&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="nav">
            <div class="logo"> <img src="Tours___Travels_Logo-removebg-preview.png"> </div>
            <div class="write"><i> Welcome to Our BLUELINE Tours and Travel Page</i> </div>
        </div>
      
    <div class="bo">
    <div class="a">
    
      <form action="singupcode.php" method="POST">
          <h1>Sign Up</h1>

            <div class="i-box">
                <b>User Name</b>
                <input type="text" placeholder="Username" name="name" required>
                <i class='bx bxs-user'></i>   
            </div>
            <div class="i-box">
                <b>Email</b>
                <input type="text" placeholder="Email" name="email" required>
                <i class='bx bxs-user'></i>  
            </div>
            <div class="i-box">
                <b color="blanchedalmond">Password</b>
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock'></i>
            </div>
              <div class="link">   
                 <div class="box-c">
                   <input type="checkbox" id="check"> 
                   <label for="check"> Remember Me </label>
                </div>
                <a href="#">Forgot Password?</a>
            </div>
                <br><br>

            <div class="d-flex">
                <Button type="submit" name="submit" class="sub">Get in Touch</button>
            </div> 
            <br>

          
      </form>
        <div class="one">
            <i  id="i" class='bx bxl-google'></i>
            <i id="i" class='bx bxl-facebook'></i>
            <i id="i" class='bx bxl-twitter' ></i>
        </div>
    </div>
</div>
    </body>
</html>