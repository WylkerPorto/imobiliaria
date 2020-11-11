<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container" ng-controller="chome">
    <?= ($msg = get_msg(true)) ? '<div class="alert alert-warning">' . $msg . '</div>' : null; ?>
    <table class="table dataTable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>
                <a href="<?= base_url('usuario/uinit'); ?>" class="btn btn-outline-success material-icons">add</a>
            </th>
        </tr>
        </thead>
        <?php if ($usuarios): ?>
            <?php foreach ($usuarios as $usuario): ?>
                <tbody>
                <tr>
                    <td><?= $usuario->id; ?></td>
                    <td><?= $usuario->nome; ?></td>
                    <td><?= $usuario->email; ?></td>
                    <td><?= $usuario->telefone; ?></td>
                    <td>
                        <a href="<?= base_url('usuario/uedit/') . $usuario->id; ?>"
                           class="btn btn-outline-warning material-icons">edit
                        </a>
                    </td>
                </tr>
                </tbody>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>
