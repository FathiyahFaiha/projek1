<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Fixed Layout</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="praktek/Projek1/hasilPasien.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Layout</a></li>
            <li class="breadcrumb-item active">Fixed Layout</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Selamat Datang </h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="container">
                <h2 class="text-center mb-5"> Data BMI Pasien</h2>
                <table class="table table-success table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Umur</th>
                      <th scope="col">Berat Badan</th>
                      <th scope="col">Tinggi Badan</th>
                      <th scope="col">Status BMI</th>
                      <th scope="col">Hasil BMI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="col">1</th>
                      <th scope="col">Lee Jeno</th>
                      <th scope="col">Laki-Laki</th>
                      <th scope="col">22</th>
                      <th scope="col">60.5</th>
                      <th scope="col">178.5</th>
                      <th scope="col">19.0</th>
                      <th scope="col">Berat Normal Ideal</th>
                    </tr>
                    <tr>
                      <th scope="col">2</th>
                      <th scope="col">Talitha Gunawan</th>
                      <th scope="col">Perempuan</th>
                      <th scope="col">20</th>
                      <th scope="col">50.5</th>
                      <th scope="col">165.5</th>
                      <th scope="col">18.4</th>
                      <th scope="col">Berat Badan Kurang</th>
                    </tr>
                    <tr>
                      <th scope="col">3</th>
                      <th scope="col">Na Jaemin</th>
                      <th scope="col">Pria</th>
                      <th scope="col">22</th>
                      <th scope="col">60.5</th>
                      <th scope="col">177.5</th>
                      <th scope="col">19.1</th>
                      <th scope="col">Berat Normal Ideal</th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Terimakasih
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<?php
include_once 'footer.php';
?>