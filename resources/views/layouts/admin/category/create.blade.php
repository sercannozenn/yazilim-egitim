<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Category</title>
    <link rel="stylesheet" href={{asset("./assets/admin/css/style.css")}}>
    <link rel="stylesheet" href={{asset("./assets/admin/css/perfect-scrollbar.css")}}>
</head>
<body>

<div class="auth-form">
    <h4 class="text-center mb-4">Create Category</h4>
    <form action="index.html">
        <div class="form-group">
            <label class="mb-1"><strong>Category Name</strong></label>
            <input type="text" class="form-control" placeholder="Category Name" name="categoryName">
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Slug Name</strong></label>
            <input type="email" class="form-control" placeholder="Slug Name" name="slugName">
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Description</strong></label>
            <input type="text" class="form-control" placeholder="Description Area" name="description">
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Description</strong></label>
            <input type="text" class="form-control" placeholder="Description Area" name="description">
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Parent Category</strong></label>
            <select class="form-select">
                <option selected>Open this select menu</option>
                <option value="1">C#</option>
                <option value="2">PHP</option>
                <option value="3">JAVASCRIPT</option>
            </select>
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Status</strong></label>
            <input type="text" class="form-control" placeholder="Status" name="status">
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Feature Status</strong></label>
            <input type="text" class="form-control" placeholder="Feature Status" name="featureStatus">
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Order</strong></label>
            <input type="text" class="form-control" placeholder="Order" name="order">
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>SEO Keywords</strong></label>
            <textarea name="seoKeywords" class="w-100"  rows="5" placeholder="Please insert to Keywords"></textarea>
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>SEO Description</strong></label>
            <textarea name="seoDescription" class="w-100"  rows="5" placeholder="Please insert to about Seo Description"></textarea>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-block">Create</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p>Already have an account? <a class="text-primary" href="page-login.html">Sign in</a></p>
    </div>
</div>
<script src={{asset("./assets/admin/vendor/global/global.min.js")}}></script>
<script src={{asset("./assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js")}}></script>
<script src={{asset("./assets/admin/js/custom.min.js")}}></script>
<script src={{asset("./assets/admin/js/deznav-init.js")}}></script>
</body>
</html>
