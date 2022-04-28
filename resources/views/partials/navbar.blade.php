<nav class="header__nav-wrap">

    <ul class="header__nav">
        <li class="current {{ $title === 'Home' ? 'active' : '' }}"><a href="/" title="">Home</a></li>
        <li class="has-children">
            <a class="{{ $title === 'Categories' ? 'active' : '' }}" title="">Categories</a>
            <ul class="sub-menu">
                @foreach($categories as $category)
                <li><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
                @endforeach
            
            </ul>
        </li>
        <li class="has-children">
            <a class="{{ $title === 'Author' ? 'active' : '' }}" title="">Author Name</a>
            <ul class="sub-menu">
                @foreach($authors as $author)
                <li><a href="/author/{{ $author->username }}">{{ $author->username }}</a></li>
                @endforeach
           
            </ul>
        </li>
        <hr>
        
        @auth
        <li class="current {{ $title === 'Home' ? 'active' : '' }}"><a href="/dashboard" title="">Dashboard </a></li>
        <hr>
        <form action="/logout" method="POST">
            @csrf
           <div class="form-group">
             <button type="submit" class="btn btn-outline-dark"> Logout</button>
            </div>
            </form>
           
      @else
            <li class="current {{ $title === 'Home' ? 'active' : '' }}"><a href="/login" title="">Login </a></li>
        @endauth
    </ul> <!-- end header__nav -->


</nav> <!-- end header__nav-wrap -->
