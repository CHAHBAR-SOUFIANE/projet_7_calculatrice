class Calculatrice{
    constructor(txtBox){
       this.txtBox = txtBox
       this.effacer()
    }
   
    effacer(){
        this.dNombre = ""
        this.nNombre = ""
        this.opr = undefined
        this.txtBox.value  = ""
    }

    ajouter(nombre){
       this.nNombre += nombre
    }

    operation(opr){
        if(this.nNombre === "") return
        this.opr = opr
        this.dNombre = this.nNombre
        this.nNombre = ""
        this.txtBox.value = ""
    }

    afficher(){
      this.txtBox.value  = this.nNombre
    }

    calculer(){
      let resul 
      let n = parseFloat(this.nNombre)
      let d =parseFloat(this.dNombre) 
      switch (this.opr) {
          case "+":
              resul = n + d
              break;
          default:
              return
      }

      this.nNombre = resul
      this.dNombre = ""
      this.opr = ""
    }
}

var txtBox = document.querySelector("input")
var numberBTNS = document.querySelectorAll("[data-number]")
var operateurBtn = document.querySelector("[data-plus]")
var egaleBTN = document.querySelector("[data-egale]")
var cBtn = document.querySelector("[data-c]")

var calculatrice = new Calculatrice(txtBox)

numberBTNS.forEach(button => {
    button.addEventListener("click",() => {
        calculatrice.ajouter(button.textContent)
        calculatrice.afficher()
    })
})

operateurBtn.addEventListener("click",() => {
    calculatrice.operation(operateurBtn.textContent)
    calculatrice.afficher()
})

egaleBTN.addEventListener("click",() => {
    calculatrice.calculer()
    calculatrice.afficher()
    console.log("Hola")
})

cBtn.addEventListener("click",() => {
    calculatrice.effacer()
})

