<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('uploads/logo.png') }}" alt="Shetab" height="auto" width="45">Shetab</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="py-4 navbar-nav text-uppercase ms-auto py-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#clients">Clients</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead-->
<header class="masthead">
    <div class="content">
        <div class="container">
            <div class="masthead-subheading" data-aos="fade-down">Welcome To Shetab!</div>
            <h1 data-aos="fade-down">Empowering Futures, Connecting Opportunities</h1>
            <p data-aos="fade-down">Your trusted partner in global education and labor
                placement.</p>

            <div class="mt-5" id="downloadBtnDiv" data-aos="fade-up">
                <a class="btn btn-primary text-uppercase bannerBtn btn-lg" href="#">Download App</a>
                <a href="#contact" class="btn btn-outline-primary btn-lg bannerBtn text-uppercase"
                    style="size: 1.2rem;">
                    Get Started</a>
            </div>

        </div>
    </div>

</header>