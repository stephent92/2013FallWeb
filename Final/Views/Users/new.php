<div class="container">
	<form action="?action=save" method="post" class="form-horizontal row">
		
		<div class="form-group">
			<label for="FirstName" class="col-sm-2 control-label">First Name</label>
			<div class="col-sm-10">
				<input type="text" name="FirstName" id="FirstName" placeholder="First Name" class="form-control" value="<?=$model['FirstName']?>"/>
			</div>
		</div>
		<div class="form-group">
			<label for="LastName" class="col-sm-2 control-label">Last Name</label>
			<div class="col-sm-10">
				<input type="text" name="LastName" id="LastName" placeholder="Last Name" class="form-control" value="<?=$model['LastName']?>"/>
			</div>
		</div>
		<div class="form-group">
			<label for="Password" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" name="Password" id="Password" placeholder="Password" class="form-control" value="<?=$model['Password']?>"/>
			</div>
		</div>
		<div class="form-group">
			<label for="UserTypes_id" class="col-sm-2 control-label">User Type</label>
			<div class="col-sm-10">
				<input type="text" name="UserTypes_id" id="UserTypes_id" placeholder="User Type" class="form-control" value="<?=$model['UserTypes_id']?>"/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="save"/>
			</div>
		</div>
	</form>
</div>