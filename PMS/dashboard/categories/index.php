<?php include('../includes/header.php'); ?>
<?php include( '../../classes/Category.php')?>

<?php $categories = Category::getAllCategories();?>
<div class="col-12">
    <h1 class="text-center p-3 my-2">
        All Categories
    </h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($categories)) : ?>
                <tr>
                    <td colspan="4" class="text-center">No Categories Found</td>
                </tr>
            <?php endif; ?>
            <?php foreach ($categories as $category) : ?>
                <tr>
                    <td><?= $category['id'] ?></td>
                    <td><?= $category['name'] ?></td>
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