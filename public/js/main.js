//Diference between angular.module vs var ang=angular.module
//https://developer.mozilla.org/en-US/docs/Glossary/IIFE



    var ModuleDeclare=angular.module("myApp", [],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
    });
    


