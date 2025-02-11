<?php
get_header();
?>
<?php echo Furry\Categories::current_category(); ?>
<?php echo the_content(); ?>
<?php
get_footer();
?>
