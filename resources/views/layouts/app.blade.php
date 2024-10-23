<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('layouts/header')
    @yield('style')
</head>
<body>
    <div id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            @include('layouts/sidebar')
    
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    @include('layouts/navbar')
                    @yield('content')
                </div>
                <!-- End of Main Content -->
    
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
    
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>

    {{-- @yield('content') --}}
    @include('layouts/footer')
    @yield('script')
</body>
</html>
