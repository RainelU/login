<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog center" role="document">
      <div class="modal-content">
          <button type="button" class="close X-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <div class="modal-body">
        	<div id="welcome-admin"></div>
          <form class="form" method="post" action="login.php">
          	<div class="div-inp-name left-addon" style="display: flex; flex-wrap: wrap;">
				      <i id="i-user-login" class="fa fa-user i-conf"></i>
          		<input type="email" placeholder="Ingress Email..." name="email-login" class="inp-name" id="email-login">
          		<div id="div-name-login"></div>
          	</div>
          	<div class="div-inp-pass left-addon">
          		<i id="i-pass-login" class="fa fa-key"></i>
          		<input type="password" placeholder="Ingress Password..." name="pass-login" class="inp-pass" id="pass-login">
          		<div id="div-pass-login"></div>
          	</div>
          	<div class="form-btn">
          		<button class="btn-login" id="btn-login">LOG IN</button>
          	</div>
          	<div class="social-btn">
				<button class="btn-facebook"><i class="fa fa-facebook"></i><a href="https://www.facebook.com"> FACEBOOK</a></button>
				<button class="btn-google"><i class="fa fa-google"></i><a href="https://google.co.ve"> GOOGLE</a></button>
			</div>
			<a href="#Register" data-toggle="modal" id="a-event" data-target="#Register" class="a-createacc">CREATE ACCOUNT</a>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog center" role="document">
      <div class="modal-content">
        <button id="btn-X" stype="button" class="close X-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <div class="modal-body">
          <form class="form" method="post" action="registro.php">
             <div class="div-inp-name left-addon">
              <i class="fa fa-user i-conf"></i>
              <input type="text" placeholder="Firstname" name="firstname-reg" class="inp-name" id="firstname-reg" required>
              <div class="" id="div-label-firstname">
              </div>
            <div class="div-inp-name left-addon" style="display: flex; flex-wrap: wrap;">
              <i class="fa fa-user i-conf"></i>
              <input type="text" placeholder="Username" name="name-reg" class="inp-name" id="name-reg" required>
              <div class="" id="div-label-name">
                
              </div>
            </div>
            <div class="div-inp-name left-addon" style="display: flex; flex-wrap: wrap;">
              <i class="fa fa-inbox i-conf"></i>
              <input type="email" placeholder="Email" name="email-reg" class="inp-name" id="email-reg" required>
              <div id="div-label-email"></div>
            </div>
            <div class="div-inp-pass left-addon">
              <i class="fa fa-key"></i>
              <input type="password" placeholder="Password" name="pass-reg" class="inp-pass" id="pass-reg" required>
              <div id="div-label-pass"></div>
            </div>
            <div class="div-inp-pass left-addon">
              <i class="fa fa-key"></i>
              <input type="password" placeholder="Confirm Password" id="confirmpass-reg" name="confirmpass-reg" class="inp-confirmpass" required>
              <div id="div-label-confirmpass"></div>
            </div>
            <div class="div-checkbox">
              <input type="checkbox" name="checkbox" id="acept" required>
              <label for="acept">Acepto los términos y las condiciones</label>
            </div>
            <div class="form-btn">
              <button class="btn-login" id="btn-register">CREATE ACCOUNT</button>
            </div>

            <div class="social-btn">
              <button class="btn-facebook"><i class="fa fa-facebook"></i><a href="https://www.facebook.com"> FACEBOOK</a></button>
              <button class="btn-google"><i class="fa fa-google"></i><a href="https://google.co.ve"> GOOGLE</a></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>