<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AJAX</title>
    <script src="js/jquery.js"></script>
</head>
<script>
    function test(){
       var xmlhttp;
       if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
       } else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
       }
       
       
       xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState==4){
            document.getElementById('result').innerHTML = xmlhttp.responseText;
        }
       }
       
    url = "ajax_upload.php"
    xmlhttp.open("GET",url,true);
    xmlhttp.send();
    }
    
    function hide(){
        document.getElementById('img2').style.display = 'none';
           }
      
    test();
    hide();
</script>
<body>


<div id="result"><img id="img2" src="img/ajax-loader.gif" width="100" height="100" /></div>
	<hr style="color: red;" />
    
<style>
p.ajax-result.info {
	padding: 10px;
	font-family: Arial, sans-serif;
	font-size: 14px;
	font-weight: bold;
	border: 1px solid #98B3D3;
	 background-color: #e8e8ff;
	 background-image: none;
	color: #363636;
 }

p.ajax-result.success {
	padding: 10px;
	font-family: Arial, sans-serif;
	font-size: 14px;
	font-weight: bold;
	border: 1px solid #80C881;
	 background-color: #ceffd6;
	 background-image: none;
	color: #363636;
 }
</style>    
    
    <h1>Another Example</h1>
<button onclick="doJavaScriptInAjax();" >Test It</button>
<div id="response-div"></div>
<script type="text/javascript">
    function doJavaScriptInAjax() {
        $.ajax({
            url: "js-in-ajax-response.html",
            context: document.body,
            success: function(responseText) {
                $("#response-div").html(responseText);
                $("#response-div").find("script").each(function(i) {
                    eval($(this).text());
                });
            }
        });
    };
</script>
    
</body>
</html>