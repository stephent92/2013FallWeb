<div class="container">
	<div id="category-list">
		<ul class="nav nav-pills" data-bind="foreach: categories">
			<li data-bind="css: { active: currentCategory == $data}">
				<a href="#" data-bind="text: Name, click: $root.selectCategory"></a>
			</li>
		</ul>
	</div>
	
	<div data-bind="foreach: products" id="item-list">
		<div class="col-sm-3">
			<div class="well">
				<h5 data-bind="text: Name"></h5>
			</div>
		</div>
	</div>
	
	<div id="shopping-cart-list">
		
	</div>
</div>

<script type="text/html" id="shopping-cart-template">
	<span class="glyphicon glyphicon-shopping-cart"></span>
	<a href="#">Cart</a>
	<span class="badge">0</span>
</script>

<? function Scripts(){ ?>
	<? global $model; ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
	<script type="text/javascript">
	$(function(){
		$("#shopping-cart").html($("#shopping-cart-template").html());
		
		var vm = {
			categories: ko.observableArray(),
			products: ko.observableArray(),
			currentCategory: ko.observable(),
			
			selectCategory: function(){
				$.getJson("?action=products&format=json", { CategoryId: this.id },function(results){
					vm.products(results.model);
				});
			}
		}
		ko.applyBindings(vm);
		
		$.getJson("?action=categories&format=json", function(results){
			vm.categories(results.model);
		});
	});
    </script>
<? } ?>
