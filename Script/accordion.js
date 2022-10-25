// On mais dans la constante la fonction qui permet de séléctionner tout les éléments ayant la class "accordion-item-header"
// Cette class représente ce que l'on voit l'accordéon quand il est fermé
const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

// pour chaque accordéon on va
accordionItemHeaders.forEach(accordionItemHeader => {

  // ajout de l'event listener "click" et exécution de la fonction "event" défini juste après
  accordionItemHeader.addEventListener("click", event => {

                    // Décommanter la partie suivante si vous voulez que 1 seul accordéon puisse être déplié à la fois

    //Sélectionne l'accordéon actuellement déroulé en regardant le quelle à les 2 classes spécifiées
    const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");

    // Si un accordéon est déroulé ET que l'accordéon déroulé est différent de celui sélectionné
    if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
      
      //enléve la class "active" à l'accordéon actuellement déroulé 
      currentlyActiveAccordionItemHeader.classList.toggle("active");

      //Réduit la taille de l'accordéon actuellement déroulé à 0
      currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    }




    // Ajoute la class "active" à l'accordéon sélectionné
    accordionItemHeader.classList.toggle("active");

    //nextElementSibling permet d'aller sélectionner l'élément en dessous de celui sélectionné
    const accordionItemBody = accordionItemHeader.nextElementSibling;

    //Si l'élément suivant à la calss "active"
    if(accordionItemHeader.classList.contains("active")) {
      
      // Utilise ScrollHeight pour définir la taille de la partie qui se déplie
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      // définit la taille de la partie à déplier à 0 si cette derniére n'est pas active
      accordionItemBody.style.maxHeight = 0;
    }

  });
});