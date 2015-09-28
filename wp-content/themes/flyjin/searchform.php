<!-- search -->

<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">


	<button class="search-submit" type="submit" role="button"><img src="<?php bloginfo('template_url'); ?>/img/loupe.png"></button>
	<input 
	    class="search-input" 
	    type="search" 
	    name="s" 
	    id="s"
	    value="RECHERCHE" 
        onClick="if(this.value == 'RECHERCHE') this.value='';" 
        onBlur="if(this.value == '') this.value='RECHERCHE';" 
        type="text">

	

</form>

<!-- /search -->

