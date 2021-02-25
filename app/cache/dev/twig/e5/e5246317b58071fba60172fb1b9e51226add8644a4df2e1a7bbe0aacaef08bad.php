<?php

/* @PrestaShop/Admin/Improve/Module/addons_store.html.twig */
class __TwigTemplate_4aafe2c6e5b2f5707265d7561bb3afb088c0d5ee2aa79dce169676cc12aac966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Module/addons_store.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f3113f4e0741f9d0ba2984ec1d196a69208d247121c38b06fc81578a4852337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3113f4e0741f9d0ba2984ec1d196a69208d247121c38b06fc81578a4852337->enter($__internal_9f3113f4e0741f9d0ba2984ec1d196a69208d247121c38b06fc81578a4852337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Module/addons_store.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f3113f4e0741f9d0ba2984ec1d196a69208d247121c38b06fc81578a4852337->leave($__internal_9f3113f4e0741f9d0ba2984ec1d196a69208d247121c38b06fc81578a4852337_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9a8d4b550815b0445b41ac4ba578c92f481aa9c830a85e21cdace536ec797df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a8d4b550815b0445b41ac4ba578c92f481aa9c830a85e21cdace536ec797df->enter($__internal_c9a8d4b550815b0445b41ac4ba578c92f481aa9c830a85e21cdace536ec797df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "  ";
        echo ($context["pageContent"] ?? $this->getContext($context, "pageContent"));
        echo "
";
        
        $__internal_c9a8d4b550815b0445b41ac4ba578c92f481aa9c830a85e21cdace536ec797df->leave($__internal_c9a8d4b550815b0445b41ac4ba578c92f481aa9c830a85e21cdace536ec797df_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Module/addons_store.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 28,  34 => 27,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  {{ pageContent|raw }}
{% endblock %}
", "@PrestaShop/Admin/Improve/Module/addons_store.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Module/addons_store.html.twig");
    }
}
