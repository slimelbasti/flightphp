<nav class="uk-navbar uk-navbar-secondary  uk-hidden-small">
                <div class="uk-container-center uk-container">
                    <ul class="uk-navbar-nav">
<?php

foreach ($pages as $page) {
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