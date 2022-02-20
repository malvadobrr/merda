var proct = 1;

function ads(){
	document.getElementById("divads").style.display = 'none';
	document.getElementById("ads2").style.display = 'block';
	document.getElementById("h1bg").style.display = 'none';
    document.getElementById("bgh2").style.display = 'none';
	document.getElementById("colunas").style.display = 'block';
	document.getElementById("itens").style.display = 'block';

}

function ads2(){
	document.getElementById("divads").style.display = 'none';
	document.getElementById("ads2").style.display = 'block';
	document.getElementById("h1bg").style.display = 'none';
    document.getElementById("bgh2").style.display = 'none';
	document.getElementById("colunas").style.display = 'block';
	document.getElementById("itens").style.display = 'block';

}

function ads3(){
	document.getElementById("divads").style.display = 'none';
	document.getElementById("ads2").style.display = 'block';
	document.getElementById("h1bg").style.display = 'none';
    document.getElementById("bgh2").style.display = 'none';
	document.getElementById("colunas").style.display = 'block';
	document.getElementById("itens").style.display = 'block';

}


var monitor = setInterval(function(){
    var elem = document.activeElement;
    if(elem && elem.tagName == 'IFRAME'){

         setTimeout('ads()',200);
         setTimeout('adsAbre()',1000);
         GerarCookie('Ads', proct , 20);

        clearInterval(monitor);
    }
}, 1000);

$a = jQuery.noConflict();
$a(document).ready(function(e) { //funcoes banners

$a('#rcjsload_6edf31').click(function(){

    var valor = $a("#linkarqs").attr("data-href");

     setTimeout('ads()',600);
     setTimeout('adsAbre()',900);


   });


});



function adsAbre(){
    document.getElementById("divads").style.display = 'none';
	document.getElementById("ads2").style.display = 'block';
	document.getElementById("h1bg").style.display = 'none';
    document.getElementById("bgh2").style.display = 'none';
	document.getElementById("colunas").style.display = 'block';
	document.getElementById("itens").style.display = 'block';
      
}
function adsAbre2(){
     document.getElementById("divads").style.display = 'none';
	document.getElementById("ads2").style.display = 'block';
	document.getElementById("h1bg").style.display = 'none';
    document.getElementById("bgh2").style.display = 'none';
	document.getElementById("colunas").style.display = 'block';
	document.getElementById("itens").style.display = 'block';
      
}

if (LerCookie('Ads') == "1" ) {
    
   


   setTimeout('ads()',33);
    var proct = proct+(1);

    GerarCookie('Ads', proct, 20);
    
    setTimeout('adsAbre2()',1000);

}else if(LerCookie('Ads') == "2" ) {

    setTimeout('ads3()',33);

setTimeout('adsAbre2()',1000);


}else{

    GerarCookie('linkAds', proct, 20);


}



function GerarCookie(strCookie, strValor, lngDias)

{

    var dtmData = new Date();



    if(lngDias)

    {

        dtmData.setTime(dtmData.getTime() + (lngDias * 168 * 60 * 60 * 1000));

        var strExpires = "; expires=" + dtmData.toGMTString();

    }

    else

    {

        var strExpires = "";

    }

    document.cookie = strCookie + "=" + strValor + strExpires + "; path=/";

}



function LerCookie(strCookie)

{

    var strNomeIgual = strCookie + "=";

    var arrCookies = document.cookie.split(';');



    for(var i = 0; i < arrCookies.length; i++)

    {

        var strValorCookie = arrCookies[i];

        while(strValorCookie.charAt(0) == ' ')

        {

            strValorCookie = strValorCookie.substring(1, strValorCookie.length);

        }

        if(strValorCookie.indexOf(strNomeIgual) == 0)

        {

            return strValorCookie.substring(strNomeIgual.length, strValorCookie.length);

        }

    }

    return null;

}


function ExcluirCookie(strCookie)
{

    GerarCookie(strCookie, '', -1);

}