<!DOCTYPE html>
<html>
<head>
    <title>KALKULATOR NILAI SISWA</title>
    <style>
        body {
            font-family: Arial;
            margin: 30px;
        }
        form {
            width: 300px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 5px;
            box-sizing: border-box;
        }
        button {
            padding: 8px 15px;
        }
    </style>
</head>
<body>
    <h2>KALKULATOR NILAI SISWA</h2>
    <form method="POST">
        Nama:
        <input type="text" name="nama">
        Matematika:
        <input type="number" name="mtk">
        Bahasa Indonesia:
        <input type="number" name="indo">
        Produktif:
        <input type="number" name="produktif">
        <button type="submit">Hitung</button>
    </form>

<?php
if (isset($_POST['nama'])) {
    $nama = $_POST["nama"];
    $mtk = $_POST["mtk"];
    $indo = $_POST["indo"];
    $produktif = $_POST["produktif"];
    if ($nama == "" || $mtk == "" || $indo == "" || $produktif == "") {
        echo "Data tidak boleh kosong";
    } elseif (!is_numeric($mtk) || !is_numeric($indo) || !is_numeric($produktif)) {
        echo "Nilai harus berupa angka";
    } elseif ($mtk < 0 || $mtk > 100 || 
              $indo < 0 || $indo > 100 || 
              $produktif < 0 || $produktif > 100) {
        echo "Nilai harus antara 0 sampai 100";
    } else {
        $rata = ($mtk + $indo + $produktif) / 3;
        if ($rata >= 90) {
            $predikat = "A";
        } elseif ($rata >= 80) {
            $predikat = "B";
        } elseif ($rata >= 70) {
            $predikat = "C";
        } else {
            $predikat = "D";
        }
        if ($rata >= 75) {
            $status = "Lulus";
        } else {
            $status = "Remedial";
        }
        echo "<h3>Hasil Nilai</h3>";
        echo "Nama : $nama<br>";
        echo "Rata-Rata : $rata<br>";
        echo "Predikat : $predikat<br>";
        echo "Status : $status";
    }
}
?>
</body>
</html>