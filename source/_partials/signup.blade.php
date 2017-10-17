<style>
    .signup-box {
        text-align: center;
        padding: 1.5em;
        border: 2px solid grey;
    }

    .signup-box p {
        color: grey;
    }
</style>
<div class="signup-box">
    <h3>Troy Pavlek ran as an unelectable fringe candidate in the 2017 Edmonton municipal election</h3>

    <p>
        Keep up-to-date with the latest information by signing up to the mailing list.
    </p>

    @if (isset($signup_extra))
        <p>
            {!! $signup_extra !!}
        </p>
    @endif
    <!-- Begin MailChimp Signup Form -->
    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style>
    <div id="mc_embed_signup">
        <form action="//tpavlek.us13.list-manage.com/subscribe/post?u=45528f4b6626291ccfb196fa7&amp;id=851b9a1264" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">

                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_45528f4b6626291ccfb196fa7_851b9a1264" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
        </form>
    </div>

    <!--End mc_embed_signup-->

    <p>
        He's also on Facebook and Twitter, and will log on whenever <a href="https://xkcd.com/386/">duty calls</a>.
    </p>

    <div style="display:flex; align-items: center;">
        <a class="twitter-follow-button" href="{{ $page->twitter_url }}" data-size="large">Follow @troypavlek</a>

        <div style="flex-grow:1;">
            <a class="button" href="{{ $page->facebook_url }}"><i class="fa fa-facebook"></i> Facebook</a>
        </div>

    </div>

    <div style="display:flex; align-items: center;">

    </div>

</div>
