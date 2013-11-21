<div class="container">

	<h2>Our Products</h2>
	
	<? foreach ($model as $rs): ?>
		<div class="well">
			<img src="<?=$rs['Img']?>" href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal" width="128" class="btn btn-default"></img>
			<?=$rs['Item']?>
			$<?=$rs['Price']?>
		</div>
	<? endforeach ?>
</div>

<div id="myModal" class="modal fade" data-backdrop="static"></div>
