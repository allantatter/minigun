<?php namespace Acme\Generators;

class ControllerGenerator extends Generator {

    use JavascriptGeneratorTrait;

    protected $path = 'public/assets/scripts';

    protected $template = 'templates/angular/controller.js';

    protected $directivePath = 'controllers';

    protected $scriptsBlockType = 'controllers';
}
