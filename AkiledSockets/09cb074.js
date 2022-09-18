'use strict';
(window.webpackJsonp = window.webpackJsonp || []).push([[90], {
 372 : function(_diveTo) {
   function _(cesiumWidget, options, defaultValue) {
     return _diveTo.apply(this, arguments);
   }
   _.toString = function() {
     return _diveTo.toString();
   };
   return _;
 }(function(canCreateDiscussions, d, n) {
   function sendMessage(target, name) {
     return new Promise(function(optError) {
       var channel = new MessageChannel;
       channel.port1.onmessage = function(response) {
         optError(response.data);
       };
       target.postMessage(name, [channel.port2]);
     });
   }
   function defineProperties(target, props) {
     var i = 0;
     for (; i < props.length; i++) {
       var descriptor = props[i];
       descriptor.enumerable = descriptor.enumerable || false;
       descriptor.configurable = true;
       if ("value" in descriptor) {
         descriptor.writable = true;
       }
       Object.defineProperty(target, descriptor.key, descriptor);
     }
   }
   function fn(p, i) {
     if (null == i || i > p.length) {
       i = p.length;
     }
     var j = 0;
     var s = new Array(i);
     for (; j < i; j++) {
       s[j] = p[j];
     }
     return s;
   }
   function render(f, g) {
     var e;
     if ("undefined" == typeof Symbol || null == f[Symbol.iterator]) {
       if (Array.isArray(f) || (e = function(e, value2) {
         if (e) {
           if ("string" == typeof e) {
             return fn(e, value2);
           }
           var k = Object.prototype.toString.call(e).slice(8, -1);
           return "Object" === k && e.constructor && (k = e.constructor.name), "Map" === k || "Set" === k ? Array.from(e) : "Arguments" === k || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(k) ? fn(e, value2) : void 0;
         }
       }(f)) || g && f && "number" == typeof f.length) {
         if (e) {
           f = e;
         }
         var offset = 0;
         return function() {
           return offset >= f.length ? {
             done : true
           } : {
             done : false,
             value : f[offset++]
           };
         };
       }
       throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
     }
     return (e = f[Symbol.iterator]()).next.bind(e);
   }
   function join(value, loc) {
     var base = location.href;
     return (new URL(value, base)).href === (new URL(loc, base)).href;
   }
   function cb(e, f, er) {
     return er ? f ? f(e) : e : (e && e.then || (e = Promise.resolve(e)), f ? e.then(f) : e);
   }
   function length() {
   }
   function save(value, useCookieFallback) {
     if (!useCookieFallback) {
       return value && value.then ? value.then(length) : Promise.resolve();
     }
   }
   n.r(d);
   n.d(d, "Workbox", function() {
     return h;
   });
   n.d(d, "messageSW", function() {
     return sendMessage;
   });
   try {
     if (self["workbox:window:5.1.4"]) {
       _();
     }
   } catch (r) {
   }
   try {
     if (self["workbox:core:5.1.4"]) {
       _();
     }
   } catch (r) {
   }
   var Location = function PromiseCompleter() {
     var callbackTwo = this;
     this.promise = new Promise(function(resolve, reject) {
       callbackTwo.resolve = resolve;
       callbackTwo.reject = reject;
     });
   };
   var Error = function handle(n, m) {
     this.type = n;
     Object.assign(this, m);
   };
   var h = function(GroupPanelWidget) {
     function init(cost, type) {
       var item;
       var origSpy;
       return void 0 === type && (type = {}), (item = GroupPanelWidget.call(this) || this).t = {}, item.i = 0, item.o = new Location, item.u = new Location, item.s = new Location, item.v = 0, item.h = new Set, item.l = function() {
         var m = item.m;
         var p = m.installing;
         if (item.i > 0 || !join(p.scriptURL, item.g) || performance.now() > item.v + 6e4) {
           item.p = p;
           m.removeEventListener("updatefound", item.l);
         } else {
           item.P = p;
           item.h.add(p);
           item.o.resolve(p);
         }
         ++item.i;
         p.addEventListener("statechange", item.S);
       }, item.S = function(e) {
         var value = item.m;
         var n = e.target;
         var id = n.state;
         var first = n === item.p;
         var s = first ? "external" : "";
         var payload = {
           sw : n,
           originalEvent : e
         };
         if (!first && item.j) {
           payload.isUpdate = true;
         }
         item.dispatchEvent(new Error(s + id, payload));
         if ("installed" === id) {
           item.A = self.setTimeout(function() {
             if ("installed" === id && value.waiting === n) {
               item.dispatchEvent(new Error(s + "waiting", payload));
             }
           }, 200);
         } else {
           if ("activating" === id) {
             clearTimeout(item.A);
             if (!first) {
               item.u.resolve(n);
             }
           }
         }
       }, item.O = function(e) {
         var previous = item.P;
         if (previous === navigator.serviceWorker.controller) {
           item.dispatchEvent(new Error("controlling", {
             sw : previous,
             originalEvent : e,
             isUpdate : item.j
           }));
           item.s.resolve(previous);
         }
       }, item.U = (origSpy = function draw(e) {
         var t = e.data;
         var w = e.source;
         return cb(item.getSW(), function() {
           if (item.h.has(w)) {
             item.dispatchEvent(new Error("message", {
               data : t,
               sw : w,
               originalEvent : e
             }));
           }
         });
       }, function() {
         var args = [];
         var i = 0;
         for (; i < arguments.length; i++) {
           args[i] = arguments[i];
         }
         try {
           return Promise.resolve(origSpy.apply(this, args));
         } catch (unknownError) {
           return Promise.reject(unknownError);
         }
       }), item.g = cost, item.t = type, navigator.serviceWorker.addEventListener("message", item.U), item;
     }
     var Menu;
     var Widget;
     Widget = GroupPanelWidget;
     (Menu = init).prototype = Object.create(Widget.prototype);
     Menu.prototype.constructor = Menu;
     Menu.__proto__ = Widget;
     var TilingScheme;
     var protoProps;
     var parent = init.prototype;
     return parent.register = function(elqClass) {
       var isNewStateNearStart = (void 0 === elqClass ? {} : elqClass).immediate;
       var isReplayingSong = void 0 !== isNewStateNearStart && isNewStateNearStart;
       try {
         var item = this;
         return function(require, nextFn) {
           var promise = require();
           return promise && promise.then ? promise.then(nextFn) : nextFn();
         }(function() {
           if (!isReplayingSong && "complete" !== document.readyState) {
             return save(new Promise(function(e) {
               return window.addEventListener("load", e);
             }));
           }
         }, function() {
           return item.j = Boolean(navigator.serviceWorker.controller), item.I = item.M(), cb(item.R(), function(val) {
             item.m = val;
             if (item.I) {
               item.P = item.I;
               item.u.resolve(item.I);
               item.s.resolve(item.I);
               item.I.addEventListener("statechange", item.S, {
                 once : true
               });
             }
             var payload = item.m.waiting;
             return payload && join(payload.scriptURL, item.g) && (item.P = payload, Promise.resolve().then(function() {
               item.dispatchEvent(new Error("waiting", {
                 sw : payload,
                 wasWaitingBeforeRegister : true
               }));
             }).then(function() {
             })), item.P && (item.o.resolve(item.P), item.h.add(item.P)), item.m.addEventListener("updatefound", item.l), navigator.serviceWorker.addEventListener("controllerchange", item.O, {
               once : true
             }), item.m;
           });
         });
       } catch (unknownError) {
         return Promise.reject(unknownError);
       }
     }, parent.update = function() {
       try {
         return this.m ? save(this.m.update()) : void 0;
       } catch (unknownError) {
         return Promise.reject(unknownError);
       }
     }, parent.getSW = function() {
       try {
         return void 0 !== this.P ? this.P : this.o.promise;
       } catch (unknownError) {
         return Promise.reject(unknownError);
       }
     }, parent.messageSW = function(name) {
       try {
         return cb(this.getSW(), function(connection) {
           return sendMessage(connection, name);
         });
       } catch (unknownError) {
         return Promise.reject(unknownError);
       }
     }, parent.M = function() {
       var payload = navigator.serviceWorker.controller;
       return payload && join(payload.scriptURL, this.g) ? payload : void 0;
     }, parent.R = function() {
       try {
         var m = this;
         return function(callback, onRejected) {
           try {
             var value = callback();
           } catch (clojIsReversed) {
             return onRejected(clojIsReversed);
           }
           return value && value.then ? value.then(void 0, onRejected) : value;
         }(function() {
           return cb(navigator.serviceWorker.register(m.g, m.t), function(canCreateDiscussions) {
             return m.v = performance.now(), canCreateDiscussions;
           });
         }, function(isSlidingUp) {
           throw isSlidingUp;
         });
       } catch (unknownError) {
         return Promise.reject(unknownError);
       }
     }, TilingScheme = init, (protoProps = [{
       key : "active",
       get : function page() {
         return this.u.promise;
       }
     }, {
       key : "controlling",
       get : function do_list() {
         return this.s.promise;
       }
     }]) && defineProperties(TilingScheme.prototype, protoProps), init;
   }(function() {
     function map() {
       this.k = new Map;
     }
     var s = map.prototype;
     return s.addEventListener = function(event, t) {
       this.B(event).add(t);
     }, s.removeEventListener = function(event, callback) {
       this.B(event).delete(callback);
     }, s.dispatchEvent = function(event) {
       event.target = this;
       var tmp;
       var next = render(this.B(event.type));
       for (; !(tmp = next()).done;) {
         (0, tmp.value)(event);
       }
     }, s.B = function(event) {
       return this.k.has(event) || this.k.set(event, new Set), this.k.get(event);
     }, map;
   }());
 })
}]);