<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   
  
<body>  
  
  <?php if ($news): ?>
    <?php foreach ($news as $newsItem): ?>
      
      <h3><a href="/AskQuestion/<?= $newsItem['slug'] ?>"><?= $newsItem['forum_title'] ?></a></h3>
      <p><?= $newsItem['forum_body'] ?></p>
      <?php endforeach; ?>
        <?php else: ?>
          <p>no post</p>
        <?php endif; ?>
        
</body>  
</html>  