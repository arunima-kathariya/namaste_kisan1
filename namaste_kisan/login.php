<!DOCTYPE html>
<html lang="en">
<head>
<?php include('partials/header.php');
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .container h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form id="login-form" action="" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
            <div class="error-message" id="error-message"></div>
        </form>
    </div>

    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var errorMessage = document.getElementById("error-message");

            // Basic validation - check if fields are not empty
            if (username === "" || password === "") {
                errorMessage.textContent = "Both fields are required.";
                return false;
            }

            // You can add more advanced validation here, like checking the format of the username and password.
            // For a production application, you should also implement server-side validation and authentication.

            errorMessage.textContent = ""; // Clear any previous error messages
            return true;
        }
    </script>
</body>
</html>
