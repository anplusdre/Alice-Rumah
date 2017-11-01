(function () {

    var app = angular.module('agent', []);

    app.controller('AgentController', function () {

        this.products = talents;
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
