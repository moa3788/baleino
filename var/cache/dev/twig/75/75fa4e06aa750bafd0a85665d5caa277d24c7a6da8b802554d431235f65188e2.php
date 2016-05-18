<?php

/* base.html.twig */
class __TwigTemplate_41c9470707c4f36e957b935d0bf5852ab328e952e481673ce1324b19f062e9d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'toolbar' => array($this, 'block_toolbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ff9f9595c4fdefa1cf903f04b40022deb76aa6d0d4ca51dee35b8c4b8afa062 = $this->env->getExtension("native_profiler");
        $__internal_3ff9f9595c4fdefa1cf903f04b40022deb76aa6d0d4ca51dee35b8c4b8afa062->enter($__internal_3ff9f9595c4fdefa1cf903f04b40022deb76aa6d0d4ca51dee35b8c4b8afa062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
    \t";
        // line 18
        $this->displayBlock('menu', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        <div 
    </body>
</html>
";
        
        $__internal_3ff9f9595c4fdefa1cf903f04b40022deb76aa6d0d4ca51dee35b8c4b8afa062->leave($__internal_3ff9f9595c4fdefa1cf903f04b40022deb76aa6d0d4ca51dee35b8c4b8afa062_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f8586a8a2155e0f8f247cf444e559df0b44da5f8e5e6e72b6fc197268bade7e = $this->env->getExtension("native_profiler");
        $__internal_5f8586a8a2155e0f8f247cf444e559df0b44da5f8e5e6e72b6fc197268bade7e->enter($__internal_5f8586a8a2155e0f8f247cf444e559df0b44da5f8e5e6e72b6fc197268bade7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5f8586a8a2155e0f8f247cf444e559df0b44da5f8e5e6e72b6fc197268bade7e->leave($__internal_5f8586a8a2155e0f8f247cf444e559df0b44da5f8e5e6e72b6fc197268bade7e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_943c162e20e3262834b9d47784f03353b7258771464fa563080a364f2f1a86cc = $this->env->getExtension("native_profiler");
        $__internal_943c162e20e3262834b9d47784f03353b7258771464fa563080a364f2f1a86cc->enter($__internal_943c162e20e3262834b9d47784f03353b7258771464fa563080a364f2f1a86cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        \t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        \t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/site.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_943c162e20e3262834b9d47784f03353b7258771464fa563080a364f2f1a86cc->leave($__internal_943c162e20e3262834b9d47784f03353b7258771464fa563080a364f2f1a86cc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e15fa70bcdc5e55069a7d54860bb25e4959d10901d343f577bbe994848d96fe = $this->env->getExtension("native_profiler");
        $__internal_7e15fa70bcdc5e55069a7d54860bb25e4959d10901d343f577bbe994848d96fe->enter($__internal_7e15fa70bcdc5e55069a7d54860bb25e4959d10901d343f577bbe994848d96fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_7e15fa70bcdc5e55069a7d54860bb25e4959d10901d343f577bbe994848d96fe->leave($__internal_7e15fa70bcdc5e55069a7d54860bb25e4959d10901d343f577bbe994848d96fe_prof);

    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6da735333a9088e276ccd02a3082236923f7dbaa5d3e6ee5bc34d3f2ef669f8f = $this->env->getExtension("native_profiler");
        $__internal_6da735333a9088e276ccd02a3082236923f7dbaa5d3e6ee5bc34d3f2ef669f8f->enter($__internal_6da735333a9088e276ccd02a3082236923f7dbaa5d3e6ee5bc34d3f2ef669f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 19
        echo "    \t<nav class=\"navbar navbar-default\">
    \t<ul class=\"nav navbar-nav\">
\t\t  <li role=\"presentation\" ";
        // line 21
        if (((isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab")) == "campaigns")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/campaigns\"><span class=\"glyphicon glyphicon-home\"></span> Campagnes</a></li>
\t\t  <li role=\"presentation\" ";
        // line 22
        if (((isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab")) == "dashboard")) {
            echo "class=\"active\"";
        }
        echo "><a  href=\"/dashboard\"><span class=\"glyphicon glyphicon glyphicon-pencil\"></span> Tableau de bord</a></li>
\t\t</ul>
\t\t<div class=\"nav navbar-nav navbar-right\">
\t\t\t";
        // line 25
        $this->displayBlock('toolbar', $context, $blocks);
        // line 26
        echo "\t\t</div>
\t\t</nav>
    \t";
        
        $__internal_6da735333a9088e276ccd02a3082236923f7dbaa5d3e6ee5bc34d3f2ef669f8f->leave($__internal_6da735333a9088e276ccd02a3082236923f7dbaa5d3e6ee5bc34d3f2ef669f8f_prof);

    }

    // line 25
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_875c1ac54ad30837c0426e49e6ecf25cb8aacb3b6b093e8f2030f54d4abac459 = $this->env->getExtension("native_profiler");
        $__internal_875c1ac54ad30837c0426e49e6ecf25cb8aacb3b6b093e8f2030f54d4abac459->enter($__internal_875c1ac54ad30837c0426e49e6ecf25cb8aacb3b6b093e8f2030f54d4abac459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_875c1ac54ad30837c0426e49e6ecf25cb8aacb3b6b093e8f2030f54d4abac459->leave($__internal_875c1ac54ad30837c0426e49e6ecf25cb8aacb3b6b093e8f2030f54d4abac459_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_69f3c6b4987334208f98da8cfea909384a007988a795e5b9196a5ea9f6f3806a = $this->env->getExtension("native_profiler");
        $__internal_69f3c6b4987334208f98da8cfea909384a007988a795e5b9196a5ea9f6f3806a->enter($__internal_69f3c6b4987334208f98da8cfea909384a007988a795e5b9196a5ea9f6f3806a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_69f3c6b4987334208f98da8cfea909384a007988a795e5b9196a5ea9f6f3806a->leave($__internal_69f3c6b4987334208f98da8cfea909384a007988a795e5b9196a5ea9f6f3806a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 29,  157 => 25,  148 => 26,  146 => 25,  138 => 22,  132 => 21,  128 => 19,  122 => 18,  113 => 14,  109 => 13,  104 => 12,  98 => 11,  89 => 8,  84 => 7,  78 => 6,  66 => 5,  56 => 30,  53 => 29,  51 => 18,  47 => 16,  45 => 11,  40 => 10,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />*/
/*         	<link href="{{ asset('css/site.css') }}" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% block javascripts %}*/
/*         	<script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*             <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('js/main.js') }}"></script>*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*     	{% block menu %}*/
/*     	<nav class="navbar navbar-default">*/
/*     	<ul class="nav navbar-nav">*/
/* 		  <li role="presentation" {% if (activeTab == "campaigns") %}class="active"{% endif %}><a href="/campaigns"><span class="glyphicon glyphicon-home"></span> Campagnes</a></li>*/
/* 		  <li role="presentation" {% if (activeTab == "dashboard") %}class="active"{% endif %}><a  href="/dashboard"><span class="glyphicon glyphicon glyphicon-pencil"></span> Tableau de bord</a></li>*/
/* 		</ul>*/
/* 		<div class="nav navbar-nav navbar-right">*/
/* 			{% block toolbar %}{% endblock %}*/
/* 		</div>*/
/* 		</nav>*/
/*     	{% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         <div */
/*     </body>*/
/* </html>*/
/* */
