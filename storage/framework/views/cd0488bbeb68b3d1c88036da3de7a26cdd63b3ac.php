

<?php $__env->startSection('content'); ?>
<div class="fade-in wrapper">
            <h1 class="page-title visually-hidden">Products</h1>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product-list-container">
                <div class="product-list">
                    <div class="product-list-thumb crop-to-square under_image">
                        <a class="product-list-link" href="/product/<?php echo e($product->url_key); ?>" title="View Laravel &quot;Royal&quot; Sticker Pack">
                            <div class="product-list-thumb-container">
                                <figure class="product-list-image-container">
                                    <div class="image-wrapper">
                                        <img alt="" class="image-wide" src="<?php echo e($product->product_image); ?>">
                                    </div>
                                </figure>
                            </div>
                            <div class="product-list-thumb-info">
                                <div class="product-list-item-background"></div>
                                <div class="product-list-thumb-info-headers">
                                    <div class="product-list-thumb-name"><?php echo e($product->product_name); ?></div>
                                    <div class="product-list-thumb-price">
                                        <span class="currency_sign">$</span><?php echo e($product->product_price); ?>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="container">
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2"> <a href="#"> <img class="pic-1" src="<?php echo e($product->product_image); ?>"> <img class="pic-2" src="<?php echo e($product->product_image); ?>"> </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="/product/<?php echo e($product->url_key); ?>"><?php echo e($product->product_name); ?></a></h3> $<span class="price"><?php echo e($product->product_price); ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2"> <a href="/product/<?php echo e($product->url_key); ?>"> <img class="pic-1" src="<?php echo e($product->product_image); ?>"> <img class="pic-2" src="<?php echo e($product->product_image); ?>"> </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#"><?php echo e($product->product_name); ?></a></h3> <span class="price"><?php echo e($product->product_price); ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2"> <a href="/product/<?php echo e($product->url_key); ?>"> <img class="pic-1" src="<?php echo e($product->product_image); ?>"> <img class="pic-2" src="<?php echo e($product->product_image); ?>"> </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#"><?php echo e($product->product_name); ?></a></h3> <span class="price"><?php echo e($product->product_price); ?></span>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<hr>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Adnan\OneDrive\Laravel\Shopping-cart\amazon-clone\resources\views/home/index.blade.php ENDPATH**/ ?>