/*=======================================
    10. Tilt Hover Animation
=========================================*/

(function($) {
    $.fn.tilt = function(options) {

        var requestTick = function requestTick() {
            if (this.ticking) return;
            requestAnimationFrame(updateTransforms.bind(this));
            this.ticking = true;
        };

        var bindEvents = function bindEvents() {
            $(this).on('mousemove', mouseMove.bind(this));
            $(this).on('mouseenter', mouseEnter.bind(this));
            if (this.settings.reset) $(this).on('mouseleave', mouseLeave.bind(this));
            if (this.settings.glare) $(window).on('resize', updateGlareSize.bind(this));
        };

        var setTransition = function setTransition() {
            if (this.timeout !== undefined) clearTimeout(this.timeout);
            $(this).css({
                'transition': this.settings.speed + 'ms ' + this.settings.easing
            });
            if (this.settings.glare) this.glareElement.css({
                'transition': 'opacity ' + this.settings.speed + 'ms ' + this.settings.easing
            });
            this.timeout = setTimeout(() => {
                $(this).css({
                    'transition': ''
                });
                if (this.settings.glare) this.glareElement.css({
                    'transition': ''
                });
            }, this.settings.speed);
        };

        var mouseEnter = function mouseEnter(event) {
            this.ticking = false;
            $(this).css({
                'will-change': 'transform'
            });
            this.mousePositions = getMousePositions.call(this, event);
            setTransition.call(this);
            $(this).trigger("tilt.mouseEnter");
        };

        var getMousePositions = function getMousePositions(event) {
            if (typeof event === "undefined") {
                event = {
                    pageX: $(this).offset().left + $(this).outerWidth() / 2,
                    pageY: $(this).offset().top + $(this).outerHeight() / 2
                };
            }
            return {
                x: event.pageX,
                y: event.pageY
            };
        };

        var mouseMove = function mouseMove(event) {
            this.mousePositions = getMousePositions.call(this, event);
            requestTick.call(this);
        };

        var mouseLeave = function mouseLeave() {
            setTransition.call(this);
            this.reset = true;
            requestTick.call(this);
            $(this).trigger("tilt.mouseLeave");
        };

        var getValues = function getValues() {
            var width = $(this).outerWidth();
            var height = $(this).outerHeight();
            var left = $(this).offset().left;
            var top = $(this).offset().top;

            if (!this.mousePositions) {
                this.mousePositions = {
                    x: left + width / 2,
                    y: top + height / 2
                };
            }

            var mouseX = this.mousePositions.x;
            var mouseY = this.mousePositions.y;

            var percentageX = (mouseX - left) / width;
            var percentageY = (mouseY - top) / height;

            var tiltX = (this.settings.maxTilt / 2 - percentageX * this.settings.maxTilt).toFixed(2);
            var tiltY = (percentageY * this.settings.maxTilt - this.settings.maxTilt / 2).toFixed(2);
            var angle = Math.atan2(mouseX - (left + width / 2), -(mouseY - (top + height / 2))) * (180 / Math.PI);

            return {
                tiltX: tiltX,
                tiltY: tiltY,
                percentageX: percentageX * 100,
                percentageY: percentageY * 100,
                angle: angle
            };
        };

        var updateTransforms = function updateTransforms() {
            this.transforms = getValues.call(this);

            if (this.reset) {
                this.reset = false;
                $(this).css('transform', 'perspective(' + this.settings.perspective + 'px) rotateX(0deg) rotateY(0deg)');
                if (this.settings.glare) {
                    this.glareElement.css('transform', 'rotate(180deg) translate(-50%, -50%)');
                    this.glareElement.css('opacity', '0');
                }
                return;
            } else {
                $(this).css('transform', 'perspective(' + this.settings.perspective + 'px) rotateX(' + (this.settings.axis === 'x' ? 0 : this.transforms.tiltY) + 'deg) rotateY(' + (this.settings.axis === 'y' ? 0 : this.transforms.tiltX) + 'deg) scale3d(' + this.settings.scale + ',' + this.settings.scale + ',' + this.settings.scale + ')');
                if (this.settings.glare) {
                    this.glareElement.css('transform', 'rotate(' + this.transforms.angle + 'deg) translate(-50%, -50%)');
                    this.glareElement.css('opacity', '' + this.transforms.percentageY * this.settings.maxGlare / 100);
                }
            }

            $(this).trigger("change", [this.transforms]);
            this.ticking = false;
        };

        var prepareGlare = function prepareGlare() {
            var glarePrerender = this.settings.glarePrerender;
            if (!glarePrerender)
                $(this).append('<div class="js-tilt-glare"><div class="js-tilt-glare-inner"></div></div>');

            this.glareElementWrapper = $(this).find(".js-tilt-glare");
            this.glareElement = $(this).find(".js-tilt-glare-inner");

            if (glarePrerender) return;

            var stretch = {
                'position': 'absolute',
                'top': '0',
                'left': '0',
                'width': '100%',
                'height': '100%'
            };

            this.glareElementWrapper.css(stretch).css({
                'overflow': 'hidden'
            });

            this.glareElement.css({
                'position': 'absolute',
                'top': '50%',
                'left': '50%',
                'pointer-events': 'none',
                'background-image': 'linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)',
                'width': '' + $(this).outerWidth() * 2,
                'height': '' + $(this).outerWidth() * 2,
                'transform': 'rotate(180deg) translate(-50%, -50%)',
                'transform-origin': '0% 0%',
                'opacity': '0'
            });
        };

        var updateGlareSize = function updateGlareSize() {
            this.glareElement.css({
                'width': '' + $(this).outerWidth() * 2,
                'height': '' + $(this).outerWidth() * 2
            });
        };

        $.fn.tilt.destroy = function() {
            $(this).each(function() {
                $(this).find('.js-tilt-glare').remove();
                $(this).css({
                    'will-change': '',
                    'transform': ''
                });
                $(this).off('mousemove mouseenter mouseleave');
            });
        };

        $.fn.tilt.getValues = function() {
            var results = [];
            $(this).each(function() {
                this.mousePositions = getMousePositions.call(this);
                results.push(getValues.call(this));
            });
            return results;
        };

        $.fn.tilt.reset = function() {
            $(this).each(function() {
                var _this3 = this;
                this.mousePositions = getMousePositions.call(this);
                this.settings = $(this).data('settings');
                mouseLeave.call(this);
                setTimeout(function() {
                    _this3.reset = false;
                }, this.settings.transition);
            });
        };

        return this.each(function() {
            var _this4 = this;

            this.settings = $.extend({
                maxTilt: $(this).is('[data-tilt-max]') ? $(this).data('tilt-max') : 20,
                perspective: $(this).is('[data-tilt-perspective]') ? $(this).data('tilt-perspective') : 300,
                easing: $(this).is('[data-tilt-easing]') ? $(this).data('tilt-easing') : 'cubic-bezier(.03,.98,.52,.99)',
                scale: $(this).is('[data-tilt-scale]') ? $(this).data('tilt-scale') : '1',
                speed: $(this).is('[data-tilt-speed]') ? $(this).data('tilt-speed') : '400',
                transition: $(this).is('[data-tilt-transition]') ? $(this).data('tilt-transition') : true,
                axis: $(this).is('[data-tilt-axis]') ? $(this).data('tilt-axis') : null,
                reset: $(this).is('[data-tilt-reset]') ? $(this).data('tilt-reset') : true,
                glare: $(this).is('[data-tilt-glare]') ? $(this).data('tilt-glare') : false,
                maxGlare: $(this).is('[data-tilt-maxglare]') ? $(this).data('tilt-maxglare') : 1
            }, options);

            this.init = function() {
                $(_this4).data('settings', _this4.settings);
                if (_this4.settings.glare) prepareGlare.call(_this4);
                bindEvents.call(_this4);
            };

            this.init();
        });
    };

    // Auto-init on elements with [data-tilt]
    $(function() {
        $('[data-tilt]').tilt();
    });

})(jQuery);