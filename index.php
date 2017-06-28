<?php
$domain = str_replace(array("www.", ".be"), "", $_SERVER['HTTP_HOST']);
$domain[0] = strtoupper($domain[0]);
$domain[10] = strtoupper($domain[10]);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ransomware consultancy">
    <meta name="author" content="">

    <title>Ransomware Oplossing</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"
            integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY"
            crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"
            integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo"
            crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"><?php echo $domain ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Over ons</a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">Team</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contacteer ons</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Is uw data gegijzeld door Ransomware?</div>
            <div class="intro-heading">Wij zijn er voor u!</div>
            <a href="#services" class="page-scroll btn btn-xl">Meer info</a>
        </div>
    </div>
</header>

<!-- Services Section -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Services</h2>
                <h3 class="section-subheading text-muted">Ons aanbod</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Recovery</h4>
                <p class="text-muted">Wij helpen u de schade te herstellen van een ransomware aanval. We hebben een
                    uitgebreide bibliotheek van ransomware en bijbehorende oplossingen die we dagelijks updaten.</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-btc fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Onderhandeling</h4>
                <p class="text-muted">Indien manuele herstelling niet werkt, kunnen we overgaan op onderhandeling met de malware auteurs. We hebben jarenlange ervaring in onderhandelingen met ransomware auteurs. Garantie voor een vlotte afhandeling en minimale downtime. </p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Preventie</h4>
                <p class="text-muted">Wij helpen uw netwerk-infrastructuur te beveiligen tegen nieuwe aanvallen. Onze specialisten hebben een
                    diepgaande kennis van de laatste malware software en kunnen u helpen bij het kiezen van de beste oplossingen. </p>
            </div>
        </div>
    </div>
</section>

<section id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Pricing</h2>
                <h3 class="section-subheading text-muted">Maak uw keuze</h3>
            </div>
            <div class="row">
                <div class="col-md-1"></div>

                <div class="col-md-5">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Standaard</h4>
                    <ul class="text-muted list-group">
                        <li>Resultaatsverbintenis</li>
                        <li>De interventie wordt ingeboekt aan de hand van onze beschikbaarheid</li>
                        <li>Ter plaatse analyse van het probleem</li>
                        <li>Forensische backup</li>
                        <li>Stappenplan om tot de oplossing te komen</li>
                        <li>Implementatie van de oplossing</li>
                        <li>Backup van de herstelde data</li>
                        <li>Lange termijn beveiliging tegen toekomstige Ransomware aanvallen</li>
                        <li><b>1</b> systeem inclusief</li>
                    </ul>

                    <b>Bevat deze kosten niet:</b>
                    <ul class="list-group text-muted">
                        <li>Eventuele bitcoin transactie kosten in uw opdracht</li>
                        <li>vervoer van en naar en uw bedrijf</li>
                        <li>oplossing dezelfde dag</li>
                        <li><span class="badge">&euro; 4950</span></li>
                    </ul>
                    <a href="#contact" class="btn btn-default">Bestel nu</a>
                </div>

                <div class="col-md-1"></div>
                
                <div class="col-md-5">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-btc fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Gold -> Now - Onmiddellijke Enterprise Oplossing</h4>
                    <ul class="text-muted list-group">
                        <li>Resultaatsverbintenis</li>
                        <li><b>Vandaag</b> komen we ter plaatse</li>
                        <li>Ter plaatse analyse van het probleem</li>
                        <li>Forensische backup</li>
                        <li>Stappenplan om tot de oplossing te komen</li>
                        <li>Implementatie van de oplossing</li>
                        <li>Backup van de herstelde data</li>
                        <li>Lange termijn beveiliging tegen toekomstige Ransomware aanvallen</li>
                        <li><b>3</b> systemen inclusief</li>
                    </ul>

                    <b>Bevat deze kosten niet:</b>
                    <ul class="text-muted list-group">
                        <li>Eventuele bitcoin transactie kosten in uw opdracht</li>
                        <li>Vervoer van en naar en uw bedrijf</li>
                        <li><span class="badge">&euro; 14950</span></li>
                    </ul>
                    <a href="#contact" class="btn btn-default">Bestel nu</a>
                </div>
            </div>

        </div>
</section>

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Onze Story</h2>
                <h3 class="section-subheading text-muted">Recente gebeurtenissen</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/aids.png" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1989</h4>
                                <h4 class="subheading">De allereerste attack</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Joseph Popp verspreidt de <b>AIDS Trojan</b> via 20000 floppy discs. Op de floppies stond een programma dat de kans op AIDS berekende aan de hand van een in te vullen formulier. Er stond echter ook een malware programma op dat na 90 opstarten van de computer, een boodschap toonde om $189 te betalen en verdere toegang tot de computer verhinderde.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/cryptolocker.png" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>September - December 2013</h4>
                                <h4 class="subheading">CryptoLocker</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Een nieuwe soort malware Cryptolocker infecteert meer dan <b>250 000</b> systemen. Het wordt verspreid door het notoire Zeus botnet dat pas in 2014 kan worden ontmanteld om even later al weer op te duiken. Nieuwe varianten van Cryptolocker, waarvan de bekendste: CryptoWall en TorrentLocker. Ze richten een ravage aan.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/tesla.png" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2015</h4>
                                <h4 class="subheading">Bitcoin ransoms: TeslaCrypt </h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">In 2015 begint het TeslaCrypt virus betaling te vragen in Bitcoin en in enkele gevallen Paypal. In datzelfde jaar voert het <b>Armada Collective</b> een gecoördineerde aanval uit op Griekse banken. Ze vroegen een som van 20 000 Bitcoin (&euro; 7 miljoen) maar de banken gaven niet toe en beveiligden hun netwerken.</b></p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/wannacry.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Mei 2017</h4>
                                <h4 class="subheading">WannaCry</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Meer dan <b>230,000 computers</b> worden gegijzeld door het WannaCry virus via een security-bug in het Windows operating systeem. Microsoft is echter snel met het uitbrengen van een patch en een week later zijn de ongeinfecteerde machines beveiligd. Toch blijft er nog een substantieel aantal systemen kwetsbaar door ontoerijkende beveiligingsmaatregelen en lakse upgrade-policies.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <h4>Wij
                                <br>zijn er
                                <br>voor u!</h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Mei 2017</h4>
                                <h4 class="subheading"><?php echo $domain ?></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">De oprichters van <?php echo $domain ?> besluiten om hun expertise te bundelen en oplossingen aan te bieden voor de Belgische markt.</p>
                            </div>
                        </div>


                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Ons Team</h2>
                <h3 class="section-subheading text-muted">Ons team heeft uitstekende banden binnen de Crypto en Security community. <br/>Wij staan u bij met professioneel advies en effectieve oplossingen.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/tom.png" class="img-responsive img-circle" alt="">
                    <h4>Tom Schouteden</h4>
                    <p class="text-muted">Chief Ransomware Officer</p>
                    <ul class="list-inline social-buttons hide">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/jasper.jpg" class="img-responsive img-circle" alt="">
                    <h4>Jasper Nuyens</h4>
                    <p class="text-muted">CEO</p>
                    <ul class="list-inline social-buttons hide">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/jo.png" class="img-responsive img-circle" alt="">
                    <h4>Jo Giraerts</h4>
                    <p class="text-muted">Security Expert</p>
                    <ul class="list-inline social-buttons hide ">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/joeri.jpg" class="img-responsive img-circle" alt="">
                    <h4>Joeri Cornelissens</h4>
                    <p class="text-muted">Senior Bitcoin Trader</p>
                    <ul class="list-inline social-buttons hide">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/jeroen.jpg" class="img-responsive img-circle" alt="">
                    <h4>Jeroen Ost</h4>
                    <p class="text-muted">Cryptography Expert</p>
                    <ul class="list-inline social-buttons hide">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/geert.jpg" class="img-responsive img-circle" alt="">
                    <h4>Geert Fannes</h4>
                    <p class="text-muted">Machine Learning Expert</p>
                    <ul class="list-inline social-buttons hide ">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted"></p>
            </div>
        </div>
    </div>
</section>

<!-- Clients Aside -->
<aside class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
        </div>
    </div>
</aside>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contacteer ons</h2>
                <h3 class="section-subheading"></h3>
            </div>
        </div>

        <div class="row well well-sm">
            <div class="col-lg-1">
                <h4>Tel:</h4>
            </div>
            <div class="col-lg-2">
                <h4> +32 2 747 47 01</h4>
            </div>

        </div>

        <br/><br/>

        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Jouw naam *" id="name" required
                                       data-validation-required-message="Vul jouw naam hier in.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Jouw email *" id="email" required
                                       data-validation-required-message="Vul jouw emailadres in.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Jouw telefoon *" id="phone" required
                                       data-validation-required-message="Vul jouw telefoonnummer in.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Jouw boodschap *" id="message" required
                                          data-validation-required-message="Vul hier jouw boodschap in"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Verzend</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; <?php echo $domain ?> 2017</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Privacy Policy</a>
                    </li>
                    <li><a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"
        integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb"
        crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>

</body>

</html>
