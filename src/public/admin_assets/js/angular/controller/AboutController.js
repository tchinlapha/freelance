app.controller('AboutController', function ($scope, $http, dataService) {
          tinymce.init({
            selector: '#content',
            height: 300,
            theme: 'modern',
            plugins: [
            'advlist autolink lists link charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
            ],
            toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent link preview forecolor backcolor emoticons help',
            image_advtab: true,
            content_css: [
            '//fonts.googleapis.com/css?family=Pridi'
            ]
          });
    $scope.data = {};
    $scope.submit = function () {
       $scope.data.about = tinyMCE.activeEditor.getContent();
       dataService.patchData("/api/about", $scope.data).then(function (res) {
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

    $scope.reset = function(){
        list();
    }
    
    function list() {
      dataService.getData("/api/about").then(function (res) {
        if(res.status == 200){
          $scope.data = res.data;
          setTimeout(function(){
            tinyMCE.activeEditor.setContent($scope.data.about);
          },500)
          
        }
      })
   }
    
    function init() {
        list();

    }

    init();
})