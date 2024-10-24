<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
    <style>
        /* Resetting */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #e0f7fa; /* Light blue background */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    padding: 10px; /* Add padding to ensure content doesn't touch the edges */
}

form {
    background-color: white;
    width: 100%;
    max-width: 400px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.imgcontainer {
    text-align: flex;
    margin-bottom: 20px;
}

img.user {
    border-radius: 50%;
    width: 100%; /* Make it responsive */
    max-width: 200px; /* Limit the size */
    height: auto; /* Maintain aspect ratio */
}

.container {
    padding: 16px;
    background-color: #e3f2fd; /* Lighter blue container */
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 16px; /* Increase padding for larger touch area */
    margin: 8px 0;
    display: inline-block;
    font-size: 1.1em; /* Increase font size for readability */
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button {
    background-color: #0288d1; /* Blue button */
    color: white;
    padding: 16px; /* Increase padding for larger touch area */
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-size: 1.1em; /* Larger font for button text */
    border-radius: 5px;
}

button:hover {
    background-color: #0277bd; /* Darker blue on hover */
}

.cancelbtn {
    background-color: #d32f2f; /* Red cancel button */
}

.psw {
    width: 100%;
    text-align: flex;
    margin-top: 20px;
}

.psw a {
    color: #0288d1; /* Blue link for "Forgot Password?" */
    font-size: 1em; /* Increase font size */
}

/* Media queries for responsiveness */
@media screen and (max-width: 600px) {
    form {
        padding: 20px; /* Add more padding for mobile */
    }

    input[type=text], input[type=password] {
        padding: 14px;
        font-size: 1.2em; /* Even larger font for mobile */
    }

    button {
        padding: 14px;
        font-size: 1.2em;
    }

    .imgcontainer {
        margin-bottom: 15px;
    }

    img.user {
        width: 150px;
        height: 150px;
    }
}

@media screen and (max-width: 400px) {
    form {
        padding: 15px;
    }

    button {
        padding: 12px;
        font-size: 1.1em;
    }

    input[type=text], input[type=password] {
        padding: 12px;
        font-size: 1.1em;
    }

    img.user {
        width: 120px;
        height: 120px;
    }
}


    </style>
</head>
<body>

<form action="validate.php" method="POST">
  <div class="imgcontainer">
    <img src="https://scontent.fcrk1-3.fna.fbcdn.net/v/t39.30808-6/448261162_3560387147606730_716484045518778392_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeE-pSsLa5kQQoF03Y_m8qPyV_n2mtgqkf9X-faa2CqR_0FW8BC4bHMY7BpJedCM3-7btBAI4DezSOahfCGBdyOl&_nc_ohc=7DdmxRhoU2YQ7kNvgGdM6mt&_nc_zt=23&_nc_ht=scontent.fcrk1-3.fna&_nc_gid=APATlYRV9JgA8hK2bGVV06y&oh=00_AYBRX-A0PYbVjBLHHPliMHwWRxjkLNWQDFVdQHociviWkQ&oe=671AEFEA" alt="User" class="user" width="200" height="200">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>


  </div>
</form>

</body>
</html>
