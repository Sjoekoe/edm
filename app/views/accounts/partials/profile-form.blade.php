<h3 class="signup-subheading">
    Your Profile:
</h3>
<!-- Username Form input -->
<div class="form-group row">
    {{ Form::label('username', 'Username:', ['class' => 'col-md-4 control-label']) }}
    <div class="col-md-8">
        {{ Form::text('username', null, ['class' => 'form-control input-md', 'required'
        => 1]) }}
    </div>
</div>

<!-- Email Form input -->
<div class="form-group row">
    {{ Form::label('email', 'Email Address:', ['class' => 'col-md-4 control-label']) }}
    <div class="col-md-8">
        {{ Form::text('email', null, ['class' => 'form-control input-md', 'required' =>
        1]) }}
    </div>
</div>

<!-- Password Form input -->
<div class="form-group row">
    {{ Form::label('password', 'Desired Password:', ['class' => 'col-md-4
    control-label']) }}
    <div class="col-md-8">
        {{ Form::password('password', ['class' => 'form-control input-md', 'required' =>
        1]) }}
    </div>
</div>

<!-- Password_confirmation Form input -->
<div class="form-group row">
    {{ Form::label('password_confirmation', 'Repeat Password:', ['class' => 'col-md-4
    control-label']) }}
    <div class="col-md-8">
        {{ Form::password('password_confirmation', ['class' => 'form-control input-md',
        'required' => 1])
        }}
    </div>
</div>