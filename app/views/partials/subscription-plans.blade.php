<div class="piece-light">
    <div class="container wrap">
        <div class="row">
            <div class="col-md-12 content">
                <div class="join section">
                    <div class="row">
                        <h1>Choose your subscription plan</h1>

                        <div class="plan col-md-4 monthly">
                            <h2 class="monthly-heading">Monthly</h2>

                            <h3>&euro; 20</h3>

                            <p>A fast learner? Or you just want to inspect what this is all about. Then this is your
                               plan.</p>
                            {{ link_to_route('signup', 'Sign Up', ['plan' => 'monthly'], ['class' => 'btn btn-signup']) }}
                        </div>
                        <div class="plan col-md-4 half-yearly">
                            <h2 class="half-yearly-heading">6 Monthly</h2>

                            <h3>&euro; 75</h3>

                            <p>You know you want to keep on learning. Save some money and sign up for 6 months.</p>
                            {{ link_to_route('signup', 'Sign Up', ['plan' => 'half-yearly'], ['class' => 'btn btn-signup']) }}
                        </div>
                        <div class="plan col-md-4 yearly">
                            <h2 class="yearly-heading">Yearly</h2>

                            <h3>&euro; 125</h3>

                            <p>Totally addicted to learn with the stars? Save almost 50% with a yearly plan.</p>
                            {{ link_to_route('signup', 'Sign Up', ['plan' => 'yearly'], ['class' => 'btn btn-signup']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
