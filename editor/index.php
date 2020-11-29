<script type="text/javascript">
    
"use strict";

 try {

    var Sys = {

        Info: {

            Version: function() {
                return ("1.0.0")
            }

        },
        Popup_callback:function(fn){
            fn();
            document.getElementById('alert').style.visibility = 'hidden';
        },

        Popup:function(json){

            if (json !== undefined) {
                 if (typeof json == "object") {

                    if (json.type == undefined) {
                        json.type = "alert";
                    }

                    if (json.msg == undefined) {
                        json.msg = "";
                    }

                    if (json.button == undefined) {
                        json.button = "Ok";
                    }

                    if (json.yes == undefined) {
                        json.yes = function() {};
                    }

                    if (json.no == undefined) {
                        json.no = function() {};
                    }

                    if (json.callback == undefined) {
                        json.callback = function() {};
                    }

                    if (json.type == "alert"){
                        var tmp = '<div class="alert-two-row-one">'+json.msg+'</div><div class="alert-two-row-two"><div class="alert-one-columns"><div class="alert-one-columns-one" onclick="'+"document.getElementById('alert').style.visibility = 'hidden'; System.Popup_callback("+json.callback+")"+'"><p>'+json.button+'</p></div></div><p>Ok</p></div>';
                        document.getElementById('alert').style.visibility = 'visible';
                        document.getElementById('alert_p').innerHTML = tmp;
                    }

                    if (json.type == "confirm"){
                        var tmp = '<div class="alert-two-row-one" >'+json.msg+'</div><div class="alert-two-row-two"> <div class="alert-two-columns"><div class="alert-two-columns-one" onclick="System.Popup_callback('+json.no+')"> <p>Não</p> </div> <div class="alert-two-columns-two"  onclick="System.Popup_callback('+json.yes+')"> <p>Sim</p> </div> </div> </div>';
                        document.getElementById('alert').style.visibility = 'visible';
                        document.getElementById('alert_p').innerHTML = tmp;
                    }
                 }
            }
        },

        Ajax: {

            Get: function(json) {

                if (json !== undefined) {

                    if (typeof json == "object") {

                        // Checks if the parameter was passed.
                        if (json.url == undefined) {
                            json.url = "/";
                        }

                        // Checks if the parameter was passed.
                        if (json.data == undefined) {
                            json.data = "";
                        }

                        // Checks if the parameter was passed.
                        if (json.success == undefined) {
                            json.success = function() {};
                        }

                        // Checks if the parameter was passed.
                        if (json.error == undefined) {
                            json.error = function() {};
                        }

                        // Checks if the parameter was passed.
                        if (json.first == undefined) {
                            json.first = function() {};
                        }

                        // Checks if the parameter was passed.
                        if (json.error == undefined) {
                            json.error = function() {};
                        }

                        if (json.last == undefined) {
                            json.last = function() {};
                        }

                        json.first();

                        try {
                            var get = new XMLHttpRequest();
                        } catch (a) {
                            try {
                                var get = new ActiveXObject("Msxml2.XMLHTTP");
                            } catch (b) {
                                try {
                                    var get = new ActiveXObject("Microsoft.XMLHTTP");
                                } catch (c) {
                                    var get = false;
                                }
                            }
                        }

                        // Send request.
                        get.open("GET", json.url + "?" + json.data, true);
                        // Builds a scan input.
                        get.onreadystatechange = function() {

                            if(document.getElementById("progress")) {
                                 switch (this.readyState) {
                                    case 0:
                                    document.getElementById("progress").value = "0";
                                    break;
                                    case 1:
                                    document.getElementById("progress").value = "25";
                                    break;
                                    case 2:
                                    document.getElementById("progress").value = "50";
                                    break;
                                    case 3:
                                    document.getElementById("progress").value = "75";
                                    break;
                                    case 4:
                                    document.getElementById("progress").value = "100";

                                    if (this.status >= 200 && this.status < 299) {
                                        var resp = this.responseText;
                                        json.success(resp);
                                        json.last();
                                        document.getElementById("progress").value = "0";

                                    } else {
                                        json.error();
                                        document.getElementById("progress").value = "0";
                                    }

                                    break;
                                }
                            } else {
                                if (this.readyState === 4) {
                                    if (this.status >= 200 && this.status < 299) {
                                        var resp = this.responseText;
                                        json.success(resp);
                                        json.last();
                                    } else {
                                        json.error();
                                    }
                                }
                            }
                        }

                        get.send(null);
                        console.log("System.Ajax.Get()");

                    } else {
                        throw new Error('System.Ajax.Get({url:"", data:"", first:function(){}, success:function(){}, last:function(){}, error:function(){}});');
                    }

                } else {

                    throw new Error('System.Ajax.Get({url:"", data:"", first:function(){}, success:function(){}, last:function(){}, error:function(){}});');
                }

            },

            Post: function(json) {

                if (json !== undefined) {

                    if (typeof json == "object") {

                        // Checks if the parameter was passed.
                        if (json.url == undefined) {
                            json.url = "/";
                        }

                        // Checks if the parameter was passed.
                        if (json.data == undefined) {
                            json.data = "";
                        }

                        // Checks if the parameter was passed.
                        if (json.success == undefined) {
                            json.success = function() {};
                        }

                        // Checks if the parameter was passed.
                        if (json.error == undefined) {
                            json.error = function() {};
                        }

                        // Checks if the parameter was passed.
                        if (json.first == undefined) {
                            json.first = function() {};
                        }

                        // Checks if the parameter was passed.
                        if (json.error == undefined) {
                            json.error = function() {};
                        }

                        if (json.last == undefined) {
                            json.last = function() {};
                        }

                        json.first();

                        // Identifies which browser and load base files.
                        try {
                            var post = new XMLHttpRequest();
                        } catch (a) {
                            try {
                                var post = new ActiveXObject("Msxml2.XMLHTTP");
                            } catch (b) {
                                try {
                                    var post = new ActiveXObject("Microsoft.XMLHTTP");
                                } catch (c) {
                                    var post = false;
                                }
                            }
                        }

                        // Builds a scan input.
                        post.onreadystatechange = function() {
                            if(document.getElementById("progress")) {
                                 switch (this.readyState) {
                                    case 0:
                                    document.getElementById("progress").value = "0";
                                    break;
                                    case 1:
                                    document.getElementById("progress").value = "25";
                                    break;
                                    case 2:
                                    document.getElementById("progress").value = "50";
                                    break;
                                    case 3:
                                    document.getElementById("progress").value = "75";
                                    break;
                                    case 4:
                                    document.getElementById("progress").value = "100";

                                    if (this.status >= 200 && this.status < 299) {
                                        var resp = this.responseText;
                                        json.success(resp);
                                        json.last();
                                        document.getElementById("progress").value = "0";
                                         
                                    } else {
                                        json.error();
                                        document.getElementById("progress").value = "0";
                                    }

                                    break;
                                }
                            } else {
                                if (this.readyState === 4) {
                                    if (this.status >= 200 && this.status < 299) {
                                        var resp = this.responseText;
                                        json.success(resp);
                                        json.last();
                                    } else {
                                        json.error();
                                    }
                                }
                            }
                        }
                        // Send request.
                        post.open('POST', json.url, true);
                        post.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        post.send(json.data);

                        console.log("System.Ajax.Post()");

                    } else {
                        throw new Error('System.Ajax.Post({url:"", data:"", first:function(){}, success:function(){}, last:function(){}, error:function(){}});');
                    }

                } else {
                    throw new Error('System.Ajax.Post({url:"", data:"", first:function(){}, success:function(){}, last:function(){}, error:function(){}});');
                }
            }

        }

    };

    var System = Object.create(Sys);

} catch (e) {

    throw new Error(e);

} finally {

    console.log("RScript " + System.Info.Version() + " Started");

}
    
</script>


<!--- https://grid.layoutit.com/ -->
<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <title>Editor</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-AMS_HTML-full"></script>
    <script type="text/javascript" src="./js/editor.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <meta http-equiv="pragma" content="no-cache">
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({ showProcessingMessages: false, tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] } });
    </script>
</head>

<body>
    <div class="header">
 
    </div>
 
    <div class="nav">
        <div class="nav-three-row">
            <div class="nav-three-row-one">
                <svg onclick = "Salvar()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M1 3.488c0-1.926 4.656-3.488 10-3.488 5.345 0 10 1.562 10 3.488s-4.655 3.487-10 3.487c-5.344 0-10-1.561-10-3.487zm10 14.823c.34 0 .678-.007 1.011-.019.045-1.407.537-2.7 1.342-3.745-.839.067-1.643.1-2.353.1-3.006 0-7.588-.523-10-2.256v2.434c0 1.925 4.656 3.486 10 3.486zm0-5.665c5.345 0 10-1.562 10-3.487v-2.44c-2.418 1.738-7.005 2.256-10 2.256-3.006 0-7.588-.523-10-2.256v2.44c0 1.926 4.656 3.487 10 3.487zm1.254 7.635c-.438.02-.861.03-1.254.03-2.995 0-7.582-.518-10-2.256v2.458c0 1.925 4.656 3.487 10 3.487 1.284 0 2.526-.092 3.676-.256-1.155-.844-2.02-2.055-2.422-3.463zm6.246-6.281c-2.483 0-4.5 2.015-4.5 4.5s2.017 4.5 4.5 4.5 4.5-2.015 4.5-4.5-2.017-4.5-4.5-4.5zm-.563 6.55l-1.84-1.778.736-.758 1.089 1.05 2.43-2.439.751.744-3.166 3.181z" />
                </svg>
            </div>
            <!--div class="nav-three-row-two">
        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="currentColor" d="M1 3.488c0-1.926 4.656-3.488 10-3.488 5.345 0 10 1.562 10 3.488s-4.655 3.487-10 3.487c-5.344 0-10-1.561-10-3.487zm10 14.823c.34 0 .678-.007 1.011-.019.045-1.407.537-2.7 1.342-3.745-.839.067-1.643.1-2.353.1-3.006 0-7.588-.523-10-2.256v2.434c0 1.925 4.656 3.486 10 3.486zm0-5.665c5.345 0 10-1.562 10-3.487v-2.44c-2.418 1.738-7.005 2.256-10 2.256-3.006 0-7.588-.523-10-2.256v2.44c0 1.926 4.656 3.487 10 3.487zm1.254 7.635c-.438.02-.861.03-1.254.03-2.995 0-7.582-.518-10-2.256v2.458c0 1.925 4.656 3.487 10 3.487 1.284 0 2.526-.092 3.676-.256-1.155-.844-2.02-2.055-2.422-3.463zm10.746-1.781c0 2.485-2.017 4.5-4.5 4.5s-4.5-2.015-4.5-4.5 2.017-4.5 4.5-4.5 4.5 2.015 4.5 4.5zm-2-.5h-5v1h5v-1z"/></svg>
      </div-->
            <div class="nav-three-row-two">
               
            </div>
            <div class="nav-three-row-three">
                <svg onclick = "Reload()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3.222 18.917c5.666-5.905-.629-10.828-5.011-7.706l1.789 1.789h-6v-6l1.832 1.832c7.846-6.07 16.212 4.479 7.39 10.085z" />
                </svg>
            </div>
        </div>
    </div>


    <div class="main">
        <div class="main-two-columns">
            <div class="main-two-columns-one">    
                <textarea  class="main-editor-textarea" id="main-editor-textarea-question" rows="1" cols="1" onkeyup="Preview.Update();"></textarea>
            </div>
            <div class="main-two-columns-two">
                <div id="main-editor-preview"></div>
            </div>
        </div>
    </div>
    <div id="main-editor-buffer"></div>

    <div class="alert" id="alert">
        <div class="alert-box">
            <div class="alert-two-row" id="alert_p">

            </div>
        </div>
    </div>


 



</body>

</html>
<script>
    Preview.Init();
 
var textarea = document.getElementById("main-editor-textarea-question");

textarea.addEventListener("keyup", function(event) {
/*  if (event.keyCode === 13) {
        var tmp = document.getElementById("main-editor-textarea-question").value;
        tmp = tmp + "<br/>\n";
        document.getElementById("main-editor-textarea-question").value = tmp;
  }

 */

});

textarea.addEventListener("keypress", function(event) {

/*
  if (event.keyCode === 73) { //Shift+i
        var tmp = textarea.value;
        tmp = tmp + " $\\displaystyle\\int_a^b f(x)dx$ ";
        textarea.value = tmp;
  }

  if (event.keyCode === 76) {//Shift+l
        var tmp = textarea.value;
        tmp = tmp + " $\\displaystyle\\lim_{x\\to\\infty}f(x)=L$ ";
        textarea.value = tmp;
  }

  if (event.keyCode === 83) {//Shift+s
        var tmp = textarea.value;
        tmp = tmp + " $\\displaystyle\\sum_{n=0}^{\\infty}\\frac{1}{n}$ ";
        textarea.value = tmp;
  }
*/
}, false);


 
</script>