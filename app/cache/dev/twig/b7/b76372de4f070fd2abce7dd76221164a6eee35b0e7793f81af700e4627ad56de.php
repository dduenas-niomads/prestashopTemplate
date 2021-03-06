<?php

/* PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig */
class __TwigTemplate_380d986cb5f3adfb52ef4346243a508efa3d734710b23086f9b4ccb12980ce8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig", 25);
        $this->blocks = array(
            'addon_description' => array($this, 'block_addon_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ecbdda308ded046fd17ecb517943919d69248a1cd69a9e5e3e691c8f225ca01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecbdda308ded046fd17ecb517943919d69248a1cd69a9e5e3e691c8f225ca01->enter($__internal_7ecbdda308ded046fd17ecb517943919d69248a1cd69a9e5e3e691c8f225ca01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ecbdda308ded046fd17ecb517943919d69248a1cd69a9e5e3e691c8f225ca01->leave($__internal_7ecbdda308ded046fd17ecb517943919d69248a1cd69a9e5e3e691c8f225ca01_prof);

    }

    // line 30
    public function block_addon_description($context, array $blocks = array())
    {
        $__internal_dbab601b9cc42f301af29b59e3876241b9c51ca90aa266c8fba261e13f7fb440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbab601b9cc42f301af29b59e3876241b9c51ca90aa266c8fba261e13f7fb440->enter($__internal_dbab601b9cc42f301af29b59e3876241b9c51ca90aa266c8fba261e13f7fb440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_description"));

        // line 31
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "warning", array()), "html", null, true);
        echo "
";
        
        $__internal_dbab601b9cc42f301af29b59e3876241b9c51ca90aa266c8fba261e13f7fb440->leave($__internal_dbab601b9cc42f301af29b59e3876241b9c51ca90aa266c8fba261e13f7fb440_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 31,  34 => 30,  11 => 25,);
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
{% extends \"PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig\" %}

{# Twig extension for \"Addons to configure\" part in notification page #}

{# Display the warning message instead of the addon description #}
{% block addon_description %}
    {{module.attributes.warning}}
{% endblock %}
", "PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/card_notification_configure.html.twig");
    }
}
