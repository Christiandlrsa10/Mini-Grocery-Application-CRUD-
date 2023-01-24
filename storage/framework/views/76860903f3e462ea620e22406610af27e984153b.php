<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Grocery Application (CRUD)</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
</head>
<body>

    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white">Mini Grocery Application (CRUD)</div>
        </div>
    </div>

    <div class="container ">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Groceries</div>
            <div>
                <a href="<?php echo e(route('Grocery.index')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>

        <form action="<?php echo e(route('Grocery.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
        
                <div class="mb-3">
                        <label for="product" class="form-label">Product Name</label>
                        <input type="text" name="product" id="product" placeholder="Enter Product" class="form-control">                     
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Product Type</label>
                        <input type="text" name="type" id="type" placeholder="Enter Type" class="form-control">                     
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Product Price</label>
                        <input type="text" name="price" id="price" placeholder="Enter Type" class="form-control">                     
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label"></label>
                        <input type="file" name="image" id="image" class="<?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
  
                    </div>  
            
                </div>
            </div>
            <button class="btn btn-primary mt-3">Save Now</button>
        </form>
    </div>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\miniapp\resources\views/Grocery/create.blade.php ENDPATH**/ ?>