<!--Alicia 19037610--> 
<?php
session_start();
include 'dbFunctions.php';

$msg = "";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT id, username, password FROM patients 
            WHERE username='" . $username . "' AND password = '" . $password . "'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
} else {
    $msg = "Sorry, you must enter a valid username and password to log in.";
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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
                
                if(msg!==""){
                    alert(msg);
                    window.location.href='login.php';
                }else{
                    alert("Successfully logged in.")
                    window.location.href='viewExercises.php';
                }
                
            });
        </script>
    </head>
    <body>
    </body>
</html>
<!--Alicia 19037610--> 