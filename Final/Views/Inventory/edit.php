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
		
		<div class="form-group <?=isset($errors['Quantity']) ? 'has error' : '' ?>">
			<label for="Quantity" class="col-sm-2 control-label">Quantity</label>
			<div class="col-sm-10">
				<input type="text" name="Quantity" id="Quantity" placeholder="Quantity" class="form-control" value="<?=$model['Quantity']?>"/>
				<? if(isset($errors['Quantity'])): ?><span class = "error"><?=$errors['Quantity'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['Item']) ? 'has error' : '' ?>">
			<label for="Item" class="col-sm-2 control-label">Item</label>
			<div class="col-sm-10">
				<input type="text" name="Item" id="Item" placeholder="Item" class="form-control" value="<?=$model['Item']?>"/>
				<? if(isset($errors['Item'])): ?><span class = "error"><?=$errors['Item'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="Save"/>
			</div>
		</div>
	</form>
</div>