@extends('layouts.main')

@section('content')
@include('users.partials.banner-profile')
<div class="profile_stats">
    <div class="container">
        <h2 class="profile_name">
            {{ link_to_route('users.show', $user->username, $user->username) }}
            @if($user->is($currentUser))
                {{ link_to_route('profiles.edit', 'Edit Profile', $user->username, ['class' => 'btn btn-custom', 'id' => 'editProfile']) }}
            @endif
        </h2>
        <ul>
            <li>
                <strong class="profile_stats-heading">
                    <a href="#">Completed Lessons</a>
                </strong>
                <span class="profile_stats-count">
                    140
                </span>
            </li>
            <li>
                <strong class="profile_stats-heading">
                    <a href="#">Favorites</a>
                </strong>
                <span class="profile_stats-count">
                    2
                </span>
            </li>
            <li class="profile_stats-join-date">
                <strong class="profile_stats-heading">
                    <a href="#">Learning Since</a>
                </strong>
                <span class="profile_stats-count">
                    {{ $user->present()->activeSince }}
                </span>
            </li>
        </ul>
    </div>
</div>
<div id="favorites" class="piece">
    <div class="container wrap">
        <h2 class="lessons_heading">
            <a href="#">{{ $user->username }}'s Favorites</a>
            <span class="text-muted">(2)</span>
        </h2>

        <div class="row lesson-set lessons_row">
            <article class="col-md-4 lesson-block lesson-block-lesson">
                <h3 class="lesson-block-title">
                    <a href="#">Creating the Kick</a>
                </h3>

                <div class="full-center lesson-block-inner">
                    <span class="label lesson-block-status lesson-block-status_watched" style>Watched</span>

                    <div class="full-center lesson-block-excerpt">
                        <div class="full-center-inner">
                            <p>Bla bla bla bla bla bla bla</p>
                        </div>
                    </div>
                    <div class="lesson-block-details">
                        <i class="lesson-thumbnail"></i>
                        <ul class="full-center-inner">
                            <li><i class="ss-calender"></i>
                                Last Updated:
                                <span>04/28/2014</span>
                            </li>
                            <li><i class="ss-skull"></i>
                                Difficulty:
                                <span>intermediate</span>
                            </li>
                            <li><i class="ss-clock"></i>
                                Length:
                                <span>13:32</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lesson-block-meta">
                    <div class="lesson-date">
                        <i class="icon-calender"></i>
                        <small>04/28/2014</small>
                    </div>
                </div>
            </article>
        </div>
    </div>

</div>

@stop