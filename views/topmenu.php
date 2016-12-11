<nav id="tm-topbar" class=" uk-navbar uk-contrast ">
            <div class="uk-container uk-container-center ">
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li>
                        <a href=""><i class="uk-icon-facebook-square uk-icon-small"></i></a>

                    </li>
                    <li>
                        <a href="#"><i class="uk-icon-twitter-square uk-icon-small"></i></a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="uk-icon-instagram uk-icon-small"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uk-icon-pinterest uk-icon-small"></i></a>
                    </li>
                    
                </ul>
                <div class="uk-navbar-flip">
                    
                    <ul class="uk-navbar-nav uk-hidden-small">
                        

                        <?php
foreach ($topmenu as $page) {
    ?>
    <li>
    <a href="<?php echo $page['url'];?>">
        <?php echo $page['label']; ?>
    </a>
    </li>
    <?php
}
?> 
                    </ul>
                </div>
            </div>
            
        </nav>