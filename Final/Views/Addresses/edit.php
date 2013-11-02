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
				<input type="text" name="Users_id" id="Users_id" placeholder="First Name" class="form-control" value="<?=$model['Users_id']?>"/>
				<? if(isset($errors['Users_id'])): ?><span class = "error"><?=$errors['Users_id'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['AddressTypes_id']) ? 'has error' : '' ?>">
			<label for="AddressTypes_id" class="col-sm-2 control-label">Address Type</label>
			<div class="col-sm-10">
				<input type="text" name="AddressTypes_id" id="AddressTypes_id" placeholder="Address Type" class="form-control" value="<?=$model['AddressTypes_id']?>"/>
				<? if(isset($errors['AddressTypes_id'])): ?><span class = "error"><?=$errors['AddressTypes_id'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['POBOX']) ? 'has error' : '' ?>">
			<label for="POBOX" class="col-sm-2 control-label">POBOX</label>
			<div class="col-sm-10">
				<input type="text" name="POBOX" id="POBOX" placeholder="PO BOX" class="form-control" value="<?=$model['POBOX']?>"/>
				<? if(isset($errors['POBOX'])): ?><span class = "error"><?=$errors['POBOX'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['Street']) ? 'has error' : '' ?>">
			<label for="Street" class="col-sm-2 control-label">Street</label>
			<div class="col-sm-10">
				<input type="text" name="Street" id="Street" placeholder="Street" class="form-control" value="<?=$model['Street']?>"/>
				<? if(isset($errors['Street'])): ?><span class = "error"><?=$errors['Street'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['City']) ? 'has error' : '' ?>">
			<label for="City" class="col-sm-2 control-label">City</label>
			<div class="col-sm-10">
				<input type="text" name="City" id="City" placeholder="City" class="form-control" value="<?=$model['City']?>"/>
				<? if(isset($errors['City'])): ?><span class = "error"><?=$errors['City'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['State']) ? 'has error' : '' ?>">
			<label for="State" class="col-sm-2 control-label">State</label>
			<div class="col-sm-10">
				<input type="text" name="State" id="State" placeholder="State" class="form-control" value="<?=$model['State']?>"/>
				<? if(isset($errors['State'])): ?><span class = "error"><?=$errors['State'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['Country']) ? 'has error' : '' ?>">
			<label for="Country" class="col-sm-2 control-label">Country</label>
			<div class="col-sm-10">
				<input type="text" name="Country" id="Country" placeholder="Country" class="form-control" value="<?=$model['Country']?>"/>
				<? if(isset($errors['Country'])): ?><span class = "error"><?=$errors['Country'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['ZIP']) ? 'has error' : '' ?>">
			<label for="ZIP" class="col-sm-2 control-label">ZIP</label>
			<div class="col-sm-10">
				<input type="text" name="ZIP" id="ZIP" placeholder="Zip" class="form-control" value="<?=$model['ZIP']?>"/>
				<? if(isset($errors['ZIP'])): ?><span class = "error"><?=$errors['ZIP'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="Save"/>
			</div>
		</div>
	</form>
</div>