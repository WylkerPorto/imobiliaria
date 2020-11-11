<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
    <?= form_open('', 'name="usuario"'); ?>
    <?= ($msg = get_msg(true)) ? '<div class="alert alert-warning">' . $msg . '</div>' : null; ?>
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" name="nome" placeholder="nome completo" ng-model="nome"
                   minlength="3" maxlength="150" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="usuario.nome.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="usuario.nome.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="password" class="form-control" name="senha" placeholder="senha" ng-model="senha"
                   minlength="5" maxlength="50" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="usuario.senha.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="usuario.senha.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="email" class="form-control" name="email" placeholder="email" ng-model="email"
                   minlength="7" maxlength="50" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="usuario.email.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="usuario.email.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="tel" class="form-control" name="telefone" placeholder="telefone ex:14912345678 ou 1412345678"
                   ng-model="telefone" minlength="10" maxlength="11" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="usuario.telefone.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="usuario.telefone.$invalid">warning
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-outline-primary btn-block material-icons" ng-disabled="usuario.$invalid">add</button>
    </div>
    <?= form_close(); ?>
</div>
