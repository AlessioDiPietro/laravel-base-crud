
<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">COMICS DB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Perchè noi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.create')}}">aggiungi un fumetto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.index')}}">area ADMIN</a>
              </li>
            </ul>
            <span class="navbar-text">
              I migliori fumetti, da sempre!
            </span>
          </div>
        </div>
      </nav>
</div>