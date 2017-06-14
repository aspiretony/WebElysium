<section class="content-header">
  <h1>
    <?= __('Adicionar Conta') ?>
    <small> :) </small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Voltar'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Formulario') ?></h3>
        </div>
        <!-- /.box-header -->
          <?php
          date_default_timezone_set('America/Sao_Paulo');
          $date = date('Y-m-d H:i');
          $ip = getenv("REMOTE_ADDR");
          ?>
        <!-- form start -->
        <?= $this->Form->create($account, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('account');
            echo $this->Form->input('password');
            echo $this->Form->input('email');
            echo $this->Form->input('pin');
            echo $this->Form->input('cash');
            echo $this->Form->input('access_level');
            echo $this->Form->input('active');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('location');
            echo $this->Form->input('date_created', ['default' => $date, 'type' => 'hidden']);
            echo $this->Form->input('creator_ip', ['default' => $ip, 'type' => 'hidden']);

          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Salvar')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>
