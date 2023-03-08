
<div class="center-wrap">
                  <div class="section text-center">
                    <h4 class="mb-4 pb-3">Sign Up</h4>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method ="POST" autocomplete="off">
                    <div 
                    style= "height: 200px; overflow-y: scroll;">
                    <div class="form-group">
                      <input type="text" name="logfname" class="form-style" placeholder="Your First Name" id="logfname" autocomplete="off">
                      <i class="input-icon uil uil-user"></i>
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="loglname" class="form-style" placeholder="Your Last Name" id="loglname" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="loguname" class="form-style" placeholder="Your User Name" id="loguname" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                      <i class="input-icon uil uil-at"></i>
                    </div>
                    <div class="form-group mt-2">
                      <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                      <i class="input-icon uil uil-lock-alt"></i>
                    </div>
                    <div class="form-group mt-2">
                      <input type="date" name="logdob" class="form-style" placeholder="Your Date of Birth" id="logdob" autocomplete="off">
                       
                    </div>
                    <div class="form-group mt-2">
                      <input type="text" name="logfathername" class="form-style" placeholder="Your Father's Name" id="logfathername" autocomplete="off">
                       
                    </div>
                    <input type="submit"  name="save" class="btn mt-4" value="Save" required />
                    </form>
                  </div>
                </div>