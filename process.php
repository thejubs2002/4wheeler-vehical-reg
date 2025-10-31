<html>
<head>
    <title>Four Wheeler Registration</title>
</head>
<style>

    header {
        background-color:F9E795;
        padding: 10px;
        text-align: center;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(-135deg, #c850c0, #4158d0);
    }

    #logo {
        border-radius: 50%;
    }

    .navbar {
        display: flex;
        background-color: black;
        overflow: hidden;
    }

    .navbar a {
        flex: 1;
        padding: 14px 20px;
        text-decoration: none;
        text-align: center;
        color: white;
        font-size: 17px;
    }

    .navbar a:hover {
        background-color: #e0f7fa;
        color: black;
    }

    .footer {
        text-align: center;
        padding: 3px;
        color: black;
        background-color:F9E795;
        height: 67px;
        width: 1313;
    }


    /* dashboard */

    .container {
        width: 100px;
        height: 10px;
        border: 10px;
        border-color: red;
    }
</style>

<body>
<header>
    <img src="images\logo.jpeg" width="200" height="100" style="border-radius:80%;">
        <h1 style="font-size:50px;font-family:timesnewroman;"color="la237e">Four Wheeler Registration</h1>
        
    </header>

    <div class="navbar">
        <a href="index.php">Home  </a>
        <a href="about.php">About us  </a>
        <a href="register.php">Register  </a>
        <a href="display.php">Display  </a>
        <a href="update.php">Update registration  </a>
		<a href="download.php">Download vehicle details</a>
    </div>
</body>
    <?php
    $conn=new mysqli('localhost','root','','four');
    // if($conn->$connect_error){
    //     echo"failed to connect database"; 
    // }

    if (isset($_POST['submite'])){
        $ownername=$_POST['ownername'];
        $vehicleChainNumber=$_POST['vehicleChainNumber'];
        $engineNumber=$_POST['engineNumber'];
        $phoneNumber=$_POST['phoneNumber'];
        $fuelType=$_POST['fuelType'];
        $regdate=$_POST['regdate'];
        $company=$_POST['company'];
        $registerNumber=$_POST['registerNumber'];
        $ownerAddress=$_POST['ownerAddress'];
        $age=$_POST['age'];
    
        $checkreg="SELECT * FROM register WHERE registerNumber='$registerNumber'";
        $result=$conn->query($checkreg);

        if($result->num_rows>0){
            echo"<center><h1>ALREADY VEHICLE REGISTER</h1></center>";
            echo "<script> alert('already vehicale register')</script>
             <div class='button'><center><a href='register.php'><b> BACK </b></a></center>
             </div>";
        }
        else{
            $ins="INSERT INTO register(ownername,vehicleChainNumber,engineNumber,phoneNumber,fuelType,regdate,company,registerNumber,ownerAddress,age)
            VALUES('$ownername','$vehicleChainNumber','$engineNumber','$phoneNumber','$fuelType','$regdate','$company','$registerNumber','$ownerAddress','$age') ";

            if($res=$conn->query($ins)==TRUE){
                echo"<center><h1>REGISTER SUCCESSFULLY</h1></center>";
                echo "<script> alert(' vehicale register')</script>
                <div class='button'><center><a href='register.php'><b> BACK </b></a></center>
             </div>";
            }
        
        }
    }


    if(isset($_POST['retrive'])){ 
        $registerNumber=$_POST['registerNumber'];

        $checkreg="SELECT * FROM register WHERE registerNumber='$registerNumber'";
        $result=$conn->query($checkreg);    
        $row=$result->fetch_assoc();


        if($result->num_rows>0){
            // print_r($row);
            echo"<center>
                <h3> Retrived Information</h3>
                <table border='5px solid black'>
                    <tr>
                        <th>Owner Name</th>
                        <th>Vehicle Chassis No</th>
                        <th>Engine NO</th>   
                        <th>Phone NO</th>
                        <th>Fuel type</th>
                        <th>Registration Date</th>
                        <th>Company</th>
                        <th>Registraion NO</th>
                        <th>Owner Address</th>
                        <th>Age</th>
                    </tr>
                    
                    <tr>
                        <th>$row[ownername]</th>
                        <th>$row[vehicleChainNumber]</th>
                        <th>$row[engineNumber]</th>
                        <th>$row[phoneNumber]</th>
                        <th>$row[fuelType]</th>
                        <th>$row[regdate]</th>
                        <th>$row[company]</th>
                        <th>$row[registerNumber]</th>
                        <th>$row[ownerAddress]</th>
                        <th>$row[age]</th>
                </table>
                <div class='button'><center><a href='register.php'><b> BACK </b></a></center>
                </div>
                </center>";
        } 
        else{
            echo"<center><h1>vehicle not registered</h1></center> 
            <div class='button'><center><a href='display.php'><h4><b>  << BACK   </h4></b></a></center>
             </div>";
        }   


    }
     
    if (isset($_POST["update"])) {
        $ownername = $_POST['ownername'];
        $registerNumber = $_POST['registerNumber'];
        $ownerAddress = $_POST['ownerAddress'];

        $checkreg = "SELECT * FROM register WHERE registerNumber='$registerNumber'";
        $result = $conn->query($checkreg);

        if ($result->num_rows == 0) {
            echo "<center><h1> VEHICLE NOT REGISTERED </h1></center>";
            echo "<script> alert('Vehicle NOT registered')</script>";
            echo "<div class='button'><center><a href='register.php'><b> BACK </b></a></center></div>";
        } else {
            $sql = "UPDATE register SET ownername='$ownername', ownerAddress='$ownerAddress' WHERE registerNumber='$registerNumber'";
            if ($conn->query($sql) === TRUE) {
                // Fetch the updated data
                $result = $conn->query($checkreg);
                $row = $result->fetch_assoc();

                echo "<center>
                    <h3> CHECK THE UPDATED INFORMATION BELOW</h3>
                    <table border='5px solid black'>
                        <tr>
                            <th>Owner Name</th>
                            <th>Vehicle Chassis No</th>
                            <th>Engine NO</th>   
                            <th>Phone NO</th>
                            <th>Fuel type</th>
                            <th>Registration Date</th>
                            <th>Company</th>
                            <th>Registration NO</th>
                            <th>Owner Address</th>
                            <th>Age</th>
                        </tr>
                        <tr>
                            <td>{$row['ownername']}</td>
                            <td>{$row['vehicleChainNumber']}</td>
                            <td>{$row['engineNumber']}</td>
                            <td>{$row['phoneNumber']}</td>
                            <td>{$row['fuelType']}</td>
                            <td>{$row['regdate']}</td>
                            <td>{$row['company']}</td>
                            <td>{$row['registerNumber']}</td>
                            <td>{$row['ownerAddress']}</td>
                            <td>{$row['age']}</td>
                        </tr>
                    </table>
                    <div class='button'><center><a href='register.php'><b> BACK </b></a></center></div>
                    </center>";
            } else {
                echo "<center><h1> Update Failed </h1></center>";
            }
        }
    }
?>   
</body>
<div class="footer">
				<p>A car or any other vehicle owner must have a valid vehicle registration to drive freely in the state.<br>Copyright © BCA 2023-24</br>
            </p>
 </div>
</footer>

</html> 

