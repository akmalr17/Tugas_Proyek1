<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form BMI</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="m-5 border border-secondary p-3 rounded">
        <h3>
            Form Isian BMI (Body Mass Index)
        </h3>
        <hr>
        <form action="hasil.php" method="POST" autocomplete="off">
        <form>
            <div class="form-group row">
                <label class="col-4 col-form-label" for="nama">Nama pasien</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan nama anda" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-4 col-form-label">Umur</label> 
                <div class="col-8">
                <div class="input-group">
                    <input id="umur" name="umur" placeholder="Berapa umur anda?" type="text" required="required" class="form-control"> 
                    <div class="input-group-append">
                    <div class="input-group-text">Tahun</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-4 col-form-label">Berat Badan</label> 
                <div class="col-8">
                <div class="input-group">
                    <input id="berat" name="berat" placeholder="Berapa berat badan anda?" type="text" class="form-control" required="required"> 
                    <div class="input-group-append">
                    <div class="input-group-text">Kg</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggi" class="col-4 col-form-label">Tinggi badan</label> 
                <div class="col-8">
                <div class="input-group">
                    <input id="tinggi" name="tinggi" placeholder="Berapa tinggi badan anda?" type="text" class="form-control" required="required"> 
                    <div class="input-group-append">
                    <div class="input-group-text">Cm</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="lk" required="required"> 
                    <label for="jk_0" class="custom-control-label">Laki Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="pr" required="required"> 
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-dark mr-4">Simpan</button>
                    <a href="data_pasien.php">Data BMI</a>
                </div>
            </div>
        </form>
    </div>

    <div class="m-5 border border-secondary p-3 rounded">
        <h3>
            Hasil BMI
        </h3>
        <hr>
        <?php
            require_once('class_pasienbmi.php');
            if(isset($_POST['proses'])){
                $bmi = new pasien ($_POST['nama'], $_POST['umur'], $_POST['berat'], $_POST['tinggi'], $_POST['jk']);
                switch($_POST['jk']){
                    case "lk" : $jenkel = "Laki-Laki"; break;
                    case "pr" : $jenkel = "Perempuan"; break;
                    default : "";
                }
                function hitung() {
                    $tinggi = ($_POST['tinggi'] / 100);
                    $total = substr($_POST['berat'] / ($tinggi * $tinggi), 0, 5);
                    return $total;
                }
                function status() {
                    $rslt = hitung();
                    
                    if ($rslt < 18.5) return "Kekurangan Berat Badan";
                    elseif ($rslt >= 18.5 && $rslt <= 24.9) return "Normal (ideal)";
                    elseif ($rslt >= 25.0 && $rslt <= 25.9) return "Kelebihan Berat Badan";
                    elseif ($rslt >= 30.0) return "Kegemukan (obesitas)";
                }
                echo "Nama Pasien : " . $bmi = $_POST['nama'] . "<br>";
                echo "Umur Pasien : " . $bmi = $_POST['umur'] . "<br>";
                echo "Berat Badan : " . $bmi = $_POST['berat'] . "<br>";
                echo "Tinggi Badan : " . $bmi = $_POST['tinggi'] . "<br>";
                echo "Jenis kelamin : " . $jenkel . "<br>";
                echo "Nilai BMI : " . hitung() . "<br>" ;
                echo "Status BMI : " .status();
            }
        ?>
    </div>
</body>
</html>