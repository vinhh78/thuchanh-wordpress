<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article style="border-bottom: 1px solid #ddd; margin-bottom: 15px; padding-bottom: 15px;">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div><?php the_excerpt(); ?></div>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <p>Chua co bai viet nao.</p>
<?php endif; ?>

<?php get_footer(); ?>
