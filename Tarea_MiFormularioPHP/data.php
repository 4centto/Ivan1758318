<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
    <style>
        .cont {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 100px;
        }
        .cont-data {
            padding: 50px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 2px 2px 2px black;
        }
        .cont-data h2 {
            font-family: sans-serif;
            font-size: 20px;
        }
    </style>
    <div class="cont">
        <div class="cont-data">
            <?php
                $user = $_POST["user"];
                $email = $_POST["email"];
                $pass = $_POST["password"];
                
                echo "<h2>Nombre de usuario: ", "$user</h1>";
                echo "<h2>Email: ", "$email</h2>";
                echo "<h2>Password: ", "$pass</h2>";
            ?>
        </div>
    </div>
</body>
</html>