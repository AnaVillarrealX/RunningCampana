window.addEventListener("load", function() {
  var boton = document.querySelector('.listadoFotos');
  if (boton != null) {
    boton.addEventListener("click", function() {
      var mensaje="Deseas ver fotos de las carreras en las que participamos?";
      var respuesta = confirm(mensaje);
      if (respuesta) {
        window.location.replace('/listadoFotosCarreras');
      } else {
        boton.style.display="none";
      }
    });
  }

// var fotosArray =  {[nombre: "Autodromo", epigrafe: "Autodromo Bs As 30 km"],[nombre: "BsAs_Run", epigrafe: "Buenos Aires Run 15 km"],[nombre: "Champa_Ultrarace", epigrafe: "Champaquí Ultramaraton"],[nombre: "Champa_Ultrarace_02", epigrafe: "Champaquí Ultramaraton"],[nombre: "Champa_Ultrarace_03", epigrafe: "Champaquí Ultramaraton"],[nombre: "Champa_Ultrarace_04", epigrafe: "Champaquí Ultramaraton"],[nombre: "Kayak_polo", epigrafe: "Kayak Polo Escobar 8 km"],[nombre: "Raid_Columbia", epigrafe: "Raid Columbia desafío en 3 etapas por Salta"],[nombre: "San_Silvestre", epigrafe: "San Silvestre Bs As 8 km"],[nombre: "Santa_Lucia", epigrafe: "Santa Lucia en San Pedro 10 km"],[nombre: "UltraPeltz", epigrafe: "UltraPeltz Ultra Maraton San Javier"]};

// var fotosArray = [
//   [
//     nombre => "Autodromo",
//     epigrafe =>"Autodromo Bs As 30 km"
//   ],
//   [
//     nombre => "BsAs_Run",
//     epigrafe => "Buenos Aires Run 15 km"
//   ],
//   [
//     nombre => "Champa_Ultrarace",
//     epigrafe => "Champaquí Ultramaraton"
//   ],
//   [
//     nombre => "Champa_Ultrarace_02",
//     epigrafe => "Champaquí Ultramaraton"
//   ],
//   [
//     nombre => "Champa_Ultrarace_03",
//     epigrafe => "Champaquí Ultramaraton"
//   ],
//   [
//     nombre => "Champa_Ultrarace_04",
//     epigrafe => "Champaquí Ultramaraton"
//   ],
//   [
//     nombre => "Kayak_polo",
//     epigrafe => "Kayak Polo Escobar 8 km"
//   ],
//   [
//     nombre => "Raid_Columbia",
//     epigrafe => "Raid Columbia desafío en 3 etapas por Salta"
//   ],
//   [
//     nombre => "San_Silvestre",
//     epigrafe => "San Silvestre Bs As 8 km"
//   ],
//   [
//     nombre => "Santa_Lucia",
//     epigrafe => "Santa Lucia en San Pedro 10 km"
//   ],
//   [
//     nombre => "UltraPeltz",
//     epigrafe => "Ultra maratón en San Javier"
//   ]
// ];
//
var fotosArrayCarreras = [
  [
    "Autodromo",
    "Autodromo Bs As 30 km"
  ],
  [
    "BsAs_Run",
    "Buenos Aires Run 15 km"
  ],
  [
    "Champa_Ultrarace_02",
    "Champaquí Ultramaraton"
  ],
  [
    "Champa_Ultrarace_03",
    "Champaquí Ultramaraton"
  ],
  [
    "Champa_Ultrarace_04",
    "Champaquí Ultramaraton"
  ],
  [
    "Kayak_polo",
    "Kayak Polo Escobar 8 km"
  ],
  [
    "Raid_Columbia",
    "Raid Columbia desafío en 3 etapas por Salta"
  ],
  [
    "San_Silvestre",
    "San Silvestre Bs As 8 km"
  ],
  [
    "Santa_Lucia",
    "Santa Lucia en San Pedro 10 km"
  ],
  [
    "UltraPeltz",
    "Ultra maratón en San Javier"
  ]
];

  // for (var elemento of fotosArrayCarreras) {
  //   var nuevaFoto = document.createElement('img');
  //   nuevaFoto.setAttribute('src','img/fotosCarreras/'+elemento[0]+'.jpg');
  //   console.log(nuevaFoto);
  //   var nuevoEpigrafe = document.createElement('p');
  //   var nuevoTexto = document.createTextNode(elemento[1]);
  //   nuevoEpigrafe.append(nuevoTexto);
  //   console.log(nuevoEpigrafe);
  //   var nuevoLi = document.createElement('li');
  //   nuevoLi.append(nuevaFoto+"<br>"+nuevoEpigrafe);
  //   console.log(nuevoLi);
  //   nuevoUL.append(nuevoLi);
  // }

  var indice = 0;
  var botonAnterior = document.querySelector("#anterior");
  botonAnterior.onclick = function() {
    if (indice>=0) {
      if (indice >= fotosArrayCarreras.length) {
        indice = fotosArrayCarreras.length-1;
      }
      var carrete = document.querySelector(".carrete");
      carrete.innerHTML="";
      var nuevaFoto = document.createElement('img');
      nuevaFoto.setAttribute('src','/img/fotosCarreras/'+fotosArrayCarreras[indice][0]+'.jpg');
      nuevaFoto.setAttribute('width','400px');
      nuevaFoto.setAttribute('heigth','200px');
      nuevaFoto.setAttribute('position','relative');
      var nuevoEpigrafe = document.createElement('p');
      var nuevoTexto = document.createTextNode(fotosArrayCarreras[indice][1]);
      nuevoEpigrafe.append(nuevoTexto);
      carrete.append(nuevaFoto,nuevoEpigrafe);
      indice --;
    }
  }

  var botonSiguiente = document.querySelector("#siguiente");
  botonSiguiente.onclick = function() {
    if (indice<fotosArrayCarreras.length) {
      if (indice <0) {
        indice = 0;
      }
      var carrete = document.querySelector(".carrete");
      carrete.innerHTML="";
      var nuevaFoto = document.createElement('img');
      nuevaFoto.setAttribute('src','/img/fotosCarreras/'+fotosArrayCarreras[indice][0]+'.jpg');
      nuevaFoto.setAttribute('width','400px');
      nuevaFoto.setAttribute('heigth','200px');
      nuevaFoto.setAttribute('position','relative');
      var nuevoEpigrafe = document.createElement('p');
      var nuevoTexto = document.createTextNode(fotosArrayCarreras[indice][1]);
      nuevoEpigrafe.append(nuevoTexto);
      carrete.append(nuevaFoto,nuevoEpigrafe);
      indice ++;
    } else {
        var mensaje="Qué esperás para sumarte a nuestro equipo? Sumáte al desafío!";
        alert(mensaje);
    }
  }
})
