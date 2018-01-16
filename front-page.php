<?php
/**
* Template Name: Home Page
*
* home-page-template.php
*
*/
get_header(); ?>

<div id="primary" class="content-area home-page-template">
  <div id="content" class="site-content" role="main">
    <!--- Content Goes Here -->
    <div class="banner-home" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2018/01/hero-image.jpg');">
      <div class="banner-content">
        <div class="waste-bin">
          <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/01/trash-can.png">
        </div>
        <div class="cta-text">
          <h1>Comprehensive</h1>
          <h1><strong>Medical Waste Disposal Services</strong></h1>
          <p>MedSafe Waste offers comprehensive medical waste disposal services
            for healthcare facilities and other businesses across the United States.</p>
          <a class="btn btn-primary btn-transparent" href="#" role="button"> LINK TO PAGE </a>
        </div>
      </div>
    </div>
    <div class="contact-widget">
      <h1>Get in Touch</h1>
      <hr>
      <p>Contact us today to learn how we can save you money,
         time and hassle. </p>
         <?php gravity_form( 1, false, false, false, '', false );?>
    </div><!-- contact widget -->
    <div class="text-container">
      <div class="home-blurb">
        <h1>MedSafe Waste Services</h1>
        <p>By tailoring our medical waste disposal services
        to your facility’s waste profile and employing
        straightforward contract terms, we minimize risk
        while providing cost-savings and a service level
        that the larger competitors in our industry cannot
        match. National institutions and small family
        practices alike trust MedSafe Waste to ensure
        their safety, reduce their risk exposure and maximize
        their business value.</p>
      </div><!-- blurb -->
      <div class="blurb-aside">

      </div><!-- blurb aside -->
    </div><!-- text containert -->
    <div class="home-tabs">

      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home"><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/01/radiation-blue.png"><p>Medical Waste Disposal</p></a></li>
        <li><a data-toggle="tab" href="#menu1"><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/01/pill-icon.png"><p>Pharmaceutical Waste Disposal & Returns</p></a></li>
        <li><a data-toggle="tab" href="#menu2"><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/01/syringe-blue.png"><p>Reusable Sharp Containers</p></a></li>
        <li><a data-toggle="tab" href="#menu3"><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/01/clipboard-blue.png"><p>Compliance</p></a></li>
      </ul>

      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <p>MedSafe Waste’s core business is medical waste disposal, pickup, and treatment, which encompasses biohazardous “red bag” waste and sharps containers. Our medical waste disposal service not only protects your staff from exposure to potentially infectious materials, but it also ensures that you remain compliant with the complex set of regulations promulgated by the DOT, EPA, OSHA and other governing bodies.</p>
        </div>
        <div id="menu1" class="tab-pane fade">
          <p>Our pharmaceutical waste disposal program offers a safe and simple turnkey solution to dispose of both hazardous (RCRA) and non-hazardous (non-RCRA) pharmaceutical waste.</p>
        </div>
        <div id="menu2" class="tab-pane fade">
          <p>MedSafe Waste’s reusable sharps containers equip you with a safe, economical and environmentally sustainable method of sharps management. With fortified containers designed for prolonged use and reuse, the service is particularly well-suited for hospitals and other facilities that require frequent and convenient sharps management.</p>
        </div>
        <div id="menu3" class="tab-pane fade">
          <p>MedSafe Waste’s online compliance training program protects your business by ensuring that staff members maintain required certifications and know how to handle potentially dangerous materials. We offer online compliance training courses for all certifications required by medical waste disposal regulations, producing instant certificates that you can track and manage at the click of a button. We make it easy to stay certified!</p>
        </div>
      </div>
    </div><!-- home tabs -->
    <div class="service-section">
      <div class="service-areas-container">
        <div class="businesses-served">
          <div class="business-square" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2018/01/service-area-1.jpg');">
            <div class="inner-square">
            <h2>Hospitals</h2>
            </div>
          </div>
          <div class="business-square" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2018/01/service-area-2.jpg');">
            <div class="inner-square">
            <h2>Hospitals</h2>
            </div>
          </div>
          <div class="business-square" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2018/01/service-area-4.jpg');">
            <div class="inner-square">
            <h2>Hospitals</h2>
            </div>
          </div>
          <div class="business-square" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2018/01/service-area-3.jpg');">
            <div class="inner-square">
            <h2>Hospitals</h2>
            </div>
          </div>
        </div>
        <div class="service-text">
          <h1>Businesses We Serve</h1>
          </hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="btn btn-primary" href="#" role="button"> LINK TO PAGE </a>
        </div>
      </div><!-- service areas container -->
    </div><!-- service section -->
    <div class="counter-section" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2018/01/counter-background.jpg');">
      <div class="counter-inner">
        <div class="counter-single">
          <h1>18</h1>
          <p>Lorem</p>
        </div>
        <div class="counter-single">
          <h1>607</h1>
          <p>Lorem Ipsum</p>
        </div>
        <div class="counter-single">
          <h1>234</h1>
          <p>Lorem</p>
        </div>
        <div class="counter-single">
          <h1>92</h1>
          <p>Lorem Ipsum</p>
        </div>
      </div>
    </div><!-- counter section -->
    <div class="call-to-action">
      <h1>Save you money, time and hassle.</h1><a class="btn btn-primary" href="#" role="button"> Request a Quote </a>
    </div>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer();?>
