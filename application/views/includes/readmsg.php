


   <div class="message_wrapper">               

        <h4 class="heading"> 

    <caption
    >Read message Student</caption> 

 <br />
  <br />

<?php foreach ($read as $r) : {?>

<table cellspacing="5" border="0" width="700" align="center">

  <thead>
     <th>S/n</th>

     <td><?php echo $r->id; ?></td>

     </thead>

     <thead>
    <th>Sender</th>
     <td><?php echo $r->sender;?></td>
     </thead>

    <thead>
    <th>username</th>
     <td><?php echo $r->sender_username;?></td>
     </thead>


  <thead>
    <th>message</th>
     <td><?php echo $r->message;?></td>
     </thead>

    

 
    
 
  <?php };  endforeach; ?>

  