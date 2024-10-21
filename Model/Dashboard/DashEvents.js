//HOVER SIDEBAR
var side_btn = document.getElementById('btn_sidebar');
var side_btn2 = document.getElementById('btn_sidebar2');
var side_btn3 = document.getElementById('btn_sidebar3');
var side_btn4 = document.getElementById('btn_sidebar4');
var side_btn5 = document.getElementById('btn_sidebar5');
var side_btn6 = document.getElementById('btn_sidebar6');

    side_btn.addEventListener('click', () =>{
    
            side_btn.style.padding = '10px 10px';
            side_btn.style.background = 'rgb(0, 25, 31, 0.7)';
            side_btn.style.boxShadow = '0px 0px 4px #009675';

            side_btn2.style.boxShadow = 'none';
            side_btn3.style.boxShadow = 'none';
            side_btn4.style.boxShadow = 'none';
            side_btn5.style.boxShadow = 'none';
            side_btn6.style.boxShadow = 'none';
            
            side_btn2.style.background = 'none'; 
            side_btn3.style.background = 'none';
            side_btn4.style.background = 'none'; 
            side_btn5.style.background = 'none';
            side_btn6.style.background = 'none';
    });
    side_btn2.addEventListener('click', () =>{
    
            side_btn2.style.padding = '10px 10px';
            side_btn2.style.background = 'rgb(0, 25, 31, 0.7)';
            side_btn2.style.boxShadow = '0px 0px 4px #009675';

            side_btn.style.boxShadow = 'none';
            side_btn3.style.boxShadow = 'none';
            side_btn4.style.boxShadow = 'none';
            side_btn5.style.boxShadow = 'none';
            side_btn6.style.boxShadow = 'none';

            side_btn.style.background = 'none'; 
            side_btn3.style.background = 'none';
            side_btn4.style.background = 'none'; 
            side_btn5.style.background = 'none';
            side_btn6.style.background = 'none';
    });
    side_btn3.addEventListener('click', () =>{

            side_btn3.style.padding = '10px 10px';
            side_btn3.style.background = 'rgb(0, 25, 31, 0.7)';
            side_btn3.style.boxShadow = '0px 0px 4px #009675';

            side_btn2.style.boxShadow = 'none';
            side_btn.style.boxShadow = 'none';
            side_btn4.style.boxShadow = 'none';
            side_btn5.style.boxShadow = 'none';
            side_btn6.style.boxShadow = 'none';

            side_btn2.style.background = 'none'; 
            side_btn.style.background = 'none';
            side_btn4.style.background = 'none'; 
            side_btn5.style.background = 'none';
            side_btn6.style.background = 'none';
    });
    side_btn4.addEventListener('click', () =>{
            side_btn4.style.padding = '10px 10px';
            side_btn4.style.background = 'rgb(0, 25, 31, 0.7)';
            side_btn4.style.boxShadow = '0px 0px 4px #009675';
            
            side_btn2.style.boxShadow = 'none';
            side_btn3.style.boxShadow = 'none';
            side_btn.style.boxShadow = 'none';
            side_btn5.style.boxShadow = 'none';
            side_btn6.style.boxShadow = 'none';

            side_btn2.style.background = 'none'; 
            side_btn3.style.background = 'none';
            side_btn.style.background = 'none'; 
            side_btn5.style.background = 'none';
            side_btn6.style.background = 'none';
    });
    side_btn5.addEventListener('click', () =>{
            side_btn5.style.padding = '10px 10px';
            side_btn5.style.background = 'rgb(0, 25, 31, 0.7)';
            side_btn5.style.boxShadow = '0px 0px 4px #009675';

            side_btn2.style.boxShadow = 'none';
            side_btn3.style.boxShadow = 'none';
            side_btn4.style.boxShadow = 'none';
            side_btn.style.boxShadow = 'none';
            side_btn6.style.boxShadow = 'none';

            side_btn2.style.background = 'none'; 
            side_btn3.style.background = 'none';
            side_btn4.style.background = 'none'; 
            side_btn.style.background = 'none';
            side_btn6.style.background = 'none'; 
    });
    side_btn6.addEventListener('click', () =>{
            side_btn6.style.padding = '10px 10px';
            side_btn6.style.background = 'rgb(0, 25, 31, 0.7)';
            side_btn6.style.boxShadow = '0px 0px 4px #009675';

            side_btn2.style.boxShadow = 'none';
            side_btn3.style.boxShadow = 'none';
            side_btn4.style.boxShadow = 'none';
            side_btn5.style.boxShadow = 'none';
            side_btn.style.boxShadow = 'none';

            side_btn.style.background = 'none'; 
            side_btn2.style.background = 'none'; 
            side_btn3.style.background = 'none';
            side_btn4.style.background = 'none'; 
            side_btn5.style.background = 'none';
    });

//
var hideShow = false;
function addPost(){

    hideShow = !hideShow;
    if(hideShow){
        document.getElementById('SectionUpload').style.display = 'block';
    }else{
        document.getElementById('SectionUpload').style.display = 'none';
    }
}
var hdShow = false;
function postagensEvt(){
    hdShow = !hdShow;
    if(hdShow){
        document.getElementById('postagensSct').style.display = 'block';
        document.getElementById('postagensSct').style.transition = '0.3s';
        document.getElementById('SectionUpload').style.display = 'none';
    }else{
        document.getElementById('postagensSct').style.display = 'none';
        document.getElementById('postagensSct').style.transition = '0.3s';
    }
}