import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue(
    {
        el: "#root",
        data: {
            logo: "img/logo.jpg",
            discsArray: []
        },
        mounted: function() {
            var self = this;
            axios
            .get("http://localhost/php-ajax-dischi/server.php")
            .then(function(response) {
                self.discsArray = response.data;
            });
        }
    }
);