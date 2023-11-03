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
        <form action="#" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group buttons">
                <input type="submit" value="OK">
                <input type="reset" value="Reset">
            </div>
            <div class="error-message" id="error-message"></div>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector("form");
            const errorMessage = document.querySelector("#error-message");

            form.addEventListener("submit", function (event) {
                event.preventDefault();

                // Lấy giá trị của tên người dùng và mật khẩu từ các trường input
                const username = document.querySelector("#username").value;
                const password = document.querySelector("#password").value;

                // Kiểm tra xem username và password có được nhập không và hiển thị thông báo lỗi tương ứng
                if (!username && !password) {
                    errorMessage.textContent = "Vui lòng nhập username và password.";
                } else if (!username) {
                    errorMessage.textContent = "Vui lòng nhập username.";
                } else if (!password) {
                    errorMessage.textContent = "Vui lòng nhập password.";
                } else {
                    // Kiểm tra điều kiện đăng nhập ở đây (ví dụ: kiểm tra xem username và password có phù hợp hay không)
                    if (username === "admin" && password === "password") {
                        // Đăng nhập thành công, bạn có thể chuyển hướng hoặc thực hiện các hành động khác ở đây
                        alert("Đăng nhập thành công!");
                    } else {
                        // Đăng nhập thất bại, hiển thị thông báo lỗi
                        // errorMessage.textContent = "Tên người dùng hoặc mật khẩu không đúng. Vui lòng thử lại.";
                    }
                }
            });
        });
    </script>
</body>
</html>
