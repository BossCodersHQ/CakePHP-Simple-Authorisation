<div class="card blue lighten-4 z-depth-3" style="padding: 20px; border-radius: 20px">
	<div class="card blue lighten-3" style="padding: 5px; border-radius: 5px">
		<h2><?php echo h($post['Post']['title']); ?></h2>
	</div>

	<h3>Created: <?php echo $post['Post']['created']; ?></h3>
	<h4><?php echo h($post['Post']['body']); ?></h4>
</div>