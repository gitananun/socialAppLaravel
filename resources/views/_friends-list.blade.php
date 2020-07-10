<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @foreach($follows as $follow)

        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img src="https://i.pravatar.cc/40" class="rounded-full mr-2" alt="">
               {{ $follow->name }}
            </div>
        </li>

    @endforeach
</ul>
