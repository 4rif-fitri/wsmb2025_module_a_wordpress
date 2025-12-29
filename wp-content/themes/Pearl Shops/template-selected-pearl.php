<?php
/*
    Template Name: Selected Pearl Products
*/
get_header();

$posts = get_posts([
    'category_name' => get_the_title(),
]);

?>
<style type="text/css">
    body{
        background: url("<?=get_the_post_thumbnail_url( get_the_ID(), 'full' )?>") fixed no-repeat !important;
        background-size: cover;
        background-position: 100% 90px;
        position: relative;
        z-index: 1;
        
    }

    body::after{
        z-index: -1;
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0,0,0,0.5);
    }

    .selected-pearl-wrapper{
        margin: 1rem auto 2rem;
        width: min(800px, 100%);
        padding: 1rem 1.5rem;
        border: 1px solid white;
        border-radius: 0.25rem;
        background-color: white;
    }
    .selected-pearl-wrapper h1{
        border-bottom: 1px solid white;
    }
    .selected-pearl-wrapper > p{
        text-align: justify;
    }


    /* news post */
    .selected-pearl-news-wrapper{
        border-radius: 0.25rem;
        position: relative;
        width: min(1000px, 100%);
        margin: 1rem auto 2rem;
        padding:1.5rem;
        height: fit-content;
        background-color: white;
    }
    .selected-pearl-news-wrapper::before{
        border-radius: 0.25rem;
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: -1;
    }
    .selected-pearl-news{
        display: flex;
        justify-content: center;
        gap: 1rem;
        height: 300px;
    }
    .selected-pearl-news > img{
        object-fit: cover;
        height: auto;
        flex: 30% 1 1;
        width: 30%;
    }
    .selected-pearl-news-content{
        flex: 70% 0 0;
        position: relative;
    }
    .selected-pearl-news-content p{
        text-align: justify;
    }
    .selected-pearl-news-content > .selected-pearl-news-meta{
        position: absolute;
        bottom: 12px;
        right: 12px;
    }

    /* responsive */
    @media screen and (max-width: 768px){
        .selected-pearl-news{
            flex-direction: column;
            flex-wrap: wrap; 
            height: 100%;
        }
        .selected-pearl-news > img{
            flex-basis: 100%;
            width: 100%;
        }
        .selected-pearl-news-content{
            flex-basis: 100%;
        }
        .selected-pearl-news-meta{
            position: static!important;
            margin-top: 1rem;
            text-align: right;
        }
    }
</style>

<section aria-label="<?=get_the_title()?>'s Content Section" class="mb-3">
    <div class="selected-pearl-wrapper">
        <h1 class="mb-1 text-center text-underline"><?=get_the_title()?></h1>
        <p><?=get_the_content()?></p>
    </div>
</section>
<?php if(count($posts) > 0):?>
<section aria-label="<?=get_the_title()?>'s News Posts">
    <div class="selected-pearl-news-wrapper">
        <h1 class="mb-1 text-center text-underline"><?=get_the_title()?>'s News Posts</h1>
        <?php

            foreach($posts as $post):
        ?>
        <article class="selected-pearl-news mb-1">
            <?=get_the_post_thumbnail($post)?>
            <div class="selected-pearl-news-content">
                <h2 class="mb-1"><?=get_the_title($post)?></h2>
                <p><?=get_the_content($post)?></p>
                <div class="selected-pearl-news-meta">
                    <?=get_the_author_meta('display_name',$post->post_author)?>, <?=get_the_time('d/m/Y h:i a')?>
                </div>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<?php 

get_footer();