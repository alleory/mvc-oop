<?php foreach ($items as $item): ?>
    <h2><?php echo $item->title; ?></h2>
    <h5><?php echo $item->author; ?></h5><br>
    <p><?php echo $item->content; ?></p><br>
    <a href="one/<?php echo $item->id; ?>">Read more</a><br><br>
<?php endforeach; ?>
