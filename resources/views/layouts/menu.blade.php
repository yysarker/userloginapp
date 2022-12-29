<?php
    /**
     *  Created by PhpStorm.
     *  User: yys
     *  Date: 12/28/2022
     *  Time: 7:04 PM
     */
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-blue">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset ('assets/images/logo.png') }}" alt="logo" class="logo"/>
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-3 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Services
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Article Writing</a></li>
                            <li><a class="dropdown-item" href="#">Blog Posts</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Copywriting</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Ghostwriting</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Local SEO City Pages</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Press Releases</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Product Descriptions</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">SEO Content</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Subject Matter Experts</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Website Content</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">White Papers</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Managed Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Marketplace</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Resources
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider"/>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    @if (Route::has('login'))
                        @auth
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ url('/home') }}" class="">Home</a>--}}
{{--                            </li>--}}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="nav-link"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                    out</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link btn btn-white">Sign Up</a>
                                </li>
                            @endif
                        @endauth
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header>
