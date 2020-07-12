@extends('layouts.app')

@section('content')

    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('_sidebar-links')
        </div>

        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
            @foreach($result as $profile)
                <div class="max-w-lg w-full lg:max-w-full lg:flex mb-4">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url({{ asset('/images/pr.jpeg') }})" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 w-full lg:border-t lg:border-gray-400 bg-white hover:border-blue-500 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <a href="{{ route('profile.home', $profile) }}">
                            <div class="text-gray-900 font-bold text-xl mb-2">{{ $profile->name }}</div>
                            <p class="text-gray-700 text-base">{{ $profile->email }}</p>
                            </a>
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
            @endforeach
            <div class="flex">
                {{ $result->links('vendor.pagination.simple-tailwind') }}
            </div>
        </div>


        <div class="lg:w-1/6">
            @include('_search')
            <div class="bg-blue-100 rounded-lg p-4 pb-12">
                @include('_friends-list')
            </div>
        </div>
    </div>
@endsection
