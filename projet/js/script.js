$(document).ready(function(){

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
    }

    afficher(){
      this.actuelTXT.text(this.actuelOperation)
      if (this.operation != null) {
        this.preTXT.text(`${this.preOperation} ${this.operation}`)
      }else{
        this.preTXT.text("")
      }
    }
}

//instancie calculatrice à partir de class Calculatrice
var calculatrice = new Calculatrice($("[data-up]"),$("[data-down]"))

//retrouver la valeur des nombres


//retrouver la valeur des nombres
 $("[data-number]").click(function(){
     $(this).each(function(){
      calculatrice.ajouterNombre($(this).text())
      calculatrice.afficher()
     })
 })


//Button vider
$("[data-AC]").click(function() {
    calculatrice.vider()
    calculatrice.afficher()
})


//retrouver l'operation
$("[data-operation]").click(function(){
    $(this).each(function(){
        calculatrice.ajouterOperation($(this).text())
        calculatrice.afficher()
    })
})


//Button Effacer 
$("[data-delete]").click(function(){
    calculatrice.effacer()
    calculatrice.afficher()
})

//Button calculer
$("[data-equals]").click(function(){
    calculatrice.calculer()
    calculatrice.afficher()
})

 /* Toggle button */
 $("input").click(function(){
    if($(this).is(":checked")){
        $("body").css("background","linear-gradient(to right,#00FF6C,#00AAFF")
       }else{
        $("body").css("background","linear-gradient(to right,#00AAFF,#00FF6C")
       }
   });

})