<?php
session_start();
include_once("koneksi.php");

$query = "SELECT * FROM agenda_harian";

$hasil = mysqli_query($conn, $query);
$user_id = $_SESSION['id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$user_id'");

$row = mysqli_fetch_assoc($result);
$name = $row['name'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    
    <title>Agenda Magang</title>
    <style>
        .uk-botton-muted{
            float : right;
        }
        .uk-button-muted, .uk-button-primary{
            margin : 30px;
        }
    </style>
</head>
<body class="uk-animation-fade">
<h1 class=" uk-h1 uk-text-center"> Agenda Harian <?= $name; ?></h1>
<button class=" uk-button uk-button-muted uk-margin uk-position-top-right" onclick="window.location.href = 'logout.php'">LOG OUT</button>

<button class=" uk-button uk-button-primary uk-width-1-3 uk-margin-small-bottom" onclick="window.location.href = 'tambahagenda.php'" style="border_radius:40px;">Tambah Agenda</button>

    <table class="uk-table-hover uk-table uk-table-divider uk-text-center">
        <thead>
            <tr class="uk-text-center">
                <th>No</th>
                <th>Tanggal</th>
                <th>Bentuk Pekerjaan </th>
                <th>Waktu Mulai</th>
                <th>Waktu Selesai</th>
                <th></th>
            
            </tr>
        </thead> 
        <tbody >
            <tr>
                <?php while($data = mysqli_fetch_array($hasil)) : ?>
                <tr>
                <td> <?php echo $data['id']; ?> </td>
 				<td> <?php echo $data['tanggal']; ?> </td>
 				<td> <?php echo $data['pekerjaan']; ?> </td>
 				<td> <?php echo $data['waktu1']; ?> </td>
 				<td> <?php echo $data['waktu2']; ?> </td>
                <td> <button class="uk-button uk-button-text" onclick="window.location.href = 'hapus.php?id=<?= $data['id']?>'">Hapus</button></td>


                </tr>
                <?php endwhile; ?>
            </tr>
        </tbody>

    </table>
   
        
    
</body>
</html>