<meta charset="utf-8">
<base href="/">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('libs/bootstrap4/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('libs/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('libs/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('libs/fancybox/dist/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('sprites/sprite.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
