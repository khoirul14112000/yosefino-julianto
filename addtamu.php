<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVNTSPACE STORE</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

    <body>

        <div class="text-center text-info border bg-success">
            <h2>SELAMAT DATANG</h2>
            <h3>DI MENU TAMBAH TAMU</h3>
        </div>
        <div class="container">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <h5 class="card-title">Tambah Tamu</h5>
                        <form action="ins_tamu.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">Nama Tamu</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Tamu">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Name@example.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Example textarea</label>
                                <textarea class="form-control" name="pesan" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                        </form>
                    <a href="bukutamu.php" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>

        <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>