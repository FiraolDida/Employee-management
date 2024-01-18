<!doctype html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Codeigniter CRUD practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <p><h1>Codeigniter CRUD</h1></p>
        <div class="d-flex justify-content-end">
            <a href="<?php echo base_url('/user-form'); ?>" class="btn btn-success mb-2">Add User</a>
        </div>
        <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
            }
        ?>
        <table class="table table-bordered table-striped" id="users-list">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if($users): ?>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td>
                            <a href="<?php echo base_url('edit-view/'.$user['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="<?php echo base_url('delete/'.$user['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#users-list').DataTable();
} );
</script>
</body>
</html>