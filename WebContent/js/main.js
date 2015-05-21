$(document).ready(function() {
	$("#main_menu").menu({
		position: { my: "center", at: "right-50 top+5" },
		icons: { submenu: "ui-icon-triangle-1-s" }
	});
});

/**
 * Calls out to Google Maps API and gets written directions and renders map.
 * @param from - from address; gives error message if invalid.
 */
function calculateRoute(from) {
		var myCenter = new google.maps.LatLng(35.268506,-83.1177552);
		var mapProp = {
		   panControl:true,
		   zoomControl:true,
		   scaleControl:true,
	       center:myCenter,
	       zoom:10,
		   mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		var mapObject=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		var directions = new google.maps.DirectionsService();
		var directionRequest = {
			origin:from,
			destination:"1698 Shook Cove Rd, Tuckasegee, NC 28783",
			travelMode: google.maps.DirectionsTravelMode.DRIVING,
			unitSystem: google.maps.UnitSystem.IMPERIAL
		};
		
		directions.route(
		          directionRequest,
		          function(response, status)
		          {
		            if (status == google.maps.DirectionsStatus.OK)
		            {
		              var directionRender = new google.maps.DirectionsRenderer();
		              directionRender.setMap(mapObject);
		              directionRender.setDirections(response);
		              directionRender.setPanel(document.getElementById("directions-panel"));
		              $("#printLink").css("visibility","visible");
		              $("#error").text("");
		            }
		            else {
			          $("#error").text("Unable to retrieve your route. Try a different address.");
			          $("#printLink").css("visibility","hidden");
		            }
		          }
		         );
			}

/*
var dict = {
		  "Home": {
		    pt: "Início"
		  },
		  
		  "About": {
			  pt: "Sobre"
		  },
		  
		  "The Venue": {
			  pt: "El Castillo"
		  },
		  
		  "Our Song": {
			  pt: "La Cancion"
		  },
		  
		  "Lodging": {
			  pt: "Hoteles"
		  },
		  
		  "Blog": {
			  pt: "Grupo"
		  },
		  
		  "Directions": {
			  pt: "Direcciones"
		  },
		  
		  "Contact Us": {
			  pt: "Contactar"
		  }
		};

var translator = $('body').translate({lang: "en", t: dict});

function toEnglish() {
	
}
*/