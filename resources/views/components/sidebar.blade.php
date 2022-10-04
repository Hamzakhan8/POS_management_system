<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a  href="{{route('products.index')}}" aria-expanded="false">
                <i class="fas fa-warehouse"></i>
                 <span class="nav-text">Products</span>
             </a>

         </li>
            <li><a  href="{{url('transcation')}}" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Pos</span>
                </a>

            </li>


            <li><a  href="{{url('/transcation/history')}}" aria-expanded="false">
               <i class="far fa-file"></i>
                <span class="nav-text">Sales reports</span>
            </a>

           </li>
        <li>  <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">

            <i class="far fa-logout"></i>
            <span class="nav-text">logout</span>
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
