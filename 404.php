

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pustakthana  - 404 Page Not FOund | Pustakthana </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">
</head>
<style>
  /*topnav starts*/
#myTopnav{
  /*display: none;*/
  display: flex;
  justify-content: space-around;
  color: #3880EC;
  background-color: #fff;
  /*overflow: hidden;*/
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1;
  
}
.topnav{
  /*display: none;*/
  display: flex;
  justify-content: space-around;
  color: #3880EC;
  background-color: #fff;
  /*overflow: hidden;*/
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    /*position: fixed;
    *//*top: 0;*/
  /*  width: 100%;
    z-index: 1;
  */
}


.topnav a{
  display: flex;
    justify-content: space-around;
  float: left;
  display: block;
  color: #3880EC;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-weight: bold;
  cursor: pointer;
  font-size: 1.3rem;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}
@media screen and (max-width:  855px){
  body{
    padding-top: 60px;
  }
}
/*
</style>
<body>
    <!-- navbar starts -->
<!-- responsive navbars starts -->
  <div class="topnav" id="myTopnav" style="position: fixed; width: 100%;">
    <div class="topnav-user-image">
      <img src="seller/asset/user.png" style="width: 40px; padding: 5px; cursor: pointer; padding-top: 10px;">
    </div>
  <!-- <a href="dashboard" ><i class="fa fa-arrow-left" aria-hidden="true"></i></a> -->
  <h2 style="word-break: break-all; font-size: 24px; padding-top: 6px; cursor: pointer;">PustakThana</h2>
  <!-- 
  <a href="index"><i class="fa-solid fa-book"></i></a>
  <a href="orders"><i class="fa-solid fa-cart-shopping"></i></a>
  <a href=""><i class="fa fa-money-bill" aria-hidden="true"></i></a>
  <a href="profile"><i class="fa-solid fa-user"></i></a> -->
  <a href="logout"><i class="fa-solid fa-right-from-bracket"></i></a>
  <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a> -->
</div>
<!-- <br><br><br> -->
  <!-- responsive navbars ends -->
    <!-- navbar ends -->
    <!-- 404 section starts -->
    <section class="flex items-center h-full p-16 dark:bg-gray-900 dark:text-gray-100">
    <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
        <div class="max-w-md text-center">
            <h2 class="mb-8 font-extrabold text-9xl dark:text-gray-600">
                <span class="sr-only">Error</span>404
            </h2>
            <p class="text-2xl font-semibold md:text-3xl">Sorry,</p>
            <p class="mt-4 mb-8 dark:text-gray-400">But dont worry, you can find plenty of other things on our homepage.</p>
            <a rel="noopener noreferrer" href="index" class="px-8 py-3 font-semibold rounded dark:bg-blue-400 dark:text-gray-900">Back to homepage</a>
        </div>
    </div>
</section>
    <!-- 404 page ends -->
  <!-- responsive navbars starts -->
  <div class="topnav" id="Topnav" style="position: fixed; width: 100%; bottom: 0;">
    
  <a href="#" ><i class="fa-solid fa-house" title="home"></i></a>
  <a href=""><i class="fa fa-list-alt" aria-hidden="true"></i></a>
  <a href="seller/login"><i class="fa fa-plus" aria-hidden="true" style="background-color: #3880EC; color: #fff; padding:6px; border-radius: 50%;"></i></a>
  <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
  <a href=""><i class="fa-solid fa-user"></i></a>
  <!-- <a href="logout"><i class="fa-solid fa-right-from-bracket"></i></a> -->
  <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a> -->
</div>
<!-- <br><br><br> -->
  <!-- responsive navbars ends -->
</body>
</html>
<script>
  // returning false, if user click any of the following buttons
document.onkeydown = function(e){
  if(event.keyCode == 123) {
    alert("Easter egg!");
    return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
    alert("Easter egg!");
    return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
    alert("Easter egg!");
    return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
    alert("Easter egg!");
    return false;
  }
}
</script>