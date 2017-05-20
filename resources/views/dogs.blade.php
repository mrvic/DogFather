<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Snippet - Bootsnipp.com</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <style>body {
                padding-top: 50px;
                position: relative;
                background: #333;
            }

            pre {
                tab-size: 8;
            }

            @media screen and (max-width: 768px) {
                .side-collapse-container{
                    width:100%;
                    position:relative;
                    left:0;
                    transition:left .4s;
                }
                .side-collapse-container.out{
                    left:200px;
                }
                .side-collapse {
                    top:50px;
                    bottom:0;
                    left:0;
                    width:200px;
                    position:fixed;
                    overflow:hidden;
                    transition:width .4s;
                }
                .side-collapse.in {
                    width:0;
                }
            }</style>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">$(document).ready(function () {
                var sideslider = $('[data-toggle=collapse-side]');
                var sel = sideslider.attr('data-target');
                var sel2 = sideslider.attr('data-target-2');
                sideslider.click(function (event) {
                    $(sel).toggleClass('in');
                    $(sel2).toggleClass('out');
                });
            });</script>
    </head>
    <body>

        <header role="banner" class="navbar navbar-fixed-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="navbar-inverse side-collapse">
                    <nav role="navigation" class="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#Home">Home</a></li>
                            <li><a href="#users">Users</a></li>
                            <li><a href="http://placesforlove.com">Places</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="container side-collapse-container out">
            <div class="row">

                <img src="images/home.png">
                                <h1>Hello</h1>
                <p>This is a side opening nav demonstration</p>
                <p>Make your browser smaller and the top menu wil become into a lateral slider menu</p>
            </div>
        </div>

    </body></html>