<section class="content-header">
  <h1>
    <?php echo __('Visualizar conta'); ?>
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
                <h3 class="box-title"><?php echo __('Informações Gerais'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Conta:') ?></dt>
                                        <dd>
                                            <?= h($account->account) ?>
                                        </dd>
                                                                                                                                                                                                                                            <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($account->email) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Pin:') ?></dt>
                                        <dd>
                                            <?= h($account->pin) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Nome:') ?></dt>
                                        <dd>
                                            <?= h($account->first_name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('SobreNome:') ?></dt>
                                        <dd>
                                            <?= h($account->last_name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Localização:') ?></dt>
                                        <dd>
                                            <?= h($account->location) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Ip do Criador:') ?></dt>
                                        <dd>
                                            <?= h($account->creator_ip) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Ultimo IP:') ?></dt>
                                        <dd>
                                            <?= h($account->last_ip) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('IP Atual:') ?></dt>
                                        <dd>
                                            <?= h($account->current_ip) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Cash:') ?></dt>
                                <dd>
                                    <?= $this->Number->format($account->cash) ?>
                                </dd>
                                                                                                                <dt><?= __('Nivel de Acesso:') ?></dt>
                                <dd>
                                    <?= $this->Number->format($account->access_level) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Data Criada:') ?></dt>
                                <dd>
                                    <?= h($account->date_created) ?>
                                </dd>
                                                                                                                    <dt><?= __('Data do Ultimo Login:') ?></dt>
                                <dd>
                                    <?= h($account->date_last_login) ?>
                                </dd>
                                                                                                    
                                                                        <dt><?= __('Logado?:') ?></dt>
                            <dd>
                            <?= $account->logged_in ? __('Online') : __('Offline'); ?>
                            </dd>
                                                    <dt><?= __('Conta Ativa?:') ?></dt>
                            <dd>
                            <?= $account->active ? __('Sim') : __('Não'); ?>
                            </dd>
                                                    <dt><?= __('Tentativas de PIN') ?></dt>
                            <dd>
                            <?= ($account->pin_attempt); ?>
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
                    <h3 class="box-title"><?= __('Relatos de {0}', ['Contas Banidas']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($account->account_ban)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                        <?php echo __('ID'); ?>
                                    </th>
                                        
                                                                    
                                    <th>
                                        <?php echo __('ID da Conta'); ?>
                                    </th>
                                        
                                                                    
                                    <th>
                                        <?php echo __('Inicio'); ?>
                                    </th>
                                        
                                                                    
                                    <th>
                                        <?php echo __('Fim'); ?>
                                    </th>
                                        
                                                                    
                                    <th>
                                        <?php echo __('Razão'); ?>
                                    </th>
                                        
                                                                    
                                    <th>
                                        <?php echo __('Expirado?:'); ?>
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Ações'); ?>
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

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'AccountBan', 'action' => 'edit', $accountBan->id], ['class'=>'btn btn-success btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Deletar'), ['controller' => 'AccountBan', 'action' => 'delete', $accountBan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountBan->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
                    <h3 class="box-title"><?= __('Relatos de {0}', ['Serviços da Conta']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($account->account_service)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                        <?php echo __('ID da Conta:'); ?>
                                    </th>
                                        
                                                                    
                                    <th>
                                        <?php echo __('Serviço:'); ?>
                                    </th>
                                        
                                                                    
                                    <th>
                                        <?php echo __('Inicio:'); ?>
                                    </th>
                                        
                                                                    
                                    <th>
                                        <?php echo __('Fim:'); ?>
                                    </th>
                                        
                                                                    
                                    <th>
                                        <?php echo __('Expirado?:'); ?>
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Ações'); ?>
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
                                    <?= $this->Html->link(__('Editar'), ['controller' => 'AccountService', 'action' => 'edit', $accountService->account_id], ['class'=>'btn btn-success btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Deletar'), ['controller' => 'AccountService', 'action' => 'delete', $accountService->account_id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountService->account_id), 'class'=>'btn btn-danger btn-xs']) ?>
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
