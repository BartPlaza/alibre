<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
    	<div id="container">
    		@include('templates.navbar')
    		@yield('content')
    		@include('templates.footer')
    	</div>
    </body>
</html>
