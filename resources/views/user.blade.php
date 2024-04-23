<h1>Halaman user</h1>
<a href="{{ route('logout') }}"
    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <i class="ni ni-user-run"></i>
    <span>Logout</span>
</a>
