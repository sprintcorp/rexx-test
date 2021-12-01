<html>

<head>
    <title>REXX TEST</title>
<!--    <link href="css/style.css" type="text/css" rel="stylesheet" />-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="mt-5"><?php displayMessage(); ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <button type="button" class="btn btn-dark mt-5" data-toggle="modal" data-target="#exampleModalCenter">Import Json Data</button>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="post" action="app/product.php" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Import product data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="file" class="form-control" name="file" accept=".json">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <form action="app/filter.php" method="post" class="mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Product name</label>
                                <select class="form-control" name="product_name">
                                    <?php foreach($products as $key=> $product){ ?>
                                    <option><?=$product?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Customer name</label>
                                <select class="form-control" name="customer_name">
                                    <?php foreach($customers as $key=> $customer){ ?>
                                        <option><?=$customer?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Price</label>
                                <select class="form-control" name="price">
                                    <?php foreach($prices as $key=> $price){ ?>
                                        <option><?=$price?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="submit" name="submit" class="btn btn-info mt-4">Search</button>
                        </div>
                        <div class="col-md-1">
                            <a href="product.php?filter=false" class="btn btn-danger mt-4">Clear</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <table class="table mt-5">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer name</th>
                        <th scope="col">Customer mail</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Product price</th>
                        <th scope="col">Sales date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($sales as $key=> $row){ ?>
                    <tr>
                        <th scope="row"><?=++$key?></th>
                        <td><?=$row["customer_name"]?></td>
                        <td><?=$row["customer_mail"]?></td>
                        <td><?=$row["product_id"]?></td>
                        <td><?=$row["product_name"]?></td>
                        <td><?=$row["product_price"]?></td>
                        <td><?=$row["sale_date"]?></td>
                    </tr>
                    <?php }?>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Total price</th>
                        <th scope="col"><?=$total?></th>
                        <th scope="col"></th>
                    </tr>
                    <hr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>