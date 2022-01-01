<?php get_header() ?>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column position-relative align-items-sm-center justify-content-center pt-5 pb-5">
                <header>
                    <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
                </header>
                <div class="col-lg-6 mx-auto pt-5 pb-5">
                    <?php while ( have_posts() ) : ?>
                		<?php the_post(); ?>
                		<h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                	<?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>
