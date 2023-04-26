// Selecting necessary elements from the DOM
editbutton = document.querySelector('[data-enable-button]')
inputs = document.querySelectorAll('[data-form-input]')
editform = document.querySelector('[data-edit-form]')
editpopup = document.querySelector('[data-edit-popup]')
overlay = document.querySelector('[data-edit-overlay]')
closeButtons = document.querySelectorAll('[data-close-edit-button]')

// Enabling/disabling input fields when the edit button is clicked
editbutton.addEventListener("click", () => {
    if(Array.from(inputs).some(input => input.disabled)) {
        inputs.forEach(input => {
            input.disabled = false
        })
    } else {
        editform.submit()
    }
})

// Handling overlay and close button clicks
overlay.addEventListener('click', (e)=> {
    if(!editpopup.contains(e.target)) {
        overlay.remove()
    }
    if(e.target.matches("[data-close-edit-button]")) {
        overlay.remove()
    }
})
