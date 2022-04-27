<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $forumquestion['forum_title'] ?></title>
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/viewforum.css');?>">
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/prism.css');?>">
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/js/prism.js');?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	  <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/navbardesign.css');?>"> 
    
</head>
<style>

a:hover {
  text-decoration: none;
  color:#0088cc;
  letter-spacing: .0em;
  border: none;
  transition: .2s;
}

.link:hover{
    text-decoration: underline;
}
 
.comment-info{
    display: block;
    margin-bottom:2px;
}

.comment-info{
    font-size: .9em;
    margin-bottom:-5px;
    padding-left: .3em;
    width: 100%
}
.profile-comment{
    display: flex;
    align-items:center;
}

.row{
    
    padding-left: 4%;
    padding-bottom: 2%;

}

.forum-reply{
    padding-left: 2em;
    padding-bottom: 5em;
}
    </style>
<body>
    

<div class="container">


<div class="row">
        <a id="SIGNIN"class="btn btn-signin create-question" href="<?= base_url('/AskQuestion/question');?>" role="button">CREATE A QUESTION</a>      
       
        </div>


    <div class="forum-title">
    <h2>
        <?= $forumquestion['forum_title'] ?>
    </h2>

<figcaption class="figure-caption">
   <div class="row">
   <p class="text-muted post-info">Creater by:
   <a href="<?= base_url('/Profile');?>" class="text-muted link">     
   <?= $forumquestion['user_name'] ?>
</a>
   <p class="text-muted post-info">Published On:<?=  date("   F d,Y @ g:i A", strtotime($forumquestion['created_at']))?> </p>
   </div>
</figcaption>

    </div>
    <div class="forum-body">
        <h5 class="forum-body">
        <?= $forumquestion['forum_body'] ?>
        </h5>
    </div>



    <div class="forum-reply">
    <h2>
    <?php echo $num_row;?> Answers
    </h2>
    <?php
        foreach($reply as $replyItem){
        ?>
    
   <table id="replyTable">
      
       
            <td>
            <p class="reply"> <?php echo $replyItem['forum_reply'];?></p>    
           </td>
            <td>
          
            <div class="profile-comment">
            <img src="/uploads/user/<?= $replyItem['uploaded_flleinfo']?>" height="50" width="50" class="profile-image"  alt=""> 
            <div class="row comment-info">
   <p class="text-muted comment-info">
   Creater by:
   <a href="<?= base_url('/Profile');?>" class="text-muted link">    
   <?= $replyItem['user_name'] ?>
        </a>
</p>
   <p class="text-muted comment-info"><?=  date("F d,Y g:i A", strtotime($replyItem['created_at']))?> </p>
   </div>
            </div>
         
            
        </td>
            <hr>
</table>

<?php
}
?>
    </div>


    <div class="forum-reply-editor">
    <div class="row">
        
      <div class="col">
      <?= form_open_multipart('AskQuestion/store/'.$forumquestion['id'] ) ?>
                    <div class="form-group">
                    <input type="hidden" id="custId" class="custId" name="custId" value="<?= $forumquestion['id'] ?>">
                    <textarea class="text-editor reply" id="text-editor" name="reply"></textarea>
                    </div>
                    <button class="btn btn-signin answer-button" type="submit">POST ANSWER</button>
                </form>
      </div>
    </div>
    </div>



</div>



</body>
<script>
            // $(document).ready(function () {
            //     $(document).on('click', '.answer-button', function(){
            //         $.ajax({
            //             alert('asdad');
            //           url: '/askquestion/store',
            //           method: "GET",
            //           dataType: 'json',
            //           success: function (res) {
            //               var askquestion = '<tr id="'+res.data.id+'">';
            //               askquestion += '<td>' + res.data.forum_reply + '</td>';
            //               askquestion += '<td>' + res.data.user_name + '</td>';
            //               $('#replyTable tbody').prepend(askquestion);
            //           },
            //           error: function (data) {
            //           }
            //       });
            //     })
            //  });   
    </script>


<script>
        //   $(document).ready(function () {
        //     //Add the Student  
        //     $("#postreply").validate({
                
          
        //          submitHandler: function(form) {
        //           var form_action = $("#postreply").attr("action");
        //           var data = {
        //               'reply' : $('.reply').val(),
        //               'custId' : $('.custId').val(),

        //           }


        //           $.ajax({
        //               data: $('#postreply').serialize(), 
        //               url: '/askquestion/store',
        //               method: "POST",
        //               dataType: 'json',
        //               success: function (res) {
        //                   var askquestion = '<tr id="'+res.data.id+'">';
        //                   askquestion += '<td>' + res.data.forum_reply + '</td>';
        //                   askquestion += '<td>' + res.data.user_name + '</td>';
        //                   askquestion += '<hr>';
        //                   $('#replyTable tbody').prepend(askquestion);
        //                   $('#postreply')[0].reset();
        //                   $('#addModal').modal('hide');
                        
        //               },
        //               error: function (data) {
        //               }
        //           });
        //         }
        //     }); 
        // });   
    </script>

<script type="text/javascript" src="<?= base_url('assets/js/text-editor-answer-forum.js');?>"> </script>
</html>