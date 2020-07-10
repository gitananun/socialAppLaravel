@if(\Illuminate\Support\Facades\Auth::id() == $profile->id && \Illuminate\Support\Facades\Auth::user()->mail == $profile->mail)

        <form action="" method="Post">
            <input type="text" placeholder="enter name">
        </form>

@endif
