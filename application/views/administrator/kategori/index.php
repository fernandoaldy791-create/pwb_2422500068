<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Starter Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kategori</h5>
              <div class="card-text">
                <a href="<?= site_url('admin/kategori/tambah') ?>" class="btn btn-labeled btn-primary">
                  <span class="btn-label">
                    <i class="fa fa-plus"></i>
                  </span>
                  Kategori
                </a>
                <div class="card-body px-0">
                  <?php if ($this->session->flashdata('message')) : ?>
                    <?= $this->session->flashdata('message') ?>
                  <?php endif ?>
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($list_kategori as $kategori) : ?>
                        <tr data-widget="expandable-table" aria-expanded="false">
                          <td><?= $no ?></td>
                          <td><?= html_escape($kategori['nama']) ?></td>
                          <td><?= html_escape($kategori['deskripsi']) ?></td>
                          <td>
                            <a href="<?= site_url('admin/kategori/ubah/' . $kategori['id_kategori']) ?>"><span class="badge badge-success">Ubah</span></a>
                            <a href="<?= site_url('admin/kategori/hapus/' . $kategori['id_kategori']) ?>" onclick="return confirm('Yakin ingin menghapus kategori ini?');"><span class="badge badge-danger">Hapus</span></a>
                          </td>
                        </tr>
                      <?php $no++; endforeach ?>
                      <?php if (empty($list_kategori)) : ?>
                        <tr>
                          <td colspan="4" class="text-center text-muted">Belum ada data kategori</td>
                        </tr>
                      <?php endif ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->