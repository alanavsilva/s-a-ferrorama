const loginForm = document.getElementById('loginForm');
            const emailInput = document.getElementById('email');
            const senhaInput = document.getElementById('senha'); 
            const mensagemDiv = document.getElementById('mensagem');
            const botaoenvio = document.getElementById('botaoenvio');
            const toggle = document.getElementById('toggle');
            const titulo = document.getElementById('titulo');
            
         
            console.log('Form encontrado:', loginForm);
            console.log('Email encontrado:', emailInput);
            console.log('Senha encontrada:', senhaInput);
            console.log('Toggle encontrado:', toggle);
            
           
            function mostrarMensagem(tipo, texto) {
                mensagemDiv.innerHTML = `<div class="${tipo}"><p>${texto}</p></div>`;
                
                
                setTimeout(() => {
                    mensagemDiv.innerHTML = '';
                }, 3000);
            }
            
            
            function validarEmail(email) {
                if (!email.includes('@')) {
                    mostrarMensagem('erro', 'Email inválido! Falta o @');
                    return false;
                }
                
                if (!email.includes('.')) {
                    mostrarMensagem('erro', 'Email inválido! Falta o ponto (.)');
                    return false;
                }
                
                return true;
            }
            
            
            function validarSenha(senha) {
                if (senha.length <= 4) {
                    mostrarMensagem('erro', 'Senha muito curta! Precisa ter MAIS de 4 caracteres');
                    return false;
                }
                return true;
            }
            
           
            let isCadastro = false;
            
            if (toggle) {
                toggle.addEventListener('click', function() {
                    isCadastro = !isCadastro;
                    
                    if (isCadastro) {
                        titulo.innerText = 'Cadastro';
                        botaoEnvio.innerText = 'Cadastrar';
                        toggle.innerHTML = '<p>Já tem conta? <u>Faça login!</u></p>';
                        console.log('Modo: CADASTRO');
                    } else {
                        titulo.innerText = 'Login';
                        botaoEnvio.innerText = 'Entrar';
                        toggle.innerHTML = '<p><u>Criar nova conta</u></p>';
                        console.log('Modo: LOGIN');
                    }
                    
                  
                    emailInput.value = '';
                    senhaInput.value = '';
                    mensagemDiv.innerHTML = '';
                });
            }
            
            
            if (loginForm) {
                loginForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    console.log('Formulário enviado! Modo:', isCadastro ? 'CADASTRO' : 'LOGIN');
                    
                   
                    mensagemDiv.innerHTML = '';
                    
                   
                    const email = emailInput.value.trim();
                    const senha = senhaInput.value;
                    
                    console.log('Email:', email);
                    console.log('Senha:', senha);
                    
                   
                    if (!validarEmail(email)) {
                        emailInput.focus();
                        return;
                    }
                    
                   
                    if (!validarSenha(senha)) {
                        senhaInput.focus();
                        return;
                    }
                    
                   
                    if (isCadastro) {
                        
                        if (localStorage.getItem(email)) {
                            mostrarMensagem('erro', 'Este email já está cadastrado! Faça login.');
                            return;
                        }
                        
                       
                        localStorage.setItem(email, senha);
                        mostrarMensagem('sucesso', 'Cadastro realizado com sucesso! Faça login.');
                        console.log('Usuário cadastrado:', email);
                        
                       
                        setTimeout(() => {
                            isCadastro = false;
                            titulo.innerText = 'Login';
                            botaoEnvio.innerText = 'Entrar';
                            toggle.innerHTML = '<p><u>Criar nova conta</u></p>';
                            emailInput.value = '';
                            senhaInput.value = '';
                        }, 2000);
                    }
                    
                   
                    else {
                       
                        const senhaSalva = localStorage.getItem(email);
                        
                        if (senhaSalva && senhaSalva === senha) {
                            mostrarMensagem('sucesso', 'Login com sucesso! Redirecionando...');
                            console.log('Login realizado com sucesso!');
                            
                          
                            localStorage.setItem('usuarioLogado', email);
                            
                            
                            setTimeout(() => {
                                window.location.href = "home.html";
                            }, 1000);
                        } else {
                            mostrarMensagem('erro', 'Email ou senha incorretos!');
                            senhaInput.value = '';
                            senhaInput.focus();
                        }
                    }
                });
            } else {
                console.error('Formulário não encontrado!');
            }
       
   