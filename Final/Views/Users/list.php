<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<div class="container">
	
	<h2>Users</h2>
	
	<a href="?action=new">Add Contact</a>
	
	<table class="table table-hover table-bordered table-striped">
		<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Type</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs): ?>
			<tr>
				<td><?=$rs['FirstName']?></td> 
				<td><?=$rs['LastName']?></td>
				<td><?=$rs['UserTypes_id']?></td>
				<td>
					<a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>"></a>
					<a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>"></a>
					<a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>"></a>
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
