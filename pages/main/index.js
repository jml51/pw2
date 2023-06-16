



// --------------------   display content  --------------------------- //
const hide = document.querySelectorAll(".he")
const noscrooll = document.querySelectorAll("#conta")


const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        entry.target.classList.toggle("show1", entry.isIntersecting)
        if(entry.isIntersecting) observer.unobserve(entry.target)
    })
    },
    {
        //threshold: 1,
        rootMargin: "-190px"
    }
)
hide.forEach(hid => {
    observer.observe(hid);
});
// --------------------                    --------------------------- //





// --------------------   login form  --------------------------- //
const login_abrir  = document.getElementById("login_abrir")
const login_form   = document.getElementById("form_login")
var q = 0;

login_abrir.addEventListener("click", function(){
    
    q = q + 1;

    if(q % 2 == 1){
        login_form.style.display = "block";
    }else{
        login_form.style.display = "none";
    }
});


// --------------------                    --------------------------- //



// --------------------   scrool button  --------------------------- //
const btn_scroll_down = document.getElementById("btnscrolldown")
const header = document.getElementById("header2")
const dicscrooll = document.getElementById("noscrooll")
const h1 = document.getElementById("h1")



btn_scroll_down.addEventListener("click", function(){
    window.scrollTo(0,1000)
    header.classList.add("sticky");
    btn_scrool_up.classList.add("visible");
    body.classList.add("overfloott")
    login_form.style.display = "none";
    login_form.style.backgroundColor = "rgba(54, 54, 54)";
    setTimeout(clean, 800);
});

function clean(){
    dicscrooll.classList.add("block");
    h1.classList.add("block");
}


const btn_scrool_up = document.getElementById("btnscrollup")

btn_scrool_up.addEventListener("click", function(){
    dicscrooll.classList.remove("block");
    h1.classList.remove("block");
    body.classList.remove("overfloott")
    login_form.style.display = "none";
    login_form.style.backgroundColor = "rgba(54, 54, 54,0)";
    setTimeout(clean_back, 10);
});
function clean_back(){
    window.scrollTo(0,0)
    header.classList.remove("sticky");
    btn_scrool_up.classList.remove("visible");
}


// --------------------                  --------------------------- //




// --------------------   list display  --------------------------- //

const dropdown1 = document.getElementById("dropdown_1")
const dropdown2 = document.getElementById("dropdown_2")
const dropdown3 = document.getElementById("dropdown_3")
const display   = document.getElementById("dropdown_display_img")
const display_text   = document.getElementById("dropdown_display_text")

function addload(){
    display_text.innerHTML = "Passe o corso sobre uma imagem";
}

dropdown1.addEventListener("mouseover", dropdown_fun_add1)
function dropdown_fun_add1(){
    display.classList.add("display_1");
    display.classList.remove("display_0");
    display.classList.remove("display_2");
    display.classList.remove("display_3");
    display_text.innerHTML = ""
    display_text.innerHTML = "Os planos para a obra começaram em 1950 e os trabalhos no terreno em 1967   Nesta altura, Vilarinho da Furna tinha cerca de 300 habitantes.Os habitantes acabaram por sair prejudicados na compensação que receberam para sair da vila. A terra foi avaliada em apenas 0,5 escudos por metro quadrado pela Companhia Hidroeléctrica do Cavado, um valor muito abaixo do normal na altura.Para além disto, os habitantes também tiveram problemas na própria evacuação. Dado estar num local remoto e de difícil acesso a estradas, a população teve de arcar sozinha com os custos e problemas para levar os seus pertences, já que o Estado não construiu um caminho de asfalto que facilitasse o transporte. O último habitante saiu em 1971, um ano antes da localidade ficar totalmente submersa.";

};



// -------------------------------------------
dropdown2.addEventListener("mouseover", dropdown_fun_add2)
function dropdown_fun_add2(){
    display.classList.add("display_2");
    display.classList.remove("display_0");
    display.classList.remove("display_1");
    display.classList.remove("display_3");
    display_text.innerHTML = ""
    display_text.innerHTML =" fundada em Outubro de 1985 AFURNA tem por objectivo a defesa, valorização <br> e promoção do património cultural, colectivo e/ou <br> comunitário do antigo povo de Vilarinho da Furna"
    // "  Vilarinho da Furna foi uma aldeia comunitária, cujas origens se perdem nas brumas da memória. Desde 1971 que esta aldeia está submersa pela albufeira da barragem de Vilarinho da Furnas e com ela uma grande riqueza etnográfica. Contudo, quando a arragem é esvaziada para limpeza ou quando desce o nível das águas em períodos de eca, podem ver-se ainda as casas, os caminhos e os muros da antiga aldeia."
};


//------------------------------------
dropdown3.addEventListener("mouseover", dropdown_fun_add3)
function dropdown_fun_add3(){
    display.classList.add("display_3");
    display.classList.remove("display_0");
    display.classList.remove("display_2");
    display.classList.remove("display_1");
    display_text.innerHTML = ""
    display_text.innerHTML = "   Vilarinho da Furna contínua a ser conhecida como “extinta aldeia comunitária”, submersa pelas águas da albufeira de Vilarinho das Furnas. Mas, nem tudo se extinguiu, pois, os vestígios que se conservam mantêm viva a memória deste espaço. Esta aldeia, perdida entre serras do Gerês e Amarela, não possui elementos que permitam datar o seu estabelecimento, sendo certo que há vestígios remotos de vida humana."
};


// --------------------                  --------------------------- //