					<footer class="footer" role="contentinfo">
					<hr>
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns text-center">
								<?php
								$CopyRight_text = get_option( 'CopyRight_text', '' );
								 if (empty($CopyRight_text)) { ?>

									<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>

								<?php  } else {  ?>

									<?php echo html_entity_decode(get_option( 'CopyRight_text', '' )); ?>

								<?php  }  ?>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->