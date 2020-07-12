 <profile-edit>
        <form action="{{ route('profile.update', \Illuminate\Support\Facades\Auth::user()) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Full Name
                </label>
                <input class="shadow-sm appearance-none border-l border-blue-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border border-red-200 @enderror" id="username" name="name" type="text" placeholder="Enter Name" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}" autofocus required>
                @error('name') <small class="text-red-400">{{ $message }}</small> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow-sm appearance-none border-l border-blue-200 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('email') border border-red-400 @enderror" id="email" name="email" type="text" placeholder="Enter E-mail" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" required>
                @error('email') <small class="text-red-400">{{ $message }}</small> @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow-sm appearance-none border-l border-blue-200 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('password') border border-red-400 @enderror" id="password" type="password" placeholder="Enter Password" name="password" required>
                @error('password') <small class="text-red-400">{{ $message }}</small><br /> @enderror
                <ul class="list-disc text-green-500">
                    <small>
                        -> The password must be at least 6 characters. <br />
                        -> The password must match with your old password <br />
                        -> The password is important to validate your changes!
                    </small>
                </ul>
            </div>
            <div class="flex items-center">
                <button class="bg-green-500 hover:bg-green-700 inline-block text-white font-bold py-2 px-4 mr-2 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit">
                    Save Changes
                </button>
            </div>
        </form>
    </profile-edit>

