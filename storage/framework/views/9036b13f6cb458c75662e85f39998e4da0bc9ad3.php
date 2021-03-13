
<?php $__env->startSection('content'); ?>
<?php if(count((array)Session::get('cart'))): ?>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Product Total</th>
                        <th>Operation</th>
                    </thead>           
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>                        
                        <td>
                            <img src="<?php echo e($product['item']->product_image); ?>" alt="<?php echo e($product['item']->product_name); ?>" 
                            style="max-width: 30%; height: auto;">
                            <input type="hidden" name="product_id" value="<?php echo e($product['item']->id); ?>" >
                            <strong><?php echo e($product['item']['product_name']); ?></strong>
                        </td>
                        <td>
                            <span class="label label-success" name="product_unit_price">$<?php echo e($product['item']->product_price); ?> x </span>
                        </td>
                        <td>
                            <input type="number" min="1" max="5" name="quantity" value="<?php echo e($product['qty']); ?>"> = 
                        </td>
                        <td>
                            <span class="label label-success" name="product_total_price">$<?php echo e($product['price'] * $product['qty']); ?></span>
                        </td>
                        <td>
                            <a href="<?php echo e(route('removeFromCart',['id'=>$product['item']->id])); ?>">
                                <i class="fa fa-trash" style="font-size:30px;color:red"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        Total : $<strong id="grand-total"><?php echo e($totalPrice); ?></strong>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <a href="<?php echo e(route('processOrder')); ?>" class="btn btn-success">Process Order</a>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h2>No items in Cart!</h2>
        </div>
    </div>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<script>

document.addEventListener('change',function(e){
    let qty = e.target;
    let unit_price = parseFloat(qty.parentElement.previousElementSibling.firstElementChild.innerHTML.replace('$',''));
    let total_price = qty.parentElement.nextElementSibling.firstElementChild;
    
    qty = parseInt(qty.value);
    let grand_total = document.getElementById('grand-total');
    let cart_counter = document.getElementById('cart-counter');
    total_price.innerHTML = "$" + (qty * unit_price).toFixed(2);

    let quantities_array = document.getElementsByName('quantity');
    let product_total_prices_array = document.getElementsByName('product_total_price');
    let temp_qty = 0;
    let temp_grand_total =0.0;
    let product_ids = [];
    let temp_ids = document.getElementsByName('product_id');
    let product_total_quantities_values_array = []

    for(var i=0; i<quantities_array.length;i++){
        document.getElementsByName('product_total_price')[i].innerHTML = '$' +  parseFloat(product_total_prices_array[i].innerHTML.replace('$', ''));
        product_ids.push(temp_ids[i].value);
        product_total_quantities_values_array.push(parseInt(quantities_array[i].value));
        temp_qty = temp_qty + parseInt(quantities_array[i].value);
        temp_grand_total = temp_grand_total + parseFloat(product_total_prices_array[i].innerHTML.replace('$', ''));
    }

    cart_counter.innerHTML = temp_qty
    grand_total.innerHTML = temp_grand_total.toFixed(2);
    let request = new XMLHttpRequest();

    request.open('POST', '/update-cart-using-ajax');
    request.setRequestHeader("Content-Type", "application/json");

    // request.setRequestHeader("Accept", "application/json");

    var data = {
         _token:"<?php echo e(csrf_token()); ?>",
         'quantities_array':product_total_quantities_values_array,
         "product_ids_array":product_ids,
        }

    request.send(JSON.stringify(data));
    // request.send(JSON.stringify(cart));
    request.onreadystatechange = function() {
        console.log('response status is ', this.status);
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      if (this.responseText == "success"){
          console.log('cart updated')
      }
      else{
          alert('something went wrong.')
      }
    }
  };
});

</script>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Adnan\OneDrive\Laravel\Shopping-cart\amazon-clone\resources\views/cart/shopping-cart.blade.php ENDPATH**/ ?>