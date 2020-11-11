<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
    <?= form_open('', 'name="tipo"'); ?>
    <?= ($msg = get_msg(true)) ? '<div class="alert alert-warning">' . $msg . '</div>' : null; ?>
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" name="nome" placeholder="nome" ng-model="nome"
                   minlength="3" maxlength="150" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="tipo.nome.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="tipo.nome.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-outline-primary btn-block material-icons" ng-disabled="tipo.$invalid">add</button>
    </div>
    <?= form_close(); ?>
</div>
