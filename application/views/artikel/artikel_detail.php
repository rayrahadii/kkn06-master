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
              <form enctype="multipart/form-data" action="<?=site_url('artikel/process')?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="divisi_id" value="<?=$this->session->userdata('divisiid')?>">
                    <input type="hidden" name="user_id" value="<?=$this->session->userdata('userid')?>">
                    <input type="hidden" name="penulis_artikel" value="<?=$this->session->userdata('namauser')?>">
                    <input type="hidden" name="id" value="<?=$row->artikel_id?>">
                  <label>Judul Artikel</label>
                  <input type="text" name="judul_artikel" value="<?=$row->judul_artikel?>" class="form-control" placeholder="Judul Artikel Disini" readonly>
                </div>
                <div class="form-group">
                <label>Keterangan Artikel</label>
                  <textarea id="editor2" type="text" name="keterangan_artikel" value="" class="form-control" placeholder="Judul Artikel Disini" readonly><?=$row->keterangan_artikel?></textarea>
                </div>
                <div class="form-group">
                  <label>Isi Artikel</label>
                 <textarea id="editor1" type="text" name="isi_artikel" rows="8" class="form-control" placeholder="isi Artikel Disini" readonly><?=$row->isi_artikel?></textarea>
                </div>
                <div class="pull-left">
                    <a href="<?=site_url('artikel')?>" class="btn btn-warning btn-flat">
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
    