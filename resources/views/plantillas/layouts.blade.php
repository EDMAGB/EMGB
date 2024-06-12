<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A" name="description" />
    <meta content="Edna GB" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="https://i.postimg.cc/C5gmL2xj/logo-sm.png"> --}}
    {{-- <link rel="shortcut icon" href="https://imgur.com/a/VjntECR"> --}}
    {{-- <link rel="shortcut icon" href="assets/images/favicon.png"> --}}
    <link rel="shortcut icon" href="https://i.ibb.co/GT8S9Yr/favicon.png">
    <!-- plugin css -->
    {{-- <link href="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" /> 
     <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />


   
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9TNTRX6P5J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9TNTRX6P5J');
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');

        .radio-container {
            display: flex;
            flex-direction: column;
        }

        .radio-container label {
            margin-bottom: 5px;
            cursor: pointer;
        }

        .radio-container input[type="radio"] {
            display: none;
            /* Ocultar el input radio */
        }

        .radio-container span {
            position: relative;
            padding-left: 25px;
            /* Espacio para el círculo */
        }

        .radio-container span::before {
            content: "";
            position: absolute;
            left: 0;
            top: 2px;
            width: 16px;
            height: 16px;
            border: 2px solid #007bff;
            /* Color del borde */
            border-radius: 50%;
            /* Forma circular */
        }

        .radio-container input[type="radio"]:checked+span::before {
            background-color: #007bff;
            /* Color de fondo del círculo cuando está seleccionado */
        }

        /* body{ font-family: "Montserrat", sans-serif !important;} */
        /* .niveles {
            background-image: url("https://i.pinimg.com/originals/d8/d7/05/d8d705bfd0cd2b1e6a20beabb0f0546a.jpg");
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
            box-sizing: border-box;
            padding: 20px;
            color: white;
        } */
        .form-group label {
            font-size: 14px;
        }

        .navbar-custom-mapa {
            /* background-image: url(assets/images/mapa_fondo.png); */
            background-color: black;
            background-size: cover;
            background-position: center;
            box-shadow: 0 0 35px 0 rgba(61, 69, 78, .15);
            height: 70px;
            transition: height 0.5s ease;
            left: 0;
            padding: 0;
            /* position: fixed; */
            right: 0;
            z-index: 100;
        }

        button.button-menu-mapa {
            background-color: transparent;
            border: none;
            cursor: pointer;

        }

        #dataTable td {
            word-wrap: break-word;
            white-space: pre-line;
        }



        .column-toggle {
            display: none;
        }

        .dot:hover,
        input[type="radio"] {
            cursor: pointer;
        }

        .far,
        .fas {
            font-size: 60px;
        }

        .etapa {
            font-size: 30px;
            color: #9b9ea0;
        }

        .fa-laugh {
            color: green;
        }

        .fa-smile {
            color: yellowgreen;
        }

        .fa-meh {
            color: rgb(241, 243, 95);
        }

        .fa-frown {
            color: orange;
        }

        .fa-sad-tear {
            color: red;
        }

        .radio-container {
            display: flex;
            flex-direction: column;
        }

        .radio-container label {
            margin-bottom: 10px;
        }

        .radio-container input[type="radio"] {
            display: none;
        }

        .radio-container input[type="radio"]+span {
            position: relative;
            padding-left: 25px;
            cursor: pointer;
        }

        .radio-container input[type="radio"]+span:before {
            content: '';
            position: absolute;
            left: 0;
            top: 2px;
            width: 18px;
            height: 18px;
            border: 1px solid #000;
            border-radius: 50%;
            background-color: #fff;
        }

        .radio-container input[type="radio"]:checked+span:before {
            background-color: #007bff;
        }

        .radio-container input[type="radio"]+span:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 6px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background-color: #fff;
            display: none;
        }

        .radio-container input[type="radio"]:checked+span:after {
            display: block;
        }

        input[type="radio"] {
            -webkit-appearance: none;
            /* Safari y Chrome */
            -moz-appearance: none;
            /* Firefox */
            appearance: none;
            /* Estándar */
            outline: none;
            /* Eliminar el contorno al hacer clic */
            width: 16px;
            /* Ajusta el ancho del radio input */
            height: 16px;
            /* Ajusta la altura del radio input */
            border-radius: 50%;
            /* Hace que el input tenga forma de círculo */
            border: 2px solid transparent;
            /* Establece el borde del círculo */
            color: transparent;
        }

        /* Estilos para la lista de reproducción horizontal */
        .horizontal-list {
            list-style: none;
            display: flex;
            overflow-x: auto;
            padding: 0;
        }

        /* Estilos para cada elemento de la lista */
        .video-item {
            margin-right: 20px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        /* Estilos para la imagen miniatura */
        .video-thumbnail {
            width: 400px;
            height: 220px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para el título */
        .video-item h3 {
            margin-top: 10px;
            margin-bottom: 5px;
            font-size: 16px;
            font-weight: bold;
        }

        /* Estilos para la descripción */
        .video-item p {
            font-size: 14px;
            color: #666;
        }


        /* Estilos para el botón "Marcar como visto" */
        .video-item button {
            margin-top: 10px;
            padding: 6px 12px;
            font-size: 14px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .video-item button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        #introText {
            overflow: hidden;
            position: relative;
        }

        #leerMas {
            display: block;
            margin-top: -20px;
            font-size: 14px;
            color: blue;
            text-decoration: underline;
            cursor: pointer;
            background: transparent;
            border: none;
        }

        /* Estilo para el carrusel */
        #carouselExample {
            max-width: 100%;
            /* Carrusel ocupa todo el ancho de su contenedor */
            margin: 0 auto;
            /* Centra horizontalmente el carrusel */
        }

        /* Estilo para las imágenes dentro del carrusel */
        .carousel-inner img {
            max-width: 100%;
            height: auto;
            /* Mantiene la proporción de aspecto de las imágenes */
        }

        /* Estilo para los controles de navegación (flechas izquierda y derecha) */
        .carousel-control-prev,
        .carousel-control-next {
            background-color: rgba(0, 0, 0, 0.5);
            /* Fondo semitransparente */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            color: #fff;
            /* Color de las flechas */
        }

        /* Estilo para los puntos indicadores (indicadores de diapositivas) */
        .carousel-indicators {
            bottom: 10px;
            /* Posición desde la parte inferior */
        }

        .carousel-indicators li {
            background-color: #007BFF;
            /* Color de fondo de los puntos indicadores */
            border-color: #007BFF;
            /* Color del borde de los puntos indicadores */
        }

        .carousel-indicators .active {
            background-color: #555;
            /* Color de fondo del punto indicador activo */
        }

        .header__sidenav {
            background-color: #2e3d49;
        }

        .slideout-menu {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: none;
            overflow-y: auto;
            z-index: 6000;
            width: 16.25rem;
            -webkit-overflow-scrolling: touch;
        }

        .slideout-panel {
            position: relative;
            z-index: 7000;
        }

        footer,
        header,
        nav,
        section {
            display: block;
        }

        .header {
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .header::after {
            clear: both;
            content: "";
            display: table;
        }

        .header.header--clone {
            width: 100%;
        }

        .header.header--clone .header__navbar {
            height: 4.5rem;
        }

        .header__navbar {
            max-width: 73.75rem;
            margin-left: auto;
            margin-right: auto;
            height: 4.5rem;
            padding: 0 1.5em;
        }

        .header__navbar::after {
            clear: both;
            content: "";
            display: table;
        }

        @media screen and (min-width: 48rem) {
            .header__navbar {
                height: 6rem;
            }
        }

        @media screen and (min-width: 73.75rem) {
            .header__navbar {
                padding: 0;
            }
        }

        .header__sidenav {
            background-color: #2e3d49;
        }

        .hero {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .hero--inverse {
            margin-top: -6rem;
        }

        .header--clone {
            top: 0;
            left: 0;
            position: fixed;
            z-index: 7000;
            backface-visibility: hidden;
            transform: translate3d(0, -100%, 0);
            -webkit-transform-style: preserve-3d;
            transition: all 0.3s ease;
        }

        .page-leaderboard {
            background-color: #fafbfc;
        }

        .page-leaderboard .hero {
            background-image: url(https://d125fmws0bore1.cloudfront.net/assets/pages/leaderboard/hero-leaderboard-b861e1752ed28ae950fcfccd51008fe7f4d158a08c68e909201f46e6086992ad.jpg);
        }

        .page-leaderboard .leaderboard-progress {
            clear: both;
        }

        .page-leaderboard .leaderboard-progress .contain {
            padding: 3em 1.5em 2em 1.5em;
        }

        @media (min-width: 70em) {
            .page-leaderboard .leaderboard-progress .contain {
                padding: 6em 0 4.5em 0;
            }
        }

        .page-leaderboard .leaderboard-progress p {
            max-width: 48.5em;
            margin: 0 auto;
        }

        .page-leaderboard .ranking {
            clear: both;
        }

        .page-leaderboard .ranking .contain {
            padding: 0 1.5em;
        }

        .page-leaderboard .ranking .ranking-table {
            max-width: 66em;
            margin: 0 auto;
        }

        .page-leaderboard .ranking .ranking-table-body {
            box-shadow: 0 0 0.75em 0 rgba(46, 60, 73, 0.12);
            border-radius: 0.375rem;
            border: solid 0.063em #dbe2e8;
            max-height: 24.625em;
            overflow: scroll;
            -webkit-overflow-scrolling: touch;
        }

        @media (min-width: 33em) {
            .page-leaderboard .ranking .ranking-table-body {
                max-height: 31.125em;
            }
        }

        .page-leaderboard .ranking .ranking-table-header-row {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-top: 1.125em;
        }

        @media (min-width: 33em) {
            .page-leaderboard .ranking .ranking-table-header-row {
                padding-top: 1.875em;
            }
        }

        .page-leaderboard .ranking .ranking-table-header-data {
            text-align: center;
            align-self: center;
        }

        .page-leaderboard .ranking .ranking-table-header-data:first-child {
            width: 20%;
        }

        @media (min-width: 48em) {
            .page-leaderboard .ranking .ranking-table-header-data:first-child {
                width: 15%;
            }
        }

        .page-leaderboard .ranking .ranking-table-header-data:nth-child(2) {
            padding-left: 9%;
            text-align: left;
            width: 50%;
        }

        @media (min-width: 33em) {
            .page-leaderboard .ranking .ranking-table-header-data:nth-child(2) {
                padding-left: 6.3%;
            }
        }

        @media (min-width: 48em) {
            .page-leaderboard .ranking .ranking-table-header-data:nth-child(2) {
                padding-left: 9%;
                width: 55%;
            }
        }

        @media (min-width: 70em) {
            .page-leaderboard .ranking .ranking-table-header-data:nth-child(2) {
                padding-left: 4%;
            }
        }

        .page-leaderboard .ranking .ranking-table-header-data:nth-child(3) {
            width: 30%;
        }

        @media (min-width: 33em) {
            .page-leaderboard .ranking .ranking-table-header-data:nth-child(3) {
                width: 25%;
            }
        }

        .page-leaderboard .ranking .ranking-table-row {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-top: .875em;
            padding-bottom: .875em;
            background-color: #fff;
        }

        @media (min-width: 33em) {
            .page-leaderboard .ranking .ranking-table-row {
                padding-top: 1.125em;
                padding-bottom: 1.125em;
            }
        }

        .page-leaderboard .ranking .ranking-table-row:nth-child(even) {
            background-color: #fafbfc;
        }

        .page-leaderboard .ranking .ranking-table-row-leader-1,
        .page-leaderboard .ranking .ranking-table-row-leader-2,
        .page-leaderboard .ranking .ranking-table-row-leader-3 {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-top: .875em;
            padding-bottom: .875em;
            background-color: #fff;
            box-shadow: 0 0 0.75em 0 rgba(46, 60, 73, 0.12);
            border-radius: 0.375rem;
            margin-bottom: 1.25em;
        }

        @media (min-width: 33em) {

            .page-leaderboard .ranking .ranking-table-row-leader-1,
            .page-leaderboard .ranking .ranking-table-row-leader-2,
            .page-leaderboard .ranking .ranking-table-row-leader-3 {
                padding-top: 1.125em;
                padding-bottom: 1.125em;
            }
        }

        .page-leaderboard .ranking .ranking-table-row-leader-1 .ranking-table-data-leader-1,
        .page-leaderboard .ranking .ranking-table-row-leader-2 .ranking-table-data-leader-2,
        .page-leaderboard .ranking .ranking-table-row-leader-3 .ranking-table-data-leader-3 {
            display: flex;
            justify-content: center;
            width: 20%;
        }

        @media (min-width: 48em) {

            .page-leaderboard .ranking .ranking-table-row-leader-1 .ranking-table-data-leader-1,
            .page-leaderboard .ranking .ranking-table-row-leader-2 .ranking-table-data-leader-2,
            .page-leaderboard .ranking .ranking-table-row-leader-3 .ranking-table-data-leader-3 {
                width: 15%;
            }
        }

        .page-leaderboard .ranking .ranking-table-row-leader-1 .ranking-table-data-leader-1 .medal-gold,
        .page-leaderboard .ranking .ranking-table-row-leader-2 .ranking-table-data-leader-2 .medal-silver,
        .page-leaderboard .ranking .ranking-table-row-leader-3 .ranking-table-data-leader-3 .medal-bronze {
            margin-top: -1.313em;
            height: 2.875em;
            width: 2.875em;
        }

        @media (min-width: 33em) {

            .page-leaderboard .ranking .ranking-table-row-leader-1 .ranking-table-data-leader-1 .medal-gold,
            .page-leaderboard .ranking .ranking-table-row-leader-2 .ranking-table-data-leader-2 .medal-silver,
            .page-leaderboard .ranking .ranking-table-row-leader-3 .ranking-table-data-leader-3 .medal-bronze {
                margin-top: -1.563em;
                height: 3.875em;
                width: 3.875em;
            }
        }

        .page-leaderboard .ranking .ranking-table-row-leader-1 {
            border: solid 0.125em #ecc81a;
        }

        .page-leaderboard .ranking .ranking-table-row-leader-1 .ranking-table-data-leader-1 .medal-gold {
            background: url(https://d125fmws0bore1.cloudfront.net/assets/pages/leaderboard/medal-gold-c49052bfa07f36621f16dbe77f7fc36cbafd72ff088ea970256ff998be05687b.svg) no-repeat;
            background-size: contain;
        }

        .page-leaderboard .ranking .ranking-table-row-leader-2 {
            border: solid 0.125em #dbe2e8;
        }

        .page-leaderboard .ranking .ranking-table-row-leader-2 .ranking-table-data-leader-2 .medal-silver {
            background: url(https://d125fmws0bore1.cloudfront.net/assets/pages/leaderboard/medal-silver-d099c5dd916c167c3ba4716c8968a819f317daaef1901c8e8bae6c6932852faa.svg) no-repeat;
            background-size: contain;
        }

        .page-leaderboard .ranking .ranking-table-row-leader-3 {
            border: solid 0.125em #dfdfd1;
        }

        .page-leaderboard .ranking .ranking-table-row-leader-3 .ranking-table-data-leader-3 .medal-bronze {
            background: url(https://d125fmws0bore1.cloudfront.net/assets/pages/leaderboard/medal-bronze-d0f15d413800257442c8d4b2d5239cfe28c9fd9594f863ab1fad5258f8d1d5eb.svg) no-repeat;
            background-size: contain;
        }

        .page-leaderboard .ranking .ranking-table-data {
            align-self: center;
            color: #525c65;
            font-size: 1em;
        }

        .page-leaderboard .ranking .ranking-table-data:first-child {
            text-align: center;
            width: 20%;
            color: #525c65;
            font-weight: 600;
        }

        @media (min-width: 33em) {
            .page-leaderboard .ranking .ranking-table-data:first-child {
                font-size: 1.25em;
            }
        }

        @media (min-width: 48em) {
            .page-leaderboard .ranking .ranking-table-data:first-child {
                width: 15%;
            }
        }

        .page-leaderboard .ranking .ranking-table-data:nth-child(2) {
            color: #2e3d49;
            width: 55%;
            font-size: .875em;
            padding-left: 9%;
        }

        @media (min-width: 33em) {
            .page-leaderboard .ranking .ranking-table-data:nth-child(2) {
                font-size: 1em;
            }
        }

        @media (min-width: 48em) {
            .page-leaderboard .ranking .ranking-table-data:nth-child(2) {
                font-size: 1em;
                width: 55%;
            }
        }

        @media (min-width: 70em) {
            .page-leaderboard .ranking .ranking-table-data:nth-child(2) {
                font-size: 1em;
                padding-left: 4%;
            }
        }

        .page-leaderboard .ranking .ranking-table-data:nth-child(3) {
            font-size: .875em;
            text-align: center;
            width: 25%;
            padding-right: 4%;
        }

        @media (min-width: 33em) {
            .page-leaderboard .ranking .ranking-table-data:nth-child(3) {
                padding-right: 0%;
                font-size: 1em;
            }
        }

        .page-leaderboard .ranking .ranking-table-data:nth-child(3) .complete {
            margin: -1.25em auto;
            transform: translateY(18%);
            background: url(https://d125fmws0bore1.cloudfront.net/assets/pages/leaderboard/leaderboard-complete-316433dd02f79185962dbaa82ad025c4722722e8ad276abe2aa00463a145691e.svg) no-repeat;
            background-size: contain;
            width: 3em;
            height: 3em;
        }

        @media (min-width: 33em) {
            .page-leaderboard .ranking .ranking-table-data:nth-child(3) .complete {
                width: 3.5em;
                height: 3.5em;
            }
        }

        hr.mi-hr {
            border: none;
            /* Elimina el borde predeterminado */
            height: 3px;
            /* Altura de la línea */
            background-color: gray;
            /* Color de fondo gris */
            border-top: 1px dotted gray;
            /* Línea punteada gris en la parte superior */
            margin: 20px 0;
            /* Márgenes superior e inferior para separación */
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            height: auto;
            align-items: center;
            justify-content: center;
            padding: 0 20px;
        }

        .demo2es {
            display: flex;
            width: 100%;
            justify-content: center;
            overflow: hidden;
            flex-direction: row-reverse;
            height: 50px;
            position: relative;
        }

        .demo2es-0 {
            filter: grayscale(100%);
        }

        .demo2es>input {
            display: none;
        }

        .demo2es>label {
            cursor: pointer;
            width: 40px;
            height: 40px;
            margin-top: auto;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 76%;
            transition: .3s;
        }

        .demo2es>input:checked~label,
        .demo2es>input:checked~label~label {
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        }


        .demo2es>input:not(:checked)~label:hover,
        .demo2es>input:not(:checked)~label:hover~label {
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        }

        .rating {
            display: flex;
            width: 100%;
            justify-content: center;
            overflow: hidden;
            flex-direction: row-reverse;
            height: 50px;
            position: relative;
        }

        .rating-0 {
            filter: grayscale(100%);
        }

        .rating>input {
            display: none;
        }

        .rating>label {
            cursor: pointer;
            width: 40px;
            height: 40px;
            margin-top: auto;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 76%;
            transition: .3s;
        }

        .rating>input:checked~label,
        .rating>input:checked~label~label {
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        }


        .rating>input:not(:checked)~label:hover,
        .rating>input:not(:checked)~label:hover~label {
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        }

        .fed {
            border: 1px solid #ccc;
            box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.2);
            padding: 30px;
            background-color: white;
            margin-right: 15%;
            margin-left: 15%;

        }

        .full-width {
            width: 100%;
            height: 50%;
            box-sizing: border-box;
        }


        .start {
            position: relative;
        }


        .start>label {
            width: 40px;
            height: 40px;
            margin-top: auto;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 76%;
            transition: .3s;
        }

        .start>h5 {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            text-align: center;
            margin: 0;
            padding: 13px;
            background-color: transparent;
        }

        .emoji-wrapper {
            width: 100%;
            text-align: center;
            height: 100px;
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 0;
        }

        .emoji-wrapper:before,
        .emoji-wrapper:after {
            content: "";
            height: 15px;
            width: 100%;
            position: absolute;
            left: 0;
            z-index: 1;
        }

        .emoji-wrapper:before {
            top: 0;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 35%, rgba(255, 255, 255, 0) 100%);
        }

        .emoji-wrapper:after {
            bottom: 0;
            background: linear-gradient(to top, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 35%, rgba(255, 255, 255, 0) 100%);
        }

        .emoji {
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: .3s;
        }

        .emoji>svg {
            margin: 25px 0;
            width: 50px;
            height: 50px;
            flex-shrink: 0;
        }

        #rating-1:checked~.emoji-wrapper>.emoji {
            transform: translateY(-100px);
        }

        #rating-2:checked~.emoji-wrapper>.emoji {
            transform: translateY(-200px);
        }

        #rating-3:checked~.emoji-wrapper>.emoji {
            transform: translateY(-300px);
        }

        #rating-4:checked~.emoji-wrapper>.emoji {
            transform: translateY(-400px);
        }

        #rating-5:checked~.emoji-wrapper>.emoji {
            transform: translateY(-500px);
        }

        .feedback {
            max-width: 360px;
            background-color: #fff;
            width: 100%;
            padding: 30px;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-items: center;
            box-shadow: 0 4px 30px rgba(0, 0, 0, .05);
        }


        .velocimetro {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .vel h3 {
            margin: 0;
        }

        .medio-circulo {
            width: 300px;
            height: 150px;
            background-color: #b7d7f8;
            border-radius: 200px 200px 0 0;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.4);
        }

        .indicador {
            width: 50%;
            height: 6px;
            background-color: #007BFF;
            position: absolute;
            left: 0;
            bottom: -5px;
            transform-origin: 100%;
            transform: rotate(0deg);
            transition: transform 0.5s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Media query para dispositivos móviles (por ejemplo, pantalla con un ancho máximo de 600px) */
        @media screen and (max-width: 600px) {
            .medio-circulo {
                width: 180px;
                height: 100px;
            }

            .indicador {
                height: 5px;
            }
        }


        #porcentaje {
            margin-top: 10px;
            font-size: 24px;
        }

        polyline {
            stroke: black;
        }

        .mapa1 {
            width: 100%;
            height: 80vh;
            box-sizing: border-box;
            padding: 20px;
            color: white;
        }

        .circle1 {
            height: 30px;
            width: 30px;
            background-color: rgb(124, 0, 0);
            border-radius: 50%;
        }

        .circle2 {
            height: 30px;
            width: 30px;
            background-color: rgb(128, 125, 125);
            border-radius: 50%;
        }

        #motionPath {
            overflow: visible;
            height: 100%;
            max-width: 100%;
        }

        #motionPath path {
            stroke-width: 2;
            stroke: gray;
        }

        #motionPath .astronaut {
            visibility: hidden;
        }
    </style>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="pro-user-name ml-1">
                            {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0 text-white">
                                ¡Bienvenido!
                            </h5>
                        </div>
                        {{-- <a href="{{ route('MenuP') }}" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Inicio</span>
                        </a> --}}
                        <!-- item-->
                        <a href="" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Mi cuenta</span>
                        </a>


                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        {{-- <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form> --}}



                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">{{ __('Cerrar Sesión') }}</button>
                        </form>

                    </div>
                </li>



            </ul>

            <!-- LOGO -->
            <div class="logo-box"  >
                <a href="" class="logo text-center">
                    <span class="logo-lg">
                        {{-- <img src='https://imgur.com/a/VjntECR' height="70" alt='logo-bar' />  --}}
                        {{-- <img src="https://i.ibb.co/Kq4LzvL/2-6.png" height="100" border="0"> --}}
                        {{-- <img src="https://imgpile.com/images/tN7KdN.png"  height="100" /> --}}
                        {{-- <img src='https://i.postimg.cc/yY5LPPSW/logo-bar.png' height="70" alt='logo-bar' /> --}}

                        {{-- <img src="assets/images/logo-bar.png" alt="" height="70"> --}}
                        <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        {{-- <img src="assets/images/logo.png" alt="" height="70"> --}}
                        <img src="https://i.ibb.co/B2ZBQLD/logo.png" alt="" height="70">
                    </span>
                    <span class="logo-sm">
                        {{-- <img src="assets/images/logo-sm.png" alt="" height="50"> --}}
                        <img src="https://i.ibb.co/zR08zD5/logo-sm.png" alt="" height="50">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        {{-- <img src="https://i.ibb.co/pJNgnrj/2-7.png" height="50"> --}}
                        {{-- <img src="assets/images/logo-sm.png" alt="" height="50"> --}}
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </li>
            </ul>
            {{-- <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mapa waves-effect" onclick="cambiarAltura()">
                        <i class="la la-street-view"
                            style="padding: 10px;
                    color: #414D5F;
                    font-size: 50px;"></i>
                    </button>
                </li>
            </ul> --}}
        </div>

        <div class="navbar-custom-mapa">
            @if (Auth::user()->equipo != 1000)
                <div class="mapa1" style="display: none">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1300"
                        zoomAndPan="magnify" viewBox="0 0 974.88 374.999991" height="500"
                        preserveAspectRatio="xMidYMid meet" version="1.0">
                        <defs>
                            <filter x="0%" y="0%" width="100%" height="100%" id="c6a0897c4c">
                                <feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"
                                    color-interpolation-filters="sRGB" />
                            </filter>
                            <filter x="0%" y="0%" width="100%" height="100%" id="b395c05c30">
                                <feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0.2126 0.7152 0.0722 0 0"
                                    color-interpolation-filters="sRGB" />
                            </filter>
                            <g />
                            <clipPath id="9329105f0e">
                                <path
                                    d="M 189.492188 13.304688 L 815.664062 13.304688 L 815.664062 360 L 189.492188 360 Z M 189.492188 13.304688 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <image x="0" y="0" width="2622"
                                xlink:href="data:image/png;base64,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"
                                id="0b33519ae5" height="1476" preserveAspectRatio="xMidYMid meet" />
                            <mask id="6fb2a9fc40">
                                <g filter="url(#c6a0897c4c)">
                                    <g filter="url(#b395c05c30)"
                                        transform="matrix(0.238815, 0, 0, 0.238792, 189.492233, 7.963395)">
                                        <image x="0" y="0" width="2622"
                                            xlink:href="data:image/png;base64,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"
                                            height="1476" preserveAspectRatio="xMidYMid meet" />
                                    </g>
                                </g>
                            </mask>
                            <image x="0" y="0" width="2622"
                                xlink:href="data:image/png;base64,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"
                                id="1ea0ba7e56" height="1476" preserveAspectRatio="xMidYMid meet" />
                            <clipPath id="b6d6726534">
                                <path
                                    d="M 256.792969 342.964844 L 267.480469 342.964844 L 267.480469 353.65625 L 256.792969 353.65625 Z M 256.792969 342.964844 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="67ab615ee7">
                                <path
                                    d="M 262.136719 342.964844 C 259.183594 342.964844 256.792969 345.359375 256.792969 348.308594 C 256.792969 351.261719 259.183594 353.65625 262.136719 353.65625 C 265.085938 353.65625 267.480469 351.261719 267.480469 348.308594 C 267.480469 345.359375 265.085938 342.964844 262.136719 342.964844 Z M 262.136719 342.964844 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="1b0aef135f">
                                <path
                                    d="M 195.023438 344.234375 L 205.710938 344.234375 L 205.710938 354.925781 L 195.023438 354.925781 Z M 195.023438 344.234375 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="f1d881bbeb">
                                <path
                                    d="M 200.367188 344.234375 C 197.414062 344.234375 195.023438 346.628906 195.023438 349.578125 C 195.023438 352.53125 197.414062 354.925781 200.367188 354.925781 C 203.320312 354.925781 205.710938 352.53125 205.710938 349.578125 C 205.710938 346.628906 203.320312 344.234375 200.367188 344.234375 Z M 200.367188 344.234375 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="6608fcc74a">
                                <path
                                    d="M 320.257812 335.050781 L 330.945312 335.050781 L 330.945312 345.738281 L 320.257812 345.738281 Z M 320.257812 335.050781 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="8502e0a488">
                                <path
                                    d="M 325.601562 335.050781 C 322.652344 335.050781 320.257812 337.445312 320.257812 340.394531 C 320.257812 343.347656 322.652344 345.738281 325.601562 345.738281 C 328.554688 345.738281 330.945312 343.347656 330.945312 340.394531 C 330.945312 337.445312 328.554688 335.050781 325.601562 335.050781 Z M 325.601562 335.050781 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="e9aa0aced9">
                                <path
                                    d="M 377.785156 320.777344 L 388.476562 320.777344 L 388.476562 331.46875 L 377.785156 331.46875 Z M 377.785156 320.777344 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="1f6254558d">
                                <path
                                    d="M 383.128906 320.777344 C 380.179688 320.777344 377.785156 323.171875 377.785156 326.121094 C 377.785156 329.074219 380.179688 331.46875 383.128906 331.46875 C 386.082031 331.46875 388.476562 329.074219 388.476562 326.121094 C 388.476562 323.171875 386.082031 320.777344 383.128906 320.777344 Z M 383.128906 320.777344 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="2d42eccaad">
                                <path
                                    d="M 436.910156 299.738281 L 447.597656 299.738281 L 447.597656 310.425781 L 436.910156 310.425781 Z M 436.910156 299.738281 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="64864366ec">
                                <path
                                    d="M 442.253906 299.738281 C 439.304688 299.738281 436.910156 302.128906 436.910156 305.082031 C 436.910156 308.035156 439.304688 310.425781 442.253906 310.425781 C 445.207031 310.425781 447.597656 308.035156 447.597656 305.082031 C 447.597656 302.128906 445.207031 299.738281 442.253906 299.738281 Z M 442.253906 299.738281 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="180c27e056">
                                <path
                                    d="M 491.480469 270.929688 L 502.167969 270.929688 L 502.167969 281.617188 L 491.480469 281.617188 Z M 491.480469 270.929688 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="b97d557854">
                                <path
                                    d="M 496.824219 270.929688 C 493.871094 270.929688 491.480469 273.320312 491.480469 276.273438 C 491.480469 279.222656 493.871094 281.617188 496.824219 281.617188 C 499.773438 281.617188 502.167969 279.222656 502.167969 276.273438 C 502.167969 273.320312 499.773438 270.929688 496.824219 270.929688 Z M 496.824219 270.929688 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="52f871e5b4">
                                <path
                                    d="M 532.539062 243.636719 L 543.226562 243.636719 L 543.226562 254.328125 L 532.539062 254.328125 Z M 532.539062 243.636719 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="7e0fc1c267">
                                <path
                                    d="M 537.882812 243.636719 C 534.929688 243.636719 532.539062 246.03125 532.539062 248.980469 C 532.539062 251.933594 534.929688 254.328125 537.882812 254.328125 C 540.832031 254.328125 543.226562 251.933594 543.226562 248.980469 C 543.226562 246.03125 540.832031 243.636719 537.882812 243.636719 Z M 537.882812 243.636719 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="138c52fa62">
                                <path
                                    d="M 574.316406 213.339844 L 585.003906 213.339844 L 585.003906 224.03125 L 574.316406 224.03125 Z M 574.316406 213.339844 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="4699e072e8">
                                <path
                                    d="M 579.660156 213.339844 C 576.710938 213.339844 574.316406 215.734375 574.316406 218.6875 C 574.316406 221.636719 576.710938 224.03125 579.660156 224.03125 C 582.613281 224.03125 585.003906 221.636719 585.003906 218.6875 C 585.003906 215.734375 582.613281 213.339844 579.660156 213.339844 Z M 579.660156 213.339844 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="5116c9c415">
                                <path
                                    d="M 641.933594 142.359375 L 652.621094 142.359375 L 652.621094 153.046875 L 641.933594 153.046875 Z M 641.933594 142.359375 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="108a069cfe">
                                <path
                                    d="M 647.277344 142.359375 C 644.324219 142.359375 641.933594 144.753906 641.933594 147.703125 C 641.933594 150.65625 644.324219 153.046875 647.277344 153.046875 C 650.230469 153.046875 652.621094 150.65625 652.621094 147.703125 C 652.621094 144.753906 650.230469 142.359375 647.277344 142.359375 Z M 647.277344 142.359375 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="201940b823">
                                <path
                                    d="M 611.390625 177.257812 L 622.078125 177.257812 L 622.078125 187.945312 L 611.390625 187.945312 Z M 611.390625 177.257812 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="1d760da149">
                                <path
                                    d="M 616.734375 177.257812 C 613.785156 177.257812 611.390625 179.652344 611.390625 182.601562 C 611.390625 185.554688 613.785156 187.945312 616.734375 187.945312 C 619.6875 187.945312 622.078125 185.554688 622.078125 182.601562 C 622.078125 179.652344 619.6875 177.257812 616.734375 177.257812 Z M 616.734375 177.257812 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="679f8231a7">
                                <path
                                    d="M 673.738281 98.863281 L 684.425781 98.863281 L 684.425781 109.550781 L 673.738281 109.550781 Z M 673.738281 98.863281 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="e77d62bcba">
                                <path
                                    d="M 679.082031 98.863281 C 676.128906 98.863281 673.738281 101.257812 673.738281 104.207031 C 673.738281 107.160156 676.128906 109.550781 679.082031 109.550781 C 682.03125 109.550781 684.425781 107.160156 684.425781 104.207031 C 684.425781 101.257812 682.03125 98.863281 679.082031 98.863281 Z M 679.082031 98.863281 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="335c7dd746">
                                <path
                                    d="M 702.132812 50.738281 L 712.824219 50.738281 L 712.824219 61.429688 L 702.132812 61.429688 Z M 702.132812 50.738281 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="9e32f7a833">
                                <path
                                    d="M 707.476562 50.738281 C 704.527344 50.738281 702.132812 53.132812 702.132812 56.082031 C 702.132812 59.035156 704.527344 61.429688 707.476562 61.429688 C 710.429688 61.429688 712.824219 59.035156 712.824219 56.082031 C 712.824219 53.132812 710.429688 50.738281 707.476562 50.738281 Z M 707.476562 50.738281 "
                                    clip-rule="nonzero" />
                            </clipPath>
                        </defs>
                        <g clip-path="url(#9329105f0e)">
                            <g mask="url(#6fb2a9fc40)">
                                <g transform="matrix(0.238815, 0, 0, 0.238792, 189.492233, 7.963395)">
                                    <image x="0" y="0" width="2622"
                                        xlink:href="data:image/png;base64,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"
                                        height="1476" preserveAspectRatio="xMidYMid meet" />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(413.142056, 288.872269)">
                                <g>
                                    <path
                                        d="M 2.484375 -5.640625 L 2.484375 0 L 1.1875 0 L 1.1875 -4.59375 L 0.0625 -4.59375 L 0.0625 -5.640625 Z M 2.484375 -5.640625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(416.302349, 288.872269)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(421.389452, 288.872269)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(424.864161, 288.872269)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(427.145695, 288.872269)">
                                <g>
                                    <path
                                        d="M 0.671875 -5.640625 L 3.234375 -5.640625 C 3.847656 -5.640625 4.390625 -5.519531 4.859375 -5.28125 C 5.328125 -5.050781 5.691406 -4.722656 5.953125 -4.296875 C 6.210938 -3.878906 6.34375 -3.390625 6.34375 -2.828125 C 6.34375 -2.253906 6.210938 -1.753906 5.953125 -1.328125 C 5.691406 -0.910156 5.328125 -0.582031 4.859375 -0.34375 C 4.390625 -0.113281 3.847656 0 3.234375 0 L 0.671875 0 Z M 3.171875 -1.078125 C 3.734375 -1.078125 4.179688 -1.234375 4.515625 -1.546875 C 4.847656 -1.859375 5.015625 -2.285156 5.015625 -2.828125 C 5.015625 -3.359375 4.847656 -3.78125 4.515625 -4.09375 C 4.179688 -4.414062 3.734375 -4.578125 3.171875 -4.578125 L 1.96875 -4.578125 L 1.96875 -1.078125 Z M 3.171875 -1.078125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(433.804881, 288.872269)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(438.891984, 288.872269)">
                                <g>
                                    <path
                                        d="M 6.140625 -4.40625 C 6.679688 -4.40625 7.109375 -4.242188 7.421875 -3.921875 C 7.742188 -3.597656 7.90625 -3.117188 7.90625 -2.484375 L 7.90625 0 L 6.65625 0 L 6.65625 -2.296875 C 6.65625 -2.640625 6.582031 -2.894531 6.4375 -3.0625 C 6.289062 -3.226562 6.085938 -3.3125 5.828125 -3.3125 C 5.535156 -3.3125 5.300781 -3.210938 5.125 -3.015625 C 4.957031 -2.828125 4.875 -2.546875 4.875 -2.171875 L 4.875 0 L 3.609375 0 L 3.609375 -2.296875 C 3.609375 -2.972656 3.335938 -3.3125 2.796875 -3.3125 C 2.503906 -3.3125 2.269531 -3.210938 2.09375 -3.015625 C 1.925781 -2.828125 1.84375 -2.546875 1.84375 -2.171875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.84375 C 1.945312 -4.019531 2.144531 -4.15625 2.375 -4.25 C 2.601562 -4.351562 2.859375 -4.40625 3.140625 -4.40625 C 3.453125 -4.40625 3.726562 -4.34375 3.96875 -4.21875 C 4.21875 -4.101562 4.421875 -3.925781 4.578125 -3.6875 C 4.753906 -3.914062 4.976562 -4.09375 5.25 -4.21875 C 5.519531 -4.34375 5.816406 -4.40625 6.140625 -4.40625 Z M 6.140625 -4.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(447.348987, 288.872269)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(452.629576, 288.872269)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(454.91111, 288.872269)">
                                <g>
                                    <path
                                        d="M 0.671875 -5.640625 L 3.234375 -5.640625 C 3.847656 -5.640625 4.390625 -5.519531 4.859375 -5.28125 C 5.328125 -5.050781 5.691406 -4.722656 5.953125 -4.296875 C 6.210938 -3.878906 6.34375 -3.390625 6.34375 -2.828125 C 6.34375 -2.253906 6.210938 -1.753906 5.953125 -1.328125 C 5.691406 -0.910156 5.328125 -0.582031 4.859375 -0.34375 C 4.390625 -0.113281 3.847656 0 3.234375 0 L 0.671875 0 Z M 3.171875 -1.078125 C 3.734375 -1.078125 4.179688 -1.234375 4.515625 -1.546875 C 4.847656 -1.859375 5.015625 -2.285156 5.015625 -2.828125 C 5.015625 -3.359375 4.847656 -3.78125 4.515625 -4.09375 C 4.179688 -4.414062 3.734375 -4.578125 3.171875 -4.578125 L 1.96875 -4.578125 L 1.96875 -1.078125 Z M 3.171875 -1.078125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(461.570296, 288.872269)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(466.544526, 288.872269)">
                                <g>
                                    <path
                                        d="M 4.890625 -4.34375 L 2.921875 0.265625 C 2.722656 0.765625 2.476562 1.113281 2.1875 1.3125 C 1.894531 1.519531 1.539062 1.625 1.125 1.625 C 0.90625 1.625 0.679688 1.585938 0.453125 1.515625 C 0.234375 1.453125 0.0546875 1.359375 -0.078125 1.234375 L 0.375 0.34375 C 0.476562 0.425781 0.59375 0.488281 0.71875 0.53125 C 0.84375 0.582031 0.96875 0.609375 1.09375 0.609375 C 1.257812 0.609375 1.394531 0.566406 1.5 0.484375 C 1.613281 0.398438 1.710938 0.265625 1.796875 0.078125 L 1.8125 0.03125 L -0.0625 -4.34375 L 1.234375 -4.34375 L 2.453125 -1.390625 L 3.671875 -4.34375 Z M 4.890625 -4.34375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(307.438355, 327.795142)">
                                <g>
                                    <path
                                        d="M 0.671875 -5.640625 L 1.96875 -5.640625 L 1.96875 0 L 0.671875 0 Z M 0.671875 -5.640625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(310.082682, 327.795142)">
                                <g>
                                    <path
                                        d="M 5 -5.984375 L 5 0 L 3.796875 0 L 3.796875 -0.5 C 3.484375 -0.125 3.03125 0.0625 2.4375 0.0625 C 2.03125 0.0625 1.660156 -0.0234375 1.328125 -0.203125 C 1.003906 -0.390625 0.75 -0.648438 0.5625 -0.984375 C 0.375 -1.328125 0.28125 -1.722656 0.28125 -2.171875 C 0.28125 -2.617188 0.375 -3.007812 0.5625 -3.34375 C 0.75 -3.6875 1.003906 -3.945312 1.328125 -4.125 C 1.660156 -4.3125 2.03125 -4.40625 2.4375 -4.40625 C 2.988281 -4.40625 3.421875 -4.226562 3.734375 -3.875 L 3.734375 -5.984375 Z M 2.65625 -0.96875 C 2.976562 -0.96875 3.242188 -1.078125 3.453125 -1.296875 C 3.660156 -1.515625 3.765625 -1.804688 3.765625 -2.171875 C 3.765625 -2.535156 3.660156 -2.828125 3.453125 -3.046875 C 3.242188 -3.265625 2.976562 -3.375 2.65625 -3.375 C 2.332031 -3.375 2.066406 -3.265625 1.859375 -3.046875 C 1.648438 -2.828125 1.546875 -2.535156 1.546875 -2.171875 C 1.546875 -1.804688 1.648438 -1.515625 1.859375 -1.296875 C 2.066406 -1.078125 2.332031 -0.96875 2.65625 -0.96875 Z M 2.65625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(315.66156, 327.795142)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(320.748663, 327.795142)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(325.722894, 327.795142)">
                                <g>
                                    <path
                                        d="M 2.671875 0.0625 C 2.210938 0.0625 1.796875 -0.03125 1.421875 -0.21875 C 1.054688 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.054688 -3.921875 1.421875 -4.109375 C 1.796875 -4.304688 2.210938 -4.40625 2.671875 -4.40625 C 3.128906 -4.40625 3.53125 -4.304688 3.875 -4.109375 C 4.21875 -3.921875 4.46875 -3.648438 4.625 -3.296875 L 3.640625 -2.78125 C 3.421875 -3.175781 3.097656 -3.375 2.671875 -3.375 C 2.335938 -3.375 2.0625 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.796875 1.632812 -1.5 1.84375 -1.28125 C 2.0625 -1.070312 2.335938 -0.96875 2.671875 -0.96875 C 3.097656 -0.96875 3.421875 -1.164062 3.640625 -1.5625 L 4.625 -1.03125 C 4.46875 -0.6875 4.21875 -0.414062 3.875 -0.21875 C 3.53125 -0.03125 3.128906 0.0625 2.671875 0.0625 Z M 2.671875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(330.487517, 327.795142)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(332.914167, 327.795142)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.984375 -6.0625 L 4.34375 -6.0625 L 2.875 -4.890625 L 1.890625 -4.890625 Z M 2.984375 -6.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(338.194756, 327.795142)">
                                <g>
                                    <path
                                        d="M 3.21875 -4.40625 C 3.75 -4.40625 4.179688 -4.242188 4.515625 -3.921875 C 4.847656 -3.597656 5.015625 -3.117188 5.015625 -2.484375 L 5.015625 0 L 3.75 0 L 3.75 -2.296875 C 3.75 -2.640625 3.675781 -2.894531 3.53125 -3.0625 C 3.382812 -3.226562 3.164062 -3.3125 2.875 -3.3125 C 2.5625 -3.3125 2.3125 -3.210938 2.125 -3.015625 C 1.9375 -2.816406 1.84375 -2.523438 1.84375 -2.140625 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.828125 C 1.945312 -4.015625 2.15625 -4.15625 2.40625 -4.25 C 2.65625 -4.351562 2.925781 -4.40625 3.21875 -4.40625 Z M 3.21875 -4.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(515.210296, 223.856945)">
                                <g>
                                    <path
                                        d="M 5.046875 -1.046875 L 5.046875 0 L 0.671875 0 L 0.671875 -5.640625 L 4.9375 -5.640625 L 4.9375 -4.59375 L 1.96875 -4.59375 L 1.96875 -3.375 L 4.59375 -3.375 L 4.59375 -2.359375 L 1.96875 -2.359375 L 1.96875 -1.046875 Z M 5.046875 -1.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(520.619874, 223.856945)">
                                <g>
                                    <path
                                        d="M 3.21875 -4.40625 C 3.75 -4.40625 4.179688 -4.242188 4.515625 -3.921875 C 4.847656 -3.597656 5.015625 -3.117188 5.015625 -2.484375 L 5.015625 0 L 3.75 0 L 3.75 -2.296875 C 3.75 -2.640625 3.675781 -2.894531 3.53125 -3.0625 C 3.382812 -3.226562 3.164062 -3.3125 2.875 -3.3125 C 2.5625 -3.3125 2.3125 -3.210938 2.125 -3.015625 C 1.9375 -2.816406 1.84375 -2.523438 1.84375 -2.140625 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.828125 C 1.945312 -4.015625 2.15625 -4.15625 2.40625 -4.25 C 2.65625 -4.351562 2.925781 -4.40625 3.21875 -4.40625 Z M 3.21875 -4.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(526.190695, 223.856945)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(529.697652, 223.856945)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(533.172361, 223.856945)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(538.259464, 223.856945)">
                                <g>
                                    <path
                                        d="M 4.890625 -4.34375 L 3.0625 0 L 1.75 0 L -0.0625 -4.34375 L 1.234375 -4.34375 L 2.4375 -1.390625 L 3.671875 -4.34375 Z M 4.890625 -4.34375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(543.080521, 223.856945)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(545.507171, 223.856945)">
                                <g>
                                    <path
                                        d="M 2.046875 0.0625 C 1.679688 0.0625 1.328125 0.0195312 0.984375 -0.0625 C 0.640625 -0.15625 0.363281 -0.269531 0.15625 -0.40625 L 0.578125 -1.3125 C 0.773438 -1.1875 1.007812 -1.082031 1.28125 -1 C 1.550781 -0.925781 1.820312 -0.890625 2.09375 -0.890625 C 2.625 -0.890625 2.890625 -1.019531 2.890625 -1.28125 C 2.890625 -1.40625 2.816406 -1.492188 2.671875 -1.546875 C 2.523438 -1.597656 2.300781 -1.644531 2 -1.6875 C 1.644531 -1.738281 1.351562 -1.796875 1.125 -1.859375 C 0.894531 -1.929688 0.691406 -2.054688 0.515625 -2.234375 C 0.347656 -2.410156 0.265625 -2.664062 0.265625 -3 C 0.265625 -3.269531 0.34375 -3.507812 0.5 -3.71875 C 0.65625 -3.9375 0.882812 -4.101562 1.1875 -4.21875 C 1.5 -4.34375 1.863281 -4.40625 2.28125 -4.40625 C 2.582031 -4.40625 2.882812 -4.367188 3.1875 -4.296875 C 3.488281 -4.234375 3.738281 -4.140625 3.9375 -4.015625 L 3.515625 -3.125 C 3.140625 -3.34375 2.726562 -3.453125 2.28125 -3.453125 C 2.007812 -3.453125 1.804688 -3.410156 1.671875 -3.328125 C 1.535156 -3.253906 1.46875 -3.160156 1.46875 -3.046875 C 1.46875 -2.910156 1.539062 -2.816406 1.6875 -2.765625 C 1.832031 -2.710938 2.0625 -2.660156 2.375 -2.609375 C 2.726562 -2.554688 3.019531 -2.492188 3.25 -2.421875 C 3.476562 -2.359375 3.675781 -2.238281 3.84375 -2.0625 C 4.007812 -1.882812 4.09375 -1.632812 4.09375 -1.3125 C 4.09375 -1.039062 4.007812 -0.800781 3.84375 -0.59375 C 3.6875 -0.382812 3.453125 -0.222656 3.140625 -0.109375 C 2.828125 0.00390625 2.460938 0.0625 2.046875 0.0625 Z M 2.046875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(549.788077, 223.856945)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(553.295034, 223.856945)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(558.272574, 223.856945)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(520.463176, 235.143708)">
                                <g>
                                    <path
                                        d="M 2.46875 0.046875 C 2.050781 0.046875 1.648438 -0.0195312 1.265625 -0.15625 C 0.878906 -0.289062 0.582031 -0.46875 0.375 -0.6875 L 0.609375 -1.140625 C 0.816406 -0.941406 1.085938 -0.773438 1.421875 -0.640625 C 1.765625 -0.515625 2.113281 -0.453125 2.46875 -0.453125 C 2.976562 -0.453125 3.359375 -0.546875 3.609375 -0.734375 C 3.859375 -0.921875 3.984375 -1.160156 3.984375 -1.453125 C 3.984375 -1.679688 3.914062 -1.863281 3.78125 -2 C 3.644531 -2.132812 3.476562 -2.238281 3.28125 -2.3125 C 3.082031 -2.382812 2.804688 -2.460938 2.453125 -2.546875 C 2.023438 -2.648438 1.6875 -2.75 1.4375 -2.84375 C 1.1875 -2.945312 0.96875 -3.101562 0.78125 -3.3125 C 0.601562 -3.519531 0.515625 -3.796875 0.515625 -4.140625 C 0.515625 -4.429688 0.585938 -4.691406 0.734375 -4.921875 C 0.890625 -5.148438 1.125 -5.332031 1.4375 -5.46875 C 1.75 -5.613281 2.132812 -5.6875 2.59375 -5.6875 C 2.914062 -5.6875 3.226562 -5.640625 3.53125 -5.546875 C 3.84375 -5.460938 4.113281 -5.34375 4.34375 -5.1875 L 4.140625 -4.71875 C 3.910156 -4.875 3.660156 -4.988281 3.390625 -5.0625 C 3.117188 -5.144531 2.851562 -5.1875 2.59375 -5.1875 C 2.101562 -5.1875 1.734375 -5.085938 1.484375 -4.890625 C 1.234375 -4.703125 1.109375 -4.457031 1.109375 -4.15625 C 1.109375 -3.9375 1.175781 -3.753906 1.3125 -3.609375 C 1.445312 -3.472656 1.617188 -3.367188 1.828125 -3.296875 C 2.035156 -3.222656 2.3125 -3.144531 2.65625 -3.0625 C 3.070312 -2.957031 3.40625 -2.851562 3.65625 -2.75 C 3.914062 -2.65625 4.132812 -2.503906 4.3125 -2.296875 C 4.488281 -2.097656 4.578125 -1.828125 4.578125 -1.484375 C 4.578125 -1.203125 4.5 -0.941406 4.34375 -0.703125 C 4.195312 -0.472656 3.960938 -0.289062 3.640625 -0.15625 C 3.328125 -0.0195312 2.9375 0.046875 2.46875 0.046875 Z M 2.46875 0.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(525.421285, 235.143708)">
                                <g>
                                    <path
                                        d="M 2.53125 0.046875 C 2.125 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.125 -4.265625 2.53125 -4.265625 C 2.9375 -4.265625 3.300781 -4.171875 3.625 -3.984375 C 3.957031 -3.804688 4.21875 -3.550781 4.40625 -3.21875 C 4.59375 -2.894531 4.6875 -2.53125 4.6875 -2.125 C 4.6875 -1.707031 4.59375 -1.332031 4.40625 -1 C 4.21875 -0.675781 3.957031 -0.421875 3.625 -0.234375 C 3.300781 -0.046875 2.9375 0.046875 2.53125 0.046875 Z M 2.53125 -0.46875 C 2.832031 -0.46875 3.101562 -0.535156 3.34375 -0.671875 C 3.582031 -0.804688 3.769531 -1 3.90625 -1.25 C 4.039062 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.039062 -2.734375 3.90625 -2.984375 C 3.769531 -3.234375 3.582031 -3.425781 3.34375 -3.5625 C 3.101562 -3.695312 2.832031 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 2.53125 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(530.47614, 235.143708)">
                                <g>
                                    <path
                                        d="M 0.796875 -5.984375 L 1.375 -5.984375 L 1.375 0 L 0.796875 0 Z M 0.796875 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(532.644807, 235.143708)">
                                <g>
                                    <path
                                        d="M 4.625 -4.234375 L 4.625 0 L 4.078125 0 L 4.078125 -0.78125 C 3.921875 -0.519531 3.710938 -0.316406 3.453125 -0.171875 C 3.191406 -0.0234375 2.890625 0.046875 2.546875 0.046875 C 1.992188 0.046875 1.554688 -0.109375 1.234375 -0.421875 C 0.921875 -0.734375 0.765625 -1.1875 0.765625 -1.78125 L 0.765625 -4.234375 L 1.328125 -4.234375 L 1.328125 -1.84375 C 1.328125 -1.394531 1.4375 -1.050781 1.65625 -0.8125 C 1.875 -0.582031 2.191406 -0.46875 2.609375 -0.46875 C 3.046875 -0.46875 3.394531 -0.601562 3.65625 -0.875 C 3.914062 -1.15625 4.046875 -1.535156 4.046875 -2.015625 L 4.046875 -4.234375 Z M 4.625 -4.234375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(538.070512, 235.143708)">
                                <g>
                                    <path
                                        d="M 2.5625 0.046875 C 2.132812 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.132812 -4.265625 2.5625 -4.265625 C 2.925781 -4.265625 3.25 -4.191406 3.53125 -4.046875 C 3.820312 -3.910156 4.050781 -3.707031 4.21875 -3.4375 L 3.796875 -3.140625 C 3.648438 -3.347656 3.46875 -3.503906 3.25 -3.609375 C 3.039062 -3.710938 2.8125 -3.765625 2.5625 -3.765625 C 2.25 -3.765625 1.96875 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.789062 1.019531 -1.5 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.96875 -0.535156 2.25 -0.46875 2.5625 -0.46875 C 2.8125 -0.46875 3.039062 -0.519531 3.25 -0.625 C 3.46875 -0.726562 3.648438 -0.882812 3.796875 -1.09375 L 4.21875 -0.796875 C 4.050781 -0.523438 3.820312 -0.316406 3.53125 -0.171875 C 3.238281 -0.0234375 2.914062 0.046875 2.5625 0.046875 Z M 2.5625 0.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(542.609401, 235.143708)">
                                <g>
                                    <path
                                        d="M 0.796875 -4.234375 L 1.375 -4.234375 L 1.375 0 L 0.796875 0 Z M 1.078125 -5.171875 C 0.960938 -5.171875 0.863281 -5.207031 0.78125 -5.28125 C 0.695312 -5.363281 0.65625 -5.460938 0.65625 -5.578125 C 0.65625 -5.679688 0.695312 -5.773438 0.78125 -5.859375 C 0.863281 -5.941406 0.960938 -5.984375 1.078125 -5.984375 C 1.203125 -5.984375 1.300781 -5.941406 1.375 -5.859375 C 1.457031 -5.785156 1.5 -5.695312 1.5 -5.59375 C 1.5 -5.46875 1.457031 -5.363281 1.375 -5.28125 C 1.300781 -5.207031 1.203125 -5.171875 1.078125 -5.171875 Z M 1.078125 -5.171875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(544.778068, 235.143708)">
                                <g>
                                    <path
                                        d="M 2.53125 0.046875 C 2.125 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.125 -4.265625 2.53125 -4.265625 C 2.9375 -4.265625 3.300781 -4.171875 3.625 -3.984375 C 3.957031 -3.804688 4.21875 -3.550781 4.40625 -3.21875 C 4.59375 -2.894531 4.6875 -2.53125 4.6875 -2.125 C 4.6875 -1.707031 4.59375 -1.332031 4.40625 -1 C 4.21875 -0.675781 3.957031 -0.421875 3.625 -0.234375 C 3.300781 -0.046875 2.9375 0.046875 2.53125 0.046875 Z M 2.53125 -0.46875 C 2.832031 -0.46875 3.101562 -0.535156 3.34375 -0.671875 C 3.582031 -0.804688 3.769531 -1 3.90625 -1.25 C 4.039062 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.039062 -2.734375 3.90625 -2.984375 C 3.769531 -3.234375 3.582031 -3.425781 3.34375 -3.5625 C 3.101562 -3.695312 2.832031 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 3.09375 -5.90625 L 3.859375 -5.90625 L 2.5625 -4.90625 L 2 -4.90625 Z M 3.09375 -5.90625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(549.832922, 235.143708)">
                                <g>
                                    <path
                                        d="M 2.953125 -4.265625 C 3.484375 -4.265625 3.90625 -4.109375 4.21875 -3.796875 C 4.539062 -3.492188 4.703125 -3.046875 4.703125 -2.453125 L 4.703125 0 L 4.125 0 L 4.125 -2.40625 C 4.125 -2.84375 4.015625 -3.175781 3.796875 -3.40625 C 3.578125 -3.632812 3.265625 -3.75 2.859375 -3.75 C 2.398438 -3.75 2.035156 -3.613281 1.765625 -3.34375 C 1.503906 -3.070312 1.375 -2.695312 1.375 -2.21875 L 1.375 0 L 0.796875 0 L 0.796875 -4.234375 L 1.34375 -4.234375 L 1.34375 -3.453125 C 1.5 -3.710938 1.710938 -3.910156 1.984375 -4.046875 C 2.265625 -4.191406 2.585938 -4.265625 2.953125 -4.265625 Z M 2.953125 -4.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(553.626319, 189.85843)">
                                <g>
                                    <path
                                        d="M 5.8125 0 L 5.796875 -3.390625 L 4.140625 -0.59375 L 3.546875 -0.59375 L 1.890625 -3.3125 L 1.890625 0 L 0.671875 0 L 0.671875 -5.640625 L 1.75 -5.640625 L 3.859375 -2.140625 L 5.9375 -5.640625 L 7.015625 -5.640625 L 7.03125 0 Z M 5.8125 0 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(561.325495, 189.85843)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(566.606084, 189.85843)">
                                <g>
                                    <path
                                        d="M 5 -5.984375 L 5 0 L 3.796875 0 L 3.796875 -0.5 C 3.484375 -0.125 3.03125 0.0625 2.4375 0.0625 C 2.03125 0.0625 1.660156 -0.0234375 1.328125 -0.203125 C 1.003906 -0.390625 0.75 -0.648438 0.5625 -0.984375 C 0.375 -1.328125 0.28125 -1.722656 0.28125 -2.171875 C 0.28125 -2.617188 0.375 -3.007812 0.5625 -3.34375 C 0.75 -3.6875 1.003906 -3.945312 1.328125 -4.125 C 1.660156 -4.3125 2.03125 -4.40625 2.4375 -4.40625 C 2.988281 -4.40625 3.421875 -4.226562 3.734375 -3.875 L 3.734375 -5.984375 Z M 2.65625 -0.96875 C 2.976562 -0.96875 3.242188 -1.078125 3.453125 -1.296875 C 3.660156 -1.515625 3.765625 -1.804688 3.765625 -2.171875 C 3.765625 -2.535156 3.660156 -2.828125 3.453125 -3.046875 C 3.242188 -3.265625 2.976562 -3.375 2.65625 -3.375 C 2.332031 -3.375 2.066406 -3.265625 1.859375 -3.046875 C 1.648438 -2.828125 1.546875 -2.535156 1.546875 -2.171875 C 1.546875 -1.804688 1.648438 -1.515625 1.859375 -1.296875 C 2.066406 -1.078125 2.332031 -0.96875 2.65625 -0.96875 Z M 2.65625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(572.184962, 189.85843)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(577.272066, 189.85843)">
                                <g>
                                    <path
                                        d="M 0.578125 -5.984375 L 1.84375 -5.984375 L 1.84375 0 L 0.578125 0 Z M 0.578125 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(579.698716, 189.85843)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(546.74215, 201.145194)">
                                <g>
                                    <path
                                        d="M 4.671875 -5.984375 L 4.671875 0 L 4.125 0 L 4.125 -0.84375 C 3.945312 -0.550781 3.71875 -0.328125 3.4375 -0.171875 C 3.15625 -0.0234375 2.835938 0.046875 2.484375 0.046875 C 2.085938 0.046875 1.726562 -0.046875 1.40625 -0.234375 C 1.082031 -0.421875 0.828125 -0.675781 0.640625 -1 C 0.460938 -1.320312 0.375 -1.695312 0.375 -2.125 C 0.375 -2.539062 0.460938 -2.910156 0.640625 -3.234375 C 0.828125 -3.566406 1.082031 -3.820312 1.40625 -4 C 1.726562 -4.175781 2.085938 -4.265625 2.484375 -4.265625 C 2.828125 -4.265625 3.132812 -4.191406 3.40625 -4.046875 C 3.6875 -3.910156 3.914062 -3.707031 4.09375 -3.4375 L 4.09375 -5.984375 Z M 2.53125 -0.46875 C 2.820312 -0.46875 3.085938 -0.535156 3.328125 -0.671875 C 3.566406 -0.804688 3.753906 -1 3.890625 -1.25 C 4.035156 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.035156 -2.734375 3.890625 -2.984375 C 3.753906 -3.234375 3.566406 -3.425781 3.328125 -3.5625 C 3.085938 -3.695312 2.820312 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 2.53125 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(552.208161, 201.145194)">
                                <g>
                                    <path
                                        d="M 4.484375 -1.9375 L 0.9375 -1.9375 C 0.96875 -1.5 1.132812 -1.144531 1.4375 -0.875 C 1.75 -0.601562 2.140625 -0.46875 2.609375 -0.46875 C 2.867188 -0.46875 3.109375 -0.515625 3.328125 -0.609375 C 3.554688 -0.703125 3.75 -0.84375 3.90625 -1.03125 L 4.234375 -0.65625 C 4.046875 -0.425781 3.8125 -0.25 3.53125 -0.125 C 3.25 -0.0078125 2.9375 0.046875 2.59375 0.046875 C 2.15625 0.046875 1.769531 -0.046875 1.4375 -0.234375 C 1.101562 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.460938 -2.894531 0.640625 -3.21875 C 0.816406 -3.550781 1.0625 -3.804688 1.375 -3.984375 C 1.695312 -4.171875 2.050781 -4.265625 2.4375 -4.265625 C 2.832031 -4.265625 3.1875 -4.171875 3.5 -3.984375 C 3.8125 -3.804688 4.054688 -3.554688 4.234375 -3.234375 C 4.410156 -2.910156 4.5 -2.539062 4.5 -2.125 Z M 2.4375 -3.78125 C 2.03125 -3.78125 1.6875 -3.648438 1.40625 -3.390625 C 1.132812 -3.128906 0.976562 -2.789062 0.9375 -2.375 L 3.953125 -2.375 C 3.910156 -2.789062 3.75 -3.128906 3.46875 -3.390625 C 3.195312 -3.648438 2.851562 -3.78125 2.4375 -3.78125 Z M 2.4375 -3.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(557.077588, 201.145194)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(559.189821, 201.145194)">
                                <g>
                                    <path
                                        d="M 2.953125 -4.265625 C 3.484375 -4.265625 3.90625 -4.109375 4.21875 -3.796875 C 4.539062 -3.492188 4.703125 -3.046875 4.703125 -2.453125 L 4.703125 0 L 4.125 0 L 4.125 -2.40625 C 4.125 -2.84375 4.015625 -3.175781 3.796875 -3.40625 C 3.578125 -3.632812 3.265625 -3.75 2.859375 -3.75 C 2.398438 -3.75 2.035156 -3.613281 1.765625 -3.34375 C 1.503906 -3.070312 1.375 -2.695312 1.375 -2.21875 L 1.375 0 L 0.796875 0 L 0.796875 -4.234375 L 1.34375 -4.234375 L 1.34375 -3.453125 C 1.5 -3.710938 1.710938 -3.910156 1.984375 -4.046875 C 2.265625 -4.191406 2.585938 -4.265625 2.953125 -4.265625 Z M 2.953125 -4.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(564.647774, 201.145194)">
                                <g>
                                    <path
                                        d="M 4.484375 -1.9375 L 0.9375 -1.9375 C 0.96875 -1.5 1.132812 -1.144531 1.4375 -0.875 C 1.75 -0.601562 2.140625 -0.46875 2.609375 -0.46875 C 2.867188 -0.46875 3.109375 -0.515625 3.328125 -0.609375 C 3.554688 -0.703125 3.75 -0.84375 3.90625 -1.03125 L 4.234375 -0.65625 C 4.046875 -0.425781 3.8125 -0.25 3.53125 -0.125 C 3.25 -0.0078125 2.9375 0.046875 2.59375 0.046875 C 2.15625 0.046875 1.769531 -0.046875 1.4375 -0.234375 C 1.101562 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.460938 -2.894531 0.640625 -3.21875 C 0.816406 -3.550781 1.0625 -3.804688 1.375 -3.984375 C 1.695312 -4.171875 2.050781 -4.265625 2.4375 -4.265625 C 2.832031 -4.265625 3.1875 -4.171875 3.5 -3.984375 C 3.8125 -3.804688 4.054688 -3.554688 4.234375 -3.234375 C 4.410156 -2.910156 4.5 -2.539062 4.5 -2.125 Z M 2.4375 -3.78125 C 2.03125 -3.78125 1.6875 -3.648438 1.40625 -3.390625 C 1.132812 -3.128906 0.976562 -2.789062 0.9375 -2.375 L 3.953125 -2.375 C 3.910156 -2.789062 3.75 -3.128906 3.46875 -3.390625 C 3.195312 -3.648438 2.851562 -3.78125 2.4375 -3.78125 Z M 2.4375 -3.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(569.517201, 201.145194)">
                                <g>
                                    <path
                                        d="M 4.71875 -4.234375 L 4.71875 -0.515625 C 4.71875 0.203125 4.539062 0.734375 4.1875 1.078125 C 3.84375 1.429688 3.316406 1.609375 2.609375 1.609375 C 2.210938 1.609375 1.835938 1.546875 1.484375 1.421875 C 1.128906 1.304688 0.84375 1.148438 0.625 0.953125 L 0.921875 0.515625 C 1.117188 0.703125 1.363281 0.84375 1.65625 0.9375 C 1.957031 1.039062 2.269531 1.09375 2.59375 1.09375 C 3.125 1.09375 3.515625 0.96875 3.765625 0.71875 C 4.023438 0.46875 4.15625 0.0820312 4.15625 -0.4375 L 4.15625 -0.984375 C 3.976562 -0.710938 3.742188 -0.503906 3.453125 -0.359375 C 3.171875 -0.222656 2.851562 -0.15625 2.5 -0.15625 C 2.101562 -0.15625 1.738281 -0.242188 1.40625 -0.421875 C 1.082031 -0.597656 0.828125 -0.84375 0.640625 -1.15625 C 0.460938 -1.46875 0.375 -1.820312 0.375 -2.21875 C 0.375 -2.625 0.460938 -2.976562 0.640625 -3.28125 C 0.828125 -3.59375 1.082031 -3.832031 1.40625 -4 C 1.726562 -4.175781 2.09375 -4.265625 2.5 -4.265625 C 2.863281 -4.265625 3.1875 -4.191406 3.46875 -4.046875 C 3.757812 -3.910156 3.992188 -3.703125 4.171875 -3.421875 L 4.171875 -4.234375 Z M 2.5625 -0.671875 C 2.863281 -0.671875 3.132812 -0.734375 3.375 -0.859375 C 3.625 -0.992188 3.816406 -1.179688 3.953125 -1.421875 C 4.097656 -1.660156 4.171875 -1.925781 4.171875 -2.21875 C 4.171875 -2.519531 4.097656 -2.785156 3.953125 -3.015625 C 3.816406 -3.253906 3.628906 -3.4375 3.390625 -3.5625 C 3.148438 -3.695312 2.875 -3.765625 2.5625 -3.765625 C 2.25 -3.765625 1.96875 -3.703125 1.71875 -3.578125 C 1.476562 -3.453125 1.289062 -3.269531 1.15625 -3.03125 C 1.019531 -2.789062 0.953125 -2.519531 0.953125 -2.21875 C 0.953125 -1.925781 1.019531 -1.660156 1.15625 -1.421875 C 1.289062 -1.179688 1.476562 -0.992188 1.71875 -0.859375 C 1.96875 -0.734375 2.25 -0.671875 2.5625 -0.671875 Z M 2.5625 -0.671875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(575.04771, 201.145194)">
                                <g>
                                    <path
                                        d="M 2.53125 0.046875 C 2.125 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.125 -4.265625 2.53125 -4.265625 C 2.9375 -4.265625 3.300781 -4.171875 3.625 -3.984375 C 3.957031 -3.804688 4.21875 -3.550781 4.40625 -3.21875 C 4.59375 -2.894531 4.6875 -2.53125 4.6875 -2.125 C 4.6875 -1.707031 4.59375 -1.332031 4.40625 -1 C 4.21875 -0.675781 3.957031 -0.421875 3.625 -0.234375 C 3.300781 -0.046875 2.9375 0.046875 2.53125 0.046875 Z M 2.53125 -0.46875 C 2.832031 -0.46875 3.101562 -0.535156 3.34375 -0.671875 C 3.582031 -0.804688 3.769531 -1 3.90625 -1.25 C 4.039062 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.039062 -2.734375 3.90625 -2.984375 C 3.769531 -3.234375 3.582031 -3.425781 3.34375 -3.5625 C 3.101562 -3.695312 2.832031 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 2.53125 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(580.102564, 201.145194)">
                                <g>
                                    <path
                                        d="M 2.5625 0.046875 C 2.132812 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.132812 -4.265625 2.5625 -4.265625 C 2.925781 -4.265625 3.25 -4.191406 3.53125 -4.046875 C 3.820312 -3.910156 4.050781 -3.707031 4.21875 -3.4375 L 3.796875 -3.140625 C 3.648438 -3.347656 3.46875 -3.503906 3.25 -3.609375 C 3.039062 -3.710938 2.8125 -3.765625 2.5625 -3.765625 C 2.25 -3.765625 1.96875 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.789062 1.019531 -1.5 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.96875 -0.535156 2.25 -0.46875 2.5625 -0.46875 C 2.8125 -0.46875 3.039062 -0.519531 3.25 -0.625 C 3.46875 -0.726562 3.648438 -0.882812 3.796875 -1.09375 L 4.21875 -0.796875 C 4.050781 -0.523438 3.820312 -0.316406 3.53125 -0.171875 C 3.238281 -0.0234375 2.914062 0.046875 2.5625 0.046875 Z M 2.5625 0.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(584.641454, 201.145194)">
                                <g>
                                    <path
                                        d="M 0.796875 -4.234375 L 1.375 -4.234375 L 1.375 0 L 0.796875 0 Z M 1.078125 -5.171875 C 0.960938 -5.171875 0.863281 -5.207031 0.78125 -5.28125 C 0.695312 -5.363281 0.65625 -5.460938 0.65625 -5.578125 C 0.65625 -5.679688 0.695312 -5.773438 0.78125 -5.859375 C 0.863281 -5.941406 0.960938 -5.984375 1.078125 -5.984375 C 1.203125 -5.984375 1.300781 -5.941406 1.375 -5.859375 C 1.457031 -5.785156 1.5 -5.695312 1.5 -5.59375 C 1.5 -5.46875 1.457031 -5.363281 1.375 -5.28125 C 1.300781 -5.207031 1.203125 -5.171875 1.078125 -5.171875 Z M 1.078125 -5.171875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(586.81012, 201.145194)">
                                <g>
                                    <path
                                        d="M 2.53125 0.046875 C 2.125 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.125 -4.265625 2.53125 -4.265625 C 2.9375 -4.265625 3.300781 -4.171875 3.625 -3.984375 C 3.957031 -3.804688 4.21875 -3.550781 4.40625 -3.21875 C 4.59375 -2.894531 4.6875 -2.53125 4.6875 -2.125 C 4.6875 -1.707031 4.59375 -1.332031 4.40625 -1 C 4.21875 -0.675781 3.957031 -0.421875 3.625 -0.234375 C 3.300781 -0.046875 2.9375 0.046875 2.53125 0.046875 Z M 2.53125 -0.46875 C 2.832031 -0.46875 3.101562 -0.535156 3.34375 -0.671875 C 3.582031 -0.804688 3.769531 -1 3.90625 -1.25 C 4.039062 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.039062 -2.734375 3.90625 -2.984375 C 3.769531 -3.234375 3.582031 -3.425781 3.34375 -3.5625 C 3.101562 -3.695312 2.832031 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 2.53125 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(583.032065, 165.165466)">
                                <g>
                                    <path
                                        d="M 2.484375 -5.640625 L 2.484375 0 L 1.1875 0 L 1.1875 -4.59375 L 0.0625 -4.59375 L 0.0625 -5.640625 Z M 2.484375 -5.640625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(586.192357, 165.165466)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(589.667066, 165.165466)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(594.641296, 165.165466)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(596.92283, 165.165466)">
                                <g>
                                    <path
                                        d="M 6.09375 -5.640625 L 3.65625 0 L 2.359375 0 L -0.078125 -5.640625 L 1.34375 -5.640625 L 3.0625 -1.609375 L 4.796875 -5.640625 Z M 6.09375 -5.640625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(602.937056, 165.165466)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(608.024159, 165.165466)">
                                <g>
                                    <path
                                        d="M 3.21875 -4.40625 C 3.75 -4.40625 4.179688 -4.242188 4.515625 -3.921875 C 4.847656 -3.597656 5.015625 -3.117188 5.015625 -2.484375 L 5.015625 0 L 3.75 0 L 3.75 -2.296875 C 3.75 -2.640625 3.675781 -2.894531 3.53125 -3.0625 C 3.382812 -3.226562 3.164062 -3.3125 2.875 -3.3125 C 2.5625 -3.3125 2.3125 -3.210938 2.125 -3.015625 C 1.9375 -2.816406 1.84375 -2.523438 1.84375 -2.140625 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.828125 C 1.945312 -4.015625 2.15625 -4.15625 2.40625 -4.25 C 2.65625 -4.351562 2.925781 -4.40625 3.21875 -4.40625 Z M 3.21875 -4.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(613.59498, 165.165466)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(617.101938, 165.165466)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(566.033926, 136.719431)">
                                <g>
                                    <path
                                        d="M 3.109375 -5.640625 C 3.609375 -5.640625 4.039062 -5.554688 4.40625 -5.390625 C 4.78125 -5.222656 5.066406 -4.984375 5.265625 -4.671875 C 5.460938 -4.367188 5.5625 -4.007812 5.5625 -3.59375 C 5.5625 -3.175781 5.460938 -2.8125 5.265625 -2.5 C 5.066406 -2.195312 4.78125 -1.960938 4.40625 -1.796875 C 4.039062 -1.640625 3.609375 -1.5625 3.109375 -1.5625 L 1.96875 -1.5625 L 1.96875 0 L 0.671875 0 L 0.671875 -5.640625 Z M 3.046875 -2.625 C 3.429688 -2.625 3.722656 -2.707031 3.921875 -2.875 C 4.128906 -3.039062 4.234375 -3.28125 4.234375 -3.59375 C 4.234375 -3.914062 4.128906 -4.160156 3.921875 -4.328125 C 3.722656 -4.492188 3.429688 -4.578125 3.046875 -4.578125 L 1.96875 -4.578125 L 1.96875 -2.625 Z M 3.046875 -2.625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(571.935285, 136.719431)">
                                <g>
                                    <path
                                        d="M 4.953125 -4.34375 L 4.953125 0 L 3.75 0 L 3.75 -0.515625 C 3.582031 -0.328125 3.382812 -0.179688 3.15625 -0.078125 C 2.925781 0.015625 2.675781 0.0625 2.40625 0.0625 C 1.84375 0.0625 1.394531 -0.0976562 1.0625 -0.421875 C 0.726562 -0.753906 0.5625 -1.242188 0.5625 -1.890625 L 0.5625 -4.34375 L 1.8125 -4.34375 L 1.8125 -2.078125 C 1.8125 -1.378906 2.101562 -1.03125 2.6875 -1.03125 C 2.988281 -1.03125 3.226562 -1.125 3.40625 -1.3125 C 3.59375 -1.507812 3.6875 -1.800781 3.6875 -2.1875 L 3.6875 -4.34375 Z M 4.953125 -4.34375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(577.473857, 136.719431)">
                                <g>
                                    <path
                                        d="M 3.21875 -4.40625 C 3.75 -4.40625 4.179688 -4.242188 4.515625 -3.921875 C 4.847656 -3.597656 5.015625 -3.117188 5.015625 -2.484375 L 5.015625 0 L 3.75 0 L 3.75 -2.296875 C 3.75 -2.640625 3.675781 -2.894531 3.53125 -3.0625 C 3.382812 -3.226562 3.164062 -3.3125 2.875 -3.3125 C 2.5625 -3.3125 2.3125 -3.210938 2.125 -3.015625 C 1.9375 -2.816406 1.84375 -2.523438 1.84375 -2.140625 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.828125 C 1.945312 -4.015625 2.15625 -4.15625 2.40625 -4.25 C 2.65625 -4.351562 2.925781 -4.40625 3.21875 -4.40625 Z M 3.21875 -4.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(583.044677, 136.719431)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(586.551635, 136.719431)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(591.832224, 136.719431)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(594.113758, 136.719431)">
                                <g>
                                    <path
                                        d="M 5 -5.984375 L 5 0 L 3.796875 0 L 3.796875 -0.5 C 3.484375 -0.125 3.03125 0.0625 2.4375 0.0625 C 2.03125 0.0625 1.660156 -0.0234375 1.328125 -0.203125 C 1.003906 -0.390625 0.75 -0.648438 0.5625 -0.984375 C 0.375 -1.328125 0.28125 -1.722656 0.28125 -2.171875 C 0.28125 -2.617188 0.375 -3.007812 0.5625 -3.34375 C 0.75 -3.6875 1.003906 -3.945312 1.328125 -4.125 C 1.660156 -4.3125 2.03125 -4.40625 2.4375 -4.40625 C 2.988281 -4.40625 3.421875 -4.226562 3.734375 -3.875 L 3.734375 -5.984375 Z M 2.65625 -0.96875 C 2.976562 -0.96875 3.242188 -1.078125 3.453125 -1.296875 C 3.660156 -1.515625 3.765625 -1.804688 3.765625 -2.171875 C 3.765625 -2.535156 3.660156 -2.828125 3.453125 -3.046875 C 3.242188 -3.265625 2.976562 -3.375 2.65625 -3.375 C 2.332031 -3.375 2.066406 -3.265625 1.859375 -3.046875 C 1.648438 -2.828125 1.546875 -2.535156 1.546875 -2.171875 C 1.546875 -1.804688 1.648438 -1.515625 1.859375 -1.296875 C 2.066406 -1.078125 2.332031 -0.96875 2.65625 -0.96875 Z M 2.65625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(599.692636, 136.719431)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(604.77974, 136.719431)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(607.061274, 136.719431)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(612.148377, 136.719431)">
                                <g>
                                    <path
                                        d="M 4.984375 -4.34375 L 4.984375 1.5625 L 3.71875 1.5625 L 3.71875 -0.453125 C 3.40625 -0.109375 2.972656 0.0625 2.421875 0.0625 C 2.015625 0.0625 1.644531 -0.0234375 1.3125 -0.203125 C 0.988281 -0.390625 0.734375 -0.648438 0.546875 -0.984375 C 0.359375 -1.328125 0.265625 -1.722656 0.265625 -2.171875 C 0.265625 -2.617188 0.359375 -3.007812 0.546875 -3.34375 C 0.734375 -3.6875 0.988281 -3.945312 1.3125 -4.125 C 1.644531 -4.3125 2.015625 -4.40625 2.421875 -4.40625 C 3.015625 -4.40625 3.46875 -4.21875 3.78125 -3.84375 L 3.78125 -4.34375 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(617.711134, 136.719431)">
                                <g>
                                    <path
                                        d="M 4.953125 -4.34375 L 4.953125 0 L 3.75 0 L 3.75 -0.515625 C 3.582031 -0.328125 3.382812 -0.179688 3.15625 -0.078125 C 2.925781 0.015625 2.675781 0.0625 2.40625 0.0625 C 1.84375 0.0625 1.394531 -0.0976562 1.0625 -0.421875 C 0.726562 -0.753906 0.5625 -1.242188 0.5625 -1.890625 L 0.5625 -4.34375 L 1.8125 -4.34375 L 1.8125 -2.078125 C 1.8125 -1.378906 2.101562 -1.03125 2.6875 -1.03125 C 2.988281 -1.03125 3.226562 -1.125 3.40625 -1.3125 C 3.59375 -1.507812 3.6875 -1.800781 3.6875 -2.1875 L 3.6875 -4.34375 Z M 4.953125 -4.34375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(623.249706, 136.719431)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(625.676356, 136.719431)">
                                <g>
                                    <path
                                        d="M 0.578125 -5.984375 L 1.84375 -5.984375 L 1.84375 0 L 0.578125 0 Z M 0.578125 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(628.103006, 136.719431)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(630.529655, 136.719431)">
                                <g>
                                    <path
                                        d="M 3.140625 -4.40625 C 3.546875 -4.40625 3.910156 -4.3125 4.234375 -4.125 C 4.566406 -3.9375 4.828125 -3.675781 5.015625 -3.34375 C 5.210938 -3.007812 5.3125 -2.617188 5.3125 -2.171875 C 5.3125 -1.722656 5.210938 -1.328125 5.015625 -0.984375 C 4.828125 -0.648438 4.566406 -0.390625 4.234375 -0.203125 C 3.910156 -0.0234375 3.546875 0.0625 3.140625 0.0625 C 2.546875 0.0625 2.09375 -0.125 1.78125 -0.5 L 1.78125 0 L 0.578125 0 L 0.578125 -5.984375 L 1.84375 -5.984375 L 1.84375 -3.875 C 2.15625 -4.226562 2.585938 -4.40625 3.140625 -4.40625 Z M 2.921875 -0.96875 C 3.242188 -0.96875 3.507812 -1.078125 3.71875 -1.296875 C 3.925781 -1.515625 4.03125 -1.804688 4.03125 -2.171875 C 4.03125 -2.535156 3.925781 -2.828125 3.71875 -3.046875 C 3.507812 -3.265625 3.242188 -3.375 2.921875 -3.375 C 2.597656 -3.375 2.332031 -3.265625 2.125 -3.046875 C 1.925781 -2.828125 1.828125 -2.535156 1.828125 -2.171875 C 1.828125 -1.804688 1.925781 -1.515625 2.125 -1.296875 C 2.332031 -1.078125 2.597656 -0.96875 2.921875 -0.96875 Z M 2.921875 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(636.092412, 136.719431)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(639.567121, 136.719431)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(641.993771, 136.719431)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(632.523191, 95.638846)">
                                <g>
                                    <path
                                        d="M 5.046875 -1.046875 L 5.046875 0 L 0.671875 0 L 0.671875 -5.640625 L 4.9375 -5.640625 L 4.9375 -4.59375 L 1.96875 -4.59375 L 1.96875 -3.375 L 4.59375 -3.375 L 4.59375 -2.359375 L 1.96875 -2.359375 L 1.96875 -1.046875 Z M 5.046875 -1.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(637.932769, 95.638846)">
                                <g>
                                    <path
                                        d="M 2.046875 0.0625 C 1.679688 0.0625 1.328125 0.0195312 0.984375 -0.0625 C 0.640625 -0.15625 0.363281 -0.269531 0.15625 -0.40625 L 0.578125 -1.3125 C 0.773438 -1.1875 1.007812 -1.082031 1.28125 -1 C 1.550781 -0.925781 1.820312 -0.890625 2.09375 -0.890625 C 2.625 -0.890625 2.890625 -1.019531 2.890625 -1.28125 C 2.890625 -1.40625 2.816406 -1.492188 2.671875 -1.546875 C 2.523438 -1.597656 2.300781 -1.644531 2 -1.6875 C 1.644531 -1.738281 1.351562 -1.796875 1.125 -1.859375 C 0.894531 -1.929688 0.691406 -2.054688 0.515625 -2.234375 C 0.347656 -2.410156 0.265625 -2.664062 0.265625 -3 C 0.265625 -3.269531 0.34375 -3.507812 0.5 -3.71875 C 0.65625 -3.9375 0.882812 -4.101562 1.1875 -4.21875 C 1.5 -4.34375 1.863281 -4.40625 2.28125 -4.40625 C 2.582031 -4.40625 2.882812 -4.367188 3.1875 -4.296875 C 3.488281 -4.234375 3.738281 -4.140625 3.9375 -4.015625 L 3.515625 -3.125 C 3.140625 -3.34375 2.726562 -3.453125 2.28125 -3.453125 C 2.007812 -3.453125 1.804688 -3.410156 1.671875 -3.328125 C 1.535156 -3.253906 1.46875 -3.160156 1.46875 -3.046875 C 1.46875 -2.910156 1.539062 -2.816406 1.6875 -2.765625 C 1.832031 -2.710938 2.0625 -2.660156 2.375 -2.609375 C 2.726562 -2.554688 3.019531 -2.492188 3.25 -2.421875 C 3.476562 -2.359375 3.675781 -2.238281 3.84375 -2.0625 C 4.007812 -1.882812 4.09375 -1.632812 4.09375 -1.3125 C 4.09375 -1.039062 4.007812 -0.800781 3.84375 -0.59375 C 3.6875 -0.382812 3.453125 -0.222656 3.140625 -0.109375 C 2.828125 0.00390625 2.460938 0.0625 2.046875 0.0625 Z M 2.046875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(642.213675, 95.638846)">
                                <g>
                                    <path
                                        d="M 2.671875 0.0625 C 2.210938 0.0625 1.796875 -0.03125 1.421875 -0.21875 C 1.054688 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.054688 -3.921875 1.421875 -4.109375 C 1.796875 -4.304688 2.210938 -4.40625 2.671875 -4.40625 C 3.128906 -4.40625 3.53125 -4.304688 3.875 -4.109375 C 4.21875 -3.921875 4.46875 -3.648438 4.625 -3.296875 L 3.640625 -2.78125 C 3.421875 -3.175781 3.097656 -3.375 2.671875 -3.375 C 2.335938 -3.375 2.0625 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.796875 1.632812 -1.5 1.84375 -1.28125 C 2.0625 -1.070312 2.335938 -0.96875 2.671875 -0.96875 C 3.097656 -0.96875 3.421875 -1.164062 3.640625 -1.5625 L 4.625 -1.03125 C 4.46875 -0.6875 4.21875 -0.414062 3.875 -0.21875 C 3.53125 -0.03125 3.128906 0.0625 2.671875 0.0625 Z M 2.671875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(646.978298, 95.638846)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(651.952529, 95.638846)">
                                <g>
                                    <path
                                        d="M 0.578125 -5.984375 L 1.84375 -5.984375 L 1.84375 0 L 0.578125 0 Z M 0.578125 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(654.379178, 95.638846)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(659.353409, 95.638846)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(626.564889, 106.92561)">
                                <g>
                                    <path
                                        d="M 2.46875 0.046875 C 2.050781 0.046875 1.648438 -0.0195312 1.265625 -0.15625 C 0.878906 -0.289062 0.582031 -0.46875 0.375 -0.6875 L 0.609375 -1.140625 C 0.816406 -0.941406 1.085938 -0.773438 1.421875 -0.640625 C 1.765625 -0.515625 2.113281 -0.453125 2.46875 -0.453125 C 2.976562 -0.453125 3.359375 -0.546875 3.609375 -0.734375 C 3.859375 -0.921875 3.984375 -1.160156 3.984375 -1.453125 C 3.984375 -1.679688 3.914062 -1.863281 3.78125 -2 C 3.644531 -2.132812 3.476562 -2.238281 3.28125 -2.3125 C 3.082031 -2.382812 2.804688 -2.460938 2.453125 -2.546875 C 2.023438 -2.648438 1.6875 -2.75 1.4375 -2.84375 C 1.1875 -2.945312 0.96875 -3.101562 0.78125 -3.3125 C 0.601562 -3.519531 0.515625 -3.796875 0.515625 -4.140625 C 0.515625 -4.429688 0.585938 -4.691406 0.734375 -4.921875 C 0.890625 -5.148438 1.125 -5.332031 1.4375 -5.46875 C 1.75 -5.613281 2.132812 -5.6875 2.59375 -5.6875 C 2.914062 -5.6875 3.226562 -5.640625 3.53125 -5.546875 C 3.84375 -5.460938 4.113281 -5.34375 4.34375 -5.1875 L 4.140625 -4.71875 C 3.910156 -4.875 3.660156 -4.988281 3.390625 -5.0625 C 3.117188 -5.144531 2.851562 -5.1875 2.59375 -5.1875 C 2.101562 -5.1875 1.734375 -5.085938 1.484375 -4.890625 C 1.234375 -4.703125 1.109375 -4.457031 1.109375 -4.15625 C 1.109375 -3.9375 1.175781 -3.753906 1.3125 -3.609375 C 1.445312 -3.472656 1.617188 -3.367188 1.828125 -3.296875 C 2.035156 -3.222656 2.3125 -3.144531 2.65625 -3.0625 C 3.070312 -2.957031 3.40625 -2.851562 3.65625 -2.75 C 3.914062 -2.65625 4.132812 -2.503906 4.3125 -2.296875 C 4.488281 -2.097656 4.578125 -1.828125 4.578125 -1.484375 C 4.578125 -1.203125 4.5 -0.941406 4.34375 -0.703125 C 4.195312 -0.472656 3.960938 -0.289062 3.640625 -0.15625 C 3.328125 -0.0195312 2.9375 0.046875 2.46875 0.046875 Z M 2.46875 0.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(631.522998, 106.92561)">
                                <g>
                                    <path
                                        d="M 2.53125 0.046875 C 2.125 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.125 -4.265625 2.53125 -4.265625 C 2.9375 -4.265625 3.300781 -4.171875 3.625 -3.984375 C 3.957031 -3.804688 4.21875 -3.550781 4.40625 -3.21875 C 4.59375 -2.894531 4.6875 -2.53125 4.6875 -2.125 C 4.6875 -1.707031 4.59375 -1.332031 4.40625 -1 C 4.21875 -0.675781 3.957031 -0.421875 3.625 -0.234375 C 3.300781 -0.046875 2.9375 0.046875 2.53125 0.046875 Z M 2.53125 -0.46875 C 2.832031 -0.46875 3.101562 -0.535156 3.34375 -0.671875 C 3.582031 -0.804688 3.769531 -1 3.90625 -1.25 C 4.039062 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.039062 -2.734375 3.90625 -2.984375 C 3.769531 -3.234375 3.582031 -3.425781 3.34375 -3.5625 C 3.101562 -3.695312 2.832031 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 2.53125 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(636.577853, 106.92561)">
                                <g>
                                    <path
                                        d="M 1.9375 0.046875 C 1.59375 0.046875 1.257812 -0.00390625 0.9375 -0.109375 C 0.625 -0.210938 0.378906 -0.335938 0.203125 -0.484375 L 0.46875 -0.9375 C 0.644531 -0.789062 0.867188 -0.671875 1.140625 -0.578125 C 1.410156 -0.492188 1.6875 -0.453125 1.96875 -0.453125 C 2.363281 -0.453125 2.648438 -0.515625 2.828125 -0.640625 C 3.015625 -0.765625 3.109375 -0.9375 3.109375 -1.15625 C 3.109375 -1.3125 3.054688 -1.429688 2.953125 -1.515625 C 2.859375 -1.609375 2.734375 -1.675781 2.578125 -1.71875 C 2.421875 -1.769531 2.210938 -1.816406 1.953125 -1.859375 C 1.609375 -1.921875 1.332031 -1.984375 1.125 -2.046875 C 0.914062 -2.117188 0.734375 -2.234375 0.578125 -2.390625 C 0.429688 -2.554688 0.359375 -2.78125 0.359375 -3.0625 C 0.359375 -3.414062 0.503906 -3.703125 0.796875 -3.921875 C 1.097656 -4.148438 1.515625 -4.265625 2.046875 -4.265625 C 2.316406 -4.265625 2.585938 -4.226562 2.859375 -4.15625 C 3.128906 -4.09375 3.359375 -4 3.546875 -3.875 L 3.296875 -3.421875 C 2.941406 -3.660156 2.523438 -3.78125 2.046875 -3.78125 C 1.671875 -3.78125 1.390625 -3.710938 1.203125 -3.578125 C 1.023438 -3.453125 0.9375 -3.285156 0.9375 -3.078125 C 0.9375 -2.921875 0.988281 -2.789062 1.09375 -2.6875 C 1.195312 -2.59375 1.328125 -2.519531 1.484375 -2.46875 C 1.640625 -2.425781 1.851562 -2.382812 2.125 -2.34375 C 2.46875 -2.269531 2.738281 -2.203125 2.9375 -2.140625 C 3.144531 -2.078125 3.320312 -1.96875 3.46875 -1.8125 C 3.613281 -1.65625 3.6875 -1.441406 3.6875 -1.171875 C 3.6875 -0.796875 3.53125 -0.5 3.21875 -0.28125 C 2.90625 -0.0625 2.476562 0.046875 1.9375 0.046875 Z M 1.9375 0.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(640.520151, 106.92561)">
                                <g>
                                    <path
                                        d="M 3.03125 -0.265625 C 2.925781 -0.160156 2.789062 -0.0820312 2.625 -0.03125 C 2.46875 0.0195312 2.304688 0.046875 2.140625 0.046875 C 1.742188 0.046875 1.4375 -0.0625 1.21875 -0.28125 C 1 -0.5 0.890625 -0.800781 0.890625 -1.1875 L 0.890625 -3.75 L 0.140625 -3.75 L 0.140625 -4.234375 L 0.890625 -4.234375 L 0.890625 -5.171875 L 1.46875 -5.171875 L 1.46875 -4.234375 L 2.75 -4.234375 L 2.75 -3.75 L 1.46875 -3.75 L 1.46875 -1.21875 C 1.46875 -0.96875 1.53125 -0.773438 1.65625 -0.640625 C 1.78125 -0.515625 1.960938 -0.453125 2.203125 -0.453125 C 2.316406 -0.453125 2.425781 -0.46875 2.53125 -0.5 C 2.644531 -0.539062 2.742188 -0.597656 2.828125 -0.671875 Z M 3.03125 -0.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(643.793311, 106.92561)">
                                <g>
                                    <path
                                        d="M 4.484375 -1.9375 L 0.9375 -1.9375 C 0.96875 -1.5 1.132812 -1.144531 1.4375 -0.875 C 1.75 -0.601562 2.140625 -0.46875 2.609375 -0.46875 C 2.867188 -0.46875 3.109375 -0.515625 3.328125 -0.609375 C 3.554688 -0.703125 3.75 -0.84375 3.90625 -1.03125 L 4.234375 -0.65625 C 4.046875 -0.425781 3.8125 -0.25 3.53125 -0.125 C 3.25 -0.0078125 2.9375 0.046875 2.59375 0.046875 C 2.15625 0.046875 1.769531 -0.046875 1.4375 -0.234375 C 1.101562 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.460938 -2.894531 0.640625 -3.21875 C 0.816406 -3.550781 1.0625 -3.804688 1.375 -3.984375 C 1.695312 -4.171875 2.050781 -4.265625 2.4375 -4.265625 C 2.832031 -4.265625 3.1875 -4.171875 3.5 -3.984375 C 3.8125 -3.804688 4.054688 -3.554688 4.234375 -3.234375 C 4.410156 -2.910156 4.5 -2.539062 4.5 -2.125 Z M 2.4375 -3.78125 C 2.03125 -3.78125 1.6875 -3.648438 1.40625 -3.390625 C 1.132812 -3.128906 0.976562 -2.789062 0.9375 -2.375 L 3.953125 -2.375 C 3.910156 -2.789062 3.75 -3.128906 3.46875 -3.390625 C 3.195312 -3.648438 2.851562 -3.78125 2.4375 -3.78125 Z M 2.4375 -3.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(648.662737, 106.92561)">
                                <g>
                                    <path
                                        d="M 2.953125 -4.265625 C 3.484375 -4.265625 3.90625 -4.109375 4.21875 -3.796875 C 4.539062 -3.492188 4.703125 -3.046875 4.703125 -2.453125 L 4.703125 0 L 4.125 0 L 4.125 -2.40625 C 4.125 -2.84375 4.015625 -3.175781 3.796875 -3.40625 C 3.578125 -3.632812 3.265625 -3.75 2.859375 -3.75 C 2.398438 -3.75 2.035156 -3.613281 1.765625 -3.34375 C 1.503906 -3.070312 1.375 -2.695312 1.375 -2.21875 L 1.375 0 L 0.796875 0 L 0.796875 -4.234375 L 1.34375 -4.234375 L 1.34375 -3.453125 C 1.5 -3.710938 1.710938 -3.910156 1.984375 -4.046875 C 2.265625 -4.191406 2.585938 -4.265625 2.953125 -4.265625 Z M 2.953125 -4.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(654.120691, 106.92561)">
                                <g>
                                    <path
                                        d="M 0.796875 -4.234375 L 1.375 -4.234375 L 1.375 0 L 0.796875 0 Z M 1.078125 -5.171875 C 0.960938 -5.171875 0.863281 -5.207031 0.78125 -5.28125 C 0.695312 -5.363281 0.65625 -5.460938 0.65625 -5.578125 C 0.65625 -5.679688 0.695312 -5.773438 0.78125 -5.859375 C 0.863281 -5.941406 0.960938 -5.984375 1.078125 -5.984375 C 1.203125 -5.984375 1.300781 -5.941406 1.375 -5.859375 C 1.457031 -5.785156 1.5 -5.695312 1.5 -5.59375 C 1.5 -5.46875 1.457031 -5.363281 1.375 -5.28125 C 1.300781 -5.207031 1.203125 -5.171875 1.078125 -5.171875 Z M 1.078125 -5.171875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(656.289358, 106.92561)">
                                <g>
                                    <path
                                        d="M 2.984375 -4.265625 C 3.378906 -4.265625 3.738281 -4.175781 4.0625 -4 C 4.382812 -3.820312 4.632812 -3.566406 4.8125 -3.234375 C 5 -2.910156 5.09375 -2.539062 5.09375 -2.125 C 5.09375 -1.695312 5 -1.320312 4.8125 -1 C 4.632812 -0.675781 4.382812 -0.421875 4.0625 -0.234375 C 3.738281 -0.046875 3.378906 0.046875 2.984375 0.046875 C 2.628906 0.046875 2.3125 -0.0234375 2.03125 -0.171875 C 1.75 -0.328125 1.519531 -0.550781 1.34375 -0.84375 L 1.34375 0 L 0.796875 0 L 0.796875 -5.984375 L 1.375 -5.984375 L 1.375 -3.4375 C 1.550781 -3.707031 1.773438 -3.910156 2.046875 -4.046875 C 2.328125 -4.191406 2.640625 -4.265625 2.984375 -4.265625 Z M 2.9375 -0.46875 C 3.238281 -0.46875 3.507812 -0.535156 3.75 -0.671875 C 3.988281 -0.804688 4.175781 -1 4.3125 -1.25 C 4.445312 -1.507812 4.515625 -1.800781 4.515625 -2.125 C 4.515625 -2.445312 4.445312 -2.734375 4.3125 -2.984375 C 4.175781 -3.234375 3.988281 -3.425781 3.75 -3.5625 C 3.507812 -3.695312 3.238281 -3.765625 2.9375 -3.765625 C 2.632812 -3.765625 2.363281 -3.695312 2.125 -3.5625 C 1.894531 -3.425781 1.707031 -3.234375 1.5625 -2.984375 C 1.425781 -2.734375 1.359375 -2.445312 1.359375 -2.125 C 1.359375 -1.800781 1.425781 -1.507812 1.5625 -1.25 C 1.707031 -1 1.894531 -0.804688 2.125 -0.671875 C 2.363281 -0.535156 2.632812 -0.46875 2.9375 -0.46875 Z M 2.9375 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(661.755369, 106.92561)">
                                <g>
                                    <path
                                        d="M 0.796875 -5.984375 L 1.375 -5.984375 L 1.375 0 L 0.796875 0 Z M 0.796875 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(663.924036, 106.92561)">
                                <g>
                                    <path
                                        d="M 4.484375 -1.9375 L 0.9375 -1.9375 C 0.96875 -1.5 1.132812 -1.144531 1.4375 -0.875 C 1.75 -0.601562 2.140625 -0.46875 2.609375 -0.46875 C 2.867188 -0.46875 3.109375 -0.515625 3.328125 -0.609375 C 3.554688 -0.703125 3.75 -0.84375 3.90625 -1.03125 L 4.234375 -0.65625 C 4.046875 -0.425781 3.8125 -0.25 3.53125 -0.125 C 3.25 -0.0078125 2.9375 0.046875 2.59375 0.046875 C 2.15625 0.046875 1.769531 -0.046875 1.4375 -0.234375 C 1.101562 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.460938 -2.894531 0.640625 -3.21875 C 0.816406 -3.550781 1.0625 -3.804688 1.375 -3.984375 C 1.695312 -4.171875 2.050781 -4.265625 2.4375 -4.265625 C 2.832031 -4.265625 3.1875 -4.171875 3.5 -3.984375 C 3.8125 -3.804688 4.054688 -3.554688 4.234375 -3.234375 C 4.410156 -2.910156 4.5 -2.539062 4.5 -2.125 Z M 2.4375 -3.78125 C 2.03125 -3.78125 1.6875 -3.648438 1.40625 -3.390625 C 1.132812 -3.128906 0.976562 -2.789062 0.9375 -2.375 L 3.953125 -2.375 C 3.910156 -2.789062 3.75 -3.128906 3.46875 -3.390625 C 3.195312 -3.648438 2.851562 -3.78125 2.4375 -3.78125 Z M 2.4375 -3.78125 " />
                                </g>
                            </g>
                        </g>
                        <g id="PExplorar" clip-path="url(#b6d6726534)">
                            <g clip-path="url(#67ab615ee7)">
                                <path fill="#edc400"
                                    d="M 256.792969 342.964844 L 267.480469 342.964844 L 267.480469 353.65625 L 256.792969 353.65625 Z M 256.792969 342.964844 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>

                        </g>
                        <g id="PDespertar" clip-path="url(#1b0aef135f)">
                            <g clip-path="url(#f1d881bbeb)">
                                <path fill="#b4c41d"
                                    d="M 195.023438 344.234375 L 205.710938 344.234375 L 205.710938 354.925781 L 195.023438 354.925781 Z M 195.023438 344.234375 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <g id="PIdeacion" clip-path="url(#6608fcc74a)">
                            <g clip-path="url(#8502e0a488)">
                                <path fill="#e3854a"
                                    d="M 320.257812 335.050781 L 330.945312 335.050781 L 330.945312 345.738281 L 320.257812 345.738281 Z M 320.257812 335.050781 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <g id="PEntrevista" clip-path="url(#e9aa0aced9)">
                            <g clip-path="url(#1f6254558d)">
                                <path fill="#d42457"
                                    d="M 377.785156 320.777344 L 388.476562 320.777344 L 388.476562 331.46875 L 377.785156 331.46875 Z M 377.785156 320.777344 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <g id="PDemo1"clip-path="url(#2d42eccaad)">
                            <g clip-path="url(#64864366ec)">
                                <path fill="#264a90"
                                    d="M 436.910156 299.738281 L 447.597656 299.738281 L 447.597656 310.425781 L 436.910156 310.425781 Z M 436.910156 299.738281 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <g id="PPrototipo" clip-path="url(#180c27e056)">
                            <g clip-path="url(#b97d557854)">
                                <path fill="#b4c41d"
                                    d="M 491.480469 270.929688 L 502.167969 270.929688 L 502.167969 281.617188 L 491.480469 281.617188 Z M 491.480469 270.929688 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <g id="PEntrevista2" clip-path="url(#52f871e5b4)">
                            <g clip-path="url(#7e0fc1c267)">
                                <path fill="#edc400"
                                    d="M 532.539062 243.636719 L 543.226562 243.636719 L 543.226562 254.328125 L 532.539062 254.328125 Z M 532.539062 243.636719 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <g id="PModelo" clip-path="url(#138c52fa62)">
                            <g clip-path="url(#4699e072e8)">
                                <path fill="#e3854a"
                                    d="M 574.316406 213.339844 L 585.003906 213.339844 L 585.003906 224.03125 L 574.316406 224.03125 Z M 574.316406 213.339844 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <g id="PEquilibrio" clip-path="url(#5116c9c415)">
                            <g clip-path="url(#108a069cfe)">
                                <path fill="#264a90"
                                    d="M 641.933594 142.359375 L 652.621094 142.359375 L 652.621094 153.046875 L 641.933594 153.046875 Z M 641.933594 142.359375 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <g id="PVenta" clip-path="url(#201940b823)">
                            <g clip-path="url(#1d760da149)">
                                <path fill="#d42457"
                                    d="M 611.390625 177.257812 L 622.078125 177.257812 L 622.078125 187.945312 L 611.390625 187.945312 Z M 611.390625 177.257812 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <g id="PEscalar" clip-path="url(#679f8231a7)">
                            <g clip-path="url(#e77d62bcba)">
                                <path fill="#b4c41d"
                                    d="M 673.738281 98.863281 L 684.425781 98.863281 L 684.425781 109.550781 L 673.738281 109.550781 Z M 673.738281 98.863281 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <g id="PCaso" clip-path="url(#335c7dd746)">
                            <g clip-path="url(#9e32f7a833)">
                                <path fill="#edc400"
                                    d="M 702.132812 50.738281 L 712.824219 50.738281 L 712.824219 61.429688 L 702.132812 61.429688 Z M 702.132812 50.738281 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(182.078383, 332.425053)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.90625 L 2.8125 -4.90625 C 3.34375 -4.90625 3.8125 -4.800781 4.21875 -4.59375 C 4.625 -4.394531 4.941406 -4.109375 5.171875 -3.734375 C 5.398438 -3.367188 5.515625 -2.941406 5.515625 -2.453125 C 5.515625 -1.960938 5.398438 -1.53125 5.171875 -1.15625 C 4.941406 -0.789062 4.625 -0.503906 4.21875 -0.296875 C 3.8125 -0.0976562 3.34375 0 2.8125 0 L 0.578125 0 Z M 2.75 -0.9375 C 3.238281 -0.9375 3.628906 -1.070312 3.921875 -1.34375 C 4.210938 -1.613281 4.359375 -1.984375 4.359375 -2.453125 C 4.359375 -2.921875 4.210938 -3.289062 3.921875 -3.5625 C 3.628906 -3.832031 3.238281 -3.96875 2.75 -3.96875 L 1.71875 -3.96875 L 1.71875 -0.9375 Z M 2.75 -0.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(187.862228, 332.425053)">
                                <g>
                                    <path
                                        d="M 4.1875 -1.875 C 4.1875 -1.851562 4.179688 -1.753906 4.171875 -1.578125 L 1.328125 -1.578125 C 1.378906 -1.335938 1.5 -1.148438 1.6875 -1.015625 C 1.875 -0.878906 2.113281 -0.8125 2.40625 -0.8125 C 2.59375 -0.8125 2.765625 -0.84375 2.921875 -0.90625 C 3.078125 -0.96875 3.21875 -1.0625 3.34375 -1.1875 L 3.921875 -0.546875 C 3.566406 -0.140625 3.050781 0.0625 2.375 0.0625 C 1.945312 0.0625 1.566406 -0.0195312 1.234375 -0.1875 C 0.910156 -0.351562 0.660156 -0.582031 0.484375 -0.875 C 0.304688 -1.175781 0.21875 -1.515625 0.21875 -1.890625 C 0.21875 -2.253906 0.304688 -2.582031 0.484375 -2.875 C 0.660156 -3.175781 0.898438 -3.410156 1.203125 -3.578125 C 1.515625 -3.742188 1.859375 -3.828125 2.234375 -3.828125 C 2.597656 -3.828125 2.929688 -3.742188 3.234375 -3.578125 C 3.535156 -3.421875 3.769531 -3.191406 3.9375 -2.890625 C 4.101562 -2.597656 4.1875 -2.257812 4.1875 -1.875 Z M 2.234375 -3 C 1.992188 -3 1.785156 -2.925781 1.609375 -2.78125 C 1.441406 -2.644531 1.34375 -2.457031 1.3125 -2.21875 L 3.15625 -2.21875 C 3.125 -2.445312 3.023438 -2.632812 2.859375 -2.78125 C 2.691406 -2.925781 2.484375 -3 2.234375 -3 Z M 2.234375 -3 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(192.280635, 332.425053)">
                                <g>
                                    <path
                                        d="M 1.765625 0.0625 C 1.453125 0.0625 1.144531 0.0234375 0.84375 -0.046875 C 0.550781 -0.128906 0.316406 -0.226562 0.140625 -0.34375 L 0.5 -1.140625 C 0.664062 -1.023438 0.867188 -0.929688 1.109375 -0.859375 C 1.347656 -0.796875 1.582031 -0.765625 1.8125 -0.765625 C 2.269531 -0.765625 2.5 -0.878906 2.5 -1.109375 C 2.5 -1.222656 2.4375 -1.300781 2.3125 -1.34375 C 2.1875 -1.382812 1.992188 -1.425781 1.734375 -1.46875 C 1.429688 -1.507812 1.175781 -1.5625 0.96875 -1.625 C 0.769531 -1.6875 0.597656 -1.789062 0.453125 -1.9375 C 0.304688 -2.09375 0.234375 -2.316406 0.234375 -2.609375 C 0.234375 -2.847656 0.300781 -3.054688 0.4375 -3.234375 C 0.570312 -3.421875 0.769531 -3.566406 1.03125 -3.671875 C 1.300781 -3.773438 1.613281 -3.828125 1.96875 -3.828125 C 2.238281 -3.828125 2.503906 -3.796875 2.765625 -3.734375 C 3.023438 -3.671875 3.242188 -3.59375 3.421875 -3.5 L 3.0625 -2.71875 C 2.726562 -2.90625 2.363281 -3 1.96875 -3 C 1.738281 -3 1.566406 -2.960938 1.453125 -2.890625 C 1.335938 -2.828125 1.28125 -2.742188 1.28125 -2.640625 C 1.28125 -2.523438 1.34375 -2.441406 1.46875 -2.390625 C 1.59375 -2.347656 1.789062 -2.304688 2.0625 -2.265625 C 2.375 -2.210938 2.625 -2.15625 2.8125 -2.09375 C 3.007812 -2.039062 3.179688 -1.9375 3.328125 -1.78125 C 3.472656 -1.625 3.546875 -1.410156 3.546875 -1.140625 C 3.546875 -0.910156 3.472656 -0.703125 3.328125 -0.515625 C 3.191406 -0.335938 2.988281 -0.195312 2.71875 -0.09375 C 2.457031 0.0078125 2.140625 0.0625 1.765625 0.0625 Z M 1.765625 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(195.998818, 332.425053)">
                                <g>
                                    <path
                                        d="M 2.734375 -3.828125 C 3.078125 -3.828125 3.390625 -3.742188 3.671875 -3.578125 C 3.960938 -3.421875 4.191406 -3.195312 4.359375 -2.90625 C 4.523438 -2.613281 4.609375 -2.273438 4.609375 -1.890625 C 4.609375 -1.492188 4.523438 -1.148438 4.359375 -0.859375 C 4.191406 -0.566406 3.960938 -0.335938 3.671875 -0.171875 C 3.390625 -0.015625 3.078125 0.0625 2.734375 0.0625 C 2.253906 0.0625 1.875 -0.09375 1.59375 -0.40625 L 1.59375 1.359375 L 0.5 1.359375 L 0.5 -3.765625 L 1.546875 -3.765625 L 1.546875 -3.328125 C 1.816406 -3.660156 2.210938 -3.828125 2.734375 -3.828125 Z M 2.546875 -0.84375 C 2.828125 -0.84375 3.054688 -0.9375 3.234375 -1.125 C 3.410156 -1.3125 3.5 -1.566406 3.5 -1.890625 C 3.5 -2.203125 3.410156 -2.453125 3.234375 -2.640625 C 3.054688 -2.828125 2.828125 -2.921875 2.546875 -2.921875 C 2.265625 -2.921875 2.03125 -2.828125 1.84375 -2.640625 C 1.664062 -2.453125 1.578125 -2.203125 1.578125 -1.890625 C 1.578125 -1.566406 1.664062 -1.3125 1.84375 -1.125 C 2.03125 -0.9375 2.265625 -0.84375 2.546875 -0.84375 Z M 2.546875 -0.84375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(200.830358, 332.425053)">
                                <g>
                                    <path
                                        d="M 4.1875 -1.875 C 4.1875 -1.851562 4.179688 -1.753906 4.171875 -1.578125 L 1.328125 -1.578125 C 1.378906 -1.335938 1.5 -1.148438 1.6875 -1.015625 C 1.875 -0.878906 2.113281 -0.8125 2.40625 -0.8125 C 2.59375 -0.8125 2.765625 -0.84375 2.921875 -0.90625 C 3.078125 -0.96875 3.21875 -1.0625 3.34375 -1.1875 L 3.921875 -0.546875 C 3.566406 -0.140625 3.050781 0.0625 2.375 0.0625 C 1.945312 0.0625 1.566406 -0.0195312 1.234375 -0.1875 C 0.910156 -0.351562 0.660156 -0.582031 0.484375 -0.875 C 0.304688 -1.175781 0.21875 -1.515625 0.21875 -1.890625 C 0.21875 -2.253906 0.304688 -2.582031 0.484375 -2.875 C 0.660156 -3.175781 0.898438 -3.410156 1.203125 -3.578125 C 1.515625 -3.742188 1.859375 -3.828125 2.234375 -3.828125 C 2.597656 -3.828125 2.929688 -3.742188 3.234375 -3.578125 C 3.535156 -3.421875 3.769531 -3.191406 3.9375 -2.890625 C 4.101562 -2.597656 4.1875 -2.257812 4.1875 -1.875 Z M 2.234375 -3 C 1.992188 -3 1.785156 -2.925781 1.609375 -2.78125 C 1.441406 -2.644531 1.34375 -2.457031 1.3125 -2.21875 L 3.15625 -2.21875 C 3.125 -2.445312 3.023438 -2.632812 2.859375 -2.78125 C 2.691406 -2.925781 2.484375 -3 2.234375 -3 Z M 2.234375 -3 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(205.248766, 332.425053)">
                                <g>
                                    <path
                                        d="M 1.546875 -3.265625 C 1.679688 -3.453125 1.859375 -3.59375 2.078125 -3.6875 C 2.296875 -3.78125 2.550781 -3.828125 2.84375 -3.828125 L 2.84375 -2.8125 C 2.71875 -2.820312 2.632812 -2.828125 2.59375 -2.828125 C 2.28125 -2.828125 2.035156 -2.738281 1.859375 -2.5625 C 1.679688 -2.382812 1.59375 -2.125 1.59375 -1.78125 L 1.59375 0 L 0.5 0 L 0.5 -3.765625 L 1.546875 -3.765625 Z M 1.546875 -3.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(208.266726, 332.425053)">
                                <g>
                                    <path
                                        d="M 2.9375 -0.1875 C 2.820312 -0.101562 2.6875 -0.0390625 2.53125 0 C 2.375 0.0390625 2.210938 0.0625 2.046875 0.0625 C 1.597656 0.0625 1.25 -0.0507812 1 -0.28125 C 0.757812 -0.507812 0.640625 -0.847656 0.640625 -1.296875 L 0.640625 -2.84375 L 0.0625 -2.84375 L 0.0625 -3.6875 L 0.640625 -3.6875 L 0.640625 -4.59375 L 1.734375 -4.59375 L 1.734375 -3.6875 L 2.671875 -3.6875 L 2.671875 -2.84375 L 1.734375 -2.84375 L 1.734375 -1.3125 C 1.734375 -1.15625 1.769531 -1.03125 1.84375 -0.9375 C 1.925781 -0.851562 2.046875 -0.8125 2.203125 -0.8125 C 2.367188 -0.8125 2.515625 -0.859375 2.640625 -0.953125 Z M 2.9375 -0.1875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(211.312697, 332.425053)">
                                <g>
                                    <path
                                        d="M 2.015625 -3.828125 C 2.597656 -3.828125 3.046875 -3.6875 3.359375 -3.40625 C 3.679688 -3.125 3.84375 -2.707031 3.84375 -2.15625 L 3.84375 0 L 2.8125 0 L 2.8125 -0.46875 C 2.601562 -0.113281 2.222656 0.0625 1.671875 0.0625 C 1.378906 0.0625 1.125 0.015625 0.90625 -0.078125 C 0.695312 -0.179688 0.535156 -0.316406 0.421875 -0.484375 C 0.316406 -0.660156 0.265625 -0.859375 0.265625 -1.078125 C 0.265625 -1.429688 0.394531 -1.707031 0.65625 -1.90625 C 0.914062 -2.113281 1.320312 -2.21875 1.875 -2.21875 L 2.75 -2.21875 C 2.75 -2.445312 2.675781 -2.625 2.53125 -2.75 C 2.382812 -2.882812 2.164062 -2.953125 1.875 -2.953125 C 1.675781 -2.953125 1.476562 -2.921875 1.28125 -2.859375 C 1.09375 -2.796875 0.929688 -2.710938 0.796875 -2.609375 L 0.40625 -3.359375 C 0.601562 -3.503906 0.84375 -3.617188 1.125 -3.703125 C 1.414062 -3.785156 1.710938 -3.828125 2.015625 -3.828125 Z M 1.9375 -0.671875 C 2.125 -0.671875 2.289062 -0.710938 2.4375 -0.796875 C 2.582031 -0.890625 2.6875 -1.019531 2.75 -1.1875 L 2.75 -1.578125 L 2 -1.578125 C 1.550781 -1.578125 1.328125 -1.429688 1.328125 -1.140625 C 1.328125 -0.992188 1.378906 -0.878906 1.484375 -0.796875 C 1.597656 -0.710938 1.75 -0.671875 1.9375 -0.671875 Z M 1.9375 -0.671875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(215.633073, 332.425053)">
                                <g>
                                    <path
                                        d="M 1.546875 -3.265625 C 1.679688 -3.453125 1.859375 -3.59375 2.078125 -3.6875 C 2.296875 -3.78125 2.550781 -3.828125 2.84375 -3.828125 L 2.84375 -2.8125 C 2.71875 -2.820312 2.632812 -2.828125 2.59375 -2.828125 C 2.28125 -2.828125 2.035156 -2.738281 1.859375 -2.5625 C 1.679688 -2.382812 1.59375 -2.125 1.59375 -1.78125 L 1.59375 0 L 0.5 0 L 0.5 -3.765625 L 1.546875 -3.765625 Z M 1.546875 -3.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(169.952087, 342.05315)">
                                <g>
                                    <path
                                        d="M 5.890625 -4.90625 L 5.890625 0 L 5.390625 0 L 5.390625 -3.921875 L 3.46875 -0.625 L 3.21875 -0.625 L 1.296875 -3.90625 L 1.296875 0 L 0.796875 0 L 0.796875 -4.90625 L 1.21875 -4.90625 L 3.359375 -1.265625 L 5.453125 -4.90625 Z M 5.890625 -4.90625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(176.639219, 342.05315)">
                                <g>
                                    <path
                                        d="M 4.875 -4.90625 L 2.703125 0 L 2.1875 0 L 0.015625 -4.90625 L 0.578125 -4.90625 L 2.453125 -0.640625 L 4.34375 -4.90625 Z M 4.875 -4.90625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(181.526778, 342.05315)">
                                <g>
                                    <path
                                        d="M 2.15625 0.046875 C 1.789062 0.046875 1.441406 -0.0078125 1.109375 -0.125 C 0.773438 -0.25 0.515625 -0.40625 0.328125 -0.59375 L 0.53125 -1 C 0.707031 -0.820312 0.941406 -0.675781 1.234375 -0.5625 C 1.535156 -0.457031 1.84375 -0.40625 2.15625 -0.40625 C 2.59375 -0.40625 2.921875 -0.484375 3.140625 -0.640625 C 3.359375 -0.796875 3.46875 -1.003906 3.46875 -1.265625 C 3.46875 -1.460938 3.40625 -1.617188 3.28125 -1.734375 C 3.164062 -1.847656 3.019531 -1.9375 2.84375 -2 C 2.675781 -2.0625 2.4375 -2.132812 2.125 -2.21875 C 1.757812 -2.3125 1.46875 -2.398438 1.25 -2.484375 C 1.03125 -2.566406 0.84375 -2.695312 0.6875 -2.875 C 0.53125 -3.050781 0.453125 -3.289062 0.453125 -3.59375 C 0.453125 -3.84375 0.515625 -4.066406 0.640625 -4.265625 C 0.773438 -4.472656 0.976562 -4.632812 1.25 -4.75 C 1.519531 -4.875 1.851562 -4.9375 2.25 -4.9375 C 2.53125 -4.9375 2.804688 -4.898438 3.078125 -4.828125 C 3.347656 -4.753906 3.578125 -4.648438 3.765625 -4.515625 L 3.59375 -4.09375 C 3.394531 -4.226562 3.175781 -4.328125 2.9375 -4.390625 C 2.707031 -4.460938 2.476562 -4.5 2.25 -4.5 C 1.820312 -4.5 1.5 -4.414062 1.28125 -4.25 C 1.0625 -4.082031 0.953125 -3.867188 0.953125 -3.609375 C 0.953125 -3.410156 1.007812 -3.253906 1.125 -3.140625 C 1.25 -3.023438 1.398438 -2.929688 1.578125 -2.859375 C 1.765625 -2.796875 2.007812 -2.726562 2.3125 -2.65625 C 2.664062 -2.570312 2.953125 -2.484375 3.171875 -2.390625 C 3.398438 -2.304688 3.585938 -2.175781 3.734375 -2 C 3.890625 -1.832031 3.96875 -1.597656 3.96875 -1.296875 C 3.96875 -1.046875 3.898438 -0.816406 3.765625 -0.609375 C 3.640625 -0.410156 3.4375 -0.25 3.15625 -0.125 C 2.882812 -0.0078125 2.550781 0.046875 2.15625 0.046875 Z M 2.15625 0.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(185.833153, 342.05315)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(187.667737, 342.05315)">
                                <g>
                                    <path
                                        d="M 4.265625 -0.453125 L 4.265625 0 L 0.796875 0 L 0.796875 -4.90625 L 4.15625 -4.90625 L 4.15625 -4.453125 L 1.3125 -4.453125 L 1.3125 -2.703125 L 3.84375 -2.703125 L 3.84375 -2.265625 L 1.3125 -2.265625 L 1.3125 -0.453125 Z M 4.265625 -0.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(192.35223, 342.05315)">
                                <g>
                                    <path
                                        d="M 3.03125 0 L 1.875 -1.546875 L 0.6875 0 L 0.140625 0 L 1.59375 -1.890625 L 0.203125 -3.6875 L 0.765625 -3.6875 L 1.875 -2.234375 L 2.96875 -3.6875 L 3.515625 -3.6875 L 2.140625 -1.890625 L 3.609375 0 Z M 3.03125 0 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(196.091423, 342.05315)">
                                <g>
                                    <path
                                        d="M 2.59375 -3.703125 C 2.9375 -3.703125 3.25 -3.625 3.53125 -3.46875 C 3.8125 -3.3125 4.03125 -3.09375 4.1875 -2.8125 C 4.34375 -2.53125 4.421875 -2.207031 4.421875 -1.84375 C 4.421875 -1.46875 4.34375 -1.140625 4.1875 -0.859375 C 4.03125 -0.578125 3.8125 -0.359375 3.53125 -0.203125 C 3.25 -0.046875 2.9375 0.03125 2.59375 0.03125 C 2.289062 0.03125 2.019531 -0.03125 1.78125 -0.15625 C 1.539062 -0.28125 1.34375 -0.457031 1.1875 -0.6875 L 1.1875 1.359375 L 0.6875 1.359375 L 0.6875 -3.6875 L 1.171875 -3.6875 L 1.171875 -2.953125 C 1.316406 -3.191406 1.507812 -3.375 1.75 -3.5 C 2 -3.632812 2.28125 -3.703125 2.59375 -3.703125 Z M 2.5625 -0.40625 C 2.8125 -0.40625 3.039062 -0.460938 3.25 -0.578125 C 3.457031 -0.703125 3.617188 -0.875 3.734375 -1.09375 C 3.859375 -1.3125 3.921875 -1.5625 3.921875 -1.84375 C 3.921875 -2.125 3.859375 -2.367188 3.734375 -2.578125 C 3.617188 -2.796875 3.457031 -2.96875 3.25 -3.09375 C 3.039062 -3.21875 2.8125 -3.28125 2.5625 -3.28125 C 2.289062 -3.28125 2.050781 -3.21875 1.84375 -3.09375 C 1.644531 -2.96875 1.484375 -2.796875 1.359375 -2.578125 C 1.242188 -2.367188 1.1875 -2.125 1.1875 -1.84375 C 1.1875 -1.5625 1.242188 -1.3125 1.359375 -1.09375 C 1.484375 -0.875 1.644531 -0.703125 1.84375 -0.578125 C 2.050781 -0.460938 2.289062 -0.40625 2.5625 -0.40625 Z M 2.5625 -0.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(200.838937, 342.05315)">
                                <g>
                                    <path
                                        d="M 2.203125 0.03125 C 1.847656 0.03125 1.523438 -0.046875 1.234375 -0.203125 C 0.953125 -0.367188 0.726562 -0.59375 0.5625 -0.875 C 0.40625 -1.15625 0.328125 -1.476562 0.328125 -1.84375 C 0.328125 -2.195312 0.40625 -2.515625 0.5625 -2.796875 C 0.726562 -3.085938 0.953125 -3.3125 1.234375 -3.46875 C 1.523438 -3.625 1.847656 -3.703125 2.203125 -3.703125 C 2.554688 -3.703125 2.875 -3.625 3.15625 -3.46875 C 3.4375 -3.3125 3.65625 -3.085938 3.8125 -2.796875 C 3.976562 -2.515625 4.0625 -2.195312 4.0625 -1.84375 C 4.0625 -1.476562 3.976562 -1.15625 3.8125 -0.875 C 3.65625 -0.59375 3.4375 -0.367188 3.15625 -0.203125 C 2.875 -0.046875 2.554688 0.03125 2.203125 0.03125 Z M 2.203125 -0.40625 C 2.460938 -0.40625 2.695312 -0.460938 2.90625 -0.578125 C 3.113281 -0.703125 3.273438 -0.875 3.390625 -1.09375 C 3.503906 -1.3125 3.5625 -1.5625 3.5625 -1.84375 C 3.5625 -2.125 3.503906 -2.375 3.390625 -2.59375 C 3.273438 -2.8125 3.113281 -2.976562 2.90625 -3.09375 C 2.695312 -3.21875 2.460938 -3.28125 2.203125 -3.28125 C 1.941406 -3.28125 1.707031 -3.21875 1.5 -3.09375 C 1.289062 -2.976562 1.125 -2.8125 1 -2.59375 C 0.882812 -2.375 0.828125 -2.125 0.828125 -1.84375 C 0.828125 -1.5625 0.882812 -1.3125 1 -1.09375 C 1.125 -0.875 1.289062 -0.703125 1.5 -0.578125 C 1.707031 -0.460938 1.941406 -0.40625 2.203125 -0.40625 Z M 2.203125 -0.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(205.229337, 342.05315)">
                                <g>
                                    <path
                                        d="M 2.5625 -3.703125 C 3.03125 -3.703125 3.398438 -3.566406 3.671875 -3.296875 C 3.941406 -3.035156 4.078125 -2.648438 4.078125 -2.140625 L 4.078125 0 L 3.578125 0 L 3.578125 -2.09375 C 3.578125 -2.46875 3.484375 -2.753906 3.296875 -2.953125 C 3.109375 -3.160156 2.835938 -3.265625 2.484375 -3.265625 C 2.085938 -3.265625 1.769531 -3.144531 1.53125 -2.90625 C 1.300781 -2.675781 1.1875 -2.351562 1.1875 -1.9375 L 1.1875 0 L 0.6875 0 L 0.6875 -3.6875 L 1.171875 -3.6875 L 1.171875 -3 C 1.304688 -3.226562 1.492188 -3.398438 1.734375 -3.515625 C 1.972656 -3.640625 2.25 -3.703125 2.5625 -3.703125 Z M 2.5625 -3.703125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(209.969849, 342.05315)">
                                <g>
                                    <path
                                        d="M 3.90625 -1.6875 L 0.8125 -1.6875 C 0.84375 -1.300781 0.988281 -0.988281 1.25 -0.75 C 1.519531 -0.519531 1.859375 -0.40625 2.265625 -0.40625 C 2.492188 -0.40625 2.703125 -0.445312 2.890625 -0.53125 C 3.085938 -0.613281 3.253906 -0.734375 3.390625 -0.890625 L 3.671875 -0.5625 C 3.515625 -0.363281 3.3125 -0.210938 3.0625 -0.109375 C 2.8125 -0.015625 2.539062 0.03125 2.25 0.03125 C 1.875 0.03125 1.539062 -0.046875 1.25 -0.203125 C 0.957031 -0.367188 0.726562 -0.59375 0.5625 -0.875 C 0.40625 -1.15625 0.328125 -1.476562 0.328125 -1.84375 C 0.328125 -2.195312 0.40625 -2.515625 0.5625 -2.796875 C 0.71875 -3.085938 0.929688 -3.3125 1.203125 -3.46875 C 1.472656 -3.625 1.78125 -3.703125 2.125 -3.703125 C 2.457031 -3.703125 2.757812 -3.625 3.03125 -3.46875 C 3.300781 -3.3125 3.515625 -3.09375 3.671875 -2.8125 C 3.828125 -2.53125 3.90625 -2.207031 3.90625 -1.84375 Z M 2.125 -3.28125 C 1.769531 -3.28125 1.472656 -3.164062 1.234375 -2.9375 C 0.992188 -2.71875 0.851562 -2.425781 0.8125 -2.0625 L 3.4375 -2.0625 C 3.394531 -2.425781 3.253906 -2.71875 3.015625 -2.9375 C 2.773438 -3.164062 2.476562 -3.28125 2.125 -3.28125 Z M 2.125 -3.28125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(214.199197, 342.05315)">
                                <g>
                                    <path
                                        d="M 2.5625 -3.703125 C 3.03125 -3.703125 3.398438 -3.566406 3.671875 -3.296875 C 3.941406 -3.035156 4.078125 -2.648438 4.078125 -2.140625 L 4.078125 0 L 3.578125 0 L 3.578125 -2.09375 C 3.578125 -2.46875 3.484375 -2.753906 3.296875 -2.953125 C 3.109375 -3.160156 2.835938 -3.265625 2.484375 -3.265625 C 2.085938 -3.265625 1.769531 -3.144531 1.53125 -2.90625 C 1.300781 -2.675781 1.1875 -2.351562 1.1875 -1.9375 L 1.1875 0 L 0.6875 0 L 0.6875 -3.6875 L 1.171875 -3.6875 L 1.171875 -3 C 1.304688 -3.226562 1.492188 -3.398438 1.734375 -3.515625 C 1.972656 -3.640625 2.25 -3.703125 2.5625 -3.703125 Z M 2.5625 -3.703125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(218.939709, 342.05315)">
                                <g>
                                    <path
                                        d="M 2.21875 0.03125 C 1.851562 0.03125 1.523438 -0.046875 1.234375 -0.203125 C 0.953125 -0.359375 0.726562 -0.578125 0.5625 -0.859375 C 0.40625 -1.148438 0.328125 -1.476562 0.328125 -1.84375 C 0.328125 -2.195312 0.40625 -2.515625 0.5625 -2.796875 C 0.726562 -3.085938 0.953125 -3.3125 1.234375 -3.46875 C 1.523438 -3.625 1.851562 -3.703125 2.21875 -3.703125 C 2.53125 -3.703125 2.8125 -3.640625 3.0625 -3.515625 C 3.3125 -3.398438 3.507812 -3.222656 3.65625 -2.984375 L 3.296875 -2.734375 C 3.171875 -2.910156 3.015625 -3.046875 2.828125 -3.140625 C 2.640625 -3.234375 2.4375 -3.28125 2.21875 -3.28125 C 1.945312 -3.28125 1.707031 -3.21875 1.5 -3.09375 C 1.289062 -2.976562 1.125 -2.8125 1 -2.59375 C 0.882812 -2.375 0.828125 -2.125 0.828125 -1.84375 C 0.828125 -1.550781 0.882812 -1.296875 1 -1.078125 C 1.125 -0.867188 1.289062 -0.703125 1.5 -0.578125 C 1.707031 -0.460938 1.945312 -0.40625 2.21875 -0.40625 C 2.4375 -0.40625 2.640625 -0.445312 2.828125 -0.53125 C 3.015625 -0.625 3.171875 -0.757812 3.296875 -0.9375 L 3.65625 -0.6875 C 3.507812 -0.457031 3.3125 -0.28125 3.0625 -0.15625 C 2.8125 -0.03125 2.53125 0.03125 2.21875 0.03125 Z M 2.21875 0.03125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(222.881966, 342.05315)">
                                <g>
                                    <path
                                        d="M 0.6875 -3.6875 L 1.1875 -3.6875 L 1.1875 0 L 0.6875 0 Z M 0.953125 -4.484375 C 0.847656 -4.484375 0.757812 -4.519531 0.6875 -4.59375 C 0.613281 -4.664062 0.578125 -4.75 0.578125 -4.84375 C 0.578125 -4.9375 0.613281 -5.015625 0.6875 -5.078125 C 0.757812 -5.148438 0.847656 -5.1875 0.953125 -5.1875 C 1.046875 -5.1875 1.128906 -5.148438 1.203125 -5.078125 C 1.273438 -5.015625 1.3125 -4.9375 1.3125 -4.84375 C 1.3125 -4.75 1.273438 -4.664062 1.203125 -4.59375 C 1.128906 -4.519531 1.046875 -4.484375 0.953125 -4.484375 Z M 0.953125 -4.484375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(224.765566, 342.05315)">
                                <g>
                                    <path
                                        d="M 1.984375 -3.703125 C 2.460938 -3.703125 2.828125 -3.582031 3.078125 -3.34375 C 3.335938 -3.101562 3.46875 -2.75 3.46875 -2.28125 L 3.46875 0 L 3 0 L 3 -0.578125 C 2.882812 -0.378906 2.71875 -0.226562 2.5 -0.125 C 2.28125 -0.0195312 2.023438 0.03125 1.734375 0.03125 C 1.316406 0.03125 0.988281 -0.0625 0.75 -0.25 C 0.507812 -0.445312 0.390625 -0.707031 0.390625 -1.03125 C 0.390625 -1.34375 0.5 -1.59375 0.71875 -1.78125 C 0.945312 -1.976562 1.3125 -2.078125 1.8125 -2.078125 L 2.96875 -2.078125 L 2.96875 -2.296875 C 2.96875 -2.617188 2.878906 -2.863281 2.703125 -3.03125 C 2.523438 -3.195312 2.269531 -3.28125 1.9375 -3.28125 C 1.695312 -3.28125 1.46875 -3.238281 1.25 -3.15625 C 1.039062 -3.082031 0.859375 -2.976562 0.703125 -2.84375 L 0.484375 -3.21875 C 0.671875 -3.375 0.894531 -3.492188 1.15625 -3.578125 C 1.414062 -3.660156 1.691406 -3.703125 1.984375 -3.703125 Z M 1.8125 -0.359375 C 2.082031 -0.359375 2.316406 -0.421875 2.515625 -0.546875 C 2.722656 -0.671875 2.875 -0.859375 2.96875 -1.109375 L 2.96875 -1.703125 L 1.8125 -1.703125 C 1.1875 -1.703125 0.875 -1.484375 0.875 -1.046875 C 0.875 -0.835938 0.953125 -0.671875 1.109375 -0.546875 C 1.273438 -0.421875 1.507812 -0.359375 1.8125 -0.359375 Z M 1.8125 -0.359375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(228.896883, 342.05315)">
                                <g>
                                    <path
                                        d="M 0.6875 -5.1875 L 1.1875 -5.1875 L 1.1875 0 L 0.6875 0 Z M 0.6875 -5.1875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(244.435565, 332.632311)">
                                <g>
                                    <path
                                        d="M 5.046875 -1.046875 L 5.046875 0 L 0.671875 0 L 0.671875 -5.640625 L 4.9375 -5.640625 L 4.9375 -4.59375 L 1.96875 -4.59375 L 1.96875 -3.375 L 4.59375 -3.375 L 4.59375 -2.359375 L 1.96875 -2.359375 L 1.96875 -1.046875 Z M 5.046875 -1.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(249.845142, 332.632311)">
                                <g>
                                    <path
                                        d="M 3.34375 0 L 2.390625 -1.328125 L 1.40625 0 L 0.03125 0 L 1.703125 -2.1875 L 0.09375 -4.34375 L 1.5 -4.34375 L 2.421875 -3.078125 L 3.359375 -4.34375 L 4.703125 -4.34375 L 3.09375 -2.21875 L 4.765625 0 Z M 3.34375 0 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(254.642014, 332.632311)">
                                <g>
                                    <path
                                        d="M 3.140625 -4.40625 C 3.546875 -4.40625 3.910156 -4.3125 4.234375 -4.125 C 4.566406 -3.9375 4.828125 -3.675781 5.015625 -3.34375 C 5.210938 -3.007812 5.3125 -2.617188 5.3125 -2.171875 C 5.3125 -1.722656 5.210938 -1.328125 5.015625 -0.984375 C 4.828125 -0.648438 4.566406 -0.390625 4.234375 -0.203125 C 3.910156 -0.0234375 3.546875 0.0625 3.140625 0.0625 C 2.585938 0.0625 2.15625 -0.109375 1.84375 -0.453125 L 1.84375 1.5625 L 0.578125 1.5625 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.84375 C 2.09375 -4.21875 2.546875 -4.40625 3.140625 -4.40625 Z M 2.921875 -0.96875 C 3.242188 -0.96875 3.507812 -1.078125 3.71875 -1.296875 C 3.925781 -1.515625 4.03125 -1.804688 4.03125 -2.171875 C 4.03125 -2.535156 3.925781 -2.828125 3.71875 -3.046875 C 3.507812 -3.265625 3.242188 -3.375 2.921875 -3.375 C 2.597656 -3.375 2.332031 -3.265625 2.125 -3.046875 C 1.925781 -2.828125 1.828125 -2.535156 1.828125 -2.171875 C 1.828125 -1.804688 1.925781 -1.515625 2.125 -1.296875 C 2.332031 -1.078125 2.597656 -0.96875 2.921875 -0.96875 Z M 2.921875 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(260.204772, 332.632311)">
                                <g>
                                    <path
                                        d="M 0.578125 -5.984375 L 1.84375 -5.984375 L 1.84375 0 L 0.578125 0 Z M 0.578125 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(262.631421, 332.632311)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(267.91201, 332.632311)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(271.386719, 332.632311)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(276.360949, 332.632311)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(358.318241, 301.857214)">
                                <g>
                                    <path
                                        d="M 5.046875 -1.046875 L 5.046875 0 L 0.671875 0 L 0.671875 -5.640625 L 4.9375 -5.640625 L 4.9375 -4.59375 L 1.96875 -4.59375 L 1.96875 -3.375 L 4.59375 -3.375 L 4.59375 -2.359375 L 1.96875 -2.359375 L 1.96875 -1.046875 Z M 5.046875 -1.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(363.727819, 301.857214)">
                                <g>
                                    <path
                                        d="M 3.21875 -4.40625 C 3.75 -4.40625 4.179688 -4.242188 4.515625 -3.921875 C 4.847656 -3.597656 5.015625 -3.117188 5.015625 -2.484375 L 5.015625 0 L 3.75 0 L 3.75 -2.296875 C 3.75 -2.640625 3.675781 -2.894531 3.53125 -3.0625 C 3.382812 -3.226562 3.164062 -3.3125 2.875 -3.3125 C 2.5625 -3.3125 2.3125 -3.210938 2.125 -3.015625 C 1.9375 -2.816406 1.84375 -2.523438 1.84375 -2.140625 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.828125 C 1.945312 -4.015625 2.15625 -4.15625 2.40625 -4.25 C 2.65625 -4.351562 2.925781 -4.40625 3.21875 -4.40625 Z M 3.21875 -4.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(369.29864, 301.857214)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(372.805597, 301.857214)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(376.280306, 301.857214)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(381.367409, 301.857214)">
                                <g>
                                    <path
                                        d="M 4.890625 -4.34375 L 3.0625 0 L 1.75 0 L -0.0625 -4.34375 L 1.234375 -4.34375 L 2.4375 -1.390625 L 3.671875 -4.34375 Z M 4.890625 -4.34375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(386.188466, 301.857214)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(388.615116, 301.857214)">
                                <g>
                                    <path
                                        d="M 2.046875 0.0625 C 1.679688 0.0625 1.328125 0.0195312 0.984375 -0.0625 C 0.640625 -0.15625 0.363281 -0.269531 0.15625 -0.40625 L 0.578125 -1.3125 C 0.773438 -1.1875 1.007812 -1.082031 1.28125 -1 C 1.550781 -0.925781 1.820312 -0.890625 2.09375 -0.890625 C 2.625 -0.890625 2.890625 -1.019531 2.890625 -1.28125 C 2.890625 -1.40625 2.816406 -1.492188 2.671875 -1.546875 C 2.523438 -1.597656 2.300781 -1.644531 2 -1.6875 C 1.644531 -1.738281 1.351562 -1.796875 1.125 -1.859375 C 0.894531 -1.929688 0.691406 -2.054688 0.515625 -2.234375 C 0.347656 -2.410156 0.265625 -2.664062 0.265625 -3 C 0.265625 -3.269531 0.34375 -3.507812 0.5 -3.71875 C 0.65625 -3.9375 0.882812 -4.101562 1.1875 -4.21875 C 1.5 -4.34375 1.863281 -4.40625 2.28125 -4.40625 C 2.582031 -4.40625 2.882812 -4.367188 3.1875 -4.296875 C 3.488281 -4.234375 3.738281 -4.140625 3.9375 -4.015625 L 3.515625 -3.125 C 3.140625 -3.34375 2.726562 -3.453125 2.28125 -3.453125 C 2.007812 -3.453125 1.804688 -3.410156 1.671875 -3.328125 C 1.535156 -3.253906 1.46875 -3.160156 1.46875 -3.046875 C 1.46875 -2.910156 1.539062 -2.816406 1.6875 -2.765625 C 1.832031 -2.710938 2.0625 -2.660156 2.375 -2.609375 C 2.726562 -2.554688 3.019531 -2.492188 3.25 -2.421875 C 3.476562 -2.359375 3.675781 -2.238281 3.84375 -2.0625 C 4.007812 -1.882812 4.09375 -1.632812 4.09375 -1.3125 C 4.09375 -1.039062 4.007812 -0.800781 3.84375 -0.59375 C 3.6875 -0.382812 3.453125 -0.222656 3.140625 -0.109375 C 2.828125 0.00390625 2.460938 0.0625 2.046875 0.0625 Z M 2.046875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(392.896022, 301.857214)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(396.402979, 301.857214)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(401.37721, 301.857214)">
                                <g>
                                    <path
                                        d="M 2.046875 0.0625 C 1.679688 0.0625 1.328125 0.0195312 0.984375 -0.0625 C 0.640625 -0.15625 0.363281 -0.269531 0.15625 -0.40625 L 0.578125 -1.3125 C 0.773438 -1.1875 1.007812 -1.082031 1.28125 -1 C 1.550781 -0.925781 1.820312 -0.890625 2.09375 -0.890625 C 2.625 -0.890625 2.890625 -1.019531 2.890625 -1.28125 C 2.890625 -1.40625 2.816406 -1.492188 2.671875 -1.546875 C 2.523438 -1.597656 2.300781 -1.644531 2 -1.6875 C 1.644531 -1.738281 1.351562 -1.796875 1.125 -1.859375 C 0.894531 -1.929688 0.691406 -2.054688 0.515625 -2.234375 C 0.347656 -2.410156 0.265625 -2.664062 0.265625 -3 C 0.265625 -3.269531 0.34375 -3.507812 0.5 -3.71875 C 0.65625 -3.9375 0.882812 -4.101562 1.1875 -4.21875 C 1.5 -4.34375 1.863281 -4.40625 2.28125 -4.40625 C 2.582031 -4.40625 2.882812 -4.367188 3.1875 -4.296875 C 3.488281 -4.234375 3.738281 -4.140625 3.9375 -4.015625 L 3.515625 -3.125 C 3.140625 -3.34375 2.726562 -3.453125 2.28125 -3.453125 C 2.007812 -3.453125 1.804688 -3.410156 1.671875 -3.328125 C 1.535156 -3.253906 1.46875 -3.160156 1.46875 -3.046875 C 1.46875 -2.910156 1.539062 -2.816406 1.6875 -2.765625 C 1.832031 -2.710938 2.0625 -2.660156 2.375 -2.609375 C 2.726562 -2.554688 3.019531 -2.492188 3.25 -2.421875 C 3.476562 -2.359375 3.675781 -2.238281 3.84375 -2.0625 C 4.007812 -1.882812 4.09375 -1.632812 4.09375 -1.3125 C 4.09375 -1.039062 4.007812 -0.800781 3.84375 -0.59375 C 3.6875 -0.382812 3.453125 -0.222656 3.140625 -0.109375 C 2.828125 0.00390625 2.460938 0.0625 2.046875 0.0625 Z M 2.046875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(405.663443, 301.857214)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(363.180619, 313.143977)">
                                <g>
                                    <path
                                        d="M 3.03125 -5.640625 C 3.75 -5.640625 4.3125 -5.46875 4.71875 -5.125 C 5.132812 -4.78125 5.34375 -4.304688 5.34375 -3.703125 C 5.34375 -3.109375 5.132812 -2.640625 4.71875 -2.296875 C 4.3125 -1.953125 3.75 -1.78125 3.03125 -1.78125 L 1.515625 -1.78125 L 1.515625 0 L 0.921875 0 L 0.921875 -5.640625 Z M 3.015625 -2.3125 C 3.578125 -2.3125 4.003906 -2.429688 4.296875 -2.671875 C 4.585938 -2.921875 4.734375 -3.265625 4.734375 -3.703125 C 4.734375 -4.160156 4.585938 -4.507812 4.296875 -4.75 C 4.003906 -5 3.578125 -5.125 3.015625 -5.125 L 1.515625 -5.125 L 1.515625 -2.3125 Z M 3.015625 -2.3125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(368.969111, 313.143977)">
                                <g>
                                    <path
                                        d="M 1.34375 -3.40625 C 1.476562 -3.695312 1.675781 -3.910156 1.9375 -4.046875 C 2.207031 -4.191406 2.539062 -4.265625 2.9375 -4.265625 L 2.9375 -3.71875 L 2.796875 -3.71875 C 2.347656 -3.71875 2 -3.582031 1.75 -3.3125 C 1.5 -3.039062 1.375 -2.65625 1.375 -2.15625 L 1.375 0 L 0.796875 0 L 0.796875 -4.234375 L 1.34375 -4.234375 Z M 1.34375 -3.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(372.201958, 313.143977)">
                                <g>
                                    <path
                                        d="M 2.53125 0.046875 C 2.125 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.125 -4.265625 2.53125 -4.265625 C 2.9375 -4.265625 3.300781 -4.171875 3.625 -3.984375 C 3.957031 -3.804688 4.21875 -3.550781 4.40625 -3.21875 C 4.59375 -2.894531 4.6875 -2.53125 4.6875 -2.125 C 4.6875 -1.707031 4.59375 -1.332031 4.40625 -1 C 4.21875 -0.675781 3.957031 -0.421875 3.625 -0.234375 C 3.300781 -0.046875 2.9375 0.046875 2.53125 0.046875 Z M 2.53125 -0.46875 C 2.832031 -0.46875 3.101562 -0.535156 3.34375 -0.671875 C 3.582031 -0.804688 3.769531 -1 3.90625 -1.25 C 4.039062 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.039062 -2.734375 3.90625 -2.984375 C 3.769531 -3.234375 3.582031 -3.425781 3.34375 -3.5625 C 3.101562 -3.695312 2.832031 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 2.53125 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(377.256813, 313.143977)">
                                <g>
                                    <path
                                        d="M 2.984375 -4.265625 C 3.378906 -4.265625 3.738281 -4.175781 4.0625 -4 C 4.382812 -3.820312 4.632812 -3.566406 4.8125 -3.234375 C 5 -2.910156 5.09375 -2.539062 5.09375 -2.125 C 5.09375 -1.695312 5 -1.320312 4.8125 -1 C 4.632812 -0.675781 4.382812 -0.421875 4.0625 -0.234375 C 3.738281 -0.046875 3.378906 0.046875 2.984375 0.046875 C 2.628906 0.046875 2.3125 -0.0234375 2.03125 -0.171875 C 1.75 -0.328125 1.519531 -0.550781 1.34375 -0.84375 L 1.34375 0 L 0.796875 0 L 0.796875 -5.984375 L 1.375 -5.984375 L 1.375 -3.4375 C 1.550781 -3.707031 1.773438 -3.910156 2.046875 -4.046875 C 2.328125 -4.191406 2.640625 -4.265625 2.984375 -4.265625 Z M 2.9375 -0.46875 C 3.238281 -0.46875 3.507812 -0.535156 3.75 -0.671875 C 3.988281 -0.804688 4.175781 -1 4.3125 -1.25 C 4.445312 -1.507812 4.515625 -1.800781 4.515625 -2.125 C 4.515625 -2.445312 4.445312 -2.734375 4.3125 -2.984375 C 4.175781 -3.234375 3.988281 -3.425781 3.75 -3.5625 C 3.507812 -3.695312 3.238281 -3.765625 2.9375 -3.765625 C 2.632812 -3.765625 2.363281 -3.695312 2.125 -3.5625 C 1.894531 -3.425781 1.707031 -3.234375 1.5625 -2.984375 C 1.425781 -2.734375 1.359375 -2.445312 1.359375 -2.125 C 1.359375 -1.800781 1.425781 -1.507812 1.5625 -1.25 C 1.707031 -1 1.894531 -0.804688 2.125 -0.671875 C 2.363281 -0.535156 2.632812 -0.46875 2.9375 -0.46875 Z M 2.9375 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(382.722824, 313.143977)">
                                <g>
                                    <path
                                        d="M 0.796875 -5.984375 L 1.375 -5.984375 L 1.375 0 L 0.796875 0 Z M 0.796875 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(384.891491, 313.143977)">
                                <g>
                                    <path
                                        d="M 4.484375 -1.9375 L 0.9375 -1.9375 C 0.96875 -1.5 1.132812 -1.144531 1.4375 -0.875 C 1.75 -0.601562 2.140625 -0.46875 2.609375 -0.46875 C 2.867188 -0.46875 3.109375 -0.515625 3.328125 -0.609375 C 3.554688 -0.703125 3.75 -0.84375 3.90625 -1.03125 L 4.234375 -0.65625 C 4.046875 -0.425781 3.8125 -0.25 3.53125 -0.125 C 3.25 -0.0078125 2.9375 0.046875 2.59375 0.046875 C 2.15625 0.046875 1.769531 -0.046875 1.4375 -0.234375 C 1.101562 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.460938 -2.894531 0.640625 -3.21875 C 0.816406 -3.550781 1.0625 -3.804688 1.375 -3.984375 C 1.695312 -4.171875 2.050781 -4.265625 2.4375 -4.265625 C 2.832031 -4.265625 3.1875 -4.171875 3.5 -3.984375 C 3.8125 -3.804688 4.054688 -3.554688 4.234375 -3.234375 C 4.410156 -2.910156 4.5 -2.539062 4.5 -2.125 Z M 2.4375 -3.78125 C 2.03125 -3.78125 1.6875 -3.648438 1.40625 -3.390625 C 1.132812 -3.128906 0.976562 -2.789062 0.9375 -2.375 L 3.953125 -2.375 C 3.910156 -2.789062 3.75 -3.128906 3.46875 -3.390625 C 3.195312 -3.648438 2.851562 -3.78125 2.4375 -3.78125 Z M 2.4375 -3.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(389.760917, 313.143977)">
                                <g>
                                    <path
                                        d="M 6.09375 -4.265625 C 6.625 -4.265625 7.039062 -4.113281 7.34375 -3.8125 C 7.644531 -3.507812 7.796875 -3.054688 7.796875 -2.453125 L 7.796875 0 L 7.21875 0 L 7.21875 -2.40625 C 7.21875 -2.84375 7.113281 -3.175781 6.90625 -3.40625 C 6.695312 -3.632812 6.394531 -3.75 6 -3.75 C 5.5625 -3.75 5.21875 -3.613281 4.96875 -3.34375 C 4.71875 -3.070312 4.59375 -2.695312 4.59375 -2.21875 L 4.59375 0 L 4.015625 0 L 4.015625 -2.40625 C 4.015625 -2.84375 3.90625 -3.175781 3.6875 -3.40625 C 3.476562 -3.632812 3.179688 -3.75 2.796875 -3.75 C 2.359375 -3.75 2.007812 -3.613281 1.75 -3.34375 C 1.5 -3.070312 1.375 -2.695312 1.375 -2.21875 L 1.375 0 L 0.796875 0 L 0.796875 -4.234375 L 1.34375 -4.234375 L 1.34375 -3.46875 C 1.5 -3.726562 1.707031 -3.925781 1.96875 -4.0625 C 2.238281 -4.195312 2.550781 -4.265625 2.90625 -4.265625 C 3.257812 -4.265625 3.566406 -4.191406 3.828125 -4.046875 C 4.085938 -3.898438 4.28125 -3.675781 4.40625 -3.375 C 4.5625 -3.65625 4.785156 -3.875 5.078125 -4.03125 C 5.367188 -4.1875 5.707031 -4.265625 6.09375 -4.265625 Z M 6.09375 -4.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(398.314666, 313.143977)">
                                <g>
                                    <path
                                        d="M 2.28125 -4.265625 C 2.832031 -4.265625 3.253906 -4.125 3.546875 -3.84375 C 3.847656 -3.570312 4 -3.164062 4 -2.625 L 4 0 L 3.453125 0 L 3.453125 -0.65625 C 3.316406 -0.4375 3.125 -0.265625 2.875 -0.140625 C 2.625 -0.015625 2.328125 0.046875 1.984375 0.046875 C 1.515625 0.046875 1.140625 -0.0664062 0.859375 -0.296875 C 0.578125 -0.523438 0.4375 -0.820312 0.4375 -1.1875 C 0.4375 -1.550781 0.566406 -1.84375 0.828125 -2.0625 C 1.085938 -2.28125 1.503906 -2.390625 2.078125 -2.390625 L 3.421875 -2.390625 L 3.421875 -2.65625 C 3.421875 -3.019531 3.316406 -3.296875 3.109375 -3.484375 C 2.910156 -3.671875 2.613281 -3.765625 2.21875 -3.765625 C 1.957031 -3.765625 1.703125 -3.71875 1.453125 -3.625 C 1.203125 -3.539062 0.988281 -3.421875 0.8125 -3.265625 L 0.5625 -3.703125 C 0.769531 -3.878906 1.023438 -4.015625 1.328125 -4.109375 C 1.628906 -4.210938 1.945312 -4.265625 2.28125 -4.265625 Z M 2.078125 -0.40625 C 2.398438 -0.40625 2.675781 -0.476562 2.90625 -0.625 C 3.132812 -0.78125 3.304688 -1 3.421875 -1.28125 L 3.421875 -1.96875 L 2.09375 -1.96875 C 1.375 -1.96875 1.015625 -1.710938 1.015625 -1.203125 C 1.015625 -0.960938 1.109375 -0.769531 1.296875 -0.625 C 1.484375 -0.476562 1.742188 -0.40625 2.078125 -0.40625 Z M 2.078125 -0.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(476.712005, 261.582337)">
                                <g>
                                    <path
                                        d="M 3.109375 -5.640625 C 3.609375 -5.640625 4.039062 -5.554688 4.40625 -5.390625 C 4.78125 -5.222656 5.066406 -4.984375 5.265625 -4.671875 C 5.460938 -4.367188 5.5625 -4.007812 5.5625 -3.59375 C 5.5625 -3.175781 5.460938 -2.8125 5.265625 -2.5 C 5.066406 -2.195312 4.78125 -1.960938 4.40625 -1.796875 C 4.039062 -1.640625 3.609375 -1.5625 3.109375 -1.5625 L 1.96875 -1.5625 L 1.96875 0 L 0.671875 0 L 0.671875 -5.640625 Z M 3.046875 -2.625 C 3.429688 -2.625 3.722656 -2.707031 3.921875 -2.875 C 4.128906 -3.039062 4.234375 -3.28125 4.234375 -3.59375 C 4.234375 -3.914062 4.128906 -4.160156 3.921875 -4.328125 C 3.722656 -4.492188 3.429688 -4.578125 3.046875 -4.578125 L 1.96875 -4.578125 L 1.96875 -2.625 Z M 3.046875 -2.625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(482.613363, 261.582337)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(486.088072, 261.582337)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(491.368661, 261.582337)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(494.875618, 261.582337)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(500.156208, 261.582337)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(503.663165, 261.582337)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(506.089815, 261.582337)">
                                <g>
                                    <path
                                        d="M 3.140625 -4.40625 C 3.546875 -4.40625 3.910156 -4.3125 4.234375 -4.125 C 4.566406 -3.9375 4.828125 -3.675781 5.015625 -3.34375 C 5.210938 -3.007812 5.3125 -2.617188 5.3125 -2.171875 C 5.3125 -1.722656 5.210938 -1.328125 5.015625 -0.984375 C 4.828125 -0.648438 4.566406 -0.390625 4.234375 -0.203125 C 3.910156 -0.0234375 3.546875 0.0625 3.140625 0.0625 C 2.585938 0.0625 2.15625 -0.109375 1.84375 -0.453125 L 1.84375 1.5625 L 0.578125 1.5625 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.84375 C 2.09375 -4.21875 2.546875 -4.40625 3.140625 -4.40625 Z M 2.921875 -0.96875 C 3.242188 -0.96875 3.507812 -1.078125 3.71875 -1.296875 C 3.925781 -1.515625 4.03125 -1.804688 4.03125 -2.171875 C 4.03125 -2.535156 3.925781 -2.828125 3.71875 -3.046875 C 3.507812 -3.265625 3.242188 -3.375 2.921875 -3.375 C 2.597656 -3.375 2.332031 -3.265625 2.125 -3.046875 C 1.925781 -2.828125 1.828125 -2.535156 1.828125 -2.171875 C 1.828125 -1.804688 1.925781 -1.515625 2.125 -1.296875 C 2.332031 -1.078125 2.597656 -0.96875 2.921875 -0.96875 Z M 2.921875 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(511.652572, 261.582337)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(633.325192, 57.995385)">
                                <g>
                                    <path
                                        d="M 3.375 0.09375 C 2.789062 0.09375 2.265625 -0.03125 1.796875 -0.28125 C 1.335938 -0.53125 0.972656 -0.875 0.703125 -1.3125 C 0.441406 -1.757812 0.3125 -2.265625 0.3125 -2.828125 C 0.3125 -3.378906 0.441406 -3.875 0.703125 -4.3125 C 0.972656 -4.757812 1.335938 -5.109375 1.796875 -5.359375 C 2.265625 -5.609375 2.789062 -5.734375 3.375 -5.734375 C 3.863281 -5.734375 4.304688 -5.644531 4.703125 -5.46875 C 5.097656 -5.300781 5.429688 -5.054688 5.703125 -4.734375 L 4.859375 -3.96875 C 4.484375 -4.40625 4.007812 -4.625 3.4375 -4.625 C 3.09375 -4.625 2.78125 -4.546875 2.5 -4.390625 C 2.226562 -4.242188 2.015625 -4.03125 1.859375 -3.75 C 1.710938 -3.476562 1.640625 -3.171875 1.640625 -2.828125 C 1.640625 -2.472656 1.710938 -2.15625 1.859375 -1.875 C 2.015625 -1.601562 2.226562 -1.390625 2.5 -1.234375 C 2.78125 -1.085938 3.09375 -1.015625 3.4375 -1.015625 C 4.007812 -1.015625 4.484375 -1.238281 4.859375 -1.6875 L 5.703125 -0.90625 C 5.429688 -0.582031 5.097656 -0.332031 4.703125 -0.15625 C 4.304688 0.0078125 3.863281 0.09375 3.375 0.09375 Z M 3.375 0.09375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(639.234614, 57.995385)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(644.208845, 57.995385)">
                                <g>
                                    <path
                                        d="M 2.046875 0.0625 C 1.679688 0.0625 1.328125 0.0195312 0.984375 -0.0625 C 0.640625 -0.15625 0.363281 -0.269531 0.15625 -0.40625 L 0.578125 -1.3125 C 0.773438 -1.1875 1.007812 -1.082031 1.28125 -1 C 1.550781 -0.925781 1.820312 -0.890625 2.09375 -0.890625 C 2.625 -0.890625 2.890625 -1.019531 2.890625 -1.28125 C 2.890625 -1.40625 2.816406 -1.492188 2.671875 -1.546875 C 2.523438 -1.597656 2.300781 -1.644531 2 -1.6875 C 1.644531 -1.738281 1.351562 -1.796875 1.125 -1.859375 C 0.894531 -1.929688 0.691406 -2.054688 0.515625 -2.234375 C 0.347656 -2.410156 0.265625 -2.664062 0.265625 -3 C 0.265625 -3.269531 0.34375 -3.507812 0.5 -3.71875 C 0.65625 -3.9375 0.882812 -4.101562 1.1875 -4.21875 C 1.5 -4.34375 1.863281 -4.40625 2.28125 -4.40625 C 2.582031 -4.40625 2.882812 -4.367188 3.1875 -4.296875 C 3.488281 -4.234375 3.738281 -4.140625 3.9375 -4.015625 L 3.515625 -3.125 C 3.140625 -3.34375 2.726562 -3.453125 2.28125 -3.453125 C 2.007812 -3.453125 1.804688 -3.410156 1.671875 -3.328125 C 1.535156 -3.253906 1.46875 -3.160156 1.46875 -3.046875 C 1.46875 -2.910156 1.539062 -2.816406 1.6875 -2.765625 C 1.832031 -2.710938 2.0625 -2.660156 2.375 -2.609375 C 2.726562 -2.554688 3.019531 -2.492188 3.25 -2.421875 C 3.476562 -2.359375 3.675781 -2.238281 3.84375 -2.0625 C 4.007812 -1.882812 4.09375 -1.632812 4.09375 -1.3125 C 4.09375 -1.039062 4.007812 -0.800781 3.84375 -0.59375 C 3.6875 -0.382812 3.453125 -0.222656 3.140625 -0.109375 C 2.828125 0.00390625 2.460938 0.0625 2.046875 0.0625 Z M 2.046875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(648.489751, 57.995385)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(653.77034, 57.995385)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(656.051874, 57.995385)">
                                <g>
                                    <path
                                        d="M 5 -5.984375 L 5 0 L 3.796875 0 L 3.796875 -0.5 C 3.484375 -0.125 3.03125 0.0625 2.4375 0.0625 C 2.03125 0.0625 1.660156 -0.0234375 1.328125 -0.203125 C 1.003906 -0.390625 0.75 -0.648438 0.5625 -0.984375 C 0.375 -1.328125 0.28125 -1.722656 0.28125 -2.171875 C 0.28125 -2.617188 0.375 -3.007812 0.5625 -3.34375 C 0.75 -3.6875 1.003906 -3.945312 1.328125 -4.125 C 1.660156 -4.3125 2.03125 -4.40625 2.4375 -4.40625 C 2.988281 -4.40625 3.421875 -4.226562 3.734375 -3.875 L 3.734375 -5.984375 Z M 2.65625 -0.96875 C 2.976562 -0.96875 3.242188 -1.078125 3.453125 -1.296875 C 3.660156 -1.515625 3.765625 -1.804688 3.765625 -2.171875 C 3.765625 -2.535156 3.660156 -2.828125 3.453125 -3.046875 C 3.242188 -3.265625 2.976562 -3.375 2.65625 -3.375 C 2.332031 -3.375 2.066406 -3.265625 1.859375 -3.046875 C 1.648438 -2.828125 1.546875 -2.535156 1.546875 -2.171875 C 1.546875 -1.804688 1.648438 -1.515625 1.859375 -1.296875 C 2.066406 -1.078125 2.332031 -0.96875 2.65625 -0.96875 Z M 2.65625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(661.630752, 57.995385)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(666.717856, 57.995385)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(668.99939, 57.995385)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(674.086493, 57.995385)">
                                <g>
                                    <path
                                        d="M 2.046875 0.0625 C 1.679688 0.0625 1.328125 0.0195312 0.984375 -0.0625 C 0.640625 -0.15625 0.363281 -0.269531 0.15625 -0.40625 L 0.578125 -1.3125 C 0.773438 -1.1875 1.007812 -1.082031 1.28125 -1 C 1.550781 -0.925781 1.820312 -0.890625 2.09375 -0.890625 C 2.625 -0.890625 2.890625 -1.019531 2.890625 -1.28125 C 2.890625 -1.40625 2.816406 -1.492188 2.671875 -1.546875 C 2.523438 -1.597656 2.300781 -1.644531 2 -1.6875 C 1.644531 -1.738281 1.351562 -1.796875 1.125 -1.859375 C 0.894531 -1.929688 0.691406 -2.054688 0.515625 -2.234375 C 0.347656 -2.410156 0.265625 -2.664062 0.265625 -3 C 0.265625 -3.269531 0.34375 -3.507812 0.5 -3.71875 C 0.65625 -3.9375 0.882812 -4.101562 1.1875 -4.21875 C 1.5 -4.34375 1.863281 -4.40625 2.28125 -4.40625 C 2.582031 -4.40625 2.882812 -4.367188 3.1875 -4.296875 C 3.488281 -4.234375 3.738281 -4.140625 3.9375 -4.015625 L 3.515625 -3.125 C 3.140625 -3.34375 2.726562 -3.453125 2.28125 -3.453125 C 2.007812 -3.453125 1.804688 -3.410156 1.671875 -3.328125 C 1.535156 -3.253906 1.46875 -3.160156 1.46875 -3.046875 C 1.46875 -2.910156 1.539062 -2.816406 1.6875 -2.765625 C 1.832031 -2.710938 2.0625 -2.660156 2.375 -2.609375 C 2.726562 -2.554688 3.019531 -2.492188 3.25 -2.421875 C 3.476562 -2.359375 3.675781 -2.238281 3.84375 -2.0625 C 4.007812 -1.882812 4.09375 -1.632812 4.09375 -1.3125 C 4.09375 -1.039062 4.007812 -0.800781 3.84375 -0.59375 C 3.6875 -0.382812 3.453125 -0.222656 3.140625 -0.109375 C 2.828125 0.00390625 2.460938 0.0625 2.046875 0.0625 Z M 2.046875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(678.367399, 57.995385)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(681.874357, 57.995385)">
                                <g>
                                    <path
                                        d="M 4.953125 -4.34375 L 4.953125 0 L 3.75 0 L 3.75 -0.515625 C 3.582031 -0.328125 3.382812 -0.179688 3.15625 -0.078125 C 2.925781 0.015625 2.675781 0.0625 2.40625 0.0625 C 1.84375 0.0625 1.394531 -0.0976562 1.0625 -0.421875 C 0.726562 -0.753906 0.5625 -1.242188 0.5625 -1.890625 L 0.5625 -4.34375 L 1.8125 -4.34375 L 1.8125 -2.078125 C 1.8125 -1.378906 2.101562 -1.03125 2.6875 -1.03125 C 2.988281 -1.03125 3.226562 -1.125 3.40625 -1.3125 C 3.59375 -1.507812 3.6875 -1.800781 3.6875 -2.1875 L 3.6875 -4.34375 Z M 4.953125 -4.34375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(687.412929, 57.995385)">
                                <g>
                                    <path
                                        d="M 5 -5.984375 L 5 0 L 3.796875 0 L 3.796875 -0.5 C 3.484375 -0.125 3.03125 0.0625 2.4375 0.0625 C 2.03125 0.0625 1.660156 -0.0234375 1.328125 -0.203125 C 1.003906 -0.390625 0.75 -0.648438 0.5625 -0.984375 C 0.375 -1.328125 0.28125 -1.722656 0.28125 -2.171875 C 0.28125 -2.617188 0.375 -3.007812 0.5625 -3.34375 C 0.75 -3.6875 1.003906 -3.945312 1.328125 -4.125 C 1.660156 -4.3125 2.03125 -4.40625 2.4375 -4.40625 C 2.988281 -4.40625 3.421875 -4.226562 3.734375 -3.875 L 3.734375 -5.984375 Z M 2.65625 -0.96875 C 2.976562 -0.96875 3.242188 -1.078125 3.453125 -1.296875 C 3.660156 -1.515625 3.765625 -1.804688 3.765625 -2.171875 C 3.765625 -2.535156 3.660156 -2.828125 3.453125 -3.046875 C 3.242188 -3.265625 2.976562 -3.375 2.65625 -3.375 C 2.332031 -3.375 2.066406 -3.265625 1.859375 -3.046875 C 1.648438 -2.828125 1.546875 -2.535156 1.546875 -2.171875 C 1.546875 -1.804688 1.648438 -1.515625 1.859375 -1.296875 C 2.066406 -1.078125 2.332031 -0.96875 2.65625 -0.96875 Z M 2.65625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(692.991807, 57.995385)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(695.418457, 57.995385)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(94.337785, 30.641459)">
                                <g>
                                    <path
                                        d="M 0.703125 -5.9375 L 2.078125 -5.9375 L 2.078125 0 L 0.703125 0 Z M 0.703125 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(98.159483, 30.641459)">
                                <g>
                                    <path
                                        d="M 6.15625 -5.9375 L 6.15625 0 L 5.015625 0 L 2.0625 -3.609375 L 2.0625 0 L 0.703125 0 L 0.703125 -5.9375 L 1.84375 -5.9375 L 4.796875 -2.328125 L 4.796875 -5.9375 Z M 6.15625 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(106.047444, 30.641459)">
                                <g>
                                    <path
                                        d="M 4.71875 -3.0625 L 5.96875 -3.0625 L 5.96875 -0.65625 C 5.644531 -0.40625 5.269531 -0.210938 4.84375 -0.078125 C 4.425781 0.046875 4.003906 0.109375 3.578125 0.109375 C 2.953125 0.109375 2.394531 -0.0195312 1.90625 -0.28125 C 1.414062 -0.550781 1.03125 -0.921875 0.75 -1.390625 C 0.46875 -1.859375 0.328125 -2.382812 0.328125 -2.96875 C 0.328125 -3.5625 0.46875 -4.085938 0.75 -4.546875 C 1.03125 -5.015625 1.421875 -5.378906 1.921875 -5.640625 C 2.421875 -5.910156 2.976562 -6.046875 3.59375 -6.046875 C 4.113281 -6.046875 4.585938 -5.957031 5.015625 -5.78125 C 5.441406 -5.601562 5.796875 -5.347656 6.078125 -5.015625 L 5.203125 -4.203125 C 4.773438 -4.648438 4.265625 -4.875 3.671875 -4.875 C 3.285156 -4.875 2.945312 -4.789062 2.65625 -4.625 C 2.363281 -4.46875 2.132812 -4.242188 1.96875 -3.953125 C 1.800781 -3.671875 1.71875 -3.34375 1.71875 -2.96875 C 1.71875 -2.601562 1.800781 -2.273438 1.96875 -1.984375 C 2.132812 -1.691406 2.363281 -1.460938 2.65625 -1.296875 C 2.945312 -1.140625 3.273438 -1.0625 3.640625 -1.0625 C 4.035156 -1.0625 4.394531 -1.148438 4.71875 -1.328125 Z M 4.71875 -3.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(113.621965, 30.641459)">
                                <g>
                                    <path
                                        d="M 4.484375 0 L 3.34375 -1.65625 L 2.078125 -1.65625 L 2.078125 0 L 0.703125 0 L 0.703125 -5.9375 L 3.28125 -5.9375 C 3.800781 -5.9375 4.253906 -5.847656 4.640625 -5.671875 C 5.023438 -5.492188 5.320312 -5.242188 5.53125 -4.921875 C 5.75 -4.609375 5.859375 -4.226562 5.859375 -3.78125 C 5.859375 -3.34375 5.75 -2.960938 5.53125 -2.640625 C 5.320312 -2.316406 5.019531 -2.070312 4.625 -1.90625 L 5.96875 0 Z M 4.46875 -3.78125 C 4.46875 -4.113281 4.359375 -4.367188 4.140625 -4.546875 C 3.921875 -4.722656 3.609375 -4.8125 3.203125 -4.8125 L 2.078125 -4.8125 L 2.078125 -2.75 L 3.203125 -2.75 C 3.609375 -2.75 3.921875 -2.835938 4.140625 -3.015625 C 4.359375 -3.203125 4.46875 -3.457031 4.46875 -3.78125 Z M 4.46875 -3.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(120.891518, 30.641459)">
                                <g>
                                    <path
                                        d="M 5.296875 -1.109375 L 5.296875 0 L 0.703125 0 L 0.703125 -5.9375 L 5.1875 -5.9375 L 5.1875 -4.84375 L 2.0625 -4.84375 L 2.0625 -3.546875 L 4.828125 -3.546875 L 4.828125 -2.484375 L 2.0625 -2.484375 L 2.0625 -1.109375 Z M 5.296875 -1.109375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(127.618904, 30.641459)">
                                <g>
                                    <path
                                        d="M 2.65625 0.109375 C 2.1875 0.109375 1.734375 0.046875 1.296875 -0.078125 C 0.859375 -0.210938 0.503906 -0.378906 0.234375 -0.578125 L 0.703125 -1.625 C 0.960938 -1.4375 1.265625 -1.285156 1.609375 -1.171875 C 1.960938 -1.054688 2.316406 -1 2.671875 -1 C 3.054688 -1 3.34375 -1.054688 3.53125 -1.171875 C 3.71875 -1.285156 3.8125 -1.441406 3.8125 -1.640625 C 3.8125 -1.773438 3.753906 -1.890625 3.640625 -1.984375 C 3.535156 -2.078125 3.394531 -2.148438 3.21875 -2.203125 C 3.050781 -2.265625 2.816406 -2.332031 2.515625 -2.40625 C 2.066406 -2.507812 1.695312 -2.613281 1.40625 -2.71875 C 1.113281 -2.832031 0.863281 -3.003906 0.65625 -3.234375 C 0.457031 -3.472656 0.359375 -3.789062 0.359375 -4.1875 C 0.359375 -4.53125 0.453125 -4.84375 0.640625 -5.125 C 0.828125 -5.40625 1.109375 -5.628906 1.484375 -5.796875 C 1.859375 -5.960938 2.316406 -6.046875 2.859375 -6.046875 C 3.234375 -6.046875 3.601562 -6 3.96875 -5.90625 C 4.332031 -5.8125 4.648438 -5.679688 4.921875 -5.515625 L 4.5 -4.46875 C 3.945312 -4.78125 3.394531 -4.9375 2.84375 -4.9375 C 2.46875 -4.9375 2.1875 -4.875 2 -4.75 C 1.8125 -4.625 1.71875 -4.460938 1.71875 -4.265625 C 1.71875 -4.054688 1.820312 -3.898438 2.03125 -3.796875 C 2.25 -3.703125 2.578125 -3.609375 3.015625 -3.515625 C 3.460938 -3.398438 3.832031 -3.289062 4.125 -3.1875 C 4.414062 -3.082031 4.660156 -2.910156 4.859375 -2.671875 C 5.066406 -2.441406 5.171875 -2.128906 5.171875 -1.734375 C 5.171875 -1.398438 5.078125 -1.09375 4.890625 -0.8125 C 4.703125 -0.53125 4.414062 -0.304688 4.03125 -0.140625 C 3.65625 0.0234375 3.195312 0.109375 2.65625 0.109375 Z M 2.65625 0.109375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(134.06673, 30.641459)">
                                <g>
                                    <path
                                        d="M 3.578125 0.109375 C 2.960938 0.109375 2.40625 -0.0234375 1.90625 -0.296875 C 1.414062 -0.566406 1.03125 -0.929688 0.75 -1.390625 C 0.46875 -1.859375 0.328125 -2.382812 0.328125 -2.96875 C 0.328125 -3.550781 0.46875 -4.078125 0.75 -4.546875 C 1.03125 -5.015625 1.414062 -5.378906 1.90625 -5.640625 C 2.40625 -5.910156 2.960938 -6.046875 3.578125 -6.046875 C 4.191406 -6.046875 4.742188 -5.910156 5.234375 -5.640625 C 5.734375 -5.378906 6.125 -5.015625 6.40625 -4.546875 C 6.6875 -4.078125 6.828125 -3.550781 6.828125 -2.96875 C 6.828125 -2.382812 6.6875 -1.859375 6.40625 -1.390625 C 6.125 -0.929688 5.734375 -0.566406 5.234375 -0.296875 C 4.742188 -0.0234375 4.191406 0.109375 3.578125 0.109375 Z M 3.578125 -1.0625 C 3.929688 -1.0625 4.25 -1.140625 4.53125 -1.296875 C 4.8125 -1.460938 5.03125 -1.691406 5.1875 -1.984375 C 5.351562 -2.273438 5.4375 -2.601562 5.4375 -2.96875 C 5.4375 -3.332031 5.351562 -3.660156 5.1875 -3.953125 C 5.03125 -4.242188 4.8125 -4.46875 4.53125 -4.625 C 4.25 -4.789062 3.929688 -4.875 3.578125 -4.875 C 3.222656 -4.875 2.90625 -4.789062 2.625 -4.625 C 2.34375 -4.46875 2.117188 -4.242188 1.953125 -3.953125 C 1.796875 -3.660156 1.71875 -3.332031 1.71875 -2.96875 C 1.71875 -2.601562 1.796875 -2.273438 1.953125 -1.984375 C 2.117188 -1.691406 2.34375 -1.460938 2.625 -1.296875 C 2.90625 -1.140625 3.222656 -1.0625 3.578125 -1.0625 Z M 3.578125 -1.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(142.259661, 30.641459)">
                                <g>
                                    <path
                                        d="M 2.65625 0.109375 C 2.1875 0.109375 1.734375 0.046875 1.296875 -0.078125 C 0.859375 -0.210938 0.503906 -0.378906 0.234375 -0.578125 L 0.703125 -1.625 C 0.960938 -1.4375 1.265625 -1.285156 1.609375 -1.171875 C 1.960938 -1.054688 2.316406 -1 2.671875 -1 C 3.054688 -1 3.34375 -1.054688 3.53125 -1.171875 C 3.71875 -1.285156 3.8125 -1.441406 3.8125 -1.640625 C 3.8125 -1.773438 3.753906 -1.890625 3.640625 -1.984375 C 3.535156 -2.078125 3.394531 -2.148438 3.21875 -2.203125 C 3.050781 -2.265625 2.816406 -2.332031 2.515625 -2.40625 C 2.066406 -2.507812 1.695312 -2.613281 1.40625 -2.71875 C 1.113281 -2.832031 0.863281 -3.003906 0.65625 -3.234375 C 0.457031 -3.472656 0.359375 -3.789062 0.359375 -4.1875 C 0.359375 -4.53125 0.453125 -4.84375 0.640625 -5.125 C 0.828125 -5.40625 1.109375 -5.628906 1.484375 -5.796875 C 1.859375 -5.960938 2.316406 -6.046875 2.859375 -6.046875 C 3.234375 -6.046875 3.601562 -6 3.96875 -5.90625 C 4.332031 -5.8125 4.648438 -5.679688 4.921875 -5.515625 L 4.5 -4.46875 C 3.945312 -4.78125 3.394531 -4.9375 2.84375 -4.9375 C 2.46875 -4.9375 2.1875 -4.875 2 -4.75 C 1.8125 -4.625 1.71875 -4.460938 1.71875 -4.265625 C 1.71875 -4.054688 1.820312 -3.898438 2.03125 -3.796875 C 2.25 -3.703125 2.578125 -3.609375 3.015625 -3.515625 C 3.460938 -3.398438 3.832031 -3.289062 4.125 -3.1875 C 4.414062 -3.082031 4.660156 -2.910156 4.859375 -2.671875 C 5.066406 -2.441406 5.171875 -2.128906 5.171875 -1.734375 C 5.171875 -1.398438 5.078125 -1.09375 4.890625 -0.8125 C 4.703125 -0.53125 4.414062 -0.304688 4.03125 -0.140625 C 3.65625 0.0234375 3.195312 0.109375 2.65625 0.109375 Z M 2.65625 0.109375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(819.465867, 360.018433)">
                                <g>
                                    <path
                                        d="M 0.703125 -5.9375 L 2.078125 -5.9375 L 2.078125 0 L 0.703125 0 Z M 0.703125 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(823.287566, 360.018433)">
                                <g>
                                    <path
                                        d="M 6.15625 -5.9375 L 6.15625 0 L 5.015625 0 L 2.0625 -3.609375 L 2.0625 0 L 0.703125 0 L 0.703125 -5.9375 L 1.84375 -5.9375 L 4.796875 -2.328125 L 4.796875 -5.9375 Z M 6.15625 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(831.175526, 360.018433)">
                                <g>
                                    <path
                                        d="M 6.15625 -5.9375 L 6.15625 0 L 5.015625 0 L 2.0625 -3.609375 L 2.0625 0 L 0.703125 0 L 0.703125 -5.9375 L 1.84375 -5.9375 L 4.796875 -2.328125 L 4.796875 -5.9375 Z M 6.15625 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(839.063486, 360.018433)">
                                <g>
                                    <path
                                        d="M 3.578125 0.109375 C 2.960938 0.109375 2.40625 -0.0234375 1.90625 -0.296875 C 1.414062 -0.566406 1.03125 -0.929688 0.75 -1.390625 C 0.46875 -1.859375 0.328125 -2.382812 0.328125 -2.96875 C 0.328125 -3.550781 0.46875 -4.078125 0.75 -4.546875 C 1.03125 -5.015625 1.414062 -5.378906 1.90625 -5.640625 C 2.40625 -5.910156 2.960938 -6.046875 3.578125 -6.046875 C 4.191406 -6.046875 4.742188 -5.910156 5.234375 -5.640625 C 5.734375 -5.378906 6.125 -5.015625 6.40625 -4.546875 C 6.6875 -4.078125 6.828125 -3.550781 6.828125 -2.96875 C 6.828125 -2.382812 6.6875 -1.859375 6.40625 -1.390625 C 6.125 -0.929688 5.734375 -0.566406 5.234375 -0.296875 C 4.742188 -0.0234375 4.191406 0.109375 3.578125 0.109375 Z M 3.578125 -1.0625 C 3.929688 -1.0625 4.25 -1.140625 4.53125 -1.296875 C 4.8125 -1.460938 5.03125 -1.691406 5.1875 -1.984375 C 5.351562 -2.273438 5.4375 -2.601562 5.4375 -2.96875 C 5.4375 -3.332031 5.351562 -3.660156 5.1875 -3.953125 C 5.03125 -4.242188 4.8125 -4.46875 4.53125 -4.625 C 4.25 -4.789062 3.929688 -4.875 3.578125 -4.875 C 3.222656 -4.875 2.90625 -4.789062 2.625 -4.625 C 2.34375 -4.46875 2.117188 -4.242188 1.953125 -3.953125 C 1.796875 -3.660156 1.71875 -3.332031 1.71875 -2.96875 C 1.71875 -2.601562 1.796875 -2.273438 1.953125 -1.984375 C 2.117188 -1.691406 2.34375 -1.460938 2.625 -1.296875 C 2.90625 -1.140625 3.222656 -1.0625 3.578125 -1.0625 Z M 3.578125 -1.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(847.256415, 360.018433)">
                                <g>
                                    <path
                                        d="M 6.421875 -5.9375 L 3.84375 0 L 2.484375 0 L -0.078125 -5.9375 L 1.40625 -5.9375 L 3.21875 -1.703125 L 5.046875 -5.9375 Z M 6.421875 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(854.619154, 360.018433)">
                                <g>
                                    <path
                                        d="M 4.609375 -1.265625 L 1.859375 -1.265625 L 1.328125 0 L -0.078125 0 L 2.578125 -5.9375 L 3.921875 -5.9375 L 6.578125 0 L 5.140625 0 Z M 4.1875 -2.3125 L 3.234375 -4.59375 L 2.296875 -2.3125 Z M 4.1875 -2.3125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(862.151316, 360.018433)">
                                <g>
                                    <path
                                        d="M 3.546875 0.109375 C 2.941406 0.109375 2.394531 -0.0195312 1.90625 -0.28125 C 1.414062 -0.550781 1.03125 -0.921875 0.75 -1.390625 C 0.46875 -1.859375 0.328125 -2.382812 0.328125 -2.96875 C 0.328125 -3.5625 0.46875 -4.085938 0.75 -4.546875 C 1.03125 -5.015625 1.414062 -5.378906 1.90625 -5.640625 C 2.394531 -5.910156 2.945312 -6.046875 3.5625 -6.046875 C 4.070312 -6.046875 4.535156 -5.953125 4.953125 -5.765625 C 5.367188 -5.585938 5.71875 -5.328125 6 -4.984375 L 5.109375 -4.171875 C 4.710938 -4.640625 4.21875 -4.875 3.625 -4.875 C 3.257812 -4.875 2.929688 -4.789062 2.640625 -4.625 C 2.347656 -4.46875 2.117188 -4.242188 1.953125 -3.953125 C 1.796875 -3.660156 1.71875 -3.332031 1.71875 -2.96875 C 1.71875 -2.601562 1.796875 -2.273438 1.953125 -1.984375 C 2.117188 -1.691406 2.347656 -1.460938 2.640625 -1.296875 C 2.929688 -1.140625 3.257812 -1.0625 3.625 -1.0625 C 4.21875 -1.0625 4.710938 -1.296875 5.109375 -1.765625 L 6 -0.953125 C 5.71875 -0.609375 5.363281 -0.34375 4.9375 -0.15625 C 4.519531 0.0195312 4.054688 0.109375 3.546875 0.109375 Z M 3.546875 0.109375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(869.403925, 360.018433)">
                                <g>
                                    <path
                                        d="M 0.703125 -5.9375 L 2.078125 -5.9375 L 2.078125 0 L 0.703125 0 Z M 0.703125 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(873.225625, 360.018433)">
                                <g>
                                    <path
                                        d="M 3.578125 0.109375 C 2.960938 0.109375 2.40625 -0.0234375 1.90625 -0.296875 C 1.414062 -0.566406 1.03125 -0.929688 0.75 -1.390625 C 0.46875 -1.859375 0.328125 -2.382812 0.328125 -2.96875 C 0.328125 -3.550781 0.46875 -4.078125 0.75 -4.546875 C 1.03125 -5.015625 1.414062 -5.378906 1.90625 -5.640625 C 2.40625 -5.910156 2.960938 -6.046875 3.578125 -6.046875 C 4.191406 -6.046875 4.742188 -5.910156 5.234375 -5.640625 C 5.734375 -5.378906 6.125 -5.015625 6.40625 -4.546875 C 6.6875 -4.078125 6.828125 -3.550781 6.828125 -2.96875 C 6.828125 -2.382812 6.6875 -1.859375 6.40625 -1.390625 C 6.125 -0.929688 5.734375 -0.566406 5.234375 -0.296875 C 4.742188 -0.0234375 4.191406 0.109375 3.578125 0.109375 Z M 3.578125 -1.0625 C 3.929688 -1.0625 4.25 -1.140625 4.53125 -1.296875 C 4.8125 -1.460938 5.03125 -1.691406 5.1875 -1.984375 C 5.351562 -2.273438 5.4375 -2.601562 5.4375 -2.96875 C 5.4375 -3.332031 5.351562 -3.660156 5.1875 -3.953125 C 5.03125 -4.242188 4.8125 -4.46875 4.53125 -4.625 C 4.25 -4.789062 3.929688 -4.875 3.578125 -4.875 C 3.222656 -4.875 2.90625 -4.789062 2.625 -4.625 C 2.34375 -4.46875 2.117188 -4.242188 1.953125 -3.953125 C 1.796875 -3.660156 1.71875 -3.332031 1.71875 -2.96875 C 1.71875 -2.601562 1.796875 -2.273438 1.953125 -1.984375 C 2.117188 -1.691406 2.34375 -1.460938 2.625 -1.296875 C 2.90625 -1.140625 3.222656 -1.0625 3.578125 -1.0625 Z M 3.953125 -7.640625 L 5.375 -7.640625 L 3.84375 -6.421875 L 2.8125 -6.421875 Z M 3.953125 -7.640625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(881.418556, 360.018433)">
                                <g>
                                    <path
                                        d="M 6.15625 -5.9375 L 6.15625 0 L 5.015625 0 L 2.0625 -3.609375 L 2.0625 0 L 0.703125 0 L 0.703125 -5.9375 L 1.84375 -5.9375 L 4.796875 -2.328125 L 4.796875 -5.9375 Z M 6.15625 -5.9375 " />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            @elseif(Auth::user()->equipo == 1000)
                <div class="mapa1" style="display: none">                 
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1300"
                        zoomAndPan="magnify" viewBox="0 0 974.88 374.999991" height="500"
                        preserveAspectRatio="xMidYMid meet" version="1.0">
                        <defs>
                            <filter x="0%" y="0%" width="100%" height="100%" id="c6a0897c4c">
                                <feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"
                                    color-interpolation-filters="sRGB" />
                            </filter>
                            <filter x="0%" y="0%" width="100%" height="100%" id="b395c05c30">
                                <feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0.2126 0.7152 0.0722 0 0"
                                    color-interpolation-filters="sRGB" />
                            </filter>
                            <g />
                            <clipPath id="9329105f0e">
                                <path
                                    d="M 189.492188 13.304688 L 815.664062 13.304688 L 815.664062 360 L 189.492188 360 Z M 189.492188 13.304688 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <image x="0" y="0" width="2622"
                                xlink:href="data:image/png;base64,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"
                                id="0b33519ae5" height="1476" preserveAspectRatio="xMidYMid meet" />
                            <mask id="6fb2a9fc40">
                                <g filter="url(#c6a0897c4c)">
                                    <g filter="url(#b395c05c30)"
                                        transform="matrix(0.238815, 0, 0, 0.238792, 189.492233, 7.963395)">
                                        <image x="0" y="0" width="2622"
                                            xlink:href="data:image/png;base64,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"
                                            height="1476" preserveAspectRatio="xMidYMid meet" />
                                    </g>
                                </g>
                            </mask>
                            <image x="0" y="0" width="2622"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAACj4AAAXECAIAAAD4PXJPAAAABmJLR0QA/wD/AP+gvaeTAAAgAElEQVR4nOzd3W3raJqF0U1ZiXQiPu3bxjRQqVQkTGWACoBjJVKJtMW5+Ew1adnHsi3p489aaByYdTwYXtUA8/R+2WQ2/v13P3786x9NrTcBAAAAAAAA4J52tV8AAAAAAAAAgK2bS7r+Yzq5fvefAAAAAAAAALBKc0nXffIwenxIhGsAAAAAAACAjdjXfoFX/bRVH6u9CAAAAAAAAAD31tR+gST598e3wf/6xyzeEAAAAAAAAIDbmcvBcAAAAAAAAAA2q366/uPjyfWnfwsAAAAAAADACtRP18fk4YO/evDRawAAAAAAAIANqJ+u++Q/H/zVfxKbawAAAAAAAIDVq5yu//13//s43Sf/djMcAAAAAAAAYNX2tV8gzbf+CgAAAAAAAIDVqLm6/tdnk+uiT/5leA0AAAAAAACwXjXTdZMcL/i1o/k1AAAAAAAAwKpVS9d//N03ycMFv/mQNMkfhtcAAAAAAAAAK1UtXR+TfXLhwfD9ZftsAAAAAAAAAJao5sHwl7NL4P3oz5MmebnTGwEAAAAAAABQQZ10/T9/9+cr6pfhbXbvtepj8j9uhgMAAAAAAACsUc3V9Vg//e71w2W3xAEAAAAAAABYgWrpukn6pEkekmb4z/hvm9Hf9menxQEAAAAAAABYjTrpunTofZKkT3bJX/9426b/+kezG7bX+9H/FAAAAAAAAAArs6/1v7hJjsku+d+zaH1S/uqPv/vjsL0GAAAAAAAAYH3qpOvzjfVv/KZtAwAAAAAAALAC1b51DQAAAAAAAACFdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVLav/QIAAAAAAAB8rGvTJEma5NeflV8G4GasrgEAAAAAAOaqa5Okz2u9Blgv6RoAAAAAAGCWSreObg1sgnQNAAAAAAAwP+NuLV0DGyBdAwAAAAAAzIxuDWyPdA0AAAAAADAnujWwSdI1AAAAAADAbOjWwFZJ1wAAAAAAAPOgWwMbtq/9AgAAAAAAAIy6teEhsEn+5QcAAAAAAFCbbg1snn//AQAAAAAAVKVbA/hXIAAAAAAAQE26NUAS/xYEAAAAAACoRrcGGPgXIQAAAAAAQA2HNk0SuQYgSfa1XwAAAAAAAGB7Dm36ZJf0td8EYB7813gAAAAAAADu69AmSaNbA/yXdA0AAAAAADADx+SYNE3t9wCoQ7oGAAAAAACooT/7uUn6D4bYJtrA2vnWNQAAAAAAwH09/vnOP/y/Nn1SRtfHJMnDKFe/DH8FsFJW1wAAAAAAALV1bXLWbV6mj1bXwKpJ1wAAAAAAALWN74Efh4F1Y2kNbIh0DQAAAAAAMAMl2jTJLumTpz+zGy6HA2yAdA0AAAAAAFDVoZ0MrJvk6c9k+CS2eg1sg3QNAAAAAABQWzkY3px90Lo8qtfABkjXAAAAAAAA9Rzat7m6jK2Lpz8DsA372i8AAAAAAACwYeOx9cvobPiJeg1sg3QNAAAAAABQSTedXJ8fDAfYDAfDAQAAAAAAKhm36vJBaxtrYKukawAAAAAAgBq6Nhm1GpNrYNukawAAAAAAgBpMrgFGpGsAAAAAAIC7M7kGmJKuAQAAAAAA7s7kGmBKugYAAAAAALgvk2uAM9I1AAAAAADAfZlcA5yRrgEAAAAAAO7I5BrgPdI1AAAAAADAHZlcA7xHugYAAAAAALgXk2uAD0jXAAAAAAAA92JyDfAB6RoAAAAAAOAuTK4BPrav/QIAAAAAAADbUFp1M/yc5J8m1wCvrK4BAAAAAABubzy5HjdsAJJI1wAAAAAAAPfw5jx4kzyaXAP8l3QNAAAAAABwY+eTawCmpGsAAAAAAIAbM7kG+Ix0DQAAAAAAcHsm1wC/JV0DAAAAAADc0qFNkzTDo8k1wHukawAAAAAAgBsrY2uTa4CPSdcAAAAAAAA3c2h95RrgEtI1AAAAAADALZlcA1xAugYAAAAAALgNk2uAi0nXAAAAAAAAN2NyDXAZ6RoAAAAAAOAGTK4BvkK6BgAAAAAAuI3T2NrkGuAz0jUAAAAAAMC1vZlc9ybXAJ+QrgEAAAAAAG7gNLk+Vn4RgEWQrgEAAAAAAK7q/CvXDoYDfEa6BgAAAAAAuLY3k+sn18IBPiFdAwAAAAAAXI/JNcC3SNcAAAAAAABXZXIN8HXSNQAAAAAAwJWYXAN8l3QNAAAAAABwPSVXN8PPJtcAl5GuAQAAAAAAruF8cv1Ltwa4lHQNAAAAAABwJafJtTvhAF8kXQMAAAAAAPzY+eT60eQa4AukawAAAAAAgJ/p2hxNrgF+RLoGAAAAAAD4mZKr+9GjyTXAF0nXAAAAAAAAP9C1yZBcTK4Bvku6BgAAAAAA+IE3udrkGuBbpGsAAAAAAIDvMrkGuBLpGgAAAAAA4LtMrgGuZF/7BQAAAAAAABaia9MkGYp1+XM3/ScAfIvVNQAAAAAAwAXKbfDSqk+VetyqTa4BfkC6BgAAAAAA+Ezp1vnturpPDu17fwHA56RrAAAAAACAz5w21h+dBC89+ziK3AB8hW9dAwAAAAAAXODTPWDvc9cA32d1DQAAAAAA8Jnf7K3HHm7+IgBrJV0DAAAAAABcoL/sd6yuAb5FugYAAAAAAACgMukaAAAAAADgM5dMrgH4AekaAAAAAADgM81l9dq1cIDvkq4BAAAAAAAu8GlU6ZOjeg3wTfvaLwAAAAAAADB7l6yuyy88/nnzlwFYI6trAAAAAACAzzz+mf7jet0kx7u+DsD6SNcAAAAAAACXeTddl0F2uRP+ZHIN8E0OhgMAAAAAAHyma5PRJLAffdO6/PxLtAb4EekaAAAAAADgM+Np9VGrBrg+B8MBAAAAAAB+69CmSR6Gx+bjj14D8F3SNQAAAAAAwGdOufqYxDetAa5PugYAAAAAAPjYoZ1srE2uAW5DugYAAAAAAPhA175+2drkGuDGpGsAAAAAAIAPlGjdDz+bXAPczL72CwAAAAAAAMxS1ybDDLBE613yaHINcBNW1wAAAAAAAO95s7FudGuAG5KuAQAAAAAAzpxPrgG4JekaAAAAAADgzDhXvyS9yTXAbUnXAAAAAAAAU+PJdayuAe5BugYAAAAAAJgat+pjkuTJ5BrgtqRrAAAAAACAEZNrgBqkawAAAAAAgBGTa4AapGsAAAAAAICByTVAJdI1AAAAAADAwOQaoBLpGgAAAAAAIElyaNMkD8OjyTXAHUnXAAAAAAAAg1OuNrkGuC/pGgAAAAAAIHluJxtrk2uA+5KuAQAAAACAzeuGbt0njck1QAXSNQAAAAAAsHlvNtY7k2uAe5OuAQAAAACAbevaZGgmzTC8NrkGuC/pGgAAAAAA2Lbx5Pol6ZNH3Rrg3qRrAAAAAABgw8aT65xdDgfgXqRrAAAAAABgw8at+pjEqXCAOqRrAAAAAABgq0yuAWZDugYAAAAAADbM5BpgHqRrAAAAAABgkw5tmqQZHk2uAaqSrgEAAAAAgK3aDena5BqgNukaAAAAAADYnud2srE2uQaoTboGAAAAAAA2phu6dZ80JtcAsyBdAwAAAAAAG/NmY70zuQaoT7oGAAAAAAC2pGuToZD0yTFpTK4B6pOuAQAAAACALRlPrvukTx51a4D6pGsAAAAAAGAzxpPrJE29NwFgSroGAAAAAAA2Yzy5PiZxKhxgLqRrAAAAAABgGw5nk+v+418G4L6kawAAAAAAYDNOYcTkGmBmpGsAAAAAAGADntvJxtrkGmBmpGsAAAAAAGDtuqFblz9NrgHmR7oGAAAAAADWbryxbkyuAeZoX/sFAAAAAAAAbqlrk2HNV6L1Lnk0uQaYF6trAAAAAABg1cYb65ek160B5ki6BgAAAAAA1ms8uY5T4QDzJV0DAAAAAACrdmrVxyTJk8k1wBxJ1wAAAAAAwEod2jRJMzyaXAPMmHQNAAAAAACsUdemT3ZDuja5Bpg36RoAAAAAAFijZsjVp0eTa4AZk64BAAAAAIDV6dok2SX9sLpuTK4BZk26BgAAAAAAVufNxrpJfunWALMmXQMAAAAAAOtymlwXx49/E4DZkK4BAAAAAIB1GU+uS7d+NLkGmDvpGgAAAAAAWJHDdHL95nI4AHMlXQMAAAAAAOvy5lT4k8k1wAJI1wAAAAAAwFo8t5ONtck1wHJI1wAAAAAAwCp0Q7cuf5pcAyyKdA0AAAAAAKzCeGPdmFwDLMy+9gsAAAAAAAD8WNcmw2SvT/pklzyaXAMshtU1AAAAAACwfOONdUnXujXAokjXAAAAAADAwh1Gk+skTb03AeC7pGsAAAAAAGD5TsXjmCR5MrkGWBjpGgAAAAAAWLLn9r+nwjO9HA7AckjXAAAAAADAYnVDty5/mlwDLJZ0DQAAAAAALNZ4Y92YXAMs2L72CwAAAAAAAHxL1ybTr1zvkkeTa4BFsroGAAAAAACWabyxLqfCdWuAxZKuAQAAAACABTpMJ9dOhQMsnHQNAAAAAAAsTdemn54KT/Jkcg2wYNI1AAAAAACwNM2Qq0+PJtcACyddAwAAAAAAi9INp8L7UcM2uQZYOOkaAAAAAABYlDcb653JNcAaSNcAAAAAAMBynCbXxTFpTK4B1kC6BgAAAAAAFuW0sS6nwh91a4A1kK4BAAAAAICFOLRpkmZ4bJwKB1gP6RoAAAAAAFiCrs0x2Q3pukyunQoHWAvpGgAAAAAAWIKyse6Hn02uAdZlX/sFAAAAAAAAPtO1ybDIKwF75yvXAKtidQ0AAAAAAMzeeGNd0rVuDbAu0jUAAAAAADBvh9HkOsO3rgFYF+kaAAAAAACYsa59PQ9eHJMkTybXAGsjXQMAAAAAADPWDLn69Nh/+LsALJd0DQAAAAAAzFU3nArvRw3b5BpgjaRrAAAAAABgrt5srHcm1wCrJV0DAAAAAACzdJpcF8ekMbkGWC3pGgAAAAAAmKXx5LqcCn/UrQFWS7oGAAAAAADm57lNkofhsXEqHGDlpGsAAAAAAGBmujb9KFeXybVT4QCrJl0DAAAAAAAzM95YNybXAJuwr/0CAAAAAAAAI12bjMZ3x2TnK9cA62d1DQAAAAAAzMl4Y11OhevWABsgXQMAAAAAALPx3CbJw/DoVDjAZkjXAAAAAADAPHRt+lGuLpPrJ5NrgE2QrgEAAAAAgHkYb6wbk2uAbdnXfgEAAAAAAICka5PR5u6Y7HzlGmBDrK4BAAAAAIB5OG2sy6lw3RpgS6RrAAAAAACgtkP7eiG8cCocYHukawAAAAAAoKqufT0PXtJ1mVw/mVwDbIt0DQAAAAAAVFU21v3ws8k1wCbta78AAAAAAACwYV2bDFO7ErB3vnINsEVW1wAAAAAAQD3jjXVJ17o1wCZJ1wAAAAAAQCXPbZI8DI9NvTcBoDbpGgAAAAAAqKFr049W18ckyZPJNcBGSdcAAAAAAEAN41PhzfQRgO3Z134BAAAAAABge7o2GS3sjsnOV64BNs3qGgAAAAAAuLvxxrqcCtetAbZNugYAAAAAAO7ruU2Sh+HRqXAApGsAAAAAAOCuujb9KFeXyfWTyTXA1knXAAAAAADAHY031o3JNQCv9rVfAAAAAAAA2IxDm+NoWFd+9pVrAKyuAQAAAACAOymnwsfdOro1AK+kawAAAAAA4C6aIVefHp0KB2AgXQMAAAAAALfXtUmyS/pRw34yuQbglXQNAAAAAADc3puN9c7kGoAJ6RoAAAAAALixwzC5Lo5JY3INwIR0DQAAAAAA3FLX5jjt1kkedWsAJqRrAAAAAADglsqp8H76CABT0jUAAAAAAHAz3ehUeInWToUD8B7pGgAAAAAAuKXTxvolSfJLtwbgHdI1AAAAAABwG4c2TdIMj06FA/Ax6RoAAAAAALiBrs0x2Q3p+pjEqXAAPiRdAwAAAAAAN1A21v3ws8k1AL+1r/0CAAAAAADA6nRtMhrQlfn1o8k1AB+yugYAAAAAAK6qaycb63IqXLcG4LekawAAAAAA4KpKt36YPgLAb0nXAAAAAADA9ZxOhfdJM0yun0yuAfiEdA0AAAAAAFzPm431zuQagItI1wAAAAAAwJUchsl1cUwak2sALiJdAwAAAAAA19C1OU67dZJH3RqAi0jXAAAAAADANZRT4f3wc+NUOABfsK/9AgAAAAAAwPJ1o1PhJWDvTK4B+AKrawAAAAAA4Ge6drKxLulatwbgK6RrAAAAAADgZ0q3fhg9AsAXSdcAAAAAAMAPnE6Fl9X1MUnyZHINwNdI1wAAAAAAwA+MT4U300cAuNi+9gsAAAAAAACLdWhzHA3lys++cg3A11ldAwAAAAAA39Kddevo1gB8k3QNAAAAAAB8S7kN3g8/OxUOwA84GA4AAAAAAHzd+FR4CdhOhQPwA1bXAAAAAADAF3Xta6suSrrWrQH4AekaAAAAAAD4omb4svXpEQB+RroGAAAAAAC+omuTZJf0o4b9ZHINwI9I1wAAAAAAwBf1ww8vSTN6BIDv2td+AQAAAAAAYDme20moLt3a5BqAH7O6BgAAAAAALtO1r0fCy8etnQoH4HqkawAAAAAA4DLj2+CNU+EAXJOD4QAAAAAAwAUObY6jTVz5+dHkGoDrsLoGAAAAAAA+05116+jWAFyTdA0AAAAAAHym3Abvp48AcD0OhgMAAAAAAL/VtcmwhivFukn+aXINwDVZXQMAAAAAAB/r2snGumyvf+nWAFyZdA0AAAAAAHysdOuH0SMA3IB0DQAAAAAAfOB0KrxPmuSYJHkyuQbg+qRrAAAAAADgY6dT4S+ZXA4HgKva134BAAAAAABglp7bSagu3drkGoDbsLoGAAAAAADOdO3rkfDycWunwgG4MekaAAAAAAA4M74N3jgVDsDNORgOAAAAAABMHdocR/O38vOjyTUAN2R1DQAAAAAAjHRn3Tq6NQA3J10DAAAAAAAj5TZ4P/zsVDgAd+FgOAAAAAAAMHAqHIBKrK4BAAAAAIAkToUDUJN0DQAAAAAAJJmeCo9T4QDclXQNAAAAAAAkhzYZukEJ2E3yZHINwJ1I1wAAAAAAsHldm34UDUq6/qVbA3A/0jUAAAAAAGxeM3zZ+vQIAPclXQMAAAAAwLZ1w6nwftSwnQoH4L6kawAAAAAA2LCuTZP0w+NLJo8AcC/SNQAAAAAAbFgJ1Q/TR5NrAO5OugYAAAAAgK1yKhyA2ZCuAQAAAABgw8a3wXdOhQNQjXQNAAAAAACb9NymSZrh8Zg0JtcAVCNdAwAAAADA9nTt65Hwkq7LqfBH3RqAaqRrAAAAAADYpNNt8BKwnQoHoKp97RcAAAAAAADu67mdhOpjsjO5BqAy6RoAAAAAAFata1+vgpdpdfnPm09c69YA1CZdAwAAAADASp2idZ88DMV6nK6dCgdgNqRrAAAAAABYo65Nkj7ZTfv0bvQ7vVPhAMzF7vNfAQAAAAAAFqcZ/fmRPnm5x7sAwKesrgEAAAAAYHXK5PrT/Vr/WdsGgHuxugYAAAAAgNW58AvWKgEAs+H/KAEAAAAAwBpdWACsrgGYB+kaAAAAAABWR5AGYGmkawAAAAAAAAAqk64BAAAAAGB1esNrABZGugYAAAAAgDV6uezX+tu+BQBcSLoGAAAAAIDVuXB1fbz5iwDAhaRrAAAAAABYnac/k88W1aVbW10DMA/SNQAAAAAArFT/zk+vTnvrErkBoLZ97RcAAAAAAACu7dDmONqv9dN43SRN0uvWAMyIdA0AAAAAAOvSDd265Opj3n74WrQGYH6kawAAAAAAWJdmNLM2sAZgIaRrAAAAAABYkTenwsvPj7o1AHO3+/xXAAAAAACARejOunV0awCWQboGAAAAAIC1ePdUOAAsgYPhAAAAAACwCs9teqfCAVgqq2sAAAAAAFi+rk2fNMOjU+EALI10DQAAAAAAq3C6De5UOAAL5GA4AAAAAAAsXDkVfuJUOAALZHUNAAAAAABLdjoVXq6FOxUOwDJJ1wAAAAAAsHBOhQOwfA6GAwAAAADAYjkVDsBaWF0DAAAAAMAyORUOwIpI1wAAAAAAsFhOhQOwFg6GAwAAAADAAjkVDsC6WF0DAAAAAMDSOBUOwOpI1wAAAAAAsChdO7kN7lQ4AKvgYDgAAAAAACxKCdUPQ652KhyAVbC6BgAAAACA5ejaJNnl9WC4U+EArIV0DQAAAAAAC/HmVPiLU+EArId0DQAAAAAAC3E6FT5+fDK5BmANpGsAAAAAAFiCw3unwnVrANZCugYAAAAAgNnr2hxH/099p8IBWB3pGgAAAAAAZq+E6n76aHINwIpI1wAAAAAAMG+nU+EZAnajWwOwNtI1AAAAAADM2JtT4SVd/9KtAVgb6RoAAAAAAGbs/FQ4AKyRdA0AAAAAAHM1PhUep8IBWDPpGgAAAAAAZunNqfBjEqfCAVgt6RoAAAAAAObqdCq8GS6HA8BK7Wu/AAAAAAAAcOa5nYTqMr9+NLkGYLWsrgEAAAAAYGa69vWz1k2S4VS4bg3AqknXAAAAAAAwJ107uQ3uVDgA2+BgOAAAAAAAzEkJ1Q9DrnYqHIBtsLoGAAAAAIDZOLRJssvrwXCnwgHYDOkaAAAAAADmoWtfN9bFi1PhAGyIdA0AAAAAAPNQQnU/fXwyuQZgE6RrAAAAAACYgdOp8CT9cCpctwZgM6RrAAAAAACo7c2p8H70JwBsg3QNAAAAAAAz8OZUeEyuAdiWfe0XAAAAAACAbXtuJwPrPmmSf+rWAGyL1TUAAAAAANTTta+tuiytyyeuf+nWAGyOdA0AAAAAAJV0bZrpnfDGJ64B2CgHwwEAAAAAoJISqh+GXH1MdsmjyTUAW2R1DQAAAAAANRzaJNmNunV0awC2S7oGAAAAAIC769rXjXVRurVT4QBsmHQNAAAAAAB3V06Fj79yneTJ5BqA7ZKuAQAAAADgvk6nwpP0w+RatwZg26RrAAAAAAC4ozenwvvRnwCwYdI1AAAAAADc1+lUeONUOAC82td+AQAAAAAA2IzndjKwLvPrR90aAKyuAQAAAADgPro2/WhpXT5xrVsDQBLpGgAAAAAA7qFr04y+aV0Ctk9cA8DAwXAAAAAAALi9EqofhlztVDgATFldAwAAAADAjR3aJNnl9WC4U+EAcEa6BgAAAACAW+ra14118eJUOAC8Q7oGAAAAAIBbKqG6nz4+mVwDwIRvXQMAAAAAwM08t+mHHVmp103yT90aAN6yugYAAAAAgNvo2tePWxdle/1LtwaAd0jXAAAAAABwA107+aZ1M2rYAMAZB8MBAAAAAOAGSrd+GOr1MdkljybXAPA+q2sAAAAAALi2Q5sku7weDD8m0a0B4HekawAAAAAA/p+9e8ttHNm2KLqodLvs4ybdlkSTCKlfSd4PKliUH2nZlsTXGCgQIaUL4Lcmdmxuqi3nGevB31zcHA4AfES6BgAAAACAW+svt1z3yauRawD4F7uuAQAAAADgdo7lv2g9HJrkf7o1AHxBugYAAAAAgBtpy3m59WBI17o1AFzBheEAAAAAAHALbbnYad1MGjYA8OFsG0QAACAASURBVBVT1wAAAAAAcAtDt/5T63WXHJJnI9cAcBVT1wAAAAAA8GunkiSHnC8M75Lo1gDwDdI1AAAAAAD8TlvOM9aDv7m4ORwAuIJ0DQAAAAAAv9Zfbrnuk1cj1wDwDXZdAwAAAADALxzLxYD1cGH4/3RrAPgeU9cAAAAAAPBTbTm36iZJXXH9olsDwLdJ1wAAAAAA8CNtSS7vCbfiGgB+yoXhAAAAAADwI0OoHmfEuuSQPBu5BoCfMHUNAAAAAADfdypJ/ZW9r1eF69YA8FPSNQAAAAAAfFNbzjPWg37yBAB+RLoGAAAAAIDvaMv5qvChVQ8rrpO8GrkGgJ+z6xoAAAAAAL5j6NZ/arq24hoAbsHUNQAAAAAAXG1ccd0njRXXAHAz0jUAAAAAAFznzYrrv3UCGwD4NekaAAAAAACu1k9a9dCtrbgGgFuw6xoAAAAAAK5wLBcD1sOF4f/TrQHgNkxdAwAAAADAV4YV103SJKkrrl90awC4GekaAAAAAAD+aVhx3dSPjRXXAHB7LgwHAAAAAIB/ai5XXPfJIXk2cg0At2TqGgAAAAAAPncsSf01fQzYujUA3Jp0DQAAAAAAn2hL+slV4UO6tuIaAO5AugYAAAAAgI+0JZncE95MGjYAcGt2XQMAAAAAwEeautZ60FlxDQB3ZOoaAAAAAADeOV2uuO6S6NYAcEfSNQAAAAAAXGrLecZ60E+eAMB9SNcAAAAAADDRlvNV4UOrHldcvxq5BoA7susaAAAAAAAmhm79p6ZrK64B4CFMXQMAAAAAQDWuuO6TxoprAHgc6RoAAAAAAJK8W3H9t05gAwD3J10DAAAAAMAnK657K64B4EHsugYAAAAAACuuAWBmpq4BAAAAANi96YrrWHENADOQrgEAAAAA2Lc3K66Hbm3FNQA8lnQNAAAAAMCOtSWZrLhO0iSx4hoAHk26BgAAAABgx5rJM0mfNLo1AMxAugYAAAAAYK/GFddDuh6uCn/RrQFgBtI1AAAAAAC7ZMU1ACyJdA0AAAAAwP5YcQ0ACyNdAwAAAACwP1ZcA8DCSNcAAAAAAOyMFdcAsDzSNQAAAAAAe2LFNQAsknQNAAAAAMBuWHENAEslXQMAAAAAsBtWXAPAUknXAAAAAADsgxXXALBg0jUAAAAAADtgxTUALJt0DQAAAADA1rUljRXXALBo0jUAAAAAAFs3dOs/9aMV1wCwPNI1AAAAAACbNq64Hoq1FdcAsEjSNQAAAAAA2/VmxfXfOoENACyMdA0AAAAAwEa9WXHd1G7tqnAAWJ6nuV8AAAAAAADuY1xxPaTrYfz6WbcGgCUydQ0AAAAAwBYdP1pxrVsDwFJJ1wAAAAAAbE5bzsV6YMU1ACyedA0AAAAAwLa0JZmEaiuuAWAN7LoGAAAAAGBbhlA9jm5ZcQ0Aa2DqGgAAAACADRlXXCfprbgGgNWQrgEAAAAA2IpTSSYrrvvJEwBYNukaAAAAAIBNaEu6Sbdu6tmKawBYA7uuAQAAAADYin4yY91bcQ0AayJdAwAAAACwfsdyEa2TNLo1AKyJC8MBAAAAAFi5ccX1cEP4MHv9olsDwJpI1wAAAAAArNlnK64BgFVxYTgAAAAAAKvVlsSKawDYAlPXAAAAAACsVjN5pgZs3RoAVki6BgAAAABgnYYV14earrskVlwDwFpJ1wAAAAAArNCw4nr8kXvo1v2nfw4ALJx0DQAAAADA2rxZcd3UwetXI9cAsFZPc78AAAAAAAB8U5P0lyPXByuuAWDdTF0DAAAAALAqx7riOklfrwrXrQFg5aRrAAAAAADW41SSej146oXhVlwDwPpJ1wAAAAAArERb0k26tRXXALAhdl0DAAAAALAGbUmSfjJj3VtxDQDbYeoaAAAAAIA1aCbPMWDr1gCwFdI1AAAAAACLN6y4Plym6xfdGgC2Q7oGAAAAAGDZhhXX4+/Z3ZzvAgDciXQNAAAAAMCCvVlx3dTB61cj1wCwKU9zvwAAAAAAAHxlOnJ9sOIaADZIugYAAAAAYKmO5TxsnTp43ejWALBNLgwHAAAAAGCRTiWZ3BDeT54AwOZI1wAAAAAALE9b0tVoHSuuAWD7XBgOAAAAAMDCtCVNvSF80FtxDQAbZ+oaAAAAAICFGbr1n/pxCNi6NQBsmnQNAAAAAMCSHEuSHJI+aZIuSfKiWwPAxknXAAAAAAAsxqkkkxXXf+sENgCwddI1AAAAAADL0JZ0k27d1G79auQaALbvae4XAAAAAACApC1J0k9mrPvkYMU1AOyFqWsAAAAAABagmTzHgK1bA8BuSNcAAAAAAMxtWHF9uEzXL7o1AOyIdA0AAAAAwKyGFdfjz9XdnO8CAMxFugYAAAAAYD5vVlw3dfD61cg1AOzL09wvAAAAAADAXg3dOpcj1wcrrgFgj0xdAwAAAAAwk2by7OtV4bo1AOySdA0AAAAAwBxOJUkOk3Q9PgGA/ZGuAQAAAAB4uLac7wYfdPVgxTUA7JV0DQAAAADAYw0rrvs6Y93UwWvdGgB27GnuFwAAAAAAYJemI9cHK64BYO+kawAAAAAAHuhY/ltoPQxeN7o1AODCcAAAAAAAHuZUkskN4f3kCQDsm3QNAAAAAMBDtCVdjdax4hoAuODCcAAAAAAA7q8tSb0hfNBbcQ0A/MfUNQAAAAAAjzL+Jj0EbN0aAKhMXQMAAAAAcGfHcjFs3SdN8qJbAwD/MXUNAAAAAMA9nUoy2WzdT54AAJV0DQAAAADA3bQlXY3WSbp6eDVyDQBckK4BAAAAALiPtiT1hvBMBq91awDgHbuuAQAAAAC4g6FbZzJC1SWH5Fm3BgA+IF0DAAAAAPBrp/J2fXXfp2/+22/dJ41uDQB8SroGAAAAAOAXhunqYaJ6rNdNkiZNf74ifPi+/+h/BwBIYtc1AAAAAAC30b8/N0nSWXENAHxNugYAAAAA4KeOJU3O/33mz+NeBwBYLxeGAwAAAADwC/+I1oNx0TUAwOdMXQMAAAAA8AvXNGmD1wDAV6RrAAAAAAB+of/6T0xdAwBfkq4BAAAAAAAAmJl0DQAAAADAT10zcg0AcAXpGgAAAACAn2quq9duCwcAviJdAwAAAADwC1/+zNzYdQ0AfE26BgAAAADgF76cuv6b9Mnz/z3iZQCA1ZKuAQAAAAD4kVP5+m+6JFZiAwBfk64BAAAAAPi+tqSbXAPe1Eqdj755NXINAHxBugYAAAAA4JvakiR9Hacet1lPp6vHsK1bAwBXeJr7BQAAAAAAWJW23hM+zkZ1ySF5kagBgJ8zdQ0AAAAAwHc0k2dfbwV/1q0BgF+RrgEAAAAAuNqxJMlhkq5zeU84AMCPSNcAAAAAAFznVJIarVPnrWObNQBwA9I1AAAAAABXaEu6Sbdu6lm3BgBu4WnuFwAAAAAAYPHakiT95G7wPjlYcQ0A3IypawAAAAAA/mno1pn8ojwEbN0aALgd6RoAAAAAgH9qJs++rrh+0a0BgFuSrgEAAAAA+NyxJMlhkq4zuTYcAOBGpGsAAAAAAD5xKkmN1qnz1klejVwDADcmXQMAAAAA8JG2pJt066aedWsA4A6e5n4BAAAAAACWpy1J0k/uBu+TQ/KsWwMAd2HqGgAAAACAS0O3zuQn5CFg69YAwN1I1wAAAAAAXGomz76uuH7RrQGAO5KuAQAAAACYOJYkOUzSdSbXhgMA3Id0DQAAAABAdSpJjdap89ZJXo1cAwD3JV0DAAAAAJAkaUu6Sbdu6lm3BgDu72nuFwAAAAAAYAHakiT95G7wPjkkz7o1APAIpq4BAAAAAHZv6NaZ/GY8BGzdGgB4FOkaAAAAAGD3msmzryuuX3RrAOBxpGsAAAAAgH07liQ5TNJ1JteGAwA8hHQNAAAAALBjp5LUaJ06b53k1cg1APBQ0jUAAAAAwF61Jd2kWzf1rFsDAA/3NPcLAAAAAAAwh7YkST+5G7xPDsmzbg0AzMDUNQAAAADA/gzdOpMfiYeArVsDADORrgEAAAAA9qeZPPu64vpFtwYAZiNdAwAAAADszLEkyWGSrjO5NhwAYA7SNQAAAADAnpxKUqN16rx1klcj1wDAnKRrAAAAAIDdOJX0k27d1LNuDQDM7WnuFwAAAAAA4CHaki451LvBm6RPDsmzbg0AzM/UNQAAAADADrQlSfrJTuth/Fq3BgCWQboGAAAAANi6oVun/iQ8BmzdGgBYDOkaAAAAAGDrmsmzr/+96NYAwIJI1wAAAAAAm3YsSXKYpGsAgOWRrgEAAAAAtutUkhqtk3T18GrkGgBYFukaAAAAAGCj2pJu0q2betatAYDleZr7BQAAAAAAuIO2JHWt9aBPDsmzbg0ALJGpawAAAACAzWnLecB6/A14CNi6NQCwVNI1AAAAAMC2jPPWf3I+DCuuX3RrAGC5pGsAAAAAgG1p6rOvz0yuDQcAWCTpGgAAAABgQ44lSQ41YP+th1cj1wDAoknXAAAAAABbcSpJbdWp94T3ujUAsALSNQAAAADAJrQl3aRbN+atAYA1eZr7BQAAAAAA+LW2JEk/2WndJ4fkWbcGANbB1DUAAAAAwMq15Txg/eYXX90aAFgP6RoAAAAAYM3Gees/OR+GwesX3RoAWBPpGgAAAABgzZr67Cf/6dYAwNpI1wAAAAAAq3UsSXKoAbv/5x8DACyYdA0AAAAAsE6nktRonaSrh1cj1wDA+kjXAAAAAAArdCrpJ926qWfdGgBYp6e5XwAAAAAAgG9qS7rkUG8IHxZdH5Jn3RoAWCtT1wAAAAAAq9KWJOknm62H8WvdGgBYM+kaAAAAAGA9hm6dyY+7Q8DWrQGAlZOuAQAAAADWZlhr3SddkuRFtwYAVs+uawAAAACAlTiW/5Zbp85b95/+OQDAikjXAAAAAABrcCxJjdap89ZJXo1cAwBb4MJwAAAAAIDFO5WLj7o1ALA50jUAAAAAwLKdSvrJvHVTz7o1ALAhLgwHAAAAAFiwtqRLDpOd1n1ySJ51awBgU0xdAwAAAAAsVVuSpJ9064FuDQBsjnQNAAAAALBIbd1vPf6OOwTsF90aANgg6RoAAAAAYMGGtdZ90iXRrQGAzbLrGgAAAABgeY7lPGM9puu8uzYcAGBDpGsAAAAAgIU5lqRG69R56ySvRq4BgM1yYTgAAAAAwJKcysVH3RoA2AfpGgAAAABgMU4l/WTeuqln3RoA2DoXhgMAAAAALENb0iWH/Lfluk8OybNuDQBsn6lrAAAAAIAFaEuS9LVbD+dGtwYA9kK6BgAAAACYW1vOF4OPP9kOAVu3BgB2Q7oGAAAAAJjVOG/9J+dDlyR50a0BgB2RrgEAAAAAZtXUZz+5MLz/1/8BALA90jUAAAAAwHyOJUkONWCPxfrVyDUAsC/SNQAAAADATIZu3dSPXT3o1gDA/kjXAAAAAABzOJWLj01t2Lo1ALBLT3O/AAAAAADA/pxK+rrfOvVwSJ51awBgp0xdAwAAAAA8VlvSTbp1cs7YujUAsGPSNQAAAADAA7UlSfpJtx7o1gDAvknXAAAAAACP0tb91uNPs0PAftGtAYC9k64BAAAAAB7iTbfuky6Jbg0AkEjXAAAAAACPMHbrJsnkwvD+k78HANgZ6RoAAAAA4P6a+hzT9eDVyDUAQCJdAwAAAADc3bEkyaF2665+r1sDAFTSNQAAAADAPQ3duqkfdWsAgI9I1wAAAAAAd3MqFx/HC8N1awCAS09zvwAAAAAAwEadSvqkqZuth8MhedatAQDeMnUNAAAAAHAHbUk36dbJOWPr1gAAH5GuAQAAAABurS1J0k+69UC3BgD4hHQNAAAAAHBTbd1vPf7+OgTsF90aAOBT0jUAAAAAwO286dZ90iXRrQEAviBdAwAAAADcyNitmySTC8P7T/4eAIBKugYAAAAAuJGmPsd0PXg1cg0A8AXpGgAAAADgFo4lSQ61W3f1e90aAOAK0jUAAAAAwK8N3bqpH3VrAIBvkq4BAAAAAH7nVC4+jheG69YAAFd7mvsFAAAAAADW7FTSJ03dbD0cDsmzbg0A8A2mrgEAAAAAfurDbt3o1gAA3yZdAwAAAAD8SFvSTbp1dGsAgJ+TrgEAAAAAvq8tSdJPuvVAtwYA+BHpGgAAAADgm4ZunckvrEPAftGtAQB+SLoGAAAAAPiON926T7okujUAwK9I1wAAAAAAVxu7dZNkcmF4/8nfAwBwHekaAAAAAOA60249/DcW61cj1wAAvyJdAwAAAABcp6nP4fC3HnRrAIBfk64BAAAAAK5wLElyqLl62G/d69YAALchXQMAAAAAfGXo1k392NWDbg0AcCPSNQAAAADAP53KxcfGPeEAALf3NPcLAAAAAAAs2KmkT5qkT1IPh+RZtwYAuCVT1wAAAAAAn/iwWze6NQDA7UnXAAAAAAAfedOto1sDANyRdA0AAAAA8E5b0l1264FuDQBwH9I1AAAAAMCltiRJ/65bv+jWAAD3Il0DAAAAAEwM3TqTX0+HgK1bAwDck3QNAAAAAFC1JU2S+tNpn3RJdGsAgLuTrgEAAAAAkkzuCf+T86GvBwAA7ky6BgAAAACY3BPe1Gg9FutXI9cAAHcnXQMAAAAAuzft1sOF4bo1AMBjSdcAAAAAwO419Tkcuvq9bg0A8CjSNQAAAACwb8eSJAfdGgBgTtI1AAAAALBjQ7du6kfdGgBgJtI1AAAAALBXx3LxcbwwXLcGAHi4p7lfAAAAAABgDqeSfvKxSfrkkDzr1gAAMzB1DQAAAADsz9Ctx3vCh27d6NYAALORrgEAAACAnRm79TB1rVsDACyAdA0AAAAA7Mmbbh3dGgBgEaRrAAAAAGA33nfrgW4NADA36RoAAAAA2Ie2pPuoW7/o1gAA85OuAQAAAIAdaEuS9Lo1AMBCSdcAAAAAwNYN3TqTH0SHgK1bAwAshnQNAAAAAGzam27dJ10S3RoAYFmkawAAAABgu953674eAABYEukaAAAAANioz7p1klcj1wAAyyJdAwAAAABbNHbrJoluDQCwdNI1AAAAALA50249puuBbg0AsEhPc78AAAAAAMBPteVcppvL74cZ67Fbd/V73RoAYKlMXQMAAAAA6zSMVk8Tderh0OjWAADrIl0DAAAAACs0Xgk+/MY53gc+HPpetwYAWBfpGgAAAABYofN09Vd/NPyZbg0AsHjSNQAAAACwNsPI9de/bvZf/gUAAAshXQMAAAAAK3RllRavAQBWQroGAAAAAAAAYGbSNQAAAAAAAAAzk64BAAAAAAAAmJl0DQAAAAAAAMDMpGsAAAAAYIWa/ro/u/NrAABwI9I1AAAAALA2f5Im6f9Zr/ukS5K8/t9D3gkAgF95mvsFAAAAAAC+41TSJ81X89T95AkAwOKZugYAAAAA1uPcrSdNepyuHnU5/02MXAMArIapawAAAABgJd5360EzadXjH4jWAACrIl0DAAAAAGvwWbf+n0QNALAFLgwHAAAAABavLek+6tYvujUAwEZI1wAAAADAsrUlSXrdGgBgy6RrAAAAAGDBhm6dd79l6tYAANsiXQMAAAAAS/W+Ww+D17o1AMDmSNcAAAAAwCK96dZ90iXRrQEAtkm6BgAAAACW53237usBAIAtkq4BAAAAgIX5rFsneTVyDQCwTdI1AAAAALAkujUAwC5J1wAAAADAYujWAAB7JV0DAAAAAMugWwMA7Jh0DQAAAAAsgG4NALBv0jUAAAAAMDfdGgBg96RrAAAAAGBWujUAANI1AAAAADAn3RoAgCTSNQAAAAAwm7FbN0l0awCAXZOuAQAAAIA5TLt1o1sDAOyddA0AAAAAPJxuDQDAJekaAAAAAHgs3RoAgHekawAAAADggd506+jWAAAk0jUAAAAA8Djvu3VX/0m3BgDYN+kaAAAAAHgI3RoAgM9J1wAAAADA/enWAAD8k3QNAAAAANyZbg0AwFekawAAAADgnnRrAACuIF0DAAAAAHejWwMAcB3pGgAAAAC4D90aAICrSdcAAAAAwB3o1gAAfId0DQAAAADcmm4NAMA3SdcAAAAAwE3p1gAAfJ90DQAAAADcjm4NAMCPSNcAAAAAwI3o1gAA/JR0DQAAAADcgm4NAMAvSNcAAAAAwK/p1gAA/I50DQAAAAD8TlvOuXro1r1uDQDAt0nXAAAAAMAvDPPWffKnduu+/pNuDQDA1aRrAAAAAOCnxnvCDzVa69YAAPyIdA0AAAAA/Mi0W0e3BgDgV6RrAAAAAOD7dGsAAG5KugYAAAAAvkm3BgDg1qRrAAAAAOA7dGsAAO5AugYAAAAArqZbAwBwH9I1AAAAAHAd3RoAgLuRrgEAAACAK+jWAADck3QNAAAAAHxFtwYA4M6kawAAAADgn3RrAADuT7oGAAAAAD6nWwMA8BDSNQAAAADwiVNJk0S3BgDg7p7mfgEAAAAAYJFOJX1ymORq3RoAgLsxdQ0AAAAAvDN06+ayWw8T2Lo1AAB3YOoaAAAAALj0vlsnaZIX0RoAgHsxdQ0AAAAATHzYraNbAwBwX9I1AAAAAFDp1gAAzES6BgAAAACS6NYAAMxJugYAAAAAkqNuDQDAnKRrAAAAANi9YzkfdGsAAGYiXQMAAADAvo3detDUg24NAMADPc39AgAAAADAfN536+Ha8GfdGgCAhzJ1DQAAAAB7pVsDALAY0jUAAAAA7JJuDQDAkrgwHAAAAAB2pi3/heqBbg0AwNxMXQMAAADAnrQl0a0BAFgc6RoAAAAAdqOtl4SP3bpLOt0aAID5SdcAAAAAsA/Tbj2k6y5J0uvWAADMT7oGAAAAgB34rFsnedWtAQCYn3QNAAAAAFunWwMAsHjSNQAAAABsmm4NAMAaPM39AgAAAADA3Yzdephh6ZO+/pNuDQDAkpi6BgAAAICN0q0BAFgP6RoAAAAAtki3BgBgVaRrAAAAANicUzmvtdatAQBYCbuuAQAAAGBbTiV9cqi5WrcGAGANTF0DAAAAwIYM3bqZ5GrdGgCANZCuAQAAAGArPuzWw83hujUAAMvmwnAAAAAA2ITju26dpEleRGsAAFbA1DUAAAAArN+xnA/95fe6NQAAKyFdAwAAAMDKjd160NSDbg0AwHq4MBwAAAAA1ux9tx6uDX/WrQEAWBPpGgAAAADWqS1JDdUD3RoAgNVyYTgAAAAArFBb3n6jWwMAsGbSNQAAAACszditmzpy3SWdbg0AwIpJ1wAAAACwKh926yS9bg0AwIpJ1wAAAACwHp916ySvujUAACsmXQMAAADASozd+lDTtW4NAMBWSNcAAAAAsAbTbp2kT/7WwWvdGgCA9ZOuAQAAAGDxTuVcqcdu3deDbg0AwCY8zf0CAAAAAMA/nUr65DDJ1X39J90aAICtMHUNAAAAAAs2dOtmkqtHujUAABti6hoAAAAAlur4Ubdukv+J1gAAbI2pawAAAABYpGM5H97MW7/o1gAAbJB0DQAAAADLM3brQVMPujUAABvlwnAAAAAAWJK2JDnfEz5o6sdn3RoAgM0ydQ0AAAAAi9GWt9/o1gAA7IN0DQAAAADLMHbrpo5cd0mnWwMAsAvSNQAAAAAswIfdOkmvWwMAsAt2XQMAAADA3MZuPU6adPXwqlsDALALpq4BAAAAYFanch6zHn6r63VrAAD2yNQ1AAAAAMznVNInh6RPkvT1EN0aAIB9MXUNAAAAADMZunUzydW6NQAAeyVdAwAAAMAcjh916+HmcN0aAID9cWE4AAAAADzcsZwP/eTLJnkRrQEA2CnpGgAAAAAeqC3nSevm3T/p1gAA7JgLwwEAAADgUdqSXHbr8aBbAwCwb6auAQAAAOAh2npJ+LRbDxn7WbcGAGDvTF0DAAAAwP0N94QnaWq67pJOtwYAgDPpGgAAAADubLwn/M+kWw/f6NYAAJBEugYAAACA+zrVeetD0id97dZJXnVrAAA4s+saAAAAAO7mVNLXaJ2arge6NQAATJi6BgAAAID7GLp1M8nVujUAAHxCugYAAACAOzh+1K2Hm8N1awAAeMeF4QAAAABwa8dyPvSTL5vkRbQGAICPSdcAAAAAcDttSSYD1pkMXuvWAADwOekaAAAAAG6kLW+/aWrGftatAQDgX+y6BgAAAIBbaMt50rqpI9dd0unWAABwFekaAAAAAH5tvCf8z6RbD9/o1gAAcAXpGgAAAAB+51TnrQ9Jn/S1Wyd51a0BAOAqdl0DAAAAwC+cSvoarVPT9UC3BgCAq5m6BgAAAICfOpb0STPJ1bo1AAD8iHQNAAAAAD9yLOfDtFsPN4fr1gAA8E0uDAcAAACAb2rLedK6ufy+SV5EawAA+AlT1wAAAADwHW1JLrv1eNCtAQDgp6RrAAAAALjaMG+dy27dm7cGAIDfkq4BAAAA4DrjvPWfmq67pEua5Fm3BgCAX5GuAQAAAOAKpzpvfUj6pE+6JEmvWwMAwA08zf0CAAAAALB4p5K+RuvUdD141a0BAOAGTF0DAAAAwD8dy3mb9ZirdWsAALg1U9cAAAAA8Im2nIv1m249fNStAQDgdqRrAAAAAPhIW5Kc7wkfjBn7RbQGAIAbk64BAAAA4J2hWydp8t9h6NbPujUAANyeXdcAAAAAcGnarYd03SWdbg0AAHckXQMAAADAxKmcc/Vh0q2T9Lo1AADckQvDAQAAAKA6lfNy6z5J0tdDklfdGgAA7sjUNQAAAAAkSY7lvM16zNW6NQAAPIqpawAAAAB2ry3nYv2mWw8fdWsAALg/6RoAAACAfWtLkvM94VNN8iJaAwDAg0jXAAAAAOzAMFednJ/95NBPvs9k8Fq3BgCAB7LrGgAAAICtO07uAx+8/zicu6Qzbw0AADMwdQ0AAADAph1LMonTo7Fej9PYf5MkffKsWwMAwKOZugYAAABgu9pyvv373/rkb23Yr7o1AADMQLoGAAAAYLvGxdVf6JM+vW4NAACzj16ldwAAIABJREFUka4BAAAA2LQ/1/xRk0a3BgCAOUnXAAAAAGzXlVPXTd6twgYAAB5KugYAAAAA5RoAAGYmXQMAAAAAAAAwM+kaAAAAgE27cpz6mnvFAQCAu5GuAQAAANi0a5p0d/e3AAAA/u1p7hcAAAAAgDtoS5qkv27qujF1DQAAMzN1DQAAAMDmtCV5163/0bCb5PX/7vxOAADAv0jXAAAAAGzL0K0zadXD4X3J7uqw9YtuDQAAM5OuAQAAANiQUzn36UMN1V3SJc27W8G7+o1uDQAAC2DXNQAAAABbcSrpk0NN1P3k8KxPAwDAopm6BgAAAGATjuV8Jfg4Wj0e7LEGAIDFM3UNAAAAwMq15Vys33Tr4aNuDQAAayBdAwAAALBmbUlyvid8MGZsS6wBAGA9pGsAAAAAVmvo1kma/HcYurXl1gAAsCp2XQMAAACwTqdyLtaHmq67pNOtAQBglUxdAwAAALBCx3K+JHxYbt1PDro1AACskHQNAAAAwKq05b9bwfv65Xh41a0BAGCVXBgOAAAAwHoMy637yXLr6UfdGgAAVsvUNQAAAAArMXTrTLr1OH79IloDAMC6mboGAAAAYA1O5VysDzVdd0mnWwMAwEaYugYAAABg8U4lfXKoO637yeFZtwYAgC0wdQ0AAADAsh3L+Vbwvn4zHiy3BgCArTB1DQAAAMBSDcut33fr4aNuDQAAGyJdAwAAALBIbbko1qnF2nJrAADYIheGAwAA/8/enWW1rmXdGh0yf7lIinQqclUkAtfL0n0QSyzjBLNxoqT3doJmZO8Tft3xxZwTAKZnW7r1U9Ik0a0BAGDhpGsAAAAAJmbbpk82yabk6i7pkiZ51q0BAGCZLAwHAAAAYEo+2r3j1n2J1r1uDQAASyZdAwAAADAN722SvW496pM33RoAAJZMugYAAABgAt7b78V6PG79KloDAMDyuXUNAAAAwKNtS7d+SpokVbd+0a0BAGAVpGsAAAAAHmrbpk82yabk6q7ct3bcGgAAVsPCcAAAAAAe56PdO27dl2jd69YAALAu0jUAAAAAj/DeJtnr1qM+edOtAQBgXaRrAAAAAO5u6Na18bj1q2gNAABr5NY1AAAAAPe1bdMkSTb5fDEet37RrQEAYKVMXQMAAABwR8Nx60113Hp84bg1AACsmHQNAAAAwF28t19bwcfj1uMLx60BAGDdLAwHAAAA4PaG49Z92RA+GH/VrQEAYPVMXQMAAABwY0O3TtWtx/Frx60BAIAkpq4BAAAAuK1t+1msNyVdd0mnWwMAAHtMXQMAAABwMx9t+mRTblr31Ytn3RoAAPgiXQMAAABwA/Vx6748HF84bg0AAOyzMBwAAACAaxuPW4/G49bRrQEAgCNMXQMAAABwVds2XT73hA+a8qsl4QAAwAnSNQAAAADXc/S4daNbAwAAP5CuAQAAALiG9/ZrK/i349a9bg0AAPzArWsAAAAA/mw4bj1esx44bg0AAFzM1DUAAAAAfzMetx679Th+/SJaAwAAF5GuAQAAAPiDb8etm2TnuDUAAPBr0jUAAAAA/+TwuHWfdOVX3RoAAPgNt64BAAAA+L2jx60HvePWAADAr5m6BgAAAOCXzhy3fhWtAQCAfyFdAwAAAPAb345bpywJd9waAAD4A+kaAAAAgMscPW49vtCtAQCAP3DrGgAAAIALnDluHcetAQCAvzJ1DQAAAMBPHLcGAABuTLoGAAAA4CzHrQEAgNuTrgEAAAA4wXFrAADgXty6BgAAAOAYx60BAIA7MnUNAAAAwAHHrQEAgPuSrgEAAADY57g1AABwd9I1AAAAAIXj1gAAwIO4dQ0AAABAkv1ufchxawAA4JZMXQMAAABQHbd+KmPWjlsDAAB3JF0DAAAArF593HrI1TvHrQEAgLuSrgEAAABW7PC4dUq3dtwaAAC4I7euAQAAANbqvU0OjluPGdtxawAA4I5MXQMAAACs0njcehxtGMevX0RrAADg3qRrAAAAgJUZloR35bh1qhPXjlsDAAAPYmE4AAAAwJrUS8LH49ZjwNatAQCAB5GuAQAAAFZj236etR6PWzfVrWvHrQEAgMexMBwAAABgHT7az8vW47B1Z0k4AAAwFdI1AAAAwNINx63rJeG9JeEAAMC0WBgOAAAAsGh1tz5kSTgAADANpq4BAAAAlmvbpkv65KmMWY8Z+1W0BgAAJkS6BgAAAFiiYdi6K8eth1y9c9waAACYKAvDAQAAABbnvU32j1undGvHrQEAgEmSrgEAAACWZdt+nrWuj1uPGdtxawAAYJIsDAcAAABYkI82fVkSPuiSJmmSF9EaAACYLukaAAAAYBGG49b1kvC+evGqWwMAAJNmYTgAAADA/NXHrQ9ZEg4AAEyeqWsAAACAmdu26fK5J3wwjl8btgYAAGZCugYAAACYrWFJeFcdt+5LtN4kz7o1AAAwGxaGAwAAAMxTvSS8Lw/HgK1bAwAAsyJdAwAAAMzQtv08az0et26qW9eOWwMAAHNjYTgAAADArBwuCU/SWRIOAADMm6lrAAAAgPk4uiS8y+dD3RoAAJgt6RoAAABgJg6XhMeScAAAYCEsDAcAAACYg482/bEl4U3yIloDAACzJ10DAAAATNvhkvC+evGqWwMAAEtgYTgAAADAhI1Lwo+yJBwAAFgKU9cAAAAAU3W4JLwp49eGrQEAgGWRrgEAAACm5739qtT1kvAm2STPujUAALA0FoYDAAAATEx93PqbXrcGAACWydQ1AAAAwJQMS8L7auLAknAAAGAFpGsAAACAaaiXhA/z1paEAwAAq2FhOAAAAMAEHF0SPl651q0BAIClk64BAAAAHu2j/SzWh0vCk7zp1gAAwPJZGA4AAADwOJaEAwAAJDF1DQAAAPAwloQDAAAU0jUAAADAI1gSDgAAULEwHAAAAOC+LAkHAAA4YOoaAAAA4I4sCQcAADhGugYAAAC4F0vCAQAATrAwHAAAAOD26mFrS8IBAAAOmLoGAAAAuLFtu7cefGBJOAAAQEW6BgAAALiljzZ9skk2Zd7aknAAAIADFoYDAAAA3Ea9JHycsbYkHAAA4BhT1wAAAAA3cHRJ+MCScAAAgAOmrgEAAACu6r1Nk3TJpgxbp1oS/ipaAwAAHGHqGgAAAOB6DpeEJ+mSLmmSF90aAADgOOkaAAAA4ErGJeH1qvAxY1sSDgAAcJqF4QAAAAB/dnRJ+DBpbdgaAADgAqauAQAAAP5m6NaHS8KT9Lo1AADARaRrAAAAgD/4KN36qTwZM3aSN90aAADgIhaGAwAAAPyTeth6fLFLmmTjsjUAAMDvmLoGAAAA+L1tuzddPdiVhq1bAwAA/JJ0DQAAAPBLH236ZFP9Lyv1rWtLwgEAAH7PwnAAAACAi723SVWph9e9JeEAAAB/ZeoaAAAA4DLDkvCjLAkHAAD4G1PXAAAAAD95b9MkXbIpw9aploS/itYAAAB/ZeoaAAAA4KyhW9dLwpN0SZc0yYtuDQAAcAXSNQAAAMBpH6VbP1UPx4xtSTgAAMCVWBgOAAAAcEw9bD2+2JVfDVsDAABclalrAAAAgAPbqluPdqVh69YAAADXZuoaAAAAWJlt+3WyOuV8dZ+8/ZeUYesu2VSXrZty2Xr8GAAAAFclXQMAAACr8d4mp7P0/9qvI9abKmkPDzcuWwMAANyQheEAAADAOgzdetDvv7UZr1n36ZOngz/b69YAAAC3ZeoaAAAAWIdxnPrMB5p8nbjelV9fRWsAAICbM3UNAAAArMAwcn3+fwhpPv+TlG7dJy+6NQAAwD1I1wAAAMAKNAdLws9/cvj5plsDAADciYXhAAAAwDo8XVavd5aEAwAAPICpawAAAGAFLp+6zm8+CQAAwJVI1wAAAMAK9F9nrAEAAJgg6RoAAABYh92jvwAAAACnSdcAAADAClw+dW04GwAA4BGkawAAAGDp3tvPW9c/ZukuSfL2382/EgAAAPukawAAAGDRPkq3fkr60x9rSrc+8xkAAABu5v8e/QUAAAAAbuO9Tcqw9Th1PVy83uwPYQ/Ph88YuQYAAHgEU9cAAADAEm3bI+vBd+VFX/1M0unWAAAAD2bqGgAAAFiW4bJ1V0arB40+DQAAMGnSNQAAALAg2zZd0u936yFab5Jn0RoAAGCipGsAAABgEX4cttatAQAAJky6BgAAAOZv6Nb1sHWf9IatAQAAZmPz6C8AAAAA8DcfpVs/Hbxl2BoAAGAmTF0DAAAAs/XeJmW6uikvduXXV9EaAABgNkxdAwAAAPM0DFt/sysN+0W3BgAAmBNT1wAAAMDcjJeth+nqQZN0pVu/6dYAAAAzI10DAAAAs7Jt0yX9/i65IVpvXLYGAACYK+kaAAAAmIlh2LpLNklfHtbD1ro1AADAbEnXAAAAwBzUw9ZjtzZsDQAAsBTSNQAAADBtR4etU25dG7YGAABYBOkaAAAAmLChW9fD1n2J1k3yIloDAAAshHQNAAAATNIQrZP0ydP+vPXw8FW3BgAAWA7pGgAAAJieeti6KWPWuzJsLVoDAAAszubRXwAAAABg30fp1k/Vw11p2JaEAwAALJGpawAAAGAy3tukOmU9LAnvql/fdGsAAIBlkq4BAACAafho0x/ctO6SiNYAAADLJ10DAAAAj/Zt2HrQlHlr3RoAAGAFpGsAAADgobZtumPD1k2ySZ5FawAAgFWQrgEAAIAHeW8/R6s3Vbquh611awAAgNWQrgEAAIBHGIet625t2BoAAGCtpGsAAADgvgxbAwAAcEC6BgAAAO7IsDUAAADHSNcAAADAXRi2BgAA4DTpGgAAALg9w9YAAACcJV0DAAAAt3R02DpJb9gaAACAL9I1AAAAcDOHw9Z9idZN8iJaAwAA8Em6BgAAAG7g1LD1oE9edWsAAAC+SNcAAADAtZ0fthatAQAAOCBdAwAAANdj2BoAAIB/Il0DAAAAV2LYGgAAgH8lXQMAAAB/ZtgaAACAv5GuAQAAgL8xbA0AAMCfSdcAAADAvzJsDQAAwJVI1wAAAMA/MWwNAADA9UjXAAAAwC8ZtgYAAODapGsAAADgNw6HrZN0hq0BAAD4E+kaAAAAuMzRYeumdGvD1gAAAPyBdA0AAABc4Myw9SZ5Fq0BAAD4E+kaAAAAOOu9Tc4OW+vWAAAA/Jl0DQAAAJz20aYvxdqwNQAAADcjXQMAAADHDMPWfdIkTXlo2BoAAIDbkK4BAACAfe/tZ6vu958btgYAAOBmNo/+AgAAAMCUDN26L5V6aNjjE8PWAAAA3IapawAAACDJ/rD1k8vWAAAA3JWpawAAACDZttlUw9bjiWvD1gAAANyFqWsAAABYt2HYuks2+8PWu2Rj2BoAAIA7MXUNAAAAK7Zt90arhxdd9UK3BgAA4C5MXQMAAMAq1cPWffV8VzL2m2gNAADA/Zi6BgAAgPX5NmydpK+GrXVrAAAA7s7UNQAAAKzJe5scG7YeiNYAAAA8iHQNAAAAq/HRfh60TtWtu6RJmuRVtAYAAOBhpGsAAABYgfdqQ3hTHjalW/e6NQAAAA8mXQMAAMCiDdE6SZ88HQxbb5Jn0RoAAIDH2zz6CwAAAAA3s62Grcfj1uOTXrcGAABgKkxdAwAAwBINw9ZdVawHhq0BAACYJFPXAAAAsDj1sPU4ad0ZtgYAAGC6TF0DAADAgpwftu6TN9EaAACAKZKuAQAAYBGGaJ2k3+/WQ7RukhfRGgAAgOmyMBwAAADm773aED7+Xb/eGa5bAwAAMG2mrgEAAGDO6mHrp4Nh642z1gAAAMyDqWsAAACYre3+sHVfdoOPw9a6NQAAADNh6hoAAABmaBi27vbPWifZJRvD1gAAAMyPqWsAAACYm492b7Q6SZ905UmnWwMAADA/pq4BAABgPt6raN0cvNsnb6I1AAAAsyRdAwAAwBwM0TpJnzxVS8K7krFfRWsAAABmzMJwAAAAmLxtNWw9Hreud4a/6NYAAADMm6lrAAAAmLBh2LqrivWgKxnbWWsAAAAWQboGAACASao3hI/duq8OXfe6NQAAAMshXQMAAMD0vJcN4Zt8BuyUXJ2kT95EawAAABZFugYAAIApqYetn6ol4TaEAwAAsGibR38BAAAAoNiWYeumLAkfd4PbEA4AAMCimboGAACACXhvk6SrzloPdsnGsDUAAADLJ10DAADAQ9UbwnOwIbxJOpetAQAAWD7pGgAAAB5n26ZL+mSTz4CdkquHDeGiNQAAAOsgXQMAAMAjDMPWhxvCu3Lo2oZwAAAA1kS6BgAAgPuqN4Rvqj3hfdkQ3uvWAAAArI50DQAAAHe0bdOXYevm4F0bwgEAAFgr6RoAAADuot4Q/lQtCe/KsPWraA0AAMB6SdcAAABwY0c3hDfJrtoQrlsDAACwbtI1AAAA3NLQrfuDDeG7Eq1tCAcAAADpGgAAAG6lHrY+uiFctwYAAIBCugYAAIAb+GjTV8PWfRm57kRrAAAAOEK6BgAAgKsaN4Q3BxvCN8kmeRatAQAA4DvpGgAAAK7kxw3hnWFrAAAAOE66BgAAgGs43BCekqttCAcAAICfSNcAAADwN6c2hA/R2oZwAAAAuIB0DQAAAP/qxw3hvW4NAAAAF5GuAQAA4J/YEA4AAADXI10DAADAL23bxIZwAAAAuCbpGgAAAC42bAjv9ietY0M4AAAA/JV0DQAAABeoz1pvqvXgsSEcAAAArkC6BgAAYPXGLD0OUn/r0Ns2fTVsPdolGxvCAQAA4AqkawAAAFZsvFo9ZOkkm2SXNMn/2q/R6uHdp2MbwjvD1gAAAHAF0jUAAABrNcxSDwV6Ux725XWXz1LdNzaEAwAAwK1J1wAAAKzSe/s5S92f+ECT7Lr839Pew750bhvCAQAA4KqkawAAAFZpGJs+1a2HD9TdetwQLloDAADADWx+/ggAAAAs0oV/J+7KsHWfvOjWAAAAcBOmrgEAAFil5jefdNYaAAAAbky6BgAAgLOa5FW3BgAAgNuyMBwAAAAAAACAB5OuAQAAWJ/3Nv1lnxy2hQMAAAA3Jl0DAACwMtv2F0F6d9vvAgAAAAzcugYAAGA13tsk6ZLNxena1DUAAADchXQNAADACry3aZKUDj38rJ+c0iSv/93wiwEAAABJpGsAAAAWro7Wm5KrU41TdwfXtOpJ6xfdGgAAAO5BugYAAGC5tm26g2idpEuaZJPsSqiuZ6+b8mHdGgAAAO5FugYAAGCJTp217kqZ7pPn//Y+POotCQcAAIB7k64BAABYljNnrbsSrd/2y/SbUA0AAAAPJl0DAACwFKfOWg9Phg3hzyo1AAAATJF0DQAAwCKcP2vdiNYAAAAwadI1AAAAM3fJWWu3qwEAAGDapGsAAABm6x/OWgMAAACTJF0DAAAwQ85aAwAAwLJI1wAAAMyNs9YAAACwONI1AAAA8zEMW/fOWgMAAMDSSNcAAADMwbcN4eNZ610VrZ21BgAAgNmSrgEAAJi2w7PWY7fuRWsAAABYCOkaAACAqTqM1qNhQ/gmeRGtAQAAYAk2j/4CAAAAcMy2/VwM3uz/5bWrhq2fdWsAAABYCFPXAAAATMx7myRdskmeynrwlElrG8IBAABgiaRrAAAAJqPeEJ7qpnVKtxatAQAAYKGkawAAACbgzFnrcWe49eAAAACwXNI1AAAAD3UmWo8bwkVrAAAAWLrNo78AAAAAK7Zts6nmqkddedgnL7o1AAAALJ+pawAAAB5hGLYe+vRTOWudatLaWWsAAABYE+kaAACA+/q2IXyI1sOTTrQGAACAlZKuAQAAuJfDs9bjsPW4M9xZawAAAFgl6RoAAIDbO4zWo3FDuGgNAAAAK7Z59BcAAABg6T6qs9b1X0O78rBPXnRrAAAAWDVT1wAAANzMtk1Knz46ae2sNQAAAJBEugYAAOAm3tsk6fZvWjfJTrQGAAAAjpCuAQAAuKr6rHWqaJ1qPbhoDQAAAOyTrgEAALiSOlpv9jeE78oTN60BAACAY6RrAAAA/uxMtB7PWneGrQEAAICTpGsAAAD+4JJobUM4AAAA8BPpGgAAgH+1bdOJ1gAAAMAVSNcAAAD83rZNSrTuq+eiNQAAAPBPpGsAAAB+Y9gQ3pVJ66FbDyPXnWgNAAAA/CPpGgAAgMt8O2s9DlsPubpJNsmzaA0AAAD8C+kaAACAn3yL1odnrUVrAAAA4G+kawAAAE77MVoPI9e6NQAAAPA30jUAAADHXBitnbUGAAAArkG6BgAAYJ9oDQAAANyddA0AAEBl26YTrQEAAIB7k64BAABIkmzbpETrvnouWgMAAAC3J10DAACs3hitx0SdMnLdidYAAADAPUjXAAAAK/beJklX1oPX0Xoo2ZvkWbQGAAAAbk66BgAAWKX39itRZ39D+Dh+LVoDAAAA9yJdAwAArEwdrTdlxnrQidYAAADAY0jXAAAAq3FJtO6TV90aAAAAuDfpGgAAYAUujNZvojUAAADwGNI1AADAoonWAAAAwBxI1wAAAAslWgMAAADzIV0DAAAsjmgNAAAAzI10DQAAsCCiNQAAADBP0jUAAMAiiNYAAADAnEnXAAAAMydaAwAAAPMnXQMAAMzWqWg9vOhEawAAAGA2pGsAAIB52rbpTkTrPmmSTfIsWgMAAADzIF0DAADMzbZNSrTuy8M6WjeiNQAAADAz0jUAAMB8jNF6vGAd0RoAAABYAukaAABgDkRrAAAAYNGkawAAgGkTrQEAAIAVkK4BAACmSrQGAAAAVkO6BgAAmB7RGgAAAFgZ6RoAAGBKjkbrlNeiNQAAALBQ0jUAAMA0nIrWSbqkSTaiNQAAALBY0jUAAMCj/Rith4e6NQAAALBc0jUAAMDjXBit30RrAAAAYOGkawAAgEcQrQEAAAAq0jUAAMB9HY3WTT4f9qI1AAAAsEbSNQAAwF28t199+mi0Hh6+KNYAAADAGknXAAAAN1ZH683paP0sWgMAAADrJV0DAADczGG0TmnVEa0BAAAAvkjXAAAAN3A0Wke0BgAAADhOugYAALgq0RoAAADg96RrAACAKxGtAQAAAP6VdA0AAPBnp6L18KtoDQAAAPAT6RoAAOAPTkXrJF3SlG4tWgMAAACcJV0DAAD8kx+j9dCtX0VrAAAAgJ9J1wAAAL90YbR+E60BAAAALiVdAwAAXEy0BgAAALgN6RoAAOACojUAAADALUnXAAAAZ23bJOmTTrQGAAAAuBXpGgAA4IQxWg99elO9JVoDAAAAXJV0DQAAsK/eDT726ZFoDQAAAHAD0jUAAEBxeNBatAYAAAC4C+kaAADgWLROmbpOshOtAQAAAG5LugYAANbtaLROVa8jWgMAAADcnHQNAACs1alondKqh0nrZ8UaAAAA4OakawAAYH3OROuu/CpaAwAAANyRdA0AAKzJtk2fz3+ORuth3vpVtAYAAAC4K+kaAABYgWHMelwDPnTrUR2tHbQGAAAAeATpGgAAWLRvu8FT6vVAtAYAAACYBukaAABYqMOD1n31rmgNAAAAMCXSNQAAsDiH0XowPuxFawAAAIBpka4BAIAFORWth1/7Mmn9olgDAAAATIt0DQAALMK2/Ryn/hatU3aDD936WbQGAAAAmCLpGgAAmLNhzLqpdoBvqnfrg9avojUAAADAdEnXAADAPH3bDZ5Srwd1tHbQGgAAAGDypGsAAGBuDg9a99W7ojUAAADADEnXAADAfBxG68H4sBetAQAAAGZJugYAAOZg236W6W/ROtWh6yZ5UawBAAAAZkm6BgAAJmwYs26qcepN9W5XGnaTPIvWAAAAADMmXQMAAJP0bTd4Sr0e1AetX0VrAAAAgNmTrgEAgIk5PGjdJykv6mjtoDUAAADAUkjXAADAZJw6aD2W7F60BgAAAFgm6RoAAHi0bwetU0XrJF3J2E3yolgDAAAALJN0DQAA3My4+rtO0U3y/N/3D9QHrUfjbvDOmDUAAADAwknXAADADRw26cEwWv2/9mvA+ttB64GD1gAAAAArI10DAAC38e1e9fhwmKJu+vTNkYPWO9EaAAAAYI2kawAA4No+2r0R6m+GpH10GjuiNQAAAMBKSdcAAMANND9+oHyiy9c97GfFGgAAAGClpGsAAOCq3tuvuerz+j5JmiZ98ipaAwAAAKyadA0AAFxbf0G3zhCte9EaAAAAgOwflwMAAPib9/Z3n29+XCwOAAAAwCqYugYAAK7hvf08Wd37v8gCAAAA8GvSNQAA8Dfb9nND+BCtL5+jbi7bKw4AAADACkjXAADAP6nHrJvfD1s35Q8CAAAAgHQNAAD82rfd4N8idFc9OVOmd0mTvPx3828LAAAAwBxI1wAAwMWO7gYfp667kqv78jwn6nVjWzgAAAAAe6RrAADgJ992g2c/SDclZg8v3v77/CP1u6n++FC4N8mzkWsAAAAAPknXAADAad92g2d/VLqrSva31d9DwB6mtFP9wbFw69YAAAAAVKRrAADgmKO7wXNsN/jr6QitTwMAAABwGekaAACofNsNPg5bD47uBgcAAACAP5OuAQCAJCd2g4/D1md2gwMAAADAn0nXAACwbkOxHrJ0d7AbPMnust3gAAAAAPAH0jUAAKzV4Zj14W7w2A0OAAAAwD1I1wAAsD7b9vNkdV/GrPvq3Xo3+LNiDQAAAMA9SNcAALAa9Zj1GKdTnmzsBgcAAADgYaRrAABYgcPd4Idj1p3d4AAAAAA8jHQNAADLNRTrIVp3ZTf4YKjUXTVmrVgDAAAA8DjSNQAALNHhmPWmercph65FawAAAACmQboGAIAFGYt1SrRuju0GT9IkL4o1AAAAAFMhXQMAwCLUY9ZPZT14ypPN/pj1q2gNAAAAwLRI1wAAMHPb9jNL12PW4+x1Vz0xZg0AAADAVEnXAAAwT/WY9bgDPNWLXdIYswYAAABgHqRrAACYm29j1jm4Zj08HKL1m2gNAAB1ZRPRAAAWS0lEQVQAwAxI1wAAMBOXj1l3ijUAAAAAMyNdAwDA5J0fs27Kr8asAQAAAJgt6RoAAKbq/Jh1n3TV82fFGgAAAIAZk64BAGB6Lhmz7suLV9EaAAAAgNmTrgEAYDJ+NWb9olgDAAAAsBzSNQAATIAxawAAAADWTboGAIDHMWYNAAAAAEmkawAAeICxWMeYNQAAAAAk0jUAANxVPWb9lHSlW8eYNQAAAACrJl0DAMDtHY5ZN9WS8OwXa2PWAAAAAKyPdA0AALd0fsw6yS5pSrF+U6wBAAAAWCnpGgAAbuCSMeuhYYvWAAAAACBdAwDAlW3b9Pn8ZyzWg+HJOGbdKdYAAAAA8Em6BgCAa6gXg49Xq1N1667kamPWAAAAAHBAugYAgD84XAyeKlenhOpesQYAAACAc6RrAAD4J/Vi8KfqdnVKpe6q8esXxRoAAAAAzpGuAQDgN44uBh9fZ79Y98mraA0AAAAAP5OuAQDgAoeLwZtqMfjwZJc0FoMDAAAAwL+QrgEA4Kx6zPqpGrAeu/UwZt2J1gAAAADw76RrAAA45vyYdcqvvWINAAAAAFcgXQMAQOV8sR7e2lXXrF8UawAAAAC4AukaAACSXLYYfJOkxOxX0RoAAAAArka6BgBg3X61GLyzGBwAAAAAbkK6BgBglSwGBwAAAIApka4BAFiZbfs5RT0sBh/XgFsMDgAAAACPI10DALAO9SnrcZZ6fB2LwQEAAADgkaRrAAAWbSjWQ58+HLAeVoVbDA4AAAAAjyZdAwCwRIenrFN+pgxYd2XA2mJwAAAAAHg06RoAgGX5dsq6L2V6VC8G7y0GBwAAAIBJkK4BAFiEU6esR43F4AAAAAAwXdI1AABzdnQx+NFT1r3F4AAAAAAwXdI1AAAzdFis6xnro6esLQYHAAAAgAmTrgEAmI9vxfop6Q4mrZ2yBgAAAIAZkq4BAJiDbfsZpIdi3Vc7wAfj1HXvlDUAAAAAzI90DQDAhI1j1mOlbk6csh7eelasAQAAAGCWpGsAAKbn8JR19leCpxTr8ZT1q2gNAAAAADMmXQMAMBmHxbo5OGI9Hrd2yhoAAAAAFkS6BgDg0b4V66eqT4/duqu2gneKNQAAAAAsjXQNAMCDnCrW41nrlNHq3ow1AAAAACycdA0AwH0dFuuxTNfFeleNWb8o1gAAAACwcNI1AAD3sm0/R6i/FevBcNx6V2XsPnkVrQEAAABgFaRrAABubCjWqeaqTxXrzmJwAAAAAFgp6RoAgNv4VqzH14OhYSvWAAAAAEAS6RoAgCsbT1mfKtZ90iWb6lfFGgAAAABWT7oGAOAaxmKdsgM8x4r1uDC8U6wBAAAAgC/SNQAAf3BYrJuzxdqMNQAAAABwjHQNAMDvnSnW37p1r1gDAAAAAD+TrgEAuNjlxTolWr8o1gAAAADAz6RrAAB+8g/F+lmxBgAAAAB+QboGAOAExRoAAAAAuBfpGgCAfYo1AAAAAHB30jUAAEmSbftVoxVrAAAAAOC+pGsAgHWri3VTfjblyUCxBgAAAABuTLoGAFilw2KdqlUPFGsAAAAA4F6kawCA1RiPWDcnivXwpCuD14o1AAAAAHAv0jUAwNKNxTpJnzydLdbjr6+KNQAAAABwP9I1AMBCHS3WzU/F+k2xBgAAAAAeQLoGAFiWH4t1n2ySnWINAAAAAEyIdA0AsAiHxbpLNieKdadYAwAAAADTIl0DAMzZtv06XD3E6aa8Hkt2o1gDAAAAAFMnXQMAzM04YN1Uy8DHAev6lPVu/zOKNQAAAAAwVdI1AMBMHD1inWPFenhtxhoAAAAAmA/pGgDgvuqZ6dGYnw8z89Fi3Ry06iFUjzPWz3I1AAAAADAn0jUAwB29t0nZ710bD1Fv28/qfFisu2oreEqi7rK3PPxVsQYAAAAAZkm6BgC4l6Fb56Bbjw+bpO/z8f+SJn0p3EOT7qspbUesAQAAAIDFka4BAO6lOTZvXfvM1c1nk27Kw/GPK9YAAAAAwEJJ1wAAd3SmWw+a5vsR6/GsdadYAwAAAACLJV0DANzFuC38Ql0ZvB7q9bNcDQAAAAAsmXQNAHB7723Sp2++7lWfNw5bvyrWAAAAAMAqSNcAADfz3n616r7Jps+F7bpJXkRrAAAAAGBFpGsAgKsac/UwNt0nm/Lz8m7d3fALAgAAAABMkHQNAHANewPWyVMVrVM36wsGr3eXNm4AAAAAgMWQrgEA/uBosW5Kse7LW80QpPtsmq+HpzT5+TMAAAAAAMsiXQMA/NLRleDj60Ff9n431Yv81K2bMnL95tA1AAAAALAu0jUAwGVODVg35clgzM/j+PVr1aE/2nP/FTsj1wAAAADASknXAACnHR2wro9YZ79SpwxY9ycmp1/+y0f7+a96qv4l43z2qT8IAAAAALBo0jUAwIHzA9bjW+OA9Vivny+ozi//ff77u2piW7QGAAAAANZNugYASPLLAeszK8EvIVEDAAAAAOyTrgGAdfuHAevzK8EBAAAAAPg96RoAWJ97DlgDAAAAAHAB6RoAWI1t+1mmewPWAAAAAADTIl0DAIv2bcC6qaarDVgDAAAAAEyGdA0ALM7hPvCnfM1bZz9aG7AGAAAAAJgA6RoAWIqxWKfK1acGrIcnnQFrAAAAAIBJkK4BgDk7HLDeVD9zYsB6qNfP/7+9u1mRJCsDMPxFVqsbGVBwLeV6QLyBHhtcqd14K15J3sowM7gSqrtvQIRZW7gWFAY36lQeF1Fx+mT8ZeRfRWTm8zAUWZmRP11ds3r7+45cDQAAAACwFNI1AHBphvaB11k6mq+pWANeGbAGAAAAAFg06RoAuBAf158GqXfuA3/a3g0uVwMAAAAALJt0DQAsWGvAOp9RPb4PPA9Yv1GsAQAAAAAug3QNACxM7/HVtdTcn9kHDgAAAABwFaRrAGABdh5fXcv3PMXW9XI1AAAAAMCFk64BgJkM5erx46vDPnAAAAAAgCskXQMAL2hKrh4/vtqANQAAAADANZKuAYDzy8U6ilwdTbGOIleH46sBAAAAAG6RdA0AnEd3wHpVfBvN9u9UVOq8G1yuBgAAAAC4MdI1AHA6I7m6Ki5LzT1PcjUAAAAAABHSNQBwrIm5Oifqp+b+vA/8jWINAAAAAHDrpGsAYH/dXH1XzFJnrVzt+GoAAAAAAAZI1wDANOO5OjWXydUAAAAAAOxPugYAho0vA5erAQAAAAA4EekaANh22NnVcjUAAAAAAEeQrgHg5pWtOuRqAAAAAABmIF0DwE0aOrg65GoAAAAAAGYgXQPAzRjJ1avi4OpoWrVcDQAAAADAS5GuAeCqDeXqVfNtFHvCy1wdcjUAAAAAAC9HugaAqzMlV5cz1nI1AAAAAABzk64B4PK1WnU0oTqaQepurt4UZ1rL1QAAAAAAzE26BoDLNHJwdW7SpfLg6qRVAwAAAACwLNI1AFyOgw+uroxWAwAAAACwaNI1ACzYAZvAHVwNAAAAAMAFkq4BYGH23QQeDq4GAAAAAODiSdcAMLeyVcd2ri5Hq4c2gTu4GgAAAACAyyddA8Acdo5Wp85TNs2jYbQaAAAAAIBrI10DwIsYObV61dTrLM9SP3VKtlwNAAAAAMA1kq4B4Dwe1s83ql2nVreidc7VRqsBAAAAALgZ0jUAnE53DXjEp3uqzj2t0eqQqwEAAAAAuFHSNQAcoWzVsT1aveo7r7qWT602Wg0AAAAAABEhXQPAfkZadWyPVuevlVOrAQAAAABgB+kaAEZNObK6dVh1uQa8ZrQaAAAAAABGSdcA0DFyZPWquKelHK3OrfqNVg0AAAAAALtJ1wDQadUxfGR1a8A6t+owWg0AAAAAAIeTrgG4SSOtOqYdWR1aNQAAAAAAnIx0DcBtmN6qq+bRypHVAAAAAADwQqRrABajrMtZFfH6oE68b6uumlzd26odWQ0AAAAAAOckXQOwDB/WkZqzpbMqYhPxsI7YFY/ra6LY5p2mteqI2BQXaNUAAAAAADAH6RqABfiwjiiqc5aK2w/rrZzcGtFOnSwdAzvAY7tV57ewBhwAAAAAAOYjXQMwt4/rrUTdkoehI+J9U7ijM1S92u7ceUN467zq1jVaNQAAAAAALIN0DcACVDFWr6Mp00MLwGO4VYcd4AAAAAAAcAGkawBm9bD+tMd7XDVcuLVqAAAAAAC4cNI1ADN5Pqw6xaaK1Z7Pza06n12tVQMAAAAAwCWTrgF4EQ/r5xvlgHWKuKsiTRy7zovCi1btsGoAAAAAALgK0jUAZ1CH6rpH11/TVnr+dCh1imndOp6v/kKrBgAAAACAKyRdA3AKz9u/t0N1irgrinVZqPPFvWdX96oi0sTIDQAAAAAAXBjpGoD9laE6t+cyVK+aG71lOp9UnZ+4M0lX0y4DAAAAAAAuk3QNwC7lMdXlUPVdk5O3tn83F0QRmzfbT2+dVP1+HZuI1a6PUUW8ti0cAAAAAACuk3QNwLahUB3F0HMrVLcmsMuh6nLqOrfqlvqaTTG03WLkGgAAAAAArp10DXDbpofqIa3t31EMVb+ZNiT95o/PG8ifIladA7DrV1sZuQYAAAAAgGsmXQPcklOF6hje/n2YXK9bU9d5IbluDQAAAAAAV026BrhedQyOvlOoJ4bqGD6m+shW3TVxRBsAAAAAALhG0jXAVajHqXOortWB+a6YXd43VJfB+7ShGgAAAAAAoCBdA1ygob3fOVRH9Mxbt6J1d/W3UA0AAAAAAMxEugZYttY49c69390L8o2hM6qFagAAAAAAYG7SNcCSlKdT19JBe7/rUF1eI1QDAAAAAAALJl0DzKS79Ds6S7+jb5y6G61bB1RHEapVagAAAAAA4BJI1wDnN1KpYztFV9tbwbvyOHX5OvmGUA0AAAAAAFwm6RrgpCZW6tZW8FIqHm2dTh3GqQEAAAAAgOskXQMcpE7U3QI9sVLna/LM9Ka4rK7XTqcGAAAAAABuhnQNsEtvpU5951LH9oR0vjKGK3V5TX3jjUoNAAAAAADcHOkaoDE+SN2q1FUxId0yvVKbpQYAAAAAAIgI6Rq4Ua0Tqcuc3E3UMVype8+lLh/NN1RqAAAAAACAYdI1cNVaiTprnUhdNRG6m6h7h6rLSu1cagAAAAAAgKNJ18Dly306diXqocvKC1Jxe9N3cVmpnUsNAAAAAABwCtI1cDm6Z1GXG7mjuD+Kb1v3ZGWi7h2ktu4bAAAAAADgpUjXwMJ0+3SWOmdRtxZ999qZqMMgNQAAAAAAwMyka2AOO1d8l326e2XavjM/UaIGAAAAAAC4TNI1cDY756ej81DvMvAR+Szq/LISNQAAAAAAwAWSrmEByhHk7CKCa/7kE/d7j1ycn9JVjlBXfRfr0wAAAAAAABdOuoa5fVhvjSDXqoj360UU2SlxOvbZ7939Nl/c26dje4T613P/QAAAAAAAADgD6RrmU1fh1Bdro+m1H9fx+syx9uA43bp+yn5vfRoAAAAAAIA+0jXMpxrNvauIKmIT8bA+avZ6qEyXbz1lcjqGh6fTdofe9D03P6RPAwAAAAAA0CFdw0zqorwavSZ1qvDQ68T+ZboqXnzn5HTrY5TD060LWu+rTwMAAAAAADCBdA0zqSZk6YhYRWwi3q+fn9I1tNB7SpkeefdN55ry05bD07Ofxg0AAAAAAMDlk65hDlNGrku9q7xrIwu9R8r0yJnT0ZmcFqcBAAAAAAA4M+kaTifv7o7OuHPLlE3g2ap5ypDumdm5TMdAnHbmNAAAAAAAAEsiXcMuZZCOgRJcS0VCHpmTHn+RnbpZuvsum+J+cRoAAAAAAIDFO7iendTHdaT4+Y8//+VPf1NPov71n3/++7+/jSriteTGqU2fja6l7TY8fcv3Tr3VeadUfA3bvAEAAAAAALgGc6frh/XzR1j1bTzeRISjdhk2MUKn7WtaKXpkNvowvZvAN8XtqljWPSWEG5sGAAAAAADg2s29MLxq6l23HaamXs+d1zmj1i7u2vRl2hMXdFfbObn1+lO69dB4dG+Qjk69bj23TtH5322M878AAAAAAAAAN2DWJlanu50fIRm8Xpih3hz7/0KlviR8wo3cI+/b+1HLY6RjV0Tvfvh9f0vfr58/ydC71P96w+8/AAAAAAAA1+5VfOjLkF2t43V77VvXquGC2HprU6fT9Xbl0vSZ5iG9vXlk6PmsH2bkuOihDt07GF3bbL/guTd1j/+46g+zcuI7AAAAAAAA16+K99O2FrcqYO8FB0zcTt8LfZJ6PSXAjzs+tZ5bb1cu7TvTPNKGX0b3d2/i30L3r3uZs8sf1j1/a7myL/MzAwAAAAAAwElV8bB+if3McUQBPWE63Rngd3qZn9U16f2Z7/UvAHr/wcGVBd3eWfkr+zMCAAAAAADAsGqrmR2w8JkFOnhIfTNw/zGz5kOT7rosAAAAAAAA0Hj16WbVnK17DkNbrKc00dkXVp/bvrPg4z+0kYOcx438kM995DMAAAAAAABw217q3Obefcgxef/2qc66XqYDTuA2sgwAAAAAAABckVmD8Pt1pAn1up4FN/ULAAAAAAAAcKUmTj2fR5qwMLy6gYXhAAAAAAAAALdt7jXcH9fPAXvoJOz60ddGrgEAAAAAAACu1tzpOiI+rmMTkSLu4rMf/uwH8aP/xX++++8/4imiiljp1gAAAAAAAABXbgHpOiIe1lHFLz771ec/+aKesv72Xx/+9t1fIkW80a0BAAAAAAAArtwy0nVERLx7TNEsCI+Ir+4X9NkAAAAAAAAAOJ/V3B8AAAAAAAAAgFsnXQMAAAAAAAAwM+kaAAAAAAAAgJlJ1wAAAAAAAADMTLoGAAAAAAAAYGbSNQAAAAAAAAAzk64BAAAAAAAAmJl0DQAAAAAAAMDMpGsAAAAAAAAAZiZdAwAAAAAAADAz6RoAAAAAAACAmUnXAAAAAAAAAMxMugYAAAAAAABgZtI1AAAAAAAAADOTrgEAAAAAAACY2au5PwAAAAAAAAAAF+ztY4qI1Hz7zX11wItI1wAAAAAAAAAcq2rq9bvHFBGriC/3adgWhgMAAAAAAABwlDpaV03AXkV8H/G7x/Tbx7TjmQ3pGgAAAAAAAIDDfX1fpYin4p7vi4b99jG9nRCwLQwHAAAAAAAA4Ch1pU4R9Yrw+utd8ejbx1SNbhE3dQ0AAAAAAADAUf50X60iXjWbw7vqtv00PIRt6hoAAAAAAACAY9Vlunekur6z3Cj+7jHVB2PnIez+WexZvHtM0YyQp+EaDwAAAAAAAMBi7YzQ9QT2qojZX99XS0zXoVsDAAAAAAAAXKZ9I3Rdhxe0MDwVf4YFFXUAAAAAAAAAzqZq5rAXxLA1AAAAAAAAwEVLsd+w8tMC0zUAAAAAAAAAFyrlZdvTppbvIqKZuraZGwAAAAAAAIAT+P3jpInrumuvmq9f3ldTngUAAAAAAAAAO7x9TOPD01XEqlkPHhHf3FetRwEAAAAAAADgcH94TE+7rqma/7687+nUr87xsQAAAAAAAAC4HZuIu4jvi+HpFLFqxqxrX/UV68zUNQAAAAAAAACH+8Nj2kRsOvl5fMy6xdQ1AAAAAAAAAEdZRWwiUsSryWPWLdI1AAAAAAAAAMd6FbFpNodPGbNu+T8r7RkuEPnxbAAAAABJRU5ErkJggg=="
                                id="1ea0ba7e56" height="1476" preserveAspectRatio="xMidYMid meet" />
                            <clipPath id="b6d6726534">
                                <path
                                    d="M 256.792969 342.964844 L 267.480469 342.964844 L 267.480469 353.65625 L 256.792969 353.65625 Z M 256.792969 342.964844 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="67ab615ee7">
                                <path
                                    d="M 262.136719 342.964844 C 259.183594 342.964844 256.792969 345.359375 256.792969 348.308594 C 256.792969 351.261719 259.183594 353.65625 262.136719 353.65625 C 265.085938 353.65625 267.480469 351.261719 267.480469 348.308594 C 267.480469 345.359375 265.085938 342.964844 262.136719 342.964844 Z M 262.136719 342.964844 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="1b0aef135f">
                                <path
                                    d="M 195.023438 344.234375 L 205.710938 344.234375 L 205.710938 354.925781 L 195.023438 354.925781 Z M 195.023438 344.234375 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="f1d881bbeb">
                                <path
                                    d="M 200.367188 344.234375 C 197.414062 344.234375 195.023438 346.628906 195.023438 349.578125 C 195.023438 352.53125 197.414062 354.925781 200.367188 354.925781 C 203.320312 354.925781 205.710938 352.53125 205.710938 349.578125 C 205.710938 346.628906 203.320312 344.234375 200.367188 344.234375 Z M 200.367188 344.234375 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="6608fcc74a">
                                <path
                                    d="M 320.257812 335.050781 L 330.945312 335.050781 L 330.945312 345.738281 L 320.257812 345.738281 Z M 320.257812 335.050781 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="8502e0a488">
                                <path
                                    d="M 325.601562 335.050781 C 322.652344 335.050781 320.257812 337.445312 320.257812 340.394531 C 320.257812 343.347656 322.652344 345.738281 325.601562 345.738281 C 328.554688 345.738281 330.945312 343.347656 330.945312 340.394531 C 330.945312 337.445312 328.554688 335.050781 325.601562 335.050781 Z M 325.601562 335.050781 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="e9aa0aced9">
                                <path
                                    d="M 377.785156 320.777344 L 388.476562 320.777344 L 388.476562 331.46875 L 377.785156 331.46875 Z M 377.785156 320.777344 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="1f6254558d">
                                <path
                                    d="M 383.128906 320.777344 C 380.179688 320.777344 377.785156 323.171875 377.785156 326.121094 C 377.785156 329.074219 380.179688 331.46875 383.128906 331.46875 C 386.082031 331.46875 388.476562 329.074219 388.476562 326.121094 C 388.476562 323.171875 386.082031 320.777344 383.128906 320.777344 Z M 383.128906 320.777344 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="2d42eccaad">
                                <path
                                    d="M 436.910156 299.738281 L 447.597656 299.738281 L 447.597656 310.425781 L 436.910156 310.425781 Z M 436.910156 299.738281 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="64864366ec">
                                <path
                                    d="M 442.253906 299.738281 C 439.304688 299.738281 436.910156 302.128906 436.910156 305.082031 C 436.910156 308.035156 439.304688 310.425781 442.253906 310.425781 C 445.207031 310.425781 447.597656 308.035156 447.597656 305.082031 C 447.597656 302.128906 445.207031 299.738281 442.253906 299.738281 Z M 442.253906 299.738281 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="180c27e056">
                                <path
                                    d="M 491.480469 270.929688 L 502.167969 270.929688 L 502.167969 281.617188 L 491.480469 281.617188 Z M 491.480469 270.929688 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="b97d557854">
                                <path
                                    d="M 496.824219 270.929688 C 493.871094 270.929688 491.480469 273.320312 491.480469 276.273438 C 491.480469 279.222656 493.871094 281.617188 496.824219 281.617188 C 499.773438 281.617188 502.167969 279.222656 502.167969 276.273438 C 502.167969 273.320312 499.773438 270.929688 496.824219 270.929688 Z M 496.824219 270.929688 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="52f871e5b4">
                                <path
                                    d="M 532.539062 243.636719 L 543.226562 243.636719 L 543.226562 254.328125 L 532.539062 254.328125 Z M 532.539062 243.636719 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="7e0fc1c267">
                                <path
                                    d="M 537.882812 243.636719 C 534.929688 243.636719 532.539062 246.03125 532.539062 248.980469 C 532.539062 251.933594 534.929688 254.328125 537.882812 254.328125 C 540.832031 254.328125 543.226562 251.933594 543.226562 248.980469 C 543.226562 246.03125 540.832031 243.636719 537.882812 243.636719 Z M 537.882812 243.636719 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="138c52fa62">
                                <path
                                    d="M 574.316406 213.339844 L 585.003906 213.339844 L 585.003906 224.03125 L 574.316406 224.03125 Z M 574.316406 213.339844 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="4699e072e8">
                                <path
                                    d="M 579.660156 213.339844 C 576.710938 213.339844 574.316406 215.734375 574.316406 218.6875 C 574.316406 221.636719 576.710938 224.03125 579.660156 224.03125 C 582.613281 224.03125 585.003906 221.636719 585.003906 218.6875 C 585.003906 215.734375 582.613281 213.339844 579.660156 213.339844 Z M 579.660156 213.339844 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="5116c9c415">
                                <path
                                    d="M 641.933594 142.359375 L 652.621094 142.359375 L 652.621094 153.046875 L 641.933594 153.046875 Z M 641.933594 142.359375 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="108a069cfe">
                                <path
                                    d="M 647.277344 142.359375 C 644.324219 142.359375 641.933594 144.753906 641.933594 147.703125 C 641.933594 150.65625 644.324219 153.046875 647.277344 153.046875 C 650.230469 153.046875 652.621094 150.65625 652.621094 147.703125 C 652.621094 144.753906 650.230469 142.359375 647.277344 142.359375 Z M 647.277344 142.359375 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="201940b823">
                                <path
                                    d="M 611.390625 177.257812 L 622.078125 177.257812 L 622.078125 187.945312 L 611.390625 187.945312 Z M 611.390625 177.257812 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="1d760da149">
                                <path
                                    d="M 616.734375 177.257812 C 613.785156 177.257812 611.390625 179.652344 611.390625 182.601562 C 611.390625 185.554688 613.785156 187.945312 616.734375 187.945312 C 619.6875 187.945312 622.078125 185.554688 622.078125 182.601562 C 622.078125 179.652344 619.6875 177.257812 616.734375 177.257812 Z M 616.734375 177.257812 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="679f8231a7">
                                <path
                                    d="M 673.738281 98.863281 L 684.425781 98.863281 L 684.425781 109.550781 L 673.738281 109.550781 Z M 673.738281 98.863281 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="e77d62bcba">
                                <path
                                    d="M 679.082031 98.863281 C 676.128906 98.863281 673.738281 101.257812 673.738281 104.207031 C 673.738281 107.160156 676.128906 109.550781 679.082031 109.550781 C 682.03125 109.550781 684.425781 107.160156 684.425781 104.207031 C 684.425781 101.257812 682.03125 98.863281 679.082031 98.863281 Z M 679.082031 98.863281 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="335c7dd746">
                                <path
                                    d="M 702.132812 50.738281 L 712.824219 50.738281 L 712.824219 61.429688 L 702.132812 61.429688 Z M 702.132812 50.738281 "
                                    clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="9e32f7a833">
                                <path
                                    d="M 707.476562 50.738281 C 704.527344 50.738281 702.132812 53.132812 702.132812 56.082031 C 702.132812 59.035156 704.527344 61.429688 707.476562 61.429688 C 710.429688 61.429688 712.824219 59.035156 712.824219 56.082031 C 712.824219 53.132812 710.429688 50.738281 707.476562 50.738281 Z M 707.476562 50.738281 "
                                    clip-rule="nonzero" />
                            </clipPath>
                        </defs>
                        <g clip-path="url(#9329105f0e)">
                            <g mask="url(#6fb2a9fc40)">
                                <g transform="matrix(0.238815, 0, 0, 0.238792, 189.492233, 7.963395)">
                                    <image x="0" y="0" width="2622"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAACj4AAAXECAIAAAD4PXJPAAAABmJLR0QA/wD/AP+gvaeTAAAgAElEQVR4nOzd3W3raJqF0U1ZiXQiPu3bxjRQqVQkTGWACoBjJVKJtMW5+Ew1adnHsi3p489aaByYdTwYXtUA8/R+2WQ2/v13P3786x9NrTcBAAAAAAAA4J52tV8AAAAAAAAAgK2bS7r+Yzq5fvefAAAAAAAAALBKc0nXffIwenxIhGsAAAAAAACAjdjXfoFX/bRVH6u9CAAAAAAAAAD31tR+gST598e3wf/6xyzeEAAAAAAAAIDbmcvBcAAAAAAAAAA2q366/uPjyfWnfwsAAAAAAADACtRP18fk4YO/evDRawAAAAAAAIANqJ+u++Q/H/zVfxKbawAAAAAAAIDVq5yu//13//s43Sf/djMcAAAAAAAAYNX2tV8gzbf+CgAAAAAAAIDVqLm6/tdnk+uiT/5leA0AAAAAAACwXjXTdZMcL/i1o/k1AAAAAAAAwKpVS9d//N03ycMFv/mQNMkfhtcAAAAAAAAAK1UtXR+TfXLhwfD9ZftsAAAAAAAAAJao5sHwl7NL4P3oz5MmebnTGwEAAAAAAABQQZ10/T9/9+cr6pfhbXbvtepj8j9uhgMAAAAAAACsUc3V9Vg//e71w2W3xAEAAAAAAABYgWrpukn6pEkekmb4z/hvm9Hf9menxQEAAAAAAABYjTrpunTofZKkT3bJX/9426b/+kezG7bX+9H/FAAAAAAAAAArs6/1v7hJjsku+d+zaH1S/uqPv/vjsL0GAAAAAAAAYH3qpOvzjfVv/KZtAwAAAAAAALAC1b51DQAAAAAAAACFdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVCZdAwAAAAAAAFCZdA0AAAAAAABAZdI1AAAAAAAAAJVJ1wAAAAAAAABUJl0DAAAAAAAAUJl0DQAAAAAAAEBl0jUAAAAAAAAAlUnXAAAAAAAAAFQmXQMAAAAAAABQmXQNAAAAAAAAQGXSNQAAAAAAAACVSdcAAAAAAAAAVLav/QIAAAAAAAB8rGvTJEma5NeflV8G4GasrgEAAAAAAOaqa5Okz2u9Blgv6RoAAAAAAGCWSreObg1sgnQNAAAAAAAwP+NuLV0DGyBdAwAAAAAAzIxuDWyPdA0AAAAAADAnujWwSdI1AAAAAADAbOjWwFZJ1wAAAAAAAPOgWwMbtq/9AgAAAAAAAIy6teEhsEn+5QcAAAAAAFCbbg1snn//AQAAAAAAVKVbA/hXIAAAAAAAQE26NUAS/xYEAAAAAACoRrcGGPgXIQAAAAAAQA2HNk0SuQYgSfa1XwAAAAAAAGB7Dm36ZJf0td8EYB7813gAAAAAAADu69AmSaNbA/yXdA0AAAAAADADx+SYNE3t9wCoQ7oGAAAAAACooT/7uUn6D4bYJtrA2vnWNQAAAAAAwH09/vnOP/y/Nn1SRtfHJMnDKFe/DH8FsFJW1wAAAAAAALV1bXLWbV6mj1bXwKpJ1wAAAAAAALWN74Efh4F1Y2kNbIh0DQAAAAAAMAMl2jTJLumTpz+zGy6HA2yAdA0AAAAAAFDVoZ0MrJvk6c9k+CS2eg1sg3QNAAAAAABQWzkY3px90Lo8qtfABkjXAAAAAAAA9Rzat7m6jK2Lpz8DsA372i8AAAAAAACwYeOx9cvobPiJeg1sg3QNAAAAAABQSTedXJ8fDAfYDAfDAQAAAAAAKhm36vJBaxtrYKukawAAAAAAgBq6Nhm1GpNrYNukawAAAAAAgBpMrgFGpGsAAAAAAIC7M7kGmJKuAQAAAAAA7s7kGmBKugYAAAAAALgvk2uAM9I1AAAAAADAfZlcA5yRrgEAAAAAAO7I5BrgPdI1AAAAAADAHZlcA7xHugYAAAAAALgXk2uAD0jXAAAAAAAA92JyDfAB6RoAAAAAAOAuTK4BPrav/QIAAAAAAADbUFp1M/yc5J8m1wCvrK4BAAAAAABubzy5HjdsAJJI1wAAAAAAAPfw5jx4kzyaXAP8l3QNAAAAAABwY+eTawCmpGsAAAAAAIAbM7kG+Ix0DQAAAAAAcHsm1wC/JV0DAAAAAADc0qFNkzTDo8k1wHukawAAAAAAgBsrY2uTa4CPSdcAAAAAAAA3c2h95RrgEtI1AAAAAADALZlcA1xAugYAAAAAALgNk2uAi0nXAAAAAAAAN2NyDXAZ6RoAAAAAAOAGTK4BvkK6BgAAAAAAuI3T2NrkGuAz0jUAAAAAAMC1vZlc9ybXAJ+QrgEAAAAAAG7gNLk+Vn4RgEWQrgEAAAAAAK7q/CvXDoYDfEa6BgAAAAAAuLY3k+sn18IBPiFdAwAAAAAAXI/JNcC3SNcAAAAAAABXZXIN8HXSNQAAAAAAwJWYXAN8l3QNAAAAAABwPSVXN8PPJtcAl5GuAQAAAAAAruF8cv1Ltwa4lHQNAAAAAABwJafJtTvhAF8kXQMAAAAAAPzY+eT60eQa4AukawAAAAAAgJ/p2hxNrgF+RLoGAAAAAAD4mZKr+9GjyTXAF0nXAAAAAAAAP9C1yZBcTK4Bvku6BgAAAAAA+IE3udrkGuBbpGsAAAAAAIDvMrkGuBLpGgAAAAAA4LtMrgGuZF/7BQAAAAAAABaia9MkGYp1+XM3/ScAfIvVNQAAAAAAwAXKbfDSqk+VetyqTa4BfkC6BgAAAAAA+Ezp1vnturpPDu17fwHA56RrAAAAAACAz5w21h+dBC89+ziK3AB8hW9dAwAAAAAAXODTPWDvc9cA32d1DQAAAAAA8Jnf7K3HHm7+IgBrJV0DAAAAAABcoL/sd6yuAb5FugYAAAAAAACgMukaAAAAAADgM5dMrgH4AekaAAAAAADgM81l9dq1cIDvkq4BAAAAAAAu8GlU6ZOjeg3wTfvaLwAAAAAAADB7l6yuyy88/nnzlwFYI6trAAAAAACAzzz+mf7jet0kx7u+DsD6SNcAAAAAAACXeTddl0F2uRP+ZHIN8E0OhgMAAAAAAHyma5PRJLAffdO6/PxLtAb4EekaAAAAAADgM+Np9VGrBrg+B8MBAAAAAAB+69CmSR6Gx+bjj14D8F3SNQAAAAAAwGdOufqYxDetAa5PugYAAAAAAPjYoZ1srE2uAW5DugYAAAAAAPhA175+2drkGuDGpGsAAAAAAIAPlGjdDz+bXAPczL72CwAAAAAAAMxS1ybDDLBE613yaHINcBNW1wAAAAAAAO95s7FudGuAG5KuAQAAAAAAzpxPrgG4JekaAAAAAADgzDhXvyS9yTXAbUnXAAAAAAAAU+PJdayuAe5BugYAAAAAAJgat+pjkuTJ5BrgtqRrAAAAAACAEZNrgBqkawAAAAAAgBGTa4AapGsAAAAAAICByTVAJdI1AAAAAADAwOQaoBLpGgAAAAAAIElyaNMkD8OjyTXAHUnXAAAAAAAAg1OuNrkGuC/pGgAAAAAAIHluJxtrk2uA+5KuAQAAAACAzeuGbt0njck1QAXSNQAAAAAAsHlvNtY7k2uAe5OuAQAAAACAbevaZGgmzTC8NrkGuC/pGgAAAAAA2Lbx5Pol6ZNH3Rrg3qRrAAAAAABgw8aT65xdDgfgXqRrAAAAAABgw8at+pjEqXCAOqRrAAAAAABgq0yuAWZDugYAAAAAADbM5BpgHqRrAAAAAABgkw5tmqQZHk2uAaqSrgEAAAAAgK3aDena5BqgNukaAAAAAADYnud2srE2uQaoTboGAAAAAAA2phu6dZ80JtcAsyBdAwAAAAAAG/NmY70zuQaoT7oGAAAAAAC2pGuToZD0yTFpTK4B6pOuAQAAAACALRlPrvukTx51a4D6pGsAAAAAAGAzxpPrJE29NwFgSroGAAAAAAA2Yzy5PiZxKhxgLqRrAAAAAABgGw5nk+v+418G4L6kawAAAAAAYDNOYcTkGmBmpGsAAAAAAGADntvJxtrkGmBmpGsAAAAAAGDtuqFblz9NrgHmR7oGAAAAAADWbryxbkyuAeZoX/sFAAAAAAAAbqlrk2HNV6L1Lnk0uQaYF6trAAAAAABg1cYb65ek160B5ki6BgAAAAAA1ms8uY5T4QDzJV0DAAAAAACrdmrVxyTJk8k1wBxJ1wAAAAAAwEod2jRJMzyaXAPMmHQNAAAAAACsUdemT3ZDuja5Bpg36RoAAAAAAFijZsjVp0eTa4AZk64BAAAAAIDV6dok2SX9sLpuTK4BZk26BgAAAAAAVufNxrpJfunWALMmXQMAAAAAAOtymlwXx49/E4DZkK4BAAAAAIB1GU+uS7d+NLkGmDvpGgAAAAAAWJHDdHL95nI4AHMlXQMAAAAAAOvy5lT4k8k1wAJI1wAAAAAAwFo8t5ONtck1wHJI1wAAAAAAwCp0Q7cuf5pcAyyKdA0AAAAAAKzCeGPdmFwDLMy+9gsAAAAAAAD8WNcmw2SvT/pklzyaXAMshtU1AAAAAACwfOONdUnXujXAokjXAAAAAADAwh1Gk+skTb03AeC7pGsAAAAAAGD5TsXjmCR5MrkGWBjpGgAAAAAAWLLn9r+nwjO9HA7AckjXAAAAAADAYnVDty5/mlwDLJZ0DQAAAAAALNZ4Y92YXAMs2L72CwAAAAAAAHxL1ybTr1zvkkeTa4BFsroGAAAAAACWabyxLqfCdWuAxZKuAQAAAACABTpMJ9dOhQMsnHQNAAAAAAAsTdemn54KT/Jkcg2wYNI1AAAAAACwNM2Qq0+PJtcACyddAwAAAAAAi9INp8L7UcM2uQZYOOkaAAAAAABYlDcb653JNcAaSNcAAAAAAMBynCbXxTFpTK4B1kC6BgAAAAAAFuW0sS6nwh91a4A1kK4BAAAAAICFOLRpkmZ4bJwKB1gP6RoAAAAAAFiCrs0x2Q3pukyunQoHWAvpGgAAAAAAWIKyse6Hn02uAdZlX/sFAAAAAAAAPtO1ybDIKwF75yvXAKtidQ0AAAAAAMzeeGNd0rVuDbAu0jUAAAAAADBvh9HkOsO3rgFYF+kaAAAAAACYsa59PQ9eHJMkTybXAGsjXQMAAAAAADPWDLn69Nh/+LsALJd0DQAAAAAAzFU3nArvRw3b5BpgjaRrAAAAAABgrt5srHcm1wCrJV0DAAAAAACzdJpcF8ekMbkGWC3pGgAAAAAAmKXx5LqcCn/UrQFWS7oGAAAAAADm57lNkofhsXEqHGDlpGsAAAAAAGBmujb9KFeXybVT4QCrJl0DAAAAAAAzM95YNybXAJuwr/0CAAAAAAAAI12bjMZ3x2TnK9cA62d1DQAAAAAAzMl4Y11OhevWABsgXQMAAAAAALPx3CbJw/DoVDjAZkjXAAAAAADAPHRt+lGuLpPrJ5NrgE2QrgEAAAAAgHkYb6wbk2uAbdnXfgEAAAAAAICka5PR5u6Y7HzlGmBDrK4BAAAAAIB5OG2sy6lw3RpgS6RrAAAAAACgtkP7eiG8cCocYHukawAAAAAAoKqufT0PXtJ1mVw/mVwDbIt0DQAAAAAAVFU21v3ws8k1wCbta78AAAAAAACwYV2bDFO7ErB3vnINsEVW1wAAAAAAQD3jjXVJ17o1wCZJ1wAAAAAAQCXPbZI8DI9NvTcBoDbpGgAAAAAAqKFr049W18ckyZPJNcBGSdcAAAAAAEAN41PhzfQRgO3Z134BAAAAAABge7o2GS3sjsnOV64BNs3qGgAAAAAAuLvxxrqcCtetAbZNugYAAAAAAO7ruU2Sh+HRqXAApGsAAAAAAOCuujb9KFeXyfWTyTXA1knXAAAAAADAHY031o3JNQCv9rVfAAAAAAAA2IxDm+NoWFd+9pVrAKyuAQAAAACAOymnwsfdOro1AK+kawAAAAAA4C6aIVefHp0KB2AgXQMAAAAAALfXtUmyS/pRw34yuQbglXQNAAAAAADc3puN9c7kGoAJ6RoAAAAAALixwzC5Lo5JY3INwIR0DQAAAAAA3FLX5jjt1kkedWsAJqRrAAAAAADglsqp8H76CABT0jUAAAAAAHAz3ehUeInWToUD8B7pGgAAAAAAuKXTxvolSfJLtwbgHdI1AAAAAABwG4c2TdIMj06FA/Ax6RoAAAAAALiBrs0x2Q3p+pjEqXAAPiRdAwAAAAAAN1A21v3ws8k1AL+1r/0CAAAAAADA6nRtMhrQlfn1o8k1AB+yugYAAAAAAK6qaycb63IqXLcG4LekawAAAAAA4KpKt36YPgLAb0nXAAAAAADA9ZxOhfdJM0yun0yuAfiEdA0AAAAAAFzPm431zuQagItI1wAAAAAAwJUchsl1cUwak2sALiJdAwAAAAAA19C1OU67dZJH3RqAi0jXAAAAAADANZRT4f3wc+NUOABfsK/9AgAAAAAAwPJ1o1PhJWDvTK4B+AKrawAAAAAA4Ge6drKxLulatwbgK6RrAAAAAADgZ0q3fhg9AsAXSdcAAAAAAMAPnE6Fl9X1MUnyZHINwNdI1wAAAAAAwA+MT4U300cAuNi+9gsAAAAAAACLdWhzHA3lys++cg3A11ldAwAAAAAA39Kddevo1gB8k3QNAAAAAAB8S7kN3g8/OxUOwA84GA4AAAAAAHzd+FR4CdhOhQPwA1bXAAAAAADAF3Xta6suSrrWrQH4AekaAAAAAAD4omb4svXpEQB+RroGAAAAAAC+omuTZJf0o4b9ZHINwI9I1wAAAAAAwBf1ww8vSTN6BIDv2td+AQAAAAAAYDme20moLt3a5BqAH7O6BgAAAAAALtO1r0fCy8etnQoH4HqkawAAAAAA4DLj2+CNU+EAXJOD4QAAAAAAwAUObY6jTVz5+dHkGoDrsLoGAAAAAAA+05116+jWAFyTdA0AAAAAAHym3Abvp48AcD0OhgMAAAAAAL/VtcmwhivFukn+aXINwDVZXQMAAAAAAB/r2snGumyvf+nWAFyZdA0AAAAAAHysdOuH0SMA3IB0DQAAAAAAfOB0KrxPmuSYJHkyuQbg+qRrAAAAAADgY6dT4S+ZXA4HgKva134BAAAAAABglp7bSagu3drkGoDbsLoGAAAAAADOdO3rkfDycWunwgG4MekaAAAAAAA4M74N3jgVDsDNORgOAAAAAABMHdocR/O38vOjyTUAN2R1DQAAAAAAjHRn3Tq6NQA3J10DAAAAAAAj5TZ4P/zsVDgAd+FgOAAAAAAAMHAqHIBKrK4BAAAAAIAkToUDUJN0DQAAAAAAJJmeCo9T4QDclXQNAAAAAAAkhzYZukEJ2E3yZHINwJ1I1wAAAAAAsHldm34UDUq6/qVbA3A/0jUAAAAAAGxeM3zZ+vQIAPclXQMAAAAAwLZ1w6nwftSwnQoH4L6kawAAAAAA2LCuTZP0w+NLJo8AcC/SNQAAAAAAbFgJ1Q/TR5NrAO5OugYAAAAAgK1yKhyA2ZCuAQAAAABgw8a3wXdOhQNQjXQNAAAAAACb9NymSZrh8Zg0JtcAVCNdAwAAAADA9nTt65Hwkq7LqfBH3RqAaqRrAAAAAADYpNNt8BKwnQoHoKp97RcAAAAAAADu67mdhOpjsjO5BqAy6RoAAAAAAFata1+vgpdpdfnPm09c69YA1CZdAwAAAADASp2idZ88DMV6nK6dCgdgNqRrAAAAAABYo65Nkj7ZTfv0bvQ7vVPhAMzF7vNfAQAAAAAAFqcZ/fmRPnm5x7sAwKesrgEAAAAAYHXK5PrT/Vr/WdsGgHuxugYAAAAAgNW58AvWKgEAs+H/KAEAAAAAwBpdWACsrgGYB+kaAAAAAABWR5AGYGmkawAAAAAAAAAqk64BAAAAAGB1esNrABZGugYAAAAAgDV6uezX+tu+BQBcSLoGAAAAAIDVuXB1fbz5iwDAhaRrAAAAAABYnac/k88W1aVbW10DMA/SNQAAAAAArFT/zk+vTnvrErkBoLZ97RcAAAAAAACu7dDmONqv9dN43SRN0uvWAMyIdA0AAAAAAOvSDd265Opj3n74WrQGYH6kawAAAAAAWJdmNLM2sAZgIaRrAAAAAABYkTenwsvPj7o1AHO3+/xXAAAAAACARejOunV0awCWQboGAAAAAIC1ePdUOAAsgYPhAAAAAACwCs9teqfCAVgqq2sAAAAAAFi+rk2fNMOjU+EALI10DQAAAAAAq3C6De5UOAAL5GA4AAAAAAAsXDkVfuJUOAALZHUNAAAAAABLdjoVXq6FOxUOwDJJ1wAAAAAAsHBOhQOwfA6GAwAAAADAYjkVDsBaWF0DAAAAAMAyORUOwIpI1wAAAAAAsFhOhQOwFg6GAwAAAADAAjkVDsC6WF0DAAAAAMDSOBUOwOpI1wAAAAAAsChdO7kN7lQ4AKvgYDgAAAAAACxKCdUPQ652KhyAVbC6BgAAAACA5ejaJNnl9WC4U+EArIV0DQAAAAAAC/HmVPiLU+EArId0DQAAAAAAC3E6FT5+fDK5BmANpGsAAAAAAFiCw3unwnVrANZCugYAAAAAgNnr2hxH/099p8IBWB3pGgAAAAAAZq+E6n76aHINwIpI1wAAAAAAMG+nU+EZAnajWwOwNtI1AAAAAADM2JtT4SVd/9KtAVgb6RoAAAAAAGbs/FQ4AKyRdA0AAAAAAHM1PhUep8IBWDPpGgAAAAAAZunNqfBjEqfCAVgt6RoAAAAAAObqdCq8GS6HA8BK7Wu/AAAAAAAAcOa5nYTqMr9+NLkGYLWsrgEAAAAAYGa69vWz1k2S4VS4bg3AqknXAAAAAAAwJ107uQ3uVDgA2+BgOAAAAAAAzEkJ1Q9DrnYqHIBtsLoGAAAAAIDZOLRJssvrwXCnwgHYDOkaAAAAAADmoWtfN9bFi1PhAGyIdA0AAAAAAPNQQnU/fXwyuQZgE6RrAAAAAACYgdOp8CT9cCpctwZgM6RrAAAAAACo7c2p8H70JwBsg3QNAAAAAAAz8OZUeEyuAdiWfe0XAAAAAACAbXtuJwPrPmmSf+rWAGyL1TUAAAAAANTTta+tuiytyyeuf+nWAGyOdA0AAAAAAJV0bZrpnfDGJ64B2CgHwwEAAAAAoJISqh+GXH1MdsmjyTUAW2R1DQAAAAAANRzaJNmNunV0awC2S7oGAAAAAIC769rXjXVRurVT4QBsmHQNAAAAAAB3V06Fj79yneTJ5BqA7ZKuAQAAAADgvk6nwpP0w+RatwZg26RrAAAAAAC4ozenwvvRnwCwYdI1AAAAAADc1+lUeONUOAC82td+AQAAAAAA2IzndjKwLvPrR90aAKyuAQAAAADgPro2/WhpXT5xrVsDQBLpGgAAAAAA7qFr04y+aV0Ctk9cA8DAwXAAAAAAALi9EqofhlztVDgATFldAwAAAADAjR3aJNnl9WC4U+EAcEa6BgAAAACAW+ra14118eJUOAC8Q7oGAAAAAIBbKqG6nz4+mVwDwIRvXQMAAAAAwM08t+mHHVmp103yT90aAN6yugYAAAAAgNvo2tePWxdle/1LtwaAd0jXAAAAAABwA107+aZ1M2rYAMAZB8MBAAAAAOAGSrd+GOr1MdkljybXAPA+q2sAAAAAALi2Q5sku7weDD8m0a0B4HekawAAAAAA/p+9e8ttHNm2KLqodLvs4ybdlkSTCKlfSd4PKliUH2nZlsTXGCgQIaUL4Lcmdmxuqi3nGevB31zcHA4AfES6BgAAAACAW+svt1z3yauRawD4F7uuAQAAAADgdo7lv2g9HJrkf7o1AHxBugYAAAAAgBtpy3m59WBI17o1AFzBheEAAAAAAHALbbnYad1MGjYA8OFsG0QAACAASURBVBVT1wAAAAAAcAtDt/5T63WXHJJnI9cAcBVT1wAAAAAA8GunkiSHnC8M75Lo1gDwDdI1AAAAAAD8TlvOM9aDv7m4ORwAuIJ0DQAAAAAAv9Zfbrnuk1cj1wDwDXZdAwAAAADALxzLxYD1cGH4/3RrAPgeU9cAAAAAAPBTbTm36iZJXXH9olsDwLdJ1wAAAAAA8CNtSS7vCbfiGgB+yoXhAAAAAADwI0OoHmfEuuSQPBu5BoCfMHUNAAAAAADfdypJ/ZW9r1eF69YA8FPSNQAAAAAAfFNbzjPWg37yBAB+RLoGAAAAAIDvaMv5qvChVQ8rrpO8GrkGgJ+z6xoAAAAAAL5j6NZ/arq24hoAbsHUNQAAAAAAXG1ccd0njRXXAHAz0jUAAAAAAFznzYrrv3UCGwD4NekaAAAAAACu1k9a9dCtrbgGgFuw6xoAAAAAAK5wLBcD1sOF4f/TrQHgNkxdAwAAAADAV4YV103SJKkrrl90awC4GekaAAAAAAD+aVhx3dSPjRXXAHB7LgwHAAAAAIB/ai5XXPfJIXk2cg0At2TqGgAAAAAAPncsSf01fQzYujUA3Jp0DQAAAAAAn2hL+slV4UO6tuIaAO5AugYAAAAAgI+0JZncE95MGjYAcGt2XQMAAAAAwEeautZ60FlxDQB3ZOoaAAAAAADeOV2uuO6S6NYAcEfSNQAAAAAAXGrLecZ60E+eAMB9SNcAAAAAADDRlvNV4UOrHldcvxq5BoA7susaAAAAAAAmhm79p6ZrK64B4CFMXQMAAAAAQDWuuO6TxoprAHgc6RoAAAAAAJK8W3H9t05gAwD3J10DAAAAAMAnK657K64B4EHsugYAAAAAACuuAWBmpq4BAAAAANi96YrrWHENADOQrgEAAAAA2Lc3K66Hbm3FNQA8lnQNAAAAAMCOtSWZrLhO0iSx4hoAHk26BgAAAABgx5rJM0mfNLo1AMxAugYAAAAAYK/GFddDuh6uCn/RrQFgBtI1AAAAAAC7ZMU1ACyJdA0AAAAAwP5YcQ0ACyNdAwAAAACwP1ZcA8DCSNcAAAAAAOyMFdcAsDzSNQAAAAAAe2LFNQAsknQNAAAAAMBuWHENAEslXQMAAAAAsBtWXAPAUknXAAAAAADsgxXXALBg0jUAAAAAADtgxTUALJt0DQAAAADA1rUljRXXALBo0jUAAAAAAFs3dOs/9aMV1wCwPNI1AAAAAACbNq64Hoq1FdcAsEjSNQAAAAAA2/VmxfXfOoENACyMdA0AAAAAwEa9WXHd1G7tqnAAWJ6nuV8AAAAAAADuY1xxPaTrYfz6WbcGgCUydQ0AAAAAwBYdP1pxrVsDwFJJ1wAAAAAAbE5bzsV6YMU1ACyedA0AAAAAwLa0JZmEaiuuAWAN7LoGAAAAAGBbhlA9jm5ZcQ0Aa2DqGgAAAACADRlXXCfprbgGgNWQrgEAAAAA2IpTSSYrrvvJEwBYNukaAAAAAIBNaEu6Sbdu6tmKawBYA7uuAQAAAADYin4yY91bcQ0AayJdAwAAAACwfsdyEa2TNLo1AKyJC8MBAAAAAFi5ccX1cEP4MHv9olsDwJpI1wAAAAAArNlnK64BgFVxYTgAAAAAAKvVlsSKawDYAlPXAAAAAACsVjN5pgZs3RoAVki6BgAAAABgnYYV14earrskVlwDwFpJ1wAAAAAArNCw4nr8kXvo1v2nfw4ALJx0DQAAAADA2rxZcd3UwetXI9cAsFZPc78AAAAAAAB8U5P0lyPXByuuAWDdTF0DAAAAALAqx7riOklfrwrXrQFg5aRrAAAAAADW41SSej146oXhVlwDwPpJ1wAAAAAArERb0k26tRXXALAhdl0DAAAAALAGbUmSfjJj3VtxDQDbYeoaAAAAAIA1aCbPMWDr1gCwFdI1AAAAAACLN6y4Plym6xfdGgC2Q7oGAAAAAGDZhhXX4+/Z3ZzvAgDciXQNAAAAAMCCvVlx3dTB61cj1wCwKU9zvwAAAAAAAHxlOnJ9sOIaADZIugYAAAAAYKmO5TxsnTp43ejWALBNLgwHAAAAAGCRTiWZ3BDeT54AwOZI1wAAAAAALE9b0tVoHSuuAWD7XBgOAAAAAMDCtCVNvSF80FtxDQAbZ+oaAAAAAICFGbr1n/pxCNi6NQBsmnQNAAAAAMCSHEuSHJI+aZIuSfKiWwPAxknXAAAAAAAsxqkkkxXXf+sENgCwddI1AAAAAADL0JZ0k27d1G79auQaALbvae4XAAAAAACApC1J0k9mrPvkYMU1AOyFqWsAAAAAABagmTzHgK1bA8BuSNcAAAAAAMxtWHF9uEzXL7o1AOyIdA0AAAAAwKyGFdfjz9XdnO8CAMxFugYAAAAAYD5vVlw3dfD61cg1AOzL09wvAAAAAADAXg3dOpcj1wcrrgFgj0xdAwAAAAAwk2by7OtV4bo1AOySdA0AAAAAwBxOJUkOk3Q9PgGA/ZGuAQAAAAB4uLac7wYfdPVgxTUA7JV0DQAAAADAYw0rrvs6Y93UwWvdGgB27GnuFwAAAAAAYJemI9cHK64BYO+kawAAAAAAHuhY/ltoPQxeN7o1AODCcAAAAAAAHuZUkskN4f3kCQDsm3QNAAAAAMBDtCVdjdax4hoAuODCcAAAAAAA7q8tSb0hfNBbcQ0A/MfUNQAAAAAAjzL+Jj0EbN0aAKhMXQMAAAAAcGfHcjFs3SdN8qJbAwD/MXUNAAAAAMA9nUoy2WzdT54AAJV0DQAAAADA3bQlXY3WSbp6eDVyDQBckK4BAAAAALiPtiT1hvBMBq91awDgHbuuAQAAAAC4g6FbZzJC1SWH5Fm3BgA+IF0DAAAAAPBrp/J2fXXfp2/+22/dJ41uDQB8SroGAAAAAOAXhunqYaJ6rNdNkiZNf74ifPi+/+h/BwBIYtc1AAAAAAC30b8/N0nSWXENAHxNugYAAAAA4KeOJU3O/33mz+NeBwBYLxeGAwAAAADwC/+I1oNx0TUAwOdMXQMAAAAA8AvXNGmD1wDAV6RrAAAAAAB+of/6T0xdAwBfkq4BAAAAAAAAmJl0DQAAAADAT10zcg0AcAXpGgAAAACAn2quq9duCwcAviJdAwAAAADwC1/+zNzYdQ0AfE26BgAAAADgF76cuv6b9Mnz/z3iZQCA1ZKuAQAAAAD4kVP5+m+6JFZiAwBfk64BAAAAAPi+tqSbXAPe1Eqdj755NXINAHxBugYAAAAA4JvakiR9Hacet1lPp6vHsK1bAwBXeJr7BQAAAAAAWJW23hM+zkZ1ySF5kagBgJ8zdQ0AAAAAwHc0k2dfbwV/1q0BgF+RrgEAAAAAuNqxJMlhkq5zeU84AMCPSNcAAAAAAFznVJIarVPnrWObNQBwA9I1AAAAAABXaEu6Sbdu6lm3BgBu4WnuFwAAAAAAYPHakiT95G7wPjlYcQ0A3IypawAAAAAA/mno1pn8ojwEbN0aALgd6RoAAAAAgH9qJs++rrh+0a0BgFuSrgEAAAAA+NyxJMlhkq4zuTYcAOBGpGsAAAAAAD5xKkmN1qnz1klejVwDADcmXQMAAAAA8JG2pJt066aedWsA4A6e5n4BAAAAAACWpy1J0k/uBu+TQ/KsWwMAd2HqGgAAAACAS0O3zuQn5CFg69YAwN1I1wAAAAAAXGomz76uuH7RrQGAO5KuAQAAAACYOJYkOUzSdSbXhgMA3Id0DQAAAABAdSpJjdap89ZJXo1cAwD3JV0DAAAAAJAkaUu6Sbdu6lm3BgDu72nuFwAAAAAAYAHakiT95G7wPjkkz7o1APAIpq4BAAAAAHZv6NaZ/GY8BGzdGgB4FOkaAAAAAGD3msmzryuuX3RrAOBxpGsAAAAAgH07liQ5TNJ1JteGAwA8hHQNAAAAALBjp5LUaJ06b53k1cg1APBQ0jUAAAAAwF61Jd2kWzf1rFsDAA/3NPcLAAAAAAAwh7YkST+5G7xPDsmzbg0AzMDUNQAAAADA/gzdOpMfiYeArVsDADORrgEAAAAA9qeZPPu64vpFtwYAZiNdAwAAAADszLEkyWGSrjO5NhwAYA7SNQAAAADAnpxKUqN16rx1klcj1wDAnKRrAAAAAIDdOJX0k27d1LNuDQDM7WnuFwAAAAAA4CHaki451LvBm6RPDsmzbg0AzM/UNQAAAADADrQlSfrJTuth/Fq3BgCWQboGAAAAANi6oVun/iQ8BmzdGgBYDOkaAAAAAGDrmsmzr/+96NYAwIJI1wAAAAAAm3YsSXKYpGsAgOWRrgEAAAAAtutUkhqtk3T18GrkGgBYFukaAAAAAGCj2pJu0q2betatAYDleZr7BQAAAAAAuIO2JHWt9aBPDsmzbg0ALJGpawAAAACAzWnLecB6/A14CNi6NQCwVNI1AAAAAMC2jPPWf3I+DCuuX3RrAGC5pGsAAAAAgG1p6rOvz0yuDQcAWCTpGgAAAABgQ44lSQ41YP+th1cj1wDAoknXAAAAAABbcSpJbdWp94T3ujUAsALSNQAAAADAJrQl3aRbN+atAYA1eZr7BQAAAAAA+LW2JEk/2WndJ4fkWbcGANbB1DUAAAAAwMq15Txg/eYXX90aAFgP6RoAAAAAYM3Gees/OR+GwesX3RoAWBPpGgAAAABgzZr67Cf/6dYAwNpI1wAAAAAAq3UsSXKoAbv/5x8DACyYdA0AAAAAsE6nktRonaSrh1cj1wDA+kjXAAAAAAArdCrpJ926qWfdGgBYp6e5XwAAAAAAgG9qS7rkUG8IHxZdH5Jn3RoAWCtT1wAAAAAAq9KWJOknm62H8WvdGgBYM+kaAAAAAGA9hm6dyY+7Q8DWrQGAlZOuAQAAAADWZlhr3SddkuRFtwYAVs+uawAAAACAlTiW/5Zbp85b95/+OQDAikjXAAAAAABrcCxJjdap89ZJXo1cAwBb4MJwAAAAAIDFO5WLj7o1ALA50jUAAAAAwLKdSvrJvHVTz7o1ALAhLgwHAAAAAFiwtqRLDpOd1n1ySJ51awBgU0xdAwAAAAAsVVuSpJ9064FuDQBsjnQNAAAAALBIbd1vPf6OOwTsF90aANgg6RoAAAAAYMGGtdZ90iXRrQGAzbLrGgAAAABgeY7lPGM9puu8uzYcAGBDpGsAAAAAgIU5lqRG69R56ySvRq4BgM1yYTgAAAAAwJKcysVH3RoA2AfpGgAAAABgMU4l/WTeuqln3RoA2DoXhgMAAAAALENb0iWH/Lfluk8OybNuDQBsn6lrAAAAAIAFaEuS9LVbD+dGtwYA9kK6BgAAAACYW1vOF4OPP9kOAVu3BgB2Q7oGAAAAAJjVOG/9J+dDlyR50a0BgB2RrgEAAAAAZtXUZz+5MLz/1/8BALA90jUAAAAAwHyOJUkONWCPxfrVyDUAsC/SNQAAAADATIZu3dSPXT3o1gDA/kjXAAAAAABzOJWLj01t2Lo1ALBLT3O/AAAAAADA/pxK+rrfOvVwSJ51awBgp0xdAwAAAAA8VlvSTbp1cs7YujUAsGPSNQAAAADAA7UlSfpJtx7o1gDAvknXAAAAAACP0tb91uNPs0PAftGtAYC9k64BAAAAAB7iTbfuky6Jbg0AkEjXAAAAAACPMHbrJsnkwvD+k78HANgZ6RoAAAAA4P6a+hzT9eDVyDUAQCJdAwAAAADc3bEkyaF2665+r1sDAFTSNQAAAADAPQ3duqkfdWsAgI9I1wAAAAAAd3MqFx/HC8N1awCAS09zvwAAAAAAwEadSvqkqZuth8MhedatAQDeMnUNAAAAAHAHbUk36dbJOWPr1gAAH5GuAQAAAABurS1J0k+69UC3BgD4hHQNAAAAAHBTbd1vPf7+OgTsF90aAOBT0jUAAAAAwO286dZ90iXRrQEAviBdAwAAAADcyNitmySTC8P7T/4eAIBKugYAAAAAuJGmPsd0PXg1cg0A8AXpGgAAAADgFo4lSQ61W3f1e90aAOAK0jUAAAAAwK8N3bqpH3VrAIBvkq4BAAAAAH7nVC4+jheG69YAAFd7mvsFAAAAAADW7FTSJ03dbD0cDsmzbg0A8A2mrgEAAAAAfurDbt3o1gAA3yZdAwAAAAD8SFvSTbp1dGsAgJ+TrgEAAAAAvq8tSdJPuvVAtwYA+BHpGgAAAADgm4ZunckvrEPAftGtAQB+SLoGAAAAAPiON926T7okujUAwK9I1wAAAAAAVxu7dZNkcmF4/8nfAwBwHekaAAAAAOA60249/DcW61cj1wAAvyJdAwAAAABcp6nP4fC3HnRrAIBfk64BAAAAAK5wLElyqLl62G/d69YAALchXQMAAAAAfGXo1k392NWDbg0AcCPSNQAAAADAP53KxcfGPeEAALf3NPcLAAAAAAAs2KmkT5qkT1IPh+RZtwYAuCVT1wAAAAAAn/iwWze6NQDA7UnXAAAAAAAfedOto1sDANyRdA0AAAAA8E5b0l1264FuDQBwH9I1AAAAAMCltiRJ/65bv+jWAAD3Il0DAAAAAEwM3TqTX0+HgK1bAwDck3QNAAAAAFC1JU2S+tNpn3RJdGsAgLuTrgEAAAAAkkzuCf+T86GvBwAA7ky6BgAAAACY3BPe1Gg9FutXI9cAAHcnXQMAAAAAuzft1sOF4bo1AMBjSdcAAAAAwO419Tkcuvq9bg0A8CjSNQAAAACwb8eSJAfdGgBgTtI1AAAAALBjQ7du6kfdGgBgJtI1AAAAALBXx3LxcbwwXLcGAHi4p7lfAAAAAABgDqeSfvKxSfrkkDzr1gAAMzB1DQAAAADsz9Ctx3vCh27d6NYAALORrgEAAACAnRm79TB1rVsDACyAdA0AAAAA7Mmbbh3dGgBgEaRrAAAAAGA33nfrgW4NADA36RoAAAAA2Ie2pPuoW7/o1gAA85OuAQAAAIAdaEuS9Lo1AMBCSdcAAAAAwNYN3TqTH0SHgK1bAwAshnQNAAAAAGzam27dJ10S3RoAYFmkawAAAABgu953674eAABYEukaAAAAANioz7p1klcj1wAAyyJdAwAAAABbNHbrJoluDQCwdNI1AAAAALA50249puuBbg0AsEhPc78AAAAAAMBPteVcppvL74cZ67Fbd/V73RoAYKlMXQMAAAAA6zSMVk8Tderh0OjWAADrIl0DAAAAACs0Xgk+/MY53gc+HPpetwYAWBfpGgAAAABYofN09Vd/NPyZbg0AsHjSNQAAAACwNsPI9de/bvZf/gUAAAshXQMAAAAAK3RllRavAQBWQroGAAAAAAAAYGbSNQAAAAAAAAAzk64BAAAAAAAAmJl0DQAAAAAAAMDMpGsAAAAAYIWa/ro/u/NrAABwI9I1AAAAALA2f5Im6f9Zr/ukS5K8/t9D3gkAgF95mvsFAAAAAAC+41TSJ81X89T95AkAwOKZugYAAAAA1uPcrSdNepyuHnU5/02MXAMArIapawAAAABgJd5360EzadXjH4jWAACrIl0DAAAAAGvwWbf+n0QNALAFLgwHAAAAABavLek+6tYvujUAwEZI1wAAAADAsrUlSXrdGgBgy6RrAAAAAGDBhm6dd79l6tYAANsiXQMAAAAAS/W+Ww+D17o1AMDmSNcAAAAAwCK96dZ90iXRrQEAtkm6BgAAAACW53237usBAIAtkq4BAAAAgIX5rFsneTVyDQCwTdI1AAAAALAkujUAwC5J1wAAAADAYujWAAB7JV0DAAAAAMugWwMA7Jh0DQAAAAAsgG4NALBv0jUAAAAAMDfdGgBg96RrAAAAAGBWujUAANI1AAAAADAn3RoAgCTSNQAAAAAwm7FbN0l0awCAXZOuAQAAAIA5TLt1o1sDAOyddA0AAAAAPJxuDQDAJekaAAAAAHgs3RoAgHekawAAAADggd506+jWAAAk0jUAAAAA8Djvu3VX/0m3BgDYN+kaAAAAAHgI3RoAgM9J1wAAAADA/enWAAD8k3QNAAAAANyZbg0AwFekawAAAADgnnRrAACuIF0DAAAAAHejWwMAcB3pGgAAAAC4D90aAICrSdcAAAAAwB3o1gAAfId0DQAAAADcmm4NAMA3SdcAAAAAwE3p1gAAfJ90DQAAAADcjm4NAMCPSNcAAAAAwI3o1gAA/JR0DQAAAADcgm4NAMAvSNcAAAAAwK/p1gAA/I50DQAAAAD8TlvOuXro1r1uDQDAt0nXAAAAAMAvDPPWffKnduu+/pNuDQDA1aRrAAAAAOCnxnvCDzVa69YAAPyIdA0AAAAA/Mi0W0e3BgDgV6RrAAAAAOD7dGsAAG5KugYAAAAAvkm3BgDg1qRrAAAAAOA7dGsAAO5AugYAAAAArqZbAwBwH9I1AAAAAHAd3RoAgLuRrgEAAACAK+jWAADck3QNAAAAAHxFtwYA4M6kawAAAADgn3RrAADuT7oGAAAAAD6nWwMA8BDSNQAAAADwiVNJk0S3BgDg7p7mfgEAAAAAYJFOJX1ymORq3RoAgLsxdQ0AAAAAvDN06+ayWw8T2Lo1AAB3YOoaAAAAALj0vlsnaZIX0RoAgHsxdQ0AAAAATHzYraNbAwBwX9I1AAAAAFDp1gAAzES6BgAAAACS6NYAAMxJugYAAAAAkqNuDQDAnKRrAAAAANi9YzkfdGsAAGYiXQMAAADAvo3detDUg24NAMADPc39AgAAAADAfN536+Ha8GfdGgCAhzJ1DQAAAAB7pVsDALAY0jUAAAAA7JJuDQDAkrgwHAAAAAB2pi3/heqBbg0AwNxMXQMAAADAnrQl0a0BAFgc6RoAAAAAdqOtl4SP3bpLOt0aAID5SdcAAAAAsA/Tbj2k6y5J0uvWAADMT7oGAAAAgB34rFsnedWtAQCYn3QNAAAAAFunWwMAsHjSNQAAAABsmm4NAMAaPM39AgAAAADA3Yzdephh6ZO+/pNuDQDAkpi6BgAAAICN0q0BAFgP6RoAAAAAtki3BgBgVaRrAAAAANicUzmvtdatAQBYCbuuAQAAAGBbTiV9cqi5WrcGAGANTF0DAAAAwIYM3bqZ5GrdGgCANZCuAQAAAGArPuzWw83hujUAAMvmwnAAAAAA2ITju26dpEleRGsAAFbA1DUAAAAArN+xnA/95fe6NQAAKyFdAwAAAMDKjd160NSDbg0AwHq4MBwAAAAA1ux9tx6uDX/WrQEAWBPpGgAAAADWqS1JDdUD3RoAgNVyYTgAAAAArFBb3n6jWwMAsGbSNQAAAACszditmzpy3SWdbg0AwIpJ1wAAAACwKh926yS9bg0AwIpJ1wAAAACwHp916ySvujUAACsmXQMAAADASozd+lDTtW4NAMBWSNcAAAAAsAbTbp2kT/7WwWvdGgCA9ZOuAQAAAGDxTuVcqcdu3deDbg0AwCY8zf0CAAAAAMA/nUr65DDJ1X39J90aAICtMHUNAAAAAAs2dOtmkqtHujUAABti6hoAAAAAlur4Ubdukv+J1gAAbI2pawAAAABYpGM5H97MW7/o1gAAbJB0DQAAAADLM3brQVMPujUAABvlwnAAAAAAWJK2JDnfEz5o6sdn3RoAgM0ydQ0AAAAAi9GWt9/o1gAA7IN0DQAAAADLMHbrpo5cd0mnWwMAsAvSNQAAAAAswIfdOkmvWwMAsAt2XQMAAADA3MZuPU6adPXwqlsDALALpq4BAAAAYFanch6zHn6r63VrAAD2yNQ1AAAAAMznVNInh6RPkvT1EN0aAIB9MXUNAAAAADMZunUzydW6NQAAeyVdAwAAAMAcjh916+HmcN0aAID9cWE4AAAAADzcsZwP/eTLJnkRrQEA2CnpGgAAAAAeqC3nSevm3T/p1gAA7JgLwwEAAADgUdqSXHbr8aBbAwCwb6auAQAAAOAh2npJ+LRbDxn7WbcGAGDvTF0DAAAAwP0N94QnaWq67pJOtwYAgDPpGgAAAADubLwn/M+kWw/f6NYAAJBEugYAAACA+zrVeetD0id97dZJXnVrAAA4s+saAAAAAO7mVNLXaJ2arge6NQAATJi6BgAAAID7GLp1M8nVujUAAHxCugYAAACAOzh+1K2Hm8N1awAAeMeF4QAAAABwa8dyPvSTL5vkRbQGAICPSdcAAAAAcDttSSYD1pkMXuvWAADwOekaAAAAAG6kLW+/aWrGftatAQDgX+y6BgAAAIBbaMt50rqpI9dd0unWAABwFekaAAAAAH5tvCf8z6RbD9/o1gAAcAXpGgAAAAB+51TnrQ9Jn/S1Wyd51a0BAOAqdl0DAAAAwC+cSvoarVPT9UC3BgCAq5m6BgAAAICfOpb0STPJ1bo1AAD8iHQNAAAAAD9yLOfDtFsPN4fr1gAA8E0uDAcAAACAb2rLedK6ufy+SV5EawAA+AlT1wAAAADwHW1JLrv1eNCtAQDgp6RrAAAAALjaMG+dy27dm7cGAIDfkq4BAAAA4DrjvPWfmq67pEua5Fm3BgCAX5GuAQAAAOAKpzpvfUj6pE+6JEmvWwMAwA08zf0CAAAAALB4p5K+RuvUdD141a0BAOAGTF0DAAAAwD8dy3mb9ZirdWsAALg1U9cAAAAA8Im2nIv1m249fNStAQDgdqRrAAAAAPhIW5Kc7wkfjBn7RbQGAIAbk64BAAAA4J2hWydp8t9h6NbPujUAANyeXdcAAAAAcGnarYd03SWdbg0AAHckXQMAAADAxKmcc/Vh0q2T9Lo1AADckQvDAQAAAKA6lfNy6z5J0tdDklfdGgAA7sjUNQAAAAAkSY7lvM16zNW6NQAAPIqpawAAAAB2ry3nYv2mWw8fdWsAALg/6RoAAACAfWtLkvM94VNN8iJaAwDAg0jXAAAAAOzAMFednJ/95NBPvs9k8Fq3BgCAB7LrGgAAAICtO07uAx+8/zicu6Qzbw0AADMwdQ0AAADAph1LMonTo7Fej9PYf5MkffKsWwMAwKOZugYAAABgu9pyvv373/rkb23Yr7o1AADMQLoGAAAAYLvGxdVf6JM+vW4NAACzj16ldwAAIABJREFUka4BAAAA2LQ/1/xRk0a3BgCAOUnXAAAAAGzXlVPXTd6twgYAAB5KugYAAAAA5RoAAGYmXQMAAAAAAAAwM+kaAAAAgE27cpz6mnvFAQCAu5GuAQAAANi0a5p0d/e3AAAA/u1p7hcAAAAAgDtoS5qkv27qujF1DQAAMzN1DQAAAMDmtCV5163/0bCb5PX/7vxOAADAv0jXAAAAAGzL0K0zadXD4X3J7uqw9YtuDQAAM5OuAQAAANiQUzn36UMN1V3SJc27W8G7+o1uDQAAC2DXNQAAAABbcSrpk0NN1P3k8KxPAwDAopm6BgAAAGATjuV8Jfg4Wj0e7LEGAIDFM3UNAAAAwMq15Vys33Tr4aNuDQAAayBdAwAAALBmbUlyvid8MGZsS6wBAGA9pGsAAAAAVmvo1kma/HcYurXl1gAAsCp2XQMAAACwTqdyLtaHmq67pNOtAQBglUxdAwAAALBCx3K+JHxYbt1PDro1AACskHQNAAAAwKq05b9bwfv65Xh41a0BAGCVXBgOAAAAwHoMy637yXLr6UfdGgAAVsvUNQAAAAArMXTrTLr1OH79IloDAMC6mboGAAAAYA1O5VysDzVdd0mnWwMAwEaYugYAAABg8U4lfXKoO637yeFZtwYAgC0wdQ0AAADAsh3L+Vbwvn4zHiy3BgCArTB1DQAAAMBSDcut33fr4aNuDQAAGyJdAwAAALBIbbko1qnF2nJrAADYIheGAwAA/8/enWW1rmXdGh0yf7lIinQqclUkAtfL0n0QSyzjBLNxoqT3doJmZO8Tft3xxZwTAKZnW7r1U9Ik0a0BAGDhpGsAAAAAJmbbpk82yabk6i7pkiZ51q0BAGCZLAwHAAAAYEo+2r3j1n2J1r1uDQAASyZdAwAAADAN722SvW496pM33RoAAJZMugYAAABgAt7b78V6PG79KloDAMDyuXUNAAAAwKNtS7d+SpokVbd+0a0BAGAVpGsAAAAAHmrbpk82yabk6q7ct3bcGgAAVsPCcAAAAAAe56PdO27dl2jd69YAALAu0jUAAAAAj/DeJtnr1qM+edOtAQBgXaRrAAAAAO5u6Na18bj1q2gNAABr5NY1AAAAAPe1bdMkSTb5fDEet37RrQEAYKVMXQMAAABwR8Nx60113Hp84bg1AACsmHQNAAAAwF28t19bwcfj1uMLx60BAGDdLAwHAAAA4PaG49Z92RA+GH/VrQEAYPVMXQMAAABwY0O3TtWtx/Frx60BAIAkpq4BAAAAuK1t+1msNyVdd0mnWwMAAHtMXQMAAABwMx9t+mRTblr31Ytn3RoAAPgiXQMAAABwA/Vx6748HF84bg0AAOyzMBwAAACAaxuPW4/G49bRrQEAgCNMXQMAAABwVds2XT73hA+a8qsl4QAAwAnSNQAAAADXc/S4daNbAwAAP5CuAQAAALiG9/ZrK/i349a9bg0AAPzArWsAAAAA/mw4bj1esx44bg0AAFzM1DUAAAAAfzMetx679Th+/SJaAwAAF5GuAQAAAPiDb8etm2TnuDUAAPBr0jUAAAAA/+TwuHWfdOVX3RoAAPgNt64BAAAA+L2jx60HvePWAADAr5m6BgAAAOCXzhy3fhWtAQCAfyFdAwAAAPAb345bpywJd9waAAD4A+kaAAAAgMscPW49vtCtAQCAP3DrGgAAAIALnDluHcetAQCAvzJ1DQAAAMBPHLcGAABuTLoGAAAA4CzHrQEAgNuTrgEAAAA4wXFrAADgXty6BgAAAOAYx60BAIA7MnUNAAAAwAHHrQEAgPuSrgEAAADY57g1AABwd9I1AAAAAIXj1gAAwIO4dQ0AAABAkv1ufchxawAA4JZMXQMAAABQHbd+KmPWjlsDAAB3JF0DAAAArF593HrI1TvHrQEAgLuSrgEAAABW7PC4dUq3dtwaAAC4I7euAQAAANbqvU0OjluPGdtxawAA4I5MXQMAAACs0njcehxtGMevX0RrAADg3qRrAAAAgJUZloR35bh1qhPXjlsDAAAPYmE4AAAAwJrUS8LH49ZjwNatAQCAB5GuAQAAAFZj236etR6PWzfVrWvHrQEAgMexMBwAAABgHT7az8vW47B1Z0k4AAAwFdI1AAAAwNINx63rJeG9JeEAAMC0WBgOAAAAsGh1tz5kSTgAADANpq4BAAAAlmvbpkv65KmMWY8Z+1W0BgAAJkS6BgAAAFiiYdi6K8eth1y9c9waAACYKAvDAQAAABbnvU32j1undGvHrQEAgEmSrgEAAACWZdt+nrWuj1uPGdtxawAAYJIsDAcAAABYkI82fVkSPuiSJmmSF9EaAACYLukaAAAAYBGG49b1kvC+evGqWwMAAJNmYTgAAADA/NXHrQ9ZEg4AAEyeqWsAAACAmdu26fK5J3wwjl8btgYAAGZCugYAAACYrWFJeFcdt+5LtN4kz7o1AAAwGxaGAwAAAMxTvSS8Lw/HgK1bAwAAsyJdAwAAAMzQtv08az0et26qW9eOWwMAAHNjYTgAAADArBwuCU/SWRIOAADMm6lrAAAAgPk4uiS8y+dD3RoAAJgt6RoAAABgJg6XhMeScAAAYCEsDAcAAACYg482/bEl4U3yIloDAACzJ10DAAAATNvhkvC+evGqWwMAAEtgYTgAAADAhI1Lwo+yJBwAAFgKU9cAAAAAU3W4JLwp49eGrQEAgGWRrgEAAACm5739qtT1kvAm2STPujUAALA0FoYDAAAATEx93PqbXrcGAACWydQ1AAAAwJQMS8L7auLAknAAAGAFpGsAAACAaaiXhA/z1paEAwAAq2FhOAAAAMAEHF0SPl651q0BAIClk64BAAAAHu2j/SzWh0vCk7zp1gAAwPJZGA4AAADwOJaEAwAAJDF1DQAAAPAwloQDAAAU0jUAAADAI1gSDgAAULEwHAAAAOC+LAkHAAA4YOoaAAAA4I4sCQcAADhGugYAAAC4F0vCAQAATrAwHAAAAOD26mFrS8IBAAAOmLoGAAAAuLFtu7cefGBJOAAAQEW6BgAAALiljzZ9skk2Zd7aknAAAIADFoYDAAAA3Ea9JHycsbYkHAAA4BhT1wAAAAA3cHRJ+MCScAAAgAOmrgEAAACu6r1Nk3TJpgxbp1oS/ipaAwAAHGHqGgAAAOB6DpeEJ+mSLmmSF90aAADgOOkaAAAA4ErGJeH1qvAxY1sSDgAAcJqF4QAAAAB/dnRJ+DBpbdgaAADgAqauAQAAAP5m6NaHS8KT9Lo1AADARaRrAAAAgD/4KN36qTwZM3aSN90aAADgIhaGAwAAAPyTeth6fLFLmmTjsjUAAMDvmLoGAAAA+L1tuzddPdiVhq1bAwAA/JJ0DQAAAPBLH236ZFP9Lyv1rWtLwgEAAH7PwnAAAACAi723SVWph9e9JeEAAAB/ZeoaAAAA4DLDkvCjLAkHAAD4G1PXAAAAAD95b9MkXbIpw9aploS/itYAAAB/ZeoaAAAA4KyhW9dLwpN0SZc0yYtuDQAAcAXSNQAAAMBpH6VbP1UPx4xtSTgAAMCVWBgOAAAAcEw9bD2+2JVfDVsDAABclalrAAAAgAPbqluPdqVh69YAAADXZuoaAAAAWJlt+3WyOuV8dZ+8/ZeUYesu2VSXrZty2Xr8GAAAAFclXQMAAACr8d4mp7P0/9qvI9abKmkPDzcuWwMAANyQheEAAADAOgzdetDvv7UZr1n36ZOngz/b69YAAAC3ZeoaAAAAWIdxnPrMB5p8nbjelV9fRWsAAICbM3UNAAAArMAwcn3+fwhpPv+TlG7dJy+6NQAAwD1I1wAAAMAKNAdLws9/cvj5plsDAADciYXhAAAAwDo8XVavd5aEAwAAPICpawAAAGAFLp+6zm8+CQAAwJVI1wAAAMAK9F9nrAEAAJgg6RoAAABYh92jvwAAAACnSdcAAADAClw+dW04GwAA4BGkawAAAGDp3tvPW9c/ZukuSfL2382/EgAAAPukawAAAGDRPkq3fkr60x9rSrc+8xkAAABu5v8e/QUAAAAAbuO9Tcqw9Th1PVy83uwPYQ/Ph88YuQYAAHgEU9cAAADAEm3bI+vBd+VFX/1M0unWAAAAD2bqGgAAAFiW4bJ1V0arB40+DQAAMGnSNQAAALAg2zZd0u936yFab5Jn0RoAAGCipGsAAABgEX4cttatAQAAJky6BgAAAOZv6Nb1sHWf9IatAQAAZmPz6C8AAAAA8DcfpVs/Hbxl2BoAAGAmTF0DAAAAs/XeJmW6uikvduXXV9EaAABgNkxdAwAAAPM0DFt/sysN+0W3BgAAmBNT1wAAAMDcjJeth+nqQZN0pVu/6dYAAAAzI10DAAAAs7Jt0yX9/i65IVpvXLYGAACYK+kaAAAAmIlh2LpLNklfHtbD1ro1AADAbEnXAAAAwBzUw9ZjtzZsDQAAsBTSNQAAADBtR4etU25dG7YGAABYBOkaAAAAmLChW9fD1n2J1k3yIloDAAAshHQNAAAATNIQrZP0ydP+vPXw8FW3BgAAWA7pGgAAAJieeti6KWPWuzJsLVoDAAAszubRXwAAAABg30fp1k/Vw11p2JaEAwAALJGpawAAAGAy3tukOmU9LAnvql/fdGsAAIBlkq4BAACAafho0x/ctO6SiNYAAADLJ10DAAAAj/Zt2HrQlHlr3RoAAGAFpGsAAADgobZtumPD1k2ySZ5FawAAgFWQrgEAAIAHeW8/R6s3Vbquh611awAAgNWQrgEAAIBHGIet625t2BoAAGCtpGsAAADgvgxbAwAAcEC6BgAAAO7IsDUAAADHSNcAAADAXRi2BgAA4DTpGgAAALg9w9YAAACcJV0DAAAAt3R02DpJb9gaAACAL9I1AAAAcDOHw9Z9idZN8iJaAwAA8Em6BgAAAG7g1LD1oE9edWsAAAC+SNcAAADAtZ0fthatAQAAOCBdAwAAANdj2BoAAIB/Il0DAAAAV2LYGgAAgH8lXQMAAAB/ZtgaAACAv5GuAQAAgL8xbA0AAMCfSdcAAADAvzJsDQAAwJVI1wAAAMA/MWwNAADA9UjXAAAAwC8ZtgYAAODapGsAAADgNw6HrZN0hq0BAAD4E+kaAAAAuMzRYeumdGvD1gAAAPyBdA0AAABc4Myw9SZ5Fq0BAAD4E+kaAAAAOOu9Tc4OW+vWAAAA/Jl0DQAAAJz20aYvxdqwNQAAADcjXQMAAADHDMPWfdIkTXlo2BoAAIDbkK4BAACAfe/tZ6vu958btgYAAOBmNo/+AgAAAMCUDN26L5V6aNjjE8PWAAAA3IapawAAACDJ/rD1k8vWAAAA3JWpawAAACDZttlUw9bjiWvD1gAAANyFqWsAAABYt2HYuks2+8PWu2Rj2BoAAIA7MXUNAAAAK7Zt90arhxdd9UK3BgAA4C5MXQMAAMAq1cPWffV8VzL2m2gNAADA/Zi6BgAAgPX5NmydpK+GrXVrAAAA7s7UNQAAAKzJe5scG7YeiNYAAAA8iHQNAAAAq/HRfh60TtWtu6RJmuRVtAYAAOBhpGsAAABYgfdqQ3hTHjalW/e6NQAAAA8mXQMAAMCiDdE6SZ88HQxbb5Jn0RoAAIDH2zz6CwAAAAA3s62Grcfj1uOTXrcGAABgKkxdAwAAwBINw9ZdVawHhq0BAACYJFPXAAAAsDj1sPU4ad0ZtgYAAGC6TF0DAADAgpwftu6TN9EaAACAKZKuAQAAYBGGaJ2k3+/WQ7RukhfRGgAAgOmyMBwAAADm773aED7+Xb/eGa5bAwAAMG2mrgEAAGDO6mHrp4Nh642z1gAAAMyDqWsAAACYre3+sHVfdoOPw9a6NQAAADNh6hoAAABmaBi27vbPWifZJRvD1gAAAMyPqWsAAACYm492b7Q6SZ905UmnWwMAADA/pq4BAABgPt6raN0cvNsnb6I1AAAAsyRdAwAAwBwM0TpJnzxVS8K7krFfRWsAAABmzMJwAAAAmLxtNWw9Hreud4a/6NYAAADMm6lrAAAAmLBh2LqrivWgKxnbWWsAAAAWQboGAACASao3hI/duq8OXfe6NQAAAMshXQMAAMD0vJcN4Zt8BuyUXJ2kT95EawAAABZFugYAAIApqYetn6ol4TaEAwAAsGibR38BAAAAoNiWYeumLAkfd4PbEA4AAMCimboGAACACXhvk6SrzloPdsnGsDUAAADLJ10DAADAQ9UbwnOwIbxJOpetAQAAWD7pGgAAAB5n26ZL+mSTz4CdkquHDeGiNQAAAOsgXQMAAMAjDMPWhxvCu3Lo2oZwAAAA1kS6BgAAgPuqN4Rvqj3hfdkQ3uvWAAAArI50DQAAAHe0bdOXYevm4F0bwgEAAFgr6RoAAADuot4Q/lQtCe/KsPWraA0AAMB6SdcAAABwY0c3hDfJrtoQrlsDAACwbtI1AAAA3NLQrfuDDeG7Eq1tCAcAAADpGgAAAG6lHrY+uiFctwYAAIBCugYAAIAb+GjTV8PWfRm57kRrAAAAOEK6BgAAgKsaN4Q3BxvCN8kmeRatAQAA4DvpGgAAAK7kxw3hnWFrAAAAOE66BgAAgGs43BCekqttCAcAAICfSNcAAADwN6c2hA/R2oZwAAAAuIB0DQAAAP/qxw3hvW4NAAAAF5GuAQAA4J/YEA4AAADXI10DAADAL23bxIZwAAAAuCbpGgAAAC42bAjv9ietY0M4AAAA/JV0DQAAABeoz1pvqvXgsSEcAAAArkC6BgAAYPXGLD0OUn/r0Ns2fTVsPdolGxvCAQAA4AqkawAAAFZsvFo9ZOkkm2SXNMn/2q/R6uHdp2MbwjvD1gAAAHAF0jUAAABrNcxSDwV6Ux725XWXz1LdNzaEAwAAwK1J1wAAAKzSe/s5S92f+ECT7Lr839Pew750bhvCAQAA4KqkawAAAFZpGJs+1a2HD9TdetwQLloDAADADWx+/ggAAAAs0oV/J+7KsHWfvOjWAAAAcBOmrgEAAFil5jefdNYaAAAAbky6BgAAgLOa5FW3BgAAgNuyMBwAAAAAAACAB5OuAQAAWJ/3Nv1lnxy2hQMAAAA3Jl0DAACwMtv2F0F6d9vvAgAAAAzcugYAAGA13tsk6ZLNxena1DUAAADchXQNAADACry3aZKUDj38rJ+c0iSv/93wiwEAAABJpGsAAAAWro7Wm5KrU41TdwfXtOpJ6xfdGgAAAO5BugYAAGC5tm26g2idpEuaZJPsSqiuZ6+b8mHdGgAAAO5FugYAAGCJTp217kqZ7pPn//Y+POotCQcAAIB7k64BAABYljNnrbsSrd/2y/SbUA0AAAAPJl0DAACwFKfOWg9Phg3hzyo1AAAATJF0DQAAwCKcP2vdiNYAAAAwadI1AAAAM3fJWWu3qwEAAGDapGsAAABm6x/OWgMAAACTJF0DAAAwQ85aAwAAwLJI1wAAAMyNs9YAAACwONI1AAAA8zEMW/fOWgMAAMDSSNcAAADMwbcN4eNZ610VrZ21BgAAgNmSrgEAAJi2w7PWY7fuRWsAAABYCOkaAACAqTqM1qNhQ/gmeRGtAQAAYAk2j/4CAAAAcMy2/VwM3uz/5bWrhq2fdWsAAABYCFPXAAAATMx7myRdskmeynrwlElrG8IBAABgiaRrAAAAJqPeEJ7qpnVKtxatAQAAYKGkawAAACbgzFnrcWe49eAAAACwXNI1AAAAD3UmWo8bwkVrAAAAWLrNo78AAAAAK7Zts6nmqkddedgnL7o1AAAALJ+pawAAAB5hGLYe+vRTOWudatLaWWsAAABYE+kaAACA+/q2IXyI1sOTTrQGAACAlZKuAQAAuJfDs9bjsPW4M9xZawAAAFgl6RoAAIDbO4zWo3FDuGgNAAAAK7Z59BcAAABg6T6qs9b1X0O78rBPXnRrAAAAWDVT1wAAANzMtk1Knz46ae2sNQAAAJBEugYAAOAm3tsk6fZvWjfJTrQGAAAAjpCuAQAAuKr6rHWqaJ1qPbhoDQAAAOyTrgEAALiSOlpv9jeE78oTN60BAACAY6RrAAAA/uxMtB7PWneGrQEAAICTpGsAAAD+4JJobUM4AAAA8BPpGgAAgH+1bdOJ1gAAAMAVSNcAAAD83rZNSrTuq+eiNQAAAPBPpGsAAAB+Y9gQ3pVJ66FbDyPXnWgNAAAA/CPpGgAAgMt8O2s9DlsPubpJNsmzaA0AAAD8C+kaAACAn3yL1odnrUVrAAAA4G+kawAAAE77MVoPI9e6NQAAAPA30jUAAADHXBitnbUGAAAArkG6BgAAYJ9oDQAAANyddA0AAEBl26YTrQEAAIB7k64BAABIkmzbpETrvnouWgMAAAC3J10DAACs3hitx0SdMnLdidYAAADAPUjXAAAAK/beJklX1oPX0Xoo2ZvkWbQGAAAAbk66BgAAWKX39itRZ39D+Dh+LVoDAAAA9yJdAwAArEwdrTdlxnrQidYAAADAY0jXAAAAq3FJtO6TV90aAAAAuDfpGgAAYAUujNZvojUAAADwGNI1AADAoonWAAAAwBxI1wAAAAslWgMAAADzIV0DAAAsjmgNAAAAzI10DQAAsCCiNQAAADBP0jUAAMAiiNYAAADAnEnXAAAAMydaAwAAAPMnXQMAAMzWqWg9vOhEawAAAGA2pGsAAIB52rbpTkTrPmmSTfIsWgMAAADzIF0DAADMzbZNSrTuy8M6WjeiNQAAADAz0jUAAMB8jNF6vGAd0RoAAABYAukaAABgDkRrAAAAYNGkawAAgGkTrQEAAIAVkK4BAACmSrQGAAAAVkO6BgAAmB7RGgAAAFgZ6RoAAGBKjkbrlNeiNQAAALBQ0jUAAMA0nIrWSbqkSTaiNQAAALBY0jUAAMCj/Rith4e6NQAAALBc0jUAAMDjXBit30RrAAAAYOGkawAAgEcQrQEAAAAq0jUAAMB9HY3WTT4f9qI1AAAAsEbSNQAAwF28t199+mi0Hh6+KNYAAADAGknXAAAAN1ZH683paP0sWgMAAADrJV0DAADczGG0TmnVEa0BAAAAvkjXAAAAN3A0Wke0BgAAADhOugYAALgq0RoAAADg96RrAACAKxGtAQAAAP6VdA0AAPBnp6L18KtoDQAAAPAT6RoAAOAPTkXrJF3SlG4tWgMAAACcJV0DAAD8kx+j9dCtX0VrAAAAgJ9J1wAAAL90YbR+E60BAAAALiVdAwAAXEy0BgAAALgN6RoAAOACojUAAADALUnXAAAAZ23bJOmTTrQGAAAAuBXpGgAA4IQxWg99elO9JVoDAAAAXJV0DQAAsK/eDT726ZFoDQAAAHAD0jUAAEBxeNBatAYAAAC4C+kaAADgWLROmbpOshOtAQAAAG5LugYAANbtaLROVa8jWgMAAADcnHQNAACs1alondKqh0nrZ8UaAAAA4OakawAAYH3OROuu/CpaAwAAANyRdA0AAKzJtk2fz3+ORuth3vpVtAYAAAC4K+kaAABYgWHMelwDPnTrUR2tHbQGAAAAeATpGgAAWLRvu8FT6vVAtAYAAACYBukaAABYqMOD1n31rmgNAAAAMCXSNQAAsDiH0XowPuxFawAAAIBpka4BAIAFORWth1/7Mmn9olgDAAAATIt0DQAALMK2/Ryn/hatU3aDD936WbQGAAAAmCLpGgAAmLNhzLqpdoBvqnfrg9avojUAAADAdEnXAADAPH3bDZ5Srwd1tHbQGgAAAGDypGsAAGBuDg9a99W7ojUAAADADEnXAADAfBxG68H4sBetAQAAAGZJugYAAOZg236W6W/ROtWh6yZ5UawBAAAAZkm6BgAAJmwYs26qcepN9W5XGnaTPIvWAAAAADMmXQMAAJP0bTd4Sr0e1AetX0VrAAAAgNmTrgEAgIk5PGjdJykv6mjtoDUAAADAUkjXAADAZJw6aD2W7F60BgAAAFgm6RoAAHi0bwetU0XrJF3J2E3yolgDAAAALJN0DQAA3My4+rtO0U3y/N/3D9QHrUfjbvDOmDUAAADAwknXAADADRw26cEwWv2/9mvA+ttB64GD1gAAAAArI10DAAC38e1e9fhwmKJu+vTNkYPWO9EaAAAAYI2kawAA4No+2r0R6m+GpH10GjuiNQAAAMBKSdcAAMANND9+oHyiy9c97GfFGgAAAGClpGsAAOCq3tuvuerz+j5JmiZ98ipaAwAAAKyadA0AAFxbf0G3zhCte9EaAAAAgOwflwMAAPib9/Z3n29+XCwOAAAAwCqYugYAAK7hvf08Wd37v8gCAAAA8GvSNQAA8Dfb9nND+BCtL5+jbi7bKw4AAADACkjXAADAP6nHrJvfD1s35Q8CAAAAgHQNAAD82rfd4N8idFc9OVOmd0mTvPx3828LAAAAwBxI1wAAwMWO7gYfp667kqv78jwn6nVjWzgAAAAAe6RrAADgJ992g2c/SDclZg8v3v77/CP1u6n++FC4N8mzkWsAAAAAPknXAADAad92g2d/VLqrSva31d9DwB6mtFP9wbFw69YAAAAAVKRrAADgmKO7wXNsN/jr6QitTwMAAABwGekaAACofNsNPg5bD47uBgcAAACAP5OuAQCAJCd2g4/D1md2gwMAAADAn0nXAACwbkOxHrJ0d7AbPMnust3gAAAAAPAH0jUAAKzV4Zj14W7w2A0OAAAAwD1I1wAAsD7b9vNkdV/GrPvq3Xo3+LNiDQAAAMA9SNcAALAa9Zj1GKdTnmzsBgcAAADgYaRrAABYgcPd4Idj1p3d4AAAAAA8jHQNAADLNRTrIVp3ZTf4YKjUXTVmrVgDAAAA8DjSNQAALNHhmPWmercph65FawAAAACmQboGAIAFGYt1SrRuju0GT9IkL4o1AAAAAFMhXQMAwCLUY9ZPZT14ypPN/pj1q2gNAAAAwLRI1wAAMHPb9jNL12PW4+x1Vz0xZg0AAADAVEnXAAAwT/WY9bgDPNWLXdIYswYAAABgHqRrAACYm29j1jm4Zj08HKL1m2gNAAB1ZRPRAAAWS0lEQVQAwAxI1wAAMBOXj1l3ijUAAAAAMyNdAwDA5J0fs27Kr8asAQAAAJgt6RoAAKbq/Jh1n3TV82fFGgAAAIAZk64BAGB6Lhmz7suLV9EaAAAAgNmTrgEAYDJ+NWb9olgDAAAAsBzSNQAATIAxawAAAADWTboGAIDHMWYNAAAAAEmkawAAeICxWMeYNQAAAAAk0jUAANxVPWb9lHSlW8eYNQAAAACrJl0DAMDtHY5ZN9WS8OwXa2PWAAAAAKyPdA0AALd0fsw6yS5pSrF+U6wBAAAAWCnpGgAAbuCSMeuhYYvWAAAAACBdAwDAlW3b9Pn8ZyzWg+HJOGbdKdYAAAAA8Em6BgCAa6gXg49Xq1N1667kamPWAAAAAHBAugYAgD84XAyeKlenhOpesQYAAACAc6RrAAD4J/Vi8KfqdnVKpe6q8esXxRoAAAAAzpGuAQDgN44uBh9fZ79Y98mraA0AAAAAP5OuAQDgAoeLwZtqMfjwZJc0FoMDAAAAwL+QrgEA4Kx6zPqpGrAeu/UwZt2J1gAAAADw76RrAAA45vyYdcqvvWINAAAAAFcgXQMAQOV8sR7e2lXXrF8UawAAAAC4AukaAACSXLYYfJOkxOxX0RoAAAAArka6BgBg3X61GLyzGBwAAAAAbkK6BgBglSwGBwAAAIApka4BAFiZbfs5RT0sBh/XgFsMDgAAAACPI10DALAO9SnrcZZ6fB2LwQEAAADgkaRrAAAWbSjWQ58+HLAeVoVbDA4AAAAAjyZdAwCwRIenrFN+pgxYd2XA2mJwAAAAAHg06RoAgGX5dsq6L2V6VC8G7y0GBwAAAIBJkK4BAFiEU6esR43F4AAAAAAwXdI1AABzdnQx+NFT1r3F4AAAAAAwXdI1AAAzdFis6xnro6esLQYHAAAAgAmTrgEAmI9vxfop6Q4mrZ2yBgAAAIAZkq4BAJiDbfsZpIdi3Vc7wAfj1HXvlDUAAAAAzI90DQDAhI1j1mOlbk6csh7eelasAQAAAGCWpGsAAKbn8JR19leCpxTr8ZT1q2gNAAAAADMmXQMAMBmHxbo5OGI9Hrd2yhoAAAAAFkS6BgDg0b4V66eqT4/duqu2gneKNQAAAAAsjXQNAMCDnCrW41nrlNHq3ow1AAAAACycdA0AwH0dFuuxTNfFeleNWb8o1gAAAACwcNI1AAD3sm0/R6i/FevBcNx6V2XsPnkVrQEAAABgFaRrAABubCjWqeaqTxXrzmJwAAAAAFgp6RoAgNv4VqzH14OhYSvWAAAAAEAS6RoAgCsbT1mfKtZ90iWb6lfFGgAAAABWT7oGAOAaxmKdsgM8x4r1uDC8U6wBAAAAgC/SNQAAf3BYrJuzxdqMNQAAAABwjHQNAMDvnSnW37p1r1gDAAAAAD+TrgEAuNjlxTolWr8o1gAAAADAz6RrAAB+8g/F+lmxBgAAAAB+QboGAOAExRoAAAAAuBfpGgCAfYo1AAAAAHB30jUAAEmSbftVoxVrAAAAAOC+pGsAgHWri3VTfjblyUCxBgAAAABuTLoGAFilw2KdqlUPFGsAAAAA4F6kawCA1RiPWDcnivXwpCuD14o1AAAAAHAv0jUAwNKNxTpJnzydLdbjr6+KNQAAAABwP9I1AMBCHS3WzU/F+k2xBgAAAAAeQLoGAFiWH4t1n2ySnWINAAAAAEyIdA0AsAiHxbpLNieKdadYAwAAAADTIl0DAMzZtv06XD3E6aa8Hkt2o1gDAAAAAFMnXQMAzM04YN1Uy8DHAev6lPVu/zOKNQAAAAAwVdI1AMBMHD1inWPFenhtxhoAAAAAmA/pGgDgvuqZ6dGYnw8z89Fi3Ry06iFUjzPWz3I1AAAAADAn0jUAwB29t0nZ710bD1Fv28/qfFisu2oreEqi7rK3PPxVsQYAAAAAZkm6BgC4l6Fb56Bbjw+bpO/z8f+SJn0p3EOT7qspbUesAQAAAIDFka4BAO6lOTZvXfvM1c1nk27Kw/GPK9YAAAAAwEJJ1wAAd3SmWw+a5vsR6/GsdadYAwAAAACLJV0DANzFuC38Ql0ZvB7q9bNcDQAAAAAsmXQNAHB7723Sp2++7lWfNw5bvyrWAAAAAMAqSNcAADfz3n616r7Jps+F7bpJXkRrAAAAAGBFpGsAgKsac/UwNt0nm/Lz8m7d3fALAgAAAABMkHQNAHANewPWyVMVrVM36wsGr3eXNm4AAAAAgMWQrgEA/uBosW5Kse7LW80QpPtsmq+HpzT5+TMAAAAAAMsiXQMA/NLRleDj60Ff9n431Yv81K2bMnL95tA1AAAAALAu0jUAwGVODVg35clgzM/j+PVr1aE/2nP/FTsj1wAAAADASknXAACnHR2wro9YZ79SpwxY9ycmp1/+y0f7+a96qv4l43z2qT8IAAAAALBo0jUAwIHzA9bjW+OA9Vivny+ozi//ff77u2piW7QGAAAAANZNugYASPLLAeszK8EvIVEDAAAAAOyTrgGAdfuHAevzK8EBAAAAAPg96RoAWJ97DlgDAAAAAHAB6RoAWI1t+1mmewPWAAAAAADTIl0DAIv2bcC6qaarDVgDAAAAAEyGdA0ALM7hPvCnfM1bZz9aG7AGAAAAAJgA6RoAWIqxWKfK1acGrIcnnQFrAAAAAIBJkK4BgDk7HLDeVD9zYsB6qNfP/7+9u1mRJCsDMPxFVqsbGVBwLeV6QLyBHhtcqd14K15J3sowM7gSqrtvQIRZW7gWFAY36lQeF1Fx+mT8ZeRfRWTm8zAUWZmRP11ds3r7+45cDQAAAACwFNI1AHBphvaB11k6mq+pWANeGbAGAAAAAFg06RoAuBAf158GqXfuA3/a3g0uVwMAAAAALJt0DQAsWGvAOp9RPb4PPA9Yv1GsAQAAAAAug3QNACxM7/HVtdTcn9kHDgAAAABwFaRrAGABdh5fXcv3PMXW9XI1AAAAAMCFk64BgJkM5erx46vDPnAAAAAAgCskXQMAL2hKrh4/vtqANQAAAADANZKuAYDzy8U6ilwdTbGOIleH46sBAAAAAG6RdA0AnEd3wHpVfBvN9u9UVOq8G1yuBgAAAAC4MdI1AHA6I7m6Ki5LzT1PcjUAAAAAABHSNQBwrIm5Oifqp+b+vA/8jWINAAAAAHDrpGsAYH/dXH1XzFJnrVzt+GoAAAAAAAZI1wDANOO5OjWXydUAAAAAAOxPugYAho0vA5erAQAAAAA4EekaANh22NnVcjUAAAAAAEeQrgHg5pWtOuRqAAAAAABmIF0DwE0aOrg65GoAAAAAAGYgXQPAzRjJ1avi4OpoWrVcDQAAAADAS5GuAeCqDeXqVfNtFHvCy1wdcjUAAAAAAC9HugaAqzMlV5cz1nI1AAAAAABzk64B4PK1WnU0oTqaQepurt4UZ1rL1QAAAAAAzE26BoDLNHJwdW7SpfLg6qRVAwAAAACwLNI1AFyOgw+uroxWAwAAAACwaNI1ACzYAZvAHVwNAAAAAMAFkq4BYGH23QQeDq4GAAAAAODiSdcAMLeyVcd2ri5Hq4c2gTu4GgAAAACAyyddA8Acdo5Wp85TNs2jYbQaAAAAAIBrI10DwIsYObV61dTrLM9SP3VKtlwNAAAAAMA1kq4B4Dwe1s83ql2nVreidc7VRqsBAAAAALgZ0jUAnE53DXjEp3uqzj2t0eqQqwEAAAAAuFHSNQAcoWzVsT1aveo7r7qWT602Wg0AAAAAABEhXQPAfkZadWyPVuevlVOrAQAAAABgB+kaAEZNObK6dVh1uQa8ZrQaAAAAAABGSdcA0DFyZPWquKelHK3OrfqNVg0AAAAAALtJ1wDQadUxfGR1a8A6t+owWg0AAAAAAIeTrgG4SSOtOqYdWR1aNQAAAAAAnIx0DcBtmN6qq+bRypHVAAAAAADwQqRrABajrMtZFfH6oE68b6uumlzd26odWQ0AAAAAAOckXQOwDB/WkZqzpbMqYhPxsI7YFY/ra6LY5p2mteqI2BQXaNUAAAAAADAH6RqABfiwjiiqc5aK2w/rrZzcGtFOnSwdAzvAY7tV57ewBhwAAAAAAOYjXQMwt4/rrUTdkoehI+J9U7ijM1S92u7ceUN467zq1jVaNQAAAAAALIN0DcACVDFWr6Mp00MLwGO4VYcd4AAAAAAAcAGkawBm9bD+tMd7XDVcuLVqAAAAAAC4cNI1ADN5Pqw6xaaK1Z7Pza06n12tVQMAAAAAwCWTrgF4EQ/r5xvlgHWKuKsiTRy7zovCi1btsGoAAAAAALgK0jUAZ1CH6rpH11/TVnr+dCh1imndOp6v/kKrBgAAAACAKyRdA3AKz9u/t0N1irgrinVZqPPFvWdX96oi0sTIDQAAAAAAXBjpGoD9laE6t+cyVK+aG71lOp9UnZ+4M0lX0y4DAAAAAAAuk3QNwC7lMdXlUPVdk5O3tn83F0QRmzfbT2+dVP1+HZuI1a6PUUW8ti0cAAAAAACuk3QNwLahUB3F0HMrVLcmsMuh6nLqOrfqlvqaTTG03WLkGgAAAAAArp10DXDbpofqIa3t31EMVb+ZNiT95o/PG8ifIladA7DrV1sZuQYAAAAAgGsmXQPcklOF6hje/n2YXK9bU9d5IbluDQAAAAAAV026BrhedQyOvlOoJ4bqGD6m+shW3TVxRBsAAAAAALhG0jXAVajHqXOortWB+a6YXd43VJfB+7ShGgAAAAAAoCBdA1ygob3fOVRH9Mxbt6J1d/W3UA0AAAAAAMxEugZYttY49c69390L8o2hM6qFagAAAAAAYG7SNcCSlKdT19JBe7/rUF1eI1QDAAAAAAALJl0DzKS79Ds6S7+jb5y6G61bB1RHEapVagAAAAAA4BJI1wDnN1KpYztFV9tbwbvyOHX5OvmGUA0AAAAAAFwm6RrgpCZW6tZW8FIqHm2dTh3GqQEAAAAAgOskXQMcpE7U3QI9sVLna/LM9Ka4rK7XTqcGAAAAAABuhnQNsEtvpU5951LH9oR0vjKGK3V5TX3jjUoNAAAAAADcHOkaoDE+SN2q1FUxId0yvVKbpQYAAAAAAIgI6Rq4Ua0Tqcuc3E3UMVype8+lLh/NN1RqAAAAAACAYdI1cNVaiTprnUhdNRG6m6h7h6rLSu1cagAAAAAAgKNJ18Dly306diXqocvKC1Jxe9N3cVmpnUsNAAAAAABwCtI1cDm6Z1GXG7mjuD+Kb1v3ZGWi7h2ktu4bAAAAAADgpUjXwMJ0+3SWOmdRtxZ999qZqMMgNQAAAAAAwMyka2AOO1d8l326e2XavjM/UaIGAAAAAAC4TNI1cDY756ej81DvMvAR+Szq/LISNQAAAAAAwAWSrmEByhHk7CKCa/7kE/d7j1ycn9JVjlBXfRfr0wAAAAAAABdOuoa5fVhvjSDXqoj360UU2SlxOvbZ7939Nl/c26dje4T613P/QAAAAAAAADgD6RrmU1fh1Bdro+m1H9fx+syx9uA43bp+yn5vfRoAAAAAAIA+0jXMpxrNvauIKmIT8bA+avZ6qEyXbz1lcjqGh6fTdofe9D03P6RPAwAAAAAA0CFdw0zqorwavSZ1qvDQ68T+ZboqXnzn5HTrY5TD060LWu+rTwMAAAAAADCBdA0zqSZk6YhYRWwi3q+fn9I1tNB7SpkeefdN55ry05bD07Ofxg0AAAAAAMDlk65hDlNGrku9q7xrIwu9R8r0yJnT0ZmcFqcBAAAAAAA4M+kaTifv7o7OuHPLlE3g2ap5ypDumdm5TMdAnHbmNAAAAAAAAEsiXcMuZZCOgRJcS0VCHpmTHn+RnbpZuvsum+J+cRoAAAAAAIDFO7iendTHdaT4+Y8//+VPf1NPov71n3/++7+/jSriteTGqU2fja6l7TY8fcv3Tr3VeadUfA3bvAEAAAAAALgGc6frh/XzR1j1bTzeRISjdhk2MUKn7WtaKXpkNvowvZvAN8XtqljWPSWEG5sGAAAAAADg2s29MLxq6l23HaamXs+d1zmj1i7u2vRl2hMXdFfbObn1+lO69dB4dG+Qjk69bj23TtH5322M878AAAAAAAAAN2DWJlanu50fIRm8Xpih3hz7/0KlviR8wo3cI+/b+1HLY6RjV0Tvfvh9f0vfr58/ydC71P96w+8/AAAAAAAA1+5VfOjLkF2t43V77VvXquGC2HprU6fT9Xbl0vSZ5iG9vXlk6PmsH2bkuOihDt07GF3bbL/guTd1j/+46g+zcuI7AAAAAAAA16+K99O2FrcqYO8FB0zcTt8LfZJ6PSXAjzs+tZ5bb1cu7TvTPNKGX0b3d2/i30L3r3uZs8sf1j1/a7myL/MzAwAAAAAAwElV8bB+if3McUQBPWE63Rngd3qZn9U16f2Z7/UvAHr/wcGVBd3eWfkr+zMCAAAAAADAsGqrmR2w8JkFOnhIfTNw/zGz5kOT7rosAAAAAAAA0Hj16WbVnK17DkNbrKc00dkXVp/bvrPg4z+0kYOcx438kM995DMAAAAAAABw217q3Obefcgxef/2qc66XqYDTuA2sgwAAAAAAABckVmD8Pt1pAn1up4FN/ULAAAAAAAAcKUmTj2fR5qwMLy6gYXhAAAAAAAAALdt7jXcH9fPAXvoJOz60ddGrgEAAAAAAACu1tzpOiI+rmMTkSLu4rMf/uwH8aP/xX++++8/4imiiljp1gAAAAAAAABXbgHpOiIe1lHFLz771ec/+aKesv72Xx/+9t1fIkW80a0BAAAAAAAArtwy0nVERLx7TNEsCI+Ir+4X9NkAAAAAAAAAOJ/V3B8AAAAAAAAAgFsnXQMAAAAAAAAwM+kaAAAAAAAAgJlJ1wAAAAAAAADMTLoGAAAAAAAAYGbSNQAAAAAAAAAzk64BAAAAAAAAmJl0DQAAAAAAAMDMpGsAAAAAAAAAZiZdAwAAAAAAADAz6RoAAAAAAACAmUnXAAAAAAAAAMxMugYAAAAAAABgZtI1AAAAAAAAADOTrgEAAAAAAACY2au5PwAAAAAAAAAAF+ztY4qI1Hz7zX11wItI1wAAAAAAAAAcq2rq9bvHFBGriC/3adgWhgMAAAAAAABwlDpaV03AXkV8H/G7x/Tbx7TjmQ3pGgAAAAAAAIDDfX1fpYin4p7vi4b99jG9nRCwLQwHAAAAAAAA4Ch1pU4R9Yrw+utd8ejbx1SNbhE3dQ0AAAAAAADAUf50X60iXjWbw7vqtv00PIRt6hoAAAAAAACAY9Vlunekur6z3Cj+7jHVB2PnIez+WexZvHtM0YyQp+EaDwAAAAAAAMBi7YzQ9QT2qojZX99XS0zXoVsDAAAAAAAAXKZ9I3Rdhxe0MDwVf4YFFXUAAAAAAAAAzqZq5rAXxLA1AAAAAAAAwEVLsd+w8tMC0zUAAAAAAAAAFyrlZdvTppbvIqKZuraZGwAAAAAAAIAT+P3jpInrumuvmq9f3ldTngUAAAAAAAAAO7x9TOPD01XEqlkPHhHf3FetRwEAAAAAAADgcH94TE+7rqma/7687+nUr87xsQAAAAAAAAC4HZuIu4jvi+HpFLFqxqxrX/UV68zUNQAAAAAAAACH+8Nj2kRsOvl5fMy6xdQ1AAAAAAAAAEdZRWwiUsSryWPWLdI1AAAAAAAAAMd6FbFpNodPGbNu+T8r7RkuEPnxbAAAAABJRU5ErkJggg=="
                                        height="1476" preserveAspectRatio="xMidYMid meet" />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(413.142056, 288.872269)">
                                <g>
                                    <path
                                        d="M 2.484375 -5.640625 L 2.484375 0 L 1.1875 0 L 1.1875 -4.59375 L 0.0625 -4.59375 L 0.0625 -5.640625 Z M 2.484375 -5.640625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(416.302349, 288.872269)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(421.389452, 288.872269)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(424.864161, 288.872269)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(427.145695, 288.872269)">
                                <g>
                                    <path
                                        d="M 0.671875 -5.640625 L 3.234375 -5.640625 C 3.847656 -5.640625 4.390625 -5.519531 4.859375 -5.28125 C 5.328125 -5.050781 5.691406 -4.722656 5.953125 -4.296875 C 6.210938 -3.878906 6.34375 -3.390625 6.34375 -2.828125 C 6.34375 -2.253906 6.210938 -1.753906 5.953125 -1.328125 C 5.691406 -0.910156 5.328125 -0.582031 4.859375 -0.34375 C 4.390625 -0.113281 3.847656 0 3.234375 0 L 0.671875 0 Z M 3.171875 -1.078125 C 3.734375 -1.078125 4.179688 -1.234375 4.515625 -1.546875 C 4.847656 -1.859375 5.015625 -2.285156 5.015625 -2.828125 C 5.015625 -3.359375 4.847656 -3.78125 4.515625 -4.09375 C 4.179688 -4.414062 3.734375 -4.578125 3.171875 -4.578125 L 1.96875 -4.578125 L 1.96875 -1.078125 Z M 3.171875 -1.078125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(433.804881, 288.872269)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(438.891984, 288.872269)">
                                <g>
                                    <path
                                        d="M 6.140625 -4.40625 C 6.679688 -4.40625 7.109375 -4.242188 7.421875 -3.921875 C 7.742188 -3.597656 7.90625 -3.117188 7.90625 -2.484375 L 7.90625 0 L 6.65625 0 L 6.65625 -2.296875 C 6.65625 -2.640625 6.582031 -2.894531 6.4375 -3.0625 C 6.289062 -3.226562 6.085938 -3.3125 5.828125 -3.3125 C 5.535156 -3.3125 5.300781 -3.210938 5.125 -3.015625 C 4.957031 -2.828125 4.875 -2.546875 4.875 -2.171875 L 4.875 0 L 3.609375 0 L 3.609375 -2.296875 C 3.609375 -2.972656 3.335938 -3.3125 2.796875 -3.3125 C 2.503906 -3.3125 2.269531 -3.210938 2.09375 -3.015625 C 1.925781 -2.828125 1.84375 -2.546875 1.84375 -2.171875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.84375 C 1.945312 -4.019531 2.144531 -4.15625 2.375 -4.25 C 2.601562 -4.351562 2.859375 -4.40625 3.140625 -4.40625 C 3.453125 -4.40625 3.726562 -4.34375 3.96875 -4.21875 C 4.21875 -4.101562 4.421875 -3.925781 4.578125 -3.6875 C 4.753906 -3.914062 4.976562 -4.09375 5.25 -4.21875 C 5.519531 -4.34375 5.816406 -4.40625 6.140625 -4.40625 Z M 6.140625 -4.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(447.348987, 288.872269)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(452.629576, 288.872269)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(454.91111, 288.872269)">
                                <g>
                                    <path
                                        d="M 0.671875 -5.640625 L 3.234375 -5.640625 C 3.847656 -5.640625 4.390625 -5.519531 4.859375 -5.28125 C 5.328125 -5.050781 5.691406 -4.722656 5.953125 -4.296875 C 6.210938 -3.878906 6.34375 -3.390625 6.34375 -2.828125 C 6.34375 -2.253906 6.210938 -1.753906 5.953125 -1.328125 C 5.691406 -0.910156 5.328125 -0.582031 4.859375 -0.34375 C 4.390625 -0.113281 3.847656 0 3.234375 0 L 0.671875 0 Z M 3.171875 -1.078125 C 3.734375 -1.078125 4.179688 -1.234375 4.515625 -1.546875 C 4.847656 -1.859375 5.015625 -2.285156 5.015625 -2.828125 C 5.015625 -3.359375 4.847656 -3.78125 4.515625 -4.09375 C 4.179688 -4.414062 3.734375 -4.578125 3.171875 -4.578125 L 1.96875 -4.578125 L 1.96875 -1.078125 Z M 3.171875 -1.078125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(461.570296, 288.872269)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(466.544526, 288.872269)">
                                <g>
                                    <path
                                        d="M 4.890625 -4.34375 L 2.921875 0.265625 C 2.722656 0.765625 2.476562 1.113281 2.1875 1.3125 C 1.894531 1.519531 1.539062 1.625 1.125 1.625 C 0.90625 1.625 0.679688 1.585938 0.453125 1.515625 C 0.234375 1.453125 0.0546875 1.359375 -0.078125 1.234375 L 0.375 0.34375 C 0.476562 0.425781 0.59375 0.488281 0.71875 0.53125 C 0.84375 0.582031 0.96875 0.609375 1.09375 0.609375 C 1.257812 0.609375 1.394531 0.566406 1.5 0.484375 C 1.613281 0.398438 1.710938 0.265625 1.796875 0.078125 L 1.8125 0.03125 L -0.0625 -4.34375 L 1.234375 -4.34375 L 2.453125 -1.390625 L 3.671875 -4.34375 Z M 4.890625 -4.34375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(307.438355, 327.795142)">
                                <g>
                                    <path
                                        d="M 0.671875 -5.640625 L 1.96875 -5.640625 L 1.96875 0 L 0.671875 0 Z M 0.671875 -5.640625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(310.082682, 327.795142)">
                                <g>
                                    <path
                                        d="M 5 -5.984375 L 5 0 L 3.796875 0 L 3.796875 -0.5 C 3.484375 -0.125 3.03125 0.0625 2.4375 0.0625 C 2.03125 0.0625 1.660156 -0.0234375 1.328125 -0.203125 C 1.003906 -0.390625 0.75 -0.648438 0.5625 -0.984375 C 0.375 -1.328125 0.28125 -1.722656 0.28125 -2.171875 C 0.28125 -2.617188 0.375 -3.007812 0.5625 -3.34375 C 0.75 -3.6875 1.003906 -3.945312 1.328125 -4.125 C 1.660156 -4.3125 2.03125 -4.40625 2.4375 -4.40625 C 2.988281 -4.40625 3.421875 -4.226562 3.734375 -3.875 L 3.734375 -5.984375 Z M 2.65625 -0.96875 C 2.976562 -0.96875 3.242188 -1.078125 3.453125 -1.296875 C 3.660156 -1.515625 3.765625 -1.804688 3.765625 -2.171875 C 3.765625 -2.535156 3.660156 -2.828125 3.453125 -3.046875 C 3.242188 -3.265625 2.976562 -3.375 2.65625 -3.375 C 2.332031 -3.375 2.066406 -3.265625 1.859375 -3.046875 C 1.648438 -2.828125 1.546875 -2.535156 1.546875 -2.171875 C 1.546875 -1.804688 1.648438 -1.515625 1.859375 -1.296875 C 2.066406 -1.078125 2.332031 -0.96875 2.65625 -0.96875 Z M 2.65625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(315.66156, 327.795142)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(320.748663, 327.795142)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(325.722894, 327.795142)">
                                <g>
                                    <path
                                        d="M 2.671875 0.0625 C 2.210938 0.0625 1.796875 -0.03125 1.421875 -0.21875 C 1.054688 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.054688 -3.921875 1.421875 -4.109375 C 1.796875 -4.304688 2.210938 -4.40625 2.671875 -4.40625 C 3.128906 -4.40625 3.53125 -4.304688 3.875 -4.109375 C 4.21875 -3.921875 4.46875 -3.648438 4.625 -3.296875 L 3.640625 -2.78125 C 3.421875 -3.175781 3.097656 -3.375 2.671875 -3.375 C 2.335938 -3.375 2.0625 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.796875 1.632812 -1.5 1.84375 -1.28125 C 2.0625 -1.070312 2.335938 -0.96875 2.671875 -0.96875 C 3.097656 -0.96875 3.421875 -1.164062 3.640625 -1.5625 L 4.625 -1.03125 C 4.46875 -0.6875 4.21875 -0.414062 3.875 -0.21875 C 3.53125 -0.03125 3.128906 0.0625 2.671875 0.0625 Z M 2.671875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(330.487517, 327.795142)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(332.914167, 327.795142)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.984375 -6.0625 L 4.34375 -6.0625 L 2.875 -4.890625 L 1.890625 -4.890625 Z M 2.984375 -6.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(338.194756, 327.795142)">
                                <g>
                                    <path
                                        d="M 3.21875 -4.40625 C 3.75 -4.40625 4.179688 -4.242188 4.515625 -3.921875 C 4.847656 -3.597656 5.015625 -3.117188 5.015625 -2.484375 L 5.015625 0 L 3.75 0 L 3.75 -2.296875 C 3.75 -2.640625 3.675781 -2.894531 3.53125 -3.0625 C 3.382812 -3.226562 3.164062 -3.3125 2.875 -3.3125 C 2.5625 -3.3125 2.3125 -3.210938 2.125 -3.015625 C 1.9375 -2.816406 1.84375 -2.523438 1.84375 -2.140625 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.828125 C 1.945312 -4.015625 2.15625 -4.15625 2.40625 -4.25 C 2.65625 -4.351562 2.925781 -4.40625 3.21875 -4.40625 Z M 3.21875 -4.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(515.210296, 223.856945)">
                                <g>
                                    <path
                                        d="M 5.046875 -1.046875 L 5.046875 0 L 0.671875 0 L 0.671875 -5.640625 L 4.9375 -5.640625 L 4.9375 -4.59375 L 1.96875 -4.59375 L 1.96875 -3.375 L 4.59375 -3.375 L 4.59375 -2.359375 L 1.96875 -2.359375 L 1.96875 -1.046875 Z M 5.046875 -1.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(520.619874, 223.856945)">
                                <g>
                                    <path
                                        d="M 3.21875 -4.40625 C 3.75 -4.40625 4.179688 -4.242188 4.515625 -3.921875 C 4.847656 -3.597656 5.015625 -3.117188 5.015625 -2.484375 L 5.015625 0 L 3.75 0 L 3.75 -2.296875 C 3.75 -2.640625 3.675781 -2.894531 3.53125 -3.0625 C 3.382812 -3.226562 3.164062 -3.3125 2.875 -3.3125 C 2.5625 -3.3125 2.3125 -3.210938 2.125 -3.015625 C 1.9375 -2.816406 1.84375 -2.523438 1.84375 -2.140625 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.828125 C 1.945312 -4.015625 2.15625 -4.15625 2.40625 -4.25 C 2.65625 -4.351562 2.925781 -4.40625 3.21875 -4.40625 Z M 3.21875 -4.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(526.190695, 223.856945)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(529.697652, 223.856945)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(533.172361, 223.856945)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(538.259464, 223.856945)">
                                <g>
                                    <path
                                        d="M 4.890625 -4.34375 L 3.0625 0 L 1.75 0 L -0.0625 -4.34375 L 1.234375 -4.34375 L 2.4375 -1.390625 L 3.671875 -4.34375 Z M 4.890625 -4.34375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(543.080521, 223.856945)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(545.507171, 223.856945)">
                                <g>
                                    <path
                                        d="M 2.046875 0.0625 C 1.679688 0.0625 1.328125 0.0195312 0.984375 -0.0625 C 0.640625 -0.15625 0.363281 -0.269531 0.15625 -0.40625 L 0.578125 -1.3125 C 0.773438 -1.1875 1.007812 -1.082031 1.28125 -1 C 1.550781 -0.925781 1.820312 -0.890625 2.09375 -0.890625 C 2.625 -0.890625 2.890625 -1.019531 2.890625 -1.28125 C 2.890625 -1.40625 2.816406 -1.492188 2.671875 -1.546875 C 2.523438 -1.597656 2.300781 -1.644531 2 -1.6875 C 1.644531 -1.738281 1.351562 -1.796875 1.125 -1.859375 C 0.894531 -1.929688 0.691406 -2.054688 0.515625 -2.234375 C 0.347656 -2.410156 0.265625 -2.664062 0.265625 -3 C 0.265625 -3.269531 0.34375 -3.507812 0.5 -3.71875 C 0.65625 -3.9375 0.882812 -4.101562 1.1875 -4.21875 C 1.5 -4.34375 1.863281 -4.40625 2.28125 -4.40625 C 2.582031 -4.40625 2.882812 -4.367188 3.1875 -4.296875 C 3.488281 -4.234375 3.738281 -4.140625 3.9375 -4.015625 L 3.515625 -3.125 C 3.140625 -3.34375 2.726562 -3.453125 2.28125 -3.453125 C 2.007812 -3.453125 1.804688 -3.410156 1.671875 -3.328125 C 1.535156 -3.253906 1.46875 -3.160156 1.46875 -3.046875 C 1.46875 -2.910156 1.539062 -2.816406 1.6875 -2.765625 C 1.832031 -2.710938 2.0625 -2.660156 2.375 -2.609375 C 2.726562 -2.554688 3.019531 -2.492188 3.25 -2.421875 C 3.476562 -2.359375 3.675781 -2.238281 3.84375 -2.0625 C 4.007812 -1.882812 4.09375 -1.632812 4.09375 -1.3125 C 4.09375 -1.039062 4.007812 -0.800781 3.84375 -0.59375 C 3.6875 -0.382812 3.453125 -0.222656 3.140625 -0.109375 C 2.828125 0.00390625 2.460938 0.0625 2.046875 0.0625 Z M 2.046875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(549.788077, 223.856945)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(553.295034, 223.856945)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(558.272574, 223.856945)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(520.463176, 235.143708)">
                                <g>
                                    <path
                                        d="M 2.46875 0.046875 C 2.050781 0.046875 1.648438 -0.0195312 1.265625 -0.15625 C 0.878906 -0.289062 0.582031 -0.46875 0.375 -0.6875 L 0.609375 -1.140625 C 0.816406 -0.941406 1.085938 -0.773438 1.421875 -0.640625 C 1.765625 -0.515625 2.113281 -0.453125 2.46875 -0.453125 C 2.976562 -0.453125 3.359375 -0.546875 3.609375 -0.734375 C 3.859375 -0.921875 3.984375 -1.160156 3.984375 -1.453125 C 3.984375 -1.679688 3.914062 -1.863281 3.78125 -2 C 3.644531 -2.132812 3.476562 -2.238281 3.28125 -2.3125 C 3.082031 -2.382812 2.804688 -2.460938 2.453125 -2.546875 C 2.023438 -2.648438 1.6875 -2.75 1.4375 -2.84375 C 1.1875 -2.945312 0.96875 -3.101562 0.78125 -3.3125 C 0.601562 -3.519531 0.515625 -3.796875 0.515625 -4.140625 C 0.515625 -4.429688 0.585938 -4.691406 0.734375 -4.921875 C 0.890625 -5.148438 1.125 -5.332031 1.4375 -5.46875 C 1.75 -5.613281 2.132812 -5.6875 2.59375 -5.6875 C 2.914062 -5.6875 3.226562 -5.640625 3.53125 -5.546875 C 3.84375 -5.460938 4.113281 -5.34375 4.34375 -5.1875 L 4.140625 -4.71875 C 3.910156 -4.875 3.660156 -4.988281 3.390625 -5.0625 C 3.117188 -5.144531 2.851562 -5.1875 2.59375 -5.1875 C 2.101562 -5.1875 1.734375 -5.085938 1.484375 -4.890625 C 1.234375 -4.703125 1.109375 -4.457031 1.109375 -4.15625 C 1.109375 -3.9375 1.175781 -3.753906 1.3125 -3.609375 C 1.445312 -3.472656 1.617188 -3.367188 1.828125 -3.296875 C 2.035156 -3.222656 2.3125 -3.144531 2.65625 -3.0625 C 3.070312 -2.957031 3.40625 -2.851562 3.65625 -2.75 C 3.914062 -2.65625 4.132812 -2.503906 4.3125 -2.296875 C 4.488281 -2.097656 4.578125 -1.828125 4.578125 -1.484375 C 4.578125 -1.203125 4.5 -0.941406 4.34375 -0.703125 C 4.195312 -0.472656 3.960938 -0.289062 3.640625 -0.15625 C 3.328125 -0.0195312 2.9375 0.046875 2.46875 0.046875 Z M 2.46875 0.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(525.421285, 235.143708)">
                                <g>
                                    <path
                                        d="M 2.53125 0.046875 C 2.125 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.125 -4.265625 2.53125 -4.265625 C 2.9375 -4.265625 3.300781 -4.171875 3.625 -3.984375 C 3.957031 -3.804688 4.21875 -3.550781 4.40625 -3.21875 C 4.59375 -2.894531 4.6875 -2.53125 4.6875 -2.125 C 4.6875 -1.707031 4.59375 -1.332031 4.40625 -1 C 4.21875 -0.675781 3.957031 -0.421875 3.625 -0.234375 C 3.300781 -0.046875 2.9375 0.046875 2.53125 0.046875 Z M 2.53125 -0.46875 C 2.832031 -0.46875 3.101562 -0.535156 3.34375 -0.671875 C 3.582031 -0.804688 3.769531 -1 3.90625 -1.25 C 4.039062 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.039062 -2.734375 3.90625 -2.984375 C 3.769531 -3.234375 3.582031 -3.425781 3.34375 -3.5625 C 3.101562 -3.695312 2.832031 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 2.53125 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(530.47614, 235.143708)">
                                <g>
                                    <path
                                        d="M 0.796875 -5.984375 L 1.375 -5.984375 L 1.375 0 L 0.796875 0 Z M 0.796875 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(532.644807, 235.143708)">
                                <g>
                                    <path
                                        d="M 4.625 -4.234375 L 4.625 0 L 4.078125 0 L 4.078125 -0.78125 C 3.921875 -0.519531 3.710938 -0.316406 3.453125 -0.171875 C 3.191406 -0.0234375 2.890625 0.046875 2.546875 0.046875 C 1.992188 0.046875 1.554688 -0.109375 1.234375 -0.421875 C 0.921875 -0.734375 0.765625 -1.1875 0.765625 -1.78125 L 0.765625 -4.234375 L 1.328125 -4.234375 L 1.328125 -1.84375 C 1.328125 -1.394531 1.4375 -1.050781 1.65625 -0.8125 C 1.875 -0.582031 2.191406 -0.46875 2.609375 -0.46875 C 3.046875 -0.46875 3.394531 -0.601562 3.65625 -0.875 C 3.914062 -1.15625 4.046875 -1.535156 4.046875 -2.015625 L 4.046875 -4.234375 Z M 4.625 -4.234375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(538.070512, 235.143708)">
                                <g>
                                    <path
                                        d="M 2.5625 0.046875 C 2.132812 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.132812 -4.265625 2.5625 -4.265625 C 2.925781 -4.265625 3.25 -4.191406 3.53125 -4.046875 C 3.820312 -3.910156 4.050781 -3.707031 4.21875 -3.4375 L 3.796875 -3.140625 C 3.648438 -3.347656 3.46875 -3.503906 3.25 -3.609375 C 3.039062 -3.710938 2.8125 -3.765625 2.5625 -3.765625 C 2.25 -3.765625 1.96875 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.789062 1.019531 -1.5 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.96875 -0.535156 2.25 -0.46875 2.5625 -0.46875 C 2.8125 -0.46875 3.039062 -0.519531 3.25 -0.625 C 3.46875 -0.726562 3.648438 -0.882812 3.796875 -1.09375 L 4.21875 -0.796875 C 4.050781 -0.523438 3.820312 -0.316406 3.53125 -0.171875 C 3.238281 -0.0234375 2.914062 0.046875 2.5625 0.046875 Z M 2.5625 0.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(542.609401, 235.143708)">
                                <g>
                                    <path
                                        d="M 0.796875 -4.234375 L 1.375 -4.234375 L 1.375 0 L 0.796875 0 Z M 1.078125 -5.171875 C 0.960938 -5.171875 0.863281 -5.207031 0.78125 -5.28125 C 0.695312 -5.363281 0.65625 -5.460938 0.65625 -5.578125 C 0.65625 -5.679688 0.695312 -5.773438 0.78125 -5.859375 C 0.863281 -5.941406 0.960938 -5.984375 1.078125 -5.984375 C 1.203125 -5.984375 1.300781 -5.941406 1.375 -5.859375 C 1.457031 -5.785156 1.5 -5.695312 1.5 -5.59375 C 1.5 -5.46875 1.457031 -5.363281 1.375 -5.28125 C 1.300781 -5.207031 1.203125 -5.171875 1.078125 -5.171875 Z M 1.078125 -5.171875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(544.778068, 235.143708)">
                                <g>
                                    <path
                                        d="M 2.53125 0.046875 C 2.125 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.125 -4.265625 2.53125 -4.265625 C 2.9375 -4.265625 3.300781 -4.171875 3.625 -3.984375 C 3.957031 -3.804688 4.21875 -3.550781 4.40625 -3.21875 C 4.59375 -2.894531 4.6875 -2.53125 4.6875 -2.125 C 4.6875 -1.707031 4.59375 -1.332031 4.40625 -1 C 4.21875 -0.675781 3.957031 -0.421875 3.625 -0.234375 C 3.300781 -0.046875 2.9375 0.046875 2.53125 0.046875 Z M 2.53125 -0.46875 C 2.832031 -0.46875 3.101562 -0.535156 3.34375 -0.671875 C 3.582031 -0.804688 3.769531 -1 3.90625 -1.25 C 4.039062 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.039062 -2.734375 3.90625 -2.984375 C 3.769531 -3.234375 3.582031 -3.425781 3.34375 -3.5625 C 3.101562 -3.695312 2.832031 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 3.09375 -5.90625 L 3.859375 -5.90625 L 2.5625 -4.90625 L 2 -4.90625 Z M 3.09375 -5.90625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(549.832922, 235.143708)">
                                <g>
                                    <path
                                        d="M 2.953125 -4.265625 C 3.484375 -4.265625 3.90625 -4.109375 4.21875 -3.796875 C 4.539062 -3.492188 4.703125 -3.046875 4.703125 -2.453125 L 4.703125 0 L 4.125 0 L 4.125 -2.40625 C 4.125 -2.84375 4.015625 -3.175781 3.796875 -3.40625 C 3.578125 -3.632812 3.265625 -3.75 2.859375 -3.75 C 2.398438 -3.75 2.035156 -3.613281 1.765625 -3.34375 C 1.503906 -3.070312 1.375 -2.695312 1.375 -2.21875 L 1.375 0 L 0.796875 0 L 0.796875 -4.234375 L 1.34375 -4.234375 L 1.34375 -3.453125 C 1.5 -3.710938 1.710938 -3.910156 1.984375 -4.046875 C 2.265625 -4.191406 2.585938 -4.265625 2.953125 -4.265625 Z M 2.953125 -4.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(553.626319, 189.85843)">
                                <g>
                                    <path
                                        d="M 5.8125 0 L 5.796875 -3.390625 L 4.140625 -0.59375 L 3.546875 -0.59375 L 1.890625 -3.3125 L 1.890625 0 L 0.671875 0 L 0.671875 -5.640625 L 1.75 -5.640625 L 3.859375 -2.140625 L 5.9375 -5.640625 L 7.015625 -5.640625 L 7.03125 0 Z M 5.8125 0 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(561.325495, 189.85843)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(566.606084, 189.85843)">
                                <g>
                                    <path
                                        d="M 5 -5.984375 L 5 0 L 3.796875 0 L 3.796875 -0.5 C 3.484375 -0.125 3.03125 0.0625 2.4375 0.0625 C 2.03125 0.0625 1.660156 -0.0234375 1.328125 -0.203125 C 1.003906 -0.390625 0.75 -0.648438 0.5625 -0.984375 C 0.375 -1.328125 0.28125 -1.722656 0.28125 -2.171875 C 0.28125 -2.617188 0.375 -3.007812 0.5625 -3.34375 C 0.75 -3.6875 1.003906 -3.945312 1.328125 -4.125 C 1.660156 -4.3125 2.03125 -4.40625 2.4375 -4.40625 C 2.988281 -4.40625 3.421875 -4.226562 3.734375 -3.875 L 3.734375 -5.984375 Z M 2.65625 -0.96875 C 2.976562 -0.96875 3.242188 -1.078125 3.453125 -1.296875 C 3.660156 -1.515625 3.765625 -1.804688 3.765625 -2.171875 C 3.765625 -2.535156 3.660156 -2.828125 3.453125 -3.046875 C 3.242188 -3.265625 2.976562 -3.375 2.65625 -3.375 C 2.332031 -3.375 2.066406 -3.265625 1.859375 -3.046875 C 1.648438 -2.828125 1.546875 -2.535156 1.546875 -2.171875 C 1.546875 -1.804688 1.648438 -1.515625 1.859375 -1.296875 C 2.066406 -1.078125 2.332031 -0.96875 2.65625 -0.96875 Z M 2.65625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(572.184962, 189.85843)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(577.272066, 189.85843)">
                                <g>
                                    <path
                                        d="M 0.578125 -5.984375 L 1.84375 -5.984375 L 1.84375 0 L 0.578125 0 Z M 0.578125 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(579.698716, 189.85843)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(546.74215, 201.145194)">
                                <g>
                                    <path
                                        d="M 4.671875 -5.984375 L 4.671875 0 L 4.125 0 L 4.125 -0.84375 C 3.945312 -0.550781 3.71875 -0.328125 3.4375 -0.171875 C 3.15625 -0.0234375 2.835938 0.046875 2.484375 0.046875 C 2.085938 0.046875 1.726562 -0.046875 1.40625 -0.234375 C 1.082031 -0.421875 0.828125 -0.675781 0.640625 -1 C 0.460938 -1.320312 0.375 -1.695312 0.375 -2.125 C 0.375 -2.539062 0.460938 -2.910156 0.640625 -3.234375 C 0.828125 -3.566406 1.082031 -3.820312 1.40625 -4 C 1.726562 -4.175781 2.085938 -4.265625 2.484375 -4.265625 C 2.828125 -4.265625 3.132812 -4.191406 3.40625 -4.046875 C 3.6875 -3.910156 3.914062 -3.707031 4.09375 -3.4375 L 4.09375 -5.984375 Z M 2.53125 -0.46875 C 2.820312 -0.46875 3.085938 -0.535156 3.328125 -0.671875 C 3.566406 -0.804688 3.753906 -1 3.890625 -1.25 C 4.035156 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.035156 -2.734375 3.890625 -2.984375 C 3.753906 -3.234375 3.566406 -3.425781 3.328125 -3.5625 C 3.085938 -3.695312 2.820312 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 2.53125 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(552.208161, 201.145194)">
                                <g>
                                    <path
                                        d="M 4.484375 -1.9375 L 0.9375 -1.9375 C 0.96875 -1.5 1.132812 -1.144531 1.4375 -0.875 C 1.75 -0.601562 2.140625 -0.46875 2.609375 -0.46875 C 2.867188 -0.46875 3.109375 -0.515625 3.328125 -0.609375 C 3.554688 -0.703125 3.75 -0.84375 3.90625 -1.03125 L 4.234375 -0.65625 C 4.046875 -0.425781 3.8125 -0.25 3.53125 -0.125 C 3.25 -0.0078125 2.9375 0.046875 2.59375 0.046875 C 2.15625 0.046875 1.769531 -0.046875 1.4375 -0.234375 C 1.101562 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.460938 -2.894531 0.640625 -3.21875 C 0.816406 -3.550781 1.0625 -3.804688 1.375 -3.984375 C 1.695312 -4.171875 2.050781 -4.265625 2.4375 -4.265625 C 2.832031 -4.265625 3.1875 -4.171875 3.5 -3.984375 C 3.8125 -3.804688 4.054688 -3.554688 4.234375 -3.234375 C 4.410156 -2.910156 4.5 -2.539062 4.5 -2.125 Z M 2.4375 -3.78125 C 2.03125 -3.78125 1.6875 -3.648438 1.40625 -3.390625 C 1.132812 -3.128906 0.976562 -2.789062 0.9375 -2.375 L 3.953125 -2.375 C 3.910156 -2.789062 3.75 -3.128906 3.46875 -3.390625 C 3.195312 -3.648438 2.851562 -3.78125 2.4375 -3.78125 Z M 2.4375 -3.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(557.077588, 201.145194)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(559.189821, 201.145194)">
                                <g>
                                    <path
                                        d="M 2.953125 -4.265625 C 3.484375 -4.265625 3.90625 -4.109375 4.21875 -3.796875 C 4.539062 -3.492188 4.703125 -3.046875 4.703125 -2.453125 L 4.703125 0 L 4.125 0 L 4.125 -2.40625 C 4.125 -2.84375 4.015625 -3.175781 3.796875 -3.40625 C 3.578125 -3.632812 3.265625 -3.75 2.859375 -3.75 C 2.398438 -3.75 2.035156 -3.613281 1.765625 -3.34375 C 1.503906 -3.070312 1.375 -2.695312 1.375 -2.21875 L 1.375 0 L 0.796875 0 L 0.796875 -4.234375 L 1.34375 -4.234375 L 1.34375 -3.453125 C 1.5 -3.710938 1.710938 -3.910156 1.984375 -4.046875 C 2.265625 -4.191406 2.585938 -4.265625 2.953125 -4.265625 Z M 2.953125 -4.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(564.647774, 201.145194)">
                                <g>
                                    <path
                                        d="M 4.484375 -1.9375 L 0.9375 -1.9375 C 0.96875 -1.5 1.132812 -1.144531 1.4375 -0.875 C 1.75 -0.601562 2.140625 -0.46875 2.609375 -0.46875 C 2.867188 -0.46875 3.109375 -0.515625 3.328125 -0.609375 C 3.554688 -0.703125 3.75 -0.84375 3.90625 -1.03125 L 4.234375 -0.65625 C 4.046875 -0.425781 3.8125 -0.25 3.53125 -0.125 C 3.25 -0.0078125 2.9375 0.046875 2.59375 0.046875 C 2.15625 0.046875 1.769531 -0.046875 1.4375 -0.234375 C 1.101562 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.460938 -2.894531 0.640625 -3.21875 C 0.816406 -3.550781 1.0625 -3.804688 1.375 -3.984375 C 1.695312 -4.171875 2.050781 -4.265625 2.4375 -4.265625 C 2.832031 -4.265625 3.1875 -4.171875 3.5 -3.984375 C 3.8125 -3.804688 4.054688 -3.554688 4.234375 -3.234375 C 4.410156 -2.910156 4.5 -2.539062 4.5 -2.125 Z M 2.4375 -3.78125 C 2.03125 -3.78125 1.6875 -3.648438 1.40625 -3.390625 C 1.132812 -3.128906 0.976562 -2.789062 0.9375 -2.375 L 3.953125 -2.375 C 3.910156 -2.789062 3.75 -3.128906 3.46875 -3.390625 C 3.195312 -3.648438 2.851562 -3.78125 2.4375 -3.78125 Z M 2.4375 -3.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(569.517201, 201.145194)">
                                <g>
                                    <path
                                        d="M 4.71875 -4.234375 L 4.71875 -0.515625 C 4.71875 0.203125 4.539062 0.734375 4.1875 1.078125 C 3.84375 1.429688 3.316406 1.609375 2.609375 1.609375 C 2.210938 1.609375 1.835938 1.546875 1.484375 1.421875 C 1.128906 1.304688 0.84375 1.148438 0.625 0.953125 L 0.921875 0.515625 C 1.117188 0.703125 1.363281 0.84375 1.65625 0.9375 C 1.957031 1.039062 2.269531 1.09375 2.59375 1.09375 C 3.125 1.09375 3.515625 0.96875 3.765625 0.71875 C 4.023438 0.46875 4.15625 0.0820312 4.15625 -0.4375 L 4.15625 -0.984375 C 3.976562 -0.710938 3.742188 -0.503906 3.453125 -0.359375 C 3.171875 -0.222656 2.851562 -0.15625 2.5 -0.15625 C 2.101562 -0.15625 1.738281 -0.242188 1.40625 -0.421875 C 1.082031 -0.597656 0.828125 -0.84375 0.640625 -1.15625 C 0.460938 -1.46875 0.375 -1.820312 0.375 -2.21875 C 0.375 -2.625 0.460938 -2.976562 0.640625 -3.28125 C 0.828125 -3.59375 1.082031 -3.832031 1.40625 -4 C 1.726562 -4.175781 2.09375 -4.265625 2.5 -4.265625 C 2.863281 -4.265625 3.1875 -4.191406 3.46875 -4.046875 C 3.757812 -3.910156 3.992188 -3.703125 4.171875 -3.421875 L 4.171875 -4.234375 Z M 2.5625 -0.671875 C 2.863281 -0.671875 3.132812 -0.734375 3.375 -0.859375 C 3.625 -0.992188 3.816406 -1.179688 3.953125 -1.421875 C 4.097656 -1.660156 4.171875 -1.925781 4.171875 -2.21875 C 4.171875 -2.519531 4.097656 -2.785156 3.953125 -3.015625 C 3.816406 -3.253906 3.628906 -3.4375 3.390625 -3.5625 C 3.148438 -3.695312 2.875 -3.765625 2.5625 -3.765625 C 2.25 -3.765625 1.96875 -3.703125 1.71875 -3.578125 C 1.476562 -3.453125 1.289062 -3.269531 1.15625 -3.03125 C 1.019531 -2.789062 0.953125 -2.519531 0.953125 -2.21875 C 0.953125 -1.925781 1.019531 -1.660156 1.15625 -1.421875 C 1.289062 -1.179688 1.476562 -0.992188 1.71875 -0.859375 C 1.96875 -0.734375 2.25 -0.671875 2.5625 -0.671875 Z M 2.5625 -0.671875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(575.04771, 201.145194)">
                                <g>
                                    <path
                                        d="M 2.53125 0.046875 C 2.125 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.125 -4.265625 2.53125 -4.265625 C 2.9375 -4.265625 3.300781 -4.171875 3.625 -3.984375 C 3.957031 -3.804688 4.21875 -3.550781 4.40625 -3.21875 C 4.59375 -2.894531 4.6875 -2.53125 4.6875 -2.125 C 4.6875 -1.707031 4.59375 -1.332031 4.40625 -1 C 4.21875 -0.675781 3.957031 -0.421875 3.625 -0.234375 C 3.300781 -0.046875 2.9375 0.046875 2.53125 0.046875 Z M 2.53125 -0.46875 C 2.832031 -0.46875 3.101562 -0.535156 3.34375 -0.671875 C 3.582031 -0.804688 3.769531 -1 3.90625 -1.25 C 4.039062 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.039062 -2.734375 3.90625 -2.984375 C 3.769531 -3.234375 3.582031 -3.425781 3.34375 -3.5625 C 3.101562 -3.695312 2.832031 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 2.53125 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(580.102564, 201.145194)">
                                <g>
                                    <path
                                        d="M 2.5625 0.046875 C 2.132812 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.132812 -4.265625 2.5625 -4.265625 C 2.925781 -4.265625 3.25 -4.191406 3.53125 -4.046875 C 3.820312 -3.910156 4.050781 -3.707031 4.21875 -3.4375 L 3.796875 -3.140625 C 3.648438 -3.347656 3.46875 -3.503906 3.25 -3.609375 C 3.039062 -3.710938 2.8125 -3.765625 2.5625 -3.765625 C 2.25 -3.765625 1.96875 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.789062 1.019531 -1.5 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.96875 -0.535156 2.25 -0.46875 2.5625 -0.46875 C 2.8125 -0.46875 3.039062 -0.519531 3.25 -0.625 C 3.46875 -0.726562 3.648438 -0.882812 3.796875 -1.09375 L 4.21875 -0.796875 C 4.050781 -0.523438 3.820312 -0.316406 3.53125 -0.171875 C 3.238281 -0.0234375 2.914062 0.046875 2.5625 0.046875 Z M 2.5625 0.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(584.641454, 201.145194)">
                                <g>
                                    <path
                                        d="M 0.796875 -4.234375 L 1.375 -4.234375 L 1.375 0 L 0.796875 0 Z M 1.078125 -5.171875 C 0.960938 -5.171875 0.863281 -5.207031 0.78125 -5.28125 C 0.695312 -5.363281 0.65625 -5.460938 0.65625 -5.578125 C 0.65625 -5.679688 0.695312 -5.773438 0.78125 -5.859375 C 0.863281 -5.941406 0.960938 -5.984375 1.078125 -5.984375 C 1.203125 -5.984375 1.300781 -5.941406 1.375 -5.859375 C 1.457031 -5.785156 1.5 -5.695312 1.5 -5.59375 C 1.5 -5.46875 1.457031 -5.363281 1.375 -5.28125 C 1.300781 -5.207031 1.203125 -5.171875 1.078125 -5.171875 Z M 1.078125 -5.171875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(586.81012, 201.145194)">
                                <g>
                                    <path
                                        d="M 2.53125 0.046875 C 2.125 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.125 -4.265625 2.53125 -4.265625 C 2.9375 -4.265625 3.300781 -4.171875 3.625 -3.984375 C 3.957031 -3.804688 4.21875 -3.550781 4.40625 -3.21875 C 4.59375 -2.894531 4.6875 -2.53125 4.6875 -2.125 C 4.6875 -1.707031 4.59375 -1.332031 4.40625 -1 C 4.21875 -0.675781 3.957031 -0.421875 3.625 -0.234375 C 3.300781 -0.046875 2.9375 0.046875 2.53125 0.046875 Z M 2.53125 -0.46875 C 2.832031 -0.46875 3.101562 -0.535156 3.34375 -0.671875 C 3.582031 -0.804688 3.769531 -1 3.90625 -1.25 C 4.039062 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.039062 -2.734375 3.90625 -2.984375 C 3.769531 -3.234375 3.582031 -3.425781 3.34375 -3.5625 C 3.101562 -3.695312 2.832031 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 2.53125 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(583.032065, 165.165466)">
                                <g>
                                    <path
                                        d="M 2.484375 -5.640625 L 2.484375 0 L 1.1875 0 L 1.1875 -4.59375 L 0.0625 -4.59375 L 0.0625 -5.640625 Z M 2.484375 -5.640625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(586.192357, 165.165466)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(589.667066, 165.165466)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(594.641296, 165.165466)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(596.92283, 165.165466)">
                                <g>
                                    <path
                                        d="M 6.09375 -5.640625 L 3.65625 0 L 2.359375 0 L -0.078125 -5.640625 L 1.34375 -5.640625 L 3.0625 -1.609375 L 4.796875 -5.640625 Z M 6.09375 -5.640625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(602.937056, 165.165466)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(608.024159, 165.165466)">
                                <g>
                                    <path
                                        d="M 3.21875 -4.40625 C 3.75 -4.40625 4.179688 -4.242188 4.515625 -3.921875 C 4.847656 -3.597656 5.015625 -3.117188 5.015625 -2.484375 L 5.015625 0 L 3.75 0 L 3.75 -2.296875 C 3.75 -2.640625 3.675781 -2.894531 3.53125 -3.0625 C 3.382812 -3.226562 3.164062 -3.3125 2.875 -3.3125 C 2.5625 -3.3125 2.3125 -3.210938 2.125 -3.015625 C 1.9375 -2.816406 1.84375 -2.523438 1.84375 -2.140625 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.828125 C 1.945312 -4.015625 2.15625 -4.15625 2.40625 -4.25 C 2.65625 -4.351562 2.925781 -4.40625 3.21875 -4.40625 Z M 3.21875 -4.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(613.59498, 165.165466)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(617.101938, 165.165466)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(566.033926, 136.719431)">
                                <g>
                                    <path
                                        d="M 3.109375 -5.640625 C 3.609375 -5.640625 4.039062 -5.554688 4.40625 -5.390625 C 4.78125 -5.222656 5.066406 -4.984375 5.265625 -4.671875 C 5.460938 -4.367188 5.5625 -4.007812 5.5625 -3.59375 C 5.5625 -3.175781 5.460938 -2.8125 5.265625 -2.5 C 5.066406 -2.195312 4.78125 -1.960938 4.40625 -1.796875 C 4.039062 -1.640625 3.609375 -1.5625 3.109375 -1.5625 L 1.96875 -1.5625 L 1.96875 0 L 0.671875 0 L 0.671875 -5.640625 Z M 3.046875 -2.625 C 3.429688 -2.625 3.722656 -2.707031 3.921875 -2.875 C 4.128906 -3.039062 4.234375 -3.28125 4.234375 -3.59375 C 4.234375 -3.914062 4.128906 -4.160156 3.921875 -4.328125 C 3.722656 -4.492188 3.429688 -4.578125 3.046875 -4.578125 L 1.96875 -4.578125 L 1.96875 -2.625 Z M 3.046875 -2.625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(571.935285, 136.719431)">
                                <g>
                                    <path
                                        d="M 4.953125 -4.34375 L 4.953125 0 L 3.75 0 L 3.75 -0.515625 C 3.582031 -0.328125 3.382812 -0.179688 3.15625 -0.078125 C 2.925781 0.015625 2.675781 0.0625 2.40625 0.0625 C 1.84375 0.0625 1.394531 -0.0976562 1.0625 -0.421875 C 0.726562 -0.753906 0.5625 -1.242188 0.5625 -1.890625 L 0.5625 -4.34375 L 1.8125 -4.34375 L 1.8125 -2.078125 C 1.8125 -1.378906 2.101562 -1.03125 2.6875 -1.03125 C 2.988281 -1.03125 3.226562 -1.125 3.40625 -1.3125 C 3.59375 -1.507812 3.6875 -1.800781 3.6875 -2.1875 L 3.6875 -4.34375 Z M 4.953125 -4.34375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(577.473857, 136.719431)">
                                <g>
                                    <path
                                        d="M 3.21875 -4.40625 C 3.75 -4.40625 4.179688 -4.242188 4.515625 -3.921875 C 4.847656 -3.597656 5.015625 -3.117188 5.015625 -2.484375 L 5.015625 0 L 3.75 0 L 3.75 -2.296875 C 3.75 -2.640625 3.675781 -2.894531 3.53125 -3.0625 C 3.382812 -3.226562 3.164062 -3.3125 2.875 -3.3125 C 2.5625 -3.3125 2.3125 -3.210938 2.125 -3.015625 C 1.9375 -2.816406 1.84375 -2.523438 1.84375 -2.140625 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.828125 C 1.945312 -4.015625 2.15625 -4.15625 2.40625 -4.25 C 2.65625 -4.351562 2.925781 -4.40625 3.21875 -4.40625 Z M 3.21875 -4.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(583.044677, 136.719431)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(586.551635, 136.719431)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(591.832224, 136.719431)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(594.113758, 136.719431)">
                                <g>
                                    <path
                                        d="M 5 -5.984375 L 5 0 L 3.796875 0 L 3.796875 -0.5 C 3.484375 -0.125 3.03125 0.0625 2.4375 0.0625 C 2.03125 0.0625 1.660156 -0.0234375 1.328125 -0.203125 C 1.003906 -0.390625 0.75 -0.648438 0.5625 -0.984375 C 0.375 -1.328125 0.28125 -1.722656 0.28125 -2.171875 C 0.28125 -2.617188 0.375 -3.007812 0.5625 -3.34375 C 0.75 -3.6875 1.003906 -3.945312 1.328125 -4.125 C 1.660156 -4.3125 2.03125 -4.40625 2.4375 -4.40625 C 2.988281 -4.40625 3.421875 -4.226562 3.734375 -3.875 L 3.734375 -5.984375 Z M 2.65625 -0.96875 C 2.976562 -0.96875 3.242188 -1.078125 3.453125 -1.296875 C 3.660156 -1.515625 3.765625 -1.804688 3.765625 -2.171875 C 3.765625 -2.535156 3.660156 -2.828125 3.453125 -3.046875 C 3.242188 -3.265625 2.976562 -3.375 2.65625 -3.375 C 2.332031 -3.375 2.066406 -3.265625 1.859375 -3.046875 C 1.648438 -2.828125 1.546875 -2.535156 1.546875 -2.171875 C 1.546875 -1.804688 1.648438 -1.515625 1.859375 -1.296875 C 2.066406 -1.078125 2.332031 -0.96875 2.65625 -0.96875 Z M 2.65625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(599.692636, 136.719431)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(604.77974, 136.719431)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(607.061274, 136.719431)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(612.148377, 136.719431)">
                                <g>
                                    <path
                                        d="M 4.984375 -4.34375 L 4.984375 1.5625 L 3.71875 1.5625 L 3.71875 -0.453125 C 3.40625 -0.109375 2.972656 0.0625 2.421875 0.0625 C 2.015625 0.0625 1.644531 -0.0234375 1.3125 -0.203125 C 0.988281 -0.390625 0.734375 -0.648438 0.546875 -0.984375 C 0.359375 -1.328125 0.265625 -1.722656 0.265625 -2.171875 C 0.265625 -2.617188 0.359375 -3.007812 0.546875 -3.34375 C 0.734375 -3.6875 0.988281 -3.945312 1.3125 -4.125 C 1.644531 -4.3125 2.015625 -4.40625 2.421875 -4.40625 C 3.015625 -4.40625 3.46875 -4.21875 3.78125 -3.84375 L 3.78125 -4.34375 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(617.711134, 136.719431)">
                                <g>
                                    <path
                                        d="M 4.953125 -4.34375 L 4.953125 0 L 3.75 0 L 3.75 -0.515625 C 3.582031 -0.328125 3.382812 -0.179688 3.15625 -0.078125 C 2.925781 0.015625 2.675781 0.0625 2.40625 0.0625 C 1.84375 0.0625 1.394531 -0.0976562 1.0625 -0.421875 C 0.726562 -0.753906 0.5625 -1.242188 0.5625 -1.890625 L 0.5625 -4.34375 L 1.8125 -4.34375 L 1.8125 -2.078125 C 1.8125 -1.378906 2.101562 -1.03125 2.6875 -1.03125 C 2.988281 -1.03125 3.226562 -1.125 3.40625 -1.3125 C 3.59375 -1.507812 3.6875 -1.800781 3.6875 -2.1875 L 3.6875 -4.34375 Z M 4.953125 -4.34375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(623.249706, 136.719431)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(625.676356, 136.719431)">
                                <g>
                                    <path
                                        d="M 0.578125 -5.984375 L 1.84375 -5.984375 L 1.84375 0 L 0.578125 0 Z M 0.578125 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(628.103006, 136.719431)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(630.529655, 136.719431)">
                                <g>
                                    <path
                                        d="M 3.140625 -4.40625 C 3.546875 -4.40625 3.910156 -4.3125 4.234375 -4.125 C 4.566406 -3.9375 4.828125 -3.675781 5.015625 -3.34375 C 5.210938 -3.007812 5.3125 -2.617188 5.3125 -2.171875 C 5.3125 -1.722656 5.210938 -1.328125 5.015625 -0.984375 C 4.828125 -0.648438 4.566406 -0.390625 4.234375 -0.203125 C 3.910156 -0.0234375 3.546875 0.0625 3.140625 0.0625 C 2.546875 0.0625 2.09375 -0.125 1.78125 -0.5 L 1.78125 0 L 0.578125 0 L 0.578125 -5.984375 L 1.84375 -5.984375 L 1.84375 -3.875 C 2.15625 -4.226562 2.585938 -4.40625 3.140625 -4.40625 Z M 2.921875 -0.96875 C 3.242188 -0.96875 3.507812 -1.078125 3.71875 -1.296875 C 3.925781 -1.515625 4.03125 -1.804688 4.03125 -2.171875 C 4.03125 -2.535156 3.925781 -2.828125 3.71875 -3.046875 C 3.507812 -3.265625 3.242188 -3.375 2.921875 -3.375 C 2.597656 -3.375 2.332031 -3.265625 2.125 -3.046875 C 1.925781 -2.828125 1.828125 -2.535156 1.828125 -2.171875 C 1.828125 -1.804688 1.925781 -1.515625 2.125 -1.296875 C 2.332031 -1.078125 2.597656 -0.96875 2.921875 -0.96875 Z M 2.921875 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(636.092412, 136.719431)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(639.567121, 136.719431)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(641.993771, 136.719431)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(632.523191, 95.638846)">
                                <g>
                                    <path
                                        d="M 5.046875 -1.046875 L 5.046875 0 L 0.671875 0 L 0.671875 -5.640625 L 4.9375 -5.640625 L 4.9375 -4.59375 L 1.96875 -4.59375 L 1.96875 -3.375 L 4.59375 -3.375 L 4.59375 -2.359375 L 1.96875 -2.359375 L 1.96875 -1.046875 Z M 5.046875 -1.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(637.932769, 95.638846)">
                                <g>
                                    <path
                                        d="M 2.046875 0.0625 C 1.679688 0.0625 1.328125 0.0195312 0.984375 -0.0625 C 0.640625 -0.15625 0.363281 -0.269531 0.15625 -0.40625 L 0.578125 -1.3125 C 0.773438 -1.1875 1.007812 -1.082031 1.28125 -1 C 1.550781 -0.925781 1.820312 -0.890625 2.09375 -0.890625 C 2.625 -0.890625 2.890625 -1.019531 2.890625 -1.28125 C 2.890625 -1.40625 2.816406 -1.492188 2.671875 -1.546875 C 2.523438 -1.597656 2.300781 -1.644531 2 -1.6875 C 1.644531 -1.738281 1.351562 -1.796875 1.125 -1.859375 C 0.894531 -1.929688 0.691406 -2.054688 0.515625 -2.234375 C 0.347656 -2.410156 0.265625 -2.664062 0.265625 -3 C 0.265625 -3.269531 0.34375 -3.507812 0.5 -3.71875 C 0.65625 -3.9375 0.882812 -4.101562 1.1875 -4.21875 C 1.5 -4.34375 1.863281 -4.40625 2.28125 -4.40625 C 2.582031 -4.40625 2.882812 -4.367188 3.1875 -4.296875 C 3.488281 -4.234375 3.738281 -4.140625 3.9375 -4.015625 L 3.515625 -3.125 C 3.140625 -3.34375 2.726562 -3.453125 2.28125 -3.453125 C 2.007812 -3.453125 1.804688 -3.410156 1.671875 -3.328125 C 1.535156 -3.253906 1.46875 -3.160156 1.46875 -3.046875 C 1.46875 -2.910156 1.539062 -2.816406 1.6875 -2.765625 C 1.832031 -2.710938 2.0625 -2.660156 2.375 -2.609375 C 2.726562 -2.554688 3.019531 -2.492188 3.25 -2.421875 C 3.476562 -2.359375 3.675781 -2.238281 3.84375 -2.0625 C 4.007812 -1.882812 4.09375 -1.632812 4.09375 -1.3125 C 4.09375 -1.039062 4.007812 -0.800781 3.84375 -0.59375 C 3.6875 -0.382812 3.453125 -0.222656 3.140625 -0.109375 C 2.828125 0.00390625 2.460938 0.0625 2.046875 0.0625 Z M 2.046875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(642.213675, 95.638846)">
                                <g>
                                    <path
                                        d="M 2.671875 0.0625 C 2.210938 0.0625 1.796875 -0.03125 1.421875 -0.21875 C 1.054688 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.054688 -3.921875 1.421875 -4.109375 C 1.796875 -4.304688 2.210938 -4.40625 2.671875 -4.40625 C 3.128906 -4.40625 3.53125 -4.304688 3.875 -4.109375 C 4.21875 -3.921875 4.46875 -3.648438 4.625 -3.296875 L 3.640625 -2.78125 C 3.421875 -3.175781 3.097656 -3.375 2.671875 -3.375 C 2.335938 -3.375 2.0625 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.796875 1.632812 -1.5 1.84375 -1.28125 C 2.0625 -1.070312 2.335938 -0.96875 2.671875 -0.96875 C 3.097656 -0.96875 3.421875 -1.164062 3.640625 -1.5625 L 4.625 -1.03125 C 4.46875 -0.6875 4.21875 -0.414062 3.875 -0.21875 C 3.53125 -0.03125 3.128906 0.0625 2.671875 0.0625 Z M 2.671875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(646.978298, 95.638846)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(651.952529, 95.638846)">
                                <g>
                                    <path
                                        d="M 0.578125 -5.984375 L 1.84375 -5.984375 L 1.84375 0 L 0.578125 0 Z M 0.578125 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(654.379178, 95.638846)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(659.353409, 95.638846)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(626.564889, 106.92561)">
                                <g>
                                    <path
                                        d="M 2.46875 0.046875 C 2.050781 0.046875 1.648438 -0.0195312 1.265625 -0.15625 C 0.878906 -0.289062 0.582031 -0.46875 0.375 -0.6875 L 0.609375 -1.140625 C 0.816406 -0.941406 1.085938 -0.773438 1.421875 -0.640625 C 1.765625 -0.515625 2.113281 -0.453125 2.46875 -0.453125 C 2.976562 -0.453125 3.359375 -0.546875 3.609375 -0.734375 C 3.859375 -0.921875 3.984375 -1.160156 3.984375 -1.453125 C 3.984375 -1.679688 3.914062 -1.863281 3.78125 -2 C 3.644531 -2.132812 3.476562 -2.238281 3.28125 -2.3125 C 3.082031 -2.382812 2.804688 -2.460938 2.453125 -2.546875 C 2.023438 -2.648438 1.6875 -2.75 1.4375 -2.84375 C 1.1875 -2.945312 0.96875 -3.101562 0.78125 -3.3125 C 0.601562 -3.519531 0.515625 -3.796875 0.515625 -4.140625 C 0.515625 -4.429688 0.585938 -4.691406 0.734375 -4.921875 C 0.890625 -5.148438 1.125 -5.332031 1.4375 -5.46875 C 1.75 -5.613281 2.132812 -5.6875 2.59375 -5.6875 C 2.914062 -5.6875 3.226562 -5.640625 3.53125 -5.546875 C 3.84375 -5.460938 4.113281 -5.34375 4.34375 -5.1875 L 4.140625 -4.71875 C 3.910156 -4.875 3.660156 -4.988281 3.390625 -5.0625 C 3.117188 -5.144531 2.851562 -5.1875 2.59375 -5.1875 C 2.101562 -5.1875 1.734375 -5.085938 1.484375 -4.890625 C 1.234375 -4.703125 1.109375 -4.457031 1.109375 -4.15625 C 1.109375 -3.9375 1.175781 -3.753906 1.3125 -3.609375 C 1.445312 -3.472656 1.617188 -3.367188 1.828125 -3.296875 C 2.035156 -3.222656 2.3125 -3.144531 2.65625 -3.0625 C 3.070312 -2.957031 3.40625 -2.851562 3.65625 -2.75 C 3.914062 -2.65625 4.132812 -2.503906 4.3125 -2.296875 C 4.488281 -2.097656 4.578125 -1.828125 4.578125 -1.484375 C 4.578125 -1.203125 4.5 -0.941406 4.34375 -0.703125 C 4.195312 -0.472656 3.960938 -0.289062 3.640625 -0.15625 C 3.328125 -0.0195312 2.9375 0.046875 2.46875 0.046875 Z M 2.46875 0.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(631.522998, 106.92561)">
                                <g>
                                    <path
                                        d="M 2.53125 0.046875 C 2.125 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.125 -4.265625 2.53125 -4.265625 C 2.9375 -4.265625 3.300781 -4.171875 3.625 -3.984375 C 3.957031 -3.804688 4.21875 -3.550781 4.40625 -3.21875 C 4.59375 -2.894531 4.6875 -2.53125 4.6875 -2.125 C 4.6875 -1.707031 4.59375 -1.332031 4.40625 -1 C 4.21875 -0.675781 3.957031 -0.421875 3.625 -0.234375 C 3.300781 -0.046875 2.9375 0.046875 2.53125 0.046875 Z M 2.53125 -0.46875 C 2.832031 -0.46875 3.101562 -0.535156 3.34375 -0.671875 C 3.582031 -0.804688 3.769531 -1 3.90625 -1.25 C 4.039062 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.039062 -2.734375 3.90625 -2.984375 C 3.769531 -3.234375 3.582031 -3.425781 3.34375 -3.5625 C 3.101562 -3.695312 2.832031 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 2.53125 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(636.577853, 106.92561)">
                                <g>
                                    <path
                                        d="M 1.9375 0.046875 C 1.59375 0.046875 1.257812 -0.00390625 0.9375 -0.109375 C 0.625 -0.210938 0.378906 -0.335938 0.203125 -0.484375 L 0.46875 -0.9375 C 0.644531 -0.789062 0.867188 -0.671875 1.140625 -0.578125 C 1.410156 -0.492188 1.6875 -0.453125 1.96875 -0.453125 C 2.363281 -0.453125 2.648438 -0.515625 2.828125 -0.640625 C 3.015625 -0.765625 3.109375 -0.9375 3.109375 -1.15625 C 3.109375 -1.3125 3.054688 -1.429688 2.953125 -1.515625 C 2.859375 -1.609375 2.734375 -1.675781 2.578125 -1.71875 C 2.421875 -1.769531 2.210938 -1.816406 1.953125 -1.859375 C 1.609375 -1.921875 1.332031 -1.984375 1.125 -2.046875 C 0.914062 -2.117188 0.734375 -2.234375 0.578125 -2.390625 C 0.429688 -2.554688 0.359375 -2.78125 0.359375 -3.0625 C 0.359375 -3.414062 0.503906 -3.703125 0.796875 -3.921875 C 1.097656 -4.148438 1.515625 -4.265625 2.046875 -4.265625 C 2.316406 -4.265625 2.585938 -4.226562 2.859375 -4.15625 C 3.128906 -4.09375 3.359375 -4 3.546875 -3.875 L 3.296875 -3.421875 C 2.941406 -3.660156 2.523438 -3.78125 2.046875 -3.78125 C 1.671875 -3.78125 1.390625 -3.710938 1.203125 -3.578125 C 1.023438 -3.453125 0.9375 -3.285156 0.9375 -3.078125 C 0.9375 -2.921875 0.988281 -2.789062 1.09375 -2.6875 C 1.195312 -2.59375 1.328125 -2.519531 1.484375 -2.46875 C 1.640625 -2.425781 1.851562 -2.382812 2.125 -2.34375 C 2.46875 -2.269531 2.738281 -2.203125 2.9375 -2.140625 C 3.144531 -2.078125 3.320312 -1.96875 3.46875 -1.8125 C 3.613281 -1.65625 3.6875 -1.441406 3.6875 -1.171875 C 3.6875 -0.796875 3.53125 -0.5 3.21875 -0.28125 C 2.90625 -0.0625 2.476562 0.046875 1.9375 0.046875 Z M 1.9375 0.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(640.520151, 106.92561)">
                                <g>
                                    <path
                                        d="M 3.03125 -0.265625 C 2.925781 -0.160156 2.789062 -0.0820312 2.625 -0.03125 C 2.46875 0.0195312 2.304688 0.046875 2.140625 0.046875 C 1.742188 0.046875 1.4375 -0.0625 1.21875 -0.28125 C 1 -0.5 0.890625 -0.800781 0.890625 -1.1875 L 0.890625 -3.75 L 0.140625 -3.75 L 0.140625 -4.234375 L 0.890625 -4.234375 L 0.890625 -5.171875 L 1.46875 -5.171875 L 1.46875 -4.234375 L 2.75 -4.234375 L 2.75 -3.75 L 1.46875 -3.75 L 1.46875 -1.21875 C 1.46875 -0.96875 1.53125 -0.773438 1.65625 -0.640625 C 1.78125 -0.515625 1.960938 -0.453125 2.203125 -0.453125 C 2.316406 -0.453125 2.425781 -0.46875 2.53125 -0.5 C 2.644531 -0.539062 2.742188 -0.597656 2.828125 -0.671875 Z M 3.03125 -0.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(643.793311, 106.92561)">
                                <g>
                                    <path
                                        d="M 4.484375 -1.9375 L 0.9375 -1.9375 C 0.96875 -1.5 1.132812 -1.144531 1.4375 -0.875 C 1.75 -0.601562 2.140625 -0.46875 2.609375 -0.46875 C 2.867188 -0.46875 3.109375 -0.515625 3.328125 -0.609375 C 3.554688 -0.703125 3.75 -0.84375 3.90625 -1.03125 L 4.234375 -0.65625 C 4.046875 -0.425781 3.8125 -0.25 3.53125 -0.125 C 3.25 -0.0078125 2.9375 0.046875 2.59375 0.046875 C 2.15625 0.046875 1.769531 -0.046875 1.4375 -0.234375 C 1.101562 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.460938 -2.894531 0.640625 -3.21875 C 0.816406 -3.550781 1.0625 -3.804688 1.375 -3.984375 C 1.695312 -4.171875 2.050781 -4.265625 2.4375 -4.265625 C 2.832031 -4.265625 3.1875 -4.171875 3.5 -3.984375 C 3.8125 -3.804688 4.054688 -3.554688 4.234375 -3.234375 C 4.410156 -2.910156 4.5 -2.539062 4.5 -2.125 Z M 2.4375 -3.78125 C 2.03125 -3.78125 1.6875 -3.648438 1.40625 -3.390625 C 1.132812 -3.128906 0.976562 -2.789062 0.9375 -2.375 L 3.953125 -2.375 C 3.910156 -2.789062 3.75 -3.128906 3.46875 -3.390625 C 3.195312 -3.648438 2.851562 -3.78125 2.4375 -3.78125 Z M 2.4375 -3.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(648.662737, 106.92561)">
                                <g>
                                    <path
                                        d="M 2.953125 -4.265625 C 3.484375 -4.265625 3.90625 -4.109375 4.21875 -3.796875 C 4.539062 -3.492188 4.703125 -3.046875 4.703125 -2.453125 L 4.703125 0 L 4.125 0 L 4.125 -2.40625 C 4.125 -2.84375 4.015625 -3.175781 3.796875 -3.40625 C 3.578125 -3.632812 3.265625 -3.75 2.859375 -3.75 C 2.398438 -3.75 2.035156 -3.613281 1.765625 -3.34375 C 1.503906 -3.070312 1.375 -2.695312 1.375 -2.21875 L 1.375 0 L 0.796875 0 L 0.796875 -4.234375 L 1.34375 -4.234375 L 1.34375 -3.453125 C 1.5 -3.710938 1.710938 -3.910156 1.984375 -4.046875 C 2.265625 -4.191406 2.585938 -4.265625 2.953125 -4.265625 Z M 2.953125 -4.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(654.120691, 106.92561)">
                                <g>
                                    <path
                                        d="M 0.796875 -4.234375 L 1.375 -4.234375 L 1.375 0 L 0.796875 0 Z M 1.078125 -5.171875 C 0.960938 -5.171875 0.863281 -5.207031 0.78125 -5.28125 C 0.695312 -5.363281 0.65625 -5.460938 0.65625 -5.578125 C 0.65625 -5.679688 0.695312 -5.773438 0.78125 -5.859375 C 0.863281 -5.941406 0.960938 -5.984375 1.078125 -5.984375 C 1.203125 -5.984375 1.300781 -5.941406 1.375 -5.859375 C 1.457031 -5.785156 1.5 -5.695312 1.5 -5.59375 C 1.5 -5.46875 1.457031 -5.363281 1.375 -5.28125 C 1.300781 -5.207031 1.203125 -5.171875 1.078125 -5.171875 Z M 1.078125 -5.171875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(656.289358, 106.92561)">
                                <g>
                                    <path
                                        d="M 2.984375 -4.265625 C 3.378906 -4.265625 3.738281 -4.175781 4.0625 -4 C 4.382812 -3.820312 4.632812 -3.566406 4.8125 -3.234375 C 5 -2.910156 5.09375 -2.539062 5.09375 -2.125 C 5.09375 -1.695312 5 -1.320312 4.8125 -1 C 4.632812 -0.675781 4.382812 -0.421875 4.0625 -0.234375 C 3.738281 -0.046875 3.378906 0.046875 2.984375 0.046875 C 2.628906 0.046875 2.3125 -0.0234375 2.03125 -0.171875 C 1.75 -0.328125 1.519531 -0.550781 1.34375 -0.84375 L 1.34375 0 L 0.796875 0 L 0.796875 -5.984375 L 1.375 -5.984375 L 1.375 -3.4375 C 1.550781 -3.707031 1.773438 -3.910156 2.046875 -4.046875 C 2.328125 -4.191406 2.640625 -4.265625 2.984375 -4.265625 Z M 2.9375 -0.46875 C 3.238281 -0.46875 3.507812 -0.535156 3.75 -0.671875 C 3.988281 -0.804688 4.175781 -1 4.3125 -1.25 C 4.445312 -1.507812 4.515625 -1.800781 4.515625 -2.125 C 4.515625 -2.445312 4.445312 -2.734375 4.3125 -2.984375 C 4.175781 -3.234375 3.988281 -3.425781 3.75 -3.5625 C 3.507812 -3.695312 3.238281 -3.765625 2.9375 -3.765625 C 2.632812 -3.765625 2.363281 -3.695312 2.125 -3.5625 C 1.894531 -3.425781 1.707031 -3.234375 1.5625 -2.984375 C 1.425781 -2.734375 1.359375 -2.445312 1.359375 -2.125 C 1.359375 -1.800781 1.425781 -1.507812 1.5625 -1.25 C 1.707031 -1 1.894531 -0.804688 2.125 -0.671875 C 2.363281 -0.535156 2.632812 -0.46875 2.9375 -0.46875 Z M 2.9375 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(661.755369, 106.92561)">
                                <g>
                                    <path
                                        d="M 0.796875 -5.984375 L 1.375 -5.984375 L 1.375 0 L 0.796875 0 Z M 0.796875 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(663.924036, 106.92561)">
                                <g>
                                    <path
                                        d="M 4.484375 -1.9375 L 0.9375 -1.9375 C 0.96875 -1.5 1.132812 -1.144531 1.4375 -0.875 C 1.75 -0.601562 2.140625 -0.46875 2.609375 -0.46875 C 2.867188 -0.46875 3.109375 -0.515625 3.328125 -0.609375 C 3.554688 -0.703125 3.75 -0.84375 3.90625 -1.03125 L 4.234375 -0.65625 C 4.046875 -0.425781 3.8125 -0.25 3.53125 -0.125 C 3.25 -0.0078125 2.9375 0.046875 2.59375 0.046875 C 2.15625 0.046875 1.769531 -0.046875 1.4375 -0.234375 C 1.101562 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.460938 -2.894531 0.640625 -3.21875 C 0.816406 -3.550781 1.0625 -3.804688 1.375 -3.984375 C 1.695312 -4.171875 2.050781 -4.265625 2.4375 -4.265625 C 2.832031 -4.265625 3.1875 -4.171875 3.5 -3.984375 C 3.8125 -3.804688 4.054688 -3.554688 4.234375 -3.234375 C 4.410156 -2.910156 4.5 -2.539062 4.5 -2.125 Z M 2.4375 -3.78125 C 2.03125 -3.78125 1.6875 -3.648438 1.40625 -3.390625 C 1.132812 -3.128906 0.976562 -2.789062 0.9375 -2.375 L 3.953125 -2.375 C 3.910156 -2.789062 3.75 -3.128906 3.46875 -3.390625 C 3.195312 -3.648438 2.851562 -3.78125 2.4375 -3.78125 Z M 2.4375 -3.78125 " />
                                </g>
                            </g>
                        </g>
                        <g id="Explorar" clip-path="url(#b6d6726534)">
                            <g clip-path="url(#67ab615ee7)">
                                <path fill="#edc400"
                                    d="M 256.792969 342.964844 L 267.480469 342.964844 L 267.480469 353.65625 L 256.792969 353.65625 Z M 256.792969 342.964844 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>

                        </g>
                        <g id="Despertar" clip-path="url(#1b0aef135f)">
                            <g clip-path="url(#f1d881bbeb)">
                                <path fill="#b4c41d"
                                    d="M 195.023438 344.234375 L 205.710938 344.234375 L 205.710938 354.925781 L 195.023438 354.925781 Z M 195.023438 344.234375 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <g id="Ideacion" clip-path="url(#6608fcc74a)">
                            <g clip-path="url(#8502e0a488)">
                                <path fill="#e3854a"
                                    d="M 320.257812 335.050781 L 330.945312 335.050781 L 330.945312 345.738281 L 320.257812 345.738281 Z M 320.257812 335.050781 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <line x1="332" y1="343" x2="400" y2="343" stroke="white"
                            stroke-width="1" />
                        <text id="TIdeacion" x="403" y="346" font-family="Montserrat" font-size="10"
                            fill="white"></text>
                        <g id="Entrevista" clip-path="url(#e9aa0aced9)">
                            <g clip-path="url(#1f6254558d)">
                                <path fill="#d42457"
                                    d="M 377.785156 320.777344 L 388.476562 320.777344 L 388.476562 331.46875 L 377.785156 331.46875 Z M 377.785156 320.777344 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <line x1="390" y1="328" x2="450" y2="328" stroke="white"
                            stroke-width="1" />
                        <text id="TEntrevista" x="455" y="331" font-family="Montserrat" font-size="10"
                            fill="white"></text>
                        <g id="Demo1"clip-path="url(#2d42eccaad)">
                            <g clip-path="url(#64864366ec)">
                                <path fill="#264a90"
                                    d="M 436.910156 299.738281 L 447.597656 299.738281 L 447.597656 310.425781 L 436.910156 310.425781 Z M 436.910156 299.738281 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <line x1="450" y1="305" x2="490" y2="305" stroke="white"
                            stroke-width="1" />
                        <text id="TDemo1" x="495" y="308" font-family="Montserrat" font-size="10"
                            fill="white"></text>
                        <g id="Prototipo" clip-path="url(#180c27e056)">
                            <g clip-path="url(#b97d557854)">
                                <path fill="#b4c41d"
                                    d="M 491.480469 270.929688 L 502.167969 270.929688 L 502.167969 281.617188 L 491.480469 281.617188 Z M 491.480469 270.929688 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <line x1="505" y1="278" x2="550" y2="278" stroke="white"
                            stroke-width="1" />
                        <text id="TPrototipo" x="555" y="281" font-family="Montserrat" font-size="10"
                            fill="white"></text>
                        <g id="Entrevista2" clip-path="url(#52f871e5b4)">
                            <g clip-path="url(#7e0fc1c267)">
                                <path fill="#edc400"
                                    d="M 532.539062 243.636719 L 543.226562 243.636719 L 543.226562 254.328125 L 532.539062 254.328125 Z M 532.539062 243.636719 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <line x1="550" y1="250" x2="600" y2="250" stroke="white"
                            stroke-width="1" />
                        <text id="TEntrevista2" x="605" y="253" font-family="Montserrat" font-size="10"
                            fill="white"></text>
                        <g id="Modelo" clip-path="url(#138c52fa62)">
                            <g clip-path="url(#4699e072e8)">
                                <path fill="#e3854a"
                                    d="M 574.316406 213.339844 L 585.003906 213.339844 L 585.003906 224.03125 L 574.316406 224.03125 Z M 574.316406 213.339844 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <line x1="590" y1="220" x2="630" y2="220" stroke="white"
                            stroke-width="1" />
                        <text id="TModelo" x="635" y="223" font-family="Montserrat" font-size="10"
                            fill="white"></text>
                        <g id="Equilibrio" clip-path="url(#5116c9c415)">
                            <g clip-path="url(#108a069cfe)">
                                <path fill="#264a90"
                                    d="M 641.933594 142.359375 L 652.621094 142.359375 L 652.621094 153.046875 L 641.933594 153.046875 Z M 641.933594 142.359375 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <line x1="653" y1="149" x2="680" y2="149" stroke="white"
                            stroke-width="1" />
                        <text id="TEquilibrio" x="685" y="152" font-family="Montserrat" font-size="10"
                            fill="white"></text>
                        <g id="Venta" clip-path="url(#201940b823)">
                            <g clip-path="url(#1d760da149)">
                                <path fill="#d42457"
                                    d="M 611.390625 177.257812 L 622.078125 177.257812 L 622.078125 187.945312 L 611.390625 187.945312 Z M 611.390625 177.257812 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <line x1="622" y1="183" x2="650" y2="183" stroke="white"
                            stroke-width="1" />
                        <text id="TVenta" x="655" y="186" font-family="Montserrat" font-size="10"
                            fill="white"></text>
                        <g id="Escalar" clip-path="url(#679f8231a7)">
                            <g clip-path="url(#e77d62bcba)">
                                <path fill="#b4c41d"
                                    d="M 673.738281 98.863281 L 684.425781 98.863281 L 684.425781 109.550781 L 673.738281 109.550781 Z M 673.738281 98.863281 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <line x1="685" y1="105" x2="710" y2="105" stroke="white"
                            stroke-width="1" />
                        <text id="TEscalar" x="715" y="108" font-family="Montserrat" font-size="10"
                            fill="white"></text>
                        <g id="Caso" clip-path="url(#335c7dd746)">
                            <g clip-path="url(#9e32f7a833)">
                                <path fill="#edc400"
                                    d="M 702.132812 50.738281 L 712.824219 50.738281 L 712.824219 61.429688 L 702.132812 61.429688 Z M 702.132812 50.738281 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </g>
                        <line x1="715" y1="55" x2="730" y2="55" stroke="white"
                            stroke-width="1" />
                        <text id="TCaso" x="735" y="58" font-family="Montserrat" font-size="10"
                            fill="white"></text>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(182.078383, 332.425053)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.90625 L 2.8125 -4.90625 C 3.34375 -4.90625 3.8125 -4.800781 4.21875 -4.59375 C 4.625 -4.394531 4.941406 -4.109375 5.171875 -3.734375 C 5.398438 -3.367188 5.515625 -2.941406 5.515625 -2.453125 C 5.515625 -1.960938 5.398438 -1.53125 5.171875 -1.15625 C 4.941406 -0.789062 4.625 -0.503906 4.21875 -0.296875 C 3.8125 -0.0976562 3.34375 0 2.8125 0 L 0.578125 0 Z M 2.75 -0.9375 C 3.238281 -0.9375 3.628906 -1.070312 3.921875 -1.34375 C 4.210938 -1.613281 4.359375 -1.984375 4.359375 -2.453125 C 4.359375 -2.921875 4.210938 -3.289062 3.921875 -3.5625 C 3.628906 -3.832031 3.238281 -3.96875 2.75 -3.96875 L 1.71875 -3.96875 L 1.71875 -0.9375 Z M 2.75 -0.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(187.862228, 332.425053)">
                                <g>
                                    <path
                                        d="M 4.1875 -1.875 C 4.1875 -1.851562 4.179688 -1.753906 4.171875 -1.578125 L 1.328125 -1.578125 C 1.378906 -1.335938 1.5 -1.148438 1.6875 -1.015625 C 1.875 -0.878906 2.113281 -0.8125 2.40625 -0.8125 C 2.59375 -0.8125 2.765625 -0.84375 2.921875 -0.90625 C 3.078125 -0.96875 3.21875 -1.0625 3.34375 -1.1875 L 3.921875 -0.546875 C 3.566406 -0.140625 3.050781 0.0625 2.375 0.0625 C 1.945312 0.0625 1.566406 -0.0195312 1.234375 -0.1875 C 0.910156 -0.351562 0.660156 -0.582031 0.484375 -0.875 C 0.304688 -1.175781 0.21875 -1.515625 0.21875 -1.890625 C 0.21875 -2.253906 0.304688 -2.582031 0.484375 -2.875 C 0.660156 -3.175781 0.898438 -3.410156 1.203125 -3.578125 C 1.515625 -3.742188 1.859375 -3.828125 2.234375 -3.828125 C 2.597656 -3.828125 2.929688 -3.742188 3.234375 -3.578125 C 3.535156 -3.421875 3.769531 -3.191406 3.9375 -2.890625 C 4.101562 -2.597656 4.1875 -2.257812 4.1875 -1.875 Z M 2.234375 -3 C 1.992188 -3 1.785156 -2.925781 1.609375 -2.78125 C 1.441406 -2.644531 1.34375 -2.457031 1.3125 -2.21875 L 3.15625 -2.21875 C 3.125 -2.445312 3.023438 -2.632812 2.859375 -2.78125 C 2.691406 -2.925781 2.484375 -3 2.234375 -3 Z M 2.234375 -3 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(192.280635, 332.425053)">
                                <g>
                                    <path
                                        d="M 1.765625 0.0625 C 1.453125 0.0625 1.144531 0.0234375 0.84375 -0.046875 C 0.550781 -0.128906 0.316406 -0.226562 0.140625 -0.34375 L 0.5 -1.140625 C 0.664062 -1.023438 0.867188 -0.929688 1.109375 -0.859375 C 1.347656 -0.796875 1.582031 -0.765625 1.8125 -0.765625 C 2.269531 -0.765625 2.5 -0.878906 2.5 -1.109375 C 2.5 -1.222656 2.4375 -1.300781 2.3125 -1.34375 C 2.1875 -1.382812 1.992188 -1.425781 1.734375 -1.46875 C 1.429688 -1.507812 1.175781 -1.5625 0.96875 -1.625 C 0.769531 -1.6875 0.597656 -1.789062 0.453125 -1.9375 C 0.304688 -2.09375 0.234375 -2.316406 0.234375 -2.609375 C 0.234375 -2.847656 0.300781 -3.054688 0.4375 -3.234375 C 0.570312 -3.421875 0.769531 -3.566406 1.03125 -3.671875 C 1.300781 -3.773438 1.613281 -3.828125 1.96875 -3.828125 C 2.238281 -3.828125 2.503906 -3.796875 2.765625 -3.734375 C 3.023438 -3.671875 3.242188 -3.59375 3.421875 -3.5 L 3.0625 -2.71875 C 2.726562 -2.90625 2.363281 -3 1.96875 -3 C 1.738281 -3 1.566406 -2.960938 1.453125 -2.890625 C 1.335938 -2.828125 1.28125 -2.742188 1.28125 -2.640625 C 1.28125 -2.523438 1.34375 -2.441406 1.46875 -2.390625 C 1.59375 -2.347656 1.789062 -2.304688 2.0625 -2.265625 C 2.375 -2.210938 2.625 -2.15625 2.8125 -2.09375 C 3.007812 -2.039062 3.179688 -1.9375 3.328125 -1.78125 C 3.472656 -1.625 3.546875 -1.410156 3.546875 -1.140625 C 3.546875 -0.910156 3.472656 -0.703125 3.328125 -0.515625 C 3.191406 -0.335938 2.988281 -0.195312 2.71875 -0.09375 C 2.457031 0.0078125 2.140625 0.0625 1.765625 0.0625 Z M 1.765625 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(195.998818, 332.425053)">
                                <g>
                                    <path
                                        d="M 2.734375 -3.828125 C 3.078125 -3.828125 3.390625 -3.742188 3.671875 -3.578125 C 3.960938 -3.421875 4.191406 -3.195312 4.359375 -2.90625 C 4.523438 -2.613281 4.609375 -2.273438 4.609375 -1.890625 C 4.609375 -1.492188 4.523438 -1.148438 4.359375 -0.859375 C 4.191406 -0.566406 3.960938 -0.335938 3.671875 -0.171875 C 3.390625 -0.015625 3.078125 0.0625 2.734375 0.0625 C 2.253906 0.0625 1.875 -0.09375 1.59375 -0.40625 L 1.59375 1.359375 L 0.5 1.359375 L 0.5 -3.765625 L 1.546875 -3.765625 L 1.546875 -3.328125 C 1.816406 -3.660156 2.210938 -3.828125 2.734375 -3.828125 Z M 2.546875 -0.84375 C 2.828125 -0.84375 3.054688 -0.9375 3.234375 -1.125 C 3.410156 -1.3125 3.5 -1.566406 3.5 -1.890625 C 3.5 -2.203125 3.410156 -2.453125 3.234375 -2.640625 C 3.054688 -2.828125 2.828125 -2.921875 2.546875 -2.921875 C 2.265625 -2.921875 2.03125 -2.828125 1.84375 -2.640625 C 1.664062 -2.453125 1.578125 -2.203125 1.578125 -1.890625 C 1.578125 -1.566406 1.664062 -1.3125 1.84375 -1.125 C 2.03125 -0.9375 2.265625 -0.84375 2.546875 -0.84375 Z M 2.546875 -0.84375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(200.830358, 332.425053)">
                                <g>
                                    <path
                                        d="M 4.1875 -1.875 C 4.1875 -1.851562 4.179688 -1.753906 4.171875 -1.578125 L 1.328125 -1.578125 C 1.378906 -1.335938 1.5 -1.148438 1.6875 -1.015625 C 1.875 -0.878906 2.113281 -0.8125 2.40625 -0.8125 C 2.59375 -0.8125 2.765625 -0.84375 2.921875 -0.90625 C 3.078125 -0.96875 3.21875 -1.0625 3.34375 -1.1875 L 3.921875 -0.546875 C 3.566406 -0.140625 3.050781 0.0625 2.375 0.0625 C 1.945312 0.0625 1.566406 -0.0195312 1.234375 -0.1875 C 0.910156 -0.351562 0.660156 -0.582031 0.484375 -0.875 C 0.304688 -1.175781 0.21875 -1.515625 0.21875 -1.890625 C 0.21875 -2.253906 0.304688 -2.582031 0.484375 -2.875 C 0.660156 -3.175781 0.898438 -3.410156 1.203125 -3.578125 C 1.515625 -3.742188 1.859375 -3.828125 2.234375 -3.828125 C 2.597656 -3.828125 2.929688 -3.742188 3.234375 -3.578125 C 3.535156 -3.421875 3.769531 -3.191406 3.9375 -2.890625 C 4.101562 -2.597656 4.1875 -2.257812 4.1875 -1.875 Z M 2.234375 -3 C 1.992188 -3 1.785156 -2.925781 1.609375 -2.78125 C 1.441406 -2.644531 1.34375 -2.457031 1.3125 -2.21875 L 3.15625 -2.21875 C 3.125 -2.445312 3.023438 -2.632812 2.859375 -2.78125 C 2.691406 -2.925781 2.484375 -3 2.234375 -3 Z M 2.234375 -3 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(205.248766, 332.425053)">
                                <g>
                                    <path
                                        d="M 1.546875 -3.265625 C 1.679688 -3.453125 1.859375 -3.59375 2.078125 -3.6875 C 2.296875 -3.78125 2.550781 -3.828125 2.84375 -3.828125 L 2.84375 -2.8125 C 2.71875 -2.820312 2.632812 -2.828125 2.59375 -2.828125 C 2.28125 -2.828125 2.035156 -2.738281 1.859375 -2.5625 C 1.679688 -2.382812 1.59375 -2.125 1.59375 -1.78125 L 1.59375 0 L 0.5 0 L 0.5 -3.765625 L 1.546875 -3.765625 Z M 1.546875 -3.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(208.266726, 332.425053)">
                                <g>
                                    <path
                                        d="M 2.9375 -0.1875 C 2.820312 -0.101562 2.6875 -0.0390625 2.53125 0 C 2.375 0.0390625 2.210938 0.0625 2.046875 0.0625 C 1.597656 0.0625 1.25 -0.0507812 1 -0.28125 C 0.757812 -0.507812 0.640625 -0.847656 0.640625 -1.296875 L 0.640625 -2.84375 L 0.0625 -2.84375 L 0.0625 -3.6875 L 0.640625 -3.6875 L 0.640625 -4.59375 L 1.734375 -4.59375 L 1.734375 -3.6875 L 2.671875 -3.6875 L 2.671875 -2.84375 L 1.734375 -2.84375 L 1.734375 -1.3125 C 1.734375 -1.15625 1.769531 -1.03125 1.84375 -0.9375 C 1.925781 -0.851562 2.046875 -0.8125 2.203125 -0.8125 C 2.367188 -0.8125 2.515625 -0.859375 2.640625 -0.953125 Z M 2.9375 -0.1875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(211.312697, 332.425053)">
                                <g>
                                    <path
                                        d="M 2.015625 -3.828125 C 2.597656 -3.828125 3.046875 -3.6875 3.359375 -3.40625 C 3.679688 -3.125 3.84375 -2.707031 3.84375 -2.15625 L 3.84375 0 L 2.8125 0 L 2.8125 -0.46875 C 2.601562 -0.113281 2.222656 0.0625 1.671875 0.0625 C 1.378906 0.0625 1.125 0.015625 0.90625 -0.078125 C 0.695312 -0.179688 0.535156 -0.316406 0.421875 -0.484375 C 0.316406 -0.660156 0.265625 -0.859375 0.265625 -1.078125 C 0.265625 -1.429688 0.394531 -1.707031 0.65625 -1.90625 C 0.914062 -2.113281 1.320312 -2.21875 1.875 -2.21875 L 2.75 -2.21875 C 2.75 -2.445312 2.675781 -2.625 2.53125 -2.75 C 2.382812 -2.882812 2.164062 -2.953125 1.875 -2.953125 C 1.675781 -2.953125 1.476562 -2.921875 1.28125 -2.859375 C 1.09375 -2.796875 0.929688 -2.710938 0.796875 -2.609375 L 0.40625 -3.359375 C 0.601562 -3.503906 0.84375 -3.617188 1.125 -3.703125 C 1.414062 -3.785156 1.710938 -3.828125 2.015625 -3.828125 Z M 1.9375 -0.671875 C 2.125 -0.671875 2.289062 -0.710938 2.4375 -0.796875 C 2.582031 -0.890625 2.6875 -1.019531 2.75 -1.1875 L 2.75 -1.578125 L 2 -1.578125 C 1.550781 -1.578125 1.328125 -1.429688 1.328125 -1.140625 C 1.328125 -0.992188 1.378906 -0.878906 1.484375 -0.796875 C 1.597656 -0.710938 1.75 -0.671875 1.9375 -0.671875 Z M 1.9375 -0.671875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(215.633073, 332.425053)">
                                <g>
                                    <path
                                        d="M 1.546875 -3.265625 C 1.679688 -3.453125 1.859375 -3.59375 2.078125 -3.6875 C 2.296875 -3.78125 2.550781 -3.828125 2.84375 -3.828125 L 2.84375 -2.8125 C 2.71875 -2.820312 2.632812 -2.828125 2.59375 -2.828125 C 2.28125 -2.828125 2.035156 -2.738281 1.859375 -2.5625 C 1.679688 -2.382812 1.59375 -2.125 1.59375 -1.78125 L 1.59375 0 L 0.5 0 L 0.5 -3.765625 L 1.546875 -3.765625 Z M 1.546875 -3.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(169.952087, 342.05315)">
                                <g>
                                    <path
                                        d="M 5.890625 -4.90625 L 5.890625 0 L 5.390625 0 L 5.390625 -3.921875 L 3.46875 -0.625 L 3.21875 -0.625 L 1.296875 -3.90625 L 1.296875 0 L 0.796875 0 L 0.796875 -4.90625 L 1.21875 -4.90625 L 3.359375 -1.265625 L 5.453125 -4.90625 Z M 5.890625 -4.90625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(176.639219, 342.05315)">
                                <g>
                                    <path
                                        d="M 4.875 -4.90625 L 2.703125 0 L 2.1875 0 L 0.015625 -4.90625 L 0.578125 -4.90625 L 2.453125 -0.640625 L 4.34375 -4.90625 Z M 4.875 -4.90625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(181.526778, 342.05315)">
                                <g>
                                    <path
                                        d="M 2.15625 0.046875 C 1.789062 0.046875 1.441406 -0.0078125 1.109375 -0.125 C 0.773438 -0.25 0.515625 -0.40625 0.328125 -0.59375 L 0.53125 -1 C 0.707031 -0.820312 0.941406 -0.675781 1.234375 -0.5625 C 1.535156 -0.457031 1.84375 -0.40625 2.15625 -0.40625 C 2.59375 -0.40625 2.921875 -0.484375 3.140625 -0.640625 C 3.359375 -0.796875 3.46875 -1.003906 3.46875 -1.265625 C 3.46875 -1.460938 3.40625 -1.617188 3.28125 -1.734375 C 3.164062 -1.847656 3.019531 -1.9375 2.84375 -2 C 2.675781 -2.0625 2.4375 -2.132812 2.125 -2.21875 C 1.757812 -2.3125 1.46875 -2.398438 1.25 -2.484375 C 1.03125 -2.566406 0.84375 -2.695312 0.6875 -2.875 C 0.53125 -3.050781 0.453125 -3.289062 0.453125 -3.59375 C 0.453125 -3.84375 0.515625 -4.066406 0.640625 -4.265625 C 0.773438 -4.472656 0.976562 -4.632812 1.25 -4.75 C 1.519531 -4.875 1.851562 -4.9375 2.25 -4.9375 C 2.53125 -4.9375 2.804688 -4.898438 3.078125 -4.828125 C 3.347656 -4.753906 3.578125 -4.648438 3.765625 -4.515625 L 3.59375 -4.09375 C 3.394531 -4.226562 3.175781 -4.328125 2.9375 -4.390625 C 2.707031 -4.460938 2.476562 -4.5 2.25 -4.5 C 1.820312 -4.5 1.5 -4.414062 1.28125 -4.25 C 1.0625 -4.082031 0.953125 -3.867188 0.953125 -3.609375 C 0.953125 -3.410156 1.007812 -3.253906 1.125 -3.140625 C 1.25 -3.023438 1.398438 -2.929688 1.578125 -2.859375 C 1.765625 -2.796875 2.007812 -2.726562 2.3125 -2.65625 C 2.664062 -2.570312 2.953125 -2.484375 3.171875 -2.390625 C 3.398438 -2.304688 3.585938 -2.175781 3.734375 -2 C 3.890625 -1.832031 3.96875 -1.597656 3.96875 -1.296875 C 3.96875 -1.046875 3.898438 -0.816406 3.765625 -0.609375 C 3.640625 -0.410156 3.4375 -0.25 3.15625 -0.125 C 2.882812 -0.0078125 2.550781 0.046875 2.15625 0.046875 Z M 2.15625 0.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(185.833153, 342.05315)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(187.667737, 342.05315)">
                                <g>
                                    <path
                                        d="M 4.265625 -0.453125 L 4.265625 0 L 0.796875 0 L 0.796875 -4.90625 L 4.15625 -4.90625 L 4.15625 -4.453125 L 1.3125 -4.453125 L 1.3125 -2.703125 L 3.84375 -2.703125 L 3.84375 -2.265625 L 1.3125 -2.265625 L 1.3125 -0.453125 Z M 4.265625 -0.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(192.35223, 342.05315)">
                                <g>
                                    <path
                                        d="M 3.03125 0 L 1.875 -1.546875 L 0.6875 0 L 0.140625 0 L 1.59375 -1.890625 L 0.203125 -3.6875 L 0.765625 -3.6875 L 1.875 -2.234375 L 2.96875 -3.6875 L 3.515625 -3.6875 L 2.140625 -1.890625 L 3.609375 0 Z M 3.03125 0 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(196.091423, 342.05315)">
                                <g>
                                    <path
                                        d="M 2.59375 -3.703125 C 2.9375 -3.703125 3.25 -3.625 3.53125 -3.46875 C 3.8125 -3.3125 4.03125 -3.09375 4.1875 -2.8125 C 4.34375 -2.53125 4.421875 -2.207031 4.421875 -1.84375 C 4.421875 -1.46875 4.34375 -1.140625 4.1875 -0.859375 C 4.03125 -0.578125 3.8125 -0.359375 3.53125 -0.203125 C 3.25 -0.046875 2.9375 0.03125 2.59375 0.03125 C 2.289062 0.03125 2.019531 -0.03125 1.78125 -0.15625 C 1.539062 -0.28125 1.34375 -0.457031 1.1875 -0.6875 L 1.1875 1.359375 L 0.6875 1.359375 L 0.6875 -3.6875 L 1.171875 -3.6875 L 1.171875 -2.953125 C 1.316406 -3.191406 1.507812 -3.375 1.75 -3.5 C 2 -3.632812 2.28125 -3.703125 2.59375 -3.703125 Z M 2.5625 -0.40625 C 2.8125 -0.40625 3.039062 -0.460938 3.25 -0.578125 C 3.457031 -0.703125 3.617188 -0.875 3.734375 -1.09375 C 3.859375 -1.3125 3.921875 -1.5625 3.921875 -1.84375 C 3.921875 -2.125 3.859375 -2.367188 3.734375 -2.578125 C 3.617188 -2.796875 3.457031 -2.96875 3.25 -3.09375 C 3.039062 -3.21875 2.8125 -3.28125 2.5625 -3.28125 C 2.289062 -3.28125 2.050781 -3.21875 1.84375 -3.09375 C 1.644531 -2.96875 1.484375 -2.796875 1.359375 -2.578125 C 1.242188 -2.367188 1.1875 -2.125 1.1875 -1.84375 C 1.1875 -1.5625 1.242188 -1.3125 1.359375 -1.09375 C 1.484375 -0.875 1.644531 -0.703125 1.84375 -0.578125 C 2.050781 -0.460938 2.289062 -0.40625 2.5625 -0.40625 Z M 2.5625 -0.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(200.838937, 342.05315)">
                                <g>
                                    <path
                                        d="M 2.203125 0.03125 C 1.847656 0.03125 1.523438 -0.046875 1.234375 -0.203125 C 0.953125 -0.367188 0.726562 -0.59375 0.5625 -0.875 C 0.40625 -1.15625 0.328125 -1.476562 0.328125 -1.84375 C 0.328125 -2.195312 0.40625 -2.515625 0.5625 -2.796875 C 0.726562 -3.085938 0.953125 -3.3125 1.234375 -3.46875 C 1.523438 -3.625 1.847656 -3.703125 2.203125 -3.703125 C 2.554688 -3.703125 2.875 -3.625 3.15625 -3.46875 C 3.4375 -3.3125 3.65625 -3.085938 3.8125 -2.796875 C 3.976562 -2.515625 4.0625 -2.195312 4.0625 -1.84375 C 4.0625 -1.476562 3.976562 -1.15625 3.8125 -0.875 C 3.65625 -0.59375 3.4375 -0.367188 3.15625 -0.203125 C 2.875 -0.046875 2.554688 0.03125 2.203125 0.03125 Z M 2.203125 -0.40625 C 2.460938 -0.40625 2.695312 -0.460938 2.90625 -0.578125 C 3.113281 -0.703125 3.273438 -0.875 3.390625 -1.09375 C 3.503906 -1.3125 3.5625 -1.5625 3.5625 -1.84375 C 3.5625 -2.125 3.503906 -2.375 3.390625 -2.59375 C 3.273438 -2.8125 3.113281 -2.976562 2.90625 -3.09375 C 2.695312 -3.21875 2.460938 -3.28125 2.203125 -3.28125 C 1.941406 -3.28125 1.707031 -3.21875 1.5 -3.09375 C 1.289062 -2.976562 1.125 -2.8125 1 -2.59375 C 0.882812 -2.375 0.828125 -2.125 0.828125 -1.84375 C 0.828125 -1.5625 0.882812 -1.3125 1 -1.09375 C 1.125 -0.875 1.289062 -0.703125 1.5 -0.578125 C 1.707031 -0.460938 1.941406 -0.40625 2.203125 -0.40625 Z M 2.203125 -0.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(205.229337, 342.05315)">
                                <g>
                                    <path
                                        d="M 2.5625 -3.703125 C 3.03125 -3.703125 3.398438 -3.566406 3.671875 -3.296875 C 3.941406 -3.035156 4.078125 -2.648438 4.078125 -2.140625 L 4.078125 0 L 3.578125 0 L 3.578125 -2.09375 C 3.578125 -2.46875 3.484375 -2.753906 3.296875 -2.953125 C 3.109375 -3.160156 2.835938 -3.265625 2.484375 -3.265625 C 2.085938 -3.265625 1.769531 -3.144531 1.53125 -2.90625 C 1.300781 -2.675781 1.1875 -2.351562 1.1875 -1.9375 L 1.1875 0 L 0.6875 0 L 0.6875 -3.6875 L 1.171875 -3.6875 L 1.171875 -3 C 1.304688 -3.226562 1.492188 -3.398438 1.734375 -3.515625 C 1.972656 -3.640625 2.25 -3.703125 2.5625 -3.703125 Z M 2.5625 -3.703125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(209.969849, 342.05315)">
                                <g>
                                    <path
                                        d="M 3.90625 -1.6875 L 0.8125 -1.6875 C 0.84375 -1.300781 0.988281 -0.988281 1.25 -0.75 C 1.519531 -0.519531 1.859375 -0.40625 2.265625 -0.40625 C 2.492188 -0.40625 2.703125 -0.445312 2.890625 -0.53125 C 3.085938 -0.613281 3.253906 -0.734375 3.390625 -0.890625 L 3.671875 -0.5625 C 3.515625 -0.363281 3.3125 -0.210938 3.0625 -0.109375 C 2.8125 -0.015625 2.539062 0.03125 2.25 0.03125 C 1.875 0.03125 1.539062 -0.046875 1.25 -0.203125 C 0.957031 -0.367188 0.726562 -0.59375 0.5625 -0.875 C 0.40625 -1.15625 0.328125 -1.476562 0.328125 -1.84375 C 0.328125 -2.195312 0.40625 -2.515625 0.5625 -2.796875 C 0.71875 -3.085938 0.929688 -3.3125 1.203125 -3.46875 C 1.472656 -3.625 1.78125 -3.703125 2.125 -3.703125 C 2.457031 -3.703125 2.757812 -3.625 3.03125 -3.46875 C 3.300781 -3.3125 3.515625 -3.09375 3.671875 -2.8125 C 3.828125 -2.53125 3.90625 -2.207031 3.90625 -1.84375 Z M 2.125 -3.28125 C 1.769531 -3.28125 1.472656 -3.164062 1.234375 -2.9375 C 0.992188 -2.71875 0.851562 -2.425781 0.8125 -2.0625 L 3.4375 -2.0625 C 3.394531 -2.425781 3.253906 -2.71875 3.015625 -2.9375 C 2.773438 -3.164062 2.476562 -3.28125 2.125 -3.28125 Z M 2.125 -3.28125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(214.199197, 342.05315)">
                                <g>
                                    <path
                                        d="M 2.5625 -3.703125 C 3.03125 -3.703125 3.398438 -3.566406 3.671875 -3.296875 C 3.941406 -3.035156 4.078125 -2.648438 4.078125 -2.140625 L 4.078125 0 L 3.578125 0 L 3.578125 -2.09375 C 3.578125 -2.46875 3.484375 -2.753906 3.296875 -2.953125 C 3.109375 -3.160156 2.835938 -3.265625 2.484375 -3.265625 C 2.085938 -3.265625 1.769531 -3.144531 1.53125 -2.90625 C 1.300781 -2.675781 1.1875 -2.351562 1.1875 -1.9375 L 1.1875 0 L 0.6875 0 L 0.6875 -3.6875 L 1.171875 -3.6875 L 1.171875 -3 C 1.304688 -3.226562 1.492188 -3.398438 1.734375 -3.515625 C 1.972656 -3.640625 2.25 -3.703125 2.5625 -3.703125 Z M 2.5625 -3.703125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(218.939709, 342.05315)">
                                <g>
                                    <path
                                        d="M 2.21875 0.03125 C 1.851562 0.03125 1.523438 -0.046875 1.234375 -0.203125 C 0.953125 -0.359375 0.726562 -0.578125 0.5625 -0.859375 C 0.40625 -1.148438 0.328125 -1.476562 0.328125 -1.84375 C 0.328125 -2.195312 0.40625 -2.515625 0.5625 -2.796875 C 0.726562 -3.085938 0.953125 -3.3125 1.234375 -3.46875 C 1.523438 -3.625 1.851562 -3.703125 2.21875 -3.703125 C 2.53125 -3.703125 2.8125 -3.640625 3.0625 -3.515625 C 3.3125 -3.398438 3.507812 -3.222656 3.65625 -2.984375 L 3.296875 -2.734375 C 3.171875 -2.910156 3.015625 -3.046875 2.828125 -3.140625 C 2.640625 -3.234375 2.4375 -3.28125 2.21875 -3.28125 C 1.945312 -3.28125 1.707031 -3.21875 1.5 -3.09375 C 1.289062 -2.976562 1.125 -2.8125 1 -2.59375 C 0.882812 -2.375 0.828125 -2.125 0.828125 -1.84375 C 0.828125 -1.550781 0.882812 -1.296875 1 -1.078125 C 1.125 -0.867188 1.289062 -0.703125 1.5 -0.578125 C 1.707031 -0.460938 1.945312 -0.40625 2.21875 -0.40625 C 2.4375 -0.40625 2.640625 -0.445312 2.828125 -0.53125 C 3.015625 -0.625 3.171875 -0.757812 3.296875 -0.9375 L 3.65625 -0.6875 C 3.507812 -0.457031 3.3125 -0.28125 3.0625 -0.15625 C 2.8125 -0.03125 2.53125 0.03125 2.21875 0.03125 Z M 2.21875 0.03125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(222.881966, 342.05315)">
                                <g>
                                    <path
                                        d="M 0.6875 -3.6875 L 1.1875 -3.6875 L 1.1875 0 L 0.6875 0 Z M 0.953125 -4.484375 C 0.847656 -4.484375 0.757812 -4.519531 0.6875 -4.59375 C 0.613281 -4.664062 0.578125 -4.75 0.578125 -4.84375 C 0.578125 -4.9375 0.613281 -5.015625 0.6875 -5.078125 C 0.757812 -5.148438 0.847656 -5.1875 0.953125 -5.1875 C 1.046875 -5.1875 1.128906 -5.148438 1.203125 -5.078125 C 1.273438 -5.015625 1.3125 -4.9375 1.3125 -4.84375 C 1.3125 -4.75 1.273438 -4.664062 1.203125 -4.59375 C 1.128906 -4.519531 1.046875 -4.484375 0.953125 -4.484375 Z M 0.953125 -4.484375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(224.765566, 342.05315)">
                                <g>
                                    <path
                                        d="M 1.984375 -3.703125 C 2.460938 -3.703125 2.828125 -3.582031 3.078125 -3.34375 C 3.335938 -3.101562 3.46875 -2.75 3.46875 -2.28125 L 3.46875 0 L 3 0 L 3 -0.578125 C 2.882812 -0.378906 2.71875 -0.226562 2.5 -0.125 C 2.28125 -0.0195312 2.023438 0.03125 1.734375 0.03125 C 1.316406 0.03125 0.988281 -0.0625 0.75 -0.25 C 0.507812 -0.445312 0.390625 -0.707031 0.390625 -1.03125 C 0.390625 -1.34375 0.5 -1.59375 0.71875 -1.78125 C 0.945312 -1.976562 1.3125 -2.078125 1.8125 -2.078125 L 2.96875 -2.078125 L 2.96875 -2.296875 C 2.96875 -2.617188 2.878906 -2.863281 2.703125 -3.03125 C 2.523438 -3.195312 2.269531 -3.28125 1.9375 -3.28125 C 1.695312 -3.28125 1.46875 -3.238281 1.25 -3.15625 C 1.039062 -3.082031 0.859375 -2.976562 0.703125 -2.84375 L 0.484375 -3.21875 C 0.671875 -3.375 0.894531 -3.492188 1.15625 -3.578125 C 1.414062 -3.660156 1.691406 -3.703125 1.984375 -3.703125 Z M 1.8125 -0.359375 C 2.082031 -0.359375 2.316406 -0.421875 2.515625 -0.546875 C 2.722656 -0.671875 2.875 -0.859375 2.96875 -1.109375 L 2.96875 -1.703125 L 1.8125 -1.703125 C 1.1875 -1.703125 0.875 -1.484375 0.875 -1.046875 C 0.875 -0.835938 0.953125 -0.671875 1.109375 -0.546875 C 1.273438 -0.421875 1.507812 -0.359375 1.8125 -0.359375 Z M 1.8125 -0.359375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(228.896883, 342.05315)">
                                <g>
                                    <path
                                        d="M 0.6875 -5.1875 L 1.1875 -5.1875 L 1.1875 0 L 0.6875 0 Z M 0.6875 -5.1875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(244.435565, 332.632311)">
                                <g>
                                    <path
                                        d="M 5.046875 -1.046875 L 5.046875 0 L 0.671875 0 L 0.671875 -5.640625 L 4.9375 -5.640625 L 4.9375 -4.59375 L 1.96875 -4.59375 L 1.96875 -3.375 L 4.59375 -3.375 L 4.59375 -2.359375 L 1.96875 -2.359375 L 1.96875 -1.046875 Z M 5.046875 -1.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(249.845142, 332.632311)">
                                <g>
                                    <path
                                        d="M 3.34375 0 L 2.390625 -1.328125 L 1.40625 0 L 0.03125 0 L 1.703125 -2.1875 L 0.09375 -4.34375 L 1.5 -4.34375 L 2.421875 -3.078125 L 3.359375 -4.34375 L 4.703125 -4.34375 L 3.09375 -2.21875 L 4.765625 0 Z M 3.34375 0 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(254.642014, 332.632311)">
                                <g>
                                    <path
                                        d="M 3.140625 -4.40625 C 3.546875 -4.40625 3.910156 -4.3125 4.234375 -4.125 C 4.566406 -3.9375 4.828125 -3.675781 5.015625 -3.34375 C 5.210938 -3.007812 5.3125 -2.617188 5.3125 -2.171875 C 5.3125 -1.722656 5.210938 -1.328125 5.015625 -0.984375 C 4.828125 -0.648438 4.566406 -0.390625 4.234375 -0.203125 C 3.910156 -0.0234375 3.546875 0.0625 3.140625 0.0625 C 2.585938 0.0625 2.15625 -0.109375 1.84375 -0.453125 L 1.84375 1.5625 L 0.578125 1.5625 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.84375 C 2.09375 -4.21875 2.546875 -4.40625 3.140625 -4.40625 Z M 2.921875 -0.96875 C 3.242188 -0.96875 3.507812 -1.078125 3.71875 -1.296875 C 3.925781 -1.515625 4.03125 -1.804688 4.03125 -2.171875 C 4.03125 -2.535156 3.925781 -2.828125 3.71875 -3.046875 C 3.507812 -3.265625 3.242188 -3.375 2.921875 -3.375 C 2.597656 -3.375 2.332031 -3.265625 2.125 -3.046875 C 1.925781 -2.828125 1.828125 -2.535156 1.828125 -2.171875 C 1.828125 -1.804688 1.925781 -1.515625 2.125 -1.296875 C 2.332031 -1.078125 2.597656 -0.96875 2.921875 -0.96875 Z M 2.921875 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(260.204772, 332.632311)">
                                <g>
                                    <path
                                        d="M 0.578125 -5.984375 L 1.84375 -5.984375 L 1.84375 0 L 0.578125 0 Z M 0.578125 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(262.631421, 332.632311)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(267.91201, 332.632311)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(271.386719, 332.632311)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(276.360949, 332.632311)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(358.318241, 301.857214)">
                                <g>
                                    <path
                                        d="M 5.046875 -1.046875 L 5.046875 0 L 0.671875 0 L 0.671875 -5.640625 L 4.9375 -5.640625 L 4.9375 -4.59375 L 1.96875 -4.59375 L 1.96875 -3.375 L 4.59375 -3.375 L 4.59375 -2.359375 L 1.96875 -2.359375 L 1.96875 -1.046875 Z M 5.046875 -1.046875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(363.727819, 301.857214)">
                                <g>
                                    <path
                                        d="M 3.21875 -4.40625 C 3.75 -4.40625 4.179688 -4.242188 4.515625 -3.921875 C 4.847656 -3.597656 5.015625 -3.117188 5.015625 -2.484375 L 5.015625 0 L 3.75 0 L 3.75 -2.296875 C 3.75 -2.640625 3.675781 -2.894531 3.53125 -3.0625 C 3.382812 -3.226562 3.164062 -3.3125 2.875 -3.3125 C 2.5625 -3.3125 2.3125 -3.210938 2.125 -3.015625 C 1.9375 -2.816406 1.84375 -2.523438 1.84375 -2.140625 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.828125 C 1.945312 -4.015625 2.15625 -4.15625 2.40625 -4.25 C 2.65625 -4.351562 2.925781 -4.40625 3.21875 -4.40625 Z M 3.21875 -4.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(369.29864, 301.857214)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(372.805597, 301.857214)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(376.280306, 301.857214)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(381.367409, 301.857214)">
                                <g>
                                    <path
                                        d="M 4.890625 -4.34375 L 3.0625 0 L 1.75 0 L -0.0625 -4.34375 L 1.234375 -4.34375 L 2.4375 -1.390625 L 3.671875 -4.34375 Z M 4.890625 -4.34375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(386.188466, 301.857214)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(388.615116, 301.857214)">
                                <g>
                                    <path
                                        d="M 2.046875 0.0625 C 1.679688 0.0625 1.328125 0.0195312 0.984375 -0.0625 C 0.640625 -0.15625 0.363281 -0.269531 0.15625 -0.40625 L 0.578125 -1.3125 C 0.773438 -1.1875 1.007812 -1.082031 1.28125 -1 C 1.550781 -0.925781 1.820312 -0.890625 2.09375 -0.890625 C 2.625 -0.890625 2.890625 -1.019531 2.890625 -1.28125 C 2.890625 -1.40625 2.816406 -1.492188 2.671875 -1.546875 C 2.523438 -1.597656 2.300781 -1.644531 2 -1.6875 C 1.644531 -1.738281 1.351562 -1.796875 1.125 -1.859375 C 0.894531 -1.929688 0.691406 -2.054688 0.515625 -2.234375 C 0.347656 -2.410156 0.265625 -2.664062 0.265625 -3 C 0.265625 -3.269531 0.34375 -3.507812 0.5 -3.71875 C 0.65625 -3.9375 0.882812 -4.101562 1.1875 -4.21875 C 1.5 -4.34375 1.863281 -4.40625 2.28125 -4.40625 C 2.582031 -4.40625 2.882812 -4.367188 3.1875 -4.296875 C 3.488281 -4.234375 3.738281 -4.140625 3.9375 -4.015625 L 3.515625 -3.125 C 3.140625 -3.34375 2.726562 -3.453125 2.28125 -3.453125 C 2.007812 -3.453125 1.804688 -3.410156 1.671875 -3.328125 C 1.535156 -3.253906 1.46875 -3.160156 1.46875 -3.046875 C 1.46875 -2.910156 1.539062 -2.816406 1.6875 -2.765625 C 1.832031 -2.710938 2.0625 -2.660156 2.375 -2.609375 C 2.726562 -2.554688 3.019531 -2.492188 3.25 -2.421875 C 3.476562 -2.359375 3.675781 -2.238281 3.84375 -2.0625 C 4.007812 -1.882812 4.09375 -1.632812 4.09375 -1.3125 C 4.09375 -1.039062 4.007812 -0.800781 3.84375 -0.59375 C 3.6875 -0.382812 3.453125 -0.222656 3.140625 -0.109375 C 2.828125 0.00390625 2.460938 0.0625 2.046875 0.0625 Z M 2.046875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(392.896022, 301.857214)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(396.402979, 301.857214)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(401.37721, 301.857214)">
                                <g>
                                    <path
                                        d="M 2.046875 0.0625 C 1.679688 0.0625 1.328125 0.0195312 0.984375 -0.0625 C 0.640625 -0.15625 0.363281 -0.269531 0.15625 -0.40625 L 0.578125 -1.3125 C 0.773438 -1.1875 1.007812 -1.082031 1.28125 -1 C 1.550781 -0.925781 1.820312 -0.890625 2.09375 -0.890625 C 2.625 -0.890625 2.890625 -1.019531 2.890625 -1.28125 C 2.890625 -1.40625 2.816406 -1.492188 2.671875 -1.546875 C 2.523438 -1.597656 2.300781 -1.644531 2 -1.6875 C 1.644531 -1.738281 1.351562 -1.796875 1.125 -1.859375 C 0.894531 -1.929688 0.691406 -2.054688 0.515625 -2.234375 C 0.347656 -2.410156 0.265625 -2.664062 0.265625 -3 C 0.265625 -3.269531 0.34375 -3.507812 0.5 -3.71875 C 0.65625 -3.9375 0.882812 -4.101562 1.1875 -4.21875 C 1.5 -4.34375 1.863281 -4.40625 2.28125 -4.40625 C 2.582031 -4.40625 2.882812 -4.367188 3.1875 -4.296875 C 3.488281 -4.234375 3.738281 -4.140625 3.9375 -4.015625 L 3.515625 -3.125 C 3.140625 -3.34375 2.726562 -3.453125 2.28125 -3.453125 C 2.007812 -3.453125 1.804688 -3.410156 1.671875 -3.328125 C 1.535156 -3.253906 1.46875 -3.160156 1.46875 -3.046875 C 1.46875 -2.910156 1.539062 -2.816406 1.6875 -2.765625 C 1.832031 -2.710938 2.0625 -2.660156 2.375 -2.609375 C 2.726562 -2.554688 3.019531 -2.492188 3.25 -2.421875 C 3.476562 -2.359375 3.675781 -2.238281 3.84375 -2.0625 C 4.007812 -1.882812 4.09375 -1.632812 4.09375 -1.3125 C 4.09375 -1.039062 4.007812 -0.800781 3.84375 -0.59375 C 3.6875 -0.382812 3.453125 -0.222656 3.140625 -0.109375 C 2.828125 0.00390625 2.460938 0.0625 2.046875 0.0625 Z M 2.046875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(405.663443, 301.857214)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(363.180619, 313.143977)">
                                <g>
                                    <path
                                        d="M 3.03125 -5.640625 C 3.75 -5.640625 4.3125 -5.46875 4.71875 -5.125 C 5.132812 -4.78125 5.34375 -4.304688 5.34375 -3.703125 C 5.34375 -3.109375 5.132812 -2.640625 4.71875 -2.296875 C 4.3125 -1.953125 3.75 -1.78125 3.03125 -1.78125 L 1.515625 -1.78125 L 1.515625 0 L 0.921875 0 L 0.921875 -5.640625 Z M 3.015625 -2.3125 C 3.578125 -2.3125 4.003906 -2.429688 4.296875 -2.671875 C 4.585938 -2.921875 4.734375 -3.265625 4.734375 -3.703125 C 4.734375 -4.160156 4.585938 -4.507812 4.296875 -4.75 C 4.003906 -5 3.578125 -5.125 3.015625 -5.125 L 1.515625 -5.125 L 1.515625 -2.3125 Z M 3.015625 -2.3125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(368.969111, 313.143977)">
                                <g>
                                    <path
                                        d="M 1.34375 -3.40625 C 1.476562 -3.695312 1.675781 -3.910156 1.9375 -4.046875 C 2.207031 -4.191406 2.539062 -4.265625 2.9375 -4.265625 L 2.9375 -3.71875 L 2.796875 -3.71875 C 2.347656 -3.71875 2 -3.582031 1.75 -3.3125 C 1.5 -3.039062 1.375 -2.65625 1.375 -2.15625 L 1.375 0 L 0.796875 0 L 0.796875 -4.234375 L 1.34375 -4.234375 Z M 1.34375 -3.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(372.201958, 313.143977)">
                                <g>
                                    <path
                                        d="M 2.53125 0.046875 C 2.125 0.046875 1.753906 -0.046875 1.421875 -0.234375 C 1.097656 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.46875 -2.894531 0.65625 -3.21875 C 0.84375 -3.550781 1.097656 -3.804688 1.421875 -3.984375 C 1.753906 -4.171875 2.125 -4.265625 2.53125 -4.265625 C 2.9375 -4.265625 3.300781 -4.171875 3.625 -3.984375 C 3.957031 -3.804688 4.21875 -3.550781 4.40625 -3.21875 C 4.59375 -2.894531 4.6875 -2.53125 4.6875 -2.125 C 4.6875 -1.707031 4.59375 -1.332031 4.40625 -1 C 4.21875 -0.675781 3.957031 -0.421875 3.625 -0.234375 C 3.300781 -0.046875 2.9375 0.046875 2.53125 0.046875 Z M 2.53125 -0.46875 C 2.832031 -0.46875 3.101562 -0.535156 3.34375 -0.671875 C 3.582031 -0.804688 3.769531 -1 3.90625 -1.25 C 4.039062 -1.507812 4.109375 -1.800781 4.109375 -2.125 C 4.109375 -2.445312 4.039062 -2.734375 3.90625 -2.984375 C 3.769531 -3.234375 3.582031 -3.425781 3.34375 -3.5625 C 3.101562 -3.695312 2.832031 -3.765625 2.53125 -3.765625 C 2.226562 -3.765625 1.957031 -3.695312 1.71875 -3.5625 C 1.476562 -3.425781 1.289062 -3.234375 1.15625 -2.984375 C 1.019531 -2.734375 0.953125 -2.445312 0.953125 -2.125 C 0.953125 -1.800781 1.019531 -1.507812 1.15625 -1.25 C 1.289062 -1 1.476562 -0.804688 1.71875 -0.671875 C 1.957031 -0.535156 2.226562 -0.46875 2.53125 -0.46875 Z M 2.53125 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(377.256813, 313.143977)">
                                <g>
                                    <path
                                        d="M 2.984375 -4.265625 C 3.378906 -4.265625 3.738281 -4.175781 4.0625 -4 C 4.382812 -3.820312 4.632812 -3.566406 4.8125 -3.234375 C 5 -2.910156 5.09375 -2.539062 5.09375 -2.125 C 5.09375 -1.695312 5 -1.320312 4.8125 -1 C 4.632812 -0.675781 4.382812 -0.421875 4.0625 -0.234375 C 3.738281 -0.046875 3.378906 0.046875 2.984375 0.046875 C 2.628906 0.046875 2.3125 -0.0234375 2.03125 -0.171875 C 1.75 -0.328125 1.519531 -0.550781 1.34375 -0.84375 L 1.34375 0 L 0.796875 0 L 0.796875 -5.984375 L 1.375 -5.984375 L 1.375 -3.4375 C 1.550781 -3.707031 1.773438 -3.910156 2.046875 -4.046875 C 2.328125 -4.191406 2.640625 -4.265625 2.984375 -4.265625 Z M 2.9375 -0.46875 C 3.238281 -0.46875 3.507812 -0.535156 3.75 -0.671875 C 3.988281 -0.804688 4.175781 -1 4.3125 -1.25 C 4.445312 -1.507812 4.515625 -1.800781 4.515625 -2.125 C 4.515625 -2.445312 4.445312 -2.734375 4.3125 -2.984375 C 4.175781 -3.234375 3.988281 -3.425781 3.75 -3.5625 C 3.507812 -3.695312 3.238281 -3.765625 2.9375 -3.765625 C 2.632812 -3.765625 2.363281 -3.695312 2.125 -3.5625 C 1.894531 -3.425781 1.707031 -3.234375 1.5625 -2.984375 C 1.425781 -2.734375 1.359375 -2.445312 1.359375 -2.125 C 1.359375 -1.800781 1.425781 -1.507812 1.5625 -1.25 C 1.707031 -1 1.894531 -0.804688 2.125 -0.671875 C 2.363281 -0.535156 2.632812 -0.46875 2.9375 -0.46875 Z M 2.9375 -0.46875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(382.722824, 313.143977)">
                                <g>
                                    <path
                                        d="M 0.796875 -5.984375 L 1.375 -5.984375 L 1.375 0 L 0.796875 0 Z M 0.796875 -5.984375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(384.891491, 313.143977)">
                                <g>
                                    <path
                                        d="M 4.484375 -1.9375 L 0.9375 -1.9375 C 0.96875 -1.5 1.132812 -1.144531 1.4375 -0.875 C 1.75 -0.601562 2.140625 -0.46875 2.609375 -0.46875 C 2.867188 -0.46875 3.109375 -0.515625 3.328125 -0.609375 C 3.554688 -0.703125 3.75 -0.84375 3.90625 -1.03125 L 4.234375 -0.65625 C 4.046875 -0.425781 3.8125 -0.25 3.53125 -0.125 C 3.25 -0.0078125 2.9375 0.046875 2.59375 0.046875 C 2.15625 0.046875 1.769531 -0.046875 1.4375 -0.234375 C 1.101562 -0.421875 0.84375 -0.675781 0.65625 -1 C 0.46875 -1.332031 0.375 -1.707031 0.375 -2.125 C 0.375 -2.53125 0.460938 -2.894531 0.640625 -3.21875 C 0.816406 -3.550781 1.0625 -3.804688 1.375 -3.984375 C 1.695312 -4.171875 2.050781 -4.265625 2.4375 -4.265625 C 2.832031 -4.265625 3.1875 -4.171875 3.5 -3.984375 C 3.8125 -3.804688 4.054688 -3.554688 4.234375 -3.234375 C 4.410156 -2.910156 4.5 -2.539062 4.5 -2.125 Z M 2.4375 -3.78125 C 2.03125 -3.78125 1.6875 -3.648438 1.40625 -3.390625 C 1.132812 -3.128906 0.976562 -2.789062 0.9375 -2.375 L 3.953125 -2.375 C 3.910156 -2.789062 3.75 -3.128906 3.46875 -3.390625 C 3.195312 -3.648438 2.851562 -3.78125 2.4375 -3.78125 Z M 2.4375 -3.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(389.760917, 313.143977)">
                                <g>
                                    <path
                                        d="M 6.09375 -4.265625 C 6.625 -4.265625 7.039062 -4.113281 7.34375 -3.8125 C 7.644531 -3.507812 7.796875 -3.054688 7.796875 -2.453125 L 7.796875 0 L 7.21875 0 L 7.21875 -2.40625 C 7.21875 -2.84375 7.113281 -3.175781 6.90625 -3.40625 C 6.695312 -3.632812 6.394531 -3.75 6 -3.75 C 5.5625 -3.75 5.21875 -3.613281 4.96875 -3.34375 C 4.71875 -3.070312 4.59375 -2.695312 4.59375 -2.21875 L 4.59375 0 L 4.015625 0 L 4.015625 -2.40625 C 4.015625 -2.84375 3.90625 -3.175781 3.6875 -3.40625 C 3.476562 -3.632812 3.179688 -3.75 2.796875 -3.75 C 2.359375 -3.75 2.007812 -3.613281 1.75 -3.34375 C 1.5 -3.070312 1.375 -2.695312 1.375 -2.21875 L 1.375 0 L 0.796875 0 L 0.796875 -4.234375 L 1.34375 -4.234375 L 1.34375 -3.46875 C 1.5 -3.726562 1.707031 -3.925781 1.96875 -4.0625 C 2.238281 -4.195312 2.550781 -4.265625 2.90625 -4.265625 C 3.257812 -4.265625 3.566406 -4.191406 3.828125 -4.046875 C 4.085938 -3.898438 4.28125 -3.675781 4.40625 -3.375 C 4.5625 -3.65625 4.785156 -3.875 5.078125 -4.03125 C 5.367188 -4.1875 5.707031 -4.265625 6.09375 -4.265625 Z M 6.09375 -4.265625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(398.314666, 313.143977)">
                                <g>
                                    <path
                                        d="M 2.28125 -4.265625 C 2.832031 -4.265625 3.253906 -4.125 3.546875 -3.84375 C 3.847656 -3.570312 4 -3.164062 4 -2.625 L 4 0 L 3.453125 0 L 3.453125 -0.65625 C 3.316406 -0.4375 3.125 -0.265625 2.875 -0.140625 C 2.625 -0.015625 2.328125 0.046875 1.984375 0.046875 C 1.515625 0.046875 1.140625 -0.0664062 0.859375 -0.296875 C 0.578125 -0.523438 0.4375 -0.820312 0.4375 -1.1875 C 0.4375 -1.550781 0.566406 -1.84375 0.828125 -2.0625 C 1.085938 -2.28125 1.503906 -2.390625 2.078125 -2.390625 L 3.421875 -2.390625 L 3.421875 -2.65625 C 3.421875 -3.019531 3.316406 -3.296875 3.109375 -3.484375 C 2.910156 -3.671875 2.613281 -3.765625 2.21875 -3.765625 C 1.957031 -3.765625 1.703125 -3.71875 1.453125 -3.625 C 1.203125 -3.539062 0.988281 -3.421875 0.8125 -3.265625 L 0.5625 -3.703125 C 0.769531 -3.878906 1.023438 -4.015625 1.328125 -4.109375 C 1.628906 -4.210938 1.945312 -4.265625 2.28125 -4.265625 Z M 2.078125 -0.40625 C 2.398438 -0.40625 2.675781 -0.476562 2.90625 -0.625 C 3.132812 -0.78125 3.304688 -1 3.421875 -1.28125 L 3.421875 -1.96875 L 2.09375 -1.96875 C 1.375 -1.96875 1.015625 -1.710938 1.015625 -1.203125 C 1.015625 -0.960938 1.109375 -0.769531 1.296875 -0.625 C 1.484375 -0.476562 1.742188 -0.40625 2.078125 -0.40625 Z M 2.078125 -0.40625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(476.712005, 261.582337)">
                                <g>
                                    <path
                                        d="M 3.109375 -5.640625 C 3.609375 -5.640625 4.039062 -5.554688 4.40625 -5.390625 C 4.78125 -5.222656 5.066406 -4.984375 5.265625 -4.671875 C 5.460938 -4.367188 5.5625 -4.007812 5.5625 -3.59375 C 5.5625 -3.175781 5.460938 -2.8125 5.265625 -2.5 C 5.066406 -2.195312 4.78125 -1.960938 4.40625 -1.796875 C 4.039062 -1.640625 3.609375 -1.5625 3.109375 -1.5625 L 1.96875 -1.5625 L 1.96875 0 L 0.671875 0 L 0.671875 -5.640625 Z M 3.046875 -2.625 C 3.429688 -2.625 3.722656 -2.707031 3.921875 -2.875 C 4.128906 -3.039062 4.234375 -3.28125 4.234375 -3.59375 C 4.234375 -3.914062 4.128906 -4.160156 3.921875 -4.328125 C 3.722656 -4.492188 3.429688 -4.578125 3.046875 -4.578125 L 1.96875 -4.578125 L 1.96875 -2.625 Z M 3.046875 -2.625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(482.613363, 261.582337)">
                                <g>
                                    <path
                                        d="M 1.78125 -3.765625 C 1.925781 -3.972656 2.128906 -4.128906 2.390625 -4.234375 C 2.648438 -4.347656 2.941406 -4.40625 3.265625 -4.40625 L 3.265625 -3.234375 C 3.128906 -3.242188 3.035156 -3.25 2.984375 -3.25 C 2.628906 -3.25 2.347656 -3.148438 2.140625 -2.953125 C 1.941406 -2.753906 1.84375 -2.453125 1.84375 -2.046875 L 1.84375 0 L 0.578125 0 L 0.578125 -4.34375 L 1.78125 -4.34375 Z M 1.78125 -3.765625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(486.088072, 261.582337)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(491.368661, 261.582337)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(494.875618, 261.582337)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(500.156208, 261.582337)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(503.663165, 261.582337)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(506.089815, 261.582337)">
                                <g>
                                    <path
                                        d="M 3.140625 -4.40625 C 3.546875 -4.40625 3.910156 -4.3125 4.234375 -4.125 C 4.566406 -3.9375 4.828125 -3.675781 5.015625 -3.34375 C 5.210938 -3.007812 5.3125 -2.617188 5.3125 -2.171875 C 5.3125 -1.722656 5.210938 -1.328125 5.015625 -0.984375 C 4.828125 -0.648438 4.566406 -0.390625 4.234375 -0.203125 C 3.910156 -0.0234375 3.546875 0.0625 3.140625 0.0625 C 2.585938 0.0625 2.15625 -0.109375 1.84375 -0.453125 L 1.84375 1.5625 L 0.578125 1.5625 L 0.578125 -4.34375 L 1.78125 -4.34375 L 1.78125 -3.84375 C 2.09375 -4.21875 2.546875 -4.40625 3.140625 -4.40625 Z M 2.921875 -0.96875 C 3.242188 -0.96875 3.507812 -1.078125 3.71875 -1.296875 C 3.925781 -1.515625 4.03125 -1.804688 4.03125 -2.171875 C 4.03125 -2.535156 3.925781 -2.828125 3.71875 -3.046875 C 3.507812 -3.265625 3.242188 -3.375 2.921875 -3.375 C 2.597656 -3.375 2.332031 -3.265625 2.125 -3.046875 C 1.925781 -2.828125 1.828125 -2.535156 1.828125 -2.171875 C 1.828125 -1.804688 1.925781 -1.515625 2.125 -1.296875 C 2.332031 -1.078125 2.597656 -0.96875 2.921875 -0.96875 Z M 2.921875 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(511.652572, 261.582337)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(633.325192, 57.995385)">
                                <g>
                                    <path
                                        d="M 3.375 0.09375 C 2.789062 0.09375 2.265625 -0.03125 1.796875 -0.28125 C 1.335938 -0.53125 0.972656 -0.875 0.703125 -1.3125 C 0.441406 -1.757812 0.3125 -2.265625 0.3125 -2.828125 C 0.3125 -3.378906 0.441406 -3.875 0.703125 -4.3125 C 0.972656 -4.757812 1.335938 -5.109375 1.796875 -5.359375 C 2.265625 -5.609375 2.789062 -5.734375 3.375 -5.734375 C 3.863281 -5.734375 4.304688 -5.644531 4.703125 -5.46875 C 5.097656 -5.300781 5.429688 -5.054688 5.703125 -4.734375 L 4.859375 -3.96875 C 4.484375 -4.40625 4.007812 -4.625 3.4375 -4.625 C 3.09375 -4.625 2.78125 -4.546875 2.5 -4.390625 C 2.226562 -4.242188 2.015625 -4.03125 1.859375 -3.75 C 1.710938 -3.476562 1.640625 -3.171875 1.640625 -2.828125 C 1.640625 -2.472656 1.710938 -2.15625 1.859375 -1.875 C 2.015625 -1.601562 2.226562 -1.390625 2.5 -1.234375 C 2.78125 -1.085938 3.09375 -1.015625 3.4375 -1.015625 C 4.007812 -1.015625 4.484375 -1.238281 4.859375 -1.6875 L 5.703125 -0.90625 C 5.429688 -0.582031 5.097656 -0.332031 4.703125 -0.15625 C 4.304688 0.0078125 3.863281 0.09375 3.375 0.09375 Z M 3.375 0.09375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(639.234614, 57.995385)">
                                <g>
                                    <path
                                        d="M 2.328125 -4.40625 C 3.003906 -4.40625 3.519531 -4.242188 3.875 -3.921875 C 4.238281 -3.597656 4.421875 -3.113281 4.421875 -2.46875 L 4.421875 0 L 3.234375 0 L 3.234375 -0.546875 C 3.003906 -0.140625 2.566406 0.0625 1.921875 0.0625 C 1.585938 0.0625 1.296875 0.00390625 1.046875 -0.109375 C 0.804688 -0.222656 0.617188 -0.378906 0.484375 -0.578125 C 0.359375 -0.773438 0.296875 -1 0.296875 -1.25 C 0.296875 -1.65625 0.445312 -1.972656 0.75 -2.203125 C 1.050781 -2.429688 1.519531 -2.546875 2.15625 -2.546875 L 3.15625 -2.546875 C 3.15625 -2.816406 3.070312 -3.023438 2.90625 -3.171875 C 2.738281 -3.328125 2.488281 -3.40625 2.15625 -3.40625 C 1.925781 -3.40625 1.695312 -3.367188 1.46875 -3.296875 C 1.25 -3.222656 1.0625 -3.125 0.90625 -3 L 0.453125 -3.875 C 0.691406 -4.039062 0.976562 -4.171875 1.3125 -4.265625 C 1.644531 -4.359375 1.984375 -4.40625 2.328125 -4.40625 Z M 2.234375 -0.78125 C 2.453125 -0.78125 2.644531 -0.828125 2.8125 -0.921875 C 2.976562 -1.023438 3.09375 -1.175781 3.15625 -1.375 L 3.15625 -1.8125 L 2.296875 -1.8125 C 1.785156 -1.8125 1.53125 -1.644531 1.53125 -1.3125 C 1.53125 -1.144531 1.59375 -1.015625 1.71875 -0.921875 C 1.84375 -0.828125 2.015625 -0.78125 2.234375 -0.78125 Z M 2.234375 -0.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(644.208845, 57.995385)">
                                <g>
                                    <path
                                        d="M 2.046875 0.0625 C 1.679688 0.0625 1.328125 0.0195312 0.984375 -0.0625 C 0.640625 -0.15625 0.363281 -0.269531 0.15625 -0.40625 L 0.578125 -1.3125 C 0.773438 -1.1875 1.007812 -1.082031 1.28125 -1 C 1.550781 -0.925781 1.820312 -0.890625 2.09375 -0.890625 C 2.625 -0.890625 2.890625 -1.019531 2.890625 -1.28125 C 2.890625 -1.40625 2.816406 -1.492188 2.671875 -1.546875 C 2.523438 -1.597656 2.300781 -1.644531 2 -1.6875 C 1.644531 -1.738281 1.351562 -1.796875 1.125 -1.859375 C 0.894531 -1.929688 0.691406 -2.054688 0.515625 -2.234375 C 0.347656 -2.410156 0.265625 -2.664062 0.265625 -3 C 0.265625 -3.269531 0.34375 -3.507812 0.5 -3.71875 C 0.65625 -3.9375 0.882812 -4.101562 1.1875 -4.21875 C 1.5 -4.34375 1.863281 -4.40625 2.28125 -4.40625 C 2.582031 -4.40625 2.882812 -4.367188 3.1875 -4.296875 C 3.488281 -4.234375 3.738281 -4.140625 3.9375 -4.015625 L 3.515625 -3.125 C 3.140625 -3.34375 2.726562 -3.453125 2.28125 -3.453125 C 2.007812 -3.453125 1.804688 -3.410156 1.671875 -3.328125 C 1.535156 -3.253906 1.46875 -3.160156 1.46875 -3.046875 C 1.46875 -2.910156 1.539062 -2.816406 1.6875 -2.765625 C 1.832031 -2.710938 2.0625 -2.660156 2.375 -2.609375 C 2.726562 -2.554688 3.019531 -2.492188 3.25 -2.421875 C 3.476562 -2.359375 3.675781 -2.238281 3.84375 -2.0625 C 4.007812 -1.882812 4.09375 -1.632812 4.09375 -1.3125 C 4.09375 -1.039062 4.007812 -0.800781 3.84375 -0.59375 C 3.6875 -0.382812 3.453125 -0.222656 3.140625 -0.109375 C 2.828125 0.00390625 2.460938 0.0625 2.046875 0.0625 Z M 2.046875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(648.489751, 57.995385)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(653.77034, 57.995385)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(656.051874, 57.995385)">
                                <g>
                                    <path
                                        d="M 5 -5.984375 L 5 0 L 3.796875 0 L 3.796875 -0.5 C 3.484375 -0.125 3.03125 0.0625 2.4375 0.0625 C 2.03125 0.0625 1.660156 -0.0234375 1.328125 -0.203125 C 1.003906 -0.390625 0.75 -0.648438 0.5625 -0.984375 C 0.375 -1.328125 0.28125 -1.722656 0.28125 -2.171875 C 0.28125 -2.617188 0.375 -3.007812 0.5625 -3.34375 C 0.75 -3.6875 1.003906 -3.945312 1.328125 -4.125 C 1.660156 -4.3125 2.03125 -4.40625 2.4375 -4.40625 C 2.988281 -4.40625 3.421875 -4.226562 3.734375 -3.875 L 3.734375 -5.984375 Z M 2.65625 -0.96875 C 2.976562 -0.96875 3.242188 -1.078125 3.453125 -1.296875 C 3.660156 -1.515625 3.765625 -1.804688 3.765625 -2.171875 C 3.765625 -2.535156 3.660156 -2.828125 3.453125 -3.046875 C 3.242188 -3.265625 2.976562 -3.375 2.65625 -3.375 C 2.332031 -3.375 2.066406 -3.265625 1.859375 -3.046875 C 1.648438 -2.828125 1.546875 -2.535156 1.546875 -2.171875 C 1.546875 -1.804688 1.648438 -1.515625 1.859375 -1.296875 C 2.066406 -1.078125 2.332031 -0.96875 2.65625 -0.96875 Z M 2.65625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(661.630752, 57.995385)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(666.717856, 57.995385)">
                                <g />
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(668.99939, 57.995385)">
                                <g>
                                    <path
                                        d="M 4.828125 -2.15625 C 4.828125 -2.132812 4.820312 -2.019531 4.8125 -1.8125 L 1.53125 -1.8125 C 1.582031 -1.539062 1.71875 -1.328125 1.9375 -1.171875 C 2.164062 -1.015625 2.441406 -0.9375 2.765625 -0.9375 C 2.992188 -0.9375 3.191406 -0.96875 3.359375 -1.03125 C 3.535156 -1.101562 3.703125 -1.210938 3.859375 -1.359375 L 4.515625 -0.640625 C 4.109375 -0.171875 3.515625 0.0625 2.734375 0.0625 C 2.242188 0.0625 1.8125 -0.03125 1.4375 -0.21875 C 1.0625 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.757812 -3.65625 1.035156 -3.921875 1.390625 -4.109375 C 1.742188 -4.304688 2.140625 -4.40625 2.578125 -4.40625 C 2.992188 -4.40625 3.375 -4.3125 3.71875 -4.125 C 4.0625 -3.945312 4.332031 -3.6875 4.53125 -3.34375 C 4.726562 -3 4.828125 -2.601562 4.828125 -2.15625 Z M 2.578125 -3.453125 C 2.296875 -3.453125 2.054688 -3.367188 1.859375 -3.203125 C 1.671875 -3.046875 1.550781 -2.828125 1.5 -2.546875 L 3.640625 -2.546875 C 3.597656 -2.816406 3.476562 -3.035156 3.28125 -3.203125 C 3.09375 -3.367188 2.859375 -3.453125 2.578125 -3.453125 Z M 2.578125 -3.453125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(674.086493, 57.995385)">
                                <g>
                                    <path
                                        d="M 2.046875 0.0625 C 1.679688 0.0625 1.328125 0.0195312 0.984375 -0.0625 C 0.640625 -0.15625 0.363281 -0.269531 0.15625 -0.40625 L 0.578125 -1.3125 C 0.773438 -1.1875 1.007812 -1.082031 1.28125 -1 C 1.550781 -0.925781 1.820312 -0.890625 2.09375 -0.890625 C 2.625 -0.890625 2.890625 -1.019531 2.890625 -1.28125 C 2.890625 -1.40625 2.816406 -1.492188 2.671875 -1.546875 C 2.523438 -1.597656 2.300781 -1.644531 2 -1.6875 C 1.644531 -1.738281 1.351562 -1.796875 1.125 -1.859375 C 0.894531 -1.929688 0.691406 -2.054688 0.515625 -2.234375 C 0.347656 -2.410156 0.265625 -2.664062 0.265625 -3 C 0.265625 -3.269531 0.34375 -3.507812 0.5 -3.71875 C 0.65625 -3.9375 0.882812 -4.101562 1.1875 -4.21875 C 1.5 -4.34375 1.863281 -4.40625 2.28125 -4.40625 C 2.582031 -4.40625 2.882812 -4.367188 3.1875 -4.296875 C 3.488281 -4.234375 3.738281 -4.140625 3.9375 -4.015625 L 3.515625 -3.125 C 3.140625 -3.34375 2.726562 -3.453125 2.28125 -3.453125 C 2.007812 -3.453125 1.804688 -3.410156 1.671875 -3.328125 C 1.535156 -3.253906 1.46875 -3.160156 1.46875 -3.046875 C 1.46875 -2.910156 1.539062 -2.816406 1.6875 -2.765625 C 1.832031 -2.710938 2.0625 -2.660156 2.375 -2.609375 C 2.726562 -2.554688 3.019531 -2.492188 3.25 -2.421875 C 3.476562 -2.359375 3.675781 -2.238281 3.84375 -2.0625 C 4.007812 -1.882812 4.09375 -1.632812 4.09375 -1.3125 C 4.09375 -1.039062 4.007812 -0.800781 3.84375 -0.59375 C 3.6875 -0.382812 3.453125 -0.222656 3.140625 -0.109375 C 2.828125 0.00390625 2.460938 0.0625 2.046875 0.0625 Z M 2.046875 0.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(678.367399, 57.995385)">
                                <g>
                                    <path
                                        d="M 3.375 -0.203125 C 3.25 -0.117188 3.097656 -0.0507812 2.921875 0 C 2.742188 0.0390625 2.554688 0.0625 2.359375 0.0625 C 1.835938 0.0625 1.4375 -0.0664062 1.15625 -0.328125 C 0.875 -0.585938 0.734375 -0.972656 0.734375 -1.484375 L 0.734375 -3.265625 L 0.0625 -3.265625 L 0.0625 -4.234375 L 0.734375 -4.234375 L 0.734375 -5.296875 L 1.984375 -5.296875 L 1.984375 -4.234375 L 3.078125 -4.234375 L 3.078125 -3.265625 L 1.984375 -3.265625 L 1.984375 -1.5 C 1.984375 -1.320312 2.03125 -1.179688 2.125 -1.078125 C 2.226562 -0.984375 2.363281 -0.9375 2.53125 -0.9375 C 2.726562 -0.9375 2.898438 -0.988281 3.046875 -1.09375 Z M 3.375 -0.203125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(681.874357, 57.995385)">
                                <g>
                                    <path
                                        d="M 4.953125 -4.34375 L 4.953125 0 L 3.75 0 L 3.75 -0.515625 C 3.582031 -0.328125 3.382812 -0.179688 3.15625 -0.078125 C 2.925781 0.015625 2.675781 0.0625 2.40625 0.0625 C 1.84375 0.0625 1.394531 -0.0976562 1.0625 -0.421875 C 0.726562 -0.753906 0.5625 -1.242188 0.5625 -1.890625 L 0.5625 -4.34375 L 1.8125 -4.34375 L 1.8125 -2.078125 C 1.8125 -1.378906 2.101562 -1.03125 2.6875 -1.03125 C 2.988281 -1.03125 3.226562 -1.125 3.40625 -1.3125 C 3.59375 -1.507812 3.6875 -1.800781 3.6875 -2.1875 L 3.6875 -4.34375 Z M 4.953125 -4.34375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(687.412929, 57.995385)">
                                <g>
                                    <path
                                        d="M 5 -5.984375 L 5 0 L 3.796875 0 L 3.796875 -0.5 C 3.484375 -0.125 3.03125 0.0625 2.4375 0.0625 C 2.03125 0.0625 1.660156 -0.0234375 1.328125 -0.203125 C 1.003906 -0.390625 0.75 -0.648438 0.5625 -0.984375 C 0.375 -1.328125 0.28125 -1.722656 0.28125 -2.171875 C 0.28125 -2.617188 0.375 -3.007812 0.5625 -3.34375 C 0.75 -3.6875 1.003906 -3.945312 1.328125 -4.125 C 1.660156 -4.3125 2.03125 -4.40625 2.4375 -4.40625 C 2.988281 -4.40625 3.421875 -4.226562 3.734375 -3.875 L 3.734375 -5.984375 Z M 2.65625 -0.96875 C 2.976562 -0.96875 3.242188 -1.078125 3.453125 -1.296875 C 3.660156 -1.515625 3.765625 -1.804688 3.765625 -2.171875 C 3.765625 -2.535156 3.660156 -2.828125 3.453125 -3.046875 C 3.242188 -3.265625 2.976562 -3.375 2.65625 -3.375 C 2.332031 -3.375 2.066406 -3.265625 1.859375 -3.046875 C 1.648438 -2.828125 1.546875 -2.535156 1.546875 -2.171875 C 1.546875 -1.804688 1.648438 -1.515625 1.859375 -1.296875 C 2.066406 -1.078125 2.332031 -0.96875 2.65625 -0.96875 Z M 2.65625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(692.991807, 57.995385)">
                                <g>
                                    <path
                                        d="M 0.578125 -4.34375 L 1.84375 -4.34375 L 1.84375 0 L 0.578125 0 Z M 1.203125 -4.9375 C 0.972656 -4.9375 0.785156 -5.003906 0.640625 -5.140625 C 0.492188 -5.273438 0.421875 -5.441406 0.421875 -5.640625 C 0.421875 -5.835938 0.492188 -6.003906 0.640625 -6.140625 C 0.785156 -6.273438 0.972656 -6.34375 1.203125 -6.34375 C 1.429688 -6.34375 1.617188 -6.273438 1.765625 -6.140625 C 1.910156 -6.015625 1.984375 -5.859375 1.984375 -5.671875 C 1.984375 -5.460938 1.910156 -5.285156 1.765625 -5.140625 C 1.617188 -5.003906 1.429688 -4.9375 1.203125 -4.9375 Z M 1.203125 -4.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#fbfcfd" fill-opacity="1">
                            <g transform="translate(695.418457, 57.995385)">
                                <g>
                                    <path
                                        d="M 2.640625 0.0625 C 2.179688 0.0625 1.769531 -0.03125 1.40625 -0.21875 C 1.050781 -0.414062 0.769531 -0.679688 0.5625 -1.015625 C 0.363281 -1.359375 0.265625 -1.742188 0.265625 -2.171875 C 0.265625 -2.597656 0.363281 -2.976562 0.5625 -3.3125 C 0.769531 -3.65625 1.050781 -3.921875 1.40625 -4.109375 C 1.769531 -4.304688 2.179688 -4.40625 2.640625 -4.40625 C 3.097656 -4.40625 3.503906 -4.304688 3.859375 -4.109375 C 4.222656 -3.921875 4.503906 -3.65625 4.703125 -3.3125 C 4.910156 -2.976562 5.015625 -2.597656 5.015625 -2.171875 C 5.015625 -1.742188 4.910156 -1.359375 4.703125 -1.015625 C 4.503906 -0.679688 4.222656 -0.414062 3.859375 -0.21875 C 3.503906 -0.03125 3.097656 0.0625 2.640625 0.0625 Z M 2.640625 -0.96875 C 2.960938 -0.96875 3.226562 -1.078125 3.4375 -1.296875 C 3.644531 -1.515625 3.75 -1.804688 3.75 -2.171875 C 3.75 -2.535156 3.644531 -2.828125 3.4375 -3.046875 C 3.226562 -3.265625 2.960938 -3.375 2.640625 -3.375 C 2.316406 -3.375 2.050781 -3.265625 1.84375 -3.046875 C 1.632812 -2.828125 1.53125 -2.535156 1.53125 -2.171875 C 1.53125 -1.804688 1.632812 -1.515625 1.84375 -1.296875 C 2.050781 -1.078125 2.316406 -0.96875 2.640625 -0.96875 Z M 2.640625 -0.96875 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(94.337785, 30.641459)">
                                <g>
                                    <path
                                        d="M 0.703125 -5.9375 L 2.078125 -5.9375 L 2.078125 0 L 0.703125 0 Z M 0.703125 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(98.159483, 30.641459)">
                                <g>
                                    <path
                                        d="M 6.15625 -5.9375 L 6.15625 0 L 5.015625 0 L 2.0625 -3.609375 L 2.0625 0 L 0.703125 0 L 0.703125 -5.9375 L 1.84375 -5.9375 L 4.796875 -2.328125 L 4.796875 -5.9375 Z M 6.15625 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(106.047444, 30.641459)">
                                <g>
                                    <path
                                        d="M 4.71875 -3.0625 L 5.96875 -3.0625 L 5.96875 -0.65625 C 5.644531 -0.40625 5.269531 -0.210938 4.84375 -0.078125 C 4.425781 0.046875 4.003906 0.109375 3.578125 0.109375 C 2.953125 0.109375 2.394531 -0.0195312 1.90625 -0.28125 C 1.414062 -0.550781 1.03125 -0.921875 0.75 -1.390625 C 0.46875 -1.859375 0.328125 -2.382812 0.328125 -2.96875 C 0.328125 -3.5625 0.46875 -4.085938 0.75 -4.546875 C 1.03125 -5.015625 1.421875 -5.378906 1.921875 -5.640625 C 2.421875 -5.910156 2.976562 -6.046875 3.59375 -6.046875 C 4.113281 -6.046875 4.585938 -5.957031 5.015625 -5.78125 C 5.441406 -5.601562 5.796875 -5.347656 6.078125 -5.015625 L 5.203125 -4.203125 C 4.773438 -4.648438 4.265625 -4.875 3.671875 -4.875 C 3.285156 -4.875 2.945312 -4.789062 2.65625 -4.625 C 2.363281 -4.46875 2.132812 -4.242188 1.96875 -3.953125 C 1.800781 -3.671875 1.71875 -3.34375 1.71875 -2.96875 C 1.71875 -2.601562 1.800781 -2.273438 1.96875 -1.984375 C 2.132812 -1.691406 2.363281 -1.460938 2.65625 -1.296875 C 2.945312 -1.140625 3.273438 -1.0625 3.640625 -1.0625 C 4.035156 -1.0625 4.394531 -1.148438 4.71875 -1.328125 Z M 4.71875 -3.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(113.621965, 30.641459)">
                                <g>
                                    <path
                                        d="M 4.484375 0 L 3.34375 -1.65625 L 2.078125 -1.65625 L 2.078125 0 L 0.703125 0 L 0.703125 -5.9375 L 3.28125 -5.9375 C 3.800781 -5.9375 4.253906 -5.847656 4.640625 -5.671875 C 5.023438 -5.492188 5.320312 -5.242188 5.53125 -4.921875 C 5.75 -4.609375 5.859375 -4.226562 5.859375 -3.78125 C 5.859375 -3.34375 5.75 -2.960938 5.53125 -2.640625 C 5.320312 -2.316406 5.019531 -2.070312 4.625 -1.90625 L 5.96875 0 Z M 4.46875 -3.78125 C 4.46875 -4.113281 4.359375 -4.367188 4.140625 -4.546875 C 3.921875 -4.722656 3.609375 -4.8125 3.203125 -4.8125 L 2.078125 -4.8125 L 2.078125 -2.75 L 3.203125 -2.75 C 3.609375 -2.75 3.921875 -2.835938 4.140625 -3.015625 C 4.359375 -3.203125 4.46875 -3.457031 4.46875 -3.78125 Z M 4.46875 -3.78125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(120.891518, 30.641459)">
                                <g>
                                    <path
                                        d="M 5.296875 -1.109375 L 5.296875 0 L 0.703125 0 L 0.703125 -5.9375 L 5.1875 -5.9375 L 5.1875 -4.84375 L 2.0625 -4.84375 L 2.0625 -3.546875 L 4.828125 -3.546875 L 4.828125 -2.484375 L 2.0625 -2.484375 L 2.0625 -1.109375 Z M 5.296875 -1.109375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(127.618904, 30.641459)">
                                <g>
                                    <path
                                        d="M 2.65625 0.109375 C 2.1875 0.109375 1.734375 0.046875 1.296875 -0.078125 C 0.859375 -0.210938 0.503906 -0.378906 0.234375 -0.578125 L 0.703125 -1.625 C 0.960938 -1.4375 1.265625 -1.285156 1.609375 -1.171875 C 1.960938 -1.054688 2.316406 -1 2.671875 -1 C 3.054688 -1 3.34375 -1.054688 3.53125 -1.171875 C 3.71875 -1.285156 3.8125 -1.441406 3.8125 -1.640625 C 3.8125 -1.773438 3.753906 -1.890625 3.640625 -1.984375 C 3.535156 -2.078125 3.394531 -2.148438 3.21875 -2.203125 C 3.050781 -2.265625 2.816406 -2.332031 2.515625 -2.40625 C 2.066406 -2.507812 1.695312 -2.613281 1.40625 -2.71875 C 1.113281 -2.832031 0.863281 -3.003906 0.65625 -3.234375 C 0.457031 -3.472656 0.359375 -3.789062 0.359375 -4.1875 C 0.359375 -4.53125 0.453125 -4.84375 0.640625 -5.125 C 0.828125 -5.40625 1.109375 -5.628906 1.484375 -5.796875 C 1.859375 -5.960938 2.316406 -6.046875 2.859375 -6.046875 C 3.234375 -6.046875 3.601562 -6 3.96875 -5.90625 C 4.332031 -5.8125 4.648438 -5.679688 4.921875 -5.515625 L 4.5 -4.46875 C 3.945312 -4.78125 3.394531 -4.9375 2.84375 -4.9375 C 2.46875 -4.9375 2.1875 -4.875 2 -4.75 C 1.8125 -4.625 1.71875 -4.460938 1.71875 -4.265625 C 1.71875 -4.054688 1.820312 -3.898438 2.03125 -3.796875 C 2.25 -3.703125 2.578125 -3.609375 3.015625 -3.515625 C 3.460938 -3.398438 3.832031 -3.289062 4.125 -3.1875 C 4.414062 -3.082031 4.660156 -2.910156 4.859375 -2.671875 C 5.066406 -2.441406 5.171875 -2.128906 5.171875 -1.734375 C 5.171875 -1.398438 5.078125 -1.09375 4.890625 -0.8125 C 4.703125 -0.53125 4.414062 -0.304688 4.03125 -0.140625 C 3.65625 0.0234375 3.195312 0.109375 2.65625 0.109375 Z M 2.65625 0.109375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(134.06673, 30.641459)">
                                <g>
                                    <path
                                        d="M 3.578125 0.109375 C 2.960938 0.109375 2.40625 -0.0234375 1.90625 -0.296875 C 1.414062 -0.566406 1.03125 -0.929688 0.75 -1.390625 C 0.46875 -1.859375 0.328125 -2.382812 0.328125 -2.96875 C 0.328125 -3.550781 0.46875 -4.078125 0.75 -4.546875 C 1.03125 -5.015625 1.414062 -5.378906 1.90625 -5.640625 C 2.40625 -5.910156 2.960938 -6.046875 3.578125 -6.046875 C 4.191406 -6.046875 4.742188 -5.910156 5.234375 -5.640625 C 5.734375 -5.378906 6.125 -5.015625 6.40625 -4.546875 C 6.6875 -4.078125 6.828125 -3.550781 6.828125 -2.96875 C 6.828125 -2.382812 6.6875 -1.859375 6.40625 -1.390625 C 6.125 -0.929688 5.734375 -0.566406 5.234375 -0.296875 C 4.742188 -0.0234375 4.191406 0.109375 3.578125 0.109375 Z M 3.578125 -1.0625 C 3.929688 -1.0625 4.25 -1.140625 4.53125 -1.296875 C 4.8125 -1.460938 5.03125 -1.691406 5.1875 -1.984375 C 5.351562 -2.273438 5.4375 -2.601562 5.4375 -2.96875 C 5.4375 -3.332031 5.351562 -3.660156 5.1875 -3.953125 C 5.03125 -4.242188 4.8125 -4.46875 4.53125 -4.625 C 4.25 -4.789062 3.929688 -4.875 3.578125 -4.875 C 3.222656 -4.875 2.90625 -4.789062 2.625 -4.625 C 2.34375 -4.46875 2.117188 -4.242188 1.953125 -3.953125 C 1.796875 -3.660156 1.71875 -3.332031 1.71875 -2.96875 C 1.71875 -2.601562 1.796875 -2.273438 1.953125 -1.984375 C 2.117188 -1.691406 2.34375 -1.460938 2.625 -1.296875 C 2.90625 -1.140625 3.222656 -1.0625 3.578125 -1.0625 Z M 3.578125 -1.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(142.259661, 30.641459)">
                                <g>
                                    <path
                                        d="M 2.65625 0.109375 C 2.1875 0.109375 1.734375 0.046875 1.296875 -0.078125 C 0.859375 -0.210938 0.503906 -0.378906 0.234375 -0.578125 L 0.703125 -1.625 C 0.960938 -1.4375 1.265625 -1.285156 1.609375 -1.171875 C 1.960938 -1.054688 2.316406 -1 2.671875 -1 C 3.054688 -1 3.34375 -1.054688 3.53125 -1.171875 C 3.71875 -1.285156 3.8125 -1.441406 3.8125 -1.640625 C 3.8125 -1.773438 3.753906 -1.890625 3.640625 -1.984375 C 3.535156 -2.078125 3.394531 -2.148438 3.21875 -2.203125 C 3.050781 -2.265625 2.816406 -2.332031 2.515625 -2.40625 C 2.066406 -2.507812 1.695312 -2.613281 1.40625 -2.71875 C 1.113281 -2.832031 0.863281 -3.003906 0.65625 -3.234375 C 0.457031 -3.472656 0.359375 -3.789062 0.359375 -4.1875 C 0.359375 -4.53125 0.453125 -4.84375 0.640625 -5.125 C 0.828125 -5.40625 1.109375 -5.628906 1.484375 -5.796875 C 1.859375 -5.960938 2.316406 -6.046875 2.859375 -6.046875 C 3.234375 -6.046875 3.601562 -6 3.96875 -5.90625 C 4.332031 -5.8125 4.648438 -5.679688 4.921875 -5.515625 L 4.5 -4.46875 C 3.945312 -4.78125 3.394531 -4.9375 2.84375 -4.9375 C 2.46875 -4.9375 2.1875 -4.875 2 -4.75 C 1.8125 -4.625 1.71875 -4.460938 1.71875 -4.265625 C 1.71875 -4.054688 1.820312 -3.898438 2.03125 -3.796875 C 2.25 -3.703125 2.578125 -3.609375 3.015625 -3.515625 C 3.460938 -3.398438 3.832031 -3.289062 4.125 -3.1875 C 4.414062 -3.082031 4.660156 -2.910156 4.859375 -2.671875 C 5.066406 -2.441406 5.171875 -2.128906 5.171875 -1.734375 C 5.171875 -1.398438 5.078125 -1.09375 4.890625 -0.8125 C 4.703125 -0.53125 4.414062 -0.304688 4.03125 -0.140625 C 3.65625 0.0234375 3.195312 0.109375 2.65625 0.109375 Z M 2.65625 0.109375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(819.465867, 360.018433)">
                                <g>
                                    <path
                                        d="M 0.703125 -5.9375 L 2.078125 -5.9375 L 2.078125 0 L 0.703125 0 Z M 0.703125 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(823.287566, 360.018433)">
                                <g>
                                    <path
                                        d="M 6.15625 -5.9375 L 6.15625 0 L 5.015625 0 L 2.0625 -3.609375 L 2.0625 0 L 0.703125 0 L 0.703125 -5.9375 L 1.84375 -5.9375 L 4.796875 -2.328125 L 4.796875 -5.9375 Z M 6.15625 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(831.175526, 360.018433)">
                                <g>
                                    <path
                                        d="M 6.15625 -5.9375 L 6.15625 0 L 5.015625 0 L 2.0625 -3.609375 L 2.0625 0 L 0.703125 0 L 0.703125 -5.9375 L 1.84375 -5.9375 L 4.796875 -2.328125 L 4.796875 -5.9375 Z M 6.15625 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(839.063486, 360.018433)">
                                <g>
                                    <path
                                        d="M 3.578125 0.109375 C 2.960938 0.109375 2.40625 -0.0234375 1.90625 -0.296875 C 1.414062 -0.566406 1.03125 -0.929688 0.75 -1.390625 C 0.46875 -1.859375 0.328125 -2.382812 0.328125 -2.96875 C 0.328125 -3.550781 0.46875 -4.078125 0.75 -4.546875 C 1.03125 -5.015625 1.414062 -5.378906 1.90625 -5.640625 C 2.40625 -5.910156 2.960938 -6.046875 3.578125 -6.046875 C 4.191406 -6.046875 4.742188 -5.910156 5.234375 -5.640625 C 5.734375 -5.378906 6.125 -5.015625 6.40625 -4.546875 C 6.6875 -4.078125 6.828125 -3.550781 6.828125 -2.96875 C 6.828125 -2.382812 6.6875 -1.859375 6.40625 -1.390625 C 6.125 -0.929688 5.734375 -0.566406 5.234375 -0.296875 C 4.742188 -0.0234375 4.191406 0.109375 3.578125 0.109375 Z M 3.578125 -1.0625 C 3.929688 -1.0625 4.25 -1.140625 4.53125 -1.296875 C 4.8125 -1.460938 5.03125 -1.691406 5.1875 -1.984375 C 5.351562 -2.273438 5.4375 -2.601562 5.4375 -2.96875 C 5.4375 -3.332031 5.351562 -3.660156 5.1875 -3.953125 C 5.03125 -4.242188 4.8125 -4.46875 4.53125 -4.625 C 4.25 -4.789062 3.929688 -4.875 3.578125 -4.875 C 3.222656 -4.875 2.90625 -4.789062 2.625 -4.625 C 2.34375 -4.46875 2.117188 -4.242188 1.953125 -3.953125 C 1.796875 -3.660156 1.71875 -3.332031 1.71875 -2.96875 C 1.71875 -2.601562 1.796875 -2.273438 1.953125 -1.984375 C 2.117188 -1.691406 2.34375 -1.460938 2.625 -1.296875 C 2.90625 -1.140625 3.222656 -1.0625 3.578125 -1.0625 Z M 3.578125 -1.0625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(847.256415, 360.018433)">
                                <g>
                                    <path
                                        d="M 6.421875 -5.9375 L 3.84375 0 L 2.484375 0 L -0.078125 -5.9375 L 1.40625 -5.9375 L 3.21875 -1.703125 L 5.046875 -5.9375 Z M 6.421875 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(854.619154, 360.018433)">
                                <g>
                                    <path
                                        d="M 4.609375 -1.265625 L 1.859375 -1.265625 L 1.328125 0 L -0.078125 0 L 2.578125 -5.9375 L 3.921875 -5.9375 L 6.578125 0 L 5.140625 0 Z M 4.1875 -2.3125 L 3.234375 -4.59375 L 2.296875 -2.3125 Z M 4.1875 -2.3125 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(862.151316, 360.018433)">
                                <g>
                                    <path
                                        d="M 3.546875 0.109375 C 2.941406 0.109375 2.394531 -0.0195312 1.90625 -0.28125 C 1.414062 -0.550781 1.03125 -0.921875 0.75 -1.390625 C 0.46875 -1.859375 0.328125 -2.382812 0.328125 -2.96875 C 0.328125 -3.5625 0.46875 -4.085938 0.75 -4.546875 C 1.03125 -5.015625 1.414062 -5.378906 1.90625 -5.640625 C 2.394531 -5.910156 2.945312 -6.046875 3.5625 -6.046875 C 4.070312 -6.046875 4.535156 -5.953125 4.953125 -5.765625 C 5.367188 -5.585938 5.71875 -5.328125 6 -4.984375 L 5.109375 -4.171875 C 4.710938 -4.640625 4.21875 -4.875 3.625 -4.875 C 3.257812 -4.875 2.929688 -4.789062 2.640625 -4.625 C 2.347656 -4.46875 2.117188 -4.242188 1.953125 -3.953125 C 1.796875 -3.660156 1.71875 -3.332031 1.71875 -2.96875 C 1.71875 -2.601562 1.796875 -2.273438 1.953125 -1.984375 C 2.117188 -1.691406 2.347656 -1.460938 2.640625 -1.296875 C 2.929688 -1.140625 3.257812 -1.0625 3.625 -1.0625 C 4.21875 -1.0625 4.710938 -1.296875 5.109375 -1.765625 L 6 -0.953125 C 5.71875 -0.609375 5.363281 -0.34375 4.9375 -0.15625 C 4.519531 0.0195312 4.054688 0.109375 3.546875 0.109375 Z M 3.546875 0.109375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(869.403925, 360.018433)">
                                <g>
                                    <path
                                        d="M 0.703125 -5.9375 L 2.078125 -5.9375 L 2.078125 0 L 0.703125 0 Z M 0.703125 -5.9375 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(873.225625, 360.018433)">
                                <g>
                                    <path
                                        d="M 3.578125 0.109375 C 2.960938 0.109375 2.40625 -0.0234375 1.90625 -0.296875 C 1.414062 -0.566406 1.03125 -0.929688 0.75 -1.390625 C 0.46875 -1.859375 0.328125 -2.382812 0.328125 -2.96875 C 0.328125 -3.550781 0.46875 -4.078125 0.75 -4.546875 C 1.03125 -5.015625 1.414062 -5.378906 1.90625 -5.640625 C 2.40625 -5.910156 2.960938 -6.046875 3.578125 -6.046875 C 4.191406 -6.046875 4.742188 -5.910156 5.234375 -5.640625 C 5.734375 -5.378906 6.125 -5.015625 6.40625 -4.546875 C 6.6875 -4.078125 6.828125 -3.550781 6.828125 -2.96875 C 6.828125 -2.382812 6.6875 -1.859375 6.40625 -1.390625 C 6.125 -0.929688 5.734375 -0.566406 5.234375 -0.296875 C 4.742188 -0.0234375 4.191406 0.109375 3.578125 0.109375 Z M 3.578125 -1.0625 C 3.929688 -1.0625 4.25 -1.140625 4.53125 -1.296875 C 4.8125 -1.460938 5.03125 -1.691406 5.1875 -1.984375 C 5.351562 -2.273438 5.4375 -2.601562 5.4375 -2.96875 C 5.4375 -3.332031 5.351562 -3.660156 5.1875 -3.953125 C 5.03125 -4.242188 4.8125 -4.46875 4.53125 -4.625 C 4.25 -4.789062 3.929688 -4.875 3.578125 -4.875 C 3.222656 -4.875 2.90625 -4.789062 2.625 -4.625 C 2.34375 -4.46875 2.117188 -4.242188 1.953125 -3.953125 C 1.796875 -3.660156 1.71875 -3.332031 1.71875 -2.96875 C 1.71875 -2.601562 1.796875 -2.273438 1.953125 -1.984375 C 2.117188 -1.691406 2.34375 -1.460938 2.625 -1.296875 C 2.90625 -1.140625 3.222656 -1.0625 3.578125 -1.0625 Z M 3.953125 -7.640625 L 5.375 -7.640625 L 3.84375 -6.421875 L 2.8125 -6.421875 Z M 3.953125 -7.640625 " />
                                </g>
                            </g>
                        </g>
                        <g fill="#f8d21b" fill-opacity="1">
                            <g transform="translate(881.418556, 360.018433)">
                                <g>
                                    <path
                                        d="M 6.15625 -5.9375 L 6.15625 0 L 5.015625 0 L 2.0625 -3.609375 L 2.0625 0 L 0.703125 0 L 0.703125 -5.9375 L 1.84375 -5.9375 L 4.796875 -2.328125 L 4.796875 -5.9375 Z M 6.15625 -5.9375 " />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            @endif
        </div>

        <div>
            <!-- end Topbar -->
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="slimscroll-menu">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">
                            {{-- <li>
                                <a href="{{ route('indexideas') }}">
                                    <i class="fe-bar-chart-2"></i>
                                    <span> Dashboards </span>
                                </a>
                            </li> --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-book-open"></i>
                                    <span>Panel de Control </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="">
                                            <i class="la la-dashboard"></i>
                                            <span> Usuarios</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fe-eye"></i>
                                            <span>Fases </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="">
                                            <i class="fe-edit"></i>
                                            <span>Proyectos</span>
                                        </a>
                                    </li>                              
                                </ul>
                            </li>

                            {{-- @if (Auth::user()->fase == 1)
                                <li class="menu-title">Menú Fase 1</li>
                            @elseif (Auth::user()->fase == 2)
                                <li class="menu-title">Menú Fase 2</li>
                            @elseif (Auth::user()->fase == 3)
                                <li class="menu-title">Menú Fase 3</li>
                            @elseif (Auth::user()->fase == 4)
                                <li class="menu-title">Menú Fase 4</li>
                            @elseif (Auth::user()->fase == 5)
                                <li class="menu-title">Menú Fase 5</li>
                            @elseif (Auth::user()->fase == 6)
                                <li class="menu-title">Menú Fase 6</li>
                            @elseif (Auth::user()->fase == 7)
                                <li class="menu-title">Menú Fase 7</li>
                            @elseif (Auth::user()->fase == 8)
                                <li class="menu-title">Menú Fase 8</li>
                            @elseif (Auth::user()->fase == 9)
                                <li class="menu-title">Menú Fase 9</li>
                            @elseif (Auth::user()->fase == 10)
                                <li class="menu-title">Menú Fase 10</li>
                            @elseif (Auth::user()->fase == 11)
                                <li class="menu-title">Menú Fase 11</li>
                            @elseif (Auth::user()->fase == 12)
                                <li class="menu-title">Menú Fase 12</li>
                            @endif --}}


                            {{-- inicio demo --}}

                            {{-- @if (Auth::user()->equipo == 1000)
                                <li>
                                    <a href="{{ route('Admin') }}">
                                        <i class="la la-dashboard"></i>
                                        <span> Panel de control</span>
                                    </a>

                                </li>
                                <li>
                                    <a href="{{ route('DemodaY') }}">
                                        <i class="mdi mdi-clipboard-pulse"></i>
                                        <span> Demo Day</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('FeedBack') }}">
                                        <i class="la la-dashboard"></i>
                                        <span> FeedBack</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('indexideas') }}">
                                        <i class="fe-bar-chart-2"></i>
                                        <span> Dashboards </span>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('DemodaY') }}">
                                        <i class="mdi mdi-clipboard-pulse"></i>
                                        <span> Demo Day</span>
                                    </a>
                                </li>
                            @endif --}}
                            {{-- inicio demo --}}

                            {{-- inicio new --}}
                            {{-- <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-book-open"></i>
                                    <span> ExO Sprint </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    @if (Auth::user()->equipo != 1000 && Auth::user()->equipo != 1001)
                                        <ul>
                                            <li>
                                                <a href="{{ route('Nave') }}">
                                                    <i class="fe-map"></i>
                                                    <span>Nave</span>
                                                </a>
                                            </li>
                                            @foreach ($fases as $fase)
                                                @if (Auth::user()->fase)
                                                    @if ($fase->fases <= Auth::user()->fase)
                                                        <li>
                                                            <a href="{{ route('mvsexo', ['id' => $fase->fases]) }}">
                                                                <i class="icon-rocket"></i>
                                                                <span> {{ $fase->titulo }}</span>
                                                            </a>
                                                        </li>
                                                    @endif
                                                @else
                                                    @if ($fase->fases <= 1)
                                                        <li>
                                                            <a href="{{ route('mvsexo', ['id' => $fase->fases]) }}">
                                                                <i class="icon-rocket"></i>
                                                                <span> {{ $fase->titulo }}</span>
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                </ul>
                            </li>
                        @elseif(Auth::user()->equipo == 1000)
                            <ul>
                                <li>
                                    <a href="{{ route('Nave') }}">
                                        <i class="fe-map"></i>
                                        <span>Nave</span>
                                    </a>
                                </li>
                                @foreach ($fases as $fase)
                                    @if ($fase->fases <= 12)
                                        <li>
                                            <a href="{{ route('mvsexo', ['id' => $fase->id]) }}">
                                                <i class="icon-rocket"></i>
                                                <span> {{ $fase->titulo }}</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </ul>
                        </li>

                        <li>
                            <a href="{{ route('Admin') }}">
                                <i class="la la-dashboard"></i>
                                <span> Panel de control</span>
                            </a>

                        </li>
                        <li>
                            <a href="{{ route('FeedBack') }}">
                                <i class="la la-dashboard"></i>
                                <span> FeedBack</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('DemodaY') }}">
                                <i class="mdi mdi-clipboard-pulse"></i>
                                <span> Demo Day</span>
                            </a>
                        </li>

                        @endif

                        @if (Auth::user()->equipo == 1001)
                            <li>
                                <a href="{{ route('DemodaY') }}">
                                    <i class="mdi mdi-clipboard-pulse"></i>
                                    <span> Demo Day</span>
                                </a>
                            </li>
                        @endif --}}

                            {{-- fin new --}}
                            {{-- produccion inicio --}}
                            {{-- @if (Auth::user()->equipo == 1001)
                           96
                                     <li>
                                        <a href="javascript: void(0);">
                                            <i class="fe-book-open"></i>
                                            <span> MVS EXPONENCIAL </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li>
                                                <a href="{{ route('exponencialmvs') }}">
                                                    <i class="la la-dashboard"></i>
                                                    <span> El despertar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('DemodaY') }}">
                                                    <i class="mdi mdi-clipboard-pulse"></i>
                                                    <span> Demo Day</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                @elseif (Auth::user()->equipo == 1002)
                                    <li>
                                        <a href="{{ route('indexideas') }}">
                                            <i class="fe-bar-chart-2"></i>
                                            <span> Dashboards </span>
                                        </a>
                                    </li>
                                @elseif (Auth::user()->equipo == 1000)
                                    <li>
                                        <a href="{{ route('Admin') }}">
                                            <i class="la la-dashboard"></i>
                                            <span> Panel de control</span>
                                        </a>
                                    </li>
                                @endif
                                @if (Auth::user()->equipo != 1001 && Auth::user()->equipo != 1002 && Auth::user()->equipo <= 9)
                                    <li>
                                        <a href="{{ route('indexideas') }}">
                                            <i class="fe-bar-chart-2"></i>
                                            <span> Dashboards </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">
                                            <i class="fe-book-open"></i>
                                            <span> ExO Sprint </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li>
                                                <a href="{{ route('rankingmvs') }}">
                                                    <i class="la la-dashboard"></i>
                                                    <span> Ranking</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classideas') }}">
                                                    <i class="fe-eye"></i>
                                                    <span>1. Exploración </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('classIdear') }}">
                                                    <i class="fe-edit"></i>
                                                    <span>2. Ideación</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classComparte') }}">
                                                    <i class="fe-radio"></i>
                                                    <span> 3. Compartir</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classSeleccione') }}">
                                                    <i class="fe-check-square"></i>
                                                    <span> 4. Seleccionar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classInterrumpirte') }}">
                                                    <i class="fe-slash"></i>
                                                    <span> 5. Presentar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classPrototipo') }}">
                                                    <i class="fe-octagon"></i>
                                                    <span> 6. Prototipo</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classModelo') }}">
                                                    <i class="fe-box"></i>
                                                    <span> 7. Modelo de negocio</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classPrueba') }}">
                                                    <i class="fe-clipboard"></i>
                                                    <span> 8. Prueba</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classMejorar') }}">
                                                    <i class="fe-slash"></i>
                                                    <span> 9. Mejora</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classEnsamblar') }}">
                                                    <i class="fe-clipboard"></i>
                                                    <span> 10. Ensamblaje</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classLanzamiento') }}">
                                                    <i class="fe-slash"></i>
                                                    <span> 11. Lanzamiento</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">
                                            <i class="fe-book-open"></i>
                                            <span> MVS EXPONENCIAL </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li>
                                                <a href="{{ route('exponencialmvs') }}">
                                                    <i class="la la-dashboard"></i>
                                                    <span> El despertar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('DemodaY') }}">
                                                    <i class="mdi mdi-clipboard-pulse"></i>
                                                    <span> Demo Day</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                                @if (Auth::user()->equipo != 1001 && Auth::user()->equipo != 1002 && Auth::user()->equipo >= 10)
                                    <li>
                                        <a href="{{ route('indexideas') }}">
                                            <i class="fe-bar-chart-2"></i>
                                            <span> Dashboards </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">
                                            <i class="fe-book-open"></i>
                                            <span> ExO Sprint </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">

                                            <li>
                                                <a href="{{ route('classideas') }}">
                                                    <i class="fe-eye"></i>
                                                    <span>1. Exploración</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('classIdear') }}">
                                                    <i class="fe-edit"></i>
                                                    <span>2. Ideación</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classComparte') }}">
                                                    <i class="fe-radio"></i>
                                                    <span> 3. Compartir</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classSeleccione') }}">
                                                    <i class="fe-check-square"></i>
                                                    <span> 4. Seleccionar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classInterrumpirte') }}">
                                                    <i class="fe-slash"></i>
                                                    <span> 5. Presentar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classPrototipo') }}">
                                                    <i class="fe-octagon"></i>
                                                    <span> 6. Prototipo</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classModelo') }}">
                                                    <i class="fe-box"></i>
                                                    <span> 7. Modelo de negocio</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classPrueba') }}">
                                                    <i class="fe-edit-2"></i>
                                                    <span> 8. Prueba</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classMejorar') }}">
                                                    <i class="fe-thumbs-up"></i>
                                                    <span> 9. Mejora</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classEnsamblar') }}">
                                                    <i class="fe-command"></i>
                                                    <span> 10. Ensamblaje</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('classLanzamiento') }}">
                                                    <i class="fe-heart"></i>
                                                    <span> 11. Lanzamiento</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">
                                            <i class="la la-space-shuttle"></i>
                                            <span> MVS EXPONENCIAL </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li>
                                                <a href="{{ route('exponencialmvs') }}">
                                                    <i class="la la-dashboard"></i>
                                                    <span> El despertar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('DemodaY') }}">
                                                    <i class="mdi mdi-clipboard-pulse"></i>
                                                    <span> Demo Day</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif --}}

                            {{-- fin Produccion --}}

                            {{-- @if (Auth::user()->equipo == 1001)
                            <li>
                                <a href="{{ route('DemodaY') }}">
                                    <i class="mdi mdi-clipboard-pulse"></i>
                                    <span> Demo Day</span>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-book-open"></i>
                                    <span> ExO Sprint </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('rankingmvs') }}">
                                            <i class="la la-dashboard"></i>
                                            <span> Ranking</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('classideas') }}">
                                            <i class="fe-eye"></i>
                                            <span>1. Exploración</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('classIdear') }}">
                                            <i class="fe-edit"></i>
                                            <span>2. Ideación</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('classComparte') }}">
                                            <i class="fe-radio"></i>
                                            <span> 3. Compartir</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('classSeleccione') }}">
                                            <i class="fe-check-square"></i>
                                            <span> 4. Seleccionar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('classInterrumpirte') }}">
                                            <i class="fe-slash"></i>
                                            <span> 5. Presentar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('classPrototipo') }}">
                                            <i class="fe-octagon"></i>
                                            <span> 6. Prototipo</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('classModelo') }}">
                                            <i class="fe-box"></i>
                                            <span> 7. Modelo de negocio</span>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{ route('classConst') }}">
                                            <i class="fe-box"></i>
                                            <span> 7. Construcción</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('classPrueba') }}">
                                            <i class="fe-clipboard"></i>
                                            <span> 8. Prueba</span>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="{{ route('classMejorar') }}">
                                            <i class="fe-slash"></i>
                                            <span> 8. Mejora</span>
                                        </a>
                                    </li> 
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-book-open"></i>
                                    <span> MVS EXPONENCIAL  </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('exponencialmvs') }}">
                                            <i class="la la-dashboard"></i>
                                            <span> El despertar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('DemodaY') }}">
                                            <i class="mdi mdi-clipboard-pulse"></i>
                                            <span> Demo Day</span>
                                        </a>
                                    </li>                                
                                </ul>
                            </li>
                          

                            @if (Auth::user()->id == 1 || Auth::user()->id == 45 || Auth::user()->id == 50 || Auth::user()->id == 32 || Auth::user()->id == 56 || Auth::user()->id == 57 || Auth::user()->id == 55 || Auth::user()->equipo == 1002)
                                <li>
                                    <a href="{{ route('Admin') }}">
                                        <i class="la la-dashboard"></i>
                                        <span> Panel de control</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('indexideas') }}">
                                        <i class="la la-dashboard"></i>
                                        <span> Dashboards </span>
                                    </a>
                                </li>
                              
                                <li>
                                    <a href="{{ route('FeedBack') }}">
                                        <i class="la la-dashboard"></i>
                                        <span> FeedBack</span>
                                    </a>
                                </li>
                            @endif
                        @endif --}}

                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    @yield('contenido')
                </div> <!-- content -->
            </div>
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2024 &copy; <a href="https://www.mvsideas.com/"> MVS EXPONENCIAL</a>
                        </div>
                        {{-- <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
    </div>
    <!-- END wrapper -->


    {{-- <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>
    <!-- Third Party js-->
    <script src="assets/libs/peity/jquery.peity.min.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js"></script>
    <!-- Plugins js -->
    <script src="assets/libs/katex/katex.min.js"></script>
    <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="assets/libs/quill/quill.min.js"></script>
    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-1.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
    <!-- Init js-->
    <script src="assets/js/pages/form-wizard.init.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
    @yield('scripts')
</body> --}}
    <!-- Vendor js -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="assets/js/vendor.min.js"></script>

    <!-- Third Party js -->
    <script src="assets/libs/peity/jquery.peity.min.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js"></script>
    <script src="assets/libs/katex/katex.min.js"></script>
    <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="assets/libs/quill/quill.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-1.init.js"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

    <!-- Estilos para Botones de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/MotionPathPlugin.min.js"></script>
    {{-- <script src="https://unpkg.com/gsap@latest/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@latest/dist/MotionPathPlugin.min.js"></script> --}}

    {{-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/MotionPathPlugin.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/MotionPathHelper.min.js"></script> --}}
   

    @yield('scripts')
</body>


</html>
