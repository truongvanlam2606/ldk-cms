<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {!! meta_init() !!}
        <meta name="keywords" content="@get('keywords')">
        <meta name="description" content="@get('description')">
        <meta name="author" content="@get('author')">
    
        <title>@get('title')</title>
        
        @styles()
        
    </head>

    <body class="bg-default">
        <div class="main-content">
            @partial('navbars.auth')            
            @content()
        </div>
        
        @scripts()
    </body>

</html>