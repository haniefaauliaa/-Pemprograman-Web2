<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jenis Kegiatan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Jenis Kegiatan</h3>

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
        <table class="table table-striped table-dark table-bordered">
  <thead>
            <tr>
                
                <th>Nomor</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
</thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_jenkeg as $jenkeg) {
            ?>
                <tr>
                   
                    
                    <td><?= $nomor ?></td>
                    <td><?= $jenkeg->nama ?></td>
                    
                    <td>
                    <a class="btn btn-danger" href="<?php echo base_url("index.php/jeniskegiatan/delete/$jenkeg->id") ?>" >Delete</a>                   
                   
            </td>
                </tr>
            <?php
             $nomor++;
            }
            ?>
        </tbody> 
    </table>
    <a class="btn btn-primary" href="<?php echo base_url("index.php/jeniskegiatan/form")?>">Add Jenis Kegiatan</a>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

