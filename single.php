<?php ini_set('display_errors','1'); ?>
<?php get_header(); ?>
<?php the_title(); ?>
<?php echo Furry\\Categories::current_category(); >
<?php the_content(); ?>
<?php get_footer(); ?>
