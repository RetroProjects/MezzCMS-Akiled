	<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

	<head>
	    <title><?= $config['hotelName'] ?>: Hotel</title>
	    <meta data-n-head="ssr" charset="utf-8">
	    <meta data-n-head="ssr" name="viewport" content="width=device-width, initial-scale=1">
	    <meta data-n-head="ssr" data-hid="description" name="description" content="<?= $config['hotelName'] ?> Hotel">
	    <meta data-n-head="ssr" name="keywords" content="Akiled, Akiled, Akiled hotel, Akiled, Akiled, Akiled hotel, Akiled.fr, Akiled.org, Akiled.es, Akiled retro, Akiled retro gratis, virtual, mundo, red social, Akiled gratis, crédito Akiled, Akiled francia, crédito, créditos, gratis, comunidad, avatar, chat, conectado, adolescencia, juego de roles, unirse, social, grupos, foros, seguro, jugar, juegos, amigos, raro , adolescentes, gente joven, coleccionista, coleccionar, crear, conectar, muebles, muebles, animales, decoración, diseño, apartamento, decorar, compartir, insignias, música, chat vip, diversión, salir, mmo, mmorpg, juego multijugador masivo, habbo, habbo.es, hbo, hbbo">
	    <meta data-n-head="ssr" data-hid="og:type" name="og:type" content="website">
	    <meta data-n-head="ssr" data-hid="og:url" name="og:url" content="<?= $config['hotelUrl'] ?>">
	    <meta data-n-head="ssr" data-hid="og:title" name="og:title" content="<?= $config['hotelName'] ?>">
	    <meta data-n-head="ssr" data-hid="og:description" name="og:description" content="<?= $config['hotelName'] ?> Hotel">
	    <meta data-n-head="ssr" data-hid="og:site_name" name="og:site_name" content="<?= $config['hotelName'] ?>">
	    <meta data-n-head="ssr" data-hid="og:image" name="og:image" content="<?= $config['pathswf'] ?>/c_images/notifications/aboutimage.png">
	    <meta data-n-head="ssr" name="msapplication-TileColor" content="#d67d00">
	    <meta data-n-head="ssr" name="theme-color" content="#ff7920">
	    <meta data-n-head="ssr" data-hid="charset" charset="utf-8">
	    <meta data-n-head="ssr" data-hid="mobile-web-app-capable" name="mobile-web-app-capable" content="yes">
	    <meta data-n-head="ssr" data-hid="apple-mobile-web-app-title" name="apple-mobile-web-app-title" content="Akiled">
	    <meta data-n-head="ssr" data-hid="author" name="author" content="Remy Holos">
	    <meta data-n-head="ssr" data-hid="i18n-og" property="og:locale" content="es_ES">
	    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="<?= $config['hotelUrl'] ?>/favicon.ico">
	    <link data-n-head="ssr" rel="shortcut icon" href="<?= $config['pathswf'] ?>/c_images/notifications/aboutimage.png">
	    <link data-n-head="ssr" rel="apple-touch-icon" href="<?= $config['pathswf'] ?>/c_images/notifications/aboutimage.png" sizes="512x512">
	    <link rel="stylesheet" href="/AkiledSockets/css/7060cbd.css">
	    <link rel="preload" as="style" href="/AkiledSockets/css/bcd4e52.css">
	    <link rel="preload" as="style" href="/AkiledSockets/css/00cfab0.css">
	</head>

	<body>

	    <div id="__nuxt">

	        <div id="__layout">
	            <div data-theme="dark" data-theme-color="black" class="app">
	                <script>
	                    window.__NUXT__ = (function(a, b, c, d, e, f, g, h, i, j) {
	                        return {
	                            layout: "default",
	                            data: [{}],
	                            fetch: [],
	                            error: null,
	                            state: {
	                                AuthModule: {
	                                    connected: f,
	                                    user: {
	                                        id: <?= User::userData('id') ?>,
	                                        username: "<?= User::userData('username') ?>",
	                                        motto: c,
	                                        look: "<?= User::userData('look') ?>",
	                                    }
	                                },
	                                RoleplayModule: {
	                                    stats: {
	                                        id: a,
	                                        enable: b,
	                                        health: g,
	                                        healthMax: g,
	                                        energy: a,
	                                        money: a,
	                                        ammunition: a,
	                                        level: d
	                                    },
	                                    inventoryIsOpen: b,
	                                    inventoryItems: [],
	                                    inventoryChoiceIsOpen: b,
	                                    inventoryChoiceItem: {
	                                        id: a,
	                                        name: c,
	                                        desc: c,
	                                        count: a,
	                                        usetype: a
	                                    },
	                                    trocTargetSettings: {
	                                        userid: a,
	                                        username: c,
	                                        accepte: b,
	                                        confirme: b
	                                    },
	                                    trocSettings: {
	                                        accepte: b,
	                                        confirme: b
	                                    },
	                                    trocMyItems: [],
	                                    trocTargetItems: []
	                                },
	                                i18n: {
	                                    routeParams: {}
	                                }
	                            },
	                            serverRendered: f,
	                            routePath: "\u002Fclient-nitro",
	                        }
	                    }(0, false, "", 1, "0", true, 100, " ", " "));
	                </script>


	                <script src="/AkiledSockets/b211ac5.js" defer=""></script>
	                <script src="/AkiledSockets/2666db0.js" defer=""></script>
	                <script src="/AkiledSockets/104b2db.js" defer=""></script>
	                <script src="/AkiledSockets/af631e9.js" defer=""></script>
	                <script src="/AkiledSockets/ed7c272.js" defer=""></script>


	</body>

	</html>