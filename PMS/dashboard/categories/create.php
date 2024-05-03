<?php include('../includes/header.php'); ?>
<?php include('../../classes/Session.php'); ?>
<div class="col-8 mx-auto">
    <h1 class="text-center p-3 my-2">
        Add Category
    </h1>
    <?php if (Session::checkSession('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?= Session::getSession('success') ?>
        </div>
    <?php endif ?>

    <?php if (Session::checkSession('errors')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= Session::getSession('errors') ?>
        </div>
    <?php endif ?>

    <form action="<?= route('dashboard/controllers/categories/createCategoryController.php') ?>" class="form border p-3" method="POST">
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name_testing" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="Save" class="form-control text-white bg-success">
        </div>
    </form>
</div>
<?php include('../includes/footer.php'); ?>