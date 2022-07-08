<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$judul?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Mahasiswa</a></li>
              <li class="breadcrumb-item active">Create Mahasiswa</li>
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
          <h3 class="card-title"><?=$judul?></h3>

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
              <?php
                $hidden = ['idedit'=>$kgtedit->judul];

              ?>
            <?php echo form_open('kegiatan/save','',$hidden)?>
              <div class="form-group row">
                  <label for="judul" class="col-4 col-form-label">Judul</label> 
                  <div class="col-8">
                  <div class="input-group">
                      <div class="input-group-prepend">
                      <div class="input-group-text">
                          <i class="fa fa-sort-numeric-asc"></i>
                      </div>
                      </div> 
                      <input id="judul" name="judul" value="<?=$kgtedit->nim?>"placeholder="" type="text" class="form-control" required="required">
                  </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                  <div class="col-8">
                  <div class="input-group">
                      <div class="input-group-prepend">
                      <div class="input-group-text">
                          <i class="fa fa-address-card"></i>
                      </div>
                      </div> 
                      <input id="nama" name="nama" value="<?=$mhsedit->nama?>" placeholder="Masukan Nama Lengkap" type="text" class="form-control" required="required">
                  </div>
                  </div>
              </div>
              
              <div class="form-group row">
                  <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                  <div class="col-8">
                  <div class="input-group">
                      <div class="input-group-prepend">
                      <div class="input-group-text">
                          <i class="fa fa-location-arrow"></i>
                      </div>
                      </div> 
                      <input id="tmp_lahir" name="tmp_lahir" value="<?=$mhsedit->tmp_lahir?>" placeholder="Masukan Tempat Lahir" type="text" class="form-control" required="required">
                  </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                  <div class="col-8">
                  <div class="input-group">
                      <div class="input-group-prepend">
                      <div class="input-group-text">
                          <i class="fa fa-calendar-o"></i>
                      </div>
                      </div> 
                      <input id="tgl_lahir" name="tgl_lahir" value="<?=$mhsedit->tgl_lahir?>" placeholder="Masukan Tanggal Lahir" type="date" class="form-control" required="required">
                  </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="ipk" class="col-4 col-form-label">IPK</label> 
                  <div class="col-8">
                  <div class="input-group">
                      <div class="input-group-prepend">
                      <div class="input-group-text">
                          <i class="fa fa-archive"></i>
                      </div>
                      </div> 
                      <input id="ipk" name="ipk" value="<?=$mhsedit->ipk?>" placeholder="Masukan IPK" type="number" class="form-control" required="required">
                  </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
                  <div class="col-8">
                    <select id="prodi" name="prodi" class="custom-select" aria-describedby="prodiHelpBlock" required="required">
                      <option value="">Masukan Program Studi</option>
                      <option value="SI">Sistem Informasi</option>
                      <option value="TI">Teknik Informatika</option>
                      <option value="BD">Bisnis Digital</option>
                    </select> 
                  </div>
              </div> 
              <div class="form-group row">
                  <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
            <?php echo form_close()?>
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