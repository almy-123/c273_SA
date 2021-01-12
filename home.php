<!--Alicia 19037610--> 
<?php include 'navbar.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <script src="js/bootstrap.bundle.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <style>
            body{
                background-color: #f0dae1;
            }
            .container{
                padding: 20px;
            }
            .carousel-inner{
                width:100%;
                max-height: 350px;
            }
            .carousel-caption{
                text-align: center;
            }
            .carousel-indicators li {
                background-color: #669966;
            }
            .carousel-indicators .active {
                background-color: blue;
            }
            .d-block{
                height: 370px;
            }
        </style>
    </head>
    <body>

        <div class="box text-center mt-1">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!--Indicators--> 
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!--Wrapper for slides--> 
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/yishunHospital.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/wardImage.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/yishunHospital1.jpg">
                    </div>
                </div>
                <!--Left and right controls--> 
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <div class="container">
                <h4>About Us</h4>
                <p>Yishun Community Hospital is one of Singapore's largest community 
                    hospitals to provide intermediate care for recuperating patients 
                    who do not require the intensive services of an acute-care hospital. 
                    Situated beside Khoo Teck Puat Hospital, the two hospitals bring about 
                    an integrated care experience for patients, through a network of 
                    healthcare teams, information flow and treatment plans.</p>
            </div>
        </div>
    </body>
</html>
<!--Alicia 19037610--> 