<?php namespace Acme\Generators;

class DirectiveGenerator extends Generator {

    private $path = 'public/assets/scripts';

    private $template = 'src/templates/angular/directive.js';

    private $directivePath = 'directives';

    public function generate($filename)
    {
        $response = [];

        $destPath = $this->path . '/' . $this->directivePath . '/' . $filename;

        $response = array_merge($response, $this->createMissingDirectories($destPath));

        $this->breakIfFileExists($destPath);

        $response[] = $this->createFile($destPath);

        $response[] = $this->addScriptTag('directives', $destPath);

        return $response;
    }

    /**
     * @param $destPath
     * @return string
     */
    public function createFile($destPath)
    {
        $this->filesystem->dumpFile($destPath, file_get_contents($this->template));

        return '<info>File was created at ' . $destPath . '</info>';
    }
}