
<div class="col-12 col-md-6 small-device-top-space">
    <div class="dtr-contact-box padding-50 bg-color-white">


        <!-- form starts -->
        <form id="contactform" method="post" action="https://tanshcreative.com/copr-st-preview/php/contact-form.php">
            <fieldset>
                <p class="dtr-form-field">
                    <label style="color: black;">Your Name*</label>
                    <input name="name" class="required" type="text" placeholder="John Doe" style="background-color: #d0d0d1;">
                </p>
                <p class="dtr-form-field">
                    <label style="color: black;">Email Address*</label>
                    <input name="email" class="required email" type="text" placeholder="hello@example.com" style="background-color: #d0d0d1;">
                </p>
                <p class="dtr-form-field">
                    <label style="color: black;">Subject</label>
                    <input name="subject" type="text" placeholder="Subject" style="background-color: #d0d0d1;">
                </p>
                <p class="dtr-form-field">
                    <label style="color: black;">Message*</label>
                    <textarea rows="4" name="message" class="required" placeholder="Message in brief..." style="background-color: #d0d0d1;"></textarea>
                </p>
                <p class="antispam" style="color: black;">Leave this empty: <br />
                    <input name="url" />
                </p>
                <p>
                    <button type="submit" style="background-color: #228B22;">Send Message</button>
                </p>
                <div id="contactresult"></div>
            </fieldset>
        </form>
        <!-- form ends -->

    </div>
</div>
