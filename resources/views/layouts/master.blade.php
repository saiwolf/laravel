<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>My Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>
    @include('layouts.nav')
    <div class="container">
            @yield('content') <!-- Main Content -->
            <div class="col-sm-3 offset-sm-1 blog-sidebar"> <!-- .blog-sidebar -->
                @include('layouts.about')
                @include('layouts.archive')
                @include('layouts.links')
            </div><!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    @include('layouts.footer')
  </body>
</html>
