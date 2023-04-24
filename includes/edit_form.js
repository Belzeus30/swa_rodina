const editbutton = document.querySelector('[data-enable-button]')
const inputs = document.querySelectorAll('[data-form-input]')
const editform = document.querySelector('[data-edit-form]')

let clickcount = 0

editbutton.addEventListener("click", () => {
    if(Array.from(inputs).some(input => input.disabled)) {
        inputs.forEach(input => {
            input.disabled = false
        })
    } else {
        inputs.forEach(input => (
            input.disabled = true
        ))
        editform.submit()
        clickcount= 0
    }
    console.log(clickcount)
    

})