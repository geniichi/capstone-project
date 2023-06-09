    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0" id="navBar-main">
        <a class="navbar-brand" href="/feed">
            <img src="" class="img-fluid rounded-top mr-3" alt=""/>
            <span id="shiinChat-navBrand-pink" class='text-center font-weight-bold h4'>Shiin</span>
            <span class='shiinChat-chat text-center font-weight-bold h3'>Chat</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto align-content-start flex-wrap align-items-start">
            <li class="nav-item active">
                <a href="/" class="link text-light text-decoration-none mx-3">Homepage</a> &nbsp;
            </li>
            <li class="nav-item">
                <a href="/feed" class="link text-light text-decoration-none mx-3">Feed</a> &nbsp;
            </li>
            <li class="nav-item">
                <a href="/message" class="link text-light text-decoration-none mx-3">Message</a> &nbsp;
            </li>
          </ul>
          <div class="p-0 my-2 ml-3 ml-md-3 ml-md-0 mt-lg-1" id="authentication-container">
              @guest
                  <a href="{{ route('login') }}" class="btn btn-outline-light mr-3 my-0 ml-0 ml-lg-3 shadow-none">Login</a>
                  <a href="{{ route('register') }}" class="btn btn-light ml-0 my-0 shadow-none">Sign Up</a>
              @else
                  <a href="{{ route('logout') }}" class="btn btn-outline-light mr-3 my-0 ml-0 ml-lg-3 shadow-none" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              @endguest
          </div>
          </div>
      </nav>
