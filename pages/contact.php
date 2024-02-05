<?php
require "../includes/config.php";
require pathOf('/includes/navbar.php');
?>

<div class="breadcrumb_area_three">
  <div class="container">
    <div class="breadcrumb_text">
      <h2>Contact Us</h2>
    </div>
  </div>
</div>

<section class="contact_area sec_pad">
  <div class="container">
    <div class="contact_info">
      <div class="section_title text-left">
        <h2 class="h_title wow fadeInUp">Let’s start the conversation</h2>
        <p>Please email us, we’ll happy to assist you.</p>
      </div>
      <form action="#" class="contact_form">
        <div class="row contact_fill">
          <div class="col-lg-4 form-group">
            <h6>Full Name</h6>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name here" />
          </div>
          <div class="col-lg-4 form-group">
            <h6>Email</h6>
            <input type="email" class="form-control" name="email" id="email" placeholder="info@Docy.com" />
          </div>
          <div class="col-lg-4 form-group">
            <h6>Phone no</h6>
            <input type="tel" class="form-control" name="tel" id="phone" placeholder="+462" />
          </div>
          <div class="col-lg-12 form-group">
            <h6>Message</h6>
            <textarea class="form-control message" id="message" placeholder="Enter Your Text ..."></textarea>
          </div>
          <div class="col-lg-12 form-group">
            <button type="submit" class="btn action_btn thm_btn">
              Send Message
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<?php

require pathOf('includes/footer.php');
require pathOf('includes/scripts.php');
require pathOf('includes/pageend.php');

?>