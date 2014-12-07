<?php namespace Acme\Generators;

trait JavascriptGeneratorTrait {

    /**
     * @param $filename
     * @return array
     */
    public function generate($filename)
    {
        $response = [];

        $destPath = $this->path . '/' . $this->directivePath . '/' . $filename;

        $response = array_merge($response, $this->createMissingDirectories($destPath));

        $this->breakIfFileExists($destPath);

        $response[] = $this->createFile($destPath);

        $response[] = $this->addScriptTag($this->scriptsBlockType, $destPath);

        return $response;
    }

    /**
     * @param $destPath
     * @return string
     */
    public function createFile($destPath)
    {
        $this->filesystem->dumpFile($destPath, file_get_contents(__DIR__ . '/../' . $this->template));

        return '<info>File was created at ' . $destPath . '</info>';
    }

}
