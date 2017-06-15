<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Noticia $noticia
  */
?>

        <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['escape' => false])?>

    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($noticia->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postado dia:') ?></th>
            <td><?= h($noticia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado dia:') ?></th>
            <td><?= h($noticia->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Corpo') ?></h4>
        <?= $this->Text->autoParagraph(h($noticia->corpo)); ?>
    </div>

