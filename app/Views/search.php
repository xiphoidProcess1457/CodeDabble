<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Search</title>
</head>
<style>
    
.wrapper {
  width: 100%;
  max-width: 31.25rem;
  margin: 6rem auto;
}

.label {
  font-size: .625rem;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: +1.3px;
  margin-bottom: 1rem;
}

.searchBar {
  width: 100%;
  display: flex;
  flex-direction: row;
  align-items: center;
}

#searchQueryInput {
  width: 100%;
  height: 3rem;
  background: #f5f5f5;
  outline: none;
  border: none;
  border-radius: 5rem;
  padding: 0 3.5rem 0 1.5rem;
  font-size: 1.3rem;
}

#searchQuerySubmit {
  width: 3.5rem;
  height: 2.8rem;
  margin-left: -3.5rem;
  background: none;
  border: none;
  outline: none;
}

#searchQuerySubmit:hover {
  cursor: pointer;
}



/*tabs*/
ul { /** works with ol too **/
    list-style: none; /** removes bullet points/numbering **/
    padding-left: 0px; /** removes actual indentation **/
}
.nav-f > li > a.active {
    position: relative;
    overflow: hidden;
    color:#072BF2;
    border-bottom: 2px solid #231773;
    padding-bottom: 0;
}

.nav-f > li > a{
  font-weight: 500;
  font-size: 1.1em;
  padding-bottom: 0;
}

.nav-f > li {
    padding-left: 50px;
    padding-top: 2em;
   
}

.nav-f > li ::after {
    content: '';
    display: block;
    padding-bottom: 0;
    width: 0;
    height: 2px;
    background: #231773;
    transition: width .2s;
}


 .nav-f > li >:hover::after {
    width: 100%;
    //transition: width .2s;
}


.container{
    height: 85.5vh;
    padding-top:0 ! important;
    padding:1em ! important;
}

/*pagination*/
.pagination>li:hover {
    background: #4b50bf;
}

.pagination {
    display: inline-block;
    width: 100%;
}

.pagination>li{
    color: black;
    display:inline-block;
    cursor: pointer;
    background-color: #acb0f2;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 5px; 
    justify-content: center;
    transition: background-color .3s;
}

.pagination>li.active {
    background-color: #231773;
    color: white;
}

.pagination a {
    color: #ebedf2;
    font-size: 15px;
    font-weight: 400;
}


</style>
<body>
<div class="container">




<!-- Tabs navs -->
<ul class="nav nav-f">
<div class="searchBar">
    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search . ." value="" />
    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
      </svg>
    </button>
  </div>
        <li class="nav-item">
            <a href="#ex1-tabs-1" class="nav-link active" role="tab" data-toggle="tab" onclick="show()">THREADS</a>
        </li>
        <li class="nav-item">
            <a href="#ex1-tabs-2" class="nav-link" role="tab" data-toggle="tab" onclick="hide()">COURSES</a>
        </li>
       

       
        
        
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
        <?php if ($news): ?>
            <?php foreach ($news as $newsItem):?>

            <h3 class="hehe"><a class="post-summary-link" href="<?php echo base_url('AskQuestion/post/'. $newsItem['id']);?>">
                    <?= $newsItem['forum_title'] ?>
            </a></h3>

            <div class="post-summary">
                     <div class="post-body-summary"><?=  substr($newsItem ['forum_body'], 0, 200); ?></div>
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