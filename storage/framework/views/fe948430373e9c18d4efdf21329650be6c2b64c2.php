

<?php $__env->startSection('content'); ?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<form class="form-horizontal" accept="<?php echo e(route('addProducts')); ?>" method="POST" >
    <?php echo csrf_field(); ?>
   
    <legend>Add Product</legend>

    <div class="form-group"> 
        <div class="col-md-4">
            <input name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">   
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group"> 
        <div class="col-md-4">
            <input min='1.0' name="product_price" placeholder="PRODUCT PRICE" class="form-control input-md" required type="number">   
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group"> 
        <div class="col-md-4">
            <input name="product_description" placeholder="PRODUCT DESCRIPTION" class="form-control input-md" required type="text">
        </div>
    </div>

     <!-- Text input-->
     <div class="form-group"> 
        <div class="col-md-4">
            <input name="url_key" placeholder="Url key" class="form-control input-md" required type="text">
        </div>
    </div>
    
    <!-- File Button --> 
    <div class="form-group">
    <div class="col-md-4">
        <input name="product_image" class="input-file" type="file">
    </div>
    </div>

    <div class="form-group">
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Add Product</button>
    </div>
    </div>

</form>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Adnan\OneDrive\Laravel\Shopping-cart\amazon-clone\resources\views/product/add-product.blade.php ENDPATH**/ ?>