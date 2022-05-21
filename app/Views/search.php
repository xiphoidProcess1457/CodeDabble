<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/search.css');?>">
    <title>Search</title>
</head>
<style>
.post-body-summary{
  color: #231773;
  font-weight: 400;
  line-height: 1.6;
  font-size: 1.1em;
  padding-bottom: 2.5em;
}

.post-summary-link{
    color: #231773;
    padding:0;
    padding-bottom: -50px;
    text-decoration: none;
}

.container{
  height: 100%;
  padding-top: 10%;
} 
</style>
<body>

<div class="container">




<!-- Tabs navs -->
<ul class="nav nav-f">
<div class="searchBar">
<form  method="post" action="<?php echo base_url('search/search_method');?>">
    <input id="searchQueryInput" minlength="2" type="text" required name="searchQueryInput" placeholder="search . ." value=""></form>
    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
      </svg>
    </button>
  </div>
        <li class="nav-item">
            <a href="#ex1-tabs-1" class="nav-link active" role="tab" data-toggle="tab" onclick="show()">THREADS</a>
        </li>
        <!-- <li class="nav-item">
            <a href="#ex1-tabs-2" class="nav-link" role="tab" data-toggle="tab" onclick="hide()">COURSES</a>
        </li> -->
       

       
        
        
    </ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex1-content">
  <div
    class="tab-pane fade show active"
    id="ex1-tabs-1"
    role="tabpanel"
    aria-labelledby="ex1-tab-1">
              
      <div class="row">
        <div class="post-summary">
        <?php if (isset($mod)): ?>
        <?php if ($forumresult): ?>
            <?php foreach ($forumresult as $newsItem):?>

            <h3 class="hehe"><a class="post-summary-link" href="<?php echo base_url('AskQuestion/post/'. $newsItem['id']);?>">
                    <?= $newsItem['forum_title'] ?>
            </a></h3>

          <div class="post-body-summary">
                            <?php 
                    $html = new \Html2Text\Html2Text(substr($newsItem ['forum_body'], 0, 250));
                    echo $html->getText();  // Hello, "WORLD"
                ?>
                     
                     </div>
         
            <?php endforeach; ?>
            
        <?php else: ?>
          <p>no post</p>
        <?php endif; ?>
        <?php endif; ?>
          </div>
        </div>

          
        <div class="row">
        <div class="post-summary">
        <?php if (!isset($mod)): ?>
          
        <?php if ($forumresult): ?>
            <?php foreach ($forumresult as $newsItem):?>

            <h3 class="hehe"><a class="post-summary-link" href="<?php echo base_url('AskQuestion/post/'. $newsItem->id);?>">
                    <?= $newsItem->forum_title ?>
            </a></h3>

            <div class="post-summary">
                     <div class="post-body-summary"><?=  substr($newsItem->forum_body, 0, 200); ?></div>
            </div>
         
            <?php endforeach; ?>
            
        <?php else: ?>
          <p>no post</p>
        <?php endif; ?>
        <?php endif; ?>
          </div>
        </div>



    </div>
    <div class="d-flex justify-content-center flex-nowrap">
        
  </div>


  <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
    Tab 2 content
  </div>
 
</div>
<!-- Tabs content -->
</div>
</body>
<script>
function hide() {
  var x = document.getElementById("ex1-tabs-1");
    x.style.display = "none";
}


function show() {
  var x = document.getElementById("ex1-tabs-1");
    x.style.display = "block";
}
</script>
</html>