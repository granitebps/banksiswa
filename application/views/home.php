<h1>Data Siswa</h1>

<a href="<?php echo base_url('home/create'); ?>">Tambah Data</a><br><br>

<table border='1' cellpadding='5'>
    <thead>
        <tr>
            <td><b>No. Urut</b></td>
            <td><b>Nama Siswa</b></td>
            <td><b>Jenis Kelamin</b></td>
            <td><b>Nama Ayah</b></td>
            <td><b>Nama Ibu</b></td>
            <td><b>Alamat</b></td>
            <td><b>Aksi</b></td>
        </tr>
    </thead>

    <tbody>
        <?php 
            $no = 1;
            foreach ($tampilkan_data as $data) { 
        ?>
        <tr>
            <td align="center"><?php echo $no++; ?></td>
            <td><?php echo $data->nama; ?></td>
            <td><?php if($data->kelamin == 1){
                echo "Laki-Laki";
            }else{
                echo "Perempuan";
            } ?>
            </td>
            <td><?php echo $data->nama_ayah; ?></td>
            <td><?php echo $data->nama_ibu; ?></td>
            <td><?php echo $data->alamat; ?></td>
            <td>
                <a href="<?php echo base_url('home/update/') . $data->id ; ?>">Update</a> | 
                <a href="<?php echo base_url('home/delete/') . $data->id ; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
