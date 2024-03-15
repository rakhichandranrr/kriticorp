<?php

/*Template Name: Blog*/

get_header();

?>



<div id="content" class="site-content ">

  <!--<div class="container d-flex justify-content-center mt-4">

    <div class="d-flex mt-5 search-area">

      <input type="search" class="form-control" placeholder="Search keywords" >

      <button><i class="bi bi-search"></i></button>

    </div>

  </div>-->

  <section class="news-blogs  mt-5" >

    <div class="container">

      <div class="row">
      <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                           <?php
					$blog_content = get_post(85); 
					echo $blog_content->post_content;
					?>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_10"></div>
                        <!--===============spacing==============-->
                     </div>

        <?php

	  $blog_args = array(

	  'numberposts' => -1,

	  'post_type'   => 'blog',				  

	  );

	  $blog = get_posts($blog_args);

	  foreach ($blog as $blog_res) {

		  $url = wp_get_attachment_url( get_post_thumbnail_id($blog_res->ID), 'full' ); 

		 

	  ?>

        <div class="col-lg-3">

          <div class="project_post style_one mr_top_20">

            <div class="image"> <img src="<?php echo $url;?>" class="img-fluid"

                                             alt="img" /> </div>

            <div class="project_caro_content">

              <div class="left_side">

                <p>4days Ago</p>

                <h2 class="title_pro"><a href="<?php echo get_permalink($blog_res->ID);?>"><?php echo $blog_res->post_title;?></a></h2>

              </div>

            </div>

          </div>

        </div>

        <?php

		  }

		  ?>

      </div>

    </div>

  </section>

  

<!---newsteller--->

<?php echo newletter();?>

<!---newsteller end---> 

</div>

<?php

get_footer();

?>

