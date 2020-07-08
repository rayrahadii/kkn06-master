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
                    <input type="hidden" name="divisi_id" value="<?=$this->session->userdata('divisiid')?>">
                    <input type="hidden" name="user_id" value="<?=$this->session->userdata('userid')?>">
                    <input type="hidden" name="penulis_artikel" value="<?=$this->session->userdata('namauser')?>">
                    <input type="hidden" name="id" value="<?=$row->artikel_id?>">
                  <label>Judul Artikel</label>
                  <input type="text" name="judul_artikel" value="<?=$row->judul_artikel?>" class="form-control" placeholder="Judul Artikel Disini" required>
                </div>
                <div class="form-group">
                <label>Keterangan Artikel</label>
                  <textarea id="editor2" type="text" name="keterangan_artikel" class="form-control" placeholder="Keterangan Artikel Disini" required><?=$row->keterangan_artikel?></textarea>
                </div>
                <div class="form-group">
                <label>Link Youtube / Video</label>
                  <input type="text" name="link_video" class="form-control"  value="<?=$row->link_video?>" placeholder="Keterangan Artikel Disini">
                </div>
                <div class="form-group">
                  <label>Isi Artikel</label>
                 <textarea id="editor1" type="text" name="isi_artikel" rows="8" class="form-control" placeholder="isi Artikel Disini" required><?=$row->isi_artikel?></textarea>
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
            <?php if($page == 'add') { ?>
                <div class="form-group">
                  <label>Upload Gambar Disini</label>
                  <input type="file" name="image_artikel" class="form-control">
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
    