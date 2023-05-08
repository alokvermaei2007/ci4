<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User View </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet"  type="text/css" href="<?= base_url('assets/css/userview.css') ?>">
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?= site_url('user-form') ?>" class="btn btn-success mb-2">Add User</a>
    </div>
    <?php if(isset($_SESSION['msg'])): ?>
        <?= $_SESSION['msg'] ?>
    <?php endif; ?>
    <div class="mt-3">
        <table class="table table-bordered" id="users-list">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if($users): ?>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['firstname'] ?></td>
                        <td><?= $user['lastname'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['mobile'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td class="hidetext"><?= $user['password'] ?></td>
                        <td>
                            <a href="<?= base_url('edit-view/'.$user['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?= base_url('delete/'.$user['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#users-list').DataTable();
    } );
</script>
</body>
</html>
