<h3 class="signup-subheading">
    Choose your desired plan:
</h3>
<!-- Subscription-plan Form input -->
<div class="form-group row">
    {{ Form::label('subscriptionPlan', 'Subscription Plan:', ['class' => 'col-md-4
    control-label']) }}
    <div class="col-md-8">
        {{ Form::select('subscriptionPlan', ['monthly' => '&euro; 20 per month',
        'half-yearly' => '&euro; 75 per 6 months', 'yearly' => '&euro; 125 per year.
        Save
        50%'], $_GET['plan'], ['class' => 'form-control', 'data-stripe' => 'plan']) }}
    </div>
</div>