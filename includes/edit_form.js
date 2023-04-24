const editbutton = document.querySelector('[data-enable-button]')
const inputs = document.querySelectorAll('[data-form-input]')
const editform = document.querySelector('[data-edit-form]')


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