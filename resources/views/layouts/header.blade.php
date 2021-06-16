 <!-- header -->
 <div class="header">
     <!-- top promo -->
     <div class="top-promo">

     </div>
     <!-- end top promo -->

     <!-- header-form -->
     <div class="header-form">
         <div class="container">
             <div class="row">
                 <div class="col-md-2">
                     <a class="logo">
                         <img class="logo-vtcA" src="img/icon-header/Logo.png" alt="">
                     </a>
                 </div>
                 <div class="col-md-5 toggle">

                     <div class="dropdown">
                         <button onclick="myFunction()" class="dropbtn">Category</button>
                         <div id="myDropdown" class="dropdown-content">
                             <a href="admin/theloai/danhsach">Danh Sách Thể Loại</a>
                             <a href="admin/theloai/getThem">Thêm Thể Loại </a>
                             <a href="admin/loaitin/danhsach">Danh sách Loại Tin</a>
                             <a href="admin/loaitin/getThem">Thêm Loại Tin</a>
                             <a href="admin/tintuc/danhsach">Danh sách Tin Tức</a>
                             <a href="admin/tintuc/them">Thêm Tin Tức</a>
                         </div>
                     </div>
                   

                 </div>
                 <div class="col-md-3 search">
                     <div class="form-search">
                         <form id="search_form" action="https://tiki.vn/search" method="get">

                         </form>
                         <div id="search-seller">
                             <div data-reactroot="" class="seller-search hidden"></div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-1">
                     <div class="header-link">
                         <div class="user-profile item" id="header-user">
                             <div data-reactroot="">
                                 <div>
                                     <a href="Login.html"><img class="icon-style-1 icon-user" src="img/icon-header/dangNhapTaiKhoan-icon.png" alt="">
                                         <b style="color: aliceblue;">Đăng nhập</b><br>
                                         <small style="color: aliceblue;">Tài khoản</small></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-1">
                     <div class="header-link">
                         <div class="user-profile item" id="header-user">
                             <div data-reactroot="">
                                 <div>
                                     <a href="register.html"><img class="icon-style-1 icon-user" src="img/icon-header/dangNhapTaiKhoan-icon.png" alt="">
                                         <b style="color: aliceblue;">Đăng kí</b><br>
                                         <small style="color: aliceblue;">Tài khoản</small></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>

         </div>
         <div class="main-nav">
             <div class="container">
                 <div class="row">
                     <div class="main-nav-wrap">

                     </div>
                 </div>
             </div>
         </div>
     </div>
     
     <script>
         /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
         function myFunction() {
             document.getElementById("myDropdown").classList.toggle("show");
         }

         // Close the dropdown if the user clicks outside of it
         window.onclick = function(event) {
             if (!event.target.matches('.dropbtn')) {
                 var dropdowns = document.getElementsByClassName("dropdown-content");
                 var i;
                 for (i = 0; i < dropdowns.length; i++) {
                     var openDropdown = dropdowns[i];
                     if (openDropdown.classList.contains('show')) {
                         openDropdown.classList.remove('show');
                     }
                 }
             }
         }
     </script>
     <!-- end header-form -->