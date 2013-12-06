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
		<div class="form-group <?=isset($errors['Price']) ? 'has error' : '' ?>">
			<label for="Price" class="col-sm-2 control-label">Price</label>
			<div class="col-sm-10">
				<input type="text" name="Price" id="Price" placeholder="Price" class="form-control" value="<?=$model['Price']?>"/>
				<? if(isset($errors['Price'])): ?><span class = "error"><?=$errors['Price'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['Description']) ? 'has error' : '' ?>">
			<label for="Description" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-10">
				<input type="text" name="Description" id="Description" placeholder="Description" class="form-control" value="<?=$model['Description']?>"/>
				<? if(isset($errors['Description'])): ?><span class = "error"><?=$errors['Description'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['Img']) ? 'has error' : '' ?>">
			<label for="Img" class="col-sm-2 control-label">Img</label>
			<div class="col-sm-10">
				<input type="text" name="Img" id="Img" placeholder="Img" class="form-control" value="<?=$model['Img']?>"/>
				<? if(isset($errors['Img'])): ?><span class = "error"><?=$errors['Img'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group <?=isset($errors['Categories_id']) ? 'has error' : '' ?>">
			<label for="Categories_id" class="col-sm-2 control-label">Category</label>
			<div class="col-sm-10">
				<select name="Categories_id" id="Categories_id" class="form-control" >
					<? foreach(Categories::Get() as $keywordRs): ?>
						<option value="<?=$keywordRs['id']?>"><?=$keywordRs['Category']?></option>
					<? endforeach; ?>
				</select>
				<? if(isset($errors['Categories_id'])): ?><span class = "error"><?=$errors['Categories_id'] ?> </span> <? endif;?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="Save"/>
			</div>
		</div>
	</form>
</div>