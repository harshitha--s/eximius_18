<?php include 'header.php';?>
<!-- LOADING ANIMATION -->
    <div id="site-loading"></div>
    <!-- MAIN MENU -->
    <div id="cv-menu">
        <nav id="cv-main-menu">
            <ul>
                <!-- SIDEBAR MENU ICON -->
                <li><a href="#" class="cv-menu-button fa fa-bars tooltip-menu" title="Main Menu">Menu</a>
                </li>
                <!-- PAGE 1 LINK -->
                <li class="links-to-floor-li cv-active" data-id="1" data-slug="home"><a href="#home" class="fa fa-home tooltip-menu" title="HOME">Home</a>
                </li>
                <!-- PAGE 2 LINK -->
                <li class="links-to-floor-li" data-id="2" data-slug="about"><a href="#about" class="fa fa-user tooltip-menu" title="ABOUT">About</a>
                </li>
                <!-- <li class="links-to-floor-li" data-id="3" data-slug="contact"><a href="#contact" class="fa fa-send tooltip-menu" title="CONTACT US">Contact us</a>
                </li> -->
            </ul>
        </nav>
    </div>
    <!-- LEFT SLIDER -->
    <div class="cv-left-slider">
        <div id="cv-left-slider">
            <!-- 1. SLIDE -->
            <div>
                <img src="images/speaker-thumbs/speaker-vikram.png" alt="">
                <!-- <div id="home-slide-title">
                    <span>LEAP</span>
                </div> -->
            </div>
            <!-- 2. SLIDE -->
            <img src="images/speaker-thumbs/speaker-vikram.png" alt="">
            <!-- 3. SLIDE -->
            <div>
              <!-- GOOGLE MAP -->
                <div class="google-map-container">
                    <div id="google-map"></div>
                </div>  
            </div>
        </div>
    </div>
    <!-- PAGES -->
    <div id="ascensorBuilding">
        <!-- PAGE 1 -->
        <section class="floor floor-1">
            <div id="home-image">
                <div id="home-title">
                    <h1><!-- <span class="mobile-title">Nameless Wonder</span> --><span>VC Panel</span></h1>
                    <p>Vikram Vaidyanatha<br> <span style="font-size: medium;">MD, Matrix Partners</span> </p>
                </div>
                <!-- SOCIAL ICONS -->
                <div id="cv-home-social-bar-container">
                    <nav id="cv-home-social-bar">
 <!--                        <ul>
                            <li>
                                <a target="_blank" href="https://docs.google.com/forms/d/1ybo_OpLxEqILyyU06lxh6FJd1oI_NAfAQ4RTMXJd-cc/" class="fa fa-user-plus tooltip-social" title="TEAM REGISTRATION">Registration</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://docs.google.com/forms/d/1AmG68mdbPOogvGf3P091u9HJ6eToPMODLCC4tNZr8Qg/" class="fa fa-cloud-upload tooltip-social" title="ROUND 1 SUBMISSION">SUBMISSION</a>
                            </li>
                        </ul> -->
                    </nav>
                </div>
            </div>
        </section>
        <!-- PAGE 2 -->
        <section class="floor floor-2">
            <!-- THIS IMAGE WILL BE DISPLAYED ONLY ON MOBILE MODE ( 1024PX AND BELOW ) -->
            <div class="img-mobile-only">
                <img src="images/speaker-thumbs/speaker-vikram.png" alt="" />
            </div>
            <!-- PAGE CONTENT -->
            <div class="cv-page-content">
                <h2 class="border">About the speaker</h2>
                <p> 
                Vikram, a Managing Director at Matrix Partners, is passionate about shaping the India of tomorrow and seeks opportunities to work with driven entrepreneurial teams that are committed to converting the Indian growth story into reality. Having worked as a product developer, start-up team member, non-profit manager, FMCG marketer and strategy consultant, Vikram brings to his work a pragmatic set of lessons learnt about building a business in India.
                <br><br>
                His areas of interest are Education Tech, Local Services, Fin Tech, SMB Tech and Video. His current investments at Matrix Partners include Dailyhunt, Finomena, Five Star, Housejoy, LimeTray, Mswipe, OfBusiness, Razorpay, Ridlr, U2opia Mobile and Loadshare.
                After graduating with a degree in Electronics and Communication engineering from Rashtriya Vidyalaya College of Engineering Bangalore, Vikram worked for short stints with Samsung and then IBM Global Services, where he realised that he revels in more entrepreneurial environments and thus joined a small team in a News Corp company, NDS. In a couple of years, itching to be part of a start-up, he joined the founders of Sensact Applications, a wireless sensor networks company. 
                <br><br>
                He earned his MBA from IIM Bangalore, where he was on the student council and interned at Procter & Gamble Singapore. He continued to explore his passion for start-up companies, by working with several of them part-time. Vikram joined McKinsey & Co. after his MBA and worked across a variety of sectors including mobile media, TV, retail, engineering construction and manufacturing. 

                </p>
                <hr/>
            </div>
        </section>
        <!-- PAGE 3 -->
        <section class="floor floor-3">
            <!-- MOBILE GOOGLE MAP -->
                <div class="mobile-map-container">
                    <div id="mobile-map"></div>
                </div>
            <!-- PAGE CONTENT -->
            <div class="cv-page-content">
                <h2 class="border">CONTACT</h2>
                <p> For any doubts regarding, please contact: </p>

                <h5></h5>
                <!-- TABLE -->
                <ul class="cv-table">
                    <li>
                        <div class="cv-table-left"><i class="cv-icon fa fa-phone-square"></i>Phone</div>
                        <div class="cv-table-right">+91 </div>
                    </li>
                    <li>
                        <div class="cv-table-left"><i class="cv-icon fa fa-envelope"></i>E-mail</div>
                        <div class="cv-table-right"><a href="#">@iimb.ernet.in</a>
                        </div>
                    </li>
                </ul>
               
            </div>
        </section>
        <!-- FOOTER -->
        <footer id="footer">
            <div class="cv-credits">
                Eximius 2017: The Entrepreneurship Summit of IIM Bangalore
            </div>
            <!-- BACK TO TOP BUTTON -->
            <div id="cv-back-to-top" class="tooltip-gototop" title="Go to top"></div>
        </footer>
    </div>


<?php include 'sidebar.php';?>