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
                        <td><?php echo $no_hp; ?></td>
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
    <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Input Data Pasien</h3>
                </div>
                <form action="<?php echo base_url('rs/simpan_pasien') ?>" class="form-horizontal" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3">No. Pasien</label>
                            <div class="col-xs-8">
                                <input type="number" name="no_pasien" class="form-control" placeholder="Nomer Pasien..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama</label>
                            <div class="col-xs-8">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Pasien..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Alamat</label>
                            <div class="col-xs-8">
                                <textarea name="alamat" class="form-control" cols="30" rows="10" placeholder="Alamat..." required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Jenis Kelamin</label>
                            <div class="col-xs-8">
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Umur</label>
                            <div class="col-xs-8">
                                <input type="text" name="umur" class="form-control" placeholder="Umur..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Keluhan</label>
                            <div class="col-xs-8">
                                <input type="text" name="keluhan" class="form-control" placeholder="Keluhan..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Nomer HP</label>
                            <div class="col-xs-8">
                                <input type="text" name="no_hp" class="form-control" placeholder="Nomer HP..." required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END MODAL ADD PASIEN -->
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
        <div class="modal fade" id="modal_edit<?php echo $no_pasien; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title" id="myModalLabel">Edit Data Pasien</h3>
                    </div>
                    <form action="<?php echo base_url('rs/edit_pasien') ?>" class="form-horizontal" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label col-xs-3">No. Pasien</label>
                                <div class="col-xs-8">
                                    <input type="text" value="<?php echo $no_pasien; ?>" name="no_pasien" class="form-control" placeholder="Nomer Pasien..." readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama</label>
                                <div class="col-xs-8">
                                    <input type="text" value="<?php echo $nama; ?>" name="nama" class="form-control" placeholder="Nama Pasien..." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Alamat</label>
                                <div class="col-xs-8">
                                    <input name="alamat" value="<?php echo $alamat; ?>" class="form-control" cols="30" rows="10" placeholder="Alamat..." required></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Jenis Kelamin</label>
                                <div class="col-xs-8">
                                    <select name="jenis_kelamin" class="form-control" required>
                                        <option><?php echo $jenis_kelamin; ?></option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Umur</label>
                                <div class="col-xs-8">
                                    <input type="text" value="<?php echo $umur; ?>" name="umur" class="form-control" placeholder="Umur..." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Keluhan</label>
                                <div class="col-xs-8">
                                    <input type="text" value="<?php echo $keluhan; ?>" name="keluhan" class="form-control" placeholder="Keluhan..." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Nomer HP</label>
                                <div class="col-xs-8">
                                    <input type="number" value="<?php echo $no_hp; ?>" name="no_hp" class="form-control" placeholder="Nomer HP..." required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                <button class="btn btn-info">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- END MODAL ADD PASIEN -->
    <script src="<?php echo base_url('assets/js/jquery-2.2.4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
</body>

</html>