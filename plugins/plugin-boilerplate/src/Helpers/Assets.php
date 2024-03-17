<?php

namespace Wp\PluginBoilerplate\Helpers;

class Assets
{
    protected $ManifestPath;
    protected $ManifestFile;

    public function __construct()
    {
        $this->ManifestFile = json_decode(file_get_contents(plugin_dir_path(__DIR__) . "../dist/manifest.json"), true);
        $this->ManifestPath = dirname(plugin_dir_url(__DIR__). "../dist/manifest.json");
    }

    public function getHashedAssetFile(string $asset)
    {
        $path = $this->ManifestPath;
        $file = substr($this->ManifestFile[$asset], 2);
        return $path ."/". $file;
    }

}
