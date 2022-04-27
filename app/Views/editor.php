<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lessons['title'] ?> | EDITOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.14/ace.js" integrity="sha512-6ts6Fu561/yzWvD6uwQp3XVYwiWNpWnZ0hdeQrETqtnQiGjTfOS06W76aUDnq51hl1SxXtJaqy7IsZ3oP/uZEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/editor.css');?>">
    
</head>
<style>
    #output {
top: 13%;
height:100%;
width: 100%;
background-color: #000000;
overflow: auto;
border: none;
color: #ffff;
padding: 4%;
font-family: 'Inconsolata', monospace;
}

.gutter {
	 background-color:  #4f4f4f !important;
	 position: relative;
     opacity: 0.5 !important;
}



</style>
<body>
<script>
	$( document ).ready(function() {
	fetch()
});
	</script>
    <div class="split">
        <div class="column" id="split-0">           
<div class="header">
    <img src="<?= base_url('assets/assets/instruction.svg');?>"  class="d-inline-block align-top header_img" alt="">  
    Instructions
    </div>
<div class="content">
    <h6 class="course-title"><?= $lessons['course'] ?></h6>
    <h3 class="lesson-title"><?= $lessons['title'] ?></h3>
    <div class="row">
       
       
      
        
        <div class="col-xl-12 content"><?= $lessons['body'] ?></div>


        
      </div>
</div>
        </div>
        <div class="column" id="split-1">
            <div id="editor"><?= $lessons['code-snippet'] ?></div>
            <div class="editor-footer">
            
            <input type="hidden" value=<?php echo $TOKEN; ?>;> 
                 <button class="editor__btn editor__run" id="run" onclick="sendCode()">Run</button>
                <button id="reset" onclick="fetch()">
                    <img src="<?= base_url('assets/assets/reset.svg');?>" class="refresh-img">  
                </button>



            </div>
        </div>
        <div class="column" id="split-2">
            <textarea id="output" disabled></textarea>
        </div>


    </div>
</body>
<script>
     let editor = ace.edit("editor");
         editor.setTheme("ace/theme/tomorrow_night");
         editor.getSession().setMode("ace/mode/java");
         editor.setOptions({
       // editor options
            selectionStyle: 'line',// "line"|"text"
            highlightActiveLine: true, // boolean
            highlightSelectedWord: true, // boolean
            readOnly: false, // boolean: true if read only
            cursorStyle: 'ace', // "ace"|"slim"|"smooth"|"wide"
            mergeUndoDeltas: true, // false|true|"always"
            behavioursEnabled: true, // boolean: true if enable custom behaviours
            wrapBehavioursEnabled: true, // boolean
            autoScrollEditorIntoView: undefined, // boolean: this is needed if editor is inside scrollable page
            keyboardHandler: null, // function: handle custom keyboard events
            
            // renderer options
            animatedScroll: false, // boolean: true if scroll should be animated
            displayIndentGuides: false, // boolean: true if the indent should be shown. See 'showInvisibles'
            showInvisibles: false, // boolean -> displayIndentGuides: true if show the invisible tabs/spaces in indents
            showPrintMargin: true, // boolean: true if show the vertical print margin
            printMarginColumn: 80, // number: number of columns for vertical print margin
            printMargin: undefined, // boolean | number: showPrintMargin | printMarginColumn
            showGutter: true, // boolean: true if show line gutter
            fadeFoldWidgets: false, // boolean: true if the fold lines should be faded
            showFoldWidgets: true, // boolean: true if the fold lines should be shown ?
            showLineNumbers: true,
            highlightGutterLine: false, // boolean: true if the gutter line should be highlighted
            hScrollBarAlwaysVisible: false, // boolean: true if the horizontal scroll bar should be shown regardless
            vScrollBarAlwaysVisible: false, // boolean: true if the vertical scroll bar should be shown regardless
            maxLines: undefined, // number: set the maximum lines possible. This will make the editor height changes
            minLines: undefined, // number: set the minimum lines possible. This will make the editor height changes
            maxPixelHeight: 0, // number -> maxLines: set the maximum height in pixel, when 'maxLines' is defined. 
            scrollPastEnd: 0, // number -> !maxLines: if positive, user can scroll pass the last line and go n * editorHeight more distance 
            fixedWidthGutter: false, // boolean: true if the gutter should be fixed width
            theme: 'ace/theme/tomorrow_night', // theme string from ace/theme or custom?
            
            // mouseHandler options
            scrollSpeed: 2, // number: the scroll speed index
            dragDelay: 0, // number: the drag delay before drag starts. it's 150ms for mac by default 
            dragEnabled: true, // boolean: enable dragging
            focusTimout: 0, // number: the focus delay before focus starts.
            tooltipFollowsMouse: true, // boolean: true if the gutter tooltip should follow mouse
            
            // session options
            firstLineNumber: 1, // number: the line number in first line
            overwrite: false, // boolean
            newLineMode: 'auto', // "auto" | "unix" | "windows"
            useWorker: true, // boolean: true if use web worker for loading scripts
            useSoftTabs: true, // boolean: true if we want to use spaces than tabs
            tabSize: 4, // number
            wrap: true, // boolean | string | number: true/'free' means wrap instead of horizontal scroll, false/'off' means horizontal scroll instead of wrap, and number means number of column before wrap. -1 means wrap at print margin
            indentedSoftWrap: false, // boolean
            foldStyle: 'markbegin', // enum: 'manual'/'markbegin'/'markbeginend'.
            fontFamily: 'consolas',
            fontSize: "13pt"
   });
</script>
<script type="text/javascript" src="<?= base_url('assets/js/ace_editor.js');?>">
</script>
<script type="text/javascript" src="<?= base_url('assets/js/split.js');?>"></script>




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



</html>
