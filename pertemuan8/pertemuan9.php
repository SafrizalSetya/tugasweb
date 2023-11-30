<html>
<head>
</head>
<body>
    <h3>Membuat Form Dengan PHP</h3><br>
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

    <form action="tampil.php" method="post">
        Nama : <input type="text" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>" placeholder="cth: Safrida" required>
        <span style="color: red;"><?php echo $nameErr; ?></span>
        <br><br>
        Email : <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" placeholder="cth: safrida@email.com" required>
        <span style="color: red;"><?php echo $emailErr; ?></span>
        <br><br>
        Jenis Kelamin
        <input type="radio" name="gender" value="Laki-Laki" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'Laki-Laki') ? 'checked' : ''; ?> required>Laki-Laki
        <input type="radio" name="gender" value="Perempuan" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'Perempuan') ? 'checked' : ''; ?> required>Perempuan
        <input type="radio" name="gender" value="Lainnya" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'Lainnya') ? 'checked' : ''; ?> required>Lainnya
        <span style="color: red;"><?php echo $genderErr; ?></span>

        <h3>Operasi Aritmatika dengan POST</h3><br><br>

        Nilai a : <input type="text" name="a" value="<?php echo isset($_POST['a']) ? $_POST['a'] : ''; ?>" placeholder="cth: 10" required>
        <span style="color: red;"><?php echo $aErr; ?></span>
        <br><br>
        Nilai b : <input type="text" name="b" value="<?php echo isset($_POST['b']) ? $_POST['b'] : ''; ?>" placeholder="cth: 5" required>
        <span style="color: red;"><?php echo $bErr; ?></span>
        <br><br>
        <input type="submit" value="jumlah" <?php if (!$isFormValid) echo "disabled"; ?>>
    </form>
</body>
</html>
