<?php
// namespace config;
require_once APP_ROOT . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
use ChemMVC\startup;
use ChemMVC\bundleConfig;
use ChemMVC\chemistry;
/**
 *
 */
class Main
{
    public $config;
    public $chem;

    function __construct()
    {
        $customVars = array(
            'ROOT' => '../app',
            'PROJECT_NAMESPACE' => 'app', // This should utilize a 'psr' autoloaded namespace *Required for chemistry project to work correctly
            'ENV_DETAILS_PATH' => APP_ROOT.DIRECTORY_SEPARATOR.'.env',
            'CONTROLLER_NAMESPACE' => 'controllers',
            // 'CORE_NAMESPACE' => 'core'
        );
        // Instantiate a startup configuration object
        $this->config = new startup($customVars);

        $this->config->bundleConfig->createBundle('jQuery');
        $this->config->bundleConfig->createBundle('mainCss');

        $this->config->bundleConfig->bundles['jQuery']->start(); ?>
            <script src="../app/scripts/ko.min.js"> </script>
            <script src="../app/scripts/jquery.min.js"> </script>
        <?php $this->config->bundleConfig->bundles['jQuery']->end();

                //<link rel="stylesheet" href="../app/styles/squarePaymentStyles.css">
        $this->config->bundleConfig->bundles['mainCss']->start(); ?>
            <link rel="stylesheet" media="screen" href="../app/styles/main.css">
        <?php $this->config->bundleConfig->bundles['mainCss']->end();

        // Instantiate Chemistry MVC - pass in config
        $this->chem = new chemistry($this->config);
    }
}
