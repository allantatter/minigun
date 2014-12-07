<?php namespace Acme\Generators;

use Symfony\Component\Filesystem\Filesystem;

abstract class Generator {

    /**
     * @var Filesystem
     */
    protected $filesystem;

    protected $htmlPath = 'app/views/master.blade.php';

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    protected function createMissingDirectories($destPath)
    {
        $dirs = explode('/', $destPath);

        array_pop( $dirs ); // remove filename from array

        $previousPath = '';

        $response = [];

        foreach ($dirs as $dir)
        {
            if ($this->filesystem->exists($previousPath . $dir))
            {
                return $response;
            }

            $this->filesystem->mkdir($previousPath . $dir);

            $response[] = '<info>Directory was created at ' . $previousPath . $dir . '</info>';

            $previousPath .= $dir . '/';
        }

        return $response;
    }

    /**
     * Break the execution of the command when file exists
     *
     * @param $destPath
     */
    protected function breakIfFileExists($destPath)
    {
        if ($this->filesystem->exists($destPath))
        {
            echo 'File already exists at ' . $destPath . PHP_EOL;
            exit(1);
        }
    }

    /**
     * Add <script> tag into HTML
     *
     * @param $type
     * @param $filePath
     *
     * @return string
     */
    protected function addScriptTag($type, $filePath)
    {
        $html = file_get_contents($this->htmlPath);

        $htmlLines = explode(PHP_EOL, $html);

        foreach ($htmlLines as $key => $line)
        {
            $line = trim($line);

            if (preg_match('/<!-- end minigun:' . $type . ' -->/i', $line, $matches)) {
                $lineNoToInsertScriptTag = $key;
                break;
            }
        }

        if (!isset($lineNoToInsertScriptTag)) {
            return '<error><!-- minigun:' . $type . ' --> block was not found. We didn\'t know where to insert the script tag.</error>';
        }

        $httpPath = str_replace('public', '', $filePath);

        $tag = '        <script src="' . $httpPath . '"></script>'; // TODO: remove hardcoded whitespace before tag, get it from previous one

        $htmlLines = $this->addElementToArray($htmlLines, $tag, $lineNoToInsertScriptTag);

        $html = implode(PHP_EOL, $htmlLines);

        $this->filesystem->dumpFile($this->htmlPath, $html);

        return '<info>Script tag was added to HTML.</info>';
    }

    private function addElementToArray($array, $element, $pos)
    {
        array_splice($array, $pos, 0, [$element]);

        return $array;
    }
}