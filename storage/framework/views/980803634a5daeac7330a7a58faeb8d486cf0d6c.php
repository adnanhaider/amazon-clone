
<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    Product Id:
    <?php echo e($product->id); ?>


    <main class="main" id="main">
        <div class="fade-in wrapper">
            <div class="product-page">
                <div class="product-page-headings">
                    <h1 class="product-title has-dash"><?php echo e($product->product_name); ?></h1>
                    <div class="product-price">
                        <span class="currency_sign">$</span><?php echo e($product->product_price); ?>

                    </div>
                </div>
                <div class="product-images">
                    <ul class="slides">
                        <li>
                        <img alt="" class="image-wide" src="/<?php echo e($product->product_image); ?>">
                        </li>
                    </ul>
                </div>
                <div class="product-details">
                    <div class="product-description">
                        <p><?php echo e($product->product_description); ?></p>
                    </div>
                <!-- <form method="get" class="product-form hide-sold-out" action="/add-to-cart/<?php echo e($product->id); ?>" accept-charset="utf8">
                    <input type="hidden" name="utf8" value='✓'>
                    <input type="hidden" name="cart[add][id]" id="option" value="269879874" />
                    <button class="button add-to-cart-button" name="submit" type="submit" data-add-title="Add to Cart" data-sold-title="Sold out">Add to Cart</button>
                </form> -->
                <a class="button add-to-cart-button" href="<?php echo e(route('product.addToCart',['id' => $product->id])); ?>">Add to Cart</a>
            </div>
        </div>
    </main>
    <aside class="related-products-container wrapper under_image" role="complementary" aria-label="Related products">
        <ul class="prev-next-products ">
            <li></li>
        </ul>
    </aside>
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cache1.bigcartel.com/api/5/api.usd.js?v=1"></script>
    <script src="//cache1.bigcartel.com/theme_assets/6/2.4.12/theme.js?v=1"></script>
     -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Adnan\OneDrive\Laravel\Shopping-cart\amazon-clone\resources\views/product/view.blade.php ENDPATH**/ ?>