
<h1 style="text-align: center; color:#00afec;"> LISTE DES BILLETS</h1>
<p></p><br/><br/>
<div class="row">
	<?php 
	$i = 0;
	foreach ($billets as $k => $v) {?>
	
			<div class="col-6">
		 		 	<article>
			  
							<div class="heading">
					           <!--  <a href=" <?php //Router::url("billets/view/id:{$v->id}/slug:{$v->slug}") ?>"> -->
					           <a href=" <?php echo Router::link('billets/view/'.$v->id);  ?>">
					           
					              <h2>
					               <?php echo $v->title ?>
					              </h2></a> 
					         </div>					
					         <div class="content">
					              <p>
					               <?php echo substr(htmlspecialchars_decode($v->content), 0 ,200).'...' ?>
					               <a class="more" href=" <?php echo Router::link('billets/view/'.$v->id);  ?>"> lire la suite  &rarr;</a>
					              </p>
					            
					            <p class="post-meta">publie le : 
					            <?php echo $v->date ?> </p>
					         </div>
					</article>
			 </div>     

		<?php $i++;
		if ($i == 2) {
			echo "<hr>";
			echo '<div class="w-100"></div>';
		}

	} ?>
</div>
 		
		<div class='row'  >
				<nav aria-label="Page navigation example">
				  <ul class="pagination">
				     <?php for ($i = 1; $i <= $page; $i++) {?>
				    <li class="page-item" <?php if ($i==$this->request->page) {
				    	echo 'class="active"';
				    }?>><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
				    <?php  }
				   // print_r( debug_backtrace());
				    ?>
				    </ul>
				</nav>
		 </div>


