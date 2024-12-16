<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Aritmatika Aji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header text-center">
                <h3>Kalkulator</h3>
                <h4>by Aji Permana</h4>
            </div>
            <div class="card-body">
                <form method="GET" action="">
                    <div class="mb-3">
                        <label for="nilai_awal" class="form-label">Nilai 1</label>
                        <input type="number" class="form-control" id="nilai_awal" name="nilai_awal" required>
                    </div>
                    <div class="mb-3">
                        <label for="nilai_akhir" class="form-label">Nilai 2</label>
                        <input type="number" class="form-control" id="nilai_akhir" name="nilai_akhir" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Perhitungan</label><br>
                        <input type="radio" id="tambah" name="operasi" value="+" required> <label for="tambah">+</label>
                        <input type="radio" id="kurang" name="operasi" value="-"> <label for="kurang">-</label>
                        <input type="radio" id="kali" name="operasi" value="*"> <label for="kali">x</label>
                        <input type="radio" id="bagi" name="operasi" value="/"> <label for="bagi">÷</label>
                        <input type="radio" id="mod" name="operasi" value="%"> <label for="mod">mod</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
                </form>

                <div class="mt-4">
                    <?php
                    if (isset($_GET['hitung'])) {
                        $nilai_awal = $_GET['nilai_awal'];
                        $nilai_akhir = $_GET['nilai_akhir'];
                        $operasi = $_GET['operasi'];

                        switch ($operasi) {
                            case '+':
                                $hasil = $nilai_awal + $nilai_akhir;
                                break;
                            case '-':
                                $hasil = $nilai_awal - $nilai_akhir;
                                break;
                            case '*':
                                $hasil = $nilai_awal * $nilai_akhir;
                                break;
                            case '/':
                                $hasil = $nilai_akhir != 0 ? $nilai_awal / $nilai_akhir : 'Tidak dapat dibagi oleh 0';
                                break;
                            case '%':
                                $hasil = $nilai_awal % $nilai_akhir;
                                break;
                            default:
                                $hasil = "Operasi tidak valid";
                        }

                        echo "<h5>Hasil dari $nilai_awal $operasi $nilai_akhir = <strong>$hasil</strong></h5>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
