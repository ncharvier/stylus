
            <footer id="main-footer">
                <div class="d-flex align-items-center justify-content-between">
                    <?php
                        $logo = get_custom_logo();
                        if ($logo != null){
                            $logo;
                        }
                    ?>
                    <div>
                        2022  Figma Template by ESGI
                    </div>
                    <div>
                        <?php
                        $url_facebook = get_theme_mod('url_facebook', null);
                        if($url_facebook != null){
                            echo "<a href='".$url_facebook."'> ".getIcon('facebook')."</a>";
                        }
                        ?>

                        <?php
                        $url_linkedin = get_theme_mod('url_linkedIn', null);
                        if($url_linkedin != null){
                            echo "<a href='".$url_linkedin."'> ".getIcon('linkedIn')."</a>";
                        }
                        ?>
                    </div>
                </div>
            </footer>
		<?php wp_footer() ?>
	</body>
</html>
