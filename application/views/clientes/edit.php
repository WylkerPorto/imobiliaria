<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container" ng-controller="cedit" ng-init="busca('<?= $cliente->id; ?>')">
    <?= form_open('', 'name="cliente"'); ?>
    <?= ($msg = get_msg(true)) ? '<div class="alert alert-warning">' . $msg . '</div>' : null; ?>
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" name="nome" placeholder="nome completo" ng-model="nome"
                   minlength="10" maxlength="150" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="cliente.nome.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="cliente.nome.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="number" class="form-control" name="cpf" placeholder="cpf 01234567890" ng-model="cpf"
                   minlength="11" maxlength="11" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="cliente.cpf.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="cliente.cpf.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="number" class="form-control" name="rg" placeholder="rg 012345678" ng-model="rg" minlength="9"
                   maxlength="9" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="cliente.rg.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="cliente.rg.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="tel" class="form-control" name="telefone" placeholder="telefone 1412345678 ou 14912345678"
                   ng-model="telefone" minlength="10" maxlength="11" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="cliente.telefone.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="cliente.telefone.$invalid">warning
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="email" class="form-control" name="email" placeholder="email" ng-model="email" minlength="10"
                   maxlength="150" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="cliente.email.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="cliente.email.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="number" class="form-control" name="cep" placeholder="cep" ng-model="cep" minlength="8"
                   maxlength="8" ng-change="consulta(cep)" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="cliente.cep.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="cliente.cep.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="cidade" placeholder="cidade" ng-model="cidade" minlength="3"
               maxlength="200">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="estado" placeholder="estado" ng-model="estado" minlength="2"
               maxlength="200">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="bairro" placeholder="bairro" ng-model="bairro" minlength="2"
               maxlength="200">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="endereco" placeholder="endereço" ng-model="endereco" minlength="5"
               maxlength="250">
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="number" class="form-control" name="numero" placeholder="número" ng-model="numero" min="1"
                   maxlength="11" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="cliente.numero.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="cliente.numero.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="complemento" placeholder="complemento" ng-model="complemento"
               min="1" maxlength="45" ng-="'<?= $cliente->complemento ?>'">
    </div>
    <div class="form-group">
        <button class="btn btn-outline-primary btn-block material-icons" ng-disabled="cliente.$invalid">add</button>
    </div>
    <?= form_close(); ?>
</div>
