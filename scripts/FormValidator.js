class FormValidator {
    constructor(el) {
        this._el = el;

        // récupère tous les éléments required du formulaire
        this._allRequiredInputs = this._el.querySelectorAll("[required]");
        // on pourra également récupérer les autres champs à valider

        // booléen, valeur qui sera retourner par la validation
        this._isValid;


        this.initValidation();
    }


    initValidation = () => {

        // initialise la codition à true
        this._isValid = true;

       // validation des champs required
       for (let i = 0, l = this._allRequiredInputs.length; i < l; i++) {
           
           if (this._allRequiredInputs[i].value == '') {
               this._allRequiredInputs[i].classList.add('error');
               this._isValid = false;
            } else {
                if (this._allRequiredInputs[i].classList.contains('error')) this._allRequiredInputs[i].classList.remove('error');
            }
        }

        // on pourra ajouter ensuite les autres cas à valider, l'idée est de placer à false this._isValid dès qu'une condition de validation (exemple regex courriel) n'est pas respecté

        //console.log(this._isValid)

        return;
   }
}