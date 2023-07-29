<?php
SESSION_START();

if (isset($_SESSION['auth']) && $_SESSION['auth'] === 1) {
    header("location: index.php");
    exit();
}

include "lib/connection.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $loginquery = "SELECT * FROM users WHERE email='$email' AND pass='$pass'";
    $loginres = $conn->query($loginquery);

    if ($loginres->num_rows > 0) {
        $result = $loginres->fetch_assoc();
        $username = $result['f_name'];
        $userid = $result['id'];

        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $userid;
        $_SESSION['auth'] = 1;
        header("location: index.php");
        exit();
    } else {
        $error_message = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>cse411 - Login</title>

    <!-- Link to the custom.css file -->
   
     <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body class="bg-gradient-primary">

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="col-lg-6 col-md-8">
                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                        </div>
                        <?php
                        if (isset($error_message)) {
                            echo '<div class="alert alert-danger">' . $error_message . '</div>';
                        }
                        ?>
                        <form class="user" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    aria-describedby="emailHelp" name="email" placeholder="Enter Email Address">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                    placeholder="Password" name="password">
                            </div>
                            <br>
                            <input class="btn btn-primary btn-user btn-block" type="submit" name="submit"
                                value="Login">
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="register.php">Create an Account!</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
