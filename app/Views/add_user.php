<!doctype html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Codeigniter CRUD practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <p><h1>Codeigniter CRUD</h1></p>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="<?= base_url('/submit-form') ?>" method="post" id="add_create" name="add_create">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group"><br>
                        <button type="submit" class="btn btn-primary btn-block">Submit Data</button>
                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
    if ($("#add_create").length > 0) {
        $("#add_create").validate({
            rules: {
                name: {
                    required: true
                },
                email : {
                    required: true,
                    maxlength: 60,
                    email: true,
                },
            },
            messages: {
                name: {
                    required: "Name is required"
                },
                email: {
                    required: "Email is required",
                    email: "It does not seem to be a vaild email",
                    maxlength: "The email should be or equal to 60 chars"
                }
            }
        })
    }
</script>
</body>
</html>