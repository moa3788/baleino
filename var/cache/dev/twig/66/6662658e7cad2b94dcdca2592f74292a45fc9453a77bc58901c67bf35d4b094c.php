<?php

/* campaigns/add.html.twig */
class __TwigTemplate_c22a8bce092248bf921dc364672617980f1cf477b0f383b9154ae4e1fa3244a9 extends Twig_Template
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
        $__internal_c099d40e1af071e8363c8e9d49276370eabeda69142fd1098c60c9c16ea175da = $this->env->getExtension("native_profiler");
        $__internal_c099d40e1af071e8363c8e9d49276370eabeda69142fd1098c60c9c16ea175da->enter($__internal_c099d40e1af071e8363c8e9d49276370eabeda69142fd1098c60c9c16ea175da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "campaigns/add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("data-command" => "submit", "action" => "/campaigns/add", "class" => "modal-form")));
        echo "
<div class=\"container-fluid\">
\t<h3>Edition de campagne</h3>

    <div class=\"input-group\">
    \t<div class=\"input-group-addon\">
        \t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
        </div>
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "

\t<div class=\"input-group\">
    \t<div class=\"input-group-addon\">
        \t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "start", array()), 'label');
        echo "
        </div>
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "start", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "start", array()), 'errors');
        echo "
    
    <div class=\"input-group\">
    \t<div class=\"input-group-addon\">
        \t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "end", array()), 'label');
        echo "
        </div>
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "end", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "end", array()), 'errors');
        echo "

    <div class=\"input-group pull-right\">
    \t<a class=\"btn btn-default\" data-modal-close=\"#addCampaignModal\">
    \t\t<span class=\"glyphicon glyphicon-menu-left\"></span>
    \t\tAnnuler
    \t</a>
    \t
    \t<button class=\"btn btn-success\">
    \t\t<span class=\"glyphicon glyphicon-ok\"></span>
    \t\tEnregistrer
    \t</button>
    </div>
</div>
";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_c099d40e1af071e8363c8e9d49276370eabeda69142fd1098c60c9c16ea175da->leave($__internal_c099d40e1af071e8363c8e9d49276370eabeda69142fd1098c60c9c16ea175da_prof);

    }

    public function getTemplateName()
    {
        return "campaigns/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 41,  75 => 27,  70 => 25,  65 => 23,  58 => 19,  53 => 17,  48 => 15,  41 => 11,  36 => 9,  31 => 7,  22 => 1,);
    }
}
/* {{ form_start(form, {attr: {"data-command":"submit", "action": "/campaigns/add", "class" :"modal-form"}}) }}*/
/* <div class="container-fluid">*/
/* 	<h3>Edition de campagne</h3>*/
/* */
/*     <div class="input-group">*/
/*     	<div class="input-group-addon">*/
/*         	{{ form_label(form.name) }}*/
/*         </div>*/
/*         {{ form_widget(form.name, {attr: {"class": "form-control"}}) }}*/
/*     </div>*/
/*     {{ form_errors(form.name) }}*/
/* */
/* 	<div class="input-group">*/
/*     	<div class="input-group-addon">*/
/*         	{{ form_label(form.start) }}*/
/*         </div>*/
/*         {{ form_widget(form.start, {attr: {"class": "form-control"}}) }}*/
/*     </div>*/
/*     {{ form_errors(form.start) }}*/
/*     */
/*     <div class="input-group">*/
/*     	<div class="input-group-addon">*/
/*         	{{ form_label(form.end) }}*/
/*         </div>*/
/*         {{ form_widget(form.end, {attr: {"class": "form-control"}}) }}*/
/*     </div>*/
/*     {{ form_errors(form.end) }}*/
/* */
/*     <div class="input-group pull-right">*/
/*     	<a class="btn btn-default" data-modal-close="#addCampaignModal">*/
/*     		<span class="glyphicon glyphicon-menu-left"></span>*/
/*     		Annuler*/
/*     	</a>*/
/*     	*/
/*     	<button class="btn btn-success">*/
/*     		<span class="glyphicon glyphicon-ok"></span>*/
/*     		Enregistrer*/
/*     	</button>*/
/*     </div>*/
/* </div>*/
/* {{ form_end(form) }}*/
