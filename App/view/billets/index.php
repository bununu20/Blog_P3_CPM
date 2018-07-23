

	<div id="primary" class="hentry group wrapper-content" role="main">
                    <?php foreach ($billets as $k => $v) {?>
                        <div class="one-fourth">
	                      <a href=" <?php echo Router::link('billets/view/'.$v->id);  ?>">  
	                          <h3><?php echo $v->title ?></h3></a>
	                             <p>
	                             <?php echo substr( $v->content, 0 ,50).'...' ?>
			               <a href=" <?php echo Router::link('billets/view/'.$v->id);  ?>"> lire la suite  &rarr;</a>
	                             </p>
	                             
                        </div>
                        <?php } ?>
	</div>




