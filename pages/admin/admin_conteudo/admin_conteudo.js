//const btn_index = document.getElementById('index');



function page_shange(num){

    const page = document.getElementById(num);
    const btn  = document.querySelectorAll('.req')

    for(let q=0;q<btn.length;q++){
        btn[q].style.display="none";
    }
    page.style.display="block";
   
}