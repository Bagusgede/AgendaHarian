<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.js"></script>
    <title>Tambah Agendat</title>
</head>
<body class="uk-animation-fade">
    <form method="post" action="proccesagenda.php">
        <div class="uk-position-center">
            <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                <h3 class="uk-text-center">Tambah Agenda</h3>
                <input class=" uk-input uk-form-width-large" name="tanggal" type="date" placeholder="Tanggal...">
                <br>
                <input class=" uk-input uk-form-width-large" name="pekerjaan" type="text" placeholder="Bentuk Pekerjaa...">
                <br>
                <input class=" uk-input uk-form-width-large" name="waktu1" type="time" placeholder="Waktu Mulai...">
                <br>
                <input class=" uk-input uk-form-width-large" name="waktu2" type="time" placeholder="waktu Selesai...">
                <button type="submit" name="submit" class="uk-button-primary uk-button uk-align-center uk-input" style=" border_radius:20px;">Tambah Agenda</button>
            
            </div>
        </div>
    </form>
    
</body>
</html>