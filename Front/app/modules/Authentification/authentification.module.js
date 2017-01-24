(function () {
    'use strict';

    angular.module('simulateur.authentifaication', [])
           .config(config);

    function config($stateProvider, $urlRouterProvider) {
        $urlRouterProvider.otherwise('/');
        $stateProvider
                .state('login', {
                    url: '/',
                    templateUrl: 'modules/Authentification/components/login.html',
                    controller: 'LoginCtrl',
                    controllerAs: 'login'
                });
    }
})();
