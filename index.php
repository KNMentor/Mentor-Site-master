<?php
session_start();
require_once 'database.php';

$usersQuery = $db->query('SELECT * FROM news');
$users = $usersQuery->fetchAll();

?>
<!DOCTYPE html>
<html lang="PL">

    <head>
        
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="icon" type="image/gif" href="images/mentor.gif" />
        <title>Mentor</title>
        
        <script>
            
				window.smoothScroll = function(target) {
                    var scrollContainer = target;
                    do { //find scroll container
                        scrollContainer = scrollContainer.parentNode;
                        if (!scrollContainer) return;
                        scrollContainer.scrollTop += 1;
                    } while (scrollContainer.scrollTop == 0);

                    var targetY = 0;
                    do { //find the top of target relatively to the container
                        if (target == scrollContainer) break;
                        targetY += target.offsetTop;
                    } while (target = target.offsetParent);

                    scroll = function(c, a, b, i) {
                        i++; if (i > 30) return;
                        c.scrollTop = a + (b - a) / 30 * i;
                        setTimeout(function(){ scroll(c, a, b, i); }, 20);
                    }
                    // start scrolling
                    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
                }
                
                function hover(description, functionTarget) {
                    console.log(description);
                    document.getElementById(functionTarget).innerHTML = description;
                }
            
            var responsiveSlider = function() {
              var slider = document.getElementById("slider");
              var sliderWidth = slider.offsetWidth;
              var slideList = document.getElementById("slideWrap");
              var count = 1;
              var items = slideList.querySelectorAll("li").length;
              var prev = document.getElementById("prev");
              var next = document.getElementById("next");

              window.addEventListener('resize', function() {
                sliderWidth = slider.offsetWidth;
              });

              var prevSlide = function() {
                if(count > 1) {
                  count = count - 2;
                  slideList.style.left = "-" + count * sliderWidth + "px";
                  count++;
                }
                else if(count = 1) {
                  count = items - 1;
                  slideList.style.left = "-" + count * sliderWidth + "px";
                  count++;
                }
              };

              var nextSlide = function() {
                if(count < items) {
                  slideList.style.left = "-" + count * sliderWidth + "px";
                  count++;
                }
                else if(count = items) {
                  slideList.style.left = "0px";
                  count = 1;
                }
              };

              next.addEventListener("click", function() {
                nextSlide();
              });

              prev.addEventListener("click", function() {
                prevSlide();
              });
                
              setInterval(function() {
                nextSlide()
              }, 8000);
            };

            window.onload = function() {
              responsiveSlider();  
            }

		</script>

    </head>

    <body>
        <div class="sidenav">
          <button id="s-bA" onclick="smoothScroll(document.getElementById('p1'))">O nas</button>
          <button id="s-bB" onclick="smoothScroll(document.getElementById('p2'))">Zespół</button>
          <button id="s-bC" onclick="smoothScroll(document.getElementById('p3'))">Aktualności</button>
          <button id="s-bD" onclick="smoothScroll(document.getElementById('p4'))">Kontakt</button>
        </div>
        
        <div class="landing">
            <div class="container">
                <button id="starting-button" onclick="smoothScroll(document.getElementById('p0'))">
                    <img src="images/mentor.png" 
                                 alt="Just our logo"
                                 class="u-max-full-width image-top" >
                </button>
                            
            </div>
        </div>
        
        
        <div class="landing" id="p0">
            <div class="container">
                <div class="row">

                    <div class="three columns disp">
                        <div class="disp-center ">
                            <button id="bA" onclick="smoothScroll(document.getElementById('p1'))">O nas</button>
                        </div>
                    </div>

                    <div class="three columns disp">
                        <div class="disp-center">
                            <button id="bB" onclick="smoothScroll(document.getElementById('p2'))">Zespół</button>
                        </div>
                    </div>
                    

                    <div class="three columns disp">
                        <div class="disp-center">
                            <button id="bC" onclick="smoothScroll(document.getElementById('p3'))">Aktualności</button>
                        </div>
                    </div>
                    

                    <div class="three columns disp">
                        <div class="disp-center">
                            <button id="bD" onclick="smoothScroll(document.getElementById('p4'))">Kontakt</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div id="p1" class="first-page">
            
            <div class="container center container-margin">
                
                <div class="row">
                    <div class="twelve columns div-background padd">
                        <p>Koło Naukowe Mentor zostało utworzone przez grupę studentów Wydzialu Zarządzania przy Katedrze Informatyki Stosowanej. Naszym założeniem jest pogłębianie tajników wiedzy z zakresu programowania.</p>
                    </div>
                </div>
                
                <div class="row disp">
                    <div class="two columns disp-center">
                        <img alt="C# RULES!" src="images/csharp.png" class="u-max-full-width">
                    </div>
                    <div class="two columns disp-center">
                        <img alt="Make Your Wolrd beautiful" src="images/css.png" class="u-max-full-width">
                    </div>
                    <div class="two columns disp-center">
                        <img alt="The best tool for Web developers" src="images/js.png" class="u-max-full-width">
                    </div>
                    <div class="two columns disp-center">
                        <img alt="Basic." src="images/html.png" class="u-max-full-width">
                    </div>
                    <div class="two columns disp-center">
                        <img alt="Better then Html" src="images/net.png" class="u-max-full-width">
                    </div>
                </div>
            </div>
            
        </div>
        
        
        <div id="p2" class="second-page">
            <div class="container">
                <div class="row disp ">
                    <div class="twelve columns padd-header ">
                        Nasz Zespół:
                    </div>
                </div>
                
                <div class="row disp ">
                    <div class="twelve columns padd-header-bot ">
                        Najedź na zdjęcie by dowiedzieć się więcej.
                    </div>
                </div>
                
                <div class="row disp-change">
                    <div class="two columns">
                        <img alt="Jerzy Duda" 
                             src="images/skipper.png" 
                             class="u-max-full-width" 
                             onmouseover="hover('Adiunkt w Katedrze Informatyki Stosowanej na Wydziale Zarządzania AGH.<br/>Odpowiedzialny jest za rozwój naukowy oraz wsparcie merytoryczne.', 'jd')"
                             onmouseout="hover('dr inż. Jerzy Duda', 'jd')">
                    </div>
                    
                    <div class="four columns second-row-height disp" id="jd">
                        <p>dr inż. Jerzy Duda</p>
                    </div>
                                        
                    <div class="two columns">
                        <img alt="Sabina Golonka" 
                             src="images/kowalski.png" 
                             class="u-max-full-width"
                             onmouseover="hover('Studentka III roku Informatykii i ekonometrii. Pasjonatka podróży, informatyki i zarządzania.<br/> W zarządzie pełni rolę prezesa skupiając się na koordynowaniu projektów.', 'sg')"
                             onmouseout="hover('Sabina Golonka', 'sg')">
                    </div>
                    
                    <div class="four columns second-row-height disp" id="sg">
                        <p>Sabina Golonka</p>
                    </div>

                </div>  
                
                <div class="row disp-change">
                    <div class="two columns">
                        <img alt="Monika Wielgus" 
                             src="images/private.png" 
                             class="u-max-full-width"
                             onmouseover="hover('Studentka V roku Informatyki i Ekonometrii pasjonująca się programowaniem, szczególnie w C#. Ponadto wielbicielka tańca, meczy piłki nożnej oraz dźwięku skrzypiec.', 'mw')"
                             onmouseout="hover('Monika Wielgus', 'mw')">
                    </div>
                    
                    <div class="four columns second-row-height disp" id="mw">
                        <p>Monika Wielgus</p>
                    </div>
                    <div class="two columns">
                        <img alt="Piotr Gretszel" 
                             src="images/ricko.png" 
                             class="u-max-full-width"
                             onmouseover="hover('Student III roku Informatyki i Ekonometrii. Interesuje się analizą danych i zagadnieniami ekonometrycznymi. W dziedzinie informatyki związany z środowiskiem .NET, językiem C# i technikami webowymi. Prywatnie miłośnik aktwyności sportowej, muzyki i poznawania świata. Jego rola w zarządzie to wspomaganie podejmowania decyzji i służenie dobrą radą.', 'pg')"
                             onmouseout="hover('Piotr Gretszel', 'pg')">
                    </div>
                    <div class="four columns second-row-height disp" id="pg">
                        <p>Piotr Gretszel</p>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div id="p3" class="third-page disp-column">
            
            <div class="div-background " id="slider">
                <ul id="slideWrap"> 
                    <?php
						foreach ($users as $user) {
							echo "
                            
                            <li>
                                <p>{$user['content']}</p>
                                <p>{$user['date']}</p>
                            </li>";
						}
						?>
                </ul>
            </div> 
            
            <div class="container margin-bottom">                   
                <button id="prev"><i  class="demo-icon icon-left-dir">&#xe800;</i></button>
                <button id="next"><i class="demo-icon icon-right-dir">&#xe801;</i></button>
            </div>
        </div>
        
        
        <div id="p4" class="last-page">
            <div class="container" id="last-container">
                <div class="row  disp">
                    <div class="one-third column">
                        <div class="row ">
                            <img src="images/mentor.png" 
                                 alt="Just our logo"
                dd                 class="u-max-full-width image-foot" >
                        </div>
                        <div class="row">
                            <img src="images/agh.png" 
                                 alt="Just our logo"
                                 class="u-max-full-width image-foot" >
                        </div>
                        <div class="row">
                            <img src="images/wz.png" 
                                 alt="Just our logo"
                                 class="u-max-full-width image-foot" >
                        </div>
                    </div>
                    <div class="one-third column">
                        <div class="row div-background div-min">
                            Wydział Zarządzania<br/>
								Akademia Górniczo-Hutnicza<br/>
								im. Stanisława Staszica<br/>
								ul. Gramatyka 10<br/>
								30-067 Kraków<br/>
								NIP AGH: 6750001923<br/>
								kolo.mentor@gmail.com<br/>
                            <a href="mailto:kolo.mentor@gmail.com" class="icon-link"><i class="demo-icon icon-gmail">&#xe803;</i></a>
                        </div>
                    </div>
                    <div class="one-third column">
                        <div class="row ">
                            <a href="https://www.facebook.com/KNMentor/" target="_blank" class="icon-link fb"><i class="demo-icon icon-facebook">&#xf09a;</i></a>
                        </div>
                        <div class="row">
                            <a href="https://www.dropbox.com/s/mds2m7vctxs7a4q/Statut_KN_Mentor.pdf?dl=0" target="_blank" class="icon-link db"><i class="demo-icon icon-dropbox">&#xf16b;</i></a>
                        </div>
                        <div class="row">
                            <a href="https://github.com/KNMentor" target="_blank" class="icon-link gh"><i class="demo-icon icon-github-circled-alt2">&#xf056;</i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row ">
                <div class="twelve columns div-background  footer-foot">
                     Copyright &copy; 2018 by KN Mentor, Desing&amp;Development: Sabina Golonka, Krzysztof Nowicki, Tomasz Wieroński
                </div>
            </div>
        </div>
        
    </body>
    
</html>
    