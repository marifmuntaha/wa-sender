<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
    <x-head :page="$page"/>
    <body>
        <!-- Main navbar -->
        <x-navbar />
        <!-- /main navbar -->
        <!-- Page content -->
        <div class="page-content">
            <!-- Main sidebar -->
            <x-sidebar />
            <!-- /main sidebar -->
            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Inner content -->
                <div class="content-inner">
                    <!-- Page header -->
                    <x-header :page="$page" :breadcrumb="$breadcrumb"/>
                    <!-- /page header -->
                    <!-- Content area -->
                    <div class="content">
                        @yield('content')
                    </div>
                    <!-- /content area -->
                </div>
                <!-- /inner content -->
                <!-- Footer -->
                <x-footer />
                <!-- /footer -->
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->
    </body>
</html>
