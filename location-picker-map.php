
<!-- you need one script for your API key, you can get it here: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script type="text/javascript" src='http://maps.google.com/maps/api/YOUR_API_KEY_HERE=places'></script>
<!-- another for the files of js -->
<script src="<?php echo base_url('assets/themes/default/js/google_maps/locationpicker.jquery.min.js'); ?>"></script>


<div class="row">
  <div class="col-sm-6">
   <div class="form-group float-label-control">
    <label for="mapa_id">Mapa</label>
    <div id="mapa_canvas" style="width: 550px; height: 400px;"></div>
  </div>
</div>


<script> 
	$('#mapa_canvas').locationpicker({
		location: {
			latitude: 32.6489447,
			longitude: -16.9032874
		},
		zoom: 9,
		//radius:10,
		inputBinding: {
			latitudeInput: $('#lat_id'),
			longitudeInput: $('#long_id'),
			//radiusInput: $('#radius_id'),
			locationNameInput: $('#morada_id')
		},
		enableAutocomplete: true,
	});

</script>
