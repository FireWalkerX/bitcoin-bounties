<?php include('header.php'); if(@!$FATAL_ERROR): ?>

  <?php if (!isset($BOUNTYENTRY)): ?>
  
    <?php echo __(MSG_NO_BOUNTIES_YET) ?>

  <?php else: ?>

  <table>
    <tr>
    <td>
      <?php echo __(MSG_DESCRIPTION) ?>
    </td>
    
    <td>
      <?php echo __(MSG_COLLECTED) ?>
    </td>
    </tr>
    
    <?php foreach($BOUNTYENTRY as $ENTRY): ?>
    <tr>
      <td>
	<?php echo $ENTRY['DESC'] ?>
      </td>
      
      <td>
	<?php echo $ENTRY['COLLECTED'] ?>
      </td>
    </tr>
    <?php endforeach ?>
  </table>

  <?php endif ?>
  
  <p>
    <a href="<?php echo $LINK_PREFIX ?>/newbounty/">
      <?php echo __(MSG_ADD_BOUNTY) ?>
    </a>
  </p>

<?php endif; include('footer.php') ?>