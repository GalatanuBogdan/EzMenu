<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition of a category</title>
</head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Insert Allergen-Product Form</h2>
                    </div>
                    <p>Please fill this form and submit to add an allergenproduct link.</p>
                    <form action="insertProductsAllergens.php" method="post">
                        <div class="form-group">
                            <label>Product Id</label>
                            <input type="text" name="productId" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Allergen Id</label>
                            <input type="text" name="allergenId" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>

</body>
</html>