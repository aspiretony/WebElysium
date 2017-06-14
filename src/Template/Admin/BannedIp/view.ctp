<section class="content-header">
  <h1>
    <?php echo __('Banned Ip'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Address') ?></dt>
                                        <dd>
                                            <?= h($bannedIp->address) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Comment') ?></dt>
                                        <dd>
                                            <?= h($bannedIp->comment) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Start Time') ?></dt>
                                <dd>
                                    <?= h($bannedIp->start_time) ?>
                                </dd>
                                                                                                                    <dt><?= __('End Time') ?></dt>
                                <dd>
                                    <?= h($bannedIp->end_time) ?>
                                </dd>
                                                                                                    
                                            
                                    </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>
