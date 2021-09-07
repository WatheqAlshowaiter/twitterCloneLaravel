@unless(current_user()->is($user))

    <form method="POST" action="{{ route('follow', $user->username) }}">
        @csrf
        <button href="" class="bg-blue-500 rounded-full  px-4 py-2 text-sm text-white ml-2">
            {{ current_user()->following($user) ? 'Unfollow me' : 'Follow me' }}
        </button>
    </form>

@endunless
