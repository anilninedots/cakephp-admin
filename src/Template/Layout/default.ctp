<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Admin';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <?= $this->Html->css('../vendor/bootstrap/css/bootstrap.min.css') ?>
    <!-- MetisMenu CSS -->
    <?= $this->Html->css('../vendor/metisMenu/metisMenu.min.css') ?>
    <!-- Custom CSS -->
    <?= $this->Html->css('../dist/css/sb-admin-2.css') ?>
    <!-- Morris Charts CSS -->
    <?= $this->Html->css('../vendor/morrisjs/morris.css') ?>
    <!-- Custom Fonts -->
    <?= $this->Html->css('../vendor/font-awesome/css/font-awesome.min.css') ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?= $this->Html->script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') ?>
       <?= $this->Html->script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') ?>
    <![endif]-->

</head>

<body>
    <!-- #wrapper -->
    <div class="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php echo $this->element('top-header');?>
            <?php echo $this->element('left-panel');?>
        </nav>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        </div>
    <!-- /#wrapper -->
    <footer>
    </footer>
        <!-- jQuery -->
    <?= $this->Html->script('../vendor/jquery/jquery.min.js') ?>
    <!-- Bootstrap Core JavaScript -->
    <?= $this->Html->script('../vendor/bootstrap/js/bootstrap.min.js') ?>
    <!-- Metis Menu Plugin JavaScript -->
    <?= $this->Html->script('../vendor/metisMenu/metisMenu.min.js') ?>
    <!-- Morris Charts JavaScript -->
    <?= $this->Html->script('../vendor/raphael/raphael.min.js') ?>
    <?= $this->Html->script('../vendor/morrisjs/morris.min.js') ?>
    <?= $this->Html->script('../data/morris-data.js') ?>
    <!-- Custom Theme JavaScript -->
    <?= $this->Html->script('../dist/js/sb-admin-2.js') ?>
</body>
</html>
