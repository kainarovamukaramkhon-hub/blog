
<?php require('DB.php');?>
<?php require('header.php');?> 
<?php $sql = 'SELECT * FROM `friends`';
     $result = mysqli_query($mysqli, $sql); ?>

        
            <table>
                <thead>
                <tr>
                <th>№</th>
                <th>family</th>
                <th>name</th>
                <th>surname</th>
                <th>telephone</th>
                <th>e-mail</th>
                <th>address</th>
                </tr>
                </thead> 
                    <?php $i=0;?>
                <?php while($row = mysqli_fetch_assoc($result)):?>
                <tr>
                <th> <?php echo $i++;?></th>
                <th><a href="card.php?id=<?=$row['id']?>"><?php echo $row['first name'];?></th></a>
                <th><?php echo $row['name'];?></th>
                <th><?php echo $row['last name'];?></th>
                <th><?php echo $row['phone'];?></th>
                <th><?php echo $row['email'];?></th>
                <th><?php echo $row['adres'];?></th>
                </tr>
                <?php endwhile;?>
            </table>
        </div>
        <?php require('footer.html');?>
