<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

@section('htmlheader')
        @include('layouts.adminpro.htmlheader')
    @show


    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN HEADER -->
        @include('layouts.adminpro.menutop')
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->


        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            
         @include('layouts.adminpro.mainheader')

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    
                       @include('layouts.adminpro.config')

                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Dashboard</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                  
                    @yield('content')

                    
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->

            <!-- BEGIN QUICK SIDEBAR -->

            <!-- @include('layouts.adminpro.sidebar-derecha')-->

        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        @include('layouts.adminpro.footer')
        <!-- END FOOTER -->

        <!-- BEGIN QUICK NAV -->
        
        <!-- END QUICK NAV -->

        @section('scripts')
            @include('layouts.adminpro.scripts')
        @show
    </body>

</html>