(window.webpackJsonp = window.webpackJsonp || []).push([
    [6], {
        0: function(t, e, n) {
            "use strict";
            n.d(e, "v", (function() {
                return r
            })), n.d(e, "p", (function() {
                return o
            })), n.d(e, "j", (function() {
                return c
            })), n.d(e, "s", (function() {
                return l
            })), n.d(e, "k", (function() {
                return f
            })), n.d(e, "t", (function() {
                return d
            })), n.d(e, "n", (function() {
                return h
            })), n.d(e, "r", (function() {
                return m
            })), n.d(e, "l", (function() {
                return v
            })), n.d(e, "m", (function() {
                return y
            })), n.d(e, "h", (function() {
                return _
            })), n.d(e, "w", (function() {
                return w
            })), n.d(e, "i", (function() {
                return x
            })), n.d(e, "q", (function() {
                return k
            })), n.d(e, "f", (function() {
                return O
            })), n.d(e, "b", (function() {
                return j
            })), n.d(e, "e", (function() {
                return C
            })), n.d(e, "c", (function() {
                return R
            })), n.d(e, "d", (function() {
                return $
            })), n.d(e, "g", (function() {
                return P
            })), n.d(e, "a", (function() {
                return S
            })), n.d(e, "o", (function() {
                return E
            })), n.d(e, "u", (function() {
                return L
            }));
            var r = {},
                o = [{
                    code: "fr",
                    iso: "fr-FR",
                    file: "fr-FR.json"
                }],
                c = "fr",
                l = "___",
                f = "default",
                d = "prefix_except_default",
                h = !0,
                m = null,
                v = {
                    useCookie: !0,
                    cookieCrossOrigin: !1,
                    cookieDomain: null,
                    cookieKey: "i18n_redirected",
                    cookieSecure: !1,
                    alwaysRedirect: !0,
                    fallbackLocale: "",
                    onlyOnRoot: !0
                },
                y = !1,
                _ = "localhost",
                w = {
                    moduleName: "i18n",
                    syncLocale: !1,
                    syncMessages: !1,
                    syncRouteParams: !0
                },
                x = function() {
                    return null
                },
                k = function() {
                    return null
                },
                O = "nuxt-i18n",
                j = "code",
                C = "iso",
                R = "domain",
                $ = "file",
                P = {
                    PREFIX: "prefix",
                    PREFIX_EXCEPT_DEFAULT: "prefix_except_default",
                    PREFIX_AND_DEFAULT: "prefix_and_default",
                    NO_PREFIX: "no_prefix"
                },
                S = "nuxtI18n",
                E = ["fr"],
                L = void 0
        },
        1: function(t, e, n) {
            "use strict";
            n.d(e, "k", (function() {
                return y
            })), n.d(e, "m", (function() {
                return _
            })), n.d(e, "l", (function() {
                return w
            })), n.d(e, "e", (function() {
                return x
            })), n.d(e, "b", (function() {
                return k
            })), n.d(e, "s", (function() {
                return O
            })), n.d(e, "g", (function() {
                return j
            })), n.d(e, "h", (function() {
                return C
            })), n.d(e, "d", (function() {
                return R
            })), n.d(e, "r", (function() {
                return $
            })), n.d(e, "j", (function() {
                return P
            })), n.d(e, "t", (function() {
                return E
            })), n.d(e, "o", (function() {
                return N
            })), n.d(e, "q", (function() {
                return A
            })), n.d(e, "f", (function() {
                return T
            })), n.d(e, "c", (function() {
                return D
            })), n.d(e, "i", (function() {
                return I
            })), n.d(e, "p", (function() {
                return M
            })), n.d(e, "a", (function() {
                return z
            })), n.d(e, "n", (function() {
                return V
            }));
            n(59), n(41), n(34), n(42), n(36), n(43);
            var r = n(22),
                o = (n(45), n(195), n(5)),
                c = (n(10), n(11), n(106), n(164), n(199), n(75), n(51), n(20), n(3)),
                l = (n(40), n(33), n(8), n(54), n(27), n(31)),
                f = n(2);

            function d(object, t) {
                var e = Object.keys(object);
                if (Object.getOwnPropertySymbols) {
                    var n = Object.getOwnPropertySymbols(object);
                    t && (n = n.filter((function(t) {
                        return Object.getOwnPropertyDescriptor(object, t).enumerable
                    }))), e.push.apply(e, n)
                }
                return e
            }

            function h(t) {
                for (var i = 1; i < arguments.length; i++) {
                    var source = null != arguments[i] ? arguments[i] : {};
                    i % 2 ? d(Object(source), !0).forEach((function(e) {
                        Object(l.a)(t, e, source[e])
                    })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(source)) : d(Object(source)).forEach((function(e) {
                        Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(source, e))
                    }))
                }
                return t
            }

            function m(t, e) {
                var n;
                if ("undefined" == typeof Symbol || null == t[Symbol.iterator]) {
                    if (Array.isArray(t) || (n = function(t, e) {
                            if (!t) return;
                            if ("string" == typeof t) return v(t, e);
                            var n = Object.prototype.toString.call(t).slice(8, -1);
                            "Object" === n && t.constructor && (n = t.constructor.name);
                            if ("Map" === n || "Set" === n) return Array.from(t);
                            if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return v(t, e)
                        }(t)) || e && t && "number" == typeof t.length) {
                        n && (t = n);
                        var i = 0,
                            r = function() {};
                        return {
                            s: r,
                            n: function() {
                                return i >= t.length ? {
                                    done: !0
                                } : {
                                    done: !1,
                                    value: t[i++]
                                }
                            },
                            e: function(t) {
                                throw t
                            },
                            f: r
                        }
                    }
                    throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                }
                var o, c = !0,
                    l = !1;
                return {
                    s: function() {
                        n = t[Symbol.iterator]()
                    },
                    n: function() {
                        var t = n.next();
                        return c = t.done, t
                    },
                    e: function(t) {
                        l = !0, o = t
                    },
                    f: function() {
                        try {
                            c || null == n.return || n.return()
                        } finally {
                            if (l) throw o
                        }
                    }
                }
            }

            function v(t, e) {
                (null == e || e > t.length) && (e = t.length);
                for (var i = 0, n = new Array(e); i < e; i++) n[i] = t[i];
                return n
            }

            function y(t) {
                f.default.config.errorHandler && f.default.config.errorHandler(t)
            }

            function _(t) {
                return t.then((function(t) {
                    return t.default || t
                }))
            }

            function w(t) {
                return t.$options && "function" == typeof t.$options.fetch && !t.$options.fetch.length
            }

            function x(t) {
                var e, n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : [],
                    r = t.$children || [],
                    o = m(r);
                try {
                    for (o.s(); !(e = o.n()).done;) {
                        var c = e.value;
                        c.$fetch ? n.push(c) : c.$children && x(c, n)
                    }
                } catch (t) {
                    o.e(t)
                } finally {
                    o.f()
                }
                return n
            }

            function k(t, e) {
                if (e || !t.options.__hasNuxtData) {
                    var n = t.options._originDataFn || t.options.data || function() {
                        return {}
                    };
                    t.options._originDataFn = n, t.options.data = function() {
                        var data = n.call(this, this);
                        return this.$ssrContext && (e = this.$ssrContext.asyncData[t.cid]), h(h({}, data), e)
                    }, t.options.__hasNuxtData = !0, t._Ctor && t._Ctor.options && (t._Ctor.options.data = t.options.data)
                }
            }

            function O(t) {
                return t.options && t._Ctor === t || (t.options ? (t._Ctor = t, t.extendOptions = t.options) : (t = f.default.extend(t))._Ctor = t, !t.options.name && t.options.__file && (t.options.name = t.options.__file)), t
            }

            function j(t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                    n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "components";
                return Array.prototype.concat.apply([], t.matched.map((function(t, r) {
                    return Object.keys(t[n]).map((function(o) {
                        return e && e.push(r), t[n][o]
                    }))
                })))
            }

            function C(t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
                return j(t, e, "instances")
            }

            function R(t, e) {
                return Array.prototype.concat.apply([], t.matched.map((function(t, n) {
                    return Object.keys(t.components).reduce((function(r, o) {
                        return t.components[o] ? r.push(e(t.components[o], t.instances[o], t, o, n)) : delete t.components[o], r
                    }), [])
                })))
            }

            function $(t, e) {
                return Promise.all(R(t, function() {
                    var t = Object(c.a)(regeneratorRuntime.mark((function t(n, r, o, c) {
                        return regeneratorRuntime.wrap((function(t) {
                            for (;;) switch (t.prev = t.next) {
                                case 0:
                                    if ("function" != typeof n || n.options) {
                                        t.next = 4;
                                        break
                                    }
                                    return t.next = 3, n();
                                case 3:
                                    n = t.sent;
                                case 4:
                                    return o.components[c] = n = O(n), t.abrupt("return", "function" == typeof e ? e(n, r, o, c) : n);
                                case 6:
                                case "end":
                                    return t.stop()
                            }
                        }), t)
                    })));
                    return function(e, n, r, o) {
                        return t.apply(this, arguments)
                    }
                }()))
            }

            function P(t) {
                return S.apply(this, arguments)
            }

            function S() {
                return (S = Object(c.a)(regeneratorRuntime.mark((function t(e) {
                    return regeneratorRuntime.wrap((function(t) {
                        for (;;) switch (t.prev = t.next) {
                            case 0:
                                if (e) {
                                    t.next = 2;
                                    break
                                }
                                return t.abrupt("return");
                            case 2:
                                return t.next = 4, $(e);
                            case 4:
                                return t.abrupt("return", h(h({}, e), {}, {
                                    meta: j(e).map((function(t, n) {
                                        return h(h({}, t.options.meta), (e.matched[n] || {}).meta)
                                    }))
                                }));
                            case 5:
                            case "end":
                                return t.stop()
                        }
                    }), t)
                })))).apply(this, arguments)
            }

            function E(t, e) {
                return L.apply(this, arguments)
            }

            function L() {
                return (L = Object(c.a)(regeneratorRuntime.mark((function t(e, n) {
                    var c, l, f, d;
                    return regeneratorRuntime.wrap((function(t) {
                        for (;;) switch (t.prev = t.next) {
                            case 0:
                                return e.context || (e.context = {
                                    isStatic: !1,
                                    isDev: !1,
                                    isHMR: !1,
                                    app: e,
                                    store: e.store,
                                    payload: n.payload,
                                    error: n.error,
                                    base: "/",
                                    env: {}
                                }, n.req && (e.context.req = n.req), n.res && (e.context.res = n.res), n.ssrContext && (e.context.ssrContext = n.ssrContext), e.context.redirect = function(t, path, n) {
                                    if (t) {
                                        e.context._redirected = !0;
                                        var r = Object(o.a)(path);
                                        if ("number" == typeof t || "undefined" !== r && "object" !== r || (n = path || {}, path = t, r = Object(o.a)(path), t = 302), "object" === r && (path = e.router.resolve(path).route.fullPath), !/(^[.]{1,2}\/)|(^\/(?!\/))/.test(path)) throw path = H(path, n), window.location.replace(path), new Error("ERR_REDIRECT");
                                        e.context.next({
                                            path: path,
                                            query: n,
                                            status: t
                                        })
                                    }
                                }, e.context.nuxtState = window._data__), t.next = 3, Promise.all([P(n.route), P(n.from)]);
                            case 3:
                                c = t.sent, l = Object(r.a)(c, 2), f = l[0], d = l[1], n.route && (e.context.route = f), n.from && (e.context.from = d), e.context.next = n.next, e.context._redirected = !1, e.context._errored = !1, e.context.isHMR = !1, e.context.params = e.context.route.params || {}, e.context.query = e.context.route.query || {};
                            case 15:
                            case "end":
                                return t.stop()
                        }
                    }), t)
                })))).apply(this, arguments)
            }

            function N(t, e) {
                return !t.length || e._redirected || e._errored ? Promise.resolve() : A(t[0], e).then((function() {
                    return N(t.slice(1), e)
                }))
            }

            function A(t, e) {
                var n;
                return (n = 2 === t.length ? new Promise((function(n) {
                    t(e, (function(t, data) {
                        t && e.error(t), n(data = data || {})
                    }))
                })) : t(e)) && n instanceof Promise && "function" == typeof n.then ? n : Promise.resolve(n)
            }

            function T(base, t) {
                var path = decodeURI(window.location.pathname);
                return "hash" === t ? window.location.hash.replace(/^#\//, "") : (base && (path.endsWith("/") ? path : path + "/").startsWith(base) && (path = path.slice(base.length)), (path || "/") + window.location.search + window.location.hash)
            }

            function D(t, e) {
                return function(t, e) {
                    for (var n = new Array(t.length), i = 0; i < t.length; i++) "object" === Object(o.a)(t[i]) && (n[i] = new RegExp("^(?:" + t[i].pattern + ")$", K(e)));
                    return function(e, r) {
                        for (var path = "", data = e || {}, o = (r || {}).pretty ? U : encodeURIComponent, c = 0; c < t.length; c++) {
                            var l = t[c];
                            if ("string" != typeof l) {
                                var f = data[l.name || "pathMatch"],
                                    d = void 0;
                                if (null == f) {
                                    if (l.optional) {
                                        l.partial && (path += l.prefix);
                                        continue
                                    }
                                    throw new TypeError('Expected "' + l.name + '" to be defined')
                                }
                                if (Array.isArray(f)) {
                                    if (!l.repeat) throw new TypeError('Expected "' + l.name + '" to not repeat, but received `' + JSON.stringify(f) + "`");
                                    if (0 === f.length) {
                                        if (l.optional) continue;
                                        throw new TypeError('Expected "' + l.name + '" to not be empty')
                                    }
                                    for (var h = 0; h < f.length; h++) {
                                        if (d = o(f[h]), !n[c].test(d)) throw new TypeError('Expected all "' + l.name + '" to match "' + l.pattern + '", but received `' + JSON.stringify(d) + "`");
                                        path += (0 === h ? l.prefix : l.delimiter) + d
                                    }
                                } else {
                                    if (d = l.asterisk ? U(f, !0) : o(f), !n[c].test(d)) throw new TypeError('Expected "' + l.name + '" to match "' + l.pattern + '", but received "' + d + '"');
                                    path += l.prefix + d
                                }
                            } else path += l
                        }
                        return path
                    }
                }(function(t, e) {
                    var n, r = [],
                        o = 0,
                        c = 0,
                        path = "",
                        l = e && e.delimiter || "/";
                    for (; null != (n = F.exec(t));) {
                        var f = n[0],
                            d = n[1],
                            h = n.index;
                        if (path += t.slice(c, h), c = h + f.length, d) path += d[1];
                        else {
                            var m = t[c],
                                v = n[2],
                                y = n[3],
                                _ = n[4],
                                w = n[5],
                                x = n[6],
                                k = n[7];
                            path && (r.push(path), path = "");
                            var O = null != v && null != m && m !== v,
                                j = "+" === x || "*" === x,
                                C = "?" === x || "*" === x,
                                R = n[2] || l,
                                pattern = _ || w;
                            r.push({
                                name: y || o++,
                                prefix: v || "",
                                delimiter: R,
                                optional: C,
                                repeat: j,
                                partial: O,
                                asterisk: Boolean(k),
                                pattern: pattern ? W(pattern) : k ? ".*" : "[^" + B(R) + "]+?"
                            })
                        }
                    }
                    c < t.length && (path += t.substr(c));
                    path && r.push(path);
                    return r
                }(t, e), e)
            }

            function I(t, e) {
                var n = {},
                    r = h(h({}, t), e);
                for (var o in r) String(t[o]) !== String(e[o]) && (n[o] = !0);
                return n
            }

            function M(t) {
                var e;
                if (t.message || "string" == typeof t) e = t.message || t;
                else try {
                    e = JSON.stringify(t, null, 2)
                } catch (n) {
                    e = "[".concat(t.constructor.name, "]")
                }
                return h(h({}, t), {}, {
                    message: e,
                    statusCode: t.statusCode || t.status || t.response && t.response.status || 500
                })
            }
            window.onNuxtReadyCbs = [], window.onNuxtReady = function(t) {
                window.onNuxtReadyCbs.push(t)
            };
            var F = new RegExp(["(\\\\.)", "([\\/.])?(?:(?:\\:(\\w+)(?:\\(((?:\\\\.|[^\\\\()])+)\\))?|\\(((?:\\\\.|[^\\\\()])+)\\))([+*?])?|(\\*))"].join("|"), "g");

            function U(t, e) {
                var n = e ? /[?#]/g : /[/?#]/g;
                return encodeURI(t).replace(n, (function(t) {
                    return "%" + t.charCodeAt(0).toString(16).toUpperCase()
                }))
            }

            function B(t) {
                return t.replace(/([.+*?=^!:${}()[\]|/\\])/g, "\\$1")
            }

            function W(t) {
                return t.replace(/([=!:$/()])/g, "\\$1")
            }

            function K(t) {
                return t && t.sensitive ? "" : "i"
            }

            function H(t, e) {
                var n, o = t.indexOf("://"); - 1 !== o ? (n = t.substring(0, o), t = t.substring(o + 3)) : t.startsWith("//") && (t = t.substring(2));
                var c, l = t.split("/"),
                    f = (n ? n + "://" : "//") + l.shift(),
                    path = l.join("/");
                if ("" === path && 1 === l.length && (f += "/"), 2 === (l = path.split("#")).length) {
                    var d = l,
                        h = Object(r.a)(d, 2);
                    path = h[0], c = h[1]
                }
                return f += path ? "/" + path : "", e && "{}" !== JSON.stringify(e) && (f += (2 === t.split("?").length ? "&" : "?") + function(t) {
                    return Object.keys(t).sort().map((function(e) {
                        var n = t[e];
                        return null == n ? "" : Array.isArray(n) ? n.slice().map((function(t) {
                            return [e, "=", t].join("")
                        })).join("&") : e + "=" + n
                    })).filter(Boolean).join("&")
                }(e)), f += c ? "#" + c : ""
            }

            function z(t, e, n) {
                t.$options[e] || (t.$options[e] = []), t.$options[e].includes(n) || t.$options[e].push(n)
            }

            function X(path) {
                return path.replace(/\/+$/, "") || "/"
            }

            function V(t, e) {
                return X(t) === X(e)
            }
        },
        107: function(t, e, n) {
            "use strict";
            n.r(e);
            n(10), n(11), n(8), n(35);
            var r = n(9),
                o = n(17),
                c = n(12),
                l = n(13),
                f = n(4),
                d = n(5),
                h = n(7);

            function m(t) {
                var e = function() {
                    if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                    if (Reflect.construct.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}))), !0
                    } catch (t) {
                        return !1
                    }
                }();
                return function() {
                    var n, r = Object(f.a)(t);
                    if (e) {
                        var o = Object(f.a)(this).constructor;
                        n = Reflect.construct(r, arguments, o)
                    } else n = r.apply(this, arguments);
                    return Object(l.a)(this, n)
                }
            }
            var v = function(t, e, n, desc) {
                    var r, o = arguments.length,
                        c = o < 3 ? e : null === desc ? desc = Object.getOwnPropertyDescriptor(e, n) : desc;
                    if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(d.a)(Reflect)) && "function" == typeof Reflect.decorate) c = Reflect.decorate(t, e, n, desc);
                    else
                        for (var i = t.length - 1; i >= 0; i--)(r = t[i]) && (c = (o < 3 ? r(c) : o > 3 ? r(e, n, c) : r(e, n)) || c);
                    return o > 3 && c && Object.defineProperty(e, n, c), c
                },
                y = function(t) {
                    Object(c.a)(n, t);
                    var e = m(n);

                    function n() {
                        var t;
                        return Object(r.a)(this, n), (t = e.apply(this, arguments)).connected = !1, t.user = {
                            id: 0,
                            username: "",
                            motto: "",
                            look: "fa-1201-1408.sh-295-110.cc-3827-1263-1230.he-3082-63.hr-3871-61.ea-1402-73.hd-180-2.ch-3368-110-1408.ca-3177-110-73.lg-3596-110-1408.wa-5238-1330",
                            jetons: 0,
                            vip_points: 0,
                            rank: 1
                        }, t
                    }
                    return Object(o.a)(n, [{
                        key: "setConnected",
                        value: function(t) {
                            this.connected = t
                        }
                    }, {
                        key: "setUser",
                        value: function(t) {
                            this.user = t
                        }
                    }, {
                        key: "updateMail",
                        value: function(t) {
                            this.user.mail = t
                        }
                    }, {
                        key: "updateJetons",
                        value: function(t) {
                            this.user.jetons = t
                        }
                    }, {
                        key: "updatePoints",
                        value: function(t) {
                            this.user.vip_points = t
                        }
                    }, {
                        key: "updateSettings",
                        value: function(t) {
                            this.user.block_newfriends = t.textamigo ? "0" : "1", this.user.hide_online = t.online ? "0" : "1", this.user.hide_inroom = t.join ? "0" : "1", this.user.accept_trading = t.troc ? "1" : "0"
                        }
                    }]), n
                }(h.c);
            v([h.b], y.prototype, "setConnected", null), v([h.b], y.prototype, "setUser", null), v([h.b], y.prototype, "updateMail", null), v([h.b], y.prototype, "updateJetons", null), v([h.b], y.prototype, "updatePoints", null), v([h.b], y.prototype, "updateSettings", null), y = v([Object(h.a)({
                name: "AuthModule",
                stateFactory: !0,
                namespaced: !0
            })], y), e.default = y
        },
        108: function(t, e, n) {
            "use strict";
            n.r(e);
            n(10), n(11), n(8), n(35);
            var r = n(9),
                o = n(17),
                c = n(12),
                l = n(13),
                f = n(4),
                d = n(5),
                h = n(7);

            function m(t) {
                var e = function() {
                    if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                    if (Reflect.construct.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}))), !0
                    } catch (t) {
                        return !1
                    }
                }();
                return function() {
                    var n, r = Object(f.a)(t);
                    if (e) {
                        var o = Object(f.a)(this).constructor;
                        n = Reflect.construct(r, arguments, o)
                    } else n = r.apply(this, arguments);
                    return Object(l.a)(this, n)
                }
            }
            var v = function(t, e, n, desc) {
                    var r, o = arguments.length,
                        c = o < 3 ? e : null === desc ? desc = Object.getOwnPropertyDescriptor(e, n) : desc;
                    if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(d.a)(Reflect)) && "function" == typeof Reflect.decorate) c = Reflect.decorate(t, e, n, desc);
                    else
                        for (var i = t.length - 1; i >= 0; i--)(r = t[i]) && (c = (o < 3 ? r(c) : o > 3 ? r(e, n, c) : r(e, n)) || c);
                    return o > 3 && c && Object.defineProperty(e, n, c), c
                },
                y = function(t) {
                    Object(c.a)(n, t);
                    var e = m(n);

                    function n() {
                        var t;
                        return Object(r.a)(this, n), (t = e.apply(this, arguments)).stats = {
                            id: 0,
                            enable: !1,
                            health: 100,
                            healthMax: 100,
                            energy: 0,
                            hygiene: 0,
                            money: 0,
                            money1: 0,
                            money2: 0,
                            money3: 0,
                            money4: 0,
                            ammunition: 0,
                            level: 1
                        }, t.inventoryIsOpen = !1, t.inventoryItems = [], t.inventoryChoiceIsOpen = !1, t.inventoryChoiceItem = {
                            id: 0,
                            name: "",
                            desc: "",
                            count: 0,
                            usetype: 0
                        }, t.trocTargetSettings = {
                            userid: 0,
                            username: "",
                            accepte: !1,
                            confirme: !1
                        }, t.trocSettings = {
                            accepte: !1,
                            confirme: !1
                        }, t.trocMyItems = [], t.trocTargetItems = [], t
                    }
                    return Object(o.a)(n, [{
                        key: "setStats",
                        value: function(t) {
                            this.stats = t
                        }
                    }, {
                        key: "setInventoryIsOpen",
                        value: function(t) {
                            this.inventoryIsOpen = t
                        }
                    }, {
                        key: "setInventoryItems",
                        value: function(t) {
                            this.inventoryItems = t
                        }
                    }, {
                        key: "addInventoryItems",
                        value: function(t) {
                            var e = this.inventoryItems.filter((function(e) {
                                return e.id === t.id
                            }))[0];
                            null == e ? this.inventoryItems.push(t) : e.count += t.count
                        }
                    }, {
                        key: "removeItenvoryItem",
                        value: function(t) {
                            var e = this.inventoryItems.filter((function(e) {
                                return e.id === t
                            }))[0];
                            if (null != e && (e.count -= 1, e.count <= 0))
                                for (var i = 0; i < this.inventoryItems.length; i++)
                                    if (this.inventoryItems[i].id === t) {
                                        this.inventoryItems.splice(i, 1);
                                        break
                                    }
                        }
                    }, {
                        key: "setInventoryChoiceIsOpen",
                        value: function(t) {
                            this.inventoryChoiceIsOpen = t
                        }
                    }, {
                        key: "setInventoryChoiceItem",
                        value: function(t) {
                            null == t && (t = {
                                id: 0,
                                name: "",
                                desc: "",
                                count: 0,
                                usetype: 0
                            }), this.inventoryChoiceItem = t
                        }
                    }, {
                        key: "setTrocTargetSettings",
                        value: function(t) {
                            this.trocTargetSettings = t
                        }
                    }, {
                        key: "setTrocTargetSettingsConfirme",
                        value: function(t) {
                            this.trocTargetSettings.confirme = t
                        }
                    }, {
                        key: "setTrocTargetSettingsAccepte",
                        value: function(t) {
                            this.trocTargetSettings.accepte = t, this.trocTargetSettings.confirme = !1
                        }
                    }, {
                        key: "setTrocSettings",
                        value: function(t) {
                            this.trocSettings = t
                        }
                    }, {
                        key: "setTrocMyItems",
                        value: function(t) {
                            this.trocMyItems = t
                        }
                    }, {
                        key: "setTrocTargetItems",
                        value: function(t) {
                            this.trocTargetItems = t
                        }
                    }]), n
                }(h.c);
            v([h.b], y.prototype, "setStats", null), v([h.b], y.prototype, "setInventoryIsOpen", null), v([h.b], y.prototype, "setInventoryItems", null), v([h.b], y.prototype, "addInventoryItems", null), v([h.b], y.prototype, "removeItenvoryItem", null), v([h.b], y.prototype, "setInventoryChoiceIsOpen", null), v([h.b], y.prototype, "setInventoryChoiceItem", null), v([h.b], y.prototype, "setTrocTargetSettings", null), v([h.b], y.prototype, "setTrocTargetSettingsConfirme", null), v([h.b], y.prototype, "setTrocTargetSettingsAccepte", null), v([h.b], y.prototype, "setTrocSettings", null), v([h.b], y.prototype, "setTrocMyItems", null), v([h.b], y.prototype, "setTrocTargetItems", null), y = v([Object(h.a)({
                name: "RoleplayModule",
                stateFactory: !0,
                namespaced: !0
            })], y), e.default = y
        },
        110: function(t, e, n) {
            n(20);
            var r = n(214);

            function o() {
                return (o = r(regeneratorRuntime.mark((function t() {
                    var e, r, o;
                    return regeneratorRuntime.wrap((function(t) {
                        for (;;) switch (t.prev = t.next) {
                            case 0:
                                if (!(!1 in navigator)) {
                                    t.next = 2;
                                    break
                                }
                                throw new Error("serviceWorker is not supported in current browser!");
                            case 2:
                                return t.next = 4, n.e(54).then(n.bind(null, 241));
                            case 4:
                                return e = t.sent, r = e.Workbox, o = new r("/sw.js", {
                                    scope: "/"
                                }), t.next = 9, o.register();
                            case 9:
                                return t.abrupt("return", o);
                            case 10:
                            case "end":
                                return t.stop()
                        }
                    }), t)
                })))).apply(this, arguments)
            }
            window.$workbox = function() {
                return o.apply(this, arguments)
            }().catch((function(t) {}))
        },
        134: function(t, e, n) {},
        135: function(t, e, n) {},
        136: function(t, e, n) {},
        137: function(t, e, n) {},
        138: function(t, e, n) {},
        139: function(t, e, n) {},
        14: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, "state", (function() {
                return _
            })), n.d(e, "actions", (function() {
                return w
            })), n.d(e, "plugins", (function() {
                return x
            })), n.d(e, "initialiseStores", (function() {
                return y
            })), n.d(e, "AuthStore", (function() {
                return r
            })), n.d(e, "RoleplayStore", (function() {
                return o
            }));
            n(20);
            var r, o, c = n(3),
                l = n(83),
                f = n(24),
                d = n.n(f),
                h = n(7),
                m = n(107),
                v = n(108);

            function y(t) {
                r = Object(h.d)(m.default, t), o = Object(h.d)(v.default, t)
            }
            var _ = function() {
                    return {}
                },
                w = {
                    nuxtServerInit: function(t, e) {
                        var n = this;
                        return Object(c.a)(regeneratorRuntime.mark((function o() {
                            var c, f;
                            return regeneratorRuntime.wrap((function(o) {
                                for (;;) switch (o.prev = o.next) {
                                    case 0:
                                        if (t.commit, c = e.req, Object(l.a)(c, "token")) {
                                            o.next = 5;
                                            break
                                        }
                                        return o.abrupt("return");
                                    case 5:
                                        return o.prev = 5, o.next = 8, n.$axios.$get("/api/v1/userdata");
                                    case 8:
                                        f = o.sent, r.setUser(f), r.setConnected(!0), o.next = 16;
                                        break;
                                    case 13:
                                        o.prev = 13, o.t0 = o.catch(5), d.a.remove("token");
                                    case 16:
                                    case "end":
                                        return o.stop()
                                }
                            }), o, null, [
                                [5, 13]
                            ])
                        })))()
                    },
                    nuxtClientInit: function(t, e) {
                        return Object(c.a)(regeneratorRuntime.mark((function n() {
                            return regeneratorRuntime.wrap((function(n) {
                                for (;;) switch (n.prev = n.next) {
                                    case 0:
                                        if (t.commit, e.req, d.a.get("token")) {
                                            n.next = 5;
                                            break
                                        }
                                        return n.abrupt("return");
                                    case 5:
                                        if (!r.connected) {
                                            n.next = 7;
                                            break
                                        }
                                        return n.abrupt("return");
                                    case 7:
                                        d.a.remove("token");
                                    case 8:
                                    case "end":
                                        return n.stop()
                                }
                            }), n)
                        })))()
                    }
                },
                x = [function(t) {
                    return y(t)
                }]
        },
        140: function(t, e, n) {},
        141: function(t, e, n) {},
        142: function(t, e, n) {},
        154: function(t) {
            t.exports = JSON.parse('{"title":"Akiled","meta":[{"hid":"charset","charset":"utf-8"},{"hid":"viewport","name":"viewport","content":"width=device-width, initial-scale=1"},{"hid":"mobile-web-app-capable","name":"mobile-web-app-capable","content":"yes"},{"hid":"apple-mobile-web-app-title","name":"apple-mobile-web-app-title","content":"Akiled"},{"hid":"author","name":"author","content":"JasonDhose#0001"},{"hid":"description","name":"description","content":"Haz amigos, diviértete, hazte conocido"},{"hid":"og:type","name":"og:type","property":"og:type","content":"website"},{"hid":"og:title","name":"og:title","property":"og:title","content":"Akiled"},{"hid":"og:site_name","name":"og:site_name","property":"og:site_name","content":"Akiled"},{"hid":"og:description","name":"og:description","property":"og:description","content":"Haz amigos, diviértete, hazte conocido"}],"link":[{"rel":"shortcut icon","href":"/data/icons/icon_64x64.56e93e.png"},{"rel":"apple-touch-icon","href":"/data/icons/icon_512x512.56e93e.png","sizes":"512x512"},{"rel":"manifest","href":"/data/manifest.c5b0c5af.json","hid":"manifest"}],"htmlAttrs":{"lang":"es"}}')
        },
        155: function(t, e, n) {
            n(33), n(41), n(34), n(40), n(42), n(10), n(11), n(8), n(57);
            var r = n(215);

            function o(t, e) {
                var n;
                if ("undefined" == typeof Symbol || null == t[Symbol.iterator]) {
                    if (Array.isArray(t) || (n = function(t, e) {
                            if (!t) return;
                            if ("string" == typeof t) return c(t, e);
                            var n = Object.prototype.toString.call(t).slice(8, -1);
                            "Object" === n && t.constructor && (n = t.constructor.name);
                            if ("Map" === n || "Set" === n) return Array.from(t);
                            if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return c(t, e)
                        }(t)) || e && t && "number" == typeof t.length) {
                        n && (t = n);
                        var i = 0,
                            r = function() {};
                        return {
                            s: r,
                            n: function() {
                                return i >= t.length ? {
                                    done: !0
                                } : {
                                    done: !1,
                                    value: t[i++]
                                }
                            },
                            e: function(t) {
                                throw t
                            },
                            f: r
                        }
                    }
                    throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                }
                var o, l = !0,
                    f = !1;
                return {
                    s: function() {
                        n = t[Symbol.iterator]()
                    },
                    n: function() {
                        var t = n.next();
                        return l = t.done, t
                    },
                    e: function(t) {
                        f = !0, o = t
                    },
                    f: function() {
                        try {
                            l || null == n.return || n.return()
                        } finally {
                            if (f) throw o
                        }
                    }
                }
            }

            function c(t, e) {
                (null == e || e > t.length) && (e = t.length);
                for (var i = 0, n = new Array(e); i < e; i++) n[i] = t[i];
                return n
            }

            function l(t, e, n) {
                return t.find((function(t) {
                    return n ? t[e] === n : t[e]
                }))
            }
            n(27), t.exports = function(t, e) {
                if ("function" != typeof t)
                    for (var n in e) {
                        var c = e[n];
                        if (Array.isArray(c)) {
                            t[n] = t[n] || [];
                            var f, d = o(c);
                            try {
                                for (d.s(); !(f = d.n()).done;) {
                                    var h = f.value;
                                    h.hid && l(t[n], "hid", h.hid) || h.name && l(t[n], "name", h.name) || t[n].push(h)
                                }
                            } catch (t) {
                                d.e(t)
                            } finally {
                                d.f()
                            }
                        } else if ("object" === r(c))
                            for (var m in t[n] = t[n] || {}, c) t[n][m] = c[m];
                        else void 0 === t[n] && (t[n] = c)
                    } else console.warn("Cannot merge meta. Avoid using head as a function!")
            }
        },
        161: function(t, e, n) {
            "use strict";
            n(8), n(20);
            var r = n(3),
                o = n(2),
                c = n(1),
                l = window._data__;

            function f() {
                if (!this._hydrated) return this.$fetch()
            }

            function d() {
                if ((t = this).$vnode && t.$vnode.elm && t.$vnode.elm.dataset && t.$vnode.elm.dataset.fetchKey) {
                    var t;
                    this._hydrated = !0, this._fetchKey = +this.$vnode.elm.dataset.fetchKey;
                    var data = l.fetch[this._fetchKey];
                    if (data && data._error) this.$fetchState.error = data._error;
                    else
                        for (var e in data) o.default.set(this.$data, e, data[e])
                }
            }

            function h() {
                var t = this;
                return this._fetchPromise || (this._fetchPromise = m.call(this).then((function() {
                    delete t._fetchPromise
                }))), this._fetchPromise
            }

            function m() {
                return v.apply(this, arguments)
            }

            function v() {
                return (v = Object(r.a)(regeneratorRuntime.mark((function t() {
                    var e, n, r, o = this;
                    return regeneratorRuntime.wrap((function(t) {
                        for (;;) switch (t.prev = t.next) {
                            case 0:
                                return this.$nuxt.nbFetching++, this.$fetchState.pending = !0, this.$fetchState.error = null, this._hydrated = !1, e = null, n = Date.now(), t.prev = 6, t.next = 9, this.$options.fetch.call(this);
                            case 9:
                                t.next = 15;
                                break;
                            case 11:
                                t.prev = 11, t.t0 = t.catch(6), e = Object(c.p)(t.t0);
                            case 15:
                                if (!((r = this._fetchDelay - (Date.now() - n)) > 0)) {
                                    t.next = 19;
                                    break
                                }
                                return t.next = 19, new Promise((function(t) {
                                    return setTimeout(t, r)
                                }));
                            case 19:
                                this.$fetchState.error = e, this.$fetchState.pending = !1, this.$fetchState.timestamp = Date.now(), this.$nextTick((function() {
                                    return o.$nuxt.nbFetching--
                                }));
                            case 23:
                            case "end":
                                return t.stop()
                        }
                    }), t, this, [
                        [6, 11]
                    ])
                })))).apply(this, arguments)
            }
            e.a = {
                beforeCreate: function() {
                    Object(c.l)(this) && (this._fetchDelay = "number" == typeof this.$options.fetchDelay ? this.$options.fetchDelay : 200, o.default.util.defineReactive(this, "$fetchState", {
                        pending: !1,
                        error: null,
                        timestamp: Date.now()
                    }), this.$fetch = h.bind(this), Object(c.a)(this, "created", d), Object(c.a)(this, "beforeMount", f))
                }
            }
        },
        172: function(t, e, n) {
            t.exports = n(173)
        },
        173: function(t, e, n) {
            "use strict";
            n.r(e),
                function(t) {
                    n(41), n(34), n(42), n(10), n(11), n(40);
                    var e = n(5),
                        r = (n(20), n(117), n(3)),
                        o = (n(36), n(43), n(33), n(8), n(54), n(27), n(118), n(182), n(186), n(188), n(2)),
                        c = n(152),
                        l = n(68),
                        f = n(1),
                        d = n(44),
                        h = n(161),
                        m = n(85);

                    function v(t, e) {
                        var n;
                        if ("undefined" == typeof Symbol || null == t[Symbol.iterator]) {
                            if (Array.isArray(t) || (n = function(t, e) {
                                    if (!t) return;
                                    if ("string" == typeof t) return y(t, e);
                                    var n = Object.prototype.toString.call(t).slice(8, -1);
                                    "Object" === n && t.constructor && (n = t.constructor.name);
                                    if ("Map" === n || "Set" === n) return Array.from(t);
                                    if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return y(t, e)
                                }(t)) || e && t && "number" == typeof t.length) {
                                n && (t = n);
                                var i = 0,
                                    r = function() {};
                                return {
                                    s: r,
                                    n: function() {
                                        return i >= t.length ? {
                                            done: !0
                                        } : {
                                            done: !1,
                                            value: t[i++]
                                        }
                                    },
                                    e: function(t) {
                                        throw t
                                    },
                                    f: r
                                }
                            }
                            throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                        }
                        var o, c = !0,
                            l = !1;
                        return {
                            s: function() {
                                n = t[Symbol.iterator]()
                            },
                            n: function() {
                                var t = n.next();
                                return c = t.done, t
                            },
                            e: function(t) {
                                l = !0, o = t
                            },
                            f: function() {
                                try {
                                    c || null == n.return || n.return()
                                } finally {
                                    if (l) throw o
                                }
                            }
                        }
                    }

                    function y(t, e) {
                        (null == e || e > t.length) && (e = t.length);
                        for (var i = 0, n = new Array(e); i < e; i++) n[i] = t[i];
                        return n
                    }
                    o.default._data__fetch__mixin__ || (o.default.mixin(h.a), o.default._data__fetch__mixin__ = !0), o.default.component(m.a.name, m.a), o.default.component("NLink", m.a), t.fetch || (t.fetch = c.a);
                    var _, w, x = [],
                        k = window._data__ || {};
                    Object.assign(o.default.config, {
                        silent: !0,
                        performance: !1
                    });
                    var O = o.default.config.errorHandler || console.error;

                    function j(t, e, n) {
                        for (var r = function(component) {
                                var t = function(component, t) {
                                    if (!component || !component.options || !component.options[t]) return {};
                                    var option = component.options[t];
                                    if ("function" == typeof option) {
                                        for (var e = arguments.length, n = new Array(e > 2 ? e - 2 : 0), r = 2; r < e; r++) n[r - 2] = arguments[r];
                                        return option.apply(void 0, n)
                                    }
                                    return option
                                }(component, "transition", e, n) || {};
                                return "string" == typeof t ? {
                                    name: t
                                } : t
                            }, o = n ? Object(f.g)(n) : [], c = Math.max(t.length, o.length), l = [], d = function(i) {
                                var e = Object.assign({}, r(t[i])),
                                    n = Object.assign({}, r(o[i]));
                                Object.keys(e).filter((function(t) {
                                    return void 0 !== e[t] && !t.toLowerCase().includes("leave")
                                })).forEach((function(t) {
                                    n[t] = e[t]
                                })), l.push(n)
                            }, i = 0; i < c; i++) d(i);
                        return l
                    }

                    function C(t, e, n) {
                        return R.apply(this, arguments)
                    }

                    function R() {
                        return (R = Object(r.a)(regeneratorRuntime.mark((function t(e, n, r) {
                            var o, c, l, d, h = this;
                            return regeneratorRuntime.wrap((function(t) {
                                for (;;) switch (t.prev = t.next) {
                                    case 0:
                                        if (this._routeChanged = Boolean(_.nuxt.err) || n.name !== e.name, this._paramChanged = !this._routeChanged && n.path !== e.path, this._queryChanged = !this._paramChanged && n.fullPath !== e.fullPath, this._diffQuery = this._queryChanged ? Object(f.i)(e.query, n.query) : [], (this._routeChanged || this._paramChanged) && this.$loading.start && !this.$loading.manual && this.$loading.start(), t.prev = 5, !this._queryChanged) {
                                            t.next = 12;
                                            break
                                        }
                                        return t.next = 9, Object(f.r)(e, (function(t, e) {
                                            return {
                                                Component: t,
                                                instance: e
                                            }
                                        }));
                                    case 9:
                                        o = t.sent, o.some((function(t) {
                                            var r = t.Component,
                                                o = t.instance,
                                                c = r.options.watchQuery;
                                            return !0 === c || (Array.isArray(c) ? c.some((function(t) {
                                                return h._diffQuery[t]
                                            })) : "function" == typeof c && c.apply(o, [e.query, n.query]))
                                        })) && this.$loading.start && !this.$loading.manual && this.$loading.start();
                                    case 12:
                                        r(), t.next = 26;
                                        break;
                                    case 15:
                                        if (t.prev = 15, t.t0 = t.catch(5), c = t.t0 || {}, l = c.statusCode || c.status || c.response && c.response.status || 500, d = c.message || "", !/^Loading( CSS)? chunk (\d)+ failed\./.test(d)) {
                                            t.next = 23;
                                            break
                                        }
                                        return window.location.reload(!0), t.abrupt("return");
                                    case 23:
                                        this.error({
                                            statusCode: l,
                                            message: d
                                        }), this.$nuxt.$emit("routeChanged", e, n, c), r();
                                    case 26:
                                    case "end":
                                        return t.stop()
                                }
                            }), t, this, [
                                [5, 15]
                            ])
                        })))).apply(this, arguments)
                    }

                    function $(t, e) {
                        return k.serverRendered && e && Object(f.b)(t, e), t._Ctor = t, t
                    }

                    function P(t) {
                        var path = Object(f.f)(t.options.base, t.options.mode);
                        return Object(f.d)(t.match(path), function() {
                            var t = Object(r.a)(regeneratorRuntime.mark((function t(e, n, r, o, c) {
                                var l;
                                return regeneratorRuntime.wrap((function(t) {
                                    for (;;) switch (t.prev = t.next) {
                                        case 0:
                                            if ("function" != typeof e || e.options) {
                                                t.next = 4;
                                                break
                                            }
                                            return t.next = 3, e();
                                        case 3:
                                            e = t.sent;
                                        case 4:
                                            return l = $(Object(f.s)(e), k.data ? k.data[c] : null), r.components[o] = l, t.abrupt("return", l);
                                        case 7:
                                        case "end":
                                            return t.stop()
                                    }
                                }), t)
                            })));
                            return function(e, n, r, o, c) {
                                return t.apply(this, arguments)
                            }
                        }())
                    }

                    function S(t, e, n) {
                        var r = this,
                            o = ["nuxti18n"],
                            c = !1;
                        if (void 0 !== n && (o = [], (n = Object(f.s)(n)).options.middleware && (o = o.concat(n.options.middleware)), t.forEach((function(t) {
                                t.options.middleware && (o = o.concat(t.options.middleware))
                            }))), o = o.map((function(t) {
                                return "function" == typeof t ? t : ("function" != typeof l.a[t] && (c = !0, r.error({
                                    statusCode: 500,
                                    message: "Unknown middleware " + t
                                })), l.a[t])
                            })), !c) return Object(f.o)(o, e)
                    }

                    function E(t, e, n) {
                        return L.apply(this, arguments)
                    }

                    function L() {
                        return (L = Object(r.a)(regeneratorRuntime.mark((function t(e, n, o) {
                            var c, l, h, m, y, w, k, O, C, R, $, P, E, L, N, A = this;
                            return regeneratorRuntime.wrap((function(t) {
                                for (;;) switch (t.prev = t.next) {
                                    case 0:
                                        if (!1 !== this._routeChanged || !1 !== this._paramChanged || !1 !== this._queryChanged) {
                                            t.next = 2;
                                            break
                                        }
                                        return t.abrupt("return", o());
                                    case 2:
                                        return !1, e === n ? (x = [], !0) : (c = [], x = Object(f.g)(n, c).map((function(t, i) {
                                            return Object(f.c)(n.matched[c[i]].path)(n.params)
                                        }))), l = !1, h = function(path) {
                                            n.path === path.path && A.$loading.finish && A.$loading.finish(), n.path !== path.path && A.$loading.pause && A.$loading.pause(), l || (l = !0, o(path))
                                        }, t.next = 8, Object(f.t)(_, {
                                            route: e,
                                            from: n,
                                            next: h.bind(this)
                                        });
                                    case 8:
                                        if (this._dateLastError = _.nuxt.dateErr, this._hadError = Boolean(_.nuxt.err), m = [], (y = Object(f.g)(e, m)).length) {
                                            t.next = 27;
                                            break
                                        }
                                        return t.next = 15, S.call(this, y, _.context);
                                    case 15:
                                        if (!l) {
                                            t.next = 17;
                                            break
                                        }
                                        return t.abrupt("return");
                                    case 17:
                                        return w = (d.a.options || d.a).layout, t.next = 20, this.loadLayout("function" == typeof w ? w.call(d.a, _.context) : w);
                                    case 20:
                                        return k = t.sent, t.next = 23, S.call(this, y, _.context, k);
                                    case 23:
                                        if (!l) {
                                            t.next = 25;
                                            break
                                        }
                                        return t.abrupt("return");
                                    case 25:
                                        return _.context.error({
                                            statusCode: 404,
                                            message: "This page could not be found"
                                        }), t.abrupt("return", o());
                                    case 27:
                                        return y.forEach((function(t) {
                                            t._Ctor && t._Ctor.options && (t.options.asyncData = t._Ctor.options.asyncData, t.options.fetch = t._Ctor.options.fetch)
                                        })), this.setTransitions(j(y, e, n)), t.prev = 29, t.next = 32, S.call(this, y, _.context);
                                    case 32:
                                        if (!l) {
                                            t.next = 34;
                                            break
                                        }
                                        return t.abrupt("return");
                                    case 34:
                                        if (!_.context._errored) {
                                            t.next = 36;
                                            break
                                        }
                                        return t.abrupt("return", o());
                                    case 36:
                                        return "function" == typeof(O = y[0].options.layout) && (O = O(_.context)), t.next = 40, this.loadLayout(O);
                                    case 40:
                                        return O = t.sent, t.next = 43, S.call(this, y, _.context, O);
                                    case 43:
                                        if (!l) {
                                            t.next = 45;
                                            break
                                        }
                                        return t.abrupt("return");
                                    case 45:
                                        if (!_.context._errored) {
                                            t.next = 47;
                                            break
                                        }
                                        return t.abrupt("return", o());
                                    case 47:
                                        C = !0, t.prev = 48, R = v(y), t.prev = 50, R.s();
                                    case 52:
                                        if (($ = R.n()).done) {
                                            t.next = 63;
                                            break
                                        }
                                        if ("function" == typeof(P = $.value).options.validate) {
                                            t.next = 56;
                                            break
                                        }
                                        return t.abrupt("continue", 61);
                                    case 56:
                                        return t.next = 58, P.options.validate(_.context);
                                    case 58:
                                        if (C = t.sent) {
                                            t.next = 61;
                                            break
                                        }
                                        return t.abrupt("break", 63);
                                    case 61:
                                        t.next = 52;
                                        break;
                                    case 63:
                                        t.next = 68;
                                        break;
                                    case 65:
                                        t.prev = 65, t.t0 = t.catch(50), R.e(t.t0);
                                    case 68:
                                        return t.prev = 68, R.f(), t.finish(68);
                                    case 71:
                                        t.next = 77;
                                        break;
                                    case 73:
                                        return t.prev = 73, t.t1 = t.catch(48), this.error({
                                            statusCode: t.t1.statusCode || "500",
                                            message: t.t1.message
                                        }), t.abrupt("return", o());
                                    case 77:
                                        if (C) {
                                            t.next = 80;
                                            break
                                        }
                                        return this.error({
                                            statusCode: 404,
                                            message: "This page could not be found"
                                        }), t.abrupt("return", o());
                                    case 80:
                                        return t.next = 82, Promise.all(y.map(function() {
                                            var t = Object(r.a)(regeneratorRuntime.mark((function t(r, i) {
                                                var o, c, l, d, h, v, y, w, p;
                                                return regeneratorRuntime.wrap((function(t) {
                                                    for (;;) switch (t.prev = t.next) {
                                                        case 0:
                                                            if (r._path = Object(f.c)(e.matched[m[i]].path)(e.params), r._dataRefresh = !1, o = r._path !== x[i], A._routeChanged && o ? r._dataRefresh = !0 : A._paramChanged && o ? (c = r.options.watchParam, r._dataRefresh = !1 !== c) : A._queryChanged && (!0 === (l = r.options.watchQuery) ? r._dataRefresh = !0 : Array.isArray(l) ? r._dataRefresh = l.some((function(t) {
                                                                    return A._diffQuery[t]
                                                                })) : "function" == typeof l && (E || (E = Object(f.h)(e)), r._dataRefresh = l.apply(E[i], [e.query, n.query]))), A._hadError || !A._isMounted || r._dataRefresh) {
                                                                t.next = 6;
                                                                break
                                                            }
                                                            return t.abrupt("return");
                                                        case 6:
                                                            return d = [], h = r.options.asyncData && "function" == typeof r.options.asyncData, v = Boolean(r.options.fetch) && r.options.fetch.length, y = h && v ? 30 : 45, h && ((w = Object(f.q)(r.options.asyncData, _.context)).then((function(t) {
                                                                Object(f.b)(r, t), A.$loading.increase && A.$loading.increase(y)
                                                            })), d.push(w)), A.$loading.manual = !1 === r.options.loading, v && ((p = r.options.fetch(_.context)) && (p instanceof Promise || "function" == typeof p.then) || (p = Promise.resolve(p)), p.then((function(t) {
                                                                A.$loading.increase && A.$loading.increase(y)
                                                            })), d.push(p)), t.abrupt("return", Promise.all(d));
                                                        case 14:
                                                        case "end":
                                                            return t.stop()
                                                    }
                                                }), t)
                                            })));
                                            return function(e, n) {
                                                return t.apply(this, arguments)
                                            }
                                        }()));
                                    case 82:
                                        l || (this.$loading.finish && !this.$loading.manual && this.$loading.finish(), o()), t.next = 99;
                                        break;
                                    case 85:
                                        if (t.prev = 85, t.t2 = t.catch(29), "ERR_REDIRECT" !== (L = t.t2 || {}).message) {
                                            t.next = 90;
                                            break
                                        }
                                        return t.abrupt("return", this.$nuxt.$emit("routeChanged", e, n, L));
                                    case 90:
                                        return x = [], Object(f.k)(L), "function" == typeof(N = (d.a.options || d.a).layout) && (N = N(_.context)), t.next = 96, this.loadLayout(N);
                                    case 96:
                                        this.error(L), this.$nuxt.$emit("routeChanged", e, n, L), o();
                                    case 99:
                                    case "end":
                                        return t.stop()
                                }
                            }), t, this, [
                                [29, 85],
                                [48, 73],
                                [50, 65, 68, 71]
                            ])
                        })))).apply(this, arguments)
                    }

                    function N(t, n) {
                        Object(f.d)(t, (function(t, n, r, c) {
                            return "object" !== Object(e.a)(t) || t.options || ((t = o.default.extend(t))._Ctor = t, r.components[c] = t), t
                        }))
                    }

                    function A(t) {
                        var e = Boolean(this.$options.nuxt.err);
                        this._hadError && this._dateLastError === this.$options.nuxt.dateErr && (e = !1);
                        var n = e ? (d.a.options || d.a).layout : t.matched[0].components.default.options.layout;
                        "function" == typeof n && (n = n(_.context)), this.setLayout(n)
                    }

                    function T(t) {
                        t._hadError && t._dateLastError === t.$options.nuxt.dateErr && t.error()
                    }

                    function D(t, e) {
                        var n = this;
                        if (!1 !== this._routeChanged || !1 !== this._paramChanged || !1 !== this._queryChanged) {
                            var r = Object(f.h)(t),
                                c = Object(f.g)(t);
                            o.default.nextTick((function() {
                                r.forEach((function(t, i) {
                                    if (t && !t._isDestroyed && t.constructor._dataRefresh && c[i] === t.constructor && !0 !== t.$vnode.data.keepAlive && "function" == typeof t.constructor.options.data) {
                                        var e = t.constructor.options.data.call(t);
                                        for (var n in e) o.default.set(t.$data, n, e[n]);
                                        window.$nuxt.$nextTick((function() {
                                            window.$nuxt.$emit("triggerScroll")
                                        }))
                                    }
                                })), T(n)
                            }))
                        }
                    }

                    function I(t) {
                        window.onNuxtReadyCbs.forEach((function(e) {
                            "function" == typeof e && e(t)
                        })), "function" == typeof window._onNuxtLoaded && window._onNuxtLoaded(t), w.afterEach((function(e, n) {
                            o.default.nextTick((function() {
                                return t.$nuxt.$emit("routeChanged", e, n)
                            }))
                        }))
                    }

                    function M() {
                        return (M = Object(r.a)(regeneratorRuntime.mark((function t(e) {
                            var n, r, c, l, d;
                            return regeneratorRuntime.wrap((function(t) {
                                for (;;) switch (t.prev = t.next) {
                                    case 0:
                                        return _ = e.app, w = e.router, e.store, n = new o.default(_), r = k.layout || "default", t.next = 7, n.loadLayout(r);
                                    case 7:
                                        return n.setLayout(r), c = function() {
                                            n.$mount("#_data"), w.afterEach(N), w.afterEach(A.bind(n)), w.afterEach(D.bind(n)), o.default.nextTick((function() {
                                                I(n)
                                            }))
                                        }, t.next = 11, Promise.all(P(w));
                                    case 11:
                                        if (l = t.sent, n.setTransitions = n.$options.nuxt.setTransitions.bind(n), l.length && (n.setTransitions(j(l, w.currentRoute)), x = w.currentRoute.matched.map((function(t) {
                                                return Object(f.c)(t.path)(w.currentRoute.params)
                                            }))), n.$loading = {}, k.error && n.error(k.error), w.beforeEach(C.bind(n)), w.beforeEach(E.bind(n)), !k.serverRendered || !Object(f.n)(k.routePath, n.context.route.path)) {
                                            t.next = 20;
                                            break
                                        }
                                        return t.abrupt("return", c());
                                    case 20:
                                        return d = function() {
                                            N(w.currentRoute, w.currentRoute), A.call(n, w.currentRoute), T(n), c()
                                        }, t.next = 23, new Promise((function(t) {
                                            return setTimeout(t, 0)
                                        }));
                                    case 23:
                                        E.call(n, w.currentRoute, w.currentRoute, (function(path) {
                                            if (path) {
                                                var t = w.afterEach((function(e, n) {
                                                    t(), d()
                                                }));
                                                w.push(path, void 0, (function(t) {
                                                    t && O(t)
                                                }))
                                            } else d()
                                        }));
                                    case 24:
                                    case "end":
                                        return t.stop()
                                }
                            }), t)
                        })))).apply(this, arguments)
                    }
                    Object(d.b)(null, k.config).then((function(t) {
                        return M.apply(this, arguments)
                    })).catch(O)
                }.call(this, n(37))
        },
        189: function(t, e, n) {
            "use strict";
            n.r(e);
            n(20);
            var r = n(3),
                o = n(14),
                c = function() {
                    var t = Object(r.a)(regeneratorRuntime.mark((function t(e) {
                        var n, r;
                        return regeneratorRuntime.wrap((function(t) {
                            for (;;) switch (t.prev = t.next) {
                                case 0:
                                    n = e.app, r = e.redirect, o.AuthStore.connected || r(n.localeRoute({
                                        name: "index"
                                    }));
                                case 2:
                                case "end":
                                    return t.stop()
                            }
                        }), t)
                    })));
                    return function(e) {
                        return t.apply(this, arguments)
                    }
                }();
            e.default = c
        },
        193: function(t, e, n) {
            "use strict";
            n.r(e);
            var r = n(14);
            e.default = function(t) {
                var e = t.app,
                    n = t.redirect;
                r.AuthStore.connected && n(e.localeRoute({
                    name: "me"
                }))
            }
        },
        204: function(t, e, n) {
            "use strict";
            n(134)
        },
        205: function(t, e, n) {
            "use strict";
            n(135)
        },
        206: function(t, e, n) {},
        207: function(t, e, n) {
            "use strict";
            n(136)
        },
        208: function(t, e, n) {
            "use strict";
            n(137)
        },
        209: function(t, e, n) {
            "use strict";
            n(138)
        },
        210: function(t, e, n) {
            "use strict";
            n(139)
        },
        211: function(t, e, n) {
            "use strict";
            n(140)
        },
        212: function(t, e, n) {
            "use strict";
            n(141)
        },
        213: function(t, e, n) {
            "use strict";
            n(142)
        },
        238: function(t, e, n) {
            "use strict";
            n.r(e), n.d(e, "loadLanguageAsync", (function() {
                return c
            }));
            n(8), n(57), n(36), n(43), n(20);
            var r = n(3),
                o = n(0);

            function c(t, e) {
                return l.apply(this, arguments)
            }

            function l() {
                return (l = Object(r.a)(regeneratorRuntime.mark((function t(e, r) {
                    var c, l, f, d, h, m, v;
                    return regeneratorRuntime.wrap((function(t) {
                        for (;;) switch (t.prev = t.next) {
                            case 0:
                                if ((c = e.app).i18n.loadedLanguages || (c.i18n.loadedLanguages = []), c.i18n.loadedLanguages.includes(r)) {
                                    t.next = 31;
                                    break
                                }
                                if (!(l = c.i18n.locales.find((function(t) {
                                        return t[o.b] === r
                                    })))) {
                                    t.next = 31;
                                    break
                                }
                                if (!(f = l[o.d])) {
                                    t.next = 30;
                                    break
                                }
                                if ((h = e.nuxtState) && h.__i18n && h.__i18n.langs[r] && (d = h.__i18n.langs[r]), d) {
                                    t.next = 27;
                                    break
                                }
                                return t.prev = 9, t.next = 12, n(239)("./".concat(f));
                            case 12:
                                if (m = t.sent, "function" != typeof(v = m.default || m)) {
                                    t.next = 20;
                                    break
                                }
                                return t.next = 17, Promise.resolve(v(e, r));
                            case 17:
                                t.t0 = t.sent, t.next = 21;
                                break;
                            case 20:
                                t.t0 = v;
                            case 21:
                                d = t.t0, t.next = 27;
                                break;
                            case 24:
                                t.prev = 24, t.t1 = t.catch(9), console.error(t.t1);
                            case 27:
                                d && (c.i18n.setLocaleMessage(r, d), c.i18n.loadedLanguages.push(r)), t.next = 31;
                                break;
                            case 30:
                                console.warn("[".concat(o.f, "] Could not find lang file for locale ").concat(r));
                            case 31:
                            case "end":
                                return t.stop()
                        }
                    }), t, null, [
                        [9, 24]
                    ])
                })))).apply(this, arguments)
            }
        },
        239: function(t, e, n) {
            var map = {
                "./en-US": [168, 0],
                "./en-US.json": [168, 0],
                "./es-ES": [169, 1],
                "./es-ES.json": [169, 1],
                "./fr-FR": [170, 2],
                "./fr-FR.json": [170, 2],
                "./tr-TR": [171, 3],
                "./tr-TR.json": [171, 3]
            };

            function r(t) {
                if (!n.o(map, t)) return Promise.resolve().then((function() {
                    var e = new Error("Cannot find module '" + t + "'");
                    throw e.code = "MODULE_NOT_FOUND", e
                }));
                var e = map[t],
                    r = e[0];
                return n.e(e[1]).then((function() {
                    return n.t(r, 3)
                }))
            }
            r.keys = function() {
                return Object.keys(map)
            }, r.id = 239, t.exports = r
        },
        44: function(t, e, n) {
            "use strict";
            n.d(e, "b", (function() {
                return Rn
            })), n.d(e, "a", (function() {
                return F
            }));
            n(20), n(59), n(34), n(33), n(8), n(54);
            var r = n(3),
                o = n(31),
                c = (n(27), n(2)),
                l = n(38),
                f = n(70),
                d = n(109),
                h = n.n(d),
                m = n(60),
                v = n.n(m),
                y = n(71),
                _ = n(1),
                w = function() {},
                x = y.a.prototype.push;
            y.a.prototype.push = function(t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : w,
                    n = arguments.length > 2 ? arguments[2] : void 0;
                return x.call(this, t, e, n)
            }, c.default.use(y.a);
            var k = {
                mode: "history",
                base: decodeURI("/"),
                linkActiveClass: "nuxt-link-active",
                linkExactActiveClass: "nuxt-link-exact-active",
                scrollBehavior: function(t, e, n) {
                    return t.hash ? window.scrollTo({
                        top: document.querySelector(t.hash).offsetTop + window.innerHeight,
                        behavior: "smooth"
                    }) : window.scrollTo({
                        top: 0,
                        behavior: "smooth"
                    })
                },
                routes: [{
                    path: "/boutique",
                    component: function() {
                        return Object(_.m)(n.e(9).then(n.bind(null, 359)))
                    },
                    name: "boutique___fr"
                }, {
                    path: "/client",
                    component: function() {
                        return Object(_.m)(n.e(18).then(n.bind(null, 360)))
                    },
                    name: "client___fr"
                }, {
                    path: "/client-nitro",
                    component: function() {
                        return Object(_.m)(n.e(17).then(n.bind(null, 361)))
                    },
                    name: "client-nitro___fr"
                }, {
                    path: "/confidentialy",
                    component: function() {
                        return Object(_.m)(n.e(25).then(n.bind(null, 362)))
                    },
                    name: "confidentialy___fr"
                }, {
                    path: "/contact",
                    component: function() {
                        return Object(_.m)(n.e(26).then(n.bind(null, 363)))
                    },
                    name: "contact___fr"
                }, {
                    path: "/disclaimer",
                    component: function() {
                        return Object(_.m)(n.e(27).then(n.bind(null, 364)))
                    },
                    name: "disclaimer___fr"
                }, {
                    path: "/forum",
                    component: function() {
                        return Object(_.m)(n.e(29).then(n.bind(null, 365)))
                    },
                    children: [{
                        path: "",
                        component: function() {
                            return Object(_.m)(n.e(33).then(n.bind(null, 366)))
                        },
                        name: "forum___fr"
                    }, {
                        path: "category",
                        component: function() {
                            return Object(_.m)(n.e(30).then(n.bind(null, 367)))
                        },
                        name: "forum-category___fr",
                        children: [{
                            path: ":id?",
                            component: function() {
                                return Object(_.m)(n.e(31).then(n.bind(null, 368)))
                            },
                            name: "forum-category-id___fr"
                        }]
                    }, {
                        path: "create",
                        component: function() {
                            return Object(_.m)(n.e(32).then(n.bind(null, 369)))
                        },
                        name: "forum-create___fr"
                    }, {
                        path: "sujet/:id?",
                        component: function() {
                            return Object(_.m)(n.e(34).then(n.bind(null, 370)))
                        },
                        name: "forum-sujet-id___fr"
                    }]
                }, {
                    path: "/me",
                    component: function() {
                        return Object(_.m)(n.e(37).then(n.bind(null, 357)))
                    },
                    name: "me___fr"
                }, {
                    path: "/register",
                    component: function() {
                        return Object(_.m)(n.e(39).then(n.bind(null, 371)))
                    },
                    name: "register___fr"
                }, {
                    path: "/security",
                    component: function() {
                        return Object(_.m)(n.e(41).then(n.bind(null, 372)))
                    },
                    name: "security___fr"
                }, {
                    path: "/settings",
                    component: function() {
                        return Object(_.m)(n.e(44).then(n.bind(null, 373)))
                    },
                    children: [{
                        path: "",
                        component: function() {
                            return Object(_.m)(n.e(46).then(n.bind(null, 374)))
                        },
                        name: "settings___fr"
                    }, {
                        path: "password",
                        component: function() {
                            return Object(_.m)(n.e(47).then(n.bind(null, 375)))
                        },
                        name: "settings-password___fr"
                    }, {
                        path: "email/:code?",
                        component: function() {
                            return Object(_.m)(n.e(45).then(n.bind(null, 376)))
                        },
                        name: "settings-email-code___fr"
                    }]
                }, {
                    path: "/test",
                    component: function() {
                        return Object(_.m)(n.e(48).then(n.bind(null, 377)))
                    },
                    name: "test___fr"
                }, {
                    path: "/boutique/badgeperso",
                    component: function() {
                        return Object(_.m)(n.e(8).then(n.bind(null, 378)))
                    },
                    name: "boutique-badgeperso___fr"
                }, {
                    path: "/boutique/points",
                    component: function() {
                        return Object(_.m)(n.e(10).then(n.bind(null, 379)))
                    },
                    name: "boutique-points___fr"
                }, {
                    path: "/boutique/premium",
                    component: function() {
                        return Object(_.m)(n.e(11).then(n.bind(null, 380)))
                    },
                    name: "boutique-premium___fr"
                }, {
                    path: "/classement/gamer",
                    component: function() {
                        return Object(_.m)(n.e(12).then(n.bind(null, 381)))
                    },
                    name: "classement-gamer___fr"
                }, {
                    path: "/classement/influences",
                    component: function() {
                        return Object(_.m)(n.e(13).then(n.bind(null, 382)))
                    },
                    name: "classement-influences___fr"
                }, {
                    path: "/classement/joueur",
                    component: function() {
                        return Object(_.m)(n.e(14).then(n.bind(null, 383)))
                    },
                    name: "classement-joueur___fr"
                }, {
                    path: "/classement/mazo",
                    component: function() {
                        return Object(_.m)(n.e(15).then(n.bind(null, 384)))
                    },
                    name: "classement-mazo___fr"
                }, {
                    path: "/classement/run",
                    component: function() {
                        return Object(_.m)(n.e(16).then(n.bind(null, 385)))
                    },
                    name: "classement-run___fr"
                }, {
                    path: "/community/news",
                    component: function() {
                        return Object(_.m)(n.e(19).then(n.bind(null, 386)))
                    },
                    name: "community-news___fr",
                    children: [{
                        path: ":id",
                        component: function() {
                            return Object(_.m)(n.e(22).then(n.bind(null, 387)))
                        },
                        name: "community-news-id___fr"
                    }, {
                        path: ":id?/:keyword",
                        component: function() {
                            return Object(_.m)(n.e(21).then(n.bind(null, 388)))
                        },
                        name: "community-news-id-keyword___fr"
                    }]
                }, {
                    path: "/community/news-list",
                    component: function() {
                        return Object(_.m)(n.e(20).then(n.bind(null, 389)))
                    },
                    name: "community-news-list___fr"
                }, {
                    path: "/community/photos",
                    component: function() {
                        return Object(_.m)(n.e(23).then(n.bind(null, 390)))
                    },
                    name: "community-photos___fr"
                }, {
                    path: "/community/staff",
                    component: function() {
                        return Object(_.m)(n.e(24).then(n.bind(null, 391)))
                    },
                    name: "community-staff___fr"
                }, {
                    path: "/security/Akiled-attitude",
                    component: function() {
                        return Object(_.m)(n.e(42).then(n.bind(null, 392)))
                    },
                    name: "security-Akiled-attitude___fr"
                }, {
                    path: "/security/Akiled-whatis",
                    component: function() {
                        return Object(_.m)(n.e(43).then(n.bind(null, 393)))
                    },
                    name: "security-Akiled-whatis___fr"
                }, {
                    path: "/forgot/:code?",
                    component: function() {
                        return Object(_.m)(n.e(28).then(n.bind(null, 394)))
                    },
                    name: "forgot-code___fr"
                }, {
                    path: "/groupe/:id?",
                    component: function() {
                        return Object(_.m)(n.e(35).then(n.bind(null, 395)))
                    },
                    name: "groupe-id___fr"
                }, {
                    path: "/profil/:username?",
                    component: function() {
                        return Object(_.m)(n.e(38).then(n.bind(null, 396)))
                    },
                    name: "profil-username___fr"
                }, {
                    path: "/room/:id?",
                    component: function() {
                        return Object(_.m)(n.e(40).then(n.bind(null, 397)))
                    },
                    name: "room-id___fr"
                }, {
                    path: "/",
                    component: function() {
                        return Object(_.m)(n.e(36).then(n.bind(null, 398)))
                    },
                    name: "index___fr"
                }],
                fallback: !1
            };

            function O() {
                return new y.a(k)
            }
            var j = {
                    name: "NuxtChild",
                    functional: !0,
                    props: {
                        nuxtChildKey: {
                            type: String,
                            default: ""
                        },
                        keepAlive: Boolean,
                        keepAliveProps: {
                            type: Object,
                            default: void 0
                        }
                    },
                    render: function(t, e) {
                        var n = e.parent,
                            data = e.data,
                            r = e.props,
                            o = n.$createElement;
                        data.nuxtChild = !0;
                        for (var c = n, l = n.$nuxt.nuxt.transitions, f = n.$nuxt.nuxt.defaultTransition, d = 0; n;) n.$vnode && n.$vnode.data.nuxtChild && d++, n = n.$parent;
                        data.nuxtChildDepth = d;
                        var h = l[d] || f,
                            m = {};
                        C.forEach((function(t) {
                            void 0 !== h[t] && (m[t] = h[t])
                        }));
                        var v = {};
                        R.forEach((function(t) {
                            "function" == typeof h[t] && (v[t] = h[t].bind(c))
                        }));
                        var y = v.beforeEnter;
                        if (v.beforeEnter = function(t) {
                                if (window.$nuxt.$nextTick((function() {
                                        window.$nuxt.$emit("triggerScroll")
                                    })), y) return y.call(c, t)
                            }, !1 === h.css) {
                            var _ = v.leave;
                            (!_ || _.length < 2) && (v.leave = function(t, e) {
                                _ && _.call(c, t), c.$nextTick(e)
                            })
                        }
                        var w = o("routerView", data);
                        return r.keepAlive && (w = o("keep-alive", {
                            props: r.keepAliveProps
                        }, [w])), o("transition", {
                            props: m,
                            on: v
                        }, [w])
                    }
                },
                C = ["name", "mode", "appear", "css", "type", "duration", "enterClass", "leaveClass", "appearClass", "enterActiveClass", "enterActiveClass", "leaveActiveClass", "appearActiveClass", "enterToClass", "leaveToClass", "appearToClass"],
                R = ["beforeEnter", "enter", "afterEnter", "enterCancelled", "beforeLeave", "leave", "afterLeave", "leaveCancelled", "beforeAppear", "appear", "afterAppear", "appearCancelled"],
                $ = (n(10), n(11), n(35), n(9)),
                P = n(12),
                S = n(13),
                E = n(4),
                L = n(5),
                N = n(6);

            function A(t) {
                var e = function() {
                    if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                    if (Reflect.construct.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}))), !0
                    } catch (t) {
                        return !1
                    }
                }();
                return function() {
                    var n, r = Object(E.a)(t);
                    if (e) {
                        var o = Object(E.a)(this).constructor;
                        n = Reflect.construct(r, arguments, o)
                    } else n = r.apply(this, arguments);
                    return Object(S.a)(this, n)
                }
            }
            var T = function(t, e, n, desc) {
                    var r, o = arguments.length,
                        c = o < 3 ? e : null === desc ? desc = Object.getOwnPropertyDescriptor(e, n) : desc;
                    if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(L.a)(Reflect)) && "function" == typeof Reflect.decorate) c = Reflect.decorate(t, e, n, desc);
                    else
                        for (var i = t.length - 1; i >= 0; i--)(r = t[i]) && (c = (o < 3 ? r(c) : o > 3 ? r(e, n, c) : r(e, n)) || c);
                    return o > 3 && c && Object.defineProperty(e, n, c), c
                },
                D = function(t) {
                    Object(P.a)(n, t);
                    var e = A(n);

                    function n() {
                        return Object($.a)(this, n), e.apply(this, arguments)
                    }
                    return n
                }(N.Vue),
                I = D = T([Object(N.Component)({
                    head: function() {
                        return {
                            title: this.$t("error.title")
                        }
                    }
                })], D),
                M = (n(204), n(18)),
                F = Object(M.a)(I, (function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "row mt-3"
                    }, [n("div", {
                        staticClass: "col-12"
                    }, [n("div", {
                        staticClass: "box error-page row d-flex align-items-center"
                    }, [t._m(0), t._v(" "), n("div", {
                        staticClass: "col-8 col-md-10"
                    }, [n("h3", {
                        staticClass: "error-page__title"
                    }, [t._v(t._s(t.$t("error.title")))]), t._v(" "), n("span", {
                        staticClass: "error-page__message"
                    }, [t._v(t._s(t.$t("error.content")) + " "), n("NuxtLink", {
                        staticClass: "error-page__link",
                        attrs: {
                            to: t.localePath("/index")
                        }
                    }, [t._v(t._s(t.$t("error.link")))])], 1)])])])])
                }), [function() {
                    var t = this.$createElement,
                        e = this._self._c || t;
                    return e("div", {
                        staticClass: "col-4 col-md-2"
                    }, [e("div", {
                        staticClass: "error-page__frank"
                    })])
                }], !1, null, null, null).exports,
                U = (n(51), n(22)),
                B = {
                    name: "Nuxt",
                    components: {
                        NuxtChild: j,
                        NuxtError: F
                    },
                    props: {
                        nuxtChildKey: {
                            type: String,
                            default: void 0
                        },
                        keepAlive: Boolean,
                        keepAliveProps: {
                            type: Object,
                            default: void 0
                        },
                        name: {
                            type: String,
                            default: "default"
                        }
                    },
                    errorCaptured: function(t) {
                        this.displayingNuxtError && (this.errorFromNuxtError = t, this.$forceUpdate())
                    },
                    computed: {
                        routerViewKey: function() {
                            if (void 0 !== this.nuxtChildKey || this.$route.matched.length > 1) return this.nuxtChildKey || Object(_.c)(this.$route.matched[0].path)(this.$route.params);
                            var t = Object(U.a)(this.$route.matched, 1)[0];
                            if (!t) return this.$route.path;
                            var e = t.components.default;
                            if (e && e.options) {
                                var n = e.options;
                                if (n.key) return "function" == typeof n.key ? n.key(this.$route) : n.key
                            }
                            return /\/$/.test(t.path) ? this.$route.path : this.$route.path.replace(/\/$/, "")
                        }
                    },
                    beforeCreate: function() {
                        c.default.util.defineReactive(this, "nuxt", this.$root.$options.nuxt)
                    },
                    render: function(t) {
                        var e = this;
                        return this.nuxt.err ? this.errorFromNuxtError ? (this.$nextTick((function() {
                            return e.errorFromNuxtError = !1
                        })), t("div", {}, [t("h2", "An error occurred while showing the error page"), t("p", "Unfortunately an error occurred and while showing the error page another error occurred"), t("p", "Error details: ".concat(this.errorFromNuxtError.toString())), t("nuxt-link", {
                            props: {
                                to: "/"
                            }
                        }, "Go back to home")])) : (this.displayingNuxtError = !0, this.$nextTick((function() {
                            return e.displayingNuxtError = !1
                        })), t(F, {
                            props: {
                                error: this.nuxt.err
                            }
                        })) : t("NuxtChild", {
                            key: this.routerViewKey,
                            props: this.$props
                        })
                    }
                },
                W = (n(41), n(42), n(40), {
                    name: "NuxtLoading",
                    data: function() {
                        return {
                            percent: 0,
                            show: !1,
                            canSucceed: !0,
                            reversed: !1,
                            skipTimerCount: 0,
                            rtl: !1,
                            throttle: 200,
                            duration: 5e3,
                            continuous: !1
                        }
                    },
                    computed: {
                        left: function() {
                            return !(!this.continuous && !this.rtl) && (this.rtl ? this.reversed ? "0px" : "auto" : this.reversed ? "auto" : "0px")
                        }
                    },
                    beforeDestroy: function() {
                        this.clear()
                    },
                    methods: {
                        clear: function() {
                            clearInterval(this._timer), clearTimeout(this._throttle), this._timer = null
                        },
                        start: function() {
                            var t = this;
                            return this.clear(), this.percent = 0, this.reversed = !1, this.skipTimerCount = 0, this.canSucceed = !0, this.throttle ? this._throttle = setTimeout((function() {
                                return t.startTimer()
                            }), this.throttle) : this.startTimer(), this
                        },
                        set: function(t) {
                            return this.show = !0, this.canSucceed = !0, this.percent = Math.min(100, Math.max(0, Math.floor(t))), this
                        },
                        get: function() {
                            return this.percent
                        },
                        increase: function(t) {
                            return this.percent = Math.min(100, Math.floor(this.percent + t)), this
                        },
                        decrease: function(t) {
                            return this.percent = Math.max(0, Math.floor(this.percent - t)), this
                        },
                        pause: function() {
                            return clearInterval(this._timer), this
                        },
                        resume: function() {
                            return this.startTimer(), this
                        },
                        finish: function() {
                            return this.percent = this.reversed ? 0 : 100, this.hide(), this
                        },
                        hide: function() {
                            var t = this;
                            return this.clear(), setTimeout((function() {
                                t.show = !1, t.$nextTick((function() {
                                    t.percent = 0, t.reversed = !1
                                }))
                            }), 500), this
                        },
                        fail: function(t) {
                            return this.canSucceed = !1, this
                        },
                        startTimer: function() {
                            var t = this;
                            this.show || (this.show = !0), void 0 === this._cut && (this._cut = 1e4 / Math.floor(this.duration)), this._timer = setInterval((function() {
                                t.skipTimerCount > 0 ? t.skipTimerCount-- : (t.reversed ? t.decrease(t._cut) : t.increase(t._cut), t.continuous && (t.percent >= 100 || t.percent <= 0) && (t.skipTimerCount = 1, t.reversed = !t.reversed))
                            }), 100)
                        }
                    },
                    render: function(t) {
                        var e = t(!1);
                        return this.show && (e = t("div", {
                            staticClass: "nuxt-progress",
                            class: {
                                "nuxt-progress-notransition": this.skipTimerCount > 0, "nuxt-progress-failed": !this.canSucceed
                            },
                            style: {
                                width: this.percent + "%",
                                left: this.left
                            }
                        })), e
                    }
                }),
                K = (n(205), Object(M.a)(W, void 0, void 0, !1, null, null, null).exports),
                H = (n(206), n(75), n(17)),
                z = n(14),
                X = (n(45), n(24)),
                V = n.n(X);

            function J(t) {
                var e = function() {
                    if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                    if (Reflect.construct.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}))), !0
                    } catch (t) {
                        return !1
                    }
                }();
                return function() {
                    var n, r = Object(E.a)(t);
                    if (e) {
                        var o = Object(E.a)(this).constructor;
                        n = Reflect.construct(r, arguments, o)
                    } else n = r.apply(this, arguments);
                    return Object(S.a)(this, n)
                }
            }
            var Q = function(t, e, n, desc) {
                    var r, o = arguments.length,
                        c = o < 3 ? e : null === desc ? desc = Object.getOwnPropertyDescriptor(e, n) : desc;
                    if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(L.a)(Reflect)) && "function" == typeof Reflect.decorate) c = Reflect.decorate(t, e, n, desc);
                    else
                        for (var i = t.length - 1; i >= 0; i--)(r = t[i]) && (c = (o < 3 ? r(c) : o > 3 ? r(e, n, c) : r(e, n)) || c);
                    return o > 3 && c && Object.defineProperty(e, n, c), c
                },
                Y = function(t) {
                    Object(P.a)(o, t);
                    var e, n = J(o);

                    function o() {
                        var t;
                        return Object($.a)(this, o), (t = n.apply(this, arguments)).loginForm = {
                            username: "",
                            password: ""
                        }, t.loading = !1, t
                    }
                    return Object(H.a)(o, [{
                        key: "userLogin",
                        value: (e = Object(r.a)(regeneratorRuntime.mark((function t() {
                            var e, n;
                            return regeneratorRuntime.wrap((function(t) {
                                for (;;) switch (t.prev = t.next) {
                                    case 0:
                                        if (!this.loading) {
                                            t.next = 2;
                                            break
                                        }
                                        return t.abrupt("return");
                                    case 2:
                                        return t.prev = 2, this.loading = !0, t.next = 6, this.$axios.$post("/api/v1/login", this.loginForm);
                                    case 6:
                                        return e = t.sent.Authorization.split("Bearer ")[1], V.a.set("token", e, {
                                            expires: 365
                                        }), t.next = 10, this.$axios.$get("/api/v1/userdata");
                                    case 10:
                                        n = t.sent, z.AuthStore.setUser(n), z.AuthStore.setConnected(!0), this.$router.push(this.localeRoute({
                                            name: "me"
                                        })), this.loginForm = {
                                            username: "",
                                            password: ""
                                        }, t.next = 20;
                                        break;
                                    case 17:
                                        t.prev = 17, t.t0 = t.catch(2), V.a.remove("token");
                                    case 20:
                                        this.loading = !1;
                                    case 21:
                                    case "end":
                                        return t.stop()
                                }
                            }), t, this, [
                                [2, 17]
                            ])
                        }))), function() {
                            return e.apply(this, arguments)
                        })
                    }]), o
                }(N.Vue),
                G = Y = Q([N.Component], Y),
                Z = (n(207), Object(M.a)(G, (function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "header-login"
                    }, [n("div", {
                        staticClass: "container"
                    }, [n("form", {
                        staticClass: "form-row justify-content-center",
                        attrs: {
                            onsubmit: "return false"
                        },
                        on: {
                            submit: function(e) {
                                return e.preventDefault(), t.userLogin(e)
                            }
                        }
                    }, [n("div", {
                        staticClass: "col-12 col-md-3 mb-2"
                    }, [n("label", {
                        staticClass: "sr-only",
                        attrs: {
                            for: "inputusername"
                        }
                    }, [t._v(t._s(t.$t("header-login.label-username")) + ":")]), t._v(" "), n("input", {
                        directives: [{
                            name: "model",
                            rawName: "v-model",
                            value: t.loginForm.username,
                            expression: "loginForm.username"
                        }],
                        staticClass: "form-control",
                        attrs: {
                            type: "text",
                            name: "username",
                            id: "inputusername",
                            placeholder: t.$t("header-login.label-username")
                        },
                        domProps: {
                            value: t.loginForm.username
                        },
                        on: {
                            input: function(e) {
                                e.target.composing || t.$set(t.loginForm, "username", e.target.value)
                            }
                        }
                    })]), t._v(" "), n("div", {
                        staticClass: "col-12 col-md-3 mb-2 text-right"
                    }, [n("label", {
                        staticClass: "sr-only"
                    }, [t._v(t._s(t.$t("header-login.label-password")) + ":")]), t._v(" "), n("input", {
                        directives: [{
                            name: "model",
                            rawName: "v-model",
                            value: t.loginForm.password,
                            expression: "loginForm.password"
                        }],
                        staticClass: "form-control",
                        attrs: {
                            type: "password",
                            name: "password",
                            placeholder: t.$t("header-login.label-password")
                        },
                        domProps: {
                            value: t.loginForm.password
                        },
                        on: {
                            input: function(e) {
                                e.target.composing || t.$set(t.loginForm, "password", e.target.value)
                            }
                        }
                    }), t._v(" "), n("NuxtLink", {
                        staticClass: "login__forgot",
                        attrs: {
                            to: t.localePath("/forgot")
                        }
                    }, [t._v(t._s(t.$t("header-login.password-forgot")))])], 1), t._v(" "), n("div", {
                        staticClass: "col-12 col-md-3"
                    }, [n("button", {
                        staticClass: "btn btn--blue",
                        attrs: {
                            type: "submit",
                            disabled: t.loading
                        }
                    }, [t.loading ? n("i", {
                        staticClass: "fa fa-spinner fa-spin mr-2"
                    }) : t._e(), t._v(t._s(t.$t("header-login.button-login")))])])])])])
                }), [], !1, null, null, null).exports);

            function tt(t) {
                var e = function() {
                    if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                    if (Reflect.construct.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}))), !0
                    } catch (t) {
                        return !1
                    }
                }();
                return function() {
                    var n, r = Object(E.a)(t);
                    if (e) {
                        var o = Object(E.a)(this).constructor;
                        n = Reflect.construct(r, arguments, o)
                    } else n = r.apply(this, arguments);
                    return Object(S.a)(this, n)
                }
            }
            var et = function(t, e, n, desc) {
                    var r, o = arguments.length,
                        c = o < 3 ? e : null === desc ? desc = Object.getOwnPropertyDescriptor(e, n) : desc;
                    if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(L.a)(Reflect)) && "function" == typeof Reflect.decorate) c = Reflect.decorate(t, e, n, desc);
                    else
                        for (var i = t.length - 1; i >= 0; i--)(r = t[i]) && (c = (o < 3 ? r(c) : o > 3 ? r(e, n, c) : r(e, n)) || c);
                    return o > 3 && c && Object.defineProperty(e, n, c), c
                },
                nt = function(t) {
                    Object(P.a)(n, t);
                    var e = tt(n);

                    function n() {
                        var t;
                        return Object($.a)(this, n), (t = e.apply(this, arguments)).hover = !1, t._animationReverse = !1, t._animationIntervalId = 0, t.avatarAnimated = !1, t
                    }
                    return Object(H.a)(n, [{
                        key: "onClick",
                        value: function(t) {
                            var e = this;
                            if (this.allAnimationEnd()) {
                                var element = document.getElementById("logo-" + t);
                                element && ("o" == t && (this.avatarAnimated = !0), element.classList.add("animated2"), element.addEventListener("animationend", (function() {
                                    element.classList.remove("animated2"), e.avatarAnimated = !1
                                })))
                            }
                        }
                    }, {
                        key: "startAnimation",
                        value: function() {
                            var t = this;
                            if (!this.hover && (this.hover = !0, this.allAnimationEnd())) {
                                var e = ["w", "i", "b1", "b2", "o"];
                                this._animationReverse && (e = e.reverse()), this._animationReverse = !this._animationReverse;
                                var n = 0,
                                    r = setInterval((function() {
                                        if (n >= e.length) {
                                            if (!t.allAnimationEnd()) return;
                                            clearInterval(r)
                                        } else {
                                            var o = e[n];
                                            if (o) {
                                                var element = document.getElementById("logo-" + o);
                                                element && ("o" == o && (t.avatarAnimated = !0), element.classList.add("animated"), element.addEventListener("animationend", (function() {
                                                    element.classList.remove("animated"), t.avatarAnimated = !1
                                                })), n++)
                                            }
                                        }
                                    }), 150)
                            }
                        }
                    }, {
                        key: "allAnimationEnd",
                        value: function() {
                            for (var t = 0, e = ["w", "i", "b1", "b2", "o"]; t < e.length; t++) {
                                var n = e[t],
                                    element = document.getElementById("logo-" + n);
                                if (!element) return !1;
                                if (element.classList.contains("animated")) return !1;
                                if (element.classList.contains("animated2")) return !1
                            }
                            return !0
                        }
                    }]), n
                }(N.Vue);
            et([Object(N.Prop)(String)], nt.prototype, "avatarLook", void 0);
            var ot = nt = et([N.Component], nt),
                at = (n(208), Object(M.a)(ot, (function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "logo",
                        attrs: {
                            id: "logo"
                        },
                        on: {
                            mouseover: t.startAnimation,
                            mouseleave: function(e) {
                                t.hover = !1
                            }
                        }
                    }, [n("div", {
                        staticClass: "sprite sprite-w",
                        attrs: {
                            id: "logo-w"
                        },
                        on: {
                            click: function(e) {
                                return t.onClick("w")
                            }
                        }
                    }), t._v(" "), n("div", {
                        staticClass: "sprite sprite-i",
                        attrs: {
                            id: "logo-i"
                        },
                        on: {
                            click: function(e) {
                                return t.onClick("i")
                            }
                        }
                    }), t._v(" "), n("div", {
                        staticClass: "sprite sprite-b1",
                        attrs: {
                            id: "logo-b1"
                        },
                        on: {
                            click: function(e) {
                                return t.onClick("b1")
                            }
                        }
                    }), t._v(" "), n("div", {
                        staticClass: "sprite sprite-b2",
                        attrs: {
                            id: "logo-b2"
                        },
                        on: {
                            click: function(e) {
                                return t.onClick("b2")
                            }
                        }
                    }), t._v(" "), n("div", {
                        staticClass: "sprite sprite-o",
                        attrs: {
                            id: "logo-o"
                        },
                        on: {
                            click: function(e) {
                                return t.onClick("o")
                            }
                        }
                    }, [n("div", {
                        directives: [{
                            name: "show",
                            rawName: "v-show",
                            value: !t.avatarAnimated,
                            expression: "!avatarAnimated"
                        }],
                        staticClass: "logo__personnage",
                        style: "background-image: url(//habbo.city/habbo-imaging/avatarimage?figure=" + t.avatarLook + "&action=sit&direction=2&head_direction=2&size=s)"
                    }), t._v(" "), n("div", {
                        directives: [{
                            name: "show",
                            rawName: "v-show",
                            value: t.avatarAnimated,
                            expression: "avatarAnimated"
                        }],
                        staticClass: "logo__personnage",
                        style: "background-image: url(//habbo.city/habbo-imaging/avatarimage?figure=" + t.avatarLook + "&action=sit,wav,drk=0&gesture=srp&direction=2&head_direction=3&size=s)"
                    })])])
                }), [], !1, null, null, null).exports);

            function it(t) {
                var e = function() {
                    if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                    if (Reflect.construct.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}))), !0
                    } catch (t) {
                        return !1
                    }
                }();
                return function() {
                    var n, r = Object(E.a)(t);
                    if (e) {
                        var o = Object(E.a)(this).constructor;
                        n = Reflect.construct(r, arguments, o)
                    } else n = r.apply(this, arguments);
                    return Object(S.a)(this, n)
                }
            }
            var st = function(t, e, n, desc) {
                    var r, o = arguments.length,
                        c = o < 3 ? e : null === desc ? desc = Object.getOwnPropertyDescriptor(e, n) : desc;
                    if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(L.a)(Reflect)) && "function" == typeof Reflect.decorate) c = Reflect.decorate(t, e, n, desc);
                    else
                        for (var i = t.length - 1; i >= 0; i--)(r = t[i]) && (c = (o < 3 ? r(c) : o > 3 ? r(e, n, c) : r(e, n)) || c);
                    return o > 3 && c && Object.defineProperty(e, n, c), c
                },
                ct = function(t) {
                    Object(P.a)(n, t);
                    var e = it(n);

                    function n() {
                        return Object($.a)(this, n), e.apply(this, arguments)
                    }
                    return Object(H.a)(n, [{
                        key: "isConnected",
                        get: function() {
                            return z.AuthStore.connected
                        }
                    }, {
                        key: "authUser",
                        get: function() {
                            return z.AuthStore.user
                        }
                    }, {
                        key: "isRootRoute",
                        get: function() {
                            return !(!this.$route || !this.$route.name) && this.$route.name.startsWith("index")
                        }
                    }]), n
                }(N.Vue),
                ut = ct = st([Object(N.Component)({
                    components: {
                        HeaderLogin: Z,
                        HeaderLogo: at
                    }
                })], ct),
                header = (n(209), Object(M.a)(ut, (function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "header",
                        class: {
                            "header--big": t.isRootRoute && !t.isConnected
                        },
                        attrs: {
                            "data-theme-color": "blue"
                        }
                    }, [n("div", {
                        staticClass: "header__hotel"
                    }), t._v(" "), n("div", {
                        staticClass: "header__big-cloud-left"
                    }), t._v(" "), n("div", {
                        staticClass: "header__big-cloud-right"
                    }), t._v(" "), n("div", {
                        staticClass: "header__cloud1"
                    }), t._v(" "), n("div", {
                        staticClass: "header__cloud2"
                    }), t._v(" "), n("div", {
                        staticClass: "header__cloud3"
                    }), t._v(" "), n("transition", {
                        attrs: {
                            name: "fade-in-down"
                        }
                    }, [t.isRootRoute && !t.isConnected ? n("HeaderLogin") : t._e()], 1), t._v(" "), n("div", {
                        staticClass: "container h-100"
                    }, [n("div", {
                        staticClass: "row h-100 d-flex align-items-center position-relative",
                        staticStyle: {
                            "z-index": "5"
                        }
                    }, [n("div", {
                        staticClass: "col-12 col-md-2 d-flex justify-content-center"
                    }, [n("div", {
                        staticClass: "position-relative"
                    }, [n("div", {
                        staticClass: "header__cloud-logo"
                    }), t._v(" "), n("HeaderLogo", {
                        attrs: {
                            avatarLook: t.authUser.look
                        }
                    })], 1)]), t._v(" "), n("div", {
                        staticClass: "col-12 col-md-4 offset-4 ml-auto"
                    }, [t.isConnected ? n("span", [n("NuxtLink", {
                        staticClass: "btn",
                        attrs: {
                            to: t.localePath("/client")
                        }
                    }, [t._v(t._s(t.$t("header.link-hotel-flash")) + " "), n("i", {
                        staticClass: "fas fa-sign-in-alt"
                    })]), t._v(" "), n("NuxtLink", {
                        staticClass: "btn btn--yellow",
                        attrs: {
                            to: t.localePath("/client-nitro")
                        }
                    }, [t._v(t._s(t.$t("header.link-hotel-html5")) + " "), n("i", {
                        staticClass: "fas fa-sign-in-alt"
                    })])], 1) : n("span", [t.isRootRoute ? n("div", {
                        staticClass: "header-register"
                    }, [n("div", {
                        staticClass: "header-register__about"
                    }, [t._v(t._s(t.$t("header.register-about")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "btn btn--big",
                        attrs: {
                            to: t.localePath("/register")
                        }
                    }, [t._v(t._s(t.$t("header.link-register")))])], 1) : n("span", [n("NuxtLink", {
                        staticClass: "btn btn--blue",
                        attrs: {
                            to: t.localePath("index")
                        }
                    }, [t._v(t._s(t.$t("header.link-login")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "btn",
                        attrs: {
                            to: t.localePath("/register")
                        }
                    }, [t._v(t._s(t.$t("header.link-register")))])], 1)])])])])], 1)
                }), [], !1, null, null, null).exports);

            function lt(t) {
                var e = function() {
                    if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                    if (Reflect.construct.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}))), !0
                    } catch (t) {
                        return !1
                    }
                }();
                return function() {
                    var n, r = Object(E.a)(t);
                    if (e) {
                        var o = Object(E.a)(this).constructor;
                        n = Reflect.construct(r, arguments, o)
                    } else n = r.apply(this, arguments);
                    return Object(S.a)(this, n)
                }
            }
            var ft = function(t, e, n, desc) {
                    var r, o = arguments.length,
                        c = o < 3 ? e : null === desc ? desc = Object.getOwnPropertyDescriptor(e, n) : desc;
                    if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(L.a)(Reflect)) && "function" == typeof Reflect.decorate) c = Reflect.decorate(t, e, n, desc);
                    else
                        for (var i = t.length - 1; i >= 0; i--)(r = t[i]) && (c = (o < 3 ? r(c) : o > 3 ? r(e, n, c) : r(e, n)) || c);
                    return o > 3 && c && Object.defineProperty(e, n, c), c
                },
                pt = function(t) {
                    Object(P.a)(n, t);
                    var e = lt(n);

                    function n() {
                        return Object($.a)(this, n), e.apply(this, arguments)
                    }
                    return n
                }(N.Vue),
                ht = pt = ft([N.Component], pt),
                footer = (n(210), Object(M.a)(ht, (function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "footer"
                    }, [n("div", {
                        staticClass: "container"
                    }, [n("div", {
                        staticClass: "row d-flex justify-content-between"
                    }, [n("div", {
                        staticClass: "col-lg-2 text-center mb-2"
                    }, [n("p", [t._v(t._s(t.$t("footer.social-follow")))]), t._v(" "), t._m(0), t._v(" "), t._m(1), t._v(" "), t._m(2), t._v(" "), t._m(3)]), t._v(" "), n("div", {
                        staticClass: "col-lg-10"
                    }, [n("NuxtLink", {
                        staticClass: "footer__link",
                        attrs: {
                            to: t.localePath("/contact"),
                            target: "_self"
                        }
                    }, [t._v(t._s(t.$t("footer.contact-link")))]), t._v(" / \n\t\t\t\t"), n("NuxtLink", {
                        staticClass: "footer__link",
                        attrs: {
                            to: t.localePath("/disclaimer"),
                            target: "_self"
                        }
                    }, [t._v(t._s(t.$t("footer.disclaimer-link")))]), t._v(" / \n\t\t\t\t"), n("NuxtLink", {
                        staticClass: "footer__link",
                        attrs: {
                            to: t.localePath("/confidentialy"),
                            target: "_self"
                        }
                    }, [t._v(t._s(t.$t("footer.confidentialy-link")))]), t._v(" / \n\t\t\t\t"), n("NuxtLink", {
                        staticClass: "footer__link",
                        attrs: {
                            to: t.localePath("/security"),
                            target: "_self"
                        }
                    }, [t._v(t._s(t.$t("footer.security-link")))]), t._v(" / \n\t\t\t\t"), n("a", {
                        staticClass: "footer__link",
                        attrs: {
                            href: "mailto:support@localhost",
                            target: "_self"
                        }
                    }, [t._v("support@localhost")]), t._v(" "), n("p", {
                        staticClass: "footer__copyright"
                    }, [t._v("\n\t\t\t\t\t© 2011-2020 Akiled Hôtel."), n("br"), t._v("\n\t\t\t\t\t" + t._s(t.$t("footer.copyright")) + "\n\t\t\t\t")])], 1)])])])
                }), [function() {
                    var t = this.$createElement,
                        e = this._self._c || t;
                    return e("a", {
                        staticClass: "btn-social btn-social--facebook",
                        attrs: {
                            href: "https://www.facebook.com/AkiledHotelFR",
                            target: "_blank"
                        }
                    }, [e("i", {
                        staticClass: "fab fa-facebook-f"
                    })])
                }, function() {
                    var t = this.$createElement,
                        e = this._self._c || t;
                    return e("a", {
                        staticClass: "btn-social btn-social--discord",
                        attrs: {
                            href: "https://discord.gg/qdHDjTk",
                            target: "_blank"
                        }
                    }, [e("i", {
                        staticClass: "fab fa-discord"
                    })])
                }, function() {
                    var t = this.$createElement,
                        e = this._self._c || t;
                    return e("a", {
                        staticClass: "btn-social btn-social--twitter",
                        attrs: {
                            href: "https://twitter.com/AkiledORG",
                            target: "_blank"
                        }
                    }, [e("i", {
                        staticClass: "fab fa-twitter"
                    })])
                }, function() {
                    var t = this.$createElement,
                        e = this._self._c || t;
                    return e("a", {
                        staticClass: "btn-social btn-social--instagram",
                        attrs: {
                            href: "https://www.instagram.com/Akiledorg/",
                            target: "_blank"
                        }
                    }, [e("i", {
                        staticClass: "fab fa-instagram"
                    })])
                }], !1, null, null, null).exports);

            function mt(t) {
                var e = function() {
                    if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                    if (Reflect.construct.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}))), !0
                    } catch (t) {
                        return !1
                    }
                }();
                return function() {
                    var n, r = Object(E.a)(t);
                    if (e) {
                        var o = Object(E.a)(this).constructor;
                        n = Reflect.construct(r, arguments, o)
                    } else n = r.apply(this, arguments);
                    return Object(S.a)(this, n)
                }
            }
            var vt = function(t, e, n, desc) {
                    var r, o = arguments.length,
                        c = o < 3 ? e : null === desc ? desc = Object.getOwnPropertyDescriptor(e, n) : desc;
                    if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(L.a)(Reflect)) && "function" == typeof Reflect.decorate) c = Reflect.decorate(t, e, n, desc);
                    else
                        for (var i = t.length - 1; i >= 0; i--)(r = t[i]) && (c = (o < 3 ? r(c) : o > 3 ? r(e, n, c) : r(e, n)) || c);
                    return o > 3 && c && Object.defineProperty(e, n, c), c
                },
                bt = function(t) {
                    Object(P.a)(o, t);
                    var e, n = mt(o);

                    function o() {
                        var t;
                        return Object($.a)(this, o), (t = n.apply(this, arguments)).navToggle = !1, t.dropName = "", t.searchForm = {
                            username: ""
                        }, t.searchUsers = [], t.searchInternal = 0, t.loading = !1, t
                    }
                    return Object(H.a)(o, [{
                        key: "onRouteChange",
                        value: function(t) {
                            this.navToggle = !1, this.dropName = "", this.searchForm = {
                                username: ""
                            }
                        }
                    }, {
                        key: "onSearch",
                        value: (e = Object(r.a)(regeneratorRuntime.mark((function t(e) {
                            var n = this;
                            return regeneratorRuntime.wrap((function(t) {
                                for (;;) switch (t.prev = t.next) {
                                    case 0:
                                        if (!this.loading) {
                                            t.next = 2;
                                            break
                                        }
                                        return t.abrupt("return");
                                    case 2:
                                        if (this.searchInternal && clearInterval(this.searchInternal), e.length) {
                                            t.next = 6;
                                            break
                                        }
                                        return this.searchUsers = [], t.abrupt("return");
                                    case 6:
                                        this.searchInternal = window.setTimeout(Object(r.a)(regeneratorRuntime.mark((function t() {
                                            return regeneratorRuntime.wrap((function(t) {
                                                for (;;) switch (t.prev = t.next) {
                                                    case 0:
                                                        return t.prev = 0, n.loading = !0, t.next = 4, n.$axios.$get("/api/v1/search-user/" + e);
                                                    case 4:
                                                        n.searchUsers = t.sent.users, t.next = 9;
                                                        break;
                                                    case 7:
                                                        t.prev = 7, t.t0 = t.catch(0);
                                                    case 9:
                                                        n.loading = !1;
                                                    case 10:
                                                    case "end":
                                                        return t.stop()
                                                }
                                            }), t, null, [
                                                [0, 7]
                                            ])
                                        }))), 1e3);
                                    case 7:
                                    case "end":
                                        return t.stop()
                                }
                            }), t, this)
                        }))), function(t) {
                            return e.apply(this, arguments)
                        })
                    }, {
                        key: "isValidSearch",
                        value: function(t) {
                            if (!/[^a-z\d\-=\?!@:\.]/i.test(t.key)) return !0;
                            t.preventDefault()
                        }
                    }, {
                        key: "searchPost",
                        value: function() {
                            this.searchForm.username.length && (this.$router.push(this.localeRoute("/profil/" + this.searchForm.username)), this.searchForm.username = "")
                        }
                    }, {
                        key: "onDisconnect",
                        value: function() {
                            V.a.remove("token"), z.AuthStore.setConnected(!1), this.$router.push(this.localeRoute({
                                name: "index"
                            }))
                        }
                    }, {
                        key: "mounted",
                        value: function() {
                            document.addEventListener("click", this.documentClick), this.initPromp()
                        }
                    }, {
                        key: "destroyed",
                        value: function() {
                            document.removeEventListener("click", this.documentClick)
                        }
                    }, {
                        key: "initPromp",
                        value: function() {
                            var t = this.$refs.btnInstall,
                                e = null;
                            window.addEventListener("beforeinstallprompt", (function(n) {
                                n.preventDefault(), e = n, t.style.display = "block", t.addEventListener("click", (function(n) {
                                    t.style.display = "none", e.prompt()
                                }))
                            }))
                        }
                    }, {
                        key: "documentClick",
                        value: function(t) {
                            if ("" != this.dropName) {
                                var e = document.getElementById("navbar");
                                e && (e == t.target || e.contains(t.target) || (this.dropName = ""))
                            }
                        }
                    }, {
                        key: "isConnected",
                        get: function() {
                            return z.AuthStore.connected
                        }
                    }, {
                        key: "userAuth",
                        get: function() {
                            return z.AuthStore.user
                        }
                    }]), o
                }(N.Vue);
            vt([Object(N.Watch)("$route.name", {
                immediate: !0,
                deep: !0
            })], bt.prototype, "onRouteChange", null), vt([Object(N.Watch)("searchForm.username", {
                immediate: !0,
                deep: !0
            })], bt.prototype, "onSearch", null);
            var gt = bt = vt([N.Component], bt),
                yt = (n(211), Object(M.a)(gt, (function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("nav", {
                        staticClass: "Akiled-nav",
                        attrs: {
                            "data-theme-color": "blue"
                        }
                    }, [n("div", {
                        staticClass: "container d-flex flex-wrap flex-column flex-lg-row"
                    }, [n("div", {
                        staticClass: "d-flex align-items-center"
                    }, [n("NuxtLink", {
                        attrs: {
                            to: t.localePath("/me")
                        }
                    }, [n("div", {
                        staticClass: "Akiled-nav__logo"
                    })]), t._v(" "), n("form", {
                        staticClass: "Akiled-nav__form",
                        on: {
                            submit: function(e) {
                                return e.preventDefault(), t.searchPost(e)
                            }
                        }
                    }, [n("input", {
                        directives: [{
                            name: "model",
                            rawName: "v-model",
                            value: t.searchForm.username,
                            expression: "searchForm.username"
                        }],
                        staticClass: "Akiled-nav__input",
                        attrs: {
                            type: "text",
                            placeholder: t.$t("navbar.search"),
                            autocomplete: "off"
                        },
                        domProps: {
                            value: t.searchForm.username
                        },
                        on: {
                            click: function(e) {
                                t.dropName = "search"
                            },
                            keypress: t.isValidSearch,
                            input: function(e) {
                                e.target.composing || t.$set(t.searchForm, "username", e.target.value)
                            }
                        }
                    }), t._v(" "), t._m(0), t._v(" "), n("transition", {
                        attrs: {
                            name: "fade-in-down"
                        }
                    }, [t.searchUsers.length ? n("div", {
                        key: "dropName_" + t.dropName,
                        staticClass: "Akiled-nav__content Akiled-nav__content--absolute",
                        class: {
                            "d-block": "search" == t.dropName
                        }
                    }, [n("ul", {
                        staticClass: "Akiled-nav__ul"
                    }, [n("transition-group", {
                        attrs: {
                            name: "list"
                        }
                    }, t._l(t.searchUsers, (function(data) {
                        return n("NuxtLink", {
                            key: "user_" + data.username,
                            staticClass: "Akiled-nav__li text-nowrap",
                            attrs: {
                                to: t.localePath("/profil/" + data.username),
                                tag: "li"
                            }
                        }, [n("img", {
                            attrs: {
                                src: "https://habbo.city/habbo-imaging/avatarimage?figure=" + data.look + "&size=s&headonly=true",
                                width: "27",
                                height: "31"
                            }
                        }), t._v(t._s(data.username) + "\n              ")])
                    })), 1)], 1)]) : t._e()])], 1), t._v(" "), n("div", {
                        staticClass: "ml-auto d-flex flex-row"
                    }, [t.isConnected ? n("div", {
                        staticClass: "Akiled-nav__dropdown d-block d-lg-inline-block"
                    }, [n("NuxtLink", {
                        staticClass: "Akiled-nav__link",
                        attrs: {
                            to: t.localePath("/client"),
                            disabled: ""
                        }
                    }, [n("i", {
                        staticClass: "navbar-icon navbar-icon--hotel"
                    }), t._v(" "), n("span", {
                        staticClass: "Akiled-nav__text d-none d-lg-inline-block"
                    }, [t._v(t._s(t.$t("navbar.hotel")))])])], 1) : t._e(), t._v(" "), n("div", {
                        staticClass: "Akiled-nav__dropdown d-block d-lg-none",
                        staticStyle: {
                            cursor: "pointer"
                        }
                    }, [n("a", {
                        staticClass: "Akiled-nav__link",
                        attrs: {
                            disabled: ""
                        },
                        on: {
                            click: function(e) {
                                e.preventDefault(), t.navToggle = !t.navToggle
                            }
                        }
                    }, [n("i", {
                        staticClass: "fa fa-bars"
                    })])]), t._v(" "), n("div", {
                        directives: [{
                            name: "tooltip",
                            rawName: "v-tooltip",
                            value: t.$t("navbar.install-app"),
                            expression: "$t('navbar.install-app')"
                        }],
                        ref: "btnInstall",
                        staticClass: "Akiled-nav__dropdown",
                        staticStyle: {
                            display: "none"
                        }
                    }, [t._m(1)])])], 1), t._v(" "), n("div", {
                        staticClass: "ml-lg-auto d-lg-flex flex-row",
                        class: {
                            "d-none": !t.navToggle
                        }
                    }, [n("div", {
                        staticClass: "Akiled-nav__dropdown d-block d-lg-block"
                    }, [n("NuxtLink", {
                        staticClass: "Akiled-nav__link",
                        attrs: {
                            to: t.localePath("/me"),
                            disabled: ""
                        }
                    }, [n("i", {
                        staticClass: "navbar-icon navbar-icon--home"
                    }), t._v(" "), n("span", {
                        staticClass: "Akiled-nav__text"
                    }, [t._v(t._s(t.$t("navbar.home")))])])], 1), t._v(" "), n("div", {
                        staticClass: "Akiled-nav__dropdown d-block d-lg-block"
                    }, [n("div", {
                        staticClass: "Akiled-nav__link",
                        on: {
                            click: function(e) {
                                t.dropName = "comm" == t.dropName ? "" : "comm"
                            }
                        }
                    }, [n("i", {
                        staticClass: "navbar-icon navbar-icon--commu"
                    }), t._v(" "), n("span", {
                        class: {
                            "Akiled-nav__text": !0, "mw-auto": "comm" == t.dropName
                        }
                    }, [t._v(t._s(t.$t("navbar.community")))])]), t._v(" "), n("transition", {
                        attrs: {
                            name: "fade-in-down"
                        }
                    }, [n("div", {
                        key: "dropName_" + t.dropName,
                        class: {
                            "Akiled-nav__content": !0, "d-block": "comm" == t.dropName
                        }
                    }, [n("ul", {
                        staticClass: "Akiled-nav__ul"
                    }, [n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/community/news")
                        }
                    }, [t._v(t._s(t.$t("navbar.news")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/community/staff")
                        }
                    }, [t._v(t._s(t.$t("navbar.staff")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/community/photos")
                        }
                    }, [t._v(t._s(t.$t("navbar.photo")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/forum/category/0")
                        }
                    }, [t._v(t._s(t.$t("navbar.forum")))])], 1)])])], 1), t._v(" "), n("div", {
                        staticClass: "Akiled-nav__dropdown d-block d-lg-block"
                    }, [n("div", {
                        staticClass: "Akiled-nav__link",
                        on: {
                            click: function(e) {
                                t.dropName = "secu" == t.dropName ? "" : "secu"
                            }
                        }
                    }, [n("i", {
                        staticClass: "navbar-icon navbar-icon--secu"
                    }), t._v(" "), n("span", {
                        class: {
                            "Akiled-nav__text": !0, "mw-auto": "secu" == t.dropName
                        }
                    }, [t._v(t._s(t.$t("navbar.security")))])]), t._v(" "), n("transition", {
                        attrs: {
                            name: "fade-in-down"
                        }
                    }, [n("div", {
                        key: "dropName_" + t.dropName,
                        class: {
                            "Akiled-nav__content": !0, "d-block": "secu" == t.dropName
                        }
                    }, [n("ul", {
                        staticClass: "Akiled-nav__ul"
                    }, [n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/security")
                        }
                    }, [t._v(t._s(t.$t("navbar.Akiled-security")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/security/Akiled-attitude")
                        }
                    }, [t._v(t._s(t.$t("navbar.Akiled-attitude")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/security/Akiled-whatis")
                        }
                    }, [t._v(t._s(t.$t("navbar.Akiled-what")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/contact")
                        }
                    }, [t._v(t._s(t.$t("navbar.support")))])], 1)])])], 1), t._v(" "), n("div", {
                        staticClass: "Akiled-nav__dropdown d-block d-lg-block"
                    }, [n("div", {
                        staticClass: "Akiled-nav__link",
                        on: {
                            click: function(e) {
                                t.dropName = "shop" == t.dropName ? "" : "shop"
                            }
                        }
                    }, [n("i", {
                        staticClass: "navbar-icon navbar-icon--shop"
                    }), t._v(" "), n("span", {
                        class: {
                            "Akiled-nav__text": !0, "mw-auto": "shop" == t.dropName
                        }
                    }, [t._v(t._s(t.$t("navbar.shop")))])]), t._v(" "), n("transition", {
                        attrs: {
                            name: "fade-in-down"
                        }
                    }, [n("div", {
                        key: "dropName_" + t.dropName,
                        class: {
                            "Akiled-nav__content": !0, "d-block": "shop" == t.dropName
                        }
                    }, [n("ul", {
                        staticClass: "Akiled-nav__ul"
                    }, [n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/boutique")
                        }
                    }, [t._v(t._s(t.$t("navbar.shop-buy")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/boutique/premium")
                        }
                    }, [t._v(t._s(t.$t("navbar.shop-premium")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/boutique/points")
                        }
                    }, [t._v(t._s(t.$t("navbar.shop-point")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/boutique/badgeperso")
                        }
                    }, [t._v(t._s(t.$t("navbar.shop-badge")))])], 1)])])], 1), t._v(" "), n("div", {
                        staticClass: "Akiled-nav__dropdown d-block d-lg-block"
                    }, [n("div", {
                        staticClass: "Akiled-nav__link",
                        on: {
                            click: function(e) {
                                t.dropName = "top" == t.dropName ? "" : "top"
                            }
                        }
                    }, [n("i", {
                        staticClass: "navbar-icon navbar-icon--top"
                    }), t._v(" "), n("span", {
                        class: {
                            "Akiled-nav__text": !0, "mw-auto": "top" == t.dropName
                        }
                    }, [t._v(t._s(t.$t("navbar.ranking")))])]), t._v(" "), n("transition", {
                        attrs: {
                            name: "fade-in-down"
                        }
                    }, [n("div", {
                        key: "dropName_" + t.dropName,
                        class: {
                            "Akiled-nav__content": !0, "d-block": "top" == t.dropName
                        }
                    }, [n("ul", {
                        staticClass: "Akiled-nav__ul"
                    }, [n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/classement/joueur")
                        }
                    }, [t._v(t._s(t.$t("navbar.ranking-wealth")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/classement/influences")
                        }
                    }, [t._v(t._s(t.$t("navbar.ranking-affecting")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/classement/gamer")
                        }
                    }, [t._v(t._s(t.$t("navbar.ranking-game")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/classement/mazo")
                        }
                    }, [t._v(t._s(t.$t("navbar.ranking-mazo")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/classement/run")
                        }
                    }, [t._v(t._s(t.$t("navbar.ranking-runner")))])], 1)])])], 1), t._v(" "), t.isConnected ? n("div", {
                        staticClass: "Akiled-nav__dropdown d-block d-lg-block"
                    }, [n("div", {
                        staticClass: "Akiled-nav__link",
                        on: {
                            click: function(e) {
                                t.dropName = "avatar" == t.dropName ? "" : "avatar"
                            }
                        }
                    }, [n("span", {
                        staticClass: "Akiled-nav__avatar"
                    }, [n("img", {
                        attrs: {
                            src: "https://habbo.city/habbo-imaging/avatarimage?figure=" + t.userAuth.look + "&direction=2&head_direction=3&action=&gesture=sml&size=s&headonly=true",
                            width: "27",
                            height: "31"
                        }
                    })]), t._v(" "), n("span", {
                        class: {
                            "Akiled-nav__text": !0, "mw-auto": "avatar" == t.dropName
                        }
                    }, [t._v(t._s(t.userAuth.username))])]), t._v(" "), n("transition", {
                        attrs: {
                            name: "fade-in-down"
                        }
                    }, [n("div", {
                        key: "dropName_" + t.dropName,
                        class: {
                            "Akiled-nav__content": !0, "d-block": "avatar" == t.dropName
                        }
                    }, [n("ul", {
                        staticClass: "Akiled-nav__ul"
                    }, [t.userAuth.rank > 5 ? n("li", {
                        staticClass: "Akiled-nav__li"
                    }, [n("a", {
                        attrs: {
                            href: "https://admin.localhost",
                            target: "_blank"
                        }
                    }, [t._v(t._s(t.$t("navbar.admin")))])]) : t._e(), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            to: t.localePath("/settings"),
                            tag: "li"
                        }
                    }, [t._v(t._s(t.$t("navbar.settings")))]), t._v(" "), n("NuxtLink", {
                        staticClass: "Akiled-nav__li",
                        attrs: {
                            tag: "li",
                            to: t.localePath("/profil/" + t.userAuth.username)
                        }
                    }, [t._v(t._s(t.$t("navbar.profil")))]), t._v(" "), n("li", {
                        staticClass: "Akiled-nav__li",
                        staticStyle: {
                            cursor: "pointer"
                        },
                        on: {
                            click: t.onDisconnect
                        }
                    }, [t._v(t._s(t.$t("navbar.logout")))])], 1)])])], 1) : t._e()])])])
                }), [function() {
                    var t = this.$createElement,
                        e = this._self._c || t;
                    return e("button", {
                        staticClass: "Akiled-nav__btn-search",
                        attrs: {
                            type: "submit",
                            name: "submit"
                        }
                    }, [e("i", {
                        staticClass: "fas fa-search"
                    })])
                }, function() {
                    var t = this.$createElement,
                        e = this._self._c || t;
                    return e("a", {
                        staticClass: "Akiled-nav__link",
                        staticStyle: {
                            cursor: "pointer"
                        },
                        attrs: {
                            disabled: ""
                        }
                    }, [e("i", {
                        staticClass: "fas fa-plus"
                    })])
                }], !1, null, null, null).exports);

            function _t(t) {
                var e = function() {
                    if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                    if (Reflect.construct.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}))), !0
                    } catch (t) {
                        return !1
                    }
                }();
                return function() {
                    var n, r = Object(E.a)(t);
                    if (e) {
                        var o = Object(E.a)(this).constructor;
                        n = Reflect.construct(r, arguments, o)
                    } else n = r.apply(this, arguments);
                    return Object(S.a)(this, n)
                }
            }
            var wt = function(t, e, n, desc) {
                    var r, o = arguments.length,
                        c = o < 3 ? e : null === desc ? desc = Object.getOwnPropertyDescriptor(e, n) : desc;
                    if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(L.a)(Reflect)) && "function" == typeof Reflect.decorate) c = Reflect.decorate(t, e, n, desc);
                    else
                        for (var i = t.length - 1; i >= 0; i--)(r = t[i]) && (c = (o < 3 ? r(c) : o > 3 ? r(e, n, c) : r(e, n)) || c);
                    return o > 3 && c && Object.defineProperty(e, n, c), c
                },
                xt = function(t) {
                    Object(P.a)(n, t);
                    var e = _t(n);

                    function n() {
                        var t;
                        return Object($.a)(this, n), (t = e.apply(this, arguments)).alertTimeout = 0, t.alertMessage = "", t.alertType = "", t.alertShow = !1, t.triggerTransition = !0, t
                    }
                    return Object(H.a)(n, [{
                        key: "onRouteChange",
                        value: function(t) {
                            this.hide()
                        }
                    }, {
                        key: "beforeMount",
                        value: function() {
                            this.$eventBus.$on("alert", this.show)
                        }
                    }, {
                        key: "beforeDestroy",
                        value: function() {
                            this.$eventBus.$off("alert", this.show), this.alertTimeout && clearTimeout(this.alertTimeout)
                        }
                    }, {
                        key: "show",
                        value: function() {
                            var t = this,
                                e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                                n = e.message,
                                r = void 0 === n ? "" : n,
                                o = e.type,
                                c = void 0 === o ? "success" : o,
                                l = e.duration,
                                f = void 0 === l ? 25 : l;
                            this.alertShow = !0, this.alertMessage = r, this.alertType = c, this.alertTimeout && clearTimeout(this.alertTimeout), f && (this.alertTimeout = window.setTimeout((function() {
                                return t.hide()
                            }), 1e3 * f)), this.triggerTransition = !this.triggerTransition
                        }
                    }, {
                        key: "hide",
                        value: function() {
                            this.alertShow = !1, this.alertTimeout && clearTimeout(this.alertTimeout)
                        }
                    }]), n
                }(N.Vue);
            wt([Object(N.Watch)("$route.name", {
                immediate: !0,
                deep: !0
            })], xt.prototype, "onRouteChange", null);
            var kt = xt = wt([N.Component], xt),
                Ot = (n(212), Object(M.a)(kt, (function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("transition", {
                        attrs: {
                            name: "fade-in-right",
                            mode: "out-in"
                        }
                    }, [t.alertShow ? n("div", {
                        key: t.triggerTransition,
                        staticClass: "Akiled-alert"
                    }, [n("div", {
                        staticClass: "Akiled-alert__close",
                        on: {
                            click: t.hide
                        }
                    }, [n("i", {
                        staticClass: "fas fa-times"
                    })]), t._v(" "), n("div", {
                        staticClass: "Akiled-alert__icon"
                    }, [n("i", {
                        staticClass: "fas Akiled-alert__blink",
                        class: {
                            "fa-times": "error" == t.alertType, "fa-exclamation": "warning" == t.alertType, "fa-check": "success" == t.alertType
                        }
                    })]), t._v(" "), n("div", {
                        staticClass: "Akiled-alert__content"
                    }, [n("h5", {
                        staticClass: "Akiled-alert__title"
                    }, [t._v(t._s("error" == t.alertType ? "Erreur" : "warning" == t.alertType ? "Attention" : "Confirmation"))]), t._v(" "), n("span", [t._v(t._s(t.alertMessage))])])]) : t._e()])
                }), [], !1, null, null, null).exports);

            function jt(t) {
                var e = function() {
                    if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                    if (Reflect.construct.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}))), !0
                    } catch (t) {
                        return !1
                    }
                }();
                return function() {
                    var n, r = Object(E.a)(t);
                    if (e) {
                        var o = Object(E.a)(this).constructor;
                        n = Reflect.construct(r, arguments, o)
                    } else n = r.apply(this, arguments);
                    return Object(S.a)(this, n)
                }
            }
            var Ct = function(t, e, n, desc) {
                    var r, o = arguments.length,
                        c = o < 3 ? e : null === desc ? desc = Object.getOwnPropertyDescriptor(e, n) : desc;
                    if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(L.a)(Reflect)) && "function" == typeof Reflect.decorate) c = Reflect.decorate(t, e, n, desc);
                    else
                        for (var i = t.length - 1; i >= 0; i--)(r = t[i]) && (c = (o < 3 ? r(c) : o > 3 ? r(e, n, c) : r(e, n)) || c);
                    return o > 3 && c && Object.defineProperty(e, n, c), c
                },
                Rt = function(t) {
                    Object(P.a)(o, t);
                    var e, n = jt(o);

                    function o() {
                        var t;
                        return Object($.a)(this, o), (t = n.apply(this, arguments)).clientLoader = !1, t.clientNitroLoader = !1, t
                    }
                    return Object(H.a)(o, [{
                        key: "onRouteChange",
                        value: function(t) {
                            t && (!t.startsWith("client-nitro") || this.clientNitroLoader || this.clientLoader ? !t.startsWith("client") || this.clientLoader || this.clientNitroLoader || (this.clientLoader = !0) : this.clientNitroLoader = !0)
                        }
                    }, {
                        key: "created",
                        value: (e = Object(r.a)(regeneratorRuntime.mark((function t() {
                            return regeneratorRuntime.wrap((function(t) {
                                for (;;) switch (t.prev = t.next) {
                                    case 0:
                                        document.addEventListener("click", this.documentClick);
                                    case 1:
                                    case "end":
                                        return t.stop()
                                }
                            }), t, this)
                        }))), function() {
                            return e.apply(this, arguments)
                        })
                    }, {
                        key: "destroyed",
                        value: function() {
                            document.removeEventListener("click", this.documentClick)
                        }
                    }, {
                        key: "documentClick",
                        value: function(t) {
                            if (!this.isClientRoute && (this.clientLoader || this.clientNitroLoader)) {
                                var e = document.getElementById("web");
                                e && e === t.target && (this.clientLoader ? this.$router.push(this.localeRoute({
                                    name: "client"
                                })) : this.clientNitroLoader && this.$router.push(this.localeRoute({
                                    name: "client-nitro"
                                })))
                            }
                        }
                    }, {
                        key: "isConnected",
                        get: function() {
                            return z.AuthStore.connected
                        }
                    }, {
                        key: "isClientRoute",
                        get: function() {
                            return !(!this.$route || !this.$route.name) && this.$route.name.startsWith("client")
                        }
                    }]), o
                }(N.Vue);
            Ct([Object(N.Watch)("$route.name", {
                immediate: !0,
                deep: !0
            })], Rt.prototype, "onRouteChange", null);
            var $t = Rt = Ct([Object(N.Component)({
                    components: {
                        Header: header,
                        Navbar: yt,
                        Footer: footer,
                        Client: function() {
                            return Promise.all([n.e(5), n.e(4), n.e(52)]).then(n.bind(null, 358)).then((function(t) {
                                return t.default
                            }))
                        },
                        ClientNitro: function() {
                            return Promise.all([n.e(5), n.e(4), n.e(53)]).then(n.bind(null, 400)).then((function(t) {
                                return t.default
                            }))
                        },
                        Alert: Ot
                    },
                    head: function() {
                        return this.$nuxtI18nSeo()
                    }
                })], Rt),
                Pt = (n(213), Object(M.a)($t, (function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "app",
                        attrs: {
                            "data-theme": "dark",
                            "data-theme-color": "blue"
                        }
                    }, [n("client-only", {
                        attrs: {
                            placeholder: "Loading..."
                        }
                    }, [t.clientLoader && t.isConnected ? n("Client", {
                        attrs: {
                            id: "client"
                        }
                    }) : t._e(), t._v(" "), t.clientNitroLoader && t.isConnected ? n("ClientNitro", {
                        attrs: {
                            id: "client"
                        }
                    }) : t._e()], 1), t._v(" "), n("transition", {
                        attrs: {
                            name: "fade-slow"
                        }
                    }, [n("div", {
                        directives: [{
                            name: "show",
                            rawName: "v-show",
                            value: !t.isClientRoute,
                            expression: "!isClientRoute"
                        }],
                        staticClass: "web",
                        attrs: {
                            id: "web"
                        }
                    }, [n("Header", {
                        directives: [{
                            name: "show",
                            rawName: "v-show",
                            value: !t.clientLoader && !t.clientNitroLoader && t.isConnected || !t.isConnected,
                            expression: "((!clientLoader && !clientNitroLoader) && isConnected) || !isConnected"
                        }],
                        attrs: {
                            id: "header"
                        }
                    }), t._v(" "), n("Navbar", {
                        attrs: {
                            id: "navbar"
                        }
                    }), t._v(" "), n("Alert", {
                        attrs: {
                            id: "alert"
                        }
                    }), t._v(" "), n("div", {
                        staticClass: "container mt-2",
                        class: {
                            main: !t.clientLoader && !t.clientNitroLoader && t.isConnected || !t.isConnected
                        },
                        attrs: {
                            id: "nuxt"
                        }
                    }, [n("nuxt")], 1), t._v(" "), n("Footer", {
                        directives: [{
                            name: "show",
                            rawName: "v-show",
                            value: !t.clientLoader && !t.clientNitroLoader && t.isConnected || !t.isConnected,
                            expression: "((!clientLoader && !clientNitroLoader) && isConnected) || !isConnected"
                        }],
                        attrs: {
                            id: "footer"
                        }
                    })], 1)])], 1)
                }), [], !1, null, null, null).exports);

            function St(t, e) {
                var n;
                if ("undefined" == typeof Symbol || null == t[Symbol.iterator]) {
                    if (Array.isArray(t) || (n = function(t, e) {
                            if (!t) return;
                            if ("string" == typeof t) return Et(t, e);
                            var n = Object.prototype.toString.call(t).slice(8, -1);
                            "Object" === n && t.constructor && (n = t.constructor.name);
                            if ("Map" === n || "Set" === n) return Array.from(t);
                            if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return Et(t, e)
                        }(t)) || e && t && "number" == typeof t.length) {
                        n && (t = n);
                        var i = 0,
                            r = function() {};
                        return {
                            s: r,
                            n: function() {
                                return i >= t.length ? {
                                    done: !0
                                } : {
                                    done: !1,
                                    value: t[i++]
                                }
                            },
                            e: function(t) {
                                throw t
                            },
                            f: r
                        }
                    }
                    throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                }
                var o, c = !0,
                    l = !1;
                return {
                    s: function() {
                        n = t[Symbol.iterator]()
                    },
                    n: function() {
                        var t = n.next();
                        return c = t.done, t
                    },
                    e: function(t) {
                        l = !0, o = t
                    },
                    f: function() {
                        try {
                            c || null == n.return || n.return()
                        } finally {
                            if (l) throw o
                        }
                    }
                }
            }

            function Et(t, e) {
                (null == e || e > t.length) && (e = t.length);
                for (var i = 0, n = new Array(e); i < e; i++) n[i] = t[i];
                return n
            }
            var Lt = {
                    _default: Object(_.s)(Pt)
                },
                Nt = {
                    render: function(t, e) {
                        var n = t("NuxtLoading", {
                                ref: "loading"
                            }),
                            r = t(this.layout || "nuxt"),
                            o = t("div", {
                                domProps: {
                                    id: "__layout"
                                },
                                key: this.layoutName
                            }, [r]),
                            c = t("transition", {
                                props: {
                                    name: "layout",
                                    mode: "out-in"
                                },
                                on: {
                                    beforeEnter: function(t) {
                                        window.$nuxt.$nextTick((function() {
                                            window.$nuxt.$emit("triggerScroll")
                                        }))
                                    }
                                }
                            }, [o]);
                        return t("div", {
                            domProps: {
                                id: "_data"
                            }
                        }, [n, c])
                    },
                    data: function() {
                        return {
                            isOnline: !0,
                            layout: null,
                            layoutName: "",
                            nbFetching: 0
                        }
                    },
                    beforeCreate: function() {
                        c.default.util.defineReactive(this, "nuxt", this.$options.nuxt)
                    },
                    created: function() {
                        this.$root.$options.$nuxt = this, window.$nuxt = this, this.refreshOnlineStatus(), window.addEventListener("online", this.refreshOnlineStatus), window.addEventListener("offline", this.refreshOnlineStatus), this.error = this.nuxt.error, this.context = this.$options.context
                    },
                    mounted: function() {
                        var t = this;
                        return Object(r.a)(regeneratorRuntime.mark((function e() {
                            return regeneratorRuntime.wrap((function(e) {
                                for (;;) switch (e.prev = e.next) {
                                    case 0:
                                        t.$loading = t.$refs.loading;
                                    case 1:
                                    case "end":
                                        return e.stop()
                                }
                            }), e)
                        })))()
                    },
                    watch: {
                        "nuxt.err": "errorChanged"
                    },
                    computed: {
                        isOffline: function() {
                            return !this.isOnline
                        },
                        isFetching: function() {
                            return this.nbFetching > 0
                        }
                    },
                    methods: {
                        refreshOnlineStatus: function() {
                            void 0 === window.navigator.onLine ? this.isOnline = !0 : this.isOnline = window.navigator.onLine
                        },
                        refresh: function() {
                            var t = this;
                            return Object(r.a)(regeneratorRuntime.mark((function e() {
                                var n, r;
                                return regeneratorRuntime.wrap((function(e) {
                                    for (;;) switch (e.prev = e.next) {
                                        case 0:
                                            if ((n = Object(_.h)(t.$route)).length) {
                                                e.next = 3;
                                                break
                                            }
                                            return e.abrupt("return");
                                        case 3:
                                            return t.$loading.start(), r = n.map((function(e) {
                                                var p = [];
                                                if (e.$options.fetch && e.$options.fetch.length && p.push(Object(_.q)(e.$options.fetch, t.context)), e.$fetch) p.push(e.$fetch());
                                                else {
                                                    var n, r = St(Object(_.e)(e.$vnode.componentInstance));
                                                    try {
                                                        for (r.s(); !(n = r.n()).done;) {
                                                            var component = n.value;
                                                            p.push(component.$fetch())
                                                        }
                                                    } catch (t) {
                                                        r.e(t)
                                                    } finally {
                                                        r.f()
                                                    }
                                                }
                                                return e.$options.asyncData && p.push(Object(_.q)(e.$options.asyncData, t.context).then((function(t) {
                                                    for (var n in t) c.default.set(e.$data, n, t[n])
                                                }))), Promise.all(p)
                                            })), e.prev = 5, e.next = 8, Promise.all(r);
                                        case 8:
                                            e.next = 15;
                                            break;
                                        case 10:
                                            e.prev = 10, e.t0 = e.catch(5), t.$loading.fail(e.t0), Object(_.k)(e.t0), t.error(e.t0);
                                        case 15:
                                            t.$loading.finish();
                                        case 16:
                                        case "end":
                                            return e.stop()
                                    }
                                }), e, null, [
                                    [5, 10]
                                ])
                            })))()
                        },
                        errorChanged: function() {
                            if (this.nuxt.err) {
                                this.$loading && (this.$loading.fail && this.$loading.fail(this.nuxt.err), this.$loading.finish && this.$loading.finish());
                                var t = (F.options || F).layout;
                                "function" == typeof t && (t = t(this.context)), this.setLayout(t)
                            }
                        },
                        setLayout: function(t) {
                            return t && Lt["_" + t] || (t = "default"), this.layoutName = t, this.layout = Lt["_" + t], this.layout
                        },
                        loadLayout: function(t) {
                            return t && Lt["_" + t] || (t = "default"), Promise.resolve(Lt["_" + t])
                        }
                    },
                    components: {
                        NuxtLoading: K
                    }
                };
            n(36);

            function At(t, e) {
                var n;
                if ("undefined" == typeof Symbol || null == t[Symbol.iterator]) {
                    if (Array.isArray(t) || (n = function(t, e) {
                            if (!t) return;
                            if ("string" == typeof t) return Tt(t, e);
                            var n = Object.prototype.toString.call(t).slice(8, -1);
                            "Object" === n && t.constructor && (n = t.constructor.name);
                            if ("Map" === n || "Set" === n) return Array.from(t);
                            if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return Tt(t, e)
                        }(t)) || e && t && "number" == typeof t.length) {
                        n && (t = n);
                        var i = 0,
                            r = function() {};
                        return {
                            s: r,
                            n: function() {
                                return i >= t.length ? {
                                    done: !0
                                } : {
                                    done: !1,
                                    value: t[i++]
                                }
                            },
                            e: function(t) {
                                throw t
                            },
                            f: r
                        }
                    }
                    throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                }
                var o, c = !0,
                    l = !1;
                return {
                    s: function() {
                        n = t[Symbol.iterator]()
                    },
                    n: function() {
                        var t = n.next();
                        return c = t.done, t
                    },
                    e: function(t) {
                        l = !0, o = t
                    },
                    f: function() {
                        try {
                            c || null == n.return || n.return()
                        } finally {
                            if (l) throw o
                        }
                    }
                }
            }

            function Tt(t, e) {
                (null == e || e > t.length) && (e = t.length);
                for (var i = 0, n = new Array(e); i < e; i++) n[i] = t[i];
                return n
            }
            c.default.use(l.a);
            var Dt = ["state", "getters", "actions", "mutations"],
                It = {};
            (It = function(t, e) {
                if ((t = t.default || t).commit) throw new Error("[nuxt] ".concat(e, " should export a method that returns a Vuex instance."));
                return "function" != typeof t && (t = Object.assign({}, t)), Ft(t, e)
            }(n(14), "store/index.ts")).modules = It.modules || {}, qt(n(107), "AuthModule.ts"), qt(n(108), "RoleplayModule.ts");
            var Mt = It instanceof Function ? It : function() {
                return new l.a.Store(Object.assign({
                    strict: !1
                }, It))
            };

            function Ft(t, e) {
                if (t.state && "function" != typeof t.state) {
                    console.warn("'state' should be a method that returns an object in ".concat(e));
                    var n = Object.assign({}, t.state);
                    t = Object.assign({}, t, {
                        state: function() {
                            return n
                        }
                    })
                }
                return t
            }

            function qt(t, e) {
                t = t.default || t;
                var n = e.replace(/\.(js|mjs|ts)$/, "").split("/"),
                    r = n[n.length - 1],
                    o = "store/".concat(e);
                if (t = "state" === r ? function(t, e) {
                        if ("function" != typeof t) {
                            console.warn("".concat(e, " should export a method that returns an object"));
                            var n = Object.assign({}, t);
                            return function() {
                                return n
                            }
                        }
                        return Ft(t, e)
                    }(t, o) : Ft(t, o), Dt.includes(r)) {
                    var c = r;
                    Bt(Ut(It, n, {
                        isProperty: !0
                    }), t, c)
                } else {
                    "index" === r && (n.pop(), r = n[n.length - 1]);
                    var l, f = Ut(It, n),
                        d = At(Dt);
                    try {
                        for (d.s(); !(l = d.n()).done;) {
                            var h = l.value;
                            Bt(f, t[h], h)
                        }
                    } catch (t) {
                        d.e(t)
                    } finally {
                        d.f()
                    }!1 === t.namespaced && delete f.namespaced
                }
            }

            function Ut(t, e) {
                var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
                    r = n.isProperty,
                    o = void 0 !== r && r;
                if (!e.length || o && 1 === e.length) return t;
                var c = e.shift();
                return t.modules[c] = t.modules[c] || {}, t.modules[c].namespaced = !0, t.modules[c].modules = t.modules[c].modules || {}, Ut(t.modules[c], e, {
                    isProperty: o
                })
            }

            function Bt(t, e, n) {
                e && ("state" === n ? t.state = e || t.state : t[n] = Object.assign({}, t[n], e))
            }
            window.$OneSignal = window.OneSignal = window.OneSignal || [], OneSignal.push(["init", {
                appId: "49a51879-7d7d-4253-b51c-a074eb06bfc6",
                allowLocalhostAsSecureOrigin: !0,
                notifyButton: {
                    enable: !1
                },
                welcomeNotification: {
                    disable: !0
                }
            }]);
            var Wt = function(t, e) {
                    e("OneSignal", OneSignal)
                },
                Kt = n(110),
                Ht = n.n(Kt),
                zt = n(154),
                Xt = n(155),
                Vt = n.n(Xt),
                Jt = function(t) {
                    var e = t.app;
                    Vt()(e.head, zt)
                },
                Qt = function(t, e) {
                    return Yt.apply(this, arguments)
                };

            function Yt() {
                return (Yt = Object(r.a)(regeneratorRuntime.mark((function t(e, n) {
                    var r;
                    return regeneratorRuntime.wrap((function(t) {
                        for (;;) switch (t.prev = t.next) {
                            case 0:
                                r = {
                                    "64x64": "/data/icons/icon_64x64.56e93e.png",
                                    "120x120": "/data/icons/icon_120x120.56e93e.png",
                                    "144x144": "/data/icons/icon_144x144.56e93e.png",
                                    "152x152": "/data/icons/icon_152x152.56e93e.png",
                                    "192x192": "/data/icons/icon_192x192.56e93e.png",
                                    "384x384": "/data/icons/icon_384x384.56e93e.png",
                                    "512x512": "/data/icons/icon_512x512.56e93e.png",
                                    ipad_1536x2048: "/data/icons/splash_ipad_1536x2048.56e93e.png",
                                    ipadpro9_1536x2048: "/data/icons/splash_ipadpro9_1536x2048.56e93e.png",
                                    ipadpro10_1668x2224: "/data/icons/splash_ipadpro10_1668x2224.56e93e.png",
                                    ipadpro12_2048x2732: "/data/icons/splash_ipadpro12_2048x2732.56e93e.png",
                                    iphonese_640x1136: "/data/icons/splash_iphonese_640x1136.56e93e.png",
                                    iphone6_50x1334: "/data/icons/splash_iphone6_50x1334.56e93e.png",
                                    iphoneplus_1080x1920: "/data/icons/splash_iphoneplus_1080x1920.56e93e.png",
                                    iphonex_1125x2436: "/data/icons/splash_iphonex_1125x2436.56e93e.png",
                                    iphonexr_828x1792: "/data/icons/splash_iphonexr_828x1792.56e93e.png",
                                    iphonexsmax_1242x2688: "/data/icons/splash_iphonexsmax_1242x2688.56e93e.png"
                                }, n("icon", (function(t) {
                                    return r[t + "x" + t] || ""
                                }));
                            case 3:
                            case "end":
                                return t.stop()
                        }
                    }), t)
                })))).apply(this, arguments)
            }
            n(43);
            var Gt = n(77),
                Zt = n(156),
                te = "https://www.google.com/recaptcha/api.js",
                ee = function() {
                    function t(e) {
                        var n = e.hideBadge,
                            r = e.language,
                            o = e.siteKey,
                            c = e.version,
                            l = e.size;
                        if (Object($.a)(this, t), !o) throw new Error("ReCaptcha error: No key provided");
                        if (!c) throw new Error("ReCaptcha error: No version provided");
                        this._elements = {}, this._eventBus = null, this._ready = !1, this.hideBadge = n, this.language = r || "en", this.siteKey = o, this.version = c, this.size = l
                    }
                    var e;
                    return Object(H.a)(t, [{
                        key: "destroy",
                        value: function() {
                            if (this._ready) {
                                this._ready = !1;
                                var head = document.head,
                                    style = this._elements.style,
                                    t = Object(Gt.a)(document.head.querySelectorAll("script")).filter((function(script) {
                                        return script.src.includes("recaptcha")
                                    }));
                                t.length && t.forEach((function(script) {
                                    return head.removeChild(script)
                                })), head.contains(style) && head.removeChild(style)
                            }
                        }
                    }, {
                        key: "execute",
                        value: (e = Object(r.a)(regeneratorRuntime.mark((function t(e) {
                            return regeneratorRuntime.wrap((function(t) {
                                for (;;) switch (t.prev = t.next) {
                                    case 0:
                                        return t.prev = 0, t.next = 3, this.init();
                                    case 3:
                                        if (!("grecaptcha" in window)) {
                                            t.next = 5;
                                            break
                                        }
                                        return t.abrupt("return", window.grecaptcha.execute(this.siteKey, {
                                            action: e
                                        }));
                                    case 5:
                                        t.next = 10;
                                        break;
                                    case 7:
                                        throw t.prev = 7, t.t0 = t.catch(0), new Error("ReCaptcha error: Failed to execute");
                                    case 10:
                                    case "end":
                                        return t.stop()
                                }
                            }), t, this, [
                                [0, 7]
                            ])
                        }))), function(t) {
                            return e.apply(this, arguments)
                        })
                    }, {
                        key: "getResponse",
                        value: function() {
                            var t = this;
                            return new Promise((function(e, n) {
                                if ("grecaptcha" in window)
                                    if ("invisible" == t.size) window.grecaptcha.execute(), window.recaptchaSuccessCallback = function(n) {
                                        t._eventBus.emit("recaptcha-success", n), e(n)
                                    }, window.recaptchaErrorCallback = function(e) {
                                        t._eventBus.emit("recaptcha-error", e), n(e)
                                    };
                                    else {
                                        var r = window.grecaptcha.getResponse();
                                        if (r) t._eventBus.emit("recaptcha-success", r), e(r);
                                        else {
                                            t._eventBus.emit("recaptcha-error", "Failed to execute"), n("Failed to execute")
                                        }
                                    }
                            }))
                        }
                    }, {
                        key: "init",
                        value: function() {
                            var t = this;
                            if (this._ready) return Promise.resolve();
                            this._eventBus = new Zt.EventEmitter, this._elements = {
                                script: document.createElement("script"),
                                style: document.createElement("style")
                            };
                            var e = this._elements,
                                script = e.script,
                                style = e.style;
                            return script.addEventListener("error", (function() {
                                throw document.head.removeChild(script), new Error("ReCaptcha error: Failed to load script")
                            })), script.setAttribute("async", ""), script.setAttribute("defer", ""), 2 === this.version ? script.setAttribute("src", te + "?hl=" + this.language) : script.setAttribute("src", te + "?render=" + this.siteKey), document.head.appendChild(script), window.recaptchaSuccessCallback = function(e) {
                                return t._eventBus.emit("recaptcha-success", e)
                            }, window.recaptchaExpiredCallback = function() {
                                return t._eventBus.emit("recaptcha-expired")
                            }, window.recaptchaErrorCallback = function() {
                                return t._eventBus.emit("recaptcha-error", "Failed to execute")
                            }, this._ready = new Promise((function(e) {
                                script.addEventListener("load", (function() {
                                    3 === t.version && t.hideBadge ? (style.innerHTML = ".grecaptcha-badge { display: none }", document.head.appendChild(style)) : 2 === t.version && t.hideBadge && (style.innerHTML = ".grecaptcha-badge { visibility: hidden; }", document.head.appendChild(style)), window.grecaptcha.ready(e)
                                }))
                            })), this._ready
                        }
                    }, {
                        key: "on",
                        value: function(t, e) {
                            return this._eventBus.on(t, e)
                        }
                    }, {
                        key: "reset",
                        value: function() {
                            2 === this.version && window.grecaptcha.reset()
                        }
                    }]), t
                }(),
                ne = function(t, e) {
                    c.default.component("recaptcha", (function() {
                        return n.e(51).then(n.bind(null, 399))
                    })), e("recaptcha", new ee({
                        hideBadge: !1,
                        language: "fr",
                        siteKey: "6LdLrv4SAAAAADqmp8nOviJO_WcpaKGeRflnQeNp",
                        version: 2,
                        size: "normal"
                    }))
                },
                re = n(72),
                oe = n.n(re),
                ae = n(157),
                ie = n.n(ae);

            function se(t, e) {
                var n;
                if ("undefined" == typeof Symbol || null == t[Symbol.iterator]) {
                    if (Array.isArray(t) || (n = function(t, e) {
                            if (!t) return;
                            if ("string" == typeof t) return ce(t, e);
                            var n = Object.prototype.toString.call(t).slice(8, -1);
                            "Object" === n && t.constructor && (n = t.constructor.name);
                            if ("Map" === n || "Set" === n) return Array.from(t);
                            if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return ce(t, e)
                        }(t)) || e && t && "number" == typeof t.length) {
                        n && (t = n);
                        var i = 0,
                            r = function() {};
                        return {
                            s: r,
                            n: function() {
                                return i >= t.length ? {
                                    done: !0
                                } : {
                                    done: !1,
                                    value: t[i++]
                                }
                            },
                            e: function(t) {
                                throw t
                            },
                            f: r
                        }
                    }
                    throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                }
                var o, c = !0,
                    l = !1;
                return {
                    s: function() {
                        n = t[Symbol.iterator]()
                    },
                    n: function() {
                        var t = n.next();
                        return c = t.done, t
                    },
                    e: function(t) {
                        l = !0, o = t
                    },
                    f: function() {
                        try {
                            c || null == n.return || n.return()
                        } finally {
                            if (l) throw o
                        }
                    }
                }
            }

            function ce(t, e) {
                (null == e || e > t.length) && (e = t.length);
                for (var i = 0, n = new Array(e); i < e; i++) n[i] = t[i];
                return n
            }
            for (var ue = {
                    setBaseURL: function(t) {
                        this.defaults.baseURL = t
                    },
                    setHeader: function(t, e) {
                        var n, r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "common",
                            o = se(Array.isArray(r) ? r : [r]);
                        try {
                            for (o.s(); !(n = o.n()).done;) {
                                var c = n.value;
                                if (!e) return void delete this.defaults.headers[c][t];
                                this.defaults.headers[c][t] = e
                            }
                        } catch (t) {
                            o.e(t)
                        } finally {
                            o.f()
                        }
                    },
                    setToken: function(t, e) {
                        var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "common",
                            r = t ? (e ? e + " " : "") + t : null;
                        this.setHeader("Authorization", r, n)
                    },
                    onRequest: function(t) {
                        this.interceptors.request.use((function(e) {
                            return t(e) || e
                        }))
                    },
                    onResponse: function(t) {
                        this.interceptors.response.use((function(e) {
                            return t(e) || e
                        }))
                    },
                    onRequestError: function(t) {
                        this.interceptors.request.use(void 0, (function(e) {
                            return t(e) || Promise.reject(e)
                        }))
                    },
                    onResponseError: function(t) {
                        this.interceptors.response.use(void 0, (function(e) {
                            return t(e) || Promise.reject(e)
                        }))
                    },
                    onError: function(t) {
                        this.onRequestError(t), this.onResponseError(t)
                    },
                    create: function(t) {
                        return de(ie()(t, this.defaults))
                    }
                }, le = function() {
                    var t = pe[fe];
                    ue["$" + t] = function() {
                        return this[t].apply(this, arguments).then((function(t) {
                            return t && t.data
                        }))
                    }
                }, fe = 0, pe = ["request", "delete", "get", "head", "options", "post", "put", "patch"]; fe < pe.length; fe++) le();
            var de = function(t) {
                    var e = oe.a.create(t);
                    return e.CancelToken = oe.a.CancelToken, e.isCancel = oe.a.isCancel,
                        function(t) {
                            for (var e in ue) t[e] = ue[e].bind(t)
                        }(e), he(e), e
                },
                he = function(t) {
                    var e = {
                            finish: function() {},
                            start: function() {},
                            fail: function() {},
                            set: function() {}
                        },
                        n = function() {
                            var t = "undefined" != typeof window && window.$nuxt;
                            return t && t.$loading && t.$loading.set ? t.$loading : e
                        },
                        r = 0;
                    t.onRequest((function(t) {
                        t && !1 === t.progress || r++
                    })), t.onResponse((function(t) {
                        t && t.config && !1 === t.config.progress || --r <= 0 && (r = 0, n().finish())
                    })), t.onError((function(t) {
                        t && t.config && !1 === t.config.progress || (r--, oe.a.isCancel(t) ? r <= 0 && (r = 0, n().finish()) : (n().fail(), n().finish()))
                    }));
                    var o = function(t) {
                        if (r) {
                            var progress = 100 * t.loaded / (t.total * r);
                            n().set(Math.min(100, progress))
                        }
                    };
                    t.defaults.onUploadProgress = o, t.defaults.onDownloadProgress = o
                },
                me = function(t, e) {
                    var n = t.$config && t.$config.axios || {},
                        r = n.browserBaseURL || n.baseURL || "/";
                    var o = de({
                        baseURL: r,
                        headers: {
                            common: {
                                Accept: "application/json, text/plain, */*"
                            },
                            delete: {},
                            get: {},
                            head: {},
                            post: {},
                            put: {},
                            patch: {}
                        }
                    });
                    t.$axios = o, e("axios", o)
                },
                ve = (n(57), n(162));
            n(68).a.nuxti18n = function() {
                var t = Object(r.a)(regeneratorRuntime.mark((function t(e) {
                    var n, r, o, c, l, f, d;
                    return regeneratorRuntime.wrap((function(t) {
                        for (;;) switch (t.prev = t.next) {
                            case 0:
                                if (n = e.app, !e.isHMR) {
                                    t.next = 3;
                                    break
                                }
                                return t.abrupt("return");
                            case 3:
                                return t.next = 5, n.i18n.__onNavigate(e.route);
                            case 5:
                                r = t.sent, o = Object(U.a)(r, 3), c = o[0], l = o[1], f = o[2], c && l && (d = f ? e.route.query : void 0, e.redirect(c, l, d));
                            case 11:
                            case "end":
                                return t.stop()
                        }
                    }), t)
                })));
                return function(e) {
                    return t.apply(this, arguments)
                }
            }();
            var be = n(0);

            function ge(object, t) {
                var e = Object.keys(object);
                if (Object.getOwnPropertySymbols) {
                    var n = Object.getOwnPropertySymbols(object);
                    t && (n = n.filter((function(t) {
                        return Object.getOwnPropertyDescriptor(object, t).enumerable
                    }))), e.push.apply(e, n)
                }
                return e
            }

            function ye(t) {
                for (var i = 1; i < arguments.length; i++) {
                    var source = null != arguments[i] ? arguments[i] : {};
                    i % 2 ? ge(Object(source), !0).forEach((function(e) {
                        Object(o.a)(t, e, source[e])
                    })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(source)) : ge(Object(source)).forEach((function(e) {
                        Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(source, e))
                    }))
                }
                return t
            }

            function _e(t, e) {
                var n = we.call(this, t, e);
                if (n) return n.fullPath
            }

            function we(t, e) {
                if (t) {
                    var n = this.i18n;
                    if (e = e || n.locale) {
                        "string" == typeof t && (t = "/" === t[0] ? {
                            path: t
                        } : {
                            name: t
                        });
                        var r = Object.assign({}, t);
                        if (t.path && !t.name) {
                            var path = !(e === be.j && [be.g.PREFIX_EXCEPT_DEFAULT, be.g.PREFIX_AND_DEFAULT].includes(be.t) || be.t === be.g.NO_PREFIX || n.differentDomains) ? "/".concat(e).concat(t.path) : t.path;
                            path = path.replace(/\/+$/, "") + (be.u ? "/" : "") || "/", r.path = path
                        } else {
                            t.name || t.path || (r.name = this.getRouteBaseName()), r.name = function(t, e) {
                                var n = t + (be.t === be.g.NO_PREFIX ? "" : be.s + e);
                                e === be.j && be.t === be.g.PREFIX_AND_DEFAULT && (n += be.s + be.k);
                                return n
                            }(r.name, e);
                            var o = r.params;
                            o && void 0 === o[0] && o.pathMatch && (o[0] = o.pathMatch)
                        }
                        return this.router.resolve(r).route
                    }
                }
            }

            function xe(t) {
                var e = this.getRouteBaseName();
                if (!e) return "";
                var n = this.i18n,
                    r = this.route,
                    o = this.store;
                if (!r) return "";
                var c = r.params,
                    l = Object(ve.a)(r, ["params"]),
                    f = {};
                be.w && be.w.syncRouteParams && o && (f = o.getters["".concat(be.w.moduleName, "/localeRouteParams")](t));
                var d = Object.assign({}, l, {
                        name: e,
                        params: ye(ye(ye({}, c), f), {}, {
                            0: c.pathMatch
                        })
                    }),
                    path = this.localePath(d, t);
                if (n.differentDomains) {
                    var h = n.locales.find((function(e) {
                        return e[be.b] === t
                    }));
                    if (h && h[be.c]) path = window.location.protocol.split(":")[0] + "://" + h[be.c] + path;
                    else console.warn("[".concat(be.f, "] Could not find domain name for locale ").concat(t))
                }
                return path
            }

            function ke(t) {
                var e = void 0 !== t ? t : this.route;
                return e && e.name ? e.name.split(be.s)[0] : null
            }
            var Oe = function(t) {
                    return function() {
                        var e = {
                            getRouteBaseName: this.getRouteBaseName,
                            i18n: this.$i18n,
                            localePath: this.localePath,
                            req: null,
                            route: this.$route,
                            router: this.$router,
                            store: this.$store
                        };
                        return t.apply(e, arguments)
                    }
                },
                je = function(t, e) {
                    return function() {
                        var n = t.app,
                            r = (t.req, t.route),
                            o = t.store,
                            c = {
                                getRouteBaseName: n.getRouteBaseName,
                                i18n: n.i18n,
                                localePath: n.localePath,
                                req: null,
                                route: r,
                                router: n.router,
                                store: o
                            };
                        return e.apply(c, arguments)
                    }
                },
                Ce = {
                    install: function(t) {
                        t.mixin({
                            methods: {
                                localePath: Oe(_e),
                                localeRoute: Oe(we),
                                switchLocalePath: Oe(xe),
                                getRouteBaseName: Oe(ke)
                            }
                        })
                    }
                },
                Re = function(t) {
                    c.default.use(Ce);
                    var e = t.app;
                    e.localePath = je(t, _e), e.localeRoute = je(t, we), e.switchLocalePath = je(t, xe), e.getRouteBaseName = je(t, ke)
                },
                $e = n(158),
                Pe = n.n($e),
                Se = n(111);
            n(165);

            function Ee(object, t) {
                var e = Object.keys(object);
                if (Object.getOwnPropertySymbols) {
                    var n = Object.getOwnPropertySymbols(object);
                    t && (n = n.filter((function(t) {
                        return Object.getOwnPropertyDescriptor(object, t).enumerable
                    }))), e.push.apply(e, n)
                }
                return e
            }

            function Le(t) {
                for (var i = 1; i < arguments.length; i++) {
                    var source = null != arguments[i] ? arguments[i] : {};
                    i % 2 ? Ee(Object(source), !0).forEach((function(e) {
                        Object(o.a)(t, e, source[e])
                    })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(source)) : Ee(Object(source)).forEach((function(e) {
                        Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(source, e))
                    }))
                }
                return t
            }

            function Ne(t, e) {
                var n;
                if ("undefined" == typeof Symbol || null == t[Symbol.iterator]) {
                    if (Array.isArray(t) || (n = function(t, e) {
                            if (!t) return;
                            if ("string" == typeof t) return Ae(t, e);
                            var n = Object.prototype.toString.call(t).slice(8, -1);
                            "Object" === n && t.constructor && (n = t.constructor.name);
                            if ("Map" === n || "Set" === n) return Array.from(t);
                            if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return Ae(t, e)
                        }(t)) || e && t && "number" == typeof t.length) {
                        n && (t = n);
                        var i = 0,
                            r = function() {};
                        return {
                            s: r,
                            n: function() {
                                return i >= t.length ? {
                                    done: !0
                                } : {
                                    done: !1,
                                    value: t[i++]
                                }
                            },
                            e: function(t) {
                                throw t
                            },
                            f: r
                        }
                    }
                    throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                }
                var o, c = !0,
                    l = !1;
                return {
                    s: function() {
                        n = t[Symbol.iterator]()
                    },
                    n: function() {
                        var t = n.next();
                        return c = t.done, t
                    },
                    e: function(t) {
                        l = !0, o = t
                    },
                    f: function() {
                        try {
                            c || null == n.return || n.return()
                        } finally {
                            if (l) throw o
                        }
                    }
                }
            }

            function Ae(t, e) {
                (null == e || e > t.length) && (e = t.length);
                for (var i = 0, n = new Array(e); i < e; i++) n[i] = t[i];
                return n
            }
            var Te = function() {
                var t = this;
                if (!(f.a.hasMetaInfo ? f.a.hasMetaInfo(this) : this._hasMetaInfo) || !this.$i18n || !this.$i18n.locale || !this.$i18n.locales || !1 === this.$options[be.a] || this.$options[be.a] && !1 === this.$options[be.a].seo) return {};
                var e = {
                        htmlAttrs: {},
                        link: [],
                        meta: []
                    },
                    n = this.$i18n.locales.find((function(e) {
                        return e[be.b] === t.$i18n.locale
                    })),
                    r = qe(n);
                return n && r && (e.htmlAttrs.lang = r), De.bind(this)(this.$i18n.locales, this.$i18n.__baseUrl, e.link), Ie.bind(this)(this.$i18n.__baseUrl, e.link), Me.bind(this)(n, r, e.meta), Fe.bind(this)(this.$i18n.locales, r, e.meta), e
            };

            function De(t, e, link) {
                if (be.t !== be.g.NO_PREFIX) {
                    var n, r = new Map,
                        o = Ne(t);
                    try {
                        for (o.s(); !(n = o.n()).done;) {
                            var c = n.value,
                                l = qe(c);
                            if (l) {
                                var f = l.split("-"),
                                    d = Object(U.a)(f, 2),
                                    h = d[0],
                                    m = d[1];
                                h && m && (c.isCatchallLocale || !r.has(h)) && r.set(h, c), r.set(l, c)
                            } else console.warn("[".concat(be.f, "] Locale ISO code is required to generate alternate link"))
                        }
                    } catch (t) {
                        o.e(t)
                    } finally {
                        o.f()
                    }
                    var v, y = Ne(r.entries());
                    try {
                        for (y.s(); !(v = y.n()).done;) {
                            var _ = Object(U.a)(v.value, 2),
                                w = _[0],
                                x = _[1];
                            link.push({
                                hid: "i18n-alt-".concat(w),
                                rel: "alternate",
                                href: e + this.switchLocalePath(x.code),
                                hreflang: w
                            })
                        }
                    } catch (t) {
                        y.e(t)
                    } finally {
                        y.f()
                    }
                    be.j && link.push({
                        hid: "i18n-xd",
                        rel: "alternate",
                        href: e + this.switchLocalePath(be.j),
                        hreflang: "x-default"
                    })
                }
            }

            function Ie(t, link) {
                var e = this.localeRoute(Le(Le({}, this.$route), {}, {
                        name: this.getRouteBaseName()
                    })),
                    n = e ? e.path : null;
                n && link.push({
                    hid: "i18n-can",
                    rel: "canonical",
                    href: t + n
                })
            }

            function Me(t, e, meta) {
                t && e && meta.push({
                    hid: "i18n-og",
                    property: "og:locale",
                    content: Ue(t)
                })
            }

            function Fe(t, e, meta) {
                var n = t.filter((function(t) {
                    var n = qe(t);
                    return n && n !== e
                })).map((function(t) {
                    return {
                        hid: "i18n-og-alt-".concat(qe(t)),
                        property: "og:locale:alternate",
                        content: Ue(t)
                    }
                }));
                meta.push.apply(meta, Object(Gt.a)(n))
            }

            function qe(t) {
                return t[be.e]
            }

            function Ue(t) {
                return qe(t).replace(/-/g, "_")
            }
            n(235), n(117), n(106), n(237);

            function Be(object, t) {
                var e = Object.keys(object);
                if (Object.getOwnPropertySymbols) {
                    var n = Object.getOwnPropertySymbols(object);
                    t && (n = n.filter((function(t) {
                        return Object.getOwnPropertyDescriptor(object, t).enumerable
                    }))), e.push.apply(e, n)
                }
                return e
            }

            function We(t) {
                for (var i = 1; i < arguments.length; i++) {
                    var source = null != arguments[i] ? arguments[i] : {};
                    i % 2 ? Be(Object(source), !0).forEach((function(e) {
                        Object(o.a)(t, e, source[e])
                    })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(source)) : Be(Object(source)).forEach((function(e) {
                        Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(source, e))
                    }))
                }
                return t
            }

            function Ke(t, e) {
                var n;
                if ("undefined" == typeof Symbol || null == t[Symbol.iterator]) {
                    if (Array.isArray(t) || (n = function(t, e) {
                            if (!t) return;
                            if ("string" == typeof t) return He(t, e);
                            var n = Object.prototype.toString.call(t).slice(8, -1);
                            "Object" === n && t.constructor && (n = t.constructor.name);
                            if ("Map" === n || "Set" === n) return Array.from(t);
                            if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return He(t, e)
                        }(t)) || e && t && "number" == typeof t.length) {
                        n && (t = n);
                        var i = 0,
                            r = function() {};
                        return {
                            s: r,
                            n: function() {
                                return i >= t.length ? {
                                    done: !0
                                } : {
                                    done: !1,
                                    value: t[i++]
                                }
                            },
                            e: function(t) {
                                throw t
                            },
                            f: r
                        }
                    }
                    throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                }
                var o, c = !0,
                    l = !1;
                return {
                    s: function() {
                        n = t[Symbol.iterator]()
                    },
                    n: function() {
                        var t = n.next();
                        return c = t.done, t
                    },
                    e: function(t) {
                        l = !0, o = t
                    },
                    f: function() {
                        try {
                            c || null == n.return || n.return()
                        } finally {
                            if (l) throw o
                        }
                    }
                }
            }

            function He(t, e) {
                (null == e || e > t.length) && (e = t.length);
                for (var i = 0, n = new Array(e); i < e; i++) n[i] = t[i];
                return n
            }
            var ze = function(t, e) {
                    var n, r = [],
                        o = Ke(e.entries());
                    try {
                        var c = function() {
                            var o = Object(U.a)(n.value, 2),
                                c = o[0],
                                l = o[1],
                                f = t.find((function(t) {
                                    return t.toLowerCase() === l.toLowerCase()
                                }));
                            if (f) return r.push({
                                code: f,
                                score: 1 - c / e.length
                            }), "break"
                        };
                        for (o.s(); !(n = o.n()).done;) {
                            if ("break" === c()) break
                        }
                    } catch (t) {
                        o.e(t)
                    } finally {
                        o.f()
                    }
                    var l, f = Ke(e.entries());
                    try {
                        for (f.s(); !(l = f.n()).done;) {
                            var d = Object(U.a)(l.value, 2),
                                h = d[0],
                                m = d[1];
                            if (m.includes("-")) {
                                var v = m.split("-")[0].toLowerCase();
                                if (t.includes(v)) {
                                    r.push({
                                        code: v,
                                        score: .999 - h / e.length
                                    });
                                    break
                                }
                            }
                        }
                    } catch (t) {
                        f.e(t)
                    } finally {
                        f.f()
                    }
                    return r.length > 1 && r.sort((function(t, e) {
                        return t.score === e.score ? e.code.length - t.code.length : e.score - t.score
                    })), r.length ? r[0].code : null
                },
                Xe = function(t, e) {
                    return "function" == typeof t ? t(e) : t
                },
                Ve = function(t, e, n) {
                    var r = n.localDomainKey,
                        o = n.localeCodeKey,
                        c = null;
                    if (c = window.location.host) {
                        var l = t.find((function(t) {
                            return t[r] === c
                        }));
                        if (l) return l[o]
                    }
                    return null
                },
                Je = function(t, e) {
                    var n, r = e.useCookie,
                        o = e.cookieKey,
                        c = e.localeCodes;
                    if (r && (n = V.a.get(o), c.includes(n))) return n
                },
                Qe = function(t, e, n) {
                    var r = n.useCookie,
                        o = n.cookieDomain,
                        c = n.cookieKey,
                        l = n.cookieSecure,
                        f = n.cookieCrossOrigin;
                    if (r) {
                        var d = new Date,
                            h = {
                                expires: new Date(d.setDate(d.getDate() + 365)),
                                path: "/",
                                sameSite: f ? "none" : "lax",
                                secure: f || l
                            };
                        o && (h.domain = o), V.a.set(c, t, h)
                    }
                },
                Ye = function(t, e, n, r) {
                    t.registerModule(e.moduleName, {
                        namespaced: !0,
                        state: function() {
                            return We(We(We({}, e.syncLocale ? {
                                locale: ""
                            } : {}), e.syncMessages ? {
                                messages: {}
                            } : {}), e.syncRouteParams ? {
                                routeParams: {}
                            } : {})
                        },
                        actions: We(We(We({}, e.syncLocale ? {
                            setLocale: function(t, e) {
                                (0, t.commit)("setLocale", e)
                            }
                        } : {}), e.syncMessages ? {
                            setMessages: function(t, e) {
                                (0, t.commit)("setMessages", e)
                            }
                        } : {}), e.syncRouteParams ? {
                            setRouteParams: function(t, e) {
                                (0, t.commit)("setRouteParams", e)
                            }
                        } : {}),
                        mutations: We(We(We({}, e.syncLocale ? {
                            setLocale: function(t, e) {
                                t.locale = e
                            }
                        } : {}), e.syncMessages ? {
                            setMessages: function(t, e) {
                                t.messages = e
                            }
                        } : {}), e.syncRouteParams ? {
                            setRouteParams: function(t, e) {
                                t.routeParams = e
                            }
                        } : {}),
                        getters: We({}, e.syncRouteParams ? {
                            localeRouteParams: function(t) {
                                var e = t.routeParams;
                                return function(t) {
                                    return e[t] || {}
                                }
                            }
                        } : {})
                    }, {
                        preserveState: !!t.state[e.moduleName]
                    })
                },
                Ge = function() {
                    var t = Object(r.a)(regeneratorRuntime.mark((function t(e) {
                        var n, r, o, c, l = arguments;
                        return regeneratorRuntime.wrap((function(t) {
                            for (;;) switch (t.prev = t.next) {
                                case 0:
                                    if (n = l.length > 1 && void 0 !== l[1] ? l[1] : null, r = l.length > 2 && void 0 !== l[2] ? l[2] : null, o = l.length > 3 ? l[3] : void 0, !(c = o.vuex) || !e) {
                                        t.next = 10;
                                        break
                                    }
                                    if (null === n || !c.syncLocale) {
                                        t.next = 7;
                                        break
                                    }
                                    return t.next = 7, e.dispatch(c.moduleName + "/setLocale", n);
                                case 7:
                                    if (null === r || !c.syncMessages) {
                                        t.next = 10;
                                        break
                                    }
                                    return t.next = 10, e.dispatch(c.moduleName + "/setMessages", r);
                                case 10:
                                case "end":
                                    return t.stop()
                            }
                        }), t)
                    })));
                    return function(e) {
                        return t.apply(this, arguments)
                    }
                }();
            c.default.use(Se.a);
            var Ze, tn, en, nn, rn, on, an, sn, cn = be.l.alwaysRedirect,
                un = be.l.onlyOnRoot,
                ln = be.l.fallbackLocale,
                fn = (Ze = be.o, tn = {
                    routesNameSeparator: be.s,
                    defaultLocaleRouteNameSuffix: be.k
                }, en = tn.routesNameSeparator, nn = tn.defaultLocaleRouteNameSuffix, rn = "(".concat(Ze.join("|"), ")"), on = "(?:".concat(en).concat(nn, ")?"), an = new RegExp("".concat(en).concat(rn).concat(on, "$"), "i"), sn = new RegExp("^/".concat(rn, "/"), "i"), function(t) {
                    if (t.name) {
                        var e = t.name.match(an);
                        if (e && e.length > 1) return e[1]
                    } else if (t.path) {
                        var n = t.path.match(sn);
                        if (n && n.length > 1) return n[1]
                    }
                    return null
                }),
                pn = function() {
                    var t = Object(r.a)(regeneratorRuntime.mark((function t(e) {
                        var o, l, f, d, h, m, v, y, _, w, x, k, O, j, C, R, $, P, S, E, L, N, A;
                        return regeneratorRuntime.wrap((function(t) {
                            for (;;) switch (t.prev = t.next) {
                                case 0:
                                    return o = e.app, l = e.route, f = e.store, d = e.req, e.res, h = e.redirect, be.w && f && Ye(f, be.w, be.o, be.f), m = be.l.useCookie, v = be.l.cookieKey, y = be.l.cookieDomain, _ = be.l.cookieSecure, w = be.l.cookieCrossOrigin, x = function() {
                                        var t = Object(r.a)(regeneratorRuntime.mark((function t(r) {
                                            var c, l, d, v, y, _, w, x, O = arguments;
                                            return regeneratorRuntime.wrap((function(t) {
                                                for (;;) switch (t.prev = t.next) {
                                                    case 0:
                                                        if (c = O.length > 1 && void 0 !== O[1] ? O[1] : {}, l = c.initialSetup, (d = void 0 !== l && l) || !o.i18n.differentDomains) {
                                                            t.next = 3;
                                                            break
                                                        }
                                                        return t.abrupt("return");
                                                    case 3:
                                                        if (r !== o.i18n.locale) {
                                                            t.next = 5;
                                                            break
                                                        }
                                                        return t.abrupt("return");
                                                    case 5:
                                                        if (v = o.i18n.locale, d || o.i18n.beforeLanguageSwitch(v, r), m && o.i18n.setLocaleCookie(r), !be.n) {
                                                            t.next = 15;
                                                            break
                                                        }
                                                        if (y = n(238), _ = y.loadLanguageAsync, !o.i18n.fallbackLocale || r === o.i18n.fallbackLocale) {
                                                            t.next = 13;
                                                            break
                                                        }
                                                        return t.next = 13, _(e, o.i18n.fallbackLocale);
                                                    case 13:
                                                        return t.next = 15, _(e, r);
                                                    case 15:
                                                        return o.i18n.locale = r, t.next = 18, Ge(f, r, o.i18n.getLocaleMessage(r), {
                                                            vuex: be.w
                                                        });
                                                    case 18:
                                                        w = e.route, x = k(w, r), d ? o.i18n.__redirect = x : (o.i18n.onLanguageSwitched(v, r), x && h(x));
                                                    case 21:
                                                    case "end":
                                                        return t.stop()
                                                }
                                            }), t)
                                        })));
                                        return function(e) {
                                            return t.apply(this, arguments)
                                        }
                                    }(), k = function(t, e) {
                                        if (!e || o.i18n.differentDomains || be.t === be.g.NO_PREFIX) return "";
                                        if (fn(t) === e && (!un || e !== be.j || be.t !== be.g.PREFIX_AND_DEFAULT)) return "";
                                        var n = o.switchLocalePath(e);
                                        return n || (n = o.localePath(t.fullPath, e)), n === t.fullPath ? "" : n
                                    }, O = function() {
                                        var t = Object(r.a)(regeneratorRuntime.mark((function t(n) {
                                            var r, path, c, l;
                                            return regeneratorRuntime.wrap((function(t) {
                                                for (;;) switch (t.prev = t.next) {
                                                    case 0:
                                                        if ("/" !== n.path || !be.r) {
                                                            t.next = 5;
                                                            break
                                                        }
                                                        return r = 302, path = be.r, "string" != typeof be.r && (r = be.r.statusCode, path = be.r.path), t.abrupt("return", [r, "/".concat(path), !0]);
                                                    case 5:
                                                        if (!(c = o.i18n.__redirect)) {
                                                            t.next = 9;
                                                            break
                                                        }
                                                        return o.i18n.__redirect = null, t.abrupt("return", [302, c]);
                                                    case 9:
                                                        return o.i18n.__baseUrl = Xe(be.h, e), l = be.l && j(n) || fn(n) || o.i18n.locale || o.i18n.defaultLocale || "", t.next = 13, o.i18n.setLocale(l);
                                                    case 13:
                                                        return t.abrupt("return", [null, null]);
                                                    case 14:
                                                    case "end":
                                                        return t.stop()
                                                }
                                            }), t)
                                        })));
                                        return function(e) {
                                            return t.apply(this, arguments)
                                        }
                                    }(), j = function(t) {
                                        if (un && be.t !== be.g.NO_PREFIX && "/" !== t.path) return !1;
                                        var e;
                                        m && (e = o.i18n.getLocaleCookie()) || ("undefined" != typeof navigator && navigator.languages ? e = ze(be.o, navigator.languages) : d && void 0 !== d.headers["accept-language"] && (e = ze(be.o, d.headers["accept-language"].split(",").map((function(t) {
                                            return t.split(";")[0]
                                        })))));
                                        var n = e || ln;
                                        return !(!n || m && !cn && o.i18n.getLocaleCookie() || n === o.i18n.locale) && n
                                    }, C = function(t) {
                                        t.locales = be.p, t.defaultLocale = be.j, t.differentDomains = be.m, t.beforeLanguageSwitch = be.i, t.onLanguageSwitched = be.q, t.setLocaleCookie = function(t) {
                                            return Qe(t, 0, {
                                                useCookie: m,
                                                cookieDomain: y,
                                                cookieKey: v,
                                                cookieSecure: _,
                                                cookieCrossOrigin: w
                                            })
                                        }, t.getLocaleCookie = function() {
                                            return Je(0, {
                                                useCookie: m,
                                                cookieKey: v,
                                                localeCodes: be.o
                                            })
                                        }, t.setLocale = function(t) {
                                            return x(t)
                                        }, t.__baseUrl = o.i18n.__baseUrl
                                    }, (R = "function" == typeof be.v ? Object(be.v)(e) : Pe()(be.v)).componentInstanceCreatedListener = C, o.i18n = new Se.a(R), o.i18n.locale = "", o.i18n.fallbackLocale = R.fallbackLocale || "", C(o.i18n), o.i18n.__baseUrl = Xe(be.h, e), o.i18n.__onNavigate = O, c.default.prototype.$nuxtI18nSeo = Te, f && (f.$i18n = o.i18n, f.state.localeDomains && o.i18n.locales.forEach((function(t) {
                                        t.domain = f.state.localeDomains[t.code]
                                    }))), ($ = be.l && j(l)) || (be.w && be.w.syncLocale && f && "" !== f.state[be.w.moduleName].locale ? $ = f.state[be.w.moduleName].locale : o.i18n.differentDomains ? (P = {
                                        localDomainKey: be.c,
                                        localeCodeKey: be.b
                                    }, S = Ve(be.p, 0, P), $ = S) : be.t !== be.g.NO_PREFIX ? (E = fn(l), $ = E) : m && ($ = o.i18n.getLocaleCookie())), $ || ($ = o.i18n.defaultLocale || ""), t.next = 24, x($, {
                                        initialSetup: !0
                                    });
                                case 24:
                                    t.next = 32;
                                    break;
                                case 27:
                                    L = t.sent, N = Object(U.a)(L, 2), N[0], (A = N[1]) && location.assign(A);
                                case 32:
                                case "end":
                                    return t.stop()
                            }
                        }), t)
                    })));
                    return function(e) {
                        return t.apply(this, arguments)
                    }
                }();
            var dn = function(t) {
                    var e = t.$axios;
                    e
                },
                hn = n(83),
                mn = function(t, e) {
                    var n = t.app,
                        r = t.$axios,
                        o = t.redirect,
                        c = t.req;
                    r.onRequest((function(t) {
                        var e = c ? Object(hn.a)(c, "token") : V.a.get("token");
                        e && (t.headers.common.Authorization = "Bearer ".concat(e)), n.i18n.locale && (t.headers.common.Lang = n.i18n.locale)
                    })), r.onResponse((function(t) {})), r.onError((function(t) {
                        var e = t.response && t.response.status,
                            r = t.response.data && t.response.data.message;
                        if (404 === e ? o(n.localeRoute({
                                name: "error"
                            })) : 401 === e && z.AuthStore.connected && (z.AuthStore.setConnected(!1), V.a.remove("token"), o(n.localeRoute({
                                name: "index"
                            }))), e >= 500) n.$eventBus.$emit("alert", {
                            message: n.i188n.t("alert-server-error"),
                            type: "error"
                        }), o(n.localeRoute({
                            name: "error"
                        }));
                        else if (400 === e && r) {
                            var text = r,
                                c = [];
                            r.includes("|") && (text = r.split("|")[0], c = r.split("|").slice(1)), n.$eventBus.$emit("alert", {
                                message: n.i18n.t("alert-warning.".concat(text), c),
                                type: "warning"
                            })
                        }
                    }))
                };
            c.default.filter("formatNumber", (function(t) {
                return String(t).replace(/(.)(?=(\d{3})+$)/g, "$1 ")
            })), c.default.filter("formatDateComplet", (function(t) {
                var e = new Date(1e3 * t),
                    n = (e.getDate() < 10 ? "0" : "") + e.getDate(),
                    r = (e.getMonth() < 9 ? "0" : "") + (e.getMonth() + 1),
                    o = e.getFullYear(),
                    c = ((e.getHours() % 12 || 12) < 10 ? "0" : "") + (e.getHours() % 12 || 12),
                    l = (e.getMinutes() < 10 ? "0" : "") + e.getMinutes();
                return "".concat(n, "/").concat(r, "/").concat(o, " à ").concat(c, ":").concat(l)
            })), c.default.filter("formatDate", (function(t) {
                var e = new Date(1e3 * t);
                return "".concat(e.getDate(), " ").concat(["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"][e.getMonth()], " ").concat(e.getFullYear())
            })), c.default.filter("timeAgo", (function(t) {
                var e = Date.now() / 1e3 - t,
                    n = e / 31536e3;
                return n > 1 ? Math.floor(n) + " año" + (Math.floor(n) > 1 ? "s" : "") : (n = e / 2592e3) > 1 ? Math.floor(n) + " mes" : (n = e / 86400) > 1 ? Math.floor(n) + " semana" + (Math.floor(n) > 1 ? "s" : "") : (n = e / 3600) > 1 ? Math.floor(n) + " hora" + (Math.floor(n) > 1 ? "s" : "") : (n = e / 60) > 1 ? Math.floor(n) + " minuto" + (Math.floor(n) > 1 ? "s" : "") : Math.floor(e) + " segundo" + (Math.floor(e) > 1 ? "s" : "")
            })), c.default.filter("decodeUTF8", (function(t) {
                var e = t;
                try {
                    e = decodeURIComponent(escape(t))
                } catch (t) {}
                return e
            })), c.default.filter("round", (function(t) {
                return Math.floor(t)
            })), c.default.filter("bbcode", (function(text) {
                return text = text.replace(new RegExp("\\<", "igm"), "&lt;"), vn.reduce((function(text, code) {
                    return text.replace(code.regexp, code.replacement)
                }), text)
            }));
            var vn = [{
                    regexp: new RegExp("\\r", "igm"),
                    replacement: ""
                }, {
                    regexp: new RegExp("\\n", "igm"),
                    replacement: "<br>"
                }, {
                    regexp: new RegExp("\\[br\\]", "igm"),
                    replacement: "<br>"
                }, {
                    regexp: new RegExp("\\[quote\\](.+?)\\[/quote\\]", "igm"),
                    replacement: '<div class="bbcode-quote">$1</div>'
                }, {
                    regexp: new RegExp("\\[b\\](.+?)\\[/b\\]", "igm"),
                    replacement: "<strong>$1</strong>"
                }, {
                    regexp: new RegExp("\\[center\\](.*?)\\[/center\\]", "igm"),
                    replacement: "<center>$1</center>"
                }, {
                    regexp: new RegExp("\\[i\\](.*?)\\[/i\\]", "igm"),
                    replacement: "<em>$1</em>"
                }, {
                    regexp: new RegExp("\\[u\\](.*?)\\[/u\\]", "igm"),
                    replacement: "<u>$1</u>"
                }, {
                    regexp: new RegExp("\\[s\\](.*?)\\[/s\\]", "igm"),
                    replacement: "<s>$1</s>"
                }, {
                    regexp: new RegExp("\\[url\\=http(.*?)](.*?)\\[/url\\]", "igm"),
                    replacement: '<a href="http$1" target="_bank">$2</a>'
                }, {
                    regexp: new RegExp("\\[url\\](.*?)\\[/url\\]", "igm"),
                    replacement: '<a href="$1" target="_bank">$1</a>'
                }, {
                    regexp: new RegExp("\\[color\\=(.*?)](.*?)\\[/color\\]", "igm"),
                    replacement: '<font color="$1">$2</font>'
                }, {
                    regexp: new RegExp("\\[size=small\\](.*?)\\[/size\\]", "igm"),
                    replacement: '<font size="1">$1</font>'
                }, {
                    regexp: new RegExp("\\[size=large\\](.*?)\\[/size\\]", "igm"),
                    replacement: '<font size="3">$1</font>'
                }, {
                    regexp: new RegExp("\\[code\\](.*?)\\[/code\\]", "igm"),
                    replacement: "<pre>$1</pre>"
                }, {
                    regexp: new RegExp("\\[img\\](http\\:|https\\:)(.*?)\\[/img\\]", "igm"),
                    replacement: '<img src="$2" style="max-width: 100%;">'
                }, {
                    regexp: new RegExp("\\[youtube\\](.+)?watch?(.+)?v=(.+)(&.+)?\\[/youtube\\]", "igm"),
                    replacement: '<iframe width="100%" height="400" src="//www.youtube.com/embed/$3" frameborder="0" allowfullscreen></iframe>'
                }, {
                    regexp: new RegExp("\\<br\\>", "igm"),
                    replacement: "\n"
                }],
                bn = function(t, e) {
                    e("eventBus", new c.default)
                },
                gn = n(159);
            c.default.use(gn.a);
            var yn = {
                bind: function(t, e, n) {
                    var r = t,
                        o = t.querySelector("[movebox]");
                    null == o && (o = r), o.onmousedown = function(t) {
                        var e, n, c = t.clientX - o.offsetLeft,
                            l = t.clientY - o.offsetTop,
                            f = r.offsetWidth,
                            d = r.offsetHeight,
                            h = document.body.clientWidth,
                            m = Math.max(window.innerHeight, document.body.clientHeight),
                            v = r.offsetLeft,
                            y = h - r.offsetLeft - f,
                            _ = r.offsetTop,
                            w = m - r.offsetTop - d,
                            x = getComputedStyle(r).left,
                            k = getComputedStyle(r).top;
                        x && k && (x.includes("%") ? (e = +document.body.clientWidth * (+x.replace(/%/g, "") / 100), n = +document.body.clientHeight * (+k.replace(/%/g, "") / 100)) : (e = +x.replace(/px/g, ""), n = +k.replace(/px/g, "")), document.onmousemove = function(t) {
                            var o = t.clientX - c,
                                f = t.clientY - l; - o > v ? o = -v : o > y && (o = y), -f > _ ? f = -_ : f > w && (f = w), r.style.cssText += ";left:".concat(o + e, "px;top:").concat(f + n, "px;")
                        }, document.onmouseup = function() {
                            document.onmousemove = null, document.onmouseup = null
                        })
                    }
                }
            };
            c.default.directive("draggable", yn);
            var _n = function(t, e) {
                t.store.dispatch("nuxtClientInit", t)
            };

            function wn(object, t) {
                var e = Object.keys(object);
                if (Object.getOwnPropertySymbols) {
                    var n = Object.getOwnPropertySymbols(object);
                    t && (n = n.filter((function(t) {
                        return Object.getOwnPropertyDescriptor(object, t).enumerable
                    }))), e.push.apply(e, n)
                }
                return e
            }

            function xn(t) {
                for (var i = 1; i < arguments.length; i++) {
                    var source = null != arguments[i] ? arguments[i] : {};
                    i % 2 ? wn(Object(source), !0).forEach((function(e) {
                        Object(o.a)(t, e, source[e])
                    })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(source)) : wn(Object(source)).forEach((function(e) {
                        Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(source, e))
                    }))
                }
                return t
            }
            c.default.component(h.a.name, h.a), c.default.component(v.a.name, xn(xn({}, v.a), {}, {
                render: function(t, e) {
                    return v.a._warned || (v.a._warned = !0, console.warn("<no-ssr> has been deprecated and will be removed in Nuxt 3, please use <client-only> instead")), v.a.render(t, e)
                }
            })), c.default.component(j.name, j), c.default.component("NChild", j), c.default.component(B.name, B), Object.defineProperty(c.default.prototype, "$nuxt", {
                get: function() {
                    return this.$root.$options.$nuxt
                },
                configurable: !0
            }), c.default.use(f.a, {
                keyName: "head",
                attribute: "data-n-head",
                ssrAttribute: "data-n-head-ssr",
                tagIDKeyName: "hid"
            });
            var kn = {
                    name: "page",
                    mode: "out-in",
                    appear: !1,
                    appearClass: "appear",
                    appearActiveClass: "appear-active",
                    appearToClass: "appear-to"
                },
                On = l.a.Store.prototype.registerModule,
                jn = {
                    preserveState: !0
                };

            function Cn(path, t) {
                var e = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                return On.call(this, path, t, xn(xn({}, jn), e))
            }

            function Rn(t) {
                return $n.apply(this, arguments)
            }

            function $n() {
                return ($n = Object(r.a)(regeneratorRuntime.mark((function t(e) {
                    var n, r, o, l, f, d, path, h, m = arguments;
                    return regeneratorRuntime.wrap((function(t) {
                        for (;;) switch (t.prev = t.next) {
                            case 0:
                                return h = function(t, e) {
                                    if (!t) throw new Error("inject(key, value) has no key provided");
                                    if (void 0 === e) throw new Error("inject('".concat(t, "', value) has no value provided"));
                                    l[t = "$" + t] = e, l.context[t] || (l.context[t] = e), o[t] = l[t];
                                    var n = "_data_" + t + "_installed__";
                                    c.default[n] || (c.default[n] = !0, c.default.use((function() {
                                        Object.prototype.hasOwnProperty.call(c.default.prototype, t) || Object.defineProperty(c.default.prototype, t, {
                                            get: function() {
                                                return this.$root.$options[t]
                                            }
                                        })
                                    })))
                                }, n = m.length > 1 && void 0 !== m[1] ? m[1] : {}, t.next = 4, O();
                            case 4:
                                return r = t.sent, (o = Mt(e)).$router = r, o.registerModule = Cn, l = xn({
                                    head: {
                                        title: "",
                                        titleTemplate: "%s - Akiled",
                                        meta: [{
                                            charset: "utf-8"
                                        }, {
                                            name: "viewport",
                                            content: "width=device-width, initial-scale=1"
                                        }, {
                                            name: "google-site-verification",
                                            content: "Pdq0f6g-ulEWrQ42iqwS_UtK6IhDcNRTP9aP5_Xx7Is"
                                        }, {
                                            hid: "description",
                                            name: "description",
                                            content: "Akiled Hotel"
                                        }, {
                                            name: "keywords",
                                            content: "Akiled, Akiled, Akiled hotel, Akiled, Akiled, Akiled hotel, Akiled.fr, localhost, localhost, Akiled retro, Akiled retro gratis, virtual, mundo, red social, Akiled gratis, crédito Akiled, Akiled francia, crédito, créditos, gratis, comunidad, avatar, chat, conectado, adolescencia, juego de roles, unirse, social, grupos, foros, seguro, jugar, juegos, amigos, raro , adolescentes, gente joven, coleccionista, coleccionar, crear, conectar, muebles, muebles, animales, decoración, diseño, apartamento, decorar, compartir, insignias, música, chat vip, diversión, salir, mmo, mmorpg, juego multijugador masivo, habbo, habbo.es, hbo, hbbo "
                                        }, {
                                            hid: "og:type",
                                            name: "og:type",
                                            content: "website"
                                        }, {
                                            hid: "og:url",
                                            name: "og:url",
                                            content: "localhost"
                                        }, {
                                            hid: "og:title",
                                            name: "og:title",
                                            content: "Akiled"
                                        }, {
                                            hid: "og:description",
                                            name: "og:description",
                                            content: "Akiled Hotel"
                                        }, {
                                            hid: "og:site_name",
                                            name: "og:site_name",
                                            content: "Akiled"
                                        }, {
                                            hid: "og:image",
                                            name: "og:image",
                                            content: "localhost/app_Akiled_hotel_image.png"
                                        }, {
                                            name: "msapplication-TileColor",
                                            content: "#d67d00"
                                        }, {
                                            name: "theme-color",
                                            content: "#3093ad"
                                        }],
                                        link: [{
                                            rel: "icon",
                                            type: "image/x-icon",
                                            href: "/favicon.ico"
                                        }],
                                        style: [],
                    
                                    },
                                    store: o,
                                    router: r,
                                    nuxt: {
                                        defaultTransition: kn,
                                        transitions: [kn],
                                        setTransitions: function(t) {
                                            return Array.isArray(t) || (t = [t]), t = t.map((function(t) {
                                                return t = t ? "string" == typeof t ? Object.assign({}, kn, {
                                                    name: t
                                                }) : Object.assign({}, kn, t) : kn
                                            })), this.$options.nuxt.transitions = t, t
                                        },
                                        err: null,
                                        dateErr: null,
                                        error: function(t) {
                                            t = t || null, l.context._errored = Boolean(t), t = t ? Object(_.p)(t) : null;
                                            var n = l.nuxt;
                                            return this && (n = this.nuxt || this.$options.nuxt), n.dateErr = Date.now(), n.err = t, e && (e.nuxt.error = t), t
                                        }
                                    }
                                }, Nt), o.app = l, f = e ? e.next : function(t) {
                                    return l.router.push(t)
                                }, e ? d = r.resolve(e.url).route : (path = Object(_.f)(r.options.base, r.options.mode), d = r.resolve(path).route), t.next = 14, Object(_.t)(l, {
                                    store: o,
                                    route: d,
                                    next: f,
                                    error: l.nuxt.error.bind(l),
                                    payload: e ? e.payload : void 0,
                                    req: e ? e.req : void 0,
                                    res: e ? e.res : void 0,
                                    beforeRenderFns: e ? e.beforeRenderFns : void 0,
                                    ssrContext: e
                                });
                            case 14:
                                return h("config", n), window._data__ && window._data__.state && o.replaceState(window._data__.state), t.next = 20, Wt(l.context, h);
                            case 20:
                                if ("function" != typeof Ht.a) {
                                    t.next = 23;
                                    break
                                }
                                return t.next = 23, Ht()(l.context, h);
                            case 23:
                                return t.next = 26, Jt(l.context);
                            case 26:
                                return t.next = 29, Qt(l.context, h);
                            case 29:
                                return t.next = 32, ne(l.context, h);
                            case 32:
                                return t.next = 35, me(l.context, h);
                            case 35:
                                return t.next = 38, Re(l.context);
                            case 38:
                                if ("function" != typeof pn) {
                                    t.next = 41;
                                    break
                                }
                                return t.next = 41, pn(l.context, h);
                            case 41:
                                if ("function" != typeof dn) {
                                    t.next = 44;
                                    break
                                }
                                return t.next = 44, dn(l.context, h);
                            case 44:
                                if ("function" != typeof mn) {
                                    t.next = 47;
                                    break
                                }
                                return t.next = 47, mn(l.context, h);
                            case 47:
                                t.next = 50;
                                break;
                            case 50:
                                if ("function" != typeof bn) {
                                    t.next = 53;
                                    break
                                }
                                return t.next = 53, bn(l.context, h);
                            case 53:
                                t.next = 56;
                                break;
                            case 56:
                                t.next = 59;
                                break;
                            case 59:
                                if ("function" != typeof _n) {
                                    t.next = 62;
                                    break
                                }
                                return t.next = 62, _n(l.context, h);
                            case 62:
                                0, t.next = 66;
                                break;
                            case 66:
                                return t.abrupt("return", {
                                    store: o,
                                    app: l,
                                    router: r
                                });
                            case 67:
                            case "end":
                                return t.stop()
                        }
                    }), t)
                })))).apply(this, arguments)
            }
        },
        68: function(t, e, n) {
            "use strict";
            var r = {};
            r.Authenticated = n(189), r.Authenticated = r.Authenticated.default || r.Authenticated, r.NotAuthenticated = n(193), r.NotAuthenticated = r.NotAuthenticated.default || r.NotAuthenticated, e.a = r
        },
        83: function(t, e, n) {
            "use strict";
            n.d(e, "a", (function() {
                return r
            }));
            n(75), n(45), n(57);

            function r(t, e) {
                if (t && t.headers && t.headers.cookie) {
                    var n = t.headers.cookie.split(";").find((function(t) {
                        return t.trim().startsWith("".concat(e, "="))
                    }));
                    return n ? n.split("=")[1] : ""
                }
            }
        },
        85: function(t, e, n) {
            "use strict";
            n(33), n(41), n(34), n(40), n(42), n(27), n(10), n(11), n(8), n(36), n(43);
            var r = n(2);

            function o(t, e) {
                var n;
                if ("undefined" == typeof Symbol || null == t[Symbol.iterator]) {
                    if (Array.isArray(t) || (n = function(t, e) {
                            if (!t) return;
                            if ("string" == typeof t) return c(t, e);
                            var n = Object.prototype.toString.call(t).slice(8, -1);
                            "Object" === n && t.constructor && (n = t.constructor.name);
                            if ("Map" === n || "Set" === n) return Array.from(t);
                            if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return c(t, e)
                        }(t)) || e && t && "number" == typeof t.length) {
                        n && (t = n);
                        var i = 0,
                            r = function() {};
                        return {
                            s: r,
                            n: function() {
                                return i >= t.length ? {
                                    done: !0
                                } : {
                                    done: !1,
                                    value: t[i++]
                                }
                            },
                            e: function(t) {
                                throw t
                            },
                            f: r
                        }
                    }
                    throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                }
                var o, l = !0,
                    f = !1;
                return {
                    s: function() {
                        n = t[Symbol.iterator]()
                    },
                    n: function() {
                        var t = n.next();
                        return l = t.done, t
                    },
                    e: function(t) {
                        f = !0, o = t
                    },
                    f: function() {
                        try {
                            l || null == n.return || n.return()
                        } finally {
                            if (f) throw o
                        }
                    }
                }
            }

            function c(t, e) {
                (null == e || e > t.length) && (e = t.length);
                for (var i = 0, n = new Array(e); i < e; i++) n[i] = t[i];
                return n
            }
            var l = window.requestIdleCallback || function(t) {
                    var e = Date.now();
                    return setTimeout((function() {
                        t({
                            didTimeout: !1,
                            timeRemaining: function() {
                                return Math.max(0, 50 - (Date.now() - e))
                            }
                        })
                    }), 1)
                },
                f = window.cancelIdleCallback || function(t) {
                    clearTimeout(t)
                },
                d = window.IntersectionObserver && new window.IntersectionObserver((function(t) {
                    t.forEach((function(t) {
                        var e = t.intersectionRatio,
                            link = t.target;
                        e <= 0 || link.__prefetch()
                    }))
                }));
            e.a = {
                name: "NuxtLink",
                extends: r.default.component("RouterLink"),
                props: {
                    prefetch: {
                        type: Boolean,
                        default: !0
                    },
                    noPrefetch: {
                        type: Boolean,
                        default: !1
                    }
                },
                mounted: function() {
                    this.prefetch && !this.noPrefetch && (this.handleId = l(this.observe, {
                        timeout: 2e3
                    }))
                },
                beforeDestroy: function() {
                    f(this.handleId), this.__observed && (d.unobserve(this.$el), delete this.$el.__prefetch)
                },
                methods: {
                    observe: function() {
                        d && this.shouldPrefetch() && (this.$el.__prefetch = this.prefetchLink.bind(this), d.observe(this.$el), this.__observed = !0)
                    },
                    shouldPrefetch: function() {
                        return this.getPrefetchComponents().length > 0
                    },
                    canPrefetch: function() {
                        var t = navigator.connection;
                        return !(this.$nuxt.isOffline || t && ((t.effectiveType || "").includes("2g") || t.saveData))
                    },
                    getPrefetchComponents: function() {
                        return this.$router.resolve(this.to, this.$route, this.append).resolved.matched.map((function(t) {
                            return t.components.default
                        })).filter((function(t) {
                            return "function" == typeof t && !t.options && !t.__prefetched
                        }))
                    },
                    prefetchLink: function() {
                        if (this.canPrefetch()) {
                            d.unobserve(this.$el);
                            var t, e = o(this.getPrefetchComponents());
                            try {
                                for (e.s(); !(t = e.n()).done;) {
                                    var n = t.value,
                                        r = n();
                                    r instanceof Promise && r.catch((function() {})), n.__prefetched = !0
                                }
                            } catch (t) {
                                e.e(t)
                            } finally {
                                e.f()
                            }
                        }
                    }
                }
            }
        }
    },
    [
        [172, 49, 7, 50]
    ]
]);