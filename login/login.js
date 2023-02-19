const validateLogin = function () {
    const emailValidated = validateEmail();
    if (!emailValidated)
        return;        

    const passwordValidated = validatePassword();
    if (!passwordValidated)
        return;

    window.location.href = 'doLogin.php'; 
}

 const validateEmail = function () {
    const email = document.querySelector("#email").value;
    
    if (email == null || email == ""){
        document.querySelector("#emailValidated").textContent = "E-mail é obrigatório"
        return false;
    }
    else {
        document.querySelector("#emailValidated").textContent = "";

        let re = /\S+@\S+\.\S+/;
        let validated = re.test(email);

        if (!validated){
            document.querySelector("#emailValidated").textContent = "E-mail precisa ser válido"
            return validated;
        }
        
        return validated
    }
}

const validatePassword = function () {
    const password = document.querySelector("#password").value;

    if (password === null || password === ""){
        document.querySelector("#passwordValidated").textContent = "Senha é obrigatória";
        return false;
    }

    document.querySelector("#passwordValidated").textContent = "";
    return true;
}