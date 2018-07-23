<h1> <?= $total ?> Billet(s)</h1>
<hr>
<p><a class="btn btn-success" href="<?= Router::link('admin/billets/edit') ?>"  > Ajouter</a> </p>
 
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Titre</th>
      <th scope="col">publier</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($billets as $v) {?>
  	
 
    <tr>
      <th scope="row"><?= $v->id ?></th>
      <td><?= $v->title ?></td>
      <td>  <?php if($v->published==1){ ?>
     <span style="color: green" class="glyphicon glyphicon-check"> </span> <?php  } else { ?>
    <span style="color: red" class="glyphicon glyphicon-unchecked"> </span>
     <?php }?>
     </td>
      <td >
      <a class="btn btn-default"  style="color: blue"  href="<?=  Router::link('admin/billets/edit/'.$v->id) ?>"><span class="glyphicon glyphicon-edit">Editer</span></a>
      <a onclick="confirm('Voulez vous vraiment supprimer ce billet ?')"   style="color: red" class="btn btn-default" href="<?= Router::link('admin/billets/delete/'.$v->id) ?>"><span class="glyphicon glyphicon-remove">Supprimer</span></a>
     
     <!--  <a class="btn btn-primary" href="<?php //echo BASE_URL.DS.'admin/billets/edit/'.$v->id ?>">Editer</a>
     
      <a onclick="confirm('Voulez vous vraiment supprimer ce billet ?')" class="btn btn-danger" href="<?php // echo BASE_URL.DS.'admin/billets/view/delete/'.$v->id ?>">Supprimer</a>
      -->
      </td>
    </tr>
    <?php }?>
     </tbody>
</table>

