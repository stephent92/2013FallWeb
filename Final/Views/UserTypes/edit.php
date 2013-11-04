<style type = "text/css">
    .error{color:red;}
</style>

<div class="container">

	<? if(isset($errors) && $errors): ?>
        <ul class="error">
        <? foreach ($errors as $key => $value): ?>
            <li>
                <label><?=$key?>:</label><?=$value?>
            </li>
        <? endforeach; ?>
        </ul>
    <? endif; ?>

	<form action="?action=save" method="post" class="form-horizontal row">
		<input type="hidden" name="id" value="<?=$model['id']?>"/>
		
		<div class="form-group <?=isset($errors['Inventory_id']) ? 'has error' : '' ?>">
			<label for="Inventory_id" class="col-sm-2 control-label">Inventory ID</label>
			<div class="col-sm-10">
				<input type="text" name="Inventory_id" id="Inventory_id" placeholder="Inventory ID" class="form-control" value="<?=$model['Inventory_id']?>"/>
				<? if(isset($errors['Inventory_id'])): ?><span class = "error"><?=$errors['Inventory_id'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['Supplier']) ? 'has error' : '' ?>">
			<label for="Supplier" class="col-sm-2 control-label">Supplier</label>
			<div class="col-sm-10">
				<input type="text" name="Supplier" id="Supplier" placeholder="Supplier" class="form-control" value="<?=$model['Supplier']?>"/>
				<? if(isset($errors['Supplier'])): ?><span class = "error"><?=$errors['Supplier'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="Save"/>
			</div>
		</div>
	</form>
</div>