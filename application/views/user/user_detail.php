<section class="content-header">
      <h1>Data User
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
              <form action="<?=site_url('user/process')?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?=$row->user_id?>">
                    <input type="hidden" name="level" value="<?=$row->level?>">
                  <label>Nama User</label>
                  <input type="text" name="nama_user" value="<?=$row->nama_user?>" class="form-control" placeholder="Nama User" readonly>
                </div>
                 <div class="form-group">
                  <label>Username</label>
                 <input type="text" name="username" value="<?=$row->username?>" class="form-control" placeholder="Username" readonly>
                </div>
                <div class="form-group">
                  <label>Level</label>
                 <input type="text" name="level" value="<?=$row->level?>" class="form-control" placeholder="Username" readonly>
                </div>
              
                
                <div class="box-footer">
                <div class="pull-left">
                    <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
              </div>

              </form>
            </div>
          </div>

        </div>
    
      <!-- /.row -->
    </section>
    <!-- /.content -->
    