<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
    <?= ($msg = get_msg(true)) ? '<div class="alert alert-warning">' . $msg . '</div>' : null; ?>
    <table class="table dataTable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>
                <a href="<?= base_url('tipo/tinit'); ?>" class="btn btn-outline-success material-icons">add</a>
            </th>
        </tr>
        </thead>
        <?php if ($tipos): ?>
            <?php foreach ($tipos as $tipo): ?>
                <tbody>
                <tr>
                    <td><?= $tipo->id; ?></td>
                    <td><?= $tipo->nome; ?></td>
                    <td>
                        <a href="<?= base_url('tipo/tedit/') . $tipo->id; ?>"
                           class="btn btn-outline-warning material-icons">edit
                        </a>
                    </td>
                </tr>
                </tbody>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>
