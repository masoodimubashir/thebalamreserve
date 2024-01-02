<nav class="navbar navbar-expand-lg " id="neubar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/Logo/logo.svg') }}" height="40px" />
        </a>
        <button class="navbar-toggler " style="background: white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ECP/EIA
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="{{ asset('assets/Docs/BJE EIA Final-Revised.pdf') }}"
                                download="{{ asset('assets/Docs/BJE EIA Final-Revised.pdf') }}">EIA</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ asset('assets/Docs/ECP new .pdf') }}"
                                download="{{ asset('assets/Docs/ECP new .pdf') }}">ECP</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item activeI">
                    <a class="nav-link mx-2 active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 " aria-current="page" href="{{ route('netzero') }}">Net-zero</a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Community
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ asset('location') }}">Location</a></li>
                        <li><a class="dropdown-item" href="{{ route('whybelize') }}">Why Belize</a></li>
                        <li><a class="dropdown-item" href="{{ route('sustainibility') }}">Sustainibility</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('villas') }}">Villas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page"
                        href="{{ route('subdivision') }}">Subdivision</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('news') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('contact') }} ">Contact Us</a>

                </li>

                <li>

                </li>

            </ul>
        </div>
    </div>
</nav>
<script src="{{ asset('assets/js/welcome.js') }}"></script>
