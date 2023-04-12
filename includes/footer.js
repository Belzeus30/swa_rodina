 
function Show_result(id) {
    let data = {'id':id};
    $.ajax({
        url: "index.php",
        method: "post",
        data: data,
        success : function(data){
            location.reload();
           alert(1) ;
        },
        error : function() {alert(error)} ,
    })

}