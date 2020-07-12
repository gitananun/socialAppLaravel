<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @foreach($follows as $follow)
        <a href="{{ route('profile.home', $follow) }}">
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img src="{{ asset('/images/pr.jpeg') }}" width="40" class="rounded-full mr-2" alt="">
               {{ $follow->name }}
            </div>
        </li>
        </a>
    @endforeach
</ul>
