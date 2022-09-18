(window.webpackJsonp = window.webpackJsonp || []).push([[89], {
    564: function(e, t, n) {},
    618: function(e, t, n) {
        "use strict";
        n(564)
    },
    698: function(e, t, n) {
        "use strict";
        n.r(t);
        n(31),
        n(52),
        n(71),
        n(18);
        var r = n(2)
          , c = n(7)
          , o = n(10)
          , f = n(11)
          , l = n(12)
          , h = n(4)
          , d = n(3)
          , S = n(1)
          , O = n(5)
          , v = n(566)
          , k = n(565);
        function w(e) {
            var t = function() {
                if ("undefined" == typeof Reflect || !Reflect.construct)
                    return !1;
                if (Reflect.construct.sham)
                    return !1;
                if ("function" == typeof Proxy)
                    return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function() {}
                    ))),
                    !0
                } catch (e) {
                    return !1
                }
            }();
            return function() {
                var n, r = Object(h.a)(e);
                if (t) {
                    var c = Object(h.a)(this).constructor;
                    n = Reflect.construct(r, arguments, c)
                } else
                    n = r.apply(this, arguments);
                return Object(l.a)(this, n)
            }
        }
        var y = function(e, t, n, desc) {
            var r, c = arguments.length, o = c < 3 ? t : null === desc ? desc = Object.getOwnPropertyDescriptor(t, n) : desc;
            if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(d.a)(Reflect)) && "function" == typeof Reflect.decorate)
                o = Reflect.decorate(e, t, n, desc);
            else
                for (var i = e.length - 1; i >= 0; i--)
                    (r = e[i]) && (o = (c < 3 ? r(o) : c > 3 ? r(t, n, o) : r(t, n)) || o);
            return c > 3 && o && Object.defineProperty(t, n, o),
            o
        }
          , m = function(e) {
            Object(f.a)(O, e);
            var t, n, l, h, d, S = w(O);
            function O() {
                var e;
                return Object(c.a)(this, O),
                (e = S.apply(this, arguments)).SSOTicketweb = "",
                e.SSOTicket = "",
                e.settings = null,
                e.isReady = !1,
                e
            }
            return Object(o.a)(O, [{
                key: "mounted",
                value: (d = Object(r.a)(regeneratorRuntime.mark((function e() {
                    var t = this;
                    return regeneratorRuntime.wrap((function(e) {
                        for (; ; )
                            switch (e.prev = e.next) {
                            case 0:
                                e.prev = 0,
                                e.next = 3;
                                break;
                            case 3:
                                return e.next = 5,
                                this.$axios.$get("/NN9pDsDun16V3TZfb1GZ/NN9pDsDun16V3TZfb1GZ/NN9pDsDun16V3TZfb1GZ/wRPkxygJBcXMbulvqG7m");
                            case 5:
                                return this.settings = e.sent,
                                e.next = 8,
                                this.loadSSOTicket();
                            case 8:
                                return e.next = 10,
                                this.loadInterface();
                            case 10:
                                setTimeout((function() {
                                    return t.isReady = !0
                                }
                                ), 4500),
                                e.next = 15;
                                break;
                            case 13:
                                e.prev = 13,
                                e.t0 = e.catch(0);
                            case 15:
                            case "end":
                                return e.stop()
                            }
                    }
                    ), e, this, [[0, 13]])
                }
                ))),
                function() {
                    return d.apply(this, arguments)
                }
                )
            }, {
                key: "onDisconnectEvent",
                value: (h = Object(r.a)(regeneratorRuntime.mark((function e() {
                    return regeneratorRuntime.wrap((function(e) {
                        for (; ; )
                            switch (e.prev = e.next) {
                            case 0:
                                return e.next = 2,
                                this.loadSSOTicketWeb();
                            case 2:
                            case "end":
                                return e.stop()
                            }
                    }
                    ), e, this)
                }
                ))),
                function() {
                    return h.apply(this, arguments)
                }
                )
            }, {
                key: "loadSSOTicket",
                value: (l = Object(r.a)(regeneratorRuntime.mark((function e() {
                    return regeneratorRuntime.wrap((function(e) {
                        for (; ; )
                            switch (e.prev = e.next) {
                            case 0:
                                return e.next = 2,
                                this.$axios.$get("/NN9pDsDun16V3TZfb1GZ/NN9pDsDun16V3TZfb1GZ/NN9pDsDun16V3TZfb1GZ/2cOxfxkAyWtKxnWIeWH3");
                            case 2:
                                this.SSOTicket = e.sent.SSOTicket;
                            case 3:
                            case "end":
                                return e.stop()
                            }
                    }
                    ), e, this)
                }
                ))),
                function() {
                    return l.apply(this, arguments)
                }
                )
            }, {
                key: "loadSSOTicketWeb",
                value: (n = Object(r.a)(regeneratorRuntime.mark((function e() {
                    return regeneratorRuntime.wrap((function(e) {
                        for (; ; )
                            switch (e.prev = e.next) {
                            case 0:
                                return e.next = 2,
                                this.$axios.$get("/NN9pDsDun16V3TZfb1GZ/NN9pDsDun16V3TZfb1GZ/NN9pDsDun16V3TZfb1GZ/SIU5A8clQdoImYrFWyQn");
                            case 2:
                                this.SSOTicketweb = e.sent.SSOTicketweb;
                            case 3:
                            case "end":
                                return e.stop()
                            }
                    }
                    ), e, this)
                }
                ))),
                function() {
                    return n.apply(this, arguments)
                }
                )
            }, {
                key: "loadInterface",
                value: (t = Object(r.a)(regeneratorRuntime.mark((function e() {
                    var t = this;
                    return regeneratorRuntime.wrap((function(e) {
                        for (; ; )
                            switch (e.prev = e.next) {
                            case 0:
                                window.addEventListener("message", (function(e) {
                                    try {
                                        var data = e.data;
                                        if ("string" != typeof data)
                                            return;
                                        if (!data.startsWith("Nitro_LegacyExternalInterface"))
                                            return;
                                        var n = JSON.parse(data.split("Nitro_LegacyExternalInterface")[1]);
                                        if (!n)
                                            return;
                                        switch (n.method) {
                                        case "heartBeat":
                                            break;
                                        case "disconnect":
                                            setTimeout((function() {
                                                return t.loadSSOTicket()
                                            }
                                            ), 4500)
                                        }
                                    } catch (e) {
                                        console.log(e)
                                    }
                                }
                                ), !1);
                            case 1:
                            case "end":
                                return e.stop()
                            }
                    }
                    ), e)
                }
                ))),
                function() {
                    return t.apply(this, arguments)
                }
                )
            }]),
            O
        }(S.default)
          , R = m = y([Object(O.Component)({
            components: {
                ClientBtn: v.a,
                ClientUI: k.a
            }
        })], m)
          , x = (n(618),
        n(14))
          , component = Object(x.a)(R, (function() {
            var e = this
              , t = e.$createElement
              , n = e._self._c || t;
            return n("div", {
                staticClass: "client"
            }, ["" != e.SSOTicket ? n("iframe", {
                attrs: {
                    src: "http://swfs.localhost/nitro/index.html?sso=" + e.SSOTicket,
                    id: "flash-container",
                    width: "100%",
                    height: "100%",
                    frameborder: "0"
                }
            }) : e._e(), e._v(" "), e.isReady ? n("ClientUI", {
                attrs: {
                    SSOTicket: e.SSOTicketweb,
                    WSUrl: e.settings.WSUrl
                },
                on: {
                    "update:SSOTicket": function(t) {
                        e.SSOTicketweb = t
                    },
                    "update:s-s-o-ticket": function(t) {
                        e.SSOTicketweb = t
                    },
                    disconnect: e.onDisconnectEvent
                }
            }) : e._e(), e._v(" "), n("ClientBtn")], 1)
        }
        ), [], !1, null, null, null);
        t.default = component.exports
    }
}]);
