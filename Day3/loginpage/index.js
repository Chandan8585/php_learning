const email = document.querySelector(".emailInput");
const password = document.querySelector(".passwordInput");
const submitBtn = document.querySelector(".button");
const successDiv = document.querySelector(".hide");
function handleSubmit(e){
    e.preventDefault();
    if(email.value.length > 0 && password.value.length >0){
        console.log({"email": email.value, "password": password.value});
        
        successDiv.classList.remove("hide");
        successDiv.classList.add("success");
    }

}
submitBtn.addEventListener("click", handleSubmit);






















