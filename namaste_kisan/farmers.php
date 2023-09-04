<!DOCTYPE html>
<html>

<head>
    <title>Farmer Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .container h2 {
            text-align: center;
        }

        .container label,
        .container input[type="text"],
        .container textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        .container textarea {
            height: 100px;
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
        <h2>Farmer Profile</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="age">Age:</label>
            <input type="text" id="age" name="age" required>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>

            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" required></textarea>

            <input type="submit" value="Save">
        </form>
    </div>
</body>

</html>