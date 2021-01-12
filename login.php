<!--Alicia 19037610--> 
<?php include 'navbar.php'; ?>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/all.css">
        <script src="js/bootstrap.bundle.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <style>
            form .error {
                color: #ff0000;
            }
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
        </style>
        <script>
            $(document).ready(function () {
                $("#loginForm").validate({
                    rules: {
                        username: {
                            required: true
                        },
                        password: {
                            required: true
                        }
                    },
                    messages: {
                        username: {
                            required: "Please enter your username"
                        },
                        password: {
                            required: "Please enter your password"
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
            <form id="loginForm" method="post" action="doLogin.php">
                <h2><u>Login Form</u></h2>
                <div class="form-group">
                    <label for="id_username">Username: </label>
                    <input type="text" name="username" id="id_username" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="id_password">Password: </label>
                    <input type="password" name="password" id="id_password" class="form-control"/>
                </div>

                <input class="btn btn-primary" type="submit" value="Login" />

                <br/><br/>
                <p>
                    Don't have an account yet? <a href="register.php">Register now!</a>
                </p>
            </form>
        </div>
    </body>
</html>
<!--Alicia 19037610--> 