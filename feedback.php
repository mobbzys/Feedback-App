<?php 

include 'inc/header.php'

?>

    <h2>Past Feedback</h2>

    <?php 
    $sql = 'SELECT * FROM Feedback';
    $result = mysqli_query($conn, $sql);
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?> 

    <?php if(empty($Feedback)): ?> 
      <p class="lead mt3">There is no feedback, sorry</p>
    <?php endif; ?>  

    <?php foreach($Feedback as $item): ?>
      
    <div class="card my-3 w-75">
      <div class="card-body">
       <?php echo $item['body']; ?>
       <div class="text-secondary mt-2">
        By <?php echo $item['name']; ?><?php $item['data']; ?>
       </div>
      </div>
    </div>

    <?php endforeach; ?>
    
      
<?php 

include 'inc/footer.php'    

?>
