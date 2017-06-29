app.controller('ContactController', function ($scope, $http, dataService) {
    $scope.data = {};
    $scope.view = function (x) {
        if(x){
            $("#myModal").modal("show")
            $scope.message = x.message;
        }
    }
    
    function list() {
        dataService.getData("/api/contact").then(function (res) {
            console.log(res)
            if(res.status == 200){
                $scope.data = res.data;
            }
        })
    }

    $scope.delete = function(id){
        if(confirm('ต้องการลบใช่หรือไม่ ?')){
            dataService.deleteData("/api/contact",id).then(function(res){
                console.log(res)
                list();
            })
        }
    }
    
    function init() {
        list();

    }

    init();
})