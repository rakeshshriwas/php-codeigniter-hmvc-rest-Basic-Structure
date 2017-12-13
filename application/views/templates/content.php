<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?php echo $title; ?></h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-primary">
        <div class="box-body">
         <?php $this->load->view($main_content); ?>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->