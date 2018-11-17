<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php echo form_open('home/update_proses') ?>

    <?php echo validation_errors() ?>
        <?php echo form_input($id, $siswa->id) ?><br><br>
        <label>Nama Siswa</label><br>
        <?php echo form_input($nama_siswa, $siswa->nama) ?><br><br>

        <label>Jenis Kelamin</label><br>
        <?php echo form_dropdown('',$pilihan, $siswa->kelamin, $kelamin) ?><br><br>

        <label>Nama Ayah</label><br>
        <?php echo form_input($nama_ayah, $siswa->nama_ayah) ?><br><br>

        <label>Nama Ibu</label><br>
        <?php echo form_input($nama_ibu, $siswa->nama_ibu) ?><br><br>
        
        <label>Alamat</label><br>
        <?php echo form_textarea($alamat, $siswa->alamat) ?><br><br>

        <!-- <input type="submit" name="submit" value="Submit"> -->
        <button type="submit" name="submit">Update</button>

    <?php echo form_close() ?>
    
</body>
</html>