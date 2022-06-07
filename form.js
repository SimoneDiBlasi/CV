

form=document.forms["contact_me"];
form.addEventListener("submit",convalidazione);

function convalidazione(event){  // event è l'evento stesso 

    var controllo=0; // var di comodo , vedere sotto
    form = event.currentTarget; // qui prendo il form che è il titolare dell'evento , cioè è associato a lui (con currentTarget)
    
    //ora controllo che tutti i campi nel javascript siano pieni 
   

    if(!form.nome.value) {
        controllo=1;
        console.log("Inserire nome");
        var alert = document.querySelectorAll("input");
        console.log(alert);
        alert[0].classList.remove("border");
        alert[0].classList.add("alert");
    }else{
        var alert = document.querySelectorAll("input");
        alert[0].classList.remove("alert");
        alert[0].classList.add("border");
    }

    
    if(!form.cognome.value) {
        controllo=1;
        console.log("Inserire cognome");
        var alert = document.querySelectorAll("input");
        console.log(alert);
        alert[1].classList.remove("border");
        alert[1].classList.add("alert");
    }else{
        var alert = document.querySelectorAll("input");
        alert[1].classList.remove("alert");
        alert[1].classList.add("border");
    }
    
    if(!form.email.value) {
        controllo=1;
        console.log("Inserire email");
        var alert = document.querySelectorAll("input");
        console.log(alert);
        alert[2].classList.remove("border");
        alert[2].classList.add("alert");
    }else{
        var alert = document.querySelectorAll("input");
        alert[2].classList.remove("alert");
        alert[2].classList.add("border");
    }
    
    if(!form.description.value) {
        controllo=1;
        console.log("Inserire descrizione");
        var alert = document.querySelector("textarea");
        console.log(alert);
        alert.classList.remove("border");
        alert.classList.add("alert");
    }else{
        var alert = document.querySelector("textarea");
        alert[1].classList.remove("alert");
        alert[1].classList.add("border");
    }

    console.log(controllo);
    // infine uso questa varibile di comodo per interrompere l'esecuzione del post se almeno uno deli if precedento non è verificato
    if(controllo==1)event.preventDefault();

}