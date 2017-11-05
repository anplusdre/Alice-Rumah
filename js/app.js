(function () {

    var alice = angular.module('alice', ['ngRoute']);

    alice.config(function ($routeProvider) {
        /*$routeProvider.when("/view/:id", {
            templateUrl: "single-view.php",
            controller: "AgentController",
            controllerAs: "alice"
        });*/
    });

    alice.controller('AgentController', function () {

        this.products = talents;
        this.message = "Routing Works!";
    });


    var talents = [
        {
            id: '001',
            name: 'Jasmina',
            images: [
                    '../assets/images/Jasmina3.jpg',
                    '../assets/images/Jasmina4.jpg',
                    '../assets/images/Jasmina7.jpg',

                ],
            skills: ['Usherette', 'escort'],
            indexing: ['usher', 'escort']

        },

        {
            id: '002',
            name: 'Bruna',
            images: [
                    '../assets/images/BrunaD17.jpg',
                    '../assets/images/BrunaD18.jpg',
                    '../assets/images/BrunaD10.jpg',

                ],
            skills: ['Usherette', 'escort'],
            indexing: ['usher', 'escort']

        },

        {
            id: '003',
            name: 'Anda',
            images: [
                    '../assets/images/Anda.jpg',
                    '../assets/images/Anda8.jpg',
                    '../assets/images/Anda11.jpg',

                ],
            skills: ['Usherette', 'escort', 'Modeling'],
            indexing: ['usher', 'escort', 'model']

        },

        {
            id: '004',
            name: 'Anne',
            images: [
                    '../assets/images/AnneD8.jpg',
                    '../assets/images/AnneD17.jpg',
                    '../assets/images/AnneD21.jpg',

                ],
            skills: ['Modeling'],
            indexing: ['model']

        }
];


})();
