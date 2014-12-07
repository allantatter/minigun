<?php namespace Acme\Generators;

class ValidatorGenerator extends Generator {

    use JavascriptGeneratorTrait;

    protected $path = 'public/assets/scripts';

    protected $template = 'templates/angular/validator.js';

    protected $directivePath = 'validators';

    protected $scriptsBlockType = 'validators';
}
