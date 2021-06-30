<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PPDB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item{{ request()->is('/') ? 'active' : '' }}">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item{{ request()->is('login') ? 'active' : '' }}">
          <a class="nav-link" href="/login">login</a>
        </li>
        <li class="nav-item{{ request()->is('register') ? 'active' : '' }}">
          <a class="nav-link" href="/register">register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>