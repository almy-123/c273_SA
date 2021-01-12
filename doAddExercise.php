<!--Alicia 19037610--> 
<?php
session_start();
include 'dbFunctions.php';

$id = $_SESSION['id'];

$type = $_POST['exerciseType'];
$duration = $_POST['duration'];

$query = "INSERT INTO exercise(user_id, type, duration) VALUES ('$id', '$type', '$duration')";

$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $msg = "Successfully Added New Exercise";
} else {
    $msg = "Failed to add Exercise. Please try again.";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery.min.js"></script>
        <style>
            body{
                background-color: #f0dae1;
            }
        </style>
        <script>
            $(document).ready(function () {
                var msg = <?php echo json_encode($msg) ?>;
                var status = <?php echo json_encode($status) ?>;
                alert(msg);

                if (status) {
                    window.location.href = "viewExercises.php";
                } else {
                    window.location.href = "addExercise.php";
                }
            });
        </script>
    </head>
    <body>
    </body>
</html>
<!--Alicia 19037610--> 