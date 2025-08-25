<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create Product</title>
    <style>
        form {
            box-shadow: 0 10px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            padding: 30px;
            background-color: #f8f9fa;
        }
        h4 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-8 col-lg-6 offset-lg-3">
                <form action="create_product.php" method="post" enctype="multipart/form-data">
                    <h4 class="text-center">Add New Product</h4>
                    
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="productName" name="product_name" placeholder="Enter product name" required>
                    </div>

                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Price ($)</label>
                        <input type="number" class="form-control" id="productPrice" name="price" placeholder="Enter product price" step="0.01" required>
                    </div>


                    <div class="mb-3">
                        <label for="productImage" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="productImage" name="image" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary col-12" name="create_product">Create Product</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
