<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jqury.dataTables.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
</head>

<body>
    <p class="h1 bg-primary text-center menu">KELOLA DATA PASIEN</p>
    <div class="container">
        <h1>Data <small>Pasien</small>
            <div class="pull-right"><a class="btn btn-sm btn-success tambah" data-toggle="modal" data-target="#modal_add_new">Tambah</a></div>
        </h1>
        <table class="table table-bordered table-striped" id="mydata">
            <thead>
                <tr>
                    <th>No. Pasien</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Keluhan</th>
                    <th>No. Hp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data->result_array() as $i) :
                    $no_pasien = $i['no_pasien'];
                    $nama = $i['nama'];
                    $alamat = $i['alamat'];
                    $jenis_kelamin = $i['jenis_kelamin'];
                    $umur = $i['umur'];
                    $keluhan = $i['keluhan'];
                    $no_hp = $i['no_hp'];
                ?>
                    <tr>
                        <td><?php echo $no_pasien; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $alamat; ?></td>
                        <td><?php echo $jenis_kelamin; ?></td>
                        <td><?php echo $umur; ?></td>
                        <td><?php echo $keluhan; ?></td>
                        <td><?php echo $no_pasien; ?></td>
                        <td>
                            <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal_edit<?php echo $no_pasien; ?>">Edit</a>
                            <a class="btn btn-xs btn-danger" data-toggle="modal" href="rs/delete/<?php echo $no_pasien; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- MODAL ADD BARANG -->

</body>

</html>