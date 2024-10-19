    //DISPLAY NO HTML DA IMAGEM CARRREGADA
    var changeImages = document.getElementById('changeImage');
    var imageLoad = document.getElementById('imageLoad');
    var imgUpload_btn = document.getElementById('imgUpload_btn');
    var imageDisplay = document.getElementById('imageDisplay');

    imageLoad.addEventListener("change", function(){
        changeImage(this);
    });

    function changeImage(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                imageDisplay.setAttribute('src', e.target.result);
                document.getElementById('imgZoomed').setAttribute('src', e.target.result);
                imageDisplay.style.display = 'block';
                changeImages.style.display = 'block';
                imgUpload_btn.style.display = 'none';                  
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    var imgSrc_Zoom = document.getElementById('imgZoom');
    function imagemZoom(){
        imgSrc_Zoom.setAttribute("src", imageDisplay);
        imgSrc_Zoom.style.display = 'block';
        document.getElementById('imgZoom').style.display = 'block';
    } 

        function closeZoom(){
            document.getElementById('imgZoom').style.display = 'none';
        }

    //LIST SECTION - POSTAGENS
    //ProdS scroll
        const maisProd = document.getElementById('maisProd');
        const btn_Left = document.getElementById('L_btn_scroll');
        const btn_Right = document.getElementById('R_btn_scroll');

        let scrollPosition = 0;

        btn_Right.addEventListener('click', () => {
            scrollPosition += 860; // Inverter a direção ao clicar à esquerda
            maisProd.style.transform = `translateX(-${scrollPosition}px)`; // Mover no sentido positivo

            if(scrollPosition != 0){
                btn_Left.style.display = 'block';
            }
        });

        btn_Left.addEventListener('click', () => {
        scrollPosition -= 860; // Direção ao clicar à direita
        maisProd.style.transform = `translateX(-${scrollPosition}px)`; // Mover no sentido negativo

        if(scrollPosition === 0){
            btn_Left.style.display = 'none';
        }
        });

