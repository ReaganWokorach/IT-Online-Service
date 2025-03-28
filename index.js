// Form Validation Codes 

document.getElementById("submitButton").addEventListener("click", function(event){
    event.preventDefault(); //This function prevents the form submission immediately
    let isValid = true;
    

    //Getting form fields 
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let message = document.getElementById("message");

    //Getting error message elements 
    let nameError = document.getElementById("nameError");
    let emailError = document.getElementById("emailError");
    let messageError = document.getElementById("messageError");

    //Resseting error messages

      nameError.style.display = "none";
      emailError.style.display = "none";
      messageError.style.display = "none";

    // validate name (only letters and spaces allowed)
    let namePattern = /^[A-Za-z\s]+$/;
    if(name.value.trim() === ""){
        nameError.style.display = "block";
        isValid = false;
    }else if (!namePattern.test(name.value.trim())){
        nameError.textContent = "Only Letters and spaces are allowed";
        nameError.style.display = "block";
        isValid = false;
    }

    // validate email
    
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let forbiddenCharacters = /[\/?]/; // This disallows /// and ??
    if(email.value.trim() === ""){
        emailError.textContent = "This field is required";
        emailError.style.display = "block";
        isValid = false;
          
    } else if (!emailPattern.test(email.value.trim())){
        emailError.textContent = "Please enter a valid email address";
        emailError.style.display = "block";
        isValid = false;
    }else if(forbiddenCharacters.test(email.value.trim())){
        emailError.textContent = "Email cannot contain '/', '?' or similar characters";
        emailError.style.display = "block";
        isValid = false;
    }

    // validate message

    if(message.value.trim() === ""){
        messageError.style.display = "block";
        isValid = false;
    }

    // Now if all the fields are valid, submit our form 
    if (isValid){
        alert("Form Submitted successfully!");
        document.getElementById("contactForm").reset();
    }
});

//ScrollTop 

let scrollButton = document.getElementById("scrollUp");

window.onscroll = function (){
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        scrollButton.style.display = "block";
    } else {
        scrollButton.style.display = "none";
    }
};

function scrollToTop(){
    window.scrollTo({top: 0, behavior: "smooth"});
}


   