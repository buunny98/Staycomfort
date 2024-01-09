 <!DOCTYPE html>
 <html>

 <head>
     <link rel="stylesheet" id="font-awesome-style-css" href="https://www.phpflow.com/code/css/bootstrap3.min.css" type="text/css" media="all">
     <!-- jQuery -->
     <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
     <title> Home of Comfortzzz</title>
     <link rel="stylesheet" href="css/pagi.css">
 </head>

 <body>

     <div class="marginz1">
         <nav>
             <div class="grid gridz1 add-gutters">
                 <!-- adding grid for fire navigation elements -->
                 <a href="index.php" class="nav-item hotel">StayComfortzz.com</a>
                 <a href="index.php" class="nav-item">Home</a> <!-- tag for an embedded link -->
                 <a href="check.php" class="nav-item">Browse Hotels</a>
                 <!-- tag for an embedded link -->

                 <a href="member.php" class="nav-item">Membership</a> <!-- tag for an embedded link -->

                 <a href="login.php" class="nav-item">Member Access</a>


             </div>
     </div>
     </nav>
     <div class="marginz">
         <br>
         <h2>
             All Hotels
         </h2>
         <br>
         <!-- Took online help from https://www.w3schools.com/howto/howto_js_filter_elements.asp -->

         <div id="myBtnContainer">
             <button class="btn active" onclick="filterSelection('all')"> Show all</button>
             <button class="btn" onclick="filterSelection('swim')">Swimming Pool</button>
             <button class="btn" onclick="filterSelection('park')">Garden</button>
             <button class="btn" onclick="filterSelection('star')">5-Star</button>
         </div>
         <br>



         <a href="check.php" class="c">
             <button class="btn border5 border555"> Go back to featured Hotel's</button></a>

         <style>
             .border555 {
                 border-radius: 3px;
                 background-color: #555555;
                 color: black;
             }

             .border5 {
                 border-radius: 3px;
                 background-color: white;
                 color: black;
                 border: 2px solid #555555;
             }

             .btn {

                 padding: 15px 32px;
                 text-align: center;
                 color: black;
                 transition-duration: 0.4s;
                 margin: 16px 0 !important;
                 text-decoration: none;
                 font-size: 16px;
                 cursor: pointer;
             }

             .c {
                 color: black;
             }

             a.c:hover,
             a.c:focus {
                 color: black;
             }
         </style>

         <br>


         <div class="pic grid grid1">
             <div>


                 <?php
                    include('db.php');
                    $limit = 2;
                    $sql = "SELECT COUNT(*) FROM hotel_listings";
                    $rs_result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_row($rs_result);
                    $total_records = $row[0];
                    $total_pages = ceil($total_records / $limit);
                    ?>
                 <div align="center">
                     <ul class='pagination text-center' id="pagination">
                         <?php if (!empty($total_pages)) : for ($i = 1; $i <= $total_pages; $i++) :
                                    if ($i == 1) : ?>
                                     <li class='active' id="<?php echo $i; ?>"><a href='pagination.php?page=<?php echo $i; ?>'><?php echo $i; ?></a></li>
                                 <?php else : ?>
                                     <li id="<?php echo $i; ?>"><a href='pagination.php?page=<?php echo $i; ?>'><?php echo $i; ?></a></li>
                                 <?php endif; ?>
                         <?php endfor;
                            endif; ?>
                 </div>
                 <br>
                 <br>
                 <br>
                 <div id="target-content">loading...</div>



             </div>
         </div>
     </div>

     <section id="aboutus">
         <br>
         <br>
         <br>
         <nav>
             <div class="grid grid4 add-gutters bottom">
                 <!-- adding grid for fire navigation elements -->
                 <a href="index.php" class="pad nav-item">StayComfortzz</a>
                 <a href="https://www.instagram.com/buunny98/" class="nav-item pad">Instagram</a> <!-- tag for an embedded link -->
                 <a href="https://www.instagram.com/buunny98/" class="nav-item pad">Facebook</a>
                 <!-- tag for an embedded link -->
                 <a href="https://www.instagram.com/buunny98/" class="nav-item pad">Twitter</a> <!-- tag for an embedded link -->
                 <a href="https://www.instagram.com/buunny98/" class="nav-item pad">Snapchat</a> <!-- tag for an embedded link -->
                 <a href="member.php" class="nav-item pad">Email</a>

             </div>
         </nav>
     </section>
 </body>


 <script>
     jQuery(document).ready(function() {
         jQuery("#target-content").load("pagination.php?page=1");
         jQuery("#pagination li").live('click', function(e) {
             e.preventDefault();
             jQuery("#target-content").html('loading...');
             jQuery("#pagination li").removeClass('active');
             jQuery(this).addClass('active');
             var pageNum = this.id;
             jQuery("#target-content").load("pagination.php?page=" + pageNum);
         });
     });
 </script>
 <style>
     .bottom {

         margin-top: -4rem;
     }

     .pad {
         padding-bottom: 3rem;
         text-rendering: optimizeSpeed;
         text-decoration: underline;
     }

     .grid {
         display: grid;
     }

     @media (min-width: 90rem) {
         .grid.grid1 {
             /*
      took the help from IAT 235 Notes
      */
             display: inline-block;
             grid-template-columns: 1fr;
             grid-template-rows: 2rem;
             grid-auto-flow: row;
         }
     }

     .center2 {

         text-align: center;
         margin: 4rem;

     }

     .pic {
         width: 900px;
         height: auto;
     }

     .pic2 {
         width: 100%;
         height: 100%
     }

     @media (min-width: 50rem) {
         .grid.grid4 {
             /*
    took the help from IAT 235 Notes
    */
             grid-template-columns: 4.5fr 0.7fr 1fr 1fr 1fr 1fr;
             grid-template-rows: auto;
             grid-auto-flow: row;
         }
     }
 </style>



 <script>
     filterSelection("all")
     // Took online help from https://www.w3schools.com/howto/howto_js_filter_elements.asp -->
     function filterSelection(c) {
         var x, i;
         x = document.getElementsByClassName("filterDiv");
         if (c == "all") c = "";
         for (i = 0; i < x.length; i++) {
             w3RemoveClass(x[i], "show");
             if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
         }
     }

     function w3AddClass(element, name) {
         var i, arr1, arr2;
         arr1 = element.className.split(" ");
         arr2 = name.split(" ");
         for (i = 0; i < arr2.length; i++) {
             if (arr1.indexOf(arr2[i]) == -1) {
                 element.className += " " + arr2[i];
             }
         }
     }

     function w3RemoveClass(element, name) {
         var i, arr1, arr2;
         arr1 = element.className.split(" ");
         arr2 = name.split(" ");
         for (i = 0; i < arr2.length; i++) {
             while (arr1.indexOf(arr2[i]) > -1) {
                 arr1.splice(arr1.indexOf(arr2[i]), 1);
             }
         }
         element.className = arr1.join(" ");
     }

     // Add active class to the current button 
     var btnContainer = document.getElementById("myBtnContainer");
     var btns = btnContainer.getElementsByClassName("btn");
     for (var i = 0; i < btns.length; i++) {
         btns[i].addEventListener("click", function() {
             var current = document.getElementsByClassName("active");
             current[0].className = current[0].className.replace(" active", "");
             this.className += " active";
         });
     }
 </script>

 <style>
     hr {
         border: 0.07rem solid rgb(112, 112, 112);
         background-color: rgb(112, 112, 112);
     }
 </style>