//add class calculatrice
class Calculatrice{
    constructor(preTXT,actuelTXT){
        this.preTXT = preTXT 
        this.actuelTXT = actuelTXT
        this.vider()
    }

    vider(){
        this.preOperation = ""
        this.actuelOperation = ""
        this.operation = undefined
    }

    effacer(){
        this.actuelOperation = this.actuelOperation.slice(0,-1)
    }

    ajouterNombre(nombre){ 
        if(this.actuelOperation.includes(".") && nombre == ".")return
            this.actuelOperation += nombre
       
        
    }

    ajouterOperation(operation){
       
        if(this.actuelOperation == "") return
        // if(this.actuelOperation == ""){
        //     var tempPreTXT = preTXT.textContent.length
        //     var oldop = preTXT.textContent.slice(-1,tempPreTXT)
        //     if (oldop != operation) {
        //         var newpreTXT = preTXT.textContent.slice(0,-1)
        //         preTXT.textContent = newpreTXT + operation
        //     }
        // }
        if(this.preOperation != "") {this.calculer()}
       this.operation = operation 
       this.preOperation = this.actuelOperation 
       this.actuelOperation = ""
    }
    
    calculer(){
       let an = parseFloat(this.actuelOperation) 
       let pn = parseFloat(this.preOperation) 
       let resultat
       if(isNaN(an) || isNaN(pn) ) return
       switch (this.operation) {
           case "+":
               resultat = pn + an
               break;
           case "-":
                resultat = pn - an 
                break;
           case "*":
                resultat = pn * an
                break;
            case "÷":
                resultat = pn / an
                break;
           default:
              return
       }

       this.actuelOperation = resultat
        this.preOperation = ""
        this.operation = undefined
    //    let resultatToString = resultat.toString()
    //    let resultatToStringToArray = resultatToString.split("")
    //    let rsa = resultatToStringToArray
    //    if (rsa[2] == "0" && rsa[3] == "0" && rsa[4] == "0") {
    //     this.actuelOperation = resultat
    //     this.preOperation = ""
    //     this.operation = undefined
    //    }else{
    //     this.actuelOperation = resultat.toFixed(6)
    //     this.preOperation = ""
    //     this.operation = undefined
    //    }
      
    }

    afficher(){
      this.actuelTXT.textContent = this.actuelOperation
      if (this.operation != null) {
        this.preTXT.textContent = `${this.preOperation} ${this.operation}`
      }else{
        this.preTXT.textContent = ""
      }
     
    }
    

}

//declaré les variable
var acBTN = document.querySelector("[data-AC]")
var preTXT = document.querySelector("[data-up]")
var actuelTXT = document.querySelector("[data-down]")
var dBTN = document.querySelector("[data-delete]")
var nBTN = document.querySelectorAll("[data-number]")
var oBTN = document.querySelectorAll("[data-operation]")
var eBTN = document.querySelector("[data-equals]")

//instancie calculatrice à partir de class Calculatrice
var calculatrice = new Calculatrice(preTXT,actuelTXT)

//retrouver la valeur des nombres
nBTN.forEach(button => {
    button.addEventListener("click",() => {
     calculatrice.ajouterNombre(button.textContent)
     calculatrice.afficher()
    })
})

//Button vider
acBTN.addEventListener("click",() => {
    calculatrice.vider()
    calculatrice.afficher()
})

//retrouver l'operation
oBTN.forEach(button => {
    button.addEventListener("click",() => {
     calculatrice.ajouterOperation(button.textContent)
     calculatrice.afficher()
    })
})

//Button Effacer 
dBTN.addEventListener("click",() => {
    calculatrice.effacer()
    calculatrice.afficher()
})

//Button calculer
eBTN.addEventListener("click",() => {
    calculatrice.calculer()
    calculatrice.afficher()
})
