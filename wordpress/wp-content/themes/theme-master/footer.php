	<div class="footer layout">
		<div class="left-side"><a href="https://twitter.com/paul_irish"></a></div>
		<div class="right-side">
			<a href="https://twitter.com/paul_irish">@Paul_Irish</a>
				<span>somebody had to write this. thank you.</span>
			<nav>
				<a href="#">there is no trivial way to know when they are loaded, unfortunately.</a>
				<a href="#">can you email me? holler@{myname}.com thx mucho. also just realized you're also the csshover.htc guy! so awesome! :)</a>
				<a href="#">airbnb probably has some great choices</a>
				<a href="#">yo man. i ended up getting a different place.. a studio.. so i don't think i can host you, unfortch.</a>
				<a href="#">more tweets...</a>
			</nav>
		</div>
	</div>

	<div id="footer"></div>
	<?php

	if( $ga_account = get_option('ga_account') ){
		?>
		<script>
		var _gaq=[['_setAccount','<?php echo $ga_account; ?>'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
		<?php
	}

	if( WP_DEBUG ){ echo '<!-- #footer -->'; }

	wp_footer();
	?>
</body>
</html>