<div class="col-lg-12 col-md-12 mx-auto">
        <p>  <h2> Espace reserv&eacute;</h2></p>
         
          <form name="user" id="user"  action="<?= Router::link('users/login')?>" method="post">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Login</label>
                <input type="text" name="login" class="form-control  value="" placeholder="Login" id="title" required data-validation-required-message="veuillez entrer le login."  >
               <!--  required data-validation-required-message="Please enter the title."-->
                  <p class="help-block text-danger"></p>
              </div>
            </div>
           <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Mode de passe   </label>
                <input type="password" name="password" title="Mot de passe" class="form-control"  placeholder="Mot de passe" id="pwd" required data-validation-required-message="S'il vous plait entrez le mot de passe.">
               
                <p class="help-block text-danger"></p>
              </div>
            </div>
         
            <div id="success"></div>
            <div class="form-group">
              <button  type="submit" class="btn btn-primary" id="sendMessageButton">Se connecter</button>
            </div>
          </form>
        </div>