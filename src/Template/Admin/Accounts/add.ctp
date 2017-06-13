<section class="content-header">
  <h1>
    Account
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
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
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($account, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('account');
            echo $this->Form->input('password');
            echo $this->Form->input('email');
            echo $this->Form->input('pin');
            echo $this->Form->input('cash');
            echo $this->Form->input('logged_in');
            echo $this->Form->input('access_level');
            echo $this->Form->input('active');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('location');
            echo $this->Form->input('date_created');
            echo $this->Form->input('date_last_login');
            echo $this->Form->input('creator_ip');
            echo $this->Form->input('last_ip');
            echo $this->Form->input('current_ip');
            echo $this->Form->input('pin_attempt');
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>
