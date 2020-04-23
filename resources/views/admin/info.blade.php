<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> e-RUS </title>
        <link rel="shortcut icon" href="img/favicon.ico">
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
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
        <!--Jquery Tag It [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/tag-it/jquery.tagit.css" rel="stylesheet">
        <!--Ion.RangeSlider [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet">
        <link href="{{"asset/"}}plugins/ion-rangeslider/ion.rangeSlider.skinNice.css" rel="stylesheet">
        <!--Chosen [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/chosen/chosen.min.css" rel="stylesheet">
        <!--noUiSlider [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/noUiSlider/jquery.nouislider.min.css" rel="stylesheet">
        <link href="{{"asset/"}}plugins/noUiSlider/jquery.nouislider.pips.min.css" rel="stylesheet">
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
        <!--Dropzone [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/dropzone/dropzone.css" rel="stylesheet">
        <!--Summernote [ OPTIONAL ]-->
        <link href="{{"asset/"}}plugins/summernote/summernote.min.css" rel="stylesheet">
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
                <section id="content-container">
                    <header class="pageheader">
                        <h3><i class="fa fa-home"></i> Form Dashboard </h3>
                        <div class="breadcrumb-wrapper">
                            <span class="label">You are here:</span>
                            <ol class="breadcrumb">
                                <li> <a href="#"> Home </a> </li>
                                <li class="active"> Area Information </li>
                            </ol>
                        </div>
                    </header>
                    <!--Page content-->
                    <!--===================================================-->
                    <section id="page-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title">Add Area Information</h3>
                                    </div>
                                    <!-- BASIC FORM ELEMENTS -->
                                    <!--===================================================-->
                                    <form class="panel-body form-horizontal" action="/infoinsert" Type a message Type a message method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <!--Static-->
                                        <!--Text Input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-text-input">District Name</label>
                                            <div class="col-md-9">

                                              <select name="w_name" class="form-control selectpicker">
                                                  <option>Select One</option>
                                                  @foreach($value as $val)

                                                  <option>{{$val['w_name']}}</option>

                                                  @endforeach
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-text-input">Upazila Name</label>
                                            <div class="col-md-9">

                                              <select name="w_name" class="form-control selectpicker">
                                                  <option>Select One</option>
                                                  @foreach($value as $val)

                                                  <option>{{$val['w_name']}}</option>

                                                  @endforeach
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-text-input">Word Name</label>
                                            <div class="col-md-9">

                                              <select name="w_name" class="form-control selectpicker">
                                                  <option>Select One</option>
                                                  @foreach($value as $val)

                                                  <option>{{$val['w_name']}}</option>

                                                  @endforeach
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-text-input">Villege Name</label>
                                            <div class="col-md-9">
                                              <select name="v_name" class="form-control selectpicker">
                                                <option>Select One</option>
                                                @foreach($value1 as $val)

                                                <option>{{$val['v_name']}}</option>

                                                @endforeach
                                              </select>
                                            </div>
                                        </div>
                                        <!--Email Input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-email-input">Organization Type</label>
                                            <div class="col-md-9">
                                              <select name="o_type" class="form-control selectpicker">
                                                <option>Select One</option>
                                                @foreach($value2 as $val)

                                                <option>{{$val['o_type']}}</option>

                                                @endforeach
                                              </select>
                                            </div>
                                        </div>
                                        <!--Password-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-password-input">Organization Name</label>
                                            <div class="col-md-9">
                                              <select name="o_name" class="form-control selectpicker">
                                                <option>Select One</option>
                                                @foreach($value3 as $val)

                                                <option>{{$val['o_name']}}</option>

                                                @endforeach
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-password-input">Organization Details</label>
                                            <div class="col-md-9">
                                              <textarea name="details" placeholder="write here all details of this organization like location, name of head & phone number" rows="6" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <button type="submit" value="submit" class="btn btn-block btn-success">
                                                Click For Added New Organization
                                                </button>
                                            </div>
                                        </div>



                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--===================================================-->
                    <!--End page content-->
                </section>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                @include('admin.nav');
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
                <!--ASIDE-->
                <!--===================================================-->

                <!--===================================================-->
                <!--END ASIDE-->
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
        <!--jQuery UI [ REQUIRED ]-->
        <script src="{{"asset/"}}js/jquery-ui.min.js"></script>
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
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/tag-it/tag-it.min.js"></script>
        <!--Chosen [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/chosen/chosen.jquery.min.js"></script>
        <!--noUiSlider [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/noUiSlider/jquery.nouislider.all.min.js"></script>
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/dropzone/dropzone.min.js"></script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/masked-input/jquery.maskedinput.min.js"></script>
        <!--Summernote [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/summernote/summernote.min.js"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{"asset/"}}plugins/screenfull/screenfull.js"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src="{{"asset/"}}js/demo/jasmine.js"></script>
        <!--Form Component [ SAMPLE ]-->
        <script src="{{"asset/"}}js/demo/form-component.js"></script>
    </body>
</html>
