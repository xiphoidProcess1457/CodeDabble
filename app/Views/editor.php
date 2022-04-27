<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lessons['title'] ?> | EDITOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript1.7">var js_version="1.7"</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.14/ace.js" integrity="sha512-6ts6Fu561/yzWvD6uwQp3XVYwiWNpWnZ0hdeQrETqtnQiGjTfOS06W76aUDnq51hl1SxXtJaqy7IsZ3oP/uZEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/editor.css');?>">
    
</head>
<body>
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
                 <button class="editor__btn editor__run" id="run">Run</button>
                <button id="reset">
                    <img src="<?= base_url('assets/assets/reset.svg');?>" class="refresh-img">  
                </button>
            </div>
        </div>
        <div class="column" id="split-2">
            <div class="iframe-header">
                <button id="refresh">
                    <img src="<?= base_url('assets/assets/refresh.svg');?>" class="refresh-img">  
                </button>https://localhost/
                </div>
            <iframe id='iframe' frameBorder="0">
            </iframe>
        </div>
    </div>
</body>
<script type="text/javascript" src="<?= base_url('assets/js/ace_editor.js');?>">
</script>
<script type="text/javascript" src="<?= base_url('assets/js/split.js');?>"></script>
<script>

</script>
</html>
