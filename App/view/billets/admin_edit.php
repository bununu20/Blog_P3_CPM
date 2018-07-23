<div class="col-lg-8 col-md-10 mx-auto">
          <p>Editer le billet <?=   isset($this->request->data->title)? " : ".$this->request->data->title : ''  ?></p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        
          <form name="billet" id="billet"  action="<?= Router::link('admin/billets/edit/')?>" method="post" >
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Titre</label>
                <input type="text" name="title" class="form-control <?= isset($error['title'])? $error['title']:''  ?>" value="<?=  isset($this->request->data->title)? $this->request->data->title : ''  ?>" placeholder="Titre" id="title" required data-validation-required-message="Please enter the title."  >
               <!--  required data-validation-required-message="Please enter the title."-->
                <?= isset($message['title'])? $message['title']:''  ?>
                <p class="help-block text-danger"></p>
              </div>
            </div>
           <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>URL   </label>
                <input type="text" name="slug" title="URL" class="form-control <?= isset($error['slug'])? $error['slug']:'' ?>" value="<?=  isset($this->request->data->slug)? $this->request->data->slug : ''  ?>" placeholder="Lien du billet" id="slug" required data-validation-required-message="Please enter the slug.">
                <?= isset($message['slug'])? $message['slug']:''  ?>
                <p class="help-block text-danger"></p>
              </div>
            </div>
         
           
             <input type="hidden" name="id" class="form-control" value="<?= isset($this->request->data->id)? $this->request->data->id : null  ?>" >
                 
          
          
            
             
                <label>Contenu</label>
                <textarea rows="5" class="form-control" name="content"  placeholder="Message" id="wysiwyg" required data-validation-required-message="Please enter the content."><?= isset($this->request->data->content)? $this->request->data->content : ''  ?></textarea>
                <p class="help-block text-danger"></p>
           
            <br>
            
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Publier</label>
               <input type="checkbox" name="published"  class="checkbox" title="published"  <?php  (isset($this->request->data->published) && ($this->request->data->published ==1))? "checked" : '';  ?>   id="published" /> Publier
                 <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            
            <div id="success"></div>
            <div class="form-group">
              <button  type="submit"     class="btn btn-primary" id="sendMessageButton">Enregistrer</button>
            </div>
          </form>
        </div>
        
      <script type="text/javascript">
      function get_content() {
  		console.debug(billet.content.value);
  		Alert(billet.content.value);
  		 }
      </script>