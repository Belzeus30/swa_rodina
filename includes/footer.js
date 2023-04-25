
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
const familyDiv = document.querySelectorAll('[data-family-id]');

Array.from(familyDiv).forEach(function(e) {
    e.addEventListener('click', function() {
        const familyId = this.dataset.familyId; 
          data = {'edit_id':familyId};
        $.ajax({
            url: 'includes/family_details.php', 
            type: 'POST',
            data: data,
            success: (data)=>{
                $('body').append(data);},
            error: ()=>{alert("error")}
        })
    })})
