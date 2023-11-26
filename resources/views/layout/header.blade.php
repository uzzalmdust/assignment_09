<nav class="navbar sticky-top navbar-expand-lg navbar-light py-4 shadow-sm bg-white">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}">
            PORTFOLIO
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav06"
            aria-controls="nav06" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav06">
            <ul class="navbar-nav mt-3 mt-lg-0 mb-3 mb-lg-0 ms-lg-3">
                <li class="nav-item me-4"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item me-4"><a class="nav-link" href="{{ route('about') }}">About Me</a></li>
                <li class="nav-item me-4"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contacts') }}">contacts</a></li>
            </ul>
        </div>
        
    </div>
</nav>