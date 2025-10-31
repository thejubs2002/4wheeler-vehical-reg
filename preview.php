<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        
        .header{
            text-align:center;
            border: 2px solid black;
            padding:15px;
            margin-left: 125px;
            margin-right:125px;
            margin-top:15px;
            margin-bottom:15px;
            
        }
        table td {
            align : center;
            margin-left:180px;
            padding:5px;
        }
        .btn{
            margin-left:50px ;
            width: 100%;
            height: 35px;
            background-color: #303f9f;
            border: 2PX SOLID RED;
            outline: 2PX SOLID RED;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            color: white;
            font-weight: 600;
        }
    </style>
    <title>preview</title>
</head>
<body>
    <div class="header">
    <?php
        echo "KA-03-HA-2003" . $registerNumber=$_GET['id'] ;
        $conn=new mysqli('localhost','root','','four');
        $checkreg="SELECT * FROM register WHERE registerNumber='$registerNumber'";
        $result=$conn->query($checkreg);
        if($result -> num_rows > 0)
        {
           while($row=mysqli_fetch_array($result))
            {
    ?>
            <h1 color="blue">Four Wheeler Vehical Registration</h1>
            <p>BH ROAD TUMAKURU VIDYANAGAR 572226   <br> phone: 1234567890  gmail : rto@gmail.com</p>
                <br>
           <strong> <?php echo "registerNumber :".$registerNumber?></strong>
           <br><hr><br>
           
           <table CELLSPACING="25" CELLPADING="15">
            <tr>
                <td><B>OWNERNAME</td><td>:</td>
                <td><?php echo $row['ownername'];?></td>
            </tr>
            <tr>
                <td><B>AGE</td><td>:</td>
                <td><?php echo $row['age'];?></td>
            </tr>
            <tr>
                <td><B>REG-DATE</td><td>:</td>
                <td><?php echo $row['regdate'];?></td>
            </tr>
            <tr>
                <td><B>OWNER ADDRESS</td><td>:</td>
                <td><?php echo $row['ownerAddress'];?></td>
            </tr>
            <tr>
                <td><B>PHONE NUMBER</td><td>:</td>
                <td><?php echo $row['phoneNumber'];?></td>
            </tr>
            <tr>
                <td><B>COMPANY</td><td>:</td>
                <td><?php echo $row['company'];?></td>
            </tr>
            <tr>
                <td><B>VEHICLE CHARSIS NUMBER</td><td>:</td>
                <td><?php echo $row['vehicleChainNumber'];?></td>
            </tr>
            <tr>
                <td><B>ENGINE NUMBER</td><td>:</td>
                <td><?php echo $row['engineNumber'];?></td>
            </tr>
            <tr>
                <td><B>FUEL TYPE</td><td>:</td>
                <td><?php echo $row['fuelType'];?></td>
            </tr>
            <tr>
                <br>
                <!-- <td></td> -->
                <td><input type="button" value="BACK" class="btn" onclick="history.back()"/> </td>
                <td></td>
                <!-- <td><input class="btn"type="submit" value="confirm" ></td> -->
            </tr>
           </table>
       <?php
            }
        }
    ?>
    </div>
    </body>
    <div class="footer">
				<p>A car or any other vehicle owner must have a valid vehicle registration to drive freely in the state.<br>Copyright © BCA 2023-24</br>
            </p>
                </div>
    </footer>
    

</html>