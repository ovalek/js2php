function Array() {
	var array = {};

	@@ `array->prototype = `Array->properties['prototype']; @@
	@@ `array->class = 'Array'; @@

	array.length = 0;

	@@ `array->attributes['length'] = JS::WRITABLE; @@

	if (arguments.length === 1 && typeof arguments[0] === "number") {
		var len = arguments[0];

		if (@@ intval(`len) !== `len || `len < 0 @@) {
			throw new RangeError("Array(): Given array length is not legal.");
		}

		array.length = len;

		return array;
	}

	for (var i = 0, l = arguments.length; i < l; ++i) {
		array.push(arguments[i]);
	}

	return array;
}

Array.isArray = function (arg) {
	if (arg === null || typeof arg !== "object") {
		return false;
	}

	return @@ `arg->class === 'Array' @@;
};

Array.prototype = {};
@@ `Array->prototype = `Array->properties['prototype']; @@
@@ `Array->properties['prototype']->prototype = `Object->properties['prototype']; @@
@@ `Array->properties['prototype']->class = 'Array'; @@
@@ `Array->properties['prototype']->extensible = TRUE; @@
Array.prototype.constructor = Array;
Array.prototype.length = 0;

Array.prototype.toString = function () {
	return this.join();
};

Array.prototype.toLocaleString = Array.prototype.toString;

Array.prototype.concat = function (item) {
	var newArray = @@ clone $leThis @@;

	for (var i = 0, l = arguments.length; i < l; ++i) {
		if (Array.isArray(arguments[i])) {
			for (var j = 0, m = arguments[i].length; j < m; ++j) {
				newArray.push(arguments[i][j]);
			}

		} else {
			newArray.push(arguments[i]);
		}
	}

	return newArray;
};

Array.prototype.join = function (separator) {
	separator = separator || ",";
	var string = "";

	for (var i = 0, l = this.length, item; i < l; ++i) {
		if (i !== 0) {
			string += separator;
		}

		item = this[i];

		string += @@ JS::toString(`item) @@;
	}

	return string;
};

Array.prototype.pop = function () {
	if (this.length < 1) {
		return undefined;
	}

	var item = this[this.length - 1];
	delete this[this.length - 1];
	--this.length;

	return item;
};

Array.prototype.push = function (item) {
	this[this.length++] = item;

	if (arguments.length > 1) {
		for (var i = 1, l = arguments.length; i < l; ++i) {
			this.push(arguments[i]);
		}
	}

	return this[this.length - 1];
};

Array.prototype.reverse = function () {
	var newArray = [];

	for (var i = this.length - 1; i >= 0; --i) {
		newArray.push(this[i]);
	}

	return newArray;
};

Array.prototype.shift = function () {
	if (this.length < 1) {
		return undefined;
	}

	var item = this[0];

	for (var i = 0, l = --this.length; i < l; ++i) {
		this[i] = this[i + 1];
	}

	return item;
};

Array.prototype.slice = function (start, end) {
	if (start < 0) {
		start = Math.max(this.length + start, 0);
	}

	if (end === undefined) {
		end = this.length;
	}

	if (end < 0) {
		end = this.length + end;
	}

	var newArray = [];

	for (; start < end; ++start) {
		newArray.push(this[start]);
	}

	return newArray;
};

Array.prototype.sort = function (compareFn) {
	// FIXME: basic quicksort, implement in-place quicksort in PHP
	
	compareFn = compareFn || function (a, b) {
		if (typeof a === "string" || typeof b === "string") {
			a = @@ JS::toString(`a) @@;
			b = @@ JS::toString(`b) @@;

			if (a < b) {
				return -1;
			} else if (a > b) {
				return 1;
			} else {
				return 0;
			}

		} else if (typeof a === "number" || typeof b === "number") {
			a = @@ JS::toNumber(`a) @@;
			b = @@ JS::toNumber(`b) @@;

			return a - b;
		}

		throw new TypeError("Unsortable values in array.");
	};

	if (this.length < 2) {
		return this;
	}

	var pivot, smaller = [], larger = [];

	pivot = this[0];

	for (var i = 1, l = this.length; i < l; ++i) {
		if (compareFn(this[i], pivot) < 0) {
			smaller.push(this[i]);
		} else {
			larger.push(this[i]);
		}
	}

	return smaller.sort().concat([pivot], larger.sort());
};

Array.prototype.splice = function (start, deleteCount) {
	var i, l, item, returnArray = [];

	@@ $A = array(); @@

	for (i = 0, l = this.length, item; i < l; ++i) {
		item = this[i];
		@@ $A[] = `item; @@
		delete this[i];
	}

	@@ $B = array(); @@

	for (i = 2, l = arguments.length; i < l; ++i) {
		item = arguments[i];
		@@ $B[] = `item; @@
	}

	@@ $C = array_splice($A, `start, `deleteCount, $B); @@

	this.length = 0;

	@@ foreach ($A as $V) { @@
		this.push(@@ $V @@);
	@@ } @@

	@@ foreach ($C as $I => $V) { @@
		returnArray.push(@@ $V @@);
	@@ } @@

	return returnArray;
};

Array.prototype.unshift = function (item) {
	if (arguments.length > 1) {
		for (var i = arguments.length - 1; i > 0; --i) {
			this.unshift(arguments[i]);
		}
	}

	for (var i = this.length - 1; i >= 0; --i) {
		this[i + 1] = this[i];
	}

	this[0] = item;
	++this.length;

	return this.length;
};

Array.prototype.indexOf = function (search, from) {
	from = from || 0;

	if (from < 0) {
		from = Math.max(this.length + from, 0);
	}

	for (var i = from, l = this.length; i < l; ++i) {
		if (this[i] == search) {
			return i;
		}
	}

	return -1;
};

Array.prototype.lastIndexOf = function (search, from) {
	from = from || 0;

	if (from < 0) {
		from = Math.max(this.length + from, 0);
	}

	if (this.length < 1 || from >= this.length) {
		return -1;
	}

	for (var i = this.length - 1; i >= from; --i) {
		if (this[i] == search) {
			return i;
		}
	}

	return -1;
};

Array.prototype.every = function (callbackFn) {
	var thisArg;

	if (arguments.length > 1) {
		thisArg = arguments[1];
	}
	
	for (var i = 0, l = this.length; i < l; ++i) {
		if (!callbackFn.call(thisArg, this[i], i, this)) {
			return false;
		}
	}

	return true;
};

Array.prototype.some = function (callbackFn) {
	var thisArg;

	if (arguments.length > 1) {
		thisArg = arguments[1];
	}

	for (var i = 0, l = this.length; i < l; ++i) {
		if (callbackFn.call(thisArg, this[i], i, this)) {
			return true;
		}
	}

	return false;
};

Array.prototype.forEach = function (callbackFn) {
	var thisArg;

	if (arguments.length > 1) {
		thisArg = arguments[1];
	}

	for (var i = 0, l = this.length; i < l; ++i) {
		callbackFn.call(thisArg, this[i], i, this);
	}
};

Array.prototype.map = function (callbackFn) {
	var thisArg, returnArray = [];

	if (arguments.length > 1) {
		thisArg = arguments[1];
	}

	for (var i = 0, l = this.length; i < l; ++i) {
		returnArray.push(callbackFn.call(thisArg, this[i], i, this));
	}

	return returnArray;
};

Array.prototype.filter = function (callbackFn) {
	var thisArg, returnArray = [];

	if (arguments.length > 1) {
		thisArg = arguments[1];
	}

	for (var i = 0, l = this.length; i < l; ++i) {
		if (callbackFn.call(thisArg, this[i], i, this)) {
			returnArray.push(this[i]);
		}
	}

	return returnArray;
};

Array.prototype.reduce = function (callbackFn) {
	if (this.length < 1 && arguments.length < 2) {
		throw new TypeError("Array.prototype.reduce(): Array empty, no initial value.");
	}

	var value, i;

	if (arguments.length > 1) {
		value = arguments[1];
		i = 0;

	} else {
		value = this[0];
		i = 1;
	}

	for (var l = this.length; i < l; ++i) {
		value = callbackFn(value, this[i], i, this);
	}

	return value;
};

Array.prototype.reduceRight = function (callbackFn) {
	if (this.length < 1 && arguments.length < 2) {
		throw new TypeError("Array.prototype.reduceRight(): Array empty, no initial value.");
	}

	var value, i;

	if (arguments.length > 1) {
		value = arguments[1];
		i = this.length - 1;

	} else {
		value = this[this.length - 1];
		i = this.length - 2;
	}

	for (; i >= 0; --i) {
		value = callbackFn(value, this[i], i, this);
	}

	return value;
};
