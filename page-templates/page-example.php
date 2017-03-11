<?php
/**
 * Template Name: Example Template
 */

get_header();
?>

<?php
//Page (1, 2, 3 etc.)
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;?>
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <?php
            $query = new WP_Query(array('posts_per_page' => 5,'cat' => 3, 'paged' => $paged));
            if($query->have_posts()) :
    			?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 col-sm-12 col-xs-12 blog-item"); ?>>
                        <div class="col-md-12 blog-title">
                            <h4 class="title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="posted">
                                Posted on <span class="updated published" itemprop="datePublished" content="<?php echo get_the_date(); ?>"><?php the_time('l, F jS, Y') ?></span> in <?php the_category(', ') ?>
                            </div>
                        </div>
    					<div class="col-md-12 blog-content">
    						<?php the_excerpt(); ?>
    						<br><br>
                            <a href="<?php the_permalink();?>" class="button blog-more">Read More &raquo;</a>
    					</div>
    					<div class="clearfix"></div>
                    </div>
                <?php endwhile; ?>

    			<?php wp_reset_postdata(); ?>

    		<?php else : ?>
            	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

    		<div class="clearfix"></div>
            <div class="row">
        		<?php if($query->max_num_pages > 1) : ?>
        			<nav class="navigation">
        				<span class="older right"><?php next_posts_link('Older Entries &raquo;', $query->max_num_pages); ?></span>
        				<span class="newer left"><?php previous_posts_link('&laquo; Newer Entries', $query->max_num_pages); ?></span>
        			</nav>
        		<?php endif; ?>
        	</div>
    	</div>
        <div class="col-sm-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
