<section class="content-header">
      <h1>Data Artikel
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">User</li>
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
              <form action="<?=site_url('user/process')?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?=$row->user_id?>">
                    <input type="hidden" name="level" value="<?=$row->level?>">
                  <label>Nama User</label>
                  <input type="text" name="nama_user" value="<?=$row->nama_user?>" class="form-control" placeholder="Nama User" required>
                </div>
                 <div class="form-group">
                  <label>Username</label>
                 <input type="text" name="username" value="<?=$row->username?>" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                 <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Divisi</label>
                <select class="form-control select2" name="divisi_id" style="width: 100%;">
                  <option selected="selected">Pilih Divisi</option>
                  <?php
                    $query = $this->db->query('SELECT * FROM divisi');
                    foreach ($query->result() as $data1) { ?>
                    <option value="<?=$data1->divisi_id?>"><?=$data1->nama_divisi?></option>
                  <?php
                  } ?>
                </select>
              </div>
              <div class="form-group">
                <label>Divisi</label>
                <select class="form-control select2" name="level" style="width: 100%;">
                  <option selected="selected">Pilih Level</option>
                  <option value="1">Superadmin</option>
                  <option value="2">Koordinator</option>
                  <option value="3">Anggota</option>
                </select>
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
            
          <div class="pull-left">
                    <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
        </div>
    
      <!-- /.row -->
    </section>
    <!-- /.content -->
    