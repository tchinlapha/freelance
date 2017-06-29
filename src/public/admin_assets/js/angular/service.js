app.service('dataService', function ($http) {
    return {
        getData: function (url) {
            let first = true;
            return $http.get(API_URL + url).then(function (response) {
                return response;
            }, function (error) {
                if(first){
                    console.log("%c    Internal Server Error 500 call again    ",'background: #f44336; color: #fff')
                    first = false;
                    return $http.get(API_URL + url).then(function (response) { console.log("%c    Call service again Success!!    ",'background: #00e207; color: #fff');return response; });
                }else{
                    return error;
                }
            });
        },
        postData: function (url, jsondata) {
            let first = true;
            return $http.post(API_URL + url, jsondata).then(function (response) {
                return response;
            }, function (error) {
                if(first){
                    console.log("%c    Internal Server Error 500 call again    ",'background: #f44336; color: #fff')
                    first = false;
                    return $http.post(API_URL + url, jsondata).then(function (response) { console.log("%c    Call service again Success!!    ",'background: #00e207; color: #fff');return response; });
                }else{
                    return error;
                }
            });
        },
        patchData: function (url, jsondata) {
            return $http.patch(API_URL + url, jsondata).success(function (response) {
                return response;
            }, function (error) {
                return error
            });
        },
        deleteData: function (url, id) {
            return $http.delete(API_URL + url + "/"+ id).then(function (response) {
                return response;
            }, function (error) {
                return error
            });
        }
    }
})

app.service('globalService', function () {
    return {
        datetotext: function (date) {
            var yyyy = date.getFullYear().toString();
            var mm = (date.getMonth() + 1).toString();
            var dd = date.getDate().toString();

            var mmChars = mm.split('');
            var ddChars = dd.split('');

            return yyyy + '-' + (mmChars[1] ? mm : "0" + mmChars[0]) + '-' + (ddChars[1] ? dd : "0" + ddChars[0]);
        },
        randomcolor: function () {
            function c() {
                var hex = Math.floor(Math.random() * 256).toString(16);
                return ("0" + String(hex)).substr(-2);
            }
            return "#" + c() + c() + c();
        },
        alertCombination: function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#EF5350",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel pls!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
                function (isConfirm) {
                    if (isConfirm) {
                        swal({
                            title: "Deleted!",
                            text: "Your imaginary file has been deleted.",
                            confirmButtonColor: "#66BB6A",
                            type: "success"
                        });
                    }
                    else {
                        swal({
                            title: "Cancelled",
                            text: "Your imaginary file is safe :)",
                            confirmButtonColor: "#2196F3",
                            type: "error"
                        });
                    }
                });
        },
        infoAlert: function () {
            swal({
                title: "For your information",
                text: "This is some sort of a custom alert",
                confirmButtonColor: "#2196F3",
                type: "info"
            });
        },
        warningAlert: function() {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF7043",
            confirmButtonText: "Yes, delete it!"
        });
    },
    errorAlert:function() {
        swal({
            title: "Oops...",
            text: "Something went wrong!",
            confirmButtonColor: "#EF5350",
            type: "error"
        });
    },
    successAlert:function() {
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            confirmButtonColor: "#66BB6A",
            type: "success"
        });
    },
    }
})


app.filter('convertToDate', function () {
    return function (str) {
        return new Date(str);
    };
})

app.filter('viewURL', function ($sce) {
    return function (url) {
        return $sce.trustAsResourceUrl(url);
    };
});

app.directive('convertToNumber', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attrs, ngModel) {
            ngModel.$parsers.push(function (val) {
                return val != null ? parseInt(val, 10) : null;
            });
            ngModel.$formatters.push(function (val) {
                return val != null ? '' + val : null;
            });
        }
    };
});