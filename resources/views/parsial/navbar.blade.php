



<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "HOME")?'active':'' }}"  href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "ABOUT")?'active':'' }}" href="/about">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "BLOG")?'active':'' }}" href="/blog">
              BLOG
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "KATEGORISES")?'active':'' }}" href="/kategorises">
              KATEGORI
            </a>
          </li>
      


        </ul>
       
        <ul class="navbar-nav ms-auto">

          <li class="nav-item">
              <a href="/Login" class="nav-link">Login</a>

          </li>
        </ul>


      </div>
    </div>
  </nav>    