<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a2761fad7fabaa6fe85493074df7ca9819ff7de3306c59a016d0cc1e6988f942 extends Twig_Template
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
        $__internal_d510b4d177afe421dabb32b4db387ba6df30fff97ab9651f820b5aca2677d622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d510b4d177afe421dabb32b4db387ba6df30fff97ab9651f820b5aca2677d622->enter($__internal_d510b4d177afe421dabb32b4db387ba6df30fff97ab9651f820b5aca2677d622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d510b4d177afe421dabb32b4db387ba6df30fff97ab9651f820b5aca2677d622->leave($__internal_d510b4d177afe421dabb32b4db387ba6df30fff97ab9651f820b5aca2677d622_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06395e12f83d537c7fb72d2e6f44ce0e68eb56a3dcfdc0e3ece429ef16f8e86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06395e12f83d537c7fb72d2e6f44ce0e68eb56a3dcfdc0e3ece429ef16f8e86f->enter($__internal_06395e12f83d537c7fb72d2e6f44ce0e68eb56a3dcfdc0e3ece429ef16f8e86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06395e12f83d537c7fb72d2e6f44ce0e68eb56a3dcfdc0e3ece429ef16f8e86f->leave($__internal_06395e12f83d537c7fb72d2e6f44ce0e68eb56a3dcfdc0e3ece429ef16f8e86f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc58fc366483a37e7bca2df19b23080e6a985d1fa9977f2d9fc6d6d0d4fcf434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc58fc366483a37e7bca2df19b23080e6a985d1fa9977f2d9fc6d6d0d4fcf434->enter($__internal_bc58fc366483a37e7bca2df19b23080e6a985d1fa9977f2d9fc6d6d0d4fcf434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc58fc366483a37e7bca2df19b23080e6a985d1fa9977f2d9fc6d6d0d4fcf434->leave($__internal_bc58fc366483a37e7bca2df19b23080e6a985d1fa9977f2d9fc6d6d0d4fcf434_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae37174f659e87230fe4e67e8edf1f69d8dac5bb29d8bc01b1ec11b40751a570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae37174f659e87230fe4e67e8edf1f69d8dac5bb29d8bc01b1ec11b40751a570->enter($__internal_ae37174f659e87230fe4e67e8edf1f69d8dac5bb29d8bc01b1ec11b40751a570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae37174f659e87230fe4e67e8edf1f69d8dac5bb29d8bc01b1ec11b40751a570->leave($__internal_ae37174f659e87230fe4e67e8edf1f69d8dac5bb29d8bc01b1ec11b40751a570_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
