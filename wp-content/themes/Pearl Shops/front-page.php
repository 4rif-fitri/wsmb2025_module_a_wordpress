<?php
get_header();

$posts = get_posts();
?>

<main>
    <section aria-label="Home Page Contents" id="section-home-content">
        <article id="home-news-wrapper">
            <h2 class="mb-1 mt-2">News Post</h2>
            <?php foreach($posts as $post): ?>
                <div id="home-news">
                    <a href="<?=get_the_permalink($post)?>"><?=get_the_title($post)?></a>
                </div>
            <?php endforeach;?>

        </article>
        <article id="home-pearls-wrapper">
            <h2 class="mb-1 mt-2">Our Products</h2>
            <div id="home-pearls">
                <div class="home-selected-pearls">
                    <!-- selected pages -->
                    <?php 
                        $pearls = get_pages();
                        foreach($pearls as $selectedPearl):
                            $template = get_post_meta($selectedPearl->ID,'_wp_page_template',true);
                            if($template == 'template-selected-pearl.php'):
                    ?>
                        <div class="home-pearl">
                            <a href="<?=get_the_permalink( $selectedPearl)?>">
                                <?=get_the_post_thumbnail($selectedPearl)?>
                            </a>
                        </div>

                        
                    <?php endif;endforeach;?>
                </div>


                <div class="home-general-pearls">
                    <!-- general pages -->
                    <?php 
                        $pearls = get_pages();

                        foreach($pearls as $generalPearl):
                            $template = get_post_meta($generalPearl->ID,'_wp_page_template',true);
                            if($template != 'template-selected-pearl.php'):
                    ?>
                        <div class="home-pearl">
                            <a href="<?=get_the_permalink( $generalPearl)?>">
                                <?=get_the_post_thumbnail($generalPearl)?>
                            </a>
                        </div>
                    <?php endif;endforeach;?>
                </div>

            </div>

        </article>
    </section>
</main>


<?php
    get_footer();

?>