var input = document.getElementById('location');
if(input) {
    var autocomplete = new google.maps.places.Autocomplete(input);
    
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      input.className = '';
      var place = autocomplete.getPlace();
      var lat = document.getElementById('lat');
      var lng = document.getElementById('lng');
      lat.value = place.geometry.location.lat();
      lng.value = place.geometry.location.lng();      
    });
}