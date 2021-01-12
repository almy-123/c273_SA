<!--Alicia 19037610--> 
<?php
include 'navbar.php';
include "dbFunctions.php";

$id = $_SESSION['id'];
$name = $_GET['name'];
$field_id = $_GET['field_id'];
$curr = "";

$query = "SELECT $field_id from patients WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);
if (!empty($row)) {
    $curr = $row[$field_id];
}

if ($field_id == "password") {
    $type = "password";
} else {
    $type = "text";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Details</title>
        <link rel="stylesheet" href="css/all.css">
        <script src="js/bootstrap.bundle.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <style>
            .container{
                background-color: #444;
                color: white;
                text-align: left;
                border-radius: 12px;
                padding: .8em .8em 1em;
                max-width:700px;
                margin:10 auto;
                box-shadow: 0px 0px 12px 0px #000;
            }
            body{
                background-color: #f0dae1;
            }
            form .error {
                color: #ff0000;
            }
        </style>
        <script>
            $(document).ready(function () {

                $("#date_of_birth").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    maxDate: "+0D",
                    yearRange: "-90:+00"
                });

                $("form").validate({
                    rules: {
                        username: {
                            required: true,
                            pattern: /^[\w\d]{3,}$/
                        },
                        password: {
                            required: true,
                            pattern: /^[\w\d\_]{8,}$/
                        },
                        height: {
                            required: true,
                            pattern: /^[0-9]{1,3}[.]{1}[0-9]{1,2}$/
                        },
                        weight: {
                            required: true,
                            pattern: /^[0-9]{1,3}[.]{1}[0-9]{0,2}$/
                        },
                        date_of_birth: {
                            required: true
                        },
                        active_level: {
                            required: true
                        }
                    },
                    messages: {
                        username: {
                            required: "Please enter username",
                            pattern: "Username must be at least 3 letters or digits without spaces"
                        },
                        password: {
                            required: "Please enter password",
                            pattern: "Password must be at least 8 characters, and consist of only lowercase letters, uppercase letters, and underscore"
                        },
                        height: {
                            required: "Please enter your height",
                            pattern: "Height should be in 1-2 decimal places"
                        },
                        weight: {
                            required: "Please enter your weight",
                            pattern: "Weight should be in 1-2 decimal places"
                        },
                        date_of_birth: {
                            required: "Please enter your birth date"
                        },
                        active_level: {
                            required: "Please select your active level"
                        }
                    },
                    submitHandler: function () {
                        return true;
                    }
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <?php if (!empty($row)) { ?>
                <form action="doEditDetails.php" method="post">
                    <h2><u>Edit Detail</u></h2>
                    <div class="form-group">
                        <p>Old <?php echo $name.": ".$curr ?><p>
                            <label for="<?php $field_id ?>"><?php echo "New ".$name.": " ?> </label>
                            <?php if ($field_id == "active_level") { ?>
                                <select name="<?php echo $field_id ?>" id="<?php echo $field_id ?>" class="form-control">
                                    <option value="" selected></option>
                                    <option value="sedentary">Sedentary</option>
                                    <option value="moderate">Moderate</option>
                                    <option value="active">Active</option>
                                </select>
                            <?php } else { ?>
                                <input type="<?php echo $type ?>" name="<?php echo $field_id ?>" id="<?php echo $field_id ?>" class="form-control"/>
                            <?php } ?>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit" />
                    <a href="viewDetails.php" class="btn btn-primary ml-2" role="button">Cancel</a>
                </form>
            <?php } ?>
        </div>
    </body>
</html>
<!--Alicia 19037610--> 