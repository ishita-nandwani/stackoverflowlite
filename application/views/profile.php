<!DOCTYPE html>
<html>
<head>
    <title>Stackoverflow Lite</title>
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
    <link rel="stylesheet" href="<?=base_url("assets/css/profile.css");?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/home.css");?>">
</head>

<body>

<div>
     <div class="mdc-card profile-up">
          <div>
          <i class="material-icons md-24">edit</i>
          </div>
          <table>
               <tr>
                    <td><img src="<?=base_url("assets/images/default.png");?>" class="profile-img"></td>
                    <td class="profile-content">
                         <div class="full-name">Khushboo Tolat</div>
                         <div><span>Username:</span> khushboo_tolat</div>
                         <div><span>EmailID:</span> iooigfdsbnm</div>
                         <div><span>Company:</span> qweuiop</div>
                         <div><span>Designation:</span> wilxkl</div>
                    </td>
               </tr>
          </table>
     </div>

     <div class="mdc-card">
     </div>
</div>

<?php include("footer.php");?>

</body>

</html>