<nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: wheat">
    <div class="container">
        <a class="navbar-brand text-muted" href="#">
            <img src="{{ $icon->url }}" alt="" width="10%" style="border-radius: 10px">
            {{ env('APP_NAME') }}
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            </ul>
            <ul class="navbar-nav d-flex my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/login">
                    <i class="fas fa-door-open"></i>
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
