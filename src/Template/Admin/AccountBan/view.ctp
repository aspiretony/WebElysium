<section class="content-header">
  <h1>
    <?php echo __('Account Ban'); ?>
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
                                                                                                                <dt><?= __('Reason') ?></dt>
                                        <dd>
                                            <?= h($accountBan->reason) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Account Id') ?></dt>
                                <dd>
                                    <?= $this->Number->format($accountBan->account_id) ?>
                                </dd>
                                                                                                                <dt><?= __('Expired') ?></dt>
                                <dd>
                                    <?= $this->Number->format($accountBan->expired) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Start Time') ?></dt>
                                <dd>
                                    <?= h($accountBan->start_time) ?>
                                </dd>
                                                                                                                    <dt><?= __('End Time') ?></dt>
                                <dd>
                                    <?= h($accountBan->end_time) ?>
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
