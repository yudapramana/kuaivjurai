<!DOCTYPE html>
<html dir='ltr'>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>Database Error</title>
    <style type="text/css">
        html {
            background: #f1f1f1
        }

        body {
            background: #fff;
            border: 1px solid #ccd0d4;
            color: #444;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            margin: 2em auto;
            padding: 1em 2em;
            max-width: 700px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .04);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .04)
        }

        h1 {
            border-bottom: 1px solid #dadada;
            clear: both;
            color: #666;
            font-size: 24px;
            margin: 30px 0 0 0;
            padding: 0;
            padding-bottom: 7px
        }

        #error-page {
            margin-top: 50px
        }

        #error-page .wp-die-message {
            font-size: 14px;
            line-height: 1.5;
            margin: 25px 0 20px
        }
    </style>
</head>

<body id="error-page">
    <div class="wp-die-message">
        <h1>Error establishing a database connection</h1>
    </div>
    <script data-pagespeed-no-defer>
        (function() {
            function f(b) {
                var a = window;
                if (a.addEventListener) a.addEventListener("load", b, !1);
                else if (a.attachEvent) a.attachEvent("onload", b);
                else {
                    var c = a.onload;
                    a.onload = function() {
                        b.call(this);
                        c && c.call(this)
                    }
                }
            };
            window.pagespeed = window.pagespeed || {};
            var k = window.pagespeed;

            function l(b, a, c, g, h) {
                this.h = b;
                this.i = a;
                this.l = c;
                this.j = g;
                this.b = h;
                this.c = [];
                this.a = 0
            }
            l.prototype.f = function(b) {
                for (var a = 0; 250 > a && this.a < this.b.length; ++a, ++this.a) try {
                    document.querySelector(this.b[this.a]) && this.c.push(this.b[this.a])
                } catch (c) {}
                this.a < this.b.length ? window.setTimeout(this.f.bind(this), 0, b) : b()
            };
            k.g = function(b, a, c, g, h) {
                if (document.querySelector && Function.prototype.bind) {
                    var d = new l(b, a, c, g, h);
                    f(function() {
                        window.setTimeout(function() {
                            d.f(function() {
                                for (var a = "oh=" + d.l + "&n=" + d.j, a = a + "&cs=", b = 0; b < d.c.length; ++b) {
                                    var c = 0 < b ? "," : "",
                                        c = c + encodeURIComponent(d.c[b]);
                                    if (131072 < a.length + c.length) break;
                                    a += c
                                }
                                k.criticalCssBeaconData = a;
                                var b = d.h,
                                    c = d.i,
                                    e;
                                if (window.XMLHttpRequest) e = new XMLHttpRequest;
                                else if (window.ActiveXObject) try {
                                    e = new ActiveXObject("Msxml2.XMLHTTP")
                                } catch (m) {
                                    try {
                                        e = new ActiveXObject("Microsoft.XMLHTTP")
                                    } catch (n) {}
                                }
                                e &&
                                    (e.open("POST", b + (-1 == b.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(c)), e.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), e.send(a))
                            })
                        }, 0)
                    })
                }
            };
            k.criticalCssBeaconInit = k.g;
        })();
        pagespeed.selectors = ["#error-page", "#error-page .wp-die-message", "#error-page code", "#error-page p", ".button", ".button.button-large", "a", "body", "h1", "html", "ul li"];
        pagespeed.criticalCssBeaconInit('/ngx_pagespeed_beacon', 'https://kemenagpessel.com/', 'lTStk3L15_', 'MPOKT3AQIVI', pagespeed.selectors);
    </script><noscript class="psa_add_styles">
        <style type="text/css">
            html {
                background: #f1f1f1
            }

            body {
                background: #fff;
                border: 1px solid #ccd0d4;
                color: #444;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
                margin: 2em auto;
                padding: 1em 2em;
                max-width: 700px;
                -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .04);
                box-shadow: 0 1px 1px rgba(0, 0, 0, .04)
            }

            h1 {
                border-bottom: 1px solid #dadada;
                clear: both;
                color: #666;
                font-size: 24px;
                margin: 30px 0 0 0;
                padding: 0;
                padding-bottom: 7px
            }

            #error-page {
                margin-top: 50px
            }

            #error-page p,
            #error-page .wp-die-message {
                font-size: 14px;
                line-height: 1.5;
                margin: 25px 0 20px
            }

            #error-page code {
                font-family: Consolas, Monaco, monospace
            }

            ul li {
                margin-bottom: 10px;
                font-size: 14px
            }

            a {
                color: #0073aa
            }

            a:hover,
            a:active {
                color: #006799
            }

            a:focus {
                color: #124964;
                -webkit-box-shadow: 0 0 0 1px #5b9dd9, 0 0 2px 1px rgba(30, 140, 190, .8);
                box-shadow: 0 0 0 1px #5b9dd9, 0 0 2px 1px rgba(30, 140, 190, .8);
                outline: none
            }

            .button {
                background: #f3f5f6;
                border: 1px solid #016087;
                color: #016087;
                display: inline-block;
                text-decoration: none;
                font-size: 13px;
                line-height: 2;
                height: 28px;
                margin: 0;
                padding: 0 10px 1px;
                cursor: pointer;
                -webkit-border-radius: 3px;
                -webkit-appearance: none;
                border-radius: 3px;
                white-space: nowrap;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                vertical-align: top
            }

            .button.button-large {
                line-height: 2.30769231;
                min-height: 32px;
                padding: 0 12px
            }

            .button:hover,
            .button:focus {
                background: #f1f1f1
            }

            .button:focus {
                background: #f3f5f6;
                border-color: #007cba;
                -webkit-box-shadow: 0 0 0 1px #007cba;
                box-shadow: 0 0 0 1px #007cba;
                color: #016087;
                outline: 2px solid transparent;
                outline-offset: 0
            }

            .button:active {
                background: #f3f5f6;
                border-color: #7e8993;
                -webkit-box-shadow: none;
                box-shadow: none
            }
        </style>
    </noscript>
    <script data-pagespeed-no-defer>
        (function() {
            function b() {
                var a = window,
                    c = e;
                if (a.addEventListener) a.addEventListener("load", c, !1);
                else if (a.attachEvent) a.attachEvent("onload", c);
                else {
                    var d = a.onload;
                    a.onload = function() {
                        c.call(this);
                        d && d.call(this)
                    }
                }
            };
            var f = !1;

            function e() {
                if (!f) {
                    f = !0;
                    for (var a = document.getElementsByClassName("psa_add_styles"), c = 0, d; d = a[c]; ++c)
                        if ("NOSCRIPT" == d.nodeName) {
                            var k = document.createElement("div");
                            k.innerHTML = d.textContent;
                            document.body.appendChild(k)
                        }
                }
            }

            function g() {
                var a = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || null;
                a ? a(function() {
                    window.setTimeout(e, 0)
                }) : b()
            }
            var h = ["pagespeed", "CriticalCssLoader", "Run"],
                l = this;
            h[0] in l || !l.execScript || l.execScript("var " + h[0]);
            for (var m; h.length && (m = h.shift());) h.length || void 0 === g ? l[m] ? l = l[m] : l = l[m] = {} : l[m] = g;
        })();
        pagespeed.CriticalCssLoader.Run();
    </script>
</body>

</html>
