<div class="flex p-4 border-b border-b-gray-400">
    <a href="{{ route('profile.home', $tweet->user) }}">
    <div class="mr-2 flex-shrink-0">
        <img src="{{ asset('/images/pr.jpeg') }}" width="50" class="rounded-full mr-2" alt="">
    </div>
    </a>

    <div>
        <a href="{{ route('profile.home', $tweet->user) }}">
        <div class="mb-1">
        <h5 class="font-bold ">{{  $tweet->user->name }}</h5>
        <small class="text-gray-600">{{ $tweet->updated_at->diffForHumans() }}</small>
        </div>
        </a>
        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
</div>
