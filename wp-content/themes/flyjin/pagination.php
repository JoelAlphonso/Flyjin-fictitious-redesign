<!-- pagination -->
<div class="pagination">

<h1>!PAGINATION</h1>

	<?php

		global $wp_query;
		$big = 2;
		echo paginate_links(array(
			'base' => str_replace($big, '%#%', get_pagenum_link($big)),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $wp_query->max_num_pages
		));

	?>

</div>
<!-- /pagination -->
