@extends('layouts.master')

@section('content')
<!-- Content-->

<div class="container-fluid zeroPad">

    <div class="section">
        <div class="mx-auto top-align full-width titleFont text-center titleSize blackText">SIGNUP</div>

        <a class="d-none d-md-block" href="/">
            <img class="homeButton" src="/images/home-01.png">
        </a>

        <div class="container-fluid">
            <div class="row full-width sectionContainer mediumBottomPad">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 generalFont generalSize blackText text-justify">
                    
                <!-- Begin Mailchimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id="mc_embed_signup">
                <form action="https://ownemit.us18.list-manage.com/subscribe/post?u=3c3af586825828c2e88762ca9&amp;id=b84ecdd717" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                    
                <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                <div class="mc-field-group">
                    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                </label>
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3c3af586825828c2e88762ca9_b84ecdd717" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->

                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
</div>

@endsection