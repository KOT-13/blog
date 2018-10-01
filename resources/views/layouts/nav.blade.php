<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">

            @hasrole('admin')
                <a class="nav-link" href="/admin">Admin panel</a>
            @endhasrole

            <a class="nav-link active" href="/">Home</a>

            @if(! Auth::check())
                <a class="nav-link ml-auto" href="/login">Login</a>
                <a class="nav-link" href="/register">Registration</a>
            @endif

            @if(Auth::check())
                <a class="nav-link" href="/posts/create">Create a post</a>
                <a class="nav-link" href="{{ route('category.index') }}">Categories</a>
                <a class="nav-link ml-auto" href="{{ route('profile.profile.show', Auth::user()->id) }}">{{ Auth::user()->name }}</a>
                <a class="nav-link" href="/logout">Logout</a>
            @endif
        </nav>
    </div>
</div>