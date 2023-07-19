<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Alpino :: Home</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{asset('ui/backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('ui/backend/assets/plugins/morrisjs/morris.css')}}" />
<link rel="stylesheet" href="{{asset('ui/backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('ui/backend/assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('ui/backend/assets/css/color_skins.css')}}">
</head>
<body class="theme-black">

    
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        {{-- <div class="m-t-30"><img src="{{asset('ui/backend/assets/images/logo.svg" width="48" height="48" alt="Alpino"')}}"></div> --}}
        <div class="m-t-30"><img src="https://d20x1nptavktw0.cloudfront.net/wordpress_media/2022/07/blog-image-16-750x536.png" width="500" height="350" alt="Exam"></div>
        <p>Please wait...</p>        
    </div>
</div>


<div class="overlay_menu">
    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
    <div class="container">        
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="input-group m-b-0">                
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card links">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>App</h6>
                            <ul class="list-unstyled">
                                <li><a href="mail-inbox.html">Inbox</a></li>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="events.html">Calendar</a></li>
                                <li><a href="file-dashboard.html">File Manager</a></li>
                                <li><a href="contact.html">Contact list</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>User Interface (UI)</h6>
                            <ul class="list-unstyled">
                                <li><a href="ui_kit.html">UI KIT</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="range-sliders.html">Range Sliders</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="dialogs.html">Dialogs</a></li>
                                <li><a href="collapse.html">Collapse</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>Sample Pages</h6>
                            <ul class="list-unstyled">                            
                                <li><a href="image-gallery.html">Image Gallery</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="invoices.html">Invoices</a></li>
                                <li><a href="faqs.html">FAQs</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>About</h6>
                            <ul class="list-unstyled">
                                <li><a href="http://thememakker.com/about/" target="_blank">About</a></li>
                                <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                                <li><a href="http://thememakker.com/admin-templates/" target="_blank">Admin Templates</a></li>
                                <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                                <li><a href="http://thememakker.com/portfolio/" target="_blank">Portfolio</a></li>                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="social">
                    <a class="icon" href="https://www.facebook.com/thememakkerteam" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                    <a class="icon" href="https://www.behance.net/thememakker" target="_blank"><i class="zmdi zmdi-behance"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-linkedin"></i></a>                    
                    <p>Coded by WrapTheme<br> Designed by <a href="http://thememakker.com/" target="_blank">thememakker.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="overlay"></div><!-- Overlay For Sidebars -->

<!-- Left Sidebar -->
<x-backend.layouts.partials.lefter/>


<!-- aSidebar -->
<x-backend.layouts.partials.aside/>


<!-- Main Content -->
<section class="content home">
    <x-backend.layouts.partials.search/>
    {{$slot}}
    </div>
</section>


<!-- Jquery Core Js -->
{{-- @stack('js') --}}
        <script src="{{asset('ui/backend/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
        <script src="{{asset('ui/backend/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->
        
        <script src="{{asset('ui/backend/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob-->
        <script src="{{asset('ui/backend/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
        <script src="{{asset('ui/backend/assets/bundles/morrisscripts.bundle.js"')}}"></script> <!-- Morris Plugin Js --> 
        <script src="{{asset('ui/backend/assets/bundles/sparkline.bundle.js')}}"></script> <!-- sparkline Plugin Js --> 
        <script src="{{asset('ui/backend/assets/bundles/doughnut.bundle.js')}}"></script>
        
        <script src="{{asset('ui/backend/assets/bundles/mainscripts.bundle.js')}}"></script>
        <script src="{{asset('ui/backend/assets/js/pages/index.js')}}"></script>
       

</body>
</html>
