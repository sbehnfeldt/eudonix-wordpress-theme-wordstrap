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
                            <div class="row">
                                <div class="col-md-3">
                                    IMAGE HERE
                                </div>
                                <div class="col-md-9">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
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