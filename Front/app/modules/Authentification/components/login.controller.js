(function () {
    'use strict';

    angular.module('simulateur.authentifaication')
           .controller('LoginCtrl', login);
   
   login.$inject = ['$state'];
   
    function login($state) {
        var vm = this;
        this.username = 'Rodrigue'
        this.connect = connect;
        
        // FUNCTIONS
        
        function connect(){
            // get auth key and save on the session
            $state.go('dashboard');
        }
    }
})();
