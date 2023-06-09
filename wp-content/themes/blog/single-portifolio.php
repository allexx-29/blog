
$portfolioItens = new WP_Query($args);

while( $portfolioItens->have_posts()) : 
    $portfolioItens->the_post();

?>
<div class="portfolio-item">
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <a href="<?php the_permalink() ?>">
    <?php 
    if(has_post_thumbnail()){
        the_post_thumbnail();
    }
    ?>
    </a>
    <p><a href="<?php the_permalink() ?>">Saiba mais</a></p>
</div>
<?php endwhile; ?>
</aside>

</main>
<?php get_footer(); ?>