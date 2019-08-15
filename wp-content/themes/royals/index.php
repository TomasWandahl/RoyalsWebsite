<?php get_header(); ?>
    <section class="hero" style="min-height: 420px !important;">
                <?php
                    // Define our WP Query Parameters 
                    $query_options = array(
                        'posts_per_page' => 1,
                    );
                    $the_query = new WP_Query( $query_options ); 

                    while ($the_query -> have_posts()) : $the_query -> the_post();

                    if( has_post_thumbnail() ) {
                        $has_thumbnail = true;
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                        $thumb_url = $thumb_url_array[0];
                    }

                ?>


                <div style="<?php if($has_thumbnail) { ?>background-image: url('<?php echo $thumb_url; ?>');<?php } ?>"class="latest_news">
                    <div class="latest_news_content">

                    <h1 class="main_header">
                        <?php echo the_title(); ?>
                    </h1>
                    <div style="color: #fff;"class="latest_news_excerpt">
                        <?php echo the_excerpt(); ?>
                    </div>
                    <?php 
                        endwhile;
                        wp_reset_postdata();
                    ?>
                    <a href="<?php echo get_permalink(); ?>"><div class="button">Läs mer</div></a>
                </div>
            </div>

        

        <div class="next_game">
            <div class="next_game_content">
                <h1 style="display: table; margin: 0 auto;"class=" main_header is-centered">Nästa match</h1>
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/royalslogo.png" alt="">
                    </div>
                    <div class="col-sm-2 next_game_seperator is-centered"> - </div>
                    <div class="col-sm-3">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/royalslogo.png" alt="">
                    </div>
                </div>
                <h1 class="is-centered">Heinz Field</h1>
                <h3 class="is-centered">2019-09-23 20:00</h3>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container content_container">

            <div class="news_feed">
                <h2 class="content_heading zero_margin">Nyheter</h2>
                <div class="news_feed_content">
                <?php
                    // Define our WP Query Parameters 
                    $query_options = array(
                        'posts_per_page' => 1,
                        'offset' => 1,
                    );
                    $the_query = new WP_Query( $query_options ); 

                    while ($the_query -> have_posts()) : $the_query -> the_post(); 
                ?>

                    <div class="news_card">
                        <div class="card_head" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/img/football.jpg')"></div>
                        <div class="card_title">
                            <h1>
                                <?php echo the_title(); ?>
                            </h1>
                            <p class="post_date">
                                <?php echo the_date(); ?>
                            </p>
                        </div>
                        <div class="card_text">
                            <?php echo the_excerpt(); ?>
                        </div>
                        <div class="card_foot">
                            <a href="<?php echo get_permalink();?>"><div class="button button-sm">Läs Mer</div></a>
                        </div>
                    </div>
                <?php 
                    endwhile;
                    wp_reset_postdata();
                ?>

                </div>
            </div>
            <div class="previous_games">
                <div class="previous_games_content">
                    <h2 class="content_heading">Senaste Matcherna</h2>
                    <div class="previous_game">
                        <div class="previous_game_header">
                            2019-01-23
                        </div>
                        <div class="game_card">
                            <div class="game_flex_child home_team">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/royalslogo.png" alt="">
                                <br>
                                <h3>21</h3>
                            </div>
                            <div class="game_flex_child prev_game_seperator"> - </div>
                            <div class="game_flex_child away_team">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/royalslogo.png" alt="">
                                <br>
                                <h3>21</h3>
                            </div>
                        </div>
                    </div>

                    <div class="previous_game">
                        <div class="previous_game_header">
                            2019-01-23
                        </div>
                        <div class="game_card">
                            <div class="game_flex_child home_team">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/royalslogo.png" alt="">
                                <br>
                                <h3>21</h3>
                            </div>
                            <div class="game_flex_child prev_game_seperator"> - </div>
                            <div class="game_flex_child away_team">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/royalslogo.png" alt="">
                                <br>
                                <h3>21</h3>
                            </div>
                        </div>
                    </div>
                    <div class="previous_game">
                        <div class="previous_game_header">
                            2019-01-23
                        </div>
                        <div class="game_card">
                            <div class="game_flex_child home_team">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/royalslogo.png" alt="">
                                <br>
                                <h3>21</h3>
                            </div>
                            <div class="game_flex_child prev_game_seperator"> - </div>
                            <div class="game_flex_child away_team">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/royalslogo.png" alt="">
                                <br>
                                <h3>21</h3>
                            </div>
                        </div>
                    </div>
                        <div class="table">
                            <div class="table_header">
                                <h2>Tabell 2018/2019</h2>
                            </div>
                            <table class="league_table">
                                <tbody>
                                    <tr class="table_head">
                                        <th>LAG</th>
                                        <th>W</th>
                                        <th>T</th>
                                        <th>L</th>
                                        <th>+/-</th>
                                    </tr>
                                    <tr>
                                        <td>KTH ROYALS</td>
                                        <td>12</td>
                                        <td>23</td>
                                        <td>23</td>
                                        <td>23</td>
                                    </tr>
                                    <tr>
                                        <td>UPPSALA SNAKEHEADS </td>
                                        <td>12</td>
                                        <td>23</td>
                                        <td>23</td>
                                        <td>23</td>
                                    </tr>
                                    <tr>
                                        <td>ÖREBRO BLACKJACKS</td>
                                        <td>12</td>
                                        <td>23</td>
                                        <td>23</td>
                                        <td>23</td>
                                    </tr>
                                    <tr>
                                        <td>CARLBERG CAVALIERS</td>
                                        <td>12</td>
                                        <td>23</td>
                                        <td>23</td>
                                        <td>23</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>

        </div>
    </section>
<?php get_footer(); ?>
</body>
</html>
