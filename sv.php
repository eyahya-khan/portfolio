<?php include('layout/header.php');?>

<body>
    <div class="container-fluid text-center">
            <div id="navv"></div>
            <!-- Top Navigation Menu -->
            <div class="row">
            <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content" onclick="closeNav()">
                <a href="#home">Hem</a>
                <a href="#work">Arbete</a>
                <a href="#skill">Kompetens</a>
                <a href="#contact">Kontakt</a><br><br><br><br><br>
                <ul class="list-group list-group-horizontal text-center" style="list-style: none;display:inline-flex">
                        <li>
                <a href="https://www.facebook.com/eyahyaeyahya" target="_blank"><i class="fa fa-facebook-square fa-1x"></i></a>  </li>
                  <li><a href="https://www.linkedin.com/in/eyahya-khan-a90b1125/" target="_blank"><i class="fa fa-linkedin-square fa-1x"></i></a>  </li>
                  </ul>
            </div>
        </div>
        <span style="font-size:40px;cursor:pointer; margin-left: 20px; margin-bottom: -50px; color:white; z-index: 33" onclick="openNav()">&#9776;</span>
        <a style="font-size:40px;cursor:pointer; margin-left: 85%; margin-bottom: -50px; color:white; z-index: 33" href="index.php"><img src="img/englishflag.png" width="20px" height="20px" alt=""></a>
        <!-- background image -->
            <div class="col-12">
                <div>
                    <img src="img/background.png" alt="" width="100%">
                </div>
                <div class="bg-text">
                    <h1>
                        <a href="#nav" class="typewrite" data-period="2000" data-type='[ "Hej, jag heter Eyahya Khan.", "Fullstack Webb Utvecklare.", "Jag älskar att utvecklas."]'>
                            <span class="wrap"></span>
                        </a>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 shadow-lg" id="home">
                <h1>Välkommen</h1>
                <p>Jag heter Eyahya Khan, började studera från September 2019 som<strong> Webbutvecklare E-handel</strong> 
                <br>på 2 års yrkeshögskoleexamen om totalt 450 yh-poäng.<br> 
                på <a href="https://cmeducations.se/" target="_blank">Changemaker Educations AB</a> och beräknad slutföringstid är 2021.</p><br>
                <h1>Nu letar jag efter Praktik (LIA) på 24 veckor<br><strong>Börja från Januari 2021 till Juli 2021</strong></h1><br><br>
                <p>LIA står för Lärande i Arbete (Lärande medan du arbetar) och är en arbetsplatsbaserad kurs på Yrkeshögskola.</p>
                <br><p><mark>Nyckelpunkt om LIA:</mark><br>1) <a href="https://www.csn.se/languages/english/" target="_blank">CSN</a> täcker hela varaktigheten. <br>
                2) Avtal mellan Skola, Student och Företag.</p>
                <p><a href="https://cmeducations.se/utbildningar/program/webbutvecklare-e-handel" target="_blank">Om LIA</a></p>
                <p>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Kontakt för LIA</button>
                <div id="demo" class="collapse">
                <h1>OSCAR LINDQVIST</h1><p><em>Utbildningsledare WUE Stockholm</em></p><p>Mobil: +4676 628 38 69</p><p>E-post: oscar@cmeducations.se</p>
                </div></p>
                <img src="img/mypic.jpg" class="rounded-circle mb-3" alt="Eyahya" width="270" height="270">
            </div>
        </div>
        <div class="row">
            <div class="col-12 shadow-lg" id="work">
                <h3>Arbete</h3>
                <p>Hela programvaraktigheten gjorde vi massor av klassuppgifter, projektets slutförda projekt och självpraxis.<br><br>
                Några av dem visar bälgen. <br><br>Klicka på bilden och besök länken...</p>
                <div>
                    <p></p><br><br>
                </div>
                <div id="myCarousel" class="carousel mb-3" data-ride="carousel" data-interval="3000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                        <li data-target="#myCarousel" data-slide-to="7"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="https://github.com/eyahya-khan/Jacket-Display-with-VUE" target="_blank"><img src="img/mystorevue.png" alt="my store" width="460" height="345"></a>
                        </div>
                        <div class="item">
                            <a href="https://github.com/eyahya-khan/el-bavero-HTML-CSS" target="_blank"><img src="img/elbavero.png" alt="elbavero" width="460" height="345"></a>
                        </div>
                        <div class="item">
                            <a href="https://github.com/eyahya-khan/blogsite-with-PHP" target="_blank"><img src="img/blogsite.png" alt="blogsite" width="460" height="345"></a>
                        </div>
                        <div class="item">
                            <a href="" target="_blank"><img src="img/maketea.png" alt="how to make tea" width="460" height="345"></a>
                        </div>
                        <div class="item">
                            <a href="https://eyahya-khan.github.io/" target="_blank"><img src="img/bookbazar.png" alt="bookbazar" width="460" height="345"></a>
                        </div>
                        <div class="item">
                            <a href="https://github.com/eyahya-khan/jqueryapi" target="_blank"><img src="img/namenpicture.png" alt="name and picture" width="460" height="345"></a>
                        </div>
                        <div class="item">
                            <a href="https://github.com/eyahya-khan/javascript-dom" target="_blank"><img src="img/todolist.png" alt="todo list" width="460" height="345"></a>
                        </div>
                        <div class="item">
                            <a href="https://github.com/eyahya-khan/tvmaze-jqueryAPI" target="_blank"><img src="img/tvmaze.png" alt="tv maze" width="460" height="345"></a>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br><p>För mer info: <a href="https://github.com/eyahya-khan" target="_blank"> https://github.com/eyahya-khan</a></p><br>
            </div>
        </div>
        <div class="row">
            <div class="col-12 shadow-lg" id="skill">
                <h3>Kompetens</h3>
                <h4 class="text-warning">Det går inte att lära sig 100% av någon kurs.<br>men jag har förtroende för att jag kan tjäna ditt företag som din förväntning.</h4><br>
                <table class="table table-bordered table-dark">
                    <thead>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Programming Language</td>
                            <td>C, C++</td>
                        </tr>
                        <tr>
                            <td>Markup Language</td>
                            <td>HTML5</td>
                        </tr>
                        <tr>
                            <td>Style sheet</td>
                            <td>CSS3, SASS, Tachyons</td>
                        </tr>
                        <tr>
                            <td>Responsive Framework</td>
                            <td> Bootstrap 4</td>
                        </tr>
                        <tr>
                            <td>Scripting Language</td>
                            <td>Java Script (JQUERY, AJAX, JSON, VUE, REACT)</td>
                        </tr>
                        <tr>
                            <td>Server programming</td>
                            <td>PHP</td>
                        </tr>
                        <tr>
                            <td>Database</td>
                            <td>My SQL, Oracle, MS Access</td>
                        </tr>
                        <tr>
                            <td>CMS (E-commerce)</td>
                            <td>Wordpress, Woocommerce, Magento 2</td>
                        </tr>
                        <tr>
                            <td>Version control</td>
                            <td>Github, Git</td>
                        </tr>
                        <tr>
                            <td>Agile methodology</td>
                            <td>Scrum master</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--footer-->
        <div class="row">
            <!--Section: Contact v.2-->
            <section class="col-12 mb-4 shadow-lg" id="contact">
                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Kontakta mig</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Har du frågor? <br><mark class="bg-warning">Vill du anställa mig för praktik?</mark><br>Tveka inte att kontakta mig direkt.</p>
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
                                        <label for="name" class="">Ditt namn</label>
                                    </div>
                                </div>
                                <!--Grid column-->
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">E-post</label>
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
                                        <label for="subject" class="">Ämne</label>
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
                                        <label for="message">Skriva meddelande</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                        </form>
                    <div class="text-center text-md-left mb-3">
                            <br><input type="submit" class="btn btn-info" name = "submit" onclick="validateForm()" value="Skicka">
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
        
        <div class="text-center mt-2">
            <button type="button" class="btn btn-info"><a href="#navv">Till toppen</a></button>
        </div>
           <div class="row">
            <div class="col-12 shadow-lg bg-warning" id="copyright">
            <br><marquee behavior="alternate" direction="right"><strong>@Eyahya Khan. Upphovsrätt 2020</strong></marquee><br>
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="whitespace">
            </div>
        </div>
    </div>
<script src="js/validate.js"></script>
</body>
</html>
