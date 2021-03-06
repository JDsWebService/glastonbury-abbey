<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p><i>"We are bound to thank God always for you, brethren, as it is meet, because that your faith groweth exceedingly, and the charity of every one of you all toward each other aboundeth." - 2 Thessalonians 1:3</i></p>
        </div>

        <div class="row">

            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="fas fa-map-marked-alt"></i>
                            <h3>Our Address</h3>
                            <p><a href="https://goo.gl/maps/NeHcwgtqYsRH7Q2P6">16 Hull Street Hingham, Massachusetts 02043</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="fas fa-envelope-open-text"></i>
                            <h3>Email Us</h3>
                            <p><a href="mailto:information@glastonburyabbey.org">information@glastonburyabbey.org</a><br><a href="mailto:office@glastonburyabbey.org">office@glastonburyabbey.org</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="fas fa-phone-volume"></i>
                            <h3>Call Us</h3>
                            <p>
                                <a href="tel:781-749-2155">781-749-2155</a> - Main Office
                                <br>
                                <a href="tel:781-749-2155,332">781-749-2155 x 332</a> - Business Office    
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->