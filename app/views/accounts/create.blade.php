@extends('layouts.main')

@section('content')
<div class="piece piece-dark signup-banner">
    <div class="container">
        <h2 class="text-center">1 step closer to follow your dreams!</h2>
    </div>
</div>

<div class="piece-light">
    <div class="container wrap">
        <div class="row">
            <div class="col-md-12 content">
                <div id="signup-form" class="row">
                    {{ Form::open(['route' => 'subscribed', 'class' => 'col-md-8 col-md-offset-2', 'id' =>
                    'billing-form', 'accept-charset' =>
                    'UTF-8']) }}
                    <div class="panel panel-default registration">
                        <div class="panel-heading">
                            <div class="row">
                                <h1 class="panel-title col-lg-7 col-md-5 col-sm-7">
                                    Gain acces to all the videos & more
                                </h1>

                                <div class="cc-icons col-lg-5 col-md-4">
                                    {{ HTML::image('pictures/credit-card-icons.png') }}
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <fieldset>
                                @include('accounts.partials.subscription-plan')
                            </fieldset>

                            <fieldset>
                                @include('accounts.partials.profile-form')
                                @include('partials.errors')
                            </fieldset>

                            <fieldset>
                                @include('accounts.partials.creditcard-form')
                            <div class="payment-errors alert-danger"></div>
                            </fieldset>
                        </div>
                        <div class="panel-footer clearfix">
                            <div class="form-group row">
                                <div class="pull-left col-md-7 terms" style="padding-left: 0;">
                                    <p>
                                        Please note that by signing up, you agree to our terms of service, and are
                                        signing in into a subscription until you choose to cancel.
                                    </p>
                                </div>
                                <div class="pull-right signup-buttons">
                                    {{ Form::submit('Join Now', ['class' => 'btn btn-custom']) }}
                                    <a href="#" class="btn">Or Log In</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
<script src="js/billing.js"></script>
@stop