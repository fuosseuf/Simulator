(function () {
    'use strict';

    angular.module('simulateur')
           .controller('HomeCtrl', home);
   
   home.$inject = ['$state', '$http'];
   
    function home($state, $http) {
        var vm = this;
        this.username = 'Rodrigue'
        this.connect = connect;
        
        // FUNCTIONS
        
        function connect(){
            // get auth key and save on the session
            $state.go('dashboard.home');
        }
    }
})();
