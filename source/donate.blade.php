@extends('_layouts.wrapped')
@section('title', "Donate to Troy Pavlek's Ward 11 Campaign")

@section('content')
    <h1 style="text-align:center;">Donate to Troy Pavlek's Ward 11 Campaign</h1>

    <article class="is-centered post">
        <div class="post-content">
            <h3>With your help we can bring positive change to City Hall</h3>

            <p>
                Any amount you donate, even as little as $5 goes a long way to helping get the message out!
            </p>

            <p>
                If it's more convenient for you (and you'd like to help us cut out PayPal fees), you can send an e-transfer to <strong>troy@tpavlek.me</strong>
            </p>

            <p>
                Donations below are processed through PayPal. If you would like to make a cash donation, please get in
                <a href="/contact">contact</a> and someone will come meet you.
            </p>

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="donate-form"
                  style="text-align:center;">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="825ZFX9R2ZEBN">
                <button type="submit" class="button xlarge">Donate</button>
            </form>

            <p>
                <strong>Note:</strong> Due to Alberta legislations, donations may not be anonymous and all donors must
                reside
                within the province of Alberta.
            </p>

        </div>
    </article>
@stop

