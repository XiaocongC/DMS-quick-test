var testApp = angular.module('testApp', []);

testApp.controller('testCont', ['$scope', '$http','$window',
    function ($scope, $http, $window) {
        $scope.people = [];

        $http.get('index.json').then(function(response) {
            $scope.people = response.data;
         });

        $scope.ShowAlert = function (val) {
            $window.alert(val.first_name + " " + val.last_name + "'s email is "+ val.email);
        }
    
    }
]);
