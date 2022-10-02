<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">

            <li><a  href="{{url('transcation')}}" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">pos</span>
                </a>

            </li>

            <li><a  href="{{route('products.index')}}" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">products</span>
                </a>

            </li>
            <li><a  href="{{url('/transcation/history')}}" aria-expanded="false">
                <i class="fa fa"></i>
                <span class="nav-text">sales reports</span>
            </a>

           </li>
           <li>  <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">

             <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
             <span class="ml-2">Logout </span>
  </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
            </form>


    </li>


        <div class="copyright">

            <p>Made  <i class="fa fa-heart"></i> by zalmi coding</p>
        </div>
    </div>
</div>
