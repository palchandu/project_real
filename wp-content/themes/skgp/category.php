<?php
get_header('common');
?>
<!--===== #/HEADER =====--> 


<!-- PAGE TITLE -->
<div class="page-title page-main-section parallaxie">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1> <?php echo category_description( $category_id ); ?></h1>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
    </div>
  </div>
</div>
<!-- PAGE TITLE -->


<!-- LISTING STYLE-->
<section id="agent-p-2" class="listing-1 bg_light padding_top">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="uppercase">PROPERTY <span class="color_red">LISTINGS</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <form class="findus">
          <div class="row">
          <?php
          $current_cat_id  = get_query_var('cat');
          $showposts = 10;
          $args = array('cat' => $current_cat_id, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => $showposts,'post_status' => 'publish');
          query_posts($args);
            if (have_posts())
            {
              while (have_posts())
              {
                the_post();
                $propertyPrice = get_post_meta($post->ID, 'propertyPrice', true);
                $propertySize = get_post_meta($post->ID, 'propertySize', true);
                $bedRooms = get_post_meta($post->ID, 'bedRooms', true);
                $bathRoom = get_post_meta($post->ID, 'bathRoom', true);
                $propertyId = get_post_meta($post->ID, 'propertyId', true);
                $availableDate = get_post_meta($post->ID, 'availableDate', true);
                $propertyStatus = get_post_meta($post->ID, 'propertyStatus', true);
                $builtYear = get_post_meta($post->ID, 'builtYear', true);
                $propertyFloors = get_post_meta($post->ID, 'propertyFloors', true);
                $propertyPluming = get_post_meta($post->ID, 'propertyPluming', true);
                ?>
                <div class="col-md-6 col-sm-6">
                  <div class="property_item heading_space">
                    <div class="image">
                      <img style="width: 360px; height: 251px;" src="<?php the_post_thumbnail_url(); ?>" alt="listin" class="img-responsive">
                      <div class="overlay">
                        <div class="centered"><a class="link_arrow white_border" href="<?php the_permalink() ?>">View Detail</a></div>
                      </div>
                      
                      <div class="price"><span class="tag"><?= $propertyStatus ?></span></div>
                      <div class="property_meta">
                        <span><i class="fa fa-object-group"></i><?= $propertySize ?> sq ft </span>
                        <span><i class="fa fa-bed"></i><?= $bedRooms ?></span>
                        <span><i class="fa fa-bath"></i><?= $bathRoom ?> Bathroom</span>
                      </div>
                    </div>
                    <div class="proerty_content">
                      <div class="proerty_text">
                        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                        <span class="bottom10">Merrick Way, Miami, USA</span>
                        <p class="p-font-15"> <?= get_excerpt() ?></p>
                      </div>
                      <div class="favroute clearfix">
                        <p class="pull-md-left">&#8377;<?= $propertyPrice ?></p>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
            }
            else
            {
              echo "No Property Found.";
            }
              ?>
            
          </div>
          <?php 
        
        global $wp_query;
$total = $wp_query->max_num_pages;
// Only paginate if we have more than one page
if ( $total > 1 )  {
     // Get the current page
     if ( !$current_page = get_query_var('paged') )
          $current_page = 1;
     // Structure of “format” depends on whether we’re using pretty permalinks
     $format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
     echo paginate_links(array(
          'base' => get_pagenum_link(1) . '%_%',
          'format' => $format,
          'current' => $current_page,
          'total' => $total,
          'mid_size' => 4,
          'type' => 'list'
     ));
}  
        ?>
        </form>
      </div>
      <div class="col-md-4 colsm-4 col-xs-12">
        <div class="property-query-area padding-all20">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-uppercase  bottom40 top20">Recent <span class="color_red">Properties</span></h3>
            </div>
          </div>
          <div class="row">
            <div class="media">
          <div class="media-left media-middle">
            <a href="#.">
            <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/f-p-1.png" alt="image">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading"><a href="#.">Historic Town House</a></h4>
            <p>45 Regent Street, London, UK</p>
            <a href="#.">$178,600</a>
          </div>
        </div>
        <div class="media">
          <div class="media-left media-middle">
            <a href="#.">
            <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/f-p-2.png" alt="image">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading"><a href="#.">Historic Town House</a></h4>
            <p>45 Regent Street, London, UK</p>
            <a href="#.">$178,600</a>
          </div>
        </div>
        <div class="media">
          <div class="media-left media-middle">
            <a href="#.">
            <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/f-p-3.png" alt="image">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading"><a href="#.">Historic Town House</a></h4>
            <p>45 Regent Street, London, UK</p>
            <a href="#.">$178,600</a>
          </div>
        </div>
        <div class="media">
          <div class="media-left media-middle">
            <a href="#.">
            <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/f-p-1.png" alt="image">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading"><a href="#.">Historic Town House</a></h4>
            <p>45 Regent Street, London, UK</p>
            <a href="#.">$178,600</a>
          </div>
        </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
</section>
<!-- LISTING -->

<!--FOOTER -->
<?php
get_footer();
?>

