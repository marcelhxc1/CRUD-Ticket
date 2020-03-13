
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



        $("#remove").click(function (e) {
            var obj = $(this); 
            var id = $(this).data('id'); 
            $.ajax({
                url: "/deletar.php",
                data: { id: id },
                type: "Post",
                dataType: "Json",
                success: function(result) {
                    if (result.Success) {
                        $(obj).closest("tr").remove();
                    }
                    eval(result.Script);
                },
                
               
            });
            
        });
