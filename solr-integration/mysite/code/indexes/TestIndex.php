<?php

class TestIndex extends SolrIndex {

    function init() {
        //$this->addClass('SiteTree');
        //$this->addClass('StaffMember');
        //$this->addClass('GalleryPage');
		$this->addClass('File');

        //$this->addAllFulltextFields();
		$this->addFulltextField('FileContent');
		//$this->addStoredField('FileContent', 'HTMLText');
    }

}