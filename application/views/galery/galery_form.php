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
                    <input type="hidden" name="divisi_id" value="<?=$this->session->userdata('divisiid')?>">
                    <input type="hidden" name="user_id" value="<?=$this->session->userdata('userid')?>">
                    <input type="hidden" name="penulis_galery" value="<?=$this->session->userdata('namauser')?>">
                    <input type="hidden" name="id" value="<?=$row->galery_id?>">
                  <label>Judul Kegiatan</label>
                  <input type="text" name="judul_galery" value="<?=$row->judul_galery?>" class="form-control" placeholder="Judul Galery Disini" required>
                </div>
                <div class="form-group">
                <label>Keterangan Kegiatan</label>
                  <textarea id="editor1" type="text" name="keterangan_galery" class="form-control" placeholder="Keterangan Galery Disini" required><?=$row->keterangan_galery?></textarea>
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
            <?php if($page == 'add') { ?>
                <div class="form-group">
                  <label>Upload Gambar Disini</label>
                  <input type="file" name="image_galery" class="form-control">
                </div>
            <?php } ?>
            </div>
            <div class="box-footer">
                <button type="reset" class="btn btn-flat"><i class="fa fa-undo">
                </i> Reset</button>
                <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat pull-right"><i class="fa fa-paper-plane">
                </i> Save</button>
              </div>
              </form>
          </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    