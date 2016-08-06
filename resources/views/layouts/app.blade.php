<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jeff DeVince</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS And JavaScript -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Jeff DeVince</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/resume">Resume</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Scientific Publications <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a target="_blank" href="http://onlinelibrary.wiley.com/doi/10.1111/jns5.12043/abstract">Tissue Engineering</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Social Media <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://www.linkedin.com/in/jeffrey-devince-056978a1"><i class="fa fa-linkedin-square"></i>LinkedIn</a></li>
                                <li><a href="https://github.com/jdevince"><i class="fa fa-github-square"></i>GitHub</a></li>
                                <li><a href="https://www.facebook.com/jeff.devince"><i class="fa fa-facebook-square"></i>Facebook</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        @yield('404')
    </body>
</html>
