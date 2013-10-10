<div class="container">
	<? foreach ($model as $value): ?>
		<div>
			<?=$value['id']?>
			<?=$value['Name']?>
		</div>
	<? endforeach; ?>
</div>