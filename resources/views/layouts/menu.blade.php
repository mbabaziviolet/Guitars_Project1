<li class="nav-item">
    <a href="{{ route('guitars.index') }}"
       class="nav-link {{ Request::is('guitars*') ? 'active' : '' }}">
        <p>Guitars</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('guitarImages.index') }}"
       class="nav-link {{ Request::is('guitarImages*') ? 'active' : '' }}">
        <p>Guitar Images</p>
    </a>
</li>









