<?php

/* @PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig */
class __TwigTemplate_0c6ab6a36dbeb28290700233fdee70b2590ae8b6d7c4eeadb338244076ea3b04 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "filter_form", array())) > 1)) {
            // line 27
            echo "  <tr class=\"column-filters ";
            if (((0 == $this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "data", array()), "records_total", array())) && twig_test_empty($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "filters", array())))) {
                echo "d-none";
            }
            echo "\">
    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "columns", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 29
                echo "      <td>
        ";
                // line 30
                if ($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "column_filters", array(), "any", false, true), $this->getAttribute($context["column"], "id", array()), array(), "array", true, true)) {
                    // line 31
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "column_filters", array()), $this->getAttribute($context["column"], "id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["filter_name"]) {
                        // line 32
                        echo "            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["grid"] ?? $this->getContext($context, "grid")), "filter_form", array()), $context["filter_name"], array(), "array"), 'widget');
                        echo "
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "        ";
                }
                // line 35
                echo "      </td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "  </tr>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 37,  63 => 35,  60 => 34,  51 => 32,  46 => 31,  44 => 30,  41 => 29,  37 => 28,  30 => 27,  28 => 26,  25 => 25,);
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

{% if grid.filter_form|length > 1 %}
  <tr class=\"column-filters {% if 0 == grid.data.records_total and grid.filters is empty %}d-none{% endif %}\">
    {% for column in grid.columns %}
      <td>
        {% if grid.column_filters[column.id] is defined %}
          {% for filter_name in grid.column_filters[column.id] %}
            {{ form_widget(grid.filter_form[filter_name]) }}
          {% endfor %}
        {% endif %}
      </td>
    {% endfor %}
  </tr>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig", "/home/robertor/public_html/portaldoc/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/Table/filters_row.html.twig");
    }
}
