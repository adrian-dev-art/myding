<section class="topbar -top container-sm ">
        <h1 class="app">
          <a href="/">
            MYDING
          </a>
        </h1>

        
        <ul class="left-bar">
          <li class="d-flex justify-content-center"> 
            <a href="#message">
              <img src="/Assets/Icons/chat-outline.png" alt="" />
            </a>
          </li>
          <li>
            <div class="btn-group ">
              <button type="button" class="btn  " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  @if (auth()->user()->profile_picture)
                    <img src="{{ asset('storage/'.auth()->user()->profile_picture)}}" alt="" height="40" width="40" class="rounded-circle">
                  @else
                      <img src="/Assets/Images/avatar.png" alt="" height="40" width="40" class="rounded-circle">    
                  @endif
                </a>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <ul>
                  <li><a class="dropdown-item" href="/profile/{{ Auth::id() }}">My Profile</a></li>
                  <!-- <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li> -->
                  <li>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('frm-logout').submit();">Logout</a>    
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </section>