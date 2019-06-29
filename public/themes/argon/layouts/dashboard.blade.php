<!DOCTYPE html>
<html lang="en">

    <head>
        {!! meta_init() !!}
        <meta name="keywords" content="@get('keywords')">
        <meta name="description" content="@get('description')">
        <meta name="author" content="@get('author')">
    
        <title>@get('title')</title>

        @styles()
        
    </head>

    <body>
        @partial('headers.dashboard')

        <div class="main-content">
            @partial('navbars.dashboard')
            @content()
        </div>

        @scripts()
        <script src="{{asset('themes/argon/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    </body>

</html>
