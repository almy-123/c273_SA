<!--Alicia 19037610--> 
<?php include 'navbar.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
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
                $("#id_duration").slider({
//                    value: 0,
                    min: 5,
                    max: 120,
                    step: 1,
                    slide: function (event, ui) {
                        $("#num").val(ui.value);
                    }
                });

                $("#num").val($("#id_duration").slider("value"));
                
                $("#exerciseForm").validate({
                    rules: {
                        exerciseType: {
                            required: true
                        }
                    },
                    messages: {
                        exerciseType: {
                            required: "Please select exercise type"
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
            <form id= "exerciseForm" method="post" action="doAddExercise.php">
                <h2><u>Add Exercise</u></h2>
                <div class="form-group">
                    <label for="id_exerciseType">Exercise Type: </label>
                    <select name="exerciseType" id="id_exerciseType" class="form-control">
                        <option value="" selected></option>
                        <option value="walk">Walk</option>
                        <option value="run">Run</option>
                        <option value="cycle">Cycle</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_duration">Duration: <input type="text" id="num" name="duration" readonly style="border:0; color:#f6931f; font-weight:bold; text-align:right" size="1"></label>
                    <div id="id_duration"></div>
                </div>
                <input class="btn btn-primary" type="submit" value="Submit" />
            </form>
        </div>
    </body>
</html>
<!--Alicia 19037610--> 