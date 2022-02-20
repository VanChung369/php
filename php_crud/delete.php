<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
    <style>
        .lead{
          display: flex;
          justify-content: center;
          align-items: center;
          height: 800px;
          flex-direction: column;
         
         
        }
        .messeger{
            width: 400px;
            height: 150px;
            border: 2px solid black;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-color: rgb(244, 244, 244);
        }
       .btn{
            margin-top: 10px;
            width: 100px;
        }
        
    </style>
</head>
<body>
<div class="lead">
    <div class="messeger">
    <div style="padding-top:42px; padding-left:10px;">bạn có chắc muốn xóa thuộc tính này không.</div>
    <div style="padding-left: 70px;">
        <a href="php/delete.php?id=<?= $_GET['id'] ?>" class="btn btn-danger">Yes</a>
         <a href="index.php" class="btn btn-success">No</a>
    </div>
    </div>
   
</div>

</body>
</html>