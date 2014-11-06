<h3 class="signup-subheading">
    Billing Information:
</h3>

<!-- Cc-number Form input -->
<div class="form-group row">
    {{ Form::label('cc-number', 'Credit Card Number:', ['class' => 'col-md-4
    control-label']) }}
    <div class="col-md-8">
        {{ Form::text(null, null, ['class' => 'form-control input-md cc-number',
        'required', 'data-stripe' => 'number']) }}
    </div>
</div>

<div class="form-group row">
    {{ Form::label('cc-expiration-month', 'Expiration Date:', ['class' => 'col-md-4
    control-label']) }}
    <div class="col-md-3">
        {{ Form::selectMonth(null, null, ['class' => 'form-control
        cc-expiration-month', 'data-stripe' => 'exp-month']) }}
    </div>
    <div class="col-md-2">
        {{ Form::selectYear(null, date('Y'), date('Y') + 10, null, ['class' =>
        'form-control
        cc-expiration-year', 'data-stripe' => 'exp-year']) }}
    </div>
</div>

<!-- Cvv Form input -->
<div class="form-group row">
    {{ Form::label('cvv', 'CVV Number:', ['class' => 'col-md-4 control-label']) }}
    <div class="col-md-3">
        {{ Form::text(null, null, ['class' => 'form-control input-md cvc', 'required', 'data-stripe' => 'cvc'])
        }}
    </div>
</div>
<p class="text-muted" style="padding-top: 12px;">*If you don't have the opportunity to
                                                 pay by credit card, please contact us
                                                 for other options</p>