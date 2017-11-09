/// <reference path="js/angular.js" />
(function () {

    var alice = angular
        .module('alice', [])
        .controller('AliceController', function ($scope, $http) {
            // this is where the JSON from api.php is consumed
            $http.get('api.php').
            then(function (talents) {
                // here the data from the api is assigned to a variable named users
                $scope.talents = talents;
            });

            //            var talents = [
            //                {
            //                    id: '001',
            //                    name: 'Jasmina',
            //                    images: [
            //                                ' assets/images/Jasmina3.jpg',
            //                                ' assets/images/Jasmina4.jpg',
            //                                ' assets/images/Jasmina7.jpg'
            //
            //                            ],
            //                    skills: [
            //                        {
            //                            name: 'Usherette'
            //                                    },
            //                        {
            //                            name: 'Escort'
            //                                    }
            //                                ],
            //                    indexing: ['usher', 'Escort'],
            //                    likes: 0
            //
            //                    },
            //
            //                {
            //                    id: '002',
            //                    name: 'Bruna',
            //                    images: [
            //                                ' assets/images/BrunaD17.jpg',
            //                                ' assets/images/BrunaD18.jpg',
            //                                ' assets/images/BrunaD10.jpg'
            //
            //                            ],
            //                    skills: [
            //                        {
            //                            name: 'Usherette'
            //                                    },
            //                        {
            //                            name: 'Escort'
            //                                    }
            //                                ],
            //                    indexing: ['usher', 'Escort'],
            //                    likes: 0
            //
            //                    },
            //
            //                {
            //                    id: '003',
            //                    name: 'Anda',
            //                    images: [
            //                                ' assets/images/Anda.jpg',
            //                                ' assets/images/Anda8.jpg',
            //                                ' assets/images/Anda11.jpg'
            //
            //                            ],
            //                    skills: [
            //                        {
            //                            name: 'Usherette'
            //                                    },
            //                        {
            //                            name: 'Escort'
            //                                    },
            //                        {
            //                            name: 'Modelling'
            //                                    }
            //                                ],
            //                    indexing: ['usher', 'Escort', 'model'],
            //                    likes: 0
            //
            //                    },
            //
            //                {
            //                    id: '004',
            //                    name: 'Anne',
            //                    images: [
            //                                ' assets/images/AnneD8.jpg',
            //                                ' assets/images/AnneD17.jpg',
            //                                ' assets/images/AnneD21.jpg'
            //
            //                            ],
            //                    skills: [
            //                        {
            //                            name: 'Modelling'
            //                                    }
            //                                ],
            //                    indexing: ['model'],
            //                    likes: 0
            //
            //                    }
            //            ];
////            $scope.talents = talents;


        });


})();
