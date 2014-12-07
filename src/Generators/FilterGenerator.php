<?php namespace Acme\Generators;

class FilterGenerator extends Generator {

    use JavascriptGeneratorTrait;

    protected $path = 'public/assets/scripts';

    protected $template = 'templates/angular/filter.js';

    protected $directivePath = 'filters';

    protected $scriptsBlockType = 'filters';
}
