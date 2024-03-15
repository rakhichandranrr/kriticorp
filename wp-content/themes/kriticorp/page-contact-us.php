<?php
/*Template Name: Contact Us*/
get_header();
?>

<div id="content" class="site-content ">
  <section class="contact-section"> 
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
      <div class="row align-items-start">
        <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
          <div class="contact_form_box_all type_one">
            <div class="contact_form_box_inner">
              <div class="contact_form_shortcode">
                <div class="messages"></div>
                <div class="controls">
                  <div class="row"> <?php echo do_shortcode('[contact-form-7 id="89e230b" title="Contact form 1"]');?> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 pd_left_30"> <?php echo get_the_content();?> </div>
      </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_top_70"></div>
    <!--===============spacing==============--> 
  </section>

  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3103.0309549886315!2d-77.40105129999999!3d38.9461212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b647c008a07599%3A0x5a944817496f0f71!2s13123%20Copper%20Brook%20Way%2C%20Herndon%2C%20VA%2020171%2C%20USA!5e0!3m2!1sen!2sin!4v1708954039292!5m2!1sen!2sin" style="width: 100%;" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!---newsteller--->
<?php echo newletter();?>
<!---newsteller end---> 
  
</div>
<?php
get_footer();
?>