<style type="text/css">
        #item-list .well img {
                width: 100px;
                height: 100px;
                margin: 5px;
                float: left;
        }
        #shopping-cart-list {
                position: fixed;
                right:         0px;
                top:         20%;
                bottom: 20%;
                height: 60%;
                width:         200px;
                background: #FFFFFF;
                border-radius: 5px 0px 0px 5px;
                border: 1px solid #000;
                padding: 5px;
                transition: right .5s;
                -webkit-transition: right .5s;
        }
        .closed#shopping-cart-list {
                right: -180px;
        }
        #shopping-cart-list .scrolling {
                overflow-y: scroll;
                height: 95%;
                border-bottom: 1px solid black;
        }
        #shopping-cart-list img {
                float: left;
                width: 30px;
                height: 30px;
        }
</style>

<div class="container"> 
	<div>
	    <ul class="nav nav-pills" data-bind="foreach: categories" >
           	 <li><a href="#" data-bind="text: Category, click: $root.categoryClicked">Cat 1</a></li>
	    </ul>
	</div>
    
    <div data-bind="foreach: products" >
        <div class="col-sm-3">
            <div class="well clearfix">
            	<img alt="image" data-bind="attr: {src: Img}" width="128"/>
                <h4 data-bind="text: Item" ></h4>
                <p data-bind="text: Description"></p>
                <button class="btn btn-info">$<span data-bind="text: Price"></span></button>
                <button class="btn btn-success pull-right" data-bind="click: $root.addToCart">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                    Add To Cart
                </button>
            </div>
        </div>
    </div>
</div>

<div id="shopping-cart-list" class="closed" >
    <div class="scrolling"  data-bind="foreach: cart" >
        <div class="well well-sm clearfix">
            <img alt="item image" data-bind="attr: {src: Img}" />
            <h6 data-bind="text: Item"></h6>
            <p data-bind="text: Description"></p>
            $<span data-bind="text: Price"></span>
            <button class="btn btn-warning btn-sm pull-right" data-bind="click: $root.removeFromCart">
                <span class="glyphicon glyphicon-shopping-del"></span>
                Remove
            </button>
        </div>
    </div>
    <div>
        Total: $ <span data-bind="text: cartTotal"></span>
    </div>
</div>
        
<script type="text/html" id="shopping-cart-template">
        <span class="glyphicon glyphicon-shopping-cart"></span>
        <a href="#" class="navbar-link" data-bind="click: toggleCartList">Cart</a>
        <span class="badge" data-bind="text: cart().length"></span>
</script>
            
<? function Scripts(){ ?>
    <? global $model; ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
    <script type="text/javascript">
    $(function(){
         var vm = {
             categories: ko.observableArray(),
             products: ko.observableArray(),
             cart: ko.observableArray(),
             
             categoryClicked: function() {
                 $.getJSON("?action=products&format=json", { Categories_id: this.id } ,function(results){
                     vm.products(results.model);
             	})
         	 },
         	 addToCart: function(){
                 vm.cart.push(this);
             },
             removeFromCart: function(){
                 vm.cart.remove(this);
             },
             toggleCartList: function(){
                 $("#shopping-cart-list").toggleClass("closed");
             }
	     }
	     vm.cartTotal = ko.computed(function(){
             var tot = 0;
             $.each(vm.cart(), function(i,x){
                 tot += +x.Price;
             })
             return tot;
         });
         
	     ko.applyBindings(vm);
	     $("#shopping-cart").html($("#shopping-cart-template").html())
         ko.applyBindings(vm, $("#shopping-cart")[0]);
                
	     $.getJSON("?action=categories&format=json",function(results){
	             vm.categories(results.model);
	     })
     });
     </script>
<? } ?>