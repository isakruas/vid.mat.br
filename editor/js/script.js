const Systemw = {
  Redirect:function (url) {
    location.href = url;
  },
  Navclick:function (id) {
  	System.Redirect('index.php#'+id);
  }
}

function Salvar (){

	var doc = document.getElementById("main-editor-textarea-question").value;
	
	System.Ajax.Get({
		url:"api.php", 
		data:"txt="+encodeURI(doc), success:function(r){
			System.Popup({
			    type:"alert", 
			    msg:"<br /><br /><br /><br /><br /><center>"+r+"</center>",
			});
		},
		error:function(){
			System.Popup({
			    type:'alert', 
			    msg:'<br /><br /><br /><br /><br /><center>Arquivo muito grande para ser salvo</center>'
			});
		}
	});
}

function Reload() {

	System.Popup({
	    type:"alert", 
	    msg:"<br /><br /><br /><br /><br /><center><input type='text' id='alert_input' style='width: 100%; height: 1cm; border: 0.01cm solid #002907;'></center>",
	    button:"Recuperar",
	    callback: function(){
	    	var nud = document.getElementById('alert_input').value;
			System.Ajax.Get({
				url:'api.php', 
				data:'nud='+nud, success:function(r){

					if (r == 'false') {
						System.Popup({
						    type:'alert', 
						    msg:'<br /><br /><br /><br /><br /><center>Não foi possivel recuperar o arquivo</center>'
						});
					} else {
						document.getElementById('main-editor-textarea-question').value = r;
						System.Popup({
						    type:'alert', 
						    msg:'<br /><br /><br /><br /><br /><center>Arquivo recuperado com sucesso</center>'
						});
					}
				}
			});
	    }
	});

}