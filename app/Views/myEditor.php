<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>

	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="lib/codemirror.js"></script>
	<link rel="stylesheet" href="lib/codemirror.css">
	<script src="/mode/javascript/javascript.js"></script>

</head>
<style>
	
.copy-code-wrap {
	height: 34px;
	width: 34px;
	bottom: -10px;
	right: -10px;
	z-index: 10;
	cursor: pointer;
}
.copy-code {
	height: 32px;
	width: 32px;
	bottom: 0;
	right: 0;
	background: #339af0;
	border-radius: 50%;
	z-index: 10;
	transition: 0.2s;
}
.copy-code::after {
	font-family: "Font Awesome 5 Free";
	font-weight: 600;
	font-size: 16px;
	content: "\f328";
	color: #fff;
	position: absolute;
	top: 3px;
	left: 10px;
}
.copy-code-wrap:active .copy-code {
	transform: translate(0, 0) scale(0.9);
}
.animate {
	transform: translate(0, 0) scale(1.12);
}

.tooltip {
	font-size: 15px;
	box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}

</style>
<body>

<script>
	$( document ).ready(function() {
	fetch()
});
	</script>

	
<?php echo base_url(); ?>
<?php echo site_url(); ?>	

	<textarea id="myTextarea" style="margin-left: 5%;" >

	</textarea>

	

	<input type="hidden" value=<?php echo $TOKEN; ?>;>
	<button  class="copy-code-wrap" type="button">Click Me!</button>
	<button id="myButton" onclick="sendCode()">Run Code</button>
	<button id="myButton" onclick="fetch()">Reset</button>

<textarea id="output" disabled>

</textarea>



<script>
 window.addEventListener('beforeunload', function (e) {
    e.preventDefault();
    e.returnValue = '';
	window.localStorage.clear();
});

  if (window.localStorage.getItem('isEdited')==null){

		window.localStorage.setItem('isEdited', 'false');
	
	}


	console.log(window.localStorage.getItem('isEdited')+" isEdited1");

</script>

<script>

	var editor = CodeMirror.fromTextArea(myTextarea, {
	  lineNumbers: true
	});
	

	editor.on("change",function(cm,change){

		if (window.localStorage.getItem('isEdited')!="true") {
			window.localStorage.setItem('isEdited',"true");
			console.log(document.getElementById("myTextarea").value)
			
		}else{
			window.localStorage.setItem('codeBase',editor.getValue())
	
			// console.log("potangena"+document.getElementById("myTextarea").innerText)
		}
		console.log(window.localStorage.getItem('codeBase')+" codeBase");

	});

	$(".copy-code-wrap").onclick = function (e) {
		alert('sd');
	if (e.which == 1) {
		// write the text to the clipboard
		navigator.clipboard.writeText(editor.getValue());

		// animate the button
		var copy = $(".copy-code", this);
		function quickadd() {
			copy.classList.add("animate");
			setTimeout(function () {
				copy.classList.remove("animate");
			}, 200);
		}
		quickadd();
	}
};


</script>

<script>

	var token=<?php echo $TOKEN; ?>;
	console.log(token);
	function sendCode()
		 {
			var myData={
				codeBody : editor.getValue(),
				className : "Solution"

			};
			console.log(JSON.stringify(myData));
		  $.ajax({
			   type: 'POST',
			   url: "http://localhost:8080/runCode",
			   headers: {
			   'Content-Type':'application/json',
			   'X-TOKEN': token,
			   },
			   data:JSON.stringify(myData),
			   success: function(data){
				console.log(data['output']);
				document.getElementById("output").innerText=data['output']
				 }, error: function(xhr, desc, err) {
						   console.log(xhr);
				console.log("Details: " + desc + "\nError:" + err);
}
			 })	
		 }
		 function fetch()
		 {
		  $.ajax({
			   type: 'POST',
			   url: "http://localhost:8080/fetchCode?fileName=Solution",
			   headers: {
			   'Content-Type':'application/json',
			   },

			   success: function(data){
				editor.getDoc().setValue(data['codeBody']);

				 }, error: function(xhr, desc, err){
						   console.log(xhr);
				console.log("Details: " + desc + "\nError:" + err);
}
			 })	
		 }



		
		 
</script>
<button class="copy-code-wrap" id="myButton">copy Code</button>

</body>
</html>
