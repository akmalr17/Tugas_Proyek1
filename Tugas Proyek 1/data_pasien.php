<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data BMI</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous"
    />
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="m-3 navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">WEB02</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Review PHP
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">-</a></li>
                <li><a class="dropdown-item" href="#">-</a></li>
                <li><a class="dropdown-item" href="#">-</a></li>
            </ul>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PHP5 OOP
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">-</a></li>
                <li><a class="dropdown-item" href="#">-</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <hr>

    <?php
        require_once('class_pasienbmi.php');
        $p1 = new pasien ('Ahmad', 20, 68.8, 169, "Laki-Laki");
        $p2 = new pasien ('Rina', 18, 55.3, 165, 'Perempuan');
        $p3 = new pasien ('Lutfi', 19, 45.2, 171, 'Laki-Laki');
    ?>

    <div class="m-5 border border-secondary p-3 rounded">
        <h3>
            DATA BMI
        </h3>
        <table class="table table-bordered border-light table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Umur</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Berat Badan</th>
                <th scope="col">Tinggi</th>
                <th scope="col">Nilai BMI</th>
                <th scope="col">Status BMI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <?php
                        echo $p1->nama;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p1->umur;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p1->jk;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p1->berat;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p1->tinggi;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p1->hitung();
                    ?>
                </td>
                <td>
                    <?php
                        echo $p1->status();
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>
                    <?php
                        echo $p2->nama;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p2->umur;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p2->jk;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p2->berat;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p2->tinggi;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p2->hitung();
                    ?>
                </td>
                <td>
                    <?php
                        echo $p2->status();
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>
                    <?php
                        echo $p3->nama;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p3->umur;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p3->jk;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p3->berat;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p3->tinggi;
                    ?>
                </td>
                <td>
                    <?php
                        echo $p3->hitung();
                    ?>
                </td>
                <td>
                    <?php
                        echo $p3->status();
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>