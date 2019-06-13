<?php namespace ChananSystems\FileDownloads\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Response;
use ChananSystems\FileDownloads\Models\FileDownload;

class DownloadList extends ComponentBase{


    /**
     * A collection of files to download
     * @var Collection
     */
    public $downloads;

    public function componentDetails(){

        return [
            'name' => 'Download List',
            'description' => 'Simple File Download Listing'
        ];

    }

    public function defineProperties()
    {
        return [
            'filesPerPage' => [
                'title'             => 'Files to show per page',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Not valid',
                'default'           => '10',
            ]
        ];
    }

    public function onRun()
    {

        $this->downloads = $this->getFiles();

    }

    protected function getFiles()
    {

        return FileDownload::all();

    }

}