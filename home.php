<?php include 'template/header.php'; ?>

<?php
    $sql = "SELECT * FROM table_board INNER JOIN table_member ON table_board.board_member_id=table_member.member_id";
    $query = $conn->query($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);



?>
<div class="container" >
    <h1>Home page.</h1>
    <h2>Hello <?php echo $_SESSION['username']; ?></h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">topic</th>
      <th scope="col">Data</th>
      <th scope="col">Author</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($results as $key => $value): ?>
  <tr>
    <th scope="row"><?php echo $key+1 ?></th>

    <td>
        <a href="board.php?boardId=<?php echo $value['board_id']; ?>">
        <?php echo $value['board_topic']; ?>
        </a>
    </td>

    <td>
        <?php 
         date_default_timezone_set("Asia/Bangkok");
         $date = new DateTime($value['board_data']);
         echo $date->format('D,d-m-Y'); 
        ?>
    </td>
    <td>
        <?php echo $value['member_username']; ?>
    </td>

  </tr>

  <?php endforeach; ?>
  </tbody>
</table>
</div>
<?php include 'template/footer.php'; ?>