$(document).ready(function () {

        new Validation('#form', {
            fields: [
                {
                    name: 'text1',
                    rule: {
                        type: 'required',
                        prompt: 'Please type in any value'
                    }
                }, {
                    name: 'text2',
                    rule: {
                        type: 'email',
                        prompt: 'Please enter a valid email address'
                    }
                }, {
                    name: 'text3',
                    rule: {
                        type: 'minLength:5',
                        prompt: 'Enter at least 5 characters'
                    }
                }, {
                    name: 'text4',
                    rule: {
                        type: 'maxLength:5',
                        prompt: 'You cannot enter more than 5 characters'
                    }
                }, {
                    name: 'text5',
                    rule: {
                        type: 'regex:^test5$',
                        prompt: 'This field does not match the regular expression'
                    }
                }, {
                    name: 'text6',
                    rule: {
                        type: 'required',
                        prompt: 'Field6 is disabled'
                    }
                }, {
                    name: 'text7',
                    rule: {
                        type: 'checked',
                        prompt: 'Any checkbox needs to be checked'
                    }
                }, {
                    name: 'text8',
                    rule: {
                        type: 'checked',
                        prompt: 'One radio needs to be checked'
                    }
                }, {
                    name: 'text9',
                    rule: {
                        type: 'required',
                        prompt: 'Select one field'
                    }
                }, {
                    name: 'text10',
                    rule: {
                        type: 'date',
                        prompt: 'Please enter a valid date format'
                    }
                }
            ],
            submitOnValid: false,
            showErrorMessage: true,
            errorMessageText: "All Fields are(*) wth mandatory ",
            errorGroupClass: "has-error has-feedback",
            successGroupClass: "has-success has-feedback"
        });

        $('#form')
            .on('is-valid', function (e) {
                console.log('valid');
            })
            .on('is-invalid', function (e) {
                console.log('invalid');
            });

    });