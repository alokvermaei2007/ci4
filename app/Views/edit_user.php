<!DOCTYPE html>
<html>
<head>
    <title>Edit user </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet"  type="text/css" href="<?= base_url('assets/css/user.css') ?>">

</head>
<body>
<?php if(isset($validation)): ?>
    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
<?php endif; ?>
<div class="container mt-5">
    <form method="post" id="update_user" name="update_user"
          action="<?= site_url('/update') ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="firstname" class="form-control" value="<?php echo $user_obj['firstname']; ?>">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lastname" class="form-control" value="<?php echo $user_obj['lastname']; ?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $user_obj['email']; ?>">
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" class="form-control" value="<?php echo $user_obj['mobile']; ?>">
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $user_obj['username']; ?>">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $user_obj['password']; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger btn-block">Save Data</button>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script src="<?= base_url('/assets/js/user.js') ?>"></script>
</body>
</html>
