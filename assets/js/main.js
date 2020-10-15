function loadPlayer() {
/* document.getElementById("main-content").innerHTML='<object type="type/html" data="/settings/Black_Bayou/1a_Intro.html" ></object>';*/
/*    $(document).ready(function(){
        $("button").click(function(){
            $("#main-content").load("/settings/Black_Bayou/1a_Intro.html");
        });
    });*/
}

jQuery(document).ready(function($){
  //you can now use $ as your jQuery object.
	var body = $( 'body' );
	var pluginUrl = 'wp-content/plugins/GenCell-System/' ;
	$("#loadPlayer-button").on("click", function(){
		$("#main-content").load("./settings/Black_Bayou/1a_Intro.html");
	});
	$("#loadPlayer-li").on("click", function(){
		$("#main-content").load("./settings/Black_Bayou/1a_Intro.html");
	});
	$("#loadCharacters-button").on("click", function(){
		document.getElementById("main-content").innerHTML='';
	});
	$("#loadCharacters-li").on("click", function(){
		document.getElementById("main-content").innerHTML='';
	});
});

function adjustCPL(adjCPL) {
    var setCPL = document.getElementById("valueBPs").value;
    var adjustCPL = adjCPL.value;
    var newCPL = document.getElementById("valueBPs").value;
    var newCPL = newCPL - adjustCPL;
    document.getElementById("valueBPs").value = newCPL;
}

function setCPL(valCPL) {
    var valueCPL = valCPL.value;
    document.getElementById("valueBPs").value = valueCPL;
}

function characterModalRequested(elementID) {
    jQuery('#characterModal').modal();
    jQuery('#characterModal').modal('show');

}
function characterModalLoad(elementID) {
	var form = {
            action: 'causfa_autocomplete_PID',
        }
        jQuery.post(gencell_action_obj.ajax_url, form, function(data) {
            var PID_options = data['PIDs'];
            var Name_options = data['Names'];
			var input = document.getElementById("recipient-name");
			var list_fill = new Array();
			for (var i = 0; i < PID_options.length; i++) {
				var list_item = new Array();
				list_item[0] = Name_options[i];
				list_item[1] = Name_options[i];
				list_fill.push(list_item);
				var option = document.createElement('option');
                option.value = Name_options[i];
                option.setAttribute('data_value', PID_options[i]);
                PIDs.appendChild(option);
			}
			// alert(JSON.stringify(list_fill));
			new Awesomplete(input, {
				list: list_fill
			})
        });
}
