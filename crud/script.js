function validarFormulario() {
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
  
    if (nome === "" || email === "") {
      alert("Preencha todos os campos!");
      return false;
    }
  
    // Validação de email (opcional)
    // var re = /^(([^<>()[\\]\\\\.,;:\s@"]+(\.[^<>()[\\]\\\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // if (!re.test(String(email).toLowerCase())) {
    //   alert("Email inválido!");
    //   return false;
    // }
  
    return true;
  }
  