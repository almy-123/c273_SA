<!--Alicia 19037610--> 
<?php
include 'dbFunctions.php';

$msg = "";

$username = $_POST['username'];
$password = $_POST['password'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$dob = $_POST['birthDate'];
$active = $_POST['activeLevel'];

$query = "INSERT INTO patients(username, password, height, weight, date_of_birth, active_level) 
          VALUES 
          ('$username', '$password', '$height','$weight',STR_TO_DATE('$dob', '%d/%m/%Y'),'$active')";
$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $msg = "Successfully Registered.";
} else {
    $msg = "Failed to Register. Please try again.";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <style>
            body{
                background-color: #f0dae1;
            }
        </style>
        <script type='text/javascript'>
            $(document).ready(function () {

                var msg = <?php echo json_encode($msg) ?>;
                var status = <?php echo json_encode($status) ?>;
                alert(msg);
                if (status) {
                    window.location.href = "login.php";
                } else {
                    window.location.href = "register.php";
                }
            });
        </script>
    </head>
    <body>
    </body>
</html>
<!--Alicia 19037610--> 