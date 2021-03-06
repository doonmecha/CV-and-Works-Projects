<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Indie Pixel Love</title>
    <link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="print.css" media="print" />
    <script type="text/javascript" src="dyna.js"></script>
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
    <div id="wrapper">
        <!-- #wrapper -->
        <header>
            <!-- header -->
            <h1><a href="#"></a></h1>
            <h2></h2> </header>
        <!-- end of header -->
        <?php include("menu.php"); ?>
            <!-- end of top nav -->
            <section id="main">
                <!-- #main content and sidebar area -->
                <section id="content">
                    <!-- #content -->
                    <article>
                        <h2>Bienvenue sur Indie Pixel Love</h2>
                        <!--<p><div id="slideshow">
   <ul id="sContent">
        <li><img src="aeronef.png" alt="Image bleue" /></li>
        <li><img src="screenshot.png" alt="Image verte" /></li>
        <li><img src="hud.png" alt="Image brune" /></li>
    </ul>
</div>
                    </p> -->
                    </article>
                    <article>
                        <h2 class="news1"><a href="#">News du jour</a></h2>
                        <p>Site web en cours de construction, revenez plus tard!</p>
                        <div id="ShowText"></div>
                        <p><img src="" /></p>
                    </article>
                </section>
                <!-- end of #content -->
                <aside id="sidebar">
                    <!-- sidebar -->
                    <h3><script type="text/javascript">
tday=new Array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
tmonth=new Array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Décembre");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
if(nyear<1000) nyear+=1900;
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
if(nmin<=9) nmin="0"+nmin
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<div id="clockbox"  style="font:11pt Arial; color:#0094FF; font-weight: bolder;"></div></h3>
                    <ul>
                        <li>
                            <li>
                                <audio controls>
                                    <source src="Eternal.ogg.ogg" type="audio/ogg">
                                    <source src="horse.mp3" type="audio/mpeg"> Your browser does not support the audio element. </audio>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                    </ul>
                    <h3 id="gui">Nos guides</h3>
                    <ul>
                        <li><img src="logorpgmaker.png" alt="" /></li>
                        <li><img src="Program-logo-rpg-maker-2003en.png" alt="" /></li>
                    </ul>
                    <h3 id="suivez">Suivez nous</h3>
                    <ul id="link2">
                        <li id="">
                            <a id="link3" href="#"><img id="face" src="image_1.png" alt="" style="border: 0;">
                                <image></image>
                            </a>
                        </li>
                        <li>
                            <a id="link4" href="#"></a>
                        </li>
                    </ul>
                </aside>
                <!-- end of sidebar -->
            </section>
            <!-- end of #main content and sidebar-->
            <footer>
                <section id="footer-area">
                    <section id="footer-outer-block">
                        <aside class="footer-segment">
                            <h4></h4>
                            <ul>
                                <li><a href="#">Gamejolt</a></li>
                                <li><a href="#">IndieDb</a></li>
                                <li>
                                    <a href="#"></a>Steam</li>
                            </ul>
                        </aside>
                        <!-- end of #first footer segment -->
                        <aside class="footer-segment">
                            <h4></h4>
                            <ul>
                                <li><a href="#">Itch.io</a></li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </aside>
                        <!-- end of #second footer segment -->
                        <aside class="footer-segment">
                            <h4></h4>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </aside>
                        <!-- end of #third footer segment -->
                        <aside class="footer-segment">
                            <h4>En construction</h4>
                            <p>&copy; 2016 <a href="#">IndiePixelLove.com</a> </p>
                            </h4>
                        </aside>
                        <!-- end of #fourth footer segment -->
                    </section>
                    <!-- end of footer-outer-block -->
                </section>
                <!-- end of footer-area -->
            </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="anim.js"></script>
</body>

</html>