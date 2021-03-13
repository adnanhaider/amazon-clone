<!DOCTYPE html>
<html>
  <head>
    <title>Products | laravel</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet"> -->
  </head>

  <body id="products_page" class="theme">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav navbar-left">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(route('products')); ?>">Products</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('product.shoppingCart')); ?>">
                          <i class="fa fa-shopping-cart"></i> Shopping Cart
                          <span id="cart-counter" class="badge badge-success"><?php echo e(Session::has('cart')? Session::get('cart')->totalQty: ''); ?></span>
                        </a>
                    </li>
                    
                </ul>
                <!-- <form class="d-flex float-end">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                </div>
            </div>
        </nav>
    </header>
    <main class="main container" id="main">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cache1.bigcartel.com/api/5/api.usd.js?v=1"></script>
    <script src="//cache1.bigcartel.com/theme_assets/6/2.4.12/theme.js?v=1"></script>
    
  </body>
</html>
<?php /**PATH C:\Users\Adnan\OneDrive\Laravel\Shopping-cart\amazon-clone\resources\views/layout/layout.blade.php ENDPATH**/ ?>