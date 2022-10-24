<!doctype html>
<html lang="en">

<head>
    <title>Import - Export </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="p-5 border-2 border border-seconday rounded">
                    <h2> <i class="fas fa-file-import"></i> Import Data: </h2>
                    <form class="form" style="margin-top: 20px;" method="POST" action="/import_data" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <label for="">Select File</label>
                        <input style="height: 45px;" type="file" style="box-shadow: none;" name="doc" class="form-control" required>
                        <label for="matchNumber">Match Number: </label>
                        <input style="margin: 20px 10px;"type="number" name="matchNumber" id="matchNumber" required/>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-info"> <i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <form class="form" style="margin: 10px auto 50px auto; width: max-content;" method="POST" action="/export_match" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <h2 style="text-align: center;">Export A Match</h2>
        <label for="matchNumber">Match Number: </label>
        <input style="margin: 20px 10px;"type="number" name="matchNumber" id="matchNumber" required/>
        <div class="mt-2" style="width: 50%; margin: 0 auto">
            <button type="submit" class="btn btn-info" style="width: 100%;"> <i class="fas fa-save"></i> Export</button>
        </div>
    </form>

    <a href="<?php echo e(url('export_all_records')); ?>" class="btn btn-info"
    style="margin: 20px auto; display: block; width: 200px;">Export All Records</a>

    <a href="<?php echo e(url('delete_all_records')); ?>" class="btn btn-danger"
    style="margin: 20px auto; display: block; width: 200px;">Delete All Records</a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Excel\resources\views/main.blade.php ENDPATH**/ ?>