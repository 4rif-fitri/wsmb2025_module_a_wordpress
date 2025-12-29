<?php get_sidebar(); ?>

<footer id="footer" role="contentinfo">
<div id="copyright" class="text-center">
Copyright &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?>  - All rights reserved
</div>
<div id="social-links">
    <?php 
        // 1. TWITTER
        // Get the full field object (contains value AND settings)
        $field_twitter = get_field_object('field_692ff39d87e11');
        $link1 = $field_twitter['value'];

        // If the value is empty, use the 'default_value' from ACF settings
        if( empty($link1) ){
            $link1 = $field_twitter['default_value'];
        }
    ?>
    <a href="<?= $link1 ?>" title="Click To Visit Our Twitter Page">Twitter</a>


    <?php 
        // 2. FACEBOOK
        $field_facebook = get_field_object('field_692ff3c887e12');
        $link2 = $field_facebook['value'];

        if( empty($link2) ){
            $link2 = $field_facebook['default_value'];
        }
    ?>
    <a href="<?= $link2 ?>" title="Click To Visit Our Facebook Page">Facebook</a>


    <?php 
        // 3. INSTAGRAM
        $field_instagram = get_field_object('field_692ff3dd87e13');
        $link3 = $field_instagram['value'];

        if( empty($link3) ){
            $link3 = $field_instagram['default_value'];
        }
    ?>
    <a href="<?= $link3 ?>" title="Click To Visit Our Instagram Page">Instagram</a>
</div>

</footer>
</div>
</body>
</html>