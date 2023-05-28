<nav class="navbar navbar-expand-lg bg-body-tertiary shadow sticky-top">
  <div class="container-fluid">
    <div class="container">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-evenly"
        id="navbarSupportedContent"
      >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a
              class="nav-link active d-none d-lg-block"
              aria-current="page"
              href="#"
              >Tokopedia Clone</a
            >
          </li>
        </ul>
        <form class="d-flex" role="search" class="w-full">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{route('cart')}}">
              <i class="fa-solid fa-cart-shopping"></i>
              Cart</a
            >
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{route('login')}}">
              <i class="fa-solid fa-user"></i>
              Login</a
            >
          </li>      
          @endguest
          @auth
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{route('notification')}}">
              <i class="fa-solid fa-bell"></i>
              Notification</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{route('profile')}}">
              <i class="fa-solid fa-user"></i>
              Profile</a
            >
          </li>          
          @endauth
        </ul>
      </div>
    </div>
  </div>
</nav>