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
  .disable{
    pointer-events: none;
  }

  .container{
    padding-top: 15%;
}
</style>
<body>
<div class="container">
        <div class="row">
        <?php if (session()->get('logged_in')):?>
          <a id="SIGNIN"class="btn btn-signin create-question" href="<?= base_url('/AskQuestion/question');?>" role="button">CREATE A QUESTION</a>      
        <?php else:?>
          <a id="SIGNIN"class="btn btn-signin create-question disable" href="<?= base_url('/AskQuestion/question');?>" role="button">CREATE A QUESTION</a>      
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
                     
                     </div>
            </div>
         
            <?php endforeach; ?>
            
        <?php else: ?>
          <p>no post</p>
        <?php endif; ?>
        

      
        
   
          </div>
        </div>
    </div>
    <div class="d-flex justify-content-center flex-nowrap">
          <?= $pager->links() ?>
        </div>
</body>
</html>