	<div class="footer layout">
		<div class="left-side"><a href="https://twitter.com/paul_irish"></a></div>
		<div class="right-side">
			<p>@Paul_Irish</p>
			<nav>
				<div>somebody had to write this. thank you.</div>
				<div>there is no trivial way to know when they are loaded, unfortunately.</div>
				<div>can you email me? holler@{myname}.com thx mucho. also just realized you're also the csshover.htc guy! so awesome! :)</div>
				<div>airbnb probably has some great choices</div>
				<div>yo man. i ended up getting a different place.. a studio.. so i don't think i can host you, unfortch.</div>
				<div>more tweets...</div>
			</nav>
		</div>
	</div>

	<div id="footer">
		<div class="rights">
			<p>&copy; <?php echo date('Y'); ?>. All Rights Reserved.</p>
		</div>
	</div>
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