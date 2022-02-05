<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="/">
              <img src="assets/Logo.jpg" alt="" width="48" height="60">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link {{ ($title === "") ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "| Ui Kit") ? 'active' : '' }}" href="/ui-kit">UI Kit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "| Template") ? 'active' : '' }}" href="/template">Template</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "| Icon Set") ? 'active' : '' }}" href="/icon-set">Icon Set</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "| Ilustrasi") ? 'active' : '' }}" href="/ilustrasi">Ilustrasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "| Dokumentasi") ? 'active' : '' }}" href="{{ route('dokumentasi') }}">Dokumentasi</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto">
            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Hey, {{ auth()->user()->username }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Dashboard</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="{{ route('user.logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
            @else
                <li class="nav-item">
                  <a href="{{ route('user.login') }}" class="nav-item">
                    <button class="btn" type="submit">Masuk</button>
                  </a>
                </li>
            </ul>
            @endauth

          </div>
        </div>
      </nav>