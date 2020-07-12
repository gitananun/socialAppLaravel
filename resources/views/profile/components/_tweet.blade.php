<div class="flex justify-between p-4 border-b border-b-gray-400">
    <div class="flex">
    <div class="mr-2 flex-shrink-0">
        <img src="{{ asset('/images/pr.jpeg') }}" width="50" class="rounded-full mr-2" alt="">
    </div>

    <div>
            <div class="mb-4">
            <h5 class="font-bold ">{{  $tweet->user->name }}</h5>
                <small class="text-gray-600">{{ $tweet->updated_at->diffForHumans() }}</small>
            </div>

        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
    </div>
    <div>
{{--        <a href="#"><button class="px-6 py-1 bg-transparent border border-green-500 text-green-500 hover:bg-green-500 hover:text-white rounded-full">Edit</button></a>--}}
        @if(\Illuminate\Support\Facades\Auth::id() == $profile->id)
        <form action="{{ route('tweet.destroy', $tweet) }}" method="Post">
            @csrf
            @method('DELETE')
            <button class="px-6 py-1 bg-transparent border border-red-500 text-red-500 hover:bg-red-500 hover:text-white rounded-full" type="submit" style="outline: none">Delete</button>
        </form>
        @endif
    </div>

</div>

