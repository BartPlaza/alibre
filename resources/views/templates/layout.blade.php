<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    	<div id="container">
    		<my-navbar></my-navbar>
    		@yield('content')
    		@include('templates.footer')
    	</div>

        <script src="/js/app.js"></script>
    </body>
</html>
