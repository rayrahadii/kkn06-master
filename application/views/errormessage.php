<?php if ($this->session->has_userdata('wrongpass')) { ?>
<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-ban"></i><?=$this->session->flashdata('wrongpass');?>
            </div>
<?php } ?>