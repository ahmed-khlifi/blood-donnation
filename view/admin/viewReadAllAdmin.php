<?php
            if(!$_SESSION['admin'] == 'admin'){
                header('location: index.php');
            }
?>
<table class="table w-50 mx-auto">
  <thead>
 
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Modifier</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    foreach($admins as $admin){
        echo '<tr>
        <td>'.$admin->getEmail().'</td>
        <td><a href="index.php?controller=admin&action=edite&email='.$admin->getEmail().'"><button class="btn btn-dark">Modifer</button></a></td>
        </tr>';
    }
  ?>
   
  </tbody>
</table>