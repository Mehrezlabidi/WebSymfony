<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_8af7c11b16bd168720f38b1244a604ffa59cf9bf4950e8f80642879d91b706d3 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "history"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-book\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 15,  24 => 13,  22 => 12,  19 => 11,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  699 => 142,  697 => 141,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  464 => 71,  461 => 70,  459 => 69,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  426 => 58,  408 => 50,  405 => 49,  390 => 43,  385 => 41,  368 => 34,  366 => 33,  363 => 32,  350 => 26,  344 => 24,  337 => 22,  335 => 21,  316 => 16,  308 => 13,  299 => 8,  290 => 5,  288 => 4,  285 => 3,  281 => 388,  278 => 387,  276 => 381,  273 => 380,  266 => 366,  258 => 354,  255 => 353,  253 => 342,  245 => 335,  240 => 326,  235 => 311,  227 => 301,  225 => 298,  222 => 297,  220 => 290,  217 => 289,  215 => 280,  212 => 279,  210 => 270,  207 => 269,  204 => 267,  202 => 266,  199 => 265,  194 => 248,  189 => 240,  186 => 239,  181 => 232,  179 => 224,  171 => 216,  161 => 202,  159 => 196,  156 => 195,  154 => 189,  151 => 188,  134 => 161,  129 => 148,  126 => 147,  119 => 117,  116 => 116,  114 => 111,  111 => 110,  109 => 105,  106 => 104,  99 => 68,  96 => 67,  94 => 57,  91 => 56,  89 => 47,  71 => 19,  66 => 12,  61 => 2,  713 => 214,  707 => 148,  704 => 210,  702 => 209,  696 => 140,  686 => 205,  681 => 203,  669 => 201,  666 => 126,  663 => 199,  655 => 194,  652 => 193,  635 => 117,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 106,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 93,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 84,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  480 => 75,  473 => 150,  467 => 72,  465 => 147,  462 => 146,  456 => 68,  453 => 142,  451 => 141,  446 => 139,  430 => 137,  428 => 59,  425 => 135,  423 => 57,  414 => 52,  409 => 124,  403 => 48,  400 => 47,  398 => 119,  394 => 118,  388 => 42,  384 => 116,  377 => 37,  374 => 36,  371 => 35,  358 => 106,  349 => 103,  347 => 102,  342 => 23,  339 => 100,  336 => 99,  329 => 95,  326 => 93,  324 => 92,  321 => 91,  319 => 90,  311 => 14,  307 => 87,  297 => 84,  291 => 82,  289 => 81,  282 => 79,  272 => 76,  269 => 75,  250 => 341,  247 => 66,  243 => 327,  238 => 312,  233 => 304,  228 => 59,  208 => 57,  200 => 55,  191 => 246,  184 => 233,  178 => 45,  175 => 43,  173 => 42,  157 => 41,  152 => 38,  149 => 182,  146 => 181,  139 => 169,  118 => 28,  107 => 24,  95 => 20,  90 => 18,  76 => 31,  69 => 13,  64 => 3,  57 => 155,  52 => 113,  44 => 74,  42 => 62,  39 => 61,  34 => 53,  318 => 145,  312 => 143,  306 => 141,  303 => 140,  300 => 139,  292 => 135,  286 => 80,  274 => 77,  268 => 373,  263 => 365,  256 => 121,  248 => 336,  242 => 113,  236 => 63,  230 => 303,  224 => 103,  219 => 101,  214 => 99,  203 => 56,  197 => 249,  187 => 87,  182 => 85,  170 => 79,  165 => 77,  158 => 75,  153 => 72,  147 => 69,  144 => 176,  141 => 175,  138 => 61,  136 => 168,  132 => 59,  123 => 30,  120 => 56,  112 => 26,  110 => 25,  104 => 90,  86 => 46,  80 => 41,  72 => 199,  62 => 166,  54 => 154,  51 => 24,  43 => 20,  38 => 17,  370 => 100,  367 => 99,  361 => 107,  355 => 27,  352 => 94,  346 => 92,  343 => 91,  340 => 90,  332 => 20,  330 => 87,  327 => 86,  320 => 84,  315 => 83,  313 => 15,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 6,  287 => 72,  283 => 70,  280 => 131,  277 => 78,  271 => 374,  265 => 126,  262 => 63,  260 => 363,  257 => 61,  254 => 68,  249 => 55,  246 => 54,  241 => 31,  223 => 58,  216 => 100,  209 => 96,  192 => 88,  188 => 21,  185 => 86,  180 => 104,  176 => 223,  174 => 217,  169 => 210,  166 => 209,  164 => 203,  160 => 76,  143 => 48,  137 => 47,  131 => 160,  128 => 58,  124 => 132,  121 => 131,  115 => 27,  113 => 39,  100 => 36,  83 => 35,  79 => 32,  77 => 20,  74 => 20,  68 => 16,  65 => 15,  63 => 14,  60 => 13,  56 => 12,  49 => 112,  46 => 21,  40 => 6,  37 => 54,  35 => 16,  32 => 13,  29 => 11,  23 => 1,  101 => 89,  98 => 21,  92 => 19,  87 => 17,  84 => 41,  81 => 40,  78 => 40,  75 => 39,  73 => 24,  70 => 33,  67 => 185,  59 => 165,  53 => 16,  50 => 15,  47 => 75,  12 => 34,);
    }
}
