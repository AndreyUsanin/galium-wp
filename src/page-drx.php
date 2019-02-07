<?php
/**
* Template Name: DRX

*/
?>

<?php get_header(); ?>


<!-- content -->

<?php

// check if the flexible content field has rows of data
if( have_rows('text_and_image_two_cols') ):

     // loop through the rows of data
    while ( have_rows('text_and_image_two_cols') ) : the_row();

        if( get_row_layout() == 'text_and_image' ):
          ?>

          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <?php the_sub_field('text'); ?>
              </div>
              <div class="col-md-6">
              <img class="img-fluid" src="<?php the_sub_field('image'); ?>" alt="">
              </div>
            </div>
          </div>

          <?php

        


        endif;

    endwhile;

else :

    // no layouts found

endif;

?>


<?php

// check if the flexible content field has rows of data
if( have_rows('parallax') ):

     // loop through the rows of data
    while ( have_rows('parallax') ) : the_row();

        if( get_row_layout() == 'parallax_content' ):
          ?>

          <div class="rellax-wrp"  style="background-image: url(<?php the_sub_field('parallax_background') ?>)"> 
            <div class="container">
              <div class="rellax"> 
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, dicta sapiente? Mollitia tempora modi quis, fugiat, similique dolores eveniet eos laboriosam quasi rerum corrupti, fugit quam molestias ducimus! Nesciunt reiciendis quas sint temporibus nemo quos iste mollitia voluptates delectus assumenda illum fugiat tenetur pariatur praesentium ipsam eum enim, repudiandae ad hic quisquam animi ex! Possimus obcaecati quos distinctio exercitationem sunt quidem fuga odio consequatur modi iure, aliquam inventore magnam ea molestiae, corporis voluptates velit dolores consequuntur? Laborum, enim quaerat quod magni pariatur inventore unde adipisci eveniet a ullam, tenetur eum quasi laboriosam ratione rem aliquid nemo nihil? Esse, provident! Consectetur.</p>
              </div> 
            </div>
          </div>


          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <?php the_sub_field('text'); ?>
              </div>
              <div class="col-md-6">
              <img class="img-fluid" src="<?php the_sub_field('image'); ?>" alt="">
              </div>
            </div>
          </div>

          <?php        


        endif;

    endwhile;
else :
    // no layouts found

endif;

?>


<!-- end content -->


<?php get_footer(); ?>