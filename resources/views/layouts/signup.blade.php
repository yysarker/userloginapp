<?php
	/**
	 *  Created by PhpStorm.
	 *  User: yys
	 *  Date: 12/29/2022
	 *  Time: 1:25 PM
	 */
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta name="description" content=""/>
    <meta name="keywords" content="content"/>

    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset ('assets/images/icons/favicon.ico') }}">
    <!-- Bootstrap Icon CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700;800&display=swap"
        rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}"/>

</head>
<body>

<main>
   @yield('content')
</main>

<footer></footer>

<!-- Bootstrap Bundle with Popper -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>
</body>
</html>







