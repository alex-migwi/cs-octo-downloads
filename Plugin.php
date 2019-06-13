<?php namespace ChananSystems\FileDownloads;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'ChananSystems\FileDownloads\Components\DownloadList' => 'downloadlist',
        ];
    }

    public function registerSettings()
    {
    }
}