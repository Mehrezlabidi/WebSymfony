<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_66b9528a08be348045cb6590e3aeb61f8870b74152ad5755f1356d72275597ba extends Twig_Template
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
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  729 => 15,  722 => 10,  717 => 7,  714 => 6,  689 => 480,  682 => 476,  652 => 449,  630 => 430,  621 => 424,  610 => 416,  603 => 412,  595 => 407,  587 => 402,  570 => 388,  560 => 381,  554 => 378,  546 => 373,  532 => 362,  524 => 357,  506 => 342,  496 => 335,  479 => 321,  465 => 310,  455 => 303,  448 => 299,  440 => 294,  432 => 289,  422 => 282,  414 => 277,  399 => 265,  383 => 252,  373 => 245,  367 => 242,  361 => 239,  354 => 235,  346 => 230,  338 => 225,  331 => 221,  320 => 213,  309 => 205,  301 => 200,  285 => 187,  270 => 175,  261 => 169,  254 => 165,  245 => 159,  227 => 144,  219 => 139,  209 => 132,  199 => 125,  192 => 121,  185 => 117,  177 => 112,  150 => 88,  144 => 85,  139 => 83,  134 => 81,  123 => 73,  116 => 69,  93 => 57,  84 => 51,  78 => 48,  63 => 36,  55 => 31,  47 => 26,  35 => 16,  33 => 15,  29 => 13,  27 => 6,  21 => 2,);
    }
}
