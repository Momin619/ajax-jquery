<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <style>

    input{
        width: 50%;
    }
  </style>
  
    <title>Document</title>
</head>
<body>
<div class="container">


<form action="" class="d-flex flex-column">
<label for="name" >Name</label>
<input type="text" name="name"  autocomplete="name"  id="name" class=" form-control name">
<label for="email" >email</label>
<input type="text" name="email"  autocomplete="email"  id="email" class=" form-control email">
<label for="age" >age</label>
<input type="number" name="age" autocomplete="age"  id="age" class=" form-control age">
<button class="btn btn-dark text-capitalize text-white">
    add data
</button>

</form>


</div>


<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>


  <script>



$('.btn-dark').on('click' ,function(){
    let name = $('.name').val();
    let email = $('.email').val();
    let age = $('.age').val();
    console.log(name,email,age);
    $.ajax({

url:'./add-data.php',
type: 'POST',
data:{
 
 
  name,
  email,
   age
},
success:function(response){
console.log(response);
}
})
})





  </script>
</body>
</html>