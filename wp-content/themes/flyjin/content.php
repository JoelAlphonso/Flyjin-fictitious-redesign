
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	
	<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
	<div class="entry-content">
		<?php
			if(post_excerpt){ the_excerpt();
			the_post_thumbnail();
			}
			else{
			the_content( sprintf(
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		}?>
	</div>
	




</article>