<?php
/**
 * Template Name: Front Page Template
 *
 * Description: Site web des couches culottes Home page. 
 *
 * @package WordPress
 * @subpackage Lescouchesculottes
 */?>
   <?php get_header();  ?>
        <div class="container">
            <section class="left">
              <h1>Les ateliers<br> de tata</h1>
                        <div class="demo1">
                            <div>
                                 <?php query_posts('category_name=Atelier_de_Tata&showposts=4'); ?>
                                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>  
                          <div>
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                                        <!--<p><?php the_title(); ?></p>-->
                            <a class="group1" width="1010" height="677" href="<?php echo $url; ?>"><img src="<?php echo $url; ?>" width="130" height="87"></a>
                                   <!--<p><?php the_content(); ?></p>-->
                          </div>
                        <?php endwhile;endif; wp_reset_query(); ?>          
                    </div>
                  </div>                   
            </section>
            <section class="home">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                 <?php endwhile;endif;  ?>
            </section>

            <div class="right">
                 <h1>Connectez<br> vous</h1>
              <?php get_sidebar('main'); ?>
              <?php include("formulaire.php"); ?>
            </div>

            <div class="right">
               <h1>L'ateliers des associations</h1>
                        <div class="demo1">
                            <div>
                                 <?php query_posts('category_name=Atelier_association&showposts=4'); ?>
                                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>  
                          <div>
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                                        <!--<p><?php the_title(); ?></p>-->
                            <a class="group1" width="1010" height="677" href="<?php echo $url; ?>"><img src="<?php echo $url; ?>" width="130" height="87"></a>
                                   <!--<p><?php the_content(); ?></p>-->
                          </div>
                        <?php endwhile;endif; wp_reset_query(); ?>          
                    </div>
                  </div>      

            </div>

            <section class="left">
               <h1>Salle <br> de jeux</h1>
                        <div class="demo1">
                            <div>
                                 <?php query_posts('category_name=salle-de-jeux&showposts=4'); ?>
                                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>  
                          <div>
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                                        <!--<p><?php the_title(); ?></p>-->
                            <a class="group1" width="1010" height="677" href="<?php echo $url; ?>"><img src="<?php echo $url; ?>" width="130" height="87"></a>
                                   <!--<p><?php the_content(); ?></p>-->
                          </div>
                        <?php endwhile;endif; wp_reset_query(); ?>          
                    </div>
                  </div>    



            </section>
              <section class="home"style="font-size:20px; text-align:center;padding:10px; line-height:3;">
               L’association<br>

ATELIERS : DE 9H 30 à 11H <br>

LES LUNDI : JEUX DE BALLON<br>
MARDI : ATELIER PEINTURE SUR INSCRIPTION<br>
UN JEUDI SUR DEUX  MOTRICITÉ<br>
UN JEUDI SUR DEUX ATELIERS GOMETTE PÂTE A SEL ET AUTRE<br>
UN VENDREDI SUR DEUX ÉVEIL MUSICAL PAR 
            </section>
        </div>
    </div>
    <div style="clear:both;"></div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    </body>
</html>

<?php get_footer(); ?>