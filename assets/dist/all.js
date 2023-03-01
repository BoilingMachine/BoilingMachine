/*!
 * Bootstrap v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
!(function (t, e) {
    "object" == typeof exports && "undefined" != typeof module
        ? e(exports, require("jquery"), require("popper.js"))
        : "function" == typeof define && define.amd
        ? define(["exports", "jquery", "popper.js"], e)
        : e((t.bootstrap = {}), t.jQuery, t.Popper);
})(this, function (t, e, n) {
    "use strict";
    function i(t, e) {
        for (var n = 0; n < e.length; n++) {
            var i = e[n];
            (i.enumerable = i.enumerable || !1), (i.configurable = !0), "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i);
        }
    }
    function s(t, e, n) {
        return e && i(t.prototype, e), n && i(t, n), t;
    }
    function r() {
        return (r =
            Object.assign ||
            function (t) {
                for (var e = 1; e < arguments.length; e++) {
                    var n = arguments[e];
                    for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i]);
                }
                return t;
            }).apply(this, arguments);
    }
    (e = e && e.hasOwnProperty("default") ? e.default : e), (n = n && n.hasOwnProperty("default") ? n.default : n);
    var o,
        a,
        l,
        h,
        c,
        u,
        f,
        d,
        _,
        g,
        p,
        m,
        v,
        E,
        T,
        y,
        C,
        I,
        A,
        b,
        D,
        S,
        w,
        N,
        O,
        k,
        P = (function (t) {
            var e = !1;
            function n(e) {
                var n = this,
                    s = !1;
                return (
                    t(this).one(i.TRANSITION_END, function () {
                        s = !0;
                    }),
                    setTimeout(function () {
                        s || i.triggerTransitionEnd(n);
                    }, e),
                    this
                );
            }
            var i = {
                TRANSITION_END: "bsTransitionEnd",
                getUID: function (t) {
                    do {
                        t += ~~(1e6 * Math.random());
                    } while (document.getElementById(t));
                    return t;
                },
                getSelectorFromElement: function (e) {
                    var n,
                        i = e.getAttribute("data-target");
                    (i && "#" !== i) || (i = e.getAttribute("href") || ""), "#" === i.charAt(0) && ((n = i), (i = n = "function" == typeof t.escapeSelector ? t.escapeSelector(n).substr(1) : n.replace(/(:|\.|\[|\]|,|=|@)/g, "\\$1")));
                    try {
                        return t(document).find(i).length > 0 ? i : null;
                    } catch (t) {
                        return null;
                    }
                },
                reflow: function (t) {
                    return t.offsetHeight;
                },
                triggerTransitionEnd: function (n) {
                    t(n).trigger(e.end);
                },
                supportsTransitionEnd: function () {
                    return Boolean(e);
                },
                isElement: function (t) {
                    return (t[0] || t).nodeType;
                },
                typeCheckConfig: function (t, e, n) {
                    for (var s in n)
                        if (Object.prototype.hasOwnProperty.call(n, s)) {
                            var r = n[s],
                                o = e[s],
                                a =
                                    o && i.isElement(o)
                                        ? "element"
                                        : ((l = o),
                                          {}.toString
                                              .call(l)
                                              .match(/\s([a-zA-Z]+)/)[1]
                                              .toLowerCase());
                            if (!new RegExp(r).test(a)) throw new Error(t.toUpperCase() + ': Option "' + s + '" provided type "' + a + '" but expected type "' + r + '".');
                        }
                    var l;
                },
            };
            return (
                (e = ("undefined" == typeof window || !window.QUnit) && { end: "transitionend" }),
                (t.fn.emulateTransitionEnd = n),
                i.supportsTransitionEnd() &&
                    (t.event.special[i.TRANSITION_END] = {
                        bindType: e.end,
                        delegateType: e.end,
                        handle: function (e) {
                            if (t(e.target).is(this)) return e.handleObj.handler.apply(this, arguments);
                        },
                    }),
                i
            );
        })(e),
        L =
            ((a = "alert"),
            (h = "." + (l = "bs.alert")),
            (c = (o = e).fn[a]),
            (u = { CLOSE: "close" + h, CLOSED: "closed" + h, CLICK_DATA_API: "click" + h + ".data-api" }),
            (f = "alert"),
            (d = "fade"),
            (_ = "show"),
            (g = (function () {
                function t(t) {
                    this._element = t;
                }
                var e = t.prototype;
                return (
                    (e.close = function (t) {
                        t = t || this._element;
                        var e = this._getRootElement(t);
                        this._triggerCloseEvent(e).isDefaultPrevented() || this._removeElement(e);
                    }),
                    (e.dispose = function () {
                        o.removeData(this._element, l), (this._element = null);
                    }),
                    (e._getRootElement = function (t) {
                        var e = P.getSelectorFromElement(t),
                            n = !1;
                        return e && (n = o(e)[0]), n || (n = o(t).closest("." + f)[0]), n;
                    }),
                    (e._triggerCloseEvent = function (t) {
                        var e = o.Event(u.CLOSE);
                        return o(t).trigger(e), e;
                    }),
                    (e._removeElement = function (t) {
                        var e = this;
                        o(t).removeClass(_),
                            P.supportsTransitionEnd() && o(t).hasClass(d)
                                ? o(t)
                                      .one(P.TRANSITION_END, function (n) {
                                          return e._destroyElement(t, n);
                                      })
                                      .emulateTransitionEnd(150)
                                : this._destroyElement(t);
                    }),
                    (e._destroyElement = function (t) {
                        o(t).detach().trigger(u.CLOSED).remove();
                    }),
                    (t._jQueryInterface = function (e) {
                        return this.each(function () {
                            var n = o(this),
                                i = n.data(l);
                            i || ((i = new t(this)), n.data(l, i)), "close" === e && i[e](this);
                        });
                    }),
                    (t._handleDismiss = function (t) {
                        return function (e) {
                            e && e.preventDefault(), t.close(this);
                        };
                    }),
                    s(t, null, [
                        {
                            key: "VERSION",
                            get: function () {
                                return "4.0.0";
                            },
                        },
                    ]),
                    t
                );
            })()),
            o(document).on(u.CLICK_DATA_API, '[data-dismiss="alert"]', g._handleDismiss(new g())),
            (o.fn[a] = g._jQueryInterface),
            (o.fn[a].Constructor = g),
            (o.fn[a].noConflict = function () {
                return (o.fn[a] = c), g._jQueryInterface;
            }),
            g),
        R =
            ((m = "button"),
            (E = "." + (v = "bs.button")),
            (T = ".data-api"),
            (y = (p = e).fn[m]),
            (C = "active"),
            (I = "btn"),
            (A = "focus"),
            (b = '[data-toggle^="button"]'),
            (D = '[data-toggle="buttons"]'),
            (S = "input"),
            (w = ".active"),
            (N = ".btn"),
            (O = { CLICK_DATA_API: "click" + E + T, FOCUS_BLUR_DATA_API: "focus" + E + T + " blur" + E + T }),
            (k = (function () {
                function t(t) {
                    this._element = t;
                }
                var e = t.prototype;
                return (
                    (e.toggle = function () {
                        var t = !0,
                            e = !0,
                            n = p(this._element).closest(D)[0];
                        if (n) {
                            var i = p(this._element).find(S)[0];
                            if (i) {
                                if ("radio" === i.type)
                                    if (i.checked && p(this._element).hasClass(C)) t = !1;
                                    else {
                                        var s = p(n).find(w)[0];
                                        s && p(s).removeClass(C);
                                    }
                                if (t) {
                                    if (i.hasAttribute("disabled") || n.hasAttribute("disabled") || i.classList.contains("disabled") || n.classList.contains("disabled")) return;
                                    (i.checked = !p(this._element).hasClass(C)), p(i).trigger("change");
                                }
                                i.focus(), (e = !1);
                            }
                        }
                        e && this._element.setAttribute("aria-pressed", !p(this._element).hasClass(C)), t && p(this._element).toggleClass(C);
                    }),
                    (e.dispose = function () {
                        p.removeData(this._element, v), (this._element = null);
                    }),
                    (t._jQueryInterface = function (e) {
                        return this.each(function () {
                            var n = p(this).data(v);
                            n || ((n = new t(this)), p(this).data(v, n)), "toggle" === e && n[e]();
                        });
                    }),
                    s(t, null, [
                        {
                            key: "VERSION",
                            get: function () {
                                return "4.0.0";
                            },
                        },
                    ]),
                    t
                );
            })()),
            p(document)
                .on(O.CLICK_DATA_API, b, function (t) {
                    t.preventDefault();
                    var e = t.target;
                    p(e).hasClass(I) || (e = p(e).closest(N)), k._jQueryInterface.call(p(e), "toggle");
                })
                .on(O.FOCUS_BLUR_DATA_API, b, function (t) {
                    var e = p(t.target).closest(N)[0];
                    p(e).toggleClass(A, /^focus(in)?$/.test(t.type));
                }),
            (p.fn[m] = k._jQueryInterface),
            (p.fn[m].Constructor = k),
            (p.fn[m].noConflict = function () {
                return (p.fn[m] = y), k._jQueryInterface;
            }),
            k),
        j = (function (t) {
            var e = "carousel",
                n = "bs.carousel",
                i = "." + n,
                o = t.fn[e],
                a = { interval: 5e3, keyboard: !0, slide: !1, pause: "hover", wrap: !0 },
                l = { interval: "(number|boolean)", keyboard: "boolean", slide: "(boolean|string)", pause: "(string|boolean)", wrap: "boolean" },
                h = "next",
                c = "prev",
                u = "left",
                f = "right",
                d = {
                    SLIDE: "slide" + i,
                    SLID: "slid" + i,
                    KEYDOWN: "keydown" + i,
                    MOUSEENTER: "mouseenter" + i,
                    MOUSELEAVE: "mouseleave" + i,
                    TOUCHEND: "touchend" + i,
                    LOAD_DATA_API: "load" + i + ".data-api",
                    CLICK_DATA_API: "click" + i + ".data-api",
                },
                _ = "carousel",
                g = "active",
                p = "slide",
                m = "carousel-item-right",
                v = "carousel-item-left",
                E = "carousel-item-next",
                T = "carousel-item-prev",
                y = {
                    ACTIVE: ".active",
                    ACTIVE_ITEM: ".active.carousel-item",
                    ITEM: ".carousel-item",
                    NEXT_PREV: ".carousel-item-next, .carousel-item-prev",
                    INDICATORS: ".carousel-indicators",
                    DATA_SLIDE: "[data-slide], [data-slide-to]",
                    DATA_RIDE: '[data-ride="carousel"]',
                },
                C = (function () {
                    function o(e, n) {
                        (this._items = null),
                            (this._interval = null),
                            (this._activeElement = null),
                            (this._isPaused = !1),
                            (this._isSliding = !1),
                            (this.touchTimeout = null),
                            (this._config = this._getConfig(n)),
                            (this._element = t(e)[0]),
                            (this._indicatorsElement = t(this._element).find(y.INDICATORS)[0]),
                            this._addEventListeners();
                    }
                    var C = o.prototype;
                    return (
                        (C.next = function () {
                            this._isSliding || this._slide(h);
                        }),
                        (C.nextWhenVisible = function () {
                            !document.hidden && t(this._element).is(":visible") && "hidden" !== t(this._element).css("visibility") && this.next();
                        }),
                        (C.prev = function () {
                            this._isSliding || this._slide(c);
                        }),
                        (C.pause = function (e) {
                            e || (this._isPaused = !0), t(this._element).find(y.NEXT_PREV)[0] && P.supportsTransitionEnd() && (P.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), (this._interval = null);
                        }),
                        (C.cycle = function (t) {
                            t || (this._isPaused = !1),
                                this._interval && (clearInterval(this._interval), (this._interval = null)),
                                this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval));
                        }),
                        (C.to = function (e) {
                            var n = this;
                            this._activeElement = t(this._element).find(y.ACTIVE_ITEM)[0];
                            var i = this._getItemIndex(this._activeElement);
                            if (!(e > this._items.length - 1 || e < 0))
                                if (this._isSliding)
                                    t(this._element).one(d.SLID, function () {
                                        return n.to(e);
                                    });
                                else {
                                    if (i === e) return this.pause(), void this.cycle();
                                    var s = e > i ? h : c;
                                    this._slide(s, this._items[e]);
                                }
                        }),
                        (C.dispose = function () {
                            t(this._element).off(i),
                                t.removeData(this._element, n),
                                (this._items = null),
                                (this._config = null),
                                (this._element = null),
                                (this._interval = null),
                                (this._isPaused = null),
                                (this._isSliding = null),
                                (this._activeElement = null),
                                (this._indicatorsElement = null);
                        }),
                        (C._getConfig = function (t) {
                            return (t = r({}, a, t)), P.typeCheckConfig(e, t, l), t;
                        }),
                        (C._addEventListeners = function () {
                            var e = this;
                            this._config.keyboard &&
                                t(this._element).on(d.KEYDOWN, function (t) {
                                    return e._keydown(t);
                                }),
                                "hover" === this._config.pause &&
                                    (t(this._element)
                                        .on(d.MOUSEENTER, function (t) {
                                            return e.pause(t);
                                        })
                                        .on(d.MOUSELEAVE, function (t) {
                                            return e.cycle(t);
                                        }),
                                    "ontouchstart" in document.documentElement &&
                                        t(this._element).on(d.TOUCHEND, function () {
                                            e.pause(),
                                                e.touchTimeout && clearTimeout(e.touchTimeout),
                                                (e.touchTimeout = setTimeout(function (t) {
                                                    return e.cycle(t);
                                                }, 500 + e._config.interval));
                                        }));
                        }),
                        (C._keydown = function (t) {
                            if (!/input|textarea/i.test(t.target.tagName))
                                switch (t.which) {
                                    case 37:
                                        t.preventDefault(), this.prev();
                                        break;
                                    case 39:
                                        t.preventDefault(), this.next();
                                }
                        }),
                        (C._getItemIndex = function (e) {
                            return (this._items = t.makeArray(t(e).parent().find(y.ITEM))), this._items.indexOf(e);
                        }),
                        (C._getItemByDirection = function (t, e) {
                            var n = t === h,
                                i = t === c,
                                s = this._getItemIndex(e),
                                r = this._items.length - 1;
                            if (((i && 0 === s) || (n && s === r)) && !this._config.wrap) return e;
                            var o = (s + (t === c ? -1 : 1)) % this._items.length;
                            return -1 === o ? this._items[this._items.length - 1] : this._items[o];
                        }),
                        (C._triggerSlideEvent = function (e, n) {
                            var i = this._getItemIndex(e),
                                s = this._getItemIndex(t(this._element).find(y.ACTIVE_ITEM)[0]),
                                r = t.Event(d.SLIDE, { relatedTarget: e, direction: n, from: s, to: i });
                            return t(this._element).trigger(r), r;
                        }),
                        (C._setActiveIndicatorElement = function (e) {
                            if (this._indicatorsElement) {
                                t(this._indicatorsElement).find(y.ACTIVE).removeClass(g);
                                var n = this._indicatorsElement.children[this._getItemIndex(e)];
                                n && t(n).addClass(g);
                            }
                        }),
                        (C._slide = function (e, n) {
                            var i,
                                s,
                                r,
                                o = this,
                                a = t(this._element).find(y.ACTIVE_ITEM)[0],
                                l = this._getItemIndex(a),
                                c = n || (a && this._getItemByDirection(e, a)),
                                _ = this._getItemIndex(c),
                                C = Boolean(this._interval);
                            if ((e === h ? ((i = v), (s = E), (r = u)) : ((i = m), (s = T), (r = f)), c && t(c).hasClass(g))) this._isSliding = !1;
                            else if (!this._triggerSlideEvent(c, r).isDefaultPrevented() && a && c) {
                                (this._isSliding = !0), C && this.pause(), this._setActiveIndicatorElement(c);
                                var I = t.Event(d.SLID, { relatedTarget: c, direction: r, from: l, to: _ });
                                P.supportsTransitionEnd() && t(this._element).hasClass(p)
                                    ? (t(c).addClass(s),
                                      P.reflow(c),
                                      t(a).addClass(i),
                                      t(c).addClass(i),
                                      t(a)
                                          .one(P.TRANSITION_END, function () {
                                              t(c)
                                                  .removeClass(i + " " + s)
                                                  .addClass(g),
                                                  t(a).removeClass(g + " " + s + " " + i),
                                                  (o._isSliding = !1),
                                                  setTimeout(function () {
                                                      return t(o._element).trigger(I);
                                                  }, 0);
                                          })
                                          .emulateTransitionEnd(600))
                                    : (t(a).removeClass(g), t(c).addClass(g), (this._isSliding = !1), t(this._element).trigger(I)),
                                    C && this.cycle();
                            }
                        }),
                        (o._jQueryInterface = function (e) {
                            return this.each(function () {
                                var i = t(this).data(n),
                                    s = r({}, a, t(this).data());
                                "object" == typeof e && (s = r({}, s, e));
                                var l = "string" == typeof e ? e : s.slide;
                                if ((i || ((i = new o(this, s)), t(this).data(n, i)), "number" == typeof e)) i.to(e);
                                else if ("string" == typeof l) {
                                    if ("undefined" == typeof i[l]) throw new TypeError('No method named "' + l + '"');
                                    i[l]();
                                } else s.interval && (i.pause(), i.cycle());
                            });
                        }),
                        (o._dataApiClickHandler = function (e) {
                            var i = P.getSelectorFromElement(this);
                            if (i) {
                                var s = t(i)[0];
                                if (s && t(s).hasClass(_)) {
                                    var a = r({}, t(s).data(), t(this).data()),
                                        l = this.getAttribute("data-slide-to");
                                    l && (a.interval = !1), o._jQueryInterface.call(t(s), a), l && t(s).data(n).to(l), e.preventDefault();
                                }
                            }
                        }),
                        s(o, null, [
                            {
                                key: "VERSION",
                                get: function () {
                                    return "4.0.0";
                                },
                            },
                            {
                                key: "Default",
                                get: function () {
                                    return a;
                                },
                            },
                        ]),
                        o
                    );
                })();
            return (
                t(document).on(d.CLICK_DATA_API, y.DATA_SLIDE, C._dataApiClickHandler),
                t(window).on(d.LOAD_DATA_API, function () {
                    t(y.DATA_RIDE).each(function () {
                        var e = t(this);
                        C._jQueryInterface.call(e, e.data());
                    });
                }),
                (t.fn[e] = C._jQueryInterface),
                (t.fn[e].Constructor = C),
                (t.fn[e].noConflict = function () {
                    return (t.fn[e] = o), C._jQueryInterface;
                }),
                C
            );
        })(e),
        H = (function (t) {
            var e = "collapse",
                n = "bs.collapse",
                i = "." + n,
                o = t.fn[e],
                a = { toggle: !0, parent: "" },
                l = { toggle: "boolean", parent: "(string|element)" },
                h = { SHOW: "show" + i, SHOWN: "shown" + i, HIDE: "hide" + i, HIDDEN: "hidden" + i, CLICK_DATA_API: "click" + i + ".data-api" },
                c = "show",
                u = "collapse",
                f = "collapsing",
                d = "collapsed",
                _ = "width",
                g = "height",
                p = { ACTIVES: ".show, .collapsing", DATA_TOGGLE: '[data-toggle="collapse"]' },
                m = (function () {
                    function i(e, n) {
                        (this._isTransitioning = !1),
                            (this._element = e),
                            (this._config = this._getConfig(n)),
                            (this._triggerArray = t.makeArray(t('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]')));
                        for (var i = t(p.DATA_TOGGLE), s = 0; s < i.length; s++) {
                            var r = i[s],
                                o = P.getSelectorFromElement(r);
                            null !== o && t(o).filter(e).length > 0 && ((this._selector = o), this._triggerArray.push(r));
                        }
                        (this._parent = this._config.parent ? this._getParent() : null), this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle();
                    }
                    var o = i.prototype;
                    return (
                        (o.toggle = function () {
                            t(this._element).hasClass(c) ? this.hide() : this.show();
                        }),
                        (o.show = function () {
                            var e,
                                s,
                                r = this;
                            if (
                                !this._isTransitioning &&
                                !t(this._element).hasClass(c) &&
                                (this._parent &&
                                    0 ===
                                        (e = t.makeArray(
                                            t(this._parent)
                                                .find(p.ACTIVES)
                                                .filter('[data-parent="' + this._config.parent + '"]')
                                        )).length &&
                                    (e = null),
                                !(e && (s = t(e).not(this._selector).data(n)) && s._isTransitioning))
                            ) {
                                var o = t.Event(h.SHOW);
                                if ((t(this._element).trigger(o), !o.isDefaultPrevented())) {
                                    e && (i._jQueryInterface.call(t(e).not(this._selector), "hide"), s || t(e).data(n, null));
                                    var a = this._getDimension();
                                    t(this._element).removeClass(u).addClass(f), (this._element.style[a] = 0), this._triggerArray.length > 0 && t(this._triggerArray).removeClass(d).attr("aria-expanded", !0), this.setTransitioning(!0);
                                    var l = function () {
                                        t(r._element).removeClass(f).addClass(u).addClass(c), (r._element.style[a] = ""), r.setTransitioning(!1), t(r._element).trigger(h.SHOWN);
                                    };
                                    if (P.supportsTransitionEnd()) {
                                        var _ = "scroll" + (a[0].toUpperCase() + a.slice(1));
                                        t(this._element).one(P.TRANSITION_END, l).emulateTransitionEnd(600), (this._element.style[a] = this._element[_] + "px");
                                    } else l();
                                }
                            }
                        }),
                        (o.hide = function () {
                            var e = this;
                            if (!this._isTransitioning && t(this._element).hasClass(c)) {
                                var n = t.Event(h.HIDE);
                                if ((t(this._element).trigger(n), !n.isDefaultPrevented())) {
                                    var i = this._getDimension();
                                    if (((this._element.style[i] = this._element.getBoundingClientRect()[i] + "px"), P.reflow(this._element), t(this._element).addClass(f).removeClass(u).removeClass(c), this._triggerArray.length > 0))
                                        for (var s = 0; s < this._triggerArray.length; s++) {
                                            var r = this._triggerArray[s],
                                                o = P.getSelectorFromElement(r);
                                            if (null !== o) t(o).hasClass(c) || t(r).addClass(d).attr("aria-expanded", !1);
                                        }
                                    this.setTransitioning(!0);
                                    var a = function () {
                                        e.setTransitioning(!1), t(e._element).removeClass(f).addClass(u).trigger(h.HIDDEN);
                                    };
                                    (this._element.style[i] = ""), P.supportsTransitionEnd() ? t(this._element).one(P.TRANSITION_END, a).emulateTransitionEnd(600) : a();
                                }
                            }
                        }),
                        (o.setTransitioning = function (t) {
                            this._isTransitioning = t;
                        }),
                        (o.dispose = function () {
                            t.removeData(this._element, n), (this._config = null), (this._parent = null), (this._element = null), (this._triggerArray = null), (this._isTransitioning = null);
                        }),
                        (o._getConfig = function (t) {
                            return ((t = r({}, a, t)).toggle = Boolean(t.toggle)), P.typeCheckConfig(e, t, l), t;
                        }),
                        (o._getDimension = function () {
                            return t(this._element).hasClass(_) ? _ : g;
                        }),
                        (o._getParent = function () {
                            var e = this,
                                n = null;
                            P.isElement(this._config.parent) ? ((n = this._config.parent), "undefined" != typeof this._config.parent.jquery && (n = this._config.parent[0])) : (n = t(this._config.parent)[0]);
                            var s = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]';
                            return (
                                t(n)
                                    .find(s)
                                    .each(function (t, n) {
                                        e._addAriaAndCollapsedClass(i._getTargetFromElement(n), [n]);
                                    }),
                                n
                            );
                        }),
                        (o._addAriaAndCollapsedClass = function (e, n) {
                            if (e) {
                                var i = t(e).hasClass(c);
                                n.length > 0 && t(n).toggleClass(d, !i).attr("aria-expanded", i);
                            }
                        }),
                        (i._getTargetFromElement = function (e) {
                            var n = P.getSelectorFromElement(e);
                            return n ? t(n)[0] : null;
                        }),
                        (i._jQueryInterface = function (e) {
                            return this.each(function () {
                                var s = t(this),
                                    o = s.data(n),
                                    l = r({}, a, s.data(), "object" == typeof e && e);
                                if ((!o && l.toggle && /show|hide/.test(e) && (l.toggle = !1), o || ((o = new i(this, l)), s.data(n, o)), "string" == typeof e)) {
                                    if ("undefined" == typeof o[e]) throw new TypeError('No method named "' + e + '"');
                                    o[e]();
                                }
                            });
                        }),
                        s(i, null, [
                            {
                                key: "VERSION",
                                get: function () {
                                    return "4.0.0";
                                },
                            },
                            {
                                key: "Default",
                                get: function () {
                                    return a;
                                },
                            },
                        ]),
                        i
                    );
                })();
            return (
                t(document).on(h.CLICK_DATA_API, p.DATA_TOGGLE, function (e) {
                    "A" === e.currentTarget.tagName && e.preventDefault();
                    var i = t(this),
                        s = P.getSelectorFromElement(this);
                    t(s).each(function () {
                        var e = t(this),
                            s = e.data(n) ? "toggle" : i.data();
                        m._jQueryInterface.call(e, s);
                    });
                }),
                (t.fn[e] = m._jQueryInterface),
                (t.fn[e].Constructor = m),
                (t.fn[e].noConflict = function () {
                    return (t.fn[e] = o), m._jQueryInterface;
                }),
                m
            );
        })(e),
        W = (function (t) {
            var e = "dropdown",
                i = "bs.dropdown",
                o = "." + i,
                a = ".data-api",
                l = t.fn[e],
                h = new RegExp("38|40|27"),
                c = { HIDE: "hide" + o, HIDDEN: "hidden" + o, SHOW: "show" + o, SHOWN: "shown" + o, CLICK: "click" + o, CLICK_DATA_API: "click" + o + a, KEYDOWN_DATA_API: "keydown" + o + a, KEYUP_DATA_API: "keyup" + o + a },
                u = "disabled",
                f = "show",
                d = "dropup",
                _ = "dropright",
                g = "dropleft",
                p = "dropdown-menu-right",
                m = "dropdown-menu-left",
                v = "position-static",
                E = '[data-toggle="dropdown"]',
                T = ".dropdown form",
                y = ".dropdown-menu",
                C = ".navbar-nav",
                I = ".dropdown-menu .dropdown-item:not(.disabled)",
                A = "top-start",
                b = "top-end",
                D = "bottom-start",
                S = "bottom-end",
                w = "right-start",
                N = "left-start",
                O = { offset: 0, flip: !0, boundary: "scrollParent" },
                k = { offset: "(number|string|function)", flip: "boolean", boundary: "(string|element)" },
                L = (function () {
                    function a(t, e) {
                        (this._element = t), (this._popper = null), (this._config = this._getConfig(e)), (this._menu = this._getMenuElement()), (this._inNavbar = this._detectNavbar()), this._addEventListeners();
                    }
                    var l = a.prototype;
                    return (
                        (l.toggle = function () {
                            if (!this._element.disabled && !t(this._element).hasClass(u)) {
                                var e = a._getParentFromElement(this._element),
                                    i = t(this._menu).hasClass(f);
                                if ((a._clearMenus(), !i)) {
                                    var s = { relatedTarget: this._element },
                                        r = t.Event(c.SHOW, s);
                                    if ((t(e).trigger(r), !r.isDefaultPrevented())) {
                                        if (!this._inNavbar) {
                                            if ("undefined" == typeof n) throw new TypeError("Bootstrap dropdown require Popper.js (https://popper.js.org)");
                                            var o = this._element;
                                            t(e).hasClass(d) && (t(this._menu).hasClass(m) || t(this._menu).hasClass(p)) && (o = e),
                                                "scrollParent" !== this._config.boundary && t(e).addClass(v),
                                                (this._popper = new n(o, this._menu, this._getPopperConfig()));
                                        }
                                        "ontouchstart" in document.documentElement && 0 === t(e).closest(C).length && t("body").children().on("mouseover", null, t.noop),
                                            this._element.focus(),
                                            this._element.setAttribute("aria-expanded", !0),
                                            t(this._menu).toggleClass(f),
                                            t(e).toggleClass(f).trigger(t.Event(c.SHOWN, s));
                                    }
                                }
                            }
                        }),
                        (l.dispose = function () {
                            t.removeData(this._element, i), t(this._element).off(o), (this._element = null), (this._menu = null), null !== this._popper && (this._popper.destroy(), (this._popper = null));
                        }),
                        (l.update = function () {
                            (this._inNavbar = this._detectNavbar()), null !== this._popper && this._popper.scheduleUpdate();
                        }),
                        (l._addEventListeners = function () {
                            var e = this;
                            t(this._element).on(c.CLICK, function (t) {
                                t.preventDefault(), t.stopPropagation(), e.toggle();
                            });
                        }),
                        (l._getConfig = function (n) {
                            return (n = r({}, this.constructor.Default, t(this._element).data(), n)), P.typeCheckConfig(e, n, this.constructor.DefaultType), n;
                        }),
                        (l._getMenuElement = function () {
                            if (!this._menu) {
                                var e = a._getParentFromElement(this._element);
                                this._menu = t(e).find(y)[0];
                            }
                            return this._menu;
                        }),
                        (l._getPlacement = function () {
                            var e = t(this._element).parent(),
                                n = D;
                            return e.hasClass(d) ? ((n = A), t(this._menu).hasClass(p) && (n = b)) : e.hasClass(_) ? (n = w) : e.hasClass(g) ? (n = N) : t(this._menu).hasClass(p) && (n = S), n;
                        }),
                        (l._detectNavbar = function () {
                            return t(this._element).closest(".navbar").length > 0;
                        }),
                        (l._getPopperConfig = function () {
                            var t = this,
                                e = {};
                            return (
                                "function" == typeof this._config.offset
                                    ? (e.fn = function (e) {
                                          return (e.offsets = r({}, e.offsets, t._config.offset(e.offsets) || {})), e;
                                      })
                                    : (e.offset = this._config.offset),
                                { placement: this._getPlacement(), modifiers: { offset: e, flip: { enabled: this._config.flip }, preventOverflow: { boundariesElement: this._config.boundary } } }
                            );
                        }),
                        (a._jQueryInterface = function (e) {
                            return this.each(function () {
                                var n = t(this).data(i);
                                if ((n || ((n = new a(this, "object" == typeof e ? e : null)), t(this).data(i, n)), "string" == typeof e)) {
                                    if ("undefined" == typeof n[e]) throw new TypeError('No method named "' + e + '"');
                                    n[e]();
                                }
                            });
                        }),
                        (a._clearMenus = function (e) {
                            if (!e || (3 !== e.which && ("keyup" !== e.type || 9 === e.which)))
                                for (var n = t.makeArray(t(E)), s = 0; s < n.length; s++) {
                                    var r = a._getParentFromElement(n[s]),
                                        o = t(n[s]).data(i),
                                        l = { relatedTarget: n[s] };
                                    if (o) {
                                        var h = o._menu;
                                        if (t(r).hasClass(f) && !(e && (("click" === e.type && /input|textarea/i.test(e.target.tagName)) || ("keyup" === e.type && 9 === e.which)) && t.contains(r, e.target))) {
                                            var u = t.Event(c.HIDE, l);
                                            t(r).trigger(u),
                                                u.isDefaultPrevented() ||
                                                    ("ontouchstart" in document.documentElement && t("body").children().off("mouseover", null, t.noop),
                                                    n[s].setAttribute("aria-expanded", "false"),
                                                    t(h).removeClass(f),
                                                    t(r).removeClass(f).trigger(t.Event(c.HIDDEN, l)));
                                        }
                                    }
                                }
                        }),
                        (a._getParentFromElement = function (e) {
                            var n,
                                i = P.getSelectorFromElement(e);
                            return i && (n = t(i)[0]), n || e.parentNode;
                        }),
                        (a._dataApiKeydownHandler = function (e) {
                            if (
                                (/input|textarea/i.test(e.target.tagName) ? !(32 === e.which || (27 !== e.which && ((40 !== e.which && 38 !== e.which) || t(e.target).closest(y).length))) : h.test(e.which)) &&
                                (e.preventDefault(), e.stopPropagation(), !this.disabled && !t(this).hasClass(u))
                            ) {
                                var n = a._getParentFromElement(this),
                                    i = t(n).hasClass(f);
                                if ((i || (27 === e.which && 32 === e.which)) && (!i || (27 !== e.which && 32 !== e.which))) {
                                    var s = t(n).find(I).get();
                                    if (0 !== s.length) {
                                        var r = s.indexOf(e.target);
                                        38 === e.which && r > 0 && r--, 40 === e.which && r < s.length - 1 && r++, r < 0 && (r = 0), s[r].focus();
                                    }
                                } else {
                                    if (27 === e.which) {
                                        var o = t(n).find(E)[0];
                                        t(o).trigger("focus");
                                    }
                                    t(this).trigger("click");
                                }
                            }
                        }),
                        s(a, null, [
                            {
                                key: "VERSION",
                                get: function () {
                                    return "4.0.0";
                                },
                            },
                            {
                                key: "Default",
                                get: function () {
                                    return O;
                                },
                            },
                            {
                                key: "DefaultType",
                                get: function () {
                                    return k;
                                },
                            },
                        ]),
                        a
                    );
                })();
            return (
                t(document)
                    .on(c.KEYDOWN_DATA_API, E, L._dataApiKeydownHandler)
                    .on(c.KEYDOWN_DATA_API, y, L._dataApiKeydownHandler)
                    .on(c.CLICK_DATA_API + " " + c.KEYUP_DATA_API, L._clearMenus)
                    .on(c.CLICK_DATA_API, E, function (e) {
                        e.preventDefault(), e.stopPropagation(), L._jQueryInterface.call(t(this), "toggle");
                    })
                    .on(c.CLICK_DATA_API, T, function (t) {
                        t.stopPropagation();
                    }),
                (t.fn[e] = L._jQueryInterface),
                (t.fn[e].Constructor = L),
                (t.fn[e].noConflict = function () {
                    return (t.fn[e] = l), L._jQueryInterface;
                }),
                L
            );
        })(e),
        M = (function (t) {
            var e = "modal",
                n = "bs.modal",
                i = "." + n,
                o = t.fn.modal,
                a = { backdrop: !0, keyboard: !0, focus: !0, show: !0 },
                l = { backdrop: "(boolean|string)", keyboard: "boolean", focus: "boolean", show: "boolean" },
                h = {
                    HIDE: "hide" + i,
                    HIDDEN: "hidden" + i,
                    SHOW: "show" + i,
                    SHOWN: "shown" + i,
                    FOCUSIN: "focusin" + i,
                    RESIZE: "resize" + i,
                    CLICK_DISMISS: "click.dismiss" + i,
                    KEYDOWN_DISMISS: "keydown.dismiss" + i,
                    MOUSEUP_DISMISS: "mouseup.dismiss" + i,
                    MOUSEDOWN_DISMISS: "mousedown.dismiss" + i,
                    CLICK_DATA_API: "click" + i + ".data-api",
                },
                c = "modal-scrollbar-measure",
                u = "modal-backdrop",
                f = "modal-open",
                d = "fade",
                _ = "show",
                g = {
                    DIALOG: ".modal-dialog",
                    DATA_TOGGLE: '[data-toggle="modal"]',
                    DATA_DISMISS: '[data-dismiss="modal"]',
                    FIXED_CONTENT: ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
                    STICKY_CONTENT: ".sticky-top",
                    NAVBAR_TOGGLER: ".navbar-toggler",
                },
                p = (function () {
                    function o(e, n) {
                        (this._config = this._getConfig(n)),
                            (this._element = e),
                            (this._dialog = t(e).find(g.DIALOG)[0]),
                            (this._backdrop = null),
                            (this._isShown = !1),
                            (this._isBodyOverflowing = !1),
                            (this._ignoreBackdropClick = !1),
                            (this._originalBodyPadding = 0),
                            (this._scrollbarWidth = 0);
                    }
                    var p = o.prototype;
                    return (
                        (p.toggle = function (t) {
                            return this._isShown ? this.hide() : this.show(t);
                        }),
                        (p.show = function (e) {
                            var n = this;
                            if (!this._isTransitioning && !this._isShown) {
                                P.supportsTransitionEnd() && t(this._element).hasClass(d) && (this._isTransitioning = !0);
                                var i = t.Event(h.SHOW, { relatedTarget: e });
                                t(this._element).trigger(i),
                                    this._isShown ||
                                        i.isDefaultPrevented() ||
                                        ((this._isShown = !0),
                                        this._checkScrollbar(),
                                        this._setScrollbar(),
                                        this._adjustDialog(),
                                        t(document.body).addClass(f),
                                        this._setEscapeEvent(),
                                        this._setResizeEvent(),
                                        t(this._element).on(h.CLICK_DISMISS, g.DATA_DISMISS, function (t) {
                                            return n.hide(t);
                                        }),
                                        t(this._dialog).on(h.MOUSEDOWN_DISMISS, function () {
                                            t(n._element).one(h.MOUSEUP_DISMISS, function (e) {
                                                t(e.target).is(n._element) && (n._ignoreBackdropClick = !0);
                                            });
                                        }),
                                        this._showBackdrop(function () {
                                            return n._showElement(e);
                                        }));
                            }
                        }),
                        (p.hide = function (e) {
                            var n = this;
                            if ((e && e.preventDefault(), !this._isTransitioning && this._isShown)) {
                                var i = t.Event(h.HIDE);
                                if ((t(this._element).trigger(i), this._isShown && !i.isDefaultPrevented())) {
                                    this._isShown = !1;
                                    var s = P.supportsTransitionEnd() && t(this._element).hasClass(d);
                                    s && (this._isTransitioning = !0),
                                        this._setEscapeEvent(),
                                        this._setResizeEvent(),
                                        t(document).off(h.FOCUSIN),
                                        t(this._element).removeClass(_),
                                        t(this._element).off(h.CLICK_DISMISS),
                                        t(this._dialog).off(h.MOUSEDOWN_DISMISS),
                                        s
                                            ? t(this._element)
                                                  .one(P.TRANSITION_END, function (t) {
                                                      return n._hideModal(t);
                                                  })
                                                  .emulateTransitionEnd(300)
                                            : this._hideModal();
                                }
                            }
                        }),
                        (p.dispose = function () {
                            t.removeData(this._element, n),
                                t(window, document, this._element, this._backdrop).off(i),
                                (this._config = null),
                                (this._element = null),
                                (this._dialog = null),
                                (this._backdrop = null),
                                (this._isShown = null),
                                (this._isBodyOverflowing = null),
                                (this._ignoreBackdropClick = null),
                                (this._scrollbarWidth = null);
                        }),
                        (p.handleUpdate = function () {
                            this._adjustDialog();
                        }),
                        (p._getConfig = function (t) {
                            return (t = r({}, a, t)), P.typeCheckConfig(e, t, l), t;
                        }),
                        (p._showElement = function (e) {
                            var n = this,
                                i = P.supportsTransitionEnd() && t(this._element).hasClass(d);
                            (this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE) || document.body.appendChild(this._element),
                                (this._element.style.display = "block"),
                                this._element.removeAttribute("aria-hidden"),
                                (this._element.scrollTop = 0),
                                i && P.reflow(this._element),
                                t(this._element).addClass(_),
                                this._config.focus && this._enforceFocus();
                            var s = t.Event(h.SHOWN, { relatedTarget: e }),
                                r = function () {
                                    n._config.focus && n._element.focus(), (n._isTransitioning = !1), t(n._element).trigger(s);
                                };
                            i ? t(this._dialog).one(P.TRANSITION_END, r).emulateTransitionEnd(300) : r();
                        }),
                        (p._enforceFocus = function () {
                            var e = this;
                            t(document)
                                .off(h.FOCUSIN)
                                .on(h.FOCUSIN, function (n) {
                                    document !== n.target && e._element !== n.target && 0 === t(e._element).has(n.target).length && e._element.focus();
                                });
                        }),
                        (p._setEscapeEvent = function () {
                            var e = this;
                            this._isShown && this._config.keyboard
                                ? t(this._element).on(h.KEYDOWN_DISMISS, function (t) {
                                      27 === t.which && (t.preventDefault(), e.hide());
                                  })
                                : this._isShown || t(this._element).off(h.KEYDOWN_DISMISS);
                        }),
                        (p._setResizeEvent = function () {
                            var e = this;
                            this._isShown
                                ? t(window).on(h.RESIZE, function (t) {
                                      return e.handleUpdate(t);
                                  })
                                : t(window).off(h.RESIZE);
                        }),
                        (p._hideModal = function () {
                            var e = this;
                            (this._element.style.display = "none"),
                                this._element.setAttribute("aria-hidden", !0),
                                (this._isTransitioning = !1),
                                this._showBackdrop(function () {
                                    t(document.body).removeClass(f), e._resetAdjustments(), e._resetScrollbar(), t(e._element).trigger(h.HIDDEN);
                                });
                        }),
                        (p._removeBackdrop = function () {
                            this._backdrop && (t(this._backdrop).remove(), (this._backdrop = null));
                        }),
                        (p._showBackdrop = function (e) {
                            var n = this,
                                i = t(this._element).hasClass(d) ? d : "";
                            if (this._isShown && this._config.backdrop) {
                                var s = P.supportsTransitionEnd() && i;
                                if (
                                    ((this._backdrop = document.createElement("div")),
                                    (this._backdrop.className = u),
                                    i && t(this._backdrop).addClass(i),
                                    t(this._backdrop).appendTo(document.body),
                                    t(this._element).on(h.CLICK_DISMISS, function (t) {
                                        n._ignoreBackdropClick ? (n._ignoreBackdropClick = !1) : t.target === t.currentTarget && ("static" === n._config.backdrop ? n._element.focus() : n.hide());
                                    }),
                                    s && P.reflow(this._backdrop),
                                    t(this._backdrop).addClass(_),
                                    !e)
                                )
                                    return;
                                if (!s) return void e();
                                t(this._backdrop).one(P.TRANSITION_END, e).emulateTransitionEnd(150);
                            } else if (!this._isShown && this._backdrop) {
                                t(this._backdrop).removeClass(_);
                                var r = function () {
                                    n._removeBackdrop(), e && e();
                                };
                                P.supportsTransitionEnd() && t(this._element).hasClass(d) ? t(this._backdrop).one(P.TRANSITION_END, r).emulateTransitionEnd(150) : r();
                            } else e && e();
                        }),
                        (p._adjustDialog = function () {
                            var t = this._element.scrollHeight > document.documentElement.clientHeight;
                            !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px");
                        }),
                        (p._resetAdjustments = function () {
                            (this._element.style.paddingLeft = ""), (this._element.style.paddingRight = "");
                        }),
                        (p._checkScrollbar = function () {
                            var t = document.body.getBoundingClientRect();
                            (this._isBodyOverflowing = t.left + t.right < window.innerWidth), (this._scrollbarWidth = this._getScrollbarWidth());
                        }),
                        (p._setScrollbar = function () {
                            var e = this;
                            if (this._isBodyOverflowing) {
                                t(g.FIXED_CONTENT).each(function (n, i) {
                                    var s = t(i)[0].style.paddingRight,
                                        r = t(i).css("padding-right");
                                    t(i)
                                        .data("padding-right", s)
                                        .css("padding-right", parseFloat(r) + e._scrollbarWidth + "px");
                                }),
                                    t(g.STICKY_CONTENT).each(function (n, i) {
                                        var s = t(i)[0].style.marginRight,
                                            r = t(i).css("margin-right");
                                        t(i)
                                            .data("margin-right", s)
                                            .css("margin-right", parseFloat(r) - e._scrollbarWidth + "px");
                                    }),
                                    t(g.NAVBAR_TOGGLER).each(function (n, i) {
                                        var s = t(i)[0].style.marginRight,
                                            r = t(i).css("margin-right");
                                        t(i)
                                            .data("margin-right", s)
                                            .css("margin-right", parseFloat(r) + e._scrollbarWidth + "px");
                                    });
                                var n = document.body.style.paddingRight,
                                    i = t("body").css("padding-right");
                                t("body")
                                    .data("padding-right", n)
                                    .css("padding-right", parseFloat(i) + this._scrollbarWidth + "px");
                            }
                        }),
                        (p._resetScrollbar = function () {
                            t(g.FIXED_CONTENT).each(function (e, n) {
                                var i = t(n).data("padding-right");
                                "undefined" != typeof i && t(n).css("padding-right", i).removeData("padding-right");
                            }),
                                t(g.STICKY_CONTENT + ", " + g.NAVBAR_TOGGLER).each(function (e, n) {
                                    var i = t(n).data("margin-right");
                                    "undefined" != typeof i && t(n).css("margin-right", i).removeData("margin-right");
                                });
                            var e = t("body").data("padding-right");
                            "undefined" != typeof e && t("body").css("padding-right", e).removeData("padding-right");
                        }),
                        (p._getScrollbarWidth = function () {
                            var t = document.createElement("div");
                            (t.className = c), document.body.appendChild(t);
                            var e = t.getBoundingClientRect().width - t.clientWidth;
                            return document.body.removeChild(t), e;
                        }),
                        (o._jQueryInterface = function (e, i) {
                            return this.each(function () {
                                var s = t(this).data(n),
                                    a = r({}, o.Default, t(this).data(), "object" == typeof e && e);
                                if ((s || ((s = new o(this, a)), t(this).data(n, s)), "string" == typeof e)) {
                                    if ("undefined" == typeof s[e]) throw new TypeError('No method named "' + e + '"');
                                    s[e](i);
                                } else a.show && s.show(i);
                            });
                        }),
                        s(o, null, [
                            {
                                key: "VERSION",
                                get: function () {
                                    return "4.0.0";
                                },
                            },
                            {
                                key: "Default",
                                get: function () {
                                    return a;
                                },
                            },
                        ]),
                        o
                    );
                })();
            return (
                t(document).on(h.CLICK_DATA_API, g.DATA_TOGGLE, function (e) {
                    var i,
                        s = this,
                        o = P.getSelectorFromElement(this);
                    o && (i = t(o)[0]);
                    var a = t(i).data(n) ? "toggle" : r({}, t(i).data(), t(this).data());
                    ("A" !== this.tagName && "AREA" !== this.tagName) || e.preventDefault();
                    var l = t(i).one(h.SHOW, function (e) {
                        e.isDefaultPrevented() ||
                            l.one(h.HIDDEN, function () {
                                t(s).is(":visible") && s.focus();
                            });
                    });
                    p._jQueryInterface.call(t(i), a, this);
                }),
                (t.fn.modal = p._jQueryInterface),
                (t.fn.modal.Constructor = p),
                (t.fn.modal.noConflict = function () {
                    return (t.fn.modal = o), p._jQueryInterface;
                }),
                p
            );
        })(e),
        U = (function (t) {
            var e = "tooltip",
                i = "bs.tooltip",
                o = "." + i,
                a = t.fn[e],
                l = new RegExp("(^|\\s)bs-tooltip\\S+", "g"),
                h = {
                    animation: "boolean",
                    template: "string",
                    title: "(string|element|function)",
                    trigger: "string",
                    delay: "(number|object)",
                    html: "boolean",
                    selector: "(string|boolean)",
                    placement: "(string|function)",
                    offset: "(number|string)",
                    container: "(string|element|boolean)",
                    fallbackPlacement: "(string|array)",
                    boundary: "(string|element)",
                },
                c = { AUTO: "auto", TOP: "top", RIGHT: "right", BOTTOM: "bottom", LEFT: "left" },
                u = {
                    animation: !0,
                    template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
                    trigger: "hover focus",
                    title: "",
                    delay: 0,
                    html: !1,
                    selector: !1,
                    placement: "top",
                    offset: 0,
                    container: !1,
                    fallbackPlacement: "flip",
                    boundary: "scrollParent",
                },
                f = "show",
                d = "out",
                _ = {
                    HIDE: "hide" + o,
                    HIDDEN: "hidden" + o,
                    SHOW: "show" + o,
                    SHOWN: "shown" + o,
                    INSERTED: "inserted" + o,
                    CLICK: "click" + o,
                    FOCUSIN: "focusin" + o,
                    FOCUSOUT: "focusout" + o,
                    MOUSEENTER: "mouseenter" + o,
                    MOUSELEAVE: "mouseleave" + o,
                },
                g = "fade",
                p = "show",
                m = ".tooltip-inner",
                v = ".arrow",
                E = "hover",
                T = "focus",
                y = "click",
                C = "manual",
                I = (function () {
                    function a(t, e) {
                        if ("undefined" == typeof n) throw new TypeError("Bootstrap tooltips require Popper.js (https://popper.js.org)");
                        (this._isEnabled = !0),
                            (this._timeout = 0),
                            (this._hoverState = ""),
                            (this._activeTrigger = {}),
                            (this._popper = null),
                            (this.element = t),
                            (this.config = this._getConfig(e)),
                            (this.tip = null),
                            this._setListeners();
                    }
                    var I = a.prototype;
                    return (
                        (I.enable = function () {
                            this._isEnabled = !0;
                        }),
                        (I.disable = function () {
                            this._isEnabled = !1;
                        }),
                        (I.toggleEnabled = function () {
                            this._isEnabled = !this._isEnabled;
                        }),
                        (I.toggle = function (e) {
                            if (this._isEnabled)
                                if (e) {
                                    var n = this.constructor.DATA_KEY,
                                        i = t(e.currentTarget).data(n);
                                    i || ((i = new this.constructor(e.currentTarget, this._getDelegateConfig())), t(e.currentTarget).data(n, i)),
                                        (i._activeTrigger.click = !i._activeTrigger.click),
                                        i._isWithActiveTrigger() ? i._enter(null, i) : i._leave(null, i);
                                } else {
                                    if (t(this.getTipElement()).hasClass(p)) return void this._leave(null, this);
                                    this._enter(null, this);
                                }
                        }),
                        (I.dispose = function () {
                            clearTimeout(this._timeout),
                                t.removeData(this.element, this.constructor.DATA_KEY),
                                t(this.element).off(this.constructor.EVENT_KEY),
                                t(this.element).closest(".modal").off("hide.bs.modal"),
                                this.tip && t(this.tip).remove(),
                                (this._isEnabled = null),
                                (this._timeout = null),
                                (this._hoverState = null),
                                (this._activeTrigger = null),
                                null !== this._popper && this._popper.destroy(),
                                (this._popper = null),
                                (this.element = null),
                                (this.config = null),
                                (this.tip = null);
                        }),
                        (I.show = function () {
                            var e = this;
                            if ("none" === t(this.element).css("display")) throw new Error("Please use show on visible elements");
                            var i = t.Event(this.constructor.Event.SHOW);
                            if (this.isWithContent() && this._isEnabled) {
                                t(this.element).trigger(i);
                                var s = t.contains(this.element.ownerDocument.documentElement, this.element);
                                if (i.isDefaultPrevented() || !s) return;
                                var r = this.getTipElement(),
                                    o = P.getUID(this.constructor.NAME);
                                r.setAttribute("id", o), this.element.setAttribute("aria-describedby", o), this.setContent(), this.config.animation && t(r).addClass(g);
                                var l = "function" == typeof this.config.placement ? this.config.placement.call(this, r, this.element) : this.config.placement,
                                    h = this._getAttachment(l);
                                this.addAttachmentClass(h);
                                var c = !1 === this.config.container ? document.body : t(this.config.container);
                                t(r).data(this.constructor.DATA_KEY, this),
                                    t.contains(this.element.ownerDocument.documentElement, this.tip) || t(r).appendTo(c),
                                    t(this.element).trigger(this.constructor.Event.INSERTED),
                                    (this._popper = new n(this.element, r, {
                                        placement: h,
                                        modifiers: { offset: { offset: this.config.offset }, flip: { behavior: this.config.fallbackPlacement }, arrow: { element: v }, preventOverflow: { boundariesElement: this.config.boundary } },
                                        onCreate: function (t) {
                                            t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t);
                                        },
                                        onUpdate: function (t) {
                                            e._handlePopperPlacementChange(t);
                                        },
                                    })),
                                    t(r).addClass(p),
                                    "ontouchstart" in document.documentElement && t("body").children().on("mouseover", null, t.noop);
                                var u = function () {
                                    e.config.animation && e._fixTransition();
                                    var n = e._hoverState;
                                    (e._hoverState = null), t(e.element).trigger(e.constructor.Event.SHOWN), n === d && e._leave(null, e);
                                };
                                P.supportsTransitionEnd() && t(this.tip).hasClass(g) ? t(this.tip).one(P.TRANSITION_END, u).emulateTransitionEnd(a._TRANSITION_DURATION) : u();
                            }
                        }),
                        (I.hide = function (e) {
                            var n = this,
                                i = this.getTipElement(),
                                s = t.Event(this.constructor.Event.HIDE),
                                r = function () {
                                    n._hoverState !== f && i.parentNode && i.parentNode.removeChild(i),
                                        n._cleanTipClass(),
                                        n.element.removeAttribute("aria-describedby"),
                                        t(n.element).trigger(n.constructor.Event.HIDDEN),
                                        null !== n._popper && n._popper.destroy(),
                                        e && e();
                                };
                            t(this.element).trigger(s),
                                s.isDefaultPrevented() ||
                                    (t(i).removeClass(p),
                                    "ontouchstart" in document.documentElement && t("body").children().off("mouseover", null, t.noop),
                                    (this._activeTrigger[y] = !1),
                                    (this._activeTrigger[T] = !1),
                                    (this._activeTrigger[E] = !1),
                                    P.supportsTransitionEnd() && t(this.tip).hasClass(g) ? t(i).one(P.TRANSITION_END, r).emulateTransitionEnd(150) : r(),
                                    (this._hoverState = ""));
                        }),
                        (I.update = function () {
                            null !== this._popper && this._popper.scheduleUpdate();
                        }),
                        (I.isWithContent = function () {
                            return Boolean(this.getTitle());
                        }),
                        (I.addAttachmentClass = function (e) {
                            t(this.getTipElement()).addClass("bs-tooltip-" + e);
                        }),
                        (I.getTipElement = function () {
                            return (this.tip = this.tip || t(this.config.template)[0]), this.tip;
                        }),
                        (I.setContent = function () {
                            var e = t(this.getTipElement());
                            this.setElementContent(e.find(m), this.getTitle()), e.removeClass(g + " " + p);
                        }),
                        (I.setElementContent = function (e, n) {
                            var i = this.config.html;
                            "object" == typeof n && (n.nodeType || n.jquery) ? (i ? t(n).parent().is(e) || e.empty().append(n) : e.text(t(n).text())) : e[i ? "html" : "text"](n);
                        }),
                        (I.getTitle = function () {
                            var t = this.element.getAttribute("data-original-title");
                            return t || (t = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), t;
                        }),
                        (I._getAttachment = function (t) {
                            return c[t.toUpperCase()];
                        }),
                        (I._setListeners = function () {
                            var e = this;
                            this.config.trigger.split(" ").forEach(function (n) {
                                if ("click" === n)
                                    t(e.element).on(e.constructor.Event.CLICK, e.config.selector, function (t) {
                                        return e.toggle(t);
                                    });
                                else if (n !== C) {
                                    var i = n === E ? e.constructor.Event.MOUSEENTER : e.constructor.Event.FOCUSIN,
                                        s = n === E ? e.constructor.Event.MOUSELEAVE : e.constructor.Event.FOCUSOUT;
                                    t(e.element)
                                        .on(i, e.config.selector, function (t) {
                                            return e._enter(t);
                                        })
                                        .on(s, e.config.selector, function (t) {
                                            return e._leave(t);
                                        });
                                }
                                t(e.element)
                                    .closest(".modal")
                                    .on("hide.bs.modal", function () {
                                        return e.hide();
                                    });
                            }),
                                this.config.selector ? (this.config = r({}, this.config, { trigger: "manual", selector: "" })) : this._fixTitle();
                        }),
                        (I._fixTitle = function () {
                            var t = typeof this.element.getAttribute("data-original-title");
                            (this.element.getAttribute("title") || "string" !== t) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""));
                        }),
                        (I._enter = function (e, n) {
                            var i = this.constructor.DATA_KEY;
                            (n = n || t(e.currentTarget).data(i)) || ((n = new this.constructor(e.currentTarget, this._getDelegateConfig())), t(e.currentTarget).data(i, n)),
                                e && (n._activeTrigger["focusin" === e.type ? T : E] = !0),
                                t(n.getTipElement()).hasClass(p) || n._hoverState === f
                                    ? (n._hoverState = f)
                                    : (clearTimeout(n._timeout),
                                      (n._hoverState = f),
                                      n.config.delay && n.config.delay.show
                                          ? (n._timeout = setTimeout(function () {
                                                n._hoverState === f && n.show();
                                            }, n.config.delay.show))
                                          : n.show());
                        }),
                        (I._leave = function (e, n) {
                            var i = this.constructor.DATA_KEY;
                            (n = n || t(e.currentTarget).data(i)) || ((n = new this.constructor(e.currentTarget, this._getDelegateConfig())), t(e.currentTarget).data(i, n)),
                                e && (n._activeTrigger["focusout" === e.type ? T : E] = !1),
                                n._isWithActiveTrigger() ||
                                    (clearTimeout(n._timeout),
                                    (n._hoverState = d),
                                    n.config.delay && n.config.delay.hide
                                        ? (n._timeout = setTimeout(function () {
                                              n._hoverState === d && n.hide();
                                          }, n.config.delay.hide))
                                        : n.hide());
                        }),
                        (I._isWithActiveTrigger = function () {
                            for (var t in this._activeTrigger) if (this._activeTrigger[t]) return !0;
                            return !1;
                        }),
                        (I._getConfig = function (n) {
                            return (
                                "number" == typeof (n = r({}, this.constructor.Default, t(this.element).data(), n)).delay && (n.delay = { show: n.delay, hide: n.delay }),
                                "number" == typeof n.title && (n.title = n.title.toString()),
                                "number" == typeof n.content && (n.content = n.content.toString()),
                                P.typeCheckConfig(e, n, this.constructor.DefaultType),
                                n
                            );
                        }),
                        (I._getDelegateConfig = function () {
                            var t = {};
                            if (this.config) for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
                            return t;
                        }),
                        (I._cleanTipClass = function () {
                            var e = t(this.getTipElement()),
                                n = e.attr("class").match(l);
                            null !== n && n.length > 0 && e.removeClass(n.join(""));
                        }),
                        (I._handlePopperPlacementChange = function (t) {
                            this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(t.placement));
                        }),
                        (I._fixTransition = function () {
                            var e = this.getTipElement(),
                                n = this.config.animation;
                            null === e.getAttribute("x-placement") && (t(e).removeClass(g), (this.config.animation = !1), this.hide(), this.show(), (this.config.animation = n));
                        }),
                        (a._jQueryInterface = function (e) {
                            return this.each(function () {
                                var n = t(this).data(i),
                                    s = "object" == typeof e && e;
                                if ((n || !/dispose|hide/.test(e)) && (n || ((n = new a(this, s)), t(this).data(i, n)), "string" == typeof e)) {
                                    if ("undefined" == typeof n[e]) throw new TypeError('No method named "' + e + '"');
                                    n[e]();
                                }
                            });
                        }),
                        s(a, null, [
                            {
                                key: "VERSION",
                                get: function () {
                                    return "4.0.0";
                                },
                            },
                            {
                                key: "Default",
                                get: function () {
                                    return u;
                                },
                            },
                            {
                                key: "NAME",
                                get: function () {
                                    return e;
                                },
                            },
                            {
                                key: "DATA_KEY",
                                get: function () {
                                    return i;
                                },
                            },
                            {
                                key: "Event",
                                get: function () {
                                    return _;
                                },
                            },
                            {
                                key: "EVENT_KEY",
                                get: function () {
                                    return o;
                                },
                            },
                            {
                                key: "DefaultType",
                                get: function () {
                                    return h;
                                },
                            },
                        ]),
                        a
                    );
                })();
            return (
                (t.fn[e] = I._jQueryInterface),
                (t.fn[e].Constructor = I),
                (t.fn[e].noConflict = function () {
                    return (t.fn[e] = a), I._jQueryInterface;
                }),
                I
            );
        })(e),
        x = (function (t) {
            var e = "popover",
                n = "bs.popover",
                i = "." + n,
                o = t.fn[e],
                a = new RegExp("(^|\\s)bs-popover\\S+", "g"),
                l = r({}, U.Default, { placement: "right", trigger: "click", content: "", template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' }),
                h = r({}, U.DefaultType, { content: "(string|element|function)" }),
                c = "fade",
                u = "show",
                f = ".popover-header",
                d = ".popover-body",
                _ = {
                    HIDE: "hide" + i,
                    HIDDEN: "hidden" + i,
                    SHOW: "show" + i,
                    SHOWN: "shown" + i,
                    INSERTED: "inserted" + i,
                    CLICK: "click" + i,
                    FOCUSIN: "focusin" + i,
                    FOCUSOUT: "focusout" + i,
                    MOUSEENTER: "mouseenter" + i,
                    MOUSELEAVE: "mouseleave" + i,
                },
                g = (function (r) {
                    var o, g;
                    function p() {
                        return r.apply(this, arguments) || this;
                    }
                    (g = r), ((o = p).prototype = Object.create(g.prototype)), (o.prototype.constructor = o), (o.__proto__ = g);
                    var m = p.prototype;
                    return (
                        (m.isWithContent = function () {
                            return this.getTitle() || this._getContent();
                        }),
                        (m.addAttachmentClass = function (e) {
                            t(this.getTipElement()).addClass("bs-popover-" + e);
                        }),
                        (m.getTipElement = function () {
                            return (this.tip = this.tip || t(this.config.template)[0]), this.tip;
                        }),
                        (m.setContent = function () {
                            var e = t(this.getTipElement());
                            this.setElementContent(e.find(f), this.getTitle());
                            var n = this._getContent();
                            "function" == typeof n && (n = n.call(this.element)), this.setElementContent(e.find(d), n), e.removeClass(c + " " + u);
                        }),
                        (m._getContent = function () {
                            return this.element.getAttribute("data-content") || this.config.content;
                        }),
                        (m._cleanTipClass = function () {
                            var e = t(this.getTipElement()),
                                n = e.attr("class").match(a);
                            null !== n && n.length > 0 && e.removeClass(n.join(""));
                        }),
                        (p._jQueryInterface = function (e) {
                            return this.each(function () {
                                var i = t(this).data(n),
                                    s = "object" == typeof e ? e : null;
                                if ((i || !/destroy|hide/.test(e)) && (i || ((i = new p(this, s)), t(this).data(n, i)), "string" == typeof e)) {
                                    if ("undefined" == typeof i[e]) throw new TypeError('No method named "' + e + '"');
                                    i[e]();
                                }
                            });
                        }),
                        s(p, null, [
                            {
                                key: "VERSION",
                                get: function () {
                                    return "4.0.0";
                                },
                            },
                            {
                                key: "Default",
                                get: function () {
                                    return l;
                                },
                            },
                            {
                                key: "NAME",
                                get: function () {
                                    return e;
                                },
                            },
                            {
                                key: "DATA_KEY",
                                get: function () {
                                    return n;
                                },
                            },
                            {
                                key: "Event",
                                get: function () {
                                    return _;
                                },
                            },
                            {
                                key: "EVENT_KEY",
                                get: function () {
                                    return i;
                                },
                            },
                            {
                                key: "DefaultType",
                                get: function () {
                                    return h;
                                },
                            },
                        ]),
                        p
                    );
                })(U);
            return (
                (t.fn[e] = g._jQueryInterface),
                (t.fn[e].Constructor = g),
                (t.fn[e].noConflict = function () {
                    return (t.fn[e] = o), g._jQueryInterface;
                }),
                g
            );
        })(e),
        K = (function (t) {
            var e = "scrollspy",
                n = "bs.scrollspy",
                i = "." + n,
                o = t.fn[e],
                a = { offset: 10, method: "auto", target: "" },
                l = { offset: "number", method: "string", target: "(string|element)" },
                h = { ACTIVATE: "activate" + i, SCROLL: "scroll" + i, LOAD_DATA_API: "load" + i + ".data-api" },
                c = "dropdown-item",
                u = "active",
                f = {
                    DATA_SPY: '[data-spy="scroll"]',
                    ACTIVE: ".active",
                    NAV_LIST_GROUP: ".nav, .list-group",
                    NAV_LINKS: ".nav-link",
                    NAV_ITEMS: ".nav-item",
                    LIST_ITEMS: ".list-group-item",
                    DROPDOWN: ".dropdown",
                    DROPDOWN_ITEMS: ".dropdown-item",
                    DROPDOWN_TOGGLE: ".dropdown-toggle",
                },
                d = "offset",
                _ = "position",
                g = (function () {
                    function o(e, n) {
                        var i = this;
                        (this._element = e),
                            (this._scrollElement = "BODY" === e.tagName ? window : e),
                            (this._config = this._getConfig(n)),
                            (this._selector = this._config.target + " " + f.NAV_LINKS + "," + this._config.target + " " + f.LIST_ITEMS + "," + this._config.target + " " + f.DROPDOWN_ITEMS),
                            (this._offsets = []),
                            (this._targets = []),
                            (this._activeTarget = null),
                            (this._scrollHeight = 0),
                            t(this._scrollElement).on(h.SCROLL, function (t) {
                                return i._process(t);
                            }),
                            this.refresh(),
                            this._process();
                    }
                    var g = o.prototype;
                    return (
                        (g.refresh = function () {
                            var e = this,
                                n = this._scrollElement === this._scrollElement.window ? d : _,
                                i = "auto" === this._config.method ? n : this._config.method,
                                s = i === _ ? this._getScrollTop() : 0;
                            (this._offsets = []),
                                (this._targets = []),
                                (this._scrollHeight = this._getScrollHeight()),
                                t
                                    .makeArray(t(this._selector))
                                    .map(function (e) {
                                        var n,
                                            r = P.getSelectorFromElement(e);
                                        if ((r && (n = t(r)[0]), n)) {
                                            var o = n.getBoundingClientRect();
                                            if (o.width || o.height) return [t(n)[i]().top + s, r];
                                        }
                                        return null;
                                    })
                                    .filter(function (t) {
                                        return t;
                                    })
                                    .sort(function (t, e) {
                                        return t[0] - e[0];
                                    })
                                    .forEach(function (t) {
                                        e._offsets.push(t[0]), e._targets.push(t[1]);
                                    });
                        }),
                        (g.dispose = function () {
                            t.removeData(this._element, n),
                                t(this._scrollElement).off(i),
                                (this._element = null),
                                (this._scrollElement = null),
                                (this._config = null),
                                (this._selector = null),
                                (this._offsets = null),
                                (this._targets = null),
                                (this._activeTarget = null),
                                (this._scrollHeight = null);
                        }),
                        (g._getConfig = function (n) {
                            if ("string" != typeof (n = r({}, a, n)).target) {
                                var i = t(n.target).attr("id");
                                i || ((i = P.getUID(e)), t(n.target).attr("id", i)), (n.target = "#" + i);
                            }
                            return P.typeCheckConfig(e, n, l), n;
                        }),
                        (g._getScrollTop = function () {
                            return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop;
                        }),
                        (g._getScrollHeight = function () {
                            return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
                        }),
                        (g._getOffsetHeight = function () {
                            return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height;
                        }),
                        (g._process = function () {
                            var t = this._getScrollTop() + this._config.offset,
                                e = this._getScrollHeight(),
                                n = this._config.offset + e - this._getOffsetHeight();
                            if ((this._scrollHeight !== e && this.refresh(), t >= n)) {
                                var i = this._targets[this._targets.length - 1];
                                this._activeTarget !== i && this._activate(i);
                            } else {
                                if (this._activeTarget && t < this._offsets[0] && this._offsets[0] > 0) return (this._activeTarget = null), void this._clear();
                                for (var s = this._offsets.length; s--; ) {
                                    this._activeTarget !== this._targets[s] && t >= this._offsets[s] && ("undefined" == typeof this._offsets[s + 1] || t < this._offsets[s + 1]) && this._activate(this._targets[s]);
                                }
                            }
                        }),
                        (g._activate = function (e) {
                            (this._activeTarget = e), this._clear();
                            var n = this._selector.split(",");
                            n = n.map(function (t) {
                                return t + '[data-target="' + e + '"],' + t + '[href="' + e + '"]';
                            });
                            var i = t(n.join(","));
                            i.hasClass(c)
                                ? (i.closest(f.DROPDOWN).find(f.DROPDOWN_TOGGLE).addClass(u), i.addClass(u))
                                : (i.addClass(u),
                                  i
                                      .parents(f.NAV_LIST_GROUP)
                                      .prev(f.NAV_LINKS + ", " + f.LIST_ITEMS)
                                      .addClass(u),
                                  i.parents(f.NAV_LIST_GROUP).prev(f.NAV_ITEMS).children(f.NAV_LINKS).addClass(u)),
                                t(this._scrollElement).trigger(h.ACTIVATE, { relatedTarget: e });
                        }),
                        (g._clear = function () {
                            t(this._selector).filter(f.ACTIVE).removeClass(u);
                        }),
                        (o._jQueryInterface = function (e) {
                            return this.each(function () {
                                var i = t(this).data(n);
                                if ((i || ((i = new o(this, "object" == typeof e && e)), t(this).data(n, i)), "string" == typeof e)) {
                                    if ("undefined" == typeof i[e]) throw new TypeError('No method named "' + e + '"');
                                    i[e]();
                                }
                            });
                        }),
                        s(o, null, [
                            {
                                key: "VERSION",
                                get: function () {
                                    return "4.0.0";
                                },
                            },
                            {
                                key: "Default",
                                get: function () {
                                    return a;
                                },
                            },
                        ]),
                        o
                    );
                })();
            return (
                t(window).on(h.LOAD_DATA_API, function () {
                    for (var e = t.makeArray(t(f.DATA_SPY)), n = e.length; n--; ) {
                        var i = t(e[n]);
                        g._jQueryInterface.call(i, i.data());
                    }
                }),
                (t.fn[e] = g._jQueryInterface),
                (t.fn[e].Constructor = g),
                (t.fn[e].noConflict = function () {
                    return (t.fn[e] = o), g._jQueryInterface;
                }),
                g
            );
        })(e),
        V = (function (t) {
            var e = "bs.tab",
                n = "." + e,
                i = t.fn.tab,
                r = { HIDE: "hide" + n, HIDDEN: "hidden" + n, SHOW: "show" + n, SHOWN: "shown" + n, CLICK_DATA_API: "click.bs.tab.data-api" },
                o = "dropdown-menu",
                a = "active",
                l = "disabled",
                h = "fade",
                c = "show",
                u = ".dropdown",
                f = ".nav, .list-group",
                d = ".active",
                _ = "> li > .active",
                g = '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]',
                p = ".dropdown-toggle",
                m = "> .dropdown-menu .active",
                v = (function () {
                    function n(t) {
                        this._element = t;
                    }
                    var i = n.prototype;
                    return (
                        (i.show = function () {
                            var e = this;
                            if (!((this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && t(this._element).hasClass(a)) || t(this._element).hasClass(l))) {
                                var n,
                                    i,
                                    s = t(this._element).closest(f)[0],
                                    o = P.getSelectorFromElement(this._element);
                                if (s) {
                                    var h = "UL" === s.nodeName ? _ : d;
                                    i = (i = t.makeArray(t(s).find(h)))[i.length - 1];
                                }
                                var c = t.Event(r.HIDE, { relatedTarget: this._element }),
                                    u = t.Event(r.SHOW, { relatedTarget: i });
                                if ((i && t(i).trigger(c), t(this._element).trigger(u), !u.isDefaultPrevented() && !c.isDefaultPrevented())) {
                                    o && (n = t(o)[0]), this._activate(this._element, s);
                                    var g = function () {
                                        var n = t.Event(r.HIDDEN, { relatedTarget: e._element }),
                                            s = t.Event(r.SHOWN, { relatedTarget: i });
                                        t(i).trigger(n), t(e._element).trigger(s);
                                    };
                                    n ? this._activate(n, n.parentNode, g) : g();
                                }
                            }
                        }),
                        (i.dispose = function () {
                            t.removeData(this._element, e), (this._element = null);
                        }),
                        (i._activate = function (e, n, i) {
                            var s = this,
                                r = ("UL" === n.nodeName ? t(n).find(_) : t(n).children(d))[0],
                                o = i && P.supportsTransitionEnd() && r && t(r).hasClass(h),
                                a = function () {
                                    return s._transitionComplete(e, r, i);
                                };
                            r && o ? t(r).one(P.TRANSITION_END, a).emulateTransitionEnd(150) : a();
                        }),
                        (i._transitionComplete = function (e, n, i) {
                            if (n) {
                                t(n).removeClass(c + " " + a);
                                var s = t(n.parentNode).find(m)[0];
                                s && t(s).removeClass(a), "tab" === n.getAttribute("role") && n.setAttribute("aria-selected", !1);
                            }
                            if ((t(e).addClass(a), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !0), P.reflow(e), t(e).addClass(c), e.parentNode && t(e.parentNode).hasClass(o))) {
                                var r = t(e).closest(u)[0];
                                r && t(r).find(p).addClass(a), e.setAttribute("aria-expanded", !0);
                            }
                            i && i();
                        }),
                        (n._jQueryInterface = function (i) {
                            return this.each(function () {
                                var s = t(this),
                                    r = s.data(e);
                                if ((r || ((r = new n(this)), s.data(e, r)), "string" == typeof i)) {
                                    if ("undefined" == typeof r[i]) throw new TypeError('No method named "' + i + '"');
                                    r[i]();
                                }
                            });
                        }),
                        s(n, null, [
                            {
                                key: "VERSION",
                                get: function () {
                                    return "4.0.0";
                                },
                            },
                        ]),
                        n
                    );
                })();
            return (
                t(document).on(r.CLICK_DATA_API, g, function (e) {
                    e.preventDefault(), v._jQueryInterface.call(t(this), "show");
                }),
                (t.fn.tab = v._jQueryInterface),
                (t.fn.tab.Constructor = v),
                (t.fn.tab.noConflict = function () {
                    return (t.fn.tab = i), v._jQueryInterface;
                }),
                v
            );
        })(e);
    !(function (t) {
        if ("undefined" == typeof t) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
        var e = t.fn.jquery.split(" ")[0].split(".");
        if ((e[0] < 2 && e[1] < 9) || (1 === e[0] && 9 === e[1] && e[2] < 1) || e[0] >= 4) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0");
    })(e),
        (t.Util = P),
        (t.Alert = L),
        (t.Button = R),
        (t.Carousel = j),
        (t.Collapse = H),
        (t.Dropdown = W),
        (t.Modal = M),
        (t.Popover = x),
        (t.Scrollspy = K),
        (t.Tab = V),
        (t.Tooltip = U),
        Object.defineProperty(t, "__esModule", { value: !0 });
});
//# sourceMappingURL=bootstrap.min.js.map
/*! flipclock 2015-08-31 */
var Base = function () {};
(Base.extend = function (a, b) {
    "use strict";
    var c = Base.prototype.extend;
    Base._prototyping = !0;
    var d = new this();
    c.call(d, a), (d.base = function () {}), delete Base._prototyping;
    var e = d.constructor,
        f = (d.constructor = function () {
            if (!Base._prototyping)
                if (this._constructing || this.constructor == f) (this._constructing = !0), e.apply(this, arguments), delete this._constructing;
                else if (null !== arguments[0]) return (arguments[0].extend || c).call(arguments[0], d);
        });
    return (
        (f.ancestor = this),
        (f.extend = this.extend),
        (f.forEach = this.forEach),
        (f.implement = this.implement),
        (f.prototype = d),
        (f.toString = this.toString),
        (f.valueOf = function (a) {
            return "object" == a ? f : e.valueOf();
        }),
        c.call(f, b),
        "function" == typeof f.init && f.init(),
        f
    );
}),
    (Base.prototype = {
        extend: function (a, b) {
            if (arguments.length > 1) {
                var c = this[a];
                if (c && "function" == typeof b && (!c.valueOf || c.valueOf() != b.valueOf()) && /\bbase\b/.test(b)) {
                    var d = b.valueOf();
                    (b = function () {
                        var a = this.base || Base.prototype.base;
                        this.base = c;
                        var b = d.apply(this, arguments);
                        return (this.base = a), b;
                    }),
                        (b.valueOf = function (a) {
                            return "object" == a ? b : d;
                        }),
                        (b.toString = Base.toString);
                }
                this[a] = b;
            } else if (a) {
                var e = Base.prototype.extend;
                Base._prototyping || "function" == typeof this || (e = this.extend || e);
                for (var f = { toSource: null }, g = ["constructor", "toString", "valueOf"], h = Base._prototyping ? 0 : 1; (i = g[h++]); ) a[i] != f[i] && e.call(this, i, a[i]);
                for (var i in a) f[i] || e.call(this, i, a[i]);
            }
            return this;
        },
    }),
    (Base = Base.extend(
        {
            constructor: function () {
                this.extend(arguments[0]);
            },
        },
        {
            ancestor: Object,
            version: "1.1",
            forEach: function (a, b, c) {
                for (var d in a) void 0 === this.prototype[d] && b.call(c, a[d], d, a);
            },
            implement: function () {
                for (var a = 0; a < arguments.length; a++) "function" == typeof arguments[a] ? arguments[a](this.prototype) : this.prototype.extend(arguments[a]);
                return this;
            },
            toString: function () {
                return String(this.valueOf());
            },
        }
    ));
var FlipClock;
!(function (a) {
    "use strict";
    (FlipClock = function (a, b, c) {
        return b instanceof Object && b instanceof Date == !1 && ((c = b), (b = 0)), new FlipClock.Factory(a, b, c);
    }),
        (FlipClock.Lang = {}),
        (FlipClock.Base = Base.extend({
            buildDate: "2014-12-12",
            version: "0.7.7",
            constructor: function (b, c) {
                "object" != typeof b && (b = {}), "object" != typeof c && (c = {}), this.setOptions(a.extend(!0, {}, b, c));
            },
            callback: function (a) {
                if ("function" == typeof a) {
                    for (var b = [], c = 1; c <= arguments.length; c++) arguments[c] && b.push(arguments[c]);
                    a.apply(this, b);
                }
            },
            log: function (a) {
                window.console && console.log && console.log(a);
            },
            getOption: function (a) {
                return this[a] ? this[a] : !1;
            },
            getOptions: function () {
                return this;
            },
            setOption: function (a, b) {
                this[a] = b;
            },
            setOptions: function (a) {
                for (var b in a) "undefined" != typeof a[b] && this.setOption(b, a[b]);
            },
        }));
})(jQuery),
    (function (a) {
        "use strict";
        FlipClock.Face = FlipClock.Base.extend({
            autoStart: !0,
            dividers: [],
            factory: !1,
            lists: [],
            constructor: function (a, b) {
                (this.dividers = []), (this.lists = []), this.base(b), (this.factory = a);
            },
            build: function () {
                this.autoStart && this.start();
            },
            createDivider: function (b, c, d) {
                ("boolean" != typeof c && c) || ((d = c), (c = b));
                var e = ['<span class="' + this.factory.classes.dot + ' top"></span>', '<span class="' + this.factory.classes.dot + ' bottom"></span>'].join("");
                d && (e = ""), (b = this.factory.localize(b));
                var f = ['<span class="' + this.factory.classes.divider + " " + (c ? c : "").toLowerCase() + '">', '<span class="' + this.factory.classes.label + '">' + (b ? b : "") + "</span>", e, "</span>"],
                    g = a(f.join(""));
                return this.dividers.push(g), g;
            },
            createList: function (a, b) {
                "object" == typeof a && ((b = a), (a = 0));
                var c = new FlipClock.List(this.factory, a, b);
                return this.lists.push(c), c;
            },
            reset: function () {
                (this.factory.time = new FlipClock.Time(this.factory, this.factory.original ? Math.round(this.factory.original) : 0, { minimumDigits: this.factory.minimumDigits })), this.flip(this.factory.original, !1);
            },
            appendDigitToClock: function (a) {
                a.$el.append(!1);
            },
            addDigit: function (a) {
                var b = this.createList(a, { classes: { active: this.factory.classes.active, before: this.factory.classes.before, flip: this.factory.classes.flip } });
                this.appendDigitToClock(b);
            },
            start: function () {},
            stop: function () {},
            autoIncrement: function () {
                this.factory.countdown ? this.decrement() : this.increment();
            },
            increment: function () {
                this.factory.time.addSecond();
            },
            decrement: function () {
                0 == this.factory.time.getTimeSeconds() ? this.factory.stop() : this.factory.time.subSecond();
            },
            flip: function (b, c) {
                var d = this;
                a.each(b, function (a, b) {
                    var e = d.lists[a];
                    e ? (c || b == e.digit || e.play(), e.select(b)) : d.addDigit(b);
                });
            },
        });
    })(jQuery),
    (function (a) {
        "use strict";
        FlipClock.Factory = FlipClock.Base.extend({
            animationRate: 1e3,
            autoStart: !0,
            callbacks: { destroy: !1, create: !1, init: !1, interval: !1, start: !1, stop: !1, reset: !1 },
            classes: { active: "flip-clock-active", before: "flip-clock-before", divider: "flip-clock-divider", dot: "flip-clock-dot", label: "flip-clock-label", flip: "flip", play: "play", wrapper: "flip-clock-wrapper" },
            clockFace: "HourlyCounter",
            countdown: !1,
            defaultClockFace: "HourlyCounter",
            defaultLanguage: "english",
            $el: !1,
            face: !0,
            lang: !1,
            language: "english",
            minimumDigits: 0,
            original: !1,
            running: !1,
            time: !1,
            timer: !1,
            $wrapper: !1,
            constructor: function (b, c, d) {
                d || (d = {}),
                    (this.lists = []),
                    (this.running = !1),
                    this.base(d),
                    (this.$el = a(b).addClass(this.classes.wrapper)),
                    (this.$wrapper = this.$el),
                    (this.original = c instanceof Date ? c : c ? Math.round(c) : 0),
                    (this.time = new FlipClock.Time(this, this.original, { minimumDigits: this.minimumDigits, animationRate: this.animationRate })),
                    (this.timer = new FlipClock.Timer(this, d)),
                    this.loadLanguage(this.language),
                    this.loadClockFace(this.clockFace, d),
                    this.autoStart && this.start();
            },
            loadClockFace: function (a, b) {
                var c,
                    d = "Face",
                    e = !1;
                return (
                    (a = a.ucfirst() + d),
                    this.face.stop && (this.stop(), (e = !0)),
                    this.$el.html(""),
                    (this.time.minimumDigits = this.minimumDigits),
                    (c = FlipClock[a] ? new FlipClock[a](this, b) : new FlipClock[this.defaultClockFace + d](this, b)),
                    c.build(),
                    (this.face = c),
                    e && this.start(),
                    this.face
                );
            },
            loadLanguage: function (a) {
                var b;
                return (b = FlipClock.Lang[a.ucfirst()] ? FlipClock.Lang[a.ucfirst()] : FlipClock.Lang[a] ? FlipClock.Lang[a] : FlipClock.Lang[this.defaultLanguage]), (this.lang = b);
            },
            localize: function (a, b) {
                var c = this.lang;
                if (!a) return null;
                var d = a.toLowerCase();
                return "object" == typeof b && (c = b), c && c[d] ? c[d] : a;
            },
            start: function (a) {
                var b = this;
                b.running || (b.countdown && !(b.countdown && b.time.time > 0))
                    ? b.log("Trying to start timer when countdown already at 0")
                    : (b.face.start(b.time),
                      b.timer.start(function () {
                          b.flip(), "function" == typeof a && a();
                      }));
            },
            stop: function (a) {
                this.face.stop(), this.timer.stop(a);
                for (var b in this.lists) this.lists.hasOwnProperty(b) && this.lists[b].stop();
            },
            reset: function (a) {
                this.timer.reset(a), this.face.reset();
            },
            setTime: function (a) {
                (this.time.time = a), this.flip(!0);
            },
            getTime: function (a) {
                return this.time;
            },
            setCountdown: function (a) {
                var b = this.running;
                (this.countdown = a ? !0 : !1), b && (this.stop(), this.start());
            },
            flip: function (a) {
                this.face.flip(!1, a);
            },
        });
    })(jQuery),
    (function (a) {
        "use strict";
        FlipClock.List = FlipClock.Base.extend({
            digit: 0,
            classes: { active: "flip-clock-active", before: "flip-clock-before", flip: "flip" },
            factory: !1,
            $el: !1,
            $obj: !1,
            items: [],
            lastDigit: 0,
            constructor: function (a, b, c) {
                (this.factory = a), (this.digit = b), (this.lastDigit = b), (this.$el = this.createList()), (this.$obj = this.$el), b > 0 && this.select(b), this.factory.$el.append(this.$el);
            },
            select: function (a) {
                if (("undefined" == typeof a ? (a = this.digit) : (this.digit = a), this.digit != this.lastDigit)) {
                    var b = this.$el.find("." + this.classes.before).removeClass(this.classes.before);
                    this.$el
                        .find("." + this.classes.active)
                        .removeClass(this.classes.active)
                        .addClass(this.classes.before),
                        this.appendListItem(this.classes.active, this.digit),
                        b.remove(),
                        (this.lastDigit = this.digit);
                }
            },
            play: function () {
                this.$el.addClass(this.factory.classes.play);
            },
            stop: function () {
                var a = this;
                setTimeout(function () {
                    a.$el.removeClass(a.factory.classes.play);
                }, this.factory.timer.interval);
            },
            createListItem: function (a, b) {
                return [
                    '<li class="' + (a ? a : "") + '">',
                    '<a href="#">',
                    '<div class="up">',
                    '<div class="shadow"></div>',
                    '<div class="inn">' + (b ? b : "") + "</div>",
                    "</div>",
                    '<div class="down">',
                    '<div class="shadow"></div>',
                    '<div class="inn">' + (b ? b : "") + "</div>",
                    "</div>",
                    "</a>",
                    "</li>",
                ].join("");
            },
            appendListItem: function (a, b) {
                var c = this.createListItem(a, b);
                this.$el.append(c);
            },
            createList: function () {
                var b = this.getPrevDigit() ? this.getPrevDigit() : this.digit,
                    c = a(
                        [
                            '<ul class="' + this.classes.flip + " " + (this.factory.running ? this.factory.classes.play : "") + '">',
                            this.createListItem(this.classes.before, b),
                            this.createListItem(this.classes.active, this.digit),
                            "</ul>",
                        ].join("")
                    );
                return c;
            },
            getNextDigit: function () {
                return 9 == this.digit ? 0 : this.digit + 1;
            },
            getPrevDigit: function () {
                return 0 == this.digit ? 9 : this.digit - 1;
            },
        });
    })(jQuery),
    (function (a) {
        "use strict";
        (String.prototype.ucfirst = function () {
            return this.substr(0, 1).toUpperCase() + this.substr(1);
        }),
            (a.fn.FlipClock = function (b, c) {
                return new FlipClock(a(this), b, c);
            }),
            (a.fn.flipClock = function (b, c) {
                return a.fn.FlipClock(b, c);
            });
    })(jQuery),
    (function (a) {
        "use strict";
        FlipClock.Time = FlipClock.Base.extend({
            time: 0,
            factory: !1,
            minimumDigits: 0,
            constructor: function (a, b, c) {
                "object" != typeof c && (c = {}), c.minimumDigits || (c.minimumDigits = a.minimumDigits), this.base(c), (this.factory = a), b && (this.time = b);
            },
            convertDigitsToArray: function (a) {
                var b = [];
                a = a.toString();
                for (var c = 0; c < a.length; c++) a[c].match(/^\d*$/g) && b.push(a[c]);
                return b;
            },
            digit: function (a) {
                var b = this.toString(),
                    c = b.length;
                return b[c - a] ? b[c - a] : !1;
            },
            digitize: function (b) {
                var c = [];
                if (
                    (a.each(b, function (a, b) {
                        (b = b.toString()), 1 == b.length && (b = "0" + b);
                        for (var d = 0; d < b.length; d++) c.push(b.charAt(d));
                    }),
                    c.length > this.minimumDigits && (this.minimumDigits = c.length),
                    this.minimumDigits > c.length)
                )
                    for (var d = c.length; d < this.minimumDigits; d++) c.unshift("0");
                return c;
            },
            getDateObject: function () {
                return this.time instanceof Date ? this.time : new Date(new Date().getTime() + 1e3 * this.getTimeSeconds());
            },
            getDayCounter: function (a) {
                var b = [this.getDays(), this.getHours(!0), this.getMinutes(!0)];
                return a && b.push(this.getSeconds(!0)), this.digitize(b);
            },
            getDays: function (a) {
                var b = this.getTimeSeconds() / 60 / 60 / 24;
                return a && (b %= 7), Math.floor(b);
            },
            getHourCounter: function () {
                var a = this.digitize([this.getHours(), this.getMinutes(!0), this.getSeconds(!0)]);
                return a;
            },
            getHourly: function () {
                return this.getHourCounter();
            },
            getHours: function (a) {
                var b = this.getTimeSeconds() / 60 / 60;
                return a && (b %= 24), Math.floor(b);
            },
            getMilitaryTime: function (a, b) {
                "undefined" == typeof b && (b = !0), a || (a = this.getDateObject());
                var c = [a.getHours(), a.getMinutes()];
                return b === !0 && c.push(a.getSeconds()), this.digitize(c);
            },
            getMinutes: function (a) {
                var b = this.getTimeSeconds() / 60;
                return a && (b %= 60), Math.floor(b);
            },
            getMinuteCounter: function () {
                var a = this.digitize([this.getMinutes(), this.getSeconds(!0)]);
                return a;
            },
            getTimeSeconds: function (a) {
                return a || (a = new Date()), this.time instanceof Date ? (this.factory.countdown ? Math.max(this.time.getTime() / 1e3 - a.getTime() / 1e3, 0) : a.getTime() / 1e3 - this.time.getTime() / 1e3) : this.time;
            },
            getTime: function (a, b) {
                "undefined" == typeof b && (b = !0), a || (a = this.getDateObject()), console.log(a);
                var c = a.getHours(),
                    d = [c > 12 ? c - 12 : 0 === c ? 12 : c, a.getMinutes()];
                return b === !0 && d.push(a.getSeconds()), this.digitize(d);
            },
            getSeconds: function (a) {
                var b = this.getTimeSeconds();
                return a && (60 == b ? (b = 0) : (b %= 60)), Math.ceil(b);
            },
            getWeeks: function (a) {
                var b = this.getTimeSeconds() / 60 / 60 / 24 / 7;
                return a && (b %= 52), Math.floor(b);
            },
            removeLeadingZeros: function (b, c) {
                var d = 0,
                    e = [];
                return (
                    a.each(c, function (a, f) {
                        b > a ? (d += parseInt(c[a], 10)) : e.push(c[a]);
                    }),
                    0 === d ? e : c
                );
            },
            addSeconds: function (a) {
                this.time instanceof Date ? this.time.setSeconds(this.time.getSeconds() + a) : (this.time += a);
            },
            addSecond: function () {
                this.addSeconds(1);
            },
            subSeconds: function (a) {
                this.time instanceof Date ? this.time.setSeconds(this.time.getSeconds() - a) : (this.time -= a);
            },
            subSecond: function () {
                this.subSeconds(1);
            },
            toString: function () {
                return this.getTimeSeconds().toString();
            },
        });
    })(jQuery),
    (function (a) {
        "use strict";
        FlipClock.Timer = FlipClock.Base.extend({
            callbacks: { destroy: !1, create: !1, init: !1, interval: !1, start: !1, stop: !1, reset: !1 },
            count: 0,
            factory: !1,
            interval: 1e3,
            animationRate: 1e3,
            constructor: function (a, b) {
                this.base(b), (this.factory = a), this.callback(this.callbacks.init), this.callback(this.callbacks.create);
            },
            getElapsed: function () {
                return this.count * this.interval;
            },
            getElapsedTime: function () {
                return new Date(this.time + this.getElapsed());
            },
            reset: function (a) {
                clearInterval(this.timer), (this.count = 0), this._setInterval(a), this.callback(this.callbacks.reset);
            },
            start: function (a) {
                (this.factory.running = !0), this._createTimer(a), this.callback(this.callbacks.start);
            },
            stop: function (a) {
                (this.factory.running = !1), this._clearInterval(a), this.callback(this.callbacks.stop), this.callback(a);
            },
            _clearInterval: function () {
                clearInterval(this.timer);
            },
            _createTimer: function (a) {
                this._setInterval(a);
            },
            _destroyTimer: function (a) {
                this._clearInterval(), (this.timer = !1), this.callback(a), this.callback(this.callbacks.destroy);
            },
            _interval: function (a) {
                this.callback(this.callbacks.interval), this.callback(a), this.count++;
            },
            _setInterval: function (a) {
                var b = this;
                b._interval(a),
                    (b.timer = setInterval(function () {
                        b._interval(a);
                    }, this.interval));
            },
        });
    })(jQuery),
    (function (a) {
        FlipClock.TwentyFourHourClockFace = FlipClock.Face.extend({
            constructor: function (a, b) {
                this.base(a, b);
            },
            build: function (b) {
                var c = this,
                    d = this.factory.$el.find("ul");
                this.factory.time.time || ((this.factory.original = new Date()), (this.factory.time = new FlipClock.Time(this.factory, this.factory.original)));
                var b = b ? b : this.factory.time.getMilitaryTime(!1, this.showSeconds);
                b.length > d.length &&
                    a.each(b, function (a, b) {
                        c.createList(b);
                    }),
                    this.createDivider(),
                    this.createDivider(),
                    a(this.dividers[0]).insertBefore(this.lists[this.lists.length - 2].$el),
                    a(this.dividers[1]).insertBefore(this.lists[this.lists.length - 4].$el),
                    this.base();
            },
            flip: function (a, b) {
                this.autoIncrement(), (a = a ? a : this.factory.time.getMilitaryTime(!1, this.showSeconds)), this.base(a, b);
            },
        });
    })(jQuery),
    (function (a) {
        FlipClock.CounterFace = FlipClock.Face.extend({
            shouldAutoIncrement: !1,
            constructor: function (a, b) {
                "object" != typeof b && (b = {}),
                    (a.autoStart = b.autoStart ? !0 : !1),
                    b.autoStart && (this.shouldAutoIncrement = !0),
                    (a.increment = function () {
                        (a.countdown = !1), a.setTime(a.getTime().getTimeSeconds() + 1);
                    }),
                    (a.decrement = function () {
                        a.countdown = !0;
                        var b = a.getTime().getTimeSeconds();
                        b > 0 && a.setTime(b - 1);
                    }),
                    (a.setValue = function (b) {
                        a.setTime(b);
                    }),
                    (a.setCounter = function (b) {
                        a.setTime(b);
                    }),
                    this.base(a, b);
            },
            build: function () {
                var b = this,
                    c = this.factory.$el.find("ul"),
                    d = this.factory.getTime().digitize([this.factory.getTime().time]);
                d.length > c.length &&
                    a.each(d, function (a, c) {
                        var d = b.createList(c);
                        d.select(c);
                    }),
                    a.each(this.lists, function (a, b) {
                        b.play();
                    }),
                    this.base();
            },
            flip: function (a, b) {
                this.shouldAutoIncrement && this.autoIncrement(), a || (a = this.factory.getTime().digitize([this.factory.getTime().time])), this.base(a, b);
            },
            reset: function () {
                (this.factory.time = new FlipClock.Time(this.factory, this.factory.original ? Math.round(this.factory.original) : 0)), this.flip();
            },
        });
    })(jQuery),
    (function (a) {
        FlipClock.DailyCounterFace = FlipClock.Face.extend({
            showSeconds: !0,
            constructor: function (a, b) {
                this.base(a, b);
            },
            build: function (b) {
                var c = this,
                    d = this.factory.$el.find("ul"),
                    e = 0;
                (b = b ? b : this.factory.time.getDayCounter(this.showSeconds)),
                    b.length > d.length &&
                        a.each(b, function (a, b) {
                            c.createList(b);
                        }),
                    this.showSeconds ? a(this.createDivider("Сек.")).insertBefore(this.lists[this.lists.length - 2].$el) : (e = 2),
                    a(this.createDivider("Мин.")).insertBefore(this.lists[this.lists.length - 4 + e].$el),
                    a(this.createDivider("Ч.")).insertBefore(this.lists[this.lists.length - 6 + e].$el),
                    a(this.createDivider("Дн.", !0)).insertBefore(this.lists[0].$el),
                    this.base();
            },
            flip: function (a, b) {
                a || (a = this.factory.time.getDayCounter(this.showSeconds)), this.autoIncrement(), this.base(a, b);
            },
        });
    })(jQuery),
    (function (a) {
        FlipClock.HourlyCounterFace = FlipClock.Face.extend({
            constructor: function (a, b) {
                this.base(a, b);
            },
            build: function (b, c) {
                var d = this,
                    e = this.factory.$el.find("ul");
                (c = c ? c : this.factory.time.getHourCounter()),
                    c.length > e.length &&
                        a.each(c, function (a, b) {
                            d.createList(b);
                        }),
                    a(this.createDivider("Seconds")).insertBefore(this.lists[this.lists.length - 2].$el),
                    a(this.createDivider("Minutes")).insertBefore(this.lists[this.lists.length - 4].$el),
                    b || a(this.createDivider("Hours", !0)).insertBefore(this.lists[0].$el),
                    this.base();
            },
            flip: function (a, b) {
                a || (a = this.factory.time.getHourCounter()), this.autoIncrement(), this.base(a, b);
            },
            appendDigitToClock: function (a) {
                this.base(a), this.dividers[0].insertAfter(this.dividers[0].next());
            },
        });
    })(jQuery),
    (function (a) {
        FlipClock.MinuteCounterFace = FlipClock.HourlyCounterFace.extend({
            clearExcessDigits: !1,
            constructor: function (a, b) {
                this.base(a, b);
            },
            build: function () {
                this.base(!0, this.factory.time.getMinuteCounter());
            },
            flip: function (a, b) {
                a || (a = this.factory.time.getMinuteCounter()), this.base(a, b);
            },
        });
    })(jQuery),
    (function (a) {
        FlipClock.TwelveHourClockFace = FlipClock.TwentyFourHourClockFace.extend({
            meridium: !1,
            meridiumText: "AM",
            build: function () {
                var b = this.factory.time.getTime(!1, this.showSeconds);
                this.base(b),
                    (this.meridiumText = this.getMeridium()),
                    (this.meridium = a(['<ul class="flip-clock-meridium">', "<li>", '<a href="#">' + this.meridiumText + "</a>", "</li>", "</ul>"].join(""))),
                    this.meridium.insertAfter(this.lists[this.lists.length - 1].$el);
            },
            flip: function (a, b) {
                this.meridiumText != this.getMeridium() && ((this.meridiumText = this.getMeridium()), this.meridium.find("a").html(this.meridiumText)), this.base(this.factory.time.getTime(!1, this.showSeconds), b);
            },
            getMeridium: function () {
                return new Date().getHours() >= 12 ? "PM" : "AM";
            },
            isPM: function () {
                return "PM" == this.getMeridium() ? !0 : !1;
            },
            isAM: function () {
                return "AM" == this.getMeridium() ? !0 : !1;
            },
        });
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.Arabic = { years: "سنوات", months: "شهور", days: "أيام", hours: "ساعات", minutes: "دقائق", seconds: "ثواني" }),
            (FlipClock.Lang.ar = FlipClock.Lang.Arabic),
            (FlipClock.Lang["ar-ar"] = FlipClock.Lang.Arabic),
            (FlipClock.Lang.arabic = FlipClock.Lang.Arabic);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.Danish = { years: "År", months: "Måneder", days: "Dage", hours: "Timer", minutes: "Minutter", seconds: "Sekunder" }),
            (FlipClock.Lang.da = FlipClock.Lang.Danish),
            (FlipClock.Lang["da-dk"] = FlipClock.Lang.Danish),
            (FlipClock.Lang.danish = FlipClock.Lang.Danish);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.German = { years: "Jahre", months: "Monate", days: "Tage", hours: "Stunden", minutes: "Minuten", seconds: "Sekunden" }),
            (FlipClock.Lang.de = FlipClock.Lang.German),
            (FlipClock.Lang["de-de"] = FlipClock.Lang.German),
            (FlipClock.Lang.german = FlipClock.Lang.German);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.English = { years: "Years", months: "Months", days: "Days", hours: "Hours", minutes: "Minutes", seconds: "Seconds" }),
            (FlipClock.Lang.en = FlipClock.Lang.English),
            (FlipClock.Lang["en-us"] = FlipClock.Lang.English),
            (FlipClock.Lang.english = FlipClock.Lang.English);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.Spanish = { years: "Años", months: "Meses", days: "Días", hours: "Horas", minutes: "Minutos", seconds: "Segundos" }),
            (FlipClock.Lang.es = FlipClock.Lang.Spanish),
            (FlipClock.Lang["es-es"] = FlipClock.Lang.Spanish),
            (FlipClock.Lang.spanish = FlipClock.Lang.Spanish);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.Finnish = { years: "Vuotta", months: "Kuukautta", days: "Päivää", hours: "Tuntia", minutes: "Minuuttia", seconds: "Sekuntia" }),
            (FlipClock.Lang.fi = FlipClock.Lang.Finnish),
            (FlipClock.Lang["fi-fi"] = FlipClock.Lang.Finnish),
            (FlipClock.Lang.finnish = FlipClock.Lang.Finnish);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.French = { years: "Ans", months: "Mois", days: "Jours", hours: "Heures", minutes: "Minutes", seconds: "Secondes" }),
            (FlipClock.Lang.fr = FlipClock.Lang.French),
            (FlipClock.Lang["fr-ca"] = FlipClock.Lang.French),
            (FlipClock.Lang.french = FlipClock.Lang.French);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.Italian = { years: "Anni", months: "Mesi", days: "Giorni", hours: "Ore", minutes: "Minuti", seconds: "Secondi" }),
            (FlipClock.Lang.it = FlipClock.Lang.Italian),
            (FlipClock.Lang["it-it"] = FlipClock.Lang.Italian),
            (FlipClock.Lang.italian = FlipClock.Lang.Italian);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.Latvian = { years: "Gadi", months: "Mēneši", days: "Dienas", hours: "Stundas", minutes: "Minūtes", seconds: "Sekundes" }),
            (FlipClock.Lang.lv = FlipClock.Lang.Latvian),
            (FlipClock.Lang["lv-lv"] = FlipClock.Lang.Latvian),
            (FlipClock.Lang.latvian = FlipClock.Lang.Latvian);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.Dutch = { years: "Jaren", months: "Maanden", days: "Dagen", hours: "Uren", minutes: "Minuten", seconds: "Seconden" }),
            (FlipClock.Lang.nl = FlipClock.Lang.Dutch),
            (FlipClock.Lang["nl-be"] = FlipClock.Lang.Dutch),
            (FlipClock.Lang.dutch = FlipClock.Lang.Dutch);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.Norwegian = { years: "År", months: "Måneder", days: "Dager", hours: "Timer", minutes: "Minutter", seconds: "Sekunder" }),
            (FlipClock.Lang.no = FlipClock.Lang.Norwegian),
            (FlipClock.Lang.nb = FlipClock.Lang.Norwegian),
            (FlipClock.Lang["no-nb"] = FlipClock.Lang.Norwegian),
            (FlipClock.Lang.norwegian = FlipClock.Lang.Norwegian);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.Portuguese = { years: "Anos", months: "Meses", days: "Dias", hours: "Horas", minutes: "Minutos", seconds: "Segundos" }),
            (FlipClock.Lang.pt = FlipClock.Lang.Portuguese),
            (FlipClock.Lang["pt-br"] = FlipClock.Lang.Portuguese),
            (FlipClock.Lang.portuguese = FlipClock.Lang.Portuguese);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.Russian = { years: "лет", months: "месяцев", days: "дней", hours: "часов", minutes: "минут", seconds: "секунд" }),
            (FlipClock.Lang.ru = FlipClock.Lang.Russian),
            (FlipClock.Lang["ru-ru"] = FlipClock.Lang.Russian),
            (FlipClock.Lang.russian = FlipClock.Lang.Russian);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.Swedish = { years: "År", months: "Månader", days: "Dagar", hours: "Timmar", minutes: "Minuter", seconds: "Sekunder" }),
            (FlipClock.Lang.sv = FlipClock.Lang.Swedish),
            (FlipClock.Lang["sv-se"] = FlipClock.Lang.Swedish),
            (FlipClock.Lang.swedish = FlipClock.Lang.Swedish);
    })(jQuery),
    (function (a) {
        (FlipClock.Lang.Chinese = { years: "年", months: "月", days: "日", hours: "时", minutes: "分", seconds: "秒" }),
            (FlipClock.Lang.zh = FlipClock.Lang.Chinese),
            (FlipClock.Lang["zh-cn"] = FlipClock.Lang.Chinese),
            (FlipClock.Lang.chinese = FlipClock.Lang.Chinese);
    })(jQuery);

/*
 * jQuery FlexSlider v2.7.2
 * Copyright 2012 WooThemes
 * Contributing Author: Tyler Smith
 */ !(function ($) {
    var e = !0;
    ($.flexslider = function (t, a) {
        var n = $(t);
        void 0 === a.rtl && "rtl" == $("html").attr("dir") && (a.rtl = !0), (n.vars = $.extend({}, $.flexslider.defaults, a));
        var i = n.vars.namespace,
            r = window.navigator && window.navigator.msPointerEnabled && window.MSGesture,
            s = ("ontouchstart" in window || r || (window.DocumentTouch && document instanceof DocumentTouch)) && n.vars.touch,
            o = "click touchend MSPointerUp keyup",
            l = "",
            c,
            d = "vertical" === n.vars.direction,
            u = n.vars.reverse,
            v = n.vars.itemWidth > 0,
            p = "fade" === n.vars.animation,
            m = "" !== n.vars.asNavFor,
            f = {};
        $.data(t, "flexslider", n),
            (f = {
                init: function () {
                    (n.animating = !1),
                        (n.currentSlide = parseInt(n.vars.startAt ? n.vars.startAt : 0, 10)),
                        isNaN(n.currentSlide) && (n.currentSlide = 0),
                        (n.animatingTo = n.currentSlide),
                        (n.atEnd = 0 === n.currentSlide || n.currentSlide === n.last),
                        (n.containerSelector = n.vars.selector.substr(0, n.vars.selector.search(" "))),
                        (n.slides = $(n.vars.selector, n)),
                        (n.container = $(n.containerSelector, n)),
                        (n.count = n.slides.length),
                        (n.syncExists = $(n.vars.sync).length > 0),
                        "slide" === n.vars.animation && (n.vars.animation = "swing"),
                        (n.prop = d ? "top" : n.vars.rtl ? "marginRight" : "marginLeft"),
                        (n.args = {}),
                        (n.manualPause = !1),
                        (n.stopped = !1),
                        (n.started = !1),
                        (n.startTimeout = null),
                        (n.transitions =
                            !n.vars.video &&
                            !p &&
                            n.vars.useCSS &&
                            (function () {
                                var e = document.createElement("div"),
                                    t = ["perspectiveProperty", "WebkitPerspective", "MozPerspective", "OPerspective", "msPerspective"];
                                for (var a in t) if (void 0 !== e.style[t[a]]) return (n.pfx = t[a].replace("Perspective", "").toLowerCase()), (n.prop = "-" + n.pfx + "-transform"), !0;
                                return !1;
                            })()),
                        (n.isFirefox = navigator.userAgent.toLowerCase().indexOf("firefox") > -1),
                        (n.ensureAnimationEnd = ""),
                        "" !== n.vars.controlsContainer && (n.controlsContainer = $(n.vars.controlsContainer).length > 0 && $(n.vars.controlsContainer)),
                        "" !== n.vars.manualControls && (n.manualControls = $(n.vars.manualControls).length > 0 && $(n.vars.manualControls)),
                        "" !== n.vars.customDirectionNav && (n.customDirectionNav = 2 === $(n.vars.customDirectionNav).length && $(n.vars.customDirectionNav)),
                        n.vars.randomize &&
                            (n.slides.sort(function () {
                                return Math.round(Math.random()) - 0.5;
                            }),
                            n.container.empty().append(n.slides)),
                        n.doMath(),
                        n.setup("init"),
                        n.vars.controlNav && f.controlNav.setup(),
                        n.vars.directionNav && f.directionNav.setup(),
                        n.vars.keyboard &&
                            (1 === $(n.containerSelector).length || n.vars.multipleKeyboard) &&
                            $(document).bind("keyup", function (e) {
                                var t = e.keyCode;
                                if (!n.animating && (39 === t || 37 === t)) {
                                    var a = n.vars.rtl ? (37 === t ? n.getTarget("next") : 39 === t && n.getTarget("prev")) : 39 === t ? n.getTarget("next") : 37 === t && n.getTarget("prev");
                                    n.flexAnimate(a, n.vars.pauseOnAction);
                                }
                            }),
                        n.vars.mousewheel &&
                            n.bind("mousewheel", function (e, t, a, i) {
                                e.preventDefault();
                                var r = t < 0 ? n.getTarget("next") : n.getTarget("prev");
                                n.flexAnimate(r, n.vars.pauseOnAction);
                            }),
                        n.vars.pausePlay && f.pausePlay.setup(),
                        n.vars.slideshow && n.vars.pauseInvisible && f.pauseInvisible.init(),
                        n.vars.slideshow &&
                            (n.vars.pauseOnHover &&
                                n.hover(
                                    function () {
                                        n.manualPlay || n.manualPause || n.pause();
                                    },
                                    function () {
                                        n.manualPause || n.manualPlay || n.stopped || n.play();
                                    }
                                ),
                            (n.vars.pauseInvisible && f.pauseInvisible.isHidden()) || (n.vars.initDelay > 0 ? (n.startTimeout = setTimeout(n.play, n.vars.initDelay)) : n.play())),
                        m && f.asNav.setup(),
                        s && n.vars.touch && f.touch(),
                        (!p || (p && n.vars.smoothHeight)) && $(window).bind("resize orientationchange focus", f.resize),
                        n.find("img").attr("draggable", "false"),
                        setTimeout(function () {
                            n.vars.start(n);
                        }, 200);
                },
                asNav: {
                    setup: function () {
                        (n.asNav = !0),
                            (n.animatingTo = Math.floor(n.currentSlide / n.move)),
                            (n.currentItem = n.currentSlide),
                            n.slides
                                .removeClass(i + "active-slide")
                                .eq(n.currentItem)
                                .addClass(i + "active-slide"),
                            r
                                ? ((t._slider = n),
                                  n.slides.each(function () {
                                      var e = this;
                                      (e._gesture = new MSGesture()),
                                          (e._gesture.target = e),
                                          e.addEventListener(
                                              "MSPointerDown",
                                              function (e) {
                                                  e.preventDefault(), e.currentTarget._gesture && e.currentTarget._gesture.addPointer(e.pointerId);
                                              },
                                              !1
                                          ),
                                          e.addEventListener("MSGestureTap", function (e) {
                                              e.preventDefault();
                                              var t = $(this),
                                                  a = t.index();
                                              $(n.vars.asNavFor).data("flexslider").animating || t.hasClass("active") || ((n.direction = n.currentItem < a ? "next" : "prev"), n.flexAnimate(a, n.vars.pauseOnAction, !1, !0, !0));
                                          });
                                  }))
                                : n.slides.on(o, function (e) {
                                      e.preventDefault();
                                      var t = $(this),
                                          a = t.index(),
                                          r;
                                      (r = n.vars.rtl ? -1 * (t.offset().right - $(n).scrollLeft()) : t.offset().left - $(n).scrollLeft()),
                                          r <= 0 && t.hasClass(i + "active-slide")
                                              ? n.flexAnimate(n.getTarget("prev"), !0)
                                              : $(n.vars.asNavFor).data("flexslider").animating || t.hasClass(i + "active-slide") || ((n.direction = n.currentItem < a ? "next" : "prev"), n.flexAnimate(a, n.vars.pauseOnAction, !1, !0, !0));
                                  });
                    },
                },
                controlNav: {
                    setup: function () {
                        n.manualControls ? f.controlNav.setupManual() : f.controlNav.setupPaging();
                    },
                    setupPaging: function () {
                        var e = "thumbnails" === n.vars.controlNav ? "control-thumbs" : "control-paging",
                            t = 1,
                            a,
                            r;
                        if (((n.controlNavScaffold = $('<ol class="' + i + "control-nav " + i + e + '"></ol>')), n.pagingCount > 1))
                            for (var s = 0; s < n.pagingCount; s++) {
                                if (
                                    ((r = n.slides.eq(s)),
                                    void 0 === r.attr("data-thumb-alt") && r.attr("data-thumb-alt", ""),
                                    (a = $("<a></a>").attr("href", "#").text(t)),
                                    "thumbnails" === n.vars.controlNav && (a = $("<img/>").attr("src", r.attr("data-thumb"))),
                                    "" !== r.attr("data-thumb-alt") && a.attr("alt", r.attr("data-thumb-alt")),
                                    "thumbnails" === n.vars.controlNav && !0 === n.vars.thumbCaptions)
                                ) {
                                    var c = r.attr("data-thumbcaption");
                                    if ("" !== c && void 0 !== c) {
                                        var d = $("<span></span>")
                                            .addClass(i + "caption")
                                            .text(c);
                                        a.append(d);
                                    }
                                }
                                var u = $("<li>");
                                a.appendTo(u), u.append("</li>"), n.controlNavScaffold.append(u), t++;
                            }
                        n.controlsContainer ? $(n.controlsContainer).append(n.controlNavScaffold) : n.append(n.controlNavScaffold),
                            f.controlNav.set(),
                            f.controlNav.active(),
                            n.controlNavScaffold.delegate("a, img", o, function (e) {
                                if ((e.preventDefault(), "" === l || l === e.type)) {
                                    var t = $(this),
                                        a = n.controlNav.index(t);
                                    t.hasClass(i + "active") || ((n.direction = a > n.currentSlide ? "next" : "prev"), n.flexAnimate(a, n.vars.pauseOnAction));
                                }
                                "" === l && (l = e.type), f.setToClearWatchedEvent();
                            });
                    },
                    setupManual: function () {
                        (n.controlNav = n.manualControls),
                            f.controlNav.active(),
                            n.controlNav.bind(o, function (e) {
                                if ((e.preventDefault(), "" === l || l === e.type)) {
                                    var t = $(this),
                                        a = n.controlNav.index(t);
                                    t.hasClass(i + "active") || (a > n.currentSlide ? (n.direction = "next") : (n.direction = "prev"), n.flexAnimate(a, n.vars.pauseOnAction));
                                }
                                "" === l && (l = e.type), f.setToClearWatchedEvent();
                            });
                    },
                    set: function () {
                        var e = "thumbnails" === n.vars.controlNav ? "img" : "a";
                        n.controlNav = $("." + i + "control-nav li " + e, n.controlsContainer ? n.controlsContainer : n);
                    },
                    active: function () {
                        n.controlNav
                            .removeClass(i + "active")
                            .eq(n.animatingTo)
                            .addClass(i + "active");
                    },
                    update: function (e, t) {
                        n.pagingCount > 1 && "add" === e
                            ? n.controlNavScaffold.append($('<li><a href="#">' + n.count + "</a></li>"))
                            : 1 === n.pagingCount
                            ? n.controlNavScaffold.find("li").remove()
                            : n.controlNav.eq(t).closest("li").remove(),
                            f.controlNav.set(),
                            n.pagingCount > 1 && n.pagingCount !== n.controlNav.length ? n.update(t, e) : f.controlNav.active();
                    },
                },
                directionNav: {
                    setup: function () {
                        var e = $(
                            '<ul class="' +
                                i +
                                'direction-nav"><li class="' +
                                i +
                                'nav-prev"><a class="' +
                                i +
                                'prev" href="#">' +
                                n.vars.prevText +
                                '</a></li><li class="' +
                                i +
                                'nav-next"><a class="' +
                                i +
                                'next" href="#">' +
                                n.vars.nextText +
                                "</a></li></ul>"
                        );
                        n.customDirectionNav
                            ? (n.directionNav = n.customDirectionNav)
                            : n.controlsContainer
                            ? ($(n.controlsContainer).append(e), (n.directionNav = $("." + i + "direction-nav li a", n.controlsContainer)))
                            : (n.append(e), (n.directionNav = $("." + i + "direction-nav li a", n))),
                            f.directionNav.update(),
                            n.directionNav.bind(o, function (e) {
                                e.preventDefault();
                                var t;
                                ("" !== l && l !== e.type) || ((t = $(this).hasClass(i + "next") ? n.getTarget("next") : n.getTarget("prev")), n.flexAnimate(t, n.vars.pauseOnAction)), "" === l && (l = e.type), f.setToClearWatchedEvent();
                            });
                    },
                    update: function () {
                        var e = i + "disabled";
                        1 === n.pagingCount
                            ? n.directionNav.addClass(e).attr("tabindex", "-1")
                            : n.vars.animationLoop
                            ? n.directionNav.removeClass(e).removeAttr("tabindex")
                            : 0 === n.animatingTo
                            ? n.directionNav
                                  .removeClass(e)
                                  .filter("." + i + "prev")
                                  .addClass(e)
                                  .attr("tabindex", "-1")
                            : n.animatingTo === n.last
                            ? n.directionNav
                                  .removeClass(e)
                                  .filter("." + i + "next")
                                  .addClass(e)
                                  .attr("tabindex", "-1")
                            : n.directionNav.removeClass(e).removeAttr("tabindex");
                    },
                },
                pausePlay: {
                    setup: function () {
                        var e = $('<div class="' + i + 'pauseplay"><a href="#"></a></div>');
                        n.controlsContainer ? (n.controlsContainer.append(e), (n.pausePlay = $("." + i + "pauseplay a", n.controlsContainer))) : (n.append(e), (n.pausePlay = $("." + i + "pauseplay a", n))),
                            f.pausePlay.update(n.vars.slideshow ? i + "pause" : i + "play"),
                            n.pausePlay.bind(o, function (e) {
                                e.preventDefault(),
                                    ("" !== l && l !== e.type) || ($(this).hasClass(i + "pause") ? ((n.manualPause = !0), (n.manualPlay = !1), n.pause()) : ((n.manualPause = !1), (n.manualPlay = !0), n.play())),
                                    "" === l && (l = e.type),
                                    f.setToClearWatchedEvent();
                            });
                    },
                    update: function (e) {
                        "play" === e
                            ? n.pausePlay
                                  .removeClass(i + "pause")
                                  .addClass(i + "play")
                                  .html(n.vars.playText)
                            : n.pausePlay
                                  .removeClass(i + "play")
                                  .addClass(i + "pause")
                                  .html(n.vars.pauseText);
                    },
                },
                touch: function () {
                    function e(e) {
                        e.stopPropagation(),
                            n.animating
                                ? e.preventDefault()
                                : (n.pause(),
                                  t._gesture.addPointer(e.pointerId),
                                  (w = 0),
                                  (c = d ? n.h : n.w),
                                  (f = Number(new Date())),
                                  (l =
                                      v && u && n.animatingTo === n.last
                                          ? 0
                                          : v && u
                                          ? n.limit - (n.itemW + n.vars.itemMargin) * n.move * n.animatingTo
                                          : v && n.currentSlide === n.last
                                          ? n.limit
                                          : v
                                          ? (n.itemW + n.vars.itemMargin) * n.move * n.currentSlide
                                          : u
                                          ? (n.last - n.currentSlide + n.cloneOffset) * c
                                          : (n.currentSlide + n.cloneOffset) * c));
                    }
                    function a(e) {
                        e.stopPropagation();
                        var a = e.target._slider;
                        if (a) {
                            var n = -e.translationX,
                                i = -e.translationY;
                            if (((w += d ? i : n), (m = (a.vars.rtl ? -1 : 1) * w), (x = d ? Math.abs(w) < Math.abs(-n) : Math.abs(w) < Math.abs(-i)), e.detail === e.MSGESTURE_FLAG_INERTIA))
                                return void setImmediate(function () {
                                    t._gesture.stop();
                                });
                            (!x || Number(new Date()) - f > 500) &&
                                (e.preventDefault(),
                                !p && a.transitions && (a.vars.animationLoop || (m = w / ((0 === a.currentSlide && w < 0) || (a.currentSlide === a.last && w > 0) ? Math.abs(w) / c + 2 : 1)), a.setProps(l + m, "setTouch")));
                        }
                    }
                    function i(e) {
                        e.stopPropagation();
                        var t = e.target._slider;
                        if (t) {
                            if (t.animatingTo === t.currentSlide && !x && null !== m) {
                                var a = u ? -m : m,
                                    n = a > 0 ? t.getTarget("next") : t.getTarget("prev");
                                t.canAdvance(n) && ((Number(new Date()) - f < 550 && Math.abs(a) > 50) || Math.abs(a) > c / 2) ? t.flexAnimate(n, t.vars.pauseOnAction) : p || t.flexAnimate(t.currentSlide, t.vars.pauseOnAction, !0);
                            }
                            (s = null), (o = null), (m = null), (l = null), (w = 0);
                        }
                    }
                    var s,
                        o,
                        l,
                        c,
                        m,
                        f,
                        g,
                        h,
                        S,
                        x = !1,
                        y = 0,
                        b = 0,
                        w = 0;
                    r
                        ? ((t.style.msTouchAction = "none"),
                          (t._gesture = new MSGesture()),
                          (t._gesture.target = t),
                          t.addEventListener("MSPointerDown", e, !1),
                          (t._slider = n),
                          t.addEventListener("MSGestureChange", a, !1),
                          t.addEventListener("MSGestureEnd", i, !1))
                        : ((g = function (e) {
                              n.animating
                                  ? e.preventDefault()
                                  : (window.navigator.msPointerEnabled || 1 === e.touches.length) &&
                                    (n.pause(),
                                    (c = d ? n.h : n.w),
                                    (f = Number(new Date())),
                                    (y = e.touches[0].pageX),
                                    (b = e.touches[0].pageY),
                                    (l =
                                        v && u && n.animatingTo === n.last
                                            ? 0
                                            : v && u
                                            ? n.limit - (n.itemW + n.vars.itemMargin) * n.move * n.animatingTo
                                            : v && n.currentSlide === n.last
                                            ? n.limit
                                            : v
                                            ? (n.itemW + n.vars.itemMargin) * n.move * n.currentSlide
                                            : u
                                            ? (n.last - n.currentSlide + n.cloneOffset) * c
                                            : (n.currentSlide + n.cloneOffset) * c),
                                    (s = d ? b : y),
                                    (o = d ? y : b),
                                    t.addEventListener("touchmove", h, !1),
                                    t.addEventListener("touchend", S, !1));
                          }),
                          (h = function (e) {
                              (y = e.touches[0].pageX), (b = e.touches[0].pageY), (m = d ? s - b : (n.vars.rtl ? -1 : 1) * (s - y)), (x = d ? Math.abs(m) < Math.abs(y - o) : Math.abs(m) < Math.abs(b - o));
                              var t = 500;
                              (!x || Number(new Date()) - f > 500) &&
                                  (e.preventDefault(),
                                  !p && n.transitions && (n.vars.animationLoop || (m /= (0 === n.currentSlide && m < 0) || (n.currentSlide === n.last && m > 0) ? Math.abs(m) / c + 2 : 1), n.setProps(l + m, "setTouch")));
                          }),
                          (S = function (e) {
                              if ((t.removeEventListener("touchmove", h, !1), n.animatingTo === n.currentSlide && !x && null !== m)) {
                                  var a = u ? -m : m,
                                      i = a > 0 ? n.getTarget("next") : n.getTarget("prev");
                                  n.canAdvance(i) && ((Number(new Date()) - f < 550 && Math.abs(a) > 50) || Math.abs(a) > c / 2) ? n.flexAnimate(i, n.vars.pauseOnAction) : p || n.flexAnimate(n.currentSlide, n.vars.pauseOnAction, !0);
                              }
                              t.removeEventListener("touchend", S, !1), (s = null), (o = null), (m = null), (l = null);
                          }),
                          t.addEventListener("touchstart", g, !1));
                },
                resize: function () {
                    !n.animating &&
                        n.is(":visible") &&
                        (v || n.doMath(),
                        p
                            ? f.smoothHeight()
                            : v
                            ? (n.slides.width(n.computedW), n.update(n.pagingCount), n.setProps())
                            : d
                            ? (n.viewport.height(n.h), n.setProps(n.h, "setTotal"))
                            : (n.vars.smoothHeight && f.smoothHeight(), n.newSlides.width(n.computedW), n.setProps(n.computedW, "setTotal")));
                },
                smoothHeight: function (e) {
                    if (!d || p) {
                        var t = p ? n : n.viewport;
                        e ? t.animate({ height: n.slides.eq(n.animatingTo).innerHeight() }, e) : t.innerHeight(n.slides.eq(n.animatingTo).innerHeight());
                    }
                },
                sync: function (e) {
                    var t = $(n.vars.sync).data("flexslider"),
                        a = n.animatingTo;
                    switch (e) {
                        case "animate":
                            t.flexAnimate(a, n.vars.pauseOnAction, !1, !0);
                            break;
                        case "play":
                            t.playing || t.asNav || t.play();
                            break;
                        case "pause":
                            t.pause();
                            break;
                    }
                },
                uniqueID: function (e) {
                    return (
                        e
                            .filter("[id]")
                            .add(e.find("[id]"))
                            .each(function () {
                                var e = $(this);
                                e.attr("id", e.attr("id") + "_clone");
                            }),
                        e
                    );
                },
                pauseInvisible: {
                    visProp: null,
                    init: function () {
                        var e = f.pauseInvisible.getHiddenProp();
                        if (e) {
                            var t = e.replace(/[H|h]idden/, "") + "visibilitychange";
                            document.addEventListener(t, function () {
                                f.pauseInvisible.isHidden() ? (n.startTimeout ? clearTimeout(n.startTimeout) : n.pause()) : n.started ? n.play() : n.vars.initDelay > 0 ? setTimeout(n.play, n.vars.initDelay) : n.play();
                            });
                        }
                    },
                    isHidden: function () {
                        var e = f.pauseInvisible.getHiddenProp();
                        return !!e && document[e];
                    },
                    getHiddenProp: function () {
                        var e = ["webkit", "moz", "ms", "o"];
                        if ("hidden" in document) return "hidden";
                        for (var t = 0; t < e.length; t++) if (e[t] + "Hidden" in document) return e[t] + "Hidden";
                        return null;
                    },
                },
                setToClearWatchedEvent: function () {
                    clearTimeout(c),
                        (c = setTimeout(function () {
                            l = "";
                        }, 3e3));
                },
            }),
            (n.flexAnimate = function (e, t, a, r, o) {
                if (
                    (n.vars.animationLoop || e === n.currentSlide || (n.direction = e > n.currentSlide ? "next" : "prev"),
                    m && 1 === n.pagingCount && (n.direction = n.currentItem < e ? "next" : "prev"),
                    !n.animating && (n.canAdvance(e, o) || a) && n.is(":visible"))
                ) {
                    if (m && r) {
                        var l = $(n.vars.asNavFor).data("flexslider");
                        if (
                            ((n.atEnd = 0 === e || e === n.count - 1),
                            l.flexAnimate(e, !0, !1, !0, o),
                            (n.direction = n.currentItem < e ? "next" : "prev"),
                            (l.direction = n.direction),
                            Math.ceil((e + 1) / n.visible) - 1 === n.currentSlide || 0 === e)
                        )
                            return (
                                (n.currentItem = e),
                                n.slides
                                    .removeClass(i + "active-slide")
                                    .eq(e)
                                    .addClass(i + "active-slide"),
                                !1
                            );
                        (n.currentItem = e),
                            n.slides
                                .removeClass(i + "active-slide")
                                .eq(e)
                                .addClass(i + "active-slide"),
                            (e = Math.floor(e / n.visible));
                    }
                    if (
                        ((n.animating = !0),
                        (n.animatingTo = e),
                        t && n.pause(),
                        n.vars.before(n),
                        n.syncExists && !o && f.sync("animate"),
                        n.vars.controlNav && f.controlNav.active(),
                        v ||
                            n.slides
                                .removeClass(i + "active-slide")
                                .eq(e)
                                .addClass(i + "active-slide"),
                        (n.atEnd = 0 === e || e === n.last),
                        n.vars.directionNav && f.directionNav.update(),
                        e === n.last && (n.vars.end(n), n.vars.animationLoop || n.pause()),
                        p)
                    )
                        s
                            ? (n.slides.eq(n.currentSlide).css({ opacity: 0, zIndex: 1 }), n.slides.eq(e).css({ opacity: 1, zIndex: 2 }), n.wrapup(c))
                            : (n.slides.eq(n.currentSlide).css({ zIndex: 1 }).animate({ opacity: 0 }, n.vars.animationSpeed, n.vars.easing),
                              n.slides.eq(e).css({ zIndex: 2 }).animate({ opacity: 1 }, n.vars.animationSpeed, n.vars.easing, n.wrapup));
                    else {
                        var c = d ? n.slides.filter(":first").height() : n.computedW,
                            g,
                            h,
                            S;
                        v
                            ? ((g = n.vars.itemMargin), (S = (n.itemW + g) * n.move * n.animatingTo), (h = S > n.limit && 1 !== n.visible ? n.limit : S))
                            : (h =
                                  0 === n.currentSlide && e === n.count - 1 && n.vars.animationLoop && "next" !== n.direction
                                      ? u
                                          ? (n.count + n.cloneOffset) * c
                                          : 0
                                      : n.currentSlide === n.last && 0 === e && n.vars.animationLoop && "prev" !== n.direction
                                      ? u
                                          ? 0
                                          : (n.count + 1) * c
                                      : u
                                      ? (n.count - 1 - e + n.cloneOffset) * c
                                      : (e + n.cloneOffset) * c),
                            n.setProps(h, "", n.vars.animationSpeed),
                            n.transitions
                                ? ((n.vars.animationLoop && n.atEnd) || ((n.animating = !1), (n.currentSlide = n.animatingTo)),
                                  n.container.unbind("webkitTransitionEnd transitionend"),
                                  n.container.bind("webkitTransitionEnd transitionend", function () {
                                      clearTimeout(n.ensureAnimationEnd), n.wrapup(c);
                                  }),
                                  clearTimeout(n.ensureAnimationEnd),
                                  (n.ensureAnimationEnd = setTimeout(function () {
                                      n.wrapup(c);
                                  }, n.vars.animationSpeed + 100)))
                                : n.container.animate(n.args, n.vars.animationSpeed, n.vars.easing, function () {
                                      n.wrapup(c);
                                  });
                    }
                    n.vars.smoothHeight && f.smoothHeight(n.vars.animationSpeed);
                }
            }),
            (n.wrapup = function (e) {
                p || v || (0 === n.currentSlide && n.animatingTo === n.last && n.vars.animationLoop ? n.setProps(e, "jumpEnd") : n.currentSlide === n.last && 0 === n.animatingTo && n.vars.animationLoop && n.setProps(e, "jumpStart")),
                    (n.animating = !1),
                    (n.currentSlide = n.animatingTo),
                    n.vars.after(n);
            }),
            (n.animateSlides = function () {
                !n.animating && e && n.flexAnimate(n.getTarget("next"));
            }),
            (n.pause = function () {
                clearInterval(n.animatedSlides), (n.animatedSlides = null), (n.playing = !1), n.vars.pausePlay && f.pausePlay.update("play"), n.syncExists && f.sync("pause");
            }),
            (n.play = function () {
                n.playing && clearInterval(n.animatedSlides),
                    (n.animatedSlides = n.animatedSlides || setInterval(n.animateSlides, n.vars.slideshowSpeed)),
                    (n.started = n.playing = !0),
                    n.vars.pausePlay && f.pausePlay.update("pause"),
                    n.syncExists && f.sync("play");
            }),
            (n.stop = function () {
                n.pause(), (n.stopped = !0);
            }),
            (n.canAdvance = function (e, t) {
                var a = m ? n.pagingCount - 1 : n.last;
                return (
                    !!t ||
                    !(!m || n.currentItem !== n.count - 1 || 0 !== e || "prev" !== n.direction) ||
                    ((!m || 0 !== n.currentItem || e !== n.pagingCount - 1 || "next" === n.direction) &&
                        !(e === n.currentSlide && !m) &&
                        (!!n.vars.animationLoop || ((!n.atEnd || 0 !== n.currentSlide || e !== a || "next" === n.direction) && (!n.atEnd || n.currentSlide !== a || 0 !== e || "next" !== n.direction))))
                );
            }),
            (n.getTarget = function (e) {
                return (n.direction = e), "next" === e ? (n.currentSlide === n.last ? 0 : n.currentSlide + 1) : 0 === n.currentSlide ? n.last : n.currentSlide - 1;
            }),
            (n.setProps = function (e, t, a) {
                var i = (function () {
                    var a = e || (n.itemW + n.vars.itemMargin) * n.move * n.animatingTo;
                    return (
                        (function () {
                            if (v) return "setTouch" === t ? e : u && n.animatingTo === n.last ? 0 : u ? n.limit - (n.itemW + n.vars.itemMargin) * n.move * n.animatingTo : n.animatingTo === n.last ? n.limit : a;
                            switch (t) {
                                case "setTotal":
                                    return u ? (n.count - 1 - n.currentSlide + n.cloneOffset) * e : (n.currentSlide + n.cloneOffset) * e;
                                case "setTouch":
                                    return e;
                                case "jumpEnd":
                                    return u ? e : n.count * e;
                                case "jumpStart":
                                    return u ? n.count * e : e;
                                default:
                                    return e;
                            }
                        })() *
                            (n.vars.rtl ? 1 : -1) +
                        "px"
                    );
                })();
                n.transitions &&
                    ((i = n.isFirefox ? (d ? "translate3d(0," + i + ",0)" : "translate3d(" + parseInt(i) + "px,0,0)") : d ? "translate3d(0," + i + ",0)" : "translate3d(" + (n.vars.rtl ? -1 : 1) * parseInt(i) + "px,0,0)"),
                    (a = void 0 !== a ? a / 1e3 + "s" : "0s"),
                    n.container.css("-" + n.pfx + "-transition-duration", a),
                    n.container.css("transition-duration", a)),
                    (n.args[n.prop] = i),
                    (n.transitions || void 0 === a) && n.container.css(n.args),
                    n.container.css("transform", i);
            }),
            (n.setup = function (e) {
                if (p)
                    n.vars.rtl ? n.slides.css({ width: "100%", float: "right", marginLeft: "-100%", position: "relative" }) : n.slides.css({ width: "100%", float: "left", marginRight: "-100%", position: "relative" }),
                        "init" === e &&
                            (s
                                ? n.slides
                                      .css({ opacity: 0, display: "block", webkitTransition: "opacity " + n.vars.animationSpeed / 1e3 + "s ease", zIndex: 1 })
                                      .eq(n.currentSlide)
                                      .css({ opacity: 1, zIndex: 2 })
                                : 0 == n.vars.fadeFirstSlide
                                ? n.slides.css({ opacity: 0, display: "block", zIndex: 1 }).eq(n.currentSlide).css({ zIndex: 2 }).css({ opacity: 1 })
                                : n.slides.css({ opacity: 0, display: "block", zIndex: 1 }).eq(n.currentSlide).css({ zIndex: 2 }).animate({ opacity: 1 }, n.vars.animationSpeed, n.vars.easing)),
                        n.vars.smoothHeight && f.smoothHeight();
                else {
                    var t, a;
                    "init" === e &&
                        ((n.viewport = $('<div class="' + i + 'viewport"></div>')
                            .css({ overflow: "hidden", position: "relative" })
                            .appendTo(n)
                            .append(n.container)),
                        (n.cloneCount = 0),
                        (n.cloneOffset = 0),
                        u && ((a = $.makeArray(n.slides).reverse()), (n.slides = $(a)), n.container.empty().append(n.slides))),
                        n.vars.animationLoop &&
                            !v &&
                            ((n.cloneCount = 2),
                            (n.cloneOffset = 1),
                            "init" !== e && n.container.find(".clone").remove(),
                            n.container.append(f.uniqueID(n.slides.first().clone().addClass("clone")).attr("aria-hidden", "true")).prepend(f.uniqueID(n.slides.last().clone().addClass("clone")).attr("aria-hidden", "true"))),
                        (n.newSlides = $(n.vars.selector, n)),
                        (t = u ? n.count - 1 - n.currentSlide + n.cloneOffset : n.currentSlide + n.cloneOffset),
                        d && !v
                            ? (n.container
                                  .height(200 * (n.count + n.cloneCount) + "%")
                                  .css("position", "absolute")
                                  .width("100%"),
                              setTimeout(
                                  function () {
                                      n.newSlides.css({ display: "block" }), n.doMath(), n.viewport.height(n.h), n.setProps(t * n.h, "init");
                                  },
                                  "init" === e ? 100 : 0
                              ))
                            : (n.container.width(200 * (n.count + n.cloneCount) + "%"),
                              n.setProps(t * n.computedW, "init"),
                              setTimeout(
                                  function () {
                                      n.doMath(),
                                          n.vars.rtl && n.isFirefox
                                              ? n.newSlides.css({ width: n.computedW, marginRight: n.computedM, float: "right", display: "block" })
                                              : n.newSlides.css({ width: n.computedW, marginRight: n.computedM, float: "left", display: "block" }),
                                          n.vars.smoothHeight && f.smoothHeight();
                                  },
                                  "init" === e ? 100 : 0
                              ));
                }
                v ||
                    n.slides
                        .removeClass(i + "active-slide")
                        .eq(n.currentSlide)
                        .addClass(i + "active-slide"),
                    n.vars.init(n);
            }),
            (n.doMath = function () {
                var e = n.slides.first(),
                    t = n.vars.itemMargin,
                    a = n.vars.minItems,
                    i = n.vars.maxItems;
                (n.w = void 0 === n.viewport ? n.width() : n.viewport.width()),
                    n.isFirefox && (n.w = n.width()),
                    (n.h = e.height()),
                    (n.boxPadding = e.outerWidth() - e.width()),
                    v
                        ? ((n.itemT = n.vars.itemWidth + t),
                          (n.itemM = t),
                          (n.minW = a ? a * n.itemT : n.w),
                          (n.maxW = i ? i * n.itemT - t : n.w),
                          (n.itemW = n.minW > n.w ? (n.w - t * (a - 1)) / a : n.maxW < n.w ? (n.w - t * (i - 1)) / i : n.vars.itemWidth > n.w ? n.w : n.vars.itemWidth),
                          (n.visible = Math.floor(n.w / n.itemW)),
                          (n.move = n.vars.move > 0 && n.vars.move < n.visible ? n.vars.move : n.visible),
                          (n.pagingCount = Math.ceil((n.count - n.visible) / n.move + 1)),
                          (n.last = n.pagingCount - 1),
                          (n.limit = 1 === n.pagingCount ? 0 : n.vars.itemWidth > n.w ? n.itemW * (n.count - 1) + t * (n.count - 1) : (n.itemW + t) * n.count - n.w - t))
                        : ((n.itemW = n.w), (n.itemM = t), (n.pagingCount = n.count), (n.last = n.count - 1)),
                    (n.computedW = n.itemW - n.boxPadding),
                    (n.computedM = n.itemM);
            }),
            (n.update = function (e, t) {
                n.doMath(),
                    v || (e < n.currentSlide ? (n.currentSlide += 1) : e <= n.currentSlide && 0 !== e && (n.currentSlide -= 1), (n.animatingTo = n.currentSlide)),
                    n.vars.controlNav &&
                        !n.manualControls &&
                        (("add" === t && !v) || n.pagingCount > n.controlNav.length
                            ? f.controlNav.update("add")
                            : (("remove" === t && !v) || n.pagingCount < n.controlNav.length) && (v && n.currentSlide > n.last && ((n.currentSlide -= 1), (n.animatingTo -= 1)), f.controlNav.update("remove", n.last))),
                    n.vars.directionNav && f.directionNav.update();
            }),
            (n.addSlide = function (e, t) {
                var a = $(e);
                (n.count += 1),
                    (n.last = n.count - 1),
                    d && u ? (void 0 !== t ? n.slides.eq(n.count - t).after(a) : n.container.prepend(a)) : void 0 !== t ? n.slides.eq(t).before(a) : n.container.append(a),
                    n.update(t, "add"),
                    (n.slides = $(n.vars.selector + ":not(.clone)", n)),
                    n.setup(),
                    n.vars.added(n);
            }),
            (n.removeSlide = function (e) {
                var t = isNaN(e) ? n.slides.index($(e)) : e;
                (n.count -= 1),
                    (n.last = n.count - 1),
                    isNaN(e) ? $(e, n.slides).remove() : d && u ? n.slides.eq(n.last).remove() : n.slides.eq(e).remove(),
                    n.doMath(),
                    n.update(t, "remove"),
                    (n.slides = $(n.vars.selector + ":not(.clone)", n)),
                    n.setup(),
                    n.vars.removed(n);
            }),
            f.init();
    }),
        $(window)
            .blur(function (t) {
                e = !1;
            })
            .focus(function (t) {
                e = !0;
            }),
        ($.flexslider.defaults = {
            namespace: "flex-",
            selector: ".slides > li",
            animation: "fade",
            easing: "swing",
            direction: "horizontal",
            reverse: !1,
            animationLoop: !0,
            smoothHeight: !1,
            startAt: 0,
            slideshow: !0,
            slideshowSpeed: 7e3,
            animationSpeed: 600,
            initDelay: 0,
            randomize: !1,
            fadeFirstSlide: !0,
            thumbCaptions: !1,
            pauseOnAction: !0,
            pauseOnHover: !1,
            pauseInvisible: !0,
            useCSS: !0,
            touch: !0,
            video: !1,
            controlNav: !0,
            directionNav: !0,
            prevText: "Previous",
            nextText: "Next",
            keyboard: !0,
            multipleKeyboard: !1,
            mousewheel: !1,
            pausePlay: !1,
            pauseText: "Pause",
            playText: "Play",
            controlsContainer: "",
            manualControls: "",
            customDirectionNav: "",
            sync: "",
            asNavFor: "",
            itemWidth: 0,
            itemMargin: 0,
            minItems: 1,
            maxItems: 0,
            move: 0,
            allowOneSlide: !0,
            isFirefox: !1,
            start: function () {},
            before: function () {},
            after: function () {},
            end: function () {},
            added: function () {},
            removed: function () {},
            init: function () {},
            rtl: !1,
        }),
        ($.fn.flexslider = function (e) {
            if ((void 0 === e && (e = {}), "object" == typeof e))
                return this.each(function () {
                    var t = $(this),
                        a = e.selector ? e.selector : ".slides > li",
                        n = t.find(a);
                    (1 === n.length && !1 === e.allowOneSlide) || 0 === n.length ? (n.fadeIn(400), e.start && e.start(t)) : void 0 === t.data("flexslider") && new $.flexslider(this, e);
                });
            var t = $(this).data("flexslider");
            switch (e) {
                case "play":
                    t.play();
                    break;
                case "pause":
                    t.pause();
                    break;
                case "stop":
                    t.stop();
                    break;
                case "next":
                    t.flexAnimate(t.getTarget("next"), !0);
                    break;
                case "prev":
                case "previous":
                    t.flexAnimate(t.getTarget("prev"), !0);
                    break;
                default:
                    "number" == typeof e && t.flexAnimate(e, !0);
            }
        });
})(jQuery);
/*! jQuery & Zepto Lazy v1.7.10 - http://jquery.eisbehr.de/lazy - MIT&GPL-2.0 license - Copyright 2012-2018 Daniel 'Eisbehr' Kern */
!(function (t, e) {
    "use strict";
    function r(r, a, i, u, l) {
        function f() {
            (L = t.devicePixelRatio > 1),
                (i = c(i)),
                a.delay >= 0 &&
                    setTimeout(function () {
                        s(!0);
                    }, a.delay),
                (a.delay < 0 || a.combined) &&
                    ((u.e = v(a.throttle, function (t) {
                        "resize" === t.type && (w = B = -1), s(t.all);
                    })),
                    (u.a = function (t) {
                        (t = c(t)), i.push.apply(i, t);
                    }),
                    (u.g = function () {
                        return (i = n(i).filter(function () {
                            return !n(this).data(a.loadedName);
                        }));
                    }),
                    (u.f = function (t) {
                        for (var e = 0; e < t.length; e++) {
                            var r = i.filter(function () {
                                return this === t[e];
                            });
                            r.length && s(!1, r);
                        }
                    }),
                    s(),
                    n(a.appendScroll).on("scroll." + l + " resize." + l, u.e));
        }
        function c(t) {
            var i = a.defaultImage,
                o = a.placeholder,
                u = a.imageBase,
                l = a.srcsetAttribute,
                f = a.loaderAttribute,
                c = a._f || {};
            t = n(t)
                .filter(function () {
                    var t = n(this),
                        r = m(this);
                    return !t.data(a.handledName) && (t.attr(a.attribute) || t.attr(l) || t.attr(f) || c[r] !== e);
                })
                .data("plugin_" + a.name, r);
            for (var s = 0, d = t.length; s < d; s++) {
                var A = n(t[s]),
                    g = m(t[s]),
                    h = A.attr(a.imageBaseAttribute) || u;
                g === N && h && A.attr(l) && A.attr(l, b(A.attr(l), h)),
                    c[g] === e || A.attr(f) || A.attr(f, c[g]),
                    g === N && i && !A.attr(E) ? A.attr(E, i) : g === N || !o || (A.css(O) && "none" !== A.css(O)) || A.css(O, "url('" + o + "')");
            }
            return t;
        }
        function s(t, e) {
            if (!i.length) return void (a.autoDestroy && r.destroy());
            for (var o = e || i, u = !1, l = a.imageBase || "", f = a.srcsetAttribute, c = a.handledName, s = 0; s < o.length; s++)
                if (t || e || A(o[s])) {
                    var g = n(o[s]),
                        h = m(o[s]),
                        b = g.attr(a.attribute),
                        v = g.attr(a.imageBaseAttribute) || l,
                        p = g.attr(a.loaderAttribute);
                    g.data(c) ||
                        (a.visibleOnly && !g.is(":visible")) ||
                        !(((b || g.attr(f)) && ((h === N && (v + b !== g.attr(E) || g.attr(f) !== g.attr(F))) || (h !== N && v + b !== g.css(O)))) || p) ||
                        ((u = !0), g.data(c, !0), d(g, h, v, p));
                }
            u &&
                (i = n(i).filter(function () {
                    return !n(this).data(c);
                }));
        }
        function d(t, e, r, i) {
            ++z;
            var o = function () {
                y("onError", t), p(), (o = n.noop);
            };
            y("beforeLoad", t);
            var u = a.attribute,
                l = a.srcsetAttribute,
                f = a.sizesAttribute,
                c = a.retinaAttribute,
                s = a.removeAttribute,
                d = a.loadedName,
                A = t.attr(c);
            if (i) {
                var g = function () {
                    s && t.removeAttr(a.loaderAttribute), t.data(d, !0), y(T, t), setTimeout(p, 1), (g = n.noop);
                };
                t.off(I).one(I, o).one(D, g),
                    y(i, t, function (e) {
                        e ? (t.off(D), g()) : (t.off(I), o());
                    }) || t.trigger(I);
            } else {
                var h = n(new Image());
                h.one(I, o).one(D, function () {
                    t.hide(),
                        e === N ? t.attr(C, h.attr(C)).attr(F, h.attr(F)).attr(E, h.attr(E)) : t.css(O, "url('" + h.attr(E) + "')"),
                        t[a.effect](a.effectTime),
                        s && (t.removeAttr(u + " " + l + " " + c + " " + a.imageBaseAttribute), f !== C && t.removeAttr(f)),
                        t.data(d, !0),
                        y(T, t),
                        h.remove(),
                        p();
                });
                var m = (L && A ? A : t.attr(u)) || "";
                h
                    .attr(C, t.attr(f))
                    .attr(F, t.attr(l))
                    .attr(E, m ? r + m : null),
                    h.complete && h.trigger(D);
            }
        }
        function A(t) {
            var e = t.getBoundingClientRect(),
                r = a.scrollDirection,
                n = a.threshold,
                i = h() + n > e.top && -n < e.bottom,
                o = g() + n > e.left && -n < e.right;
            return "vertical" === r ? i : "horizontal" === r ? o : i && o;
        }
        function g() {
            return w >= 0 ? w : (w = n(t).width());
        }
        function h() {
            return B >= 0 ? B : (B = n(t).height());
        }
        function m(t) {
            return t.tagName.toLowerCase();
        }
        function b(t, e) {
            if (e) {
                var r = t.split(",");
                t = "";
                for (var a = 0, n = r.length; a < n; a++) t += e + r[a].trim() + (a !== n - 1 ? "," : "");
            }
            return t;
        }
        function v(t, e) {
            var n,
                i = 0;
            return function (o, u) {
                function l() {
                    (i = +new Date()), e.call(r, o);
                }
                var f = +new Date() - i;
                n && clearTimeout(n), f > t || !a.enableThrottle || u ? l() : (n = setTimeout(l, t - f));
            };
        }
        function p() {
            --z, i.length || z || y("onFinishedAll");
        }
        function y(t, e, n) {
            return !!(t = a[t]) && (t.apply(r, [].slice.call(arguments, 1)), !0);
        }
        var z = 0,
            w = -1,
            B = -1,
            L = !1,
            T = "afterLoad",
            D = "load",
            I = "error",
            N = "img",
            E = "src",
            F = "srcset",
            C = "sizes",
            O = "background-image";
        "event" === a.bind || o ? f() : n(t).on(D + "." + l, f);
    }
    function a(a, o) {
        var u = this,
            l = n.extend({}, u.config, o),
            f = {},
            c = l.name + "-" + ++i;
        return (
            (u.config = function (t, r) {
                return r === e ? l[t] : ((l[t] = r), u);
            }),
            (u.addItems = function (t) {
                return f.a && f.a("string" === n.type(t) ? n(t) : t), u;
            }),
            (u.getItems = function () {
                return f.g ? f.g() : {};
            }),
            (u.update = function (t) {
                return f.e && f.e({}, !t), u;
            }),
            (u.force = function (t) {
                return f.f && f.f("string" === n.type(t) ? n(t) : t), u;
            }),
            (u.loadAll = function () {
                return f.e && f.e({ all: !0 }, !0), u;
            }),
            (u.destroy = function () {
                return n(l.appendScroll).off("." + c, f.e), n(t).off("." + c), (f = {}), e;
            }),
            r(u, l, a, f, c),
            l.chainable ? a : u
        );
    }
    var n = t.jQuery || t.Zepto,
        i = 0,
        o = !1;
    (n.fn.Lazy = n.fn.lazy = function (t) {
        return new a(this, t);
    }),
        (n.Lazy = n.lazy = function (t, r, i) {
            if ((n.isFunction(r) && ((i = r), (r = [])), n.isFunction(i))) {
                (t = n.isArray(t) ? t : [t]), (r = n.isArray(r) ? r : [r]);
                for (var o = a.prototype.config, u = o._f || (o._f = {}), l = 0, f = t.length; l < f; l++) (o[t[l]] === e || n.isFunction(o[t[l]])) && (o[t[l]] = i);
                for (var c = 0, s = r.length; c < s; c++) u[r[c]] = t[0];
            }
        }),
        (a.prototype.config = {
            name: "lazy",
            chainable: !0,
            autoDestroy: !0,
            bind: "load",
            threshold: 500,
            visibleOnly: !1,
            appendScroll: t,
            scrollDirection: "both",
            imageBase: null,
            defaultImage: "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==",
            placeholder: null,
            delay: -1,
            combined: !1,
            attribute: "data-src",
            srcsetAttribute: "data-srcset",
            sizesAttribute: "data-sizes",
            retinaAttribute: "data-retina",
            loaderAttribute: "data-loader",
            imageBaseAttribute: "data-imagebase",
            removeAttribute: !0,
            handledName: "handled",
            loadedName: "loaded",
            effect: "show",
            effectTime: 0,
            enableThrottle: !0,
            throttle: 250,
            beforeLoad: e,
            afterLoad: e,
            onError: e,
            onFinishedAll: e,
        }),
        n(t).on("load", function () {
            o = !0;
        });
})(window);
/*
    jQuery Masked Input Plugin
    Copyright (c) 2007 - 2015 Josh Bush (digitalbush.com)
    Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
    Version: 1.4.1
*/
!(function (a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : a("object" == typeof exports ? require("jquery") : jQuery);
})(function (a) {
    var b,
        c = navigator.userAgent,
        d = /iphone/i.test(c),
        e = /chrome/i.test(c),
        f = /android/i.test(c);
    (a.mask = { definitions: { 9: "[0-9]", a: "[A-Za-z]", "*": "[A-Za-z0-9]" }, autoclear: !0, dataName: "rawMaskFn", placeholder: "_" }),
        a.fn.extend({
            caret: function (a, b) {
                var c;
                if (0 !== this.length && !this.is(":hidden"))
                    return "number" == typeof a
                        ? ((b = "number" == typeof b ? b : a),
                          this.each(function () {
                              this.setSelectionRange ? this.setSelectionRange(a, b) : this.createTextRange && ((c = this.createTextRange()), c.collapse(!0), c.moveEnd("character", b), c.moveStart("character", a), c.select());
                          }))
                        : (this[0].setSelectionRange
                              ? ((a = this[0].selectionStart), (b = this[0].selectionEnd))
                              : document.selection && document.selection.createRange && ((c = document.selection.createRange()), (a = 0 - c.duplicate().moveStart("character", -1e5)), (b = a + c.text.length)),
                          { begin: a, end: b });
            },
            unmask: function () {
                return this.trigger("unmask");
            },
            mask: function (c, g) {
                var h, i, j, k, l, m, n, o;
                if (!c && this.length > 0) {
                    h = a(this[0]);
                    var p = h.data(a.mask.dataName);
                    return p ? p() : void 0;
                }
                return (
                    (g = a.extend({ autoclear: a.mask.autoclear, placeholder: a.mask.placeholder, completed: null }, g)),
                    (i = a.mask.definitions),
                    (j = []),
                    (k = n = c.length),
                    (l = null),
                    a.each(c.split(""), function (a, b) {
                        "?" == b ? (n--, (k = a)) : i[b] ? (j.push(new RegExp(i[b])), null === l && (l = j.length - 1), k > a && (m = j.length - 1)) : j.push(null);
                    }),
                    this.trigger("unmask").each(function () {
                        function h() {
                            if (g.completed) {
                                for (var a = l; m >= a; a++) if (j[a] && C[a] === p(a)) return;
                                g.completed.call(B);
                            }
                        }
                        function p(a) {
                            return g.placeholder.charAt(a < g.placeholder.length ? a : 0);
                        }
                        function q(a) {
                            for (; ++a < n && !j[a]; );
                            return a;
                        }
                        function r(a) {
                            for (; --a >= 0 && !j[a]; );
                            return a;
                        }
                        function s(a, b) {
                            var c, d;
                            if (!(0 > a)) {
                                for (c = a, d = q(b); n > c; c++)
                                    if (j[c]) {
                                        if (!(n > d && j[c].test(C[d]))) break;
                                        (C[c] = C[d]), (C[d] = p(d)), (d = q(d));
                                    }
                                z(), B.caret(Math.max(l, a));
                            }
                        }
                        function t(a) {
                            var b, c, d, e;
                            for (b = a, c = p(a); n > b; b++)
                                if (j[b]) {
                                    if (((d = q(b)), (e = C[b]), (C[b] = c), !(n > d && j[d].test(e)))) break;
                                    c = e;
                                }
                        }
                        function u() {
                            var a = B.val(),
                                b = B.caret();
                            if (o && o.length && o.length > a.length) {
                                for (A(!0); b.begin > 0 && !j[b.begin - 1]; ) b.begin--;
                                if (0 === b.begin) for (; b.begin < l && !j[b.begin]; ) b.begin++;
                                B.caret(b.begin, b.begin);
                            } else {
                                for (A(!0); b.begin < n && !j[b.begin]; ) b.begin++;
                                B.caret(b.begin, b.begin);
                            }
                            h();
                        }
                        function v() {
                            A(), B.val() != E && B.change();
                        }
                        function w(a) {
                            if (!B.prop("readonly")) {
                                var b,
                                    c,
                                    e,
                                    f = a.which || a.keyCode;
                                (o = B.val()),
                                    8 === f || 46 === f || (d && 127 === f)
                                        ? ((b = B.caret()), (c = b.begin), (e = b.end), e - c === 0 && ((c = 46 !== f ? r(c) : (e = q(c - 1))), (e = 46 === f ? q(e) : e)), y(c, e), s(c, e - 1), a.preventDefault())
                                        : 13 === f
                                        ? v.call(this, a)
                                        : 27 === f && (B.val(E), B.caret(0, A()), a.preventDefault());
                            }
                        }
                        function x(b) {
                            if (!B.prop("readonly")) {
                                var c,
                                    d,
                                    e,
                                    g = b.which || b.keyCode,
                                    i = B.caret();
                                if (!(b.ctrlKey || b.altKey || b.metaKey || 32 > g) && g && 13 !== g) {
                                    if ((i.end - i.begin !== 0 && (y(i.begin, i.end), s(i.begin, i.end - 1)), (c = q(i.begin - 1)), n > c && ((d = String.fromCharCode(g)), j[c].test(d)))) {
                                        if ((t(c), (C[c] = d), z(), (e = q(c)), f)) {
                                            var k = function () {
                                                a.proxy(a.fn.caret, B, e)();
                                            };
                                            setTimeout(k, 0);
                                        } else B.caret(e);
                                        i.begin <= m && h();
                                    }
                                    b.preventDefault();
                                }
                            }
                        }
                        function y(a, b) {
                            var c;
                            for (c = a; b > c && n > c; c++) j[c] && (C[c] = p(c));
                        }
                        function z() {
                            B.val(C.join(""));
                        }
                        function A(a) {
                            var b,
                                c,
                                d,
                                e = B.val(),
                                f = -1;
                            for (b = 0, d = 0; n > b; b++)
                                if (j[b]) {
                                    for (C[b] = p(b); d++ < e.length; )
                                        if (((c = e.charAt(d - 1)), j[b].test(c))) {
                                            (C[b] = c), (f = b);
                                            break;
                                        }
                                    if (d > e.length) {
                                        y(b + 1, n);
                                        break;
                                    }
                                } else C[b] === e.charAt(d) && d++, k > b && (f = b);
                            return a ? z() : k > f + 1 ? (g.autoclear || C.join("") === D ? (B.val() && B.val(""), y(0, n)) : z()) : (z(), B.val(B.val().substring(0, f + 1))), k ? b : l;
                        }
                        var B = a(this),
                            C = a.map(c.split(""), function (a, b) {
                                return "?" != a ? (i[a] ? p(b) : a) : void 0;
                            }),
                            D = C.join(""),
                            E = B.val();
                        B.data(a.mask.dataName, function () {
                            return a
                                .map(C, function (a, b) {
                                    return j[b] && a != p(b) ? a : null;
                                })
                                .join("");
                        }),
                            B.one("unmask", function () {
                                B.off(".mask").removeData(a.mask.dataName);
                            })
                                .on("focus.mask", function () {
                                    if (!B.prop("readonly")) {
                                        clearTimeout(b);
                                        var a;
                                        (E = B.val()),
                                            (a = A()),
                                            (b = setTimeout(function () {
                                                B.get(0) === document.activeElement && (z(), a == c.replace("?", "").length ? B.caret(0, a) : B.caret(a));
                                            }, 10));
                                    }
                                })
                                .on("blur.mask", v)
                                .on("keydown.mask", w)
                                .on("keypress.mask", x)
                                .on("input.mask paste.mask", function () {
                                    B.prop("readonly") ||
                                        setTimeout(function () {
                                            var a = A(!0);
                                            B.caret(a), h();
                                        }, 0);
                                }),
                            e && f && B.off("input.mask").on("input.mask", u),
                            A();
                    })
                );
            },
        });
});
var clock;

jQuery(function ($) {
    new WOW().init();

    $(".mywoo-checkout-total:nth-child(1)").css("padding", "50");
    $(".mywoo-checkout-total:nth-child(1)").css("border", "2px solid #272727");
    $(".mywoo-checkout-total:nth-child(1)").css("border-radius", "15px");
    $(".mywoo-checkout-total:nth-child(1)").css("position", "sticky");
    $(".mywoo-checkout-total:nth-child(1)").css("top", "100px");

    $("a.uncor").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top - 150;
        jQuery("html:not(:animated),body:not(:animated)").animate(
            {
                scrollTop: destination,
            },
            800
        );
        return false;
    });

    $("body").on("change", "#billing_first_name", function () {
        if ($(this).val() == "") {
            $(this).removeClass("active");
            $(this).css("border-left", "3px solid red");
            $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните Имя</span>");
            $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom", "5px");
        } else {
            $(this).css("border-left", "3px solid green");
            $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
            $(this).addClass("active");
        }
    });

    $(document).ready(function () {
        setTimeout(function () {
            console.log("click");
            var t =
                "<a " +
                'data-b24-crm-button-widget-blank=""' +
                'data-b24-crm-button-widget="openline_whatsup"' +
                'class="b24-widget-button-social-item ui-icon"' +
                'title="" data-b24-widget-sort="400"' +
                'href="https://api.whatsapp.com/send?phone=79999992160"' +
                'target="_blank">' +
                '<i style="background-color: #58ce66;background-image: url(/wp-content/uploads/whatsapp-image.png);background-size: 60%;"></i>' +
                '<span data-b24-crm-button-tooltip="" class="b24-widget-button-social-tooltip">WhatsApp</span>' +
                "</a>";
            $(".b24-widget-button-social").append(t);
        }, 1000);
    });

    $("body").on("change", "#billing_last_name", function () {
        if ($(this).val() == "") {
            $(this).removeClass("active");
            $(this).css("border-left", "3px solid red");
            $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom", "5px");
            $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните Фамилию</span>");
        } else {
            $(this).css("border-left", "3px solid green");
            $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
            $(this).addClass("active");
        }
    });

    $("body").on("change", "#billing_patronymic", function () {
        if ($(this).val() == "") {
            $(this).removeClass("active");
            $(this).css("border-left", "3px solid red");
            $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom", "5px");
            $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните Фамилию</span>");
        } else {
            $(this).css("border-left", "3px solid green");
            $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
            $(this).addClass("active");
        }
    });

    $("body").on("change", "#billing_phone", function () {
        if ($(this).val() == "") {
            $(this).removeClass("active");
            $(this).css("border-left", "3px solid red");
            $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom", "5px");
            $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните телефон</span>");
        } else {
            $(this).css("border-left", "3px solid green");
            $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
            $(this).addClass("active");
        }
    });

    $("body").on("change", "#billing_email", function () {
        if ($(this).val() == "") {
            $(this).removeClass("active");
            $(this).css("border-left", "3px solid red");
            $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom", "5px");
            $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните Email</span>");
        } else {
            $(this).css("border-left", "3px solid green");
            $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
            $(this).addClass("active");
        }
    });

    $("body").on("change", "#organisation_name", function () {
        if ($(this).val() == "") {
            $(this).removeClass("active");
            $(this).css("border-left", "3px solid red");
            $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom", "5px");
            $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните Наименование</span>");
        } else {
            $(this).css("border-left", "3px solid green");
            $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
            $(this).addClass("active");
        }
    });

    $("body").on("change", "#organisation_address", function () {
        if ($(this).val() == "") {
            $(this).removeClass("active");
            $(this).css("border-left", "3px solid red");
            $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom", "5px");
            $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните адресс</span>");
        } else {
            $(this).css("border-left", "3px solid green");
            $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
            $(this).addClass("active");
        }
    });

    $("body").on("change", "#organisation_inn", function () {
        if ($(this).val() == "") {
            $(this).removeClass("active");
            $(this).css("border-left", "3px solid red");
            $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom", "5px");
            $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните ИНН</span>");
        } else {
            $(this).css("border-left", "3px solid green");
            $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
            $(this).addClass("active");
        }
    });

    $("body").on("change", "#organisation_kpp", function () {
        if ($(this).val() == "") {
            $(this).removeClass("active");
            $(this).css("border-left", "3px solid red");
            $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom", "5px");
            $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните КПП</span>");
        } else {
            $(this).css("border-left", "3px solid green");
            $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
            $(this).addClass("active");
        }
    });

    $("body").on("change", "#organisation_checking_account", function () {
        if ($(this).val() == "") {
            $(this).removeClass("active");
            $(this).css("border-left", "3px solid red");
            $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom", "5px");
            $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните ОКПО</span>");
        } else {
            $(this).css("border-left", "3px solid green");
            $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
            $(this).addClass("active");
        }
    });

    $("body").on("change", "#organisation_bank", function () {
        if ($(this).val() == "") {
            $(this).removeClass("active");
            $(this).css("border-left", "3px solid red");
            $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom", "5px");
            $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните ОГРН</span>");
        } else {
            $(this).css("border-left", "3px solid green");
            $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
            $(this).addClass("active");
        }
    });
    /*
$('body').on('change','#billing_city', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните город</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});


$('body').on('change','#billing_address_1', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Введите адресс</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});
*/

    /*
$("#countdown").countdown({
date: "28 february 2021 12:00:00",
format: "on"
},

function() {
// callback function
});

*/

    $(".woocommerce-privacy-policy-link").text("политикой конфиденциальности");

    $("label[for='organisation_private_person']").addClass("active");

    $('label[for="organisation_company"]').click(function () {
        $(this).addClass("active");
        $("label[for='organisation_private_person']").removeClass("active");
    });

    $('label[for="organisation_private_person"]').click(function () {
        $(this).addClass("active");
        $("label[for='organisation_company']").removeClass("active");
    });

    $("body").on("change", function () {
        if ($('label[for="organisation_private_person"]').hasClass("active")) {
            if ($("#billing_first_name").hasClass("active") && $("#billing_last_name").hasClass("active") && $("#billing_patronymic").hasClass("active") && $("#billing_phone").hasClass("active") && $("#billing_email").hasClass("active")) {
                $(".place-order").find(".button").css("pointer-events", "all");
            } else {
                $(".place-order").find(".button").css("pointer-events", "none");
            }
        }

        if ($('label[for="organisation_company"]').hasClass("active")) {
            if (
                $("#billing_first_name").hasClass("active") &&
                $("#billing_last_name").hasClass("active") &&
                $("#billing_patronymic").hasClass("active") &&
                $("#billing_phone").hasClass("active") &&
                $("#billing_email").hasClass("active") &&
                $("#billing_email").hasClass("active") &&
                $("#organisation_name").hasClass("active") &&
                $("#organisation_address").hasClass("active") &&
                $("#organisation_inn").hasClass("active") &&
                $("#organisation_kpp").hasClass("active") &&
                $("#organisation_checking_account").hasClass("active") &&
                $("#organisation_bank").hasClass("active")
            ) {
                $(".place-order").find(".button").css("pointer-events", "all");
            } else {
                $(".place-order").find(".button").css("pointer-events", "none");
            }
        }
    });

    $(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() > 1200) {
                $("#scroll_top").show();
                $("#scroll_top").css("display", "flex");
            } else {
                $("#scroll_top").hide();
            }
        });

        $("#scroll_top").click(function () {
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    });

    if ($(".mywoo-product-slider-k").hasClass("mywoo-product-slider")) {
        $(this).remove();
    }
    $(".map-container").css("border-radius", "10px");

    var clock;

    clock = $(".clock").FlipClock({
        clockFace: "DailyCounter",
        autoStart: false,
        callbacks: {
            stop: function () {
                $(".message").html("The clock has stopped!");
            },
        },
    });

    clock.setTime(1546160);
    clock.setCountdown(true);
    clock.start();

    $(".first-slider").owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        responsive: {
            576: {
                items: 2,
                center: false,
            },
            0: {
                items: 1,
                center: false,
            },
            768: {
                items: 3,
                center: true,
            },
            992: {
                items: 5,
                center: true,
            },
        },
    });

    $(".second-slider").owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        responsive: {
            576: {
                items: 2,
                center: false,
            },
            0: {
                items: 1,
                center: false,
            },
            768: {
                items: 2,
                center: false,
            },
        },
    });

    $(".third-slider").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            576: {
                items: 2,
                center: false,
                nav: true,
            },
            0: {
                nav: true,
                items: 1,
            },
            768: {
                nav: true,
                items: 3,
            },
        },
    });

    $(".third-slider").find(".owl-nav").removeClass("disabled");
    $(".second-slider").find(".owl-dots").addClass("disabled");

    $(".lazy").lazy({
        effect: "fadeIn",
        effectTime: 100,
        threshold: 0,
    });

    $(".my-woo-single-landing-com-fps-game-container").on("click", ".my-woo-single-landing-com-fps-game", function () {
        $(".my-woo-single-landing-com-fps-game-container .my-woo-single-landing-com-fps-game").removeClass("active");
        $(this).toggleClass("active");
    });

    $(".my-woo-single-landing-com-fps-game-container").on("click", ".my-woo-single-landing-com-fps-quan", function () {
        $(".my-woo-single-landing-com-fps-game-container .my-woo-single-landing-com-fps-quan").removeClass("active");
        $(this).toggleClass("active");
    });

    $("#pa_videokarta")
        .change(function () {
            var str = "";
            $(this)
                .find("option:selected")
                .each(function () {
                    str += $(this).text() + " ";
                });
            $(".videokarta-attr").text(str);
        })
        .change();

    $("body").on("change", function () {
        var price = $("bdi").text();
        $(".computer-price-span").text(price);
    });

    $("#pa_nakopitel-ssd")
        .change(function () {
            var str = "";
            $(this)
                .find("option:selected")
                .each(function () {
                    str += $(this).text() + " ";
                });
            $(".ssd_nakopitel-attr").text(str);
        })
        .change();

    $("#pa_nakopitel-hdd")
        .change(function () {
            var str = "";
            $(this)
                .find("option:selected")
                .each(function () {
                    str += $(this).text() + " ";
                });
            $(".zhestkij_disk-attr").text(str);
        })
        .change();

    $("#pa_operativnaya-pamyat")
        .change(function () {
            var str = "";
            $(this)
                .find("option:selected")
                .each(function () {
                    str += $(this).text() + " ";
                });
            $(".operativnaya_pamyat-attr").text(str);
        })
        .change();

    $(".variable-item.selected").find(".var-checkbox-img").attr("src", "/wp-content/uploads/checkbox-valide.png");
    $(".variable-item").click(function () {
        $(".variable-item").find(".var-checkbox-img").attr("src", "/wp-content/uploads/checkbox-innnvalide.png");
        var attr = $(this).attr("aria-checked");
        if (attr === "false") {
            $(this).find(".var-checkbox-img").attr("src", "/wp-content/uploads/checkbox-valide.png");
        } else {
            $(this).find(".var-checkbox-img").attr("src", "/wp-content/uploads/checkbox-innnvalide.png");
        }
    });

    $(".more-config-button").click(function () {
        $(".computer-landing-popup").css("display", "block");
        $(".computer-landing").css("display", "block");
    });
    $(".close-popup-landing-comp").on("click", function () {
        $(".computer-landing").css("display", "none");
        $(".computer-landing-popup").css("display", "none");
    });

    $(".header-search-button").click(function () {
        $(".header-search-container-back").css("display", "flex");
        $(".header-search-container").css("display", "flex");
        $("body").css("overflow", "hidden");
    });

    $(".header-search-popup-close").on("click", function () {
        $(".header-search-container").css("display", "none");
        $("body").css("overflow", "auto");
        $(".header-search-container-back").css("display", "none");
    });

    $(".treidin-konfigurator-ul-li").on("click", function () {
        $(".treidin-konfigurator-ul-li").removeClass("active");
        $(this).addClass("active");
    });
    $(".treidin-konfigurator-ul-li-video").on("click", function () {
        $(".treidin-konfigurator-ul-li-video").removeClass("active");
        $(this).addClass("active");
    });
    $(".treidin-konfigurator-ul-li-opera").on("click", function () {
        $(".treidin-konfigurator-ul-li-opera").removeClass("active");
        $(this).addClass("active");
    });
    $(".treidin-konfigurator-ul-li-ssd").on("click", function () {
        $(".treidin-konfigurator-ul-li-ssd").removeClass("active");
        $(this).addClass("active");
    });
    $(".treidin-konfigurator-ul-li-hdd").on("click", function () {
        $(".treidin-konfigurator-ul-li-hdd").removeClass("active");
        $(this).addClass("active");
    });
    $(".treidin-konfigurator-ul-li-bp").on("click", function () {
        $(".treidin-konfigurator-ul-li-bp").removeClass("active");
        $(this).addClass("active");
    });

    $(document).mouseup(function (e) {
        // отслеживаем событие клика по веб-документу
        var block = $(".header-search-container"); // определяем элемент, к которому будем применять условия (можем указывать ID, класс либо любой другой идентификатор элемента)
        if (
            !block.is(e.target) && // проверка условия если клик был не по нашему блоку
            block.has(e.target).length === 0
        ) {
            // проверка условия если клик не по его дочерним элементам
            $(".header-search-container-back").css("display", "none");
            $("body").css("overflow", "auto"); // если условия выполняются - скрываем наш элемент
        }
    });

    $(".upgrade-center-main-content__link").click(function () {
        $(".popup-apgreid-back").css("display", "flex");
        $("body").css("overflow", "hidden");
    });

    $(".popup-apgreid-container-close").on("click", function () {
        $(".popup-apgreid-back").css("display", "none");
        $("body").css("overflow", "auto");
    });

    $(document).mouseup(function (e) {
        // отслеживаем событие клика по веб-документу
        var block = $(".popup-apgreid-container"); // определяем элемент, к которому будем применять условия (можем указывать ID, класс либо любой другой идентификатор элемента)
        if (
            !block.is(e.target) && // проверка условия если клик был не по нашему блоку
            block.has(e.target).length === 0
        ) {
            // проверка условия если клик не по его дочерним элементам
            $(".popup-apgreid-back").css("display", "none");
            $("body").css("overflow", "auto"); // если условия выполняются - скрываем наш элемент
        }
    });

    $("body").on("click", ".ajax_add_to_cart", function () {
        $(this).text("Оформить заказ");
        $(this).attr("onclick", "window.location.href = '/checkout'");
        $(this).removeClass("js-to-card-add");
        $(".js-side-cart-number").addClass("active");
    });

    $("#DateCountdown").TimeCircles({
        animation: "smooth",
        bg_width: 1.2,
        fg_width: 0.1,
        circle_bg_color: "#222222",
        time: {
            Days: {
                text: "Дней",
                color: "#e2730b",
                show: true,
            },
            Hours: {
                text: "Часов",
                color: "#e2730b",
                show: true,
            },
            Minutes: {
                text: "Minutes",
                color: "#BBFFBB",
                show: false,
            },
            Seconds: {
                text: "Seconds",
                color: "#FF9999",
                show: false,
            },
        },
    });

    $(".textDiv_Days").prepend("<img src='/wp-content/uploads/timer-svg.svg' class='timer-img'>");

    $(".owl-prev span").html("<img src='/wp-content/uploads/prevnew1.svg'>");
    $(".owl-next span").html("<img src='/wp-content/uploads/nextnew1.svg'>");

    $(".owl-prev span img").hover(
        function () {
            // задаем функцию при наведении курсора на элемент
            $(this).attr("src", "/wp-content/uploads/prehovernewnew.svg"); // задаем цвет заднего фона
        },
        function () {
            // задаем функцию, которая срабатывает, когда указатель выходит из элемента
            $(this).attr("src", "/wp-content/uploads/prehovernew.svg"); // задаем цвет заднего фона
        }
    );
    $(".owl-next span img").hover(
        function () {
            // задаем функцию при наведении курсора на элемент
            $(this).attr("src", "/wp-content/uploads/nexthover1.svg"); // задаем цвет заднего фона
        },
        function () {
            // задаем функцию, которая срабатывает, когда указатель выходит из элемента
            $(this).attr("src", "/wp-content/uploads/nextnew1.svg"); // задаем цвет заднего фона
        }
    );

    $(".woocommerce-cart-form").on("change", ".qty", function () {
        $("[name='update_cart']").removeAttr("disabled");
        $("[name='update_cart']").trigger("click");
    });

    $(".mobile-burger-link").on("click", function () {
        $("footer .mobile-footer-burger").css("display", "block");
        $("footer .mobile-footer-burger").css("overflow", "auto");
        $("body").css("overflow", "hidden");
    });
    $(".close-popup").on("click", function () {
        $("footer .mobile-footer-burger").css("display", "none");
        $("body").css("overflow", "auto");
    });

    $("body").on("click", ".open-attributes", function () {
        $(this).text("Закрыть конфигурацию");
        $(this).addClass("active");
        $(this).siblings(".mywoo-comp-attr").css("display", "block");
    });

    $("body").on("click", ".open-attributes.active", function () {
        $(this).text("Открыть конфигурацию");
        $(this).removeClass("active");
        $(this).siblings(".mywoo-comp-attr").css("display", "none");
    });

    $(".nav-link-collapse").on("click", function () {
        $(".nav-link-collapse").not(this).removeClass("nav-link-show");
        $(this).toggleClass("nav-link-show");
    });

    $("body").on("click", ".bm-computer-landing-header-menu__link", function () {
        $("form.cart").find(".single_add_to_cart_button").trigger("click");
    });
});

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
/*
function windowSize() {
    if ($(window).width() <= "1350") {
        $(".footer-dekstop").css("display", "none");
        $(".footer-mobile-con").css("display", "block");

        $(".header-pc").css("display", "none");
        $(".header-mobile-content").css("display", "block");

        $(".bm-computer-landing-header").css("display", "none");
        $(".bm-computer-landing-header-mobile").css("display", "flex");
    } else {
        $(".header-pc").css("display", "block");
        $(".header-mobile-content").css("display", "none");

        $(".footer-dekstop").css("display", "block");
        $(".footer-mobile-con").css("display", "none");

        $(".bm-computer-landing-header-mobile").css("display", "none");
        $(".bm-computer-landing-header").css("display", "flex");
    }
    if ($(window).width() <= "576") {
        $(".youtube-video").remove();
        $("#scroll_top").remove();
    }
}
$(window).on("load resize", windowSize);
*/
// Включить радио кнопку изначально
jQuery(function () {
    var $radios = jQuery("input:radio[name=organisation]");
    if ($radios.is(":checked") === false) {
        $radios.filter('[value="private_person"]').prop("checked", true);
    }
});

// Скрытие реквизитов
jQuery(document).ready(function ($) {
    $(".woocommerce-organisation-fields__field-wrapper").hide();

    $("input[name=organisation]:radio").click(function () {
        if ($("input[name=organisation]:checked").val() == "private_person") {
            $(".woocommerce-organisation-fields__field-wrapper").hide();
        } else if ($("input[name=organisation]:checked").val() == "company") {
            $(".woocommerce-organisation-fields__field-wrapper").show();
        }
    });
});

("use strict");

$(function () {
    // Countdown

    /* Usage example
    There are two ways to use this script. On is better for simple needs such a topbar. 
    And the other one is good if you need to display more elements and have more control 
    over the CSS

    **** SIMPLE MODE ****: Just set a main Class and the content within the data attributes.
                 (days), (hours), etc.. will be replaced and you can use
                p_hours, p_minutes, etc.. for pluralization 

    <div class="countdown simple-bar" data-Date='2021/9/5 17:12:0' data-endText="Offer ended">
            (days) p_days, (hours) p_hours, and (minutes) p_minutes left!
    </div>

    **** EXTENDED MODE: ****
            <div class="countdown show" data-Date='2020/12/10 17:37:53'>
            <h2>Live with  Madonna</h2>
            <div class="running">
                <timer>
                  <span class = "days"></span>:<span class = "hours"></span>:<span class = "minutes"></span>:<span class = "seconds"></span>
                </timer>
                <div class = "break"></div>
                <div class = "labels"><span>Days</span><span>Hours</span><span>Minutes</span><span>Seconds</span></div>
                <div class = "break"></div>
                <div class="text">until Concert begins</div>
                <div class = "break"></div>
                <button>Buy Ticket Now!</button>
            </div>

            <div class="ended">
                <div class="text">Show is ended</div>
                <div class = "break"></div>
                <button>Suscribe for next event!</button>
            </div>
        </div>

    On this way, you have to setup a main Class, and the end Date in the data attributes.
    Then, you need to use the classes "running" and "ended" (you can change the names) and the element <timer>
    On this way, the "ended" class will be visible when the countdown is ready and you have a lot of 
    control over the content and the layout.

    *** TIMER Mode ***

    On the timer mode, you have to enter the data in JSON format such in this example

        <div class="countdown simple-bar fix" data-fixTime = '{"Days": "3", "Hours": "2", "Minutes": "10"}' data-endText="Offer ended">
            (days) p_days, (hours) p_hours, (minutes) p_minutes and (seconds) p_seconds left!
        </div>

    *** ZERO-PAD ***
    By default, Zero-PAdding is enabled. You can set it to false in a data attribute on this way:
    
    <div ......     data-zeroPad='{"Days": "false"}'>

    Each variable (Days, Hours, Minutes and Seconds) can be set to false


    TODO:
    - cookie (or localStorage)
    - pluralization: it works now but only in simple mode, and only in English
    - weeks support
    - prevent errors with false configs
    
 

    CONFIG:
    - mainClass
    - Offset Location
    - runningClass (optional)
    - endedClass (optional)


    offset value base on which location time zone you would like to set 
    For India offset value +5.5,
    New York offset value -4,
    London offset value +1

    All locations offset: https://en.wikipedia.org/wiki/List_of_UTC_time_offsets
    */

    // CONFIG

    let mainClass = ".countdown";
    let OffsetLocation = -4;

    let runningClass = ".running"; //optinonal
    let endedClass = ".ended"; //optional

    // END CONFIG

    //init
    let date,
        fixTime,
        index = 0,
        extraClass,
        initText,
        zeroPad;
    $(mainClass).each(function () {
        //for each countdown instance
        index++;
        date = $(this).attr("data-Date");
        fixTime = $(this).attr("data-fixTime");
        zeroPad = $(this).attr("data-zeroPad");
        extraClass = "d_" + index;

        $(this).addClass(extraClass); //add a class to recognize each counter
        $(this).css("display", "block"); //allow to start hidding the class to avoid a bad effect until js is loading

        if (fixTime != undefined) date = getFixDate(fixTime);

        //get init text with or whitout an extra Class
        if ($("." + extraClass + " " + runningClass + " timer").length) {
            initText = $("." + extraClass + " " + runningClass + " timer").text();
        } else {
            initText = $(this).text();
        }
        //show and hide classes
        $("." + extraClass + " " + runningClass).css("display", "flex");
        $("." + extraClass + " " + endedClass).css("display", "none");

        //call main function
        dateReplace(extraClass, date, fixTime, initText, zeroPad); //prevent delay for the first time
        setInterval(dateReplace, 1000, extraClass, date, fixTime, initText, zeroPad);
    });

    function dateReplace(extraClass, date, fixTime, initText, zeroPad) {
        let dif = timeDistance(date, fixTime);
        let text = initText;
        let zeroPadArr = [];
        if (dif[0] < 0 || dif[1] < 0 || dif[2] < 0 || dif[3] < 0) {
            //countdown ended
            let endText = $("." + extraClass).attr("data-endText");
            if (endText != undefined) {
                //case data-endText attr
                $("." + extraClass).text(endText);
            } else {
                //case with two blocks
                $("." + extraClass + " " + runningClass).css("display", "none");
                $("." + extraClass + " " + endedClass).css("display", "flex");
            }
        } else {
            //Zero-pad
            if (zeroPad != undefined) zeroPadArr = JSON.parse(zeroPad);

            if (zeroPadArr["Days"] != "false") dif[0] = String(dif[0]).padStart(2, "0");
            if (zeroPadArr["Hours"] != "false") dif[1] = String(dif[1]).padStart(2, "0");
            if (zeroPadArr["Minutes"] != "false") dif[2] = String(dif[2]).padStart(2, "0");
            if (zeroPadArr["Seconds"] != "false") dif[3] = String(dif[3]).padStart(2, "0");

            //replace text with or without extra class

            //whith extras Class
            if ($("." + extraClass + " " + runningClass + " timer").length) {
                $("." + extraClass + " " + runningClass + " timer .days").text(dif[0]);
                $("." + extraClass + " " + runningClass + " timer .hours").text(dif[1]);
                $("." + extraClass + " " + runningClass + " timer .minutes").text(dif[2]);
                $("." + extraClass + " " + runningClass + " timer .seconds").text(dif[3]);
            } else {
                //replace parts without extra Class
                text = text.replace("(days)", dif[0]);
                text = text.replace("(hours)", dif[1]);
                text = text.replace("(minutes)", dif[2]);
                text = text.replace("(seconds)", dif[3]);
                $("." + extraClass).text(text);
            }
            pluralization(extraClass, dif);
        }
    }

    function timeDistance(date, fixTime) {
        var date1 = new Date(date);
        let date2, d, utc;

        d = new Date();
        utc = d.getTime() + d.getTimezoneOffset() * 60000;
        if (fixTime != undefined) date2 = new Date();
        else date2 = new Date(utc + 3600000 * OffsetLocation);

        var diff = date1.getTime() - date2;
        var msec = diff;
        var hh = Math.floor(msec / 1000 / 60 / 60);
        msec -= hh * 1000 * 60 * 60;
        var mm = Math.floor(msec / 1000 / 60);
        msec -= mm * 1000 * 60;
        var ss = Math.floor(msec / 1000);
        msec -= ss * 1000;
        var dd = Math.floor(hh / 24);
        if (dd > 0) {
            hh = hh - dd * 24;
        }
        return [dd, hh, mm, ss];
    }

    function getFixDate(fixTime) {
        let getFixTimeDate = 0;

        var fixTimeDate = JSON.parse($("." + extraClass).attr("data-fixTime"));
        if (fixTimeDate["Days"] != undefined) {
            getFixTimeDate += +fixTimeDate["Days"] * 60 * 24;
        }
        if (fixTimeDate["Hours"] != undefined) {
            getFixTimeDate += +fixTimeDate["Hours"] * 60;
        }
        if (fixTimeDate["Minutes"] != undefined) getFixTimeDate += +fixTimeDate["Minutes"];

        var now = new Date();
        now.setMinutes(now.getMinutes() + getFixTimeDate); // timestamp
        date = new Date(now); // Date object

        return date;
    }

    // Note this *is* JQuery, see below for JS solution instead
    function replaceText(selector, text, newText, flags) {
        var matcher = new RegExp(text, flags);
        $(selector).each(function () {
            var $this = $(this);
            if (!$this.children().length) $this.text($this.text().replace(matcher, newText));
        });
    }

    function pluralization(extraClass, dif) {
        //pluralization
        if (dif[0] == 1) replaceText("." + extraClass, "p_days", "Day", "g");
        else replaceText("." + extraClass, "p_days", "Days", "g");

        if (dif[1] == 1) replaceText("." + extraClass, "p_hours", "Hour", "g");
        else replaceText("." + extraClass, "p_hours", "Hours", "g");

        if (dif[2] == 1) replaceText("." + extraClass, "p_minutes", "Minute", "g");
        else replaceText("." + extraClass, "p_minutes", "Minutes", "g");

        if (dif[3] == 1) replaceText("." + extraClass, "p_seconds", "Second", "g");
        else replaceText("." + extraClass, "p_seconds", "Seconds", "g");
    }
});
/**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
!(function (a, b, c, d) {
    function e(b, c) {
        (this.settings = null),
            (this.options = a.extend({}, e.Defaults, c)),
            (this.$element = a(b)),
            (this._handlers = {}),
            (this._plugins = {}),
            (this._supress = {}),
            (this._current = null),
            (this._speed = null),
            (this._coordinates = []),
            (this._breakpoint = null),
            (this._width = null),
            (this._items = []),
            (this._clones = []),
            (this._mergers = []),
            (this._widths = []),
            (this._invalidated = {}),
            (this._pipe = []),
            (this._drag = { time: null, target: null, pointer: null, stage: { start: null, current: null }, direction: null }),
            (this._states = { current: {}, tags: { initializing: ["busy"], animating: ["busy"], dragging: ["interacting"] } }),
            a.each(
                ["onResize", "onThrottledResize"],
                a.proxy(function (b, c) {
                    this._handlers[c] = a.proxy(this[c], this);
                }, this)
            ),
            a.each(
                e.Plugins,
                a.proxy(function (a, b) {
                    this._plugins[a.charAt(0).toLowerCase() + a.slice(1)] = new b(this);
                }, this)
            ),
            a.each(
                e.Workers,
                a.proxy(function (b, c) {
                    this._pipe.push({ filter: c.filter, run: a.proxy(c.run, this) });
                }, this)
            ),
            this.setup(),
            this.initialize();
    }
    (e.Defaults = {
        items: 3,
        loop: !1,
        center: !1,
        rewind: !1,
        checkVisibility: !0,
        mouseDrag: !0,
        touchDrag: !0,
        pullDrag: !0,
        freeDrag: !1,
        margin: 0,
        stagePadding: 0,
        merge: !1,
        mergeFit: !0,
        autoWidth: !1,
        startPosition: 0,
        rtl: !1,
        smartSpeed: 250,
        fluidSpeed: !1,
        dragEndSpeed: !1,
        responsive: {},
        responsiveRefreshRate: 200,
        responsiveBaseElement: b,
        fallbackEasing: "swing",
        slideTransition: "",
        info: !1,
        nestedItemSelector: !1,
        itemElement: "div",
        stageElement: "div",
        refreshClass: "owl-refresh",
        loadedClass: "owl-loaded",
        loadingClass: "owl-loading",
        rtlClass: "owl-rtl",
        responsiveClass: "owl-responsive",
        dragClass: "owl-drag",
        itemClass: "owl-item",
        stageClass: "owl-stage",
        stageOuterClass: "owl-stage-outer",
        grabClass: "owl-grab",
    }),
        (e.Width = { Default: "default", Inner: "inner", Outer: "outer" }),
        (e.Type = { Event: "event", State: "state" }),
        (e.Plugins = {}),
        (e.Workers = [
            {
                filter: ["width", "settings"],
                run: function () {
                    this._width = this.$element.width();
                },
            },
            {
                filter: ["width", "items", "settings"],
                run: function (a) {
                    a.current = this._items && this._items[this.relative(this._current)];
                },
            },
            {
                filter: ["items", "settings"],
                run: function () {
                    this.$stage.children(".cloned").remove();
                },
            },
            {
                filter: ["width", "items", "settings"],
                run: function (a) {
                    var b = this.settings.margin || "",
                        c = !this.settings.autoWidth,
                        d = this.settings.rtl,
                        e = { width: "auto", "margin-left": d ? b : "", "margin-right": d ? "" : b };
                    !c && this.$stage.children().css(e), (a.css = e);
                },
            },
            {
                filter: ["width", "items", "settings"],
                run: function (a) {
                    var b = (this.width() / this.settings.items).toFixed(3) - this.settings.margin,
                        c = null,
                        d = this._items.length,
                        e = !this.settings.autoWidth,
                        f = [];
                    for (a.items = { merge: !1, width: b }; d--; )
                        (c = this._mergers[d]), (c = (this.settings.mergeFit && Math.min(c, this.settings.items)) || c), (a.items.merge = c > 1 || a.items.merge), (f[d] = e ? b * c : this._items[d].width());
                    this._widths = f;
                },
            },
            {
                filter: ["items", "settings"],
                run: function () {
                    var b = [],
                        c = this._items,
                        d = this.settings,
                        e = Math.max(2 * d.items, 4),
                        f = 2 * Math.ceil(c.length / 2),
                        g = d.loop && c.length ? (d.rewind ? e : Math.max(e, f)) : 0,
                        h = "",
                        i = "";
                    for (g /= 2; g > 0; ) b.push(this.normalize(b.length / 2, !0)), (h += c[b[b.length - 1]][0].outerHTML), b.push(this.normalize(c.length - 1 - (b.length - 1) / 2, !0)), (i = c[b[b.length - 1]][0].outerHTML + i), (g -= 1);
                    (this._clones = b), a(h).addClass("cloned").appendTo(this.$stage), a(i).addClass("cloned").prependTo(this.$stage);
                },
            },
            {
                filter: ["width", "items", "settings"],
                run: function () {
                    for (var a = this.settings.rtl ? 1 : -1, b = this._clones.length + this._items.length, c = -1, d = 0, e = 0, f = []; ++c < b; )
                        (d = f[c - 1] || 0), (e = this._widths[this.relative(c)] + this.settings.margin), f.push(d + e * a);
                    this._coordinates = f;
                },
            },
            {
                filter: ["width", "items", "settings"],
                run: function () {
                    var a = this.settings.stagePadding,
                        b = this._coordinates,
                        c = { width: Math.ceil(Math.abs(b[b.length - 1])) + 2 * a, "padding-left": a || "", "padding-right": a || "" };
                    this.$stage.css(c);
                },
            },
            {
                filter: ["width", "items", "settings"],
                run: function (a) {
                    var b = this._coordinates.length,
                        c = !this.settings.autoWidth,
                        d = this.$stage.children();
                    if (c && a.items.merge) for (; b--; ) (a.css.width = this._widths[this.relative(b)]), d.eq(b).css(a.css);
                    else c && ((a.css.width = a.items.width), d.css(a.css));
                },
            },
            {
                filter: ["items"],
                run: function () {
                    this._coordinates.length < 1 && this.$stage.removeAttr("style");
                },
            },
            {
                filter: ["width", "items", "settings"],
                run: function (a) {
                    (a.current = a.current ? this.$stage.children().index(a.current) : 0), (a.current = Math.max(this.minimum(), Math.min(this.maximum(), a.current))), this.reset(a.current);
                },
            },
            {
                filter: ["position"],
                run: function () {
                    this.animate(this.coordinates(this._current));
                },
            },
            {
                filter: ["width", "position", "items", "settings"],
                run: function () {
                    var a,
                        b,
                        c,
                        d,
                        e = this.settings.rtl ? 1 : -1,
                        f = 2 * this.settings.stagePadding,
                        g = this.coordinates(this.current()) + f,
                        h = g + this.width() * e,
                        i = [];
                    for (c = 0, d = this._coordinates.length; c < d; c++)
                        (a = this._coordinates[c - 1] || 0), (b = Math.abs(this._coordinates[c]) + f * e), ((this.op(a, "<=", g) && this.op(a, ">", h)) || (this.op(b, "<", g) && this.op(b, ">", h))) && i.push(c);
                    this.$stage.children(".active").removeClass("active"),
                        this.$stage.children(":eq(" + i.join("), :eq(") + ")").addClass("active"),
                        this.$stage.children(".center").removeClass("center"),
                        this.settings.center && this.$stage.children().eq(this.current()).addClass("center");
                },
            },
        ]),
        (e.prototype.initializeStage = function () {
            (this.$stage = this.$element.find("." + this.settings.stageClass)),
                this.$stage.length ||
                    (this.$element.addClass(this.options.loadingClass),
                    (this.$stage = a("<" + this.settings.stageElement + ">", { class: this.settings.stageClass }).wrap(a("<div/>", { class: this.settings.stageOuterClass }))),
                    this.$element.append(this.$stage.parent()));
        }),
        (e.prototype.initializeItems = function () {
            var b = this.$element.find(".owl-item");
            if (b.length)
                return (
                    (this._items = b.get().map(function (b) {
                        return a(b);
                    })),
                    (this._mergers = this._items.map(function () {
                        return 1;
                    })),
                    void this.refresh()
                );
            this.replace(this.$element.children().not(this.$stage.parent())), this.isVisible() ? this.refresh() : this.invalidate("width"), this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass);
        }),
        (e.prototype.initialize = function () {
            if ((this.enter("initializing"), this.trigger("initialize"), this.$element.toggleClass(this.settings.rtlClass, this.settings.rtl), this.settings.autoWidth && !this.is("pre-loading"))) {
                var a, b, c;
                (a = this.$element.find("img")), (b = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : d), (c = this.$element.children(b).width()), a.length && c <= 0 && this.preloadAutoWidthImages(a);
            }
            this.initializeStage(), this.initializeItems(), this.registerEventHandlers(), this.leave("initializing"), this.trigger("initialized");
        }),
        (e.prototype.isVisible = function () {
            return !this.settings.checkVisibility || this.$element.is(":visible");
        }),
        (e.prototype.setup = function () {
            var b = this.viewport(),
                c = this.options.responsive,
                d = -1,
                e = null;
            c
                ? (a.each(c, function (a) {
                      a <= b && a > d && (d = Number(a));
                  }),
                  (e = a.extend({}, this.options, c[d])),
                  "function" == typeof e.stagePadding && (e.stagePadding = e.stagePadding()),
                  delete e.responsive,
                  e.responsiveClass && this.$element.attr("class", this.$element.attr("class").replace(new RegExp("(" + this.options.responsiveClass + "-)\\S+\\s", "g"), "$1" + d)))
                : (e = a.extend({}, this.options)),
                this.trigger("change", { property: { name: "settings", value: e } }),
                (this._breakpoint = d),
                (this.settings = e),
                this.invalidate("settings"),
                this.trigger("changed", { property: { name: "settings", value: this.settings } });
        }),
        (e.prototype.optionsLogic = function () {
            this.settings.autoWidth && ((this.settings.stagePadding = !1), (this.settings.merge = !1));
        }),
        (e.prototype.prepare = function (b) {
            var c = this.trigger("prepare", { content: b });
            return (
                c.data ||
                    (c.data = a("<" + this.settings.itemElement + "/>")
                        .addClass(this.options.itemClass)
                        .append(b)),
                this.trigger("prepared", { content: c.data }),
                c.data
            );
        }),
        (e.prototype.update = function () {
            for (
                var b = 0,
                    c = this._pipe.length,
                    d = a.proxy(function (a) {
                        return this[a];
                    }, this._invalidated),
                    e = {};
                b < c;

            )
                (this._invalidated.all || a.grep(this._pipe[b].filter, d).length > 0) && this._pipe[b].run(e), b++;
            (this._invalidated = {}), !this.is("valid") && this.enter("valid");
        }),
        (e.prototype.width = function (a) {
            switch ((a = a || e.Width.Default)) {
                case e.Width.Inner:
                case e.Width.Outer:
                    return this._width;
                default:
                    return this._width - 2 * this.settings.stagePadding + this.settings.margin;
            }
        }),
        (e.prototype.refresh = function () {
            this.enter("refreshing"),
                this.trigger("refresh"),
                this.setup(),
                this.optionsLogic(),
                this.$element.addClass(this.options.refreshClass),
                this.update(),
                this.$element.removeClass(this.options.refreshClass),
                this.leave("refreshing"),
                this.trigger("refreshed");
        }),
        (e.prototype.onThrottledResize = function () {
            b.clearTimeout(this.resizeTimer), (this.resizeTimer = b.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate));
        }),
        (e.prototype.onResize = function () {
            return (
                !!this._items.length &&
                this._width !== this.$element.width() &&
                !!this.isVisible() &&
                (this.enter("resizing"), this.trigger("resize").isDefaultPrevented() ? (this.leave("resizing"), !1) : (this.invalidate("width"), this.refresh(), this.leave("resizing"), void this.trigger("resized")))
            );
        }),
        (e.prototype.registerEventHandlers = function () {
            a.support.transition && this.$stage.on(a.support.transition.end + ".owl.core", a.proxy(this.onTransitionEnd, this)),
                !1 !== this.settings.responsive && this.on(b, "resize", this._handlers.onThrottledResize),
                this.settings.mouseDrag &&
                    (this.$element.addClass(this.options.dragClass),
                    this.$stage.on("mousedown.owl.core", a.proxy(this.onDragStart, this)),
                    this.$stage.on("dragstart.owl.core selectstart.owl.core", function () {
                        return !1;
                    })),
                this.settings.touchDrag && (this.$stage.on("touchstart.owl.core", a.proxy(this.onDragStart, this)), this.$stage.on("touchcancel.owl.core", a.proxy(this.onDragEnd, this)));
        }),
        (e.prototype.onDragStart = function (b) {
            var d = null;
            3 !== b.which &&
                (a.support.transform
                    ? ((d = this.$stage
                          .css("transform")
                          .replace(/.*\(|\)| /g, "")
                          .split(",")),
                      (d = { x: d[16 === d.length ? 12 : 4], y: d[16 === d.length ? 13 : 5] }))
                    : ((d = this.$stage.position()), (d = { x: this.settings.rtl ? d.left + this.$stage.width() - this.width() + this.settings.margin : d.left, y: d.top })),
                this.is("animating") && (a.support.transform ? this.animate(d.x) : this.$stage.stop(), this.invalidate("position")),
                this.$element.toggleClass(this.options.grabClass, "mousedown" === b.type),
                this.speed(0),
                (this._drag.time = new Date().getTime()),
                (this._drag.target = a(b.target)),
                (this._drag.stage.start = d),
                (this._drag.stage.current = d),
                (this._drag.pointer = this.pointer(b)),
                a(c).on("mouseup.owl.core touchend.owl.core", a.proxy(this.onDragEnd, this)),
                a(c).one(
                    "mousemove.owl.core touchmove.owl.core",
                    a.proxy(function (b) {
                        var d = this.difference(this._drag.pointer, this.pointer(b));
                        a(c).on("mousemove.owl.core touchmove.owl.core", a.proxy(this.onDragMove, this)), (Math.abs(d.x) < Math.abs(d.y) && this.is("valid")) || (b.preventDefault(), this.enter("dragging"), this.trigger("drag"));
                    }, this)
                ));
        }),
        (e.prototype.onDragMove = function (a) {
            var b = null,
                c = null,
                d = null,
                e = this.difference(this._drag.pointer, this.pointer(a)),
                f = this.difference(this._drag.stage.start, e);
            this.is("dragging") &&
                (a.preventDefault(),
                this.settings.loop
                    ? ((b = this.coordinates(this.minimum())), (c = this.coordinates(this.maximum() + 1) - b), (f.x = ((((f.x - b) % c) + c) % c) + b))
                    : ((b = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum())),
                      (c = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum())),
                      (d = this.settings.pullDrag ? (-1 * e.x) / 5 : 0),
                      (f.x = Math.max(Math.min(f.x, b + d), c + d))),
                (this._drag.stage.current = f),
                this.animate(f.x));
        }),
        (e.prototype.onDragEnd = function (b) {
            var d = this.difference(this._drag.pointer, this.pointer(b)),
                e = this._drag.stage.current,
                f = (d.x > 0) ^ this.settings.rtl ? "left" : "right";
            a(c).off(".owl.core"),
                this.$element.removeClass(this.options.grabClass),
                ((0 !== d.x && this.is("dragging")) || !this.is("valid")) &&
                    (this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed),
                    this.current(this.closest(e.x, 0 !== d.x ? f : this._drag.direction)),
                    this.invalidate("position"),
                    this.update(),
                    (this._drag.direction = f),
                    (Math.abs(d.x) > 3 || new Date().getTime() - this._drag.time > 300) &&
                        this._drag.target.one("click.owl.core", function () {
                            return !1;
                        })),
                this.is("dragging") && (this.leave("dragging"), this.trigger("dragged"));
        }),
        (e.prototype.closest = function (b, c) {
            var e = -1,
                f = 30,
                g = this.width(),
                h = this.coordinates();
            return (
                this.settings.freeDrag ||
                    a.each(
                        h,
                        a.proxy(function (a, i) {
                            return (
                                "left" === c && b > i - f && b < i + f
                                    ? (e = a)
                                    : "right" === c && b > i - g - f && b < i - g + f
                                    ? (e = a + 1)
                                    : this.op(b, "<", i) && this.op(b, ">", h[a + 1] !== d ? h[a + 1] : i - g) && (e = "left" === c ? a + 1 : a),
                                -1 === e
                            );
                        }, this)
                    ),
                this.settings.loop || (this.op(b, ">", h[this.minimum()]) ? (e = b = this.minimum()) : this.op(b, "<", h[this.maximum()]) && (e = b = this.maximum())),
                e
            );
        }),
        (e.prototype.animate = function (b) {
            var c = this.speed() > 0;
            this.is("animating") && this.onTransitionEnd(),
                c && (this.enter("animating"), this.trigger("translate")),
                a.support.transform3d && a.support.transition
                    ? this.$stage.css({ transform: "translate3d(" + b + "px,0px,0px)", transition: this.speed() / 1e3 + "s" + (this.settings.slideTransition ? " " + this.settings.slideTransition : "") })
                    : c
                    ? this.$stage.animate({ left: b + "px" }, this.speed(), this.settings.fallbackEasing, a.proxy(this.onTransitionEnd, this))
                    : this.$stage.css({ left: b + "px" });
        }),
        (e.prototype.is = function (a) {
            return this._states.current[a] && this._states.current[a] > 0;
        }),
        (e.prototype.current = function (a) {
            if (a === d) return this._current;
            if (0 === this._items.length) return d;
            if (((a = this.normalize(a)), this._current !== a)) {
                var b = this.trigger("change", { property: { name: "position", value: a } });
                b.data !== d && (a = this.normalize(b.data)), (this._current = a), this.invalidate("position"), this.trigger("changed", { property: { name: "position", value: this._current } });
            }
            return this._current;
        }),
        (e.prototype.invalidate = function (b) {
            return (
                "string" === a.type(b) && ((this._invalidated[b] = !0), this.is("valid") && this.leave("valid")),
                a.map(this._invalidated, function (a, b) {
                    return b;
                })
            );
        }),
        (e.prototype.reset = function (a) {
            (a = this.normalize(a)) !== d && ((this._speed = 0), (this._current = a), this.suppress(["translate", "translated"]), this.animate(this.coordinates(a)), this.release(["translate", "translated"]));
        }),
        (e.prototype.normalize = function (a, b) {
            var c = this._items.length,
                e = b ? 0 : this._clones.length;
            return !this.isNumeric(a) || c < 1 ? (a = d) : (a < 0 || a >= c + e) && (a = ((((a - e / 2) % c) + c) % c) + e / 2), a;
        }),
        (e.prototype.relative = function (a) {
            return (a -= this._clones.length / 2), this.normalize(a, !0);
        }),
        (e.prototype.maximum = function (a) {
            var b,
                c,
                d,
                e = this.settings,
                f = this._coordinates.length;
            if (e.loop) f = this._clones.length / 2 + this._items.length - 1;
            else if (e.autoWidth || e.merge) {
                if ((b = this._items.length)) for (c = this._items[--b].width(), d = this.$element.width(); b-- && !((c += this._items[b].width() + this.settings.margin) > d); );
                f = b + 1;
            } else f = e.center ? this._items.length - 1 : this._items.length - e.items;
            return a && (f -= this._clones.length / 2), Math.max(f, 0);
        }),
        (e.prototype.minimum = function (a) {
            return a ? 0 : this._clones.length / 2;
        }),
        (e.prototype.items = function (a) {
            return a === d ? this._items.slice() : ((a = this.normalize(a, !0)), this._items[a]);
        }),
        (e.prototype.mergers = function (a) {
            return a === d ? this._mergers.slice() : ((a = this.normalize(a, !0)), this._mergers[a]);
        }),
        (e.prototype.clones = function (b) {
            var c = this._clones.length / 2,
                e = c + this._items.length,
                f = function (a) {
                    return a % 2 == 0 ? e + a / 2 : c - (a + 1) / 2;
                };
            return b === d
                ? a.map(this._clones, function (a, b) {
                      return f(b);
                  })
                : a.map(this._clones, function (a, c) {
                      return a === b ? f(c) : null;
                  });
        }),
        (e.prototype.speed = function (a) {
            return a !== d && (this._speed = a), this._speed;
        }),
        (e.prototype.coordinates = function (b) {
            var c,
                e = 1,
                f = b - 1;
            return b === d
                ? a.map(
                      this._coordinates,
                      a.proxy(function (a, b) {
                          return this.coordinates(b);
                      }, this)
                  )
                : (this.settings.center ? (this.settings.rtl && ((e = -1), (f = b + 1)), (c = this._coordinates[b]), (c += ((this.width() - c + (this._coordinates[f] || 0)) / 2) * e)) : (c = this._coordinates[f] || 0), (c = Math.ceil(c)));
        }),
        (e.prototype.duration = function (a, b, c) {
            return 0 === c ? 0 : Math.min(Math.max(Math.abs(b - a), 1), 6) * Math.abs(c || this.settings.smartSpeed);
        }),
        (e.prototype.to = function (a, b) {
            var c = this.current(),
                d = null,
                e = a - this.relative(c),
                f = (e > 0) - (e < 0),
                g = this._items.length,
                h = this.minimum(),
                i = this.maximum();
            this.settings.loop
                ? (!this.settings.rewind && Math.abs(e) > g / 2 && (e += -1 * f * g), (a = c + e), (d = ((((a - h) % g) + g) % g) + h) !== a && d - e <= i && d - e > 0 && ((c = d - e), (a = d), this.reset(c)))
                : this.settings.rewind
                ? ((i += 1), (a = ((a % i) + i) % i))
                : (a = Math.max(h, Math.min(i, a))),
                this.speed(this.duration(c, a, b)),
                this.current(a),
                this.isVisible() && this.update();
        }),
        (e.prototype.next = function (a) {
            (a = a || !1), this.to(this.relative(this.current()) + 1, a);
        }),
        (e.prototype.prev = function (a) {
            (a = a || !1), this.to(this.relative(this.current()) - 1, a);
        }),
        (e.prototype.onTransitionEnd = function (a) {
            if (a !== d && (a.stopPropagation(), (a.target || a.srcElement || a.originalTarget) !== this.$stage.get(0))) return !1;
            this.leave("animating"), this.trigger("translated");
        }),
        (e.prototype.viewport = function () {
            var d;
            return (
                this.options.responsiveBaseElement !== b
                    ? (d = a(this.options.responsiveBaseElement).width())
                    : b.innerWidth
                    ? (d = b.innerWidth)
                    : c.documentElement && c.documentElement.clientWidth
                    ? (d = c.documentElement.clientWidth)
                    : console.warn("Can not detect viewport width."),
                d
            );
        }),
        (e.prototype.replace = function (b) {
            this.$stage.empty(),
                (this._items = []),
                b && (b = b instanceof jQuery ? b : a(b)),
                this.settings.nestedItemSelector && (b = b.find("." + this.settings.nestedItemSelector)),
                b
                    .filter(function () {
                        return 1 === this.nodeType;
                    })
                    .each(
                        a.proxy(function (a, b) {
                            (b = this.prepare(b)), this.$stage.append(b), this._items.push(b), this._mergers.push(1 * b.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1);
                        }, this)
                    ),
                this.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0),
                this.invalidate("items");
        }),
        (e.prototype.add = function (b, c) {
            var e = this.relative(this._current);
            (c = c === d ? this._items.length : this.normalize(c, !0)),
                (b = b instanceof jQuery ? b : a(b)),
                this.trigger("add", { content: b, position: c }),
                (b = this.prepare(b)),
                0 === this._items.length || c === this._items.length
                    ? (0 === this._items.length && this.$stage.append(b),
                      0 !== this._items.length && this._items[c - 1].after(b),
                      this._items.push(b),
                      this._mergers.push(1 * b.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1))
                    : (this._items[c].before(b), this._items.splice(c, 0, b), this._mergers.splice(c, 0, 1 * b.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)),
                this._items[e] && this.reset(this._items[e].index()),
                this.invalidate("items"),
                this.trigger("added", { content: b, position: c });
        }),
        (e.prototype.remove = function (a) {
            (a = this.normalize(a, !0)) !== d &&
                (this.trigger("remove", { content: this._items[a], position: a }),
                this._items[a].remove(),
                this._items.splice(a, 1),
                this._mergers.splice(a, 1),
                this.invalidate("items"),
                this.trigger("removed", { content: null, position: a }));
        }),
        (e.prototype.preloadAutoWidthImages = function (b) {
            b.each(
                a.proxy(function (b, c) {
                    this.enter("pre-loading"),
                        (c = a(c)),
                        a(new Image())
                            .one(
                                "load",
                                a.proxy(function (a) {
                                    c.attr("src", a.target.src), c.css("opacity", 1), this.leave("pre-loading"), !this.is("pre-loading") && !this.is("initializing") && this.refresh();
                                }, this)
                            )
                            .attr("src", c.attr("src") || c.attr("data-src") || c.attr("data-src-retina"));
                }, this)
            );
        }),
        (e.prototype.destroy = function () {
            this.$element.off(".owl.core"), this.$stage.off(".owl.core"), a(c).off(".owl.core"), !1 !== this.settings.responsive && (b.clearTimeout(this.resizeTimer), this.off(b, "resize", this._handlers.onThrottledResize));
            for (var d in this._plugins) this._plugins[d].destroy();
            this.$stage.children(".cloned").remove(),
                this.$stage.unwrap(),
                this.$stage.children().contents().unwrap(),
                this.$stage.children().unwrap(),
                this.$stage.remove(),
                this.$element
                    .removeClass(this.options.refreshClass)
                    .removeClass(this.options.loadingClass)
                    .removeClass(this.options.loadedClass)
                    .removeClass(this.options.rtlClass)
                    .removeClass(this.options.dragClass)
                    .removeClass(this.options.grabClass)
                    .attr("class", this.$element.attr("class").replace(new RegExp(this.options.responsiveClass + "-\\S+\\s", "g"), ""))
                    .removeData("owl.carousel");
        }),
        (e.prototype.op = function (a, b, c) {
            var d = this.settings.rtl;
            switch (b) {
                case "<":
                    return d ? a > c : a < c;
                case ">":
                    return d ? a < c : a > c;
                case ">=":
                    return d ? a <= c : a >= c;
                case "<=":
                    return d ? a >= c : a <= c;
            }
        }),
        (e.prototype.on = function (a, b, c, d) {
            a.addEventListener ? a.addEventListener(b, c, d) : a.attachEvent && a.attachEvent("on" + b, c);
        }),
        (e.prototype.off = function (a, b, c, d) {
            a.removeEventListener ? a.removeEventListener(b, c, d) : a.detachEvent && a.detachEvent("on" + b, c);
        }),
        (e.prototype.trigger = function (b, c, d, f, g) {
            var h = { item: { count: this._items.length, index: this.current() } },
                i = a.camelCase(
                    a
                        .grep(["on", b, d], function (a) {
                            return a;
                        })
                        .join("-")
                        .toLowerCase()
                ),
                j = a.Event([b, "owl", d || "carousel"].join(".").toLowerCase(), a.extend({ relatedTarget: this }, h, c));
            return (
                this._supress[b] ||
                    (a.each(this._plugins, function (a, b) {
                        b.onTrigger && b.onTrigger(j);
                    }),
                    this.register({ type: e.Type.Event, name: b }),
                    this.$element.trigger(j),
                    this.settings && "function" == typeof this.settings[i] && this.settings[i].call(this, j)),
                j
            );
        }),
        (e.prototype.enter = function (b) {
            a.each(
                [b].concat(this._states.tags[b] || []),
                a.proxy(function (a, b) {
                    this._states.current[b] === d && (this._states.current[b] = 0), this._states.current[b]++;
                }, this)
            );
        }),
        (e.prototype.leave = function (b) {
            a.each(
                [b].concat(this._states.tags[b] || []),
                a.proxy(function (a, b) {
                    this._states.current[b]--;
                }, this)
            );
        }),
        (e.prototype.register = function (b) {
            if (b.type === e.Type.Event) {
                if ((a.event.special[b.name] || (a.event.special[b.name] = {}), !a.event.special[b.name].owl)) {
                    var c = a.event.special[b.name]._default;
                    (a.event.special[b.name]._default = function (a) {
                        return !c || !c.apply || (a.namespace && -1 !== a.namespace.indexOf("owl")) ? a.namespace && a.namespace.indexOf("owl") > -1 : c.apply(this, arguments);
                    }),
                        (a.event.special[b.name].owl = !0);
                }
            } else
                b.type === e.Type.State &&
                    (this._states.tags[b.name] ? (this._states.tags[b.name] = this._states.tags[b.name].concat(b.tags)) : (this._states.tags[b.name] = b.tags),
                    (this._states.tags[b.name] = a.grep(
                        this._states.tags[b.name],
                        a.proxy(function (c, d) {
                            return a.inArray(c, this._states.tags[b.name]) === d;
                        }, this)
                    )));
        }),
        (e.prototype.suppress = function (b) {
            a.each(
                b,
                a.proxy(function (a, b) {
                    this._supress[b] = !0;
                }, this)
            );
        }),
        (e.prototype.release = function (b) {
            a.each(
                b,
                a.proxy(function (a, b) {
                    delete this._supress[b];
                }, this)
            );
        }),
        (e.prototype.pointer = function (a) {
            var c = { x: null, y: null };
            return (
                (a = a.originalEvent || a || b.event),
                (a = a.touches && a.touches.length ? a.touches[0] : a.changedTouches && a.changedTouches.length ? a.changedTouches[0] : a),
                a.pageX ? ((c.x = a.pageX), (c.y = a.pageY)) : ((c.x = a.clientX), (c.y = a.clientY)),
                c
            );
        }),
        (e.prototype.isNumeric = function (a) {
            return !isNaN(parseFloat(a));
        }),
        (e.prototype.difference = function (a, b) {
            return { x: a.x - b.x, y: a.y - b.y };
        }),
        (a.fn.owlCarousel = function (b) {
            var c = Array.prototype.slice.call(arguments, 1);
            return this.each(function () {
                var d = a(this),
                    f = d.data("owl.carousel");
                f ||
                    ((f = new e(this, "object" == typeof b && b)),
                    d.data("owl.carousel", f),
                    a.each(["next", "prev", "to", "destroy", "refresh", "replace", "add", "remove"], function (b, c) {
                        f.register({ type: e.Type.Event, name: c }),
                            f.$element.on(
                                c + ".owl.carousel.core",
                                a.proxy(function (a) {
                                    a.namespace && a.relatedTarget !== this && (this.suppress([c]), f[c].apply(this, [].slice.call(arguments, 1)), this.release([c]));
                                }, f)
                            );
                    })),
                    "string" == typeof b && "_" !== b.charAt(0) && f[b].apply(f, c);
            });
        }),
        (a.fn.owlCarousel.Constructor = e);
})(window.Zepto || window.jQuery, window, document),
    (function (a, b, c, d) {
        var e = function (b) {
            (this._core = b),
                (this._interval = null),
                (this._visible = null),
                (this._handlers = {
                    "initialized.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.autoRefresh && this.watch();
                    }, this),
                }),
                (this._core.options = a.extend({}, e.Defaults, this._core.options)),
                this._core.$element.on(this._handlers);
        };
        (e.Defaults = { autoRefresh: !0, autoRefreshInterval: 500 }),
            (e.prototype.watch = function () {
                this._interval || ((this._visible = this._core.isVisible()), (this._interval = b.setInterval(a.proxy(this.refresh, this), this._core.settings.autoRefreshInterval)));
            }),
            (e.prototype.refresh = function () {
                this._core.isVisible() !== this._visible && ((this._visible = !this._visible), this._core.$element.toggleClass("owl-hidden", !this._visible), this._visible && this._core.invalidate("width") && this._core.refresh());
            }),
            (e.prototype.destroy = function () {
                var a, c;
                b.clearInterval(this._interval);
                for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
                for (c in Object.getOwnPropertyNames(this)) "function" != typeof this[c] && (this[c] = null);
            }),
            (a.fn.owlCarousel.Constructor.Plugins.AutoRefresh = e);
    })(window.Zepto || window.jQuery, window, document),
    (function (a, b, c, d) {
        var e = function (b) {
            (this._core = b),
                (this._loaded = []),
                (this._handlers = {
                    "initialized.owl.carousel change.owl.carousel resized.owl.carousel": a.proxy(function (b) {
                        if (b.namespace && this._core.settings && this._core.settings.lazyLoad && ((b.property && "position" == b.property.name) || "initialized" == b.type)) {
                            var c = this._core.settings,
                                e = (c.center && Math.ceil(c.items / 2)) || c.items,
                                f = (c.center && -1 * e) || 0,
                                g = (b.property && b.property.value !== d ? b.property.value : this._core.current()) + f,
                                h = this._core.clones().length,
                                i = a.proxy(function (a, b) {
                                    this.load(b);
                                }, this);
                            for (c.lazyLoadEager > 0 && ((e += c.lazyLoadEager), c.loop && ((g -= c.lazyLoadEager), e++)); f++ < e; ) this.load(h / 2 + this._core.relative(g)), h && a.each(this._core.clones(this._core.relative(g)), i), g++;
                        }
                    }, this),
                }),
                (this._core.options = a.extend({}, e.Defaults, this._core.options)),
                this._core.$element.on(this._handlers);
        };
        (e.Defaults = { lazyLoad: !1, lazyLoadEager: 0 }),
            (e.prototype.load = function (c) {
                var d = this._core.$stage.children().eq(c),
                    e = d && d.find(".owl-lazy");
                !e ||
                    a.inArray(d.get(0), this._loaded) > -1 ||
                    (e.each(
                        a.proxy(function (c, d) {
                            var e,
                                f = a(d),
                                g = (b.devicePixelRatio > 1 && f.attr("data-src-retina")) || f.attr("data-src") || f.attr("data-srcset");
                            this._core.trigger("load", { element: f, url: g }, "lazy"),
                                f.is("img")
                                    ? f
                                          .one(
                                              "load.owl.lazy",
                                              a.proxy(function () {
                                                  f.css("opacity", 1), this._core.trigger("loaded", { element: f, url: g }, "lazy");
                                              }, this)
                                          )
                                          .attr("src", g)
                                    : f.is("source")
                                    ? f
                                          .one(
                                              "load.owl.lazy",
                                              a.proxy(function () {
                                                  this._core.trigger("loaded", { element: f, url: g }, "lazy");
                                              }, this)
                                          )
                                          .attr("srcset", g)
                                    : ((e = new Image()),
                                      (e.onload = a.proxy(function () {
                                          f.css({ "background-image": 'url("' + g + '")', opacity: "1" }), this._core.trigger("loaded", { element: f, url: g }, "lazy");
                                      }, this)),
                                      (e.src = g));
                        }, this)
                    ),
                    this._loaded.push(d.get(0)));
            }),
            (e.prototype.destroy = function () {
                var a, b;
                for (a in this.handlers) this._core.$element.off(a, this.handlers[a]);
                for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null);
            }),
            (a.fn.owlCarousel.Constructor.Plugins.Lazy = e);
    })(window.Zepto || window.jQuery, window, document),
    (function (a, b, c, d) {
        var e = function (c) {
            (this._core = c),
                (this._previousHeight = null),
                (this._handlers = {
                    "initialized.owl.carousel refreshed.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.autoHeight && this.update();
                    }, this),
                    "changed.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.autoHeight && "position" === a.property.name && this.update();
                    }, this),
                    "loaded.owl.lazy": a.proxy(function (a) {
                        a.namespace && this._core.settings.autoHeight && a.element.closest("." + this._core.settings.itemClass).index() === this._core.current() && this.update();
                    }, this),
                }),
                (this._core.options = a.extend({}, e.Defaults, this._core.options)),
                this._core.$element.on(this._handlers),
                (this._intervalId = null);
            var d = this;
            a(b).on("load", function () {
                d._core.settings.autoHeight && d.update();
            }),
                a(b).resize(function () {
                    d._core.settings.autoHeight &&
                        (null != d._intervalId && clearTimeout(d._intervalId),
                        (d._intervalId = setTimeout(function () {
                            d.update();
                        }, 250)));
                });
        };
        (e.Defaults = { autoHeight: !1, autoHeightClass: "owl-height" }),
            (e.prototype.update = function () {
                var b = this._core._current,
                    c = b + this._core.settings.items,
                    d = this._core.settings.lazyLoad,
                    e = this._core.$stage.children().toArray().slice(b, c),
                    f = [],
                    g = 0;
                a.each(e, function (b, c) {
                    f.push(a(c).height());
                }),
                    (g = Math.max.apply(null, f)),
                    g <= 1 && d && this._previousHeight && (g = this._previousHeight),
                    (this._previousHeight = g),
                    this._core.$stage.parent().height(g).addClass(this._core.settings.autoHeightClass);
            }),
            (e.prototype.destroy = function () {
                var a, b;
                for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
                for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null);
            }),
            (a.fn.owlCarousel.Constructor.Plugins.AutoHeight = e);
    })(window.Zepto || window.jQuery, window, document),
    (function (a, b, c, d) {
        var e = function (b) {
            (this._core = b),
                (this._videos = {}),
                (this._playing = null),
                (this._handlers = {
                    "initialized.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.register({ type: "state", name: "playing", tags: ["interacting"] });
                    }, this),
                    "resize.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.video && this.isInFullScreen() && a.preventDefault();
                    }, this),
                    "refreshed.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.is("resizing") && this._core.$stage.find(".cloned .owl-video-frame").remove();
                    }, this),
                    "changed.owl.carousel": a.proxy(function (a) {
                        a.namespace && "position" === a.property.name && this._playing && this.stop();
                    }, this),
                    "prepared.owl.carousel": a.proxy(function (b) {
                        if (b.namespace) {
                            var c = a(b.content).find(".owl-video");
                            c.length && (c.css("display", "none"), this.fetch(c, a(b.content)));
                        }
                    }, this),
                }),
                (this._core.options = a.extend({}, e.Defaults, this._core.options)),
                this._core.$element.on(this._handlers),
                this._core.$element.on(
                    "click.owl.video",
                    ".owl-video-play-icon",
                    a.proxy(function (a) {
                        this.play(a);
                    }, this)
                );
        };
        (e.Defaults = { video: !1, videoHeight: !1, videoWidth: !1 }),
            (e.prototype.fetch = function (a, b) {
                var c = (function () {
                        return a.attr("data-vimeo-id") ? "vimeo" : a.attr("data-vzaar-id") ? "vzaar" : "youtube";
                    })(),
                    d = a.attr("data-vimeo-id") || a.attr("data-youtube-id") || a.attr("data-vzaar-id"),
                    e = a.attr("data-width") || this._core.settings.videoWidth,
                    f = a.attr("data-height") || this._core.settings.videoHeight,
                    g = a.attr("href");
                if (!g) throw new Error("Missing video URL.");
                if (
                    ((d = g.match(
                        /(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com|be\-nocookie\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/
                    )),
                    d[3].indexOf("youtu") > -1)
                )
                    c = "youtube";
                else if (d[3].indexOf("vimeo") > -1) c = "vimeo";
                else {
                    if (!(d[3].indexOf("vzaar") > -1)) throw new Error("Video URL not supported.");
                    c = "vzaar";
                }
                (d = d[6]), (this._videos[g] = { type: c, id: d, width: e, height: f }), b.attr("data-video", g), this.thumbnail(a, this._videos[g]);
            }),
            (e.prototype.thumbnail = function (b, c) {
                var d,
                    e,
                    f,
                    g = c.width && c.height ? "width:" + c.width + "px;height:" + c.height + "px;" : "",
                    h = b.find("img"),
                    i = "src",
                    j = "",
                    k = this._core.settings,
                    l = function (c) {
                        (e = '<div class="owl-video-play-icon"></div>'),
                            (d = k.lazyLoad ? a("<div/>", { class: "owl-video-tn " + j, srcType: c }) : a("<div/>", { class: "owl-video-tn", style: "opacity:1;background-image:url(" + c + ")" })),
                            b.after(d),
                            b.after(e);
                    };
                if ((b.wrap(a("<div/>", { class: "owl-video-wrapper", style: g })), this._core.settings.lazyLoad && ((i = "data-src"), (j = "owl-lazy")), h.length)) return l(h.attr(i)), h.remove(), !1;
                "youtube" === c.type
                    ? ((f = "//img.youtube.com/vi/" + c.id + "/hqdefault.jpg"), l(f))
                    : "vimeo" === c.type
                    ? a.ajax({
                          type: "GET",
                          url: "//vimeo.com/api/v2/video/" + c.id + ".json",
                          jsonp: "callback",
                          dataType: "jsonp",
                          success: function (a) {
                              (f = a[0].thumbnail_large), l(f);
                          },
                      })
                    : "vzaar" === c.type &&
                      a.ajax({
                          type: "GET",
                          url: "//vzaar.com/api/videos/" + c.id + ".json",
                          jsonp: "callback",
                          dataType: "jsonp",
                          success: function (a) {
                              (f = a.framegrab_url), l(f);
                          },
                      });
            }),
            (e.prototype.stop = function () {
                this._core.trigger("stop", null, "video"),
                    this._playing.find(".owl-video-frame").remove(),
                    this._playing.removeClass("owl-video-playing"),
                    (this._playing = null),
                    this._core.leave("playing"),
                    this._core.trigger("stopped", null, "video");
            }),
            (e.prototype.play = function (b) {
                var c,
                    d = a(b.target),
                    e = d.closest("." + this._core.settings.itemClass),
                    f = this._videos[e.attr("data-video")],
                    g = f.width || "100%",
                    h = f.height || this._core.$stage.height();
                this._playing ||
                    (this._core.enter("playing"),
                    this._core.trigger("play", null, "video"),
                    (e = this._core.items(this._core.relative(e.index()))),
                    this._core.reset(e.index()),
                    (c = a('<iframe frameborder="0" allowfullscreen mozallowfullscreen webkitAllowFullScreen ></iframe>')),
                    c.attr("height", h),
                    c.attr("width", g),
                    "youtube" === f.type
                        ? c.attr("src", "//www.youtube.com/embed/" + f.id + "?autoplay=1&rel=0&v=" + f.id)
                        : "vimeo" === f.type
                        ? c.attr("src", "//player.vimeo.com/video/" + f.id + "?autoplay=1")
                        : "vzaar" === f.type && c.attr("src", "//view.vzaar.com/" + f.id + "/player?autoplay=true"),
                    a(c).wrap('<div class="owl-video-frame" />').insertAfter(e.find(".owl-video")),
                    (this._playing = e.addClass("owl-video-playing")));
            }),
            (e.prototype.isInFullScreen = function () {
                var b = c.fullscreenElement || c.mozFullScreenElement || c.webkitFullscreenElement;
                return b && a(b).parent().hasClass("owl-video-frame");
            }),
            (e.prototype.destroy = function () {
                var a, b;
                this._core.$element.off("click.owl.video");
                for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
                for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null);
            }),
            (a.fn.owlCarousel.Constructor.Plugins.Video = e);
    })(window.Zepto || window.jQuery, window, document),
    (function (a, b, c, d) {
        var e = function (b) {
            (this.core = b),
                (this.core.options = a.extend({}, e.Defaults, this.core.options)),
                (this.swapping = !0),
                (this.previous = d),
                (this.next = d),
                (this.handlers = {
                    "change.owl.carousel": a.proxy(function (a) {
                        a.namespace && "position" == a.property.name && ((this.previous = this.core.current()), (this.next = a.property.value));
                    }, this),
                    "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": a.proxy(function (a) {
                        a.namespace && (this.swapping = "translated" == a.type);
                    }, this),
                    "translate.owl.carousel": a.proxy(function (a) {
                        a.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap();
                    }, this),
                }),
                this.core.$element.on(this.handlers);
        };
        (e.Defaults = { animateOut: !1, animateIn: !1 }),
            (e.prototype.swap = function () {
                if (1 === this.core.settings.items && a.support.animation && a.support.transition) {
                    this.core.speed(0);
                    var b,
                        c = a.proxy(this.clear, this),
                        d = this.core.$stage.children().eq(this.previous),
                        e = this.core.$stage.children().eq(this.next),
                        f = this.core.settings.animateIn,
                        g = this.core.settings.animateOut;
                    this.core.current() !== this.previous &&
                        (g &&
                            ((b = this.core.coordinates(this.previous) - this.core.coordinates(this.next)),
                            d
                                .one(a.support.animation.end, c)
                                .css({ left: b + "px" })
                                .addClass("animated owl-animated-out")
                                .addClass(g)),
                        f && e.one(a.support.animation.end, c).addClass("animated owl-animated-in").addClass(f));
                }
            }),
            (e.prototype.clear = function (b) {
                a(b.target).css({ left: "" }).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut), this.core.onTransitionEnd();
            }),
            (e.prototype.destroy = function () {
                var a, b;
                for (a in this.handlers) this.core.$element.off(a, this.handlers[a]);
                for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null);
            }),
            (a.fn.owlCarousel.Constructor.Plugins.Animate = e);
    })(window.Zepto || window.jQuery, window, document),
    (function (a, b, c, d) {
        var e = function (b) {
            (this._core = b),
                (this._call = null),
                (this._time = 0),
                (this._timeout = 0),
                (this._paused = !0),
                (this._handlers = {
                    "changed.owl.carousel": a.proxy(function (a) {
                        a.namespace && "settings" === a.property.name ? (this._core.settings.autoplay ? this.play() : this.stop()) : a.namespace && "position" === a.property.name && this._paused && (this._time = 0);
                    }, this),
                    "initialized.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.autoplay && this.play();
                    }, this),
                    "play.owl.autoplay": a.proxy(function (a, b, c) {
                        a.namespace && this.play(b, c);
                    }, this),
                    "stop.owl.autoplay": a.proxy(function (a) {
                        a.namespace && this.stop();
                    }, this),
                    "mouseover.owl.autoplay": a.proxy(function () {
                        this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause();
                    }, this),
                    "mouseleave.owl.autoplay": a.proxy(function () {
                        this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.play();
                    }, this),
                    "touchstart.owl.core": a.proxy(function () {
                        this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause();
                    }, this),
                    "touchend.owl.core": a.proxy(function () {
                        this._core.settings.autoplayHoverPause && this.play();
                    }, this),
                }),
                this._core.$element.on(this._handlers),
                (this._core.options = a.extend({}, e.Defaults, this._core.options));
        };
        (e.Defaults = { autoplay: !1, autoplayTimeout: 5e3, autoplayHoverPause: !1, autoplaySpeed: !1 }),
            (e.prototype._next = function (d) {
                (this._call = b.setTimeout(a.proxy(this._next, this, d), this._timeout * (Math.round(this.read() / this._timeout) + 1) - this.read())),
                    this._core.is("interacting") || c.hidden || this._core.next(d || this._core.settings.autoplaySpeed);
            }),
            (e.prototype.read = function () {
                return new Date().getTime() - this._time;
            }),
            (e.prototype.play = function (c, d) {
                var e;
                this._core.is("rotating") || this._core.enter("rotating"),
                    (c = c || this._core.settings.autoplayTimeout),
                    (e = Math.min(this._time % (this._timeout || c), c)),
                    this._paused ? ((this._time = this.read()), (this._paused = !1)) : b.clearTimeout(this._call),
                    (this._time += (this.read() % c) - e),
                    (this._timeout = c),
                    (this._call = b.setTimeout(a.proxy(this._next, this, d), c - e));
            }),
            (e.prototype.stop = function () {
                this._core.is("rotating") && ((this._time = 0), (this._paused = !0), b.clearTimeout(this._call), this._core.leave("rotating"));
            }),
            (e.prototype.pause = function () {
                this._core.is("rotating") && !this._paused && ((this._time = this.read()), (this._paused = !0), b.clearTimeout(this._call));
            }),
            (e.prototype.destroy = function () {
                var a, b;
                this.stop();
                for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
                for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null);
            }),
            (a.fn.owlCarousel.Constructor.Plugins.autoplay = e);
    })(window.Zepto || window.jQuery, window, document),
    (function (a, b, c, d) {
        "use strict";
        var e = function (b) {
            (this._core = b),
                (this._initialized = !1),
                (this._pages = []),
                (this._controls = {}),
                (this._templates = []),
                (this.$element = this._core.$element),
                (this._overrides = { next: this._core.next, prev: this._core.prev, to: this._core.to }),
                (this._handlers = {
                    "prepared.owl.carousel": a.proxy(function (b) {
                        b.namespace && this._core.settings.dotsData && this._templates.push('<div class="' + this._core.settings.dotClass + '">' + a(b.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot") + "</div>");
                    }, this),
                    "added.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.dotsData && this._templates.splice(a.position, 0, this._templates.pop());
                    }, this),
                    "remove.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.dotsData && this._templates.splice(a.position, 1);
                    }, this),
                    "changed.owl.carousel": a.proxy(function (a) {
                        a.namespace && "position" == a.property.name && this.draw();
                    }, this),
                    "initialized.owl.carousel": a.proxy(function (a) {
                        a.namespace &&
                            !this._initialized &&
                            (this._core.trigger("initialize", null, "navigation"), this.initialize(), this.update(), this.draw(), (this._initialized = !0), this._core.trigger("initialized", null, "navigation"));
                    }, this),
                    "refreshed.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._initialized && (this._core.trigger("refresh", null, "navigation"), this.update(), this.draw(), this._core.trigger("refreshed", null, "navigation"));
                    }, this),
                }),
                (this._core.options = a.extend({}, e.Defaults, this._core.options)),
                this.$element.on(this._handlers);
        };
        (e.Defaults = {
            nav: !1,
            navText: ['<span aria-label="Previous">&#x2039;</span>', '<span aria-label="Next">&#x203a;</span>'],
            navSpeed: !1,
            navElement: 'button type="button" role="presentation"',
            navContainer: !1,
            navContainerClass: "owl-nav",
            navClass: ["owl-prev", "owl-next"],
            slideBy: 1,
            dotClass: "owl-dot",
            dotsClass: "owl-dots",
            dots: !0,
            dotsEach: !1,
            dotsData: !1,
            dotsSpeed: !1,
            dotsContainer: !1,
        }),
            (e.prototype.initialize = function () {
                var b,
                    c = this._core.settings;
                (this._controls.$relative = (c.navContainer ? a(c.navContainer) : a("<div>").addClass(c.navContainerClass).appendTo(this.$element)).addClass("disabled")),
                    (this._controls.$previous = a("<" + c.navElement + ">")
                        .addClass(c.navClass[0])
                        .html(c.navText[0])
                        .prependTo(this._controls.$relative)
                        .on(
                            "click",
                            a.proxy(function (a) {
                                this.prev(c.navSpeed);
                            }, this)
                        )),
                    (this._controls.$next = a("<" + c.navElement + ">")
                        .addClass(c.navClass[1])
                        .html(c.navText[1])
                        .appendTo(this._controls.$relative)
                        .on(
                            "click",
                            a.proxy(function (a) {
                                this.next(c.navSpeed);
                            }, this)
                        )),
                    c.dotsData || (this._templates = [a('<button role="button">').addClass(c.dotClass).append(a("<span>")).prop("outerHTML")]),
                    (this._controls.$absolute = (c.dotsContainer ? a(c.dotsContainer) : a("<div>").addClass(c.dotsClass).appendTo(this.$element)).addClass("disabled")),
                    this._controls.$absolute.on(
                        "click",
                        "button",
                        a.proxy(function (b) {
                            var d = a(b.target).parent().is(this._controls.$absolute) ? a(b.target).index() : a(b.target).parent().index();
                            b.preventDefault(), this.to(d, c.dotsSpeed);
                        }, this)
                    );
                for (b in this._overrides) this._core[b] = a.proxy(this[b], this);
            }),
            (e.prototype.destroy = function () {
                var a, b, c, d, e;
                e = this._core.settings;
                for (a in this._handlers) this.$element.off(a, this._handlers[a]);
                for (b in this._controls) "$relative" === b && e.navContainer ? this._controls[b].html("") : this._controls[b].remove();
                for (d in this.overides) this._core[d] = this._overrides[d];
                for (c in Object.getOwnPropertyNames(this)) "function" != typeof this[c] && (this[c] = null);
            }),
            (e.prototype.update = function () {
                var a,
                    b,
                    c,
                    d = this._core.clones().length / 2,
                    e = d + this._core.items().length,
                    f = this._core.maximum(!0),
                    g = this._core.settings,
                    h = g.center || g.autoWidth || g.dotsData ? 1 : g.dotsEach || g.items;
                if (("page" !== g.slideBy && (g.slideBy = Math.min(g.slideBy, g.items)), g.dots || "page" == g.slideBy))
                    for (this._pages = [], a = d, b = 0, c = 0; a < e; a++) {
                        if (b >= h || 0 === b) {
                            if ((this._pages.push({ start: Math.min(f, a - d), end: a - d + h - 1 }), Math.min(f, a - d) === f)) break;
                            (b = 0), ++c;
                        }
                        b += this._core.mergers(this._core.relative(a));
                    }
            }),
            (e.prototype.draw = function () {
                var b,
                    c = this._core.settings,
                    d = this._core.items().length <= c.items,
                    e = this._core.relative(this._core.current()),
                    f = c.loop || c.rewind;
                this._controls.$relative.toggleClass("disabled", !c.nav || d),
                    c.nav && (this._controls.$previous.toggleClass("disabled", !f && e <= this._core.minimum(!0)), this._controls.$next.toggleClass("disabled", !f && e >= this._core.maximum(!0))),
                    this._controls.$absolute.toggleClass("disabled", !c.dots || d),
                    c.dots &&
                        ((b = this._pages.length - this._controls.$absolute.children().length),
                        c.dotsData && 0 !== b
                            ? this._controls.$absolute.html(this._templates.join(""))
                            : b > 0
                            ? this._controls.$absolute.append(new Array(b + 1).join(this._templates[0]))
                            : b < 0 && this._controls.$absolute.children().slice(b).remove(),
                        this._controls.$absolute.find(".active").removeClass("active"),
                        this._controls.$absolute.children().eq(a.inArray(this.current(), this._pages)).addClass("active"));
            }),
            (e.prototype.onTrigger = function (b) {
                var c = this._core.settings;
                b.page = { index: a.inArray(this.current(), this._pages), count: this._pages.length, size: c && (c.center || c.autoWidth || c.dotsData ? 1 : c.dotsEach || c.items) };
            }),
            (e.prototype.current = function () {
                var b = this._core.relative(this._core.current());
                return a
                    .grep(
                        this._pages,
                        a.proxy(function (a, c) {
                            return a.start <= b && a.end >= b;
                        }, this)
                    )
                    .pop();
            }),
            (e.prototype.getPosition = function (b) {
                var c,
                    d,
                    e = this._core.settings;
                return (
                    "page" == e.slideBy
                        ? ((c = a.inArray(this.current(), this._pages)), (d = this._pages.length), b ? ++c : --c, (c = this._pages[((c % d) + d) % d].start))
                        : ((c = this._core.relative(this._core.current())), (d = this._core.items().length), b ? (c += e.slideBy) : (c -= e.slideBy)),
                    c
                );
            }),
            (e.prototype.next = function (b) {
                a.proxy(this._overrides.to, this._core)(this.getPosition(!0), b);
            }),
            (e.prototype.prev = function (b) {
                a.proxy(this._overrides.to, this._core)(this.getPosition(!1), b);
            }),
            (e.prototype.to = function (b, c, d) {
                var e;
                !d && this._pages.length ? ((e = this._pages.length), a.proxy(this._overrides.to, this._core)(this._pages[((b % e) + e) % e].start, c)) : a.proxy(this._overrides.to, this._core)(b, c);
            }),
            (a.fn.owlCarousel.Constructor.Plugins.Navigation = e);
    })(window.Zepto || window.jQuery, window, document),
    (function (a, b, c, d) {
        "use strict";
        var e = function (c) {
            (this._core = c),
                (this._hashes = {}),
                (this.$element = this._core.$element),
                (this._handlers = {
                    "initialized.owl.carousel": a.proxy(function (c) {
                        c.namespace && "URLHash" === this._core.settings.startPosition && a(b).trigger("hashchange.owl.navigation");
                    }, this),
                    "prepared.owl.carousel": a.proxy(function (b) {
                        if (b.namespace) {
                            var c = a(b.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");
                            if (!c) return;
                            this._hashes[c] = b.content;
                        }
                    }, this),
                    "changed.owl.carousel": a.proxy(function (c) {
                        if (c.namespace && "position" === c.property.name) {
                            var d = this._core.items(this._core.relative(this._core.current())),
                                e = a
                                    .map(this._hashes, function (a, b) {
                                        return a === d ? b : null;
                                    })
                                    .join();
                            if (!e || b.location.hash.slice(1) === e) return;
                            b.location.hash = e;
                        }
                    }, this),
                }),
                (this._core.options = a.extend({}, e.Defaults, this._core.options)),
                this.$element.on(this._handlers),
                a(b).on(
                    "hashchange.owl.navigation",
                    a.proxy(function (a) {
                        var c = b.location.hash.substring(1),
                            e = this._core.$stage.children(),
                            f = this._hashes[c] && e.index(this._hashes[c]);
                        f !== d && f !== this._core.current() && this._core.to(this._core.relative(f), !1, !0);
                    }, this)
                );
        };
        (e.Defaults = { URLhashListener: !1 }),
            (e.prototype.destroy = function () {
                var c, d;
                a(b).off("hashchange.owl.navigation");
                for (c in this._handlers) this._core.$element.off(c, this._handlers[c]);
                for (d in Object.getOwnPropertyNames(this)) "function" != typeof this[d] && (this[d] = null);
            }),
            (a.fn.owlCarousel.Constructor.Plugins.Hash = e);
    })(window.Zepto || window.jQuery, window, document),
    (function (a, b, c, d) {
        function e(b, c) {
            var e = !1,
                f = b.charAt(0).toUpperCase() + b.slice(1);
            return (
                a.each((b + " " + h.join(f + " ") + f).split(" "), function (a, b) {
                    if (g[b] !== d) return (e = !c || b), !1;
                }),
                e
            );
        }
        function f(a) {
            return e(a, !0);
        }
        var g = a("<support>").get(0).style,
            h = "Webkit Moz O ms".split(" "),
            i = {
                transition: { end: { WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "oTransitionEnd", transition: "transitionend" } },
                animation: { end: { WebkitAnimation: "webkitAnimationEnd", MozAnimation: "animationend", OAnimation: "oAnimationEnd", animation: "animationend" } },
            },
            j = {
                csstransforms: function () {
                    return !!e("transform");
                },
                csstransforms3d: function () {
                    return !!e("perspective");
                },
                csstransitions: function () {
                    return !!e("transition");
                },
                cssanimations: function () {
                    return !!e("animation");
                },
            };
        j.csstransitions() && ((a.support.transition = new String(f("transition"))), (a.support.transition.end = i.transition.end[a.support.transition])),
            j.cssanimations() && ((a.support.animation = new String(f("animation"))), (a.support.animation.end = i.animation.end[a.support.animation])),
            j.csstransforms() && ((a.support.transform = new String(f("transform"))), (a.support.transform3d = j.csstransforms3d()));
    })(window.Zepto || window.jQuery, window, document);

/**
 * Basic structure: TC_Class is the public class that is returned upon being called
 *
 * So, if you do
 *      var tc = $(".timer").TimeCircles();
 *
 * tc will contain an instance of the public TimeCircles class. It is important to
 * note that TimeCircles is not chained in the conventional way, check the
 * documentation for more info on how TimeCircles can be chained.
 *
 * After being called/created, the public TimerCircles class will then- for each element
 * within it's collection, either fetch or create an instance of the private class.
 * Each function called upon the public class will be forwarded to each instance
 * of the private classes within the relevant element collection
 **/
(function ($) {
    var useWindow = window;

    // From https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/keys
    if (!Object.keys) {
        Object.keys = (function () {
            "use strict";
            var hasOwnProperty = Object.prototype.hasOwnProperty,
                hasDontEnumBug = !{ toString: null }.propertyIsEnumerable("toString"),
                dontEnums = ["toString", "toLocaleString", "valueOf", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "constructor"],
                dontEnumsLength = dontEnums.length;

            return function (obj) {
                if (typeof obj !== "object" && (typeof obj !== "function" || obj === null)) {
                    throw new TypeError("Object.keys called on non-object");
                }

                var result = [],
                    prop,
                    i;

                for (prop in obj) {
                    if (hasOwnProperty.call(obj, prop)) {
                        result.push(prop);
                    }
                }

                if (hasDontEnumBug) {
                    for (i = 0; i < dontEnumsLength; i++) {
                        if (hasOwnProperty.call(obj, dontEnums[i])) {
                            result.push(dontEnums[i]);
                        }
                    }
                }
                return result;
            };
        })();
    }

    // Used to disable some features on IE8
    var limited_mode = false;
    var tick_duration = 200; // in ms

    var debug = location.hash === "#debug";
    function debug_log(msg) {
        if (debug) {
            console.log(msg);
        }
    }

    var allUnits = ["Days", "Hours", "Minutes", "Seconds"];
    var nextUnits = {
        Seconds: "Minutes",
        Minutes: "Hours",
        Hours: "Days",
        Days: "Years",
    };
    var secondsIn = {
        Seconds: 1,
        Minutes: 60,
        Hours: 3600,
        Days: 86400,
        Months: 2678400,
        Years: 31536000,
    };

    /**
     * Converts hex color code into object containing integer values for the r,g,b use
     * This function (hexToRgb) originates from:
     * http://stackoverflow.com/questions/5623838/rgb-to-hex-and-hex-to-rgb
     * @param {string} hex color code
     */
    function hexToRgb(hex) {
        // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
        var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
        hex = hex.replace(shorthandRegex, function (m, r, g, b) {
            return r + r + g + g + b + b;
        });

        var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
        return result
            ? {
                  r: parseInt(result[1], 16),
                  g: parseInt(result[2], 16),
                  b: parseInt(result[3], 16),
              }
            : null;
    }

    function isCanvasSupported() {
        var elem = document.createElement("canvas");
        return !!(elem.getContext && elem.getContext("2d"));
    }

    /**
     * Function s4() and guid() originate from:
     * http://stackoverflow.com/questions/105034/how-to-create-a-guid-uuid-in-javascript
     */
    function s4() {
        return Math.floor((1 + Math.random()) * 0x10000)
            .toString(16)
            .substring(1);
    }

    /**
     * Creates a unique id
     * @returns {String}
     */
    function guid() {
        return s4() + s4() + "-" + s4() + "-" + s4() + "-" + s4() + "-" + s4() + s4() + s4();
    }

    /**
     * Array.prototype.indexOf fallback for IE8
     * @param {Mixed} mixed
     * @returns {Number}
     */
    if (!Array.prototype.indexOf) {
        Array.prototype.indexOf = function (elt /*, from*/) {
            var len = this.length >>> 0;

            var from = Number(arguments[1]) || 0;
            from = from < 0 ? Math.ceil(from) : Math.floor(from);
            if (from < 0) from += len;

            for (; from < len; from++) {
                if (from in this && this[from] === elt) return from;
            }
            return -1;
        };
    }

    function parse_date(str) {
        var match = str.match(/^[0-9]{4}-[0-9]{2}-[0-9]{2}\s[0-9]{1,2}:[0-9]{2}:[0-9]{2}$/);
        if (match !== null && match.length > 0) {
            var parts = str.split(" ");
            var date = parts[0].split("-");
            var time = parts[1].split(":");
            return new Date(date[0], date[1] - 1, date[2], time[0], time[1], time[2]);
        }
        // Fallback for different date formats
        var d = Date.parse(str);
        if (!isNaN(d)) return d;
        d = Date.parse(str.replace(/-/g, "/").replace("T", " "));
        if (!isNaN(d)) return d;
        // Cant find anything
        return new Date();
    }

    function parse_times(diff, old_diff, total_duration, units, floor) {
        var raw_time = {};
        var raw_old_time = {};
        var time = {};
        var pct = {};
        var old_pct = {};
        var old_time = {};

        var greater_unit = null;
        for (var i = 0; i < units.length; i++) {
            var unit = units[i];
            var maxUnits;

            if (greater_unit === null) {
                maxUnits = total_duration / secondsIn[unit];
            } else {
                maxUnits = secondsIn[greater_unit] / secondsIn[unit];
            }

            var curUnits = diff / secondsIn[unit];
            var oldUnits = old_diff / secondsIn[unit];

            if (floor) {
                if (curUnits > 0) curUnits = Math.floor(curUnits);
                else curUnits = Math.ceil(curUnits);
                if (oldUnits > 0) oldUnits = Math.floor(oldUnits);
                else oldUnits = Math.ceil(oldUnits);
            }

            if (unit !== "Days") {
                curUnits = curUnits % maxUnits;
                oldUnits = oldUnits % maxUnits;
            }

            raw_time[unit] = curUnits;
            time[unit] = Math.abs(curUnits);
            raw_old_time[unit] = oldUnits;
            old_time[unit] = Math.abs(oldUnits);
            pct[unit] = Math.abs(curUnits) / maxUnits;
            old_pct[unit] = Math.abs(oldUnits) / maxUnits;

            greater_unit = unit;
        }

        return {
            raw_time: raw_time,
            raw_old_time: raw_old_time,
            time: time,
            old_time: old_time,
            pct: pct,
            old_pct: old_pct,
        };
    }

    var TC_Instance_List = {};
    function updateUsedWindow() {
        if (typeof useWindow.TC_Instance_List !== "undefined") {
            TC_Instance_List = useWindow.TC_Instance_List;
        } else {
            useWindow.TC_Instance_List = TC_Instance_List;
        }
        initializeAnimationFrameHandler(useWindow);
    }

    function initializeAnimationFrameHandler(w) {
        var vendors = ["webkit", "moz"];
        for (var x = 0; x < vendors.length && !w.requestAnimationFrame; ++x) {
            w.requestAnimationFrame = w[vendors[x] + "RequestAnimationFrame"];
            w.cancelAnimationFrame = w[vendors[x] + "CancelAnimationFrame"];
        }

        if (!w.requestAnimationFrame || !w.cancelAnimationFrame) {
            w.requestAnimationFrame = function (callback, element, instance) {
                if (typeof instance === "undefined") instance = { data: { last_frame: 0 } };
                var currTime = new Date().getTime();
                var timeToCall = Math.max(0, 16 - (currTime - instance.data.last_frame));
                var id = w.setTimeout(function () {
                    callback(currTime + timeToCall);
                }, timeToCall);
                instance.data.last_frame = currTime + timeToCall;
                return id;
            };
            w.cancelAnimationFrame = function (id) {
                clearTimeout(id);
            };
        }
    }

    var TC_Instance = function (element, options) {
        this.element = element;
        this.container;
        this.listeners = null;
        this.data = {
            paused: false,
            last_frame: 0,
            animation_frame: null,
            interval_fallback: null,
            timer: false,
            total_duration: null,
            prev_time: null,
            drawn_units: [],
            text_elements: {
                Days: null,
                Hours: null,
                Minutes: null,
                Seconds: null,
            },
            attributes: {
                canvas: null,
                context: null,
                item_size: null,
                line_width: null,
                radius: null,
                outer_radius: null,
            },
            state: {
                fading: {
                    Days: false,
                    Hours: false,
                    Minutes: false,
                    Seconds: false,
                },
            },
        };

        this.config = null;
        this.setOptions(options);
        this.initialize();
    };

    TC_Instance.prototype.clearListeners = function () {
        this.listeners = { all: [], visible: [] };
    };

    TC_Instance.prototype.addTime = function (seconds_to_add) {
        if (this.data.attributes.ref_date instanceof Date) {
            var d = this.data.attributes.ref_date;
            d.setSeconds(d.getSeconds() + seconds_to_add);
        } else if (!isNaN(this.data.attributes.ref_date)) {
            this.data.attributes.ref_date += seconds_to_add * 1000;
        }
    };

    TC_Instance.prototype.initialize = function (clear_listeners) {
        // Initialize drawn units
        this.data.drawn_units = [];
        for (var i = 0; i < Object.keys(this.config.time).length; i++) {
            var unit = Object.keys(this.config.time)[i];
            if (this.config.time[unit].show) {
                this.data.drawn_units.push(unit);
            }
        }

        // Avoid stacking
        $(this.element).children("div.time_circles").remove();

        if (typeof clear_listeners === "undefined") clear_listeners = true;
        if (clear_listeners || this.listeners === null) {
            this.clearListeners();
        }
        this.container = $("<div>");
        this.container.addClass("time_circles");
        this.container.appendTo(this.element);

        // Determine the needed width and height of TimeCircles
        var height = this.element.offsetHeight;
        var width = this.element.offsetWidth;
        if (height === 0) height = $(this.element).height();
        if (width === 0) width = $(this.element).width();

        if (height === 0 && width > 0) height = width / this.data.drawn_units.length;
        else if (width === 0 && height > 0) width = height * this.data.drawn_units.length;

        // Create our canvas and set it to the appropriate size
        var canvasElement = document.createElement("canvas");
        canvasElement.width = width;
        canvasElement.height = height;

        // Add canvas elements
        this.data.attributes.canvas = $(canvasElement);
        this.data.attributes.canvas.appendTo(this.container);

        // Check if the browser has browser support
        var canvasSupported = isCanvasSupported();
        // If the browser doesn't have browser support, check if explorer canvas is loaded
        // (A javascript library that adds canvas support to browsers that don't have it)
        if (!canvasSupported && typeof G_vmlCanvasManager !== "undefined") {
            G_vmlCanvasManager.initElement(canvasElement);
            limited_mode = true;
            canvasSupported = true;
        }
        if (canvasSupported) {
            this.data.attributes.context = canvasElement.getContext("2d");
        }

        this.data.attributes.item_size = Math.min(width / this.data.drawn_units.length, height);
        this.data.attributes.line_width = this.data.attributes.item_size * this.config.fg_width;
        this.data.attributes.radius = (this.data.attributes.item_size * 0.8 - this.data.attributes.line_width) / 2;
        this.data.attributes.outer_radius = this.data.attributes.radius + 0.5 * Math.max(this.data.attributes.line_width, this.data.attributes.line_width * this.config.bg_width);

        // Prepare Time Elements
        var i = 0;
        for (var key in this.data.text_elements) {
            if (!this.config.time[key].show) continue;

            var textElement = $("<div>");
            textElement.addClass("textDiv_" + key);
            textElement.css("top", Math.round(0.35 * this.data.attributes.item_size));
            textElement.css("left", Math.round(i++ * this.data.attributes.item_size));
            textElement.css("width", this.data.attributes.item_size);
            textElement.appendTo(this.container);

            var headerElement = $("<h4>");
            headerElement.text(this.config.time[key].text); // Options
            headerElement.css("font-size", Math.round(this.config.text_size * this.data.attributes.item_size));
            headerElement.css("line-height", Math.round(this.config.text_size * this.data.attributes.item_size) + "px");
            headerElement.appendTo(textElement);

            var numberElement = $("<span>");
            numberElement.css("font-size", Math.round(3 * this.config.text_size * this.data.attributes.item_size));
            numberElement.css("line-height", Math.round(this.config.text_size * this.data.attributes.item_size) + "px");
            numberElement.appendTo(textElement);

            this.data.text_elements[key] = numberElement;
        }

        this.start();
        if (!this.config.start) {
            this.data.paused = true;
        }

        // Set up interval fallback
        var _this = this;
        this.data.interval_fallback = useWindow.setInterval(function () {
            _this.update.call(_this, true);
        }, 100);
    };

    TC_Instance.prototype.update = function (nodraw) {
        if (typeof nodraw === "undefined") {
            nodraw = false;
        } else if (nodraw && this.data.paused) {
            return;
        }

        if (limited_mode) {
            //Per unit clearing doesn't work in IE8 using explorer canvas, so do it in one time. The downside is that radial fade cant be used
            this.data.attributes.context.clearRect(0, 0, this.data.attributes.canvas[0].width, this.data.attributes.canvas[0].hright);
        }
        var diff, old_diff;

        var prevDate = this.data.prev_time;
        var curDate = new Date();
        this.data.prev_time = curDate;

        if (prevDate === null) prevDate = curDate;

        // If not counting past zero, and time < 0, then simply draw the zero point once, and call stop
        if (!this.config.count_past_zero) {
            if (curDate > this.data.attributes.ref_date) {
                for (var i = 0; i < this.data.drawn_units.length; i++) {
                    var key = this.data.drawn_units[i];

                    // Set the text value
                    this.data.text_elements[key].text("0");
                    var x = i * this.data.attributes.item_size + this.data.attributes.item_size / 2;
                    var y = this.data.attributes.item_size / 2;
                    var color = this.config.time[key].color;
                    this.drawArc(x, y, color, 0);
                }
                this.stop();
                return;
            }
        }

        // Compare current time with reference
        diff = (this.data.attributes.ref_date - curDate) / 1000;
        old_diff = (this.data.attributes.ref_date - prevDate) / 1000;

        var floor = this.config.animation !== "smooth";

        var visible_times = parse_times(diff, old_diff, this.data.total_duration, this.data.drawn_units, floor);
        var all_times = parse_times(diff, old_diff, secondsIn["Years"], allUnits, floor);

        var i = 0;
        var j = 0;
        var lastKey = null;

        var cur_shown = this.data.drawn_units.slice();
        for (var i in allUnits) {
            var key = allUnits[i];

            // Notify (all) listeners
            if (Math.floor(all_times.raw_time[key]) !== Math.floor(all_times.raw_old_time[key])) {
                this.notifyListeners(key, Math.floor(all_times.time[key]), Math.floor(diff), "all");
            }

            if (cur_shown.indexOf(key) < 0) continue;

            // Notify (visible) listeners
            if (Math.floor(visible_times.raw_time[key]) !== Math.floor(visible_times.raw_old_time[key])) {
                this.notifyListeners(key, Math.floor(visible_times.time[key]), Math.floor(diff), "visible");
            }

            if (!nodraw) {
                // Set the text value
                this.data.text_elements[key].text(Math.floor(Math.abs(visible_times.time[key])));

                var x = j * this.data.attributes.item_size + this.data.attributes.item_size / 2;
                var y = this.data.attributes.item_size / 2;
                var color = this.config.time[key].color;

                if (this.config.animation === "smooth") {
                    if (lastKey !== null && !limited_mode) {
                        if (Math.floor(visible_times.time[lastKey]) > Math.floor(visible_times.old_time[lastKey])) {
                            this.radialFade(x, y, color, 1, key);
                            this.data.state.fading[key] = true;
                        } else if (Math.floor(visible_times.time[lastKey]) < Math.floor(visible_times.old_time[lastKey])) {
                            this.radialFade(x, y, color, 0, key);
                            this.data.state.fading[key] = true;
                        }
                    }
                    if (!this.data.state.fading[key]) {
                        this.drawArc(x, y, color, visible_times.pct[key]);
                    }
                } else {
                    this.animateArc(x, y, color, visible_times.pct[key], visible_times.old_pct[key], new Date().getTime() + tick_duration);
                }
            }
            lastKey = key;
            j++;
        }

        // Dont request another update if we should be paused
        if (this.data.paused || nodraw) {
            return;
        }

        // We need this for our next frame either way
        var _this = this;
        var update = function () {
            _this.update.call(_this);
        };

        // Either call next update immediately, or in a second
        if (this.config.animation === "smooth") {
            // Smooth animation, Queue up the next frame
            this.data.animation_frame = useWindow.requestAnimationFrame(update, _this.element, _this);
        } else {
            // Tick animation, Don't queue until very slightly after the next second happens
            var delay = (diff % 1) * 1000;
            if (delay < 0) delay = 1000 + delay;
            delay += 50;

            _this.data.animation_frame = useWindow.setTimeout(function () {
                _this.data.animation_frame = useWindow.requestAnimationFrame(update, _this.element, _this);
            }, delay);
        }
    };

    TC_Instance.prototype.animateArc = function (x, y, color, target_pct, cur_pct, animation_end) {
        if (this.data.attributes.context === null) return;

        var diff = cur_pct - target_pct;
        if (Math.abs(diff) > 0.5) {
            if (target_pct === 0) {
                this.radialFade(x, y, color, 1);
            } else {
                this.radialFade(x, y, color, 0);
            }
        } else {
            var progress = (tick_duration - (animation_end - new Date().getTime())) / tick_duration;
            if (progress > 1) progress = 1;

            var pct = cur_pct * (1 - progress) + target_pct * progress;
            this.drawArc(x, y, color, pct);

            //var show_pct =
            if (progress >= 1) return;
            var _this = this;
            useWindow.requestAnimationFrame(function () {
                _this.animateArc(x, y, color, target_pct, cur_pct, animation_end);
            }, this.element);
        }
    };

    TC_Instance.prototype.drawArc = function (x, y, color, pct) {
        if (this.data.attributes.context === null) return;

        var clear_radius = Math.max(this.data.attributes.outer_radius, this.data.attributes.item_size / 2);
        if (!limited_mode) {
            this.data.attributes.context.clearRect(x - clear_radius, y - clear_radius, clear_radius * 2, clear_radius * 2);
        }

        if (this.config.use_background) {
            this.data.attributes.context.beginPath();
            this.data.attributes.context.arc(x, y, this.data.attributes.radius, 0, 2 * Math.PI, false);
            this.data.attributes.context.lineWidth = this.data.attributes.line_width * this.config.bg_width;

            // line color
            this.data.attributes.context.strokeStyle = this.config.circle_bg_color;
            this.data.attributes.context.stroke();
        }

        // Direction
        var startAngle, endAngle, counterClockwise;
        var defaultOffset = -0.5 * Math.PI;
        var fullCircle = 2 * Math.PI;
        startAngle = defaultOffset + (this.config.start_angle / 360) * fullCircle;
        var offset = 2 * pct * Math.PI;

        if (this.config.direction === "Both") {
            counterClockwise = false;
            startAngle -= offset / 2;
            endAngle = startAngle + offset;
        } else {
            if (this.config.direction === "Clockwise") {
                counterClockwise = false;
                endAngle = startAngle + offset;
            } else {
                counterClockwise = true;
                endAngle = startAngle - offset;
            }
        }

        this.data.attributes.context.beginPath();
        this.data.attributes.context.arc(x, y, this.data.attributes.radius, startAngle, endAngle, counterClockwise);
        this.data.attributes.context.lineWidth = this.data.attributes.line_width;

        // line color
        this.data.attributes.context.strokeStyle = color;
        this.data.attributes.context.stroke();
    };

    TC_Instance.prototype.radialFade = function (x, y, color, from, key) {
        // TODO: Make fade_time option
        var rgb = hexToRgb(color);
        var _this = this; // We have a few inner scopes here that will need access to our instance

        var step = 0.2 * (from === 1 ? -1 : 1);
        var i;
        for (i = 0; from <= 1 && from >= 0; i++) {
            // Create inner scope so our variables are not changed by the time the Timeout triggers
            (function () {
                var delay = 50 * i;
                var rgba = "rgba(" + rgb.r + ", " + rgb.g + ", " + rgb.b + ", " + Math.round(from * 10) / 10 + ")";
                useWindow.setTimeout(function () {
                    _this.drawArc(x, y, rgba, 1);
                }, delay);
            })();
            from += step;
        }
        if (typeof key !== undefined) {
            useWindow.setTimeout(function () {
                _this.data.state.fading[key] = false;
            }, 50 * i);
        }
    };

    TC_Instance.prototype.timeLeft = function () {
        if (this.data.paused && typeof this.data.timer === "number") {
            return this.data.timer;
        }
        var now = new Date();
        return (this.data.attributes.ref_date - now) / 1000;
    };

    TC_Instance.prototype.start = function () {
        useWindow.cancelAnimationFrame(this.data.animation_frame);
        useWindow.clearTimeout(this.data.animation_frame);

        // Check if a date was passed in html attribute or jquery data
        var attr_data_date = $(this.element).data("date");
        if (typeof attr_data_date === "undefined") {
            attr_data_date = $(this.element).attr("data-date");
        }
        if (typeof attr_data_date === "string") {
            this.data.attributes.ref_date = parse_date(attr_data_date);
        }
        // Check if this is an unpause of a timer
        else if (typeof this.data.timer === "number") {
            if (this.data.paused) {
                this.data.attributes.ref_date = new Date().getTime() + this.data.timer * 1000;
            }
        } else {
            // Try to get data-timer
            var attr_data_timer = $(this.element).data("timer");
            if (typeof attr_data_timer === "undefined") {
                attr_data_timer = $(this.element).attr("data-timer");
            }
            if (typeof attr_data_timer === "string") {
                attr_data_timer = parseFloat(attr_data_timer);
            }
            if (typeof attr_data_timer === "number") {
                this.data.timer = attr_data_timer;
                this.data.attributes.ref_date = new Date().getTime() + attr_data_timer * 1000;
            } else {
                // data-timer and data-date were both not set
                // use config date
                this.data.attributes.ref_date = this.config.ref_date;
            }
        }

        // Start running
        this.data.paused = false;
        this.update.call(this);
    };

    TC_Instance.prototype.restart = function () {
        this.data.timer = false;
        this.start();
    };

    TC_Instance.prototype.stop = function () {
        if (typeof this.data.timer === "number") {
            this.data.timer = this.timeLeft(this);
        }
        // Stop running
        this.data.paused = true;
        useWindow.cancelAnimationFrame(this.data.animation_frame);
    };

    TC_Instance.prototype.destroy = function () {
        this.clearListeners();
        this.stop();
        useWindow.clearInterval(this.data.interval_fallback);
        this.data.interval_fallback = null;

        this.container.remove();
        $(this.element).removeAttr("data-tc-id");
        $(this.element).removeData("tc-id");
    };

    TC_Instance.prototype.setOptions = function (options) {
        if (this.config === null) {
            this.default_options.ref_date = new Date();
            this.config = $.extend(true, {}, this.default_options);
        }
        $.extend(true, this.config, options);

        // Use window.top if use_top_frame is true
        if (this.config.use_top_frame) {
            useWindow = window.top;
        } else {
            useWindow = window;
        }
        updateUsedWindow();

        this.data.total_duration = this.config.total_duration;
        if (typeof this.data.total_duration === "string") {
            if (typeof secondsIn[this.data.total_duration] !== "undefined") {
                // If set to Years, Months, Days, Hours or Minutes, fetch the secondsIn value for that
                this.data.total_duration = secondsIn[this.data.total_duration];
            } else if (this.data.total_duration === "Auto") {
                // If set to auto, total_duration is the size of 1 unit, of the unit type bigger than the largest shown
                for (var i = 0; i < Object.keys(this.config.time).length; i++) {
                    var unit = Object.keys(this.config.time)[i];
                    if (this.config.time[unit].show) {
                        this.data.total_duration = secondsIn[nextUnits[unit]];
                        break;
                    }
                }
            } else {
                // If it's a string, but neither of the above, user screwed up.
                this.data.total_duration = secondsIn["Years"];
                console.error("Valid values for TimeCircles config.total_duration are either numeric, or (string) Years, Months, Days, Hours, Minutes, Auto");
            }
        }
    };

    TC_Instance.prototype.addListener = function (f, context, type) {
        if (typeof f !== "function") return;
        if (typeof type === "undefined") type = "visible";
        this.listeners[type].push({ func: f, scope: context });
    };

    TC_Instance.prototype.notifyListeners = function (unit, value, total, type) {
        for (var i = 0; i < this.listeners[type].length; i++) {
            var listener = this.listeners[type][i];
            listener.func.apply(listener.scope, [unit, value, total]);
        }
    };

    TC_Instance.prototype.default_options = {
        ref_date: new Date(),
        start: true,
        animation: "smooth",
        count_past_zero: true,
        circle_bg_color: "#60686F",
        use_background: true,
        fg_width: 0.1,
        bg_width: 1.2,
        text_size: 0.07,
        total_duration: "Auto",
        direction: "Clockwise",
        use_top_frame: false,
        start_angle: 0,
        time: {
            Days: {
                show: true,
                text: "Days",
                color: "#FC6",
            },
            Hours: {
                show: true,
                text: "Hours",
                color: "#9CF",
            },
            Minutes: {
                show: true,
                text: "Minutes",
                color: "#BFB",
            },
            Seconds: {
                show: true,
                text: "Seconds",
                color: "#F99",
            },
        },
    };

    // Time circle class
    var TC_Class = function (elements, options) {
        this.elements = elements;
        this.options = options;
        this.foreach();
    };

    TC_Class.prototype.getInstance = function (element) {
        var instance;

        var cur_id = $(element).data("tc-id");
        if (typeof cur_id === "undefined") {
            cur_id = guid();
            $(element).attr("data-tc-id", cur_id);
        }
        if (typeof TC_Instance_List[cur_id] === "undefined") {
            var options = this.options;
            var element_options = $(element).data("options");
            if (typeof element_options === "string") {
                element_options = JSON.parse(element_options);
            }
            if (typeof element_options === "object") {
                options = $.extend(true, {}, this.options, element_options);
            }
            instance = new TC_Instance(element, options);
            TC_Instance_List[cur_id] = instance;
        } else {
            instance = TC_Instance_List[cur_id];
            if (typeof this.options !== "undefined") {
                instance.setOptions(this.options);
            }
        }
        return instance;
    };

    TC_Class.prototype.addTime = function (seconds_to_add) {
        this.foreach(function (instance) {
            instance.addTime(seconds_to_add);
        });
    };

    TC_Class.prototype.foreach = function (callback) {
        var _this = this;
        this.elements.each(function () {
            var instance = _this.getInstance(this);
            if (typeof callback === "function") {
                callback(instance);
            }
        });
        return this;
    };

    TC_Class.prototype.start = function () {
        this.foreach(function (instance) {
            instance.start();
        });
        return this;
    };

    TC_Class.prototype.stop = function () {
        this.foreach(function (instance) {
            instance.stop();
        });
        return this;
    };

    TC_Class.prototype.restart = function () {
        this.foreach(function (instance) {
            instance.restart();
        });
        return this;
    };

    TC_Class.prototype.rebuild = function () {
        this.foreach(function (instance) {
            instance.initialize(false);
        });
        return this;
    };

    TC_Class.prototype.getTime = function () {
        return this.getInstance(this.elements[0]).timeLeft();
    };

    TC_Class.prototype.addListener = function (f, type) {
        if (typeof type === "undefined") type = "visible";
        var _this = this;
        this.foreach(function (instance) {
            instance.addListener(f, _this.elements, type);
        });
        return this;
    };

    TC_Class.prototype.destroy = function () {
        this.foreach(function (instance) {
            instance.destroy();
        });
        return this;
    };

    TC_Class.prototype.end = function () {
        return this.elements;
    };

    $.fn.TimeCircles = function (options) {
        return new TC_Class(this, options);
    };
})(jQuery);

/*! UIkit 3.5.9 | https://www.getuikit.com | (c) 2014 - 2020 YOOtheme | MIT License */

!(function (t, i) {
    "object" == typeof exports && "undefined" != typeof module
        ? (module.exports = i())
        : "function" == typeof define && define.amd
        ? define("uikiticons", i)
        : ((t = "undefined" != typeof globalThis ? globalThis : t || self).UIkitIcons = i());
})(this, function () {
    "use strict";
    function i(t) {
        i.installed ||
            t.icon.add({
                "500px":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.624,11.866c-0.141,0.132,0.479,0.658,0.662,0.418c0.051-0.046,0.607-0.61,0.662-0.664c0,0,0.738,0.719,0.814,0.719 c0.1,0,0.207-0.055,0.322-0.17c0.27-0.269,0.135-0.416,0.066-0.495l-0.631-0.616l0.658-0.668c0.146-0.156,0.021-0.314-0.1-0.449 c-0.182-0.18-0.359-0.226-0.471-0.125l-0.656,0.654l-0.654-0.654c-0.033-0.034-0.08-0.045-0.124-0.045 c-0.079,0-0.191,0.068-0.307,0.181c-0.202,0.202-0.247,0.351-0.133,0.462l0.665,0.665L9.624,11.866z"/><path d="M11.066,2.884c-1.061,0-2.185,0.248-3.011,0.604c-0.087,0.034-0.141,0.106-0.15,0.205C7.893,3.784,7.919,3.909,7.982,4.066 c0.05,0.136,0.187,0.474,0.452,0.372c0.844-0.326,1.779-0.507,2.633-0.507c0.963,0,1.9,0.191,2.781,0.564 c0.695,0.292,1.357,0.719,2.078,1.34c0.051,0.044,0.105,0.068,0.164,0.068c0.143,0,0.273-0.137,0.389-0.271 c0.191-0.214,0.324-0.395,0.135-0.575c-0.686-0.654-1.436-1.138-2.363-1.533C13.24,3.097,12.168,2.884,11.066,2.884z"/><path d="M16.43,15.747c-0.092-0.028-0.242,0.05-0.309,0.119l0,0c-0.652,0.652-1.42,1.169-2.268,1.521 c-0.877,0.371-1.814,0.551-2.779,0.551c-0.961,0-1.896-0.189-2.775-0.564c-0.848-0.36-1.612-0.879-2.268-1.53 c-0.682-0.688-1.196-1.455-1.529-2.268c-0.325-0.799-0.471-1.643-0.471-1.643c-0.045-0.24-0.258-0.249-0.567-0.203 c-0.128,0.021-0.519,0.079-0.483,0.36v0.01c0.105,0.644,0.289,1.284,0.545,1.895c0.417,0.969,1.002,1.849,1.756,2.604 c0.757,0.754,1.636,1.34,2.604,1.757C8.901,18.785,9.97,19,11.088,19c1.104,0,2.186-0.215,3.188-0.645 c1.838-0.896,2.604-1.757,2.604-1.757c0.182-0.204,0.227-0.317-0.1-0.643C16.779,15.956,16.525,15.774,16.43,15.747z"/><path d="M5.633,13.287c0.293,0.71,0.723,1.341,1.262,1.882c0.54,0.54,1.172,0.971,1.882,1.264c0.731,0.303,1.509,0.461,2.298,0.461 c0.801,0,1.578-0.158,2.297-0.461c0.711-0.293,1.344-0.724,1.883-1.264c0.543-0.541,0.971-1.172,1.264-1.882 c0.314-0.721,0.463-1.5,0.463-2.298c0-0.79-0.148-1.569-0.463-2.289c-0.293-0.699-0.721-1.329-1.264-1.881 c-0.539-0.541-1.172-0.959-1.867-1.263c-0.721-0.303-1.5-0.461-2.299-0.461c-0.802,0-1.613,0.159-2.322,0.461 c-0.577,0.25-1.544,0.867-2.119,1.454v0.012V2.108h8.16C15.1,2.104,15.1,1.69,15.1,1.552C15.1,1.417,15.1,1,14.809,1H5.915 C5.676,1,5.527,1.192,5.527,1.384v6.84c0,0.214,0.273,0.372,0.529,0.428c0.5,0.105,0.614-0.056,0.737-0.224l0,0 c0.18-0.273,0.776-0.884,0.787-0.894c0.901-0.905,2.117-1.408,3.416-1.408c1.285,0,2.5,0.501,3.412,1.408 c0.914,0.914,1.408,2.122,1.408,3.405c0,1.288-0.508,2.496-1.408,3.405c-0.9,0.896-2.152,1.406-3.438,1.406 c-0.877,0-1.711-0.229-2.433-0.671v-4.158c0-0.553,0.237-1.151,0.643-1.614c0.462-0.519,1.094-0.799,1.782-0.799 c0.664,0,1.293,0.253,1.758,0.715c0.459,0.459,0.709,1.071,0.709,1.723c0,1.385-1.094,2.468-2.488,2.468 c-0.273,0-0.769-0.121-0.781-0.125c-0.281-0.087-0.405,0.306-0.438,0.436c-0.159,0.496,0.079,0.585,0.123,0.607 c0.452,0.137,0.743,0.157,1.129,0.157c1.973,0,3.572-1.6,3.572-3.57c0-1.964-1.6-3.552-3.572-3.552c-0.97,0-1.872,0.36-2.546,1.038 c-0.656,0.631-1.027,1.487-1.027,2.322v3.438v-0.011c-0.372-0.42-0.732-1.041-0.981-1.682c-0.102-0.248-0.315-0.202-0.607-0.113 c-0.135,0.035-0.519,0.157-0.44,0.439C5.372,12.799,5.577,13.164,5.633,13.287z"/></svg>',
                album:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="2" width="10" height="1"/><rect x="3" y="4" width="14" height="1"/><rect fill="none" stroke="#000" x="1.5" y="6.5" width="17" height="11"/></svg>',
                "arrow-down":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="10.5,16.08 5.63,10.66 6.37,10 10.5,14.58 14.63,10 15.37,10.66"/><line fill="none" stroke="#000" x1="10.5" y1="4" x2="10.5" y2="15"/></svg>',
                "arrow-left":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="10 14 5 9.5 10 5"/><line fill="none" stroke="#000" x1="16" y1="9.5" x2="5" y2="9.52"/></svg>',
                "arrow-right":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14"/><line fill="none" stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5"/></svg>',
                "arrow-up":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="10.5,4 15.37,9.4 14.63,10.08 10.5,5.49 6.37,10.08 5.63,9.4"/><line fill="none" stroke="#000" x1="10.5" y1="16" x2="10.5" y2="5"/></svg>',
                ban:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10" r="9"/><line fill="none" stroke="#000" stroke-width="1.1" x1="4" y1="3.5" x2="16" y2="16.5"/></svg>',
                behance:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.5,10.6c-0.4-0.5-0.9-0.9-1.6-1.1c1.7-1,2.2-3.2,0.7-4.7C7.8,4,6.3,4,5.2,4C3.5,4,1.7,4,0,4v12c1.7,0,3.4,0,5.2,0 c1,0,2.1,0,3.1-0.5C10.2,14.6,10.5,12.3,9.5,10.6L9.5,10.6z M5.6,6.1c1.8,0,1.8,2.7-0.1,2.7c-1,0-2,0-2.9,0V6.1H5.6z M2.6,13.8v-3.1 c1.1,0,2.1,0,3.2,0c2.1,0,2.1,3.2,0.1,3.2L2.6,13.8z"/><path d="M19.9,10.9C19.7,9.2,18.7,7.6,17,7c-4.2-1.3-7.3,3.4-5.3,7.1c0.9,1.7,2.8,2.3,4.7,2.1c1.7-0.2,2.9-1.3,3.4-2.9h-2.2 c-0.4,1.3-2.4,1.5-3.5,0.6c-0.4-0.4-0.6-1.1-0.6-1.7H20C20,11.7,19.9,10.9,19.9,10.9z M13.5,10.6c0-1.6,2.3-2.7,3.5-1.4 c0.4,0.4,0.5,0.9,0.6,1.4H13.5L13.5,10.6z"/><rect x="13" y="4" width="5" height="1.4"/></svg>',
                bell:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.1" d="M17,15.5 L3,15.5 C2.99,14.61 3.79,13.34 4.1,12.51 C4.58,11.3 4.72,10.35 5.19,7.01 C5.54,4.53 5.89,3.2 7.28,2.16 C8.13,1.56 9.37,1.5 9.81,1.5 L9.96,1.5 C9.96,1.5 11.62,1.41 12.67,2.17 C14.08,3.2 14.42,4.54 14.77,7.02 C15.26,10.35 15.4,11.31 15.87,12.52 C16.2,13.34 17.01,14.61 17,15.5 L17,15.5 Z"/><path fill="none" stroke="#000" d="M12.39,16 C12.39,17.37 11.35,18.43 9.91,18.43 C8.48,18.43 7.42,17.37 7.42,16"/></svg>',
                bold:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5,15.3 C5.66,15.3 5.9,15 5.9,14.53 L5.9,5.5 C5.9,4.92 5.56,4.7 5,4.7 L5,4 L8.95,4 C12.6,4 13.7,5.37 13.7,6.9 C13.7,7.87 13.14,9.17 10.86,9.59 L10.86,9.7 C13.25,9.86 14.29,11.28 14.3,12.54 C14.3,14.47 12.94,16 9,16 L5,16 L5,15.3 Z M9,9.3 C11.19,9.3 11.8,8.5 11.85,7 C11.85,5.65 11.3,4.8 9,4.8 L7.67,4.8 L7.67,9.3 L9,9.3 Z M9.185,15.22 C11.97,15 12.39,14 12.4,12.58 C12.4,11.15 11.39,10 9,10 L7.67,10 L7.67,15 L9.18,15 Z"/></svg>',
                bolt:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4.74,20 L7.73,12 L3,12 L15.43,1 L12.32,9 L17.02,9 L4.74,20 L4.74,20 L4.74,20 Z M9.18,11 L7.1,16.39 L14.47,10 L10.86,10 L12.99,4.67 L5.61,11 L9.18,11 L9.18,11 L9.18,11 Z"/></svg>',
                bookmark: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" stroke="#000" points="5.5 1.5 15.5 1.5 15.5 17.5 10.5 12.5 5.5 17.5"/></svg>',
                calendar:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M 2,3 2,17 18,17 18,3 2,3 Z M 17,16 3,16 3,8 17,8 17,16 Z M 17,7 3,7 3,4 17,4 17,7 Z"/><rect width="1" height="3" x="6" y="2"/><rect width="1" height="3" x="13" y="2"/></svg>',
                camera:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10.8" r="3.8"/><path fill="none" stroke="#000" d="M1,4.5 C0.7,4.5 0.5,4.7 0.5,5 L0.5,17 C0.5,17.3 0.7,17.5 1,17.5 L19,17.5 C19.3,17.5 19.5,17.3 19.5,17 L19.5,5 C19.5,4.7 19.3,4.5 19,4.5 L13.5,4.5 L13.5,2.9 C13.5,2.6 13.3,2.5 13,2.5 L7,2.5 C6.7,2.5 6.5,2.6 6.5,2.9 L6.5,4.5 L1,4.5 L1,4.5 Z"/></svg>',
                cart:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle cx="7.3" cy="17.3" r="1.4"/><circle cx="13.3" cy="17.3" r="1.4"/><polyline fill="none" stroke="#000" points="0 2 3.2 4 5.3 12.5 16 12.5 18 6.5 8 6.5"/></svg>',
                check: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"/></svg>',
                "chevron-double-left":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.03" points="10 14 6 10 10 6"/><polyline fill="none" stroke="#000" stroke-width="1.03" points="14 14 10 10 14 6"/></svg>',
                "chevron-double-right":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.03" points="10 6 14 10 10 14"/><polyline fill="none" stroke="#000" stroke-width="1.03" points="6 6 10 10 6 14"/></svg>',
                "chevron-down": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.03" points="16 7 10 13 4 7"/></svg>',
                "chevron-left": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.03" points="13 16 7 10 13 4"/></svg>',
                "chevron-right": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.03" points="7 4 13 10 7 16"/></svg>',
                "chevron-up": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.03" points="4 13 10 7 16 13"/></svg>',
                clock:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10" r="9"/><rect x="9" y="4" width="1" height="7"/><path fill="none" stroke="#000" stroke-width="1.1" d="M13.018,14.197 L9.445,10.625"/></svg>',
                close:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.06" d="M16,16 L4,4"/><path fill="none" stroke="#000" stroke-width="1.06" d="M16,4 L4,16"/></svg>',
                "cloud-download":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.1" d="M6.5,14.61 L3.75,14.61 C1.96,14.61 0.5,13.17 0.5,11.39 C0.5,9.76 1.72,8.41 3.3,8.2 C3.38,5.31 5.75,3 8.68,3 C11.19,3 13.31,4.71 13.89,7.02 C14.39,6.8 14.93,6.68 15.5,6.68 C17.71,6.68 19.5,8.45 19.5,10.64 C19.5,12.83 17.71,14.6 15.5,14.6 L12.5,14.6"/><polyline fill="none" stroke="#000" points="11.75 16 9.5 18.25 7.25 16"/><path fill="none" stroke="#000" d="M9.5,18 L9.5,9.5"/></svg>',
                "cloud-upload":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.1" d="M6.5,14.61 L3.75,14.61 C1.96,14.61 0.5,13.17 0.5,11.39 C0.5,9.76 1.72,8.41 3.31,8.2 C3.38,5.31 5.75,3 8.68,3 C11.19,3 13.31,4.71 13.89,7.02 C14.39,6.8 14.93,6.68 15.5,6.68 C17.71,6.68 19.5,8.45 19.5,10.64 C19.5,12.83 17.71,14.6 15.5,14.6 L12.5,14.6"/><polyline fill="none" stroke="#000" points="7.25 11.75 9.5 9.5 11.75 11.75"/><path fill="none" stroke="#000" d="M9.5,18 L9.5,9.5"/></svg>',
                code:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.01" points="13,4 19,10 13,16"/><polyline fill="none" stroke="#000" stroke-width="1.01" points="7,4 1,10 7,16"/></svg>',
                cog:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" cx="9.997" cy="10" r="3.31"/><path fill="none" stroke="#000" d="M18.488,12.285 L16.205,16.237 C15.322,15.496 14.185,15.281 13.303,15.791 C12.428,16.289 12.047,17.373 12.246,18.5 L7.735,18.5 C7.938,17.374 7.553,16.299 6.684,15.791 C5.801,15.27 4.655,15.492 3.773,16.237 L1.5,12.285 C2.573,11.871 3.317,10.999 3.317,9.991 C3.305,8.98 2.573,8.121 1.5,7.716 L3.765,3.784 C4.645,4.516 5.794,4.738 6.687,4.232 C7.555,3.722 7.939,2.637 7.735,1.5 L12.263,1.5 C12.072,2.637 12.441,3.71 13.314,4.22 C14.206,4.73 15.343,4.516 16.225,3.794 L18.487,7.714 C17.404,8.117 16.661,8.988 16.67,10.009 C16.672,11.018 17.415,11.88 18.488,12.285 L18.488,12.285 Z"/></svg>',
                comment:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6,18.71 L6,14 L1,14 L1,1 L19,1 L19,14 L10.71,14 L6,18.71 L6,18.71 Z M2,13 L7,13 L7,16.29 L10.29,13 L18,13 L18,2 L2,2 L2,13 L2,13 Z"/></svg>',
                commenting:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" stroke="#000" points="1.5,1.5 18.5,1.5 18.5,13.5 10.5,13.5 6.5,17.5 6.5,13.5 1.5,13.5"/><circle cx="10" cy="8" r="1"/><circle cx="6" cy="8" r="1"/><circle cx="14" cy="8" r="1"/></svg>',
                comments:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="2 0.5 19.5 0.5 19.5 13"/><path d="M5,19.71 L5,15 L0,15 L0,2 L18,2 L18,15 L9.71,15 L5,19.71 L5,19.71 L5,19.71 Z M1,14 L6,14 L6,17.29 L9.29,14 L17,14 L17,3 L1,3 L1,14 L1,14 L1,14 Z"/></svg>',
                copy:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect fill="none" stroke="#000" x="3.5" y="2.5" width="12" height="16"/><polyline fill="none" stroke="#000" points="5 0.5 17.5 0.5 17.5 17"/></svg>',
                "credit-card": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect fill="none" stroke="#000" x="1.5" y="4.5" width="17" height="12"/><rect x="1" y="7" width="18" height="3"/></svg>',
                database:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><ellipse fill="none" stroke="#000" cx="10" cy="4.64" rx="7.5" ry="3.14"/><path fill="none" stroke="#000" d="M17.5,8.11 C17.5,9.85 14.14,11.25 10,11.25 C5.86,11.25 2.5,9.84 2.5,8.11"/><path fill="none" stroke="#000" d="M17.5,11.25 C17.5,12.99 14.14,14.39 10,14.39 C5.86,14.39 2.5,12.98 2.5,11.25"/><path fill="none" stroke="#000" d="M17.49,4.64 L17.5,14.36 C17.5,16.1 14.14,17.5 10,17.5 C5.86,17.5 2.5,16.09 2.5,14.36 L2.5,4.64"/></svg>',
                desktop:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="8" y="15" width="1" height="2"/><rect x="11" y="15" width="1" height="2"/><rect x="5" y="16" width="10" height="1"/><rect fill="none" stroke="#000" x="1.5" y="3.5" width="17" height="11"/></svg>',
                download:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="14,10 9.5,14.5 5,10"/><rect x="3" y="17" width="13" height="1"/><line fill="none" stroke="#000" x1="9.5" y1="13.91" x2="9.5" y2="3"/></svg>',
                dribbble:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.4" d="M1.3,8.9c0,0,5,0.1,8.6-1c1.4-0.4,2.6-0.9,4-1.9 c1.4-1.1,2.5-2.5,2.5-2.5"/><path fill="none" stroke="#000" stroke-width="1.4" d="M3.9,16.6c0,0,1.7-2.8,3.5-4.2 c1.8-1.3,4-2,5.7-2.2C16,10,19,10.6,19,10.6"/><path fill="none" stroke="#000" stroke-width="1.4" d="M6.9,1.6c0,0,3.3,4.6,4.2,6.8 c0.4,0.9,1.3,3.1,1.9,5.2c0.6,2,0.9,4.4,0.9,4.4"/><circle fill="none" stroke="#000" stroke-width="1.4" cx="10" cy="10" r="9"/></svg>',
                etsy:
                    '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M8,4.26C8,4.07,8,4,8.31,4h4.46c.79,0,1.22.67,1.53,1.91l.25,1h.76c.14-2.82.26-4,.26-4S13.65,3,12.52,3H6.81L3.75,2.92v.84l1,.2c.73.11.9.27,1,1,0,0,.06,2,.06,5.17s-.06,5.14-.06,5.14c0,.59-.23.81-1,.94l-1,.2v.84l3.06-.1h5.11c1.15,0,3.82.1,3.82.1,0-.7.45-3.88.51-4.22h-.73l-.76,1.69a2.25,2.25,0,0,1-2.45,1.47H9.4c-1,0-1.44-.4-1.44-1.24V10.44s2.16,0,2.86.06c.55,0,.85.19,1.06,1l.23,1H13L12.9,9.94,13,7.41h-.85l-.28,1.13c-.16.74-.28.84-1,1-1,.1-2.89.09-2.89.09Z"/></svg>',
                expand:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 18 2 18 7 17 7 17 3 13 3"/><polygon points="2 13 3 13 3 17 7 17 7 18 2 18"/><path fill="none" stroke="#000" stroke-width="1.1" d="M11,9 L17,3"/><path fill="none" stroke="#000" stroke-width="1.1" d="M3,17 L9,11"/></svg>',
                facebook: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z"/></svg>',
                "file-edit":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" d="M18.65,1.68 C18.41,1.45 18.109,1.33 17.81,1.33 C17.499,1.33 17.209,1.45 16.98,1.68 L8.92,9.76 L8,12.33 L10.55,11.41 L18.651,3.34 C19.12,2.87 19.12,2.15 18.65,1.68 L18.65,1.68 L18.65,1.68 Z"/><polyline fill="none" stroke="#000" points="16.5 8.482 16.5 18.5 3.5 18.5 3.5 1.5 14.211 1.5"/></svg>',
                "file-pdf":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect fill="none" stroke="#000" width="13" height="17" x="3.5" y="1.5"/><path d="M14.65 11.67c-.48.3-1.37-.19-1.79-.37a4.65 4.65 0 0 1 1.49.06c.35.1.36.28.3.31zm-6.3.06l.43-.79a14.7 14.7 0 0 0 .75-1.64 5.48 5.48 0 0 0 1.25 1.55l.2.15a16.36 16.36 0 0 0-2.63.73zM9.5 5.32c.2 0 .32.5.32.97a1.99 1.99 0 0 1-.23 1.04 5.05 5.05 0 0 1-.17-1.3s0-.71.08-.71zm-3.9 9a4.35 4.35 0 0 1 1.21-1.46l.24-.22a4.35 4.35 0 0 1-1.46 1.68zm9.23-3.3a2.05 2.05 0 0 0-1.32-.3 11.07 11.07 0 0 0-1.58.11 4.09 4.09 0 0 1-.74-.5 5.39 5.39 0 0 1-1.32-2.06 10.37 10.37 0 0 0 .28-2.62 1.83 1.83 0 0 0-.07-.25.57.57 0 0 0-.52-.4H9.4a.59.59 0 0 0-.6.38 6.95 6.95 0 0 0 .37 3.14c-.26.63-1 2.12-1 2.12-.3.58-.57 1.08-.82 1.5l-.8.44A3.11 3.11 0 0 0 5 14.16a.39.39 0 0 0 .15.42l.24.13c1.15.56 2.28-1.74 2.66-2.42a23.1 23.1 0 0 1 3.59-.85 4.56 4.56 0 0 0 2.91.8.5.5 0 0 0 .3-.21 1.1 1.1 0 0 0 .12-.75.84.84 0 0 0-.14-.25z"/></svg>',
                "file-text":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect fill="none" stroke="#000" width="13" height="17" x="3.5" y="1.5"/><line fill="none" stroke="#000" x1="6" x2="12" y1="12.5" y2="12.5"/><line fill="none" stroke="#000" x1="6" x2="14" y1="8.5" y2="8.5"/><line fill="none" stroke="#000" x1="6" x2="14" y1="6.5" y2="6.5"/><line fill="none" stroke="#000" x1="6" x2="14" y1="10.5" y2="10.5"/></svg>',
                file: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect fill="none" stroke="#000" x="3.5" y="1.5" width="13" height="17"/></svg>',
                flickr: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle cx="5.5" cy="9.5" r="3.5"/><circle cx="14.5" cy="9.5" r="3.5"/></svg>',
                folder: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" stroke="#000" points="9.5 5.5 8.5 3.5 1.5 3.5 1.5 16.5 18.5 16.5 18.5 5.5"/></svg>',
                forward:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.47,13.11 C4.02,10.02 6.27,7.85 9.04,6.61 C9.48,6.41 10.27,6.13 11,5.91 L11,2 L18.89,9 L11,16 L11,12.13 C9.25,12.47 7.58,13.19 6.02,14.25 C3.03,16.28 1.63,18.54 1.63,18.54 C1.63,18.54 1.38,15.28 2.47,13.11 L2.47,13.11 Z M5.3,13.53 C6.92,12.4 9.04,11.4 12,10.92 L12,13.63 L17.36,9 L12,4.25 L12,6.8 C11.71,6.86 10.86,7.02 9.67,7.49 C6.79,8.65 4.58,10.96 3.49,13.08 C3.18,13.7 2.68,14.87 2.49,16 C3.28,15.05 4.4,14.15 5.3,13.53 L5.3,13.53 Z"/></svg>',
                foursquare:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15.23,2 C15.96,2 16.4,2.41 16.5,2.86 C16.57,3.15 16.56,3.44 16.51,3.73 C16.46,4.04 14.86,11.72 14.75,12.03 C14.56,12.56 14.16,12.82 13.61,12.83 C13.03,12.84 11.09,12.51 10.69,13 C10.38,13.38 7.79,16.39 6.81,17.53 C6.61,17.76 6.4,17.96 6.08,17.99 C5.68,18.04 5.29,17.87 5.17,17.45 C5.12,17.28 5.1,17.09 5.1,16.91 C5.1,12.4 4.86,7.81 5.11,3.31 C5.17,2.5 5.81,2.12 6.53,2 L15.23,2 L15.23,2 Z M9.76,11.42 C9.94,11.19 10.17,11.1 10.45,11.1 L12.86,11.1 C13.12,11.1 13.31,10.94 13.36,10.69 C13.37,10.64 13.62,9.41 13.74,8.83 C13.81,8.52 13.53,8.28 13.27,8.28 C12.35,8.29 11.42,8.28 10.5,8.28 C9.84,8.28 9.83,7.69 9.82,7.21 C9.8,6.85 10.13,6.55 10.5,6.55 C11.59,6.56 12.67,6.55 13.76,6.55 C14.03,6.55 14.23,6.4 14.28,6.14 C14.34,5.87 14.67,4.29 14.67,4.29 C14.67,4.29 14.82,3.74 14.19,3.74 L7.34,3.74 C7,3.75 6.84,4.02 6.84,4.33 C6.84,7.58 6.85,14.95 6.85,14.99 C6.87,15 8.89,12.51 9.76,11.42 L9.76,11.42 Z"/></svg>',
                future:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline points="19 2 18 2 18 6 14 6 14 7 19 7 19 2"/><path fill="none" stroke="#000" stroke-width="1.1" d="M18,6.548 C16.709,3.29 13.354,1 9.6,1 C4.6,1 0.6,5 0.6,10 C0.6,15 4.6,19 9.6,19 C14.6,19 18.6,15 18.6,10"/><rect x="9" y="4" width="1" height="7"/><path d="M13.018,14.197 L9.445,10.625" fill="none" stroke="#000" stroke-width="1.1"/></svg>',
                "git-branch":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.2" cx="7" cy="3" r="2"/><circle fill="none" stroke="#000" stroke-width="1.2" cx="14" cy="6" r="2"/><circle fill="none" stroke="#000" stroke-width="1.2" cx="7" cy="17" r="2"/><path fill="none" stroke="#000" stroke-width="2" d="M14,8 C14,10.41 12.43,10.87 10.56,11.25 C9.09,11.54 7,12.06 7,15 L7,5"/></svg>',
                "git-fork":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.2" cx="5.79" cy="2.79" r="1.79"/><circle fill="none" stroke="#000" stroke-width="1.2" cx="14.19" cy="2.79" r="1.79"/><circle fill="none" stroke="#000" stroke-width="1.2" cx="10.03" cy="16.79" r="1.79"/><path fill="none" stroke="#000" stroke-width="2" d="M5.79,4.57 L5.79,6.56 C5.79,9.19 10.03,10.22 10.03,13.31 C10.03,14.86 10.04,14.55 10.04,14.55 C10.04,14.37 10.04,14.86 10.04,13.31 C10.04,10.22 14.2,9.19 14.2,6.56 L14.2,4.57"/></svg>',
                "github-alt":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10,0.5 C4.75,0.5 0.5,4.76 0.5,10.01 C0.5,15.26 4.75,19.51 10,19.51 C15.24,19.51 19.5,15.26 19.5,10.01 C19.5,4.76 15.25,0.5 10,0.5 L10,0.5 Z M12.81,17.69 C12.81,17.69 12.81,17.7 12.79,17.69 C12.47,17.75 12.35,17.59 12.35,17.36 L12.35,16.17 C12.35,15.45 12.09,14.92 11.58,14.56 C12.2,14.51 12.77,14.39 13.26,14.21 C13.87,13.98 14.36,13.69 14.74,13.29 C15.42,12.59 15.76,11.55 15.76,10.17 C15.76,9.25 15.45,8.46 14.83,7.8 C15.1,7.08 15.07,6.29 14.75,5.44 L14.51,5.42 C14.34,5.4 14.06,5.46 13.67,5.61 C13.25,5.78 12.79,6.03 12.31,6.35 C11.55,6.16 10.81,6.05 10.09,6.05 C9.36,6.05 8.61,6.15 7.88,6.35 C7.28,5.96 6.75,5.68 6.26,5.54 C6.07,5.47 5.9,5.44 5.78,5.44 L5.42,5.44 C5.06,6.29 5.04,7.08 5.32,7.8 C4.7,8.46 4.4,9.25 4.4,10.17 C4.4,11.94 4.96,13.16 6.08,13.84 C6.53,14.13 7.05,14.32 7.69,14.43 C8.03,14.5 8.32,14.54 8.55,14.55 C8.07,14.89 7.82,15.42 7.82,16.16 L7.82,17.51 C7.8,17.69 7.7,17.8 7.51,17.8 C4.21,16.74 1.82,13.65 1.82,10.01 C1.82,5.5 5.49,1.83 10,1.83 C14.5,1.83 18.17,5.5 18.17,10.01 C18.18,13.53 15.94,16.54 12.81,17.69 L12.81,17.69 Z"/></svg>',
                github:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10,1 C5.03,1 1,5.03 1,10 C1,13.98 3.58,17.35 7.16,18.54 C7.61,18.62 7.77,18.34 7.77,18.11 C7.77,17.9 7.76,17.33 7.76,16.58 C5.26,17.12 4.73,15.37 4.73,15.37 C4.32,14.33 3.73,14.05 3.73,14.05 C2.91,13.5 3.79,13.5 3.79,13.5 C4.69,13.56 5.17,14.43 5.17,14.43 C5.97,15.8 7.28,15.41 7.79,15.18 C7.87,14.6 8.1,14.2 8.36,13.98 C6.36,13.75 4.26,12.98 4.26,9.53 C4.26,8.55 4.61,7.74 5.19,7.11 C5.1,6.88 4.79,5.97 5.28,4.73 C5.28,4.73 6.04,4.49 7.75,5.65 C8.47,5.45 9.24,5.35 10,5.35 C10.76,5.35 11.53,5.45 12.25,5.65 C13.97,4.48 14.72,4.73 14.72,4.73 C15.21,5.97 14.9,6.88 14.81,7.11 C15.39,7.74 15.73,8.54 15.73,9.53 C15.73,12.99 13.63,13.75 11.62,13.97 C11.94,14.25 12.23,14.8 12.23,15.64 C12.23,16.84 12.22,17.81 12.22,18.11 C12.22,18.35 12.38,18.63 12.84,18.54 C16.42,17.35 19,13.98 19,10 C19,5.03 14.97,1 10,1 L10,1 Z"/></svg>',
                gitter:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="3.5" y="1" width="1.531" height="11.471"/><rect x="7.324" y="4.059" width="1.529" height="15.294"/><rect x="11.148" y="4.059" width="1.527" height="15.294"/><rect x="14.971" y="4.059" width="1.529" height="8.412"/></svg>',
                "google-plus":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M12.9,9c0,2.7-0.6,5-3.2,6.3c-3.7,1.8-8.1,0.2-9.4-3.6C-1.1,7.6,1.9,3.3,6.1,3c1.7-0.1,3.2,0.3,4.6,1.3 c0.1,0.1,0.3,0.2,0.4,0.4c-0.5,0.5-1.2,1-1.7,1.6c-1-0.8-2.1-1.1-3.5-0.9C5,5.6,4.2,6,3.6,6.7c-1.3,1.3-1.5,3.4-0.5,5 c1,1.7,2.6,2.3,4.6,1.9c1.4-0.3,2.4-1.2,2.6-2.6H6.9V9H12.9z"/><polygon points="20,9 20,11 18,11 18,13 16,13 16,11 14,11 14,9 16,9 16,7 18,7 18,9"/></svg>',
                google:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.86,9.09 C18.46,12.12 17.14,16.05 13.81,17.56 C9.45,19.53 4.13,17.68 2.47,12.87 C0.68,7.68 4.22,2.42 9.5,2.03 C11.57,1.88 13.42,2.37 15.05,3.65 C15.22,3.78 15.37,3.93 15.61,4.14 C14.9,4.81 14.23,5.45 13.5,6.14 C12.27,5.08 10.84,4.72 9.28,4.98 C8.12,5.17 7.16,5.76 6.37,6.63 C4.88,8.27 4.62,10.86 5.76,12.82 C6.95,14.87 9.17,15.8 11.57,15.25 C13.27,14.87 14.76,13.33 14.89,11.75 L10.51,11.75 L10.51,9.09 L17.86,9.09 L17.86,9.09 Z"/></svg>',
                grid:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="2" y="2" width="3" height="3"/><rect x="8" y="2" width="3" height="3"/><rect x="14" y="2" width="3" height="3"/><rect x="2" y="8" width="3" height="3"/><rect x="8" y="8" width="3" height="3"/><rect x="14" y="8" width="3" height="3"/><rect x="2" y="14" width="3" height="3"/><rect x="8" y="14" width="3" height="3"/><rect x="14" y="14" width="3" height="3"/></svg>',
                happy:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle cx="13" cy="7" r="1"/><circle cx="7" cy="7" r="1"/><circle fill="none" stroke="#000" cx="10" cy="10" r="8.5"/><path fill="none" stroke="#000" d="M14.6,11.4 C13.9,13.3 12.1,14.5 10,14.5 C7.9,14.5 6.1,13.3 5.4,11.4"/></svg>',
                hashtag:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15.431,8 L15.661,7 L12.911,7 L13.831,3 L12.901,3 L11.98,7 L9.29,7 L10.21,3 L9.281,3 L8.361,7 L5.23,7 L5,8 L8.13,8 L7.21,12 L4.23,12 L4,13 L6.98,13 L6.061,17 L6.991,17 L7.911,13 L10.601,13 L9.681,17 L10.611,17 L11.531,13 L14.431,13 L14.661,12 L11.76,12 L12.681,8 L15.431,8 Z M10.831,12 L8.141,12 L9.061,8 L11.75,8 L10.831,12 Z"/></svg>',
                heart:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.03" d="M10,4 C10,4 8.1,2 5.74,2 C3.38,2 1,3.55 1,6.73 C1,8.84 2.67,10.44 2.67,10.44 L10,18 L17.33,10.44 C17.33,10.44 19,8.84 19,6.73 C19,3.55 16.62,2 14.26,2 C11.9,2 10,4 10,4 L10,4 Z"/></svg>',
                history:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="#000" points="1 2 2 2 2 6 6 6 6 7 1 7 1 2"/><path fill="none" stroke="#000" stroke-width="1.1" d="M2.1,6.548 C3.391,3.29 6.746,1 10.5,1 C15.5,1 19.5,5 19.5,10 C19.5,15 15.5,19 10.5,19 C5.5,19 1.5,15 1.5,10"/><rect x="9" y="4" width="1" height="7"/><path fill="none" stroke="#000" stroke-width="1.1" d="M13.018,14.197 L9.445,10.625"/></svg>',
                home:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="18.65 11.35 10 2.71 1.35 11.35 0.65 10.65 10 1.29 19.35 10.65"/><polygon points="15 4 18 4 18 7 17 7 17 5 15 5"/><polygon points="3 11 4 11 4 18 7 18 7 12 12 12 12 18 16 18 16 11 17 11 17 19 11 19 11 13 8 13 8 19 3 19"/></svg>',
                image:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle cx="16.1" cy="6.1" r="1.1"/><rect fill="none" stroke="#000" x=".5" y="2.5" width="19" height="15"/><polyline fill="none" stroke="#000" stroke-width="1.01" points="4,13 8,9 13,14"/><polyline fill="none" stroke="#000" stroke-width="1.01" points="11,12 12.5,10.5 16,14"/></svg>',
                info:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M12.13,11.59 C11.97,12.84 10.35,14.12 9.1,14.16 C6.17,14.2 9.89,9.46 8.74,8.37 C9.3,8.16 10.62,7.83 10.62,8.81 C10.62,9.63 10.12,10.55 9.88,11.32 C8.66,15.16 12.13,11.15 12.14,11.18 C12.16,11.21 12.16,11.35 12.13,11.59 C12.08,11.95 12.16,11.35 12.13,11.59 L12.13,11.59 Z M11.56,5.67 C11.56,6.67 9.36,7.15 9.36,6.03 C9.36,5 11.56,4.54 11.56,5.67 L11.56,5.67 Z"/><circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10" r="9"/></svg>',
                instagram:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.55,1H6.46C3.45,1,1,3.44,1,6.44v7.12c0,3,2.45,5.44,5.46,5.44h7.08c3.02,0,5.46-2.44,5.46-5.44V6.44 C19.01,3.44,16.56,1,13.55,1z M17.5,14c0,1.93-1.57,3.5-3.5,3.5H6c-1.93,0-3.5-1.57-3.5-3.5V6c0-1.93,1.57-3.5,3.5-3.5h8 c1.93,0,3.5,1.57,3.5,3.5V14z"/><circle cx="14.87" cy="5.26" r="1.09"/><path d="M10.03,5.45c-2.55,0-4.63,2.06-4.63,4.6c0,2.55,2.07,4.61,4.63,4.61c2.56,0,4.63-2.061,4.63-4.61 C14.65,7.51,12.58,5.45,10.03,5.45L10.03,5.45L10.03,5.45z M10.08,13c-1.66,0-3-1.34-3-2.99c0-1.65,1.34-2.99,3-2.99s3,1.34,3,2.99 C13.08,11.66,11.74,13,10.08,13L10.08,13L10.08,13z"/></svg>',
                italic:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M12.63,5.48 L10.15,14.52 C10,15.08 10.37,15.25 11.92,15.3 L11.72,16 L6,16 L6.2,15.31 C7.78,15.26 8.19,15.09 8.34,14.53 L10.82,5.49 C10.97,4.92 10.63,4.76 9.09,4.71 L9.28,4 L15,4 L14.81,4.69 C13.23,4.75 12.78,4.91 12.63,5.48 L12.63,5.48 Z"/></svg>',
                joomla:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7.8,13.4l1.7-1.7L5.9,8c-0.6-0.5-0.6-1.5,0-2c0.6-0.6,1.4-0.6,2,0l1.7-1.7c-1-1-2.3-1.3-3.6-1C5.8,2.2,4.8,1.4,3.7,1.4 c-1.3,0-2.3,1-2.3,2.3c0,1.1,0.8,2,1.8,2.3c-0.4,1.3-0.1,2.8,1,3.8L7.8,13.4L7.8,13.4z"/><path d="M10.2,4.3c1-1,2.5-1.4,3.8-1c0.2-1.1,1.1-2,2.3-2c1.3,0,2.3,1,2.3,2.3c0,1.2-0.9,2.2-2,2.3c0.4,1.3,0,2.8-1,3.8L13.9,8 c0.6-0.5,0.6-1.5,0-2c-0.5-0.6-1.5-0.6-2,0L8.2,9.7L6.5,8"/><path d="M14.1,16.8c-1.3,0.4-2.8,0.1-3.8-1l1.7-1.7c0.6,0.6,1.5,0.6,2,0c0.5-0.6,0.6-1.5,0-2l-3.7-3.7L12,6.7l3.7,3.7 c1,1,1.3,2.4,1,3.6c1.1,0.2,2,1.1,2,2.3c0,1.3-1,2.3-2.3,2.3C15.2,18.6,14.3,17.8,14.1,16.8"/><path d="M13.2,12.2l-3.7,3.7c-1,1-2.4,1.3-3.6,1c-0.2,1-1.2,1.8-2.2,1.8c-1.3,0-2.3-1-2.3-2.3c0-1.1,0.8-2,1.8-2.3 c-0.3-1.3,0-2.7,1-3.7l1.7,1.7c-0.6,0.6-0.6,1.5,0,2c0.6,0.6,1.4,0.6,2,0l3.7-3.7"/></svg>',
                laptop: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect y="16" width="20" height="1"/><rect fill="none" stroke="#000" x="2.5" y="4.5" width="15" height="10"/></svg>',
                lifesaver:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10,0.5 C4.76,0.5 0.5,4.76 0.5,10 C0.5,15.24 4.76,19.5 10,19.5 C15.24,19.5 19.5,15.24 19.5,10 C19.5,4.76 15.24,0.5 10,0.5 L10,0.5 Z M10,1.5 C11.49,1.5 12.89,1.88 14.11,2.56 L11.85,4.82 C11.27,4.61 10.65,4.5 10,4.5 C9.21,4.5 8.47,4.67 7.79,4.96 L5.58,2.75 C6.87,1.95 8.38,1.5 10,1.5 L10,1.5 Z M4.96,7.8 C4.67,8.48 4.5,9.21 4.5,10 C4.5,10.65 4.61,11.27 4.83,11.85 L2.56,14.11 C1.88,12.89 1.5,11.49 1.5,10 C1.5,8.38 1.95,6.87 2.75,5.58 L4.96,7.79 L4.96,7.8 L4.96,7.8 Z M10,18.5 C8.25,18.5 6.62,17.97 5.27,17.06 L7.46,14.87 C8.22,15.27 9.08,15.5 10,15.5 C10.79,15.5 11.53,15.33 12.21,15.04 L14.42,17.25 C13.13,18.05 11.62,18.5 10,18.5 L10,18.5 Z M10,14.5 C7.52,14.5 5.5,12.48 5.5,10 C5.5,7.52 7.52,5.5 10,5.5 C12.48,5.5 14.5,7.52 14.5,10 C14.5,12.48 12.48,14.5 10,14.5 L10,14.5 Z M15.04,12.21 C15.33,11.53 15.5,10.79 15.5,10 C15.5,9.08 15.27,8.22 14.87,7.46 L17.06,5.27 C17.97,6.62 18.5,8.25 18.5,10 C18.5,11.62 18.05,13.13 17.25,14.42 L15.04,12.21 L15.04,12.21 Z"/></svg>',
                link:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.1" d="M10.625,12.375 L7.525,15.475 C6.825,16.175 5.925,16.175 5.225,15.475 L4.525,14.775 C3.825,14.074 3.825,13.175 4.525,12.475 L7.625,9.375"/><path fill="none" stroke="#000" stroke-width="1.1" d="M9.325,7.375 L12.425,4.275 C13.125,3.575 14.025,3.575 14.724,4.275 L15.425,4.975 C16.125,5.675 16.125,6.575 15.425,7.275 L12.325,10.375"/><path fill="none" stroke="#000" stroke-width="1.1" d="M7.925,11.875 L11.925,7.975"/></svg>',
                linkedin:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5.77,17.89 L5.77,7.17 L2.21,7.17 L2.21,17.89 L5.77,17.89 L5.77,17.89 Z M3.99,5.71 C5.23,5.71 6.01,4.89 6.01,3.86 C5.99,2.8 5.24,2 4.02,2 C2.8,2 2,2.8 2,3.85 C2,4.88 2.77,5.7 3.97,5.7 L3.99,5.7 L3.99,5.71 L3.99,5.71 Z"/><path d="M7.75,17.89 L11.31,17.89 L11.31,11.9 C11.31,11.58 11.33,11.26 11.43,11.03 C11.69,10.39 12.27,9.73 13.26,9.73 C14.55,9.73 15.06,10.71 15.06,12.15 L15.06,17.89 L18.62,17.89 L18.62,11.74 C18.62,8.45 16.86,6.92 14.52,6.92 C12.6,6.92 11.75,7.99 11.28,8.73 L11.3,8.73 L11.3,7.17 L7.75,7.17 C7.79,8.17 7.75,17.89 7.75,17.89 L7.75,17.89 L7.75,17.89 Z"/></svg>',
                list:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="4" width="12" height="1"/><rect x="6" y="9" width="12" height="1"/><rect x="6" y="14" width="12" height="1"/><rect x="2" y="4" width="2" height="1"/><rect x="2" y="9" width="2" height="1"/><rect x="2" y="14" width="2" height="1"/></svg>',
                location:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.01" d="M10,0.5 C6.41,0.5 3.5,3.39 3.5,6.98 C3.5,11.83 10,19 10,19 C10,19 16.5,11.83 16.5,6.98 C16.5,3.39 13.59,0.5 10,0.5 L10,0.5 Z"/><circle fill="none" stroke="#000" cx="10" cy="6.8" r="2.3"/></svg>',
                lock:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect fill="none" stroke="#000" height="10" width="13" y="8.5" x="3.5"/><path fill="none" stroke="#000" d="M6.5,8 L6.5,4.88 C6.5,3.01 8.07,1.5 10,1.5 C11.93,1.5 13.5,3.01 13.5,4.88 L13.5,8"/></svg>',
                mail:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="1.4,6.5 10,11 18.6,6.5"/><path d="M 1,4 1,16 19,16 19,4 1,4 Z M 18,15 2,15 2,5 18,5 18,15 Z"/></svg>',
                menu: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="2" y="4" width="16" height="1"/><rect x="2" y="9" width="16" height="1"/><rect x="2" y="14" width="16" height="1"/></svg>',
                microphone:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" x1="10" x2="10" y1="16.44" y2="18.5"/><line fill="none" stroke="#000" x1="7" x2="13" y1="18.5" y2="18.5"/><path fill="none" stroke="#000" stroke-width="1.1" d="M13.5 4.89v5.87a3.5 3.5 0 0 1-7 0V4.89a3.5 3.5 0 0 1 7 0z"/><path fill="none" stroke="#000" stroke-width="1.1" d="M15.5 10.36V11a5.5 5.5 0 0 1-11 0v-.6"/></svg>',
                "minus-circle":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9.5" cy="9.5" r="9"/><line fill="none" stroke="#000" x1="5" y1="9.5" x2="14" y2="9.5"/></svg>',
                minus: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect height="1" width="18" y="9" x="1"/></svg>',
                "more-vertical": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle cx="10" cy="3" r="2"/><circle cx="10" cy="10" r="2"/><circle cx="10" cy="17" r="2"/></svg>',
                more: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle cx="3" cy="10" r="2"/><circle cx="10" cy="10" r="2"/><circle cx="17" cy="10" r="2"/></svg>',
                move:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="4,5 1,5 1,9 2,9 2,6 4,6"/><polygon points="1,16 2,16 2,18 4,18 4,19 1,19"/><polygon points="14,16 14,19 11,19 11,18 13,18 13,16"/><rect fill="none" stroke="#000" x="5.5" y="1.5" width="13" height="13"/><rect x="1" y="11" width="1" height="3"/><rect x="6" y="18" width="3" height="1"/></svg>',
                nut:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" stroke="#000" points="2.5,5.7 10,1.3 17.5,5.7 17.5,14.3 10,18.7 2.5,14.3"/><circle fill="none" stroke="#000" cx="10" cy="10" r="3.5"/></svg>',
                pagekit: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="3,1 17,1 17,16 10,16 10,13 14,13 14,4 6,4 6,16 10,16 10,19 3,19"/></svg>',
                "paint-bucket":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.21,1 L0,11.21 L8.1,19.31 L18.31,9.1 L10.21,1 L10.21,1 Z M16.89,9.1 L15,11 L1.7,11 L10.21,2.42 L16.89,9.1 Z"/><path fill="none" stroke="#000" stroke-width="1.1" d="M6.42,2.33 L11.7,7.61"/><path d="M18.49,12 C18.49,12 20,14.06 20,15.36 C20,16.28 19.24,17 18.49,17 L18.49,17 C17.74,17 17,16.28 17,15.36 C17,14.06 18.49,12 18.49,12 L18.49,12 Z"/></svg>',
                pencil:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" d="M17.25,6.01 L7.12,16.1 L3.82,17.2 L5.02,13.9 L15.12,3.88 C15.71,3.29 16.66,3.29 17.25,3.88 C17.83,4.47 17.83,5.42 17.25,6.01 L17.25,6.01 Z"/><path fill="none" stroke="#000" d="M15.98,7.268 L13.851,5.148"/></svg>',
                "phone-landscape":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" d="M17,5.5 C17.8,5.5 18.5,6.2 18.5,7 L18.5,14 C18.5,14.8 17.8,15.5 17,15.5 L3,15.5 C2.2,15.5 1.5,14.8 1.5,14 L1.5,7 C1.5,6.2 2.2,5.5 3,5.5 L17,5.5 L17,5.5 L17,5.5 Z"/><circle cx="3.8" cy="10.5" r=".8"/></svg>',
                phone:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" d="M15.5,17 C15.5,17.8 14.8,18.5 14,18.5 L7,18.5 C6.2,18.5 5.5,17.8 5.5,17 L5.5,3 C5.5,2.2 6.2,1.5 7,1.5 L14,1.5 C14.8,1.5 15.5,2.2 15.5,3 L15.5,17 L15.5,17 L15.5,17 Z"/><circle cx="10.5" cy="16.5" r=".8"/></svg>',
                pinterest:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.21,1 C5.5,1 3,4.16 3,7.61 C3,9.21 3.85,11.2 5.22,11.84 C5.43,11.94 5.54,11.89 5.58,11.69 C5.62,11.54 5.8,10.8 5.88,10.45 C5.91,10.34 5.89,10.24 5.8,10.14 C5.36,9.59 5,8.58 5,7.65 C5,5.24 6.82,2.91 9.93,2.91 C12.61,2.91 14.49,4.74 14.49,7.35 C14.49,10.3 13,12.35 11.06,12.35 C9.99,12.35 9.19,11.47 9.44,10.38 C9.75,9.08 10.35,7.68 10.35,6.75 C10.35,5.91 9.9,5.21 8.97,5.21 C7.87,5.21 6.99,6.34 6.99,7.86 C6.99,8.83 7.32,9.48 7.32,9.48 C7.32,9.48 6.24,14.06 6.04,14.91 C5.7,16.35 6.08,18.7 6.12,18.9 C6.14,19.01 6.26,19.05 6.33,18.95 C6.44,18.81 7.74,16.85 8.11,15.44 C8.24,14.93 8.79,12.84 8.79,12.84 C9.15,13.52 10.19,14.09 11.29,14.09 C14.58,14.09 16.96,11.06 16.96,7.3 C16.94,3.7 14,1 10.21,1"/></svg>',
                "play-circle":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" stroke="#000" stroke-width="1.1" points="8.5 7 13.5 10 8.5 13"/><circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10" r="9"/></svg>',
                play: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" stroke="#000" points="6.5,5 14.5,10 6.5,15"/></svg>',
                "plus-circle":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9.5" cy="9.5" r="9"/><line fill="none" stroke="#000" x1="9.5" y1="5" x2="9.5" y2="14"/><line fill="none" stroke="#000" x1="5" y1="9.5" x2="14" y2="9.5"/></svg>',
                plus: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="9" y="1" width="1" height="17"/><rect x="1" y="9" width="17" height="1"/></svg>',
                print:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="4.5 13.5 1.5 13.5 1.5 6.5 18.5 6.5 18.5 13.5 15.5 13.5"/><polyline fill="none" stroke="#000" points="15.5 6.5 15.5 2.5 4.5 2.5 4.5 6.5"/><rect fill="none" stroke="#000" width="11" height="6" x="4.5" y="11.5"/><rect width="8" height="1" x="6" y="13"/><rect width="8" height="1" x="6" y="15"/></svg>',
                pull:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="6.85,8 9.5,10.6 12.15,8 12.85,8.7 9.5,12 6.15,8.7"/><line fill="none" stroke="#000" x1="9.5" y1="11" x2="9.5" y2="2"/><polyline fill="none" stroke="#000" points="6,5.5 3.5,5.5 3.5,18.5 15.5,18.5 15.5,5.5 13,5.5"/></svg>',
                push:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="12.15,4 9.5,1.4 6.85,4 6.15,3.3 9.5,0 12.85,3.3"/><line fill="none" stroke="#000" x1="9.5" y1="10" x2="9.5" y2="1"/><polyline fill="none" stroke="#000" points="6 5.5 3.5 5.5 3.5 18.5 15.5 18.5 15.5 5.5 13 5.5"/></svg>',
                question:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10" r="9"/><circle cx="10.44" cy="14.42" r="1.05"/><path fill="none" stroke="#000" stroke-width="1.2" d="M8.17,7.79 C8.17,4.75 12.72,4.73 12.72,7.72 C12.72,8.67 11.81,9.15 11.23,9.75 C10.75,10.24 10.51,10.73 10.45,11.4 C10.44,11.53 10.43,11.64 10.43,11.75"/></svg>',
                "quote-right":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.27,7.79 C17.27,9.45 16.97,10.43 15.99,12.02 C14.98,13.64 13,15.23 11.56,15.97 L11.1,15.08 C12.34,14.2 13.14,13.51 14.02,11.82 C14.27,11.34 14.41,10.92 14.49,10.54 C14.3,10.58 14.09,10.6 13.88,10.6 C12.06,10.6 10.59,9.12 10.59,7.3 C10.59,5.48 12.06,4 13.88,4 C15.39,4 16.67,5.02 17.05,6.42 C17.19,6.82 17.27,7.27 17.27,7.79 L17.27,7.79 Z"/><path d="M8.68,7.79 C8.68,9.45 8.38,10.43 7.4,12.02 C6.39,13.64 4.41,15.23 2.97,15.97 L2.51,15.08 C3.75,14.2 4.55,13.51 5.43,11.82 C5.68,11.34 5.82,10.92 5.9,10.54 C5.71,10.58 5.5,10.6 5.29,10.6 C3.47,10.6 2,9.12 2,7.3 C2,5.48 3.47,4 5.29,4 C6.8,4 8.08,5.02 8.46,6.42 C8.6,6.82 8.68,7.27 8.68,7.79 L8.68,7.79 Z"/></svg>',
                receiver:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.01" d="M6.189,13.611C8.134,15.525 11.097,18.239 13.867,18.257C16.47,18.275 18.2,16.241 18.2,16.241L14.509,12.551L11.539,13.639L6.189,8.29L7.313,5.355L3.76,1.8C3.76,1.8 1.732,3.537 1.7,6.092C1.667,8.809 4.347,11.738 6.189,13.611"/></svg>',
                reddit:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M19 9.05a2.56 2.56 0 0 0-2.56-2.56 2.59 2.59 0 0 0-1.88.82 10.63 10.63 0 0 0-4.14-1v-.08c.58-1.62 1.58-3.89 2.7-4.1.38-.08.77.12 1.19.57a1.15 1.15 0 0 0-.06.37 1.48 1.48 0 1 0 1.51-1.45 1.43 1.43 0 0 0-.76.19A2.29 2.29 0 0 0 12.91 1c-2.11.43-3.39 4.38-3.63 5.19 0 0 0 .11-.06.11a10.65 10.65 0 0 0-3.75 1A2.56 2.56 0 0 0 1 9.05a2.42 2.42 0 0 0 .72 1.76A5.18 5.18 0 0 0 1.24 13c0 3.66 3.92 6.64 8.73 6.64s8.74-3 8.74-6.64a5.23 5.23 0 0 0-.46-2.13A2.58 2.58 0 0 0 19 9.05zm-16.88 0a1.44 1.44 0 0 1 2.27-1.19 7.68 7.68 0 0 0-2.07 1.91 1.33 1.33 0 0 1-.2-.72zM10 18.4c-4.17 0-7.55-2.4-7.55-5.4S5.83 7.53 10 7.53 17.5 10 17.5 13s-3.38 5.4-7.5 5.4zm7.69-8.61a7.62 7.62 0 0 0-2.09-1.91 1.41 1.41 0 0 1 .84-.28 1.47 1.47 0 0 1 1.44 1.45 1.34 1.34 0 0 1-.21.72z"/><path d="M6.69 12.58a1.39 1.39 0 1 1 1.39-1.39 1.38 1.38 0 0 1-1.38 1.39z"/><path d="M14.26 11.2a1.39 1.39 0 1 1-1.39-1.39 1.39 1.39 0 0 1 1.39 1.39z"/><path d="M13.09 14.88a.54.54 0 0 1-.09.77 5.3 5.3 0 0 1-3.26 1.19 5.61 5.61 0 0 1-3.4-1.22.55.55 0 1 1 .73-.83 4.09 4.09 0 0 0 5.25 0 .56.56 0 0 1 .77.09z"/></svg>',
                refresh:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.1" d="M17.08,11.15 C17.09,11.31 17.1,11.47 17.1,11.64 C17.1,15.53 13.94,18.69 10.05,18.69 C6.16,18.68 3,15.53 3,11.63 C3,7.74 6.16,4.58 10.05,4.58 C10.9,4.58 11.71,4.73 12.46,5"/><polyline fill="none" stroke="#000" points="9.9 2 12.79 4.89 9.79 7.9"/></svg>',
                reply:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.7,13.11 C16.12,10.02 13.84,7.85 11.02,6.61 C10.57,6.41 9.75,6.13 9,5.91 L9,2 L1,9 L9,16 L9,12.13 C10.78,12.47 12.5,13.19 14.09,14.25 C17.13,16.28 18.56,18.54 18.56,18.54 C18.56,18.54 18.81,15.28 17.7,13.11 L17.7,13.11 Z M14.82,13.53 C13.17,12.4 11.01,11.4 8,10.92 L8,13.63 L2.55,9 L8,4.25 L8,6.8 C8.3,6.86 9.16,7.02 10.37,7.49 C13.3,8.65 15.54,10.96 16.65,13.08 C16.97,13.7 17.48,14.86 17.68,16 C16.87,15.05 15.73,14.15 14.82,13.53 L14.82,13.53 Z"/></svg>',
                rss:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle cx="3.12" cy="16.8" r="1.85"/><path fill="none" stroke="#000" stroke-width="1.1" d="M1.5,8.2 C1.78,8.18 2.06,8.16 2.35,8.16 C7.57,8.16 11.81,12.37 11.81,17.57 C11.81,17.89 11.79,18.19 11.76,18.5"/><path fill="none" stroke="#000" stroke-width="1.1" d="M1.5,2.52 C1.78,2.51 2.06,2.5 2.35,2.5 C10.72,2.5 17.5,9.24 17.5,17.57 C17.5,17.89 17.49,18.19 17.47,18.5"/></svg>',
                search:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9" cy="9" r="7"/><path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z"/></svg>',
                server:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="3" width="1" height="2"/><rect x="5" y="3" width="1" height="2"/><rect x="7" y="3" width="1" height="2"/><rect x="16" y="3" width="1" height="1"/><rect x="16" y="10" width="1" height="1"/><circle fill="none" stroke="#000" cx="9.9" cy="17.4" r="1.4"/><rect x="3" y="10" width="1" height="2"/><rect x="5" y="10" width="1" height="2"/><rect x="9.5" y="14" width="1" height="2"/><rect x="3" y="17" width="6" height="1"/><rect x="11" y="17" width="6" height="1"/><rect fill="none" stroke="#000" x="1.5" y="1.5" width="17" height="5"/><rect fill="none" stroke="#000" x="1.5" y="8.5" width="17" height="5"/></svg>',
                settings:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><ellipse fill="none" stroke="#000" cx="6.11" cy="3.55" rx="2.11" ry="2.15"/><ellipse fill="none" stroke="#000" cx="6.11" cy="15.55" rx="2.11" ry="2.15"/><circle fill="none" stroke="#000" cx="13.15" cy="9.55" r="2.15"/><rect x="1" y="3" width="3" height="1"/><rect x="10" y="3" width="8" height="1"/><rect x="1" y="9" width="8" height="1"/><rect x="15" y="9" width="3" height="1"/><rect x="1" y="15" width="3" height="1"/><rect x="10" y="15" width="8" height="1"/></svg>',
                shrink:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="11 4 12 4 12 8 16 8 16 9 11 9"/><polygon points="4 11 9 11 9 16 8 16 8 12 4 12"/><path fill="none" stroke="#000" stroke-width="1.1" d="M12,8 L18,2"/><path fill="none" stroke="#000" stroke-width="1.1" d="M2,18 L8,12"/></svg>',
                "sign-in":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="7 2 17 2 17 17 7 17 7 16 16 16 16 3 7 3"/><polygon points="9.1 13.4 8.5 12.8 11.28 10 4 10 4 9 11.28 9 8.5 6.2 9.1 5.62 13 9.5"/></svg>',
                "sign-out":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="13.1 13.4 12.5 12.8 15.28 10 8 10 8 9 15.28 9 12.5 6.2 13.1 5.62 17 9.5"/><polygon points="13 2 3 2 3 17 13 17 13 16 4 16 4 3 13 3"/></svg>',
                social:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.1" x1="13.4" y1="14" x2="6.3" y2="10.7"/><line fill="none" stroke="#000" stroke-width="1.1" x1="13.5" y1="5.5" x2="6.5" y2="8.8"/><circle fill="none" stroke="#000" stroke-width="1.1" cx="15.5" cy="4.6" r="2.3"/><circle fill="none" stroke="#000" stroke-width="1.1" cx="15.5" cy="14.8" r="2.3"/><circle fill="none" stroke="#000" stroke-width="1.1" cx="4.5" cy="9.8" r="2.3"/></svg>',
                soundcloud:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.2,9.4c-0.4,0-0.8,0.1-1.101,0.2c-0.199-2.5-2.399-4.5-5-4.5c-0.6,0-1.2,0.1-1.7,0.3C9.2,5.5,9.1,5.6,9.1,5.6V15h8 c1.601,0,2.801-1.2,2.801-2.8C20,10.7,18.7,9.4,17.2,9.4L17.2,9.4z"/><rect x="6" y="6.5" width="1.5" height="8.5"/><rect x="3" y="8" width="1.5" height="7"/><rect y="10" width="1.5" height="5"/></svg>',
                star:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" stroke="#000" stroke-width="1.01" points="10 2 12.63 7.27 18.5 8.12 14.25 12.22 15.25 18 10 15.27 4.75 18 5.75 12.22 1.5 8.12 7.37 7.27"/></svg>',
                strikethrough:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6,13.02 L6.65,13.02 C7.64,15.16 8.86,16.12 10.41,16.12 C12.22,16.12 12.92,14.93 12.92,13.89 C12.92,12.55 11.99,12.03 9.74,11.23 C8.05,10.64 6.23,10.11 6.23,7.83 C6.23,5.5 8.09,4.09 10.4,4.09 C11.44,4.09 12.13,4.31 12.72,4.54 L13.33,4 L13.81,4 L13.81,7.59 L13.16,7.59 C12.55,5.88 11.52,4.89 10.07,4.89 C8.84,4.89 7.89,5.69 7.89,7.03 C7.89,8.29 8.89,8.78 10.88,9.45 C12.57,10.03 14.38,10.6 14.38,12.91 C14.38,14.75 13.27,16.93 10.18,16.93 C9.18,16.93 8.17,16.69 7.46,16.39 L6.52,17 L6,17 L6,13.02 L6,13.02 Z"/><rect x="3" y="10" width="15" height="1"/></svg>',
                table:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="3" width="18" height="1"/><rect x="1" y="7" width="18" height="1"/><rect x="1" y="11" width="18" height="1"/><rect x="1" y="15" width="18" height="1"/></svg>',
                "tablet-landscape":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" d="M1.5,5 C1.5,4.2 2.2,3.5 3,3.5 L17,3.5 C17.8,3.5 18.5,4.2 18.5,5 L18.5,16 C18.5,16.8 17.8,17.5 17,17.5 L3,17.5 C2.2,17.5 1.5,16.8 1.5,16 L1.5,5 L1.5,5 L1.5,5 Z"/><circle cx="3.7" cy="10.5" r=".8"/></svg>',
                tablet:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" d="M5,18.5 C4.2,18.5 3.5,17.8 3.5,17 L3.5,3 C3.5,2.2 4.2,1.5 5,1.5 L16,1.5 C16.8,1.5 17.5,2.2 17.5,3 L17.5,17 C17.5,17.8 16.8,18.5 16,18.5 L5,18.5 L5,18.5 L5,18.5 Z"/><circle cx="10.5" cy="16.3" r=".8"/></svg>',
                tag:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" stroke-width="1.1" d="M17.5,3.71 L17.5,7.72 C17.5,7.96 17.4,8.2 17.21,8.39 L8.39,17.2 C7.99,17.6 7.33,17.6 6.93,17.2 L2.8,13.07 C2.4,12.67 2.4,12.01 2.8,11.61 L11.61,2.8 C11.81,2.6 12.08,2.5 12.34,2.5 L16.19,2.5 C16.52,2.5 16.86,2.63 17.11,2.88 C17.35,3.11 17.48,3.4 17.5,3.71 L17.5,3.71 Z"/><circle cx="14" cy="6" r="1"/></svg>',
                thumbnails:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect fill="none" stroke="#000" x="3.5" y="3.5" width="5" height="5"/><rect fill="none" stroke="#000" x="11.5" y="3.5" width="5" height="5"/><rect fill="none" stroke="#000" x="11.5" y="11.5" width="5" height="5"/><rect fill="none" stroke="#000" x="3.5" y="11.5" width="5" height="5"/></svg>',
                trash:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="6.5 3 6.5 1.5 13.5 1.5 13.5 3"/><polyline fill="none" stroke="#000" points="4.5 4 4.5 18.5 15.5 18.5 15.5 4"/><rect x="8" y="7" width="1" height="9"/><rect x="11" y="7" width="1" height="9"/><rect x="2" y="3" width="16" height="1"/></svg>',
                "triangle-down": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="5 7 15 7 10 12"/></svg>',
                "triangle-left": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="12 5 7 10 12 15"/></svg>',
                "triangle-right": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="8 5 13 10 8 15"/></svg>',
                "triangle-up": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="5 13 10 8 15 13"/></svg>',
                tripadvisor:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M19.021,7.866C19.256,6.862,20,5.854,20,5.854h-3.346C14.781,4.641,12.504,4,9.98,4C7.363,4,4.999,4.651,3.135,5.876H0\tc0,0,0.738,0.987,0.976,1.988c-0.611,0.837-0.973,1.852-0.973,2.964c0,2.763,2.249,5.009,5.011,5.009\tc1.576,0,2.976-0.737,3.901-1.879l1.063,1.599l1.075-1.615c0.475,0.611,1.1,1.111,1.838,1.451c1.213,0.547,2.574,0.612,3.825,0.15\tc2.589-0.963,3.913-3.852,2.964-6.439c-0.175-0.463-0.4-0.876-0.675-1.238H19.021z M16.38,14.594\tc-1.002,0.371-2.088,0.328-3.06-0.119c-0.688-0.317-1.252-0.817-1.657-1.438c-0.164-0.25-0.313-0.52-0.417-0.811\tc-0.124-0.328-0.186-0.668-0.217-1.014c-0.063-0.689,0.037-1.396,0.339-2.043c0.448-0.971,1.251-1.71,2.25-2.079\tc2.075-0.765,4.375,0.3,5.14,2.366c0.762,2.066-0.301,4.37-2.363,5.134L16.38,14.594L16.38,14.594z M8.322,13.066\tc-0.72,1.059-1.935,1.76-3.309,1.76c-2.207,0-4.001-1.797-4.001-3.996c0-2.203,1.795-4.002,4.001-4.002\tc2.204,0,3.999,1.8,3.999,4.002c0,0.137-0.024,0.261-0.04,0.396c-0.067,0.678-0.284,1.313-0.648,1.853v-0.013H8.322z M2.472,10.775\tc0,1.367,1.112,2.479,2.476,2.479c1.363,0,2.472-1.11,2.472-2.479c0-1.359-1.11-2.468-2.472-2.468\tC3.584,8.306,2.473,9.416,2.472,10.775L2.472,10.775z M12.514,10.775c0,1.367,1.104,2.479,2.471,2.479\tc1.363,0,2.474-1.108,2.474-2.479c0-1.359-1.11-2.468-2.474-2.468c-1.364,0-2.477,1.109-2.477,2.468H12.514z M3.324,10.775\tc0-0.893,0.726-1.618,1.614-1.618c0.889,0,1.625,0.727,1.625,1.618c0,0.898-0.725,1.627-1.625,1.627\tc-0.901,0-1.625-0.729-1.625-1.627H3.324z M13.354,10.775c0-0.893,0.726-1.618,1.627-1.618c0.886,0,1.61,0.727,1.61,1.618\tc0,0.898-0.726,1.627-1.626,1.627s-1.625-0.729-1.625-1.627H13.354z M9.977,4.875c1.798,0,3.425,0.324,4.849,0.968\tc-0.535,0.015-1.061,0.108-1.586,0.3c-1.264,0.463-2.264,1.388-2.815,2.604c-0.262,0.551-0.398,1.133-0.448,1.72\tC9.79,7.905,7.677,5.873,5.076,5.82C6.501,5.208,8.153,4.875,9.94,4.875H9.977z"/></svg>',
                tumblr:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6.885,8.598c0,0,0,3.393,0,4.996c0,0.282,0,0.66,0.094,0.942c0.377,1.509,1.131,2.545,2.545,3.11 c1.319,0.472,2.356,0.472,3.676,0c0.565-0.188,1.132-0.659,1.132-0.659l-0.849-2.263c0,0-1.036,0.378-1.603,0.283 c-0.565-0.094-1.226-0.66-1.226-1.508c0-1.603,0-4.902,0-4.902h2.828V5.771h-2.828V2H8.205c0,0-0.094,0.66-0.188,0.942 C7.828,3.791,7.262,4.733,6.603,5.394C5.848,6.147,5,6.43,5,6.43v2.168H6.885z"/></svg>',
                tv: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="7" y="16" width="6" height="1"/><rect fill="none" stroke="#000" x=".5" y="3.5" width="19" height="11"/></svg>',
                twitter:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M19,4.74 C18.339,5.029 17.626,5.229 16.881,5.32 C17.644,4.86 18.227,4.139 18.503,3.28 C17.79,3.7 17.001,4.009 16.159,4.17 C15.485,3.45 14.526,3 13.464,3 C11.423,3 9.771,4.66 9.771,6.7 C9.771,6.99 9.804,7.269 9.868,7.539 C6.795,7.38 4.076,5.919 2.254,3.679 C1.936,4.219 1.754,4.86 1.754,5.539 C1.754,6.82 2.405,7.95 3.397,8.61 C2.79,8.589 2.22,8.429 1.723,8.149 L1.723,8.189 C1.723,9.978 2.997,11.478 4.686,11.82 C4.376,11.899 4.049,11.939 3.713,11.939 C3.475,11.939 3.245,11.919 3.018,11.88 C3.49,13.349 4.852,14.419 6.469,14.449 C5.205,15.429 3.612,16.019 1.882,16.019 C1.583,16.019 1.29,16.009 1,15.969 C2.635,17.019 4.576,17.629 6.662,17.629 C13.454,17.629 17.17,12 17.17,7.129 C17.17,6.969 17.166,6.809 17.157,6.649 C17.879,6.129 18.504,5.478 19,4.74"/></svg>',
                uikit:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="14.4,3.1 11.3,5.1 15,7.3 15,12.9 10,15.7 5,12.9 5,8.5 2,6.8 2,14.8 9.9,19.5 18,14.8 18,5.3"/><polygon points="9.8,4.2 6.7,2.4 9.8,0.4 12.9,2.3"/></svg>',
                unlock:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect fill="none" stroke="#000" x="3.5" y="8.5" width="13" height="10"/><path fill="none" stroke="#000" d="M6.5,8.5 L6.5,4.9 C6.5,3 8.1,1.5 10,1.5 C11.9,1.5 13.5,3 13.5,4.9"/></svg>',
                upload:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="5 8 9.5 3.5 14 8"/><rect x="3" y="17" width="13" height="1"/><line fill="none" stroke="#000" x1="9.5" y1="15" x2="9.5" y2="4"/></svg>',
                user:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9.9" cy="6.4" r="4.4"/><path fill="none" stroke="#000" stroke-width="1.1" d="M1.5,19 C2.3,14.5 5.8,11.2 10,11.2 C14.2,11.2 17.7,14.6 18.5,19.2"/></svg>',
                users:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="7.7" cy="8.6" r="3.5"/><path fill="none" stroke="#000" stroke-width="1.1" d="M1,18.1 C1.7,14.6 4.4,12.1 7.6,12.1 C10.9,12.1 13.7,14.8 14.3,18.3"/><path fill="none" stroke="#000" stroke-width="1.1" d="M11.4,4 C12.8,2.4 15.4,2.8 16.3,4.7 C17.2,6.6 15.7,8.9 13.6,8.9 C16.5,8.9 18.8,11.3 19.2,14.1"/></svg>',
                "video-camera":
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" stroke="#000" points="17.5 6.9 17.5 13.1 13.5 10.4 13.5 14.5 2.5 14.5 2.5 5.5 13.5 5.5 13.5 9.6 17.5 6.9"/></svg>',
                vimeo:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.065,7.59C1.84,7.367,1.654,7.082,1.468,6.838c-0.332-0.42-0.137-0.411,0.274-0.772c1.026-0.91,2.004-1.896,3.127-2.688 c1.017-0.713,2.365-1.173,3.286-0.039c0.849,1.045,0.869,2.629,1.084,3.891c0.215,1.309,0.421,2.648,0.88,3.901 c0.127,0.352,0.37,1.018,0.81,1.074c0.567,0.078,1.145-0.917,1.408-1.289c0.684-0.987,1.611-2.317,1.494-3.587 c-0.115-1.349-1.572-1.095-2.482-0.773c0.146-1.514,1.555-3.216,2.912-3.792c1.439-0.597,3.579-0.587,4.302,1.036 c0.772,1.759,0.078,3.802-0.763,5.396c-0.918,1.731-2.1,3.333-3.363,4.829c-1.114,1.329-2.432,2.787-4.093,3.422 c-1.897,0.723-3.021-0.686-3.667-2.318c-0.705-1.777-1.056-3.771-1.565-5.621C4.898,8.726,4.644,7.836,4.136,7.191 C3.473,6.358,2.72,7.141,2.065,7.59C1.977,7.502,2.115,7.551,2.065,7.59L2.065,7.59z"/></svg>',
                warning:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle cx="10" cy="14" r="1"/><circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10" r="9"/><path d="M10.97,7.72 C10.85,9.54 10.56,11.29 10.56,11.29 C10.51,11.87 10.27,12 9.99,12 C9.69,12 9.49,11.87 9.43,11.29 C9.43,11.29 9.16,9.54 9.03,7.72 C8.96,6.54 9.03,6 9.03,6 C9.03,5.45 9.46,5.02 9.99,5 C10.53,5.01 10.97,5.44 10.97,6 C10.97,6 11.04,6.54 10.97,7.72 L10.97,7.72 Z"/></svg>',
                whatsapp:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M16.7,3.3c-1.8-1.8-4.1-2.8-6.7-2.8c-5.2,0-9.4,4.2-9.4,9.4c0,1.7,0.4,3.3,1.3,4.7l-1.3,4.9l5-1.3c1.4,0.8,2.9,1.2,4.5,1.2 l0,0l0,0c5.2,0,9.4-4.2,9.4-9.4C19.5,7.4,18.5,5,16.7,3.3 M10.1,17.7L10.1,17.7c-1.4,0-2.8-0.4-4-1.1l-0.3-0.2l-3,0.8l0.8-2.9 l-0.2-0.3c-0.8-1.2-1.2-2.7-1.2-4.2c0-4.3,3.5-7.8,7.8-7.8c2.1,0,4.1,0.8,5.5,2.3c1.5,1.5,2.3,3.4,2.3,5.5 C17.9,14.2,14.4,17.7,10.1,17.7 M14.4,11.9c-0.2-0.1-1.4-0.7-1.6-0.8c-0.2-0.1-0.4-0.1-0.5,0.1c-0.2,0.2-0.6,0.8-0.8,0.9 c-0.1,0.2-0.3,0.2-0.5,0.1c-0.2-0.1-1-0.4-1.9-1.2c-0.7-0.6-1.2-1.4-1.3-1.6c-0.1-0.2,0-0.4,0.1-0.5C8,8.8,8.1,8.7,8.2,8.5 c0.1-0.1,0.2-0.2,0.2-0.4c0.1-0.2,0-0.3,0-0.4C8.4,7.6,7.9,6.5,7.7,6C7.5,5.5,7.3,5.6,7.2,5.6c-0.1,0-0.3,0-0.4,0 c-0.2,0-0.4,0.1-0.6,0.3c-0.2,0.2-0.8,0.8-0.8,2c0,1.2,0.8,2.3,1,2.4c0.1,0.2,1.7,2.5,4,3.5c0.6,0.2,1,0.4,1.3,0.5 c0.6,0.2,1.1,0.2,1.5,0.1c0.5-0.1,1.4-0.6,1.6-1.1c0.2-0.5,0.2-1,0.1-1.1C14.8,12.1,14.6,12,14.4,11.9"/></svg>',
                wordpress:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10,0.5c-5.2,0-9.5,4.3-9.5,9.5s4.3,9.5,9.5,9.5c5.2,0,9.5-4.3,9.5-9.5S15.2,0.5,10,0.5L10,0.5L10,0.5z M15.6,3.9h-0.1 c-0.8,0-1.4,0.7-1.4,1.5c0,0.7,0.4,1.3,0.8,1.9c0.3,0.6,0.7,1.3,0.7,2.3c0,0.7-0.3,1.5-0.6,2.7L14.1,15l-3-8.9 c0.5,0,0.9-0.1,0.9-0.1C12.5,6,12.5,5.3,12,5.4c0,0-1.3,0.1-2.2,0.1C9,5.5,7.7,5.4,7.7,5.4C7.2,5.3,7.2,6,7.6,6c0,0,0.4,0.1,0.9,0.1 l1.3,3.5L8,15L5,6.1C5.5,6.1,5.9,6,5.9,6C6.4,6,6.3,5.3,5.9,5.4c0,0-1.3,0.1-2.2,0.1c-0.2,0-0.3,0-0.5,0c1.5-2.2,4-3.7,6.9-3.7 C12.2,1.7,14.1,2.6,15.6,3.9L15.6,3.9L15.6,3.9z M2.5,6.6l3.9,10.8c-2.7-1.3-4.6-4.2-4.6-7.4C1.8,8.8,2,7.6,2.5,6.6L2.5,6.6L2.5,6.6 z M10.2,10.7l2.5,6.9c0,0,0,0.1,0.1,0.1C11.9,18,11,18.2,10,18.2c-0.8,0-1.6-0.1-2.3-0.3L10.2,10.7L10.2,10.7L10.2,10.7z M14.2,17.1 l2.5-7.3c0.5-1.2,0.6-2.1,0.6-2.9c0-0.3,0-0.6-0.1-0.8c0.6,1.2,1,2.5,1,4C18.3,13,16.6,15.7,14.2,17.1L14.2,17.1L14.2,17.1z"/></svg>',
                world:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" d="M1,10.5 L19,10.5"/><path fill="none" stroke="#000" d="M2.35,15.5 L17.65,15.5"/><path fill="none" stroke="#000" d="M2.35,5.5 L17.523,5.5"/><path fill="none" stroke="#000" d="M10,19.46 L9.98,19.46 C7.31,17.33 5.61,14.141 5.61,10.58 C5.61,7.02 7.33,3.83 10,1.7 C10.01,1.7 9.99,1.7 10,1.7 L10,1.7 C12.67,3.83 14.4,7.02 14.4,10.58 C14.4,14.141 12.67,17.33 10,19.46 L10,19.46 L10,19.46 L10,19.46 Z"/><circle fill="none" stroke="#000" cx="10" cy="10.5" r="9"/></svg>',
                xing:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4.4,4.56 C4.24,4.56 4.11,4.61 4.05,4.72 C3.98,4.83 3.99,4.97 4.07,5.12 L5.82,8.16 L5.82,8.17 L3.06,13.04 C2.99,13.18 2.99,13.33 3.06,13.44 C3.12,13.55 3.24,13.62 3.4,13.62 L6,13.62 C6.39,13.62 6.57,13.36 6.71,13.12 C6.71,13.12 9.41,8.35 9.51,8.16 C9.49,8.14 7.72,5.04 7.72,5.04 C7.58,4.81 7.39,4.56 6.99,4.56 L4.4,4.56 L4.4,4.56 Z"/><path d="M15.3,1 C14.91,1 14.74,1.25 14.6,1.5 C14.6,1.5 9.01,11.42 8.82,11.74 C8.83,11.76 12.51,18.51 12.51,18.51 C12.64,18.74 12.84,19 13.23,19 L15.82,19 C15.98,19 16.1,18.94 16.16,18.83 C16.23,18.72 16.23,18.57 16.16,18.43 L12.5,11.74 L12.5,11.72 L18.25,1.56 C18.32,1.42 18.32,1.27 18.25,1.16 C18.21,1.06 18.08,1 17.93,1 L15.3,1 L15.3,1 Z"/></svg>',
                yelp:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.175,14.971c-0.112,0.77-1.686,2.767-2.406,3.054c-0.246,0.1-0.487,0.076-0.675-0.069\tc-0.122-0.096-2.446-3.859-2.446-3.859c-0.194-0.293-0.157-0.682,0.083-0.978c0.234-0.284,0.581-0.393,0.881-0.276\tc0.016,0.01,4.21,1.394,4.332,1.482c0.178,0.148,0.263,0.379,0.225,0.646L17.175,14.971L17.175,14.971z M11.464,10.789\tc-0.203-0.307-0.199-0.666,0.009-0.916c0,0,2.625-3.574,2.745-3.657c0.203-0.135,0.452-0.141,0.69-0.025\tc0.691,0.335,2.085,2.405,2.167,3.199v0.027c0.024,0.271-0.082,0.491-0.273,0.623c-0.132,0.083-4.43,1.155-4.43,1.155\tc-0.322,0.096-0.68-0.06-0.882-0.381L11.464,10.789z M9.475,9.563C9.32,9.609,8.848,9.757,8.269,8.817c0,0-3.916-6.16-4.007-6.351\tc-0.057-0.212,0.011-0.455,0.202-0.65C5.047,1.211,8.21,0.327,9.037,0.529c0.27,0.069,0.457,0.238,0.522,0.479\tc0.047,0.266,0.433,5.982,0.488,7.264C10.098,9.368,9.629,9.517,9.475,9.563z M9.927,19.066c-0.083,0.225-0.273,0.373-0.54,0.421\tc-0.762,0.13-3.15-0.751-3.647-1.342c-0.096-0.131-0.155-0.262-0.167-0.394c-0.011-0.095,0-0.189,0.036-0.272\tc0.061-0.155,2.917-3.538,2.917-3.538c0.214-0.272,0.595-0.355,0.952-0.213c0.345,0.13,0.56,0.428,0.536,0.749\tC10.014,14.479,9.977,18.923,9.927,19.066z M3.495,13.912c-0.235-0.009-0.444-0.148-0.568-0.382c-0.089-0.17-0.151-0.453-0.19-0.794\tC2.63,11.701,2.761,10.144,3.07,9.648c0.145-0.226,0.357-0.345,0.592-0.336c0.154,0,4.255,1.667,4.255,1.667\tc0.321,0.118,0.521,0.453,0.5,0.833c-0.023,0.37-0.236,0.655-0.551,0.738L3.495,13.912z"/></svg>',
                youtube:
                    '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15,4.1c1,0.1,2.3,0,3,0.8c0.8,0.8,0.9,2.1,0.9,3.1C19,9.2,19,10.9,19,12c-0.1,1.1,0,2.4-0.5,3.4c-0.5,1.1-1.4,1.5-2.5,1.6 c-1.2,0.1-8.6,0.1-11,0c-1.1-0.1-2.4-0.1-3.2-1c-0.7-0.8-0.7-2-0.8-3C1,11.8,1,10.1,1,8.9c0-1.1,0-2.4,0.5-3.4C2,4.5,3,4.3,4.1,4.2 C5.3,4.1,12.6,4,15,4.1z M8,7.5v6l5.5-3L8,7.5z"/></svg>',
            });
    }
    return "undefined" != typeof window && window.UIkit && window.UIkit.use(i), i;
});
/*! UIkit 3.5.9 | https://www.getuikit.com | (c) 2014 - 2020 YOOtheme | MIT License */

!(function (t, e) {
    "object" == typeof exports && "undefined" != typeof module ? (module.exports = e()) : "function" == typeof define && define.amd ? define("uikit", e) : ((t = "undefined" != typeof globalThis ? globalThis : t || self).UIkit = e());
})(this, function () {
    "use strict";
    var t = Object.prototype,
        n = t.hasOwnProperty;
    function l(t, e) {
        return n.call(t, e);
    }
    var e = {},
        i = /([a-z\d])([A-Z])/g;
    function d(t) {
        return t in e || (e[t] = t.replace(i, "$1-$2").toLowerCase()), e[t];
    }
    var r = /-(\w)/g;
    function f(t) {
        return t.replace(r, o);
    }
    function o(t, e) {
        return e ? e.toUpperCase() : "";
    }
    function p(t) {
        return t.length ? o(0, t.charAt(0)) + t.slice(1) : "";
    }
    var s = String.prototype,
        a =
            s.startsWith ||
            function (t) {
                return 0 === this.lastIndexOf(t, 0);
            };
    function w(t, e) {
        return a.call(t, e);
    }
    var u =
        s.endsWith ||
        function (t) {
            return this.substr(-t.length) === t;
        };
    function c(t, e) {
        return u.call(t, e);
    }
    function h(t, e) {
        return !!~this.indexOf(t, e);
    }
    var g = Array.prototype,
        m = s.includes || h,
        v = g.includes || h;
    function b(t, e) {
        return t && (z(t) ? m : v).call(t, e);
    }
    var x =
        g.findIndex ||
        function (t) {
            for (var e = arguments, n = 0; n < this.length; n++) if (t.call(e[1], this[n], n, this)) return n;
            return -1;
        };
    function y(t, e) {
        return x.call(t, e);
    }
    var k = Array.isArray;
    function $(t) {
        return "function" == typeof t;
    }
    function I(t) {
        return null !== t && "object" == typeof t;
    }
    var S = t.toString;
    function T(t) {
        return "[object Object]" === S.call(t);
    }
    function E(t) {
        return I(t) && t === t.window;
    }
    function _(t) {
        return I(t) && 9 === t.nodeType;
    }
    function C(t) {
        return I(t) && !!t.jquery;
    }
    function A(t) {
        return I(t) && 1 <= t.nodeType;
    }
    function N(t) {
        return I(t) && 1 === t.nodeType;
    }
    function M(t) {
        return S.call(t).match(/^\[object (NodeList|HTMLCollection)\]$/);
    }
    function D(t) {
        return "boolean" == typeof t;
    }
    function z(t) {
        return "string" == typeof t;
    }
    function B(t) {
        return "number" == typeof t;
    }
    function P(t) {
        return B(t) || (z(t) && !isNaN(t - parseFloat(t)));
    }
    function O(t) {
        return !(k(t) ? t.length : I(t) && Object.keys(t).length);
    }
    function H(t) {
        return void 0 === t;
    }
    function L(t) {
        return D(t) ? t : "true" === t || "1" === t || "" === t || ("false" !== t && "0" !== t && t);
    }
    function j(t) {
        var e = Number(t);
        return !isNaN(e) && e;
    }
    function F(t) {
        return parseFloat(t) || 0;
    }
    function W(t) {
        return A(t) ? t : M(t) || C(t) ? t[0] : k(t) ? W(t[0]) : null;
    }
    function V(t) {
        return A(t) ? [t] : M(t) ? g.slice.call(t) : k(t) ? t.map(W).filter(Boolean) : C(t) ? t.toArray() : [];
    }
    function R(t) {
        return E(t) ? t : (t = W(t)) ? (_(t) ? t : t.ownerDocument).defaultView : window;
    }
    function q(t) {
        return k(t)
            ? t
            : z(t)
            ? t.split(/,(?![^(]*\))/).map(function (t) {
                  return P(t) ? j(t) : L(t.trim());
              })
            : [t];
    }
    function U(t) {
        return t ? (c(t, "ms") ? F(t) : 1e3 * F(t)) : 0;
    }
    function Y(t, n) {
        return (
            t === n ||
            (I(t) &&
                I(n) &&
                Object.keys(t).length === Object.keys(n).length &&
                K(t, function (t, e) {
                    return t === n[e];
                }))
        );
    }
    function X(t, e, n) {
        return t.replace(new RegExp(e + "|" + n, "g"), function (t) {
            return t === e ? n : e;
        });
    }
    var G =
        Object.assign ||
        function (t) {
            for (var e = [], n = arguments.length - 1; 0 < n--; ) e[n] = arguments[n + 1];
            t = Object(t);
            for (var i = 0; i < e.length; i++) {
                var r = e[i];
                if (null !== r) for (var o in r) l(r, o) && (t[o] = r[o]);
            }
            return t;
        };
    function J(t) {
        return t[t.length - 1];
    }
    function K(t, e) {
        for (var n in t) if (!1 === e(t[n], n)) return !1;
        return !0;
    }
    function Z(t, r) {
        return t.sort(function (t, e) {
            var n = t[r];
            void 0 === n && (n = 0);
            var i = e[r];
            return void 0 === i && (i = 0), i < n ? 1 : n < i ? -1 : 0;
        });
    }
    function Q(t, n) {
        var i = new Set();
        return t.filter(function (t) {
            var e = t[n];
            return !i.has(e) && (i.add(e) || !0);
        });
    }
    function tt(t, e, n) {
        return void 0 === e && (e = 0), void 0 === n && (n = 1), Math.min(Math.max(j(t) || 0, e), n);
    }
    function et() {}
    function nt(t, e) {
        return t.left < e.right && t.right > e.left && t.top < e.bottom && t.bottom > e.top;
    }
    function it(t, e) {
        return t.x <= e.right && t.x >= e.left && t.y <= e.bottom && t.y >= e.top;
    }
    var rt = {
        ratio: function (t, e, n) {
            var i = "width" === e ? "height" : "width",
                r = {};
            return (r[i] = t[e] ? Math.round((n * t[i]) / t[e]) : t[i]), (r[e] = n), r;
        },
        contain: function (n, i) {
            var r = this;
            return (
                K((n = G({}, n)), function (t, e) {
                    return (n = n[e] > i[e] ? r.ratio(n, e, i[e]) : n);
                }),
                n
            );
        },
        cover: function (n, i) {
            var r = this;
            return (
                K((n = this.contain(n, i)), function (t, e) {
                    return (n = n[e] < i[e] ? r.ratio(n, e, i[e]) : n);
                }),
                n
            );
        },
    };
    function ot(t, e, n) {
        if (I(e)) for (var i in e) ot(t, i, e[i]);
        else {
            if (H(n)) return (t = W(t)) && t.getAttribute(e);
            V(t).forEach(function (t) {
                $(n) && (n = n.call(t, ot(t, e))), null === n ? at(t, e) : t.setAttribute(e, n);
            });
        }
    }
    function st(t, e) {
        return V(t).some(function (t) {
            return t.hasAttribute(e);
        });
    }
    function at(t, e) {
        (t = V(t)),
            e.split(" ").forEach(function (e) {
                return t.forEach(function (t) {
                    return t.hasAttribute(e) && t.removeAttribute(e);
                });
            });
    }
    function ut(t, e) {
        for (var n = 0, i = [e, "data-" + e]; n < i.length; n++) if (st(t, i[n])) return ot(t, i[n]);
    }
    var ct = "undefined" != typeof window,
        ht = ct && /msie|trident/i.test(window.navigator.userAgent),
        lt = ct && "rtl" === ot(document.documentElement, "dir"),
        dt = ct && "ontouchstart" in window,
        ft = ct && window.PointerEvent,
        pt = ct && (dt || (window.DocumentTouch && document instanceof DocumentTouch) || navigator.maxTouchPoints),
        gt = ft ? "pointerdown" : dt ? "touchstart" : "mousedown",
        mt = ft ? "pointermove" : dt ? "touchmove" : "mousemove",
        vt = ft ? "pointerup" : dt ? "touchend" : "mouseup",
        wt = ft ? "pointerenter" : dt ? "" : "mouseenter",
        bt = ft ? "pointerleave" : dt ? "" : "mouseleave",
        xt = ft ? "pointercancel" : "touchcancel";
    function yt(t, e) {
        return W(t) || It(t, $t(t, e));
    }
    function kt(t, e) {
        var n = V(t);
        return (n.length && n) || St(t, $t(t, e));
    }
    function $t(t, e) {
        return void 0 === e && (e = document), Ct(t) || _(e) ? e : e.ownerDocument;
    }
    function It(t, e) {
        return W(Tt(t, e, "querySelector"));
    }
    function St(t, e) {
        return V(Tt(t, e, "querySelectorAll"));
    }
    function Tt(t, s, e) {
        if ((void 0 === s && (s = document), !t || !z(t))) return null;
        var a;
        Ct((t = t.replace(_t, "$1 *"))) &&
            ((a = []),
            (t = t
                .match(At)
                .map(function (t) {
                    return t.replace(/,$/, "").trim();
                })
                .map(function (t, e) {
                    var n,
                        i,
                        r,
                        o = s;
                    return (
                        "!" === t[0] && ((n = t.substr(1).trim().split(" ")), (o = Bt(Pt(s), n[0])), (t = n.slice(1).join(" ").trim())),
                        "-" === t[0] && ((i = t.substr(1).trim().split(" ")), (r = (o || s).previousElementSibling), (o = Dt(r, t.substr(1)) ? r : null), (t = i.slice(1).join(" "))),
                        o
                            ? (o.id ||
                                  ((o.id = "uk-" + Date.now() + e),
                                  a.push(function () {
                                      return at(o, "id");
                                  })),
                              "#" + Ht(o.id) + " " + t)
                            : null
                    );
                })
                .filter(Boolean)
                .join(",")),
            (s = document));
        try {
            return s[e](t);
        } catch (t) {
            return null;
        } finally {
            a &&
                a.forEach(function (t) {
                    return t();
                });
        }
    }
    var Et = /(^|[^\\],)\s*[!>+~-]/,
        _t = /([!>+~-])(?=\s+[!>+~-]|\s*$)/g;
    function Ct(t) {
        return z(t) && t.match(Et);
    }
    var At = /.*?[^\\](?:,|$)/g;
    var Nt = ct ? Element.prototype : {},
        Mt = Nt.matches || Nt.webkitMatchesSelector || Nt.msMatchesSelector || et;
    function Dt(t, e) {
        return V(t).some(function (t) {
            return Mt.call(t, e);
        });
    }
    var zt =
        Nt.closest ||
        function (t) {
            var e = this;
            do {
                if (Dt(e, t)) return e;
            } while ((e = Pt(e)));
        };
    function Bt(t, e) {
        return (
            w(e, ">") && (e = e.slice(1)),
            N(t)
                ? zt.call(t, e)
                : V(t)
                      .map(function (t) {
                          return Bt(t, e);
                      })
                      .filter(Boolean)
        );
    }
    function Pt(t) {
        return (t = W(t)) && N(t.parentNode) && t.parentNode;
    }
    var Ot =
        (ct && window.CSS && CSS.escape) ||
        function (t) {
            return t.replace(/([^\x7f-\uFFFF\w-])/g, function (t) {
                return "\\" + t;
            });
        };
    function Ht(t) {
        return z(t) ? Ot.call(null, t) : "";
    }
    var Lt = { area: !0, base: !0, br: !0, col: !0, embed: !0, hr: !0, img: !0, input: !0, keygen: !0, link: !0, menuitem: !0, meta: !0, param: !0, source: !0, track: !0, wbr: !0 };
    function jt(t) {
        return V(t).some(function (t) {
            return Lt[t.tagName.toLowerCase()];
        });
    }
    function Ft(t) {
        return V(t).some(function (t) {
            return t.offsetWidth || t.offsetHeight || t.getClientRects().length;
        });
    }
    var Wt = "input,select,textarea,button";
    function Vt(t) {
        return V(t).some(function (t) {
            return Dt(t, Wt);
        });
    }
    function Rt(t, e) {
        return V(t).filter(function (t) {
            return Dt(t, e);
        });
    }
    function qt(t, e) {
        return z(e) ? Dt(t, e) || !!Bt(t, e) : t === e || (_(e) ? e.documentElement : W(e)).contains(W(t));
    }
    function Ut(t, e) {
        for (var n = []; (t = Pt(t)); ) (e && !Dt(t, e)) || n.push(t);
        return n;
    }
    function Yt(t, e) {
        var n = (t = W(t)) ? V(t.children) : [];
        return e ? Rt(n, e) : n;
    }
    function Xt() {
        for (var t = [], e = arguments.length; e--; ) t[e] = arguments[e];
        var n,
            i,
            r = Qt(t),
            o = r[0],
            s = r[1],
            a = r[2],
            u = r[3],
            c = r[4],
            o = ie(o);
        return (
            1 < u.length &&
                ((n = u),
                (u = function (t) {
                    return k(t.detail) ? n.apply(void 0, [t].concat(t.detail)) : n(t);
                })),
            c &&
                c.self &&
                ((i = u),
                (u = function (t) {
                    if (t.target === t.currentTarget || t.target === t.current) return i.call(null, t);
                })),
            a &&
                (u = (function (t, i, r) {
                    var o = this;
                    return function (n) {
                        t.forEach(function (t) {
                            var e =
                                ">" === i[0]
                                    ? St(i, t)
                                          .reverse()
                                          .filter(function (t) {
                                              return qt(n.target, t);
                                          })[0]
                                    : Bt(n.target, i);
                            e && ((n.delegate = t), (n.current = e), r.call(o, n));
                        });
                    };
                })(o, a, u)),
            (c = te(c)),
            s.split(" ").forEach(function (e) {
                return o.forEach(function (t) {
                    return t.addEventListener(e, u, c);
                });
            }),
            function () {
                return Gt(o, s, u, c);
            }
        );
    }
    function Gt(t, e, n, i) {
        void 0 === i && (i = !1),
            (i = te(i)),
            (t = ie(t)),
            e.split(" ").forEach(function (e) {
                return t.forEach(function (t) {
                    return t.removeEventListener(e, n, i);
                });
            });
    }
    function Jt() {
        for (var t = [], e = arguments.length; e--; ) t[e] = arguments[e];
        var n = Qt(t),
            i = n[0],
            r = n[1],
            o = n[2],
            s = n[3],
            a = n[4],
            u = n[5],
            c = Xt(
                i,
                r,
                o,
                function (t) {
                    var e = !u || u(t);
                    e && (c(), s(t, e));
                },
                a
            );
        return c;
    }
    function Kt(t, n, i) {
        return ie(t).reduce(function (t, e) {
            return t && e.dispatchEvent(Zt(n, !0, !0, i));
        }, !0);
    }
    function Zt(t, e, n, i) {
        var r;
        return void 0 === e && (e = !0), void 0 === n && (n = !1), z(t) && ((r = document.createEvent("CustomEvent")).initCustomEvent(t, e, n, i), (t = r)), t;
    }
    function Qt(t) {
        return $(t[2]) && t.splice(2, 0, !1), t;
    }
    function te(t) {
        return t && ht && !D(t) ? !!t.capture : t;
    }
    function ee(t) {
        return t && "addEventListener" in t;
    }
    function ne(t) {
        return ee(t) ? t : W(t);
    }
    function ie(t) {
        return k(t) ? t.map(ne).filter(Boolean) : z(t) ? St(t) : ee(t) ? [t] : V(t);
    }
    function re(t) {
        return "touch" === t.pointerType || !!t.touches;
    }
    function oe(t) {
        var e = t.touches,
            n = t.changedTouches,
            i = (e && e[0]) || (n && n[0]) || t;
        return { x: i.clientX, y: i.clientY };
    }
    function se() {
        var n = this;
        this.promise = new ae(function (t, e) {
            (n.reject = e), (n.resolve = t);
        });
    }
    var ae = (ct && window.Promise) || he,
        ue = 2,
        ce = (ct && window.setImmediate) || setTimeout;
    function he(t) {
        (this.state = ue), (this.value = void 0), (this.deferred = []);
        var e = this;
        try {
            t(
                function (t) {
                    e.resolve(t);
                },
                function (t) {
                    e.reject(t);
                }
            );
        } catch (t) {
            e.reject(t);
        }
    }
    (he.reject = function (n) {
        return new he(function (t, e) {
            e(n);
        });
    }),
        (he.resolve = function (n) {
            return new he(function (t, e) {
                t(n);
            });
        }),
        (he.all = function (o) {
            return new he(function (n, t) {
                var i = [],
                    r = 0;
                0 === o.length && n(i);
                for (var e = 0; e < o.length; e += 1)
                    he.resolve(o[e]).then(
                        (function (e) {
                            return function (t) {
                                (i[e] = t), (r += 1) === o.length && n(i);
                            };
                        })(e),
                        t
                    );
            });
        }),
        (he.race = function (i) {
            return new he(function (t, e) {
                for (var n = 0; n < i.length; n += 1) he.resolve(i[n]).then(t, e);
            });
        });
    var le = he.prototype;
    function de(s, a) {
        return new ae(function (t, e) {
            var n = G({ data: null, method: "GET", headers: {}, xhr: new XMLHttpRequest(), beforeSend: et, responseType: "" }, a);
            n.beforeSend(n);
            var i,
                r,
                o = n.xhr;
            for (i in n)
                if (i in o)
                    try {
                        o[i] = n[i];
                    } catch (t) {}
            for (r in (o.open(n.method.toUpperCase(), s), n.headers)) o.setRequestHeader(r, n.headers[r]);
            Xt(o, "load", function () {
                0 === o.status || (200 <= o.status && o.status < 300) || 304 === o.status
                    ? ("json" === n.responseType &&
                          z(o.response) &&
                          (o = G(
                              (function (t) {
                                  var e,
                                      n = {};
                                  for (e in t) n[e] = t[e];
                                  return n;
                              })(o),
                              { response: JSON.parse(o.response) }
                          )),
                      t(o))
                    : e(G(Error(o.statusText), { xhr: o, status: o.status }));
            }),
                Xt(o, "error", function () {
                    return e(G(Error("Network Error"), { xhr: o }));
                }),
                Xt(o, "timeout", function () {
                    return e(G(Error("Network Timeout"), { xhr: o }));
                }),
                o.send(n.data);
        });
    }
    function fe(i, r, o) {
        return new ae(function (t, e) {
            var n = new Image();
            (n.onerror = function (t) {
                return e(t);
            }),
                (n.onload = function () {
                    return t(n);
                }),
                o && (n.sizes = o),
                r && (n.srcset = r),
                (n.src = i);
        });
    }
    function pe(t) {
        var e;
        "loading" === document.readyState
            ? (e = Xt(document, "DOMContentLoaded", function () {
                  e(), t();
              }))
            : t();
    }
    function ge(t, e) {
        return e ? V(t).indexOf(W(e)) : Yt(Pt(t)).indexOf(t);
    }
    function me(t, e, n, i) {
        void 0 === n && (n = 0), void 0 === i && (i = !1);
        var r = (e = V(e)).length;
        return (t = P(t) ? j(t) : "next" === t ? n + 1 : "previous" === t ? n - 1 : ge(e, t)), i ? tt(t, 0, r - 1) : (t %= r) < 0 ? t + r : t;
    }
    function ve(t) {
        return ((t = Ne(t)).innerHTML = ""), t;
    }
    function we(t, e) {
        return (t = Ne(t)), H(e) ? t.innerHTML : be(t.hasChildNodes() ? ve(t) : t, e);
    }
    function be(e, t) {
        return (
            (e = Ne(e)),
            ke(t, function (t) {
                return e.appendChild(t);
            })
        );
    }
    function xe(e, t) {
        return (
            (e = Ne(e)),
            ke(t, function (t) {
                return e.parentNode.insertBefore(t, e);
            })
        );
    }
    function ye(e, t) {
        return (
            (e = Ne(e)),
            ke(t, function (t) {
                return e.nextSibling ? xe(e.nextSibling, t) : be(e.parentNode, t);
            })
        );
    }
    function ke(t, e) {
        return (t = z(t) ? Ce(t) : t) ? ("length" in t ? V(t).map(e) : e(t)) : null;
    }
    function $e(t) {
        V(t).map(function (t) {
            return t.parentNode && t.parentNode.removeChild(t);
        });
    }
    function Ie(t, e) {
        for (e = W(xe(t, e)); e.firstChild; ) e = e.firstChild;
        return be(e, t), e;
    }
    function Se(t, e) {
        return V(
            V(t).map(function (t) {
                return t.hasChildNodes ? Ie(V(t.childNodes), e) : be(t, e);
            })
        );
    }
    function Te(t) {
        V(t)
            .map(Pt)
            .filter(function (t, e, n) {
                return n.indexOf(t) === e;
            })
            .forEach(function (t) {
                xe(t, t.childNodes), $e(t);
            });
    }
    (le.resolve = function (t) {
        var e = this;
        if (e.state === ue) {
            if (t === e) throw new TypeError("Promise settled with itself.");
            var n = !1;
            try {
                var i = t && t.then;
                if (null !== t && I(t) && $(i))
                    return void i.call(
                        t,
                        function (t) {
                            n || e.resolve(t), (n = !0);
                        },
                        function (t) {
                            n || e.reject(t), (n = !0);
                        }
                    );
            } catch (t) {
                return void (n || e.reject(t));
            }
            (e.state = 0), (e.value = t), e.notify();
        }
    }),
        (le.reject = function (t) {
            var e = this;
            if (e.state === ue) {
                if (t === e) throw new TypeError("Promise settled with itself.");
                (e.state = 1), (e.value = t), e.notify();
            }
        }),
        (le.notify = function () {
            var o = this;
            ce(function () {
                if (o.state !== ue)
                    for (; o.deferred.length; ) {
                        var t = o.deferred.shift(),
                            e = t[0],
                            n = t[1],
                            i = t[2],
                            r = t[3];
                        try {
                            0 === o.state ? ($(e) ? i(e.call(void 0, o.value)) : i(o.value)) : 1 === o.state && ($(n) ? i(n.call(void 0, o.value)) : r(o.value));
                        } catch (t) {
                            r(t);
                        }
                    }
            });
        }),
        (le.then = function (n, i) {
            var r = this;
            return new he(function (t, e) {
                r.deferred.push([n, i, t, e]), r.notify();
            });
        }),
        (le.catch = function (t) {
            return this.then(void 0, t);
        });
    var Ee = /^\s*<(\w+|!)[^>]*>/,
        _e = /^<(\w+)\s*\/?>(?:<\/\1>)?$/;
    function Ce(t) {
        var e = _e.exec(t);
        if (e) return document.createElement(e[1]);
        var n = document.createElement("div");
        return Ee.test(t) ? n.insertAdjacentHTML("beforeend", t.trim()) : (n.textContent = t), 1 < n.childNodes.length ? V(n.childNodes) : n.firstChild;
    }
    function Ae(t, e) {
        if (N(t))
            for (e(t), t = t.firstElementChild; t; ) {
                var n = t.nextElementSibling;
                Ae(t, e), (t = n);
            }
    }
    function Ne(t, e) {
        return z(t) ? (De(t) ? W(Ce(t)) : It(t, e)) : W(t);
    }
    function Me(t, e) {
        return z(t) ? (De(t) ? V(Ce(t)) : St(t, e)) : V(t);
    }
    function De(t) {
        return "<" === t[0] || t.match(/^\s*</);
    }
    function ze(t) {
        for (var e = [], n = arguments.length - 1; 0 < n--; ) e[n] = arguments[n + 1];
        je(t, e, "add");
    }
    function Be(t) {
        for (var e = [], n = arguments.length - 1; 0 < n--; ) e[n] = arguments[n + 1];
        je(t, e, "remove");
    }
    function Pe(t, e) {
        ot(t, "class", function (t) {
            return (t || "").replace(new RegExp("\\b" + e + "\\b", "g"), "");
        });
    }
    function Oe(t) {
        for (var e = [], n = arguments.length - 1; 0 < n--; ) e[n] = arguments[n + 1];
        e[0] && Be(t, e[0]), e[1] && ze(t, e[1]);
    }
    function He(t, e) {
        return (
            e &&
            V(t).some(function (t) {
                return t.classList.contains(e.split(" ")[0]);
            })
        );
    }
    function Le(t) {
        for (var i, r = [], e = arguments.length - 1; 0 < e--; ) r[e] = arguments[e + 1];
        r.length &&
            ((i = z(J((r = Fe(r)))) ? [] : r.pop()),
            (r = r.filter(Boolean)),
            V(t).forEach(function (t) {
                for (var e = t.classList, n = 0; n < r.length; n++) We.Force ? e.toggle.apply(e, [r[n]].concat(i)) : e[(H(i) ? !e.contains(r[n]) : i) ? "add" : "remove"](r[n]);
            }));
    }
    function je(t, n, i) {
        (n = Fe(n).filter(Boolean)).length &&
            V(t).forEach(function (t) {
                var e = t.classList;
                We.Multiple
                    ? e[i].apply(e, n)
                    : n.forEach(function (t) {
                          return e[i](t);
                      });
            });
    }
    function Fe(t) {
        return t.reduce(function (t, e) {
            return t.concat.call(t, z(e) && b(e, " ") ? e.trim().split(" ") : e);
        }, []);
    }
    var We = {
            get Multiple() {
                return this.get("_multiple");
            },
            get Force() {
                return this.get("_force");
            },
            get: function (t) {
                var e;
                return l(this, t) || ((e = document.createElement("_").classList).add("a", "b"), e.toggle("c", !1), (this._multiple = e.contains("b")), (this._force = !e.contains("c"))), this[t];
            },
        },
        Ve = {
            "animation-iteration-count": !0,
            "column-count": !0,
            "fill-opacity": !0,
            "flex-grow": !0,
            "flex-shrink": !0,
            "font-weight": !0,
            "line-height": !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            "stroke-dasharray": !0,
            "stroke-dashoffset": !0,
            widows: !0,
            "z-index": !0,
            zoom: !0,
        };
    function Re(t, e, r) {
        return V(t).map(function (n) {
            if (z(e)) {
                if (((e = Je(e)), H(r))) return Ue(n, e);
                r || B(r) ? (n.style[e] = P(r) && !Ve[e] ? r + "px" : r) : n.style.removeProperty(e);
            } else {
                if (k(e)) {
                    var i = qe(n);
                    return e.reduce(function (t, e) {
                        return (t[e] = i[Je(e)]), t;
                    }, {});
                }
                I(e) &&
                    K(e, function (t, e) {
                        return Re(n, e, t);
                    });
            }
            return n;
        })[0];
    }
    function qe(t, e) {
        return (t = W(t)).ownerDocument.defaultView.getComputedStyle(t, e);
    }
    function Ue(t, e, n) {
        return qe(t, n)[e];
    }
    var Ye = {};
    function Xe(t) {
        var e,
            n = document.documentElement;
        return ht ? (t in Ye || (ze((e = be(n, document.createElement("div"))), "uk-" + t), (Ye[t] = Ue(e, "content", ":before").replace(/^["'](.*)["']$/, "$1")), $e(e)), Ye[t]) : qe(n).getPropertyValue("--uk-" + t);
    }
    var Ge = {};
    function Je(t) {
        return (
            Ge[t] ||
            (Ge[t] =
                (function (t) {
                    t = d(t);
                    var e = document.documentElement.style;
                    if (t in e) return t;
                    var n,
                        i = Ke.length;
                    for (; i--; ) if ((n = "-" + Ke[i] + "-" + t) in e) return n;
                })(t) || t)
        );
    }
    var Ke = ["webkit", "moz", "ms"];
    function Ze(t, s, a, u) {
        return (
            void 0 === a && (a = 400),
            void 0 === u && (u = "linear"),
            ae.all(
                V(t).map(function (o) {
                    return new ae(function (n, i) {
                        for (var t in s) {
                            var e = Re(o, t);
                            "" === e && Re(o, t, e);
                        }
                        var r = setTimeout(function () {
                            return Kt(o, "transitionend");
                        }, a);
                        Jt(
                            o,
                            "transitionend transitioncanceled",
                            function (t) {
                                var e = t.type;
                                clearTimeout(r), Be(o, "uk-transition"), Re(o, { transitionProperty: "", transitionDuration: "", transitionTimingFunction: "" }), ("transitioncanceled" === e ? i : n)();
                            },
                            { self: !0 }
                        ),
                            ze(o, "uk-transition"),
                            Re(o, G({ transitionProperty: Object.keys(s).map(Je).join(","), transitionDuration: a + "ms", transitionTimingFunction: u }, s));
                    });
                })
            )
        );
    }
    var Qe = {
            start: Ze,
            stop: function (t) {
                return Kt(t, "transitionend"), ae.resolve();
            },
            cancel: function (t) {
                Kt(t, "transitioncanceled");
            },
            inProgress: function (t) {
                return He(t, "uk-transition");
            },
        },
        tn = "uk-animation-";
    function en(t, e, s, a, u) {
        return (
            void 0 === s && (s = 200),
            ae.all(
                V(t).map(function (o) {
                    return new ae(function (n, i) {
                        Kt(o, "animationcanceled");
                        var r = setTimeout(function () {
                            return Kt(o, "animationend");
                        }, s);
                        Jt(
                            o,
                            "animationend animationcanceled",
                            function (t) {
                                var e = t.type;
                                clearTimeout(r), ("animationcanceled" === e ? i : n)(), Re(o, "animationDuration", ""), Pe(o, tn + "\\S*");
                            },
                            { self: !0 }
                        ),
                            Re(o, "animationDuration", s + "ms"),
                            ze(o, e, tn + (u ? "leave" : "enter")),
                            w(e, tn) && ze(o, a && "uk-transform-origin-" + a, u && tn + "reverse");
                    });
                })
            )
        );
    }
    var nn = new RegExp(tn + "(enter|leave)"),
        rn = {
            in: en,
            out: function (t, e, n, i) {
                return en(t, e, n, i, !0);
            },
            inProgress: function (t) {
                return nn.test(ot(t, "class"));
            },
            cancel: function (t) {
                Kt(t, "animationcanceled");
            },
        },
        on = { width: ["x", "left", "right"], height: ["y", "top", "bottom"] };
    function sn(t, e, h, l, d, n, i, r) {
        (h = mn(h)), (l = mn(l));
        var f = { element: h, target: l };
        if (!t || !e) return f;
        var o,
            p = un(t),
            g = un(e),
            m = g;
        return (
            gn(m, h, p, -1),
            gn(m, l, g, 1),
            (d = vn(d, p.width, p.height)),
            (n = vn(n, g.width, g.height)),
            (d.x += n.x),
            (d.y += n.y),
            (m.left += d.x),
            (m.top += d.y),
            i &&
                ((o = [un(R(t))]),
                r && o.unshift(un(r)),
                K(on, function (t, s) {
                    var a = t[0],
                        u = t[1],
                        c = t[2];
                    (!0 !== i && !b(i, a)) ||
                        o.some(function (i) {
                            var t = h[a] === u ? -p[s] : h[a] === c ? p[s] : 0,
                                e = l[a] === u ? g[s] : l[a] === c ? -g[s] : 0;
                            if (m[u] < i[u] || m[u] + p[s] > i[c]) {
                                var n = p[s] / 2,
                                    r = "center" === l[a] ? -g[s] / 2 : 0;
                                return ("center" === h[a] && (o(n, r) || o(-n, -r))) || o(t, e);
                            }
                            function o(e, t) {
                                var n = F((m[u] + e + t - 2 * d[a]).toFixed(4));
                                if (n >= i[u] && n + p[s] <= i[c])
                                    return (
                                        (m[u] = n),
                                        ["element", "target"].forEach(function (t) {
                                            f[t][a] = e ? (f[t][a] === on[s][1] ? on[s][2] : on[s][1]) : f[t][a];
                                        }),
                                        !0
                                    );
                            }
                        });
                })),
            an(t, m),
            f
        );
    }
    function an(n, i) {
        if (!i) return un(n);
        var r = un(n),
            o = Re(n, "position");
        ["left", "top"].forEach(function (t) {
            var e;
            t in i && ((e = Re(n, t)), Re(n, t, i[t] - r[t] + F("absolute" === o && "auto" === e ? cn(n)[t] : e)));
        });
    }
    function un(t) {
        var e = R(t),
            n = e.pageYOffset,
            i = e.pageXOffset,
            r = E(t)
                ? { height: ln(t), width: dn(t), top: 0, left: 0 }
                : (function (t) {
                      if (!t) return {};
                      var e;
                      Ft(t) || ((e = ot(t, "style")), t.style.setProperty("display", "block", "important"));
                      var n = t.getBoundingClientRect();
                      return ot(t, "style", e), n;
                  })(W(t));
        return { height: r.height, width: r.width, top: r.top + n, left: r.left + i, bottom: r.top + r.height + n, right: r.left + r.width + i };
    }
    function cn(t, e) {
        e = e || (W(t) || {}).offsetParent || R(t).document.documentElement;
        var n = an(t),
            i = an(e);
        return { top: n.top - i.top - F(Re(e, "borderTopWidth")), left: n.left - i.left - F(Re(e, "borderLeftWidth")) };
    }
    function hn(t) {
        var e = [0, 0];
        t = W(t);
        do {
            if (((e[0] += t.offsetTop), (e[1] += t.offsetLeft), "fixed" === Re(t, "position"))) {
                var n = R(t);
                return (e[0] += n.pageYOffset), (e[1] += n.pageXOffset), e;
            }
        } while ((t = t.offsetParent));
        return e;
    }
    var ln = fn("height"),
        dn = fn("width");
    function fn(i) {
        var r = p(i);
        return function (t, e) {
            if (H(e)) {
                if (E(t)) return t["inner" + r];
                if (_(t)) {
                    var n = t.documentElement;
                    return Math.max(n["offset" + r], n["scroll" + r]);
                }
                return (e = "auto" === (e = Re((t = W(t)), i)) ? t["offset" + r] : F(e) || 0) - pn(t, i);
            }
            Re(t, i, e || 0 === e ? +e + pn(t, i) + "px" : "");
        };
    }
    function pn(n, t, e) {
        return (
            void 0 === e && (e = "border-box"),
            Re(n, "boxSizing") === e
                ? on[t]
                      .slice(1)
                      .map(p)
                      .reduce(function (t, e) {
                          return t + F(Re(n, "padding" + e)) + F(Re(n, "border" + e + "Width"));
                      }, 0)
                : 0
        );
    }
    function gn(o, s, a, u) {
        K(on, function (t, e) {
            var n = t[0],
                i = t[1],
                r = t[2];
            s[n] === r ? (o[i] += a[e] * u) : "center" === s[n] && (o[i] += (a[e] * u) / 2);
        });
    }
    function mn(t) {
        var e = /left|center|right/,
            n = /top|center|bottom/;
        return 1 === (t = (t || "").split(" ")).length && (t = e.test(t[0]) ? t.concat("center") : n.test(t[0]) ? ["center"].concat(t) : ["center", "center"]), { x: e.test(t[0]) ? t[0] : "center", y: n.test(t[1]) ? t[1] : "center" };
    }
    function vn(t, e, n) {
        var i = (t || "").split(" "),
            r = i[0],
            o = i[1];
        return { x: r ? F(r) * (c(r, "%") ? e / 100 : 1) : 0, y: o ? F(o) * (c(o, "%") ? n / 100 : 1) : 0 };
    }
    function wn(t) {
        switch (t) {
            case "left":
                return "right";
            case "right":
                return "left";
            case "top":
                return "bottom";
            case "bottom":
                return "top";
            default:
                return t;
        }
    }
    function bn(t, e, n) {
        return void 0 === e && (e = "width"), void 0 === n && (n = window), P(t) ? +t : c(t, "vh") ? xn(ln(R(n)), t) : c(t, "vw") ? xn(dn(R(n)), t) : c(t, "%") ? xn(un(n)[e], t) : F(t);
    }
    function xn(t, e) {
        return (t * F(e)) / 100;
    }
    var yn = {
        reads: [],
        writes: [],
        read: function (t) {
            return this.reads.push(t), In(), t;
        },
        write: function (t) {
            return this.writes.push(t), In(), t;
        },
        clear: function (t) {
            return Tn(this.reads, t) || Tn(this.writes, t);
        },
        flush: kn,
    };
    function kn(t) {
        void 0 === t && (t = 1), Sn(yn.reads), Sn(yn.writes.splice(0, yn.writes.length)), (yn.scheduled = !1), (yn.reads.length || yn.writes.length) && In(t + 1);
    }
    var $n = 4;
    function In(t) {
        yn.scheduled ||
            ((yn.scheduled = !0),
            t && t < $n
                ? ae.resolve().then(function () {
                      return kn(t);
                  })
                : requestAnimationFrame(function () {
                      return kn();
                  }));
    }
    function Sn(t) {
        for (var e; (e = t.shift()); ) e();
    }
    function Tn(t, e) {
        var n = t.indexOf(e);
        return !!~n && !!t.splice(n, 1);
    }
    function En() {}
    En.prototype = {
        positions: [],
        init: function () {
            var e,
                t = this;
            (this.positions = []),
                (this.unbind = Xt(document, "mousemove", function (t) {
                    return (e = oe(t));
                })),
                (this.interval = setInterval(function () {
                    e && (t.positions.push(e), 5 < t.positions.length && t.positions.shift());
                }, 50));
        },
        cancel: function () {
            this.unbind && this.unbind(), this.interval && clearInterval(this.interval);
        },
        movesTo: function (t) {
            if (this.positions.length < 2) return !1;
            var n = t.getBoundingClientRect(),
                e = n.left,
                i = n.right,
                r = n.top,
                o = n.bottom,
                s = this.positions[0],
                a = J(this.positions),
                u = [s, a];
            return (
                !it(a, n) &&
                [
                    [
                        { x: e, y: r },
                        { x: i, y: o },
                    ],
                    [
                        { x: e, y: o },
                        { x: i, y: r },
                    ],
                ].some(function (t) {
                    var e = (function (t, e) {
                        var n = t[0],
                            i = n.x,
                            r = n.y,
                            o = t[1],
                            s = o.x,
                            a = o.y,
                            u = e[0],
                            c = u.x,
                            h = u.y,
                            l = e[1],
                            d = l.x,
                            f = l.y,
                            p = (f - h) * (s - i) - (d - c) * (a - r);
                        if (0 == p) return !1;
                        var g = ((d - c) * (r - h) - (f - h) * (i - c)) / p;
                        if (g < 0) return !1;
                        return { x: i + g * (s - i), y: r + g * (a - r) };
                    })(u, t);
                    return e && it(e, n);
                })
            );
        },
    };
    var _n = {};
    function Cn(t, e, n) {
        return _n.computed($(t) ? t.call(n, n) : t, $(e) ? e.call(n, n) : e);
    }
    function An(t, e) {
        return (t = t && !k(t) ? [t] : t), e ? (t ? t.concat(e) : k(e) ? e : [e]) : t;
    }
    function Nn(e, n, i) {
        var t,
            r,
            o = {};
        if (($(n) && (n = n.options), n.extends && (e = Nn(e, n.extends, i)), n.mixins)) for (var s = 0, a = n.mixins.length; s < a; s++) e = Nn(e, n.mixins[s], i);
        for (t in e) u(t);
        for (r in n) l(e, r) || u(r);
        function u(t) {
            o[t] = (
                _n[t] ||
                function (t, e) {
                    return H(e) ? t : e;
                }
            )(e[t], n[t], i);
        }
        return o;
    }
    function Mn(t, e) {
        var n;
        void 0 === e && (e = []);
        try {
            return t
                ? w(t, "{")
                    ? JSON.parse(t)
                    : e.length && !b(t, ":")
                    ? (((n = {})[e[0]] = t), n)
                    : t.split(";").reduce(function (t, e) {
                          var n = e.split(/:(.*)/),
                              i = n[0],
                              r = n[1];
                          return i && !H(r) && (t[i.trim()] = r.trim()), t;
                      }, {})
                : {};
        } catch (t) {
            return {};
        }
    }
    function Dn(t) {
        if ((On(t) && jn(t, { func: "playVideo", method: "play" }), Pn(t)))
            try {
                t.play().catch(et);
            } catch (t) {}
    }
    function zn(t) {
        On(t) && jn(t, { func: "pauseVideo", method: "pause" }), Pn(t) && t.pause();
    }
    function Bn(t) {
        On(t) && jn(t, { func: "mute", method: "setVolume", value: 0 }), Pn(t) && (t.muted = !0);
    }
    function Pn(t) {
        return t && "VIDEO" === t.tagName;
    }
    function On(t) {
        return t && "IFRAME" === t.tagName && (Hn(t) || Ln(t));
    }
    function Hn(t) {
        return !!t.src.match(/\/\/.*?youtube(-nocookie)?\.[a-z]+\/(watch\?v=[^&\s]+|embed)|youtu\.be\/.*/);
    }
    function Ln(t) {
        return !!t.src.match(/vimeo\.com\/video\/.*/);
    }
    function jn(t, e) {
        (function (e) {
            if (e[Wn]) return e[Wn];
            var n,
                i = Hn(e),
                r = Ln(e),
                o = ++Vn;
            return (e[Wn] = new ae(function (t) {
                i &&
                    Jt(e, "load", function () {
                        function t() {
                            return Fn(e, { event: "listening", id: o });
                        }
                        (n = setInterval(t, 100)), t();
                    }),
                    Jt(window, "message", t, !1, function (t) {
                        var e = t.data;
                        try {
                            return (e = JSON.parse(e)) && ((i && e.id === o && "onReady" === e.event) || (r && Number(e.player_id) === o));
                        } catch (t) {}
                    }),
                    (e.src = e.src + (b(e.src, "?") ? "&" : "?") + (i ? "enablejsapi=1" : "api=1&player_id=" + o));
            }).then(function () {
                return clearInterval(n);
            }));
        })(t).then(function () {
            return Fn(t, e);
        });
    }
    function Fn(t, e) {
        try {
            t.contentWindow.postMessage(JSON.stringify(G({ event: "command" }, e)), "*");
        } catch (t) {}
    }
    (_n.events = _n.created = _n.beforeConnect = _n.connected = _n.beforeDisconnect = _n.disconnected = _n.destroy = An),
        (_n.args = function (t, e) {
            return !1 !== e && An(e || t);
        }),
        (_n.update = function (t, e) {
            return Z(An(t, $(e) ? { read: e } : e), "order");
        }),
        (_n.props = function (t, e) {
            return (
                k(e) &&
                    (e = e.reduce(function (t, e) {
                        return (t[e] = String), t;
                    }, {})),
                _n.methods(t, e)
            );
        }),
        (_n.computed = _n.methods = function (t, e) {
            return e ? (t ? G({}, t, e) : e) : t;
        }),
        (_n.data = function (e, n, t) {
            return t
                ? Cn(e, n, t)
                : n
                ? e
                    ? function (t) {
                          return Cn(e, n, t);
                      }
                    : n
                : e;
        });
    var Wn = "_ukPlayer",
        Vn = 0;
    function Rn(u, c, h) {
        if ((void 0 === c && (c = 0), void 0 === h && (h = 0), !Ft(u))) return !1;
        var l = Jn(u);
        return l.every(function (t, e) {
            var n = an(l[e + 1] || u),
                i = an(Gn(t)),
                r = i.top,
                o = i.left,
                s = i.bottom,
                a = i.right;
            return nt(n, { top: r - c, left: o - h, bottom: s + c, right: a + h });
        });
    }
    function qn(t, e) {
        (t = (E(t) || _(t) ? Kn : W)(t)).scrollTop = e;
    }
    function Un(s, t) {
        void 0 === t && (t = {});
        var a = t.offset;
        if ((void 0 === a && (a = 0), Ft(s))) {
            var u = Jn(s).reverse(),
                c = 0;
            return u.reduce(
                function (t, e, n) {
                    var i = e.scrollTop,
                        r = e.scrollHeight - e.clientHeight,
                        o = Math.ceil(cn(u[n - 1] || s, Gn(e)).top - a) + c + i;
                    return (
                        r < o ? ((c = o - r), (o = r)) : (c = 0),
                        function () {
                            return (
                                (a = e),
                                (u = o - i),
                                new ae(function (i) {
                                    var t,
                                        r = a.scrollTop,
                                        o = ((t = Math.abs(u)), 40 * Math.pow(t, 0.375)),
                                        s = Date.now();
                                    !(function t() {
                                        var e,
                                            n = ((e = tt((Date.now() - s) / o)), 0.5 * (1 - Math.cos(Math.PI * e)));
                                        qn(a, r + u * n), 1 != n ? requestAnimationFrame(t) : i();
                                    })();
                                }).then(t)
                            );
                            var a, u;
                        }
                    );
                },
                function () {
                    return ae.resolve();
                }
            )();
        }
    }
    function Yn(t, e) {
        if ((void 0 === e && (e = 0), !Ft(t))) return 0;
        var n = J(Xn(t)),
            i = n.scrollHeight,
            r = n.scrollTop,
            o = an(Gn(n)).height,
            s = hn(t)[0] - r - hn(n)[0],
            a = Math.min(o, s + r);
        return tt((-1 * (s - a)) / Math.min(an(t).height + e + a, i - (s + r), i - o));
    }
    function Xn(t, e) {
        void 0 === e && (e = /auto|scroll/);
        var n = Kn(t),
            i = Ut(t)
                .filter(function (t) {
                    return t === n || (e.test(Re(t, "overflow")) && t.scrollHeight > Math.round(an(t).height));
                })
                .reverse();
        return i.length ? i : [n];
    }
    function Gn(t) {
        return t === Kn(t) ? window : t;
    }
    function Jn(t) {
        return Xn(t, /auto|scroll|hidden/);
    }
    function Kn(t) {
        var e = R(t).document;
        return e.scrollingElement || e.documentElement;
    }
    var Zn =
        (ct && window.IntersectionObserver) ||
        (function () {
            function t(e, t) {
                var n = this;
                void 0 === t && (t = {});
                var i = t.rootMargin;
                void 0 === i && (i = "0 0"), (this.targets = []);
                var r,
                    o = (i || "0 0").split(" ").map(F),
                    s = o[0],
                    a = o[1];
                (this.offsetTop = s),
                    (this.offsetLeft = a),
                    (this.apply = function () {
                        r =
                            r ||
                            requestAnimationFrame(function () {
                                return setTimeout(function () {
                                    var t = n.takeRecords();
                                    t.length && e(t, n), (r = !1);
                                });
                            });
                    }),
                    (this.off = Xt(window, "scroll resize load", this.apply, { passive: !0, capture: !0 }));
            }
            return (
                (t.prototype.takeRecords = function () {
                    var n = this;
                    return this.targets.filter(function (t) {
                        var e = Rn(t.target, n.offsetTop, n.offsetLeft);
                        if (null === t.isIntersecting || e ^ t.isIntersecting) return (t.isIntersecting = e), !0;
                    });
                }),
                (t.prototype.observe = function (t) {
                    this.targets.push({ target: t, isIntersecting: null }), this.apply();
                }),
                (t.prototype.disconnect = function () {
                    (this.targets = []), this.off();
                }),
                t
            );
        })();
    function Qn(t) {
        return !(!w(t, "uk-") && !w(t, "data-uk-")) && f(t.replace("data-uk-", "").replace("uk-", ""));
    }
    function ti(t) {
        this._init(t);
    }
    var ei, ni, ii, ri, oi, si, ai, ui, ci;
    function hi(t, e) {
        if (t) for (var n in t) t[n]._connected && t[n]._callUpdate(e);
    }
    function li(t, e) {
        var n = {},
            i = t.args;
        void 0 === i && (i = []);
        var r = t.props;
        void 0 === r && (r = {});
        var o,
            s = t.el;
        if (!r) return n;
        for (o in r) {
            var a = d(o),
                u = ut(s, a);
            H(u) || ((u = (r[o] === Boolean && "" === u) || fi(r[o], u)), ("target" !== a || (u && !w(u, "_"))) && (n[o] = u));
        }
        var c,
            h = Mn(ut(s, e), i);
        for (c in h) {
            var l = f(c);
            void 0 !== r[l] && (n[l] = fi(r[l], h[c]));
        }
        return n;
    }
    function di(e, n, i) {
        T(n) || (n = { name: i, handler: n });
        var t = n.name,
            r = n.el,
            o = n.handler,
            s = n.capture,
            a = n.passive,
            u = n.delegate,
            c = n.filter,
            h = n.self,
            r = $(r) ? r.call(e) : r || e.$el;
        k(r)
            ? r.forEach(function (t) {
                  return di(e, G({}, n, { el: t }), i);
              })
            : !r || (c && !c.call(e)) || e._events.push(Xt(r, t, u ? (z(u) ? u : u.call(e)) : null, z(o) ? e[o] : o.bind(e), { passive: a, capture: s, self: h }));
    }
    function fi(t, e) {
        return t === Boolean ? L(e) : t === Number ? j(e) : "list" === t ? q(e) : t ? t(e) : e;
    }
    (ti.util = Object.freeze({
        __proto__: null,
        ajax: de,
        getImage: fe,
        transition: Ze,
        Transition: Qe,
        animate: en,
        Animation: rn,
        attr: ot,
        hasAttr: st,
        removeAttr: at,
        data: ut,
        addClass: ze,
        removeClass: Be,
        removeClasses: Pe,
        replaceClass: Oe,
        hasClass: He,
        toggleClass: Le,
        positionAt: sn,
        offset: an,
        position: cn,
        offsetPosition: hn,
        height: ln,
        width: dn,
        boxModelAdjust: pn,
        flipPosition: wn,
        toPx: bn,
        ready: pe,
        index: ge,
        getIndex: me,
        empty: ve,
        html: we,
        prepend: function (e, t) {
            return (e = Ne(e)).hasChildNodes()
                ? ke(t, function (t) {
                      return e.insertBefore(t, e.firstChild);
                  })
                : be(e, t);
        },
        append: be,
        before: xe,
        after: ye,
        remove: $e,
        wrapAll: Ie,
        wrapInner: Se,
        unwrap: Te,
        fragment: Ce,
        apply: Ae,
        $: Ne,
        $$: Me,
        inBrowser: ct,
        isIE: ht,
        isRtl: lt,
        hasTouch: pt,
        pointerDown: gt,
        pointerMove: mt,
        pointerUp: vt,
        pointerEnter: wt,
        pointerLeave: bt,
        pointerCancel: xt,
        on: Xt,
        off: Gt,
        once: Jt,
        trigger: Kt,
        createEvent: Zt,
        toEventTargets: ie,
        isTouch: re,
        getEventPos: oe,
        fastdom: yn,
        isVoidElement: jt,
        isVisible: Ft,
        selInput: Wt,
        isInput: Vt,
        filter: Rt,
        within: qt,
        parents: Ut,
        children: Yt,
        hasOwn: l,
        hyphenate: d,
        camelize: f,
        ucfirst: p,
        startsWith: w,
        endsWith: c,
        includes: b,
        findIndex: y,
        isArray: k,
        isFunction: $,
        isObject: I,
        isPlainObject: T,
        isWindow: E,
        isDocument: _,
        isJQuery: C,
        isNode: A,
        isElement: N,
        isNodeCollection: M,
        isBoolean: D,
        isString: z,
        isNumber: B,
        isNumeric: P,
        isEmpty: O,
        isUndefined: H,
        toBoolean: L,
        toNumber: j,
        toFloat: F,
        toNode: W,
        toNodes: V,
        toWindow: R,
        toList: q,
        toMs: U,
        isEqual: Y,
        swap: X,
        assign: G,
        last: J,
        each: K,
        sortBy: Z,
        uniqueBy: Q,
        clamp: tt,
        noop: et,
        intersectRect: nt,
        pointInRect: it,
        Dimensions: rt,
        MouseTracker: En,
        mergeOptions: Nn,
        parseOptions: Mn,
        play: Dn,
        pause: zn,
        mute: Bn,
        Promise: ae,
        Deferred: se,
        IntersectionObserver: Zn,
        query: yt,
        queryAll: kt,
        find: It,
        findAll: St,
        matches: Dt,
        closest: Bt,
        parent: Pt,
        escape: Ht,
        css: Re,
        getStyles: qe,
        getStyle: Ue,
        getCssVar: Xe,
        propName: Je,
        isInView: Rn,
        scrollTop: qn,
        scrollIntoView: Un,
        scrolledOver: Yn,
        scrollParents: Xn,
        getViewport: Gn,
    })),
        (ti.data = "__uikit__"),
        (ti.prefix = "uk-"),
        (ti.options = {}),
        (ti.version = "3.5.9"),
        (ii = (ei = ti).data),
        (ei.use = function (t) {
            if (!t.installed) return t.call(null, this), (t.installed = !0), this;
        }),
        (ei.mixin = function (t, e) {
            (e = (z(e) ? ei.component(e) : e) || this).options = Nn(e.options, t);
        }),
        (ei.extend = function (t) {
            t = t || {};
            function e(t) {
                this._init(t);
            }
            return (((e.prototype = Object.create(this.prototype)).constructor = e).options = Nn(this.options, t)), (e.super = this), (e.extend = this.extend), e;
        }),
        (ei.update = function (t, e) {
            Ut((t = t ? W(t) : document.body))
                .reverse()
                .forEach(function (t) {
                    return hi(t[ii], e);
                }),
                Ae(t, function (t) {
                    return hi(t[ii], e);
                });
        }),
        Object.defineProperty(ei, "container", {
            get: function () {
                return ni || document.body;
            },
            set: function (t) {
                ni = Ne(t);
            },
        }),
        ((ri = ti).prototype._callHook = function (t) {
            var e = this,
                n = this.$options[t];
            n &&
                n.forEach(function (t) {
                    return t.call(e);
                });
        }),
        (ri.prototype._callConnected = function () {
            this._connected ||
                ((this._data = {}),
                (this._computeds = {}),
                (this._frames = { reads: {}, writes: {} }),
                this._initProps(),
                this._callHook("beforeConnect"),
                (this._connected = !0),
                this._initEvents(),
                this._initObserver(),
                this._callHook("connected"),
                this._callUpdate());
        }),
        (ri.prototype._callDisconnected = function () {
            this._connected && (this._callHook("beforeDisconnect"), this._observer && (this._observer.disconnect(), (this._observer = null)), this._unbindEvents(), this._callHook("disconnected"), (this._connected = !1));
        }),
        (ri.prototype._callUpdate = function (t) {
            var o = this;
            void 0 === t && (t = "update");
            var s = t.type || t;
            b(["update", "resize"], s) && this._callWatches();
            var e = this.$options.update,
                n = this._frames,
                a = n.reads,
                u = n.writes;
            e &&
                e.forEach(function (t, e) {
                    var n = t.read,
                        i = t.write,
                        r = t.events;
                    ("update" !== s && !b(r, s)) ||
                        (n &&
                            !b(yn.reads, a[e]) &&
                            (a[e] = yn.read(function () {
                                var t = o._connected && n.call(o, o._data, s);
                                !1 === t && i ? yn.clear(u[e]) : T(t) && G(o._data, t);
                            })),
                        i &&
                            !b(yn.writes, u[e]) &&
                            (u[e] = yn.write(function () {
                                return o._connected && i.call(o, o._data, s);
                            })));
                });
        }),
        (ri.prototype._callWatches = function () {
            var u,
                c = this,
                h = this._frames;
            h._watch ||
                ((u = !l(h, "_watch")),
                (h._watch = yn.read(function () {
                    if (c._connected) {
                        var t,
                            e = c.$options.computed,
                            n = c._computeds;
                        for (t in e) {
                            var i = l(n, t),
                                r = n[t];
                            delete n[t];
                            var o = e[t],
                                s = o.watch,
                                a = o.immediate;
                            s && ((u && a) || (i && !Y(r, c[t]))) && s.call(c, c[t], r);
                        }
                        h._watch = null;
                    }
                })));
        }),
        (si = 0),
        ((oi = ti).prototype._init = function (t) {
            ((t = t || {}).data = (function (t, e) {
                var n = t.data,
                    i = (t.el, e.args),
                    r = e.props;
                void 0 === r && (r = {});
                if (
                    (n = k(n)
                        ? O(i)
                            ? void 0
                            : n.slice(0, i.length).reduce(function (t, e, n) {
                                  return T(e) ? G(t, e) : (t[i[n]] = e), t;
                              }, {})
                        : n)
                )
                    for (var o in n) H(n[o]) ? delete n[o] : (n[o] = r[o] ? fi(r[o], n[o]) : n[o]);
                return n;
            })(t, this.constructor.options)),
                (this.$options = Nn(this.constructor.options, t, this)),
                (this.$el = null),
                (this.$props = {}),
                (this._uid = si++),
                this._initData(),
                this._initMethods(),
                this._initComputeds(),
                this._callHook("created"),
                t.el && this.$mount(t.el);
        }),
        (oi.prototype._initData = function () {
            var t,
                e = this.$options.data;
            for (t in (void 0 === e && (e = {}), e)) this.$props[t] = this[t] = e[t];
        }),
        (oi.prototype._initMethods = function () {
            var t = this.$options.methods;
            if (t) for (var e in t) this[e] = t[e].bind(this);
        }),
        (oi.prototype._initComputeds = function () {
            var t = this.$options.computed;
            if (((this._computeds = {}), t))
                for (var e in t)
                    !(function (i, r, o) {
                        Object.defineProperty(i, r, {
                            enumerable: !0,
                            get: function () {
                                var t = i._computeds,
                                    e = i.$props,
                                    n = i.$el;
                                return l(t, r) || (t[r] = (o.get || o).call(i, e, n)), t[r];
                            },
                            set: function (t) {
                                var e = i._computeds;
                                (e[r] = o.set ? o.set.call(i, t) : t), H(e[r]) && delete e[r];
                            },
                        });
                    })(this, e, t[e]);
        }),
        (oi.prototype._initProps = function (t) {
            for (var e in (t = t || li(this.$options, this.$name))) H(t[e]) || (this.$props[e] = t[e]);
            var n = [this.$options.computed, this.$options.methods];
            for (e in this.$props)
                e in t &&
                    (function (t, e) {
                        return t.every(function (t) {
                            return !t || !l(t, e);
                        });
                    })(n, e) &&
                    (this[e] = this.$props[e]);
        }),
        (oi.prototype._initEvents = function () {
            var n = this;
            this._events = [];
            var t = this.$options.events;
            t &&
                t.forEach(function (t) {
                    if (l(t, "handler")) di(n, t);
                    else for (var e in t) di(n, t[e], e);
                });
        }),
        (oi.prototype._unbindEvents = function () {
            this._events.forEach(function (t) {
                return t();
            }),
                delete this._events;
        }),
        (oi.prototype._initObserver = function () {
            var t,
                r = this,
                e = this.$options,
                o = e.attrs,
                n = e.props,
                i = e.el;
            !this._observer &&
                n &&
                !1 !== o &&
                ((o = k(o) ? o : Object.keys(n)),
                (this._observer = new MutationObserver(function (t) {
                    var i = li(r.$options, r.$name);
                    t.some(function (t) {
                        var e = t.attributeName,
                            n = e.replace("data-", "");
                        return (n === r.$name ? o : [f(n), f(e)]).some(function (t) {
                            return !H(i[t]) && i[t] !== r.$props[t];
                        });
                    }) && r.$reset();
                })),
                (t = o.map(d).concat(this.$name)),
                this._observer.observe(i, {
                    attributes: !0,
                    attributeFilter: t.concat(
                        t.map(function (t) {
                            return "data-" + t;
                        })
                    ),
                }));
        }),
        (ui = (ai = ti).data),
        (ci = {}),
        (ai.component = function (s, t) {
            var e = d(s);
            if (((s = f(e)), !t)) return T(ci[s]) && (ci[s] = ai.extend(ci[s])), ci[s];
            ai[s] = function (t, n) {
                for (var e = arguments.length, i = Array(e); e--; ) i[e] = arguments[e];
                var r = ai.component(s);
                return r.options.functional ? new r({ data: T(t) ? t : [].concat(i) }) : t ? Me(t).map(o)[0] : o(t);
                function o(t) {
                    var e = ai.getComponent(t, s);
                    if (e) {
                        if (!n) return e;
                        e.$destroy();
                    }
                    return new r({ el: t, data: n });
                }
            };
            var n = T(t) ? G({}, t) : t.options;
            return (
                (n.name = s),
                n.install && n.install(ai, n, s),
                ai._initialized &&
                    !n.functional &&
                    yn.read(function () {
                        return ai[s]("[uk-" + e + "],[data-uk-" + e + "]");
                    }),
                (ci[s] = T(t) ? n : t)
            );
        }),
        (ai.getComponents = function (t) {
            return (t && t[ui]) || {};
        }),
        (ai.getComponent = function (t, e) {
            return ai.getComponents(t)[e];
        }),
        (ai.connect = function (t) {
            if (t[ui]) for (var e in t[ui]) t[ui][e]._callConnected();
            for (var n = 0; n < t.attributes.length; n++) {
                var i = Qn(t.attributes[n].name);
                i && i in ci && ai[i](t);
            }
        }),
        (ai.disconnect = function (t) {
            for (var e in t[ui]) t[ui][e]._callDisconnected();
        }),
        (function (i) {
            var r = i.data;
            (i.prototype.$create = function (t, e, n) {
                return i[t](e, n);
            }),
                (i.prototype.$mount = function (t) {
                    var e = this.$options.name;
                    t[r] || (t[r] = {}), t[r][e] || (((t[r][e] = this).$el = this.$options.el = this.$options.el || t), qt(t, document) && this._callConnected());
                }),
                (i.prototype.$reset = function () {
                    this._callDisconnected(), this._callConnected();
                }),
                (i.prototype.$destroy = function (t) {
                    void 0 === t && (t = !1);
                    var e = this.$options,
                        n = e.el,
                        i = e.name;
                    n && this._callDisconnected(), this._callHook("destroy"), n && n[r] && (delete n[r][i], O(n[r]) || delete n[r], t && $e(this.$el));
                }),
                (i.prototype.$emit = function (t) {
                    this._callUpdate(t);
                }),
                (i.prototype.$update = function (t, e) {
                    void 0 === t && (t = this.$el), i.update(t, e);
                }),
                (i.prototype.$getComponent = i.getComponent);
            var e = {};
            Object.defineProperties(i.prototype, {
                $container: Object.getOwnPropertyDescriptor(i, "container"),
                $name: {
                    get: function () {
                        var t = this.$options.name;
                        return e[t] || (e[t] = i.prefix + d(t)), e[t];
                    },
                },
            });
        })(ti);
    var pi = {
            connected: function () {
                He(this.$el, this.$name) || ze(this.$el, this.$name);
            },
        },
        gi = {
            props: { cls: Boolean, animation: "list", duration: Number, origin: String, transition: String },
            data: {
                cls: !1,
                animation: [!1],
                duration: 200,
                origin: !1,
                transition: "linear",
                initProps: { overflow: "", height: "", paddingTop: "", paddingBottom: "", marginTop: "", marginBottom: "" },
                hideProps: { overflow: "hidden", height: 0, paddingTop: 0, paddingBottom: 0, marginTop: 0, marginBottom: 0 },
            },
            computed: {
                hasAnimation: function (t) {
                    return !!t.animation[0];
                },
                hasTransition: function (t) {
                    var e = t.animation;
                    return this.hasAnimation && !0 === e[0];
                },
            },
            methods: {
                toggleElement: function (t, n, i) {
                    var r = this;
                    return ae.all(
                        V(t).map(function (e) {
                            return new ae(function (t) {
                                return r._toggleElement(e, n, i).then(t, et);
                            });
                        })
                    );
                },
                isToggled: function (t) {
                    var e = V(t || this.$el);
                    return this.cls ? He(e, this.cls.split(" ")[0]) : !st(e, "hidden");
                },
                updateAria: function (t) {
                    !1 === this.cls && ot(t, "aria-hidden", !this.isToggled(t));
                },
                _toggleElement: function (t, e, n) {
                    var i = this;
                    if (((e = D(e) ? e : rn.inProgress(t) ? He(t, "uk-animation-leave") : Qe.inProgress(t) ? "0px" === t.style.height : !this.isToggled(t)), !Kt(t, "before" + (e ? "show" : "hide"), [this]))) return ae.reject();
                    var o,
                        r = ($(n)
                            ? n
                            : !1 !== n && this.hasAnimation
                            ? this.hasTransition
                                ? mi(this)
                                : ((o = this),
                                  function (t, e) {
                                      rn.cancel(t);
                                      var n = o.animation,
                                          i = o.duration,
                                          r = o._toggle;
                                      return e
                                          ? (r(t, !0), rn.in(t, n[0], i, o.origin))
                                          : rn.out(t, n[1] || n[0], i, o.origin).then(function () {
                                                return r(t, !1);
                                            });
                                  })
                            : this._toggle)(t, e);
                    Kt(t, e ? "show" : "hide", [this]);
                    return (r || ae.resolve()).then(function () {
                        Kt(t, e ? "shown" : "hidden", [i]), i.$update(t);
                    });
                },
                _toggle: function (t, e) {
                    var n;
                    t &&
                        ((e = Boolean(e)),
                        this.cls ? (n = b(this.cls, " ") || e !== He(t, this.cls)) && Le(t, this.cls, b(this.cls, " ") ? void 0 : e) : (n = e === t.hidden) && (t.hidden = !e),
                        Me("[autofocus]", t).some(function (t) {
                            return Ft(t) ? t.focus() || !0 : t.blur();
                        }),
                        this.updateAria(t),
                        n && (Kt(t, "toggled", [this]), this.$update(t)));
                },
            },
        };
    function mi(t) {
        var s = t.isToggled,
            a = t.duration,
            u = t.initProps,
            c = t.hideProps,
            h = t.transition,
            l = t._toggle;
        return function (t, e) {
            var n = Qe.inProgress(t),
                i = t.hasChildNodes ? F(Re(t.firstElementChild, "marginTop")) + F(Re(t.lastElementChild, "marginBottom")) : 0,
                r = Ft(t) ? ln(t) + (n ? 0 : i) : 0;
            Qe.cancel(t), s(t) || l(t, !0), ln(t, ""), yn.flush();
            var o = ln(t) + (n ? 0 : i);
            return (
                ln(t, r),
                (e
                    ? Qe.start(t, G({}, u, { overflow: "hidden", height: o }), Math.round(a * (1 - r / o)), h)
                    : Qe.start(t, c, Math.round(a * (r / o)), h).then(function () {
                          return l(t, !1);
                      })
                ).then(function () {
                    return Re(t, u);
                })
            );
        };
    }
    var vi = {
        mixins: [pi, gi],
        props: { targets: String, active: null, collapsible: Boolean, multiple: Boolean, toggle: String, content: String, transition: String, offset: Number },
        data: { targets: "> *", active: !1, animation: [!0], collapsible: !0, multiple: !1, clsOpen: "uk-open", toggle: "> .uk-accordion-title", content: "> .uk-accordion-content", transition: "ease", offset: 0 },
        computed: {
            items: {
                get: function (t, e) {
                    return Me(t.targets, e);
                },
                watch: function (t, e) {
                    var n,
                        i = this;
                    t.forEach(function (t) {
                        return wi(Ne(i.content, t), !He(t, i.clsOpen));
                    }),
                        e || He(t, this.clsOpen) || ((n = (!1 !== this.active && t[Number(this.active)]) || (!this.collapsible && t[0])) && this.toggle(n, !1));
                },
                immediate: !0,
            },
        },
        events: [
            {
                name: "click",
                delegate: function () {
                    return this.targets + " " + this.$props.toggle;
                },
                handler: function (t) {
                    t.preventDefault(), this.toggle(ge(Me(this.targets + " " + this.$props.toggle, this.$el), t.current));
                },
            },
        ],
        methods: {
            toggle: function (t, r) {
                var o = this,
                    e = [this.items[me(t, this.items)]],
                    n = Rt(this.items, "." + this.clsOpen);
                this.multiple || b(n, e[0]) || (e = e.concat(n)),
                    (!this.collapsible && n.length < 2 && !Rt(e, ":not(." + this.clsOpen + ")").length) ||
                        e.forEach(function (t) {
                            return o.toggleElement(t, !He(t, o.clsOpen), function (e, n) {
                                Le(e, o.clsOpen, n);
                                var i = Ne((e._wrapper ? "> * " : "") + o.content, e);
                                if (!1 !== r && o.hasTransition)
                                    return (
                                        e._wrapper || (e._wrapper = Ie(i, "<div" + (n ? " hidden" : "") + ">")),
                                        wi(i, !1),
                                        mi(o)(e._wrapper, n).then(function () {
                                            var t;
                                            wi(i, !n), delete e._wrapper, Te(i), n && (Rn((t = Ne(o.$props.toggle, e))) || Un(t, { offset: o.offset }));
                                        })
                                    );
                                wi(i, !n);
                            });
                        });
            },
        },
    };
    function wi(t, e) {
        t && (t.hidden = e);
    }
    var bi = {
            mixins: [pi, gi],
            args: "animation",
            props: { close: String },
            data: { animation: [!0], selClose: ".uk-alert-close", duration: 150, hideProps: G({ opacity: 0 }, gi.data.hideProps) },
            events: [
                {
                    name: "click",
                    delegate: function () {
                        return this.selClose;
                    },
                    handler: function (t) {
                        t.preventDefault(), this.close();
                    },
                },
            ],
            methods: {
                close: function () {
                    var t = this;
                    this.toggleElement(this.$el).then(function () {
                        return t.$destroy(!0);
                    });
                },
            },
        },
        xi = {
            args: "autoplay",
            props: { automute: Boolean, autoplay: Boolean },
            data: { automute: !1, autoplay: !0 },
            computed: {
                inView: function (t) {
                    return "inview" === t.autoplay;
                },
            },
            connected: function () {
                this.inView && !st(this.$el, "preload") && (this.$el.preload = "none"), this.automute && Bn(this.$el);
            },
            update: {
                read: function () {
                    return { visible: Ft(this.$el) && "hidden" !== Re(this.$el, "visibility"), inView: this.inView && Rn(this.$el) };
                },
                write: function (t) {
                    var e = t.visible,
                        n = t.inView;
                    !e || (this.inView && !n) ? zn(this.$el) : (!0 === this.autoplay || (this.inView && n)) && Dn(this.$el);
                },
                events: ["resize", "scroll"],
            },
        },
        yi = {
            mixins: [pi, xi],
            props: { width: Number, height: Number },
            data: { automute: !0 },
            update: {
                read: function () {
                    var t = this.$el,
                        e =
                            (function (t) {
                                for (; (t = Pt(t)); ) if ("static" !== Re(t, "position")) return t;
                            })(t) || t.parentNode,
                        n = e.offsetHeight,
                        i = e.offsetWidth,
                        r = rt.cover(
                            { width: this.width || t.naturalWidth || t.videoWidth || t.clientWidth, height: this.height || t.naturalHeight || t.videoHeight || t.clientHeight },
                            { width: i + (i % 2 ? 1 : 0), height: n + (n % 2 ? 1 : 0) }
                        );
                    return !(!r.width || !r.height) && r;
                },
                write: function (t) {
                    var e = t.height,
                        n = t.width;
                    Re(this.$el, { height: e, width: n });
                },
                events: ["resize"],
            },
        };
    var ki,
        $i = {
            props: { pos: String, offset: null, flip: Boolean, clsPos: String },
            data: { pos: "bottom-" + (lt ? "right" : "left"), flip: !0, offset: !1, clsPos: "" },
            computed: {
                pos: function (t) {
                    var e = t.pos;
                    return (e + (b(e, "-") ? "" : "-center")).split("-");
                },
                dir: function () {
                    return this.pos[0];
                },
                align: function () {
                    return this.pos[1];
                },
            },
            methods: {
                positionAt: function (t, e, n) {
                    var i;
                    Pe(t, this.clsPos + "-(top|bottom|left|right)(-[a-z]+)?");
                    var r = this.offset,
                        o = this.getAxis();
                    P(r) || (r = (i = Ne(r)) ? an(i)["x" === o ? "left" : "top"] - an(e)["x" === o ? "right" : "bottom"] : 0);
                    var s = sn(
                            t,
                            e,
                            "x" === o ? wn(this.dir) + " " + this.align : this.align + " " + wn(this.dir),
                            "x" === o ? this.dir + " " + this.align : this.align + " " + this.dir,
                            "x" === o ? "" + ("left" === this.dir ? -r : r) : " " + ("top" === this.dir ? -r : r),
                            null,
                            this.flip,
                            n
                        ).target,
                        a = s.x,
                        u = s.y;
                    (this.dir = "x" === o ? a : u), (this.align = "x" === o ? u : a), Le(t, this.clsPos + "-" + this.dir + "-" + this.align, !1 === this.offset);
                },
                getAxis: function () {
                    return "top" === this.dir || "bottom" === this.dir ? "y" : "x";
                },
            },
        },
        Ii = {
            mixins: [$i, gi],
            args: "pos",
            props: { mode: "list", toggle: Boolean, boundary: Boolean, boundaryAlign: Boolean, delayShow: Number, delayHide: Number, clsDrop: String },
            data: { mode: ["click", "hover"], toggle: "- *", boundary: ct && window, boundaryAlign: !1, delayShow: 0, delayHide: 800, clsDrop: !1, animation: ["uk-animation-fade"], cls: "uk-open" },
            computed: {
                boundary: function (t, e) {
                    return yt(t.boundary, e);
                },
                clsDrop: function (t) {
                    return t.clsDrop || "uk-" + this.$options.name;
                },
                clsPos: function () {
                    return this.clsDrop;
                },
            },
            created: function () {
                this.tracker = new En();
            },
            connected: function () {
                ze(this.$el, this.clsDrop);
                var t = this.$props.toggle;
                (this.toggle = t && this.$create("toggle", yt(t, this.$el), { target: this.$el, mode: this.mode })), this.toggle || Kt(this.$el, "updatearia");
            },
            disconnected: function () {
                this.isActive() && (ki = null);
            },
            events: [
                {
                    name: "click",
                    delegate: function () {
                        return "." + this.clsDrop + "-close";
                    },
                    handler: function (t) {
                        t.preventDefault(), this.hide(!1);
                    },
                },
                {
                    name: "click",
                    delegate: function () {
                        return 'a[href^="#"]';
                    },
                    handler: function (t) {
                        var e = t.defaultPrevented,
                            n = t.current.hash;
                        e || !n || qt(n, this.$el) || this.hide(!1);
                    },
                },
                {
                    name: "beforescroll",
                    handler: function () {
                        this.hide(!1);
                    },
                },
                {
                    name: "toggle",
                    self: !0,
                    handler: function (t, e) {
                        t.preventDefault(), this.isToggled() ? this.hide(!1) : this.show(e, !1);
                    },
                },
                {
                    name: "toggleshow",
                    self: !0,
                    handler: function (t, e) {
                        t.preventDefault(), this.show(e);
                    },
                },
                {
                    name: "togglehide",
                    self: !0,
                    handler: function (t) {
                        t.preventDefault(), this.hide();
                    },
                },
                {
                    name: wt,
                    filter: function () {
                        return b(this.mode, "hover");
                    },
                    handler: function (t) {
                        re(t) || this.clearTimers();
                    },
                },
                {
                    name: bt,
                    filter: function () {
                        return b(this.mode, "hover");
                    },
                    handler: function (t) {
                        !re(t) && t.relatedTarget && this.hide();
                    },
                },
                {
                    name: "toggled",
                    self: !0,
                    handler: function () {
                        this.isToggled() && (this.clearTimers(), this.position());
                    },
                },
                {
                    name: "show",
                    self: !0,
                    handler: function () {
                        var o = this;
                        (ki = this).tracker.init(),
                            Kt(this.$el, "updatearia"),
                            Jt(
                                this.$el,
                                "hide",
                                Xt(document, gt, function (t) {
                                    var r = t.target;
                                    return (
                                        !qt(r, o.$el) &&
                                        Jt(
                                            document,
                                            vt + " " + xt + " scroll",
                                            function (t) {
                                                var e = t.defaultPrevented,
                                                    n = t.type,
                                                    i = t.target;
                                                e || n !== vt || r !== i || (o.toggle && qt(r, o.toggle.$el)) || o.hide(!1);
                                            },
                                            !0
                                        )
                                    );
                                }),
                                { self: !0 }
                            ),
                            Jt(
                                this.$el,
                                "hide",
                                Xt(document, "keydown", function (t) {
                                    27 === t.keyCode && (t.preventDefault(), o.hide(!1));
                                }),
                                { self: !0 }
                            );
                    },
                },
                {
                    name: "beforehide",
                    self: !0,
                    handler: function () {
                        this.clearTimers();
                    },
                },
                {
                    name: "hide",
                    handler: function (t) {
                        var e = t.target;
                        this.$el === e ? ((ki = this.isActive() ? null : ki), Kt(this.$el, "updatearia"), this.tracker.cancel()) : (ki = null === ki && qt(e, this.$el) && this.isToggled() ? this : ki);
                    },
                },
                {
                    name: "updatearia",
                    self: !0,
                    handler: function (t, e) {
                        t.preventDefault(), this.updateAria(this.$el), (e || this.toggle) && (ot((e || this.toggle).$el, "aria-expanded", this.isToggled()), Le(this.toggle.$el, this.cls, this.isToggled()));
                    },
                },
            ],
            update: {
                write: function () {
                    this.isToggled() && !rn.inProgress(this.$el) && this.position();
                },
                events: ["resize"],
            },
            methods: {
                show: function (t, e) {
                    var n,
                        i = this;
                    if ((void 0 === t && (t = this.toggle), void 0 === e && (e = !0), this.isToggled() && t && this.toggle && t.$el !== this.toggle.$el && this.hide(!1), (this.toggle = t), this.clearTimers(), !this.isActive())) {
                        if (ki) {
                            if (e && ki.isDelaying) return void (this.showTimer = setTimeout(this.show, 10));
                            for (; ki && n !== ki && !qt(this.$el, ki.$el); ) (n = ki).hide(!1);
                        }
                        this.showTimer = setTimeout(function () {
                            return !i.isToggled() && i.toggleElement(i.$el, !0);
                        }, (e && this.delayShow) || 0);
                    }
                },
                hide: function (t) {
                    var e = this;
                    void 0 === t && (t = !0);
                    function n() {
                        return e.toggleElement(e.$el, !1, !1);
                    }
                    var i, r;
                    this.clearTimers(),
                        (this.isDelaying =
                            ((i = this.$el),
                            (r = []),
                            Ae(i, function (t) {
                                return "static" !== Re(t, "position") && r.push(t);
                            }),
                            r.some(function (t) {
                                return e.tracker.movesTo(t);
                            }))),
                        t && this.isDelaying ? (this.hideTimer = setTimeout(this.hide, 50)) : t && this.delayHide ? (this.hideTimer = setTimeout(n, this.delayHide)) : n();
                },
                clearTimers: function () {
                    clearTimeout(this.showTimer), clearTimeout(this.hideTimer), (this.showTimer = null), (this.hideTimer = null), (this.isDelaying = !1);
                },
                isActive: function () {
                    return ki === this;
                },
                position: function () {
                    Be(this.$el, this.clsDrop + "-stack"), Le(this.$el, this.clsDrop + "-boundary", this.boundaryAlign);
                    var t,
                        e = an(this.boundary),
                        n = this.boundaryAlign ? e : an(this.toggle.$el);
                    "justify" === this.align ? ((t = "y" === this.getAxis() ? "width" : "height"), Re(this.$el, t, n[t])) : this.$el.offsetWidth > Math.max(e.right - n.left, n.right - e.left) && ze(this.$el, this.clsDrop + "-stack"),
                        this.positionAt(this.$el, this.boundaryAlign ? this.boundary : this.toggle.$el, this.boundary);
                },
            },
        };
    var Si = {
            mixins: [pi],
            args: "target",
            props: { target: Boolean },
            data: { target: !1 },
            computed: {
                input: function (t, e) {
                    return Ne(Wt, e);
                },
                state: function () {
                    return this.input.nextElementSibling;
                },
                target: function (t, e) {
                    var n = t.target;
                    return n && ((!0 === n && this.input.parentNode === e && this.input.nextElementSibling) || yt(n, e));
                },
            },
            update: function () {
                var t,
                    e,
                    n,
                    i = this.target,
                    r = this.input;
                !i ||
                    (i[(e = Vt(i) ? "value" : "textContent")] !==
                        (n =
                            r.files && r.files[0]
                                ? r.files[0].name
                                : Dt(r, "select") &&
                                  (t = Me("option", r).filter(function (t) {
                                      return t.selected;
                                  })[0])
                                ? t.textContent
                                : r.value) &&
                        (i[e] = n));
            },
            events: [
                {
                    name: "change",
                    handler: function () {
                        this.$update();
                    },
                },
                {
                    name: "reset",
                    el: function () {
                        return Bt(this.$el, "form");
                    },
                    handler: function () {
                        this.$update();
                    },
                },
            ],
        },
        Ti = {
            update: {
                read: function (t) {
                    var e = Rn(this.$el);
                    if (!e || t.isInView === e) return !1;
                    t.isInView = e;
                },
                write: function () {
                    this.$el.src = "" + this.$el.src;
                },
                events: ["scroll", "resize"],
            },
        },
        Ei = {
            props: { margin: String, firstColumn: Boolean },
            data: { margin: "uk-margin-small-top", firstColumn: "uk-first-column" },
            update: {
                read: function () {
                    var n,
                        t = _i(this.$el.children);
                    return {
                        rows: t,
                        columns:
                            ((n = [[]]),
                            t.forEach(function (t) {
                                return Ci(t, "left", "right").forEach(function (t, e) {
                                    return (n[e] = n[e] ? n[e].concat(t) : t);
                                });
                            }),
                            lt ? n.reverse() : n),
                    };
                },
                write: function (t) {
                    var n = this,
                        i = t.columns;
                    t.rows.forEach(function (t, e) {
                        return t.forEach(function (t) {
                            Le(t, n.margin, 0 !== e), Le(t, n.firstColumn, b(i[0], t));
                        });
                    });
                },
                events: ["resize"],
            },
        };
    function _i(t) {
        return Ci(t, "top", "bottom");
    }
    function Ci(t, e, n) {
        for (var i = [[]], r = 0; r < t.length; r++) {
            var o = t[r];
            if (Ft(o))
                for (var s = Ai(o), a = i.length - 1; 0 <= a; a--) {
                    var u = i[a];
                    if (!u[0]) {
                        u.push(o);
                        break;
                    }
                    var c = void 0,
                        c = u[0].offsetParent === o.offsetParent ? Ai(u[0]) : ((s = Ai(o, !0)), Ai(u[0], !0));
                    if (s[e] >= c[n] - 1 && s[e] !== c[e]) {
                        i.push([o]);
                        break;
                    }
                    if (s[n] - 1 > c[e] || s[e] === c[e]) {
                        u.push(o);
                        break;
                    }
                    if (0 === a) {
                        i.unshift([o]);
                        break;
                    }
                }
        }
        return i;
    }
    function Ai(t, e) {
        var n;
        void 0 === e && (e = !1);
        var i = t.offsetTop,
            r = t.offsetLeft,
            o = t.offsetHeight,
            s = t.offsetWidth;
        return e && ((i = (n = hn(t))[0]), (r = n[1])), { top: i, left: r, bottom: i + o, right: r + s };
    }
    var Ni = {
        extends: Ei,
        mixins: [pi],
        name: "grid",
        props: { masonry: Boolean, parallax: Number },
        data: { margin: "uk-grid-margin", clsStack: "uk-grid-stack", masonry: !1, parallax: 0 },
        connected: function () {
            this.masonry && ze(this.$el, "uk-flex-top uk-flex-wrap-top");
        },
        update: [
            {
                write: function (t) {
                    var e = t.columns;
                    Le(this.$el, this.clsStack, e.length < 2);
                },
                events: ["resize"],
            },
            {
                read: function (t) {
                    var e = t.columns,
                        n = t.rows,
                        i = Yt(this.$el);
                    if (!i.length || (!this.masonry && !this.parallax)) return !1;
                    var r,
                        o,
                        s,
                        a,
                        u,
                        c = i.some(Qe.inProgress),
                        h = !1,
                        l = e.map(function (t) {
                            return t.reduce(function (t, e) {
                                return t + e.offsetHeight;
                            }, 0);
                        }),
                        d =
                            ((r = i),
                            (o = this.margin),
                            F(
                                (s = r.filter(function (t) {
                                    return He(t, o);
                                })[0])
                                    ? Re(s, "marginTop")
                                    : Re(r[0], "paddingLeft")
                            ) *
                                (n.length - 1)),
                        f = Math.max.apply(Math, l) + d;
                    this.masonry &&
                        ((e = e.map(function (t) {
                            return Z(t, "offsetTop");
                        })),
                        (a = e),
                        (u = n.map(function (t) {
                            return Math.max.apply(
                                Math,
                                t.map(function (t) {
                                    return t.offsetHeight;
                                })
                            );
                        })),
                        (h = a.map(function (n) {
                            var i = 0;
                            return n.map(function (t, e) {
                                return (i += e ? u[e - 1] - n[e - 1].offsetHeight : 0);
                            });
                        })));
                    var p = Math.abs(this.parallax);
                    return {
                        padding: (p =
                            p &&
                            l.reduce(function (t, e, n) {
                                return Math.max(t, e + d + (n % 2 ? p : p / 8) - f);
                            }, 0)),
                        columns: e,
                        translates: h,
                        height: !c && (this.masonry ? f : ""),
                    };
                },
                write: function (t) {
                    var e = t.height,
                        n = t.padding;
                    Re(this.$el, "paddingBottom", n || ""), !1 !== e && Re(this.$el, "height", e);
                },
                events: ["resize"],
            },
            {
                read: function (t) {
                    var e = t.height;
                    return { scrolled: !!this.parallax && Yn(this.$el, e ? e - ln(this.$el) : 0) * Math.abs(this.parallax) };
                },
                write: function (t) {
                    var e = t.columns,
                        i = t.scrolled,
                        r = t.translates;
                    (!1 === i && !r) ||
                        e.forEach(function (t, n) {
                            return t.forEach(function (t, e) {
                                return Re(t, "transform", i || r ? "translateY(" + ((r && -r[n][e]) + (i ? (n % 2 ? i : i / 8) : 0)) + "px)" : "");
                            });
                        });
                },
                events: ["scroll", "resize"],
            },
        ],
    };
    var Mi = ht
            ? {
                  props: { selMinHeight: String },
                  data: { selMinHeight: !1, forceHeight: !1 },
                  computed: {
                      elements: function (t, e) {
                          var n = t.selMinHeight;
                          return n ? Me(n, e) : [e];
                      },
                  },
                  update: [
                      {
                          read: function () {
                              Re(this.elements, "height", "");
                          },
                          order: -5,
                          events: ["resize"],
                      },
                      {
                          write: function () {
                              var n = this;
                              this.elements.forEach(function (t) {
                                  var e = F(Re(t, "minHeight"));
                                  e && (n.forceHeight || Math.round(e + pn(t, "height", "content-box")) >= t.offsetHeight) && Re(t, "height", e);
                              });
                          },
                          order: 5,
                          events: ["resize"],
                      },
                  ],
              }
            : {},
        Di = {
            mixins: [Mi],
            args: "target",
            props: { target: String, row: Boolean },
            data: { target: "> *", row: !0, forceHeight: !0 },
            computed: {
                elements: function (t, e) {
                    return Me(t.target, e);
                },
            },
            update: {
                read: function () {
                    return { rows: (this.row ? _i(this.elements) : [this.elements]).map(zi) };
                },
                write: function (t) {
                    t.rows.forEach(function (t) {
                        var n = t.heights;
                        return t.elements.forEach(function (t, e) {
                            return Re(t, "minHeight", n[e]);
                        });
                    });
                },
                events: ["resize"],
            },
        };
    function zi(t) {
        var e;
        if (t.length < 2) return { heights: [""], elements: t };
        var n = Bi(t),
            i = n.heights,
            r = n.max,
            o = t.some(function (t) {
                return t.style.minHeight;
            }),
            s = t.some(function (t, e) {
                return !t.style.minHeight && i[e] < r;
            });
        return (
            o && s && (Re(t, "minHeight", ""), (e = Bi(t)), (i = e.heights), (r = e.max)),
            {
                heights: (i = t.map(function (t, e) {
                    return i[e] === r && F(t.style.minHeight).toFixed(2) !== r.toFixed(2) ? "" : r;
                })),
                elements: t,
            }
        );
    }
    function Bi(t) {
        var e = t.map(function (t) {
            return an(t).height - pn(t, "height", "content-box");
        });
        return { heights: e, max: Math.max.apply(null, e) };
    }
    var Pi = {
        mixins: [Mi],
        props: { expand: Boolean, offsetTop: Boolean, offsetBottom: Boolean, minHeight: Number },
        data: { expand: !1, offsetTop: !1, offsetBottom: !1, minHeight: 0 },
        update: {
            read: function (t) {
                var e = t.minHeight;
                if (!Ft(this.$el)) return !1;
                var n = "",
                    i = pn(this.$el, "height", "content-box");
                if (this.expand) {
                    if (((this.$el.dataset.heightExpand = ""), Ne("[data-height-expand]") !== this.$el)) return !1;
                    n = ln(window) - (Oi(document.documentElement) - Oi(this.$el)) - i || "";
                } else {
                    var r,
                        n = "calc(100vh";
                    this.offsetTop && (n += 0 < (r = an(this.$el).top) && r < ln(window) / 2 ? " - " + r + "px" : ""),
                        !0 === this.offsetBottom
                            ? (n += " - " + Oi(this.$el.nextElementSibling) + "px")
                            : P(this.offsetBottom)
                            ? (n += " - " + this.offsetBottom + "vh")
                            : this.offsetBottom && c(this.offsetBottom, "px")
                            ? (n += " - " + F(this.offsetBottom) + "px")
                            : z(this.offsetBottom) && (n += " - " + Oi(yt(this.offsetBottom, this.$el)) + "px"),
                        (n += (i ? " - " + i + "px" : "") + ")");
                }
                return { minHeight: n, prev: e };
            },
            write: function (t) {
                var e = t.minHeight,
                    n = t.prev;
                Re(this.$el, { minHeight: e }), e !== n && this.$update(this.$el, "resize"), this.minHeight && F(Re(this.$el, "minHeight")) < this.minHeight && Re(this.$el, "minHeight", this.minHeight);
            },
            events: ["resize"],
        },
    };
    function Oi(t) {
        return (t && an(t).height) || 0;
    }
    var Hi = {
            args: "src",
            props: { id: Boolean, icon: String, src: String, style: String, width: Number, height: Number, ratio: Number, class: String, strokeAnimation: Boolean, focusable: Boolean, attributes: "list" },
            data: { ratio: 1, include: ["style", "class", "focusable"], class: "", strokeAnimation: !1 },
            beforeConnect: function () {
                this.class += " uk-svg";
            },
            connected: function () {
                var t,
                    e = this;
                !this.icon && b(this.src, "#") && ((t = this.src.split("#")), (this.src = t[0]), (this.icon = t[1])),
                    (this.svg = this.getSvg().then(function (t) {
                        return (
                            e.applyAttributes(t),
                            (e.svgEl = (function (t, e) {
                                if (jt(e) || "CANVAS" === e.tagName) {
                                    e.hidden = !0;
                                    var n = e.nextElementSibling;
                                    return Vi(t, n) ? n : ye(e, t);
                                }
                                var i = e.lastElementChild;
                                return Vi(t, i) ? i : be(e, t);
                            })(t, e.$el))
                        );
                    }, et));
            },
            disconnected: function () {
                var e = this;
                jt(this.$el) && (this.$el.hidden = !1),
                    this.svg &&
                        this.svg.then(function (t) {
                            return (!e._connected || t !== e.svgEl) && $e(t);
                        }, et),
                    (this.svg = this.svgEl = null);
            },
            update: {
                read: function () {
                    return !!(this.strokeAnimation && this.svgEl && Ft(this.svgEl));
                },
                write: function () {
                    var t, e;
                    (t = this.svgEl), (e = Wi(t)) && t.style.setProperty("--uk-animation-stroke", e);
                },
                type: ["resize"],
            },
            methods: {
                getSvg: function () {
                    var e = this;
                    return (function (n) {
                        if (Li[n]) return Li[n];
                        return (Li[n] = new ae(function (e, t) {
                            n
                                ? w(n, "data:")
                                    ? e(decodeURIComponent(n.split(",")[1]))
                                    : de(n).then(
                                          function (t) {
                                              return e(t.response);
                                          },
                                          function () {
                                              return t("SVG not found.");
                                          }
                                      )
                                : t();
                        }));
                    })(this.src).then(function (t) {
                        return (
                            (function (t, e) {
                                e &&
                                    b(t, "<symbol") &&
                                    (t =
                                        (function (t, e) {
                                            if (!Fi[t]) {
                                                var n;
                                                for (Fi[t] = {}, ji.lastIndex = 0; (n = ji.exec(t)); ) Fi[t][n[3]] = '<svg xmlns="http://www.w3.org/2000/svg"' + n[1] + "svg>";
                                            }
                                            return Fi[t][e];
                                        })(t, e) || t);
                                return (t = Ne(t.substr(t.indexOf("<svg")))) && t.hasChildNodes() && t;
                            })(t, e.icon) || ae.reject("SVG not found.")
                        );
                    });
                },
                applyAttributes: function (n) {
                    var t,
                        e,
                        i = this;
                    for (t in this.$options.props) this[t] && b(this.include, t) && ot(n, t, this[t]);
                    for (e in this.attributes) {
                        var r = this.attributes[e].split(":", 2),
                            o = r[0],
                            s = r[1];
                        ot(n, o, s);
                    }
                    this.id || at(n, "id");
                    var a = ["width", "height"],
                        u = [this.width, this.height];
                    u.some(function (t) {
                        return t;
                    }) ||
                        (u = a.map(function (t) {
                            return ot(n, t);
                        }));
                    var c = ot(n, "viewBox");
                    c &&
                        !u.some(function (t) {
                            return t;
                        }) &&
                        (u = c.split(" ").slice(2)),
                        u.forEach(function (t, e) {
                            (t = (0 | t) * i.ratio) && ot(n, a[e], t), t && !u[1 ^ e] && at(n, a[1 ^ e]);
                        }),
                        ot(n, "data-svg", this.icon || this.src);
                },
            },
        },
        Li = {};
    var ji = /<symbol([^]*?id=(['"])(.+?)\2[^]*?<\/)symbol>/g,
        Fi = {};
    function Wi(t) {
        return Math.ceil(
            Math.max.apply(
                Math,
                [0].concat(
                    Me("[stroke]", t).map(function (t) {
                        try {
                            return t.getTotalLength();
                        } catch (t) {
                            return 0;
                        }
                    })
                )
            )
        );
    }
    function Vi(t, e) {
        return ot(t, "data-svg") === ot(e, "data-svg");
    }
    var Ri = {
            spinner: '<svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" cx="15" cy="15" r="14"/></svg>',
            totop: '<svg width="18" height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.2" points="1 9 9 1 17 9 "/></svg>',
            marker: '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect x="9" y="4" width="1" height="11"/><rect x="4" y="9" width="11" height="1"/></svg>',
            "close-icon":
                '<svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"/><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"/></svg>',
            "close-large":
                '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.4" x1="1" y1="1" x2="19" y2="19"/><line fill="none" stroke="#000" stroke-width="1.4" x1="19" y1="1" x2="1" y2="19"/></svg>',
            "navbar-toggle-icon": '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect y="9" width="20" height="2"/><rect y="3" width="20" height="2"/><rect y="15" width="20" height="2"/></svg>',
            "overlay-icon": '<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><rect x="19" y="0" width="1" height="40"/><rect x="0" y="19" width="40" height="1"/></svg>',
            "pagination-next": '<svg width="7" height="12" viewBox="0 0 7 12" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.2" points="1 1 6 6 1 11"/></svg>',
            "pagination-previous": '<svg width="7" height="12" viewBox="0 0 7 12" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.2" points="6 1 1 6 6 11"/></svg>',
            "search-icon":
                '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9" cy="9" r="7"/><path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z"/></svg>',
            "search-large":
                '<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.8" cx="17.5" cy="17.5" r="16.5"/><line fill="none" stroke="#000" stroke-width="1.8" x1="38" y1="39" x2="29" y2="30"/></svg>',
            "search-navbar":
                '<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="10.5" cy="10.5" r="9.5"/><line fill="none" stroke="#000" stroke-width="1.1" x1="23" y1="23" x2="17" y2="17"/></svg>',
            "slidenav-next": '<svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "/></svg>',
            "slidenav-next-large": '<svg width="25px" height="40px" viewBox="0 0 25 40" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="2" points="4.002,38.547 22.527,20.024 4,1.5 "/></svg>',
            "slidenav-previous": '<svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "/></svg>',
            "slidenav-previous-large": '<svg width="25px" height="40px" viewBox="0 0 25 40" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="2" points="20.527,1.5 2,20.024 20.525,38.547 "/></svg>',
        },
        qi = {
            install: function (r) {
                r.icon.add = function (t, e) {
                    var n,
                        i = z(t) ? (((n = {})[t] = e), n) : t;
                    K(i, function (t, e) {
                        (Ri[e] = t), delete Ki[e];
                    }),
                        r._initialized &&
                            Ae(document.body, function (t) {
                                return K(r.getComponents(t), function (t) {
                                    t.$options.isIcon && t.icon in i && t.$reset();
                                });
                            });
                };
            },
            extends: Hi,
            args: "icon",
            props: ["icon"],
            data: { include: ["focusable"] },
            isIcon: !0,
            beforeConnect: function () {
                ze(this.$el, "uk-icon");
            },
            methods: {
                getSvg: function () {
                    var t = (function (t) {
                        if (!Ri[t]) return null;
                        Ki[t] ||
                            (Ki[t] = Ne(
                                (
                                    Ri[
                                        (function (t) {
                                            return lt ? X(X(t, "left", "right"), "previous", "next") : t;
                                        })(t)
                                    ] || Ri[t]
                                ).trim()
                            ));
                        return Ki[t].cloneNode(!0);
                    })(this.icon);
                    return t ? ae.resolve(t) : ae.reject("Icon not found.");
                },
            },
        },
        Ui = {
            args: !1,
            extends: qi,
            data: function (t) {
                return { icon: d(t.constructor.options.name) };
            },
            beforeConnect: function () {
                ze(this.$el, this.$name);
            },
        },
        Yi = {
            extends: Ui,
            beforeConnect: function () {
                ze(this.$el, "uk-slidenav");
            },
            computed: {
                icon: function (t, e) {
                    var n = t.icon;
                    return He(e, "uk-slidenav-large") ? n + "-large" : n;
                },
            },
        },
        Xi = {
            extends: Ui,
            computed: {
                icon: function (t, e) {
                    var n = t.icon;
                    return He(e, "uk-search-icon") && Ut(e, ".uk-search-large").length ? "search-large" : Ut(e, ".uk-search-navbar").length ? "search-navbar" : n;
                },
            },
        },
        Gi = {
            extends: Ui,
            computed: {
                icon: function () {
                    return "close-" + (He(this.$el, "uk-close-large") ? "large" : "icon");
                },
            },
        },
        Ji = {
            extends: Ui,
            connected: function () {
                var e = this;
                this.svg.then(function (t) {
                    return 1 !== e.ratio && Re(Ne("circle", t), "strokeWidth", 1 / e.ratio);
                }, et);
            },
        },
        Ki = {};
    var Zi = {
        args: "dataSrc",
        props: { dataSrc: String, dataSrcset: Boolean, sizes: String, width: Number, height: Number, offsetTop: String, offsetLeft: String, target: String },
        data: { dataSrc: "", dataSrcset: !1, sizes: !1, width: !1, height: !1, offsetTop: "50vh", offsetLeft: 0, target: !1 },
        computed: {
            cacheKey: function (t) {
                var e = t.dataSrc;
                return this.$name + "." + e;
            },
            width: function (t) {
                var e = t.width,
                    n = t.dataWidth;
                return e || n;
            },
            height: function (t) {
                var e = t.height,
                    n = t.dataHeight;
                return e || n;
            },
            sizes: function (t) {
                var e = t.sizes,
                    n = t.dataSizes;
                return e || n;
            },
            isImg: function (t, e) {
                return or(e);
            },
            target: {
                get: function (t) {
                    var e = t.target;
                    return [this.$el].concat(kt(e, this.$el));
                },
                watch: function () {
                    this.observe();
                },
            },
            offsetTop: function (t) {
                return bn(t.offsetTop, "height");
            },
            offsetLeft: function (t) {
                return bn(t.offsetLeft, "width");
            },
        },
        connected: function () {
            ar[this.cacheKey]
                ? Qi(this.$el, ar[this.cacheKey], this.dataSrcset, this.sizes)
                : this.isImg &&
                  this.width &&
                  this.height &&
                  Qi(
                      this.$el,
                      (function (t, e, n) {
                          var i;
                          n && ((i = rt.ratio({ width: t, height: e }, "width", bn(er(n)))), (t = i.width), (e = i.height));
                          return 'data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="' + t + '" height="' + e + '"></svg>';
                      })(this.width, this.height, this.sizes)
                  ),
                (this.observer = new Zn(this.load, { rootMargin: this.offsetTop + "px " + this.offsetLeft + "px" })),
                requestAnimationFrame(this.observe);
        },
        disconnected: function () {
            this.observer.disconnect();
        },
        update: {
            read: function (t) {
                var e = this,
                    n = t.image;
                if ((n || "complete" !== document.readyState || this.load(this.observer.takeRecords()), this.isImg)) return !1;
                n &&
                    n.then(function (t) {
                        return t && "" !== t.currentSrc && Qi(e.$el, sr(t));
                    });
            },
            write: function (t) {
                var e, n, i, r, o;
                this.dataSrcset &&
                    1 !== window.devicePixelRatio &&
                    ((!(e = Re(this.$el, "backgroundSize")).match(/^(auto\s?)+$/) && F(e) !== t.bgSize) ||
                        ((t.bgSize =
                            ((n = this.dataSrcset),
                            (i = this.sizes),
                            (r = bn(er(i))),
                            (o = (n.match(rr) || []).map(F).sort(function (t, e) {
                                return t - e;
                            })).filter(function (t) {
                                return r <= t;
                            })[0] ||
                                o.pop() ||
                                "")),
                        Re(this.$el, "backgroundSize", t.bgSize + "px")));
            },
            events: ["resize"],
        },
        methods: {
            load: function (t) {
                var e = this;
                t.some(function (t) {
                    return H(t.isIntersecting) || t.isIntersecting;
                }) &&
                    ((this._data.image = fe(this.dataSrc, this.dataSrcset, this.sizes).then(
                        function (t) {
                            return Qi(e.$el, sr(t), t.srcset, t.sizes), (ar[e.cacheKey] = sr(t)), t;
                        },
                        function (t) {
                            return Kt(e.$el, new t.constructor(t.type, t));
                        }
                    )),
                    this.observer.disconnect());
            },
            observe: function () {
                var e = this;
                this._connected &&
                    !this._data.image &&
                    this.target.forEach(function (t) {
                        return e.observer.observe(t);
                    });
            },
        },
    };
    function Qi(t, e, n, i) {
        or(t) ? (i && (t.sizes = i), n && (t.srcset = n), e && (t.src = e)) : e && !b(t.style.backgroundImage, e) && (Re(t, "backgroundImage", "url(" + Ht(e) + ")"), Kt(t, Zt("load", !1)));
    }
    var tr = /\s*(.*?)\s*(\w+|calc\(.*?\))\s*(?:,|$)/g;
    function er(t) {
        var e, n;
        for (tr.lastIndex = 0; (e = tr.exec(t)); )
            if (!e[1] || window.matchMedia(e[1]).matches) {
                e = w((n = e[2]), "calc")
                    ? n
                          .substring(5, n.length - 1)
                          .replace(nr, function (t) {
                              return bn(t);
                          })
                          .replace(/ /g, "")
                          .match(ir)
                          .reduce(function (t, e) {
                              return t + +e;
                          }, 0)
                    : n;
                break;
            }
        return e || "100vw";
    }
    var nr = /\d+(?:\w+|%)/g,
        ir = /[+-]?(\d+)/g;
    var rr = /\s+\d+w\s*(?:,|$)/g;
    function or(t) {
        return "IMG" === t.tagName;
    }
    function sr(t) {
        return t.currentSrc || t.src;
    }
    var ar,
        ur = "__test__";
    try {
        ((ar = window.sessionStorage || {})[ur] = 1), delete ar[ur];
    } catch (t) {
        ar = {};
    }
    var cr = {
        props: { media: Boolean },
        data: { media: !1 },
        computed: {
            matchMedia: function () {
                var t = (function (t) {
                    if (z(t)) {
                        if ("@" === t[0]) t = F(Xe("breakpoint-" + t.substr(1)));
                        else if (isNaN(t)) return t;
                    }
                    return !(!t || isNaN(t)) && "(min-width: " + t + "px)";
                })(this.media);
                return !t || window.matchMedia(t).matches;
            },
        },
    };
    var hr = {
            mixins: [pi, cr],
            props: { fill: String },
            data: { fill: "", clsWrapper: "uk-leader-fill", clsHide: "uk-leader-hide", attrFill: "data-fill" },
            computed: {
                fill: function (t) {
                    return t.fill || Xe("leader-fill-content");
                },
            },
            connected: function () {
                var t = Se(this.$el, '<span class="' + this.clsWrapper + '">');
                this.wrapper = t[0];
            },
            disconnected: function () {
                Te(this.wrapper.childNodes);
            },
            update: {
                read: function (t) {
                    var e = t.changed,
                        n = t.width,
                        i = n;
                    return { width: (n = Math.floor(this.$el.offsetWidth / 2)), fill: this.fill, changed: e || i !== n, hide: !this.matchMedia };
                },
                write: function (t) {
                    Le(this.wrapper, this.clsHide, t.hide), t.changed && ((t.changed = !1), ot(this.wrapper, this.attrFill, new Array(t.width).join(t.fill)));
                },
                events: ["resize"],
            },
        },
        lr = {
            props: { container: Boolean },
            data: { container: !0 },
            computed: {
                container: function (t) {
                    var e = t.container;
                    return (!0 === e && this.$container) || (e && Ne(e));
                },
            },
        },
        dr = [],
        fr = {
            mixins: [pi, lr, gi],
            props: { selPanel: String, selClose: String, escClose: Boolean, bgClose: Boolean, stack: Boolean },
            data: { cls: "uk-open", escClose: !0, bgClose: !0, overlay: !0, stack: !1 },
            computed: {
                panel: function (t, e) {
                    return Ne(t.selPanel, e);
                },
                transitionElement: function () {
                    return this.panel;
                },
                bgClose: function (t) {
                    return t.bgClose && this.panel;
                },
            },
            beforeDisconnect: function () {
                this.isToggled() && this.toggleElement(this.$el, !1, !1);
            },
            events: [
                {
                    name: "click",
                    delegate: function () {
                        return this.selClose;
                    },
                    handler: function (t) {
                        t.preventDefault(), this.hide();
                    },
                },
                {
                    name: "toggle",
                    self: !0,
                    handler: function (t) {
                        t.defaultPrevented || (t.preventDefault(), this.isToggled() === b(dr, this) && this.toggle());
                    },
                },
                {
                    name: "beforeshow",
                    self: !0,
                    handler: function (t) {
                        if (b(dr, this)) return !1;
                        !this.stack && dr.length
                            ? (ae
                                  .all(
                                      dr.map(function (t) {
                                          return t.hide();
                                      })
                                  )
                                  .then(this.show),
                              t.preventDefault())
                            : dr.push(this);
                    },
                },
                {
                    name: "show",
                    self: !0,
                    handler: function () {
                        var o = this;
                        dn(window) - dn(document) && this.overlay && Re(document.body, "overflowY", "scroll"),
                            this.stack && Re(this.$el, "zIndex", F(Re(this.$el, "zIndex")) + dr.length),
                            ze(document.documentElement, this.clsPage),
                            this.bgClose &&
                                Jt(
                                    this.$el,
                                    "hide",
                                    Xt(document, gt, function (t) {
                                        var r = t.target;
                                        J(dr) !== o ||
                                            (o.overlay && !qt(r, o.$el)) ||
                                            qt(r, o.panel) ||
                                            Jt(
                                                document,
                                                vt + " " + xt + " scroll",
                                                function (t) {
                                                    var e = t.defaultPrevented,
                                                        n = t.type,
                                                        i = t.target;
                                                    e || n !== vt || r !== i || o.hide();
                                                },
                                                !0
                                            );
                                    }),
                                    { self: !0 }
                                ),
                            this.escClose &&
                                Jt(
                                    this.$el,
                                    "hide",
                                    Xt(document, "keydown", function (t) {
                                        27 === t.keyCode && J(dr) === o && (t.preventDefault(), o.hide());
                                    }),
                                    { self: !0 }
                                );
                    },
                },
                {
                    name: "hidden",
                    self: !0,
                    handler: function () {
                        var e = this;
                        dr.splice(dr.indexOf(this), 1),
                            dr.length || Re(document.body, "overflowY", ""),
                            Re(this.$el, "zIndex", ""),
                            dr.some(function (t) {
                                return t.clsPage === e.clsPage;
                            }) || Be(document.documentElement, this.clsPage);
                    },
                },
            ],
            methods: {
                toggle: function () {
                    return this.isToggled() ? this.hide() : this.show();
                },
                show: function () {
                    var e = this;
                    return this.container && this.$el.parentNode !== this.container
                        ? (be(this.container, this.$el),
                          new ae(function (t) {
                              return requestAnimationFrame(function () {
                                  return e.show().then(t);
                              });
                          }))
                        : this.toggleElement(this.$el, !0, pr(this));
                },
                hide: function () {
                    return this.toggleElement(this.$el, !1, pr(this));
                },
            },
        };
    function pr(t) {
        var s = t.transitionElement,
            a = t._toggle;
        return function (r, o) {
            return new ae(function (n, i) {
                return Jt(r, "show hide", function () {
                    r._reject && r._reject(), (r._reject = i), a(r, o);
                    var t = Jt(
                            s,
                            "transitionstart",
                            function () {
                                Jt(s, "transitionend transitioncancel", n, { self: !0 }), clearTimeout(e);
                            },
                            { self: !0 }
                        ),
                        e = setTimeout(function () {
                            t(), n();
                        }, U(Re(s, "transitionDuration")));
                });
            });
        };
    }
    var gr = {
        install: function (t) {
            var a = t.modal;
            function e(t, e, n, i) {
                e = G({ bgClose: !1, escClose: !0, labels: a.labels }, e);
                var r = a.dialog(t(e), e),
                    o = new se(),
                    s = !1;
                return (
                    Xt(r.$el, "submit", "form", function (t) {
                        t.preventDefault(), o.resolve(i && i(r)), (s = !0), r.hide();
                    }),
                    Xt(r.$el, "hide", function () {
                        return !s && n(o);
                    }),
                    (o.promise.dialog = r),
                    o.promise
                );
            }
            (a.dialog = function (t, e) {
                var n = a('<div class="uk-modal"> <div class="uk-modal-dialog">' + t + "</div> </div>", e);
                return (
                    n.show(),
                    Xt(
                        n.$el,
                        "hidden",
                        function () {
                            return ae.resolve().then(function () {
                                return n.$destroy(!0);
                            });
                        },
                        { self: !0 }
                    ),
                    n
                );
            }),
                (a.alert = function (n, t) {
                    return e(
                        function (t) {
                            var e = t.labels;
                            return '<div class="uk-modal-body">' + (z(n) ? n : we(n)) + '</div> <div class="uk-modal-footer uk-text-right"> <button class="uk-button uk-button-primary uk-modal-close" autofocus>' + e.ok + "</button> </div>";
                        },
                        t,
                        function (t) {
                            return t.resolve();
                        }
                    );
                }),
                (a.confirm = function (n, t) {
                    return e(
                        function (t) {
                            var e = t.labels;
                            return (
                                '<form> <div class="uk-modal-body">' +
                                (z(n) ? n : we(n)) +
                                '</div> <div class="uk-modal-footer uk-text-right"> <button class="uk-button uk-button-default uk-modal-close" type="button">' +
                                e.cancel +
                                '</button> <button class="uk-button uk-button-primary" autofocus>' +
                                e.ok +
                                "</button> </div> </form>"
                            );
                        },
                        t,
                        function (t) {
                            return t.reject();
                        }
                    );
                }),
                (a.prompt = function (n, i, t) {
                    return e(
                        function (t) {
                            var e = t.labels;
                            return (
                                '<form class="uk-form-stacked"> <div class="uk-modal-body"> <label>' +
                                (z(n) ? n : we(n)) +
                                '</label> <input class="uk-input" value="' +
                                (i || "") +
                                '" autofocus> </div> <div class="uk-modal-footer uk-text-right"> <button class="uk-button uk-button-default uk-modal-close" type="button">' +
                                e.cancel +
                                '</button> <button class="uk-button uk-button-primary">' +
                                e.ok +
                                "</button> </div> </form>"
                            );
                        },
                        t,
                        function (t) {
                            return t.resolve(null);
                        },
                        function (t) {
                            return Ne("input", t.$el).value;
                        }
                    );
                }),
                (a.labels = { ok: "Ok", cancel: "Cancel" });
        },
        mixins: [fr],
        data: { clsPage: "uk-modal-page", selPanel: ".uk-modal-dialog", selClose: ".uk-modal-close, .uk-modal-close-default, .uk-modal-close-outside, .uk-modal-close-full" },
        events: [
            {
                name: "show",
                self: !0,
                handler: function () {
                    He(this.panel, "uk-margin-auto-vertical") ? ze(this.$el, "uk-flex") : Re(this.$el, "display", "block"), ln(this.$el);
                },
            },
            {
                name: "hidden",
                self: !0,
                handler: function () {
                    Re(this.$el, "display", ""), Be(this.$el, "uk-flex");
                },
            },
        ],
    };
    var mr = { extends: vi, data: { targets: "> .uk-parent", toggle: "> a", content: "> ul" } },
        vr = {
            mixins: [pi, Mi],
            props: {
                dropdown: String,
                mode: "list",
                align: String,
                offset: Number,
                boundary: Boolean,
                boundaryAlign: Boolean,
                clsDrop: String,
                delayShow: Number,
                delayHide: Number,
                dropbar: Boolean,
                dropbarMode: String,
                dropbarAnchor: Boolean,
                duration: Number,
            },
            data: {
                dropdown: ".uk-navbar-nav > li",
                align: lt ? "right" : "left",
                clsDrop: "uk-navbar-dropdown",
                mode: void 0,
                offset: void 0,
                delayShow: void 0,
                delayHide: void 0,
                boundaryAlign: void 0,
                flip: "x",
                boundary: !0,
                dropbar: !1,
                dropbarMode: "slide",
                dropbarAnchor: !1,
                duration: 200,
                forceHeight: !0,
                selMinHeight: ".uk-navbar-nav > li > a, .uk-navbar-item, .uk-navbar-toggle",
            },
            computed: {
                boundary: function (t, e) {
                    var n = t.boundary,
                        i = t.boundaryAlign;
                    return !0 === n || i ? e : n;
                },
                dropbarAnchor: function (t, e) {
                    return yt(t.dropbarAnchor, e);
                },
                pos: function (t) {
                    return "bottom-" + t.align;
                },
                dropbar: {
                    get: function (t) {
                        var e = t.dropbar;
                        return e ? (e = this._dropbar || yt(e, this.$el) || Ne("+ .uk-navbar-dropbar", this.$el)) || (this._dropbar = Ne("<div></div>")) : null;
                    },
                    watch: function (t) {
                        ze(t, "uk-navbar-dropbar");
                    },
                    immediate: !0,
                },
                dropdowns: {
                    get: function (t, e) {
                        return Me(t.dropdown + " ." + t.clsDrop, e);
                    },
                    watch: function (t) {
                        var e = this;
                        this.$create(
                            "drop",
                            t.filter(function (t) {
                                return !e.getDropdown(t);
                            }),
                            G({}, this.$props, { boundary: this.boundary, pos: this.pos, offset: this.dropbar || this.offset })
                        );
                    },
                    immediate: !0,
                },
            },
            disconnected: function () {
                this.dropbar && $e(this.dropbar), delete this._dropbar;
            },
            events: [
                {
                    name: "mouseover",
                    delegate: function () {
                        return this.dropdown;
                    },
                    handler: function (t) {
                        var e = t.current,
                            n = this.getActive();
                        n && n.toggle && !qt(n.toggle.$el, e) && !n.tracker.movesTo(n.$el) && n.hide(!1);
                    },
                },
                {
                    name: "mouseleave",
                    el: function () {
                        return this.dropbar;
                    },
                    handler: function () {
                        var t = this.getActive();
                        t &&
                            !this.dropdowns.some(function (t) {
                                return Dt(t, ":hover");
                            }) &&
                            t.hide();
                    },
                },
                {
                    name: "beforeshow",
                    capture: !0,
                    filter: function () {
                        return this.dropbar;
                    },
                    handler: function () {
                        this.dropbar.parentNode || ye(this.dropbarAnchor || this.$el, this.dropbar);
                    },
                },
                {
                    name: "show",
                    filter: function () {
                        return this.dropbar;
                    },
                    handler: function (t, e) {
                        var n = e.$el,
                            i = e.dir;
                        He(n, this.clsDrop) &&
                            ("slide" === this.dropbarMode && ze(this.dropbar, "uk-navbar-dropbar-slide"),
                            this.clsDrop && ze(n, this.clsDrop + "-dropbar"),
                            "bottom" === i && this.transitionTo(n.offsetHeight + F(Re(n, "marginTop")) + F(Re(n, "marginBottom")), n));
                    },
                },
                {
                    name: "beforehide",
                    filter: function () {
                        return this.dropbar;
                    },
                    handler: function (t, e) {
                        var n = e.$el,
                            i = this.getActive();
                        Dt(this.dropbar, ":hover") && i && i.$el === n && t.preventDefault();
                    },
                },
                {
                    name: "hide",
                    filter: function () {
                        return this.dropbar;
                    },
                    handler: function (t, e) {
                        var n,
                            i = e.$el;
                        !He(i, this.clsDrop) || ((!(n = this.getActive()) || (n && n.$el === i)) && this.transitionTo(0));
                    },
                },
            ],
            methods: {
                getActive: function () {
                    var t = this.dropdowns.map(this.getDropdown).filter(function (t) {
                        return t && t.isActive();
                    })[0];
                    return t && b(t.mode, "hover") && qt(t.toggle.$el, this.$el) && t;
                },
                transitionTo: function (t, e) {
                    var n = this,
                        i = this.dropbar,
                        r = Ft(i) ? ln(i) : 0;
                    return (
                        Re((e = r < t && e), "clip", "rect(0," + e.offsetWidth + "px," + r + "px,0)"),
                        ln(i, r),
                        Qe.cancel([e, i]),
                        ae
                            .all([Qe.start(i, { height: t }, this.duration), Qe.start(e, { clip: "rect(0," + e.offsetWidth + "px," + t + "px,0)" }, this.duration)])
                            .catch(et)
                            .then(function () {
                                Re(e, { clip: "" }), n.$update(i);
                            })
                    );
                },
                getDropdown: function (t) {
                    return this.$getComponent(t, "drop") || this.$getComponent(t, "dropdown");
                },
            },
        },
        wr = {
            mixins: [fr],
            args: "mode",
            props: { mode: String, flip: Boolean, overlay: Boolean },
            data: {
                mode: "slide",
                flip: !1,
                overlay: !1,
                clsPage: "uk-offcanvas-page",
                clsContainer: "uk-offcanvas-container",
                selPanel: ".uk-offcanvas-bar",
                clsFlip: "uk-offcanvas-flip",
                clsContainerAnimation: "uk-offcanvas-container-animation",
                clsSidebarAnimation: "uk-offcanvas-bar-animation",
                clsMode: "uk-offcanvas",
                clsOverlay: "uk-offcanvas-overlay",
                selClose: ".uk-offcanvas-close",
                container: !1,
            },
            computed: {
                clsFlip: function (t) {
                    var e = t.flip,
                        n = t.clsFlip;
                    return e ? n : "";
                },
                clsOverlay: function (t) {
                    var e = t.overlay,
                        n = t.clsOverlay;
                    return e ? n : "";
                },
                clsMode: function (t) {
                    var e = t.mode;
                    return t.clsMode + "-" + e;
                },
                clsSidebarAnimation: function (t) {
                    var e = t.mode,
                        n = t.clsSidebarAnimation;
                    return "none" === e || "reveal" === e ? "" : n;
                },
                clsContainerAnimation: function (t) {
                    var e = t.mode,
                        n = t.clsContainerAnimation;
                    return "push" !== e && "reveal" !== e ? "" : n;
                },
                transitionElement: function (t) {
                    return "reveal" === t.mode ? this.panel.parentNode : this.panel;
                },
            },
            events: [
                {
                    name: "click",
                    delegate: function () {
                        return 'a[href^="#"]';
                    },
                    handler: function (t) {
                        var e = t.current.hash;
                        !t.defaultPrevented && e && Ne(e, document.body) && this.hide();
                    },
                },
                {
                    name: "touchstart",
                    passive: !0,
                    el: function () {
                        return this.panel;
                    },
                    handler: function (t) {
                        var e = t.targetTouches;
                        1 === e.length && (this.clientY = e[0].clientY);
                    },
                },
                {
                    name: "touchmove",
                    self: !0,
                    passive: !1,
                    filter: function () {
                        return this.overlay;
                    },
                    handler: function (t) {
                        t.cancelable && t.preventDefault();
                    },
                },
                {
                    name: "touchmove",
                    passive: !1,
                    el: function () {
                        return this.panel;
                    },
                    handler: function (t) {
                        var e, n, i, r, o;
                        1 === t.targetTouches.length &&
                            ((e = event.targetTouches[0].clientY - this.clientY),
                            (i = (n = this.panel).scrollTop),
                            ((r = n.scrollHeight) <= (o = n.clientHeight) || (0 === i && 0 < e) || (r - i <= o && e < 0)) && t.cancelable && t.preventDefault());
                    },
                },
                {
                    name: "show",
                    self: !0,
                    handler: function () {
                        "reveal" !== this.mode || He(this.panel.parentNode, this.clsMode) || (Ie(this.panel, "<div>"), ze(this.panel.parentNode, this.clsMode)),
                            Re(document.documentElement, "overflowY", this.overlay ? "hidden" : ""),
                            ze(document.body, this.clsContainer, this.clsFlip),
                            Re(document.body, "touch-action", "pan-y pinch-zoom"),
                            Re(this.$el, "display", "block"),
                            ze(this.$el, this.clsOverlay),
                            ze(this.panel, this.clsSidebarAnimation, "reveal" !== this.mode ? this.clsMode : ""),
                            ln(document.body),
                            ze(document.body, this.clsContainerAnimation),
                            this.clsContainerAnimation && (br().content += ",user-scalable=0");
                    },
                },
                {
                    name: "hide",
                    self: !0,
                    handler: function () {
                        Be(document.body, this.clsContainerAnimation), Re(document.body, "touch-action", "");
                    },
                },
                {
                    name: "hidden",
                    self: !0,
                    handler: function () {
                        var t;
                        this.clsContainerAnimation && ((t = br()).content = t.content.replace(/,user-scalable=0$/, "")),
                            "reveal" === this.mode && Te(this.panel),
                            Be(this.panel, this.clsSidebarAnimation, this.clsMode),
                            Be(this.$el, this.clsOverlay),
                            Re(this.$el, "display", ""),
                            Be(document.body, this.clsContainer, this.clsFlip),
                            Re(document.documentElement, "overflowY", "");
                    },
                },
                {
                    name: "swipeLeft swipeRight",
                    handler: function (t) {
                        this.isToggled() && c(t.type, "Left") ^ this.flip && this.hide();
                    },
                },
            ],
        };
    function br() {
        return Ne('meta[name="viewport"]', document.head) || be(document.head, '<meta name="viewport">');
    }
    var xr = {
            mixins: [pi],
            props: { selContainer: String, selContent: String },
            data: { selContainer: ".uk-modal", selContent: ".uk-modal-dialog" },
            computed: {
                container: function (t, e) {
                    return Bt(e, t.selContainer);
                },
                content: function (t, e) {
                    return Bt(e, t.selContent);
                },
            },
            connected: function () {
                Re(this.$el, "minHeight", 150);
            },
            update: {
                read: function () {
                    return !(!this.content || !this.container) && { current: F(Re(this.$el, "maxHeight")), max: Math.max(150, ln(this.container) - (an(this.content).height - ln(this.$el))) };
                },
                write: function (t) {
                    var e = t.current,
                        n = t.max;
                    Re(this.$el, "maxHeight", n), Math.round(e) !== Math.round(n) && Kt(this.$el, "resize");
                },
                events: ["resize"],
            },
        },
        yr = {
            props: ["width", "height"],
            connected: function () {
                ze(this.$el, "uk-responsive-width");
            },
            update: {
                read: function () {
                    return !!(Ft(this.$el) && this.width && this.height) && { width: dn(this.$el.parentNode), height: this.height };
                },
                write: function (t) {
                    ln(this.$el, rt.contain({ height: this.height, width: this.width }, t).height);
                },
                events: ["resize"],
            },
        },
        kr = {
            props: { offset: Number },
            data: { offset: 0 },
            methods: {
                scrollTo: function (t) {
                    var e = this;
                    (t = (t && Ne(t)) || document.body),
                        Kt(this.$el, "beforescroll", [this, t]) &&
                            Un(t, { offset: this.offset }).then(function () {
                                return Kt(e.$el, "scrolled", [e, t]);
                            });
                },
            },
            events: {
                click: function (t) {
                    t.defaultPrevented || (t.preventDefault(), this.scrollTo(Ht(decodeURIComponent(this.$el.hash)).substr(1)));
                },
            },
        },
        $r = "_ukScrollspy",
        Ir = {
            args: "cls",
            props: { cls: String, target: String, hidden: Boolean, offsetTop: Number, offsetLeft: Number, repeat: Boolean, delay: Number },
            data: function () {
                return { cls: !1, target: !1, hidden: !0, offsetTop: 0, offsetLeft: 0, repeat: !1, delay: 0, inViewClass: "uk-scrollspy-inview" };
            },
            computed: {
                elements: {
                    get: function (t, e) {
                        var n = t.target;
                        return n ? Me(n, e) : [e];
                    },
                    watch: function (t) {
                        this.hidden && Re(Rt(t, ":not(." + this.inViewClass + ")"), "visibility", "hidden");
                    },
                    immediate: !0,
                },
            },
            update: [
                {
                    read: function (t) {
                        var e = this;
                        t.update &&
                            this.elements.forEach(function (t) {
                                t[$r] || (t[$r] = { cls: ut(t, "uk-scrollspy-class") || e.cls }), (t[$r].show = Rn(t, e.offsetTop, e.offsetLeft));
                            });
                    },
                    write: function (i) {
                        var r = this;
                        if (!i.update) return this.$emit(), (i.update = !0);
                        this.elements.forEach(function (e) {
                            function t(t) {
                                Re(e, "visibility", !t && r.hidden ? "hidden" : ""), Le(e, r.inViewClass, t), Le(e, n.cls), Kt(e, t ? "inview" : "outview"), (n.inview = t), r.$update(e);
                            }
                            var n = e[$r];
                            !n.show || n.inview || n.queued
                                ? !n.show && n.inview && !n.queued && r.repeat && t(!1)
                                : ((n.queued = !0),
                                  (i.promise = (i.promise || ae.resolve())
                                      .then(function () {
                                          return new ae(function (t) {
                                              return setTimeout(t, r.delay);
                                          });
                                      })
                                      .then(function () {
                                          t(!0),
                                              setTimeout(function () {
                                                  (n.queued = !1), r.$emit();
                                              }, 300);
                                      })));
                        });
                    },
                    events: ["scroll", "resize"],
                },
            ],
        },
        Sr = {
            props: { cls: String, closest: String, scroll: Boolean, overflow: Boolean, offset: Number },
            data: { cls: "uk-active", closest: !1, scroll: !1, overflow: !0, offset: 0 },
            computed: {
                links: {
                    get: function (t, e) {
                        return Me('a[href^="#"]', e).filter(function (t) {
                            return t.hash;
                        });
                    },
                    watch: function (t) {
                        this.scroll && this.$create("scroll", t, { offset: this.offset || 0 });
                    },
                    immediate: !0,
                },
                targets: function () {
                    return Me(
                        this.links
                            .map(function (t) {
                                return Ht(t.hash).substr(1);
                            })
                            .join(",")
                    );
                },
                elements: function (t) {
                    var e = t.closest;
                    return Bt(this.links, e || "*");
                },
            },
            update: [
                {
                    read: function () {
                        var n = this,
                            t = this.targets.length;
                        if (!t || !Ft(this.$el)) return !1;
                        var e = J(Xn(this.targets[0])),
                            i = e.scrollTop,
                            r = e.scrollHeight,
                            o = Gn(e),
                            s = r - an(o).height,
                            a = !1;
                        return (
                            i === s
                                ? (a = t - 1)
                                : (this.targets.every(function (t, e) {
                                      if (cn(t, o).top - n.offset <= 0) return (a = e), !0;
                                  }),
                                  !1 === a && this.overflow && (a = 0)),
                            { active: a }
                        );
                    },
                    write: function (t) {
                        var e = t.active;
                        this.links.forEach(function (t) {
                            return t.blur();
                        }),
                            Be(this.elements, this.cls),
                            !1 !== e && Kt(this.$el, "active", [e, ze(this.elements[e], this.cls)]);
                    },
                    events: ["scroll", "resize"],
                },
            ],
        },
        Tr = {
            mixins: [pi, cr],
            props: {
                top: null,
                bottom: Boolean,
                offset: String,
                animation: String,
                clsActive: String,
                clsInactive: String,
                clsFixed: String,
                clsBelow: String,
                selTarget: String,
                widthElement: Boolean,
                showOnUp: Boolean,
                targetOffset: Number,
            },
            data: { top: 0, bottom: !1, offset: 0, animation: "", clsActive: "uk-active", clsInactive: "", clsFixed: "uk-sticky-fixed", clsBelow: "uk-sticky-below", selTarget: "", widthElement: !1, showOnUp: !1, targetOffset: !1 },
            computed: {
                offset: function (t) {
                    return bn(t.offset);
                },
                selTarget: function (t, e) {
                    var n = t.selTarget;
                    return (n && Ne(n, e)) || e;
                },
                widthElement: function (t, e) {
                    return yt(t.widthElement, e) || this.placeholder;
                },
                isActive: {
                    get: function () {
                        return He(this.selTarget, this.clsActive);
                    },
                    set: function (t) {
                        t && !this.isActive
                            ? (Oe(this.selTarget, this.clsInactive, this.clsActive), Kt(this.$el, "active"))
                            : t || He(this.selTarget, this.clsInactive) || (Oe(this.selTarget, this.clsActive, this.clsInactive), Kt(this.$el, "inactive"));
                    },
                },
            },
            connected: function () {
                (this.placeholder = Ne("+ .uk-sticky-placeholder", this.$el) || Ne('<div class="uk-sticky-placeholder"></div>')), (this.isFixed = !1), (this.isActive = !1);
            },
            disconnected: function () {
                this.isFixed && (this.hide(), Be(this.selTarget, this.clsInactive)), $e(this.placeholder), (this.placeholder = null), (this.widthElement = null);
            },
            events: [
                {
                    name: "load hashchange popstate",
                    el: ct && window,
                    handler: function () {
                        var i,
                            r = this;
                        !1 !== this.targetOffset &&
                            location.hash &&
                            0 < window.pageYOffset &&
                            (i = Ne(location.hash)) &&
                            yn.read(function () {
                                var t = an(i).top,
                                    e = an(r.$el).top,
                                    n = r.$el.offsetHeight;
                                r.isFixed && t <= e + n && e <= t + i.offsetHeight && qn(window, t - n - (P(r.targetOffset) ? r.targetOffset : 0) - r.offset);
                            });
                    },
                },
            ],
            update: [
                {
                    read: function (t, e) {
                        var n = t.height;
                        if (((this.inactive = !this.matchMedia || !Ft(this.$el)), this.inactive)) return !1;
                        this.isActive && "update" !== e && (this.hide(), (n = this.$el.offsetHeight), this.show()),
                            (n = this.isActive ? n : this.$el.offsetHeight),
                            (this.topOffset = an(this.isFixed ? this.placeholder : this.$el).top),
                            (this.bottomOffset = this.topOffset + n);
                        var i = Er("bottom", this);
                        return (
                            (this.top = Math.max(F(Er("top", this)), this.topOffset) - this.offset),
                            (this.bottom = i && i - this.$el.offsetHeight),
                            (this.width = an(Ft(this.widthElement) ? this.widthElement : this.$el).width),
                            { height: n, top: hn(this.placeholder)[0], margins: Re(this.$el, ["marginTop", "marginBottom", "marginLeft", "marginRight"]) }
                        );
                    },
                    write: function (t) {
                        var e = t.height,
                            n = t.margins,
                            i = this.placeholder;
                        Re(i, G({ height: e }, n)), qt(i, document) || (ye(this.$el, i), (i.hidden = !0)), (this.isActive = !!this.isActive);
                    },
                    events: ["resize"],
                },
                {
                    read: function (t) {
                        var e = t.scroll;
                        return void 0 === e && (e = 0), (this.scroll = window.pageYOffset), { dir: e <= this.scroll ? "down" : "up", scroll: this.scroll };
                    },
                    write: function (t, e) {
                        var n = this,
                            i = Date.now(),
                            r = t.initTimestamp;
                        void 0 === r && (r = 0);
                        var o = t.dir,
                            s = t.lastDir,
                            a = t.lastScroll,
                            u = t.scroll,
                            c = t.top;
                        if (
                            !(
                                (t.lastScroll = u) < 0 ||
                                (u === a && "scroll" === e) ||
                                (this.showOnUp && "scroll" !== e && !this.isFixed) ||
                                ((300 < i - r || o !== s) && ((t.initScroll = u), (t.initTimestamp = i)), (t.lastDir = o), this.showOnUp && !this.isFixed && Math.abs(t.initScroll - u) <= 30 && Math.abs(a - u) <= 10)
                            )
                        )
                            if (this.inactive || u < this.top || (this.showOnUp && (u <= this.top || ("down" === o && "scroll" === e) || ("up" === o && !this.isFixed && u <= this.bottomOffset)))) {
                                if (!this.isFixed) return void (rn.inProgress(this.$el) && u < c && (rn.cancel(this.$el), this.hide()));
                                (this.isFixed = !1),
                                    this.animation && u > this.topOffset
                                        ? (rn.cancel(this.$el),
                                          rn.out(this.$el, this.animation).then(function () {
                                              return n.hide();
                                          }, et))
                                        : this.hide();
                            } else this.isFixed ? this.update() : this.animation ? (rn.cancel(this.$el), this.show(), rn.in(this.$el, this.animation).catch(et)) : this.show();
                    },
                    events: ["resize", "scroll"],
                },
            ],
            methods: {
                show: function () {
                    (this.isFixed = !0), this.update(), (this.placeholder.hidden = !1);
                },
                hide: function () {
                    (this.isActive = !1), Be(this.$el, this.clsFixed, this.clsBelow), Re(this.$el, { position: "", top: "", width: "" }), (this.placeholder.hidden = !0);
                },
                update: function () {
                    var t = 0 !== this.top || this.scroll > this.top,
                        e = Math.max(0, this.offset);
                    P(this.bottom) && this.scroll > this.bottom - this.offset && (e = this.bottom - this.scroll),
                        Re(this.$el, { position: "fixed", top: e + "px", width: this.width }),
                        (this.isActive = t),
                        Le(this.$el, this.clsBelow, this.scroll > this.bottomOffset),
                        ze(this.$el, this.clsFixed);
                },
            },
        };
    function Er(t, e) {
        var n = e.$props,
            i = e.$el,
            r = e[t + "Offset"],
            o = n[t];
        if (o) return z(o) && o.match(/^-?\d/) ? r + bn(o) : an(!0 === o ? i.parentNode : yt(o, i)).bottom;
    }
    var _r,
        Cr,
        Ar,
        Nr = {
            mixins: [gi],
            args: "connect",
            props: { connect: String, toggle: String, active: Number, swiping: Boolean },
            data: { connect: "~.uk-switcher", toggle: "> * > :first-child", active: 0, swiping: !0, cls: "uk-active", clsContainer: "uk-switcher", attrItem: "uk-switcher-item" },
            computed: {
                connects: {
                    get: function (t, e) {
                        return kt(t.connect, e);
                    },
                    watch: function (t) {
                        var e = this;
                        t.forEach(function (t) {
                            return e.updateAria(t.children);
                        }),
                            this.swiping && Re(t, "touch-action", "pan-y pinch-zoom");
                    },
                    immediate: !0,
                },
                toggles: {
                    get: function (t, e) {
                        return Me(t.toggle, e).filter(function (t) {
                            return !Dt(t, ".uk-disabled *, .uk-disabled, [disabled]");
                        });
                    },
                    watch: function (t) {
                        var e = this.index();
                        this.show((~e && e) || t[this.active] || t[0]);
                    },
                    immediate: !0,
                },
                children: function () {
                    var t = this;
                    return Yt(this.$el).filter(function (e) {
                        return t.toggles.some(function (t) {
                            return qt(t, e);
                        });
                    });
                },
            },
            events: [
                {
                    name: "click",
                    delegate: function () {
                        return this.toggle;
                    },
                    handler: function (t) {
                        b(this.toggles, t.current) && (t.preventDefault(), this.show(t.current));
                    },
                },
                {
                    name: "click",
                    el: function () {
                        return this.connects;
                    },
                    delegate: function () {
                        return "[" + this.attrItem + "],[data-" + this.attrItem + "]";
                    },
                    handler: function (t) {
                        t.preventDefault(), this.show(ut(t.current, this.attrItem));
                    },
                },
                {
                    name: "swipeRight swipeLeft",
                    filter: function () {
                        return this.swiping;
                    },
                    el: function () {
                        return this.connects;
                    },
                    handler: function (t) {
                        var e = t.type;
                        this.show(c(e, "Left") ? "next" : "previous");
                    },
                },
            ],
            methods: {
                index: function () {
                    var e = this;
                    return y(this.children, function (t) {
                        return He(t, e.cls);
                    });
                },
                show: function (t) {
                    var n = this,
                        i = this.index(),
                        r = me(t, this.toggles, i);
                    i !== r &&
                        (this.children.forEach(function (t, e) {
                            Le(t, n.cls, r === e), ot(n.toggles[e], "aria-expanded", r === e);
                        }),
                        this.connects.forEach(function (t) {
                            var e = t.children;
                            return n
                                .toggleElement(
                                    V(e).filter(function (t, e) {
                                        return e !== r && n.isToggled(t);
                                    }),
                                    !1,
                                    0 <= i
                                )
                                .then(function () {
                                    return n.toggleElement(e[r], !0, 0 <= i);
                                });
                        }));
                },
            },
        },
        Mr = {
            mixins: [pi],
            extends: Nr,
            props: { media: Boolean },
            data: { media: 960, attrItem: "uk-tab-item" },
            connected: function () {
                var t = He(this.$el, "uk-tab-left") ? "uk-tab-left" : !!He(this.$el, "uk-tab-right") && "uk-tab-right";
                t && this.$create("toggle", this.$el, { cls: t, mode: "media", media: this.media });
            },
        },
        Dr = {
            mixins: [cr, gi],
            args: "target",
            props: { href: String, target: null, mode: "list", queued: Boolean },
            data: { href: !1, target: !1, mode: "click", queued: !0 },
            computed: {
                target: {
                    get: function (t, e) {
                        var n = t.href,
                            i = t.target;
                        return ((i = kt(i || n, e)).length && i) || [e];
                    },
                    watch: function () {
                        Kt(this.target, "updatearia", [this]);
                    },
                    immediate: !0,
                },
            },
            events: [
                {
                    name: wt + " " + bt,
                    filter: function () {
                        return b(this.mode, "hover");
                    },
                    handler: function (t) {
                        re(t) || this.toggle("toggle" + (t.type === wt ? "show" : "hide"));
                    },
                },
                {
                    name: "click",
                    filter: function () {
                        return b(this.mode, "click") || (pt && b(this.mode, "hover"));
                    },
                    handler: function (t) {
                        var e;
                        (Bt(t.target, 'a[href="#"], a[href=""]') || ((e = Bt(t.target, "a[href]")) && ((this.cls && !He(this.target, this.cls.split(" ")[0])) || !Ft(this.target) || (e.hash && Dt(this.target, e.hash))))) &&
                            t.preventDefault(),
                            this.toggle();
                    },
                },
            ],
            update: {
                read: function () {
                    return !(!b(this.mode, "media") || !this.media) && { match: this.matchMedia };
                },
                write: function (t) {
                    var e = t.match,
                        n = this.isToggled(this.target);
                    (e ? !n : n) && this.toggle();
                },
                events: ["resize"],
            },
            methods: {
                toggle: function (t) {
                    var e,
                        n = this;
                    Kt(this.target, t || "toggle", [this]) &&
                        (this.queued
                            ? ((e = this.target.filter(this.isToggled)),
                              this.toggleElement(e, !1).then(function () {
                                  return n.toggleElement(
                                      n.target.filter(function (t) {
                                          return !b(e, t);
                                      }),
                                      !0
                                  );
                              }))
                            : this.toggleElement(this.target));
                },
            },
        };
    K(
        Object.freeze({
            __proto__: null,
            Accordion: vi,
            Alert: bi,
            Cover: yi,
            Drop: Ii,
            Dropdown: Ii,
            FormCustom: Si,
            Gif: Ti,
            Grid: Ni,
            HeightMatch: Di,
            HeightViewport: Pi,
            Icon: qi,
            Img: Zi,
            Leader: hr,
            Margin: Ei,
            Modal: gr,
            Nav: mr,
            Navbar: vr,
            Offcanvas: wr,
            OverflowAuto: xr,
            Responsive: yr,
            Scroll: kr,
            Scrollspy: Ir,
            ScrollspyNav: Sr,
            Sticky: Tr,
            Svg: Hi,
            Switcher: Nr,
            Tab: Mr,
            Toggle: Dr,
            Video: xi,
            Close: Gi,
            Spinner: Ji,
            SlidenavNext: Yi,
            SlidenavPrevious: Yi,
            SearchIcon: Xi,
            Marker: Ui,
            NavbarToggleIcon: Ui,
            OverlayIcon: Ui,
            PaginationNext: Ui,
            PaginationPrevious: Ui,
            Totop: Ui,
        }),
        function (t, e) {
            return ti.component(e, t);
        }
    ),
        ti.use(function (r) {
            ct &&
                pe(function () {
                    var e;
                    r.update(),
                        Xt(window, "load resize", function () {
                            return r.update(null, "resize");
                        }),
                        Xt(
                            document,
                            "loadedmetadata load",
                            function (t) {
                                var e = t.target;
                                return r.update(e, "resize");
                            },
                            !0
                        ),
                        Xt(
                            window,
                            "scroll",
                            function (t) {
                                e ||
                                    ((e = !0),
                                    yn.write(function () {
                                        return (e = !1);
                                    }),
                                    r.update(null, t.type));
                            },
                            { passive: !0, capture: !0 }
                        );
                    var n,
                        i = 0;
                    Xt(
                        document,
                        "animationstart",
                        function (t) {
                            var e = t.target;
                            (Re(e, "animationName") || "").match(/^uk-.*(left|right)/) &&
                                (i++,
                                Re(document.body, "overflowX", "hidden"),
                                setTimeout(function () {
                                    --i || Re(document.body, "overflowX", "");
                                }, U(Re(e, "animationDuration")) + 100));
                        },
                        !0
                    ),
                        Xt(
                            document,
                            gt,
                            function (t) {
                                var s, a;
                                n && n(),
                                    re(t) &&
                                        ((s = oe(t)),
                                        (a = "tagName" in t.target ? t.target : t.target.parentNode),
                                        (n = Jt(document, vt + " " + xt, function (t) {
                                            var e = oe(t),
                                                r = e.x,
                                                o = e.y;
                                            ((a && r && 100 < Math.abs(s.x - r)) || (o && 100 < Math.abs(s.y - o))) &&
                                                setTimeout(function () {
                                                    var t, e, n, i;
                                                    Kt(a, "swipe"), Kt(a, "swipe" + ((t = s.x), (e = s.y), (n = r), (i = o), Math.abs(t - n) >= Math.abs(e - i) ? (0 < t - n ? "Left" : "Right") : 0 < e - i ? "Up" : "Down"));
                                                });
                                        })));
                            },
                            { passive: !0 }
                        );
                });
        }),
        (Cr = (_r = ti).connect),
        (Ar = _r.disconnect),
        ct &&
            window.MutationObserver &&
            yn.read(function () {
                document.body && Ae(document.body, Cr);
                new MutationObserver(function (t) {
                    var r = [];
                    t.forEach(function (t) {
                        return (
                            (n = r),
                            (i = (e = t).target),
                            void (
                                ("attributes" !== e.type
                                    ? function (t) {
                                          for (var e = t.addedNodes, n = t.removedNodes, i = 0; i < e.length; i++) Ae(e[i], Cr);
                                          for (var r = 0; r < n.length; r++) Ae(n[r], Ar);
                                          return 1;
                                      }
                                    : function (t) {
                                          var e = t.target,
                                              n = t.attributeName;
                                          if ("href" === n) return 1;
                                          var i = Qn(n);
                                          if (!(i && i in _r)) return;
                                          if (st(e, n)) return _r[i](e), 1;
                                          var r = _r.getComponent(e, i);
                                          if (r) return r.$destroy(), 1;
                                      })(e) &&
                                !n.some(function (t) {
                                    return t.contains(i);
                                }) &&
                                n.push(i.contains ? i : i.parentNode)
                            )
                        );
                        var e, n, i;
                    }),
                        r.forEach(function (t) {
                            return _r.update(t);
                        });
                }).observe(document, { childList: !0, subtree: !0, characterData: !0, attributes: !0 }),
                    (_r._initialized = !0);
            });
    var zr = {
        mixins: [pi],
        props: { date: String, clsWrapper: String },
        data: { date: "", clsWrapper: ".uk-countdown-%unit%" },
        computed: {
            date: function (t) {
                var e = t.date;
                return Date.parse(e);
            },
            days: function (t, e) {
                return Ne(t.clsWrapper.replace("%unit%", "days"), e);
            },
            hours: function (t, e) {
                return Ne(t.clsWrapper.replace("%unit%", "hours"), e);
            },
            minutes: function (t, e) {
                return Ne(t.clsWrapper.replace("%unit%", "minutes"), e);
            },
            seconds: function (t, e) {
                return Ne(t.clsWrapper.replace("%unit%", "seconds"), e);
            },
            units: function () {
                var e = this;
                return ["days", "hours", "minutes", "seconds"].filter(function (t) {
                    return e[t];
                });
            },
        },
        connected: function () {
            this.start();
        },
        disconnected: function () {
            var e = this;
            this.stop(),
                this.units.forEach(function (t) {
                    return ve(e[t]);
                });
        },
        events: [
            {
                name: "visibilitychange",
                el: ct && document,
                handler: function () {
                    document.hidden ? this.stop() : this.start();
                },
            },
        ],
        update: {
            write: function () {
                var t,
                    e,
                    i = this,
                    r = ((t = this.date), { total: (e = t - Date.now()), seconds: (e / 1e3) % 60, minutes: (e / 1e3 / 60) % 60, hours: (e / 1e3 / 60 / 60) % 24, days: e / 1e3 / 60 / 60 / 24 });
                r.total <= 0 && (this.stop(), (r.days = r.hours = r.minutes = r.seconds = 0)),
                    this.units.forEach(function (t) {
                        var e = (e = String(Math.floor(r[t]))).length < 2 ? "0" + e : e,
                            n = i[t];
                        n.textContent !== e &&
                            ((e = e.split("")).length !== n.children.length &&
                                we(
                                    n,
                                    e
                                        .map(function () {
                                            return "<span></span>";
                                        })
                                        .join("")
                                ),
                            e.forEach(function (t, e) {
                                return (n.children[e].textContent = t);
                            }));
                    });
            },
        },
        methods: {
            start: function () {
                this.stop(), this.date && this.units.length && (this.$update(), (this.timer = setInterval(this.$update, 1e3)));
            },
            stop: function () {
                this.timer && (clearInterval(this.timer), (this.timer = null));
            },
        },
    };
    var Br,
        Pr = "uk-animation-target",
        Or = {
            props: { animation: Number },
            data: { animation: 150 },
            methods: {
                animate: function (t, i) {
                    var n = this;
                    void 0 === i && (i = this.$el),
                        (function () {
                            if (Br) return;
                            (Br = be(document.head, "<style>").sheet).insertRule("." + Pr + " > * {\n            margin-top: 0 !important;\n            transform: none !important;\n        }", 0);
                        })();
                    var r = Yt(i),
                        o = r.map(function (t) {
                            return Hr(t, !0);
                        }),
                        e = ln(i),
                        s = window.pageYOffset;
                    t(), Qe.cancel(i), r.forEach(Qe.cancel), Lr(i), this.$update(i, "resize"), yn.flush();
                    var a = ln(i),
                        u = (r = r.concat(
                            Yt(i).filter(function (t) {
                                return !b(r, t);
                            })
                        )).map(function (t, e) {
                            return !!(t.parentNode && e in o) && (o[e] ? (Ft(t) ? jr(t) : { opacity: 0 }) : { opacity: Ft(t) ? 1 : 0 });
                        }),
                        o = u.map(function (t, e) {
                            var n = r[e].parentNode === i && (o[e] || Hr(r[e]));
                            return n && (t ? "opacity" in t || (n.opacity % 1 ? (t.opacity = 1) : delete n.opacity) : delete n.opacity), n;
                        });
                    return (
                        ze(i, Pr),
                        r.forEach(function (t, e) {
                            return o[e] && Re(t, o[e]);
                        }),
                        Re(i, { height: e, display: "block" }),
                        qn(window, s),
                        ae
                            .all(
                                r
                                    .map(function (t, e) {
                                        return (
                                            ["top", "left", "height", "width"].some(function (t) {
                                                return o[e][t] !== u[e][t];
                                            }) && Qe.start(t, u[e], n.animation, "ease")
                                        );
                                    })
                                    .concat(e !== a && Qe.start(i, { height: a }, this.animation, "ease"))
                            )
                            .then(function () {
                                r.forEach(function (t, e) {
                                    return Re(t, { display: 0 === u[e].opacity ? "none" : "", zIndex: "" });
                                }),
                                    Lr(i),
                                    n.$update(i, "resize"),
                                    yn.flush();
                            }, et)
                    );
                },
            },
        };
    function Hr(t, e) {
        var n = Re(t, "zIndex");
        return !!Ft(t) && G({ display: "", opacity: e ? Re(t, "opacity") : "0", pointerEvents: "none", position: "absolute", zIndex: "auto" === n ? ge(t) : n }, jr(t));
    }
    function Lr(t) {
        Re(t.children, { height: "", left: "", opacity: "", pointerEvents: "", position: "", top: "", width: "" }), Be(t, Pr), Re(t, { height: "", display: "" });
    }
    function jr(t) {
        var e = an(t),
            n = e.height,
            i = e.width,
            r = cn(t);
        return { top: r.top, left: r.left, height: n, width: i };
    }
    var Fr = {
        mixins: [Or],
        args: "target",
        props: { target: Boolean, selActive: Boolean },
        data: { target: null, selActive: !1, attrItem: "uk-filter-control", cls: "uk-active", animation: 250 },
        computed: {
            toggles: {
                get: function (t, e) {
                    t.attrItem;
                    return Me("[" + this.attrItem + "],[data-" + this.attrItem + "]", e);
                },
                watch: function () {
                    var e,
                        n = this;
                    this.updateState(),
                        !1 !== this.selActive &&
                            ((e = Me(this.selActive, this.$el)),
                            this.toggles.forEach(function (t) {
                                return Le(t, n.cls, b(e, t));
                            }));
                },
                immediate: !0,
            },
            children: {
                get: function (t, e) {
                    return Me(t.target + " > *", e);
                },
                watch: function (t, e) {
                    var n, i;
                    (i = e),
                        ((n = t).length === i.length &&
                            n.every(function (t) {
                                return ~i.indexOf(t);
                            })) ||
                            this.updateState();
                },
            },
        },
        events: [
            {
                name: "click",
                delegate: function () {
                    return "[" + this.attrItem + "],[data-" + this.attrItem + "]";
                },
                handler: function (t) {
                    t.preventDefault(), this.apply(t.current);
                },
            },
        ],
        methods: {
            apply: function (t) {
                this.setState(Rr(t, this.attrItem, this.getState()));
            },
            getState: function () {
                var n = this;
                return this.toggles
                    .filter(function (t) {
                        return He(t, n.cls);
                    })
                    .reduce(
                        function (t, e) {
                            return Rr(e, n.attrItem, t);
                        },
                        { filter: { "": "" }, sort: [] }
                    );
            },
            setState: function (n, i) {
                var r = this;
                void 0 === i && (i = !0),
                    (n = G({ filter: { "": "" }, sort: [] }, n)),
                    Kt(this.$el, "beforeFilter", [this, n]),
                    this.toggles.forEach(function (t) {
                        return Le(
                            t,
                            r.cls,
                            !!(function (t, e, n) {
                                var i = n.filter;
                                void 0 === i && (i = { "": "" });
                                var r = n.sort,
                                    o = r[0],
                                    s = r[1],
                                    a = Wr(t, e),
                                    u = a.filter;
                                void 0 === u && (u = "");
                                var c = a.group;
                                void 0 === c && (c = "");
                                var h = a.sort,
                                    l = a.order;
                                void 0 === l && (l = "asc");
                                return H(h) ? (c in i && u === i[c]) || (!u && c && !(c in i) && !i[""]) : o === h && s === l;
                            })(t, r.attrItem, n)
                        );
                    }),
                    ae
                        .all(
                            Me(this.target, this.$el).map(function (t) {
                                var e = Yt(t);
                                return i
                                    ? r.animate(function () {
                                          return Vr(n, t, e);
                                      }, t)
                                    : Vr(n, t, e);
                            })
                        )
                        .then(function () {
                            return Kt(r.$el, "afterFilter", [r]);
                        });
            },
            updateState: function () {
                var t = this;
                yn.write(function () {
                    return t.setState(t.getState(), !1);
                });
            },
        },
    };
    function Wr(t, e) {
        return Mn(ut(t, e), ["filter"]);
    }
    function Vr(t, e, n) {
        var i,
            r,
            o =
                ((i = t.filter),
                (r = ""),
                K(i, function (t) {
                    return (r += t || "");
                }),
                r);
        n.forEach(function (t) {
            return Re(t, "display", o && !Dt(t, o) ? "none" : "");
        });
        var s,
            a,
            u,
            c = t.sort,
            h = c[0],
            l = c[1];
        h &&
            ((a = h),
            (u = l),
            Y(
                (s = G([], n).sort(function (t, e) {
                    return ut(t, a).localeCompare(ut(e, a), void 0, { numeric: !0 }) * ("asc" === u || -1);
                })),
                n
            ) || be(e, s));
    }
    function Rr(t, e, n) {
        var i = Wr(t, e),
            r = i.filter,
            o = i.group,
            s = i.sort,
            a = i.order;
        return (
            void 0 === a && (a = "asc"),
            (r || H(s)) && (o ? (r ? (delete n.filter[""], (n.filter[o] = r)) : (delete n.filter[o], (O(n.filter) || "" in n.filter) && (n.filter = { "": r || "" }))) : (n.filter = { "": r || "" })),
            H(s) || (n.sort = [s, a]),
            n
        );
    }
    var qr = {
        slide: {
            show: function (t) {
                return [{ transform: Yr(-100 * t) }, { transform: Yr() }];
            },
            percent: Ur,
            translate: function (t, e) {
                return [{ transform: Yr(-100 * e * t) }, { transform: Yr(100 * e * (1 - t)) }];
            },
        },
    };
    function Ur(t) {
        return Math.abs(Re(t, "transform").split(",")[4] / t.offsetWidth) || 0;
    }
    function Yr(t, e) {
        return void 0 === t && (t = 0), void 0 === e && (e = "%"), (t += t ? e : ""), ht ? "translateX(" + t + ")" : "translate3d(" + t + ", 0, 0)";
    }
    function Xr(t) {
        return "scale3d(" + t + ", " + t + ", 1)";
    }
    var Gr = G({}, qr, {
        fade: {
            show: function () {
                return [{ opacity: 0 }, { opacity: 1 }];
            },
            percent: function (t) {
                return 1 - Re(t, "opacity");
            },
            translate: function (t) {
                return [{ opacity: 1 - t }, { opacity: t }];
            },
        },
        scale: {
            show: function () {
                return [
                    { opacity: 0, transform: Xr(0.8) },
                    { opacity: 1, transform: Xr(1) },
                ];
            },
            percent: function (t) {
                return 1 - Re(t, "opacity");
            },
            translate: function (t) {
                return [
                    { opacity: 1 - t, transform: Xr(1 - 0.2 * t) },
                    { opacity: t, transform: Xr(0.8 + 0.2 * t) },
                ];
            },
        },
    });
    function Jr(t, e, n) {
        Kt(t, Zt(e, !1, !1, n));
    }
    var Kr = {
        mixins: [
            {
                props: { autoplay: Boolean, autoplayInterval: Number, pauseOnHover: Boolean },
                data: { autoplay: !1, autoplayInterval: 7e3, pauseOnHover: !0 },
                connected: function () {
                    this.autoplay && this.startAutoplay();
                },
                disconnected: function () {
                    this.stopAutoplay();
                },
                update: function () {
                    ot(this.slides, "tabindex", "-1");
                },
                events: [
                    {
                        name: "visibilitychange",
                        el: ct && document,
                        filter: function () {
                            return this.autoplay;
                        },
                        handler: function () {
                            document.hidden ? this.stopAutoplay() : this.startAutoplay();
                        },
                    },
                ],
                methods: {
                    startAutoplay: function () {
                        var t = this;
                        this.stopAutoplay(),
                            (this.interval = setInterval(function () {
                                return (!t.draggable || !Ne(":focus", t.$el)) && (!t.pauseOnHover || !Dt(t.$el, ":hover")) && !t.stack.length && t.show("next");
                            }, this.autoplayInterval));
                    },
                    stopAutoplay: function () {
                        this.interval && clearInterval(this.interval);
                    },
                },
            },
            {
                props: { draggable: Boolean },
                data: { draggable: !0, threshold: 10 },
                created: function () {
                    var i = this;
                    ["start", "move", "end"].forEach(function (t) {
                        var n = i[t];
                        i[t] = function (t) {
                            var e = oe(t).x * (lt ? -1 : 1);
                            (i.prevPos = e !== i.pos ? i.pos : i.prevPos), (i.pos = e), n(t);
                        };
                    });
                },
                events: [
                    {
                        name: gt,
                        delegate: function () {
                            return this.selSlides;
                        },
                        handler: function (t) {
                            var e;
                            !this.draggable || (!re(t) && !(e = t.target).children.length && e.childNodes.length) || Bt(t.target, Wt) || 0 < t.button || this.length < 2 || this.start(t);
                        },
                    },
                    {
                        name: "dragstart",
                        handler: function (t) {
                            t.preventDefault();
                        },
                    },
                ],
                methods: {
                    start: function () {
                        (this.drag = this.pos),
                            this._transitioner
                                ? ((this.percent = this._transitioner.percent()),
                                  (this.drag += this._transitioner.getDistance() * this.percent * this.dir),
                                  this._transitioner.cancel(),
                                  this._transitioner.translate(this.percent),
                                  (this.dragging = !0),
                                  (this.stack = []))
                                : (this.prevIndex = this.index),
                            Xt(document, mt, this.move, { passive: !1 }),
                            Xt(document, vt + " " + xt, this.end, !0),
                            Re(this.list, "userSelect", "none");
                    },
                    move: function (t) {
                        var e = this,
                            n = this.pos - this.drag;
                        if (!(0 == n || this.prevPos === this.pos || (!this.dragging && Math.abs(n) < this.threshold))) {
                            Re(this.list, "pointerEvents", "none"), t.cancelable && t.preventDefault(), (this.dragging = !0), (this.dir = n < 0 ? 1 : -1);
                            for (var i = this.slides, r = this.prevIndex, o = Math.abs(n), s = this.getIndex(r + this.dir, r), a = this._getDistance(r, s) || i[r].offsetWidth; s !== r && a < o; )
                                (this.drag -= a * this.dir), (r = s), (o -= a), (s = this.getIndex(r + this.dir, r)), (a = this._getDistance(r, s) || i[r].offsetWidth);
                            this.percent = o / a;
                            var u,
                                c = i[r],
                                h = i[s],
                                l = this.index !== s,
                                d = r === s;
                            [this.index, this.prevIndex]
                                .filter(function (t) {
                                    return !b([s, r], t);
                                })
                                .forEach(function (t) {
                                    Kt(i[t], "itemhidden", [e]), d && ((u = !0), (e.prevIndex = r));
                                }),
                                ((this.index === r && this.prevIndex !== r) || u) && Kt(i[this.index], "itemshown", [this]),
                                l && ((this.prevIndex = r), (this.index = s), d || Kt(c, "beforeitemhide", [this]), Kt(h, "beforeitemshow", [this])),
                                (this._transitioner = this._translate(Math.abs(this.percent), c, !d && h)),
                                l && (d || Kt(c, "itemhide", [this]), Kt(h, "itemshow", [this]));
                        }
                    },
                    end: function () {
                        var t;
                        Gt(document, mt, this.move, { passive: !1 }),
                            Gt(document, vt + " " + xt, this.end, !0),
                            this.dragging &&
                                ((this.dragging = null),
                                this.index === this.prevIndex
                                    ? ((this.percent = 1 - this.percent), (this.dir *= -1), this._show(!1, this.index, !0), (this._transitioner = null))
                                    : ((t = (lt ? this.dir * (lt ? 1 : -1) : this.dir) < 0 == this.prevPos > this.pos),
                                      (this.index = t ? this.index : this.prevIndex),
                                      t && (this.percent = 1 - this.percent),
                                      this.show((0 < this.dir && !t) || (this.dir < 0 && t) ? "next" : "previous", !0))),
                            Re(this.list, { userSelect: "", pointerEvents: "" }),
                            (this.drag = this.percent = null);
                    },
                },
            },
            {
                data: { selNav: !1 },
                computed: {
                    nav: function (t, e) {
                        return Ne(t.selNav, e);
                    },
                    selNavItem: function (t) {
                        var e = t.attrItem;
                        return "[" + e + "],[data-" + e + "]";
                    },
                    navItems: function (t, e) {
                        return Me(this.selNavItem, e);
                    },
                },
                update: {
                    write: function () {
                        var n = this;
                        this.nav &&
                            this.length !== this.nav.children.length &&
                            we(
                                this.nav,
                                this.slides
                                    .map(function (t, e) {
                                        return "<li " + n.attrItem + '="' + e + '"><a href></a></li>';
                                    })
                                    .join("")
                            ),
                            Le(Me(this.selNavItem, this.$el).concat(this.nav), "uk-hidden", !this.maxIndex),
                            this.updateNav();
                    },
                    events: ["resize"],
                },
                events: [
                    {
                        name: "click",
                        delegate: function () {
                            return this.selNavItem;
                        },
                        handler: function (t) {
                            t.preventDefault(), this.show(ut(t.current, this.attrItem));
                        },
                    },
                    { name: "itemshow", handler: "updateNav" },
                ],
                methods: {
                    updateNav: function () {
                        var n = this,
                            i = this.getValidIndex();
                        this.navItems.forEach(function (t) {
                            var e = ut(t, n.attrItem);
                            Le(t, n.clsActive, j(e) === i), Le(t, "uk-invisible", n.finite && (("previous" === e && 0 === i) || ("next" === e && i >= n.maxIndex)));
                        });
                    },
                },
            },
        ],
        props: { clsActivated: Boolean, easing: String, index: Number, finite: Boolean, velocity: Number, selSlides: String },
        data: function () {
            return { easing: "ease", finite: !1, velocity: 1, index: 0, prevIndex: -1, stack: [], percent: 0, clsActive: "uk-active", clsActivated: !1, Transitioner: !1, transitionOptions: {} };
        },
        connected: function () {
            (this.prevIndex = -1), (this.index = this.getValidIndex(this.index)), (this.stack = []);
        },
        disconnected: function () {
            Be(this.slides, this.clsActive);
        },
        computed: {
            duration: function (t, e) {
                var n = t.velocity;
                return Zr(e.offsetWidth / n);
            },
            list: function (t, e) {
                return Ne(t.selList, e);
            },
            maxIndex: function () {
                return this.length - 1;
            },
            selSlides: function (t) {
                return t.selList + " " + (t.selSlides || "> *");
            },
            slides: {
                get: function () {
                    return Me(this.selSlides, this.$el);
                },
                watch: function () {
                    this.$reset();
                },
            },
            length: function () {
                return this.slides.length;
            },
        },
        events: {
            itemshown: function () {
                this.$update(this.list);
            },
        },
        methods: {
            show: function (t, e) {
                var n = this;
                if ((void 0 === e && (e = !1), !this.dragging && this.length)) {
                    var i = this.stack,
                        r = e ? 0 : i.length,
                        o = function () {
                            i.splice(r, 1), i.length && n.show(i.shift(), !0);
                        };
                    if ((i[e ? "unshift" : "push"](t), !e && 1 < i.length)) 2 === i.length && this._transitioner.forward(Math.min(this.duration, 200));
                    else {
                        var s,
                            a,
                            u = this.getIndex(this.index),
                            c = He(this.slides, this.clsActive) && this.slides[u],
                            h = this.getIndex(t, this.index),
                            l = this.slides[h];
                        if (c !== l) {
                            if (((this.dir = ((a = u), "next" !== (s = t) && ("previous" === s || s < a) ? -1 : 1)), (this.prevIndex = u), (this.index = h), (c && !Kt(c, "beforeitemhide", [this])) || !Kt(l, "beforeitemshow", [this, c])))
                                return (this.index = this.prevIndex), void o();
                            var d = this._show(c, l, e).then(function () {
                                return (
                                    c && Kt(c, "itemhidden", [n]),
                                    Kt(l, "itemshown", [n]),
                                    new ae(function (t) {
                                        yn.write(function () {
                                            i.shift(), i.length ? n.show(i.shift(), !0) : (n._transitioner = null), t();
                                        });
                                    })
                                );
                            });
                            return c && Kt(c, "itemhide", [this]), Kt(l, "itemshow", [this]), d;
                        }
                        o();
                    }
                }
            },
            getIndex: function (t, e) {
                return void 0 === t && (t = this.index), void 0 === e && (e = this.index), tt(me(t, this.slides, e, this.finite), 0, this.maxIndex);
            },
            getValidIndex: function (t, e) {
                return void 0 === t && (t = this.index), void 0 === e && (e = this.prevIndex), this.getIndex(t, e);
            },
            _show: function (t, e, n) {
                if (
                    ((this._transitioner = this._getTransitioner(
                        t,
                        e,
                        this.dir,
                        G({ easing: n ? (e.offsetWidth < 600 ? "cubic-bezier(0.25, 0.46, 0.45, 0.94)" : "cubic-bezier(0.165, 0.84, 0.44, 1)") : this.easing }, this.transitionOptions)
                    )),
                    !n && !t)
                )
                    return this._translate(1), ae.resolve();
                var i = this.stack.length;
                return this._transitioner[1 < i ? "forward" : "show"](1 < i ? Math.min(this.duration, 75 + 75 / (i - 1)) : this.duration, this.percent);
            },
            _getDistance: function (t, e) {
                return this._getTransitioner(t, t !== e && e).getDistance();
            },
            _translate: function (t, e, n) {
                void 0 === e && (e = this.prevIndex), void 0 === n && (n = this.index);
                var i = this._getTransitioner(e !== n && e, n);
                return i.translate(t), i;
            },
            _getTransitioner: function (t, e, n, i) {
                return (
                    void 0 === t && (t = this.prevIndex),
                    void 0 === e && (e = this.index),
                    void 0 === n && (n = this.dir || 1),
                    void 0 === i && (i = this.transitionOptions),
                    new this.Transitioner(B(t) ? this.slides[t] : t, B(e) ? this.slides[e] : e, n * (lt ? -1 : 1), i)
                );
            },
        },
    };
    function Zr(t) {
        return 0.5 * t + 300;
    }
    var Qr = {
            mixins: [Kr],
            props: { animation: String },
            data: {
                animation: "slide",
                clsActivated: "uk-transition-active",
                Animations: qr,
                Transitioner: function (o, s, a, t) {
                    var e = t.animation,
                        u = t.easing,
                        n = e.percent,
                        i = e.translate,
                        r = e.show;
                    void 0 === r && (r = et);
                    var c = r(a),
                        h = new se();
                    return {
                        dir: a,
                        show: function (t, e, n) {
                            var i = this;
                            void 0 === e && (e = 0);
                            var r = n ? "linear" : u;
                            return (
                                (t -= Math.round(t * tt(e, -1, 1))),
                                this.translate(e),
                                Jr(s, "itemin", { percent: e, duration: t, timing: r, dir: a }),
                                Jr(o, "itemout", { percent: 1 - e, duration: t, timing: r, dir: a }),
                                ae.all([Qe.start(s, c[1], t, r), Qe.start(o, c[0], t, r)]).then(function () {
                                    i.reset(), h.resolve();
                                }, et),
                                h.promise
                            );
                        },
                        stop: function () {
                            return Qe.stop([s, o]);
                        },
                        cancel: function () {
                            Qe.cancel([s, o]);
                        },
                        reset: function () {
                            for (var t in c[0]) Re([s, o], t, "");
                        },
                        forward: function (t, e) {
                            return void 0 === e && (e = this.percent()), Qe.cancel([s, o]), this.show(t, e, !0);
                        },
                        translate: function (t) {
                            this.reset();
                            var e = i(t, a);
                            Re(s, e[1]), Re(o, e[0]), Jr(s, "itemtranslatein", { percent: t, dir: a }), Jr(o, "itemtranslateout", { percent: 1 - t, dir: a });
                        },
                        percent: function () {
                            return n(o || s, s, a);
                        },
                        getDistance: function () {
                            return o && o.offsetWidth;
                        },
                    };
                },
            },
            computed: {
                animation: function (t) {
                    var e = t.animation,
                        n = t.Animations;
                    return G(n[e] || n.slide, { name: e });
                },
                transitionOptions: function () {
                    return { animation: this.animation };
                },
            },
            events: {
                "itemshow itemhide itemshown itemhidden": function (t) {
                    var e = t.target;
                    this.$update(e);
                },
                beforeitemshow: function (t) {
                    ze(t.target, this.clsActive);
                },
                itemshown: function (t) {
                    ze(t.target, this.clsActivated);
                },
                itemhidden: function (t) {
                    Be(t.target, this.clsActive, this.clsActivated);
                },
            },
        },
        to = {
            mixins: [lr, fr, gi, Qr],
            functional: !0,
            props: { delayControls: Number, preload: Number, videoAutoplay: Boolean, template: String },
            data: function () {
                return {
                    preload: 1,
                    videoAutoplay: !1,
                    delayControls: 3e3,
                    items: [],
                    cls: "uk-open",
                    clsPage: "uk-lightbox-page",
                    selList: ".uk-lightbox-items",
                    attrItem: "uk-lightbox-item",
                    selClose: ".uk-close-large",
                    selCaption: ".uk-lightbox-caption",
                    pauseOnHover: !1,
                    velocity: 2,
                    Animations: Gr,
                    template:
                        '<div class="uk-lightbox uk-overflow-hidden"> <ul class="uk-lightbox-items"></ul> <div class="uk-lightbox-toolbar uk-position-top uk-text-right uk-transition-slide-top uk-transition-opaque"> <button class="uk-lightbox-toolbar-icon uk-close-large" type="button" uk-close></button> </div> <a class="uk-lightbox-button uk-position-center-left uk-position-medium uk-transition-fade" href uk-slidenav-previous uk-lightbox-item="previous"></a> <a class="uk-lightbox-button uk-position-center-right uk-position-medium uk-transition-fade" href uk-slidenav-next uk-lightbox-item="next"></a> <div class="uk-lightbox-toolbar uk-lightbox-caption uk-position-bottom uk-text-center uk-transition-slide-bottom uk-transition-opaque"></div> </div>',
                };
            },
            created: function () {
                var t = Ne(this.template),
                    e = Ne(this.selList, t);
                this.items.forEach(function () {
                    return be(e, "<li>");
                }),
                    this.$mount(be(this.container, t));
            },
            computed: {
                caption: function (t, e) {
                    t.selCaption;
                    return Ne(".uk-lightbox-caption", e);
                },
            },
            events: [
                { name: mt + " " + gt + " keydown", handler: "showControls" },
                {
                    name: "click",
                    self: !0,
                    delegate: function () {
                        return this.selSlides;
                    },
                    handler: function (t) {
                        t.defaultPrevented || this.hide();
                    },
                },
                {
                    name: "shown",
                    self: !0,
                    handler: function () {
                        this.showControls();
                    },
                },
                {
                    name: "hide",
                    self: !0,
                    handler: function () {
                        this.hideControls(), Be(this.slides, this.clsActive), Qe.stop(this.slides);
                    },
                },
                {
                    name: "hidden",
                    self: !0,
                    handler: function () {
                        this.$destroy(!0);
                    },
                },
                {
                    name: "keyup",
                    el: ct && document,
                    handler: function (t) {
                        if (this.isToggled(this.$el) && this.draggable)
                            switch (t.keyCode) {
                                case 37:
                                    this.show("previous");
                                    break;
                                case 39:
                                    this.show("next");
                            }
                    },
                },
                {
                    name: "beforeitemshow",
                    handler: function (t) {
                        this.isToggled() || ((this.draggable = !1), t.preventDefault(), this.toggleElement(this.$el, !0, !1), (this.animation = Gr.scale), Be(t.target, this.clsActive), this.stack.splice(1, 0, this.index));
                    },
                },
                {
                    name: "itemshow",
                    handler: function () {
                        we(this.caption, this.getItem().caption || "");
                        for (var t = -this.preload; t <= this.preload; t++) this.loadItem(this.index + t);
                    },
                },
                {
                    name: "itemshown",
                    handler: function () {
                        this.draggable = this.$props.draggable;
                    },
                },
                {
                    name: "itemload",
                    handler: function (t, r) {
                        var o = this,
                            i = r.source,
                            e = r.type,
                            s = r.alt;
                        void 0 === s && (s = "");
                        var a,
                            u,
                            n,
                            c = r.poster,
                            h = r.attrs;
                        void 0 === h && (h = {}),
                            this.setItem(r, "<span uk-spinner></span>"),
                            i &&
                                ((u = { frameborder: "0", allow: "autoplay", allowfullscreen: "", style: "max-width: 100%; box-sizing: border-box;", "uk-responsive": "", "uk-video": "" + this.videoAutoplay }),
                                "image" === e || i.match(/\.(jpe?g|png|gif|svg|webp)($|\?)/i)
                                    ? fe(i, h.srcset, h.size).then(
                                          function (t) {
                                              var e = t.width,
                                                  n = t.height;
                                              return o.setItem(r, eo("img", G({ src: i, width: e, height: n, alt: s }, h)));
                                          },
                                          function () {
                                              return o.setError(r);
                                          }
                                      )
                                    : "video" === e || i.match(/\.(mp4|webm|ogv)($|\?)/i)
                                    ? (Xt((n = eo("video", G({ src: i, poster: c, controls: "", playsinline: "", "uk-video": "" + this.videoAutoplay }, h))), "loadedmetadata", function () {
                                          ot(n, { width: n.videoWidth, height: n.videoHeight }), o.setItem(r, n);
                                      }),
                                      Xt(n, "error", function () {
                                          return o.setError(r);
                                      }))
                                    : "iframe" === e || i.match(/\.(html|php)($|\?)/i)
                                    ? this.setItem(r, eo("iframe", G({ src: i, frameborder: "0", allowfullscreen: "", class: "uk-lightbox-iframe" }, h)))
                                    : (a = i.match(/\/\/(?:.*?youtube(-nocookie)?\..*?[?&]v=|youtu\.be\/)([\w-]{11})[&?]?(.*)?/))
                                    ? this.setItem(r, eo("iframe", G({ src: "https://www.youtube" + (a[1] || "") + ".com/embed/" + a[2] + (a[3] ? "?" + a[3] : ""), width: 1920, height: 1080 }, u, h)))
                                    : (a = i.match(/\/\/.*?vimeo\.[a-z]+\/(\d+)[&?]?(.*)?/)) &&
                                      de("https://vimeo.com/api/oembed.json?maxwidth=1920&url=" + encodeURI(i), { responseType: "json", withCredentials: !1 }).then(
                                          function (t) {
                                              var e = t.response,
                                                  n = e.height,
                                                  i = e.width;
                                              return o.setItem(r, eo("iframe", G({ src: "https://player.vimeo.com/video/" + a[1] + (a[2] ? "?" + a[2] : ""), width: i, height: n }, u, h)));
                                          },
                                          function () {
                                              return o.setError(r);
                                          }
                                      ));
                    },
                },
            ],
            methods: {
                loadItem: function (t) {
                    void 0 === t && (t = this.index);
                    var e = this.getItem(t);
                    this.getSlide(e).childElementCount || Kt(this.$el, "itemload", [e]);
                },
                getItem: function (t) {
                    return void 0 === t && (t = this.index), this.items[me(t, this.slides)];
                },
                setItem: function (t, e) {
                    Kt(this.$el, "itemloaded", [this, we(this.getSlide(t), e)]);
                },
                getSlide: function (t) {
                    return this.slides[this.items.indexOf(t)];
                },
                setError: function (t) {
                    this.setItem(t, '<span uk-icon="icon: bolt; ratio: 2"></span>');
                },
                showControls: function () {
                    clearTimeout(this.controlsTimer), (this.controlsTimer = setTimeout(this.hideControls, this.delayControls)), ze(this.$el, "uk-active", "uk-transition-active");
                },
                hideControls: function () {
                    Be(this.$el, "uk-active", "uk-transition-active");
                },
            },
        };
    function eo(t, e) {
        var n = Ce("<" + t + ">");
        return ot(n, e), n;
    }
    var no,
        io = {
            install: function (t, e) {
                t.lightboxPanel || t.component("lightboxPanel", to);
                G(e.props, t.component("lightboxPanel").options.props);
            },
            props: { toggle: String },
            data: { toggle: "a" },
            computed: {
                toggles: {
                    get: function (t, e) {
                        return Me(t.toggle, e);
                    },
                    watch: function () {
                        this.hide();
                    },
                },
            },
            disconnected: function () {
                this.hide();
            },
            events: [
                {
                    name: "click",
                    delegate: function () {
                        return this.toggle + ":not(.uk-disabled)";
                    },
                    handler: function (t) {
                        t.preventDefault(), this.show(t.current);
                    },
                },
            ],
            methods: {
                show: function (t) {
                    var n,
                        e = this,
                        i = Q(this.toggles.map(ro), "source");
                    return (
                        N(t) &&
                            ((n = ro(t).source),
                            (t = y(i, function (t) {
                                var e = t.source;
                                return n === e;
                            }))),
                        (this.panel = this.panel || this.$create("lightboxPanel", G({}, this.$props, { items: i }))),
                        Xt(this.panel.$el, "hidden", function () {
                            return (e.panel = !1);
                        }),
                        this.panel.show(t)
                    );
                },
                hide: function () {
                    return this.panel && this.panel.hide();
                },
            },
        };
    function ro(e) {
        var n = {};
        return (
            ["href", "caption", "type", "poster", "alt", "attrs"].forEach(function (t) {
                n["href" === t ? "source" : t] = ut(e, t);
            }),
            (n.attrs = Mn(n.attrs)),
            n
        );
    }
    var oo = {
        functional: !0,
        args: ["message", "status"],
        data: { message: "", status: "", timeout: 5e3, group: null, pos: "top-center", clsContainer: "uk-notification", clsClose: "uk-notification-close", clsMsg: "uk-notification-message" },
        install: function (r) {
            r.notification.closeAll = function (n, i) {
                Ae(document.body, function (t) {
                    var e = r.getComponent(t, "notification");
                    !e || (n && n !== e.group) || e.close(i);
                });
            };
        },
        computed: {
            marginProp: function (t) {
                return "margin" + (w(t.pos, "top") ? "Top" : "Bottom");
            },
            startProps: function () {
                var t = { opacity: 0 };
                return (t[this.marginProp] = -this.$el.offsetHeight), t;
            },
        },
        created: function () {
            var t = Ne("." + this.clsContainer + "-" + this.pos, this.$container) || be(this.$container, '<div class="' + this.clsContainer + " " + this.clsContainer + "-" + this.pos + '" style="display: block"></div>');
            this.$mount(be(t, '<div class="' + this.clsMsg + (this.status ? " " + this.clsMsg + "-" + this.status : "") + '"> <a href class="' + this.clsClose + '" data-uk-close></a> <div>' + this.message + "</div> </div>"));
        },
        connected: function () {
            var t,
                e = this,
                n = F(Re(this.$el, this.marginProp));
            Qe.start(Re(this.$el, this.startProps), (((t = { opacity: 1 })[this.marginProp] = n), t)).then(function () {
                e.timeout && (e.timer = setTimeout(e.close, e.timeout));
            });
        },
        events:
            (((no = {
                click: function (t) {
                    Bt(t.target, 'a[href="#"],a[href=""]') && t.preventDefault(), this.close();
                },
            })[wt] = function () {
                this.timer && clearTimeout(this.timer);
            }),
            (no[bt] = function () {
                this.timeout && (this.timer = setTimeout(this.close, this.timeout));
            }),
            no),
        methods: {
            close: function (t) {
                function e() {
                    var t = n.$el.parentNode;
                    Kt(n.$el, "close", [n]), $e(n.$el), t && !t.hasChildNodes() && $e(t);
                }
                var n = this;
                this.timer && clearTimeout(this.timer), t ? e() : Qe.start(this.$el, this.startProps).then(e);
            },
        },
    };
    var so = ["x", "y", "bgx", "bgy", "rotate", "scale", "color", "backgroundColor", "borderColor", "opacity", "blur", "hue", "grayscale", "invert", "saturate", "sepia", "fopacity", "stroke"],
        ao = {
            mixins: [cr],
            props: so.reduce(function (t, e) {
                return (t[e] = "list"), t;
            }, {}),
            data: so.reduce(function (t, e) {
                return (t[e] = void 0), t;
            }, {}),
            computed: {
                props: function (g, m) {
                    var v = this;
                    return so.reduce(function (t, e) {
                        if (H(g[e])) return t;
                        var n,
                            i,
                            r = e.match(/color/i),
                            o = r || "opacity" === e,
                            s = g[e].slice(0);
                        o && Re(m, e, ""), s.length < 2 && s.unshift(("scale" === e ? 1 : o ? Re(m, e) : 0) || 0);
                        var a,
                            u,
                            c,
                            h,
                            l,
                            d,
                            f = s.reduce(function (t, e) {
                                return (z(e) && e.replace(/-|\d/g, "").trim()) || t;
                            }, "");
                        if (
                            (r
                                ? ((a = m.style.color),
                                  (s = s.map(function (t) {
                                      return Re(Re(m, "color", t), "color").split(/[(),]/g).slice(1, -1).concat(1).slice(0, 4).map(F);
                                  })),
                                  (m.style.color = a))
                                : w(e, "bg")
                                ? ((u = "bgy" === e ? "height" : "width"),
                                  (s = s.map(function (t) {
                                      return bn(t, u, v.$el);
                                  })),
                                  Re(m, "background-position-" + e[2], ""),
                                  (i = Re(m, "backgroundPosition").split(" ")["x" === e[2] ? 0 : 1]),
                                  (n = v.covers
                                      ? ((c = Math.min.apply(Math, s)),
                                        (h = Math.max.apply(Math, s)),
                                        (l = s.indexOf(c) < s.indexOf(h)),
                                        (d = h - c),
                                        (s = s.map(function (t) {
                                            return t - (l ? c : h);
                                        })),
                                        (l ? -d : 0) + "px")
                                      : i))
                                : (s = s.map(F)),
                            "stroke" === e)
                        ) {
                            if (
                                !s.some(function (t) {
                                    return t;
                                })
                            )
                                return t;
                            var p = Wi(v.$el);
                            Re(m, "strokeDasharray", p),
                                "%" === f &&
                                    (s = s.map(function (t) {
                                        return (t * p) / 100;
                                    })),
                                (s = s.reverse()),
                                (e = "strokeDashoffset");
                        }
                        return (t[e] = { steps: s, unit: f, pos: n, bgPos: i, diff: d }), t;
                    }, {});
                },
                bgProps: function () {
                    var e = this;
                    return ["bgx", "bgy"].filter(function (t) {
                        return t in e.props;
                    });
                },
                covers: function (t, e) {
                    return (i = (n = e).style.backgroundSize), (r = "cover" === Re(Re(n, "backgroundSize", ""), "backgroundSize")), (n.style.backgroundSize = i), r;
                    var n, i, r;
                },
            },
            disconnected: function () {
                delete this._image;
            },
            update: {
                read: function (t) {
                    var e,
                        n,
                        i,
                        u,
                        c,
                        h,
                        l = this;
                    (t.active = this.matchMedia),
                        t.active &&
                            (t.image ||
                                !this.covers ||
                                !this.bgProps.length ||
                                ((e = Re(this.$el, "backgroundImage").replace(/^none|url\(["']?(.+?)["']?\)$/, "$1")) &&
                                    (((n = new Image()).src = e),
                                    (t.image = n).naturalWidth ||
                                        (n.onload = function () {
                                            return l.$update();
                                        }))),
                            (i = t.image) &&
                                i.naturalWidth &&
                                ((u = { width: this.$el.offsetWidth, height: this.$el.offsetHeight }),
                                (c = { width: i.naturalWidth, height: i.naturalHeight }),
                                (h = rt.cover(c, u)),
                                this.bgProps.forEach(function (t) {
                                    var e,
                                        n = l.props[t],
                                        i = n.diff,
                                        r = n.bgPos,
                                        o = n.steps,
                                        s = "bgy" === t ? "height" : "width",
                                        a = h[s] - u[s];
                                    a < i
                                        ? (u[s] = h[s] + i - a)
                                        : i < a &&
                                          (e = u[s] / bn(r, s, l.$el)) &&
                                          (l.props[t].steps = o.map(function (t) {
                                              return t - (a - i) / e;
                                          })),
                                        (h = rt.cover(c, u));
                                }),
                                (t.dim = h)));
                },
                write: function (t) {
                    var e = t.dim;
                    t.active ? e && Re(this.$el, { backgroundSize: e.width + "px " + e.height + "px", backgroundRepeat: "no-repeat" }) : Re(this.$el, { backgroundSize: "", backgroundRepeat: "" });
                },
                events: ["resize"],
            },
            methods: {
                reset: function () {
                    var n = this;
                    K(this.getCss(0), function (t, e) {
                        return Re(n.$el, e, "");
                    });
                },
                getCss: function (l) {
                    var d = this.props;
                    return Object.keys(d).reduce(
                        function (t, e) {
                            var n = d[e],
                                i = n.steps,
                                r = n.unit,
                                o = n.pos,
                                s = (function (t, e, n) {
                                    void 0 === n && (n = 2);
                                    var i = uo(t, e),
                                        r = i[0],
                                        o = i[1],
                                        s = i[2];
                                    return (B(r) ? r + Math.abs(r - o) * s * (r < o ? 1 : -1) : +o).toFixed(n);
                                })(i, l);
                            switch (e) {
                                case "x":
                                case "y":
                                    (r = r || "px"), (t.transform += " translate" + p(e) + "(" + F(s).toFixed("px" === r ? 0 : 2) + r + ")");
                                    break;
                                case "rotate":
                                    (r = r || "deg"), (t.transform += " rotate(" + (s + r) + ")");
                                    break;
                                case "scale":
                                    t.transform += " scale(" + s + ")";
                                    break;
                                case "bgy":
                                case "bgx":
                                    t["background-position-" + e[2]] = "calc(" + o + " + " + s + "px)";
                                    break;
                                case "color":
                                case "backgroundColor":
                                case "borderColor":
                                    var a = uo(i, l),
                                        u = a[0],
                                        c = a[1],
                                        h = a[2];
                                    t[e] =
                                        "rgba(" +
                                        u
                                            .map(function (t, e) {
                                                return (t += h * (c[e] - t)), 3 === e ? F(t) : parseInt(t, 10);
                                            })
                                            .join(",") +
                                        ")";
                                    break;
                                case "blur":
                                    (r = r || "px"), (t.filter += " blur(" + (s + r) + ")");
                                    break;
                                case "hue":
                                    (r = r || "deg"), (t.filter += " hue-rotate(" + (s + r) + ")");
                                    break;
                                case "fopacity":
                                    (r = r || "%"), (t.filter += " opacity(" + (s + r) + ")");
                                    break;
                                case "grayscale":
                                case "invert":
                                case "saturate":
                                case "sepia":
                                    (r = r || "%"), (t.filter += " " + e + "(" + (s + r) + ")");
                                    break;
                                default:
                                    t[e] = s;
                            }
                            return t;
                        },
                        { transform: "", filter: "" }
                    );
                },
            },
        };
    function uo(t, e) {
        var n = t.length - 1,
            i = Math.min(Math.floor(n * e), n - 1),
            r = t.slice(i, i + 2);
        return r.push(1 === e ? 1 : (e % (1 / n)) * n), r;
    }
    var co = {
        mixins: [ao],
        props: { target: String, viewport: Number, easing: Number },
        data: { target: !1, viewport: 1, easing: 1 },
        computed: {
            target: function (t, e) {
                var n = t.target;
                return (function t(e) {
                    return e ? ("offsetTop" in e ? e : t(e.parentNode)) : document.body;
                })((n && yt(n, e)) || e);
            },
        },
        update: {
            read: function (t, e) {
                var n = t.percent;
                if (("scroll" !== e && (n = !1), t.active)) {
                    var i,
                        r,
                        o = n;
                    return (i = Yn(this.target) / (this.viewport || 1)), (r = this.easing), { percent: (n = tt(i * (1 - (r - r * i)))), style: o !== n && this.getCss(n) };
                }
            },
            write: function (t) {
                var e = t.style;
                t.active ? e && Re(this.$el, e) : this.reset();
            },
            events: ["scroll", "resize"],
        },
    };
    var ho = {
        update: {
            write: function () {
                var t;
                this.stack.length || this.dragging || ((t = this.getValidIndex(this.index)), (~this.prevIndex && this.index === t) || this.show(t));
            },
            events: ["resize"],
        },
    };
    function lo(t, e, n) {
        var i,
            r = go(t, e);
        return n ? r - ((i = t), an(e).width / 2 - an(i).width / 2) : Math.min(r, fo(e));
    }
    function fo(t) {
        return Math.max(0, po(t) - an(t).width);
    }
    function po(t) {
        return vo(t).reduce(function (t, e) {
            return an(e).width + t;
        }, 0);
    }
    function go(t, e) {
        return (cn(t).left + (lt ? an(t).width - an(e).width : 0)) * (lt ? -1 : 1);
    }
    function mo(t, e, n) {
        Kt(t, Zt(e, !1, !1, n));
    }
    function vo(t) {
        return Yt(t);
    }
    var wo = {
            mixins: [pi, Kr, ho],
            props: { center: Boolean, sets: Boolean },
            data: {
                center: !1,
                sets: !1,
                attrItem: "uk-slider-item",
                selList: ".uk-slider-items",
                selNav: ".uk-slider-nav",
                clsContainer: "uk-slider-container",
                Transitioner: function (o, s, a, t) {
                    var e = t.center,
                        u = t.easing,
                        c = t.list,
                        h = new se(),
                        n = o ? lo(o, c, e) : lo(s, c, e) + an(s).width * a,
                        l = s ? lo(s, c, e) : n + an(o).width * a * (lt ? -1 : 1);
                    return {
                        dir: a,
                        show: function (t, e, n) {
                            void 0 === e && (e = 0);
                            var i = n ? "linear" : u;
                            (t -= Math.round(t * tt(e, -1, 1))),
                                this.translate(e),
                                o && this.updateTranslates(),
                                (e = o ? e : tt(e, 0, 1)),
                                mo(this.getItemIn(), "itemin", { percent: e, duration: t, timing: i, dir: a }),
                                o && mo(this.getItemIn(!0), "itemout", { percent: 1 - e, duration: t, timing: i, dir: a });
                            var r = ge(s) / 1e4;
                            return Qe.start(c, { transform: Yr((r - l) * (lt ? -1 : 1), "px") }, t, i).then(h.resolve, et), h.promise;
                        },
                        stop: function () {
                            return Qe.stop(c);
                        },
                        cancel: function () {
                            Qe.cancel(c);
                        },
                        reset: function () {
                            Re(c, "transform", "");
                        },
                        forward: function (t, e) {
                            return void 0 === e && (e = this.percent()), Qe.cancel(c), this.show(t, e, !0);
                        },
                        translate: function (t) {
                            var e = this.getDistance() * a * (lt ? -1 : 1);
                            Re(c, "transform", Yr(tt(e - e * t - l, -po(c), an(c).width) * (lt ? -1 : 1), "px")),
                                this.updateTranslates(),
                                o && ((t = tt(t, -1, 1)), mo(this.getItemIn(), "itemtranslatein", { percent: t, dir: a }), mo(this.getItemIn(!0), "itemtranslateout", { percent: 1 - t, dir: a }));
                        },
                        percent: function () {
                            return Math.abs((Re(c, "transform").split(",")[4] * (lt ? -1 : 1) + n) / (l - n));
                        },
                        getDistance: function () {
                            return Math.abs(l - n);
                        },
                        getItemIn: function (t) {
                            void 0 === t && (t = !1);
                            var e = this.getActives(),
                                n = Z(vo(c), "offsetLeft"),
                                i = ge(n, e[0 < a * (t ? -1 : 1) ? e.length - 1 : 0]);
                            return ~i && n[i + (o && !t ? a : 0)];
                        },
                        getActives: function () {
                            var n = lo(o || s, c, e);
                            return Z(
                                vo(c).filter(function (t) {
                                    var e = go(t, c);
                                    return n <= e && e + an(t).width <= an(c).width + n;
                                }),
                                "offsetLeft"
                            );
                        },
                        updateTranslates: function () {
                            var n = this.getActives();
                            vo(c).forEach(function (t) {
                                var e = b(n, t);
                                mo(t, "itemtranslate" + (e ? "in" : "out"), { percent: e ? 1 : 0, dir: t.offsetLeft <= s.offsetLeft ? 1 : -1 });
                            });
                        },
                    };
                },
            },
            computed: {
                avgWidth: function () {
                    return po(this.list) / this.length;
                },
                finite: function (t) {
                    return (
                        t.finite ||
                        Math.ceil(po(this.list)) <
                            an(this.list).width +
                                vo(this.list).reduce(function (t, e) {
                                    return Math.max(t, an(e).width);
                                }, 0) +
                                this.center
                    );
                },
                maxIndex: function () {
                    if (!this.finite || (this.center && !this.sets)) return this.length - 1;
                    if (this.center) return J(this.sets);
                    Re(this.slides, "order", "");
                    for (var t = fo(this.list), e = this.length; e--; ) if (go(this.list.children[e], this.list) < t) return Math.min(e + 1, this.length - 1);
                    return 0;
                },
                sets: function (t) {
                    var o = this,
                        e = t.sets,
                        s = an(this.list).width / (this.center ? 2 : 1),
                        a = 0,
                        u = s,
                        c = 0;
                    return (
                        !O(
                            (e =
                                e &&
                                this.slides.reduce(function (t, e, n) {
                                    var i,
                                        r = an(e).width;
                                    return (
                                        a < c + r &&
                                            (!o.center && n > o.maxIndex && (n = o.maxIndex),
                                            b(t, n) || ((i = o.slides[n + 1]), o.center && i && r < u - an(i).width / 2 ? (u -= r) : ((u = s), t.push(n), (a = c + s + (o.center ? r / 2 : 0))))),
                                        (c += r),
                                        t
                                    );
                                }, []))
                        ) && e
                    );
                },
                transitionOptions: function () {
                    return { center: this.center, list: this.list };
                },
            },
            connected: function () {
                Le(this.$el, this.clsContainer, !Ne("." + this.clsContainer, this.$el));
            },
            update: {
                write: function () {
                    var n = this;
                    Me("[" + this.attrItem + "],[data-" + this.attrItem + "]", this.$el).forEach(function (t) {
                        var e = ut(t, n.attrItem);
                        n.maxIndex && Le(t, "uk-hidden", P(e) && ((n.sets && !b(n.sets, F(e))) || e > n.maxIndex));
                    }),
                        !this.length || this.dragging || this.stack.length || (this.reorder(), this._translate(1));
                    var e = this._getTransitioner(this.index).getActives();
                    this.slides.forEach(function (t) {
                        return Le(t, n.clsActive, b(e, t));
                    }),
                        (this.sets && !b(this.sets, F(this.index))) ||
                            this.slides.forEach(function (t) {
                                return Le(t, n.clsActivated, b(e, t));
                            });
                },
                events: ["resize"],
            },
            events: {
                beforeitemshow: function (t) {
                    !this.dragging && this.sets && this.stack.length < 2 && !b(this.sets, this.index) && (this.index = this.getValidIndex());
                    var e = Math.abs(this.index - this.prevIndex + ((0 < this.dir && this.index < this.prevIndex) || (this.dir < 0 && this.index > this.prevIndex) ? (this.maxIndex + 1) * this.dir : 0));
                    if (!this.dragging && 1 < e) {
                        for (var n = 0; n < e; n++) this.stack.splice(1, 0, 0 < this.dir ? "next" : "previous");
                        t.preventDefault();
                    } else (this.duration = Zr(this.avgWidth / this.velocity) * (an(this.dir < 0 || !this.slides[this.prevIndex] ? this.slides[this.index] : this.slides[this.prevIndex]).width / this.avgWidth)), this.reorder();
                },
                itemshow: function () {
                    ~this.prevIndex && ze(this._getTransitioner().getItemIn(), this.clsActive);
                },
            },
            methods: {
                reorder: function () {
                    var n = this;
                    if (this.finite) Re(this.slides, "order", "");
                    else {
                        var i = 0 < this.dir && this.slides[this.prevIndex] ? this.prevIndex : this.index;
                        if (
                            (this.slides.forEach(function (t, e) {
                                return Re(t, "order", 0 < n.dir && e < i ? 1 : n.dir < 0 && e >= n.index ? -1 : "");
                            }),
                            this.center)
                        )
                            for (var t = this.slides[i], e = an(this.list).width / 2 - an(t).width / 2, r = 0; 0 < e; ) {
                                var o = this.getIndex(--r + i, i),
                                    s = this.slides[o];
                                Re(s, "order", i < o ? -2 : -1), (e -= an(s).width);
                            }
                    }
                },
                getValidIndex: function (t, e) {
                    if ((void 0 === t && (t = this.index), void 0 === e && (e = this.prevIndex), (t = this.getIndex(t, e)), !this.sets)) return t;
                    var n;
                    do {
                        if (b(this.sets, t)) return t;
                        (n = t), (t = this.getIndex(t + this.dir, e));
                    } while (t !== n);
                    return t;
                },
            },
        },
        bo = {
            mixins: [ao],
            data: { selItem: "!li" },
            computed: {
                item: function (t, e) {
                    return yt(t.selItem, e);
                },
            },
            events: [
                {
                    name: "itemshown",
                    self: !0,
                    el: function () {
                        return this.item;
                    },
                    handler: function () {
                        Re(this.$el, this.getCss(0.5));
                    },
                },
                {
                    name: "itemin itemout",
                    self: !0,
                    el: function () {
                        return this.item;
                    },
                    handler: function (t) {
                        var e = t.type,
                            n = t.detail,
                            i = n.percent,
                            r = n.duration,
                            o = n.timing,
                            s = n.dir;
                        Qe.cancel(this.$el), Re(this.$el, this.getCss(yo(e, s, i))), Qe.start(this.$el, this.getCss(xo(e) ? 0.5 : 0 < s ? 1 : 0), r, o).catch(et);
                    },
                },
                {
                    name: "transitioncanceled transitionend",
                    self: !0,
                    el: function () {
                        return this.item;
                    },
                    handler: function () {
                        Qe.cancel(this.$el);
                    },
                },
                {
                    name: "itemtranslatein itemtranslateout",
                    self: !0,
                    el: function () {
                        return this.item;
                    },
                    handler: function (t) {
                        var e = t.type,
                            n = t.detail,
                            i = n.percent,
                            r = n.dir;
                        Qe.cancel(this.$el), Re(this.$el, this.getCss(yo(e, r, i)));
                    },
                },
            ],
        };
    function xo(t) {
        return c(t, "in");
    }
    function yo(t, e, n) {
        return (n /= 2), xo(t) ? (e < 0 ? 1 - n : n) : e < 0 ? n : 1 - n;
    }
    var ko,
        $o,
        Io = G({}, qr, {
            fade: {
                show: function () {
                    return [{ opacity: 0, zIndex: 0 }, { zIndex: -1 }];
                },
                percent: function (t) {
                    return 1 - Re(t, "opacity");
                },
                translate: function (t) {
                    return [{ opacity: 1 - t, zIndex: 0 }, { zIndex: -1 }];
                },
            },
            scale: {
                show: function () {
                    return [{ opacity: 0, transform: Xr(1.5), zIndex: 0 }, { zIndex: -1 }];
                },
                percent: function (t) {
                    return 1 - Re(t, "opacity");
                },
                translate: function (t) {
                    return [{ opacity: 1 - t, transform: Xr(1 + 0.5 * t), zIndex: 0 }, { zIndex: -1 }];
                },
            },
            pull: {
                show: function (t) {
                    return t < 0
                        ? [
                              { transform: Yr(30), zIndex: -1 },
                              { transform: Yr(), zIndex: 0 },
                          ]
                        : [
                              { transform: Yr(-100), zIndex: 0 },
                              { transform: Yr(), zIndex: -1 },
                          ];
                },
                percent: function (t, e, n) {
                    return n < 0 ? 1 - Ur(e) : Ur(t);
                },
                translate: function (t, e) {
                    return e < 0
                        ? [
                              { transform: Yr(30 * t), zIndex: -1 },
                              { transform: Yr(-100 * (1 - t)), zIndex: 0 },
                          ]
                        : [
                              { transform: Yr(100 * -t), zIndex: 0 },
                              { transform: Yr(30 * (1 - t)), zIndex: -1 },
                          ];
                },
            },
            push: {
                show: function (t) {
                    return t < 0
                        ? [
                              { transform: Yr(100), zIndex: 0 },
                              { transform: Yr(), zIndex: -1 },
                          ]
                        : [
                              { transform: Yr(-30), zIndex: -1 },
                              { transform: Yr(), zIndex: 0 },
                          ];
                },
                percent: function (t, e, n) {
                    return 0 < n ? 1 - Ur(e) : Ur(t);
                },
                translate: function (t, e) {
                    return e < 0
                        ? [
                              { transform: Yr(100 * t), zIndex: 0 },
                              { transform: Yr(-30 * (1 - t)), zIndex: -1 },
                          ]
                        : [
                              { transform: Yr(-30 * t), zIndex: -1 },
                              { transform: Yr(100 * (1 - t)), zIndex: 0 },
                          ];
                },
            },
        }),
        So = {
            mixins: [pi, Qr, ho],
            props: { ratio: String, minHeight: Number, maxHeight: Number },
            data: { ratio: "16:9", minHeight: !1, maxHeight: !1, selList: ".uk-slideshow-items", attrItem: "uk-slideshow-item", selNav: ".uk-slideshow-nav", Animations: Io },
            update: {
                read: function () {
                    var t = this.ratio.split(":").map(Number),
                        e = t[0],
                        n = ((n = t[1]) * this.list.offsetWidth) / e || 0;
                    return this.minHeight && (n = Math.max(this.minHeight, n)), this.maxHeight && (n = Math.min(this.maxHeight, n)), { height: n - pn(this.list, "height", "content-box") };
                },
                write: function (t) {
                    var e = t.height;
                    0 < e && Re(this.list, "minHeight", e);
                },
                events: ["resize"],
            },
        },
        To = {
            mixins: [pi, Or],
            props: { group: String, threshold: Number, clsItem: String, clsPlaceholder: String, clsDrag: String, clsDragState: String, clsBase: String, clsNoDrag: String, clsEmpty: String, clsCustom: String, handle: String },
            data: {
                group: !1,
                threshold: 5,
                clsItem: "uk-sortable-item",
                clsPlaceholder: "uk-sortable-placeholder",
                clsDrag: "uk-sortable-drag",
                clsDragState: "uk-drag",
                clsBase: "uk-sortable",
                clsNoDrag: "uk-sortable-nodrag",
                clsEmpty: "uk-sortable-empty",
                clsCustom: "",
                handle: !1,
                pos: {},
            },
            created: function () {
                var n = this;
                ["init", "start", "move", "end"].forEach(function (t) {
                    var e = n[t];
                    n[t] = function (t) {
                        G(n.pos, oe(t)), e(t);
                    };
                });
            },
            events: { name: gt, passive: !1, handler: "init" },
            computed: {
                target: function () {
                    return (this.$el.tBodies || [this.$el])[0];
                },
                items: function () {
                    return Yt(this.target);
                },
                isEmpty: {
                    get: function () {
                        return O(this.items);
                    },
                    watch: function (t) {
                        Le(this.target, this.clsEmpty, t);
                    },
                    immediate: !0,
                },
                handles: {
                    get: function (t, e) {
                        var n = t.handle;
                        return n ? Me(n, e) : this.items;
                    },
                    watch: function (t, e) {
                        Re(e, { touchAction: "", userSelect: "" }), Re(t, { touchAction: pt ? "none" : "", userSelect: "none" });
                    },
                    immediate: !0,
                },
            },
            update: {
                write: function () {
                    if (this.drag && Pt(this.placeholder)) {
                        var t = this.pos,
                            e = t.x,
                            n = t.y,
                            i = this.origin,
                            r = i.offsetTop,
                            o = i.offsetLeft,
                            s = document.elementFromPoint(e, n);
                        Re(this.drag, { top: n - r, left: e - o });
                        var a = this.getSortable(s),
                            u = this.getSortable(this.placeholder),
                            c = a !== u;
                        if (a && !qt(s, this.placeholder) && (!c || (a.group && a.group === u.group))) {
                            if (
                                ((s =
                                    (a.target === s.parentNode && s) ||
                                    a.items.filter(function (t) {
                                        return qt(s, t);
                                    })[0]),
                                c)
                            )
                                u.remove(this.placeholder);
                            else if (!s) return;
                            a.insert(this.placeholder, s), b(this.touched, a) || this.touched.push(a);
                        }
                    }
                },
                events: ["move"],
            },
            methods: {
                init: function (t) {
                    var e = t.target,
                        n = t.button,
                        i = t.defaultPrevented,
                        r = this.items.filter(function (t) {
                            return qt(e, t);
                        })[0];
                    !r ||
                        i ||
                        0 < n ||
                        Vt(e) ||
                        qt(e, "." + this.clsNoDrag) ||
                        (this.handle && !qt(e, this.handle)) ||
                        (t.preventDefault(),
                        (this.touched = [this]),
                        (this.placeholder = r),
                        (this.origin = G({ target: e, index: ge(r) }, this.pos)),
                        Xt(document, mt, this.move),
                        Xt(document, vt, this.end),
                        this.threshold || this.start(t));
                },
                start: function (t) {
                    var e, n, i;
                    this.drag =
                        ((e = this.$container),
                        (n = this.placeholder),
                        (i = be(e, n.outerHTML.replace(/(^<)(?:li|tr)|(?:li|tr)(\/>$)/g, "$1div$2"))).style.setProperty("margin", "0", "important"),
                        Re(i, G({ boxSizing: "border-box", width: n.offsetWidth, height: n.offsetHeight, overflow: "hidden" }, Re(n, ["paddingLeft", "paddingRight", "paddingTop", "paddingBottom"]))),
                        ln(i.firstElementChild, ln(n.firstElementChild)),
                        i);
                    var r,
                        o,
                        s = this.placeholder.getBoundingClientRect(),
                        a = s.left,
                        u = s.top;
                    G(this.origin, { offsetLeft: this.pos.x - a, offsetTop: this.pos.y - u }),
                        ze(this.drag, this.clsDrag, this.clsCustom),
                        ze(this.placeholder, this.clsPlaceholder),
                        ze(this.items, this.clsItem),
                        ze(document.documentElement, this.clsDragState),
                        Kt(this.$el, "start", [this, this.placeholder]),
                        (r = this.pos),
                        (o = Date.now()),
                        (ko = setInterval(function () {
                            var t = r.x,
                                a = r.y;
                            a += window.pageYOffset;
                            var u = 0.3 * (Date.now() - o);
                            (o = Date.now()),
                                Xn(document.elementFromPoint(t, r.y)).some(function (t) {
                                    var e = t.scrollTop,
                                        n = t.scrollHeight,
                                        i = an(Gn(t)),
                                        r = i.top,
                                        o = i.bottom,
                                        s = i.height;
                                    if (r < a && a < r + 35) e -= u;
                                    else {
                                        if (!(a < o && o - 35 < a)) return;
                                        e += u;
                                    }
                                    if (0 < e && e < n - s) return qn(t, e), !0;
                                });
                        }, 15)),
                        this.move(t);
                },
                move: function (t) {
                    this.drag ? this.$emit("move") : (Math.abs(this.pos.x - this.origin.x) > this.threshold || Math.abs(this.pos.y - this.origin.y) > this.threshold) && this.start(t);
                },
                end: function (t) {
                    var e, n;
                    Gt(document, mt, this.move),
                        Gt(document, vt, this.end),
                        Gt(window, "scroll", this.scroll),
                        this.drag &&
                            (clearInterval(ko),
                            (e = this.getSortable(this.placeholder)),
                            this === e ? this.origin.index !== ge(this.placeholder) && Kt(this.$el, "moved", [this, this.placeholder]) : (Kt(e.$el, "added", [e, this.placeholder]), Kt(this.$el, "removed", [this, this.placeholder])),
                            Kt(this.$el, "stop", [this, this.placeholder]),
                            $e(this.drag),
                            (this.drag = null),
                            (n = this.touched
                                .map(function (t) {
                                    return t.clsPlaceholder + " " + t.clsItem;
                                })
                                .join(" ")),
                            this.touched.forEach(function (t) {
                                return Be(t.items, n);
                            }),
                            Be(document.documentElement, this.clsDragState));
                },
                insert: function (n, i) {
                    var r = this;
                    ze(this.items, this.clsItem);
                    function t() {
                        var t, e;
                        i ? (!qt(n, r.target) || ((e = i), (t = n).parentNode === e.parentNode && ge(t) > ge(e)) ? xe : ye)(i, n) : be(r.target, n);
                    }
                    this.animation ? this.animate(t) : t();
                },
                remove: function (t) {
                    qt(t, this.target) &&
                        (this.animation
                            ? this.animate(function () {
                                  return $e(t);
                              })
                            : $e(t));
                },
                getSortable: function (t) {
                    return t && (this.$getComponent(t, "sortable") || this.getSortable(t.parentNode));
                },
            },
        };
    var Eo = [],
        _o = {
            mixins: [lr, gi, $i],
            args: "title",
            props: { delay: Number, title: String },
            data: { pos: "top", title: "", delay: 0, animation: ["uk-animation-scale-up"], duration: 100, cls: "uk-active", clsPos: "uk-tooltip" },
            beforeConnect: function () {
                (this._hasTitle = st(this.$el, "title")), ot(this.$el, { title: "", "aria-expanded": !1 });
            },
            disconnected: function () {
                this.hide(), ot(this.$el, { title: this._hasTitle ? this.title : null, "aria-expanded": null });
            },
            methods: {
                show: function () {
                    var e = this;
                    !this.isActive() &&
                        this.title &&
                        (Eo.forEach(function (t) {
                            return t.hide();
                        }),
                        Eo.push(this),
                        (this._unbind = Xt(document, vt, function (t) {
                            return !qt(t.target, e.$el) && e.hide();
                        })),
                        clearTimeout(this.showTimer),
                        (this.showTimer = setTimeout(this._show, this.delay)));
                },
                hide: function () {
                    var t = this;
                    this.isActive() &&
                        !Dt(this.$el, "input:focus") &&
                        this.toggleElement(this.tooltip, !1, !1).then(function () {
                            Eo.splice(Eo.indexOf(t), 1), clearTimeout(t.showTimer), (t.tooltip = $e(t.tooltip)), t._unbind();
                        });
                },
                _show: function () {
                    var e = this;
                    (this.tooltip = be(this.container, '<div class="' + this.clsPos + '"> <div class="' + this.clsPos + '-inner">' + this.title + "</div> </div>")),
                        Xt(this.tooltip, "toggled", function () {
                            var t = e.isToggled(e.tooltip);
                            ot(e.$el, "aria-expanded", t), t && (e.positionAt(e.tooltip, e.$el), (e.origin = "y" === e.getAxis() ? wn(e.dir) + "-" + e.align : e.align + "-" + wn(e.dir)));
                        }),
                        this.toggleElement(this.tooltip, !0);
                },
                isActive: function () {
                    return b(Eo, this);
                },
            },
            events:
                ((($o = { focus: "show", blur: "hide" })[wt + " " + bt] = function (t) {
                    re(t) || (t.type === wt ? this.show() : this.hide());
                }),
                ($o[gt] = function (t) {
                    re(t) && (this.isActive() ? this.hide() : this.show());
                }),
                $o),
        },
        Co = {
            props: {
                allow: String,
                clsDragover: String,
                concurrent: Number,
                maxSize: Number,
                method: String,
                mime: String,
                msgInvalidMime: String,
                msgInvalidName: String,
                msgInvalidSize: String,
                multiple: Boolean,
                name: String,
                params: Object,
                type: String,
                url: String,
            },
            data: {
                allow: !1,
                clsDragover: "uk-dragover",
                concurrent: 1,
                maxSize: 0,
                method: "POST",
                mime: !1,
                msgInvalidMime: "Invalid File Type: %s",
                msgInvalidName: "Invalid File Name: %s",
                msgInvalidSize: "Invalid File Size: %s Kilobytes Max",
                multiple: !1,
                name: "files[]",
                params: {},
                type: "",
                url: "",
                abort: et,
                beforeAll: et,
                beforeSend: et,
                complete: et,
                completeAll: et,
                error: et,
                fail: et,
                load: et,
                loadEnd: et,
                loadStart: et,
                progress: et,
            },
            events: {
                change: function (t) {
                    Dt(t.target, 'input[type="file"]') && (t.preventDefault(), t.target.files && this.upload(t.target.files), (t.target.value = ""));
                },
                drop: function (t) {
                    No(t);
                    var e = t.dataTransfer;
                    e && e.files && (Be(this.$el, this.clsDragover), this.upload(e.files));
                },
                dragenter: function (t) {
                    No(t);
                },
                dragover: function (t) {
                    No(t), ze(this.$el, this.clsDragover);
                },
                dragleave: function (t) {
                    No(t), Be(this.$el, this.clsDragover);
                },
            },
            methods: {
                upload: function (t) {
                    var i = this;
                    if (t.length) {
                        Kt(this.$el, "upload", [t]);
                        for (var e = 0; e < t.length; e++) {
                            if (this.maxSize && 1e3 * this.maxSize < t[e].size) return void this.fail(this.msgInvalidSize.replace("%s", this.maxSize));
                            if (this.allow && !Ao(this.allow, t[e].name)) return void this.fail(this.msgInvalidName.replace("%s", this.allow));
                            if (this.mime && !Ao(this.mime, t[e].type)) return void this.fail(this.msgInvalidMime.replace("%s", this.mime));
                        }
                        this.multiple || (t = [t[0]]), this.beforeAll(this, t);
                        var r = (function (t, e) {
                                for (var n = [], i = 0; i < t.length; i += e) {
                                    for (var r = [], o = 0; o < e; o++) r.push(t[i + o]);
                                    n.push(r);
                                }
                                return n;
                            })(t, this.concurrent),
                            o = function (t) {
                                var e,
                                    n = new FormData();
                                for (e in (t.forEach(function (t) {
                                    return n.append(i.name, t);
                                }),
                                i.params))
                                    n.append(e, i.params[e]);
                                de(i.url, {
                                    data: n,
                                    method: i.method,
                                    responseType: i.type,
                                    beforeSend: function (t) {
                                        var e = t.xhr;
                                        e.upload && Xt(e.upload, "progress", i.progress),
                                            ["loadStart", "load", "loadEnd", "abort"].forEach(function (t) {
                                                return Xt(e, t.toLowerCase(), i[t]);
                                            }),
                                            i.beforeSend(t);
                                    },
                                }).then(
                                    function (t) {
                                        i.complete(t), r.length ? o(r.shift()) : i.completeAll(t);
                                    },
                                    function (t) {
                                        return i.error(t);
                                    }
                                );
                            };
                        o(r.shift());
                    }
                },
            },
        };
    function Ao(t, e) {
        return e.match(
            new RegExp(
                "^" +
                    t
                        .replace(/\//g, "\\/")
                        .replace(/\*\*/g, "(\\/[^\\/]+)*")
                        .replace(/\*/g, "[^\\/]+")
                        .replace(/((?!\\))\?/g, "$1.") +
                    "$",
                "i"
            )
        );
    }
    function No(t) {
        t.preventDefault(), t.stopPropagation();
    }
    return (
        K(
            Object.freeze({
                __proto__: null,
                Countdown: zr,
                Filter: Fr,
                Lightbox: io,
                LightboxPanel: to,
                Notification: oo,
                Parallax: co,
                Slider: wo,
                SliderParallax: bo,
                Slideshow: So,
                SlideshowParallax: bo,
                Sortable: To,
                Tooltip: _o,
                Upload: Co,
            }),
            function (t, e) {
                return ti.component(e, t);
            }
        ),
        ti
    );
});
(function (global, factory) {
    if (typeof define === "function" && define.amd) {
        define(["module", "exports"], factory);
    } else if (typeof exports !== "undefined") {
        factory(module, exports);
    } else {
        var mod = {
            exports: {},
        };
        factory(mod, mod.exports);
        global.WOW = mod.exports;
    }
})(this, function (module, exports) {
    "use strict";

    Object.defineProperty(exports, "__esModule", {
        value: true,
    });

    var _class, _temp;

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) {
            throw new TypeError("Cannot call a class as a function");
        }
    }

    var _createClass = (function () {
        function defineProperties(target, props) {
            for (var i = 0; i < props.length; i++) {
                var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || false;
                descriptor.configurable = true;
                if ("value" in descriptor) descriptor.writable = true;
                Object.defineProperty(target, descriptor.key, descriptor);
            }
        }

        return function (Constructor, protoProps, staticProps) {
            if (protoProps) defineProperties(Constructor.prototype, protoProps);
            if (staticProps) defineProperties(Constructor, staticProps);
            return Constructor;
        };
    })();

    function isIn(needle, haystack) {
        return haystack.indexOf(needle) >= 0;
    }

    function extend(custom, defaults) {
        for (var key in defaults) {
            if (custom[key] == null) {
                var value = defaults[key];
                custom[key] = value;
            }
        }
        return custom;
    }

    function isMobile(agent) {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
    }

    function createEvent(event) {
        var bubble = arguments.length <= 1 || arguments[1] === undefined ? false : arguments[1];
        var cancel = arguments.length <= 2 || arguments[2] === undefined ? false : arguments[2];
        var detail = arguments.length <= 3 || arguments[3] === undefined ? null : arguments[3];

        var customEvent = void 0;
        if (document.createEvent != null) {
            // W3C DOM
            customEvent = document.createEvent("CustomEvent");
            customEvent.initCustomEvent(event, bubble, cancel, detail);
        } else if (document.createEventObject != null) {
            // IE DOM < 9
            customEvent = document.createEventObject();
            customEvent.eventType = event;
        } else {
            customEvent.eventName = event;
        }

        return customEvent;
    }

    function emitEvent(elem, event) {
        if (elem.dispatchEvent != null) {
            // W3C DOM
            elem.dispatchEvent(event);
        } else if (event in (elem != null)) {
            elem[event]();
        } else if ("on" + event in (elem != null)) {
            elem["on" + event]();
        }
    }

    function addEvent(elem, event, fn) {
        if (elem.addEventListener != null) {
            // W3C DOM
            elem.addEventListener(event, fn, false);
        } else if (elem.attachEvent != null) {
            // IE DOM
            elem.attachEvent("on" + event, fn);
        } else {
            // fallback
            elem[event] = fn;
        }
    }

    function removeEvent(elem, event, fn) {
        if (elem.removeEventListener != null) {
            // W3C DOM
            elem.removeEventListener(event, fn, false);
        } else if (elem.detachEvent != null) {
            // IE DOM
            elem.detachEvent("on" + event, fn);
        } else {
            // fallback
            delete elem[event];
        }
    }

    function getInnerHeight() {
        if ("innerHeight" in window) {
            return window.innerHeight;
        }

        return document.documentElement.clientHeight;
    }

    // Minimalistic WeakMap shim, just in case.
    var WeakMap =
        window.WeakMap ||
        window.MozWeakMap ||
        (function () {
            function WeakMap() {
                _classCallCheck(this, WeakMap);

                this.keys = [];
                this.values = [];
            }

            _createClass(WeakMap, [
                {
                    key: "get",
                    value: function get(key) {
                        for (var i = 0; i < this.keys.length; i++) {
                            var item = this.keys[i];
                            if (item === key) {
                                return this.values[i];
                            }
                        }
                        return undefined;
                    },
                },
                {
                    key: "set",
                    value: function set(key, value) {
                        for (var i = 0; i < this.keys.length; i++) {
                            var item = this.keys[i];
                            if (item === key) {
                                this.values[i] = value;
                                return this;
                            }
                        }
                        this.keys.push(key);
                        this.values.push(value);
                        return this;
                    },
                },
            ]);

            return WeakMap;
        })();

    // Dummy MutationObserver, to avoid raising exceptions.
    var MutationObserver =
        window.MutationObserver ||
        window.WebkitMutationObserver ||
        window.MozMutationObserver ||
        ((_temp = _class = (function () {
            function MutationObserver() {
                _classCallCheck(this, MutationObserver);

                if (typeof console !== "undefined" && console !== null) {
                    console.warn("MutationObserver is not supported by your browser.");
                    console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.");
                }
            }

            _createClass(MutationObserver, [
                {
                    key: "observe",
                    value: function observe() {},
                },
            ]);

            return MutationObserver;
        })()),
        (_class.notSupported = true),
        _temp);

    // getComputedStyle shim, from http://stackoverflow.com/a/21797294
    var getComputedStyle =
        window.getComputedStyle ||
        function getComputedStyle(el) {
            var getComputedStyleRX = /(\-([a-z]){1})/g;
            return {
                getPropertyValue: function getPropertyValue(prop) {
                    if (prop === "float") {
                        prop = "styleFloat";
                    }
                    if (getComputedStyleRX.test(prop)) {
                        prop.replace(getComputedStyleRX, function (_, _char) {
                            return _char.toUpperCase();
                        });
                    }
                    var currentStyle = el.currentStyle;

                    return (currentStyle != null ? currentStyle[prop] : void 0) || null;
                },
            };
        };

    var WOW = (function () {
        function WOW() {
            var options = arguments.length <= 0 || arguments[0] === undefined ? {} : arguments[0];

            _classCallCheck(this, WOW);

            this.defaults = {
                boxClass: "wow",
                animateClass: "animated",
                offset: 0,
                mobile: true,
                live: true,
                callback: null,
                scrollContainer: null,
                resetAnimation: true,
            };

            this.animate = (function animateFactory() {
                if ("requestAnimationFrame" in window) {
                    return function (callback) {
                        return window.requestAnimationFrame(callback);
                    };
                }
                return function (callback) {
                    return callback();
                };
            })();

            this.vendors = ["moz", "webkit"];

            this.start = this.start.bind(this);
            this.resetAnimation = this.resetAnimation.bind(this);
            this.scrollHandler = this.scrollHandler.bind(this);
            this.scrollCallback = this.scrollCallback.bind(this);
            this.scrolled = true;
            this.config = extend(options, this.defaults);
            if (options.scrollContainer != null) {
                this.config.scrollContainer = document.querySelector(options.scrollContainer);
            }
            // Map of elements to animation names:
            this.animationNameCache = new WeakMap();
            this.wowEvent = createEvent(this.config.boxClass);
        }

        _createClass(WOW, [
            {
                key: "init",
                value: function init() {
                    this.element = window.document.documentElement;
                    if (isIn(document.readyState, ["interactive", "complete"])) {
                        this.start();
                    } else {
                        addEvent(document, "DOMContentLoaded", this.start);
                    }
                    this.finished = [];
                },
            },
            {
                key: "start",
                value: function start() {
                    var _this = this;

                    this.stopped = false;
                    this.boxes = [].slice.call(this.element.querySelectorAll("." + this.config.boxClass));
                    this.all = this.boxes.slice(0);
                    if (this.boxes.length) {
                        if (this.disabled()) {
                            this.resetStyle();
                        } else {
                            for (var i = 0; i < this.boxes.length; i++) {
                                var box = this.boxes[i];
                                this.applyStyle(box, true);
                            }
                        }
                    }
                    if (!this.disabled()) {
                        addEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler);
                        addEvent(window, "resize", this.scrollHandler);
                        this.interval = setInterval(this.scrollCallback, 50);
                    }
                    if (this.config.live) {
                        var mut = new MutationObserver(function (records) {
                            for (var j = 0; j < records.length; j++) {
                                var record = records[j];
                                for (var k = 0; k < record.addedNodes.length; k++) {
                                    var node = record.addedNodes[k];
                                    _this.doSync(node);
                                }
                            }
                            return undefined;
                        });
                        mut.observe(document.body, {
                            childList: true,
                            subtree: true,
                        });
                    }
                },
            },
            {
                key: "stop",
                value: function stop() {
                    this.stopped = true;
                    removeEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler);
                    removeEvent(window, "resize", this.scrollHandler);
                    if (this.interval != null) {
                        clearInterval(this.interval);
                    }
                },
            },
            {
                key: "sync",
                value: function sync() {
                    if (MutationObserver.notSupported) {
                        this.doSync(this.element);
                    }
                },
            },
            {
                key: "doSync",
                value: function doSync(element) {
                    if (typeof element === "undefined" || element === null) {
                        element = this.element;
                    }
                    if (element.nodeType !== 1) {
                        return;
                    }
                    element = element.parentNode || element;
                    var iterable = element.querySelectorAll("." + this.config.boxClass);
                    for (var i = 0; i < iterable.length; i++) {
                        var box = iterable[i];
                        if (!isIn(box, this.all)) {
                            this.boxes.push(box);
                            this.all.push(box);
                            if (this.stopped || this.disabled()) {
                                this.resetStyle();
                            } else {
                                this.applyStyle(box, true);
                            }
                            this.scrolled = true;
                        }
                    }
                },
            },
            {
                key: "show",
                value: function show(box) {
                    this.applyStyle(box);
                    box.className = box.className + " " + this.config.animateClass;
                    if (this.config.callback != null) {
                        this.config.callback(box);
                    }
                    emitEvent(box, this.wowEvent);

                    if (this.config.resetAnimation) {
                        addEvent(box, "animationend", this.resetAnimation);
                        addEvent(box, "oanimationend", this.resetAnimation);
                        addEvent(box, "webkitAnimationEnd", this.resetAnimation);
                        addEvent(box, "MSAnimationEnd", this.resetAnimation);
                    }

                    return box;
                },
            },
            {
                key: "applyStyle",
                value: function applyStyle(box, hidden) {
                    var _this2 = this;

                    var duration = box.getAttribute("data-wow-duration");
                    var delay = box.getAttribute("data-wow-delay");
                    var iteration = box.getAttribute("data-wow-iteration");

                    return this.animate(function () {
                        return _this2.customStyle(box, hidden, duration, delay, iteration);
                    });
                },
            },
            {
                key: "resetStyle",
                value: function resetStyle() {
                    for (var i = 0; i < this.boxes.length; i++) {
                        var box = this.boxes[i];
                        box.style.visibility = "visible";
                    }
                    return undefined;
                },
            },
            {
                key: "resetAnimation",
                value: function resetAnimation(event) {
                    if (event.type.toLowerCase().indexOf("animationend") >= 0) {
                        var target = event.target || event.srcElement;
                        target.className = target.className.replace(this.config.animateClass, "").trim();
                    }
                },
            },
            {
                key: "customStyle",
                value: function customStyle(box, hidden, duration, delay, iteration) {
                    if (hidden) {
                        this.cacheAnimationName(box);
                    }
                    box.style.visibility = hidden ? "hidden" : "visible";

                    if (duration) {
                        this.vendorSet(box.style, { animationDuration: duration });
                    }
                    if (delay) {
                        this.vendorSet(box.style, { animationDelay: delay });
                    }
                    if (iteration) {
                        this.vendorSet(box.style, { animationIterationCount: iteration });
                    }
                    this.vendorSet(box.style, { animationName: hidden ? "none" : this.cachedAnimationName(box) });

                    return box;
                },
            },
            {
                key: "vendorSet",
                value: function vendorSet(elem, properties) {
                    for (var name in properties) {
                        if (properties.hasOwnProperty(name)) {
                            var value = properties[name];
                            elem["" + name] = value;
                            for (var i = 0; i < this.vendors.length; i++) {
                                var vendor = this.vendors[i];
                                elem["" + vendor + name.charAt(0).toUpperCase() + name.substr(1)] = value;
                            }
                        }
                    }
                },
            },
            {
                key: "vendorCSS",
                value: function vendorCSS(elem, property) {
                    var style = getComputedStyle(elem);
                    var result = style.getPropertyCSSValue(property);
                    for (var i = 0; i < this.vendors.length; i++) {
                        var vendor = this.vendors[i];
                        result = result || style.getPropertyCSSValue("-" + vendor + "-" + property);
                    }
                    return result;
                },
            },
            {
                key: "animationName",
                value: function animationName(box) {
                    var aName = void 0;
                    try {
                        aName = this.vendorCSS(box, "animation-name").cssText;
                    } catch (error) {
                        // Opera, fall back to plain property value
                        aName = getComputedStyle(box).getPropertyValue("animation-name");
                    }

                    if (aName === "none") {
                        return ""; // SVG/Firefox, unable to get animation name?
                    }

                    return aName;
                },
            },
            {
                key: "cacheAnimationName",
                value: function cacheAnimationName(box) {
                    // https://bugzilla.mozilla.org/show_bug.cgi?id=921834
                    // box.dataset is not supported for SVG elements in Firefox
                    return this.animationNameCache.set(box, this.animationName(box));
                },
            },
            {
                key: "cachedAnimationName",
                value: function cachedAnimationName(box) {
                    return this.animationNameCache.get(box);
                },
            },
            {
                key: "scrollHandler",
                value: function scrollHandler() {
                    this.scrolled = true;
                },
            },
            {
                key: "scrollCallback",
                value: function scrollCallback() {
                    if (this.scrolled) {
                        this.scrolled = false;
                        var results = [];
                        for (var i = 0; i < this.boxes.length; i++) {
                            var box = this.boxes[i];
                            if (box) {
                                if (this.isVisible(box)) {
                                    this.show(box);
                                    continue;
                                }
                                results.push(box);
                            }
                        }
                        this.boxes = results;
                        if (!this.boxes.length && !this.config.live) {
                            this.stop();
                        }
                    }
                },
            },
            {
                key: "offsetTop",
                value: function offsetTop(element) {
                    // SVG elements don't have an offsetTop in Firefox.
                    // This will use their nearest parent that has an offsetTop.
                    // Also, using ('offsetTop' of element) causes an exception in Firefox.
                    while (element.offsetTop === undefined) {
                        element = element.parentNode;
                    }
                    var top = element.offsetTop;
                    while (element.offsetParent) {
                        element = element.offsetParent;
                        top += element.offsetTop;
                    }
                    return top;
                },
            },
            {
                key: "isVisible",
                value: function isVisible(box) {
                    var offset = box.getAttribute("data-wow-offset") || this.config.offset;
                    var viewTop = (this.config.scrollContainer && this.config.scrollContainer.scrollTop) || window.pageYOffset;
                    var viewBottom = viewTop + Math.min(this.element.clientHeight, getInnerHeight()) - offset;
                    var top = this.offsetTop(box);
                    var bottom = top + box.clientHeight;

                    return top <= viewBottom && bottom >= viewTop;
                },
            },
            {
                key: "disabled",
                value: function disabled() {
                    return !this.config.mobile && isMobile(navigator.userAgent);
                },
            },
        ]);

        return WOW;
    })();

    exports.default = WOW;
    module.exports = exports["default"];
});

jQuery(document).ready(function ($) {
    //function to check if the .cd-image-container is in the viewport here
    // ...

    //make the .cd-handle element draggable and modify .cd-resize-img width according to its position
    $(".cd-image-container").each(function () {
        var actual = $(this);
        drags(actual.find(".cd-handle"), actual.find(".cd-resize-img"), actual);
    });

    //function to upadate images label visibility here
    // ...
});

//draggable funtionality - credits to http://css-tricks.com/snippets/jquery/draggable-without-jquery-ui/
function drags(dragElement, resizeElement, container) {
    dragElement
        .on("mousedown vmousedown", function (e) {
            dragElement.addClass("draggable");
            resizeElement.addClass("resizable");

            var dragWidth = dragElement.outerWidth(),
                xPosition = dragElement.offset().left + dragWidth - e.pageX,
                containerOffset = container.offset().left,
                containerWidth = container.outerWidth(),
                minLeft = containerOffset + 10,
                maxLeft = containerOffset + containerWidth - dragWidth - 10;

            dragElement
                .parents()
                .on("mousemove vmousemove", function (e) {
                    leftValue = e.pageX + xPosition - dragWidth;

                    //constrain the draggable element to move inside its container
                    if (leftValue < minLeft) {
                        leftValue = minLeft;
                    } else if (leftValue > maxLeft) {
                        leftValue = maxLeft;
                    }

                    widthValue = ((leftValue + dragWidth / 2 - containerOffset) * 100) / containerWidth + "%";

                    $(".draggable")
                        .css("left", widthValue)
                        .on("mouseup vmouseup", function () {
                            $(this).removeClass("draggable");
                            resizeElement.removeClass("resizable");
                        });

                    $(".resizable").css("width", widthValue);

                    //function to upadate images label visibility here
                    // ...
                })
                .on("mouseup vmouseup", function (e) {
                    dragElement.removeClass("draggable");
                    resizeElement.removeClass("resizable");
                });
            e.preventDefault();
        })
        .on("mouseup vmouseup", function (e) {
            dragElement.removeClass("draggable");
            resizeElement.removeClass("resizable");
        });
}

jQuery(document).ready(function ($) {
    var dragging = false,
        scrolling = false,
        resizing = false;
    //cache jQuery objects
    var imageComparisonContainers = $(".cd-image-container");
    //check if the .cd-image-container is in the viewport
    //if yes, animate it
    checkPosition(imageComparisonContainers);
    $(window).on("scroll", function () {
        if (!scrolling) {
            scrolling = true;
            !window.requestAnimationFrame
                ? setTimeout(function () {
                      checkPosition(imageComparisonContainers);
                  }, 100)
                : requestAnimationFrame(function () {
                      checkPosition(imageComparisonContainers);
                  });
        }
    });

    //make the .cd-handle element draggable and modify .cd-resize-img width according to its position
    imageComparisonContainers.each(function () {
        var actual = $(this);
        drags(actual.find(".cd-handle"), actual.find(".cd-resize-img"), actual, actual.find('.cd-image-label[data-type="original"]'), actual.find('.cd-image-label[data-type="modified"]'));
    });

    //upadate images label visibility
    $(window).on("resize", function () {
        if (!resizing) {
            resizing = true;
            !window.requestAnimationFrame
                ? setTimeout(function () {
                      checkLabel(imageComparisonContainers);
                  }, 100)
                : requestAnimationFrame(function () {
                      checkLabel(imageComparisonContainers);
                  });
        }
    });

    function checkPosition(container) {
        container.each(function () {
            var actualContainer = $(this);
            if ($(window).scrollTop() + $(window).height() * 0.5 > actualContainer.offset().top) {
                actualContainer.addClass("is-visible");
            }
        });

        scrolling = false;
    }

    function checkLabel(container) {
        container.each(function () {
            var actual = $(this);
            updateLabel(actual.find('.cd-image-label[data-type="modified"]'), actual.find(".cd-resize-img"), "left");
            updateLabel(actual.find('.cd-image-label[data-type="original"]'), actual.find(".cd-resize-img"), "right");
        });

        resizing = false;
    }

    //draggable funtionality - credits to http://css-tricks.com/snippets/jquery/draggable-without-jquery-ui/
    function drags(dragElement, resizeElement, container, labelContainer, labelResizeElement) {
        dragElement
            .on("mousedown vmousedown", function (e) {
                dragElement.addClass("draggable");
                resizeElement.addClass("resizable");

                var dragWidth = dragElement.outerWidth(),
                    xPosition = dragElement.offset().left + dragWidth - e.pageX,
                    containerOffset = container.offset().left,
                    containerWidth = container.outerWidth(),
                    minLeft = containerOffset + 10,
                    maxLeft = containerOffset + containerWidth - dragWidth - 10;

                dragElement
                    .parents()
                    .on("mousemove vmousemove", function (e) {
                        if (!dragging) {
                            dragging = true;
                            !window.requestAnimationFrame
                                ? setTimeout(function () {
                                      animateDraggedHandle(e, xPosition, dragWidth, minLeft, maxLeft, containerOffset, containerWidth, resizeElement, labelContainer, labelResizeElement);
                                  }, 100)
                                : requestAnimationFrame(function () {
                                      animateDraggedHandle(e, xPosition, dragWidth, minLeft, maxLeft, containerOffset, containerWidth, resizeElement, labelContainer, labelResizeElement);
                                  });
                        }
                    })
                    .on("mouseup vmouseup", function (e) {
                        dragElement.removeClass("draggable");
                        resizeElement.removeClass("resizable");
                    });
                e.preventDefault();
            })
            .on("mouseup vmouseup", function (e) {
                dragElement.removeClass("draggable");
                resizeElement.removeClass("resizable");
            });
    }

    function animateDraggedHandle(e, xPosition, dragWidth, minLeft, maxLeft, containerOffset, containerWidth, resizeElement, labelContainer, labelResizeElement) {
        var leftValue = e.pageX + xPosition - dragWidth;
        //constrain the draggable element to move inside his container
        if (leftValue < minLeft) {
            leftValue = minLeft;
        } else if (leftValue > maxLeft) {
            leftValue = maxLeft;
        }

        var widthValue = ((leftValue + dragWidth / 2 - containerOffset) * 100) / containerWidth + "%";

        $(".draggable")
            .css("left", widthValue)
            .on("mouseup vmouseup", function () {
                $(this).removeClass("draggable");
                resizeElement.removeClass("resizable");
            });

        $(".resizable").css("width", widthValue);

        updateLabel(labelResizeElement, resizeElement, "left");
        updateLabel(labelContainer, resizeElement, "right");
        dragging = false;
    }

    function updateLabel(label, resizeElement, position) {
        if (position == "left") {
            label.offset().left + label.outerWidth() < resizeElement.offset().left + resizeElement.outerWidth() ? label.removeClass("is-hidden") : label.addClass("is-hidden");
        } else {
            label.offset().left > resizeElement.offset().left + resizeElement.outerWidth() ? label.removeClass("is-hidden") : label.addClass("is-hidden");
        }
    }
});
