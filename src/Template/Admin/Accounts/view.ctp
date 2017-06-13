<section class="content-header">
  <h1>
    <?php echo __('Account'); ?>
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
                                                                                                                <dt><?= __('Account') ?></dt>
                                        <dd>
                                            <?= h($account->account) ?>
                                        </dd>
                                                                                                                                                                                                                                            <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($account->email) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Pin') ?></dt>
                                        <dd>
                                            <?= h($account->pin) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('First Name') ?></dt>
                                        <dd>
                                            <?= h($account->first_name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Last Name') ?></dt>
                                        <dd>
                                            <?= h($account->last_name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Location') ?></dt>
                                        <dd>
                                            <?= h($account->location) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Creator Ip') ?></dt>
                                        <dd>
                                            <?= h($account->creator_ip) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Last Ip') ?></dt>
                                        <dd>
                                            <?= h($account->last_ip) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Current Ip') ?></dt>
                                        <dd>
                                            <?= h($account->current_ip) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Cash') ?></dt>
                                <dd>
                                    <?= $this->Number->format($account->cash) ?>
                                </dd>
                                                                                                                <dt><?= __('Access Level') ?></dt>
                                <dd>
                                    <?= $this->Number->format($account->access_level) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Date Created') ?></dt>
                                <dd>
                                    <?= h($account->date_created) ?>
                                </dd>
                                                                                                                    <dt><?= __('Date Last Login') ?></dt>
                                <dd>
                                    <?= h($account->date_last_login) ?>
                                </dd>
                                                                                                    
                                                                        <dt><?= __('Logged In') ?></dt>
                            <dd>
                            <?= $account->logged_in ? __('Yes') : __('No'); ?>
                            </dd>
                                                    <dt><?= __('Active') ?></dt>
                            <dd>
                            <?= $account->active ? __('Yes') : __('No'); ?>
                            </dd>
                                                    <dt><?= __('Pin Attempt') ?></dt>
                            <dd>
                            <?= $account->pin_attempt ? __('Yes') : __('No'); ?>
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

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Account Ban']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($account->account_ban)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Account Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Start Time
                                    </th>
                                        
                                                                    
                                    <th>
                                    End Time
                                    </th>
                                        
                                                                    
                                    <th>
                                    Reason
                                    </th>
                                        
                                                                    
                                    <th>
                                    Expired
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($account->account_ban as $accountBan): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($accountBan->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($accountBan->account_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($accountBan->start_time) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($accountBan->end_time) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($accountBan->reason) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($accountBan->expired) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'AccountBan', 'action' => 'view', $accountBan->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'AccountBan', 'action' => 'edit', $accountBan->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AccountBan', 'action' => 'delete', $accountBan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountBan->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Account Service']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($account->account_service)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Account Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Service Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Start Time
                                    </th>
                                        
                                                                    
                                    <th>
                                    End Time
                                    </th>
                                        
                                                                    
                                    <th>
                                    Expired
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($account->account_service as $accountService): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($accountService->account_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($accountService->service_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($accountService->start_time) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($accountService->end_time) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($accountService->expired) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'AccountService', 'action' => 'view', $accountService->account_id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'AccountService', 'action' => 'edit', $accountService->account_id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AccountService', 'action' => 'delete', $accountService->account_id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountService->account_id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
