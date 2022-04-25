<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask a Question</title>
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ng-tags-input.min.css');?>">
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ask-question.css');?>">
    <script type="text/javascript" src="<?= base_url('assets/js/ng-tags-input.min.js');?>"> </script>
</head>
<style>
    
</style>
<body>
    
<div class="container">
   
  <h2 class="forum-header">Ask a Question</h2>

  
      
  <form  action="/AskQuestion/save" method="POST">
   <div class="create-question-container">
    <div class="row">
      <div class="col">
       
          <div class="form-group">
              <input type="Title" class="form-control input-title" id="title-input" name="title" placeholder="Title">
            </div>
          
      </div>
    </div>




    <div class="row">
      <div class="col">
            <textarea id="text-editor" name="body"></textarea>
      </div>
    </div>



    
    <div class="row">
      <div class="col">
        <div class="form-group">
         
          <div ng-app="MyApp" ng-controller="MyController">
            <tags-input ng-model="tags" placeholder="e.g.java"></tags-input>                
        </div>  

      </div>
    </div>
  </div>
   </div>
   <button class="post-button" type="submit">POST</button>

    
</div>
<script type="text/javascript" src="<?= base_url('assets/js/text-editor.js');?>"> </script>
<script>
    // var app = angular.module('MyApp', ['ngTagsInput']);
    // app.controller('MyController', function ($scope, $http) {
    //     $scope.tags;
    // });
</script>
</body>
</html>