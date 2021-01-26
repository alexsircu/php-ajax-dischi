import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue(
    {
        el: "#root",
        data: {
            logo: "img/logo.jpg",
            discsArray: [],
            genre: ""
        },
        mounted: function() {
            var self = this;
            axios
            .get("server.php")
            .then(function(response) {
                self.discsArray = response.data;
                console.log(response.data);
            });
        },
        methods: {
            toFilter: function() {
            var self = this;
            axios
            .get("server.php",{
                params: {
                    genre: self.genre
                }
            })
            .then(function(response) {
                self.discsArray = response.data;
            });
            }
        }
    }
);