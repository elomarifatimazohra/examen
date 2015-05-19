<?php

/* tacheBundle:Default:afficher.html.twig */
class __TwigTemplate_6e709702c75e318bac1a72e5c487ad8172c56431e55aba55efaefe162cda510d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    <h1 style=\"font-size: 50px;margin-left: 750px\">+</h1>
    <h1 style=\"color:#565656;text-align: center; text-decoration: underline\">Listes Taches 2015</h1>
    <table border=\"0\" style=\"border-collapse: collapse;margin-left: 33%\">
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tache"]) ? $context["Tache"] : $this->getContext($context, "Tache")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 8
            echo "        <tr style=\"width: 100px;text-align: center\"  >
            <td>
           <ul>A faire
           <li style=\"width: 100px;text-align: center\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "titre"), "html", null, true);
            echo "</li>

           </ul>
</td></tr>


          



        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "



    </table>
";
    }

    public function getTemplateName()
    {
        return "tacheBundle:Default:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  46 => 11,  41 => 8,  37 => 7,  31 => 3,  28 => 2,);
    }
}
