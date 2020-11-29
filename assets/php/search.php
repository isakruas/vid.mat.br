							<!-- search -->
							<style type="text/css"> 


								/* rtn */
								#rtn ul {
								  -moz-user-select: none;
								  -webkit-user-select: none;
								  -ms-user-select: none;
								  user-select: none;
								  color: #3d4449;
								  font-family: "Roboto Slab", serif;
								  font-weight: 400;
								  letter-spacing: 0.075em;
								  list-style: none;
								  margin-bottom: 0;
								  padding: 0;
								  text-transform: uppercase; }
								  #rtn ul a, #rtn ul span {
								    border-bottom: 0;
								    color: inherit;
								    cursor: pointer;
								    display: block;
								    font-size: 0.9em;
								    padding: 0.625em 0; }
								    #rtn ul a:hover, #rtn ul span:hover {
								      color: #01705f; }
								    #rtn ul a.opener, #rtn ul span.opener {
								      -moz-transition: color 0.2s ease-in-out;
								      -webkit-transition: color 0.2s ease-in-out;
								      -ms-transition: color 0.2s ease-in-out;
								      transition: color 0.2s ease-in-out;
								      text-decoration: none;
								      -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
								      position: relative; }
								      #rtn ul a.opener:before, #rtn ul span.opener:before {
								        -moz-osx-font-smoothing: grayscale;
								        -webkit-font-smoothing: antialiased;
								        display: inline-block;
								        font-style: normal;
								        font-variant: normal;
								        text-rendering: auto;
								        line-height: 1;
								        text-transform: none !important;
								        font-family: 'Font Awesome 5 Free';
								        font-weight: 900; }
								      #rtn ul a.opener:before, #rtn ul span.opener:before {
								        -moz-transition: color 0.2s ease-in-out, -moz-transform 0.2s ease-in-out;
								        -webkit-transition: color 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
								        -ms-transition: color 0.2s ease-in-out, -ms-transform 0.2s ease-in-out;
								        transition: color 0.2s ease-in-out, transform 0.2s ease-in-out;
								        color: #9fa3a6;
								        content: '\f078';
								        position: absolute;
								        right: 0; }
								      #rtn ul a.opener:hover:before, #rtn ul span.opener:hover:before {
								        color: #01705f; }
								      #rtn ul a.opener.active + ul, #rtn ul span.opener.active + ul {
								        display: block; }
								      #rtn ul a.opener.active:before, #rtn ul span.opener.active:before {
								        -moz-transform: rotate(-180deg);
								        -webkit-transform: rotate(-180deg);
								        -ms-transform: rotate(-180deg);
								        transform: rotate(-180deg); }

								#rtn > ul > li {
								  border-top: solid 1px rgba(210, 215, 217, 0.75);
								  margin: 0.5em 0 0 0;
								  padding: 0.5em 0 0 0; }
								  #rtn > ul > li > ul {
								    color: #9fa3a6;
								    display: none;
								    margin: 0.5em 0 1.5em 0;
								    padding-left: 1em; }
								    #rtn > ul > li > ul a, #rtn > ul > li > ul span {
								      font-size: 0.8em; }
								    #rtn > ul > li > ul > li {
								      margin: 0.125em 0 0 0;
								      padding: 0.125em 0 0 0; }
								  #rtn > ul > li:first-child {
								    border-top: 0;
								    margin-top: 0;
								    padding-top: 0; }

							</style>

							<script type="text/javascript">

								 "use strict";

								 try {

								    var Sys = {

								        Info: {

								            Version: function() {
								                return ("1.0.1")
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

								            }
								        }

								    };

								    var System = Object.create(Sys);

								} catch (e) {

								    throw new Error(e);

								} finally {

								    console.log("WRMKI Script " + System.Info.Version() + " Started");

								}

								function search(term){
									System.Ajax.Get({
										url:"https://"+window.location.hostname+"/search.php",
										data:"q="+term,
										success:function(rtn){
											 
											var data = JSON.parse(rtn);
											var html = "<ul>";

									 
											for (var i = 0; i < data.length; i++) {
												if (i<=5) {
													var r = data[i].split("/");
													var j = r.length;
													html = html + '<li><a href=".'+data[i]+'">'+r[j-2]+'</a></li>';
												} 
											}
										 

											html = html + "</ul>";
											
											document.getElementById('rtn').style.display = 'block';
											document.getElementById("rtn").innerHTML = html;
										}
									});
								}


									System.Ajax.Get({
										url:"https://"+window.location.hostname+"/git.php",
										data:"",
										success:function(rtn){
											console.log(rtn);
										}
									});


							</script>

						<section id="search" class="alt">
							
							<input type="text" onkeyup="search(this.value)" name="query" id="query" placeholder="Search">
							
						</section>

						<nav id="rtn" style="overflow-y: auto; display: none;">
							
						</nav>

						<!-- end search -->