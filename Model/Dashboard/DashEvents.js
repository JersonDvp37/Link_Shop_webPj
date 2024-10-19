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
    }else{
        document.getElementById('postagensSct').style.display = 'none';
    }
}