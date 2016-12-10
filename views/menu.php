<ul>
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