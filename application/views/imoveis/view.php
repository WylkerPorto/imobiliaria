<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container" ng-controller="ishow" ng-init="ver('<?= $imovel->id; ?>')">
    <?= ($msg = get_msg(true)) ? '<div class="alert alert-warning">' . $msg . '</div>' : null; ?>
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col"><p><b>nome:</b> {{nome}}</p></div>
                </div>
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
    </div>
</div>
