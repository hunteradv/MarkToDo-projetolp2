validateRegister = function() {
    const name = document.querySelector("#name").value;
    
    if (name === null || name === ""){
        document.querySelector("#nameValidated").textContent = "Nome é obrigatório";
        return false;
    }
    else {
        document.querySelector("#nameValidated").textContent = "";
    }

    const emailValidated = validateEmail();
    if (!emailValidated)
        return;    

    const passwordValidated = validatePassword();
    if (!passwordValidated)
        return;

    const passwordConfirmValidated = validatePassowordConfirm();
    if (!passwordConfirmValidated)
        return;

    if (passwordValidated === true && emailValidated === true){
        window.location.href = 'doRegister.php'; 
    }
}

validatePassword = function() {
    const password = document.querySelector("#password").value;
    const confirmPassword = document.querySelector("#passwordConfirm").value;


    if (password === null || password === ""){
        document.querySelector("#passwordValidated").textContent = "Senha é obrigatória";
        return false;
    }
    else {
        document.querySelector("#passwordValidated").textContent = "";

        if(password !== confirmPassword){
            alert("Senhas são diferentes");            
        }
        else {
            return true;
        }            
    }    
}

validateEmail = function() {
    const email = document.querySelector("#email").value;
    
    if (email == null || email == ""){
        document.querySelector("#emailValidated").textContent = "E-mail é obrigatório"
        return false;
    }
    else {
        document.querySelector("#emailValidated").textContent = "";
        return true;
    }
}

validatePassowordConfirm = function() {
    const confirmPassword = document.querySelector("#passwordConfirm").value;

    if (confirmPassword === null || confirmPassword === ""){
        document.querySelector("#passwordConfirmValidated").textContent = "Confirmação de senha é obrigatória";
        return false;
    }
    else {
        document.querySelector("#passwordConfirmValidated").textContent = "";
        return true;
    }    
}