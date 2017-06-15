<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i');
$ip = getenv("REMOTE_ADDR");
?>
<div class="accounts form large-9 medium-8 columns content">
    <?= $this->Form->create($account) ?>
    <fieldset>
        <legend><?= __('Add Account') ?></legend>
        <?php
            echo $this->Form->control('account', ['class' => 'input']);
            echo $this->Form->control('password', ['class' => 'input']);
            echo $this->Form->control('email', ['class' => 'input']);
            echo $this->Form->control('pin', ['class' => 'input']);
            echo $this->Form->control('first_name', ['class' => 'input']);
            echo $this->Form->control('last_name', ['class' => 'input']);
            echo $this->Form->control('location', ['class' => 'input']);
            echo $this->Form->control('date_created', ['class' => 'input','default' => $date, 'type' => 'hidden']);
            echo $this->Form->control('creator_ip', ['class' => 'input','default' => $ip, 'type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button('', ['class'=>'loginbutton']) ?>
    <?= $this->Form->end() ?>
</div>
