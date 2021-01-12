<!--Alicia 19037610--> 
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/all.css">
        <script src="js/bootstrap.bundle.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $("#logout").click(function () {
                    window.location.href = 'doLogout.php';
                });
            });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand" href="home.php">
                <img src="images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                Yishun Community Hospital
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <?php if (isset($_SESSION['id'])) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                My Exercises
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="viewExercises.php">View</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="addExercise.php">Add</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Welcome <?php echo $_SESSION['username'] ?>!
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="viewDetails.php">Edit Personal Details</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" id="logout">Logout</a>
                            </div>
                        </li>

                    <?php } else { ?>
                        <li class="navbar-text" style="padding-right: 5">
                            Welcome guest!
                        </li>

                        <li class="navbar-btn">
                            <a href="login.php" class="btn btn-outline-warning my-2 my-sm-0 ml-1">Login / Register</a>
                        </li>

                    <?php } ?>
                </ul>
            </div>
        </nav>
    </body>
</html>
<!--Alicia 19037610--> 