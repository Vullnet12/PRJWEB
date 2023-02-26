<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Mik Mik transport</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        * {
margin:0px;
padding: 0px;
box-sizing: border-box;    
}
body{
    font-family: "Roboto",sans-serif;
    background-color: orange;
}
.tab-form{
    border-radius: 10px;
    position:absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 95%;
    max-width: 400px;
    background: #fff;
    box-shadow: 0px 2px 5px 2px rgba(0,0,0,0.00);
}
.tab-form .tab-header{
    display: flex;
    justify-content: space-between;
    padding: 20px;
}
.tab-form .tab-header > div {
    flex: 1;
    padding: 15px;
    text-align: center;
    color: #555;
    cursor: pointer;
}
.tab-form .tab-header > div.active{
    border: 1px solid #4a9ff3;
    color: #4a9ff3;
    background: #e9f4ff;
}
.tab-form .tab-body{
    position: relative;
    min-height: 360px;
    overflow: hidden;
} 
.tab-form .tab-body > div{
    position: absolute;
    width: 100%;
    top: -150vh;
    opacity: 0;
    padding: 5px 25px;
    transition: opacity 300ms ease-in-out 0ms;
}
.tab-form .tab-body > div.active{
    top:0px;
    opacity: 1;
    transition: opacity 300ms ease-in-out 0ms;
}
.tab-form .tab-body > div h2{
    font-size: 25px;
    color: #222;
    text-align: center;
    margin-bottom: 20px;
}
.tab-form .tab-body > div .form-input {
    margin: 10px 0px;
}
.tab-form .tab-body > div .form-input label{
    display: block;
    font-size: 15px;
}
.tab-form .tab-body > div .form-input input{
    width: 100%;
    margin-top: 5px;
    font-size: 15px;
    padding: 8px;
}
.tab-form .tab-body > div .form-input button{
    width: 100%;
    margin-top: 10px;
    padding: 10px;
    font-size: 15px;
    border: none;
    outline: none;
    cursor: pointer;
    background: #4a9ff3;
    color: #f5f5f5;
    font-weight: 600;
}
.button{
    border: #1e90ff solid 1px;
    font-family: "Roboto"sans-serif;
    font-size: 15px;
    font-weight: bold;
    background: #1e90ff;
    width: 110px;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0,0,0, 0.1);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: box-shadow, transform;
    transition-property: box-shadow, transform;
}
.button:hover, .button:focus, button:active{
    box-shadow:  0 0 20px rgba(0, 0, 0, 0.5);
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
          
    </style>
</head>
<body>
<section class="index-login-signup">
    <div class="wrapper">
        <div class="index-login-signup">
            <h4>SIGN UP</h4>
            <p> Don't have an account yet? Sign up here! </p>
            <form action="includes/signupmik.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pw" placeholder="Password">
                <input type="password" name="pwrepeat" placeholder="Repeat Password">
                <input type="text" name="email" placeholder="E-mail">
                <br>
                <button type="submit" name="submit"> SIGN UP </button>
</form>
</div>
<div class="index-login-login">
    <h4>LOGIN</h4>
    <p>Don't have an account yet? Sign up here! </p>
    <form action="includes/loginmik.php" method="post">
        <input type= "text" name="uid" placeholder="Username">
        <input type="password" name="pw" placeholder="Password">
        <br>
        <button type="submit" name="submit"> LOGIN </button>
</form>
</div>
</section>
    
   
    
    
    <script src="js/login.js"></script>
</body>
</html>