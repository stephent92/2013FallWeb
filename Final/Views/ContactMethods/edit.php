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
		<div class="form-group <?=isset($errors['PhoneNumber']) ? 'has error' : '' ?>">
			<label for="PhoneNumber" class="col-sm-2 control-label">Phone Number</label>
			<div class="col-sm-10">
				<input type="text" name="PhoneNumber" id="PhoneNumber" placeholder="Phone Number" class="form-control" value="<?=$model['PhoneNumber']?>"/>
				<? if(isset($errors['PhoneNumber'])): ?><span class = "error"><?=$errors['PhoneNumber'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['Email']) ? 'has error' : '' ?>">
			<label for="Email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="text" name="Email" id="Email" placeholder="Email" class="form-control" value="<?=$model['Email']?>"/>
				<? if(isset($errors['Email'])): ?><span class = "error"><?=$errors['Email'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="Save"/>
			</div>
		</div>
	</form>
</div>