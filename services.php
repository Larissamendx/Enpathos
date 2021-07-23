<html>
<head> 
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <title> Enpathos </title>
    <link rel="stylesheet"  href="css/style-services.css"   />
    <link rel="stylesheet"  href="css/bootstrap.min.css"   />
    <script src="https://kit.fontawesome.com/f22b9db43a.js" crossorigin="anonymous"></script>
</head>
<body>
 <header>
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color:#2661D8; padding: 16px;">
        <div style="width: 85%;" class="container-fluid">

          <a href="index.php" class="navbar-brand">
            <img src="img/6.png" width="170">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarToggler">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                 <a href="quem-somos.php" class="nav-link">Quem somos</a></li>
                 <li st>
                  <a style="text-decoration: none; padding-top: 15px;" href="#" data-toggle="dropdown" class=""> Serviços<span class=""></span></a>
                  <ul style="background-color: #2661D8;" class="dropdown-menu">
                    <li><a href="service-ajudar.php" class="nav-link">Quero ajudar</a></li>
                    <li><a href="services.php" class="nav-link">Preciso de ajuda</a></li>
                </ul>
            </li>
            <li><a href="#contatos" class="nav-link">Contato</a></li>
            <!-- <li><a href="">FAQ</a></li>-->
        </ul>


    </div>
</nav>

</header>

<section id="banner">

    <div class="container-banner">
        <div class="rectangle">
            <div class="text">Precisa de ajuda?</div>
        </div>

    </div>

</section>

<article  >
    <div class="container-form">
        <div class="sub-container-form">
           <div class="col-md-11 mx-auto mb-4">
            <div class="text-warning">Antes de preencher o formulário ao final da 
            página e solicitar auxílio do Enpathos, verifique se você atende às condições abaixo:</div>
            <div class="texts">

            a. Ter ou fazer parte de um pequeno negócio regularmente ativo.</br> 
            b. Usufruir de acesso à internet.</br> 
            c. Disponibilidade para comparecer aos encontros.</br> 
            d. Concordância com o termo de compromisso (aqui).</br>



</div>
</div>
</div>
</div>
</article>

<section>
    <div class="col-md-10 mx-auto mb-4">
      <div class="about">O que oferecemos</div>
  </div>
  <div class="container-services-1" class="container-fluid">

    <div class="col-md-10 mx-auto mb-4">
        <div class="sub-container-services">
            <div class="inform">
                
             
                <div class="texts">

                    <div class="services">Orientação juridica</div>
                    <div class="text-1" class="h5"><p>Uma boa assistência jurídica pode dar o correto direcionamento
                       para o seu negócio. Nossos advogados voluntários podem ajudar com consultoria 
                       empresarial, consultoria trabalhista, consultoria tributária, registro para MEI, 
                   elaboração de termos e revisão de contratos.</p>
               </div>
               <div class="services">Consultoria de Marketing</div>
               <div class="text-1">Muitos negócios têm migrado para o espaço virtual para
                   prospectar novos clientes. Optando pela consultoria de marketing, você 
                   pode aprender a se destacar nas redes sociais, criar uma identidade visual, 
                   aumentar seu engajamento e melhorar a comunicação da sua marca.

               </div>
               <div class="services">Mentoria de Negócios</div>
               <div class="text-1">A mentoria envolve todas as suas dúvidas relacionadas a gestão. 
                Saiba como impulsionar seu negócio, atrair clientes, planejar novas estratégias,
                melhorar a proposta de valor, aprimorar o catálogo, gerar inovação com os produtos 
                e muito mais.
            </div>
            <div class="services">Assessoria Financeira</div>
            <div class="text-1">Se o seu problema for contábil ou financeiro, podemos te
                ajudar com orientações voltadas à aumento do faturamento, organização de finanças, 
                orçamento, fluxo de caixa e assuntos relacionados.
            </div>
        </div>

    </div>
</div>
</div>
</div>
</section>
<section>
    <div class="title-form"><p>Formulário de Cadastramento</p></div>
    <div class="container-services">
        
        <div class="sub-container-services-3">
            
         

            <div class="text-form">O preenchimento correto deste formulário é essencial para 
            que possamos te auxiliar </br> da melhor forma.
        </div>

        <div class="form">
           
            <form method="POST" action="enviar-email.php" class="validate" >
             

                <label>Pessoal</label>
                <div class="bar-blue"></div>

                <div class="input">

                    <p>Nome*</p>
                    <input class="name" type="text" name="nome" data-rules="required|min=3"  /></br>
                    <div class="error"></div>

                <div class="input">
                    <p>Qual cargo ocupa em sua empresa ou projeto social?* </p>
                    <input class="cargo" type="text" name="cargo" data-rules="required|min=3" /></br>
                    <span class="error"></span>
                </div>

                <label>Contato</label>
                <div class="bar-blue"></div>
                
                
                <p>Cidade*</p>
                <div class="right">

                    <div class="input">
                        <input class="city" type="text" name="city" data-rules="required|min=3" />
                        
                    </div>
                    
                    <div class="input">
                        <p>UF*</p>
                        <input class="uf" type="text" name="uf" maxlength="2" data-rules="required|max=2" />
                        
                    </div>
                </div>
                

                <div class="input">
                    <p>E-mail*</p>
                    <input class="email" type="text" name="email" data-rules="required|email" />
                    
                </div>
                

                <label>Informe em qual área gostaria de auxílio*</label>
                <div class="bar-blue"></div>

                <div class="box">
                    
                    <div class="row">
                        <input  type="checkbox" name="area" value="Assessoria contábil" id="area-1"   requi />
                        <label for="area-1">Assessoria contábil</label></div>

                        <div class="row">
                            <input  type="checkbox" name="area" value="Mentoria de Negócios" id="area-2"  requi />
                            <label for="area-2">Mentoria de Negócios</label></div>

                            <div class="row">
                                <input type="checkbox" name="area" value="Orientação Jurídica" id="area-3"  requi/>
                                <label for="area-3">Orientação Jurídica</label></div>

                                <div class="row " >
                                    <div class="input" id="check">
                                        <input type="checkbox" name="area" value="Consultoria de Marketing" id="area-4" data-rules="required|checked"  requi />
                                        <label id="mright" for="area-4">Consultoria de Marketing</label>
                                    </div>
                                </div>
                                
                            </div></br>

                            
                            <label >Nos conte um pouco sobre o seu negócio.</br> Qual o seu segmento e qual a  sua necessidade?* </label></br>
                            <div class="input">
                                <textarea name="descricao" id="descricao"  ></textarea>
                                <div id="error"></div>
                            </div>
                            
                            <div class="box">
                                <div class="row-requisitos">
                                    <input  type="checkbox" name="requisitos" id="area-5" requi data-rules="required|checked2" />
                                    
                                    <label id="mright" for="area-5">Declaro que atendo aos requisitos exigidos, li o termo de </br>compromisso 
                                        e estou de acordo.
                                    </label></div></br>
                                </div>

                                <div class="input">
                                    <input type="hidden" name="acao" value="enviar"   /> 
                                    <button  class="enviar" type="submit" style="color:#0F3447; font-size:18; 
                                    font-weight:700; font-family:Nunito" value="Enviar"  enviar >Enviar</button></br></br>
                                    <span id="enviar" ></span>
                                </div>

                            </form>
                        </div>    
                        


                    </div>
                </div>
                
                
            </section>

        </section>

        <footer  class="page-footer font-small blue pt-4" style="background-color: #0F3447">

          <!-- Footer Links -->
          <div class="container-fluid text-center text-md-left" >

            <!-- Grid row -->
            <div id="contatos"  class="row">

              <!-- Grid column -->
              <div class="col-md-6 mx-auto mb-4 " style="font-size: 20px; color: #fff;">

                <!-- Content -->
                <div><img src="img/6.png" width="180" class="img-fluid"> </div>
                <br><br>
                <p>A Enpathos é um projeto criado em 2020 como uma ferramenta para
                    auxiliar empreendedores e profissionais voluntários a enfrentar a crise
                    e transformá-la em oportunidade de aprendizado e busca de soluções
                para os seus negócios.</p>
                <br><br>
                <p style="border-top: 1px solid #FFF;"> Rod. Jorge Amado, Km 16 - Salobrinho, Ilhéus - BA | enactusuesc@gmail.com</p>
            </div>
            <div class="col-md-2 mx-auto mb-4">
                <!-- <a href=""><i class="fab fa-instagram" style=" font-size: 3rem;color: #fff;margin-top: 300px;"></i></a>-->
            </div>
        </div>
    </div>
</footer>


<script src="js/script.js"  ></script>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


    </footer>
  
    <script src="js/script.js"  ></script>    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>