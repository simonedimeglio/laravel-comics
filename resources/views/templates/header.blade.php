<nav>

    <div class="upper-nav-container">
        <div class="upper-nav custom-width">
            <span>DC POWER VISA</span>
            <span>ADDITIONAL DC SITES</span>
        </div>
    </div>
    

    <div class="main-nav-container">
        <div class="main-nav custom-width">
            <img src="/images/dc-logo.png" alt="DC Logo">
            <ul>
                <li>CHARACTERS</li>
                <li class="{{ Request::route()->getName() === 'homepage' ? 'active' : '' }}">
                    <a href="{{ route('homepage') }}">COMICS</a>
                </li>
                <li>MOVIES</li>
                <li>TV</li>
                <li>GAMES</li>
                <li>COLLECTIBLES</li>
                <li>VIDEOS</li>
                <li>FANS</li>
                <li>NEWS</li>
                <li>SHOP</li>
            </ul>
            <input type="search" placeholder="Search">
        </div>
    </div>
    

</nav>