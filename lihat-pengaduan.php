<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
    </div>
    <div class="card-body" style="font-size: 14px">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="border-collapse: collapse; border: 1px solid #ddd;">
                <thead>
                    <tr>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">No</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Tanggal Pengaduan</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Isi Laporan</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Foto</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Status</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = "SELECT * FROM pengaduan WHERE nik='$_SESSION[nik]' ORDER BY id_pengaduan DESC";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px; text-align: center;"><?= $no++; ?></td>
                            <td style="border: 1px solid #ddd; padding: 8px; text-align: center;"><?= $data['tgl_pengaduan']; ?></td>
                            <td style="border: 1px solid #ddd; padding: 8px;"><?= $data['isi_laporan']; ?></td>
                            <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">
                                <img src="foto/<?= $data['foto']; ?>" alt="Foto Pengaduan" width="50" height="50" style="object-fit: cover; border-radius: 4px;">
                            </td>
                            <td style="border: 1px solid #ddd; padding: 8px; text-align: center;"><?= ucfirst($data['status']); ?></td>
                            <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">
                                <a href="?url=detail-pengaduan&id=<?= $data['id_pengaduan'] ?>" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-5">
                                        <i class="fa fa-info"></i>
                                    </span>
                                    <span class="text">Detail</span>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
