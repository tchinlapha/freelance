app.controller('HomeController', function ($scope, $http, dataService) {
    $scope.data = {};
    $scope.slideCount = [{val:1}];
    $scope.submit = function () {
        dataService.patchData("/api/config", $scope.data).then(function (res) {
            if (res.status == 200) {
                swal({
                    title: "สำเร็จ!",
                    text: "บันทึกข้อมูลเรียบร้อยแล้ว!",
                    confirmButtonColor: "#66BB6A",
                    type: "success"
                },function(confirm){
                    if(confirm){
                        list();
                    }
                });
            } else {
                swal({
                    title: "ผิดพลาด !@#$%^",
                    text: "มีบางอย่างผิดพลาด กรุณาลองใหม่อีกครั้ง!",
                    confirmButtonColor: "#EF5350",
                    type: "error"
                });
            }
        })
    }

    $scope.plus = function(){
        $scope.slideCount.push({val:1});
    }

    $scope.minus = function(){
        if($scope.slideCount.length > 1){
            $scope.slideCount.pop();
        }
        
    }

    $scope.reset = function(){
        list();
    }
    
    function list() {
        dataService.getData("/api/config").then(function (res) {
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