<!--Alicia 19037610--> 
<?php
include 'navbar.php';
include 'dbFunctions.php';

$id = $_SESSION['id'];

if (isset($_POST['username'])) {
    $new = $_POST['username'];
    $field_id = "username";
}
if (isset($_POST['password'])) {
    $new = $_POST['password'];
    $field_id = "password";
}
if (isset($_POST['height'])) {
    $new = $_POST['height'];
    $field_id = "height";
}
if (isset($_POST['weight'])) {
    $new = $_POST['weight'];
    $field_id = "weight";
}
if (isset($_POST['active_level'])) {
    $new = $_POST['active_level'];
    $field_id = "active_level";
}
if (isset($_POST['date_of_birth'])) {
    $new = $_POST['date_of_birth'];
    $field_id = "date_of_birth";
    $query = "UPDATE patients SET $field_id=STR_TO_DATE('$new', '%d/%m/%Y') WHERE id=$id";
} else {
    $query = "UPDATE patients SET $field_id='$new' WHERE id=$id";
}

$result = mysqli_query($link, $query) or die(mysqli_error($link));

if ($result) {
    $msg = "Details successfully updated";
} else {
    $msg = "Details not updated, Please try again";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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

                alert(msg);
                window.location.href = "viewDetails.php";
            });
        </script>
    </head>
    <body>
    </body>
</html>
<!--Alicia 19037610--> 