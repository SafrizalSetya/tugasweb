<html>
<head>
</head>
<body>
    <h3>Tampilan Form PHP</h3>
    <?php
    $nameErr = $emailErr = $genderErr = $aErr = $bErr = "";
    $isFormValid = true;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $nameErr = "Nama harus diisi!";
            $isFormValid = false;
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email harus diisi!";
            $isFormValid = false;
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Pilih gender Anda terlebih dahulu";
            $isFormValid = false;
        }
        if (empty($_POST["a"])) {
            $aErr = "Nilai a harus diisi!";
            $isFormValid = false;
        }
        if (empty($_POST["b"])) {
            $bErr = "Nilai b harus diisi!";
            $isFormValid = false;
        }
    }
    ?>

    Nama <?php echo isset($_POST["nama"]) ? $_POST["nama"] : ""; ?><br>
    Email <?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?><br>
    Jenis Kelamin <?php echo isset($_POST["gender"]) ? $_POST["gender"] : ""; ?><br>

    <h3>Penjumlahan PHP</h3>
    <?php
    if (!empty($_POST["a"]) && !empty($_POST["b"])) {
        echo "Jumlah a dan b adalah = " . ($_POST["a"] + $_POST["b"]);
    }
    ?>
</body>
</html>
