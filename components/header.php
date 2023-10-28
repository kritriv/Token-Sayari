<?php include_once 'head.php'  ?>

<script type="text/javascript" src="js/MultiLang.js">
</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        },
            'google_translate_element'
        );
        //   document.getElementById('google_translate_element').style.background="#00A0EB";
    }
</script>


<!-- Header -->
<header class="simpal-yellow ">
    <div class="topbar banner-stars">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="topbar-left">
                        <ul class="list-inline">
                            <!-- <li class="list-inline-item"><i class="fa fa-phone text-blue"></i> +0123 456 789</li> -->
                            <li class="list-inline-item ms-2"><i class="fa fa-envelope-o ms-3"> </i>
                                <a href="mailto:contact@planetsayari.com" class="">contact@planetsayari.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="topbar-right text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <ul class="list-inline iq-left">
                                    <li class="list-inline-item"><a href="https://www.instagram.com/planet_sayari/"
                                            target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <!-- <li class="list-inline-item"><a
                                            href="https://m.youtube.com/watch?v=MB73HjuhUtQ&fbclid=PAAaYv4TYulyBBfby2Vwe6J8d0PqgG0e1HY9v2jf2OabXBsdmMw3cYRxWUEl8https://www.tiktok.com/@planetsayari"
                                            target="_blank"><i class="fa fa-youtube"></i></a></li> -->
                                    <li class="list-inline-item"><a href="https://twitter.com/TokenSayari"
                                            target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a
                                            href="https://www.facebook.com/profile.php?id=100090091656693"
                                            target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://t.me/+katj3AYArktjMThi"
                                            target="_blank"><i class="fa fa-telegram"></i></a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item"><span id="google_translate_element"></span></li>
                            <!-- <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comments-o ms-3"></i>Free Consulting</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
    </div>
    <!-- <div id="google_translate_element"></div> -->

    <div class="iq-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <a href="index.php"><img id="logo_dark" class="img-fluid" src="images/logo_hori.svg"
                                alt="logo"></a>
                    </div>
                    <nav> <a id="resp-menu" class="responsive-menu" href="javascript:void(0)"><i
                                class="fa fa-reorder"></i> </a>
                        <ul class="menu text-end">
                            <li><a class="<?php if ($page == 'home') {
                                                echo 'active';
                                            } ?>" href="index.php">Home</a></li>
                            <li><a class="<?php if ($page == 'about') {
                                                                        echo 'active';
                                                                    } ?> achor_link_pointer">About Us</a>
                                <ul class="sub-menu">
                                    <li><a href="mission.php" class="<?php if ($active == 'mission') {
                                                                            echo 'active';
                                                                        } ?>">Mission</a></li>
                                    <li><a href="strategy.php" class="<?php if ($active == 'strategy') {
                                                                            echo 'active';
                                                                        } ?>">Strategy</a></li>
                                    <li><a href="our-journey.php" class="<?php if ($active == 'journey') {
                                                                                echo 'active';
                                                                            } ?>">Our Journey</a></li>
                                    <!-- <li><a href="letter-of-credit.php" class="<?php if ($active == 'credit') {
                                                                                    echo 'active';
                                                                                } ?>">Letter of Credit</a></li> -->
                                    <li><a href="Sayari-Lite-Paper.pdf" target="_blank" class="<?php if ($active == 'paper') {
                                                                                                    echo 'active';
                                                                                                } ?>">Lite Paper</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  class="<?php if ($page == 'portfolio') {
                                                                        echo 'active';
                                                                    } ?> achor_link_pointer">Portfolio</a>
                                <ul class="sub-menu">

                                    <li><a href="programs.php" class="<?php if ($active == 'programs') {
                                                                            echo 'active';
                                                                        } ?> achor_link_pointer">Our Program</a></li>

                                    <li><a href="projects.php" class="<?php if ($active == 'projects') {
                                                                            echo 'active';
                                                                        } ?>">Projects</a></li>
                                </ul>
                            </li>
                            <li><a  class="<?php if ($page == 'Products') {
                                                                        echo 'active';
                                                                    } ?> achor_link_pointer">Products & Solution</a>
                                <ul class="sub-menu">
                                    <li><a href="funds-assets.php" class="<?php if ($active == 'funds') {
                                                                                echo 'active';
                                                                            } ?>">Funds & Assets</a></li>
                                    <li><a href="instrument.php" class="<?php if ($active == 'instrument') {
                                                                            echo 'active';
                                                                        } ?>">Instruments</a></li>
                                    <li><a href="letter-of-credit.php" class="<?php if ($active == 'credit') {
                                                                                echo 'active';
                                                                            } ?>">Letter of Credit</a></li>
                                </ul>
                            </li>
                            <li><a href="sayari-app.php" class="<?php if ($page == 'sayari app') {
                                                                echo 'active';
                                                            } ?>">Sayari App</a></li>
                            <!-- <li><a href="contact.php">Contact</a></li> -->
                            <li>
                                <a class="button" data-bs-toggle="modal"
                                    data-bs-target=".iq-login" data-bs-whatever="@mdo">Login Account

                                </a>

                            </li>
                            <li>
                            </li>
                        </ul>

                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->