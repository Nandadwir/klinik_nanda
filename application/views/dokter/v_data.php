<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-dark">
            <div class="card-header bg-dark text-white">
                <?= $title; ?>
                    <a href="<?= base_url('dokter/tambah'); ?>" class="btn btn-success btn-sm float-right">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>No.</th>
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($dokter as $r) { ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $r['nama_dokter']; ?></td>
                                    <td><?= $r['spesialis']; ?></td>
                                    <td><?= $r['alamat']; ?></td>
                                    <td><?= $r['email']; ?></td>
                                    <td>
                                        <a href="<?= base_url().'dokter/edit/'.$r['id_dokter']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url().'dokter/hapus/'.$r['id_dokter']; ?>" class="btn btn-danger btn-sm" 
                                        onClick="return confirm('Yakin akan menghapus')">Hapus</a>
                                    </td>
                                </tr>
                            <?php $no++; }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>