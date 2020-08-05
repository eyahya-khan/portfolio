 <!--footer-->
        <div class="row">
            <!--Section: Contact v.2-->
            <section class="col-12 mb-4 shadow-lg" id="contact">
                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact me</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? <br><mark class="bg-warning">Do you like to hire me for internship?</mark><br>Please do not hesitate to contact me directly.</p>
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST" onsubmit="return validateForm()">
                            <!--Grid row-->
                            <div class="row text-left">
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
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <br> <input type="text" id="subject" name="subject" class="form-control">
                                        <label for="subject" class="">Subject</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <!--Grid row-->
                            <div class="row text-left">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <br><textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                                        <label for="message">Your message</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                        </form>
                    <div class="text-center text-md-left mb-3">
                            <br><input type="submit" class="btn btn-info" name = "submit" onclick="validateForm()" value="Send">
                        </div>
                    <div class="" id="status"></div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa fa-map-marker fa-2x"></i>
                                <p>Ringvägen 36, LGH-1203<br>137 34 Västerhaninge, Stockholm</p>
                            </li>
                            <li><i class="fa fa-phone mt-4 fa-2x"></i><br>
                                <a href="tel:+46761958771" title="contact number" id="mycell">+4676 195 87 71</a>
                            </li>
                            <li><i class="fa fa-envelope mt-4 fa-2x"></i><br>
                                <a href="mailto:eyahyakhan@gmail.com?subject=About Information&body=Hello Eyahya Khan,">eyahyakhan@gmail.com</a><br>
                                <a href="mailto:eyahya.khan@cmeducations.se?subject=About Information&body=Hello Eyahya Khan,">eyahya.khan@cmeducations.se</a><br><br>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/eyahyaeyahya" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                                <a href="https://www.linkedin.com/in/eyahya-khan-a90b1125/" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
            </section>
        </div>