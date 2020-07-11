@if(\Illuminate\Support\Facades\Auth::id() == $profile->id && \Illuminate\Support\Facades\Auth::user()->mail == $profile->mail)

    <profile-card>
        <form action="{{ route('profile.update', \Illuminate\Support\Facades\Auth::user()) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Full Name
                </label>
                <input class="shadow-sm appearance-none border-l border-blue-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="name" type="text" placeholder="{{ \Illuminate\Support\Facades\Auth::user()->name }}" value="{{ old('name') }}" autofocus>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow-sm appearance-none border-l border-blue-200 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="{{ \Illuminate\Support\Facades\Auth::user()->email }}" value="{{ old('email') }}" autofocus>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow-sm appearance-none border-l border-blue-200 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
            </div>

        </form>
    </profile-card>


@endif
