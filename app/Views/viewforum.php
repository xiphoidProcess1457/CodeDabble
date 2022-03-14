<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $post['forum_title'] ?></title>
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/viewforum.css');?>">
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/prism.css');?>">
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/js/prism.js');?>">
    
</head>
<body>
    

<div class="container">


<div class="row">
        <a id="SIGNIN"class="btn btn-signin create-question" href="<?= base_url('/AskQuestion');?>" role="button">CREATE A QUESTION</a>      
       
        </div>


    <div class="forum-title">
    <h2>
        <?= $post['forum_title'] ?>
    </h2>
    </div>
    <div class="forum-body">
        <p>
        <?= $post['forum_body'] ?>
        </p>
    </div>





    <div class="forum-reply">

   


    </div>


    <div class="forum-reply-editor">
    <div class="row">
        
      <div class="col">
      <form  action="/AskQuestion/savereply" method="POST">
      <h3 class="answer-header">Your Answer</h3>
            <textarea class="text-editor" id="text-editor" name="reply"></textarea>
            <button class="btn btn-signin answer-button" type="submit">POST ANSWER</button>
    </form>
      </div>
    </div>
    </div>



</div>



</body>
<script type="text/javascript" src="<?= base_url('assets/js/text-editor-answer-forum.js');?>"> </script>
</html>