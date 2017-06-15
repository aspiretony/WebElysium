<?php
/**
 * @var \App\View\AppView $this
 */
?>

<!-- Main content -->
<section class="content">

                <!-- /.box-header -->
                <!-- form start -->
                <?= $this->Form->create($account, array('role' => 'form')) ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->input('account', ['class' => 'input']);
                    echo $this->Form->input('email', ['class' => 'input']);
                    echo $this->Form->input('password', ['class' => 'input']);
                    echo $this->Form->input('pin', ['class' => 'input']);
                    echo $this->Form->input('first_name', ['class' => 'input']);
                    echo $this->Form->input('last_name', ['class' => 'input']);
                    echo $this->Form->input('location', ['class' => 'input']);
                    ?>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <?= $this->Form->button(__('Salvar')) ?>
                </div>
                <?= $this->Form->end() ?>
</section>
