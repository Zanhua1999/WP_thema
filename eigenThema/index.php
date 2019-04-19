<?php

get_header();


if( have_posts() ):
    while(have_posts()) : the_post();
?>

        <article class="bericht">
        <div clas>s="container">


<a href="<?php the_permalink() ?>"<h2><?php the_title() ?> </h2></a>
    <?php the_content() ?>
        </div>
        </article>
<?php endwhile;
else : 
    echo '<p>Geen berichten gevonden</p>';





endif;





get_footer();
?>