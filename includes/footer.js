 
function Show_result(id) {
    let data = {'id':id};
    $.ajax({
        url: "includes/family_details.php",
        method: "post",
        data: data,
        success : function(){
            //alert(1);
            document.getElementById('family-detail').style.display = "show";
            $('#family-detail').show();
        },
        error : function() {alert(error)} ,
    })

}