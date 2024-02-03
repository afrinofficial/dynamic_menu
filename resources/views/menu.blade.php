<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Dynamic Multilevel Menu</title>
      <link href="{{asset('/')}}front/css/bootstrap.css" rel="stylesheet">
      <link href="{{asset('/')}}front/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
      <link id="switcher" href="{{asset('/')}}front/css/theme-color/default-theme.css" rel="stylesheet">
      <link href="{{asset('/')}}front/css/style.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
   </head>
   <body>
     <section id="menu">
        <div class="container">
            <div class="menu-area">
                <!-- Navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        @inject('homeController', 'App\Http\Controllers\HomeController')

                        {!! $homeController->buildTreeView($categories, 0) !!}

                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="{{asset('/')}}front/js/bootstrap.js"></script>  
      <script type="text/javascript" src="{{asset('/')}}front/js/jquery.smartmenus.js"></script>
      <script type="text/javascript" src="{{asset('/')}}front/js/jquery.smartmenus.bootstrap.js"></script>  
   </body>
</html>