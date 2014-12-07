<?php namespace Acme\Generators;

class ServiceGenerator extends Generator {

    use JavascriptGeneratorTrait;

    protected $path = 'public/assets/scripts';

    protected $template = 'templates/angular/service.js';

    protected $directivePath = 'services';

    protected $scriptsBlockType = 'services';
}
