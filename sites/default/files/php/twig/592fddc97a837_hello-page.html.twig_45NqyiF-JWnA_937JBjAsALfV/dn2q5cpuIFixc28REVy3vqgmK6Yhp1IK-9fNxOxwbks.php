<?php

/* modules/custom/register_form/templates/hello-page.html.twig */
class __TwigTemplate_441efb41e923378e3ff146d5733a2c2d07249fefda25f9f22dac4be625958c54 extends Twig_Template
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
        $tags = array("set" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<?php
<h1>My first web page</h1>
// ";
        // line 3
        $context["foo"] = "foo";
        // line 4
        echo "// ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["foo"]) ? $context["foo"] : null), "html", null, true));
        echo "
<div class=\"some-txt\">
// <h1>hello ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["name_shweta"]) ? $context["name_shweta"] : null), "aa", array()), "html", null, true));
        echo "!</h1>
// <div>welcome ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["name_shweta"]) ? $context["name_shweta"] : null), "sss", array()), "html", null, true));
        echo "!</div>
<table style=\"border: 1px solid red;\">
<tr>
<td>";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["name_shweta"]) ? $context["name_shweta"] : null), "aa", array()), "html", null, true));
        echo "</td>
<td>";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["name_shweta"]) ? $context["name_shweta"] : null), "sss", array()), "html", null, true));
        echo "</td>
</tr>
</table>
</div>

<div class=\"books\">
";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_book_edition", array()), "html", null, true));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/register_form/templates/hello-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  69 => 11,  65 => 10,  59 => 7,  55 => 6,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "<?php
<h1>My first web page</h1>
// {% set foo = 'foo' %}
// {{ foo }}
<div class=\"some-txt\">
// <h1>hello {{name_shweta.aa}}!</h1>
// <div>welcome {{name_shweta.sss}}!</div>
<table style=\"border: 1px solid red;\">
<tr>
<td>{{name_shweta.aa}}</td>
<td>{{name_shweta.sss}}</td>
</tr>
</table>
</div>

<div class=\"books\">
{{content.field_book_edition}}
</div>";
    }
}
