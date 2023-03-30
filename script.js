'use strict';

let popupRequisites = document.querySelector('.requisites-popup'); 
let popupContentRequisites = document.querySelector('.requisites-popup-content'); 
let openPopupButtonRequisites = document.querySelectorAll('.footer-requisites-button'); 

openPopupButtonRequisites.forEach((button) => { 
    button.addEventListener('click', (e) => { 
        e.preventDefault(); 
        popupRequisites.classList.add('active'); 
        popupContentRequisites.classList.add('active'); 
        document.body.style.overflow = 'hidden';
    })
});

document.addEventListener('click', (e) => { 
    if(e.target === popupRequisites) { 
        popupRequisites.classList.remove('active'); 
        popupContentRequisites.classList.remove('active'); 
        document.body.style.overflow = '';
    }
});

let popup = document.querySelector('.tourselection-popup'); 
let popupContent = document.querySelector('.tourselection-popup-content'); 
let openPopupButtons = document.querySelectorAll('.open-popup');

openPopupButtons.forEach((button) => { 
    button.addEventListener('click', (e) => { 
        e.preventDefault(); 
        popup.classList.add('active'); 
        popupContent.classList.add('active'); 
        document.body.style.overflow = 'hidden';

    })
});

document.addEventListener('click', (e) => { 
    if(e.target === popup) { 
        popup.classList.remove('active'); 
        popupContent.classList.remove('active');
        document.body.style.overflow = '';
    }
});

//let formSuccess = document.querySelector(".form-success-popup");
//let formSuccessContent = document.querySelector(".form-success");

document.addEventListener('click', (e) => { 
    if(e.target === formSuccess) { 
        formSuccess.classList.remove('active'); 
        formSuccessContent.classList.remove('active');
        document.body.style.overflow = '';
    }
});


    console.log('down');

     const form = document.querySelector("form");
     form.addEventListener('submit', handleFormSubmit);
     let formSuccess = document.querySelector(".form-success-popup");
     let formSuccessContent = document.querySelector(".form-success");

     function toggleLoader() {
         const loader = document.getElementById('loader')
         loader.classList.toggle('hidden')
       }

     async function handleFormSubmit(event) {
         event.preventDefault();

         let formData = new FormData(form);

         let response = await fetch('send.php', {
             method: 'POST',
             body: formData,
         });

         if(response.ok) {
             toggleLoader();
             form.reset();
            popup.classList.remove('active');
            popupContent.classList.remove('active');
            formSuccess.classList.add('active'); 
            formSuccessContent.classList.add('active');
            toggleLoader();
             
         } else {
            toggleLoader();
             alert("Ошибка!");
             toggleLoader();
         }
     }

