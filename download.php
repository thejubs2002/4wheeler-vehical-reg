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
        padding: 20px;
        color: black;
        background-color:F9E795;
        height: 100px;
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

<form method="POST">
        <center><br><br><br>
            <input type="text" name="registerNumber" placeholder="Enter The RegisterNumber" class="input" required>
            <br><br>
            <input type="submit" value="submit" class="btn"><br><br><br>

        </form>

        
        <?php
        //$reg_no="";
           if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $registerNumber=$_POST['registerNumber'];
                // echo "$reg_no";
            
        ?>
        <div class=".container">
                    <h1><u>Registered Customer</u></h1><br>

                <table border="20" CELLSPACING ="2" CELLPADING ="2">
				
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
						<th>Download Details</th>
                    </tr>
					
                    <!-- Accessing data from table registration -->
                    <?php
                        $conn=new mysqli('localhost','root','','four');
                        $checkreg="SELECT * FROM register WHERE registerNumber='$registerNumber'";
                        $result=$conn->query($checkreg);
                    //if start to check data is exists or not
                    if($result->num_rows != 0)
                    {

                            //while for geting from data base and storing on array 
                            while($row=mysqli_fetch_array($result))
                            {
                    ?>   
                    
                        <tr>
                       <td><?php echo $row['ownername'];?></td>
                            <td><?php echo $row['vehicleChainNumber'];?></td>
                            <td><?php echo $row['engineNumber'];?></td>
                            <td><?php echo $row['phoneNumber'];?></td>
                            <td><?php echo $row['fuelType'];?></td>
                            <td><?php echo $row['regdate'];?></td>
                            <td><?php echo $row['company'];?></td>
                            <td><?php echo $row['registerNumber'];?></td>
                            <td><?php echo $row['ownerAddress'];?></td>
                            <td><?php echo $row['age'];?></td>
							
							<td><?php $registerNumber= $row['registerNumber']; echo "<a href= 'preview.php?id=$registerNumber'> Download </a>"?></td>
                        </tr>
                    </table>
                    <div class='button'><center><a href='register.php'><b> BACK </b></a></center></div>
                    </center>;     
                       
                        <?php
                            }
                            //end while
                            $registerNumber="";
                    }
                    // end if 
                    else
                    { 
                        ?>
                        <tr>
                            <td colspan="14"><center><?php echo "no data found "; ?> </center></td>
                           
                        </tr>
                   <?php
                    }
            }
                    ?>
                </table> 
        </body>
           
                
</html>