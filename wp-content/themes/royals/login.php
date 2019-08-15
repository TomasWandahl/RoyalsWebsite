<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <style>
    .login_section {
        display: flex;
    }
    .login_box {
        background-color: rgb(25,84,166);
        color: #fff;
        width: 40%;
        display: block;
        margin: 0 auto;
        padding: 20px;
        position: absolute;
        top: 30%;
        transform: translateY(-50%);
        left: 50%;
        transform: translateX(-50%);
    }
    .login_box input {
        margin: 10px;
    }
    .login_box form {
        text-align: center;
    }
    @media only screen and (max-width: 750px) {
        .login_box {
            width: 90% !important;
        }
    }
    </style>
    <div class="login_section">
        <div class="login_box">
            <form action="admin.php" method="POST">
                Username
                <br>
                <input type="text" name="username">
                <br>
                Password
                <br>
                <input type="password" name="password">
                <br>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>


</body>
</html>
