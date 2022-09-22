(window.webpackJsonp = window.webpackJsonp || []).push([
    [25],
    {
      362: function (e, n, t) {
        "use strict";
        t.r(n);
        t(10), t(11), t(8), t(35);
        var o = t(9),
          r = t(12),
          c = t(13),
          l = t(4),
          d = t(5),
          v = t(6);
        function m(e) {
          var n = (function () {
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
            } catch (e) {
              return !1;
            }
          })();
          return function () {
            var t,
              o = Object(l.a)(e);
            if (n) {
              var r = Object(l.a)(this).constructor;
              t = Reflect.construct(o, arguments, r);
            } else t = o.apply(this, arguments);
            return Object(c.a)(this, t);
          };
        }
        var f = function (e, n, t, desc) {
            var o,
              r = arguments.length,
              c =
                r < 3
                  ? n
                  : null === desc
                  ? (desc = Object.getOwnPropertyDescriptor(n, t))
                  : desc;
            if (
              "object" ===
                ("undefined" == typeof Reflect
                  ? "undefined"
                  : Object(d.a)(Reflect)) &&
              "function" == typeof Reflect.decorate
            )
              c = Reflect.decorate(e, n, t, desc);
            else
              for (var i = e.length - 1; i >= 0; i--)
                (o = e[i]) &&
                  (c = (r < 3 ? o(c) : r > 3 ? o(n, t, c) : o(n, t)) || c);
            return r > 3 && c && Object.defineProperty(n, t, c), c;
          },
          _ = (function (e) {
            Object(r.a)(t, e);
            var n = m(t);
            function t() {
              return Object(o.a)(this, t), n.apply(this, arguments);
            }
            return t;
          })(v.Vue),
          h = (_ = f(
            [
              Object(v.Component)({
                head: function () {
                  return {
                    title: "Confidentialité",
                    meta: [
                      {
                        hid: "og:title",
                        name: "og:title",
                        content: "Confidentialité",
                      },
                      {
                        hid: "description",
                        name: "description",
                        content: "Les confidentialité de Akiled",
                      },
                      {
                        hid: "og:description",
                        name: "og:description",
                        content: "Les confidentialité de Akiled",
                      },
                    ],
                  };
                },
              }),
            ],
            _
          )),
          k = t(18),
          component = Object(k.a)(
            h,
            function () {
              var e = this.$createElement;
              this._self._c;
              return this._m(0);
            },
            [
              function () {
                var e = this,
                  n = e.$createElement,
                  t = e._self._c || n;
                return t("div", { staticClass: "box" }, [
                  t("h4", { staticClass: "box__title" }, [
                    e._v("POLITIQUE DE CONFIDENTIALITÉ"),
                  ]),
                  e._v(" "),
                  t("div", { staticClass: "box__body" }, [
                    e._v(
                      "\r\n\tLa confidentalité des données personnelles et la protection de la vie privée des clients sont des valeurs importantes et fondamentales dans toutes nos opérations. Nous observons la législation, les directives des autorités et la bonne pratique en matière de traitement de données en ce qui concerne les données de nos joueurs, employés et partenaires.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tAkiled maintient un niveau de protection des données à caractère personnel extrêmement élevé. Nous traitons vos données à caractère personnel uniquement à des fins appropriées définies à l'avance et uniquement lorsque cela est nécessaire.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("h2", [e._v("Confidentialité et protection des données.")]),
                    e._v(" "),
                    t("br"),
                    e._v(
                      "\r\n\tNous respectons votre vie privée et nous nous engageons à protéger la vie privée de ces personnes («utilisateur(s)» ou «vous») qui accèdent et utilisent nos jeux.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [
                      e._v("Vos droits concernant le traitement de vos données."),
                    ]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tVous avez le droit d'agir sur le traitement de vos propres données.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [
                      e._v(
                        "Droit d'accès et le droit de portabilité des données"
                      ),
                    ]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tVous pouvez vérifier vos propres données ou recevoir les données que vous avez vous-m^me fournies lors de l'utilisation de nos services sous forme lisible par une machine. Pour ce faire, accédez aux paramètres ou contacter le service client.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Droit de réctification")]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tSi vous constatez des données incorrectes ou expirées dans les données personnelles que nous traitons, nous vous demandons de corriger les données via notre Service Client. Nous avons besoin des informations personnelles correctes afin de fournir le meilleur service possible.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Droit à l'effacement")]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tVous avez le droit de demander la suppression des données qui ne sont plus nécessaires. Nous faisons de notre mieux pour supprimer ces données automatiquement, mais si, pour une raison ou une autre, vous détectez des informations inutiles dans notre système, vous pouvez contacter notre Service Client.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Droit à la limitation du traitement")]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tVous pouvez nous demander de restreindre ou de refuser le traitement de données dans certaines situations. Nous avons cherché à décrire toutes nos méthodes de traitement de données de manière ouverte et compréhensible dans cette politique de confidentialité\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [
                      e._v("Quelles sont les données que nous collectons?"),
                    ]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("h2", [
                      e._v("Pourquoi collectons-nous vos données personnelles?"),
                    ]),
                    e._v(" "),
                    t("br"),
                    e._v(
                      "\r\n\tAfin de fournir nos Services, nous avons besoin d'informations personnelles suffisantes. Nous avons besoin de vos coordonnées pour communiquer avec vous, comme par exemple pour vous permettre de réinitialiser votre mot de passe si vous l'oubliez.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tDe plus, nos Services requièrent différents types de données afin que nous puissions vous identifier individuellement et adapter le Service à vous.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tDans certains cas, par exemple lorsque des achats ou des paiements en ligne sont concernés, nous avons l'obligation légale de collecter suffisamment de données vous concernant pour fournir le Service.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tEn raison de la nature de nos produits, le traitement des données à caractère personnel est une partie essentielle et indissociable de nos Services, même si dans le Service même, nous ne traitons pas votre nom ou toute autre information qui vous identifie directement en tant que personne.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Données à caractère personnel à traiter")]),
                    e._v(" "),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tNous ne traitons les données à caractère personnel que lorsque cela est approprié et nécessaire. Le type de données que nous collectons et stockons varie en fonction du jeu auquel vous jouez et de votre activité. De façon générale, les données que nous collectons à votre sujet concernent le type d'appareil que vous utilisez, la manière dont vous jouez (comme les niveaux testés et achats effectués) et peuvent comprendre des informations que vous avez soumises lors de votre inscription (voir ci-dessous) ou des informations auxquelles vous nous autorisez à accéder après avoir connecté vos comptes de réseaux sociaux via nos Services.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tExemple de données à caractère personnel collectés sur nos services :\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("ul", [
                      e._v(
                        "\r\n\t\t- Informations de contact, comme l'adresse e-mail et les informations de contact sur les réseaux sociaux."
                      ),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Informations sur le périphérique, telles que le modèle de périphérique et la version du système d'exploitation."
                      ),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Informations de transaction et de paiement."
                      ),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Historique du client Par exemple, si vous nous contactez par l'intermédiaire de notre service client, nous pouvons conserver un enregistrement de cette correspondance."
                      ),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Journal des chats. Nous pouvons enregistrer les chats à des fins de sécurité et de modération."
                      ),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Données générées par l'utilisation des Services, telles que les données techniques générées en jouant à nos jeux ou lors de la visite de nos sites Web."
                      ),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Informations sur les cookies et les cookies tiers ainsi que les données d'analyse Web correspondantes."
                      ),
                      t("br"),
                      e._v("\r\n\t\t- Identifiants publicitaires."),
                      t("br"),
                      e._v(
                        "\r\n\t\t- Vous pouvez avoir la possibilité de vous enregistrer ou de vous connecter au Service via un service de connexion tiers (par exemple Facebook ou Game Center sur les appareils Apple). Si tel est le cas, nous collectons le numéro d'identification du profil de service tiers."
                      ),
                      t("br"),
                    ]),
                    e._v(" "),
                    t("br"),
                    e._v(" "),
                    t("h2", [e._v("Cookies")]),
                    e._v(" "),
                    t("br"),
                    e._v(
                      "\r\n\tLes informations personnelles peuvent être collectées grâce à l'utilisation de cookies et de technologies similaires, telles que des pixels (tags, balises ou gifs), des objets locaux partagés et des empreintes numériques. Pour les besoins de cette politique de confidentialité, nous faisons référence à toutes ces technologies comme des « cookies ».\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tNous utilisons des cookies et des technologies similaires pour collecter des informations auprès des utilisateurs enregistrés et pour nous aider à améliorer le Service. La plupart des appareils et des navigateurs Web acceptent automatiquement les cookies, mais vous pouvez généralement modifier les paramètres de votre appareil ou de votre navigateur pour refuser les cookies. Sachez que si vous modifiez les paramètres de votre appareil ou de votre navigateur pour refuser les cookies, vous ne pourrez peut-être pas utiliser certaines fonctionnalités du service.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Cookies essentiels")]),
                    e._v(
                      ": Certains cookies sont indispensables pour nous afin de vous fournir le Service. Ces cookies seront utilisés pour gérer la prestation du Service, et si vous n'acceptez pas ces cookies, vous ne pourrez pas y accéder. Ces cookies ne collectent pas d'informations personnelles susceptibles d'être utilisées à des fins de marketing.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Mémorisation de vos préférences")]),
                    e._v(
                      ": Nous utilisons également des cookies pour mémoriser vos préférences - cela modifie la façon dont le Service se comporte ou ressemble.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Cookies analytiques")]),
                    e._v(
                      ": ces cookies collectent des informations utilisées sous forme agrégée pour nous aider à comprendre comment le service est utilisé et d'où proviennent les utilisateurs.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Cookies de stockage local")]),
                    e._v(
                      ": les cookies de stockage locaux sont \"persistants\". Ils restent sur votre appareil pendant un certain temps (définis individuellement pour chaque cookie). Nous utilisons ces cookies pour enregistrer le nombre de fois que vous utilisez le Service, pour confirmer que vous êtes un utilisateur enregistré, pour enregistrer vos informations de connexion lors de l'accès au Service et pour collecter des statistiques sur l'utilisation du Service.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("b", [e._v("Comment refuser ou désactiver les cookies")]),
                    e._v(
                      ": Vous avez le droit de choisir d'accepter ou de refuser les cookies et les technologies similaires. Si vous choisissez d'utiliser le service sans bloquer ou désactiver les cookies, vous indiquerez votre consentement à l'utilisation de ces cookies et autres technologies. Vous indiquez également votre consentement à l'utilisation (conformément à la présente politique de confidentialité) de toute information personnelle que nous recueillons en utilisant ces technologies.\r\n\t"
                    ),
                    t("br"),
                    e._v(" "),
                    t("h2", [e._v("Sécurité des données")]),
                    e._v(" "),
                    t("br"),
                    e._v(
                      "\r\n\tNous assurons la sécurité des données lors du traitement de vos données à caractère personnel. Nous utilisons toujours des mesures de protection appropriées, telles que le contrôle d'accès basé sur les mots de passe et d'autres méthodes de protection ainsi que l’encryptage des données. Notre environnement d'exploitation a été sécurisé avec des pare-feu et un logiciel anti-virus approprié.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tNous traitons principalement vos données sous une forme dans laquelle un étranger ne peut pas vous identifier en tant que personne. Nous ne demandons pas ou ne stockons pas votre vrai nom ou votre identité et nos systèmes utilisent un identifiant numérique pour vous identifier à la fois en interne et à travers les systèmes, par opposition à quelque chose comme votre adresse e-mail. Avec ces mesures, nous protégeons la confidentialité de votre communication et empêchons les connexions non pertinentes à votre identité.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(
                      "\r\n\tChacun est responsable de la sécurité des données. Afin d'assurer la protection de vos données, nous vous demandons de faire attention à la sécurité des données de vos propres appareils.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("h2", [e._v("Publicité")]),
                    e._v(
                      "\r\n\tNos Services peuvent inclure des annonces pour des produits et services tiers. Pour vous montrer des publicités tierces pertinentes et intéressantes, nous et nos partenaires publicitaires utiliserons les informations vous concernant. Un exemple de ce type d'informations peut être lorsque vous avez acheté un produit à partir d'un certain site Web ou entré un terme spécifique dans un moteur de recherche. Vous pouvez vous désinscrire des publicités basées sur les centres d'intérêt, mais cela ne signifie pas que vous ne recevrez plus d'annonces, mais seulement que les publicités que vous recevez seront moins pertinentes pour vos intérêts.\r\n\t"
                    ),
                    t("br"),
                    t("br"),
                    e._v(" "),
                    t("i", [e._v("Modifiée le 04/05/2011")]),
                  ]),
                ]);
              },
            ],
            !1,
            null,
            null,
            null
          );
        n.default = component.exports;
      },
    },
  ]);
  