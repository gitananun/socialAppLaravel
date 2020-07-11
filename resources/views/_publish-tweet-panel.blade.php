@if(\Illuminate\Support\Facades\Session::has('msg'))
    <div class="p-2 bg-blue-400 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex mb-4" role="alert">
        <span class="flex rounded-full bg-white uppercase px-2 py-1 text-xs font-bold mr-3 text-blue-400">&#9432;</span>
        <span class="font-semibold mr-2 text-left flex-auto text-white">{{ \Illuminate\Support\Facades\Session::get('msg') }}</span>
    </div>
@endif
<div class="border border-blue-400 rounded-lg mb-8 px-6 py-4">
    <form action="{{ route('tweet.publish') }}" method="Post">
        @csrf
        <div class="mb-4">
            <textarea name="body" class="w-full outline-none @error('body') border border-red-500 p-2 rounded @enderror"  placeholder="What's up doc?" ></textarea>
            @error('body') <small class="text-red-400">{{ $message }}</small> @enderror
            <hr class="my-2">
        </div>
        <footer class="flex justify-between">
            <div class="flex">
            <img src="https://i.pravatar.cc/40" class="rounded-full mr-2" alt="">
            <span class="text-gray-600 pt-2">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
            </div>
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white" style="outline: none">Tweet-a-roo!</button>
        </footer>
    </form>
</div>
