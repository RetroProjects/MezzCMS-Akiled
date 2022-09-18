'use strict';
(window.webpackJsonp = window.webpackJsonp || []).push([[71], {
 544 : function updateMiniBatch(eta, lmbda, n) {
 },
 597 : function updateMiniBatch(eta, lmbda, n) {
   n(544);
 },
 696 : function render(selector, root, $) {
   function f(event) {
     var k = function() {
       if ("undefined" == typeof Reflect || !Reflect.construct) {
         return false;
       }
       if (Reflect.construct.sham) {
         return false;
       }
       if ("function" == typeof Proxy) {
         return true;
       }
       try {
         return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function() {
         })), true;
       } catch (t) {
         return false;
       }
     }();
     return function() {
       var ret;
       var fn = Object(schema.a)(event);
       if (k) {
         var ctor = Object(schema.a)(this).constructor;
         ret = Reflect.construct(fn, arguments, ctor);
       } else {
         ret = fn.apply(this, arguments);
       }
       return Object(e.a)(this, ret);
     };
   }
   $.r(root);
   $(31);
   var options = $(7);
   var event = $(11);
   var e = $(12);
   var schema = $(4);
   var data = $(3);
   var self = $(5);
   var __decorate = function __decorate(decorators, target, key, desc) {
     var d;
     var c = arguments.length;
     var r = c < 3 ? target : null === desc ? desc = Object.getOwnPropertyDescriptor(target, key) : desc;
     if ("object" === ("undefined" == typeof Reflect ? "undefined" : Object(data.a)(Reflect)) && "function" == typeof Reflect.decorate) {
       r = Reflect.decorate(decorators, target, key, desc);
     } else {
       var i = decorators.length - 1;
       for (; i >= 0; i--) {
         if (d = decorators[i]) {
           r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
         }
       }
     }
     return c > 3 && r && Object.defineProperty(target, key, r), r;
   };
   var QueryLanguageComponent = function(mmCoreSplitViewBlock) {
     function e() {
       return Object(options.a)(this, e), g.apply(this, arguments);
     }
     Object(event.a)(e, mmCoreSplitViewBlock);
     var g = f(e);
     return e;
   }(self.Vue);
   var artistTrack = QueryLanguageComponent = __decorate([Object(self.Component)({
     middleware : ["NotAuthenticated"],
     head : function getFieldsName() {
       return {
         title : this.$t("index.title"),
         meta : [{
           hid : "description",
           name : "description",
           content : this.$t("index.description")
         }, {
           hid : "og:title",
           name : "og:title",
           content : this.$t("index.title")
         }, {
           hid : "og:description",
           name : "og:description",
           content : this.$t("index.description")
         }]
       };
     }
   })], QueryLanguageComponent);
   var pkg = ($(597), $(14));
   var module = Object(pkg.a)(artistTrack, function() {
     var _vm = this;
     var _h = _vm.$createElement;
     var _c = _vm._self._c || _h;
     return _c("div", {
       staticClass : "row mt-2"
     }, [_c("div", {
       staticClass : "col-md-4"
     }, [_c("div", {
       staticClass : "card-intro card-intro--discovery"
     }, [_c("h2", {
       staticClass : "card-intro__title card-intro__title--discovery"
     }, [_vm._v(_vm._s(_vm.$t("index.intro-title-discovery")))]), _vm._v(" "), _c("span", {
       staticClass : "card-intro__about card-intro__about--discovery"
     }, [_vm._v("\n                " + _vm._s(_vm.$t("index.intro-about-discovery")) + "\n            ")])])]), _vm._v(" "), _c("div", {
       staticClass : "col-md-4"
     }, [_c("div", {
       staticClass : "card-intro card-intro--love"
     }, [_c("h2", {
       staticClass : "card-intro__title card-intro__title--love"
     }, [_vm._v(_vm._s(_vm.$t("index.intro-title-love")))]), _vm._v(" "), _c("span", {
       staticClass : "card-intro__about card-intro__about--love"
     }, [_vm._v("\n                " + _vm._s(_vm.$t("index.intro-about-love")) + "\n            ")])])]), _vm._v(" "), _c("div", {
       staticClass : "col-md-4"
     }, [_c("div", {
       staticClass : "card-intro card-intro--animation"
     }, [_c("h2", {
       staticClass : "card-intro__title card-intro__title--animation"
     }, [_vm._v(_vm._s(_vm.$t("index.intro-title-game")))]), _vm._v(" "), _c("span", {
       staticClass : "card-intro__about card-intro__about--animation"
     }, [_vm._v("\n                " + _vm._s(_vm.$t("index.intro-about-game")) + "\n            ")])])])]);
   }, [], false, null, null, null);
   root.default = module.exports;
 }
}]);