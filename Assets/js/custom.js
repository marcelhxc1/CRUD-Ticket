
function envio() {

            var r=confirm("Ticket Enviado com sucesso");
            if (r==true) {
            window.location="tickets.php";
            teste.submit();
            }
        }

function validar(){
            var titulo = forms.titulo.value;
            var descricao = forms.descricao.value;
            var prioridade = forms.prioridade.value;
            var status = forms.status.value;
            
            if(titulo == ""){
                alert('Preencha o campo de titulo.');
                formuser.titulo.focus();
                return false;
            }
            
            if(descricao == ""){
                alert('Preencha a descrição do problema.');
                formuser.descricao.focus();
                return false;
            }
            
            if(prioridade == ""){
                alert('Selecione a prioridade.');
                formuser.prioridade.focus();
                return false;
            }

            if(status == ""){
                alert('Selecione o Status');
                formuser.status.focus();
                return false;
            }
           
        }

        
        function envioReg() {

            var r=confirm("Conta criada com sucesso");
            if (r==true) {
            window.location="index.php";
            teste.submit();
            }
        }

        function validarReg(){
            var nome = forms1.nome.value;
            var email = forms1.email.value;
            var senha = forms1.password.value;
            
            if(nome == ""){
                alert('Preencha o campo de nome.');
                formuser.nome.focus();
                return false;
            }
            
            if(email == ""){
                alert('Preenchao e-mail.');
                formuser.email.focus();
                return false;
            }

            if(senha == ""){
                alert('Preencha a senha.');
                formuser.senha.focus();
                return false;
            }
           
        }
