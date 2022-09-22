(window.webpackJsonp = window.webpackJsonp || []).push([
    [36],
    {
      277: function (t, e, n) {},
      332: function (t, e, n) {
        "use strict";
        n(277);
      },
      398: function (t, e, n) {
        "use strict";
        n.r(e);
        n(10), n(11), n(8), n(35);
        var r = n(9),
          o = n(12),
          c = n(13),
          d = n(4),
          l = n(5),
          _ = n(6);
        function f(t) {
          var e = (function () {
            if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
            if (Reflect.construct.sham) return !1;
            if ("function" == typeof Proxy) return !0;
            try {
              return (
                Date.prototype.toString.call(
                  Reflect.construct(Date, [], function () {})
                ),
                !0
              );
            } catch (t) {
              return !1;
            }
          })();
          return function () {
            var n,
              r = Object(d.a)(t);
            if (e) {
              var o = Object(d.a)(this).constructor;
              n = Reflect.construct(r, arguments, o);
            } else n = r.apply(this, arguments);
            return Object(c.a)(this, n);
          };
        }
        var v = function (t, e, n, desc) {
            var r,
              o = arguments.length,
              c =
                o < 3
                  ? e
                  : null === desc
                  ? (desc = Object.getOwnPropertyDescriptor(e, n))
                  : desc;
            if (
              "object" ===
                ("undefined" == typeof Reflect
                  ? "undefined"
                  : Object(l.a)(Reflect)) &&
              "function" == typeof Reflect.decorate
            )
              c = Reflect.decorate(t, e, n, desc);
            else
              for (var i = t.length - 1; i >= 0; i--)
                (r = t[i]) &&
                  (c = (o < 3 ? r(c) : o > 3 ? r(e, n, c) : r(e, n)) || c);
            return o > 3 && c && Object.defineProperty(e, n, c), c;
          },
          h = (function (t) {
            Object(o.a)(n, t);
            var e = f(n);
            function n() {
              return Object(r.a)(this, n), e.apply(this, arguments);
            }
            return n;
          })(_.Vue),
          m = (h = v(
            [
              Object(_.Component)({
                middleware: ["NotAuthenticated"],
                head: function () {
                  return {
                    title: this.$t("index.title"),
                    meta: [
                      {
                        hid: "description",
                        name: "description",
                        content: this.$t("index.description"),
                      },
                      {
                        hid: "og:title",
                        name: "og:title",
                        content: this.$t("index.title"),
                      },
                      {
                        hid: "og:description",
                        name: "og:description",
                        content: this.$t("index.description"),
                      },
                    ],
                  };
                },
              }),
            ],
            h
          )),
          y = (n(332), n(18)),
          component = Object(y.a)(
            m,
            function () {
              var t = this,
                e = t.$createElement,
                n = t._self._c || e;
              return n("div", { staticClass: "row mt-2" }, [
                n("div", { staticClass: "col-md-4" }, [
                  n("div", { staticClass: "card-intro card-intro--discovery" }, [
                    n(
                      "h2",
                      {
                        staticClass:
                          "card-intro__title card-intro__title--discovery",
                      },
                      [t._v(t._s(t.$t("index.intro-title-discovery")))]
                    ),
                    t._v(" "),
                    n(
                      "span",
                      {
                        staticClass:
                          "card-intro__about card-intro__about--discovery",
                      },
                      [
                        t._v(
                          "\n                " +
                            t._s(t.$t("index.intro-about-discovery")) +
                            "\n            "
                        ),
                      ]
                    ),
                  ]),
                ]),
                t._v(" "),
                n("div", { staticClass: "col-md-4" }, [
                  n("div", { staticClass: "card-intro card-intro--love" }, [
                    n(
                      "h2",
                      {
                        staticClass: "card-intro__title card-intro__title--love",
                      },
                      [t._v(t._s(t.$t("index.intro-title-love")))]
                    ),
                    t._v(" "),
                    n(
                      "span",
                      {
                        staticClass: "card-intro__about card-intro__about--love",
                      },
                      [
                        t._v(
                          "\n                " +
                            t._s(t.$t("index.intro-about-love")) +
                            "\n            "
                        ),
                      ]
                    ),
                  ]),
                ]),
                t._v(" "),
                n("div", { staticClass: "col-md-4" }, [
                  n("div", { staticClass: "card-intro card-intro--animation" }, [
                    n(
                      "h2",
                      {
                        staticClass:
                          "card-intro__title card-intro__title--animation",
                      },
                      [t._v(t._s(t.$t("index.intro-title-game")))]
                    ),
                    t._v(" "),
                    n(
                      "span",
                      {
                        staticClass:
                          "card-intro__about card-intro__about--animation",
                      },
                      [
                        t._v(
                          "\n                " +
                            t._s(t.$t("index.intro-about-game")) +
                            "\n            "
                        ),
                      ]
                    ),
                  ]),
                ]),
              ]);
            },
            [],
            !1,
            null,
            null,
            null
          );
        e.default = component.exports;
      },
    },
  ]);
  