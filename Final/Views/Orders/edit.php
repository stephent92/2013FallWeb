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
		<input type="hidden" id="id" value="<?=$model['id']?>"/>
		
		<div class="form-group <?=isset($errors['Users_id']) ? 'has error' : '' ?>">
			<label for="Users_id" class="col-sm-2 control-label">User ID</label>
			<div class="col-sm-10">
				<input type="text" id="Users_id" id="Users_id" placeholder="User ID" class="form-control" value="<?=$model['Users_id']?>"/>
				<? if(isset($errors['Users_id'])): ?><span class = "error"><?=$errors['Users_id'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['Value']) ? 'has error' : '' ?>">
			<label for="Value" class="col-sm-2 control-label">Value</label>
			<div class="col-sm-10">
				<input type="text" id="Value" id="Value" placeholder="Value" class="form-control" value="<?=$model['Value']?>"/>
				<? if(isset($errors['Value'])): ?><span class = "error"><?=$errors['Value'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['TrackingNumber']) ? 'has error' : '' ?>">
			<label for="TrackingNumber" class="col-sm-2 control-label">Tracking Number</label>
			<div class="col-sm-10">
				<input type="text" id="TrackingNumber" id="TrackingNumber" placeholder="Tracking Number" class="form-control" value="<?=$model['TrackingNumber']?>"/>
				<? if(isset($errors['TrackingNumber'])): ?><span class = "error"><?=$errors['TrackingNumber'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="Save"/>
			</div>
		</div>
	</form>
</div>