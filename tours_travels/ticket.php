<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="ticket.css">
	
	<title>Document</title>
</head>
<body>
<header>
    <div class="main-content">
        <div class="nav-div">
            <div class="nav">
                <a href="myedit.php" > Home </a>
                <a href="ticket_test.php" > Tour  </a>
                <a href="about.php" > About </a>
                <a href="contact.php"> Contact </a>
            </div>
        </div>
    </div>
</header>
	<h1 align="center"> Billing Details</h1><hr>
	<form action="ticket_code.php" method="post" >
		<table align="center" class="tbl">
			<tr>
				<td colspan="3"> <b>Personal Information</b></td>
			</tr>
			<tr><td>&nbsp;</td></tr>

			<tr> 
				<td colspan="2">  <label for="fname">First name:</label> </td>
				<td >  <label for="lname">Last name:</label>  </td>
				
			</tr>    
			<tr> 
				<td colspan="2"> <input type="text" id="fname" name="fname" class="txt" required> </td>
				<td> <input type="text" id="lname" name="lname" class="right" required> </td>
				
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
			
				<td> <input type="text" id="city" name="city" class="right" required> </td>
					
			</tr>
			
			<tr>
				<td> <label for="Stat"> State: </label></td>
				<td> <label for="Pcode"> PostCode</label></td>
				<td> <label for="Count"> Country </label></td>
			</tr>
			<tr> 
				<td><input type="text" name="state" id="Stat" class="txt2" required> </td>
				<td> <input type="text" id="Pcode" name="pcode" class="txt2"required> </td>
				<td> <input type="text" id="city" name="country" class="right"required> </td>

			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
			<td><input type="submit" name="submit" class="button"></input>	
			</tr>
		</table>
	</form>
</body>
</html>