<?php get_header(); ?>

    <section>
        <div class="container">
            <?php
                $post_type = get_post_type_object( get_post_type($post) ); 
                $name = $post_type->label;
            ?>
            <h1 class="archive-title"><?php echo $name; ?></h1>
            
            <div class="loop-inner">
                <?php get_template_part( 'loop-franchise' ); ?>
            </div>

            <?php get_template_part( 'pagination' ); ?>
               
        </div>

    </section>

<?php get_footer(); ?>