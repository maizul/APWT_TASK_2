<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">Navbar</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="{{'/' == request()->path() ? 'nav-link active' : 'nav-link'}}" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="{{'product' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('product')}}">Products</a>
        </li>
        <li class="nav-item">
          <a class="{{'team' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('team')}}">Our Teams</a>
        </li>
        <li class="nav-item">
          <a class="{{'login' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('login')}}">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>