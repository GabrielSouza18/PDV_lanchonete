(function () {
  "use strict"; // Inicio do use strict

  var menuToggle = document.querySelector('.menu-toggle');
  var sidebar = document.querySelector('#sidebar-wrapper');

  if (menuToggle) {
    // Fecha o menu
    menuToggle.addEventListener('click', function (e) {
      e.preventDefault();

      sidebar.classList.toggle('active');
      menuToggle.classList.toggle('active');

      var icon = menuToggle.querySelector('.fa-bars, .fa-times');

      if (icon) {
        if (icon.classList.contains('fa-times')) {
          icon.classList.remove('fa-times');
          icon.classList.add('fa-bars');
        } else if (icon.classList.contains('fa-bars')) {
          icon.classList.remove('fa-bars');
          icon.classList.add('fa-times');
        }
      }

    });
  }

  var navbarCollapse = document.querySelector('.navbar-collapse');

  if (navbarCollapse) {
    var navbarItems = navbarCollapse.querySelectorAll('a');

    // Fecha o menu responsivo quando um link de gatilho de rolagem é clicado
    for (var item of navbarItems) {
      item.addEventListener('click', function (event) {
        sidebar.classList.remove('active');
        menuToggle.classList.remove('active');

        var icon = menuToggle.querySelector('.fa-bars, .fa-times');

        if (icon) {
          if (icon.classList.contains('fa-times')) {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
          } else if (icon.classList.contains('fa-bars')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
          }
        }
      });
    }
  }

  // Scroll to top button appear
  var scrollToTop = document.querySelector('.scroll-to-top');

  if (scrollToTop) {

    // Scroll to top button appear
    window.addEventListener('scroll', function () {
      var scrollDistance = window.pageYOffset;

      if (scrollDistance > 100) {
        scrollToTop.style.display = 'block';
      } else {
        scrollToTop.style.display = 'none';
      }
    });
  }
})(); // End of use strict

// Disable Google Maps scrolling
// See http://stackoverflow.com/a/25904582/1607849
// Disable scroll zooming and bind back the click event
var onMapMouseleaveHandler = function (e) {
  this.addEventListener('click', onMapClickHandler);
  this.removeEventListener('mouseleave', onMapMouseleaveHandler);

  var iframe = this.querySelector('iframe');

  if (iframe) {
    iframe.style.pointerEvents = 'none';
  }
}

var onMapClickHandler = function (e) {
  // Disable the click handler until the user leaves the map area
  this.removeEventListener('click', onMapClickHandler);
  // Handle the mouse leave event
  this.addEventListener('mouseleave', onMapMouseleaveHandler);

  // Enable scrolling zoom
  var iframe = this.querySelector('iframe');

  if (iframe) {
    iframe.style.pointerEvents = 'auto';
  }
}

var maps = document.querySelectorAll('.map');

for (var map of maps) {
  // Enable map zooming with mouse scroll when the user clicks the map
  map.addEventListener('click', onMapClickHandler);
}


// MASCARAS


function somenteLetras() {
  var sDigitos =
    "qwertyuiopasdfghjklçzxcvbnmQWERTYUIOPASDFGHJKLÇZXCVBNMáéíóúÁÉÍÓÚãÃ";
  // Variavel que irá capturar a tecla pressionada
  var cTecla = event.key;
  //   Se a tecla não foi encontrada, a resposta do index of será -1
  if (sDigitos.indexOf(cTecla) == -1) {
    return false;
  } else {
    return true;
  }
}

function somenteNumeros() {
  var sNumeros = "01234567890-.,()";

  var cNum = event.key;

  if (sNumeros.indexOf(cNum) == -1) {
    return false;
  } else {
    return true;
  }
}



function mascTel(n) {
  n = n.replace(/\D/g, ""); // Remove todos os caracteres não numericos
  n = n.replace(/^(\d{2})(\d)/g, "($1)  $2");
  n = n.replace(/(\d)(\d{4})$/, "$1-$2"); // colcoa o traço 
  return n;
}

function mascara(o, f) {
  v_obj = o;
  v_fun = f;
  setTimeout("executaMascara()", 1);

}

function executaMascara() {
  v_obj.value = v_fun(v_obj.value);
}


window.onload = function () {
  this.document.getElementById("telefone").onkeyup = function () {
    mascara(this, mascTel)
  };
  this.document.getElementById("cpf").onkeyup = function () {
    mascara(this, mascCPF)
  };
  this.document.getElementById("rg").onkeyup = function () {
    mascara(this, mascRG)
  };


}

function cnpj(v){
  v=v.replace(/\D/g,"")                           //Remove tudo o que não é dígito
  v=v.replace(/^(\d{2})(\d)/,"$1.$2")             //Coloca ponto entre o segundo e o terceiro dígitos
  v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
  v=v.replace(/\.(\d{3})(\d)/,".$1/$2")           //Coloca uma barra entre o oitavo e o nono dígitos
  v=v.replace(/(\d{4})(\d)/,"$1-$2")              //Coloca um hífen depois do bloco de quatro dígitos
  return v
}

function cpf(v){
  v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
  v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
  v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                           //de novo (para o segundo bloco de números)
  v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
  return v
}