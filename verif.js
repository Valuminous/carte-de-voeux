function verificationEmail() {
    var testEmail =  /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
    if (testEmail.test(document.getElementById("email").value)) {
        document.getElementById("email").style.backgroundColor="green";
    } else {
        document.getElementById("email").style.backgroundColor="red";
        alert("Veuillez entrer une adresse mail valide");
    }
};
