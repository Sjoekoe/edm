<div class="piece piece-dark banner banner-profile">
    <div class="container">
        <img src="//www.gravatar.com/avatar/{md5($user-email)}?size=200" alt="{{$user->username}}"
             class="profile_avatar"/>
        <ul class="naked banner-profile_links">
            @if(!empty($user->profile->location))
            <li>{{ $user->profile->location }}</li>
            @endif
            @if (!empty($user->profile->twitter))
            <li><a href="//www.twitter.com/{{'@'.$user->profile->twitter}}">{{'@'.$user->profile->twitter}} </a></li>
            @endif
            @if (!empty($user->profile->website))
            <li><a href="//{{$user->profile->website}}">{{$user->profile->website}}</a></li>
            @endif
            @if (!empty($user->profile->soundcloud))
            <li><a href="//www.soundcloud.com/{{$user->profile->soundcloud}}">{{$user->profile->soundcloud}}</a></li>
            @endif
        </ul>
    </div>
</div>