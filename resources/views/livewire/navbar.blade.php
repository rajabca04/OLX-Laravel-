<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a href="" class="navbar-brand">{{$logo}}</a>
        </div>
       <div class="container mx-auto">
        <form action="{{Route('search')}}" class="d-flex mx-auto">
            <input type="search" name="search" class="form-control">
            <input type="submit" name="find" value="search" class="btn btn-info">
        </form>
       </div>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="" class="nav-link">Home</a></li>
            @if(session()->has('login'))
                <li class="nav-item"><a href="{{route('insertItem')}}" class="nav-link">Insert</a></li>
                <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">logout</a></li>
            @else
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link">login</a></li>
            <li class="nav-item"><a href="{{route('register')}}" class="nav-link">register</a></li>
            @endif

        </ul>
    </nav>

</div>
