		<div class="row">
		
				<div class="post-preview">
				              <h2 class="post-title">
				               <?php echo $billets->title ?>
				              </h2>
				              <p>
				               <?php echo $billets->content ?>
				              </p>
				            
				            <p class="post-meta">publié le : 
				            <?php echo $billets->date ?> </p>
				            
				 </div>
				         <hr>
		</div>
	       
<div class="row align-center"   id='rows'>
	<div class="panel panel-default">
  		<div class="panel-heading">
 		 	<div class="row">
				  <div class="col-sm-6">Commenter ce billet</div>
				 <div class="col-sm-6" ><button class="btn btn-success"  id='btn'>commenter </button> </div>
			 </div> 
  
 	 </div>
  <div id="panel-body2" class="panel-body">
    <form name="comment" id="comment"  action="<?= Router::link('billets/addComment/')?>" method="post" >
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Auteur</label>
                <input type="text" name="author" class="form-control <?= isset($error['author'])? $error['author']:''  ?>"  placeholder="Auteur" id="author" required data-validation-required-message="SVP entrez le nom de l'auteur."  >
               <!--  required data-validation-required-message="Please enter the title."-->
                <?= isset($message['author'])? $message['author']:''  ?>
                   </div>
            </div>
          
            <input type="hidden" name="idbillet" class="form-control" value="<?= isset($billets->id)? $billets->id : null  ?>" >
             
             <div class="control-group">
              <div class="form-group floating-label-form-group controls">
               <label>Commentaire</label>
                <textarea rows="5" cols="80" class="form-control" name="content"  placeholder="Entrez votre commentaire" id="content" required data-validation-required-message="Entrez votre commentaire ."></textarea>
                
           	</div>
            </div>
            
            
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Signaler &agrave; l'auteur </label>
               <input type="checkbox" name="signaled"  class="checkbox" title="signaled"   id="signaled" />  
                 <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            
            
            <div class="form-group" style="text-align: center;">
              <button  type="submit"     class="btn btn-primary" id="sendMessageButton">Valider</button>
            </div>
          </form>
	</div>	        
	</div>
</div><hr>

<?php foreach ($comments as $k=>$v) {
			$signaled = '';
			if ($v->signaled ==0) {
				$signaled = '<a href="'.router::link('billets/signaled/'.$v->id.'/'.$v->idbillet).'"> <span class="fa fa-bell-o" style="text-decoration: blink;"> Signaler </span></a>';
			}
			if($v->nbreJours <=1){
				$duree = Date('d-m-Y H:i:s', strtotime($v->date) );
				$duree2 = 'le '.$duree;
			}else {
				$duree = $v->nbreJours;
				$duree2 = 'depuis '.$duree.' jours';
			}
			
	?>
		
		<div class="panel panel-success">
		  <div class="panel-heading">
			  <div class="row">
				  <div class="col-sm-6"><?php echo ' <span class="glyphicon glyphicon-user"> '.$v->author.' </span> '?></div>
				 <div class="col-sm-3" style="text-decoration: blink;"><?php echo $signaled ?></div>
				 <div class="col-sm-3" style="text-align: right; font-style:italic; font-size: 17px;"> <?php echo '  Post&eacute;  '.$duree2  ?></div>
				</div> 
		  </div>
		  <div id="panel-body" class="panel-body"><?php echo $v->content ?></div>
		  <div class="panel-footer"></div>
		</div>
		<hr>
<?php } ?>


