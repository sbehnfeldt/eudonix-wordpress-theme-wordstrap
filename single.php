<html <?php language_attributes(); ?>>
<?php get_template_part( 'partials/head' ); ?>

<body>
<?php get_template_part( 'partials/header' ) ?>

<div class="container index">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-heading">
                    <h3 class="card-title">Blog Posts</h3>
                </div>

                <div class="card-body">
                    <?php if ( have_posts() ): ?>
                        <?php while ( have_posts() ): the_post(); ?>
                            <article class="post">
                                <div class="row">

                                    <div class="col-md-12">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <?php if ( has_post_thumbnail() ): ?>
                                            <div class="post-thumbnail">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <br>
                                        <?php endif; ?>
                                        <p class="meta">
                                            Posted at <?php the_time(); ?>
                                            on <?php the_date(); ?>
                                            by <strong><?php the_author(); ?></strong>
                                        </p>
                                        <div class="content">
                                            <?php the_content(); ?>
                                        </div>

                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php comments_template(''); ?>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <?php if ( is_active_sidebar( 'sidebar' ) ): ?>
                <?php dynamic_sidebar( 'sidebar' ) ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_template_part( 'partials/footer' ); ?>

</body>
</html>