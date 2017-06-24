app.controller('ContactController', function ($scope, $http, dataService) {
    $scope.data = {};
    $scope.view = function (x) {

    }
    
    function list() {
        dataService.getData("/api/contact").then(function (res) {
            console.log(res)
            if(res.status == 200){
                $scope.data = res.data;
            }
        })
    }
    
    function init() {
        list();

    }

    init();
})