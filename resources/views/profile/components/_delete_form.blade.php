 <profile-delete>
        <form action="{{ route('profile.destroy', \Illuminate\Support\Facades\Auth::user()) }}" method="POST">
            @method('DELETE')
            @csrf
            <div class="mb-4">
                <span class="text-gray-800">For validation please enter text below</span>
                <span style="line-height: 2.4"><code class="text-sm bg-gray-100 text-blue-700 p-2 hover:bg-blue-600 hover:text-white rounded-md mt-2"
                    style="-webkit-user-select: none;
                            -khtml-user-select: none;
                            -moz-user-select: none;
                            -ms-user-select: none;
                            -o-user-select: none;
                            user-select: none;"
                    >
                        do_it_{{ strtolower(explode(' ', $profile->name, 2)[0]) }}
                    </code>
                </span>
            </div>
            <div class="mb-4">
                <input class="shadow-sm appearance-none border-l border-red-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('code') border border-red-400 @enderror" name="code" type="text" placeholder="Enter Code" required autofocus>
                @error('code') <small class="text-red-400">{{ $message }}</small> @enderror
            </div>

            <div class="flex items-center">
                <button class="bg-red-500 hover:bg-red-700 inline-block text-white font-bold py-1 px-4 py-2 mr-2 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit">
                    Destroy Account
                </button>
            </div>
        </form>
 </profile-delete>
