class Calculator{
    constructor(previousOperandTextElement, currentOperandTextElement){
        this.previousOperandTextElement = previousOperandTextElement
        this.currentOperandTextElement = currentOperandTextElement
        this.clear()
    }

    clear(){
        this.currentOperand = ""
        this.previousOperand = ""
        this.operation = undefined
    }

    delete(){

    }

    appendNumber(number){
        if(number === "." && this.currentOperand.includes(".")) return
        this.currentOperand += number
    }

    chooseOperation(operation){
        if(this.currentOperand === "") return
        if(this.previousOperand !== ""){
            this.compute()
        }
        this.operation = operation
        this.previousOperand = this.currentOperand
        this.currentOperand = ""
    }

    compute(){
        let computation
        let prev = parseFloat(this.previousOperand)
        let current = parseFloat(this.currentOperand)
        if (isNaN(prev) || isNaN(current)) return
        switch (this.operation) {
            case "+":
                computation = prev + current
                break;
            case "-":
                computation = prev - current
                break;
            case "*":
                computation = prev * current
                break;
            case "÷":
                computation = prev / current
                break;
            default:
                return    
        }
        this.currentOperand = computation
        this.previousOperand = ""
        this.operation = ""
    }

    updateDisplay(){
        this.currentOperandTextElement.textContent = this.currentOperand
        this.previousOperandTextElement.textContent = this.previousOperand
    }

}
const numberButtons = document.querySelectorAll("[data-number]")
const operationButtons = document.querySelectorAll("[data-operation]") 
const equalsButton = document.querySelectorAll("[data-equals]")
const deleteButton = document.querySelectorAll("[data-delete]")
const allClearButton = document.querySelectorAll("[data-all-clear]")
const previousOperandTextElement = document.querySelector("[data-previous-operand]")
const currentOperandTextElement = document.querySelector("[data-current-operand]")

const calculator = new Calculator(previousOperandTextElement,currentOperandTextElement)

numberButtons.forEach(button => {
    button.addEventListener('click',()=>{
        calculator.appendNumber(button.textContent)
        calculator.updateDisplay()
    })
})

operationButtons.forEach(button =>{
    button.addEventListener("click",() => {
        calculator.chooseOperation(button.textContent)
        calculator.updateDisplay()
    })
} )

equalsButton.forEach(button => {
    button.addEventListener("click",() => {
        calculator.compute()
        calculator.updateDisplay()
    })
})





