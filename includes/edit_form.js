
    editbutton = document.querySelector('[data-enable-button]')
    inputs = document.querySelectorAll('[data-form-input]')
    editform = document.querySelector('[data-edit-form]')
    editpopup = document.querySelector('[data-edit-popup]')
    overlay = document.querySelector('[data-edit-overlay]')
    closeButtons = document.querySelectorAll('[data-close-edit-button]')



editbutton.addEventListener("click", () => {
    if(Array.from(inputs).some(input => input.disabled)) {
        inputs.forEach(input => {
            input.disabled = false
        })
    } else {
        editform.submit()
        // inputs.forEach(input => (
        //     input.disabled = true
        // ))

    }
    

})

overlay.addEventListener('click', (e)=> {
    if(!editpopup.contains(e.target)) {
        overlay.remove()
    }
    if(e.target.matches("[data-close-edit-button]")) {
        overlay.remove()
    }
})
//closeButtons.forEach()

