<!DOCTYPE html>
<html>
    <head>
        @include('partials.head')
        @yield('style')
    </head>
    <body>
        <div class="main-wrapper">
            @include('partials.topbar')
            @include('partials.sidebar')
            <div class="page-wrapper">
                <div class="content container-fluid">
                    @include('partials.error')
                    @yield('content')
                </div>
            </div>
            @include('modal')
        </div>
        <div class="sidebar-overlay" data-reff="#sidebar"></div>
            @include('partials.script')
            @yield('script')
    </body>
</html>
