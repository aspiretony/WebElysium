<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
      <?= __('Serviços de Conta') ?>
    <div class="pull-right"><?php // echo $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Lista do serviço de contas') ?> </h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('Conta') ?></th>
              <th><?= $this->Paginator->sort('Serviço') ?></th>
              <th><?= $this->Paginator->sort('Inicio') ?></th>
              <th><?= $this->Paginator->sort('Fim') ?></th>
              <th><?= $this->Paginator->sort('expirado?') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($accountService as $accountService): ?>
              <tr>
                <td><?= $accountService->has('account') ? $this->Html->link($accountService->account->id, ['controller' => 'Accounts', 'action' => 'view', $accountService->account->id]) : '' ?></td>
                <td><?= $this->Number->format($accountService->service_id) ?></td>
                <td><?= h($accountService->start_time) ?></td>
                <td><?= h($accountService->end_time) ?></td>
                <td><?= $this->Number->format($accountService->expired) ?></td>
                <td class="actions" style="white-space:nowrap">
                 Em Breve <?php // echo  $this->Html->link(__('View'), ['action' => 'view', $accountService->account_id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?php // echo $this->Html->link(__('Edit'), ['action' => 'edit', $accountService->account_id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?php // echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $accountService->account_id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
