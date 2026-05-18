<?php
/**
 * The template for displaying archive pages.
 */

get_header(); ?>

<main id="primary" class="site-main blog-archive-main">
    <div class="container-standard mx-auto">
        <header class="archive-header text-center mb-60">
            <h1 class="archive-title text-6xl font-black ls-neg-3 mb-20">
                <?php the_archive_title(); ?>
            </h1>
            <?php the_archive_description( '<div class="archive-description color-light text-xl">', '</div>' ); ?>
        </header>

        <div class="blog-layout">
            <!-- Posts Grid -->
            <div class="posts-feed">
                <?php if ( have_posts() ) : ?>
                    <div class="grid-archive gap-40">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('archive-post-card bg-white radius-24 overflow-hidden border-light shadow-sm hover-lift'); ?>>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>" class="archive-post-thumb-link">
                                        <div class="archive-post-thumb h-200 overflow-hidden">
                                            <?php the_post_thumbnail('medium_large', ['class' => 'full-width full-height object-cover']); ?>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <div class="p-30">
                                    <div class="post-meta mb-10 text-xs text-uppercase ls-1 font-bold color-primary">
                                        <?php the_category(', '); ?>
                                    </div>
                                    <h2 class="post-title text-2xl font-black mb-15">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="post-excerpt color-light mb-20 text-sm lh-1-6">
                                        <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="font-bold text-sm color-dark">Read Full Strategy →</a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-wrapper mt-60">
                        <?php
                        the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => '← Newer',
                            'next_text' => 'Older →',
                        ) );
                        ?>
                    </div>

                <?php else : ?>
                    <p>No strategy guides found.</p>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
