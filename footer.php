		<div class="container">
            <div class="row">
                <div class="col-4">

                </div>
            </div>
			<div class="row">
				<div class="col-md-6 offset-3">
					<footer id="site-footer">

                        <?php
                        $url_facebook = get_theme_mod('url_facebook', null);
                        if($url_facebook != null){
                            echo "<a href='".$url_facebook."'> ".getIcon('facebook')."</a>";
                        }
                        ?>

                        <?php
                        $url_linkedin = get_theme_mod('url_linkedIn', null);
                        if($url_linkedin != null){
                            echo "<a href='".$url_linkedin."'> ".getIcon('linkedin')."</a>";
                        }
                        ?>
					</footer>
				</div>
			</div>
		</div>
		<?php wp_footer() ?>
	</body>
</html>
