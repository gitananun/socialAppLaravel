<ul>
    <li>
        <a href="/home" class="font-bold text-lg mb-4 block">
            Home
        </a>
    </li>
    <li>
        <a href="/" class="font-bold text-lg mb-4 block">
            Explore
        </a>
    </li>
    <li>
        <a href="/" class="font-bold text-lg mb-4 block">
            Notifications
        </a>
    </li>
    <li>
        <a href="/" class="font-bold text-lg mb-4 block">
            Messages
        </a>
    </li>
    <li>
        <a href="/" class="font-bold text-lg mb-4 block">
            Bookmarks
        </a>
    </li>
    <li>
        <a href="/" class="font-bold text-lg mb-4 block">
            Lists
        </a>
    </li>
    <li>
        <a href="{{ route('profile.home', \Illuminate\Support\Facades\Auth::user()) }}" class="font-bold text-lg mb-4 block">
            Profile
        </a>
    </li>
    <li>
        <form action="{{ route('logout', \Illuminate\Support\Facades\Auth::user()) }}" method="Post">
            @csrf
            <input type='submit' value="Logout" class="font-bold text-lg mb-4 block cursor-pointer">
        </form>

    </li>
</ul>
