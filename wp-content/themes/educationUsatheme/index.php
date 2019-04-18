<?php get_header(); ?>
<main>
<h1>EducationUsa!</h1>
<h2>Inglés para Adultos</h2>
<button type="button" class="btn btn-primary">Main button!</button>
<?php
    if(have_posts()):
        while(have_posts()) : the_post();
            echo "<p>" . the_title() . "</p>";
        endwhile;
    else:
        echo "There is no content to display overhere!";
    endif;
?>
</main>
<?php get_footer(); ?>