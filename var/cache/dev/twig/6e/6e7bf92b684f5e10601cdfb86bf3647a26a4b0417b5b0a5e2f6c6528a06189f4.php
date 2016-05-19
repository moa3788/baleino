<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f22c28a4139abe17857af97522a4a39f991e19e32a9cfde37631655edab2f165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1869b12384d8a36c1956490b092b8dc96e7136dceab058228ced7015a905b709 = $this->env->getExtension("native_profiler");
        $__internal_1869b12384d8a36c1956490b092b8dc96e7136dceab058228ced7015a905b709->enter($__internal_1869b12384d8a36c1956490b092b8dc96e7136dceab058228ced7015a905b709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1869b12384d8a36c1956490b092b8dc96e7136dceab058228ced7015a905b709->leave($__internal_1869b12384d8a36c1956490b092b8dc96e7136dceab058228ced7015a905b709_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c82a949e83c80f257f822eb4b74920f2bb5353a75761df758cac80a81e82400 = $this->env->getExtension("native_profiler");
        $__internal_9c82a949e83c80f257f822eb4b74920f2bb5353a75761df758cac80a81e82400->enter($__internal_9c82a949e83c80f257f822eb4b74920f2bb5353a75761df758cac80a81e82400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c82a949e83c80f257f822eb4b74920f2bb5353a75761df758cac80a81e82400->leave($__internal_9c82a949e83c80f257f822eb4b74920f2bb5353a75761df758cac80a81e82400_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_036202853349fcfad6b5504894384a66b2a1a881f6e08bcb85eaac3888a5ece3 = $this->env->getExtension("native_profiler");
        $__internal_036202853349fcfad6b5504894384a66b2a1a881f6e08bcb85eaac3888a5ece3->enter($__internal_036202853349fcfad6b5504894384a66b2a1a881f6e08bcb85eaac3888a5ece3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_036202853349fcfad6b5504894384a66b2a1a881f6e08bcb85eaac3888a5ece3->leave($__internal_036202853349fcfad6b5504894384a66b2a1a881f6e08bcb85eaac3888a5ece3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94acffdc54d4bae9f753ac5d13c5056a6899268554908f2db445261ebe3085f2 = $this->env->getExtension("native_profiler");
        $__internal_94acffdc54d4bae9f753ac5d13c5056a6899268554908f2db445261ebe3085f2->enter($__internal_94acffdc54d4bae9f753ac5d13c5056a6899268554908f2db445261ebe3085f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_94acffdc54d4bae9f753ac5d13c5056a6899268554908f2db445261ebe3085f2->leave($__internal_94acffdc54d4bae9f753ac5d13c5056a6899268554908f2db445261ebe3085f2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
