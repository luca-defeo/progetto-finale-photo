<nav class="navbar navbar-expand-lg bg-body-tertiary fixed">
    <div class="container-fluid">
      <a class="navbar-brand mx-4" href="{{route('homepage')}}">PhotoBlog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item mx-4">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="{{route('contacts')}}">Contacts</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="#">About</a>
          </li>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle dropdownBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Blog
            </button>
            
            <ul class="dropdown-menu dropdownMenu">
              <li><a class="dropdown-item" href="{{route('create')}}">Crea</a></li>
            </ul>
          </div>
        </ul>
      </div>
    </div>
  </nav>