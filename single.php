<?php wp_header(); ?>
<?php echo the_title(); ?>
<?php echo Furry\\Categories::current_category(); ?>
<?php echo the_content(); ?>
<?php wp_footer(); ?>
