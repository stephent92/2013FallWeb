<tr class="<?= $rs['id']==$_REQUEST['id'] ? 'success' : '' ?>">
	<td><?=$rs['Category']?></td>
	<td>
		<a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>"></a>
		<a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>"></a>
		<a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>"></a>
	</td>
</tr>