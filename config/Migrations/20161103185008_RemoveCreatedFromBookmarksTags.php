<?php
use Migrations\AbstractMigration;

class RemoveCreatedFromBookmarksTags extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('bookmarks_tags');
        $table->removeColumn('created');
        $table->update();
    }
}
