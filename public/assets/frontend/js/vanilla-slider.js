/**
* Vanilla Slider
* A simple slider made with pure Javascript
*
* @version 0.1
* @author Guilherme Santiago - http://guilherme.sexy
* @repo http://github.com/gsantiago/vanilla-slider
*/
(function (window, document) {
  'use strict';


  /**
  * Default options
  */
  var DEFAULTS = {
    visibles: 1,
    direction: 'horizontal',
    controlPrev: '',
    controlNext: '',
    justify: true,
    steps: 1,

    // TO IMPLEMENT:
    dots: '',
    touch: true,
    animation: 'slide',
    autoPlay: 500,
    infinite: true
  };


  /**
  * Utils
  */
  var utils = {

    // Returns true if 'obj' is a node element
    isDOM: function (o) {
      return (
        typeof HTMLElement === 'object' ? o instanceof HTMLElement :
        o && typeof o === 'object' && o !== null && o.nodeType === 1 && typeof o.nodeName === 'string'
      );
    },

    // Merge two objects. Similar to $.extends from jQuery
    merge: function (obj1, obj2) {
      var result = {};
      for (var prop in obj1) {
        if (obj2.hasOwnProperty(prop)) {
          result[prop] = obj2[prop];
        } else {
          result[prop] = obj1[prop];
        }
      }

      return result;
    },

    // A simple iterator for collections
    each: function (group, callback) {
      for (var i = 0, max = group.length; i < max; i += 1) {
        callback.call(group[i], i);
      }
    }
  }


  /**
  * Constructor for the slider
  *
  * @class Slider
  * @constructor
  * @param {String | Node Element} Selector for the slider's container
  * @param {Object} Options
  */
  function Slider(element, options) {
    if (!(this instanceof Slider)) return new Slider(element, options);

    if (utils.isDOM(element)) {
      this.container = element;
    } else {
      this.container = document.querySelector(element);
    }

    this.settings = utils.merge(DEFAULTS, options);

    this.slider = this.container.children[0];
    this.items = this.slider.children;

    this.containerWidth = this.container.offsetWidth;
    this.containerHeight = this.container.offsetHeight;

    this.itemWidth = this.items[0].offsetWidth;
    this.itemHeight = this.items[0].offsetHeight;
    this.itemMargin = 0;

    if (this.settings.direction === 'vertical') {
      this.containerDimension = this.containerHeight;
      this.itemDimension = this.itemHeight;
    } else {
      this.containerDimension = this.containerWidth;
      this.itemDimension = this.itemWidth;
    }

    // Justify the margins acording to the number of items to show (visibles)
    if (this.settings.visibles > 1 && this.settings.justify) {
      this.justifyItems();
    }

    if (this.settings.controlNext || this.settings.controlPrev) {
      this.addControls(this.settings.controlNext, this.settings.controlPrev, this.settings.steps);
    }
  }

  // An alias for prototype
  Slider.fn = Slider.prototype;


  /*
  * Justify the margins between the items acording to the number
  * of items to show (the visibles), and the direction (vertical or horizontal)
  *
  * @method justifyItems
  */
  Slider.fn.justifyItems = function () {

    var visibles = this.settings.visibles,
        items = this.items,
        direction = this.settings.direction,
        margin;

    margin = (this.containerDimension - (this.itemDimension * visibles)) / (visibles - 1);
    margin = Math.ceil(margin);
    this.itemMargin = margin;

    utils.each(items, function () {
      this.style[direction === 'vertical' ? 'marginBottom' : 'marginRight'] = margin + 'px';
    });
  };


  /**
  * Static method to return the max or min position for the Slider
  *
  * @method getLimit
  * @param {Object} The instance of slider
  * @param {String} The position ('max' or 'min')
  */
  Slider.getLimit = function (instance, pos) {

    var settings = instance.settings,
        direction = settings.direction,
        itemDimension = instance.itemDimension,
        itemMargin = instance.itemMargin,
        visibles = settings.visibles,
        items = instance.items;

    if (direction === 'vertical' && pos === 'max') {
      return 0;
    }

    if (direction === 'vertical' && pos === 'min') {
      return (((itemDimension + itemMargin) * (items.length - visibles + 1)) - itemMargin) * -1;
    }

    if (direction === 'horizontal' && pos === 'max') {
      return ((itemDimension + itemMargin) * (items.length - visibles + 1)) - itemMargin;
    }

    if (direction === 'horizontal' && pos === 'min') {
      return 0;
    }

  };


  /**
  * Check if the Slider is at its limit
  *
  * @method isAtLimit
  */
  Slider.fn.isAtLimit = function (nextPos) {
    var max = Slider.getLimit(this, 'max'),
        min = Slider.getLimit(this, 'min');

    if (nextPos < min) {
      return true;
    }

    if (nextPos > max) {
      return true;
    }

    return false;
  };


  /**
  * Return the next position for the slider based in the number of steps
  *
  * @method getNextPos
  */
  Slider.fn.getNextPos = function (steps) {
    var currentPos,
        direction,
        nextPos;

    direction = this.settings.direction;

    currentPos = this.slider.style[direction === 'vertical' ? 'top' : 'right'];

    if (currentPos) {
      currentPos = Math.floor(parseInt(currentPos));
    }

    if (direction === 'vertical') {
      nextPos = currentPos - (((this.itemDimension + this.itemMargin)) * steps);
    } else {
      nextPos = currentPos + (((this.itemDimension + this.itemMargin)) * steps)
    }

    return Math.ceil(nextPos);
  };

  /**
  * Move the slider.
  * Pass a negative number to go in the inverse direction
  *
  * @method move
  * @param {Integer} Number of items to move
  */
  Slider.fn.move = function (steps) {
    steps = steps || 1;

    var nextPos = this.getNextPos(steps),
        direction = this.settings.direction;

    if (this.isAtLimit(nextPos)) {
      return this;
    }

    this.slider.style[direction === 'vertical' ? 'top' : 'right'] = nextPos + 'px';
  };


  /**
  * Add event listeners for the controls passed
  *
  * @method addControls
  * @param {String | Node Element} Next Control
  * @param {String | Node Element} Prev Control
  * @param {Integer} Number of items (steps) to avance/return
  */
  Slider.fn.addControls = function (next, prev, steps) {

    var that = this;

    if (!utils.isDOM(next)) {
      next = document.querySelector(next);
    }

    if (!utils.isDOM(prev)) {
      prev = document.querySelector(prev);
    }

    next.addEventListener('click', function (e) {
      e.preventDefault();
      that.move(steps);
    });

    prev.addEventListener('click', function (e) {
      e.preventDefault();
      that.move(steps * -1);
    });
  };


  window.Slider = Slider;

}(window, document));

/**
* Vanilla Slider2
* A simple Slider2 made with pure Javascript
*
* @version 0.1
* @author Guilherme Santiago - http://guilherme.sexy
* @repo http://github.com/gsantiago/vanilla-Slider2
*/
(function (window, document) {
  'use strict';


  /**
  * Default options
  */
  var DEFAULTS = {
    visibles: 1,
    direction: 'horizontal',
    controlPrev: '',
    controlNext: '',
    justify: true,
    steps: 1,

    // TO IMPLEMENT:
    dots: '',
    touch: true,
    animation: 'slide',
    autoPlay: 500,
    infinite: true
  };


  /**
  * Utils
  */
  var utils = {

    // Returns true if 'obj' is a node element
    isDOM: function (o) {
      return (
        typeof HTMLElement === 'object' ? o instanceof HTMLElement :
        o && typeof o === 'object' && o !== null && o.nodeType === 1 && typeof o.nodeName === 'string'
      );
    },

    // Merge two objects. Similar to $.extends from jQuery
    merge: function (obj1, obj2) {
      var result = {};
      for (var prop in obj1) {
        if (obj2.hasOwnProperty(prop)) {
          result[prop] = obj2[prop];
        } else {
          result[prop] = obj1[prop];
        }
      }

      return result;
    },

    // A simple iterator for collections
    each: function (group, callback) {
      for (var i = 0, max = group.length; i < max; i += 1) {
        callback.call(group[i], i);
      }
    }
  }


  /**
  * Constructor for the Slider2
  *
  * @class Slider2
  * @constructor
  * @param {String | Node Element} Selector for the Slider2's container2
  * @param {Object} Options
  */
  function Slider2(element, options) {
    if (!(this instanceof Slider2)) return new Slider2(element, options);

    if (utils.isDOM(element)) {
      this.container2 = element;
    } else {
      this.container2 = document.querySelector(element);
    }

    this.settings = utils.merge(DEFAULTS, options);
/*********************************************************/
    this.slider2 = this.container2.children[0];
    this.items = this.slider2.children;
/*********************************************************/
    this.container2Width = this.container2.offsetWidth;
    this.container2Height = this.container2.offsetHeight;

    this.itemWidth = this.items[0].offsetWidth;
    this.itemHeight = this.items[0].offsetHeight;
    this.itemMargin = 0;

    if (this.settings.direction === 'vertical') {
      this.container2Dimension = this.container2Height;
      this.itemDimension = this.itemHeight;
    } else {
      this.container2Dimension = this.container2Width;
      this.itemDimension = this.itemWidth;
    }

    // Justify the margins acording to the number of items to show (visibles)
    if (this.settings.visibles > 1 && this.settings.justify) {
      this.justifyItems();
    }

    if (this.settings.controlNext || this.settings.controlPrev) {
      this.addControls(this.settings.controlNext, this.settings.controlPrev, this.settings.steps);
    }
  }

  // An alias for prototype
  Slider2.fn = Slider2.prototype;


  /*
  * Justify the margins between the items acording to the number
  * of items to show (the visibles), and the direction (vertical or horizontal)
  *
  * @method justifyItems
  */
  Slider2.fn.justifyItems = function () {

    var visibles = this.settings.visibles,
        items = this.items,
        direction = this.settings.direction,
        margin;

    margin = (this.container2Dimension - (this.itemDimension * visibles)) / (visibles - 1);
    margin = Math.ceil(margin);
    this.itemMargin = margin;

    utils.each(items, function () {
      this.style[direction === 'vertical' ? 'marginBottom' : 'marginRight'] = margin + 'px';
    });
  };


  /**
  * Static method to return the max or min position for the Slider2
  *
  * @method getLimit
  * @param {Object} The instance of Slider2
  * @param {String} The position ('max' or 'min')
  */
  Slider2.getLimit = function (instance, pos) {

    var settings = instance.settings,
        direction = settings.direction,
        itemDimension = instance.itemDimension,
        itemMargin = instance.itemMargin,
        visibles = settings.visibles,
        items = instance.items;

    if (direction === 'vertical' && pos === 'max') {
      return 0;
    }

    if (direction === 'vertical' && pos === 'min') {
      return (((itemDimension + itemMargin) * (items.length - visibles + 1)) - itemMargin) * -1;
    }

    if (direction === 'horizontal' && pos === 'max') {
      return ((itemDimension + itemMargin) * (items.length - visibles + 1)) - itemMargin;
    }

    if (direction === 'horizontal' && pos === 'min') {
      return 0;
    }

  };


  /**
  * Check if the Slider2 is at its limit
  *
  * @method isAtLimit
  */
  Slider2.fn.isAtLimit = function (nextPos) {
    var max = Slider2.getLimit(this, 'max'),
        min = Slider2.getLimit(this, 'min');

    if (nextPos < min) {
      return true;
    }

    if (nextPos > max) {
      return true;
    }

    return false;
  };


  /**
  * Return the next position for the Slider2 based in the number of steps
  *
  * @method getNextPos
  */
  Slider2.fn.getNextPos = function (steps) {
    var currentPos,
        direction,
        nextPos;

    direction = this.settings.direction;
/************************************************************************************/
    currentPos = this.slider2.style[direction === 'vertical' ? 'top' : 'right'];
/*************************************************************************************/
    if (currentPos) {
      currentPos = Math.floor(parseInt(currentPos));
    }

    if (direction === 'vertical') {
      nextPos = currentPos - (((this.itemDimension + this.itemMargin)) * steps);
    } else {
      nextPos = currentPos + (((this.itemDimension + this.itemMargin)) * steps)
    }

    return Math.ceil(nextPos);
  };

  /**
  * Move the Slider2.
  * Pass a negative number to go in the inverse direction
  *
  * @method move
  * @param {Integer} Number of items to move
  */
  Slider2.fn.move = function (steps) {
    steps = steps || 1;

    var nextPos = this.getNextPos(steps),
        direction = this.settings.direction;

    if (this.isAtLimit(nextPos)) {
      return this;
    }
/************************************************************************************/
    this.slider2.style[direction === 'vertical' ? 'top' : 'right'] = nextPos + 'px';
  /************************************************************************************/
  };


  /**
  * Add event listeners for the controls passed
  *
  * @method addControls
  * @param {String | Node Element} Next Control
  * @param {String | Node Element} Prev Control
  * @param {Integer} Number of items (steps) to avance/return
  */
  Slider2.fn.addControls = function (next, prev, steps) {

    var that = this;

    if (!utils.isDOM(next)) {
      next = document.querySelector(next);
    }

    if (!utils.isDOM(prev)) {
      prev = document.querySelector(prev);
    }

    next.addEventListener('click', function (e) {
      e.preventDefault();
      that.move(steps);
    });

    prev.addEventListener('click', function (e) {
      e.preventDefault();
      that.move(steps * -1);
    });
  };


  window.Slider2 = Slider2;

}(window, document));


/**
* Vanilla Slider3
* A simple Slider3 made with pure Javascript
*
* @version 0.1
* @author Guilherme Santiago - http://guilherme.sexy
* @repo http://github.com/gsantiago/vanilla-Slider3
*/
(function (window, document) {
  'use strict';


  /**
  * Default options
  */
  var DEFAULTS = {
    visibles: 1,
    direction: 'horizontal',
    controlPrev: '',
    controlNext: '',
    justify: true,
    steps: 1,

    // TO IMPLEMENT:
    dots: '',
    touch: true,
    animation: 'slide',
    autoPlay: 500,
    infinite: true
  };


  /**
  * Utils
  */
  var utils = {

    // Returns true if 'obj' is a node element
    isDOM: function (o) {
      return (
        typeof HTMLElement === 'object' ? o instanceof HTMLElement :
        o && typeof o === 'object' && o !== null && o.nodeType === 1 && typeof o.nodeName === 'string'
      );
    },

    // Merge two objects. Similar to $.extends from jQuery
    merge: function (obj1, obj2) {
      var result = {};
      for (var prop in obj1) {
        if (obj2.hasOwnProperty(prop)) {
          result[prop] = obj2[prop];
        } else {
          result[prop] = obj1[prop];
        }
      }

      return result;
    },

    // A simple iterator for collections
    each: function (group, callback) {
      for (var i = 0, max = group.length; i < max; i += 1) {
        callback.call(group[i], i);
      }
    }
  }


  /**
  * Constructor for the Slider3
  *
  * @class Slider3
  * @constructor
  * @param {String | Node Element} Selector for the Slider3's container3
  * @param {Object} Options
  */
  function Slider3(element, options) {
    if (!(this instanceof Slider3)) return new Slider3(element, options);

    if (utils.isDOM(element)) {
      this.container3 = element;
    } else {
      this.container3 = document.querySelector(element);
    }

    this.settings = utils.merge(DEFAULTS, options);
/*********************************************************/
    this.Slider3 = this.container3.children[0];
    this.items = this.Slider3.children;
/*********************************************************/
    this.container3Width = this.container3.offsetWidth;
    this.container3Height = this.container3.offsetHeight;

    this.itemWidth = this.items[0].offsetWidth;
    this.itemHeight = this.items[0].offsetHeight;
    this.itemMargin = 0;

    if (this.settings.direction === 'vertical') {
      this.container3Dimension = this.container3Height;
      this.itemDimension = this.itemHeight;
    } else {
      this.container3Dimension = this.container3Width;
      this.itemDimension = this.itemWidth;
    }

    // Justify the margins acording to the number of items to show (visibles)
    if (this.settings.visibles > 1 && this.settings.justify) {
      this.justifyItems();
    }

    if (this.settings.controlNext || this.settings.controlPrev) {
      this.addControls(this.settings.controlNext, this.settings.controlPrev, this.settings.steps);
    }
  }

  // An alias for prototype
  Slider3.fn = Slider3.prototype;


  /*
  * Justify the margins between the items acording to the number
  * of items to show (the visibles), and the direction (vertical or horizontal)
  *
  * @method justifyItems
  */
  Slider3.fn.justifyItems = function () {

    var visibles = this.settings.visibles,
        items = this.items,
        direction = this.settings.direction,
        margin;

    margin = (this.container3Dimension - (this.itemDimension * visibles)) / (visibles - 1);
    margin = Math.ceil(margin);
    this.itemMargin = margin;

    utils.each(items, function () {
      this.style[direction === 'vertical' ? 'marginBottom' : 'marginRight'] = margin + 'px';
    });
  };


  /**
  * Static method to return the max or min position for the Slider3
  *
  * @method getLimit
  * @param {Object} The instance of Slider3
  * @param {String} The position ('max' or 'min')
  */
  Slider3.getLimit = function (instance, pos) {

    var settings = instance.settings,
        direction = settings.direction,
        itemDimension = instance.itemDimension,
        itemMargin = instance.itemMargin,
        visibles = settings.visibles,
        items = instance.items;

    if (direction === 'vertical' && pos === 'max') {
      return 0;
    }

    if (direction === 'vertical' && pos === 'min') {
      return (((itemDimension + itemMargin) * (items.length - visibles + 1)) - itemMargin) * -1;
    }

    if (direction === 'horizontal' && pos === 'max') {
      return ((itemDimension + itemMargin) * (items.length - visibles + 1)) - itemMargin;
    }

    if (direction === 'horizontal' && pos === 'min') {
      return 0;
    }

  };


  /**
  * Check if the Slider3 is at its limit
  *
  * @method isAtLimit
  */
  Slider3.fn.isAtLimit = function (nextPos) {
    var max = Slider3.getLimit(this, 'max'),
        min = Slider3.getLimit(this, 'min');

    if (nextPos < min) {
      return true;
    }

    if (nextPos > max) {
      return true;
    }

    return false;
  };


  /**
  * Return the next position for the Slider3 based in the number of steps
  *
  * @method getNextPos
  */
  Slider3.fn.getNextPos = function (steps) {
    var currentPos,
        direction,
        nextPos;

    direction = this.settings.direction;
/************************************************************************************/
    currentPos = this.Slider3.style[direction === 'vertical' ? 'top' : 'right'];
/*************************************************************************************/
    if (currentPos) {
      currentPos = Math.floor(parseInt(currentPos));
    }

    if (direction === 'vertical') {
      nextPos = currentPos - (((this.itemDimension + this.itemMargin)) * steps);
    } else {
      nextPos = currentPos + (((this.itemDimension + this.itemMargin)) * steps)
    }

    return Math.ceil(nextPos);
  };

  /**
  * Move the Slider3.
  * Pass a negative number to go in the inverse direction
  *
  * @method move
  * @param {Integer} Number of items to move
  */
  Slider3.fn.move = function (steps) {
    steps = steps || 1;

    var nextPos = this.getNextPos(steps),
        direction = this.settings.direction;

    if (this.isAtLimit(nextPos)) {
      return this;
    }
/************************************************************************************/
    this.Slider3.style[direction === 'vertical' ? 'top' : 'right'] = nextPos + 'px';
  /************************************************************************************/
  };


  /**
  * Add event listeners for the controls passed
  *
  * @method addControls
  * @param {String | Node Element} Next Control
  * @param {String | Node Element} Prev Control
  * @param {Integer} Number of items (steps) to avance/return
  */
  Slider3.fn.addControls = function (next, prev, steps) {

    var that = this;

    if (!utils.isDOM(next)) {
      next = document.querySelector(next);
    }

    if (!utils.isDOM(prev)) {
      prev = document.querySelector(prev);
    }

    next.addEventListener('click', function (e) {
      e.preventDefault();
      that.move(steps);
    });

    prev.addEventListener('click', function (e) {
      e.preventDefault();
      that.move(steps * -1);
    });
  };


  window.Slider3 = Slider3;

}(window, document));


/**
* Vanilla Slider4
* A simple Slider4 made with pure Javascript
*
* @version 0.1
* @author Guilherme Santiago - http://guilherme.sexy
* @repo http://github.com/gsantiago/vanilla-Slider4
*/
(function (window, document) {
  'use strict';


  /**
  * Default options
  */
  var DEFAULTS = {
    visibles: 1,
    direction: 'horizontal',
    controlPrev: '',
    controlNext: '',
    justify: true,
    steps: 1,

    // TO IMPLEMENT:
    dots: '',
    touch: true,
    animation: 'slide',
    autoPlay: 500,
    infinite: true
  };


  /**
  * Utils
  */
  var utils = {

    // Returns true if 'obj' is a node element
    isDOM: function (o) {
      return (
        typeof HTMLElement === 'object' ? o instanceof HTMLElement :
        o && typeof o === 'object' && o !== null && o.nodeType === 1 && typeof o.nodeName === 'string'
      );
    },

    // Merge two objects. Similar to $.extends from jQuery
    merge: function (obj1, obj2) {
      var result = {};
      for (var prop in obj1) {
        if (obj2.hasOwnProperty(prop)) {
          result[prop] = obj2[prop];
        } else {
          result[prop] = obj1[prop];
        }
      }

      return result;
    },

    // A simple iterator for collections
    each: function (group, callback) {
      for (var i = 0, max = group.length; i < max; i += 1) {
        callback.call(group[i], i);
      }
    }
  }


  /**
  * Constructor for the Slider4
  *
  * @class Slider4
  * @constructor
  * @param {String | Node Element} Selector for the Slider4's container4
  * @param {Object} Options
  */
  function Slider4(element, options) {
    if (!(this instanceof Slider4)) return new Slider4(element, options);

    if (utils.isDOM(element)) {
      this.container4 = element;
    } else {
      this.container4 = document.querySelector(element);
    }

    this.settings = utils.merge(DEFAULTS, options);

    this.Slider4 = this.container4.children[0];
    this.items = this.Slider4.children;

    this.container4Width = this.container4.offsetWidth;
    this.container4Height = this.container4.offsetHeight;

    this.itemWidth = this.items[0].offsetWidth;
    this.itemHeight = this.items[0].offsetHeight;
    this.itemMargin = 0;

    if (this.settings.direction === 'vertical') {
      this.container4Dimension = this.container4Height;
      this.itemDimension = this.itemHeight;
    } else {
      this.container4Dimension = this.container4Width;
      this.itemDimension = this.itemWidth;
    }

    // Justify the margins acording to the number of items to show (visibles)
    if (this.settings.visibles > 1 && this.settings.justify) {
      this.justifyItems();
    }

    if (this.settings.controlNext || this.settings.controlPrev) {
      this.addControls(this.settings.controlNext, this.settings.controlPrev, this.settings.steps);
    }
  }

  // An alias for prototype
  Slider4.fn = Slider4.prototype;


  /*
  * Justify the margins between the items acording to the number
  * of items to show (the visibles), and the direction (vertical or horizontal)
  *
  * @method justifyItems
  */
  Slider4.fn.justifyItems = function () {

    var visibles = this.settings.visibles,
        items = this.items,
        direction = this.settings.direction,
        margin;

    margin = (this.container4Dimension - (this.itemDimension * visibles)) / (visibles - 1);
    margin = Math.ceil(margin);
    this.itemMargin = margin;

    utils.each(items, function () {
      this.style[direction === 'vertical' ? 'marginBottom' : 'marginRight'] = margin + 'px';
    });
  };


  /**
  * Static method to return the max or min position for the Slider4
  *
  * @method getLimit
  * @param {Object} The instance of Slider4
  * @param {String} The position ('max' or 'min')
  */
  Slider4.getLimit = function (instance, pos) {

    var settings = instance.settings,
        direction = settings.direction,
        itemDimension = instance.itemDimension,
        itemMargin = instance.itemMargin,
        visibles = settings.visibles,
        items = instance.items;

    if (direction === 'vertical' && pos === 'max') {
      return 0;
    }

    if (direction === 'vertical' && pos === 'min') {
      return (((itemDimension + itemMargin) * (items.length - visibles + 1)) - itemMargin) * -1;
    }

    if (direction === 'horizontal' && pos === 'max') {
      return ((itemDimension + itemMargin) * (items.length - visibles + 1)) - itemMargin;
    }

    if (direction === 'horizontal' && pos === 'min') {
      return 0;
    }

  };


  /**
  * Check if the Slider4 is at its limit
  *
  * @method isAtLimit
  */
  Slider4.fn.isAtLimit = function (nextPos) {
    var max = Slider4.getLimit(this, 'max'),
        min = Slider4.getLimit(this, 'min');

    if (nextPos < min) {
      return true;
    }

    if (nextPos > max) {
      return true;
    }

    return false;
  };


  /**
  * Return the next position for the Slider4 based in the number of steps
  *
  * @method getNextPos
  */
  Slider4.fn.getNextPos = function (steps) {
    var currentPos,
        direction,
        nextPos;

    direction = this.settings.direction;

    currentPos = this.Slider4.style[direction === 'vertical' ? 'top' : 'right'];

    if (currentPos) {
      currentPos = Math.floor(parseInt(currentPos));
    }

    if (direction === 'vertical') {
      nextPos = currentPos - (((this.itemDimension + this.itemMargin)) * steps);
    } else {
      nextPos = currentPos + (((this.itemDimension + this.itemMargin)) * steps)
    }

    return Math.ceil(nextPos);
  };

  /**
  * Move the Slider4.
  * Pass a negative number to go in the inverse direction
  *
  * @method move
  * @param {Integer} Number of items to move
  */
  Slider4.fn.move = function (steps) {
    steps = steps || 1;

    var nextPos = this.getNextPos(steps),
        direction = this.settings.direction;

    if (this.isAtLimit(nextPos)) {
      return this;
    }

    this.Slider4.style[direction === 'vertical' ? 'top' : 'right'] = nextPos + 'px';
  };


  /**
  * Add event listeners for the controls passed
  *
  * @method addControls
  * @param {String | Node Element} Next Control
  * @param {String | Node Element} Prev Control
  * @param {Integer} Number of items (steps) to avance/return
  */
  Slider4.fn.addControls = function (next, prev, steps) {

    var that = this;

    if (!utils.isDOM(next)) {
      next = document.querySelector(next);
    }

    if (!utils.isDOM(prev)) {
      prev = document.querySelector(prev);
    }

    next.addEventListener('click', function (e) {
      e.preventDefault();
      that.move(steps);
    });

    prev.addEventListener('click', function (e) {
      e.preventDefault();
      that.move(steps * -1);
    });
  };


  window.Slider4 = Slider4;

}(window, document));


/**
* Vanilla Slider5
* A simple Slider5 made with pure Javascript
*
* @version 0.1
* @author Guilherme Santiago - http://guilherme.sexy
* @repo http://github.com/gsantiago/vanilla-Slider5
*/
(function (window, document) {
  'use strict';


  /**
  * Default options
  */
  var DEFAULTS = {
    visibles: 1,
    direction: 'horizontal',
    controlPrev: '',
    controlNext: '',
    justify: true,
    steps: 1,

    // TO IMPLEMENT:
    dots: '',
    touch: true,
    animation: 'slide',
    autoPlay: 500,
    infinite: true
  };


  /**
  * Utils
  */
  var utils = {

    // Returns true if 'obj' is a node element
    isDOM: function (o) {
      return (
        typeof HTMLElement === 'object' ? o instanceof HTMLElement :
        o && typeof o === 'object' && o !== null && o.nodeType === 1 && typeof o.nodeName === 'string'
      );
    },

    // Merge two objects. Similar to $.extends from jQuery
    merge: function (obj1, obj2) {
      var result = {};
      for (var prop in obj1) {
        if (obj2.hasOwnProperty(prop)) {
          result[prop] = obj2[prop];
        } else {
          result[prop] = obj1[prop];
        }
      }

      return result;
    },

    // A simple iterator for collections
    each: function (group, callback) {
      for (var i = 0, max = group.length; i < max; i += 1) {
        callback.call(group[i], i);
      }
    }
  }


  /**
  * Constructor for the Slider5
  *
  * @class Slider5
  * @constructor
  * @param {String | Node Element} Selector for the Slider5's container5
  * @param {Object} Options
  */
  function Slider5(element, options) {
    if (!(this instanceof Slider5)) return new Slider5(element, options);

    if (utils.isDOM(element)) {
      this.container5 = element;
    } else {
      this.container5 = document.querySelector(element);
    }

    this.settings = utils.merge(DEFAULTS, options);

    this.Slider5 = this.container5.children[0];
    this.items = this.Slider5.children;

    this.container5Width = this.container5.offsetWidth;
    this.container5Height = this.container5.offsetHeight;

    this.itemWidth = this.items[0].offsetWidth;
    this.itemHeight = this.items[0].offsetHeight;
    this.itemMargin = 0;

    if (this.settings.direction === 'vertical') {
      this.container5Dimension = this.container5Height;
      this.itemDimension = this.itemHeight;
    } else {
      this.container5Dimension = this.container5Width;
      this.itemDimension = this.itemWidth;
    }

    // Justify the margins acording to the number of items to show (visibles)
    if (this.settings.visibles > 1 && this.settings.justify) {
      this.justifyItems();
    }

    if (this.settings.controlNext || this.settings.controlPrev) {
      this.addControls(this.settings.controlNext, this.settings.controlPrev, this.settings.steps);
    }
  }

  // An alias for prototype
  Slider5.fn = Slider5.prototype;


  /*
  * Justify the margins between the items acording to the number
  * of items to show (the visibles), and the direction (vertical or horizontal)
  *
  * @method justifyItems
  */
  Slider5.fn.justifyItems = function () {

    var visibles = this.settings.visibles,
        items = this.items,
        direction = this.settings.direction,
        margin;

    margin = (this.container5Dimension - (this.itemDimension * visibles)) / (visibles - 1);
    margin = Math.ceil(margin);
    this.itemMargin = margin;

    utils.each(items, function () {
      this.style[direction === 'vertical' ? 'marginBottom' : 'marginRight'] = margin + 'px';
    });
  };


  /**
  * Static method to return the max or min position for the Slider5
  *
  * @method getLimit
  * @param {Object} The instance of Slider5
  * @param {String} The position ('max' or 'min')
  */
  Slider5.getLimit = function (instance, pos) {

    var settings = instance.settings,
        direction = settings.direction,
        itemDimension = instance.itemDimension,
        itemMargin = instance.itemMargin,
        visibles = settings.visibles,
        items = instance.items;

    if (direction === 'vertical' && pos === 'max') {
      return 0;
    }

    if (direction === 'vertical' && pos === 'min') {
      return (((itemDimension + itemMargin) * (items.length - visibles + 1)) - itemMargin) * -1;
    }

    if (direction === 'horizontal' && pos === 'max') {
      return ((itemDimension + itemMargin) * (items.length - visibles + 1)) - itemMargin;
    }

    if (direction === 'horizontal' && pos === 'min') {
      return 0;
    }

  };


  /**
  * Check if the Slider5 is at its limit
  *
  * @method isAtLimit
  */
  Slider5.fn.isAtLimit = function (nextPos) {
    var max = Slider5.getLimit(this, 'max'),
        min = Slider5.getLimit(this, 'min');

    if (nextPos < min) {
      return true;
    }

    if (nextPos > max) {
      return true;
    }

    return false;
  };


  /**
  * Return the next position for the Slider5 based in the number of steps
  *
  * @method getNextPos
  */
  Slider5.fn.getNextPos = function (steps) {
    var currentPos,
        direction,
        nextPos;

    direction = this.settings.direction;

    currentPos = this.Slider5.style[direction === 'vertical' ? 'top' : 'right'];

    if (currentPos) {
      currentPos = Math.floor(parseInt(currentPos));
    }

    if (direction === 'vertical') {
      nextPos = currentPos - (((this.itemDimension + this.itemMargin)) * steps);
    } else {
      nextPos = currentPos + (((this.itemDimension + this.itemMargin)) * steps)
    }

    return Math.ceil(nextPos);
  };

  /**
  * Move the Slider5.
  * Pass a negative number to go in the inverse direction
  *
  * @method move
  * @param {Integer} Number of items to move
  */
  Slider5.fn.move = function (steps) {
    steps = steps || 1;

    var nextPos = this.getNextPos(steps),
        direction = this.settings.direction;

    if (this.isAtLimit(nextPos)) {
      return this;
    }

    this.Slider5.style[direction === 'vertical' ? 'top' : 'right'] = nextPos + 'px';
  };


  /**
  * Add event listeners for the controls passed
  *
  * @method addControls
  * @param {String | Node Element} Next Control
  * @param {String | Node Element} Prev Control
  * @param {Integer} Number of items (steps) to avance/return
  */
  Slider5.fn.addControls = function (next, prev, steps) {

    var that = this;

    if (!utils.isDOM(next)) {
      next = document.querySelector(next);
    }

    if (!utils.isDOM(prev)) {
      prev = document.querySelector(prev);
    }

    next.addEventListener('click', function (e) {
      e.preventDefault();
      that.move(steps);
    });

    prev.addEventListener('click', function (e) {
      e.preventDefault();
      that.move(steps * -1);
    });
  };


  window.Slider5 = Slider5;

}(window, document));