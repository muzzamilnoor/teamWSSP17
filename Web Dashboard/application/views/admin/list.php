<?php //$this->load->view('template/header')?>
<?php $this->load->view('template/menu')?>

<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> List All Complaint </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">List All Complaint</a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12"> 
        
        <!-- /.box -->
        
        <div class="box"> 
          
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>User Name</th>
                  <th>Complaint #</th>
                  <th>C-Details</th>
                  <th>Image</th>
                  <th>Complaint Location</th>
                  <th>Date</th>
                  <th>Time</th>
                 <!--  <th>Complaint Type</th> -->
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if(isset($multiListingData)) 
                
                foreach($multiListingData as $row){?>
                <tr>
                  <td><?=$row->c_id?></td>
                  <td><?=$row->fullname;//$this->model_users->get_user_name_by_id('account',$row->account_id); ?></td>
                  <td><?=$row->c_number?></td>
                  <td><?=$row->c_details?></td>
                  <td><img class="btn popup_image img-responsive " style="width:100px; height:80px; border-radius:4px;" class="img-responsive custom-img" src="<?=$row->image_path?>"></img></td>
                  <td><?=$row->bin_address?></td>
                  <td><?=$row->c_date?></td>
                  <td><?=$row->c_time?></td>
                  <td>
                  <script type="text/javascript">ga('send', 'event', 'select', 'Click', 'status');</script>
                  <?php if($row->status == 'pendingreview'){?>
                    <span class="btn bg-olive  btn-flat margin"><?php echo 'Pending Review';?></span>
                    <?php } else if($row->status == 'inprogress'){?>
                    <span class="btn bg-purple   btn-flat margin"><?php echo 'In Progress';?></span>
                    <?php }else if($row->status == 'completed'){?>
                    <span class="btn bg-navy   btn-flat margin"><?php echo 'Completed';?></span>
                    <?php }else if($row->status == 'underreview'){?>
                    <span class="btn bg-orange   btn-flat margin"><?php echo 'Under Review';?></span>
                    <?php }?></td>
                  <td><a onclick="return confirm('Are you sure you want to delete this?');" href="main/web_comp/delete/<?=$row->c_id?>" class="btn" style="background-color:#d73925; color: #fff;"><i class="fa fa-fw fa-close"></i></a> <a href="main/web_comp/edit/<?=$row->c_id?>" class="btn" style="background-color: #222d32;color: #fff; "><i class="fa fa-fw fa-edit"></i></a></td>
                </tr>
                <?php }?>
              </tbody>
              <tfoot>
                <tr>
                  <th>::::</th>
                  <th>::::</th>
                  <th>::::</th>
                  <th>::::</th>
                  <th>::::</th>
                  <th>::::</th>
                  <th>::::</th>
                  <th>::::</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body --> 
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
<style>
.error{
color:#FF0000;
}
</style>

<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/js/w2ui-1.4.2.min.css">
<script src="<?php echo base_url();?>assets/plugins/js/w2ui-1.4.2.min.js"></script>
<script>
$(document).ready(function() {

  $(".popup_image").on('click', function() {
    w2popup.open({
      title: 'Image',
      body: '<div class="w2ui-centered"><img src="' + $(this).attr('src') + '"></img></div>'
    });
  });

});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-100500944-1', 'auto');
  ga('send', 'pageview');

</script>