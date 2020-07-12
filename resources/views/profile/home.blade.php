@extends('layouts.app')

@section('content')
        <div class="lg:flex lg:justify-between" >
            <div class="lg:w-32">
                @include('_sidebar-links')
            </div>

            <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                @include('profile.components._user_card')

                <div class="mt-4">
                    @if(\Illuminate\Support\Facades\Auth::id() == $profile->id && \Illuminate\Support\Facades\Auth::user()->mail == $profile->mail)
                        <div class="flex justify-between">
                            @include('profile.components._edit_form')
                            @include('profile.components._delete_form')
                        </div>
                            @include('_publish-tweet-panel')

                        @include('_people_may_follow')
                    @endif
                </div>

                @if(count($profile->tweets) > 0)
                    <div class="border border-gray-300 rounded-lg">
                        @foreach($profile->tweets as $tweet)
                            @include('profile.components._tweet')
                        @endforeach
                    </div>
                @endif


            </div>

            <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                @include('_friends-list')
            </div>
        </div>
@endsection
