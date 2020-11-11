<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container" ng-controller="iedit" ng-init="busca('<?= $imovel->id; ?>')">
    <?= form_open('', 'name="imovel"'); ?>
    <?= ($msg = get_msg(true)) ? '<div class="alert alert-warning">' . $msg . '</div>' : null; ?>
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" name="nome" placeholder="nome do imóvel" ng-model="nome"
                   minlength="3" maxlength="150" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="imovel.nome.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="imovel.nome.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <select name="cliente" id="cliente" class="select2 form-control" ng-model="cliente" required>
                <?php if ($clientes): ?>
                    <?php foreach ($clientes as $cliente): ?>
                        <option value="<?= $cliente->id ?>"><?= $cliente->nome ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="imovel.cliente.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="imovel.cliente.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <select name="tipo" id="tipo" class="select2 form-control" ng-model="tipo" required>
                <?php if ($tipos): ?>
                    <?php foreach ($tipos as $tipo): ?>
                        <option value="<?= $tipo->id ?>"><?= $tipo->nome ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="imovel.tipo.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="imovel.tipo.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" name="quartos" placeholder="quartos" ng-model="quartos"
               minlength="1" maxlength="10">
    </div>
    <div class="form-group">
        <input type="number" class="form-control" name="banheiros" placeholder="banheiros" ng-model="banheiros"
               minlength="1" maxlength="10">
    </div>
    <div class="form-group">
        <input type="number" class="form-control" name="terreno" placeholder="área do terreno m²" ng-model="terreno"
               minlength="1" maxlength="7" step="0.05">
    </div>
    <div class="form-group">
        <input type="number" class="form-control" name="salas" placeholder="salas" ng-model="salas"
               minlength="1" maxlength="10">
    </div>
    <div class="form-group">
        <input type="number" class="form-control" name="garagens" placeholder="garagens" ng-model="garagens"
               minlength="1" maxlength="10">
    </div>
    <div class="form-group">
        <input type="number" class="form-control" name="suites" placeholder="suites" ng-model="suites"
               minlength="1" maxlength="10">
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="number" class="form-control" name="valor" placeholder="valor" ng-model="valor"
                   minlength="1" maxlength="11" step="0.01" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="imovel.valor.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="imovel.valor.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" name="construida" placeholder="área construida m²"
               ng-model="construida" minlength="1" maxlength="7" step="0.05">
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" name="cep" placeholder="cep" ng-model="cep" minlength="8"
                   maxlength="8" ng-change="consulta(cep)" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="imovel.cep.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="imovel.cep.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="endereco" placeholder="endereço" ng-model="endereco"
               minlength="3" maxlength="250">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="bairro" placeholder="bairro" ng-model="bairro"
               minlength="3" maxlength="200">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="cidade" placeholder="cidade" ng-model="cidade"
               minlength="3" maxlength="200">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="estado" placeholder="estado" ng-model="estado"
               minlength="2" maxlength="200">
    </div>
    <div class="form-group">
        <div class="input-group">
            <input type="number" class="form-control" name="numero" placeholder="numero" ng-model="numero"
                   minlength="1" maxlength="11" required>
            <div class="input-prepend">
                <div class="input-group-text material-icons text-success" ng-show="imovel.numero.$valid">check</div>
                <div class="input-group-text material-icons text-danger" ng-show="imovel.numero.$invalid">warning</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="complemento" placeholder="complemento" ng-model="complemento"
               minlength="1" maxlength="45">
    </div>
    <div class="form-group">
        <button class="btn btn-outline-primary btn-block material-icons" ng-disabled="imovel.$invalid">add</button>
    </div>
    <?= form_close(); ?>
</div>
