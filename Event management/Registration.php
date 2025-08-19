<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tantra Fiesta Registration</title>
    <style>
        body {
            background: linear-gradient(135deg, #232526, #414345);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            color: #fff;
        }

        .registration-container {
            background: rgba(0, 0, 0, 0.8);
            padding: 60px;
            border-radius: 25px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            width: 500px;
            animation: fadeIn 1s ease-in-out;
            border: 2px solid #555;
            margin: 20px auto;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .registration-container h1 {
            text-align: center;
            margin-bottom: 50px;
            color: #ffcc00;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        .form-group label {
            font-weight: 700;
            color: #eee;
            margin-bottom: 10px;
            display: block;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 16px;
            border: 2px solid #666;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            font-size: 18px;
            color: #fff;
        }

        .form-control:focus {
            border-color: #ffcc00;
            box-shadow: 0 0 0 0.25rem rgba(255, 204, 0, 0.25);
        }

        .btn-primary {
            background: linear-gradient(to right, #ffcc00, #ff9900);
            border: none;
            padding: 18px 35px;
            border-radius: 12px;
            font-weight: 800;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            font-size: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.6);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.7);
        }

        .alert {
            margin-top: 30px;
            border-radius: 12px;
            padding: 20px;
            font-size: 18px;
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid #777;
        }
        .navbar
        {
            background: linear-gradient(135deg,rgb(27, 86, 126), #6dd5fa);
            color: white; 
        }
        .navbar-nav .nav-item {
            margin: 0 15px;
        }

        .navbar-nav {
            margin: 0 auto;
        }

        .navbar-nav .nav-link { 
            color: white !important;
        }
        .navbar-brand{ 
            color: white !important;
        }

    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg"> <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="registration-container">
        <h1> Registration</h1>
        <form action="Registration.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register Now</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $servername = "localhost";
            $username = "XXXXXXXXX";
            $password_db = "XXXXXXXX";
            $database = "events";

            $conn = mysqli_connect($servername, $username, $password_db, $database);
            if (!$conn) {
                die('<div class="alert alert-danger">Sorry, we failed to connect: ' . mysqli_connect_error() . '</div>');
            } else {
                $sql = "INSERT INTO `events` (`Name`, `email`, `password`) VALUES ( '$name', '$email', '$password');";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo '<div class="alert alert-success"><strong>Success!</strong> Your registration has been successful!</div>';
                } else {
                    echo '<div class="alert alert-danger"><strong>Error!</strong> We are facing some technical issue and your registration was not submitted successfully! We regret the inconvenience caused!</div>';
                }
            }
            mysqli_close($conn); 
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>