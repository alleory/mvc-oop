
<?php foreach ($this->data['item'] as $item): ?>
    <h1><?php echo $item->title; ?></h1>
    <div><?php echo $item->author; ?></div>
<?php endforeach; ?>