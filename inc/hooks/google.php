<?php

/**
 * Adds Google Site Tag to Production
 */
function ajs_google_site_tag() {
	
	if ( get_site_url() !== 'https://anthonyskelton.com/wp' ) {
		return;
	}

	?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86432350-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-86432350-1');
	</script>
	<?php
}
add_action( 'wp_head', 'ajs_google_site_tag', -10 );