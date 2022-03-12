<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questions</title>
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/navbardesign.css');?>">
</head>
<body>
    <style>

html{
    all: unset;
}        
.container{
    float: left;
    padding-left: 10%;
}

.post-summary{
    padding-bottom: 10px;
    font-size: 1em;
}

.post-tags{
    padding-bottom: 30px;
}

.post-title,
.post-summary-link{
    color: #231773;
    padding:0;
    padding-bottom: -50px;
    text-decoration: none;
}

.post-summary-link{
    text-decoration: none;
}


.create-question{
    padding: 10px;
    padding-right: 3%;
    padding-left: 3%;
    border-radius: 50px;
    font-size: 1.5em;
    margin-bottom: 4em;
}
        </style>
<div class="container">
        

        

        <div class="row">
        <a id="SIGNIN"class="btn btn-signin create-question" href="<?= base_url('/AskQuestion');?>" role="button">CREATE A QUESTION</a>      
       
        </div>

        <div class="row">
        <div class="post-summary">
        <?php if ($news): ?>
             <?php foreach ($news as $newsItem): ?>
            <h3 class="hehe"><a class="post-summary-link" href="/AskQuestion/<?= $newsItem['slug']?>">
                <?= $newsItem['forum_title'] ?>
                </a></h3>
            <div class="post-summary">
            <?= $newsItem['forum_body'] ?>
            </div>
         
            <?php endforeach; ?>
        <?php else: ?>
          <p>no post</p>
        <?php endif; ?>
          </div>
        </div>


    </div>
</body>
</html>