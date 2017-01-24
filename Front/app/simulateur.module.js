(function () {
    'use strict';

    angular.module('simulateur', ['ui.router', 'simulateur.authentifaication'])
           .config(config);

    function config($stateProvider, $urlRouterProvider) {
        $urlRouterProvider.otherwise('/');
        $stateProvider
                .state('dashboard', {
                    url: '/dashboard',
                    abstract: true,
                    templateUrl: 'components/Layout/layout.html',
                })
                .state('dashboard.home', {
                    url: '/home',
                    templateUrl: 'components/home.html',
                    controller: 'HomeCtrl',
                    controllerAs: 'home'
                });
    }
})();
