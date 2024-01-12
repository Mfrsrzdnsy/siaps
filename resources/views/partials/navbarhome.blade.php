{{-- navbar --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="/">
            <span class="text-4xl font-bold text-dark" style="font-size: 30px;">Si<span style="color: blue">Aps</span></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "profil") ? 'active' : '' }}" href="/profil">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "contact") ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "login") ? 'active' : '' }}" href="/login">
                        <i class="bi bi-box-arrow-in-right"></i> Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "register") ? 'active' : '' }}" href="/register">
                        <i class="bi bi-person-plus"></i> Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
