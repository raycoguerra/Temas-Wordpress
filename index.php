<?php
    get_header();
?> 
    <main>
        <h1>Estoy en index.php</h1>
        <?php
            get_template_part('template-parts/loop-generico');
        ?>
    </main>
<?php
    get_footer();
?>