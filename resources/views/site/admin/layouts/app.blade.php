<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
@include('site.admin.layouts.header')
    <body>
        <div class="loading-wrapper">
            <div class="loading">
                <h5>Loading...</h5>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        @include('site.admin.layouts.vertical-nav')
        <div class="dashboard-wrapper">

            @yield('content')

        </div>
         @include('site.admin.layouts.footer')
    </body>
</html>
