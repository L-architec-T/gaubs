<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Gaub's Midi Couverture</title>
    <link rel="icon" href="img/logo_png.png" type="image/png">
    <meta http-equiv="cache-control" content="max-age=31536000" />
    <meta name="description" content="Toiture neuve, rénovation, réparation, zinguerie."/>
    <meta name="theme-color" content="#0d6700">
    <meta name="keywords" content="gaubs, toiture, rénovation, réparation, zinguerie" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no">-->
    <meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=4">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Gaub's Midi Couverture" />
    <meta property="og:url" content="https://gaubscouverture.fr" />
    <meta property="og:description" content="Toiture neuve, rénovation, réparation, zinguerie."/>
    <meta property="og:image" content="./img/carte_png.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:url" content="./img/carte_png.png" />
    <meta property="og:image:secure_url" content="./img/carte_png.png" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@DiscordDevXB">
    <meta name="twitter:title" content="Gaub's Midi Couverture">
    <meta name="twitter:description" content="Toiture neuve, rénovation, réparation, zinguerie.">
    <meta name="twitter:image" content="./img/carte_png.png" />

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Gaub's Midi Couverture">
    <meta name="msapplication-TileImage" content="./img/144.png">
    <meta name="msapplication-TileColor" content="#0d6700">

    <link rel="apple-touch-icon" href="./img/152.png">
    <link rel="preconnect" href="http://fonts.googleapis.com">
    <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>
    <link href="http://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css"/>
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css"/>
    <link rel="manifest" href="/manifest.json">
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/service-worker.js')
                .then(function(registration) {
                    console.log('Service Worker registered with scope:', registration.scope);
                })
                .catch(function(error) {
                    console.error('Service Worker registration failed:', error);
                });
        }
    </script>
    <script>
        window.onload = () => {
            'use strict';

            if ('serviceWorker' in navigator) {
              navigator.serviceWorker
                       .register('./service-worker.js');
            }
          }
    </script>
</head>
<body>

<section id="hero" class="text-white tm-font-big tm-parallax">

    <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">
        <div class="container">
            <div class="tm-next">
                <a href="#hero" class="navbar-brand" style="font-family: 'Anta', sans-serif;">Gaub's Couverture</a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="#introduction">Présentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="#work">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="javascript:void(0);"
                           onclick="redirectToEditPage()">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner" style="z-index: 200;">
            <h2 class="tm-hero-title" style="font-family: 'Anta', sans-serif;">Gaub's Midi Couverture</h2>
            <p class="tm-hero-subtitle" data-key="subtitle">
                Toiture neuve, rénovation, réparation, zinguerie.
                <br/>
            </p>
        </div>
    </div>

    <div class="tm-next tm-intro-next">
        <a href="#introduction" class="text-center tm-down-arrow-link">
            <i class="fas fa-3x fa-caret-down tm-down-arrow"></i>
        </a>
    </div>
</section>

<section id="introduction" class="tm-section-pad-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="img/carte_png.png" alt="Image" class="img-fluid tm-intro-img image-animee"
                     style="border-radius: 10px;"/>
            </div>
            <div class="col-lg-6">
                <div class="tm-intro-text-container">
                    <h2 class="tm-text-primary mb-4 tm-section-title" data-key="introduction"
                        style="font-family: 'Anta', sans-serif;">Introduction</h2>
                    <p class="mb-4 tm-intro-text" data-key="introduction2">
                        Ici se trouvera l'introduction du metier
                        expliquant se qu'ils font.
                    </p>
                    <p class="mb-5 tm-intro-text" data-key="introduction3">
                        Second paragraphe gaubscouverture. Remerciement. </p>
                    <div class="tm-next">
                        <a href="#work" class="tm-intro-text tm-btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
</section>

<section id="work" class="tm-section-pad-top">
    <div class="container tm-container-gallery">
        <div class="row">
            <div class="text-center col-12">
                <h2 class="tm-text-primary tm-section-title mb-4" data-key="galerie"
                    style="font-family: 'Anta', sans-serif;">Galerie</h2>
                <p class="mx-auto tm-work-description" data-key="galerie2">
                    Paragraphe expliquant les photos ci-dessous.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mx-auto tm-gallery-container" style="border-radius: 193px;">
                    <div class="grid tm-gallery">
                        <a href="img/24.jpeg">
                            <figure class="effect-honey tm-gallery-item">
                                <img src="img/24.jpeg" alt="Image" class="img-fluid">
                                <figcaption>
                                    <!-- <h2><i>Un <span>Petit</span> Mot</i></h2> -->
                                </figcaption>
                            </figure>
                        </a>
                        <a href="img/gallery-img-02.jpg">
                            <figure class="effect-honey tm-gallery-item">
                                <img src="img/23.jpeg" alt="Image" class="img-fluid">
                                <figcaption>
                                    <!-- <h2><i>Un <span>Petit</span> Mot</i></h2> -->
                                </figcaption>
                            </figure>
                        </a>
                        <a href="img/22.jpeg">
                            <figure class="effect-honey tm-gallery-item">
                                <img src="img/22.jpeg" alt="Image" class="img-fluid">
                                <figcaption>
                                    <!-- <h2><i>Un <span>Petit</span> Mot</i></h2> -->
                                </figcaption>
                            </figure>
                        </a>
                        <a href="img/21.jpeg">
                            <figure class="effect-honey tm-gallery-item">
                                <img src="img/21.jpeg" alt="Image" class="img-fluid">
                                <figcaption>
                                    <!-- <h2><i>Un <span>Petit</span> Mot</i></h2> -->
                                </figcaption>
                            </figure>
                        </a>
                        <a href="img/20.jpeg">
                            <figure class="effect-honey tm-gallery-item">
                                <img src="img/20.jpeg" alt="Image" class="img-fluid">
                                <figcaption>
                                    <!-- <h2><i>Un <span>Petit</span> Mot</i></h2> -->
                                </figcaption>
                            </figure>
                        </a>
                        <a href="img/19.jpeg">
                            <figure class="effect-honey tm-gallery-item">
                                <img src="img/19.jpeg" alt="Image" class="img-fluid">
                                <figcaption>
                                    <!-- <h2><i>Un <span>Petit</span> Mot</i></h2> -->
                                </figcaption>
                            </figure>
                        </a>
                        <a href="img/18.jpeg">
                            <figure class="effect-honey tm-gallery-item">
                                <img src="img/18.jpeg" alt="Image" class="img-fluid">
                                <figcaption>
                                    <!-- <h2><i>Un <span>Petit</span> Mot</i></h2> -->
                                </figcaption>
                            </figure>
                        </a>
                        <a href="img/17.jpeg">
                            <figure class="effect-honey tm-gallery-item">
                                <img src="img/17.jpeg" alt="Image" class="img-fluid">
                                <figcaption>
                                    <!-- <h2><i>Un <span>Petit</span> Mot</i></h2> -->
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="work" class="tm-section-pad-top">
    <div class="container tm-container-gallery">
        <div class="row">
            <div class="text-center col-12">
                <h2 class="tm-text-primary tm-section-title mb-4" data-key="what"
                    style="font-family: 'Anta', sans-serif;">Où sommes nous ?</h2>
                <p class="mx-auto tm-work-description" data-key="what2">
                    Paragraphe expliquant la zone de travail.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mx-auto tm-gallery-container">
                    <center>
                        <iframe
                                width="100%"
                                height="450"
                                frameborder="0"
                                style="border:0;border-radius:5px;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1446.8698421788856!2d3.368043935550154!3d43.507765771109284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b16bd7611b9f81%3A0x4cffa75cd9f36779!2s2%20Rue%20Emile%20Zola%2C%2034720%20Caux!5e0!3m2!1sfr!2sfr!4v1709204410557!5m2!1sfr!2sfr"
                                allowfullscreen
                        ></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="work" class="tm-section-pad-top">
    <div class="container tm-container-gallery">
        <div class="row">
            <div class="text-center col-12">
                <h2 class="tm-text-primary tm-section-title mb-4" data-key="horaires"
                    style="font-family: 'Anta', sans-serif;">Horaires d'ouverture</h2>
                <p class="mx-auto tm-work-description" data-key="horaires2">
                    Vous trouverez ci-dessous nos horaires d'ouverture.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mx-auto tm-gallery-container" style="max-width:none;">
                    <center>
                        <table>
                            <tr>
                                <th>Jour</th>
                                <th>Heure d'ouverture</th>
                                <th>Heure de fermeture</th>
                            </tr>
                            <tr>
                                <td>Lundi</td>
                                <td style="color:green" data-key="Lundi">7h</td>
                                <td style="color:green" data-key="Lundi2">16h</td>
                            </tr>
                            <tr>
                                <td>Mardi</td>
                                <td style="color:green" data-key="Mardi">7h</td>
                                <td style="color:green" data-key="Mardi2">16h</td>
                            </tr>
                            <tr>
                                <td>Mercredi</td>
                                <td style="color:green" data-key="Mercredi">7h</td>
                                <td style="color:green" data-key="Mercredi2">16h</td>
                            </tr>
                            <tr>
                                <td>Jeudi</td>
                                <td style="color:green" data-key="Jeudi">7h</td>
                                <td style="color:green" data-key="Jeudi2">16h</td>
                            </tr>
                            <tr>
                                <td>Vendredi</td>
                                <td style="color:green" data-key="Vendredi">7h</td>
                                <td style="color:green" data-key="Vendredi2">16h</td>
                            </tr>
                            <tr>
                                <td>Samedi</td>
                                <td style="color:red" data-key="Samedi">Fermé</td>
                                <td style="color:red" data-key="Samedi2">Fermé</td>
                            </tr>
                            <tr>
                                <td>Dimanche</td>
                                <td style="color:red" data-key="Dimanche">Fermé</td>
                                <td style="color:red" data-key="Dimanche2">Fermé</td>
                            </tr>
                        </table>
                    </center>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="tm-section-pad-top tm-parallax-2">
    <div class="container tm-container-contact">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4 tm-section-title" data-key="Contact" style="font-family: 'Anta', sans-serif;">
                    Contact</h2>
                <div class="mb-5 tm-underline"></div>
                <p class="mb-5" data-key="Contact2">
                    Paragraphe expliquant que tout le monde est libre de prendre contact.
                </p>
            </div>

            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
                <a href="tel:0763568670" class="tm-contact-item-link">
                    <i class="fas fa-3x fa-phone mr-4"></i>
                    <span class="mb-0" data-key="num">0763568670</span>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
                <a href="mailto:juanita.henneville@gmail.com" class="tm-contact-item-link">
                    <i class="fas fa-3x fa-envelope mr-4"></i>
                    <span class="mb-0" data-key="mail">juanita.henneville@gmail.com</span>
                </a>
            </div>
            <!--
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item">
              <a href="https://www.google.com/maps" class="tm-contact-item-link">
                <i class="fas fa-3x fa-map-marker-alt mr-4"></i>
                <span class="mb-0">Location Maps</span>
              </a>
            </div>
            -->
        </div>
    </div>
    <footer class="text-center small tm-footer">
        <p class="mb-0">
            Copyright &copy; 2024 Gaub's Midi Couverture

            By <a rel="nofollow" href="https://gaubsmidi.fr" class="tm-footer-link">X-Development</a>
        </p>
    </footer>
</section>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="slick/slick.min.js"></script>
<script src="magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function redirectToEditPage() {
        window.location.href = 'edit/index.php';
    }
</script>
<script>
    function createJsonFromEditableContent() {
    var editableElements = document.querySelectorAll('[contenteditable="true"]');

    function updateJson() {
        var jsonData = {};

        editableElements.forEach(function (element) {
            var key = element.getAttribute('data-key');
            var value = element.innerText;

            jsonData[key] = value;
        });

        // Ajoute une chaîne de requête unique pour éviter le cache
        var timestamp = new Date().getTime();
        var url = 'save.php?cacheBuster=' + timestamp;

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(jsonData),
        })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error(error));
    }

    editableElements.forEach(function (element) {
        element.addEventListener('input', updateJson);
    });
}

createJsonFromEditableContent();

fetch('edit/edit.json?cacheBuster=' + new Date().getTime())
    .then(response => response.json())
    .then(data => {
        Object.keys(data).forEach(function(key) {
            var elements = document.querySelectorAll('[data-key="' + key + '"]');
            elements.forEach(function(element) {
                element.innerText = data[key];
            });
        });
    })
    .catch(error => console.error(error));
</script>
<script>

    function getOffSet(){
      var _offset = 450;
      var windowHeight = window.innerHeight;

      if(windowHeight > 500) {
        _offset = 400;
      }
      if(windowHeight > 680) {
        _offset = 300
      }
      if(windowHeight > 830) {
        _offset = 210;
      }

      return _offset;
    }

    function setParallaxPosition($doc, multiplier, $object){
      var offset = getOffSet();
      var from_top = $doc.scrollTop(),
        bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
      $object.css({"background-position" : bg_css });
    }

    // Parallax function
    // Adapted based on https://codepen.io/roborich/pen/wpAsm
    var background_image_parallax = function($object, multiplier, forceSet){
      multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
      multiplier = 1 - multiplier;
      var $doc = $(document);
      // $object.css({"background-attatchment" : "fixed"});

      if(forceSet) {
        setParallaxPosition($doc, multiplier, $object);
      } else {
        $(window).scroll(function(){
          setParallaxPosition($doc, multiplier, $object);
        });
      }
    };

    var background_image_parallax_2 = function($object, multiplier){
      multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
      multiplier = 1 - multiplier;
      var $doc = $(document);
      $object.css({"background-attachment" : "fixed"});
      $(window).scroll(function(){
        var firstTop = $object.offset().top,
            pos = $(window).scrollTop(),
            yPos = Math.round((multiplier * (firstTop - pos)) - 186);

        var bg_css = 'center ' + yPos + 'px';

        $object.css({"background-position" : bg_css });
      });
    };

    $(function(){
      // Hero Section - Background Parallax
      background_image_parallax($(".tm-parallax"), 0.30, false);
      background_image_parallax_2($("#contact"), 0.80);

      // Handle window resize
      window.addEventListener('resize', function(){
        background_image_parallax($(".tm-parallax"), 0.30, true);
      }, true);

      // Detect window scroll and update navbar
      $(window).scroll(function(e){
        if($(document).scrollTop() > 120) {
          $('.tm-navbar').addClass("scroll");
        } else {
          $('.tm-navbar').removeClass("scroll");
        }
      });

      // Close mobile menu after click
      $('#tmNav a').on('click', function(){
        $('.navbar-collapse').removeClass('show');
      })

      // Scroll to corresponding section with animation
      $('#tmNav').singlePageNav();

      // Add smooth scrolling to all links
      // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
      $("a").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;

          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 400, function(){
            window.location.hash = hash;
          });
        } // End if
      });

      // Pop up
      $('.tm-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: { enabled: true }
      });

      // Gallery
      $('.tm-gallery').slick({
        dots: true,
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 2,
        responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
      });
    });
</script>
</body>
</html>