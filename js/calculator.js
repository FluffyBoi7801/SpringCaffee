jQuery( ".fcalcp5_vedyshiy" ).slider({
            range: "min",
            value: 1000,
            min: 50000,
            max: 200000,
            step: 1000,
            animate:true,
            slide: function( event, ui ) {
        if (ui.value==50000){ jQuery( ".fcalcp5_vedyshiy_rez" ).html("<span>0</span> р.");  }
		else jQuery( ".fcalcp5_vedyshiy_rez" ).html("<span>" + addSpaces(ui.value) + "</span> р.");
        crachet();
		},
        stop: function( event, ui ) {
}
});