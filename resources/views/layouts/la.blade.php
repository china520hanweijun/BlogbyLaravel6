<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column ">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Brand</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#">Link</a>
                            </li>
                            <li>
                                <a href="#">Link</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Action</a>
                                    </li>
                                    <li>
                                        <a href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">Something else here</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#">Separated link</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#">One more separated link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" />
                            </div> <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">Link</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Action</a>
                                    </li>
                                    <li>
                                        <a href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">Something else here</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </nav>
                <div class="row clearfix">
                    {{--  left --}}
                    <div class="col-md-2 column">
                        <div class="panel-group" id="panel-618995">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-618995" href="#panel-element-854600">父级分类一</a>
                                </div>
                                <div id="panel-element-854600" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        子分类列表
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-618995" href="#panel-element-478476">父级分类二</a>
                                </div>
                                <div id="panel-element-478476" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 column">
                        <div class="carousel slide" id="carousel-503471">
                            <ol class="carousel-indicators">
                                <li class="active" data-slide-to="0" data-target="#carousel-503471">
                                </li>
                                <li data-slide-to="1" data-target="#carousel-503471">
                                </li>
                                <li data-slide-to="2" data-target="#carousel-503471">
                                </li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img alt="" src="v3/default.jpg" />
                                    <div class="carousel-caption">
                                        <h4>
                                            First Thumbnail label
                                        </h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="v3/default1.jpg" />
                                    <div class="carousel-caption">
                                        <h4>
                                            Second Thumbnail label
                                        </h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="v3/default2.jpg" />
                                    <div class="carousel-caption">
                                        <h4>
                                            Third Thumbnail label
                                        </h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        </p>
                                    </div>
                                </div>
                            </div> <a class="left carousel-control" href="#carousel-503471" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-503471" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img alt="300x200" src="v3/default4.jpg" />
                                    <div class="caption">
                                        <h3>
                                            Thumbnail label
                                        </h3>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        </p>
                                        <p>
                                            <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img alt="300x200" src="v3/default5.jpg" />
                                    <div class="caption">
                                        <h3>
                                            Thumbnail label
                                        </h3>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        </p>
                                        <p>
                                            <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img alt="300x200" src="v3/default6.jpg" />
                                    <div class="caption">
                                        <h3>
                                            Thumbnail label
                                        </h3>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        </p>
                                        <p>
                                            <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ol class="list-unstyled">
                            <li>
                                Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                Consectetur adipiscing elit
                            </li>
                            <li>
                                Integer molestie lorem at massa
                            </li>
                            <li>
                                Facilisis in pretium nisl aliquet
                            </li>
                            <li>
                                Nulla volutpat aliquam velit
                            </li>
                            <li>
                                Faucibus porta lacus fringilla vel
                            </li>
                            <li>
                                Aenean sit amet erat nunc
                            </li>
                            <li>
                                Eget porttitor lorem
                            </li>
                        </ol>
                        <ul class="pagination">
                            <li>
                                <a href="#">Prev</a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 column">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Panel title
                                </h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                            <div class="panel-footer">
                                Panel footer
                            </div>
                        </div>
                        <ol class="list-unstyled">
                            <li>
                                Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                Consectetur adipiscing elit
                            </li>
                            <li>
                                Integer molestie lorem at massa
                            </li>
                            <li>
                                Facilisis in pretium nisl aliquet
                            </li>
                            <li>
                                Nulla volutpat aliquam velit
                            </li>
                            <li>
                                Faucibus porta lacus fringilla vel
                            </li>
                            <li>
                                Aenean sit amet erat nunc
                            </li>
                            <li>
                                Eget porttitor lorem
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-2 column">
            </div>
            <div class="col-md-8 column">
            </div>
            <div class="col-md-2 column">
            </div>
        </div>
    </div>
</body>
