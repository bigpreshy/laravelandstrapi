<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Blog</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/app.css">
        <style>
         body {
             background: #e2e2e2;
         }
         
         header {
             min-height: 150px;
             background: purple;
             padding: 20px;
             margin-bottom: 15px;
         }
         
         .footer-content {
             padding-top: 10px;
         }
         
         .header-title,
         .header-sub {
             color: #e2e2e2;
         }
         
         .header-sub {
             border-top: 1px solid #ccc;
             border-bottom: 1px solid #ccc;
             padding: 3px 0;
         }
         
         .content {
             background: #fff;
             padding: 20px;
             margin-bottom: 10px;
         }
        </style>
    </head><body>
        <!-- Header starts here -->
        <header class="text-center">
            <h1 class="header-title">Laravel and Strapi</h1>
        </header>
        <!-- Header ends -->
        <!-- Main content begins -->
        <div class="panel panel-default">
        <div class="panel-heading"><h1>Posts</h1></div>
        <div class="panel-body">
            <div class="row">
             @foreach ($blogs as $blog)
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                               
                                <div class="caption">
                                    <span> <h3>{{ $blog['Title'] }}</h3> Written by {{ $blog['Author'] }} </span>
                                    <p>{{ $blog['post'] }}</p>
                                    
                                </div>
                            </div>
                        </div>
                @endforeach 
              
            </div>
        </div>

        </div>
    </div>
        <!-- Main content ends here -->
        <!-- Page footer begins -->
        <footer class="navbar navbar-fixed-bottom">
            <div class="container text-center">
                &copy; {{ date('Y')}}. All rights reserved.
            </div>
        </footer>
        <!-- Bootstrap JavaScript -->
        <script src="/js/app.js"></script>
    </body></html>