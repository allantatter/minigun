<?php namespace Acme\Generators;

class DirectiveGenerator extends Generator {

    use JavascriptGeneratorTrait;

    protected $path = 'public/assets/scripts';

    protected $template = 'templates/angular/directive.js';

    protected $directivePath = 'directives';

    protected $scriptsBlockType = 'directives';
}
