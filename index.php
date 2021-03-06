<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <title>BRING IN | DocLounge Aarhus</title>

  <meta name="description" content="Get customers and promote your business by bringing DocLounge in! Learn more about all the benefits and features here.">
  <meta name="author" content="Kristine, Marketa, Radovan, Sissel">

  <!-- STYLESHEETS -->

  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">

  <!-- JQUERY CDN -->

  <script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

</head>

<body>

  <!-- INTRO SECTION -->

  <section id="intro">

    <header>
      <nav id="menu">
        <ul>
          <li><img id="logo" src="media/png_logo1.png" alt="Bring In Doc Lounge logo"></li>

          <div id="menu-wrap">
            <a href="#intro"><img id="home" src="media/home.png" alt="home icon"></a>
            <a href="#description"><li>about</li></a>
            <a href="#benefits"><li>work with us</li></a>
            <a href="#events"><li>upcoming events</li></a>
            <a href="#faq"><li>FAQ</li></a>
            <a href="#contact"><li id="cta">contact us</li></a>
          </div>

        </ul>
      </nav>
    </header>

  <!-- VIDEO BACKGROUND -->

    <div id="bg-cont">

      <video id="bg-vid" loop muted controls autoplay poster="media/poster.png">
        <source src="media/bg.mp4" type="video/mp4">
      </video>

  <!-- VIDEO TEXT OVERLAY -->

      <div id="vid-overlay">
        <h1 id="headline">Meet Doc Lounge</h1>
        <h2 id="subheadline">We are all about grasping what's happening now and sparking thoughts and conversations in those who are hungry for documentaries.</h2>
      </div>

    </div>

  </section>

  <!-- DESCRIPTION SECTION -->

  <section class="section" id="description">

    <h1 class="headline">About</h1>
    <h2 class="subheadline">Doc Lounge screens previews of the best new documentary films, alongside an inspiring programme of music, special guests, Q&As, performances, talks, and surprises.</h2><h2 class="subheadline"> Our special film events take place at 19 dedicated Doc Lounge clubs across four Nordic countries, all based in non-cinema venues. We also work with a range of collaborators from festivals and cinemas to libraries, conferences, youth groups and more - bringing the right films to the right audiences at the right time.</h2>

  </section>

  <!-- BENEFITS SECTION -->

  <section class="section" id="benefits">

    <div class="screen">

      <div class="benefit-bar">
        <img src="media/magnet.png" alt="people icon">
        <h2 class="subheadline">Reach broader audience</h2>
        <p class="description">Get more people to know about you. Our screenings attract diverse
people and personalities, who will finally
learn, who you are. So you can benefit from
more potential customers.</p>
      </div>

      <div class="benefit-bar">
        <img src="media/megaphone.png" alt="megaphone icon">
        <h2 class="subheadline">Promote your business</h2>
        <p class="description">Your business, brand and venue get seen by many new people.
Our events will get them talking, and they will also talk about you.
Because you were the one who made it happen this time.</p>
      </div>

      <div class="benefit-bar">
        <img src="media/money.png" alt="piggy bank icon">
        <h2 class="subheadline">Add value to your business</h2>
        <p class="description">Your business now associates with
creativity, innovation and goodwill besides
your regular character. And your colleagues and employees
can enjoy our events just as much as our visitors.</p>
      </div>

    </div>

  </section>

<!-- EVENTS SECTION -->

  <section class="section" id="events">

    <h1 class="headline">Upcoming<br>Events</h1>

    <div class="screen">

      <div class="event-bar">
        <div class="img-wrap">
          <img src="media/events/1.png" alt="upcoming event image">
        </div>
        <h2 class="subheadline">Bugs</h2>
        <hr/>
        <p class="film-description">Directors: Andreas Johnsen<br>76 min, Denmark<br></p><hr/>
        Why should we eat insects? Filmmaker Andreas Johnsen’s partly tasty and partly a tiny tiny bit repulsive documentary Bugs sets out to discover if eating insects can save our Earth. The result is equal parts culinary documentary and political conversation starter.
        <button type="button">Read more</button>
      </div>

      <div class="event-bar">
        <div class="img-wrap">
          <img src="media/events/2.png" alt="upcoming event image">
        </div>
        <h2 class="subheadline">At Home In The World</h2>
        <hr/>
        <p class="film-description">Directors: Andreas Koefoed<br>58 min, Denmark<br></p><hr/><br>
          At Home In The World is an intimate depiction of the everyday lives of five refugee children on a Danish Red Cross asylum school.
          The children; Magomed, Sehmuz, Heda, Amel and Ali have different nationalities and backgrounds, but they have all fled their homes with their families, arriving in Denmark with the hope of starting over.
        <button type="button">Read more</button>
      </div>

      <div class="event-bar">
        <div class="img-wrap">
          <img src="media/events/3.png" alt="upcoming event image">
        </div>
        <h2 class="subheadline">Misfits</h2>
        <hr/>
        <p class="film-description">Directors: Jannik Splidsboel<br>74 min, Denmark<br></p><hr/><br>
          Misfits a coming of age-doc about three American teenagers from conservative Tulsa struggling with isolation and instability in a heartfelt story that portrays family bond, poverty, survival, love and the consequences of coming out as a young LGBT in the Bible Belt.
        <button type="button">Read more</button>
      </div>

    </div>

  </section>

  <!-- FAQ SECTION -->

  <section class="section" id="faq">
    <h1 class="headline">FAQ</h1>
    <img src="media/chair.png" alt="chair image">

    <div id="faq-screen">

          <h2 class="subheadline">• Should we book the cleaning staff to clean up after you? </h2>

          <p>Don’t worry, we take the full responsibility for cleaning up after ourselves</p>

          <h2 class="subheadline">• How many people will you bring to our venue?</h2>

          <p>The average amount is about 40-50, but it can vary according to theme of the movie.</p>

          <h2 class="subheadline">• How long will it take?</h2>

          <p>The event takes about 3 hours and we will need a couple hours before and after to prepare and to clean it all up.</p>

    </div>
  </section>

  <!-- GALLERY SECTION -->

  <section id="gallery">

  <!-- PHP SCANDIR -->

    <?php

      error_reporting(0);

      $images = scandir("media/gallery");

      foreach ($images as $image ) {

        $extensions = array(".jpeg","jpg",".png");

        $image_info = getimagesize("media/gallery/$image");
        $filename = pathinfo("media/$image", PATHINFO_FILENAME);

        if($image_info){
          echo "<div class=\"img-wrap\"><a href=\"media/gallery/$image\"><img id=\"gallery-image\"
          src=\"media/gallery/$image\" alt=\"gallery image\" /></a></div>";
        }
      };
    ?>

  </section>

  <!-- TESTIMONIAL SECTION -->

  <section class="section" id="testimonials">

    <div class="screen">

      <div class="testimonial-bar">
        <h2 class="headline">Marie Vilhelmsen,<br>Youth Church Aarhus</h2>
        <p>“It is always nice to expand your audience and by hosting Doc Lounce events, we can see that more people get to know about our church”</p>
        <img src="media/testimonials/review1.png" alt="photo of Marie Vilhelmsen">
      </div>

      <div class="testimonial-bar">
        <h2 class="headline">Kasper Mogensen,<br>Godsbanen</h2>
        <p>“From a business perspective we have noticed a small increase in our profit and amount of visitors since we hosted one of the Doc Lounge events. Personally I even like to participate myself”</p>
        <img src="media/testimonials/review2.png" alt="photo of Kasper Mogensen">
      </div>

      <div class="testimonial-bar">
        <h2 class="headline">Stine Madsen,<br>Filmbyen</h2>
        <p>“We have hosted Doc Lounge events a couple of times now. I think it’s a great initiative and it is amazing how they can create such a nice atmosphere around the audience”</p>
        <img src="media/testimonials/review3.png" alt="photo of Stine Madsen">
      </div>

    </div>

  </section>

  <!-- SOCIAL PROOF SECTION -->

  <section class="section" id="social-proof">

    <div class="screen">

      <?php
      error_reporting(0);

     $images = scandir("media/logos");

     foreach ($images as $image ) {

       $extensions = array(".jpeg","jpg",".png");

       $image_info = getimagesize("media/logos/$image");
       $filename = pathinfo("media/$image", PATHINFO_FILENAME);

       if($image_info){
         echo "<div class=\"logo-wrap\"><img id=\"partner-logo\" src=\"media/logos/$image\" alt=\"partner logo\"/></div>";
       }
     };

      ?>
    </div>

  </section>

  <!-- CONTACT SECTION -->

  <!-- FORM SECTION -->

  <section class="section" id="contact">

    <!-- PHP FORM HANDLING -->

    <?php

    if(isset($_POST['submit-button'])){
      $to = "radovansurlak@gmail.com";
      $from = $_POST['user_mail'];
      $name = $_POST['user_name'];
      $subject = "Form submission";
      $subject2 = "Copy of your form submission";
      $message = $name . " wrote the following:" . "\n\n" . $_POST['user_message'];
      $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

      $headers = "From:" . $from;
      $headers2 = "From:" . $to;
      mail($to,$subject,$message,$headers);
      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
      echo "<h1 id=\"mail-sent\">Mail Sent. Thank you " . $name . ", we will contact you shortly.</h1>";
      }
    ?>

    <h2 class="headline">Contact us</h2>

    <form action="#contact" method="post">

      <div id="form-wrap">
          <input type="text" id="name" name="user_name" placeholder="Name*"/>
          <input type="email" id="mail" name="user_mail" placeholder="E-mail*" />
      </div>

        <textarea id="msg" name="user_message" placeholder="Message*" ></textarea>
        <button type="submit" name="submit-button">Submit</button>

    </form>

    <!-- SOCIAL ICONS -->

    <div id="social-icons">
      <div class="social">
        <a  target="_blank" href="https://www.facebook.com/doclounge.aarhus"><img src="media/social/fb.png" alt="facebook icon"></a>
      </div>

      <div class="social">
        <a target="_blank" href="https://twitter.com/docloungeaarhus"><img src="media/social/twit.png" alt="twitter icon"></a>
      </div>

      <div class="social">
        <a href="tel:+4531241268"><img src="media/social/phone.png" alt="call icon"></a>
      </div>
    </div>

  </section>

  <!-- SCRIPTS -->

<script type="text/javascript" src="js/jquery.js"></script>

</body>

</html>
