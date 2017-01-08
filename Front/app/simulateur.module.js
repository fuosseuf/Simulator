(function () {
    'use strict';

    angular.module('simulateur', ['ui.router', 'simulateur.authentifaication'])
           .config(config);

    function config($stateProvider, $urlRouterProvider) {
        $urlRouterProvider.otherwise('/');
        $stateProvider
                .state('dashboard', {
                    url: '/dashboard',
//                    abstract: true,
                    templateUrl: 'componnents/Layout/layout.html',
                });
//                .state('dashboard.home', {
//                    url: '/',
//                    abstract: true,
//                    templateUrl: 'componnents/home.html',
//                    controller: 'HomeCtrl',
//                    controllerAs: 'home'
//                });
    }
})();
