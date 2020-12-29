<?php /* Template Name: homepage */ ?>
<?php
get_header();
?>
<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
      <?php
      $args = array(
        'post_type'=> 'post',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'posts_per_page' => -1 // this will retrive all the post that is published 
);
?>

<?php $result = new WP_Query( $args ); 

if ( $result-> have_posts() ) : ?>
  <?php while ( $result->have_posts() ) : $result->the_post(); ?>

    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/banner-item-01.jpg" alt="">
      <div class="item-content">
        <div class="main-content">
          <div class="meta-category">
            <span> <?php the_title( '<h2>', '</h2>' );?></span>
          </div>
          <a href="<?php the_permalink(); ?>"><h4><?php the_content(); ?></h4></a>
          <ul class="post-info">
            <li><a href="#"><?php the_author(); ?></a></li>
            <li><a href="#"><?php the_date( 'Y-m-d'); ?></a></li>
            <li><a href="#"><?php echo get_comments_number(); ?> Comments</a></li>
          </ul>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
</div>
</div>
</div>


<section class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-content">
          <div class="row">
            <div class="col-lg-8">
              <span>Stand Blog HTML5 Template</span>
              <h4>Creative HTML Template For Bloggers!</h4>
            </div>
            <div class="col-lg-4">
              <div class="main-button">
                <a rel="nofollow" href="#" target="_parent">Download Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="blog-posts">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            <!-- <div class="col-lg-12">
            </div>
            <div class="col-lg-12">
            </div> -->
			<?php
      $args = array(
        'post_type'=> 'post',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'posts_per_page' => -1 // this will retrive all the post that is published 
);
?>

<?php $result = new WP_Query( $args ); 

if ( $result-> have_posts() ) : ?>
  <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/banner-item-01.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span><?php the_title( '<h3>', '</h3>' );?></span>
                      <a href="<?php the_permalink(); ?>"><h4><?php the_content(); ?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php the_author(); ?></a></li>
                        <li><a href="#"><?php the_date( 'Y-m-d'); ?></a></li>
                        <li><a href="#"><?php echo get_comments_number(); ?> Comments</a></li>
                      </ul>
                      <p>Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">HTML CSS</a>,</li>
                              <li><a href="#">Photoshop</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#">Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				</div>
				<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12">
              <div class="sidebar-item search">
                <form id="search_form" name="gs" method="GET" action="#">
                  <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                </form>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h2>Recent Posts</h2>
                </div>
                <div class="content">
                  <ul>

                    <?php 
                    if ( have_posts() ) : 
                      while ( have_posts() ) : the_post(); 
                        ?>
                        <li><a href="<?php the_permalink(); ?>">
                          <h5><?php the_title( '<h3>', '</h3>' );?></h5>
                          <span><?php the_date( 'Y-m-d'); ?></span>
                        </a></li>
                        <?php
                      endwhile; 
                    else: 
                      _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
                    endif; 
                    ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item categories">
                <div class="sidebar-heading">
                  <h2>Categories</h2>
                </div>
                <div class="content">
                  <ul>

                    <?php
                    $args = array(
                      'hide_empty'      => false,
                    );

            $categories = get_categories($args); //This returns both used and unused categories
            foreach($categories as $category) {
              echo '<li><a href="' . get_category_link($category->term_id) . '">-' . $category->name . '</a></li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="sidebar-item tags">
        <div class="sidebar-heading">
          <h2>Tag Clouds</h2>
        </div>
        <div class="content">
          <ul>
            <?php
            $args = array(
              'hide_empty'      => false,
            );

            $tags = get_tags($args); //This returns both used and unused categories
            foreach($tags as $tag) {
              echo '<li><a href="' . get_tag_link($category->term_id) . '">' . $tag->name . '</a></li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>

<?php
get_sidebar();
get_footer();

