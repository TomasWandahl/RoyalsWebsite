<?php get_header(); ?>
    <style>
        .single_post_container {
            padding:0;
            background-color: #fff;
            margin-top: 40px;
            min-height: 659px;
            width: 50vw !important;
            margin-bottom: 40px;
        }
        .single_post_container h1, p {
            padding: 0px 20px 0px 20px;
        }
        .single_post_container p {
            font-size: 14px;
        }
        .single_post_container h1 {
            padding-top: 20px;
            margin-bottom: 0px;
        }
        .single_post_container .the_date {
            font-size: 12px;
            font-style: italic;
        }
        .single_post_container img {
            width: 100%;
            height: auto;
        }
        @media only screen and (max-width: 1000px) {
            .single_post_container {
                width: 100vw !important;
                margin: 0;            }
        }
    </style>
    <div style=""class="container single_post_container">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php if(has_post_thumbnail()) : the_post_thumbnail(); endif;?>
            <h1> <?php echo the_title(); ?> </h1>
            <p class="the_date"><?php the_date();?></p>
            <p>
                <?php echo the_content(); ?>
            </p>
        <?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>