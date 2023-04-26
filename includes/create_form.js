// Select DOM elements
const multiStepForm = document.querySelector("[data-multi-step]")
const formSteps = [...multiStepForm.querySelectorAll("[data-step]")]
const popup = document.querySelector("[data-popup]")
const openButton = document.querySelector("[data-popup-button]")

// Find current active step
let currentStep = formSteps.findIndex(step => {
   return step.classList.contains("active")
})

// If there is no active step, set the first step as active and show it
if (currentStep < 0) {
   currentStep = 0
   showCurrentStep()
}

// Listen for clicks on the popup
popup.addEventListener('click', (e) => {
   // If the click is outside of the form, close the popup and reset the form
   if (!formSteps.some(step => step.contains(e.target))) {
      console.log(e.target)
      popup.classList.remove('show')
      if (currentStep != 0) formSteps[currentStep].classList.add("hide");
      currentStep = 0
      multiStepForm.reset()
      showCurrentStep()
   }
   // If the click is on the "Next" button, increment the current step by 1
   // If the click is on the "Previous" button, decrement the current step by 1
   // If the click is on the close button, close the popup and reset the form
   let incrementor
   if (e.target.matches("[data-next]")) {
      incrementor = 1;
   } else if (e.target.matches("[data-previos]")) {
      incrementor = -1
   } else if (e.target.matches("[data-popup-close-button]")) {
      popup.classList.remove("show")
      if (currentStep != 0) formSteps[currentStep].classList.add("hide");
      currentStep = 0
      multiStepForm.reset()
      showCurrentStep()
   }
   // If the incrementor is null, do nothing
   if (incrementor == null) return
   // Get all input elements in the current step
   const inputs = [...formSteps[currentStep].querySelectorAll("input")]
   // Check if all input elements are valid
   const allValid = inputs.every(input => input.reportValidity())
   // If all input elements are valid, update the current step and show it
   if (allValid) {
      currentStep += incrementor;
      showCurrentStep()
   }
})

// Listen for animationend events on each step
formSteps.forEach(step => {
   step.addEventListener("animationend", (e) => {
      // Toggle the "hide" class on the step based on whether or not it is active
      e.target.classList.toggle("hide", !e.target.classList.contains("active"))
      // Remove the "hide" class from the current step
      formSteps[currentStep].classList.remove("hide")
   })
})

// Listen for clicks on the open button
openButton.addEventListener("click", () => {
   // Toggle the "show" class on the popup
   popup.classList.toggle("show")
   // Remove the "hide" class from the current step
   formSteps[currentStep].classList.remove("hide")
   // Show the current step
   showCurrentStep()
})

// Show the current step
function showCurrentStep() {
   formSteps.forEach((step, index) => {
      // Toggle the "active" class on the step based on whether or not it is the current step
      step.classList.toggle("active", index === currentStep)
   })
}
