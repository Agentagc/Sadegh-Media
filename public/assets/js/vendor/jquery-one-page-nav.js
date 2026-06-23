! function(o, a, i) {
    function n(t, n) {
        this.elem = t, this.$elem = o(t), this.options = n, this.metadata = this.$elem.data("plugin-options"), this.$win = o(a), this.sections = {}, this.didScroll = !1, this.$doc = o(i), this.docHeight = this.$doc.height()
    }
    n.defaults = (n.prototype = {
        defaults: {
            navItems: "a",
            currentClass: "current",
            changeHash: !1,
            easing: "swing",
            filter: "",
            scrollSpeed: 750,
            scrollThreshold: .5,
            begin: !1,
            end: !1,
            scrollChange: !1
        },
        init: function() {
            return this.config = o.extend({}, this.defaults, this.options, this.metadata), this.$nav = this.$elem.find(this.config.navItems), "" !== this.config.filter && (this.$nav = this.$nav.filter(this.config.filter)), this.$nav.on("click.onePageNav", o.proxy(this.handleClick, this)), this.getPositions(), this.bindInterval(), this.$win.on("resize.onePageNav", o.proxy(this.getPositions, this)), this
        },
        adjustNav: function(t, n) {
            t.$elem.find("." + t.config.currentClass).removeClass(t.config.currentClass), n.addClass(t.config.currentClass)
        },
        bindInterval: function() {
            var t, n = this;
            n.$win.on("scroll.onePageNav", function() {
                n.didScroll = !0
            }), n.t = setInterval(function() {
                t = n.$doc.height(), n.didScroll && (n.didScroll = !1, n.scrollChange()), t !== n.docHeight && (n.docHeight = t, n.getPositions())
            }, 250)
        },
        getHash: function(t) {
            return t.attr("href").split("#")[1]
        },
        getPositions: function() {
            var t, n, i = this;
            i.$nav.each(function() {
                t = i.getHash(o(this)), (n = o("#" + t)).length && (n = n.offset().top, i.sections[t] = Math.round(n))
            })
        },
        getSection: function(t) {
            var n, i = null,
                s = Math.round(this.$win.height() * this.config.scrollThreshold);
            for (n in this.sections) this.sections[n] - s < t && (i = n);
            return i
        },
        handleClick: function(t) {
            var n = this,
                i = o(t.currentTarget),
                s = i.parent(),
                e = "#" + n.getHash(i);
            s.hasClass(n.config.currentClass) || (n.config.begin && n.config.begin(), n.adjustNav(n, s), n.unbindInterval(), n.scrollTo(e, function() {
                n.config.changeHash && (a.location.hash = e), n.bindInterval(), n.config.end && n.config.end()
            })), t.preventDefault()
        },
        scrollChange: function() {
            var t = this.$win.scrollTop(),
                t = this.getSection(t);
            null === t || (t = this.$elem.find('a[href$="#' + t + '"]').parent()).hasClass(this.config.currentClass) || (this.adjustNav(this, t), this.config.scrollChange && this.config.scrollChange(t))
        },
        scrollTo: function(t, n) {
            t = o(t).offset().top - 80;
            o("html, body").animate({
                scrollTop: t
            }, this.config.scrollSpeed, this.config.easing, n)
        },
        unbindInterval: function() {
            clearInterval(this.t), this.$win.unbind("scroll.onePageNav")
        }
    }).defaults, o.fn.onePageNav = function(t) {
        return this.each(function() {
            new n(this, t).init()
        })
    }
}(jQuery, window, document);