<div class="container">

	<h2>Our Products</h2>
	
	<? foreach ($model as $rs): ?>
		<div class="well">
			<div class="media">
				<a class="pull-left" href="#">
					<img src="<?=$rs['Img']?>" href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal" width="256" class="btn btn-default"></img>
				</a>
				<div class="media-body">
					<h4 class="media-heading"><?=$rs['Item']?></h4>
					<p><?=$rs['Description']?></p><br>
					<ul class="pager">
						<div class="btn btn-primary pull-left" href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal">$<?=$rs['Price']?></div>
						<a href="?action=purchase&id=<?=$rs['id']?>" class="btn btn-success pull-right">Purchase</a>
					</ul>
				</div>
			</div>
		</div>
	<? endforeach ?>
</div>

<div id="myModal" class="modal fade" data-backdrop="static"></div>
