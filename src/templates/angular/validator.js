'use strict';

angular.module('tribelotto').service('', function (BaseValidator) {
    var Validator = {};

    //Validator.rules = [
    //    {
    //        field: 'email',
    //        rules: [
    //            {
    //                dirty: true,
    //                requiredUnmet: true,
    //                message: 'Email is required'
    //            },
    //            {
    //                dirty: true,
    //                requiredUnmet: false,
    //                emailInvalid: true,
    //                message: 'Email is invalid'
    //            },
    //            {
    //                dirty: true,
    //                requiredUnmet: false,
    //                emailInvalid: false,
    //                loginInvalid: true,
    //                message: 'Email or password is invalid'
    //            }
    //        ]
    //    },
    //    {
    //        field: 'password',
    //        rules: [
    //            {
    //                dirty: true,
    //                requiredUnmet: true,
    //                message: 'Password is required'
    //            }
    //        ]
    //    }
    //];

    Validator = angular.extend({}, BaseValidator, Validator);

    return Validator;
});

