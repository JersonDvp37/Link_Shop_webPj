<?php 
    
if (isset($_POST['upload_submit']) && isset($_FILES['imgUpload'])) {

        include_once('connectionDb.php');

        $target = $_SERVER['DOCUMENT_ROOT'] . "/Link_Shop_Updated/Db_User_Uploads/Product_Cards/" . basename($_FILES['imgUpload']['name']);
        $image = $_FILES['imgUpload']['name'];

        // Verificar tipo de arquivo permitido
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($_FILES['imgUpload']['type'], $allowedTypes)) {
            if (move_uploaded_file($_FILES['imgUpload']['tmp_name'], $target)) {
                $msg = "Sucesso";
            } else {
                $msg = "Erro ao mover o arquivo.";
            }
        } else {
            $msg = "Tipo de arquivo inválido.";
        }

        $tituloPost = $_POST['postTitle'];
        $categoriaPost = $_POST['CategoriaPost'];
        $precos = $_POST['precario'];
        $Descricao = $_POST['DscPost'];
        $tagPosts = $_POST['tagPost'];

        $stmt = $conexao->prepare("INSERT INTO ProdPost (imagePath, titulo_post, Categoria_post, precos, Descricao_post, tag_post)
                                    VALUES (?, ?, ?, ?, ?, ?)");

        if ($stmt === false) {
            die('Erro na preparação da query: ' . htmlspecialchars($conexao->error));
        }

        $stmt->bind_param("ssssss", $image, $tituloPost, $categoriaPost, $precos, $Descricao, $tagPosts);

        if (!$stmt->execute()) {
            die('Erro na execução da query: ' . htmlspecialchars($stmt->error));
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/Dashboard/DashStyle.css">
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/Dashboard/DashBody.css">
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/Dashboard/Postagens.css">
    <link rel="stylesheet" href="/Link_Shop_Updated/Model/Dashboard/CardStyle.css">

    <script defer src="/Link_Shop_Updated/Model/Dashboard/DashBOM.JS"></script>
    <script defer src="/Link_Shop_Updated/Model/Dashboard/DashEvents.js"></script>

</head>

<body>
    <div class="userBack">
        <div class="box_display2"></div>
        <span class="dash"></span>

        <div class="side_Bar">
            <ul class="">
                <li>
                    <img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg"
                        alt="" class="profileImg"> <br>
                    <span class="user_name">Jerson Tomas</span><br>

                    <div class="linha"></div>
                </li>
                <div class="dashNavbar">
                    <ul class="ulNavbar">
                        <li id="btn_sidebar" style="background-color: rgb(0, 25, 31, 0.7); padding: 10px 10px; box-Shadow: 0px 0px 4px #009675;" ><img src="/Link_Shop_Updated/Model/Dashboard/icon/chamine-de-casa.png"
                                alt=""><span>Home</span></li>
                        <li id="btn_sidebar2"  onclick="postagensEvt()"><img src="/Link_Shop_Updated/Model/Dashboard/icon/categoria.png"
                                alt=""><span>Postagens</span></li>
                        <li id="btn_sidebar3" ><img src="/Link_Shop_Updated/Model/Dashboard/icon/tendencia-de-seta-para-cima22.png"
                                alt=""><span>Tendencia</span></li>
                        <li id="btn_sidebar4" ><img src="/Link_Shop_Updated/Model/Dashboard/icon/comentario-estrela-alternativo.png"
                                alt=""><span>Comentarios</span></li>
                        <li id="btn_sidebar5" ><img src="/Link_Shop_Updated/Model/Dashboard/icon/editar.png" alt=""><span>Notas</span></li>
                        <li id="btn_sidebar6" ><img src="/Link_Shop_Updated/Model/home/MediaFiles/alvo.png" alt=""><span>Definicoes</span>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>

        <div class="box_display">
            <div class="TopBar">
                <div class="backDash">

                    <span class="dashboard">Dashboard</span>
                    <ul class="dashBtn">
                        <li class="button_bar"><img src="/Link_Shop_Updated/Model/home/MediaFiles/lampada.png" alt=""
                                class="iconBar">
                            <span>Photoshop</span>
                        </li>
                        <li class="button_bar2"><img src="/Link_Shop_Updated/Model/home/MediaFiles/alvo.png" alt=""
                                class="iconBar">
                            <span>Photoshop</span>
                        </li>
                        <li class="button_bar3"><img src="/Link_Shop_Updated/Model/home/MediaFiles/lupa.png" alt=""
                                class="iconBar">
                            <span>Photoshop</span>
                        </li>
                        <li class="button_bar4"><img src="/Link_Shop_Updated/Model/home/MediaFiles/lupa.png" alt=""
                                class="iconBar">
                            <span>Mensagens</span>
                        </li>
                    </ul>
                    <li class="divLine"></li>
                    <li class="divLine2"></li>
                </div>
            </div>
            <div class="pubSection" id="pubSection">
                <div class="publicationBox">
                    <span class="pubTitle">Publication Section</span>
                    <ul class="Caixas">
                        <li class="post1" onclick="addPost()"><img
                                src="/Link_Shop_Updated/Model/Dashboard/icon/galeria-de-imagens.png"
                                alt=""><span>Adicionar</span></li>
                        <li class="post2"><img src="/Link_Shop_Updated/Model/Dashboard/icon/relacao-publica.png"
                                alt=""><span>Publicidade</span></li>
                        <li class="post3"><img src="/Link_Shop_Updated/Model/Dashboard/icon/pessoas.png"
                                alt=""><span>20000 M</span></li>
                        <li class="post4"><img src="/Link_Shop_Updated/Model/Dashboard/icon/galeria-de-imagens.png"
                                alt=""><span>Postagens</span></li>
                    </ul>
                </div>
            </div>

            <div class="userSection">
                <span class="UsTitle">Usuarios que interagiram</span>
                <ul class="historicoUser">
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                    <li><img src="/Link_Shop_Updated/Model/home/MediaFiles/3d-house-model-with-modern-architecture.jpg" alt="">
                        <div class="userName">Jerson Tomas Bernardo</div>
                        <div class="DscUsers">Jerson comentou os produto y ontem 12/09/2024</div>
                    </li>
                </ul>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
                <!--SECCAO DE POSTS-->
                <div for="inputLoad" class="uploadSection" id="SectionUpload" style="display: none;">
                    <div>
                        <label for="imageLoad" class="uploadBox" id="imageLoad_label">
                            <img src="/Link_Shop_Updated/Model/Dashboard/icon/envio.png" class="changeImage" id="changeImage"
                                style="display: none;">
                            <img src="/Link_Shop_Updated/Model/Dashboard/icon/galeria-de-imagens.png" alt=""
                                class="uploadImage" id="imgUpload_btn">

                        </label>
                        <input type="file" name="imgUpload" id="imageLoad" style="display: none;">
                    </div>

                    <div class="">
                        <img src="" alt="" id="imageDisplay" class="uploadBox2" style=" display: none;" onclick="imagemZoom()">
                    </div>

                    <div class="imgZoom" id="imgZoom" style="display: none;">
                        <img src="" alt="" class="imgZoomed" id="imgZoomed">
                        <img src="/Link_Shop_Updated/Model/Dashboard/icon/x.png" alt="" class="zoomClose" onclick="closeZoom()">
                    </div>


                    <div class="InputDsc">
                        <label for="tituloPost" class="labelTitulo">Titulo da postagem</label><br>
                        <input type="text" name="postTitle" class="inputTitulo" id="tituloPost"
                            placeholder="Exemplo: Camisetes The North"><br><br>

                        <span>Categorias</span><br>
                        <select name="CategoriaPost" id="" class="CategoryOption">
                            <option value="Design">Design</option>
                            <option value="Culinaria">Culinaria</option>
                            <option value="Marketing e publicidade">Marketing e publicidade</option>
                            <option value="Cursos">Cursos</option>
                            <option value="Aprendizes">Aprendizagem</option>
                            <option value="Vendas">Vendas</option>
                            <option value="Tecnologia">Tecnologia</option>
                            <option value="Escrita">Escrita</option>
                            <option value="Beleza">Beleza</option>
                            <option value="Artes">Artes</option>
                        </select>
                            <div class="precosBox">
                                <label for="precos" class="tituloPreco">Precos</label>
                                <input type="text" class="precos" id="precos" name="precario" placeholder="Precos">
                            </div>
                    </div>
                    <div class="comentDsc">
                        <textarea name="DscPost" class="textarea" id="textComent"
                            placeholder="Descricao do produto"></textarea>
                        <input type="text" name="tagPost" class="tags"
                            placeholder="tags: #roupas #tecnologia #Vendas #design #curso #Sabor"
                            style="margin-top: 5px;">
                        <button name="upload_submit" class="publicar_btn">Publicar</button>
                    </div>
                </div>
            </form>

        <!--SECCAO DE POSTAGENS EFECTUADSAS-->
        <div class="postingSection" id="postagensSct" style="display: none;">
            
            <div class="horizontal_conteiner1">
                   <img class="Left_btn_scroll" id="L_btn_scroll" src="/Link_Shop_Updated/Model/Dashboard/icon/abaixo.png" alt="" style="display: none;">
                <div class="maisProd" id="maisProd">

                    <li class="prod1" id="prod1">
                            <img src="/Link_Shop_Updated/Model/home/produtos/colar.jpeg" alt="" class="designGrafico">
                            <ul class="prodDsc">
                                <li>fdfdfdfd </li>
                                <div><a href="nnn" class="Exp"> Explorar </a></div>
                            </ul>
                    </li>
            
                        <li class="prod1" id="prod1">     
                                <img src="/Link_Shop_Updated/Model/home/produtos/3d-house-model-with-modern-architecture.jpg" alt="" class="plantas3D">
                                <ul class="prodDsc">
                                    <li>Titulodsddsfd </li>
                                    <div><a href="nnn" class="Exp"> Explorar </a></div>
                                </ul>
                        </li>
            
                            <li class="prod1" id="prod1">
                                    <img src="/Link_Shop_Updated/Model/home/produtos/T-shirt design1.jpg" alt="" class="designCamisetes">
                                    <ul class="prodDsc">
                                        <li>Titulo </li>
                                        <div><a href="nnn" class="Exp"> Explorar </a></div>
                                    </ul>
                            </li>
            
                                <li class="prod1" id="prod1">
                                    <img src="/Link_Shop_Updated/Model/home/produtos/colar.jpeg" alt="" class="colares">
                                    <ul class="prodDsc">
                                        <li>Titulodfvdvdf </li>
                                        <div><a href="nnn" class="Exp"> Explorar </a></div>
                                    </ul>
                                </li>
            
                            <li class="prod1" id="prod1">
                                    <img src="/Link_Shop_Updated/Model/home/produtos/celulares.jpg" alt="" class="celulares">
                                    <ul class="prodDsc">
                                        <li>Titulo </li>
                                        <div><a href="nnn" class="Exp"> Explorar </a></div>
                                    </ul>
                            </li>

                            <li class="prod1" id="prod1">
                                <img src="/Link_Shop_Updated/Model/home/produtos/Capa matematica.jpg" alt="" class="CapaMath">
                                <ul class="prodDsc">
                                    <li>Titulo </li>
                                    <div><a href="nnn" class="Exp"> Explorar </a></div>
                                </ul>
                            </li>

                        <li class="prod1" id="prod1">
                            <img src="/Link_Shop_Updated/Model/home/produtos/Curso_Online_importacoes 2.jpg" alt="" class="curso">
                            <ul class="prodDsc">
                                <li>Titulo </li>
                                <div><a href="nnn" class="Exp"> Explorar </a></div>
                            </ul>
                        </li>
                </div>

                   <img class="Right_btn_scroll" id="R_btn_scroll" src="/Link_Shop_Updated/Model/Dashboard/icon/abaixo.png" alt="">
            </div>

        </div>

            <div>

            </div>
            
        </div>
    </div>
    </div>

</body>

</html>