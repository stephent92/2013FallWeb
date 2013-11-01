<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<div class="container">
	
	<h2>Addresses</h2>
	
	<a href="?action=new">Add Address</a>
	
	<table class="table table-hover table-bordered table-striped">
		<thead>
		<tr>
			<th>User</th>
			<th>Address Type</th>
			<th>PO BOX</th>
			<th>Street</th>
			<th>City</th>
			<th>State</th>
			<th>Country</th>
			<th>Zip Code</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['Users_id']?></td> 
				<td><?=$rs['AddressTypes_id']?></td>
				<td><?=$rs['POBOX']?></td>
				<td><?=$rs['Street']?></td>
				<td><?=$rs['City']?></td>
				<td><?=$rs['State']?></td>
				<td><?=$rs['Country']?></td>
				<td><?=$rs['ZIP']?></td>
				<td>
					<a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
					<a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
					<a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
				</td>
			</tr>
		<? endforeach ?>
		</tbody>
	</table>
</div>

<div id="myModal" class="modal slide"></div>

<? function Scripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(".table").dataTable();
	</script>
<? } ?>
