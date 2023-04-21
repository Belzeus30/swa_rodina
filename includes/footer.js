 
const familyDiv = document.getElementsByClassName('family');

const familyDetails = document.getElementById('family-detail');

Array.from(familyDiv).forEach(function(element) {
    element.addEventListener('click', function() {
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
    
  

function openPopup() {
    document.getElementsByClassName("popup")[0].style.display = "block";
  }
  function closePopup() {
    document.getElementsByClassName("popup")[0].style.display = "none";
  }

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