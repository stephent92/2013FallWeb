<style type = "text/css">
    .error{color:red;}
</style>

<div class="container">

	<h3>Purchase Item: <?=$modelBuy['Item']?></h3>
	
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
				<select name="Users_id" id="Users_id" class="form-control" >
                    <? foreach(Users::Get() as $keywordRs): ?>
                        <option value="<?=$keywordRs['id']?>"><?=$keywordRs['FirstName']?> <?=$keywordRs['LastName']?></option>
                    <? endforeach; ?>
                </select>
				<? if(isset($errors['Users_id'])): ?><span class = "error"><?=$errors['Users_id'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['Value']) ? 'has error' : '' ?>">
			<label for="Value" class="col-sm-2 control-label">Value</label>
			<div class="col-sm-10">
				<input type="text" id="Value" id="Value" class="form-control" value="<?=$modelBuy['Price']?>" readonly/>
				<? if(isset($errors['Value'])): ?><span class = "error"><?=$errors['Value'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['TrackingNumber']) ? 'has error' : '' ?>">
			<label for="TrackingNumber" class="col-sm-2 control-label">Tracking Number</label>
			<div class="col-sm-10">
				<input type="text" id="TrackingNumber" id="TrackingNumber" class="form-control" value="<?=rand()?>" readonly/>
				<? if(isset($errors['TrackingNumber'])): ?><span class = "error"><?=$errors['TrackingNumber']?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="Purchase"/>
			</div>
		</div>
	</form>
</div>
