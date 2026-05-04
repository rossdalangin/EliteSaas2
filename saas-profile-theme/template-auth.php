<?php
/**
 * Template Name: Auth Page (Login/Register)
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<main id="auth-page" class="landing-main auth-main">
    <!-- Animated Background -->
    <div class="animated-mesh-bg">
        <div class="mesh-circle-1"></div>
    </div>

    <div class="landing-content auth-card bg-white radius-xl shadow-xl">
        <div class="mb-32 text-center">
            <h1 class="text-5xl font-black mb-10 tracking-tight"><?php the_title(); ?></h1>
            <p class="color-light">The Elite Standard in Digital Identity</p>
        </div>

        <div class="auth-form-container text-left">
            <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
