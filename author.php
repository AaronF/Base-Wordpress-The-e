<?php
/**
 * @package WordPress
 * @subpackage AF-Theme
 */

get_header();
get_sidebar("ttt");?>

<div class="col-md-8 col-sm-8 content">
    <h2>
        Author: <?php echo get_the_author();?>
    </h2>
    
    <?php while ( have_posts() ) : the_post(); ?>

        <article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>">
            <div class="article-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_title('<h2 itemprop="name">', '</h2>'); ?>
                </a>
            </div>
            <div class="article-meta" itemprop="datePublished" content="<?php echo get_the_date(); ?>">
                <?php echo get_the_date(); ?>
            </div>

            <div class="article-body" itemprop="articleBody">
                <?php the_content("Continue reading " . the_title('', '', false)); ?>
            </div>
        </article>

    <?php endwhile; ?>

    <?php if($wp_query->max_num_pages > 1):?>
        <nav id="nav-below">
            <div class="nav-previous"><?php next_posts_link(); ?></div>
            <div class="nav-next"><?php previous_posts_link(); ?></div>
        </nav>
    <?php endif; ?>

    <?php /* Only load comments on single post/pages*/ ?>
    <?php if(is_page() || is_single()) : comments_template( '', true ); endif; ?>
</div>

<?php get_footer(); ?>
