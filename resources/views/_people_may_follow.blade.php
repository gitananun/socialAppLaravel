<div class="flex justify-evenly pb-6">
    @if($people_may_follow)
        @foreach($people_may_follow as $follower)
    <div class="bg-white hover:shadow-sm border hover:border-blue-400 flex rounded-full px-12 py-3">
        <a href="{{ route('profile.home', $follower) }}">
            <div class="mr-2 flex-shrink-0">
                <img src="{{ asset('/images/pr.jpeg') }}" width="30" class="rounded-full mr-2" alt="">
            </div>
        </a>

        <div>
                <div class="mb-2">
                    <a href="{{ route('profile.home', $follower) }}">
                    <h5 class="font-bold ">{{  $follower->name }}</h5>
                    </a>
                    <small class="text-gray-500">Since {{ $follower->created_at->diffForHumans() }}</small>
                </div>
        </div>
    </div>

        @endforeach
    @endif

</div>
