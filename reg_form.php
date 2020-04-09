<html>
<head>
<title>Login Form Design</title>
<style>
    body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-color:white;
}

.loginbox{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    width: 35%;
    height: 50%;
    background-color:white;
    color:grey;
    top: 15%;
    left: 32%;
    box-sizing: border-box;
    padding: 30px 30px;
    position: relative;
  margin-bottom: 20vh;
  border-radius: 3px;
}
.loginbox:hover{
  opacity: 1;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}
::placeholder{
  color:grey;
}

.loginbox input[type="text"]{
  margin-top:15px;
}
.loginbox input[type="number"]{
  margin-top:15px;
}
.loginbox input[type="email"]{
  margin-top:15px;
}
.loginbox input[type="text"], input[type="password"],input[type="number"],input[type="email"]
{
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    height: 40px;
    color: grey;
    font-size: 16px;
    padding:10px;
    border-radius:3px;
    border: 1px solid grey;
}
.loginbox input[type="password"]{
  margin-top: 15px;
}
.loginbox input[type="text"]:hover, input[type="password"]:hover,input[type="number"]:hover,input[type="email"]:hover
{
box-shadow:2px 2px 5px  grey;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background:dodgerblue;
    color: white;
    font-size: 18px;
    border-radius: 20px;
    text-align: center;
    border:1px solid dodgerblue;
    margin-bottom: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background:white;
    color:grey;
    
    
}


</style>
</head>
    <body>
    
    <div class="loginbox">
    
        <h1>Registration Form</h1>
        <form  method="POST"   name="form" action="" >
            
            <input type="text" placeholder="Name" name="n1" required>

            <input type="email" placeholder="Email" name="n2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

            <input type="submit" name="submit" value="Create account">
            </form>
          
        
    </div>
</body>
</head>
</html>
 
 <?php

$name=filter_input(INPUT_POST,'n1');
$submit=filter_input(INPUT_POST,'submit');
$Email=filter_input(INPUT_POST,'n2');


if(!empty($submit)){
session_start();
$_SESSION["name"]=$name;
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="data";
$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
        
    $sql1="INSERT INTO users (name,email) values('$name','$Email')";
        mysqli_query($conn,$sql1);
        
  echo"<script>alert('your data  has been saved')</script>";
  echo "<script> window.location = 'reg2.php'</script>";
            exit();

}