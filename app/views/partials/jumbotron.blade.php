<div class="jumbotron">
    <div class="container">
        <h1 class="text-center">Chase your dreams with the help of your new friends!</h1>
        <p class="text-center">
            @if (! $currentUser)
            {{ link_to_route('join', 'Sign Up', null, ['class' => 'btn btn-custom btn-lg']) }} or
            <a href="#" role="button" class="btn btn-custom btn-lg">Browse Free Videos</a>
            @else
            <a href="#" role="button" class="btn btn-custom btn-lg"><i class="fa fa-search"></i> Start Learning</a>
            @endif
        </p>
    </div>
</div>