<html>
<head>
</head>
<body>
    <h3>Tampilan Form PHP</h3>

    Nama <?php echo isset($_GET["nama"]) ? $_GET["nama"] : ""; ?>
    <br>
    Email <?php echo isset($_GET["email"]) ? $_GET["email"] : ""; ?>
    <br>
    Jenis Kelamin <?php echo isset($_GET["jk"]) ? $_GET["jk"] : ""; ?>
    <br>

    <h3>Penjumlahan PHP</h3>

    <?php
    $a = isset($_GET["a"]) ? $_GET["a"] : "";
    $b = isset($_GET["b"]) ? $_GET["b"] : "";
    $c = $a + $b;
    ?>

    Jumlah a dan b adalah = <?php echo $c; ?>
</body>
</html>
