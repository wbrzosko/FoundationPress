<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">
	<div class="marketing">
    <div class="flex-video">
      <video id="vidplayer" width="950" height="257" autoplay="autoplay" loop="loop">
        <source src="/img/banner.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
       <!-- <source src="/img/banner.webm" type="video/webm; codecs=&quot;vp8, vorbis&quot;">
        <source src="img/banner.ogv" type="video/ogg; codecs=&quot;theora, vorbis&quot;"> -->
      </video>
    </div>
	</div>
</header>

<div id="page-sidebar-left" role="main">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
       <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
       <div class="entry-content">
           <?php the_content(); ?>
           <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
       </div>
       <footer>
          <?php
            wp_link_pages(
              array(
                'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
                'after'  => '</p></nav>',
              )
            );
          ?>
          <p><?php the_tags(); ?></p>
       </footer>
       <?php do_action( 'foundationpress_page_before_comments' ); ?>
       <?php comments_template(); ?>
       <?php do_action( 'foundationpress_page_after_comments' ); ?>
   </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_sidebar(); ?>

<?php get_footer();
