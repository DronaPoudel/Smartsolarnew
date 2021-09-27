<footer id="footer" class="parallax footer">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-delay="0.4s">Contacts</h2>
            <h6 class="off1 pad1 wow fadeInUp" data-wow-delay="0.4s">Praesent vestibulum molestie lacus. Aeneannummy hendrerit mauris.
                Phasellus porta. Fusce sumi. Cum sociis natoque penatibus et magnis dis parturient mus. Nulla dui. Fusce
                feugiat malesuada od Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci
                ac
                sem.</h6>

            <div class="row off4">
                <div class="grid_4 wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="term">
                        <div class="icon3 fa fa-envelope"></div>
                        <p>
                            <a href="mailto:#">mail@demolink.org</a>
                        </p>
                    </div>
                </div>
                <div class="grid_4 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="term">
                        <div class="icon3 fa fa-mobile"></div>
                        <p>+1 800 559 6580</p>
                    </div>
                </div>
                <div class="grid_4 wow fadeInRight" data-wow-delay="0.6s">
                    <div class="term">
                        <div class="icon3 fa fa-map-marker"></div>
                        <p> 8901 Marmora Road <br/>
                            Glasgow, DO4 89GR</p>
                    </div>
                </div>
            </div>

            <form id="contact-form" class='contact-form off3'>
                <div class="contact-form-loader"></div>
                <fieldset>
                    <label class="name wow fadeInLeft" data-wow-delay="0.4s">
                        <input type="text" name="name" placeholder="Name:" value=""
                               data-constraints="@Required @JustLetters"/>

                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid name.</span>
                    </label>

                    <label class="email wow fadeInRight" data-wow-delay="0.6s">
                        <input type="text" name="email" placeholder="Email address:" value=""
                               data-constraints="@Required @Email"/>

                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>

                    <label class="message wow fadeInUp" data-wow-delay="0.8s">
                        <textarea name="message" placeholder="Message:"
                                  data-constraints='@Required @Length(min=20,max=999999)'></textarea>

                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*The message is too short.</span>
                    </label>

                    <div class="btn-wr grid_6 preffix_3 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="form-btn" href="#" data-type="submit">Submit</a>
                    </div>
                </fieldset>
                <div class="modal fade response-message">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">
                                    &times;
                                </button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                You message has been sent! We will be in touch soon.
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <ul class="social-list2">
                <li class="wow fadeInLeft" data-wow-delay="0.4s">
                    <a class="fa fa-twitter" href="#"></a>
                </li>
                <li class="wow fadeInUp" data-wow-delay="0.8s">
                    <a class="fa fa-facebook" href="#"></a>
                </li>
                <li class="wow fadeInRight" data-wow-delay="0.6s">
                    <a class="fa fa-google-plus" href="#"></a>
                </li>
            </ul>

            <div class="copyright wow fadeInUp" data-wow-delay="0.4s">
                <span>Solar NRG</span> © <span id="copyright-year"></span>
                <a href="index-6.html">Privacy policy</a>
                . Terms of use
            </div>
        </div>
    </footer>