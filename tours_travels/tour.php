<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Resorts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="resort.css">
</head>
<body>
<!-- <header> -->
    <div class="content">
        <div class="nav-div">
            <div class="nav">
                <a href="myedit.php"><i class='bx bx-lock'></i> Home </a>
                <a href="about.php"> About </a>
                <a href="tour.php"> Tour  </a>
                <a href="contact.php"> Contact </a>
            </div>
        </div>

        <div class="page">
            <div class="heaad"> LUXURIOUS HOTELS IN THE CITY
               <div class="small">  
                 <div class="hr"> </div> Resorts & SPA  <div class="hr"></div>
               </div>
            </div>
        </div>
    </div>
<!-- </header> -->
<!-- <footer> -->
    <div class="dates">
       <div class="check">
        <b> Check In Date: <br></b>
        <p> <input type="date" name="txtdate" class="cdate"></p>
       </div>

       <div class="check">
        <b> Check Out Date: <br></b>
        <p> <input type="date" name="txtdate" class="cdate"></p>
       </div>

       <div class="guest">
        <b> Guests: </b><br>
         <select class="form-select" >
            <option>1</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </div>

        <div class="guest">
         <b> Children: </b><br>
          <select class="form-select">
            <option required>0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </div>
        
       <div class="guest">
        <b> Rooms: </b><br>
         <select class="form-select">
          <option>1</option>
          <option value="1">2</option>
          <option value="2">3</option>
          <option value="3">4</option>
         </select>
       </div>

       <div class="register">
        <button type="button"><b>Book Now</b></button>
       </div>
    </div>    
<!-- </footer> -->
    <div class="footers">
        <div class="foot">
            <div class="name">RECOMMEND DESTINATIONS </div>
        </div>
        <div class="images">
            <div class="cards">
                <div class="resort">
                    <b>Experience Greece: Athens, Crete & <br> Santorini - 10 days
                         <i class="fa-solid fa-star"></i> 
                         <i class="fa-solid fa-star"></i> 
                         <i class="fa-solid fa-star"></i> 
                         <i class="fa-solid fa-star"></i> 
                         <i class="fa-solid fa-star"></i> 
                    </b> <br>
                    <i class="fa-solid fa-location-dot"></i> <span>Byrce Canyoy National Park,USA </span>
                        <div class="details">
                           <span><i class="fa-regular fa-calendar"></i> 10 days</span>
                           <span> <i class="fa-regular fa-user"></i> 40</span>
                        </div>
                </div>
                <div class="price">
                    <div class="good">
                        <span>Very Good</span> <br> 
                        <p>1,695 reviews</p>
                        <p><i class="fa-solid fa-indian-rupee-sign"> </i> <span>30,109</span></p>
                        <a href="ticket.php">
                        <button type="button" class="btn btn-primary">Reserve</button>
                        </a>  
                    </div>
                </div>
            </div> 

            <div class="cards">
                <div class="resort">
                    <b>Ananta Resort Udaipur
                         <i class="fa-solid fa-star"></i> 
                         <i class="fa-solid fa-star"></i> 
                         <i class="fa-solid fa-star"></i> 
                         <i class="fa-solid fa-star"></i> 
                         <i class="fa-solid fa-star"></i> 
                    </b> <br>
                    <i class="fa-solid fa-location-dot"></i> <span> Varca</span>
                    <div class="details">
                        <span><i class="fa-regular fa-calendar"></i> 10 days</span>
                        <span> <i class="fa-regular fa-user"></i> 40</span>
                     </div>
                </div>
                <div class="price">
                    <div class="good">
                        <span>Good</span> <br>
                        <p>1,035 reviews</p>
                        <p><i class="fa-solid fa-indian-rupee-sign"> </i> <span>28,750</span></p>
                        <button type="button" class="btn btn-primary">Reserve</button>  
                    </div>
                </div>
            </div> 

            <div class="cards">
                <div class="resort">
                    <b>The Blue Gecko Thailand
                         <i class="fa-solid fa-star"></i> 
                         <i class="fa-solid fa-star"></i> 
                         <i class="fa-solid fa-star"></i> 
                         <i class="fa-solid fa-star"></i> 
                         <i class="fa-solid fa-star"></i> 
                    </b> <br>
                    <i class="fa-solid fa-location-dot"></i> <span>
                        Long Beach, Ko Lanta</span>
                        <div class="details">
                            <span><i class="fa-regular fa-calendar"></i> 10 days</span>
                            <span> <i class="fa-regular fa-user"></i> 40</span>
                         </div>
                </div>
                <div class="price">
                    
                    <div class="good">
                        <span>Good</span> <br>
                        <p>1,035 reviews</p>
                        <p><i class="fa-solid fa-indian-rupee-sign"> </i> <span>28,750</span></p>
                        <button type="button" class="btn btn-primary">Reserve</button>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>