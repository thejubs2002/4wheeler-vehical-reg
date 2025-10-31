
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
        width: 1645;
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
            <a href="index.php">Home </a>
            <a href="about.php">About-us </a>
            <a href="register.php">Register </a>
            <a href="display.php">Display </a>
            <a href="update.php">Update-Registration </a>
			<a href="download.php">Download vehicle details</a>
        </div>
</body>
    <form action="process.php" method="post" ><br>
        <center><h1><u><label for="registerNumber">Registeration No </u></label><br><br>
        <input type="text" id="registerNumber" name="registerNumber"  placeholder="Enter Registrtion NO" required>
        <br><br>
        <button id="register" type="retrive" name="retrive" style="border-color:yellow">Check</button></h1></centre>
        </center>
        </form>
        
            
</body>

<div class="footer">
				<p>A car or any other vehicle owner must have a valid vehicle registration to drive freely in the state.<br>Copyright © BCA 2023-24</br>
            </p>
                </div>
</footer>
</html>


