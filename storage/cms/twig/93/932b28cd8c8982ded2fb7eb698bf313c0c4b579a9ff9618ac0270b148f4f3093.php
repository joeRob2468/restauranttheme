<?php

/* /home/vagrant/Code/restauranttheme/themes/demo/layouts/default.htm */
class __TwigTemplate_3fea296c7a82f848b5a722a769cbb10e21f4fc3c02a86a64be1163fc80173cbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 14
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 15
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 25
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 26
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 34
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 35
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 36
        echo $this->env->getExtension('CMS')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 37
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 38
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 39
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/restauranttheme/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 39,  108 => 38,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  84 => 31,  80 => 30,  74 => 26,  72 => 25,  66 => 21,  62 => 20,  55 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>October CMS - {{ this.page.title }}</title>*/
/*         <meta name="description" content="{{ this.page.meta_description }}">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="author" content="OctoberCMS">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="generator" content="OctoberCMS">*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}">*/
/*         <link href="{{ 'assets/css/vendor.css'|theme }}" rel="stylesheet">*/
/*         <link href="{{ 'assets/css/theme.css'|theme }}" rel="stylesheet">*/
/*         {% styles %}*/
/*     </head>*/
/*     <body>*/
/* */
/*         <!-- Header -->*/
/*         <header id="layout-header">*/
/*             {% partial 'site/header' %}*/
/*         </header>*/
/* */
/*         <!-- Content -->*/
/*         <section id="layout-content">*/
/*             {% page %}*/
/*         </section>*/
/* */
/*         <!-- Footer -->*/
/*         <footer id="layout-footer">*/
/*             {% partial 'site/footer' %}*/
/*         </footer>*/
/* */
/*         <!-- Scripts -->*/
/*         <script src="{{ 'assets/vendor/jquery.js'|theme }}"></script>*/
/*         <script src="{{ 'assets/vendor/bootstrap.js'|theme }}"></script>*/
/*         <script src="{{ 'assets/javascript/app.js'|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/* */
/*     </body>*/
/* </html>*/
