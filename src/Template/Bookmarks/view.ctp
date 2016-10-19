<section class="content-header">
  <h1>
    <?php echo __('Bookmark'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title"><?php echo __('Information'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                    <dt><?= __('User') ?></dt>
                    <dd><?= $bookmark->has('user') ? $bookmark->user->id : '' ?></dd>
                    <dt><?= __('Title') ?></dt>
                    <dd><?= h($bookmark->title) ?></dd>
                    <dt><?= __('Description') ?></dt>
                    <dd><?= $this->Text->autoParagraph(h($bookmark->description)); ?></dd>
                    <dt><?= __('Url') ?></dt>
                    <dd><?= $this->Text->autoParagraph(h($bookmark->url)); ?></dd>
                    </dl>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
</section>
