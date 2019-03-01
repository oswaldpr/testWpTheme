<?php get_header(); ?>
    <header>About us Page</header>
    <div class='content row'>
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li>Oswald Prince</li>
                <li>For AutoTrader web developer post application</li>
                <li><a href="mailto:oswaldpr@gmail.com">oswaldpr@gmail.com</a></li>
            </ul>
        </div>

        <div class="col-md-6 mt-md-0 mt-3">
            <!-- Contact form from https://mdbootstrap.com/docs/jquery/forms/contact/-->
            <!-- mailController.php is not done so nothing happens on a submit -->
            <form id="contact-form" name="contact-form" action="mailController.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary waves-effect waves-light" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
        </div>

        <div class="col-md-3 mt-md-0 mt-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>