<?php
    /**
     * Template Name: Contenido Centrado
     */
    get_header();
?> 
    <main>
        <h1>Template contenido centrado</h1>
        <?php
            if (have_posts()) {
                while (have_posts()) {
                    if(has_post_thumbnail()){
                        the_post_thumbnail('full', array('class' => 'img-fluid'));
                    }
                    the_post();
                    the_title('<h2>', '</h2>');
                    the_content();
                }
            } else {
                echo '<p>No content found</p>';
            }
        ?>
    </main>
</body>
</html>