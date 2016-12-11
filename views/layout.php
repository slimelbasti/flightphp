<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <link rel="apple-touch-icon-precomposed" href="assets/img/apple-touch-icon.png">
        <!--     Include UIKit CSS   -->
        <link rel="stylesheet" href="assets/css/uikit.min.css">
        <!--     Theme CSS   -->
        <link rel="stylesheet" href="assets/css/theme.css">

    </head>
    <body>
    <?php echo $topmenu_content; ?>

    <?php
      if(isset($id)){
        echo $id;
      }
    ?>
<nav id="tm-header" class="uk-navbar  ">
            <div class="uk-container uk-container-center ">
                <a class="uk-navbar-brand uk-hidden-small" href="index.php"><i class="uk-icon-small uk-text-primary uk-margin-small-right uk-icon-play-circle"></i> FORJA.TN</a>
                
                <form class="uk-search uk-margin-small-top uk-margin-left uk-hidden-small" method="post" >
                    <input class="uk-search-field" type="search" placeholder="Rechercher..." autocomplete="off" name="search">
                    <input type="submit" name="submit"
                    class="uk-form-label" value="rechercher" >
                    <div class="uk-dropdown uk-dropdown-flip uk-dropdown-search" aria-expanded="false"></div></form>

                    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small uk-icon-medium" data-uk-offcanvas></a>
                    <div class="uk-navbar-flip uk-visible-small">
                        <a href="#offcanvas" class="uk-navbar-toggle uk-navbar-toggle-alt uk-icon-medium" data-uk-offcanvas></a>
                    </div>
                    <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><i class="uk-icon-small uk-text-primary uk-margin-small-right uk-icon-play-circle"></i> forja.TN</div>
                    
                </div>
            
            </nav>
<?php echo $menu_content; ?>
            
           
<div class="uk-container uk-container-center">
            <img src="https://storage.googleapis.com/support-kms-prod/SNP_59D432450939ECC60A21BEDBEE985B1817B1_3094744_en_v2" alt="https://storage.googleapis.com/support-kms-prod/SNP_59D432450939ECC60A21BEDBEE985B1817B1_3094744_en_v2" class="transparent">
</div>

<div class="uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom">
                
                <div class="uk-grid">
                    <div id="tm-left-section" class="uk-width-medium-3-10 uk-width-large-2-10 uk-hidden-small">
                        
                        <?php echo $menulateral_content; ?>









   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>