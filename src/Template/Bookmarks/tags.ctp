<section class="content-header">
  <h1>
    Bookmarks tagged with
      <small><?= $this->Text->toList($tags) ?></small>
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<section class="content">
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <?php foreach ($bookmarks as $bookmark): ?>
            <div class="callout callout-info">
                <h4><?= $bookmark->title ?></h4>
                <?= $this->Text->autoParagraph($bookmark->description) ?>

                <?= $this->Html->link($bookmark->url, $bookmark->url) ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</section>