<?php
    get_header();
?>

<p>front-page-content</p>

<!-- Wordpress Loop -->
<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_content();
        }
    }
?>


<?php
    get_footer();
?>