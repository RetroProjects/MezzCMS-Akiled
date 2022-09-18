(function ( $ ) {
    var AG = new AvatarGenerate();
    var palettesJSON = {
		"1":{
			"14":{"index":0,"club":0,"selectable":1,"hex":"D3BC75"},
			"10":{"index":1,"club":0,"selectable":1,"hex":"DDBDA6"},
			"1":{"index":2,"club":0,"selectable":1,"hex":"DDAF83"},
			"8":{"index":3,"club":0,"selectable":1,"hex":"D29448"},
			"12":{"index":4,"club":0,"selectable":1,"hex":"DD836D"},
			"1369":{"index":5,"club":0,"selectable":1,"hex":"C19191"},
			"1370":{"index":6,"club":0,"selectable":1,"hex":"AE6F48"},
			"19":{"index":7,"club":0,"selectable":1,"hex":"9E6552"},
			"20":{"index":8,"club":0,"selectable":1,"hex":"864836"},
			"1371":{"index":9,"club":0,"selectable":1,"hex":"7C3F1F"},
			"30":{"index":10,"club":0,"selectable":1,"hex":"412A19"}
		},
		"2":{
			"40":{"index":0,"club":0,"selectable":1,"hex":"BAB6BB"},
			"34":{"index":1,"club":0,"selectable":1,"hex":"DDCD9F"},
			"35":{"index":2,"club":0,"selectable":1,"hex":"D4B34C"},
			"36":{"index":3,"club":0,"selectable":1,"hex":"D09819"},
			"31":{"index":4,"club":0,"selectable":1,"hex":"DDB891"},
			"32":{"index":5,"club":0,"selectable":1,"hex":"C08F5F"},
			"37":{"index":6,"club":0,"selectable":1,"hex":"845027"},
			"38":{"index":7,"club":0,"selectable":1,"hex":"944700"},
			"43":{"index":8,"club":0,"selectable":1,"hex":"D07D4C"},
			"46":{"index":9,"club":0,"selectable":1,"hex":"DD743C"},
			"47":{"index":10,"club":0,"selectable":1,"hex":"D9530A"},
			"48":{"index":11,"club":0,"selectable":1,"hex":"BF3100"},
			"44":{"index":12,"club":0,"selectable":1,"hex":"883432"},
			"39":{"index":13,"club":0,"selectable":1,"hex":"672C00"},
			"45":{"index":14,"club":0,"selectable":1,"hex":"4F392B"},
			"42":{"index":15,"club":0,"selectable":1,"hex":"3F3C4A"}
		},
		"3":{
			"1408":{"index":0,"club":0,"selectable":1,"hex":"BEBEBE"},
			"90":{"index":1,"club":0,"selectable":1,"hex":"816434"},
			"91":{"index":2,"club":0,"selectable":1,"hex":"5C4B32"},
			"66":{"index":3,"club":0,"selectable":1,"hex":"C79721"},
			"1320":{"index":4,"club":0,"selectable":1,"hex":"DDD59D"},
			"68":{"index":5,"club":0,"selectable":1,"hex":"D6AB7C"},
			"73":{"index":6,"club":0,"selectable":1,"hex":"89252A"},
			"72":{"index":7,"club":0,"selectable":1,"hex":"CC4F45"},
			"71":{"index":8,"club":0,"selectable":1,"hex":"DDA4A7"},
			"74":{"index":9,"club":0,"selectable":1,"hex":"C7B4CD"},
			"75":{"index":10,"club":0,"selectable":1,"hex":"947F9A"},
			"76":{"index":11,"club":0,"selectable":1,"hex":"6C4E7C"},
			"82":{"index":12,"club":0,"selectable":1,"hex":"44698B"},
			"81":{"index":13,"club":0,"selectable":1,"hex":"659DAB"},
			"80":{"index":14,"club":0,"selectable":1,"hex":"AACCC6"},
			"83":{"index":15,"club":0,"selectable":1,"hex":"A1D1A3"},
			"84":{"index":16,"club":0,"selectable":1,"hex":"5C9653"},
			"85":{"index":17,"club":0,"selectable":1,"hex":"3B5F37"},
			"88":{"index":18,"club":0,"selectable":1,"hex":"696B1D"},
			"64":{"index":19,"club":0,"selectable":1,"hex":"4C4C4C"}
		}
	};
    var setsJSON = [{
		"paletteid":1,"type":"hd","sets":{
			"180":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"185":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"190":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"195":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"200":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"205":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"206":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"207":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"208":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"209":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"600":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"605":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"610":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"615":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"620":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"625":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"626":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"627":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"628":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"629":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1}
		}
	},
	{
		"paletteid":2,"type":"hr","sets":{
			"100":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"105":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"110":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"115":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"125":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"135":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"145":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"155":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"165":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"170":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"676":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"679":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"681":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"802":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"830":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"891":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"892":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"893":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"500":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"505":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"510":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"515":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"530":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"540":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"545":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"550":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"555":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"575":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"596":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"811":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"837":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"890":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3090":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1}
		}
	},
	{
		"paletteid":3,"type":"ch","sets":{
			"214":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"215":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"224":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"225":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"230":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"235":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"240":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"245":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"250":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"255":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"262":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"265":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"266":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"267":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"804":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"805":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"806":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"807":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"808":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"809":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"875":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"876":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"877":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"878":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"809":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3030":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3109":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3110":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3111":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			//
			"630":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"635":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"640":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"645":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"650":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"655":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"660":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"667":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"669":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"670":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"675":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"680":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"685":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"690":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"691":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"812":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"813":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"814":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"815":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"816":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"817":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"818":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"819":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"820":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"821":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"822":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"823":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"825":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"879":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"880":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"881":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"882":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"884":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3112":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3113":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3114":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1}
		}
	},
	{
		"paletteid":3,"type":"lg","sets":{
			"270":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"275":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"280":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"281":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"285":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3023":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3078":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3088":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3116":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3201":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3216":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3290":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"695":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"696":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"700":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"705":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"710":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"715":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"716":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"720":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1}
		}
	},
	{
		"paletteid":3,"type":"sh","sets":{
			"290":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"295":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"300":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"305":{"gender":"M","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"905":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"906":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"908":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3068":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"3115":{"gender":"U","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"725":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"730":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"735":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"740":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1},
			"907":{"gender":"F","club":0,"colorable":1,"selectable":1,"preselectable":1}
		}
	}
	];

    AG.setTypes( setsJSON );
    AG.setPalettes( palettesJSON );
	

    $.fn.setClothes = function() {
        AG.setClothesObject( this );
    };

    $.fn.setColors = function() {
        AG.setColorsObject( this );
    };

    $.fn.setCodeReceiver = function() {
        AG.setCodeObject( this );
    };
	

    $( '#clothes' ).setClothes();
    $( '#colors' ).setColors();
    $( '#avatar' ).setCodeReceiver();


	AG.importFigure( "ch-210-66.lg-270-1338.sh-290-1408.hr-100-39.hd-180-1" );
    AG.loadToClothes( "hd" );
    AG.loadToColors( "hd" );
    AG.updateAvatar();

    $( 'a[data-gender]' ).on( 'click', function()
    {
        var gender = $( this ).data( 'gender' );

        if( gender == AG.getGender() )
            return;

        var oldGender = ( gender == "M" ) ? "F" : "M";

        $( 'a[data-gender="' + oldGender + '"]' ).removeClass( 'sex-active' );
        $( this ).addClass( 'sex-active' );

        AG.switchGender();
        AG.loadToClothes( AG.getCurrentSet() );
        AG.updateAvatar();

        return false;
    });

    $( 'a[data-navigate]' ).on( 'click', function()
    {
        var toSet = $( this ).data( 'navigate' );
        var subnav = $( this ).data( 'subnav' );

        $( '.menu-active' ).removeClass( 'menu-active' );
        $( this ).addClass( 'menu-active' );

        AG.setCurrentSet( toSet );
        AG.loadToClothes( toSet );
        AG.loadToColors( toSet );


        return false;
    });


    /*
     * Item clicking triggers
     *
     */

    $( '#avatarSelector' ).on( 'click', 'a[data-clothing]', function()
    {
        var current = AG.getPart( AG.getCurrentSet() );
        var color = ( typeof current.color === "undefined" || current.color == "" ) ? "61" : current.color;

        $( '.active' ).removeClass( 'active' );
        $( this ).addClass( 'active' );

        AG.setPart( AG.getCurrentSet(), color, $( this ).data( 'clothing' ) );
        AG.updateAvatar();

        return false;
    });

    $( '#avatarSelector' ).on( 'click', 'a[data-color]', function()
    {
        var current = AG.getPart( AG.getCurrentSet() );
        var paletteid = $( this ).attr( 'data-palette' );
        var hex = $( this ).attr( 'data-color' );

        AG.setPart( AG.getCurrentSet(), AG.filterByHex( paletteid, hex ), current.set );
        AG.updateAvatar();

        return false;
    });

    function AvatarGenerate()
    {
        var habbo    = {
            hr: { color: '39', set: '100' },
            hd: { color: '180', set: '1' },
            ch: { color: '210', set: '66' },
            lg: { color: '270', set: '1338' },
            sh: { color: '290', set: '1408' },
            ha: { color: '', set: '' },
            he: { color: '', set: '' },
            ea: { color: '', set: '' },
            fa: { color: '', set: '' },
            ca: { color: '', set: '' },
            wa: { color: '', set: '' },
            cc: { color: '', set: '' },
            cp: { color: '', set: '' }
        };

        var habboFemale    = {
            hr: { color: '33', set: '515' },
            hd: { color: '1', set: '600' },
            ch: { color: '70', set: '635' },
            lg: { color: '66-62', set: '716' },
            sh: { color: '68', set: '735' },
            ha: { color: '', set: '' },
            he: { color: '', set: '' },
            ea: { color: '', set: '' },
            fa: { color: '', set: '' },
            ca: { color: '', set: '' },
            wa: { color: '', set: '' },
            cc: { color: '', set: '' },
            cp: { color: '', set: '' }
        };


        this.getHabbo = function()
        {
            return habbo;
        };
		
        this.gender = 'M';
        this.getGender = function()
        {
            return this.gender;
        };
        this.switchGender = function()
        {
            this.gender = ( this.gender !== 'M' && this.gender !== 'F' || this.gender == 'F' ) ? 'M' : 'F';
        };
        this.setPart = function( part, color, set )
        {
            if( this.getGender() == "M" )
            {
                habbo[ part ] = { color: color, set: set };
            }
            else
            {
                habboFemale[ part ] = { color: color, set: set };
            }
        };
        this.unsetPart = function( part )
        {
            if( this.getGender() == "M" )
            {
                habbo[ part ] = { set: '' };
            }
            else
            {
                habboFemale[ part ] = { set: '' };
            }
        };
        this.getPart = function( part )
        {
            if( this.getGender() == "M" )
            {
                return habbo[ part ];
            }
            else
            {
                return habboFemale[ part ];
            }
        };

        var currentSet = "hd";
        this.getCurrentSet = function()
        {
            return currentSet;
        };
        this.setCurrentSet = function( current )
        {
            currentSet = current;
        };
		
        var figuredata = { palettes: {}, sets: {} };

        this.getPalettes = function()
        {
            return figuredata.palettes;
        };
        this.getPalette = function( id )
        {
            return figuredata.palettes[ id ];
        };
        this.setPalettes = function( json )
        {
            figuredata.palettes = json;
        };

        this.setTypes = function( json )
        {
            figuredata.sets = json;
        };

        this.buildFigure = function( usingHabbo )
        {
            var figure = "";

            jQuery.each( ( this.getGender() == "M" ) ? habbo : habboFemale, function( index, value)
            {
                if( value.set == "" || value.color == "" )
                    return;

                figure = figure + "." + index + "-" + value.set + "-" + value.color;
            });

            return figure.substring(1, figure.length );
        };

        this.importFigure = function( figure )
        {
            var arrayFigure = figure.split( "." );

            jQuery.each( arrayFigure, function( index, value )
            {
                var array = value.split( '-' );

                habbo[ array[0] ].set   = array[1];
                habbo[ array[0] ].color = ( 3 in array ) ? array[2] + "-" + array[3] : array[2];
            });

        };

        this.filterByType = function( type )
        {
            var hit;

            jQuery.each( figuredata.sets, function( index, value )
            {
                if( value.type == type )
                {
                    hit = value;

                    return false;
                }
            });

            return hit;
        };
		
        this.filterByHex = function( paletteid, hex )
        {
            var hit;

            jQuery.each( figuredata.palettes[ paletteid ], function( index, value )
            {
                if( value.hex == hex )
                {
                    hit = index;

                    return false;
                }
            });

            return hit;
        };
		
        this.canRemove = function( type )
        {
            if( type == "hd" || type == "lg" )
            {
                return false;
            }

            return true;
        };
		
        this.loadToClothes = function( type )
        {
            var _this = this;
            var load   = this.filterByType( type );

            $( clothesObject ).html( "" );

            jQuery.each( load.sets, function( index, value )
            {
                if( value.gender == _this.gender && value.selectable == 1 || value.gender == "U" && value.selectable == 1 )
                {
                    var currentlyactive = _this.getPart( type );
                    var partString = type + "-" + index + "-" + currentlyactive.color;

                    var asset  = $('<a href="#" class="page-content-choose-style-wrapper-item-content-look" data-clothing="' + index + '"><span class="page-content-choose-style-wrapper-item-content-look-figure" style="background-image: url(/assets/images/client/figure/' + type + '-' + index + '.png);"></span></a>');

                    if( index == currentlyactive.set )
                    {
                        asset.addClass( 'active' );
                    }
					
                    $( clothesObject ).append( asset );
                }
            });
        };


        /*
         *
         */

        this.loadToColors = function( type )
        {
            var _this = this;

            var load   = this.filterByType( type );
            var colors = this.getPalette( load.paletteid );

            $( colorsObject ).html( "" );

            jQuery.each( colors, function( index, value )
            {
                if( value.selectable == 1 )
                {
                    var color = $( '<a href="#" class="page-content-choose-style-wrapper-item-content-color" style="background-color: #' + value.hex + '" data-palette="' + load.paletteid + '" data-color="' + value.hex + '"></a>');

                    $( colorsObject ).append( color );
                }
            });

        };
		
        var clothesObject;
        this.setClothesObject = function( object ) {
            clothesObject = object;
        };
        var colorsObject;
        this.setColorsObject = function( object )
        {
            colorsObject = object;
        };
        var codeObject;

        this.setCodeObject = function( object )
        {
            codeObject = object;
        };

        this.updateAvatar = function()
        {
            var URL = "https://www.habbo.com.tr/habbo-imaging/avatarimage?head_direction=4&direction=4&size=l&figure=" + this.buildFigure() + "&gender=" + this.getGender();

            $( '#myHabbo' ).attr( 'src', URL ).attr( 'value', URL );
            $( codeObject ).val( this.buildFigure());
        };
    }
}( jQuery ));