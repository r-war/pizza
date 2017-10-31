
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Website Data
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dasboard</a></li>
            <li class="active">Website Data</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <?php
        foreach(Yii::app()->user->getFlashes() as $key => $message) {?>
               <div class="alert alert-success alert-dismissable">
                   <i class="fa fa-check"></i>
                   <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                   <b>Info!</b>
                   <?php echo $message;?>
               </div>
     <?php } ?>

    
    </section>
<!-- /.content -->		