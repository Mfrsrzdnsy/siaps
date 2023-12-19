  {{-- navbar --}}
 
  <nav class="navbar navbar-expand-lg navbar-white bg-transparent">
    <div class="container">
      <a class="navbar-brand" href="#">SIAPS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            {{-- {{ ($title === "Home") ? 'active' : '' }} diberikan untuk memberikan tanda aktif pada setiap navbar yang sedang dijalankan --}}
          <li class="nav-item">
            <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/home">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "profil") ? 'active' : '' }}" href="/profil">profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "pelaporan") ? 'active' : '' }}" href="/pelaporan">pelaporan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "contact") ? 'active' : '' }}" href="/contact">contact</a>
          </li>
        </ul>
        
        <a class="nav-link" href="/login_siaps"><button class="btn btn-login" type="submit">Login</button></a>
         
      </div>
    </div>

  </nav>