<?php
include "bahanbakar.php";
$proses = new Beli();

if (isset($_POST['Kirim'])) {
$proses->setHarga(15620, 16750, 17500, 18050);
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];

    $proses->hargaBeli();
    $proses->cetakPembelian();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <form action="" method = "POST">
        <label for="liter">masukan jumlah :</label>
        <input type="number" name="liter" placeholder="liter">
        <label for="jenis">masukan jenis :</label>

        <select name="jenis" id="">
            <option value="SSuper">SSuper</option>
            <option value="SVPower">SVPower</option>
            <option value="SVPowerDiesel">SVPowerDiesel</option>
            <option value="SVPowerNitro">SVPowerNitro</option>
        </select>
        <button type="submit" name="Kirim">Beli</button>

</form>

    
</body>
</html>