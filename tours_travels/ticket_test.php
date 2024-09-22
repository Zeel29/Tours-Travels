<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Resorts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="ticket_test.css">
	
</head>
<body>
<!-- <header> -->
    <div class="content">
        <div class="nav-div">
            <div class="logo">
                <img src="Tours___Travels_Logo-removebg-preview.png">
            </div>
            <div class="nav">
                <a href="myedit.php"><i class='bx bx-lock'></i> Home </a>
                <a href="ticket_test.php"> Tour  </a>
                <a href="about.php"> About </a>
                <a href="contact.php"> Contact </a>
            </div>
        </div>

        <div class="page">
            <div class="heaad"> 
                LUXURIOUS HOTELS IN THE CITY
               <div class="small">  
                 <div class="hr"> </div> Resorts & SPA  <div class="hr"></div>
               </div>
            </div>
        </div>
    </div>
<!-- </header> -->
    <div class="footers">
        <div class="foot">
            <div class="name">OUR PACKAGES !!! </div>
        </div>
        

            <?php
            $con = mysqli_connect('localhost', 'root', '', 'demo');
            $select = "SELECT * FROM `hotel`";
            $result = mysqli_query($con, $select);
            if ($result) {
            $n = mysqli_num_rows($result);
            if ($n >= 1) {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    echo"<div class='images'>";
                    echo"<div class='cards'>";
                    echo"<div class='resort'>";
                    echo"<b>".$row['place']."<b> - ".$row['days']." days<br>";
                    echo"<i class='fa-solid fa-star'></i> ";
                    echo"<i class='fa-solid fa-star'></i> ";
                    echo"<i class='fa-solid fa-star'></i> ";
                    echo"<i class='fa-solid fa-star'></i> ";
                    echo"<i class='fa-solid fa-star'></i> ";
                    echo"</b> <br>";
                    //echo"<i class='fa-solid fa-location-dot'></i> <span>Byrce Canyoy National Park,USA </span>";
                    echo"<div class='details'>";
                    echo"  <span><i class='fa-regular fa-calendar'></i> ".$row['days']." days</span>";
                    echo"  <span> <i class='fa-regular fa-user'></i> ".$row['person']."</span>";
                   
                    echo"  <span class='desc'> <b>Hotel Name: </b>".$row['hotel']."</span>";
                 
                    echo"<div class='hii'>";
                    echo"  <span class='desc'><b>Description:</b> <br>  ".$row['description']."</span>";

                    echo"<div class='hwllo'> <img src='Tours___Travels_Logo-removebg-preview.png' class='logo'> </div>";
                   
                    echo"</div>";
                    echo"</div>";

                    echo"</div>";
                    echo"<div class='good'>";
                    echo"<i class='fa-solid fa-indian-rupee-sign fa-2xl'> </i> <span>".$row['price']."</span><br>";
                
                    echo"</div>";
             
                echo"</div> ";
                echo"</div>";
                }
            } 
        }
                ?>
            
    </div>


	<h1 align="center" class="hh1"> Billing Details</h1><hr>
	<form action="ticket_code.php" method="POST" >
		<table align="center" class="tbl">
			<tr>
				<td colspan="3"> <b>Information</b></td>
			</tr>
			<tr><td>&nbsp;</td></tr>

			<tr> 
				<td colspan="2">  <label for="fname">Place:</label> </td>
				<td >  <label for="lname">User name:</label>  </td>
				<td colspan="2">  <label for="Check_in_date">Check in date:</label> </td>
			</tr>    
			<tr> 
				<td colspan="2">
                <?php
            $con = mysqli_connect('localhost', 'root', '', 'demo');
            $select = "SELECT * FROM `hotel`";
            $result = mysqli_query($con, $select);
            if ($result) {
            $n = mysqli_num_rows($result);
            if ($n >= 1) {
                echo"<select id='hotelName' name='fname' class='right1' required>";
                while ($row = mysqli_fetch_assoc($result)) 
                {
                
                    echo"<option>". $row['place']."</option>";
                
                }
                echo"</select>";
            } 
        }
                ?>
            </td>
				<td> <input type="text" id="lname" name="lname" class="right" required> </td>
				<td> <input type="date" id="lname" name="date" class="right" required> </td>
			</tr>
			 			
            <tr> 
				<td colspan="2"> <label for="mail"> Email Address: </label></td>
				<td colspan="2"> <label for="phone"> Phone Number: </label></td>
				
			</tr>
			<tr> 
				<td colspan="2"> <input type="email" id="mail" name="mail" class="txt" required> </td>
				<td colspan="2"> <input type="tel" max="10" id="phone" name="phone" class="right" required> </td>
				
			</tr>
			<tr><td>&nbsp;</td></tr>

			<tr> 
				<td colspan="3"> <b> Billing Address</b></td>
			</tr>
			<tr><td>&nbsp;</td></tr>

			<tr> 
				<td colspan="2">  <label for="SA">Street Address :</label> </td>
				
				<td>  <label for="city">City:</label>  </td>
				
			</tr>	
			<tr> 
				<td colspan="2"> <input type="text" id="SA" name="SA" class="txt" required> </td>
			
				<td> <input type="text" id="city" name="city" class="rightoo" required> </td>
					
			</tr>
			
			<tr>
				<td> <label for="Stat"> State: </label></td>
				<td> <label for="Pcode"> PostCode</label></td>
				<td> <label for="Count"> Country </label></td>
			</tr>
			<tr> 
				<td><input type="text" name="state" id="Stat" class="txt2" required> </td>
				<td> <input type="text" id="Pcode" name="pcode" class="txtf"required> </td>
				<td> <input type="text" id="city" name="country" class="rightoo"required> </td>

			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
			<td><input type="submit" name="submit"  class="btn btn-primary"></input>
			</tr>
		</table>
	</form>



 
</body>
</html>
