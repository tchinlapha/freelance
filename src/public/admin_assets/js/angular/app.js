// var API_URL = "http://localhost:8001";
var API_URL = "http://localhost:8001";
var username = "admin@mail.com";
var password = "P@ssw0rd";
//var config = {header:"Authorization : Basic "+btoa(username+":"+password)}
var app = angular.module('app', []);
app.config(function($httpProvider) {
    $httpProvider.defaults.useXDomain = true;
    delete $httpProvider.defaults.headers.common['X-Requested-With'];
    var auth = btoa(username+":"+password);
    $httpProvider.defaults.headers.common['Authorization'] = 'Basic ' + auth;
});