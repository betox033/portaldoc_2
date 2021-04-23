<?php

/* @PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig */
class __TwigTemplate_41dbebadc06faa34f5ed48302eae546f8edc4e0a05761e23856aee4a1534b6f0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig"));

        // line 25
        echo "
<button id=\"";
        // line 26
        echo twig_escape_filter($this->env, sprintf("%s_grid_bulk_action_%s", $this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "id", array()), $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "id", array())), "html", null, true);
        echo "\"
        class=\"dropdown-item js-bulk-action-submit-btn\"
        type=\"button\"
        data-form-url=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", array()), "submit_route", array()));
        echo "\"
        data-form-method=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", array()), "submit_method", array()), "html", null, true);
        echo "\"
        data-confirm-message=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "options", array()), "confirm_message", array()), "html", null, true);
        echo "\"
>
  ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "name", array()), "html", null, true);
        echo "
</button>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 33,  42 => 31,  38 => 30,  34 => 29,  28 => 26,  25 => 25,);
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
 * 2007-2018 PrestaShop
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
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

<button id=\"{{ '%s_grid_bulk_action_%s'|format(grid.id, action.id) }}\"
        class=\"dropdown-item js-bulk-action-submit-btn\"
        type=\"button\"
        data-form-url=\"{{ path(action.options.submit_route) }}\"
        data-form-method=\"{{ action.options.submit_method }}\"
        data-confirm-message=\"{{ action.options.confirm_message }}\"
>
  {{ action.name }}
</button>
", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig", "/home/robertor/public_html/portaldoc/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Bulk/submit.html.twig");
    }
}
