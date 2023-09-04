<!DOCTYPE html>
<html lang="en">

<head>
<?php include('partials/header.php');
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .error-message {
            color: red;
        }
    </style>
    <title>Contact Us</title>
</head>

<body>
    <div class="container">
        <h2>Contact Us</h2>
        <form id="contact-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
        <p class="error-message" id="error-message"></p>
    </div>

    <script>
        const form = document.getElementById('contact-form');
        const errorMessage = document.getElementById('error-message');

        form.addEventListener('submit', function (event) {
            const email = form.email.value;
            const message = form.message.value;

            if (!isValidEmail(email) || message.trim() === '') {
                event.preventDefault(); // Prevent form submission
                errorMessage.textContent = "Please provide valid email and message.";
            }
        });

        function isValidEmail(email) {
            // Basic email validation regex pattern
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }
    </script>
</body>

</html>