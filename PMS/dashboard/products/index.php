<?php include('../includes/header.php'); ?>
<div class="col-12">
    <h1 class="text-center p-3 my-2">
        All Products
    </h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (getAllProducts() as $product) : ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['category_name'] ?></td>
                    <td><?= $product['price'] ?> $</td>
                    <td><?= $product['description'] ?></td>
                    <td>
                        <a href="#" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include('../includes/footer.php'); ?>