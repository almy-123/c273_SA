<!--Alicia 19037610--> 
<?php
include 'navbar.php';
include 'dbFunctions.php';

$id = $_SESSION['id'];

$query = "SELECT * FROM exercise WHERE user_id = $id";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)) {
    $arrItems[] = $row;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Exercises</title>
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
            <h1>My Exercises</h1>

            <?php if (isset($arrItems)) { ?>
                <table border="2" cellpadding="9">
                    <tr>
                        <th>Exercise Type</th>
                        <th>Duration</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($arrItems); $i++) {
                        $type = $arrItems[$i]['type'];
                        $duration = $arrItems[$i]['duration'];

                        $op1 = ($type == "walk") && ($duration >= 30);
                        $op2 = ($type == "run") && ($duration >= 10);
                        $op3 = ($type == "cycle") && ($duration >= 20);

                        if ($op1 || $op2 || $op3) {
                            ?>
                            <tr style="background-color: lightgreen">
                            <?php } else { ?>
                            <tr>
                            <?php } ?>
                            <td><?php echo $type ?></td>
                            <td><?php echo $duration ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<br/><h3>You have no exercises.</h3> <br/>";
                }
                ?>
            </table>
            <a href="addExercise.php" class="btn btn-primary my-2 ml-1">Add Exercise</a>

        </div>
    </body>
</html>
<!--Alicia 19037610--> 