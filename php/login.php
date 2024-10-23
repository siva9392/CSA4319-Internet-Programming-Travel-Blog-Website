<?php
$conn = mysqli_connect("localhost","root","","logo");
if(!$conn){
    echo "connection failed";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</h1>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .login-container a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
                
    <body>
        <form action="" method="post">
            <label for="name">name</label>
            <input type="text" id="name" name="name"><br>
            <label for="password">password</label>
            <input type="password" id="pass" name="pass"><br>
            <input type="submit" id="btn" value="submit">
        </form>
    </body>
</html>
<script>
    document.getElementById('btn').onclick=function(){
        onclick=documnet.loction=("homepage.html");
    }
    </script>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$user = $_POST["name"];
$pass = $_POST["pass"];

$sql = "INSERT INTO logo(name,pass) VALUE('$user','$pass')";
mysqli_query($conn,$sql);
mysqli_close($conn);
}

?>