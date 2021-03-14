<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Mi plantilla</title>
        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <!-- Optional Bootstrap Theme -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="estilo.css" media="screen">
    </head>
    <body>
        <div class="container">
            <!-- Insert/Drop Grid Row codes below -->
            <div class="row">
                <!-- Insert/Drop Grid Column codes below-->
                <div class="col-xs-12">
                    <!-- Fixed navbar -->
                    <nav class="navbarr">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">KATTIA</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="dropdown-header">Nav header</li>
                                            <li><a href="#">Separated link</a></li>
                                            <li><a href="#">One more separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
            <div class="row">
                <!-- Insert/Drop Grid Column codes below-->
                <div class="col-xs-12">
                    <div id="carousel-1" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="https://cdn.britannica.com/92/191792-050-E1931160/Magazines-display-magazines-Canada-store-Toronto-Ontario.jpg" alt="Carousel Image">
                                <div class="carousel-caption">
                                    <h3>Caption Heading</h3>
                                    <p>Caption Body goes here</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="https://www.pressgazette.co.uk/wp-content/uploads/2020/06/Simply-You-and-Planet-Rock-scaled.jpg" alt="Carousel Image">
                                <div class="carousel-caption">
                                    <h3>Caption Heading</h3>
                                    <p>Caption Body goes here</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="https://cached.imagescaler.hbpl.co.uk/resize/scaleWidth/743/cached.offlinehbpl.hbpl.co.uk/news/OMC/2F4C3957-E2B8-7872-B0E7FF468B357E0A.jpg" alt="Carousel Image">
                                <div class="carousel-caption">
                                    <h3>Caption Heading</h3>
                                    <p>Caption Body goes here</p>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="row">
                <!-- Insert/Drop Grid Column codes below-->
                <div class="col-xs-6">
                    <img src="https://broadview.org/wp-content/uploads/2019/03/magazine-covers_2019-03-25.png" class="img-responsive"/>
                </div>
                <div class="col-xs-6">
                    <form class="form-horizontal" methos="post" action="validar.php">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="correo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Sign in</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="row">
                <!-- Insert/Drop Grid Column codes below-->
                <div class="col-xs-12">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>