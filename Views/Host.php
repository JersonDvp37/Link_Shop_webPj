<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Host</title>
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/home/PageProprerties.css">
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/Subscription/hostStyle.css">
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/Subscription/hostStyleMain.css">
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/Subscription/footer2.css">
    <script defer src="/Link_Shop_Updated/Model/Subscription/host.js"></script>
    <script defer src="/Link_Shop_Updated/Model/home//home_2ndBar.js"></script>
</head>

<body>
    <header>
        <div class="contentP" id="content">
            <div class="navBar" id="navBar">
                <img src="/Link_Shop_Updated/Model/home/MediaFiles/MozArt blue.png" alt="" class="logotipo">
                <ul class="navUL" id="navUL">
                    <a href="home.html" class="homeSelected" id="home" onclick="toogle_navClick()">Home</a>
                    <a class="link2" id="menuGeral" onclick="toogle_navClick2()">Menu Geral</a>
                    <a href="Host.php" id="subescrever" class="link3" onclick="toogle_navClick3()">Subescrever</a>
                    <a class="link4" id="contactos" onclick="toogle_contactar()">Contactos</a>
                    <img src="/Link_Shop_Updated/Model/home/MediaFiles/SelectionImg.png" alt="" class="imgSelection" id="imgSelection">
                    <ul class="UlSigns">
                        <a href="Signs.php" class="link5">SignIn</a>
                        <a href="Signs.php" class="link6">SignUp</a>
                    </ul>
                </ul>
                <div class="Contact_btn">

                    <div class="contentBox" id="contentBox" onmouseout="toogle_fecharContactar()">
                        <ul class="ulContent">
                            <li class="mensagem1">Jerson Tomas</li>
                            <li class="tendencias2">Gerson Tomas</li>
                            <li class="galeria3">Nenhuma</li>
                            <li class="eventos4">Nenhuma</li>
                            <li class="mozTiktok">MozArt</li>
                            <li class="portifolio5">842340266</li>
                            <li class="contactos6">873726691</li>
                        </ul>
                        <ul class="imgComunicar">
                            <img src="/Link_Shop_Updated/Model/home/MediaFiles/whatsapp.png" alt="" class="imgWhatsapp" id="imgMsg1">
                            <img src="/Link_Shop_Updated/Model/home/MediaFiles/facebook (1).png" alt="" class="imgFacebook"
                                id="imgtendencia">
                            <img src="/Link_Shop_Updated/Model/home/MediaFiles/instagram (1).png" alt="" class="imgInstagram"
                                id="imggaleria">
                            <img src="/Link_Shop_Updated/Model/home/MediaFiles/twitter.png" alt="" class="imgTwiter" id="c">
                            <img src="/Link_Shop_Updated/Model/home/MediaFiles/tik-tok.png" alt="" class="tiktok">
                            <img src="/Link_Shop_Updated/Model/home/MediaFiles/chamar.png" alt="" class="imgChamar" id="imgcontactos">
                            <img src="/Link_Shop_Updated/Model/home/MediaFiles/chamar.png" alt="" class="imgChamar2">
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mainElements">
            <div class="inviteImage">
                <img src="/Link_Shop_Updated/Model/Subscription/Icons/DesignInvite.jpg" alt="">
                <li class="contraste"></li>
                <li class="contraste"></li>

                <ul class="Texto">
                    <li class="inviteTitle">Melhore a perspectiva do seu nicho com o MozArt</li> <br>
                    <li class="categoria">categoria</li>
                    <ul class="lista_Categoria">
                        <li>Design</li>
                        <li>Artes</li>
                        <li>Vendas</li>
                        <li>Tecnlogia</li>
                        <li>aprendizagem</li>
                        <li>publicidade e Marketing</li>
                        <li>Escrita</li>
                        <li>outros</li>
                    </ul>
                </ul>
            </div>
            <div class="Logos">
                <div class="logo_Slide" id="logo_Slide">
                    <img src="/Link_Shop_Updated/Model/home/MediaFiles/garfo.png" alt="">
                    <img src="/Link_Shop_Updated/Model/home/Icons/culinaria.png" alt="">
                    <img src="/Link_Shop_Updated/Model/home/MediaFiles/feijoada.png" alt="">
                    <img src="/Link_Shop_Updated/Model/Subscription/Icons2/icons8-corel-draw-67.png" alt="">
                    <img src="/Link_Shop_Updated/Model/home/MediaFiles/pedaco-de-bolo.png" alt="">
                    <img src="/Link_Shop_Updated/Model/Subscription/Icons2/designer-de-web.png" alt="">
                    <img src="/Link_Shop_Updated/Model/home/MediaFiles/ui.png" alt="">
                    <img src="/Link_Shop_Updated/Model/home/MediaFiles/processador.png" alt="">
                    <img src="/Link_Shop_Updated/Model/Subscription/Icons2/adobe-illustrator.png" alt="">
                    <img src="/Link_Shop_Updated/Model/Subscription/Icons2/sala-de-estar (1).png" alt="">
                    <img src="/Link_Shop_Updated/Model/Subscription/Icons2/photo-camera.png" alt="">
                    <img src="/Link_Shop_Updated/Model/Subscription/Icons2/logotipo-do-google-sketchup.png" alt="">
                    <img src="/Link_Shop_Updated/Model/Subscription/Icons2/icons8-archicad-24.png" alt="">
                    <img src="/Link_Shop_Updated/Model/home/MediaFiles/aprendizagem-online.png" alt="">
                    <img src="/Link_Shop_Updated/Model/home/Icons/escrita.png" alt="">
                    <img src="/Link_Shop_Updated/Model/Subscription/Icons2/photoshop.png" alt="">
                    <img src="/Link_Shop_Updated/Model/home/MediaFiles/colar.png" alt="">
                    <img src="/Link_Shop_Updated/Model/home/MediaFiles/iphone.png" alt="">
                    <img src="/Link_Shop_Updated/Model/Subscription/Icons2/indesign.png" alt="">
                    <img src="/Link_Shop_Updated/Model/Subscription/Icons2/roupas-masculinas.png" alt="">
                </div>
            </div>
        </div>
        <script>
            var copiar_imagens = document.querySelector('.logo_Slide').cloneNode(true);
            document.querySelector('.Logos').appendChild(copiar_imagens);             
        </script>
    </header>

    <aside>
        <div class="scroll-big">
            <div class="scroll-div">
                <div class="scroll-object">
                    <div class="TextOAside" id="TextoAside">
                        <h2 class="termos_condicoes">Termos e condicoes</h2>
                        <h5 class="atentemento">Leia atentamente</h5>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem. <br> <br>


                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus architecto quas modi perspiciatis. Impedit quibusdam,
                        nobis iure sed voluptatem odio iusto perferendis cupiditate voluptas
                        necessitatibus mollitia obcaecati aliquam saepe exercitationem.
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <main>
        <div class="sections">
            <span class="sectionTitle">Esta pagina compreende duas seccoes:</span>
            <ul class="sectionslide">
                <li onclick="toogle_criarLoja()" id="criarLoja" class="criarLoja">Para Loja</li>
                <li onclick="toogle_publicidade()" id="pub" class="pub">Para publicidades</li>
            </ul>
        </div>

        <form action=""></form>
        <div class="form-Conteiner" id="form-Conteiner">
            <span class="formTitle" id="formTitle">Criar Loja <span class="seccao">Dados do proprietarios</span>
                <li class="underline_feedbk"></li>
            </span>

            <div class="span-input">
                <span>Nome completo</span>
                <span>Contacto</span>
                <span>Email</span>
            </div>
            <div class="input-conteiner">
                <input type="text" placeholder="Insira o nome completo">
                <input type="text" placeholder="Insira o contacto">
                <input type="text" placeholder="Insira o email">
            </div>
            <div>
                <span class="inputDsc">Insira a tua foto/a do teu negocio</span>
                <input type="file" class="file_input" id="file">
                <label for="file" class="labelPpt">Escolher foto</label>
                <img src="/Link_Shop_Updated/Model/Subscription/Icons2/upload-na-nuvem.png" alt="" class="imgUpload">
            </div>
            <li class="linhaDiv"></li>


            <span class="formTitle2"><span class="seccao2">Dados da Loja</span>
                <li class="underline_feedbk2"></li>
            </span>
            <div class="seccaoB">
                <div class="span-input2">
                    <span>Nome da loja</span>
                    <span>Categoria</span>
                </div>
                <div class="input-Nome">
                    <span>Localizacao da loja</span>
                    <span>Numero de transacoes</span>
                </div>
                <div class="input-conteiner">
                    <input type="text" placeholder="Insira o nome da loja">
                    <select name="" id="" class="cat_Selection">
                        <option value="">Design</option>
                        <option value="">Culinaria</option>
                        <option value="">Venda de diversos</option>
                        <option value="">Artes visuais</option>
                        <option value="">redacao/Link_Shop_Updated e escrita</option>
                        <option value="">Publici/Link_Shop_Updateddade</option>
                        <option value="">Tecnolo/Link_Shop_Updatedgia</option>
                        <option value="">Beleza /Link_Shop_Updatede estetica</option>
                        <option value="">aprendizagem</option>
                        <option value="">Cursos</option>
                    </select>
                    <div class="input-aside">
                        <input type="text" placeholder="localizacao da loja">
                        <input type="text" placeholder="Emola/M-pesa/bancario">
                    </div>
                    <div class="coment">
                        <span class="descricao">Descricao</span>
                        <textarea type="text" class="inputComentario"
                            placeholder="Descreva o teu negocio e as tuas expectativas"></textarea>
                    </div>
                </div>
            </div>
        </div>
        </form>


        <form action="">
            <div class="form-Conteiner2" id="form-Conteiner2">
                <span class="formTitle">Publicidade<span class="seccao">Formulario - publicidade</span>
                    <li class="underline_feedbk"></li>
                </span>

                <div class="span-input">
                    <span>Nome completo</span>
                    <span>Categoria</span>
                    <span>Contacto</span>
                </div>
                <div class="input-conteiner">
                    <input type="text" placeholder="Insira o nome completo">
                    <select name="" id="" class="cat_Selection">
                        <option value="">Design</option>
                        <option value="">Culinaria</option>
                        <option value="">Venda de diversos</option>
                        <option value="">Artes visuais</option>
                        <option value="">redacao e escrita</option>
                        <option value="">Publicidade</option>
                        <option value="">Tecnologia</option>
                        <option value="">Beleza e estetica</option>
                        <option value="">aprendizagem</option>
                        <option value="">Cursos</option>
                    </select>
                    <input type="text" placeholder="Insira o email">
                </div>
                <div>
                    <span class="inputDsc">Insira a tua foto/a do teu negocio</span>
                    <input type="file" class="file_input" id="file">
                    <label for="file" class="labelPpt">Escolher foto</label>
                    <img src="/Link_Shop_Updated/Model/Subscription/Icons2/upload-na-nuvem.png" alt="" class="imgUpload">
                </div>

                <span class="tipo_publicidade">Escolha o tipo de publicidade</span>
                <ul class="boxDsc">
                    <li>Pagina temporaria</li>
                    <li>Caixa de publicidade</li>
                </ul>
                <ul class="boxes_Radio">
                    <div class="box1">
                        <li class="verificacao"><img src="/Link_Shop_Updated/Model/home/MediaFiles/verificado.png" alt=""></li>
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt=""
                            class="imgBoxSelection">

                        <li class="boxOverlay"></li>
                    </div>
                    <div class="box2">
                        <li class="verificacao"><img src="/Model/home/MediaFiles/verificado.png" alt=""></li>
                        <img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt=""
                            class="imgBoxSelection2">

                        <li class="boxOverlay"></li>
                    </div>
                </ul>

                <li class="linhaDiv2"></li>
                <div class="coment2">
                    <span class="descricao2">Descricao</span>
                    <textarea type="text" class="inputComentario2"
                        placeholder="Descreva o que faz e nos diga o que quer publicar"></textarea>
                    <input type="submit" class="btn_submit">
                </div>

            </div>
        </form>
    </main>

    <footer>
        <div class="footerLine">
            <span class="footerlogo">
                <img src="/Link_Shop_Updated/Model/Subscription/Icons2/MozArt blue.png" alt="logotipo MozArt" class="logoMArt">
                <h3 class="mzArt">MozArt</h3>
                <span class="mzArtDsc">Graphic Design Services</span>
            </span>
            <ul class="ImgAdress">
                <a href=""><img src="/Link_Shop_Updated/Model/Subscription/Icons2/whatsapp.png" alt="" class="img1"></a>
                <a href=""><img src="/Link_Shop_Updated/Model/Subscription/Icons2/facebook (1).png" alt="" class="img2"></a>
                <a href=""><img src="/Link_Shop_Updated/Model/Subscription/Icons2/instagram (1).png" alt="" class="img3"></a>
                <a href=""><img src="/Link_Shop_Updated/Model/Subscription/Icons2/gmail.png" alt="" class="img4"></a>
                <a href=""><img src="" alt=""></a>
            </ul>
            <ul class="contactos2">
                <li class="nr1">842340266 | 87372691</li>
            </ul>
            <div class="copyright">
                &copy;<span><b>2024</b></span>
            </div>
        </div>
    </footer>

</body>

</html>