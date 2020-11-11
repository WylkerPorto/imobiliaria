<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container" ng-controller="chome">
    <?= ($msg = get_msg(true)) ? '<div class="alert alert-warning">' . $msg . '</div>' : null; ?>
    <table class="table dataTable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>
                <a href="<?= base_url('cliente/cinit'); ?>" class="btn btn-outline-success material-icons">add</a>
            </th>
        </tr>
        </thead>
        <?php if ($clientes): ?>
            <?php foreach ($clientes as $cliente): ?>
                <tbody>
                <tr>
                    <td><?= $cliente->id; ?></td>
                    <td><?= $cliente->nome; ?></td>
                    <td><?= $cliente->telefone; ?></td>
                    <td><?= $cliente->endereco; ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#modal" class="btn btn-outline-info material-icons"
                                ng-click="ver('<?= $cliente->id; ?>')">remove_red_eye
                        </button>
                        <a href="<?= base_url('cliente/cedit/') . $cliente->id; ?>"
                           class="btn btn-outline-warning material-icons">edit
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
                            <div class="col"><p><b>cpf:</b> {{cpf}}</p></div>
                            <div class="col"><p><b>rg:</b> {{rg}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>telefone:</b> {{telefone}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>email:</b> {{email}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>cep:</b> {{cep}}</p></div>
                            <div class="col"><p><b>número:</b> {{numero}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>endereço:</b> {{endereco}}</p></div>
                            <div class="col"><p><b>bairro:</b> {{bairro}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>complemento:</b> {{complemento}}</p></div>
                        </div>
                        <div class="row">
                            <div class="col"><p><b>cidade:</b> {{cidade}}</p></div>
                            <div class="col"><p><b>estado:</b> {{estado}}</p></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary material-icons" data-dismiss="modal">close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
