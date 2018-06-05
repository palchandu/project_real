<div class="row">
<?php
$recent_query = new WP_Query( 'posts_per_page=5' );
while($recent_query->have_posts()):$recent_query->the_post();?>
        <div class="media">
          <div class="media-left media-middle">
            <a href="<?= the_permalink() ?>"><?php the_post_thumbnail('recent_post') ?></a>
          </div>
          <div class="media-body">
            <h4 class="media-heading"><a href="<?= the_permalink() ?>"><?= the_title(); ?></a></h4>
            <p>45 Regent Street, London, UK</p>
            <a href="javascript::void(0)">$178,600</a>
          </div>
        </div>
  <?php
endwhile;
wp_reset_postdata();
?>
</div>