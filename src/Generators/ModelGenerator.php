<?php namespace Acme\Generators;

class ModelGenerator extends Generator {

    use JavascriptGeneratorTrait;

    protected $path = 'public/assets/scripts';

    protected $template = 'templates/angular/model.js';

    protected $directivePath = 'models';

    protected $scriptsBlockType = 'models';
}
