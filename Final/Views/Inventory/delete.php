<h3>
	Are you sure you want to delete the inventory for ID
	<?=$model['id'] ?>?
</h3>
<form action="?action=delete" method="post">
	<input type="hidden" name="id" value="<?=$model['id']?>" />
    <input type="submit" class="btn btn-primary" value="Delete" />
	<a href="?action=list" class="btn btn-primary">No, you're right.</a>
</form>