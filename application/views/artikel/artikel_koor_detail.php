<section class="content-header">
      <h1>Data Artikel
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Artikel</li>
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
              <form enctype="multipart/form-data" action="<?=site_url('artikelkoor/process')?>" method="post">
                <div class="form-group">
                  <label>Judul Artikel</label>
                  <input type="text" name="judul_artikel" value="<?=$row->judul_artikel?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                <label>Keterangan Artikel</label>
                  <textarea id="editor2" type="text" name="keterangan_artikel" value="" class="form-control" readonly><?=$row->keterangan_artikel?></textarea>
                </div>
                <div class="form-group">
                  <label>Link Video</label>
                  <input type="text" name="link_video" value="<?=$row->link_video?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Isi Artikel</label>
                 <textarea id="editor1" type="text" name="isi_artikel" rows="8" class="form-control" readonly><?=$row->isi_artikel?></textarea>
                </div>
                <div class="pull-left">
                    <a href="<?=site_url('artikelkoor')?>" class="btn btn-warning btn-flat">
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
                  <label>Gambar Artikel</label>
                  <img src="<?=base_url('uploads/artikel/'.$row->image_artikel)?>" style="width:100%;">
                </div>
            </div>
    
              </form>
          </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    