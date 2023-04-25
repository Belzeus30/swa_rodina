const editbutton = document.querySelector('[data-enable-button]')
const inputs = document.querySelectorAll('[data-form-input]')
const editform = document.querySelector('[data-edit-form]')
const editpopup = document.querySelector('[data-edit-popup]')
const overlay = documet.querySelector('[data-edit-overlay]')


editbutton.addEventListener("click", () => {
    if(Array.from(inputs).some(input => input.disabled)) {
        inputs.forEach(input => {
            input.disabled = false
        })
    } else {
        editform.submit()
        inputs.forEach(input => (
            input.disabled = true
        ))

    }
    

})

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