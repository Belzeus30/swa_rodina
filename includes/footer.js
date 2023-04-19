 
const familyDiv = document.getElementsByClassName('family');

const familyDetails = document.getElementById('family-detail');

Array.from(familyDiv).forEach(function(element) {
    element.addEventListener('click', function() {
        const familyId = this.dataset.familyId; 
        familyDetails.classList.toggle('active');
          data = {'id':familyId};
        $.ajax({
            url: 'parsers/get_family_details.php', 
            type: 'POST',
            data: data,
            success: (response)=> {
                $.ajax({
                    type:'POST',
                    url: 'index.php',
                    data: {res: response},
                    success: (data)=> {alert(data)}
                })
            },
            error: ()=>{alert("error")}
        })
    });
  });
document.addEventListener('click', function(event) {
if (event.target !== familyDetails && !familyDetails.contains(event.target)) {
    familyDetails.classList.remove('active');
}
});
  

function openForm() {
    document.getElementById("myForm").style.display = "block";
  }