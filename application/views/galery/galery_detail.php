<section class="content-header">
      <h1>Data Galery
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Galery</li>
      </ol>
    </section>

    <!-- Main content -->
      <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <div class="box box-warning">
            
            <div class="box-body">
              <form enctype="multipart/form-data" action="<?=site_url('galery/process')?>" method="post">
                <div class="form-group">
                  <label>Judul Kegiatan</label>
                  <input type="text" name="judul_galery" value="<?=$row->judul_galery?>" class="form-control" placeholder="Judul Galery Disini" readonly>
                </div>
                <div class="form-group">
                <label>Keterangan Kegiatan</label>
                  <textarea id="editor1" type="text" name="keterangan_galery" class="form-control" placeholder="Keterangan Galery Disini" readonly><?=$row->keterangan_galery?></textarea>
                </div>
                <div class="pull-left">
                    <a href="<?=site_url('galery')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
          </div>

        </div>
      
        <div class="col-md-6">
          <div class="box box-warning">
            <div class="box-body">
                <div class="form-group">
                  <label>Upload Gambar Disini</label>
                  <img src="<?=base_url('uploads/galery/'.$row->image_galery)?>" style="width:100%;">
                </div>
            </div>
              </form>
          </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    