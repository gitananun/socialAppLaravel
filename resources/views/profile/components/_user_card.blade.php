<div class="max-w-lg w-full lg:max-w-full lg:flex">
    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url({{ asset('/images/pr.jpeg') }})" title="Woman holding a mug">
    </div>
    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 w-full lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
            <p class="text-sm text-gray-600 flex items-center">
                <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                </svg>
                {{ count($follows) }} followers
            </p>
            <div class="text-gray-900 font-bold text-xl mb-2">{{ $profile->name }}</div>
            <p class="text-gray-700 text-base">{{ $profile->email }}</p>
        </div>
        <div class="flex items-center justify-between">
            <div class="text-sm">
                <p class="text-blue-500 leading-none">Joined Tweet 🥳</p>
                <p class="text-gray-600">{{ $profile->created_at->diffForHumans() }}</p>
            </div>
            @if(\Illuminate\Support\Facades\Auth::id() !== $profile->id)
                <form action="{{ route('profile.follow', $profile) }}" method="Post">
                    @csrf
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full border hover:bg-transparent hover:text-blue-500 hover:border-blue-500" style="outline: none" type="submit">
                        {{ \Illuminate\Support\Facades\Auth::user()->follows->contains('id', $profile->id) ? 'Unfollow' : 'Follow' }}
                    </button>
                </form>
            @endif
        </div>
    </div>
</div>
