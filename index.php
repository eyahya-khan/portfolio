<?php include('layout/header.php');?>

<body>
    <div class="container-fluid text-center">
            <div id="navv"></div>
            <!-- Top Navigation Menu -->
            <div class="row">
            <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content" onclick="closeNav()">
                <a href="#home">Home</a>
                <a href="#work">Work</a>
                <a href="#skill">Skill</a>
                <a href="#contact">Contact</a><br><br><br><br><br>
                <ul class="list-group list-group-horizontal text-center" style="list-style: none;display:inline-flex">
                        <li>
                <a href="https://www.facebook.com/eyahyaeyahya" target="_blank"><i class="fa fa-facebook-square fa-1x"></i></a>  </li>
                  <li><a href="https://www.linkedin.com/in/eyahya-khan-a90b1125/" target="_blank"><i class="fa fa-linkedin-square fa-1x"></i></a>  </li>
                  </ul>
            </div>
        </div>
        <span style="font-size:40px;cursor:pointer; margin-left: 20px; margin-bottom: -50px; color:white; z-index: 33" onclick="openNav()">&#9776;</span>
        <a style="font-size:40px;cursor:pointer; margin-left: 85%; margin-bottom: -50px; color:white; z-index: 33" href="sv.php"><img src="img/swedishflag.svg" width="20px" height="20px" alt=""></a>
        <!-- background image -->
            <div class="col-12">
                <div>
                    <img src="img/background.png" alt="" width="100%">
                </div>
                <div class="bg-text">
                    <h1>
                        <a href="#nav" class="typewrite" data-period="2000" data-type='[ "Hi, I am Eyahya Khan.", "Fullstack web developer.", "I love to develop."]'>
                            <span class="wrap"></span>
                        </a>
                    </h1>
                </div>
            </div>
        </div>

        <?php include('pages/homepage.php');?>
        <?php include('pages/work.php');?>
        <?php include('pages/skill.php');?>        
       <?php include('layout/footer.php');?>
       
        <div class="text-center mt-2">
            <button type="button" class="btn btn-info"><a href="#navv">Top</a></button>
        </div>
           <div class="row">
            <div class="col-12 shadow-lg bg-warning" id="copyright">
            <br><marquee behavior="alternate" direction="right"><strong>@Eyahya Khan. Copyright 2020</strong></marquee><br>
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
