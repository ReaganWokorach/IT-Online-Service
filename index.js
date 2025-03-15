// Form Validation Codes 

document.getElementById("submitButton").addEventListener("click", function(event){
    event.preventDefault(); //This function prevents the form submission
    let isValid = true;

    //Getting form fields 
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let message = document.getElementById("message");

    //Getting error message elements 
    let nameError = document.getElementById("nameError");
    let emailError = document.getElementById("emailError");
    let messageError = document.getElementById("messageError");

    //Rsseting error messages

    nameError.style.display = "none";
    emailError.style.display = "none";
    messageError.style.display = "none";

    // validate name 
    if(name.value.trim() === ""){
        nameError.style.display = "block";
        isValid = false;
    }

    // validate email
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(email.value.trim() === ""){
        emailError.textContent = "This field is required";
        emailError.style.display = "block";
        isValid = false;
    } else if (!emailPattern.test(email.value.trim())){
        emailError.textContent = "Please enter a valid email address";
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
