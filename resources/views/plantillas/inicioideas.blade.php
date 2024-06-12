<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://i.ibb.co/GT8S9Yr/favicon.png">

    <!-- App css -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    @endphp

    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/appSty.css']['file']) }}">

    <!-- App js -->
    <script src="{{ asset('build/' . $manifest['resources/js/appJS.js']['file']) }}"></script>

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
  

<body class="logofondo">
    @yield('contenido')
    <footer class="footer footer-alt">2024 &copy;
        <a href="https://www.mvsideas.com/">MVS Exponencial</a>
    </footer>
</body>

</html>
