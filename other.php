<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        
/* Reset some default browser styles */
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
font-family: Arial, sans-serif;
background-color: #f0f0f0;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
margin: 0;
}

/* Center the login form on the screen */
.login-container {
background-color: #ffffff;
padding: 30px;
border-radius: 8px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
width: 100%;
max-width: 400px;
text-align: center;
}

/* Title style */
h2 {
margin-bottom: 20px;
color: #333;
}

/* Form group style */
.form-group {
margin-bottom: 15px;
text-align: left;
}

label {
display: block;
margin-bottom: 5px;
font-weight: bold;
color: #555;
}

input {
width: 100%;
padding: 10px;
border-radius: 5px;
border: 1px solid #ccc;
font-size: 16px;
}

input:focus {
outline: none;
border-color: #007bff;
}

/* Button style */
.login-btn {
width: 100%;
padding: 10px;
background-color: #007bff;
border: none;
color: #fff;
font-size: 16px;
border-radius: 5px;
cursor: pointer;
}

.login-btn:hover {
background-color:rgb(234, 8, 255);
}

/* Footer text style */
.form-footer {
margin-top: 20px;
font-size: 14px;
color: #666;
}

.form-footer a {
color: #007bff;
text-decoration: none;
}

.form-footer a:hover {
text-decoration: underline;
}


    </style>
   
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>