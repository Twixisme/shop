<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default title')</title>
    <link rel="stylesheet" href=" {{  mix('css/app.css')  }} ">

</head>
<body>
	<div class="starter-template">
    <div id='app' >
        @include('layouts.blocks.nav.index')
        @if(session()->has('success'))
            <p class="alert d-flex alert-success">{{session()->get('success')}}</p>
        @endif
        @if(session()->has('warning'))
            <p class="alert d-flex alert-warning">{{session()->get('warning')}}</p>
        @endif

        @yield('content')
    </div>
</div>
<script src=" {{ mix('js/app.js')  }} "></script>
</body>
</html>
