<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php echo form_open('home/create_proses') ?>

    <?php echo validation_errors() ?>

        <label>Nama Siswa</label><br>
        <?php echo form_input($nama_siswa) ?><br><br>

        <label>Jenis Kelamin</label><br>
        <?php echo form_dropdown('',$pilihan, '', $kelamin) ?><br><br>

        <label>Nama Ayah</label><br>
        <?php echo form_input($nama_ayah) ?><br><br>

        <label>Nama Ibu</label><br>
        <?php echo form_input($nama_ibu) ?><br><br>
        
        <label>Alamat</label><br>
        <?php echo form_textarea($alamat) ?><br><br>

        <!-- <input type="submit" name="submit" value="Submit"> -->
        <button type="submit" name="submit">Submit</button>

    <?php echo form_close() ?>
    
</body>
</html>