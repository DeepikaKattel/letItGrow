<!---Top Menu--->
    <div id="cssmenu" >
        <ul>
           <li class="active"><a href="{{url('/')}}"><span>zMatcha</span></a></li>
           <li class="has-sub"><a href="#"><span>Category</span></a>
              <ul>
                 <li class="has-sub"><a href="#"><span>Item 1</span></a>
                    <ul>
                       <li><a href="#"><span>Sub Item</span></a></li>
                       <li class="last"><a href="#"><span>Sub Item</span></a></li>
                    </ul>
                 </li>
                 <li class="has-sub"><a href="#"><span>Item 2</span></a>
                    <ul>
                       <li><a href="#"><span>Sub Item</span></a></li>
                       <li class="last"><a href="#"><span>Sub Item</span></a></li>
                    </ul>
                 </li>
              </ul>
           </li>
           <li><a href="{{asset('archive.html')}}"><span>Archive</span></a></li>
           <li><a href="{{asset('single')}}"><span>About</span></a></li>
           <li class="last"><a href="{{asset('contact.html')}}"><span>Contact</span></a></li>
           @if (Route::has('login'))
               @auth
                   <li><a href="{{ url('/home') }}"><span>Home</span></a></li>
               @else
                   <li><a href="{{ route('login') }}"><span>Login</span></a></li>

                   @if (Route::has('register'))
                       <li><a href="{{ route('register') }}">Register</a></li>
                   @endif
               @endif

           @endif
        </ul>
    </div>
