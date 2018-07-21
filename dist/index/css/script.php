<script>
// Initialize google maps
function myMap() {
  var myCenter = new google.maps.LatLng(-6.198291, 105.899445);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}

$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 1000, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})

$('#myModal2').on('show', function() {
    $('#myModal').css('opacity', .5);
    $('#myModal').unbind();
});
$('#myModal2').on('hidden', function() {
    $('#myModal').css('opacity', 1);
    $('#myModal').removeData("modal").modal({});
});

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc9pBfRDe2elx10Tm4wmsYhoBgTKjmG9k&callback=myMap"></script>