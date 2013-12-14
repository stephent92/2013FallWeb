<div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="document.location.reload(true);">&times;</button>
	    <h4 class="modal-title"><?=$title?></h4>
	  </div>
	  <div class="modal-body">
	    <p><? include $view; ?></p>
	  </div>
	  <div class="modal-footer">
	  	<a href="?action=purchase&id=<?=$model['id']?>" class="btn btn-success">Purchase</a>
	  	<button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true" onclick="document.location.reload(true);">Close</button>
	  </div>
	</div>
</div>