<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<div class="container">
	
	<h2>Addresses</h2>
	
	<table class="table table-hover table-bordered table-striped">
		<thead>
		<tr>
			<th>ID</th>
			<th>Street</th>
			<th>PO BOX</th>
			<th>Zip Code</th>
			<th>Country</th>
			<th>City</th>
			<th>State</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['id']?></td> 
				<td><?=$rs['Street']?></td>
				<td><?=$rs['PO BOX']?></td>
				<td><?=$rs['ZIP']?></td>
				<td><?=$rs['Country']?></td>
				<td><?=$rs['City']?></td>
				<td><?=$rs['State']?></td>
				<td>
					
				</td>
			</tr>
		<? endforeach ?>
		</tbody>
	</table>
</div>

<? function Scripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(".table").dataTable();
	</script>
<? } ?>
