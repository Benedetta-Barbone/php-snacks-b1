
    <?php include __DIR__  . ('/alunni/alunni.php')?> 
    <ul>
        <?php foreach ($alunni as $alunno) { ?>
        <li>
            <?php echo $alunni['nome'] ?>  <?php echo $alunni['cognome']; ?> <?php echo $alunni['voti'] ?>                
        </li>
        <?php } ?>
    </ul>
