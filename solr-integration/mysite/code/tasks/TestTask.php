<?php

class TestTask extends BuildTask {

    public function run($request) {

		DB::query("DELETE FROM File");
		DB::query("DELETE FROM SimpleObject");

        $page = new Page(array('Content' => 'Document 1.'));
        $page->write();

        $page = new SiteTree(array('Content' => 'Document 2.'));
        $page->write();

		$file = new File();
		$file->Filename = 'assets/test.pdf';
		$file->write();

		$filename = 'assets/test/test.txt';
		$fh = fopen(BASE_PATH . '/' . $filename, "w");
		fwrite($fh, 'Of properly carriage shutters ye as wandered up repeated moreover');
		fclose($fh);

		$file = new File();
		$file->Filename = $filename;
		$file->ParentID = Folder::find_or_make('/test')->ID;
		$file->write();

		$o = new SimpleObject();
		$o->FileID = $file->ID;
		$o->FileName = BASE_PATH . '/assets/test.pdf';
		$o->write();
    }

}