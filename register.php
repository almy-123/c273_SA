<!--Alicia 19037610--> 
<?php include 'navbar.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

                $("#id_dob").datepicker({
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
                            pattern: /^[0-9]{1,3}[.]{1}[0-9]{0,2}$/
                        },
                        weight: {
                            required: true,
                            pattern: /^[0-9]{1,3}[.]{1}[0-9]{0,2}$/
                        },
                        birthDate: {
                            required: true
                        },
                        activeLevel: {
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
                        birthDate: {
                            required: "Please enter your birth date"
                        },
                        activeLevel: {
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
            <form id= "registerForm" method="post" action="doRegister.php">
                <h2><u>Register Form</u></h2>
                <div class="form-group">
                    <label for="id_username">Username: </label>
                    <input type="text" name="username" id="id_username" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="id_password">Password: </label>
                    <input type="password" name="password" id="id_password" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_height">Height (m) : </label>
                    <input type="text" name="height" id="id_height" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_weight">Weight (kg) : </label>
                    <input type="text" name="weight" id="id_weight" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_dob">Date of Birth: </label>
                    <input type="text" name="birthDate" id="id_dob" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_activeLevel">Active Level: </label>
                    <select name="activeLevel" id="id_activeLevel" class="form-control">
                        <option value="" selected></option>
                        <option value="sedentary">Sedentary</option>
                        <option value="moderate">Moderate</option>
                        <option value="active">Active</option>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" value="Submit" />

                <br/><br/>
                <p>
                    Already have an account? <a href="login.php">Login here!</a>
                </p>
            </form>
        </div>
    </body>
</html>
<!--Alicia 19037610--> 