! function(a, b, c, d) {
    function e(b, c) {
        var e = this;
        this.element = b, this.options = c, this.isPopOverEnabled = 0 != this.options.popOver, this.isCustomPopOver = 0 != this.options.popOver.customPopOver && this.options.popOver.customPopOver != d, this._initImageMap(), this._initPopOver(), this._bindEvents(), this._remapZones(), a(this.element).bind("load.mapify", function() {
            e._remapZones()
        })
    }
    var f = {
            hoverClass: !1,
            popOver: !1
        },
        g = {
            hoverClass: !1,
            popOver: {
                content: function(a, b) {
                    return ""
                },
                customPopOver: {
                    selector: !1,
                    contentSelector: ".mapify-popOver-content",
                    visibleClass: "mapify-visible",
                    alwaysVisible: !1
                },
                delay: .8,
                margin: "10px",
                width: !1,
                height: !1
            },
            onAreaHighlight: !1,
            onMapClear: !1,
            instantClickOnMobile: !1
        },
        h = /(iPad|iPhone|iPod)/g.test(navigator.userAgent),
        i = h;
    e.prototype._initPopOver = function() {
        var b = a(this.element);
        this.options.popOver.margin = parseInt(this.options.popOver.margin), this._timer = null, this._popOverTransition = "", this._popOverArrowTransition = "", this._popOverTimeout = null, isNaN(this.options.popOver.delay) || (this._popOverTransition = "all " + this.options.popOver.delay + "s", this._popOverArrowTransition = "margin " + this.options.popOver.delay + "s"), this.popOver = !1, this.popOverArrow = !1, this.isPopOverEnabled && (this.isCustomPopOver ? ("string" == typeof this.options.popOver.customPopOver && (this.options.popOver.customPopOver.selector = this.options.popOver.customPopOver), this.options.popOver.customPopOver = a.extend(!0, {}, g.popOver.customPopOver, this.options.popOver.customPopOver), this.popOver = a(this.options.popOver.customPopOver.selector), this.popOver.css({
            transition: this._popOverTransition
        })) : (b.after('<div class="mapify-popOver" style="transition:' + this._popOverTransition + '; "><div class="mapify-popOver-content"></div><div class="mapify-popOver-arrow" style="transition:' + this._popOverArrowTransition + '; "></div></div>'), this.popOver = b.next(".mapify-popOver"), this.popOverArrow = this.popOver.find(".mapify-popOver-arrow"), this.popOver.css({
            width: this.options.popOver.width,
            height: this.options.popOver.height
        })))
    }, e.prototype._initImageMap = function() {
        var c = this,
            d = a(this.element);
        if (this.map = d.attr("usemap"), this.zones = a(this.map).find("area"), !d.hasClass("mapify")) {
            if (d.addClass("mapify"), this._mapWidth = parseInt(d.attr("width")), this._mapHeight = parseInt(d.attr("height")), !this._mapWidth || !this._mapHeight) return b.alert("ERROR: The width and height attributes must be specified on your image."), !1;
            d.wrap(function() {
                return '<div class="mapify-holder"></div>'
            }), this._mapHolder = d.parent(), a(this.map).appendTo(this._mapHolder), d.before('<img class="mapify-img" src="' + d.attr("src") + '" />'), d.before('<svg class="mapify-svg" width="' + this._mapWidth + '" height="' + this._mapHeight + '"></svg>'), this.svgMap = d.prev(".mapify-svg"), this.zones.each(function() {
                c._initSingleZone(this)
            }), d.wrap(function() {
                return '<div class="mapify-imgHolder"></div>'
            }).css("opacity", 0)
        }
    }, e.prototype._initSingleZone = function(b) {
        switch (a(b).attr("shape")) {
            case "rect":
                var d = a(b).attr("coords").split(","),
                    e = [];
                a.each([0, 1, 0, 3, 2, 3, 2, 1], function(a, b) {
                    e.push(d[b])
                }), a(b).attr("coords", e.join(",")), a(b).attr("shape", "poly");
                break;
            case "poly":
                break;
            default:
                return console.log('ERROR: Area shape type "' + a(b).attr("shape") + '" is not supported.'), !1
        }
        a(b).attr("data-coords-default", a(b).attr("coords")), this.isPopOverEnabled && a(b).removeAttr("alt").attr("data-title", a(b).attr("title")).removeAttr("title");
        var f = a(b).attr("coords").split(",");
        for (var g in f) f[g] = g % 2 == 0 ? 100 * f[g] / this._mapWidth : 100 * f[g] / this._mapHeight;
        a(b).attr("data-coords", f.toString());
        var h = c.createElementNS("http://www.w3.org/2000/svg", "polygon");
        h.className = "mapify-polygon", h.setAttribute("fill", "none"), this.svgMap.append(h)
    }, e.prototype._bindEvents = function() {
        var b = this,
            d = a(this.element);
        this._hasScrolled = !1, a(c).bind("touchend.mapify", function() {
            b._hasScrolled || b._clearMap(), b._hasScrolled = !1
        }).bind("touchmove.mapify", function() {
            b._hasScrolled = !0
        }), d.bind("touchmove.mapify", function(a) {}), this._bindZoneEvents(), this._bindWindowEvents(), this._bindScrollParentEvents()
    }, e.prototype._bindZoneEvents = function() {
        var b = this;
        this.zones.css({
            outline: "none"
        }), this.zones.bind("touchend.mapify", function(c) {
            a(this).hasClass("mapify-clickable") && (a(this).trigger("click"), b.zones.removeClass("mapify-clickable")), b.hasScrolled = !1, c.stopPropagation()
        }).bind("click.mapify", function(a) {
            if (a.originalEvent !== d && i) return !1
        }).bind("touchstart.mapify", function() {
            b.zones.removeClass("mapify-clickable"), b.svgMap.find("polygon:eq(" + a(this).index() + ")")[0].classList.contains("mapify-hover") ? a(this).addClass("mapify-clickable") : i && b.options.instantClickOnMobile ? (console.log("Triggering instantClickOnMobile after touchstart"), a(this).addClass("mapify-clickable")) : a(this).addClass("mapify-hilightable")
        }).bind("touchmove.mapify", function() {
            b.zones.removeClass("mapify-clickable mapify-hilightable")
        }).bind("mouseenter.mapify focus.mapify touchend.mapify", function(c) {
            var d = this;
            if (!a(this).hasClass("mapify-hilightable") && i) return !1;
            b._clearMap(), b.isPopOverEnabled && b._renderPopOver(d), b._drawHighlight(d), c.preventDefault()
        }).bind("mouseout.mapify", function() {
            b._clearMap()
        }), i || this.zones.bind("blur.mapify", function() {
            b._clearMap()
        })
    }, e.prototype._bindWindowEvents = function() {
        var c = this;
        a(b).bind("resize.mapify", function() {
            c._timer && clearTimeout(c._timer), c._timer = setTimeout(function() {
                c.isPopOverEnabled && (c.popOver.hasClass("mapify-visible") || c.isCustomPopOver || c.popOver.css({
                    left: 0,
                    top: 0
                })), c.svgMap.find("polygon").attr("points", ""), c._remapZones();
                var a = c.zones[c.svgMap.find("polygon.mapify-hover").index()];
                a && (c.isPopOverEnabled && c._renderPopOver(a), c._drawHighlight(a))
            }, 100)
        })
    }, e.prototype._bindScrollParentEvents = function() {
        var d = this;
        this.scrollParent = a(this.element).mapify_scrollParent(), this.scrollParent.is(c) && (this.scrollParent = a(b)), this.scrollParent.addClass("mapify-GPU").bind("scroll.mapify", function() {
            i && d.zones.removeClass("mapify-clickable mapify-hilightable"), d.isPopOverEnabled && (!d.isCustomPopOver && i && (d.popOver.css({
                top: d.popOver.css("top"),
                left: d.popOver.css("left"),
                transition: "none"
            }), d.popOverArrow.css({
                marginLeft: d.popOverArrow.css("margin-left"),
                transition: "none"
            })), clearTimeout(a.data(this, "scrollTimer")), a.data(this, "scrollTimer", setTimeout(function() {
                var a = d.zones[d.svgMap.find("polygon.mapify-hover").index()];
                if (a) {
                    d._renderPopOver(a);
                    var b = d._computePopOverCompensation(a),
                        c = b[1],
                        e = b[2];
                    !d.isCustomPopOver && i && (d.popOver.css({
                        top: e[1],
                        left: e[0],
                        transition: d._popOverTransition
                    }), d.popOverArrow.css({
                        marginLeft: c,
                        transition: d._popOverArrowTransition
                    }))
                }
            }, 100)))
        })
    }, e.prototype._drawHighlight = function(b) {
        var c = this,
            d = a(b).attr("data-group-id"),
            e = a(b).attr("data-hover-class");
        e = e ? this.options.hoverClass + " " + e : this.options.hoverClass, d ? a(b).siblings("area[data-group-id=" + d + "]").andSelf().each(function() {
            c._highlightSingleArea(this, e)
        }) : this._highlightSingleArea(b, e), this.options.onAreaHighlight && this.options.onAreaHighlight(this, b)
    }, e.prototype._highlightSingleArea = function(b, c) {
        var d = a(b).attr("data-coords").split(","),
            e = "";
        for (var f in d) e += f % 2 == 0 ? a(this.element).width() * (d[f] / 100) : "," + a(this.element).height() * (d[f] / 100) + " ";
        var g = this.svgMap.find("polygon:eq(" + a(b).index() + ")")[0];
        a(g).attr("points", e).attr("class", function(b, d) {
            var e = d;
            return a(g).hasClass("mapify-hover") || (e += " mapify-hover", c && (e += " " + c)), e
        })
    }, e.prototype._remapZones = function() {
        var b = this;
        this.zones.each(function() {
            var c = a(this).attr("data-coords").split(",");
            for (var d in c) c[d] = d % 2 == 0 ? a(b.element).width() * (c[d] / 100) : a(b.element).height() * (c[d] / 100);
            a(this).attr("coords", c.toString())
        })
    }, e.prototype._renderPopOver = function(a) {
        this.isCustomPopOver ? this._renderCustomPopOver(a) : this._renderDefaultPopOver(a)
    }, e.prototype._renderCustomPopOver = function(b) {
        var c = this,
            d = this.options.popOver.customPopOver,
            e = this.popOver;
        clearTimeout(this._popOverTimeout), this._popOverTimeout = setTimeout(function() {
            var f = c.options.popOver.content(a(b), c.element);
            e.find(d.contentSelector).html(f), setTimeout(function() {
                e.css({
                    transition: c._popOverTransition
                }).addClass(d.visibleClass)
            }, 10)
        }, 100)
    }, e.prototype._renderDefaultPopOver = function(b) {
        var c = this,
            d = this.popOver.outerWidth(),
            e = this.options.popOver.margin,
            f = this.popOver,
            g = this.popOverArrow,
            h = f.attr("data-popOver-class");
        "" != h && (f.removeClass(h), f.attr("data-popOver-class", "")), this.scrollParent.width() - 2 * e <= d ? (d = this.scrollParent.width() - 2 * e, f.css({
            maxWidth: d
        })) : this._mapHolder.width() - 2 * e <= d ? (d = this._mapHolder.width() - 2 * e, f.css({
            maxWidth: d
        })) : f.css({
            maxWidth: ""
        }), f.css({
            marginLeft: -d / 2
        });
        var i = this._computePopOverCompensation(b),
            j = i[0],
            k = i[1],
            l = i[2];
        f.hasClass("mapify-visible") || (f.css({
            top: l[1],
            left: l[0],
            transition: "none"
        }), g.css({
            marginLeft: k,
            transition: "none"
        })), clearTimeout(this._popOverTimeout), this._popOverTimeout = setTimeout(function() {
            var d = c.options.popOver.content(a(b), c.element),
                e = a(b).attr("data-pop-over-class");
            "" != e && (f.addClass(e), f.attr("data-popOver-class", e)), f.find(".mapify-popOver-content").html(d), f.hasClass("mapify-to-bottom") ? (f.css({
                marginTop: ""
            }), f.hasClass("mapify-bottom") || g.css({
                marginLeft: j,
                transition: "none"
            }), f.addClass("mapify-bottom"), f.removeClass("mapify-to-bottom")) : (f.hasClass("mapify-bottom") && g.css({
                marginLeft: j,
                transition: "none"
            }), f.removeClass("mapify-bottom"), f.css({
                marginTop: -f.outerHeight()
            })), setTimeout(function() {
                f.css({
                    top: l[1],
                    left: l[0],
                    transition: c._popOverTransition
                }).addClass("mapify-visible"), g.css({
                    marginLeft: k,
                    transition: c._popOverArrowTransition
                })
            }, 10)
        }, 100)
    }, e.prototype._computePopOverCompensation = function(a) {
        var b = 0,
            c = 0,
            d = this.popOver,
            e = this._getAreaCorners(a),
            f = e["center top"],
            g = d.outerWidth(),
            h = this.options.popOver.margin;
        this._mapHolder.width() < this.scrollParent.width() ? (c = f[0] - g / 2 - this.scrollParent.scrollLeft(), c + g > this._mapHolder.width() - h ? b = c + g - this._mapHolder.width() + h : c < h && (b = c - h)) : (c = f[0] - g / 2 - this.scrollParent.scrollLeft(), c + g > this.scrollParent.outerWidth() - h ? b = c + g - this.scrollParent.outerWidth() + h : c < h && (b = c - h)), f[1] - d.outerHeight() - h < 0 ? (f = e["center bottom"], d.addClass("mapify-to-bottom")) : d.hasClass("mapify-to-bottom") && d.removeClass("mapify-to-bottom"), f[0] -= b;
        var i = b;
        return b > g / 2 - 2 * h ? i = g / 2 - 2 * h : b < -(g / 2 - 2 * h) && (i = -g / 2 + 2 * h), [b, i, f]
    }, e.prototype._getAreaCorners = function(a) {
        for (var b, c = a.getAttribute("coords"), d = c.split(","), e = parseInt(d[0], 10), f = e, g = parseInt(d[1], 10), h = g, i = 0, j = d.length; i < j; i++) b = parseInt(d[i], 10), i % 2 == 0 ? b < e ? e = b : b > f && (f = b) : b < g ? g = b : b > h && (h = b);
        var k = parseInt((e + f) / 2, 10);
        parseInt((g + h) / 2, 10);
        return {
            "center top": {
                0: k,
                1: g
            },
            "center bottom": {
                0: k,
                1: h
            }
        }
    }, e.prototype._clearMap = function() {
        var a = this;
        if (this.isPopOverEnabled) {
            var b = !0,
                c = "mapify-visible";
            if (this.isCustomPopOver) {
                var d = this.options.popOver.customPopOver;
                c = d.visibleClass, b = !d.alwaysVisible
            }
            clearTimeout(this._popOverTimeout), b && (this._popOverTimeout = setTimeout(function() {
                a.popOver.removeClass(c)
            }, 300))
        }
        this.svgMap.find("polygon").attr("class", "mapify-polygon"), this.options.onMapClear && this.options.onMapClear(this)
    }, a.fn.mapify = function(b) {
        return this.each(function() {
            a.data(this, "plugin_mapify") || a.data(this, "plugin_mapify", new e(this, a.extend(!0, {}, f, b)))
        })
    }, a.fn.mapify_scrollParent = function() {
        var b = this.css("position"),
            d = "absolute" === b,
            e = this.parents().filter(function() {
                var b = a(this);
                return (!d || "static" !== b.css("position")) && /(auto|scroll)/.test(b.css("overflow") + b.css("overflow-y") + b.css("overflow-x"))
            }).eq(0);
        return "fixed" !== b && e.length ? e : a(this[0].ownerDocument || c)
    }
}(jQuery, window, document);
