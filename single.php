<?php get_header(); ?>
<?php the_title(); ?>
<?php echo Furry\Categories::current_categories(); >
<?php the_content(); ?>
<?php get_footer(); ?>
