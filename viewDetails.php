<!--Alicia 19037610--> 
<?php
include 'navbar.php';
include 'dbFunctions.php';

$id = $_SESSION['id'];

$query = "SELECT username, password, height, weight, date_of_birth, active_level
    FROM patients 
    WHERE id = '$id'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    $username = $row['username'];
    $password = $row['password'];
    $height = $row['height'];
    $weight = $row['weight'];
    $dob = $row['date_of_birth'];
    $active = $row['active_level'];
} else {
    $msg = "There are no details to display.";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Details</title>
        <link rel="stylesheet" href="css/all.css">
        <script src="js/bootstrap.bundle.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <style>
            .container{
                text-align: center;
                border-radius: 12px;
                padding: .8em .8em 1em;
                max-width: 500px;
                margin:10 auto;
            }
            body{
                background-color: #f0dae1;
            }
            table{
                text-align: center;
                align-self: center;
                margin:15 auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>My Details</h1>

            <?php if (isset($row)) { ?>
                <table border="2" cellpadding="9">
                    <tr>
                        <th>Username:</th>
                        <td><?php echo $row['username']; ?></td>
                        <td><a href="editDetails.php?name=Username&field_id=username">edit</a></td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td><?php echo $row['password']; ?></td>
                        <td><a href="editDetails.php?name=Password&field_id=password">edit</a></td>
                    </tr>
                    <tr>
                        <th>Height:</th>
                        <td><?php echo $row['height']." metres"; ?></td>
                        <td><a href="editDetails.php?name=Height&field_id=height">edit</a></td>
                    </tr>
                    <tr>
                        <th>Weight:</th>
                        <td><?php echo $row['weight']." kg"; ?></td>
                        <td><a href="editDetails.php?name=Weight&field_id=weight">edit</a></td>
                    </tr>
                    <tr>
                        <th>Date of Birth:</th>
                        <td><?php echo $row['date_of_birth']; ?></td>
                        <td><a href="editDetails.php?name=Date of Birth&field_id=date_of_birth">edit</a></td>
                    </tr>
                    <tr>
                        <th>Active Level:</th>
                        <td><?php echo $row['active_level']; ?></td>
                        <td><a href="editDetails.php?name=Active Level&field_id=active_level">edit</a></td>
                    </tr>
                    <?php
                } else {
                    echo $msg;
                }
                ?>
            </table>
        </div>
    </body>
</html>
<!--Alicia 19037610--> 