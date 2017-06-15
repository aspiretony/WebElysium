<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    echo $this->Html->css('sorcerer');
    echo $this->Html->script('xhConn')
    ?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TITULO></title>
</head>

<body class="thrColElsHdr">

<div id="container">
    <div id="header">
        <div id="topinfo"></div>
        <div id="servername"></div>
        <!-- end #header --></div>
    <div id="sidebar1">
        <div id="searchpanel">
            <div id="searchbox" align="center">
                <form method="POST" action="" >
                    <input type="text" name="busca" size="20">
                    <input type="submit" class="searchbutton" onclick="incluir('buscar');" value="" />
                </form>
            </div>
            <div id="menuleft">
                <div id="menuposition" align="center">
                    <div id="menuback" align="center"><?php echo $this->Html->link(
                        'inicio',
                        ['controller' => 'noticias', 'action' => 'index', '_full' => true]
                        );?> </div>
                    <div id="menuback" align="center"><a href="#">sobre o server</a></div>
                    <div id="menuback" align="center"><a href="#">Registrar-se</a></div>
                    <div id="menuback" align="center"><a href="#">Perdeu sua conta?</a></div><br />
                    <div id="menuback" align="center"><a href="#" >Personagem</a></div>
                    <div id="menuback" align="center"><a href="#" >Ranking</a></div>
                    <div id="menuback" align="center"><a href="#" >Guilds</a></div>
                </div>
            </div>
        </div>
        <!-- end #sidebar1 --></div>
    <div id="sidebar2">
        <div id="loginpanel">
            <div id="loginbox"><form action="" method="post">
                    <input type="text" name="login" value="" class="input" />
                    <input type="password" name="senha" value="" class="input" /><br />
                    <table width="200" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="67"><input type="submit" class="loginbutton" value="" /></td>
                            <td width="133"><a href="">se vc perdeu sua conta click aqui!</a></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="joinusback">
                <?php $variavel =  $this->Html->image('joinbutton.png'); ?>
                <div id="joinusbutton">
                    <?php echo $this->Html->link(
                    $this->Html->image("joinbutton.png"),
                    "/accounts/add",
                    ['escape' => false]
                    ); ?>
                </div>
            </div>
        </div>
        <div id="highscorespanel">
            <div id="topplayers">
                hu3 hu3
            </div>
        </div>
        <!-- end #sidebar2 --></div>

    <div id="mainContent">
        <div id="contenttop">
        </div>
        <div id="contentbot">
            <div id="realcontent">
                <div>
                <div class="content-wrapper">
                    <?php echo $this->Flash->render(); ?>
                    <?php echo $this->Flash->render('auth'); ?>
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </div>
        <div id="contentbottom">
        </div>
        <!-- end #mainContent --></div>
    <!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos --><br class="clearfloat" />
    <div id="footer" align="center">
        <p>Copyright © 2017 by .<br />
             <a href="">tony</a><br />
            </p>
        <br />
        <!-- end #footer --></div></div>
<!-- end #container --></div>
</body>
</html>