<header class="p-3 bg-light text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <a href="#" class="btn" style="background-color: black; color: white; font-family:'Courier New', Courier, monospace">
                Home</a>
            </ul>
            <div class="text-end">
                @guest   
                <a href="{{ route('login') }}" class="btn me-2" style="background-color: black; color: white; font-family:'Courier New', Courier, monospace">
                    Login</a>
                <a href="{{ route('register') }}" class="btn" style="background-color: black; color: white; font-family:'Courier New', Courier, monospace">
                    Sign-up</a>
                @else
                <a href="{{ route('logout') }}" class="btn btn-outline-light me-2" style="background-color: black; color: white; font-family:'Courier New', Courier, monospace" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ Auth::user()->name }}</a>
                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                    @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
</header>