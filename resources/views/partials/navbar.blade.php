  {{-- navbar --}}
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand {{ ($title === "home") ? 'active' : '' }}" href="/home"><span class="text-4xl font-bold text-gray-800 dark:text-white" 
        style="font-size: 30px; color: #bad0f0; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">SIAPS</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 20px; color: #041227;">
        <ul class="navbar-nav">
            {{-- {{ ($title === "Home") ? 'active' : '' }} diberikan untuk memberikan tanda aktif pada setiap navbar yang sedang dijalankan --}}
          <li class="nav-item">
            <a class="nav-link {{ ($title === "home") ? 'active' : '' }}" href="/home"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "profil") ? 'active' : '' }}" href="/profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "contact") ? 'active' : '' }}" href="/contact">Contact</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
        </ul>
         
      </div>
    </div>

  </nav>