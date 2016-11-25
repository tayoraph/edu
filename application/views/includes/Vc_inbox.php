


   <div class="message_wrapper">               

        <h4 class="heading"> 

    <caption
    >Read message Student</caption> 

 <br />
  <br />


<table cellspacing="5" border="0" width="700" align="center">
  <thead>
     <th>S/n</th>
    <th>Sender</th>
    <th>Username</th>
    <th>Message</th>
    <th>Date</th>

    <th>Action</th>
 
    
  </thead>
  


    <?php

    $i=1;

   
foreach ($mail as $r)  {

      echo "<tr>


       <td>$r->id</td>
      <td>$r->sender</td>
      <td>$r->sender_username</td>
      <td><a href='".site_url('Edusoft_ctrl/view_vc_message')."/$r->id'>$r->mail_subject</a></td>
      <td>$r->date</td>
      <td align='center'>
        <a href='".site_url('skssite_ctrl/edit')."/$r->id'>Reply</a> |
         <a href='".site_url('skssite_ctrl/delete')."/$r->id'>Forward </a> |
         <a href='".site_url('skssite_ctrl/delete')."/$r->id'>Delete </a>

       </td>

      </tr>";
      $i++;
    }
    ?>

    </table>