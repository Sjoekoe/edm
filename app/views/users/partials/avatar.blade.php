<a href="{{ route('users.show', $user->username) }}">
    <img src="{{ $user->present()->gravatar(isset($size) ? $size : 30) }}" alt="{{ $user->username }}"
         class="media-object img-circle avatar"/>
</a>