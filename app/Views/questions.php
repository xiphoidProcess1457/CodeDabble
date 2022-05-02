<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/questions.css');?>">
	<link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/pagination.css');?>">
  <title>FORUM</title>
</head>
<style>
  figure{
    padding-right: 13%;
    margin: 0;
  }
  .disabled{
  pointer-events: none;
}
</style>
<body>
<div class="container">





        <div class="row">
        <?php if (session()->get('logged_in')):?>
          <a id="SIGNIN"class="btn btn-signin create-question" href="<?= base_url('/AskQuestion/question');?>" role="button">CREATE A QUESTION</a>      
        <?php else:?>
          <a id="SIGNIN"class="btn btn-signin create-question disabled" href="<?= base_url('/AskQuestion/question');?>" role="button">CREATE A QUESTION</a>      

		  	<?php endif; ?>


        
       
        </div>

        <div class="row">
        <div class="post-summary">
        <?php if ($news): ?>
            <?php foreach ($news as $newsItem):?>
            <h3 class="hehe"><a class="post-summary-link" href="<?php echo base_url('AskQuestion/post/'. $newsItem['id']);?>">
                    <?= $newsItem['forum_title'] ?>
            </a></h3>

            <div class="post-summary">
                     <div class="post-body-summary">
                            <?php 
                    $html = new \Html2Text\Html2Text(substr($newsItem ['forum_body'], 0, 250));
                    echo $html->getText();  // Hello, "WORLD"
                ?>
                 
                            <!-- <figure>
                            <div class="row float-right">
          <p class="text-muted post-info">
        //$newsItem['user_name']
          <p class="text-muted post-info">Asked //date("   F d,Y @ g:i A", strtotime($newsItem['created_at']))?> ago</p>
          </div>
        </figure> -->

                     </div>
                     
  
            </div>
            <?php endforeach; ?>
            
        <?php else: ?>
          <p>NO POSTS</p>
        <?php endif; ?>
        

      
        
   
          </div>
        </div>
    </div>
    <div class="d-flex justify-content-center flex-nowrap">
          <?= $pager->links() ?>
        </div>
</body>


</html>