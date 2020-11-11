<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
    <?= form_open('', 'name="login"'); ?>
    <?= ($msg = get_msg(true)) ? '<div class="alert alert-warning">' . $msg . '</div>' : null; ?>
    <div class="form-group">
        <div class="input-group">
            <input type="email" class="form-control" name="email" placeholder="email" ng-model="email"
                   minlength="7" maxlength="50" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="login.email.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="login.email.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="password" class="form-control" name="senha" placeholder="senha" ng-model="senha"
                   minlength="5" maxlength="50" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="login.senha.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="login.senha.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-outline-primary btn-block material-icons" ng-disabled="login.$invalid">add</button>
    </div>
    <?= form_close(); ?>
</div>
