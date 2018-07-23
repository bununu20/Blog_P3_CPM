<div id="primary" class="hentry group wrapper-content" role="main">
<h1 style="text-align: center; color: #00afec;"> TOUS LES EPISODES</h1>


<?php 
$i = 0;
foreach ($billets as $k => $v) {?>
	
		<div class="two-fourth">

		
		           <!--  <a href=" <?php //Router::url("billets/view/id:{$v->id}/slug:{$v->slug}") ?>"> -->
		           <a href=" <?php echo Router::link('billets/view/'.$v->id);  ?>">
		           
		              <h3>
		               <?php echo $v->title ?>
		              </h3></a>
		              <p>
		               <?php echo substr( $v->content, 0 ,100).'...' ?>
		               <a href=" <?php echo Router::link('billets/view/'.$v->id);  ?>"> lire la suite  &rarr;</a>
		              </p>
		            
		            <p class="post-meta">publié le : 
		            <?php echo $v->date ?> </p>
		         
		
		    </div>     
<?php $i++;
if ($i == 2) {
	echo "<hr>";
}

} ?>
 <hr>
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
</div>

