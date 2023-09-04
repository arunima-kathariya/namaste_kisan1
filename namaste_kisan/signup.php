<!DOCTYPE html>
<html>

<head>
    <title>Sign Up Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .container h2 {
            text-align: center;
        }

        .container label,
        .container input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        .container input[type="submit"] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>

</html>