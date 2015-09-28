<?php get_header(); ?>
 
<main role="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
            <!-- post thumbnail -->
            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                </a>
            <?php endif; ?>
            <!-- /post thumbnail -->
                
               <!-- PHOTO --> 
               <?php if( have_rows('photos') ): ?>
                    <ul class="photos owl-carousel">
                        <?php while ( have_rows('photos') ) : the_row(); ?>
                            <li>
                                <?php $image = get_sub_field('photo'); //var_dump($image);?>
                                <img src="<?php echo $image['sizes']['petite']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </li>
                        <?php endwhile; ?>
                        <?php 
                            $extra = 0;
                            $photos = get_field('photos');
                            $count = count($photos);
                            if ( $count < 5 ) $extra = 5 - $count;
                            while ($extra > 0): ;
                            //var_dump($photos);
                        ?>
                            <li>
                                <?php $image = $photos[($count - $extra - 1) % $count]['photo']; ?>
                                <img src="<?php echo $image['sizes']['petite']; ?>" alt="<?php echo $image['alt']; ?>" />
                                
                            </li>
                        <?php $extra--; endwhile; ?>
                    </ul>
                <?php else: ?>
                        <!--no rows found-->
                <?php endif; ?>
                
                <div class="titreEtDesigners">
                
                    <!-- TITRE -->
                    <h1>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h1>
                    
                    <!-- DESIGNERS --> 
                    <?php if( have_rows('auteurs_des_enregistrements') ): ?>
                    
                    <div class="designers">
                    
                        <span>Par: </span>
                    
                        <ul>
                            <?php 
                                $i = 0;
                                $total = count( get_field('auteurs_des_enregistrements') );
                                //echo $total;
                                while ( have_rows('auteurs_des_enregistrements') ) : 
                                    $i++;
                                    the_row(); 
                            ?>
                                <li>
                                    <?php $row = get_sub_field('equipier'); ?>
                                    
                                    <?php //echo $row['user_avatar'] ?>
                                    


                                    <?php if (!empty($row['user_url'])): ?> 
                                    <a href="<?php echo $row['user_url'] ?>">
                                    <?php endif; ?> 
                                    
                                    <?php echo implode(' ', array($row['user_firstname'], $row['user_lastname'])); ?><?php if (!empty($row['user_url'])): ?></a><?php endif; ?> 
                                    
                                    <?php if ($i < $total) echo '&amp;' ?> 
                                </li>
                            <?php endwhile; ?>
                        </ul>
                        
                        <!-- DATE --> 
                        <?php                 
                            $date = DateTime::createFromFormat('Ymd', get_field('date_de_lenregistrement'));
                        ?>
                        <span>(<?php echo $date->format('Y-m-d'); ?>)</span>
                        
                    </div>
                    
                </div>
                
                <!-- ÉTOILES -->
                <?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings(get_the_ID()); endif; ?>
                    

            <?php else: ?>
                    <!--no rows found-->
            <?php endif; ?>
     
     
            <section class="infos">
            
                <?php the_content(); // Dynamic Content ?>
    
                
                
                
                <!-- DESCRIPTION --> 
                <p class="description"><?php the_field('description'); ?></p>
                
                <!-- TAGS --> 
                <?php the_tags( __( 'Mots-clés: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
                

                
                
                <!-- LIEU -->
                <?php 
                    $location = get_field('geolocalisation');
                    if( !empty($location) ):
                ?>
                    <div class="acf-map">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>
                <?php endif; ?>
                
                <!-- MICROPHONE --> 
                <?php if( have_rows('mics') ): ?>
                           
                    <h3>Micro(s) utilisé(s):</h3>
                    
                    <ul>
                        <?php while ( have_rows('mics') ) : the_row(); ?>
                            <li>
                                <?php the_sub_field('mic'); ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
    
                <?php else: ?>
                        <!--no rows found-->
                <?php endif; ?>
                
    
                <!-- FRÉQUENCE --> 
                <h3>Fréquence & résolution:</h3>
                <p><?php the_field('frequence_dechantillonnage'); ?>, <?php the_field('resolution'); ?></p>
                        
                
            </section>


            <section class="sons">
                
                <!-- ARCHIVE --> 
                <h3>Téléchargement</h3>
                <?php //var_dump(get_field('archive')); ?>
                <p><a href="<?php echo get_field('archive')['url']; ?>">Téléchargez tous les sons en haute résolution!</a></p>
                
                <!-- MP3 --> 
                <?php if( have_rows('sons') ): ?>
                           
                    <h3>Sons :</h3>
                    
                    <ul>
                        <?php while ( have_rows('sons') ) : the_row(); ?>
                            <li>
                                <?php echo do_shortcode('[sc_embed_player fileurl="' . get_sub_field('fichier_mp3')['url'] . '"]'); ?>
                                <p style="display: inline"><?php echo get_sub_field('fichier_mp3')['title']; ?></p>
                                
                                <?php //the_sub_field('fichier_mp3'); ?>
                                <?php //var_dump(get_sub_field('fichier_mp3')); ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
    
                <?php else: ?>
                        <!--no rows found-->
                <?php endif; ?>
                
            </section>
            
            





		  <?php comments_template(); ?>

		</article>
		

	<?php endwhile; ?>

	<?php else: ?>

		<article>
			<h1>Désolé, aucun contenu à afficher</h1>
		</article>

	<?php endif; ?>
	
</main>

<?php get_footer(); ?>
