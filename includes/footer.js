
function Delete_Family(id) {
    let data =  {'id':id};
    $.ajax({
        url: 'parsers/delete.php',
        type: 'POST',
        data: data,
        success: ()=> { location.reload();},
        error: ()=> {}
    })
}

