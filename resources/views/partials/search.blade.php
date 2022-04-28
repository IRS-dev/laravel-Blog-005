<div class="header__search">
    
    <form role="search" method="get" class="header__search-form" action="#">
        <label>
            <span class="hide-content">Search for:</span>
            <input type="search" class="header__search-field" placeholder="Type Keywords" value="{{ request('search') }}" name="search" title="Search for:" autocomplete="off">
        </label>
        <input type="submit" class="header__search-submit" value="Search">
    </form>

    <a href="#0" title="Close Search" class="header__search-close">Close</a>

</div>  <!-- end header__search -->