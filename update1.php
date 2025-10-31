
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
        height: 100px;
        width: 1335;
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
        <a href="register.php">Update registration  </a>
		<a href="download.php">Download vehicle details</a>
    </div>
</body>
    <div class="login-container">
	<center>
    <form action="process.php" method="post" >
        <h2><u><B>UPDATE REGISTRATION</B></u></h2>
        <h4><label for="registerNumber">Registeration No </h4></label>
        <input type="text" id="registerNumber" name="registerNumber"  placeholder="Enter Registrtion NO" required>
        <h4><label for="ownername">Owner Name</h4></label>
        <input type="text" id="ownerName" name="ownername"  placeholder="Enter ownername" required>
        <h4><label for="ownerAddress">Owner Address</h4></label>
        <input type="text" id="ownerAddress" name="ownerAddress"  placeholder="Enter ownerAddress" required><br><br>
        <input id="update" type="submit" name="update" style="border-color:green"VALUE="submit">
        </center>
		</form>
        </div>

</body>
<div class="footer">
				<p>A car or any other vehicle owner must have a valid vehicle registration to drive freely in the state.<br>Copyright © BCA 2023-24</br>
            </p>
                </div>                    

</footer>
</html>

