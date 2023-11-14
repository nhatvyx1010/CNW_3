<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        .login-form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
        }
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group .buttons {
            text-align: center; 
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group input[type="submit"],
        .form-group input[type="reset"] {
            padding: 10px 20px;
            background-color: #32B6A1;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin: 0 10px; 
            display: inline-block; 
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Đăng nhập</h2>
        <form action="xuLy_Login.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="Username" name="Username" require>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" require>
            </div>
            <div class="form-group buttons">
                <input type="submit" value="OK">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>
