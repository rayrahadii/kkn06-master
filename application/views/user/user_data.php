<section class="content-header">
      <h1>Data User
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php $this->view('messages') ?>
        <div class="box">
            <div class="box-header">
                <div class="pull-right">
                    <a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-plus"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Divisi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data->nama_user?></td>
                            <td><?=$data->nama_divisi?></td>
                            <td class="text-center" width="160px">
                            <a href="<?=site_url('user/edit/'.$data->user_id)?>" class="btn btn-success btn-xs">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="<?=site_url('user/del/'.$data->user_id)?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a href="<?=site_url('user/detail/'.$data->user_id)?>" class="btn btn-info btn-xs">
                                    <i class="fa fa-info-circle"></i>
                                </a>
                            </td>
                        </tr>
                    <?php 
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
      
    </section>
    
 