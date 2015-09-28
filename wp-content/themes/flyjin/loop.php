<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- CHAQUE FICHE DE COLLECTION SONORE EST DANS UNE BALISE <article>. -->
        <article id="post-<?php the_ID(); ?>"  class='post'; <?php post_class(); ?>>
   <?php if( have_rows('photos') ): the_row(); $image = get_sub_field('photo'); ?>
      
		<div class='items' style="
background-image: url(<?php echo $image['sizes']['petite']?>); 
background-size:cover;
background-position:center;
height:246px;
border:solid white 1px;">
    	    <a class="carte" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            	
                <!-- TITRE -->
                <h1 style='display:none;'><?php the_title(); ?></h1>
                
		 <!-- ÉTOILES -->
                <?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings(get_the_ID()); endif; ?>
          
               
          <?php else: ?>
                <?php endif; ?>
	
              	<a style='display:none;' href="<?php the_permalink(); ?>"> <img src="<?php bloginfo('template_url'); ?>/img/play.png" alt='play' style="width:25%; position:center;" class='play'></a>
                <?php 
                    $equipiers = '';
                    while ( have_rows('auteurs_des_enregistrements') ) {
                        the_row();
                        $equipiers .= get_sub_field('equipier')['user_firstname'] . ' ';
                        $equipiers .= get_sub_field('equipier')['user_lastname'] . ' &amp; ';
                    }
                    $equipiers = rtrim($equipiers, ' &amp; ');
                ?>
                <p style='display:none;' class="equipe"><?php echo _('Par ') . $equipiers; ?></p>
                   

      
            </a>
         </div>
        </article>

    <?php endwhile; ?>

<?php else: ?>

	<h2>Aucune information n'a été trouvée, meilleur chance la prochaine fois</h2>

<?php endif; ?>
