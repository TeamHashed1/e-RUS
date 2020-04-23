<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> e-RUS</title>
        <link rel="shortcut icon" href="{{"asset/"}}img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="../{{"asset/"}}css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="../{{"asset/"}}css/style.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="../{{"asset/"}}plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="../{{"asset/"}}plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="../{{"asset/"}}plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--FooTable [ OPTIONAL ]-->
        <link href="../{{"asset/"}}plugins/fooTable/css/footable.core.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="../{{"asset/"}}css/demo/jasmine.css" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/pace/pace.min.css" rel="stylesheet">
        <script src="{{"asset/"}}plugins/pace/pace.min.js"></script>
    </head>
    <body>
        <div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
            <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
                <div id="navbar-container" class="boxed">
                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">
                            <i class="fa fa-cube brand-icon"></i>
                            <div class="brand-title">
                                <span class="brand-text">e-RUS</span>
                            </div>
                        </a>
                    </div>
                    <div class="navbar-content clearfix">
                        <ul class="nav navbar-top-links pull-left">
                            <li class="tgl-menu-btn">
                                <a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">
                    <div class="pageheader">
                        <h3><i class="fa fa-home"></i>  Ration Card </h3>
                        <div class="breadcrumb-wrapper">
                            <span class="label">You are here:</span>
                            <ol class="breadcrumb">
                                <li> <a href="#"> Home </a> </li>
                                <li class="active"> Ration Card </li>
                            </ol>
                        </div>
                    </div>
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                        <div class="panel">

                            <div class="">
                              <div class="col-md-4">

                              </div>

                              <div class="col-md-3">
                                  <div class="panel panel-default">
                                      <div class="panel-body np">
                                          <img src="../{{"asset/"}}img/photos/big-user-image-2.jpg" alt="Cover" class="img-responsive">
                                          <div class="text-center pad-btm">
                                              <!-- panel body -->
                                              <h3>{{$value['v_name']}}</h3>
                                              <span>{{$value['v_phone']}}</span>
                                              <!--/ panel body -->
                                          </div>
                                          <ul class="menu-items">
                                              <li>
                                                  <a href="javascript:void(0)" class="clearfix">
                                                  <i class="fa fa-bell-o fa-lg"></i>Villege: {{$value['address']}}
                                                  <span class="label label-danger label-circle pull-right"></span>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0)" class="clearfix">
                                                  <i class="fa fa-user fa-lg"></i> Age: {{$value['age']}}
                                                  <span class="label label-success label-circle pull-right"></span>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0)" class="clearfix">
                                                  <i class="fa fa-calendar fa-lg"></i> Eligible For Card
                                                  <span class="label label-warning label-circle pull-right"></span>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="javascript:void(0)" class="clearfix">
                                                  <i class="fa fa-envelope fa-lg"></i> New Token
                                                  <span class="label label-primary label-circle pull-right"></span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                            </div>
                        </div>

                    </div>
                    <!--===================================================-->
                    <!--End page content-->
                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                @include('admin.nav');

            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
                <p class="pad-lft">Copyrights © 2019-2020 <a href="https://www.atlassoftwarepark.com/" target="_blank">Atlas Software Park</a></p>
            </footer>

        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="{{"asset/"}}js/jquery-2.1.1.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="{{"asset/"}}js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/fast-click/fastclick.min.js"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="{{"asset/"}}js/scripts.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/switchery/switchery.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--FooTable [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/fooTable/dist/footable.all.min.js"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/screenfull/screenfull.js"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src="{{"asset/"}}js/demo/jasmine.js"></script>
        <!--FooTable Example [ SAMPLE ]-->
        <script src="{{"asset/"}}js/demo/tables-footable.js"></script>
    </body>
</html>
