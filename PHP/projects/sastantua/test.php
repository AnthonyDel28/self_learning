<table>
<?php
$i=0;
$columns = array_column($members, 'surname');
array_multisort($columns, SORT_ASC, $members);

    foreach($members as $member){
        ?> <tr>
                <td><?php echo ' ' ;?></td>
            <?php  foreach($member as $key => $files){
                ?>
                 <td><?php echo ucfirst($key);
                   } break;
                    ?></td>
            </tr> <?php } ?>

    <?php

         foreach($members as $member){
            if($i%2==0){ ?>
                <tr class="color">
                 <td><?php echo ++$i;?></td>
                 <?php
                foreach($member as $key => $files){
                    ?>
                     <td> <?php echo $files;
                }
                     ?></td>
                </tr>
         <?php }
         else{

         ?> <tr>
        <td><?php echo ++$i;?></td>
        <?php
        foreach($member as $key => $files){
        ?>
        <td> <?php echo $files;
            }
            ?></td>
    </tr><?php }}
         ?>
</table>