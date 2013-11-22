<div class="container">

	<h2>Our Products</h2>
	
	<? foreach ($model as $rs): ?>
		<div class="well">
			<div class="media">
				<a class="pull-left" href="#">
					<img src="<?=$rs['Img']?>" href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal" width="128" class="btn btn-default"></img>
				</a>
				<div class="media-body">
					<h4 class="media-heading"><?=$rs['Item']?></h4>
					<?=$rs['Description']?><br>
				</div>
				<ul class="pager">
					<li class="previous"><a href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal">$<?=$rs['Price']?></a></li>
					<li class="previous"><a href="#">Purchase</a></li>
				</ul>
			</div>
		</div>
	<? endforeach ?>
</div>

<div id="myModal" class="modal fade" data-backdrop="static"></div>
