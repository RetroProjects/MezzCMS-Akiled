(window.webpackJsonp = window.webpackJsonp || []).push([
    [52], {
        626: function(e, t, n) {
            "use strict";
            n.r(t);
            n(31);
            var r = n(7),
                c = n(11),
                o = n(12),
                f = n(4),
                l = n(3),
                d = n(5);

            function h(e) {
                var t = function() {
                    if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                    if (Reflect.construct.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function() {}))), !0
                    } catch (e) {
                        return !1
                    }
                }();
                return function() {
                    var n, r = Object(f.a)(e);
                    if (t) {
                        var c = Object(f.a)(this).constructor;
                        n = Reflect.construct(r, arguments, c)
                    } else n = r.apply(this, arguments);
                    return Object(o.a)(this, n)
                }
            }
            var O = function(e, t, n, desc) {
                    var r, c = arguments.length,
                        o = c < 3 ? t : null === desc ? desc = Object.getOwnPropertyDescriptor(t, n) : desc;
                    if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(l.a)(Reflect)) && "function" == typeof Reflect.decorate) o = Reflect.decorate(e, t, n, desc);
                    else
                        for (var i = e.length - 1; i >= 0; i--)(r = e[i]) && (o = (c < 3 ? r(o) : c > 3 ? r(t, n, o) : r(t, n)) || o);
                    return c > 3 && o && Object.defineProperty(t, n, o), o
                },
                j = function(e) {
                    Object(c.a)(n, e);
                    var t = h(n);

                    function n() {
                        return Object(r.a)(this, n), t.apply(this, arguments)
                    }
                    return n
                }(d.Vue),
                v = j = O([Object(d.Component)({
                    middleware: ["Authenticated"],
                    head: {
                        title: "Hotel Nitro"
                    }
                })], j),
                y = n(14),
                component = Object(y.a)(v, (function() {
                    var e = this.$createElement;
                    return (this._self._c || e)("div")
                }), [], !1, null, null, null);
            t.default = component.exports
        }
    }
]);