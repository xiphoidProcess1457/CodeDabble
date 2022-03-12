<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

.forum-title,
.forum-body,
.answer-header{
    color: #231773;
}

.answer-header{
    padding-left: 10px;
}


.answer-button{
    padding: 7px;
    padding-right: 2%;
    padding-left: 2%;
    border-radius: 50px;
    font-size: 1.5em;
    margin-bottom: 2em;
    margin-top: 1em;
    background-color: #ACAff2;
    font-size: 1.5em;
    font-weight: 500;
}

.answer-button:hover{
    color: #EBEDF2;
    background-color: #231773;
}


.create-question{
    padding: 10px;
    padding-right: 3%;
    padding-left: 3%;
    border-radius: 50px;
    font-size: 1.5em;
    margin-bottom: 1em;
}


.create-question:hover{
    color: #EBEDF2;
    background-color: #231773;
}


    </style>
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
            <textarea class="text-editor" id="text-editor" name="body"></textarea>
            <button class="btn btn-signin answer-button
        " type="submit">POST ANSWER</button>
</form>
      </div>
    </div>
    </div>



</div>



</body>
<script type="text/javascript" src="<?= base_url('assets/js/text-editor-answer-forum.js');?>"> </script>
</html>