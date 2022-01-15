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

        <nav class="navbar navbar-expand-lg navbar-light border bg-info">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.html">AVNTSPACE STORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="belanja.html">Belanja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bukutamu.php">Buku Tamu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="about.html">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sosial Media
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="https://web.facebook.com/">Facebook</a></li>
                                <li><a class="dropdown-item" href="https://instagram.com/ry.store_id?utm_medium=copy_link">Instagram</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="text-center text-info border bg-primary">
            <h2>SELAMAT DATANG</h2>
            <h3>DI BUKU TAMU</h3>
        </div>
        <div class="container">
            <?php
                include "koneksi.php";
                $sql = "select * from tamu";
                $hasil = mysqli_query($conn, $sql);
            ?>

            <a href='addtamu.php' class='btn btn-primary'>Add</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id Tamu</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Menu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($r=mysqli_fetch_assoc($hasil)){
                            echo "	
                            <tr>
                                <th scope='row'>".$r['idtamu']."</th>
                                <td>".$r['nama']."</td>
                                <td>".$r['email']."</td>
                                <td>".$r['pesan']."</td>
                                <td>
                                <a href='edit_tamu.php' class='btn btn-primary'>Edit</a>
                                <a href='del_tamu.php?idtamu=".$r['idtamu']."' class='btn btn-primary'>Delete</a>
                                </td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="container">
            <footer class="bg-light text-center text-lg-start" style="position: relative;">
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2022 Copyright:
                    <a class="text-dark" href="index.html">Yosefino Julianto A11.2020.12785</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>
        

        <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>