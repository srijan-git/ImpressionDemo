   <style>
       .modal {
           position: absolute;
           top: 100px;
           right: 100px;
           bottom: 0;
           left: 0;
           z-index: 10040;
           overflow: auto;
           overflow-y: auto;
       }
   </style>
   <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <img src="images\logo\720 Black.png" width="200" height="90" alt="" srcset="" class="img-responsive">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body mx-3">
                   <section class="container-fluid bg">
                       <section class="row justify-content-center">
                           <section class="col-12"></section>
                           <form class="form-container">
                               <div class="form-group row">
                                   <!--<label for="inputEmail3" class="col-sm-2 col-form-label" >Username</label>-->
                                   <!--replaced this line with the below-->
                                   <p class="text-justify">Username</p>
                                   <div class="col-sm-9">
                                       <!--value changed from 10 to 9-->
                                       <input type="email" class="form-control" id="inputEmail3">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <!--<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>-->
                                   <!--replaced this line with the below-->
                                   <p class="text-justify">Password </p>
                                   <div class="col-sm-9">
                                       <!--value changed from 10 to 9-->
                                       <input type="password" class="form-control" id="inputPassword3">
                                       <small id="PasswordHelpBlock" class="form-text text-muted">
                                           <a href="">Forgot Password</a>
                                       </small>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-sm-10">
                                       <div class="form-check">
                                           <input class="form-check-input" type="checkbox" id="gridCheck1">
                                           <label class="form-check-label" for="gridCheck1">
                                               Remember Me
                                           </label>
                                       </div>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-sm-10">
                           </form>
                       </section>
                   </section>
                   </section>

               </div>
               <div class="modal-footer d-flex justify-content-center">
                   <button class="btn btn-primary">Login</button>
               </div>
           </div>
       </div>
   </div>

   <div class="text-center">
       <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
           Modal Login Form</a>
   </div>