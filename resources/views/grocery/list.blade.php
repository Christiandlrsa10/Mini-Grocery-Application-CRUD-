<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Grocery Application (CRUD)</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
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
                <a href="{{ route('Grocery.create') }}" class="btn btn-primary">Add New Product</a>
            </div>
        </div>
        
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        <div class="card border-0 shadow-lg">
            <div class="card-body">
            <table class="table table-striped">
                    <tr>
                        <th width="100">Product ID</th>
                        <th width="100">Image</th>
                        <th width="180">Product Name</th>
                        <th width="100">Type</th>
                        <th width="100">Price</th>
                        <th width="150">Action</th>
                    </tr>
            
                </table>
            </div>
        </div>
    </div>

    
</body>
</html>