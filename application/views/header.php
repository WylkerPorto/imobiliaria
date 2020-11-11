<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

    <!-- Jquery -->
    <script src="<?= base_url('node_modules/jquery/dist/jquery.min.js'); ?>"></script>

    <!-- Bootstrap 4.0 -->
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">

    <!-- Angularjs -->
    <link rel="stylesheet" href="<?= base_url('node_modules/angular/angular-csp.css'); ?>">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('node_modules/select2/dist/css/select2.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('node_modules/select2-bootstrap4-theme/dist/select2-bootstrap4.css'); ?>">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css'); ?>">

    <!-- Material Icons -->
    <link rel="stylesheet" href="<?= base_url('node_modules/material-design-icons/iconfont/material-icons.css'); ?>">

    <!-- Bootstrap 4.0 -->
    <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

    <!-- Angularjs -->
    <script src="<?= base_url('node_modules/angular/angular.min.js'); ?>"></script>

    <!-- Select2 -->
    <script src="<?= base_url('node_modules/select2/dist/js/select2.js'); ?>"></script>

    <!-- DataTables -->
    <script src="<?= base_url('node_modules/datatables.net/js/jquery.dataTables.js'); ?>"></script>
    <script src="<?= base_url('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js'); ?>"></script>

    <!-- Myjs -->
    <script src="<?= base_url('assets/my/MyScript.js'); ?>"></script>
</head>
<body ng-app="myapp">