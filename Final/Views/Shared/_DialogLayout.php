<div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="document.location.reload(true);">&times;</button>
	    <h4 class="modal-title"><?=$title?></h4>
	  </div>
	  <div class="modal-body">
	    <? include $view; ?>
	  </div>
	  <div class="modal-footer">
	  	<button type="button" class="btn btn-success" >Purchase</button>
	  	<button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true" onclick="document.location.reload(true);">Close</button>
	  </div>
	</div>
</div>