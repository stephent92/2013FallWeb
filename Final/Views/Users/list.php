<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<style>
	tr.success2, tr.success2 td{
		background-color: #FFAA00 !important;
	}
</style>

<div class="container">
	
	<h2>Users</h2>
	
	<? if(isset($_REQUEST['status']) && $_REQUEST['status'] == 'Saved'): ?>
		<div class="alert alert-success">
			<button type="button" class="close" aria-hidden="true">&times;</button>
			<b>Success!</b> Your user has been saved.
		</div>
	<? endif ?>
	
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
			<tr class="<?= $rs['id']==$_REQUEST['id'] ? 'success' : '' ?>">
				<td><?=$rs['FirstName']?></td> 
				<td><?=$rs['LastName']?></td>
				<td><?=$rs['UserType_Name']?></td>
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
	$(function(){
        $(".table").dataTable();
        $(".alert .close").click(function(){
        	$(this).closest(".alert").slideUp();
        });
        
        $(".table tr").click(function(){
        	$(this).toggleClass("success2");
        });
    })
    </script>
<? } ?>
