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
		
		<div class="form-group <?=isset($errors['Users_id']) ? 'has error' : '' ?>">
			<label for="Users_id" class="col-sm-2 control-label">User ID</label>
			<div class="col-sm-10">
				<input type="text" name="Users_id" id="Users_id" placeholder="User ID" class="form-control" value="<?=$model['Users_id']?>"/>
				<? if(isset($errors['Users_id'])): ?><span class = "error"><?=$errors['Users_id'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['Number']) ? 'has error' : '' ?>">
			<label for="Number" class="col-sm-2 control-label">Card Number</label>
			<div class="col-sm-10">
				<input type="text" name="Number" id="Number" placeholder="Card Number" class="form-control" value="<?=$model['Number']?>"/>
				<? if(isset($errors['Number'])): ?><span class = "error"><?=$errors['Number'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['Expiration']) ? 'has error' : '' ?>">
			<label for="Expiration" class="col-sm-2 control-label">Expiration Date</label>
			<div class="col-sm-10">
				<input type="text" name="Expiration" id="Expiration" placeholder="Expiration Date" class="form-control" value="<?=$model['Expiration']?>"/>
				<? if(isset($errors['Expiration'])): ?><span class = "error"><?=$errors['Expiration'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="Save"/>
			</div>
		</div>
	</form>
</div>