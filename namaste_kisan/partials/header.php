<?php
    include('config/connection.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NAMESTE KISAN</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .background-image {
            background-image: url('photos/shelley-pauls-kuR1Kwo4my4-unsplash-1024x706.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
        }
    </style>
</head>

<body>
    <header>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Namaste Kisan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="farmer_registration_form.php">Farmer
                                Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="product_list.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contactus.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.php">login</a>
                        </li>



                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
       
