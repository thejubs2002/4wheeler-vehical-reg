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
        margin-top:550px;
        background-color:F9E795;
        height: 100px;
        width: 100%;
    }
   
    .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 50px); /* Adjusting height according to the navbar height */
            width: 100%;
            background-color:#F9E795;
        }
        
        .login-form {
            position:absolute;
            top:50%;
            left:35%;
            background-color:#F9E795;
            padding: 80px;
            border-radius: 5px;
            width: 300px;
        }
        .login-form h2 {
            margin-bottom: 20px;
        }
        .login-form .form-group {
            margin-bottom: 15px;
        }
        .login-form .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .login-form .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-form .form-group button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-form .form-group .submit-button {
            background-color: #4CAF50;
            color: white;
        }
        .login-form .form-group .cancel-button {
            background-color: #f44336;
            color: white;
            margin-left: 10px;
        }
    </style>

<body>
<header>
    <img src="images\logo.jpeg" width="200" height="100" style="border-radius:80%;">
        <h1 style="font-size:50px;font-family:timesnewroman;"color="la237e">Four Wheeler Registration</h1>
        
    </header>
    <body>
        <div class="navbar">
            <a href="index.php">Home </a>
            <a href="about.php">About-us </a>
            <a href="register.php">Register </a>
            <a href="display.php">Display </a>
            <a href="update.php">Update-Registration </a>
			<a href="download.php">Download vehicle details</a>
        </div>
        <body>

    <form class="login-form" action="admin.php" method="post" >
        <h2>Login</h2>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="submit-button">Submit</button>
            <button type="button" class="cancel-button" onclick="window.location.href='/'">Cancel</button>
        </div>
        
    </form>
    
</body>
<div class="footer">
				<p>A car or any other vehicle owner must have a valid vehicle registration to drive freely in the state.<br>Copyright © BCA 2023-24.</br>
            </p>
                </div>
    </footer>
</html>
