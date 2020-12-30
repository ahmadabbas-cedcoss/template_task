<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package xyz
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while (have_posts()) {
		?>
 
<section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/banner-item-01.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Lifestyle</span>
                      <a href="post-details.html"><h4> <?php the_title('<h3>', '</h3>');?>  </h4></a>
                      <ul class="post-info">
					  <li><a href="#"><?php the_author(); ?></a></li>
                        <li><a href="#"><?php the_date('Y-m-d'); ?></a></li>
                        <li><a href="#"><?php echo get_comments_number(); ?> Comments</a></li>
                      </ul>
                      <p>Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt or customize it for any kind of CMS or website builder. You are allowed to use it for your business. You are NOT allowed to re-distribute the template ZIP file on any template collection site for the download purpose. <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">Contact TemplateMo</a> for more info. Thank you.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Beauty</a>,</li>
                              <li><a href="#">Nature</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">

                </div>
                <div class="col-lg-12">

                </div>
                <div class="col-lg-12">

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">

            </div>
          </div>
        </div>
      </div>
    </section>
					  <?php 
					break;
					}  ?>




			<!-- the_post(); -->

			<!-- get_template_part( 'template-parts/content', get_post_type() ); -->
			<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'xyz' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'xyz' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		 // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
















