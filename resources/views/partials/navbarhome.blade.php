  {{-- navbar --}}
  
  <nav class="navbar navbar-expand-lg navbar-white bg-transparent">
    <div class="container">
      <a class="navbar-brand"><span class="text-4xl font-bold text-gray-800 dark:text-white" 
        style="font-size: 30px; color: #041227; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">SIAPS</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 20px; color: #041227;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/home"></i><i class="bi bi-house-door"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "profil") ? 'active' : '' }}" href="/profil">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "contact") ? 'active' : '' }}" href="/contact">Contact</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "register") ? 'active' : '' }}" href="/register"></i> Register</a>
          </li>
      </div>
    </div>

  </nav>