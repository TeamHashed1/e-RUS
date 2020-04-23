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
        <link href="{{"asset/"}}css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="{{"asset/"}}css/style.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--FooTable [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/fooTable/css/footable.core.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="{{"asset/"}}css/demo/jasmine.css" rel="stylesheet">
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
                        <h3><i class="fa fa-home"></i> Organization </h3>
                        <div class="breadcrumb-wrapper">
                            <span class="label">You are here:</span>
                            <ol class="breadcrumb">
                                <li> <a href="#"> Home </a> </li>
                                <li class="active"> Organization List </li>
                            </ol>
                        </div>
                    </div>
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Organization List</h3>
                            </div>
                            <div class="panel-body">
                                    <div class="pad-btm form-inline">
                                        <div class="row">
                                            <div class="col-sm-6 text-xs-center">
                                                <div class="form-group">
                                                    <label class="control-label">Status</label>
                                                    <select id="demo-foo-filter-status" class="form-control">
                                                        <option value="">Show all</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-xs-center text-right">
                                                <div class="form-group">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Foo Table - Filtering -->
                                <!--===================================================-->
                                <div class="table-responsive no-padding">
                                  <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                                      <thead>
                                          <tr>
                                            <th>Organization Type</th>
                                              <th>Organization Name</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($value as $all_orga)
                                          <tr>
                                            <td>{{$all_orga['o_type']}}</td>
                                              <td>{{$all_orga['o_name']}}</td>
                                              <td>
                                                <div class="btn-group">
                                                  <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
                                                  Action <i class="dropdown-caret fa fa-caret-down"></i>
                                                  </button>
                                                  <ul class="dropdown-menu dropdown-menu-right">
                                                      <li><a href="/deleteorga/{{$all_orga['id']}}">Delete</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                            </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                              <td colspan="5">
                                                  <div class="text-right">
                                                      <ul class="pagination"></ul>
                                                  </div>
                                              </td>
                                          </tr>
                                      </tfoot>
                                  </table>
                                </div>
                                <!--===================================================-->
                                <!-- End Foo Table - Filtering -->
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
