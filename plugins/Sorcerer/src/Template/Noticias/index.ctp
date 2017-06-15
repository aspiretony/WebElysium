
  <font size="5" <span style="font-weight:bold">Ultimas Noticias</span> </font>


<table>
        <thead>
            <tr>
                <th>titulo</th>
                <th> postado dia</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($noticias as $noticia): ?>
            <tr>
                <td> <?= $this->Html->link($noticia->titulo, ['action' => 'view', $noticia->id]) ?> </td>
                <td><?= h($noticia->created) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>

