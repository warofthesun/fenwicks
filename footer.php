			<footer class="footer" role="contentinfo">
				<div id="inner-footer" class="wrap clearfix">
					<div class="threecol first">
						<div class="logo"></div>
					</div>
					<div class="fivecol">
						<nav role="navigation">
								<?php bones_footer_links(); ?>
						</nav>
					</div>
					<div class="fourcol last txt-align">
						<div><a href="/employment" class="button employment">Employment</a></div>
						<!--form method="post" id="signup" action="https://app.e2ma.net/app2/audience/signup/1773119/1743810/?v=a">
						<input type="hidden" name="prev_member_email" id="id_prev_member_email">
						<input type="hidden" name="source" id="id_source">
						<input type="hidden" name="group_1758146" value="1758146" id="id_group_1758146">
						<input type="hidden" name="prev_member_email" value="">
						<input type="email" name="email" id="id_email" required placeholder="Email Updates">
						<button name="Submit" type="submit" class="button"><i class="fw-right-arrow"></i></button>
					</form-->
						<div class="copyright">&copy;<?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> &bull; Site by <a href="#">The SplitPixel</a></div>
					</div>
				</div> <?php // end #inner-footer ?>
			</footer> <?php // end footer ?>
		</div> <?php // end #container ?>
		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
		<!-- makes the dinner menus load and change on click -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script>
		function showonlyone(thechosenone) {
			$('.newboxes').each(function(index) {
				if ($(this).attr("id") == thechosenone) {
					$(this).show(200);
				}
				else {
					$(this).hide(600);
				}
			});
		}
		</script>
	</body>

</html> <?php // end page. what a ride! ?>
