<?php
  date_default_timezone_set("America/Montreal");
  header("X-XSS-Protection: 0");
  header('X-Frame-Options: SAMEORIGIN');
?><!DOCTYPE html>
<html class="no-js" lang="en_CA">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Freedom 13 – Your health and lifestyle revolution</title>
    <meta name="description" content="Freedom 13 is a life-changing educational platform designed to change how you live">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="http://freedom-13.com">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff ">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff ">

    <link rel="stylesheet" href="assets/styles/normalize.css">
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/swiper.min.css">
    <link rel="stylesheet" href="assets/styles/magnific-popup.css">

    <!-- <link rel="stylesheet" href="assets/styles/main.min.css"> -->
    <script src="assets/scripts/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body>

    <header class="site-header">
      <div class="wrap site-header__container">
        <div class="site-header__cta">
          <a href="https://calendly.com/kristopher/book-a-call-with-kris" title="Call Kris">
            <?= file_get_contents("assets/images/phone.svg") ?> Book a call with kris
          </a>
        </div>
        <div class="site-header__menu">
          <a href="https://calendly.com/kristopher/book-a-call-with-kris"><?= file_get_contents("assets/images/hamburger.svg") ?></a>
        </div>
        <h1 class="site-logo"><img src="assets/images/freedom-13-logo.png" alt="Freedom 13"></h1>
      </div>
    </header>

    <main>
      <div class="hero">
        <div class="wrap">
          <a href="https://www.youtube.com/watch?v=LMBKT8ntM0I" data-toggle="lightbox" class="hero__play">
            <?= file_get_contents("assets/images/play.svg") ?>
          </a>
          <div class="hero__caption">
            <h1>Your health and lifestyle revolution</h1>
            <p>A solution for those who have tried it all</p>
          </div>
        </div>
      </div>
      <section class="section about">
        <div class="wrap">
          <h1>Freedom 13 is a life-changing educational platform<br>
            designed to change how you live</h1>
          <h2>what You will achieve:</h2>

          <ul class="list-inline">
            <li>
              <h3 class="h1">Knowledge</h3>
              <p>to understand your<br>
              body’s specific needs</p>
            </li>
            <li>
              <h3 class="h1">Wisdom </h3>
              <p>to change your habits <br>
              without fighting yourself</p>
            </li>
            <li>
              <h3 class="h1">Courage</h3>
              <p>to face the fears<br>
              which hold you back</p>
            </li>
            <li>
              <h3 class="h1">Happiness</h3>
              <p>of a healthier body<br>
              and lifestyle</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="section process">
        <div class="wrap text-center">
          <h1>Simple Processes To Change Your Habits</h1>
          <h2>How You Will Succeed</h2>
          <hr>
        </div>
        <div class="process-steps cf">
          <div class="process-steps__slider">
            <div class="swiper-container">
                <ul class="swiper-wrapper slider">
                  <li class="swiper-slide"><img src="assets/images/gallery-1/group_1.jpg"></li>
                  <li class="swiper-slide"><img src="assets/images/gallery-1/group_2.jpg"></li>
                  <li class="swiper-slide"><img src="assets/images/gallery-1/group_3.jpg"></li>
                  <li class="swiper-slide"><img src="assets/images/gallery-1/group_4.jpg"></li>
                </ul>
                <div class="swiper-button-prev swiper-button-prev--0"></div>
                <div class="swiper-button-next swiper-button-next--0"></div>
                <div class="swiper-pagination swiper-pagination--0"></div>
            </div>
          </div>
          <ul class="process-steps__list">
            <li>
              <img src="assets/images/icon_apple.png" width="64" height="64" alt="Icon Apple">
              <div class="contain">
                <h3>WEEKLY GROUP SEMINARS</h3>
                <p>Learn the simple fundamentals of nutrition, exercise, lifestyle and weight management with the support of a group.</p>
              </div>
            </li>
            <li>
              <img src="assets/images/icon_talk.png" width="64" height="64" alt="Icon Talk">
              <div class="contain">
                <h3>WEEKLY 1 ON 1 coaching CALLS</h3>
                <p>Work with Kris on a one-on-one basis to solve individual issues and achieve personal breakthroughs.</p>
              </div>
            </li>
            <li>
              <img src="assets/images/icon_clock.png" width="64" height="64" alt="Icon Clock">
              <div class="contain">
                <h3>ANYTIME ACCESS COACHING CALLS</h3>
                <p>Access Kris by phone anytime to work and solve problems on the fly.</p>
              </div>
            </li>
            <li>
              <img src="assets/images/icon_bike.png" width="64" height="64" alt="Icon Bike">
              <div class="contain">
                <h3>FIT TRIPS</h3>
                <p>Explore the wide world of fitness by participating in extra-curricular activities with other graduates from this program.</p>
              </div>
            </li>
            <li>
              <img src="assets/images/icon_time.png" width="64" height="64" alt="Icon Time">
              <div class="contain">
                <h3>FIT shops</h3>
                <p>Get practical and learn hands on with  my Fitness and Nutrition workshops.</p>
              </div>
            </li>
          </ul>
        </div><!-- .process-steps -->

      </section><!-- .process -->

      <aside class="section cta">
        <div class="wrap">
          <h1 class="h2">are you ready to take control of your happiness?</h1>
          <a href="https://calendly.com/kristopher/book-a-call-with-kris" class="btn" role="button">BOOK A CALL</a>
        </div>
      </aside>

      <section class="section story">
        <div class="story-slider story-slider--left">
          <div class="swiper-container">
              <ul class="swiper-wrapper slider">
                <li class="swiper-slide"><img src="assets/images/gallery-2/Kris_before2.jpg" alt="Kris Before Side"></li>
                <li class="swiper-slide"><img src="assets/images/gallery-2/Kris_before1.jpg" alt="Kris Before Front"></li>
              </ul>
              <div class="swiper-button-prev swiper-button-prev--2 swiper-button-prev--1"></div>
              <div class="swiper-button-next swiper-button-next--2 swiper-button-next--1"></div>
              <div class="swiper-pagination swiper-pagination--1"></div>
          </div>
        </div>
        <div class="story-slider story-slider--right">
          <div class="swiper-container">
              <ul class="swiper-wrapper slider">
                <li class="swiper-slide"><img src="assets/images/gallery-3/Kris_after1.jpg" alt="Kris After Front"></li>
                <li class="swiper-slide"><img src="assets/images/gallery-3/Kris_after2.jpg" alt="Kris After Side"></li>
              </ul>
              <div class="swiper-button-prev swiper-button-prev--2 swiper-button-prev--1"></div>
              <div class="swiper-button-next swiper-button-next--2 swiper-button-next--1"></div>
              <div class="swiper-pagination swiper-pagination--2"></div>
          </div>
        </div>
        <div class="wrap">
          <h1>MY STORY</h1>
          <h2>I USED TO BE OVERWEIGHT, unhealthy AND UNHAPPY</h2>
          <hr>
          <p>For many years I struggled. I tried so many different programs and diets to curb my unhealthy lifestyle, but found that nothing worked nearly as well as wearing baggy clothing and hiding from the world.</p>

          <p>Tell me if these sound familiar:</p>

          <ul class="list-inline">
            <li>
              <h3>Physically</h3>
              <p>Health problems, lack of strength and stamina, low libido and sex drive.</p>
            </li>
            <li>
              <h3>Emotionally</h3>
              <p>Poor self-confidence / self-esteem, difficulty managing depression, anxiety, stress, and trouble bouncing back from adversity.</p>
            </li>
            <li>
              <h3>Spiritually</h3>
              <p>Little meaning and purposein life, challenges in buildingand maintaining personalrelationships, and lack ofcontentment.</p>
            </li>
          </ul>

          <p>What started as an oversight of youth became a massive issue in my adult life. My poor health weighed me down, wore me thin, and prevented me from being my best self. When I took a critical look at my life, I knew I needed a change, but nothing worked.</p>

          <p>Eventually, I had to take a hard look at my failures, and create something new that I knew would work. What I created didn’t just treat the symptoms that were plaguing me, but fundamentally changed the habits, lifestyle, and mindset that I had been using to limit myself for far too long.</p>

          <p>After years of perfecting my system, I, Kristopher Simpson, am now considered a Body Transformation expert and a veteran of the Fitness, Nutrition & Weight-Loss industry. In an endless pursuit to help other people achieve the freedom I have, I am also an Author, Speaker, Coach, and Owner of Bodies By Design Personal Training Studios.</p>
        </div>

      </section><!-- .story -->

      <section class="section team">
        <div class="wrap">
          <h1>the freedom13 team</h1>
          <h2>meet the expert coaches that dedicate themselves to empowering you</h2>

          <ul class="list-inline">
            <li>
              <img src="assets/images/team/kristina.jpg" alt="Kristina" width="150" height="150">
              <h3 class="blue">Kristina Chester</h3>
              <p class="text-upper">Registered Dietician</p>
            </li>
            <li>
              <img src="assets/images/team/kris-simpson.jpg" alt="Kris Simpson" width="150" height="150">
              <h3 class="blue">Kris Simpson</h3>
              <p class="text-upper">body transformation coach</p>
            </li>
            <li>
              <img src="assets/images/team/noreen.jpg" alt="Noreen" width="150" height="150">
              <h3 class="blue">Noreen Kassam</h3>
              <p class="text-upper">Psychosomatic Practitioner</p>
            </li>
          </ul>
        </div>
      </section><!-- .team -->

      <section class="section testimonials">
        <div class="wrap">
          <h1>happy words</h1>
          <h2>from people who have found freedom through my program</h2>
          <hr>
          <div class="swiper-container testimonial-slider">
            <ul class="swiper-wrapper slider">
              <li class="swiper-slide">
                <div class="testimonial">
                  <div class="testimonial__images">
                    <figure>
                      <img src="assets/images/marybefore.jpg" alt="Mary Before" width="186" height="186">
                      <figcaption>Before</figcaption>
                    </figure>
                    <figure>
                      <img src="assets/images/maryafter.jpg" alt="Mary After" width="186" height="186">
                      <figcaption>After</figcaption>
                    </figure>
                  </div>
                  <blockquote>
                    <p>It is hard work, but so very rewarding.  The changes are obviously evident to everyone around me, and I'm slowly starting to grasp, yep, they're talking about me.  The one that's looking for more fun, the one that adds her opinions to group conversations, the one who's not hiding in basic black wardrobe clothing anymore, and we could go on and on?.  From all the years of dieting, this program has made the most sense for me and I am forever changed.</p>
                    <cite><a href="http://www.bodiesbydesign.ca/the-results/profiles-in-progress-weight-loss-exercise-results/mary-acquires-the-fitness-habit-for-success/" data-toggle="lightbox">Mary</a></cite>
                  </blockquote>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="testimonial">
                  <div class="testimonial__images">
                    <figure>
                      <img src="assets/images/Susan-K_before.png" alt="Susie Before" width="186" height="186">
                      <figcaption>Before</figcaption>
                    </figure>
                    <figure>
                      <img src="assets/images/Susan-K_after.png" alt="Susie After" width="186" height="186">
                      <figcaption>After</figcaption>
                    </figure>
                  </div>
                  <blockquote>
                    <p>I think for me the 'aha' moment was realizing that this ​program ​was not a diet that had a beginning and an end, that it was going to be something that was a lifestyle change and was going to be forever. 12 weeks is a great foundation of learning and provides the coaching and support to bring about new habits for health, exercise, nutrition and for health​.  It truly was transformational​.</p>
                    <cite><a href="http://www.bodiesbydesign.ca/the-results/client-star-profiles-weight-loss-exercise-results/decades-diets-results/" data-toggle="lightbox">Susan</a></cite>
                  </blockquote>
                </div>
              </li>
              <li class="swiper-slide">
                <div class="testimonial">
                  <div class="testimonial__images">
                    <figure>
                      <img src="assets/images/cattibefore.jpg" alt="Catti Before" width="186" height="186">
                      <figcaption>Before</figcaption>
                    </figure>
                    <figure>
                      <img src="assets/images/cattiafter.jpg" alt="Catti After" width="186" height="186">
                      <figcaption>After</figcaption>
                    </figure>
                  </div>
                  <blockquote>
                    <p>This program worked for me because it wasn't like a  typical restrictive diet that I have been on countless times only to gain all my weight back</p>
                    <cite><a href="#" data-toggle="lightbox">Catti</a></cite>
                  </blockquote>
                </div>
              </li>
            </ul>
            <div class="swiper-button-prev swiper-button-prev--3"></div>
            <div class="swiper-button-next swiper-button-next--3"></div>
            <div class="swiper-pagination swiper-pagination--3"></div>

          </div>

          <p><small>Before and after photos do not depict typical 12 week results. My program is intended as a foundation for long-term transformation.</small></p>
        </div>
      </section>

      <section class="section program-demo">
        <div class="wrap">
          <h1>this program is not for everyone...</h1>

          <div class="program-demo__for">
            <h2>who this <em>is</em> for</h2>
            <ul>
              <li>Those looking to transform their life, as well as their health</li>
              <li>Those ready to become their best self, not just their thinner self</li>
              <li>Those who have “done it all” but aren’t ready to quit</li>
              <li>Those who are dedicated to personal development</li>
              <li>Those looking for Freedom from the problems and insecurity of poor health</li>
            </ul>
          </div>
          <div class="program-demo__not">
            <h2>who this is <em>NOT</em> for</h2>
            <ul>
              <li>Those looking for a grab-and-go diet</li>
              <li>Those looking to cut pounds without hard work</li>
              <li>Those looking for a twelve-week program they can forget on the thirteenth</li>
              <li>Those who don’t believe their physical health and mental wellness are connected</li>
              <li>Those looking for a faster "easy way"</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section footer-cta">
        <div class="wrap">
          <h1>because I personally commit to <br>each and every one of my students,<br>SPACE IS LIMITED</h1>
          <p>Everyone is welcome to apply, but consider whether you’re ready to go the extra mile for your fitness.
  I personally review each and every application to ensure that my classes are filled with those who will benefit most from
  this program, as I can only take on so many clients at once. A new program starts every 12 weeks
  so please register in advance to reserve your spot for the next session.</p>

          <p class="lead">Ready to commit to your health, happiness and freedom?</p>
          <a class="btn" href="https://calendly.com/kristopher/book-a-call-with-kris">Book a call now</a>
        </div>
      </section>

    </main>

    <footer class="site-footer">
      <div class="wrap">
        <p class="site-footer__social">FOLLOW FREEDOM 13: <a href="https://www.facebook.com/KristopherJSimpson"><?= file_get_contents('assets/images/fbsocial.svg') ?></a> <a href="http://instagram.com/krisjsimpson"><?= file_get_contents('assets/images/instsocial.svg') ?></a></p>
        <p class="site-footer__copy">© <?= date('Y') ?> FREEDOM 13</p>
      </div>
    </footer>

    <script src="assets/scripts/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/scripts/vendor/jquery-1.11.3.min.js"><\/script>')</script>
    <script src="assets/scripts/swiper.jquery.min.js"></script>
    <script src="assets/scripts/jquery.magnific-popup.min.js"></script>
    <script src="assets/scripts/main.js"></script>
  </body>
</html>
