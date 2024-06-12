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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('https://i.ibb.co/vP7BHzP/Comida-deliberacio-n.png'); 
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        .card {
            border: 1px solid #000000;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .card-header {
            border-radius: 30px 30px 0px 0px;
            background: #000;
            padding: 15px;
            font-size: 1.25em;
            text-align: center;
        }

        .card-body {
            padding: 1.25rem;
            flex: 1 1 auto;
            fill: #F6F6F6;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            color: #333;
            font-family: Montserrat;
            font-size: 15px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        .monRegular {
            color: #222;
            text-align: center;
            font-family: Inter;
            font-size: 18px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .btnlogin {
            border-radius: 100px;
            border: 2px solid var(--TITLE, #4B66D3);
            text-align: center;
            text-decoration: none;
            font-size: 12px;
            margin: 4px 2px;
            cursor: pointer;
            display: flex;
            width: 250px;
            height: 35px;
            padding: 6px 10px;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
            color: #000;
            font-family: Inter;
            font-size: 20px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .btnizquierda {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .text-ques {
            color: #FFF;
            text-align: center;
            font-family: Montserrat;
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        a {
            color: black;
        }

        a:hover {
            color: inherit;
        }

        input {
            font-family: Montserrat;
            font-size: 15px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            color: #000;
            border: 1px solid #000;
            border-radius: 5px;
            padding: 8px;
            margin-bottom: 10px;
        }

        input::placeholder {
            font-family: Montserrat;
            font-size: 15px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            color: #000;
        }

        input:-ms-input-placeholder {
            color: #000;
        }

        input::-ms-input-placeholder {
            color: #000;
        }

        .footer a {
            color: #c2c0c0;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>

<body class="logofondo">
    @yield('contenido')
    <footer class="footer footer-alt">2024 &copy;
        <a href="https://www.mvsideas.com/">MVS Exponencial</a>
    </footer>
</body>

</html>
