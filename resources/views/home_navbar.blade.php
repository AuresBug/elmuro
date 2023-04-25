  <div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-white shadow-sm fixed-top ">

      <div class="row flex-fill">
        <div class="col offset-md-2">
          <form action="simple-results.html">
            <div class="input-group">

              <input type="search" class="form-control " placeholder="Palabra clave">


              <div class="input-group-append">
                <button type="submit" class="btn  btn-default">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-3 ml-auto">
          @if (Route::has('login'))
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a href="{{ route('login') }}" class="nav-link ">
                  <i class="fa fa-fw fa-user" aria-hidden="true"></i>
                  Mis anuncios
                </a>
              </li>
              @if (Route::has('register'))
                <li class="nav-item">
                  <a href="{{ route('register') }}" class="nav-link">
                    <i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>
                    Register
                  </a>
                </li>
              @endif
            </ul>
          @endif
        </div>
      </div>


    </nav>

  </div>
