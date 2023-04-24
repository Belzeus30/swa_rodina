const multiStepForm = document.querySelector("[data-multi-step]")
const formSteps = [...multiStepForm.querySelectorAll("[data-step]")]
const popup = document.querySelector("[data-popup]")
const openButton = document.querySelector("[data-popup-button]")




let currentStep = formSteps.findIndex(step => {
   return step.classList.contains("active")
})

if (currentStep < 0) {
   currentStep = 0
   showCurrentStep()
}


multiStepForm.addEventListener("click", (e) => {
   let incrementor
   if (e.target.matches("[data-next]")) {
      incrementor = 1;
   } else if (e.target.matches("[data-previos]")) {
      incrementor = -1
   } else if (e.target.matches("[data-popup-close-button]")) {
      popup.classList.remove("show")
      if(currentStep!=0) formSteps[currentStep].classList.add("hide");
      currentStep = 0
      multiStepForm.reset()
      showCurrentStep()
   }
   if (incrementor == null) return
   const inputs = [...formSteps[currentStep].querySelectorAll("input")]
   const allValid = inputs.every(input => input.reportValidity())
   if (allValid) {
      currentStep += incrementor;
      showCurrentStep()
   }
})

formSteps.forEach(step => {
   step.addEventListener("animationend", (e) => {
      e.target.classList.toggle("hide", !e.target.classList.contains("active"))
      formSteps[currentStep].classList.remove("hide")
   })
})
openButton.addEventListener("click", () => {
   popup.classList.toggle("show")
   formSteps[currentStep].classList.remove("hide")
   showCurrentStep()
})


function showCurrentStep() {
   formSteps.forEach((step, index) => {
      step.classList.toggle("active", index === currentStep)
   })
}