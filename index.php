<?php

include_once "inc/header.php";


require "class.admin.php";

?>



<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
    <source src="assets/images/course-video.mp4" type="video/mp4" />
  </video>

  <div class="video-overlay header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="caption">
            <h6>Hello Students</h6>
            <h2>Welcome to Education</h2>
            <p>This is an edu meeting HTML CSS template provided by <a rel="nofollow" href="https://templatemo.com/page/1" target="_blank">TemplateMo website</a>. This is a Bootstrap v5.1.3 layout. The video background is taken from Pexels website, a group of young people by <a rel="nofollow" href="https://www.pexels.com/@pressmaster" target="_blank">Pressmaster</a>.</p>
            <div class="main-button-red">
              <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Main Banner Area End ***** -->


<!-- Beginning of Events -->
<p>
<section class="services">
  <div class="container">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

      <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@m uk-grid">
        <?php
        $ad = new Admin();
        $stmt = $ad->runQuery("select * from events");
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($row as $key => $value) {
          $time = explode(" ", $value["date"]);


        ?>
          <li>
            <div>

              <div class="uk-card uk-card-default uk-card-body">
                <h6 class="text-danger">Event:</h6>
                <h6 class="uk-card-title" class="text-danger"><?php echo $time[0] ?></h6>
                <p><?php echo $value["description"] ?>.</p>
              </div>
            </div>
          </li>
        <?php
        }
        ?>
      </ul>

      <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
      <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>
  </div>
  </p>
</section>
<!--End of Events -->

<!-- Beginning of Courses -->
<section class="upcoming-meetings" id="meetings">
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2>Courses</h2>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="categories">
          <h4>Courses We Offer</h4>
          Register for Our Courses Online Now
          <div class="main-button-red">
            <a href="meetings.html">View All Courses</a>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="row">
          <div class="col-lg-6">
            <div class="meeting-item">
              <div class="thumb">
                <div class="price">
                </div>
                <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt="Online Teaching"></a>
              </div>
              <div class="down-content">
                <div class="date">
                </div>
                <a href="meeting-details.html">
                  <h4>Amature Chef Program</h4>
                  <h4></h4>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="meeting-item">
              <div class="thumb">
                <div class="price">
                </div>
                <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt="Online Teaching"></a>
              </div>
              <div class="down-content">
                <div class="date">
                </div>
                <a href="meeting-details.html">
                  <h4>Professional Chef Program</h4>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="meeting-item">
              <div class="thumb">
                <div class="price">
                </div>
                <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt="Higher Education"></a>
              </div>
              <div class="down-content">
                <div class="date">
                </div>
                <a href="meeting-details.html">
                  <h4>Specialty Courses</h4>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="meeting-item">
              <div class="thumb">
                <div class="price">
                </div>
                <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg" alt="Student Training"></a>
              </div>
              <div class="down-content">
                <div class="date">
                </div>
                <a href="meeting-details.html">
                  <h4>One Day Courses</h4>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Beginning of Courses -->

</div> -->



<section class="our-courses" id="courses">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2>Our Popular Courses</h2>
        </div>
      </div>
      <?php



      $admin = new Admin();


      $stmt = $admin->runQuery("SELECT * from team order by date_added ASC");
      $stmt->execute();
      $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

      ?>
      <div class="col-lg-12">
        <div class="owl-courses-item owl-carousel">
          <?php foreach ($row as $rows) {
          ?>
            <div class="item">
              <img src="admin/<?php echo $rows['image'] ?>" alt="" style="width:100%;height:100%;">
              <div class="down-content">
                <h4><?php echo $rows['name'] ?></h4>
              </div>
            </div>
          <?php  } ?>

        </div>

      </div>


    </div>
  </div>

</section>

<section class="our-facts">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-12">
            <h2>A Few Facts About Our University</h2>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-12">
                <div class="count-area-content percentage">
                  <div class="count-digit">94</div>
                  <div class="count-title">Succesed Students</div>
                </div>
              </div>
              <div class="col-12">
                <div class="count-area-content">
                  <div class="count-digit">126</div>
                  <div class="count-title">Current Teachers</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-12">
                <div class="count-area-content new-students">
                  <div class="count-digit">2345</div>
                  <div class="count-title">New Students</div>
                </div>
              </div>
              <div class="col-12">
                <div class="count-area-content">
                  <div class="count-digit">32</div>
                  <div class="count-title">Awards</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="video">
          <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="contact-us" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 align-self-center">
        <div class="row">
          <div class="col-lg-12">
            <form id="contact" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <h2>Let's get in touch</h2>
                </div>
                <div class="col-lg-4">
                  <fieldset>
                    <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4">
                  <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-4">
                  <fieldset>
                    <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="right-info">
          <ul>
            <li>
              <h6>Phone Number</h6>
              <span>010-020-0340</span>
            </li>
            <li>
              <h6>Email Address</h6>
              <span>info@meeting.edu</span>
            </li>
            <li>
              <h6>Street Address</h6>
              <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
            </li>
            <li>
              <h6>Website URL</h6>
              <span>www.meeting.edu</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
      <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
    </p>
  </div>
</section>




<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>
<script>
  //according to loftblog tut
  $('.nav li:first').addClass('active');

  var showSection = function showSection(section, isAnimate) {
    var
      direction = section.replace(/#/, ''),
      reqSection = $('.section').filter('[data-section="' + direction + '"]'),
      reqSectionPos = reqSection.offset().top - 0;

    if (isAnimate) {
      $('body, html').animate({
          scrollTop: reqSectionPos
        },
        800);
    } else {
      $('body, html').scrollTop(reqSectionPos);
    }

  };


  var checkSection = function checkSection() {
    $('.section').each(function() {
      var
        $this = $(this),
        topEdge = $this.offset().top - 80,
        bottomEdge = topEdge + $this.height(),
        wScroll = $(window).scrollTop();
      if (topEdge < wScroll && bottomEdge > wScroll) {
        var
          currentId = $this.data('section'),
          reqLink = $('a').filter('[href*=\\#' + currentId + ']');
        reqLink.closest('li').addClass('active').
        siblings().removeClass('active');
      }
    });
  };

  $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
    e.preventDefault();
    showSection($(this).attr('href'), true);
  });

  $(window).scroll(function() {
    checkSection();
  });
</script>
</body>

</body>

</html>