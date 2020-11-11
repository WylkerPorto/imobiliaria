myApp = angular.module('myapp', []);

myApp.controller('cinit', function ($scope, $http) {
    $scope.consulta = function (cep) {
        if ($.isNumeric(cep)) {
            $http.get('https://viacep.com.br/ws/' + cep + '/json').then(function (retorno) {
                var data = retorno.data;
                $scope.cidade = data.localidade;
                $scope.estado = data.uf;
                $scope.endereco = data.logradouro;
                $scope.bairro = data.bairro;
                $scope.complemento = data.complemento;
            });
        } else {
            delete $scope.cidade;
            delete $scope.estado;
            delete $scope.endereco;
            delete $scope.bairro;
            delete $scope.complemento;
        }
    };
});

myApp.controller('cedit', function ($scope, $http) {
    $scope.busca = function (id) {
        $http({
            method: 'get',
            url: '../cget',
            params: {id: id}
        }).then(function (retorno) {
            data = retorno.data;
            $scope.nome = data.nome;
            $scope.cpf = parseInt(data.cpf);
            $scope.rg = parseInt(data.rg);
            $scope.telefone = parseInt(data.telefone);
            $scope.email = data.email;
            $scope.cep = parseInt(data.cep);
            $scope.cidade = data.cidade;
            $scope.estado = data.estado;
            $scope.endereco = data.endereco;
            $scope.bairro = data.bairro;
            $scope.numero = parseInt(data.numero);
            $scope.complemento = data.complemento;
        });
    };
    $scope.consulta = function (cep) {
        if ($.isNumeric(cep)) {
            $http.get('https://viacep.com.br/ws/' + cep + '/json').then(function (retorno) {
                var data = retorno.data;
                $scope.cidade = data.localidade;
                $scope.estado = data.uf;
                $scope.endereco = data.logradouro;
                $scope.bairro = data.bairro;
                $scope.complemento = data.complemento;
            });
        } else {
            delete $scope.cidade;
            delete $scope.estado;
            delete $scope.endereco;
            delete $scope.bairro;
            delete $scope.complemento;
        }
    };
});

myApp.controller('chome', function ($scope, $http) {
    $scope.ver = function (id) {
        $http({
            method: 'get',
            url: './cliente/cget',
            params: {id: id}
        }).then(function (retorno) {
            data = retorno.data;
            $scope.nome = data.nome;
            $scope.cpf = parseInt(data.cpf);
            $scope.rg = parseInt(data.rg);
            $scope.telefone = parseInt(data.telefone);
            $scope.email = data.email;
            $scope.cep = parseInt(data.cep);
            $scope.cidade = data.cidade;
            $scope.estado = data.estado;
            $scope.endereco = data.endereco;
            $scope.bairro = data.bairro;
            $scope.numero = parseInt(data.numero);
            $scope.complemento = data.complemento;
        });
    }
});

myApp.controller('uedit', function ($scope, $http) {
    $scope.busca = function (id) {
        $http({
            method: 'get',
            url: '../uget',
            params: {id: id}
        }).then(function (retorno) {
            data = retorno.data;
            $scope.nome = data.nome;
            $scope.email = data.email;
            $scope.telefone = parseInt(data.telefone);
        });
    };
});

myApp.controller('tpedit', function ($scope, $http) {
    $scope.busca = function (id) {
        $http({
            method: 'get',
            url: '../tget',
            params: {id: id}
        }).then(function (retorno) {
            data = retorno.data;
            $scope.nome = data.nome;
        });
    };
});

myApp.controller('ihome', function ($scope, $http) {
    $scope.ver = function (id) {
        $http({
            method: 'get',
            url: './imovel/iget',
            params: {id: id, detalhado: true}
        }).then(function (retorno) {
            data = retorno.data;
            $scope.nome = data.nome;
            $scope.quartos = parseInt(data.quartos);
            $scope.banheiros = parseInt(data.banheiros);
            $scope.terreno = parseFloat(data.terreno);
            $scope.salas = parseInt(data.salas);
            $scope.garagens = parseInt(data.garagens);
            $scope.suites = parseInt(data.suites);
            $scope.valor = parseFloat(data.valor);
            $scope.construida = parseFloat(data.construida);
            $scope.cep = parseInt(data.cep);
            $scope.numero = parseInt(data.numero);
            $scope.complemento = data.complemento;
            $scope.cidade = data.cidade;
            $scope.estado = data.estado;
            $scope.bairro = data.bairro;
            $scope.endereco = data.endereco;
            $scope.cliente = data.cliente;
            $scope.tipo = data.tipo;
        });
    }
});

myApp.controller('iinit', function ($scope, $http) {
    $scope.consulta = function (cep) {
        if ($.isNumeric(cep)) {
            $http.get('https://viacep.com.br/ws/' + cep + '/json').then(function (retorno) {
                var data = retorno.data;
                $scope.cidade = data.localidade;
                $scope.estado = data.uf;
                $scope.endereco = data.logradouro;
                $scope.bairro = data.bairro;
                $scope.complemento = data.complemento;
            });
        } else {
            delete $scope.cidade;
            delete $scope.estado;
            delete $scope.endereco;
            delete $scope.bairro;
            delete $scope.complemento;
        }
    };
});

myApp.controller('iedit', function ($scope, $http) {
    $scope.busca = function (id) {
        $http({
            method: 'get',
            url: '../iget',
            params: {id: id}
        }).then(function (retorno) {
            data = retorno.data;
            $scope.nome = data.nome;
            $scope.quartos = parseInt(data.quartos);
            $scope.banheiros = parseInt(data.banheiros);
            $scope.terreno = parseFloat(data.terreno);
            $scope.salas = parseInt(data.salas);
            $scope.garagens = parseInt(data.garagens);
            $scope.suites = parseInt(data.suites);
            $scope.valor = parseFloat(data.valor);
            $scope.construida = parseFloat(data.construida);
            $scope.cep = parseInt(data.cep);
            $scope.numero = parseInt(data.numero);
            $scope.complemento = data.complemento;
            $scope.cidade = data.cidade;
            $scope.estado = data.estado;
            $scope.bairro = data.bairro;
            $scope.endereco = data.endereco;
            $scope.cliente = data.cliente;
            $scope.tipo = data.tipo;
        });
    };
});

myApp.controller('ishow', function ($scope, $http) {
    $scope.ver = function (id) {
        $http({
            method: 'get',
            url: '../iget',
            params: {id: id, detalhado: true}
        }).then(function (retorno) {
            data = retorno.data;
            $scope.nome = data.nome;
            $scope.quartos = parseInt(data.quartos);
            $scope.banheiros = parseInt(data.banheiros);
            $scope.terreno = parseFloat(data.terreno);
            $scope.salas = parseInt(data.salas);
            $scope.garagens = parseInt(data.garagens);
            $scope.suites = parseInt(data.suites);
            $scope.valor = parseFloat(data.valor);
            $scope.construida = parseFloat(data.construida);
            $scope.cep = parseInt(data.cep);
            $scope.numero = parseInt(data.numero);
            $scope.complemento = data.complemento;
            $scope.cidade = data.cidade;
            $scope.estado = data.estado;
            $scope.bairro = data.bairro;
            $scope.endereco = data.endereco;
            $scope.cliente = data.cliente;
            $scope.tipo = data.tipo;
        });
    }
});

$(document).ready( function () {
    $('.dataTable').DataTable({
        responsive : true,
        paging : true,
        lengthChange : false,
        info : false,
        autoWidth : true,
        order : [[0, 'desc']],
        language : {
            'search' : '<div class="input-group"><div class="input-group-prepend"><div class="input-group-text material-icons">search</div>',
            'zeroRecords' : '0',
            'paginate' : {
                'first' : '<<',
                'last' : '>>',
                'previous' : '<',
                'next' : '>'
            }
        }
    });

    $('.select2').select2({
        theme: "bootstrap4"
    });
} );