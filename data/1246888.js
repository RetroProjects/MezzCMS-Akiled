(window.webpackJsonp = window.webpackJsonp || []).push([
    [26],
    {
      363: function (t, e, o) {
        "use strict";
        o.r(e);
        o(10), o(11), o(8), o(35), o(20);
        var n = o(3),
          r = o(9),
          c = o(17),
          l = o(12),
          m = o(13),
          d = o(4),
          v = o(5),
          f = o(6);
        function _(t) {
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
            var o,
              n = Object(d.a)(t);
            if (e) {
              var r = Object(d.a)(this).constructor;
              o = Reflect.construct(n, arguments, r);
            } else o = n.apply(this, arguments);
            return Object(m.a)(this, o);
          };
        }
        var h = function (t, e, o, desc) {
            var n,
              r = arguments.length,
              c =
                r < 3
                  ? e
                  : null === desc
                  ? (desc = Object.getOwnPropertyDescriptor(e, o))
                  : desc;
            if (
              "object" ===
                ("undefined" == typeof Reflect
                  ? "undefined"
                  : Object(v.a)(Reflect)) &&
              "function" == typeof Reflect.decorate
            )
              c = Reflect.decorate(t, e, o, desc);
            else
              for (var i = t.length - 1; i >= 0; i--)
                (n = t[i]) &&
                  (c = (r < 3 ? n(c) : r > 3 ? n(e, o, c) : n(e, o)) || c);
            return r > 3 && c && Object.defineProperty(e, o, c), c;
          },
          x = (function (t) {
            Object(l.a)(m, t);
            var e,
              o = _(m);
            function m() {
              var t;
              return (
                Object(r.a)(this, m),
                ((t = o.apply(this, arguments)).loading = !1),
                (t.contactForm = {
                  email: "",
                  sujet: "",
                  message: "",
                  recaptchaToken: "",
                }),
                t
              );
            }
            return (
              Object(c.a)(m, [
                {
                  key: "contactPost",
                  value:
                    ((e = Object(n.a)(
                      regeneratorRuntime.mark(function t() {
                        return regeneratorRuntime.wrap(
                          function (t) {
                            for (;;)
                              switch ((t.prev = t.next)) {
                                case 0:
                                  if (!this.loading) {
                                    t.next = 2;
                                    break;
                                  }
                                  return t.abrupt("return");
                                case 2:
                                  return (
                                    (t.prev = 2),
                                    (this.loading = !0),
                                    (t.next = 6),
                                    this.$recaptcha.getResponse()
                                  );
                                case 6:
                                  return (
                                    (this.contactForm.recaptchaToken = t.sent),
                                    (t.next = 9),
                                    this.$recaptcha.reset()
                                  );
                                case 9:
                                  return (
                                    (t.next = 11),
                                    this.$axios.$post(
                                      "/api/v1/contact",
                                      this.contactForm
                                    )
                                  );
                                case 11:
                                  this.$eventBus.$emit("alert", {
                                    message: "Votre demande a bien été envoyé",
                                    type: "success",
                                  }),
                                    (this.contactForm = {
                                      email: "",
                                      sujet: "",
                                      message: "",
                                      recaptchaToken: "",
                                    }),
                                    (t.next = 17);
                                  break;
                                case 15:
                                  (t.prev = 15), (t.t0 = t.catch(2));
                                case 17:
                                  this.loading = !1;
                                case 19:
                                case "end":
                                  return t.stop();
                              }
                          },
                          t,
                          this,
                          [[2, 15]]
                        );
                      })
                    )),
                    function () {
                      return e.apply(this, arguments);
                    }),
                },
              ]),
              m
            );
          })(f.Vue),
          y = (x = h(
            [
              Object(f.Component)({
                head: function () {
                  return {
                    title: "Contact",
                    meta: [
                      { hid: "og:title", name: "og:title", content: "Contact" },
                      {
                        hid: "description",
                        name: "description",
                        content: "Contacter le support de Akiled",
                      },
                      {
                        hid: "og:description",
                        name: "og:description",
                        content: "Contacter le support de Akiled",
                      },
                    ],
                  };
                },
              }),
            ],
            x
          )),
          j = o(18),
          component = Object(j.a)(
            y,
            function () {
              var t = this,
                e = t.$createElement,
                o = t._self._c || e;
              return o("div", { staticClass: "row justify-content-md-center" }, [
                o("div", { staticClass: "col-md-10" }, [
                  o("div", { staticClass: "box" }, [
                    o("h4", { staticClass: "box__title" }, [
                      t._v("Formulaire de contact"),
                    ]),
                    t._v(" "),
                    o("div", { staticClass: "box__body" }, [
                      o(
                        "form",
                        {
                          on: {
                            submit: function (e) {
                              return e.preventDefault(), t.contactPost(e);
                            },
                          },
                        },
                        [
                          o("div", { staticClass: "form-group" }, [
                            o("label", { attrs: { for: "contactInputemail" } }, [
                              t._v("Ton e-mail"),
                            ]),
                            t._v(" "),
                            o("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: t.contactForm.email,
                                  expression: "contactForm.email",
                                },
                              ],
                              staticClass: "form-control",
                              attrs: {
                                type: "text",
                                name: "email",
                                id: "contactInputemail",
                                "aria-describedby": "emailHelp",
                                placeholder: "Adresse e-mail",
                              },
                              domProps: { value: t.contactForm.email },
                              on: {
                                input: function (e) {
                                  e.target.composing ||
                                    t.$set(
                                      t.contactForm,
                                      "email",
                                      e.target.value
                                    );
                                },
                              },
                            }),
                            t._v(" "),
                            o(
                              "small",
                              {
                                staticClass: "form-text",
                                attrs: { id: "emailHelp" },
                              },
                              [
                                t._v(
                                  "Indique l'email où tu pourras recevoir une réponse de notre part"
                                ),
                              ]
                            ),
                          ]),
                          t._v(" "),
                          o("div", { staticClass: "form-group" }, [
                            o("label", { attrs: { for: "contactInputsujet" } }, [
                              t._v("Ton sujet"),
                            ]),
                            t._v(" "),
                            o(
                              "select",
                              {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: t.contactForm.sujet,
                                    expression: "contactForm.sujet",
                                  },
                                ],
                                staticClass: "form-control",
                                attrs: {
                                  id: "contactInputsujet",
                                  name: "sujet",
                                  "aria-describedby": "sujetHelp",
                                },
                                on: {
                                  change: function (e) {
                                    var o = Array.prototype.filter
                                      .call(e.target.options, function (t) {
                                        return t.selected;
                                      })
                                      .map(function (t) {
                                        return "_value" in t ? t._value : t.value;
                                      });
                                    t.$set(
                                      t.contactForm,
                                      "sujet",
                                      e.target.multiple ? o : o[0]
                                    );
                                  },
                                },
                              },
                              [
                                o("option", [
                                  t._v("Je souhaite commander / upload un badge"),
                                ]),
                                t._v(" "),
                                o("option", [
                                  t._v(
                                    "J'ai un problème avec l'achat des Jetons/AkiledPoints"
                                  ),
                                ]),
                                t._v(" "),
                                o("option", [
                                  t._v(
                                    "Mot de passe de mon compte oublié/Je ne peux pas accèder à mon compte"
                                  ),
                                ]),
                                t._v(" "),
                                o("option", [
                                  t._v("Mon compte est exclu/sous silence"),
                                ]),
                                t._v(" "),
                                o("option", [
                                  t._v(
                                    "Je voudrais partager/faire entendre mon opinion à propos de Habbo"
                                  ),
                                ]),
                                t._v(" "),
                                o("option", [
                                  t._v(
                                    "Une proposition de partenariat/marketing/publicité"
                                  ),
                                ]),
                                t._v(" "),
                                o("option", [
                                  t._v(
                                    "Je n'ai pas reçu mon badge/prix/lot/trophée"
                                  ),
                                ]),
                                t._v(" "),
                                o("option", [
                                  t._v("Problème technique sur Akiled"),
                                ]),
                                t._v(" "),
                                o("option", [
                                  t._v("Problème sur le site de Akiled"),
                                ]),
                                t._v(" "),
                                o("option", [
                                  t._v("Signaler un dysfonctionnement"),
                                ]),
                                t._v(" "),
                                o("option", [t._v("Rapporter un joueur")]),
                                t._v(" "),
                                o("option", [t._v("Autre")]),
                              ]
                            ),
                            t._v(" "),
                            o(
                              "small",
                              {
                                staticClass: "form-text",
                                attrs: { id: "sujetHelp" },
                              },
                              [
                                t._v(
                                  "Merci de sélectionner une des propositions suivantes. Choisissez celle qui se rapproche le plus de votre souci, afin d’obtenir une réponse rapide."
                                ),
                              ]
                            ),
                          ]),
                          t._v(" "),
                          o("div", { staticClass: "form-group" }, [
                            o(
                              "label",
                              { attrs: { for: "contactInputmessage" } },
                              [t._v("Ton message")]
                            ),
                            t._v(" "),
                            o("textarea", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: t.contactForm.message,
                                  expression: "contactForm.message",
                                },
                              ],
                              staticClass: "form-control",
                              attrs: {
                                name: "message",
                                id: "contactInputmessage",
                                "aria-describedby": "messageHelp",
                                placeholder: "Dis-nous tout ici",
                                rows: "5",
                                maxlength: "1000",
                              },
                              domProps: { value: t.contactForm.message },
                              on: {
                                input: function (e) {
                                  e.target.composing ||
                                    t.$set(
                                      t.contactForm,
                                      "message",
                                      e.target.value
                                    );
                                },
                              },
                            }),
                            t._v(" "),
                            o(
                              "small",
                              {
                                staticClass: "form-text",
                                attrs: { id: "messageHelp" },
                              },
                              [
                                t._v(
                                  "Merci de donner un maximum de détails sur la situation, ceci afin d’éviter trop d’échanges d’emails avec notre Service Client. "
                                ),
                              ]
                            ),
                          ]),
                          t._v(" "),
                          o(
                            "div",
                            {
                              staticClass: "form-group mt-2 mx-auto",
                              staticStyle: { width: "304px" },
                            },
                            [o("recaptcha")],
                            1
                          ),
                          t._v(" "),
                          o(
                            "button",
                            {
                              staticClass: "btn",
                              attrs: { type: "submit", disabled: t.loading },
                            },
                            [
                              t.loading
                                ? o("i", {
                                    staticClass: "fa fa-spinner fa-spin mr-2",
                                  })
                                : t._e(),
                              t._v("Envoyer ma demande"),
                            ]
                          ),
                        ]
                      ),
                    ]),
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
  