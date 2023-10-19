<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Formulario</title>
</head>
<body>
    <style>
        .cont {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 50px;
        }
        h1 {
            font-family: sans-serif;
            font-weight: bolder;
            font-size: 25px;
        }
        .cont form {
            width: 500px;
        }
        .cont form div {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
            margin-bottom: 20px;
        }
        .cont form div p {
            font-family: sans-serif;
        }
        .cont form div .input {
            outline: none;
            width: 50%;
            margin-top: -15px;
            height: 25px;
            border-radius: 5px;
            border-width: 2px;
            border-color: black;
            border-style: solid;
            font-size: 16px;
            padding-left: 10px;
            padding-right: 10px;
        }
        .cont form div .submit {
            width: 30%;
            padding: 10px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            box-shadow: 2px 2px 2px black;
            margin-top: 30px;
        }
    </style>
    <div class="cont">
        <h1>REGISTRO</h1>
        <div class="cont-form">
            <form action="data.php" method="post">
                <div>
                    <p>Usuario</p>
                    <input class="input" type="text" name="user">
                </div>
                <div>
                    <p>Correo</p>
                    <input class="input" type="text" name="email">
                </div>
                <div>
                    <p>Contraseña</p>
                    <input class="input" type="password" name="password">
                </div>
                <div>
                    <input class="submit" type="submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>