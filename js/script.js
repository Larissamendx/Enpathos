let validator = {
    handleSubmit:(event) => {
        event.preventDefault();
        let send = true;
        let inputs = form.querySelectorAll('input');
        
        validator.clearErros();
        for(let i=0; i < inputs.length; i++ ) {
            let input = inputs[i]; 
            let check = validator.checkInput(input);

            if(check !== true) {
                send = false;
                //exibir o erro
                validator.showError(input, check);
                
            }
           
        }
        
        if(send) {
            form.submit();
        }

    },
    checkInput:(input) => {
        let rules = input.getAttribute('data-rules');
        

        if(rules !== null) {
            rules = rules.split('|');

            for(let k in rules) {
                rDetails = rules[k].split('=');
                switch(rDetails[0]) {
                    case 'required':
                        if(input.value == '') {
                           return  "Campo obrigatório";
                        }

                    break;
                    case 'checked':
                        if(form.area[0].checked==false && 
                            form.area[1].checked==false &&
                            form.area[2].checked==false && 
                            form.area[3].checked==false)  {
                            return  "Preencha pelo menos um campo";
                        }
                
                        break; 
                     
                    case 'checked2':
                        if(input.checked == false) {
                            return  "Campo obrigatório";
                        }
                        break;
                        case 'min':
                            if(input.value.length < rDetails[1] ) {
                                return 'Campo tem que ter pelo menos '+rDetails[1]+' caracteres'
                            }
                        break;
                        case 'max':
                            if(input.value.length < rDetails[1] ) {
                                return 'Campo tem que ter '+rDetails[1]+' caracteres'
                            }
                        break;
                    case 'email':
                        if(input.value != '' ) {
                            
                            let regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                            if(!regex.test(input.value.toLowerCase())) {
                                return 'E-mail digitado não é válido!';
                            }
                        }   
                        break; 

                      
                }
            }
        }

        return true;
    },
    showError:(input, error) => {
        input.style.borderColor = "#FF0000";

        let textarea=document.getElementById("descricao").value;
        let error2 = document.getElementById("error");
        if(/\S/.test(textarea)) {
            error2.innerHTML = "";
        }else{
            error2.innerHTML ="Campo obrigatório";
           
        }

        let errorElement = document.createElement('div');
        errorElement.classList.add("error");
        errorElement.innerHTML = error;

        input.parentElement.insertBefore(errorElement, input.ElementSibling)        
    },
    clearErros:() => {
        let inputs = form.querySelectorAll("input");
        for(let i=0; i < inputs.length; i++ ) {
            inputs[i].style = '';
        }


        let errorElements = document.querySelectorAll(".error")

        for(let i=0; i < errorElements.length;i++ ) {
            errorElements[i].remove();
            
        }
    }
    

};

let form = document.querySelector('.validate');

form.addEventListener('submit', validator.handleSubmit );
