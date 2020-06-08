<?php

//require "class/db_controller.php";
require "class/user_controller.php";

if (isset($_POST["submit"])) {
    //valdiation
    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $pass    = $_POST["password"];
    $re_pass = $_POST["re_pass"];
    //check existing user
    $user = new User($email);
    if ($user->existing_user($email)) {
        //show error
        echo "User already existed";
    } else {
        //create new user
        $user->create_new_user($name, $pass);
        echo " User Created!!";

    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Management App</title>
    <!-- BootStrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

    <!-- main style sheet -->
    <link rel="stylesheet" href="./assets/css/style.min.css" />
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <div class="col-md-6 m-auto" id="wrapper">
                <div class="card shadow p-3" id="form_wrapper">
                    <h2 class="text-center mb-3">Register</h2>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" id="input_name" class="form-control" placeholder="Full Name"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="input_email" class="form-control"
                                placeholder="Your Email Address" required />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="input_pass" class="form-control"
                                placeholder="Password" required />
                            <small class="text-muted">Password must be at least 8 charechters long</small>
                        </div>
                        <div class="form-group">
                            <input type="password" name="re_pass" id="input_re_pass" placeholder="Retype your password"
                                class="form-control" required />
                        </div>
                        <button class="btn btn-primary" name="submit">Signup</button>
                        <hr />
                        <a href="index.php"><small>Already have an account? Login Here..</small></a>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- bootstrap js     -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>