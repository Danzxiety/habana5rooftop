__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return HSStepForm; });
function _createForOfIteratorHelper(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && Symbol.iterator in Object(iter)) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/*
* HSStepForm Plugin
* @version: 3.0.1 (Sun, 1 Aug 2021)
* @author: HtmlStream
* @event-namespace: .HSStepForm
* @license: Htmlstream Libraries (https://htmlstream.com/)
* Copyright 2021 Htmlstream
*/
var dataAttributeName = 'data-hs-step-form-options';
var defaults = {
  progressSelector: null,
  progressItems: null,
  stepsSelector: null,
  stepsItems: null,
  stepsActiveItem: null,
  nextSelector: '[data-hs-step-form-next-options]',
  prevSelector: '[data-hs-step-form-prev-options]',
  endSelector: null,
  isValidate: false,
  classMap: {
    active: 'active',
    checked: 'is-valid',
    error: 'is-invalid',
    required: 'js-step-required',
    focus: 'focus'
  },
  finish: function finish() {},
  preventNextStep: function preventNextStep() {
    return new Promise(function (resolve, reject) {
      resolve();
    });
  },
  onNextStep: function onNextStep() {},
  onPrevStep: function onPrevStep() {}
};

var HSStepForm = /*#__PURE__*/function () {
  function HSStepForm(el, options, id) {
    _classCallCheck(this, HSStepForm);

    this.collection = [];
    var that = this;
    var elems;

    if (el instanceof HTMLElement) {
      elems = [el];
    } else if (el instanceof Object) {
      elems = el;
    } else {
      elems = document.querySelectorAll(el);
    }

    for (var i = 0; i < elems.length; i += 1) {
      that.addToCollection(elems[i], options, id || elems[i].id);
    }

    if (!that.collection.length) {
      return false;
    } // initialization calls


    that._init();

    return this;
  }

  _createClass(HSStepForm, [{
    key: "_init",
    value: function _init() {
      var that = this;

      var _loop = function _loop(i) {
        var _$el = void 0;

        var _options = void 0;

        if (that.collection[i].hasOwnProperty('$initializedEl')) {
          return "continue";
        }

        _$el = that.collection[i].$el;
        _options = that.collection[i].options;
        _options.progressItems = _$el.querySelector(_options.progressSelector).children;
        _options.stepsItems = _$el.querySelector(_options.stepsSelector).children;
        _options.stepsActiveItem = _$el.querySelector(_options.stepsSelector).querySelector(".".concat(_options.classMap.active));

        that._prepareObject(_$el, _options);

        _$el.querySelectorAll(_options.nextSelector).forEach(function (item) {
          item.addEventListener('click', function () {
            that._nextClickEvents(_$el, _options, item);
          });
        });

        _$el.querySelectorAll(_options.prevSelector).forEach(function (item) {
          item.addEventListener('click', function () {
            that._prevClickEvents(_$el, _options, item);
          });
        });

        _$el.querySelectorAll(_options.endSelector).forEach(function (item) {
          item.addEventListener('click', function () {
            that._endClickEvents(_$el, _options);
          });
        });

        that.collection[i].$initializedEl = _options;
      };

      for (var i = 0; i < that.collection.length; i += 1) {
        var _ret = _loop(i);

        if (_ret === "continue") continue;
      }
    }
  }, {
    key: "_prepareObject",
    value: function _prepareObject($el, settings) {
      $el.querySelector(settings.stepsSelector).querySelectorAll(":scope > :not(.".concat(settings.classMap.active, ")")).forEach(function (item) {
        item.style.display = 'none';
      });

      settings.progressItems[_toConsumableArray(settings.stepsActiveItem.parentNode.children).indexOf(settings.stepsActiveItem)].classList.add(settings.classMap.active, settings.classMap.focus);
    }
  }, {
    key: "_endClickEvents",
    value: function _endClickEvents($el, settings) {
      var isValid = true;

      if (settings.isValidate) {
        $el.classList.remove('was-validated');
        settings.progressItems[settings.progressItems.length - 1].classList.remove(settings.classMap.error);
        Array.from($el.elements).forEach(function (item) {
          if (item.offsetParent !== null && !item.checkValidity()) {
            isValid = false;
            settings.progressItems[settings.progressItems.length - 1].classList.add(settings.classMap.error);

            if (settings.validator) {
              settings.validator.updateFieldStete(item);
              $el.classList.add('was-validated');
            }
          }
        });
      }

      if (isValid) {
        return settings.finish($el, settings);
      }
    }
  }, {
    key: "_nextClickEvents",
    value: function _nextClickEvents($el, settings, nextEl) {
      var _this = this;

      var nextDataSettings = nextEl.hasAttribute('data-hs-step-form-next-options') ? JSON.parse(nextEl.getAttribute('data-hs-step-form-next-options')) : {};
      var nextItemDefaults = {
        targetSelector: null
      },
          nextItemOptions = Object.assign({}, nextItemDefaults, nextDataSettings);
      var targetSelector = $el.querySelector(nextItemOptions.targetSelector);

      var targetIndex = _toConsumableArray(targetSelector.parentNode.children).indexOf(targetSelector);

      for (var i = 0; i < settings.progressItems.length; i++) {
        if (settings.isValidate) {
          if (settings.validator) {
            $el.classList.remove('was-validated');
          }

          if (targetIndex > i) {
            settings.progressItems[i].classList.add(settings.classMap.error);
            var requiredSelector = settings.progressItems[i].querySelector(settings.nextSelector).getAttribute('data-hs-step-form-next-options');

            var _iterator = _createForOfIteratorHelper(settings.stepsItems),
                _step;

            try {
              for (_iterator.s(); !(_step = _iterator.n()).done;) {
                var item = _step.value;
                item.classList.remove(settings.classMap.active);
                item.style.display = 'none';
              }
            } catch (err) {
              _iterator.e(err);
            } finally {
              _iterator.f();
            }

            var newTargetSelector = $el.querySelector(JSON.parse(requiredSelector).targetSelector);
            newTargetSelector.classList.add(settings.classMap.active);
            newTargetSelector.style.display = 'block';
            var isValid = true;
            Array.from($el.elements).forEach(function (item) {
              if (item.offsetParent !== null && !item.checkValidity()) {
                isValid = false;

                if (settings.validator) {
                  settings.validator.updateFieldStete(item);
                  $el.classList.add('was-validated');
                }
              }
            });

            if (!isValid) {
              settings.progressItems[i].classList.remove(settings.classMap.checked);
              return false;
            } else {
              settings.progressItems[i].classList.remove(settings.classMap.error);
            }
          }

          if (targetIndex > i && settings.isValidate) {
            settings.progressItems[i].classList.add(settings.classMap.checked);
          }
        } else {
          if (targetIndex > i && settings.isValidate) {
            settings.progressItems[i].classList.add(settings.classMap.checked);
          }

          if (targetIndex > i && !settings.isValidate) {
            settings.progressItems[i].classList.add(settings.classMap.active);
          }
        }
      }

      settings.preventNextStep($el).then(function () {
        var _iterator2 = _createForOfIteratorHelper(settings.progressItems),
            _step2;

        try {
          for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
            var _item = _step2.value;

            _item.classList.remove(settings.classMap.active, settings.classMap.focus);
          }
        } catch (err) {
          _iterator2.e(err);
        } finally {
          _iterator2.f();
        }

        settings.progressItems[targetIndex].classList.add(settings.classMap.active, settings.classMap.focus);

        var _iterator3 = _createForOfIteratorHelper(settings.stepsItems),
            _step3;

        try {
          for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
            var _item2 = _step3.value;

            _item2.classList.remove(settings.classMap.active);

            _item2.style.display = 'none';
          }
        } catch (err) {
          _iterator3.e(err);
        } finally {
          _iterator3.f();
        }

        targetSelector.classList.add(settings.classMap.active);

        _this.fadeIn(targetSelector, 400);

        return settings.onNextStep();
      });
    }
  }, {
    key: "_prevClickEvents",
    value: function _prevClickEvents($el, settings, prevEl) {
      var prevDataSettings = prevEl.hasAttribute('data-hs-step-form-prev-options') ? JSON.parse(prevEl.getAttribute('data-hs-step-form-prev-options')) : {};
      var prevItemDefaults = {
        targetSelector: null
      },
          prevItemOptions = Object.assign({}, prevItemDefaults, prevDataSettings);
      var targetSelector = $el.querySelector(prevItemOptions.targetSelector);

      var targetIndex = _toConsumableArray(targetSelector.parentNode.children).indexOf(targetSelector);

      for (var i = 0; i < settings.progressItems.length; i++) {
        if (settings.isValidate) {
          if (targetIndex > i) {
            settings.progressItems[i].classList.add(settings.classMap.error);
            var requiredSelector = settings.progressItems[i].querySelector(settings.nextSelector).getAttribute('data-hs-step-form-next-options');

            var _iterator4 = _createForOfIteratorHelper(settings.stepsItems),
                _step4;

            try {
              for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
                var item = _step4.value;
                item.classList.remove(settings.classMap.active);
                item.style.display = 'none';
              }
            } catch (err) {
              _iterator4.e(err);
            } finally {
              _iterator4.f();
            }

            var newTargetSelector = $el.querySelector(JSON.parse(requiredSelector).targetSelector);
            newTargetSelector.classList.add(settings.classMap.active);
            newTargetSelector.style.display = 'block';
            var isValid = true;
            Array.from($el.elements).forEach(function (item) {
              if (item.offsetParent !== null && !item.checkValidity()) {
                isValid = false;
              }
            });

            if (!isValid) {
              settings.progressItems[i].classList.remove(settings.classMap.checked);
              return false;
            } else {
              settings.progressItems[i].classList.remove(settings.classMap.error);
            }
          }

          if (targetIndex > i && settings.isValidate) {
            settings.progressItems[i].classList.add(settings.classMap.checked);
          }
        } else {
          if (targetIndex > i && settings.isValidate) {
            settings.progressItems[i].classList.add(settings.classMap.checked);
          }

          if (targetIndex > i && !settings.isValidate) {
            settings.progressItems[i].classList.add(settings.classMap.active);
          }
        }
      }

      var _iterator5 = _createForOfIteratorHelper(settings.progressItems),
          _step5;

      try {
        for (_iterator5.s(); !(_step5 = _iterator5.n()).done;) {
          var _item3 = _step5.value;

          _item3.classList.remove(settings.classMap.active, settings.classMap.focus);
        }
      } catch (err) {
        _iterator5.e(err);
      } finally {
        _iterator5.f();
      }

      settings.progressItems[targetIndex].classList.add(settings.classMap.active, settings.classMap.focus);

      var _iterator6 = _createForOfIteratorHelper(settings.stepsItems),
          _step6;

      try {
        for (_iterator6.s(); !(_step6 = _iterator6.n()).done;) {
          var _item4 = _step6.value;

          _item4.classList.remove(settings.classMap.active);

          _item4.style.display = 'none';
        }
      } catch (err) {
        _iterator6.e(err);
      } finally {
        _iterator6.f();
      }

      targetSelector.classList.add(settings.classMap.active);
      this.fadeIn(targetSelector, 400);
      return settings.onPrevStep();
    }
  }, {
    key: "fadeIn",
    value: function fadeIn(el, time) {
      el.style.opacity = 0;
      el.style.display = 'block';
      var last = +new Date();

      var tick = function tick() {
        el.style.opacity = +el.style.opacity + (new Date() - last) / time;
        last = +new Date();

        if (+el.style.opacity < 1) {
          window.requestAnimationFrame && requestAnimationFrame(tick) || setTimeout(tick, 16);
        }
      };

      tick();
    }
  }, {
    key: "addToCollection",
    value: function addToCollection(item, options, id) {
      this.collection.push({
        $el: item,
        id: id || null,
        options: Object.assign({}, defaults, item.hasAttribute(dataAttributeName) ? JSON.parse(item.getAttribute(dataAttributeName)) : {}, options)
      });
    }
  }, {
    key: "getItem",
    value: function getItem(item) {
      if (typeof item === 'number') {
        return this.collection[item].$initializedEl;
      } else {
        return this.collection.find(function (el) {
          return el.id === item;
        }).$initializedEl;
      }
    }
  }]);

  return HSStepForm;
}();



//# sourceURL=webpack://HSStepForm/./src/js/hs-step-form.js?