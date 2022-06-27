<header>
    <ul class="nav">
        <li class="nav-item {{Route::currentRouteName() === 'home' ? 'active' : ''}}"><a href="{{route('home')}}" class="nav-link">Home</a></li>
        <li class="nav-item {{Route::currentRouteName() === 'about' ? 'active' : ''}}"><a href="{{route('about')}}" class="nav-link">Chi siamo</a></li>
        <li class="nav-item {{Route::currentRouteName() === 'contacts' ? 'active' : ''}}"><a href="{{route('contacts')}}" class="nav-link">Contatti</a></li>
        <li class="nav-item {{Route::currentRouteName() === 'movies' ? 'active' : ''}}"><a href="{{route('movies')}}" class="nav-link">Film</a></li>
    </ul>
</header>
