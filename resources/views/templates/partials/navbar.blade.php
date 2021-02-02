<div class="container d-flex">
    <a class="navbar-brand" href="{{ route('home') }}">Social Media</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Links --}}
    @if (Auth::check())
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Feed</a>
                </li>
            </ul>
    @endif


    <ul class="navbar-nav ms-auto">
        @if (Auth::check())
            <li class="nav-item">
                <a href="" class="nav-link">{{ Auth::user()->getNameOrUserName() }}</a>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link">Edit Profile</a>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link">Log Out</a>
            </li>
            <form class="d-flex ms-3">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        @else
            <li class="nav-item">
                <a href="" class="nav-link">Sign Up</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Sing In</a>
            </li>

            {{-- Search --}}

        @endif

    </ul>




</div>
</div>
