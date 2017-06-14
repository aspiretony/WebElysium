<section class="content-header">
  <h1>
    <?php echo __('Conta Banida/bloqueada'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false])?>
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
                <h3 class="box-title"><?php echo __('Informações:'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Razão:') ?></dt>
                                        <dd>
                                            <?= h($accountBan->reason) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Nome da Conta:') ?></dt>
                                <dd>
                                    <?= h($accountBan->account->account) ?>
                                </dd>
                                                                                                                <dt><?= __('Expirado?:') ?></dt>
                                <dd>
                                    <?= $this->Number->format($accountBan->expired) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Data/Hora Inicio:') ?></dt>
                                <dd>
                                    <?= h($accountBan->start_time) ?>
                                </dd>
                                                                                                                    <dt><?= __('Data/Hora Fim:') ?></dt>
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
