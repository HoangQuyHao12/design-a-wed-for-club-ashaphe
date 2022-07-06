<html>
              <head>
                            <title> Đăng nhập và đăng kí người dùng </title>
                            
              </head>
              <body>
                            <div class="container">
                                          <div class="login-box">
                                          <div class ="row"> 
                                          <div class="col-md-6 login-left">
                                                     <h2>Login here</h2> 
                                                     <form action="validation.php" method="POST">
                                                                   <div class="form-group">
                                                                                 <label >Username</label>
                                                                                 <input type="text" name="user" class="form-control" required>

                                                                   </div>
                                                                   <div class="form-group">
                                                                                 <label >Password</label>
                                                                                 <input type="password" name="password" class="form-control" required>

                                                                   </div>
                                                                   <button type="submit" class="btn btn-primary" color="blue">Login</button>
                                                     </form>  
                                          </div>
                                          <div class="col-md-6 login-right">
                                                     <h2>Register Here</h2> 
                                                     <form action="dangki.php" method="POST">
                                                                   <div class="form-group">
                                                                                 <label >Username</label>
                                                                                 <input type="text" name="user" class="form-control" required>

                                                                   </div>
                                                                   <div class="form-group">
                                                                                 <label >Password</label>
                                                                                 <input type="password" name="password" class="form-control" required>

                                                                   </div>
                                                                   <button type="submit" class="btn btn-primary" >Rigister</button>

                                                     </form>  
                                          </div>

                                          </div>
                                          </div>

                            </div>
                            
              </body>
</html>