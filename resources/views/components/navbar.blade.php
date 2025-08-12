    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Creative Coder</a>
            <div class="d-flex">
                <a href="/" class="nav-link">Home</a>
                <a href="/#blogs" class="nav-link">Blogs</a>
                <a href="#subscribe" class="nav-link">Subscribe</a>
                @if (!auth()->check())
                    <a href="/register" class="nav-link">Register</a>
                @else
                    <a href="" class="nav-link">Welcome {{ auth()->user()->name }}</a>
                @endif
                @if (auth()->check())
                    <form action="/logout" method="POST">
                      @csrf 
                      <button type="submit" class="nav-link btn btn-link">Logout</button>
                    </form>
                @endif
            </div>
        </div>
    </nav>
