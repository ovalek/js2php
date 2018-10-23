test("String()", function () {
	assert(String(undefined) === "undefined", "String(): 1");
	assert(String(null) === "null", "String(): 2");
	assert(String(true) === "true", "String(): 3");
	assert(String(false) === "false", "String(): 4");
	assert(String(5) === "5", "String(): 5");
	assert(String(NaN) === "NaN", "String(): 6");
	assert(String("foo") === "foo", "String(): 7");
	assert(new String() instanceof String, "String(): 8");
});

test("String.fromCharCode()", function () {
	assert(String.fromCharCode(0x61, 0x62, 0x63) === "abc", "String.fromCharCode(): 1");
});

test("String.prototype.toString()", function () {
	assert("foo".toString() === "foo", "String.prototype.toString(): 1");
});

test("String.prototype.valueOf()", function () {
	assert("foo".valueOf() === "foo", "String.prototype.valueOf(): 1");
});

test("String.prototypeo.charAt()", function () {
	assert("abc".charAt(0) === "a", "String.prototype.charAt(): 1");
	assert("abc".charAt(1) === "b", "String.prototype.charAt(): 2");
	assert("abc".charAt(2) === "c", "String.prototype.charAt(): 3");
});

test("String.prototype.charCodeAt()", function() {
	assert("abc".charCodeAt(0) === 0x61, "String.prototype.charCodeAt(): 1");
	assert("abc".charCodeAt(1) === 0x62, "String.prototype.charCodeAt(): 2");
	assert("abc".charCodeAt(2) === 0x63, "String.prototype.charCodeAt(): 3");
});

test("String.prototype.concat()", function () {
	assert("abc".concat("def") === "abcdef", "String.prototype.concat(): 1");
	assert("abc".concat("def", "ghi") === "abcdefghi", "String.prototype.concat(): 2");
});

test("String.prototype.indexOf()", function () {
	assert("abc".indexOf("b") === 1, "String.prototype.indexOf(): 1");
	assert("abc".indexOf("d") === -1, "String.prototype.indexOf(): 2");
	assert("abc".indexOf("a", 1) === -1, "String.prototype.indexOf(): 3");
	assert("abc".indexOf("a", -2) === 0, "String.prototype.indexOf(): 4");
});

test("String.prototype.lastIndexOf()", function () {
	assert("abc".lastIndexOf("b") === 1, "String.prototype.lastIndexOf(): 1");
	assert("abc".lastIndexOf("d") === -1, "String.prototype.lastIndexOf(): 2");
	assert("abc".lastIndexOf("a", 1) === -1, "String.prototype.lastIndexOf(): 3");
	assert("abc".lastIndexOf("a", -2) === 0, "String.prototype.lastIndexOf(): 4");
	assert("aba".lastIndexOf("a") === 2, "String.prototype.lastIndexOf(): 5");
	assert("aba".lastIndexOf("a", 1) === 2, "String.prototype.lastIndexOf(): 6");
});

test("String.prototype.match()", function () {
	assert("abcd".match(/bc/).index === 1, "String.prototype.match(): 1");
	assert("abcd".match(/ef/) === null, "String.prototype.match(): 2");
	assert("abab".match(/ab/g).length === 2, "String.prototype.match(): 3");
});

test("String.prototype.replace()", function () {
	assert("abab".replace("a", "b") === "bbab", "String.prototype.replace(): 1");
	assert("abab".replace(/a/, "b") === "bbab", "String.prototype.replace(): 2");
	assert("abab".replace(/(a)b/, "$1") === "aab", "String.prototype.replace(): 3");
	assert("abab".replace(/(a)b/, "$$$1") === "$aab", "String.prototype.replace(): 4");
	assert("abab".replace(/(a)(b)/, function (_, a, b) { return b + a; }) === "baab",
		"String.prototype.replace(): 5");
	assert("abab".replace(/a/g, "b") === "bbbb", "String.prototype.replace(): 6");
	assert("abab".replace(/(a)b/g, "$1") === "aa", "String.prototype.replace(): 7");
	assert("abab".replace(/(a)b/g, "$$$1") === "$a$a", "String.prototype.replace(): 8");
	assert("abab".replace(/(a)(b)/g, function (_, a, b) { return b + a; }) === "baba",
		"String.prototype.replace(): 9");
});

test("String.prototype.search()", function () {
	assert("abcd".search("a") === 0, "String.prototype.search(): 1");
	assert("abcd".search("e") === -1, "String.prototype.search(): 2");
	assert("abcd".search(/a/) === 0, "String.prototype.search(): 3");
	assert("abcd".search(/e/) === -1, "String.prototype.search(): 4");
});

test("String.prototype.slice()", function () {
	assert("abcd".slice(1, 3) === "bc", "String.prototype.slice(): 1");
	assert("abcd".slice(-3, -1) === "bc", "String.prototype.slice(): 2");
	assert("abcd".slice(-2) === "cd", "String.prototype.slice(): 3");
});

test("String.prototype.split()", function () {
	var a = "abcd".split();
	assert(a.length === 1 && a[0] === "abcd", "String.prototype.split(): 1");
	a = "abcd".split("");
	assert(a.length === 4 && a[0] === "a" && a[1] === "b" && a[2] === "c" && a[3] === "d",
		"String.prototype.split(): 2");
	a = "a,b,c,d".split(",");
	assert(a.length === 4 && a[0] === "a" && a[1] === "b" && a[2] === "c" && a[3] === "d",
		"String.prototype.split(): 3");
	a = "a,b,c,d".split(/,/);
	assert(a.length === 4 && a[0] === "a" && a[1] === "b" && a[2] === "c" && a[3] === "d",
		"String.prototype.split(): 4");
	// a = "ab".split(/a*?/);
	// assert(a.length === 2 && a[0] === "a" && a[1] === "b", "String.prototype.split(): 5");
	// a = "ab".split(/a*/);
	// assert(a.length === 2 && a[0] === "" && a[1] === "b", "String.prototype.split(): 6");
	// a = "a<b>c</b>e".split(/<(\/)?([^<>]+)>/);
	// assert(a.length === 7 && a[0] === "a" && a[1] === undefined && a[2] === "b" && a[3] === "c" &&
	// 	a[4] === "/" && a[5] === "b" && a[6] === "e",
	// 	"String.prototype.split(): 7");
});

test("String.prototype.substring()", function () {
	assert("abcd".substring(1, 3) === "bc", "String.prototype.substring(): 1");
	assert("abcd".substring(-3, -1) === "bc", "String.prototype.substring(): 2");
	assert("abcd".substring(0) === "abcd", "String.prototype.substring(): 3");
	assert("abcd".substring(-1) === "d", "String.prototype.substring(): 4");
});

test("String.prototype.substr()", function () {
	assert("abcd".substr(1, 2) === "bc", "String.prototype.substr(): 1");
	assert("abcd".substr(-3, 2) === "bc", "String.prototype.substr(): 2");
	assert("abcd".substr(0) === "abcd", "String.prototype.substr(): 3");
	assert("abcd".substr(-1) === "d", "String.prototype.substr(): 4");
});


test("String.prototype.toLowerCase()", function () {
	assert("ABCD".toLowerCase() === "abcd", "String.prototype.toLowerCase(): 1");
});

test("String.prototype.toUpperCase()", function () {
	assert("abcd".toUpperCase() === "ABCD", "String.prototype.toUpperCase(): 1");
});

test("String.prototype.trim()", function () {
	assert("   abc      ".trim() === "abc", "String.prototype.trim(): 1");
});


test("String.prototype.length", function () {
   assert('ř'.length === 1, "'ř'.length: not equal to 1")
   assert('Žluťoučký'.length === 9, "'Žluťoučký'.length: not equal to 9")
});

test("String.prototype.includes(substring)", function () {
   assert('Příliš žluťoučký kůň úpěl ďábelské ódy.'.includes('kůň úpěl'), "'Příliš žluťoučký kůň úpěl ďábelské ódy.'.includes('kůň úpěl'): unexpected result")
});

test("String.prototype.replace(searchvalue, newvalue)", function () {
   assert('toaletní voda 100 ml'.replace(/(\d+(?:,\d+)? ?[a-z]{1,2})/g, '') === 'toaletní voda ', "'toaletní voda 100 ml'.replace(/(\\d+(?:,\\d+)? ?[a-z]{1,2})/g, ''): unexpected result");
   assert('75 ml balzám po holení'.replace(/(\d+(?:,\d+)? ?[a-z]{1,2})/g, '') === ' balzám po holení', "'75 ml balzám po holení'.replace(/(\\d+(?:,\\d+)? ?[a-z]{1,2})/g, ''): unexpected result");
   assert('sprchový gel 50,6gr'.replace(/(\d+(?:,\d+)? ?[a-z]{1,2})/g, '') === 'sprchový gel ', "'sprchový gel 50,6gr'.replace(/(\\d+(?:,\\d+)? ?[a-z]{1,2})/g, ''): unexpected result");
});

test("test split without argument", function () {
   assert(JSON.stringify('John Doe'.split()) === JSON.stringify(['John Doe']), "'John Doe'.split(): has unexpected result");
});

test("test split with empty pattern", function () {
   assert(JSON.stringify('one two'.split('')) === JSON.stringify(['o', 'n', 'e', ' ', 't', 'w', 'o']), "'one two'.split(''): has unexpected result");
   assert(JSON.stringify('ěščřžýáíé'.split('')) === JSON.stringify(['ě', 'š', 'č', 'ř', 'ž', 'ý', 'á', 'í', 'é']), "'ěščřžýáíé'.split(''): has unexpected result");
   assert(JSON.stringify('ŠČŽŘĎŤÚ'.split('')) === JSON.stringify(['Š', 'Č', 'Ž', 'Ř', 'Ď', 'Ť', 'Ú']), "String.prototype.split(''): has unexpected result");
});

test("test with empty pattern and limit", function () {
   assert(JSON.stringify('abcěščřžýáíé'.split('', 4)) === JSON.stringify(['a', 'b', 'c', 'ě' ]), "'abcěščřžýáíé'.split('', 4): has unexpected result");
   assert(JSON.stringify('abcěščřžýáíé'.split('', 300)) === JSON.stringify(['a', 'b', 'c', 'ě', 'š', 'č', 'ř', 'ž', 'ý', 'á', 'í', 'é']), "'abcěščřžýáíé'.split('', 300): has unexpected result");
});

test("test split with string pattern", function () {
   assert(JSON.stringify('ě + š + č'.split('+')) === JSON.stringify([ "ě ", " š ", " č" ]), "'ě + š + č'.split('+'): has unexpected result");
   assert(JSON.stringify('ě + š + č'.split(' +')) === JSON.stringify([ "ě", " š", " č" ]), "'ě + š + č'.split(' +'): has unexpected result");
   assert(JSON.stringify('jednaŘšČdvěŘšČtřiŘšČčtyřiŘšČpět'.split('ŘšČ')) === JSON.stringify([ "jedna", "dvě", "tři", "čtyři", "pět" ]), "'jednaŘšČdvěŘšČtřiŘšČčtyřiŘšČpět'.split('ŘšČ'): has unexpected result");
});

test("test split with string pattern and limit", function () {
   assert(JSON.stringify('ě + š + č'.split('+', 1)) === JSON.stringify([ "ě " ]), "'ě + š + č'.split('+', 1): has unexpected result");
   assert(JSON.stringify('ě + š + č'.split('+', 2)) === JSON.stringify([ "ě ", " š " ]), "'ě + š + č'.split('+', 2): has unexpected result");
   assert(JSON.stringify('ě + š + č'.split('+', 300)) === JSON.stringify([ "ě ", " š ", " č" ]), "'ě + š + č'.split('+', 300): has unexpected result");
});


test("test split with regex pattern", function () {
   assert(JSON.stringify('e + s + c'.split(/\+/g)) === JSON.stringify([ "e ", " s ", " c" ]), "'e + s + c'.split(/\\+/g): has unexpected result");
   assert(JSON.stringify('ě + š + č'.split(/\+/g)) === JSON.stringify([ "ě ", " š ", " č" ]), "'ě + š + č'.split(/\\+/g): has unexpected result");
});

test("test limit with regex pattern", function () {
   assert(JSON.stringify('ě + š + č'.split(/\+/g, 1)) === JSON.stringify([ "ě " ]), "'ě + š + č'.split(/\\+/g, 1): has unexpected result");
   assert(JSON.stringify('ě + š + č'.split(/\+/g, 2)) === JSON.stringify([ "ě ", " š " ]), "'ě + š + č'.split(/\\+/g, 2): has unexpected result");
   assert(JSON.stringify('ě + š + č'.split(/\+/g, 3)) === JSON.stringify([ "ě ", " š ", " č" ]), "'ě + š + č'.split(/\\+/g, 3): has unexpected result");
   assert(JSON.stringify('ě + š + č'.split(/\+/g, 300)) === JSON.stringify([ "ě ", " š ", " č" ]), "'ě + š + č'.split(/\\+/g, 300): has unexpected result");
});

// another split tests
test("ě + š + č'.split(/\\ ?\\+\\ ?/g)", function () {
   assert(JSON.stringify('ě + š + č'.split(/\ ?\+\ ?/g)) === JSON.stringify([ "ě", "š", "č" ]), "'ě + š + č'.split(/\\ ?\\+\\ ?/g): has unexpected result");
});
test("'toaletní voda 100 ml + balzám po holení 75 ml + sprchový gel 50 ml'.split('+').join(' ').includes('+')", function () {
   assert(!'toaletní voda 100 ml + balzám po holení 75 ml + sprchový gel 50 ml'.split('+').join(' ').includes('+'), "'toaletní voda 100 ml + balzám po holení 75 ml + sprchový gel 50 ml'.split('+').join(' '): outputs parts that contains +.");
});