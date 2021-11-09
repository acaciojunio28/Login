var regex = /^(?=(?:.*?[A-Z]){3})(?=(?:.*?[0-9]){2})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?!.*\s)[0-9a-zA-Z!@#$%;*(){}_+^&]*$/; 

function valida(){
    if(document.login.nome.value==""){
        alert("Digite seu nome");
        document.getElementById("n").focus();
        return false;
    }
   if(document.login.senha.value==""){
         alert("Digite sua senha");
        document.getElementById("s").focus();
        return false;
        }
    if(document.login.senha.value.length < 6){
         alert("A senha deve conter 6 digito");
        document.getElementById("s").focus();
        return false;
    }if(!regex.exec(document.login.senha.value))
{
    alert("A senha deve conter no mínimo 3 caracteres em maiúsculo, 2 números e 1 caractere especial!");
     document.getElementById("s").focus();
    return false;
}  
 }

    

