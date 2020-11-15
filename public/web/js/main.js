$(document).ready(function() {
const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
    
    // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
    // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
    //   currentlyActiveAccordionItemHeader.classList.toggle("active");
    //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    // }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
      accordionItemBody.style.border = "1px solid #E4E4E4"
    }
    else {
      accordionItemBody.style.maxHeight = 0;
      accordionItemBody.style.border = 0
    }
    
  });
});

});
    function myFunction() {
    document.getElementById("try").style.backgroundColor = "#F5F6FA";
     document.getElementById("try").style.border = 0;   
}

