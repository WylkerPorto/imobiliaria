<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container" ng-controller="ihome">
    <?= ($msg = get_msg(true)) ? '<div class="alert alert-warning">' . $msg . '</div>' : null; ?>
    <table class="table dataTable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>CEP</th>
            <th>Valor</th>
            <th>
                <a href="<?= base_url('imovel/iinit'); ?>" class="btn btn-outline-success material-icons">add</a>
            </th>
        </tr>
        </thead>
        <?php if ($imoveis): ?>
            <?php foreach ($imoveis as $imovel): ?>
                <tbody>
                <tr>
                    <td><?= $imovel->id; ?></td>
                    <td><?= $imovel->nome; ?></td>
                    <td><?= $imovel->tipo; ?></td>
                    <td><?= $imovel->cep; ?></td>
                    <td><?= $imovel->valor; ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#modal" class="btn btn-outline-info material-icons"
                                ng-click="ver('<?= $imovel->id; ?>')">remove_red_eye
                        </button>
                        <a href="<?= base_url('imovel/iedit/') . $imovel->id; ?>"
                           class="btn btn-outline-warning material-icons">edit
                        </a>
                        <a href="<?= base_url('imovel/iview/') . $imovel->id; ?>"
                           class="btn btn-outline-primary material-icons">loupe
                        </a>
                    </td>
                </tr>
                </tbody>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalLabel">{{nome}}</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col"><p><b>cliente:</b> {{cliente}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>endereço:</b> {{endereco}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>número:</b> {{numero}}</p></div>
                            <div class="col"><p><b>complemento:</b> {{complemento}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>bairro:</b> {{bairro}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>cidade:</b> {{cidade}}</p></div>
                            <div class="col"><p><b>estado:</b> {{estado}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>Área total:</b> {{terreno}}m²</p></div>
                            <div class="col"><p><b>Área construida:</b> {{construida}}m²</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>tipo:</b> {{tipo}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>salas:</b> {{salas}}</p></div>
                            <div class="col"><p><b>quartos:</b> {{quartos}}</p></div>
                            <div class="col"><p><b>suites:</b> {{suites}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>banheiros:</b> {{banheiros}}</p></div>
                            <div class="col"><p><b>garagens:</b> {{garagens}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>valor:</b> R$:{{valor}}</p></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary material-icons" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>
</div>
