<?php require('DB.php');?>
<?php require('header.php');?> 
<?php $sql = 'SELECT * FROM `users` WHERE 1';
     $result = mysqli_query($mysqli, $sql); ?>

        
            <table>
                <thead>
                <tr>
                <th>id</th>
                <th>login</th>
                <th>e-mail</th>
                <th>role</th>
                <th>Присвоить роль читателя</th>
                </tr>
                    </thead> 
                <?php while($row = mysqli_fetch_assoc($result)):?>
                <tr>
                <th><?php echo $row['id'];?></th>
                <th><?php echo $row['login'];?></th>
                <th><?php echo $row['email'];?></th>
                <th><?php echo $row['role'];?></th>
                <th><a href="query.php?role=<?=$row['id'];?>">OK</a></th>
                </tr>
                <?php endwhile;?>
            </table>
        </div>
        <?php require('footer.html');?>
