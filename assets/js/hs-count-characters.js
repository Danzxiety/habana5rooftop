__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return HSCountCharacters; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/*
* HSCountCharacters Plugin
* @version: 1.0.1 (Sun, 1 Aug 2021)
* @author: HtmlStream
* @event-namespace: .HSCountCharacters
* @license: Htmlstream Libraries (https://htmlstream.com/)
* Copyright 2021 Htmlstream
*/
var dataAttributeName = 'data-hs-count-characters-options';
var defaults = {};

var HSCountCharacters = /*#__PURE__*/function () {
  function HSCountCharacters(el, options, id) {
    _classCallCheck(this, HSCountCharacters);

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

  _createClass(HSCountCharacters, [{
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
        _options.output = document.querySelector(_options.output);
        _options.maxLength = _$el.hasAttribute('maxlength') ? '/ ' + _$el.getAttribute('maxlength') : '';

        that._updateOutput(_$el, _options);

        _$el.addEventListener('input', function () {
          that._updateOutput(_$el, _options);
        });

        that.collection[i].$initializedEl = _options;
      };

      for (var i = 0; i < that.collection.length; i += 1) {
        var _ret = _loop(i);

        if (_ret === "continue") continue;
      }
    }
  }, {
    key: "_updateOutput",
    value: function _updateOutput($el, settings) {
      settings.output.innerHTML = "".concat($el.value.length, " ").concat(settings.maxLength);
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

  return HSCountCharacters;
}();



//# sourceURL=webpack://HSCountCharacters/./src/js/hs-count-characters.js?