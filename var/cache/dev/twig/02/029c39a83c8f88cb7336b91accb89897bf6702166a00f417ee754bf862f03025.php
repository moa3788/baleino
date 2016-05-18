<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_87b1c7d5e86db53babcd07a6d2edaf6d4549d7ba958894a8f70f622f691dc914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87ed306efabe762ed138fd193da84bb733537fae32a43062e593becc000f9f82 = $this->env->getExtension("native_profiler");
        $__internal_87ed306efabe762ed138fd193da84bb733537fae32a43062e593becc000f9f82->enter($__internal_87ed306efabe762ed138fd193da84bb733537fae32a43062e593becc000f9f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87ed306efabe762ed138fd193da84bb733537fae32a43062e593becc000f9f82->leave($__internal_87ed306efabe762ed138fd193da84bb733537fae32a43062e593becc000f9f82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f691dc4102609001be8dcd64bbc3be35ae7198fd49d0e7b12bbe428a55a1ecd = $this->env->getExtension("native_profiler");
        $__internal_0f691dc4102609001be8dcd64bbc3be35ae7198fd49d0e7b12bbe428a55a1ecd->enter($__internal_0f691dc4102609001be8dcd64bbc3be35ae7198fd49d0e7b12bbe428a55a1ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0f691dc4102609001be8dcd64bbc3be35ae7198fd49d0e7b12bbe428a55a1ecd->leave($__internal_0f691dc4102609001be8dcd64bbc3be35ae7198fd49d0e7b12bbe428a55a1ecd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_31c074c9fa583350c445999292a9af3efe4343fc486abc15a3d3911c91e82eb2 = $this->env->getExtension("native_profiler");
        $__internal_31c074c9fa583350c445999292a9af3efe4343fc486abc15a3d3911c91e82eb2->enter($__internal_31c074c9fa583350c445999292a9af3efe4343fc486abc15a3d3911c91e82eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_31c074c9fa583350c445999292a9af3efe4343fc486abc15a3d3911c91e82eb2->leave($__internal_31c074c9fa583350c445999292a9af3efe4343fc486abc15a3d3911c91e82eb2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7072aa28a390b72c0d6bc8c3b74cffd8465628e4df9e9994b3b099a8382a31dd = $this->env->getExtension("native_profiler");
        $__internal_7072aa28a390b72c0d6bc8c3b74cffd8465628e4df9e9994b3b099a8382a31dd->enter($__internal_7072aa28a390b72c0d6bc8c3b74cffd8465628e4df9e9994b3b099a8382a31dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7072aa28a390b72c0d6bc8c3b74cffd8465628e4df9e9994b3b099a8382a31dd->leave($__internal_7072aa28a390b72c0d6bc8c3b74cffd8465628e4df9e9994b3b099a8382a31dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
