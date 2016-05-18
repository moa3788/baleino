<?php

/* campaigns/index.html.twig */
class __TwigTemplate_940fd1587f4bff39688231de7a77132169294aedaa78779f16acdacefa281338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "campaigns/index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'toolbar' => array($this, 'block_toolbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5937117f5bbf3c9ec9dc3b410f779a5b154d7758807b8453d9ec6ad396f7f477 = $this->env->getExtension("native_profiler");
        $__internal_5937117f5bbf3c9ec9dc3b410f779a5b154d7758807b8453d9ec6ad396f7f477->enter($__internal_5937117f5bbf3c9ec9dc3b410f779a5b154d7758807b8453d9ec6ad396f7f477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "campaigns/index.html.twig"));

        // line 4
        $context["activeTab"] = "campaigns";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5937117f5bbf3c9ec9dc3b410f779a5b154d7758807b8453d9ec6ad396f7f477->leave($__internal_5937117f5bbf3c9ec9dc3b410f779a5b154d7758807b8453d9ec6ad396f7f477_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bbc5c63b1f5dd894c36a6f3ca41f54c72ba8685c07ee3b239e343216cec6b9e = $this->env->getExtension("native_profiler");
        $__internal_2bbc5c63b1f5dd894c36a6f3ca41f54c72ba8685c07ee3b239e343216cec6b9e->enter($__internal_2bbc5c63b1f5dd894c36a6f3ca41f54c72ba8685c07ee3b239e343216cec6b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Vos campagnes";
        
        $__internal_2bbc5c63b1f5dd894c36a6f3ca41f54c72ba8685c07ee3b239e343216cec6b9e->leave($__internal_2bbc5c63b1f5dd894c36a6f3ca41f54c72ba8685c07ee3b239e343216cec6b9e_prof);

    }

    // line 8
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_903809e00d71cd6ca05403757717129297af32f20fa13504a6aef2d3a8940c7c = $this->env->getExtension("native_profiler");
        $__internal_903809e00d71cd6ca05403757717129297af32f20fa13504a6aef2d3a8940c7c->enter($__internal_903809e00d71cd6ca05403757717129297af32f20fa13504a6aef2d3a8940c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 9
        echo "<div class=\"form-group\" >
\t<a class=\"btn btn-primary\" 
\tstyle=\"margin-top: 5px; margin-right: 35px;\" 
\tid=\"add-campaign-opener\" href=\"/campaigns/add\"
\tdata-modal=\"#addCampaignModal\">
\t\t<span class=\"glyphicon glyphicon-plus\"></span> Ajouter une campagne
\t</a>
</div>
";
        
        $__internal_903809e00d71cd6ca05403757717129297af32f20fa13504a6aef2d3a8940c7c->leave($__internal_903809e00d71cd6ca05403757717129297af32f20fa13504a6aef2d3a8940c7c_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c9804e40950ab0758f3f9c4ad84b82ef971cebd5fff736a5645b987456a4ee8 = $this->env->getExtension("native_profiler");
        $__internal_8c9804e40950ab0758f3f9c4ad84b82ef971cebd5fff736a5645b987456a4ee8->enter($__internal_8c9804e40950ab0758f3f9c4ad84b82ef971cebd5fff736a5645b987456a4ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campaigns"]) ? $context["campaigns"] : $this->getContext($context, "campaigns")));
        foreach ($context['_seq'] as $context["_key"] => $context["campaign"]) {
            // line 23
            echo "\t\t\t<div class=\"col-xs-6 col-md-2\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t    <h3 class=\"panel-title\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["campaign"], "name", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tDu ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["campaign"], "start", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tAu ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["campaign"], "end", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"/control\" class=\"btn btn-primary\">Voir</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campaign'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t</div>
</div>


<div class=\"modal fade\" id=\"addCampaignModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                 <h4 class=\"modal-title\">Modal title</h4>

            </div>
            <div class=\"modal-body\"><div class=\"te\">Chargement</div></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
";
        
        $__internal_8c9804e40950ab0758f3f9c4ad84b82ef971cebd5fff736a5645b987456a4ee8->leave($__internal_8c9804e40950ab0758f3f9c4ad84b82ef971cebd5fff736a5645b987456a4ee8_prof);

    }

    public function getTemplateName()
    {
        return "campaigns/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  104 => 33,  98 => 30,  91 => 26,  86 => 23,  82 => 22,  78 => 20,  72 => 19,  57 => 9,  51 => 8,  39 => 6,  32 => 2,  30 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/campaigns/index.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% set activeTab = "campaigns" %}*/
/* */
/* {% block title %}Vos campagnes{% endblock %}*/
/* */
/* {% block toolbar %}*/
/* <div class="form-group" >*/
/* 	<a class="btn btn-primary" */
/* 	style="margin-top: 5px; margin-right: 35px;" */
/* 	id="add-campaign-opener" href="/campaigns/add"*/
/* 	data-modal="#addCampaignModal">*/
/* 		<span class="glyphicon glyphicon-plus"></span> Ajouter une campagne*/
/* 	</a>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/* 		{% for campaign in campaigns %}*/
/* 			<div class="col-xs-6 col-md-2">*/
/* 				<div class="panel panel-primary">*/
/* 					<div class="panel-heading">*/
/* 					    <h3 class="panel-title">{{ campaign.name }}</h3>*/
/* 					</div>*/
/* 					<div class="panel-body">*/
/* 						<p>*/
/* 							Du {{ campaign.start|date('d/m/Y') }}*/
/* 						</p>*/
/* 						<p>*/
/* 							Au {{ campaign.end|date('d/m/Y') }}*/
/* 						</p>*/
/* 						*/
/* 						<div class="text-center">*/
/* 							<a href="/control" class="btn btn-primary">Voir</a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* <div class="modal fade" id="addCampaignModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                  <h4 class="modal-title">Modal title</h4>*/
/* */
/*             </div>*/
/*             <div class="modal-body"><div class="te">Chargement</div></div>*/
/*         </div>*/
/*         <!-- /.modal-content -->*/
/*     </div>*/
/*     <!-- /.modal-dialog -->*/
/* </div>*/
/* {% endblock %}*/
