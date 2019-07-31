$(function () {
  var ajax = $.ajax({
    data: {},
    url: 'getItaee.php',
    type: 'GET',
    success: function (response) {
      var num = JSON.parse(response);
      color(num)
    },
    error: function (response, status, error) {
      alert("Datos no encontrados o error en la conexion")
    }
  })
})

function color(num) {
  var estado = ["Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Coahuila",
    "Morelos", "Nayarit", "Nuevo León", "Oaxaca", "Guanajuato", "Guerrero", "Hidalgo", "Jalisco",
    "Mexico", "Sonora", "Tabasco", "Tamaulipas", "Tlaxcala", "Veracruz",
    "Yucatan", "Zacatecas", "Puebla", "Querétaro", "Quintana Roo", "San Luis Potosí", "Colima",
    "Chihuahua", "Chiapas", "CDMX", "Durango", "Michoacan", "Sinaloa"];
  for (var i = 0; i < estado.length; i++) {
    if (num[i] < 0) {
      document.getElementById(estado[i]).style.fill = "#DC143C";
    } else if ((num[i] >= 0) && (num[i] <= 2)) {
      document.getElementById(estado[i]).style.fill = "#FDE441";
    } else if ((num[i] >= 2.1) && (num[i] <=4)) {
      document.getElementById(estado[i]).style.fill = "#9ACD32";
    } else if (num[i] >= 4.1) {
      document.getElementById(estado[i]).style.fill = "#228B22";
    } else {
      document.getElementById(estado[i]).style.fill = "#FF69B4";
      console.log("Datos fuera de rango " + "el valor sin rango es: " + num[i]);
    }
  }

}



