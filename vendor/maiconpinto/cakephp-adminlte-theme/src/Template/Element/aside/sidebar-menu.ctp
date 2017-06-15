<?php
$file = $theme['folder'] . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
    ?>
    <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-dashboard"></i> <span>Gerenciar Contas</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo $this->Url->build('/admin/accounts'); ?>"><i class="fa fa-circle-o"></i> Contas</a></li>
                <li><a href="<?php echo $this->Url->build('/admin/account-ban'); ?>"><i class="fa fa-circle-o"></i> Contas Banidas</a></li>
                <li><a href="<?php echo $this->Url->build('/admin/account-service'); ?>"><i class="fa fa-circle-o"></i> Serviços de Contas</a></li>
                <li><a href="<?php echo $this->Url->build('/admin/banned-ip'); ?>"><i class="fa fa-circle-o"></i> Banir IP</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Gerenciar Site</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo $this->Url->build('/admin/noticias/'); ?>"><i class="fa fa-circle-o"></i>Adicionar Noticias</a></li>
            </ul>
        </li>
        <li><a href="<?php echo $this->Url->build('/admin/pages/debug'); ?>"><i class="fa fa-bug"></i> Debug</a></li>
    </ul>
<?php } ?>