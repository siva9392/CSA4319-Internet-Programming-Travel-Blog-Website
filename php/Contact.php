<?php
$conn=mysqli_connect("localhost","root","","login");
if(!$conn){
    echo "connection failed";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <style>
#contact {
    padding: 100px;
    text-align: center;
}

#contact form {
    max-width: 600px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
}

#contact form input, #contact form textarea {
    padding: 15px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#contact form button {
    padding: 15px;
    background-color: #0288d1;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
button:hover{
    background-color:aqua;
}
body{
    background-color:aquamarine;
}
</style>

</head>
<body>

    <section id="contact">
        <h1>Contact Me</h1>
        <p>If you have any questions, comments, or want to collaborate, feel free to reach out using the form below!</p>

        <form action="" method="post">
            <input type="text" name="name" placeholder="Your Name" id="name"  required>
            <input type="email" name="email" placeholder="Your Email" id="email" required>
            <textarea name="msg" placeholder="Your Message" id="msg"  required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];
    
    $sql = "INSERT INTO login(name,email,msg) VALUE('$name','$email','$msg')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    }
?>
