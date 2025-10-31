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
        padding: 5px;
        color: black;
        background-color:F9E795;
        height: 67px;
        width: 1600;
    }
	
        .login-container{
            border: 8px solid white;
            padding: 20px;
            width: 300px;
            margin-left:650px;
            margin-top:20px
        }
        .login-container h2 {
            margin-top: 0;
        }
        .login-container label {
            display: block;
            margin-bottom: 5px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 500%;
            padding: 180px;
            margin-bottom: 100px;
            border: 1px solid WHITE;
            border-radius: 100px;
        }
        .login-container button {
            padding: 10px 15px;
            margin-right: 10px;
            border:#white;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-container button[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }
        .login-container button[type="reset"] {
            background-color: #f44336;
            color: white;
        }
        .form-group {
            margin-bottom: 15px;
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
<div class="login-container" id="register" style="display:block;">
        <form action="process.php" method="post" >
            <h1>Register</h1>
            <div class="form-group">
            <label for="username">Ownername:</label>
            <input type="digit" id="ownername" name="ownername" required>
        </div>
        <div class="form-group">

            <label for="vehicleChainNumber">Vehicle Chassis No :</label>
            <input type="digit" id="vehicleChainNumber" name="vehicleChainNumber" required>
    </div>
    <div class="form-group">

            <label for="engineNumber">Engine No</label>
            <input type="digit" id="engineNumber" name="engineNumber" required>
    </div>
    <div class="form-group">

            <label for="phoneNumber">Phone No:</label>
            <input type="digit" id="phoneNumber" name="phoneNumber" required>
    </div>
    <div class="form-group">

            <label for="fuelType">Fuel Type</label>
            <select id="fuelType" name="fuelType" required>
                <option value="petrol">Petrol</option>
                <option value="diesel">Diesel</option>
                <option value="electric">Electric</option>
                <option value="hybrid">Hybrid</option>
            </select>
    </div>
    <div class="form-group">

            <label for="regdate">Date :</label>
            <input type="DATE" id="regdate" name="regdate" required >
    </div>
    <div class="form-group">
     
            <label for="company">Companies</label>
            <select id="company" name="company" required>
                    <option value="KIA">KIA</option>
                    <option value="DUSTER">DUSTER</option>
                    <option value="MAHINDRA">MAHINDRA</option>
                    <option value="HYUNDAI">HYUNDAI</option>
            </select>
    </div>
    <div class="form-group">

            <label for="registerNumber">Registeration No :</label>
            <input type="digit" id="registerNumber" name="registerNumber" required>
    </div>
    <div class="form-group">

            <label for="ownerAddress">Owner Address :</label>
            <input type="digit" id="ownerAddress" name="ownerAddress" required>
    </div>
    <div class="form-group">

            <label for="age">Age :</label>
            <input type="number" id="age" name="age" required><br><br>
    </div>
            <button id="register" type="submit" name="submite">Submit</button>
        </form>
    </div>
</body>
<footer>
<div class="footer">
				<p>A car or any other vehicle owner must have a valid vehicle registration to drive freely in the state.<br>Copyright © BCA 2023-24</br>
            </p>
                </div>
</footer>
</html>
