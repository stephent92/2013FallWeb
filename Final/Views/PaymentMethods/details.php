<div class="container">
	<dl class="dl-horizontal">
		<dt>ID</dt>
		<dd><?=$model['id']?></dd>
		<dt>User ID</dt>
		<dd><?=$model['Users_id']?></dd>
		<dt>Card Number</dt>
		<td>XXXX-XXXX-XXXX-<?=substr($model['Number'], -4);?></td>
		<dt>Expiration Date</dt>
		<dd><?=$model['Expiration']?></dd>
		<dt>created_at</dt>
		<dd><?=$model['created_at']?></dd>
	</dl>
</div>