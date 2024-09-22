<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Tour_details.php" method="POST">
        <table>
            <tr>
                <td>
                    Order Number:
                </td>
                <td>
                    <input type="date" name="date"/>
                </td>
            </tr>
            <tr>
                <td>
                    Total:
                </td>
                <td>
                    <input type="text" inputmode="numeric" pattern="[0-9]*" name="total" placeholder="Enter numbers only">
                </td>
            </tr>
            <tr>
                <td>
                    Paymenet Method:
                </td>
                <td>
                    <input type="radio" value="Online Payment"name="ab">Online paymenet</input>
                    <input type="radio" value="Cash" name="ab">Cash</input>
                    <input type="radio" value="Card" name="ab">Card</input>
                    <input type="radio" value="Upi" name="ab">Upi</input>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name=""submit"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php

    $d=$_POST['date'];
    $t=$_POST['total'];
    $p=$_POST['ab'];
    echo $d."<br>".$t."<br>".$p;

?>