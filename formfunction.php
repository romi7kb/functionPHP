<?php
function luas_persegi($si){
        $luas= $si*$si;
        return $luas;
    }
function luas_lingkaran($si){
        $luas= 3.14*$si*$si;
        return $luas;
    }
function keliling_lingkaran($si){
    $keliling= 2*3.14*$si;
    return $keliling;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Luas dan keliling</title>
</head>
<body>
    <fieldset>
    <legend>Luas Persegi</legend>
    <form action="" method="get">
    <label for="">Sisi </label>
    <input type="number" min="1" name="s" id="">
    <input type="submit" name="simpan" value="simpan">
    </form>
    </fieldset>
<?php
if (isset($_GET['simpan'])) {
    $sisi=$_GET['s'];
    echo "Luas Persegi : ". luas_persegi($sisi);
}
?>
<fieldset>
    <legend>Luas Lingkaran</legend>
    <form action="" method="get">
    <label for="">Jari jari </label>
    <input type="number" min="1" name="r" id="">
    <input type="submit" name="sim" value="simpan">
    </form>
    </fieldset>
<?php
if (isset($_GET['sim'])) {
    $jari=$_GET['r'];
    echo "Luas Lingkaran : ". luas_lingkaran($jari);
}
?>
<fieldset>
    <legend>Keliling Lingkaran</legend>
    <form action="" method="get">
    <label for="">Jari jari </label>
    <input type="number" min="1" name="r2" id="">
    <input type="submit" name="si" value="simpan">
    </form>
    </fieldset>
<?php
if (isset($_GET['si'])) {
    $jari=$_GET['r2'];
    echo "Keliling Lingkaran : ". keliling_lingkaran($jari);
}
?>
</body>
</html>
