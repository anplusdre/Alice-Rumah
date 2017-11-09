(function () {

    var alice = angular.module('alice', []);

    alice.controller('AgentController', ["$scope", "$http", function ($scope, $http) {
        $http.get('profile.json')
            .then(function (data, response) {
                $scope.images = data.items;
            })
    }]);




})();