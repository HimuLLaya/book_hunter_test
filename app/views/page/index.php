<div>
  <h2>Latest Books</h2>
  <ul>
    <?php foreach ($posts as $post) : ?>
      <li>
        <a href="?bookID=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>