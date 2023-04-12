 
function Show_result(id) {
    let data = {'id':id};
    $.ajax({
        url: "includes/family_details.php",
        method: "post",
        data: data,
        success : function(data){
            $('body').append(data);
            $('family-details').styte.display = "block";

        },
        error : function() {alert("error")} ,
    })

}