function _1062444eb1665286b15372d6a2622cc9_1($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1 =& $scope->properties['arguments'];
$x1->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1->properties[$i] = $args[$i];
$x1->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['value'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_value =& $scope->properties['value'];
$Uvalue = FALSE;
$scope->properties['String'] = $fn;
$_String =& $scope->properties['String'];
$global->scope[++$global->scope_sp] = $scope;
$x2 = (((gettype($leThis) === gettype($global) && $leThis === $global))|| (((is_float($leThis) || is_int($leThis)) && (is_float($global) || is_int($global))) && $leThis == $global));
if (JS::toBoolean($x2, $global)) {

return JS::toString($_value, $global);;
};
$x3 = clone JS::$objectTemplate;
$scope->properties['s'] = JS::$undefined; $_s =& $scope->properties['s'];
$Us = FALSE;
$_s = $x3;
$_s->prototype =$_String->properties['prototype'];
$_s->class = 'String';
$_s->extensible = true;
$_s->value = JS::toString($_value, $global);
return $_s;
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'String\']=$fn;$_String=&$scope->properties[\'String\'];$global->scope[++$global->scope_sp]=$scope;$x2=(((gettype($leThis)===gettype($global)&&$leThis===$global))||(((is_float($leThis)||is_int($leThis))&&(is_float($global)||is_int($global)))&&$leThis==$global));if(JS::toBoolean($x2,$global)){return JS::toString($_value,$global);}$x3=clone JS::$objectTemplate;$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=$x3;$_s->prototype=$_String->properties[\'prototype\'];$_s->class=\'String\';$_s->extensible=true;$_s->value=JS::toString($_value,$global);return$_s;return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $base, $id, $line, $column, $file) {
$Warguments = $Sarguments = $Uarguments = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_arguments =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x8 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x9 = $x8($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_arguments = $x9; }
else { $_arguments = JS::$undefined; $Uarguments = TRUE; }
return array(&$_arguments, $Warguments, $Sarguments, $Uarguments);
}
echo 'function _1062444eb1665286b15372d6a2622cc9_3($global,$scope,$base,$id,$line,$column,$file){$Warguments=$Sarguments=$Uarguments=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_arguments=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x8=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x9=$x8($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_arguments=$x9;}else{$_arguments=JS::$undefined;$Uarguments=TRUE;}return array(&$_arguments,$Warguments,$Sarguments,$Uarguments);}', "\n";
function _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x15 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x15[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x15;
$x16 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x17 = $x16($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x17->class) && $x17->class === 'Error' && !isset($x17->properties['file']) && !isset($x17->properties['line']) && !isset($x17->properties['column'])) {$x17->properties['file'] = $file;$x17->properties['line'] = $line;$x17->properties['column'] = $column;$x17->attributes['file'] = $x17->attributes['line'] = $x17->attributes['column'] = 0; }
throw new JSException($x17, $line, $column, $file);
}
$W14 = $S14 = $U14 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x14 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x18 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x19 = $x18($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x14 = $x19; }
else { $x14 = JS::$undefined; $U14 = TRUE; }
return array(&$x14, $W14, $S14, $U14);
}
echo 'function _1062444eb1665286b15372d6a2622cc9_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x15=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x15[0];list(,$WTypeError,$STypeError,$UTypeError)=$x15;$x16=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x17=$x16($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x17->class)&&$x17->class===\'Error\'&&!isset($x17->properties[\'file\'])&&!isset($x17->properties[\'line\'])&&!isset($x17->properties[\'column\'])){$x17->properties[\'file\']=$file;$x17->properties[\'line\']=$line;$x17->properties[\'column\']=$column;$x17->attributes[\'file\']=$x17->attributes[\'line\']=$x17->attributes[\'column\']=0;}throw new JSException($x17,$line,$column,$file);}$W14=$S14=$U14=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x14=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x18=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x19=$x18($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14=$x19;}else{$x14=JS::$undefined;$U14=TRUE;}return array(&$x14,$W14,$S14,$U14);}', "\n";
function _1062444eb1665286b15372d6a2622cc9_2($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x6 =& $scope->properties['arguments'];
$x6->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x6->properties[$i] = $args[$i];
$x6->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['c'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_c =& $scope->properties['c'];
$Uc = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['s'] = JS::$undefined; $_s =& $scope->properties['s'];
$Us = FALSE;
$_s = '';
for ($x7 = 0;; ++$x7) {
if ($x7 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0.0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x10 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('arguments', $global), 19, 22, '<image>/05_string.js');
$_arguments =& $x10[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x10;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x11 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 19, 22, '<image>/05_string.js');
$_ReferenceError =& $x11[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x11;
$x12 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 19, 22);
$x13 = $x12($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x13->class) && $x13->class === 'Error' && !isset($x13->properties['file']) && !isset($x13->properties['line']) && !isset($x13->properties['column'])) {$x13->properties['file'] = '<image>/05_string.js';$x13->properties['line'] = 19;$x13->properties['column'] = 22;$x13->attributes['file'] = $x13->attributes['line'] = $x13->attributes['column'] = 0; }
throw new JSException($x13, 19, 22, '<image>/05_string.js');
}
unset($x14, $W14, $S14, $U14);
$x20 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_arguments, JS::toString('length', $global), 19, 31, '<image>/05_string.js');
$x14 =& $x20[0]; list(,$W14,$S14,$U14) = $x20;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x14;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x7 !== 0) {
$x21 = ++$_i;
}
$x22 = JS::toPrimitive($_i, $global);
$x23 = JS::toPrimitive($_l, $global);
$x24 = (is_string($x22) && is_string($x23) ? strcmp($x22, $x23) < 0 : (!is_nan($x25 = JS::toNumber($x22, $global)) && !is_nan($x26 = JS::toNumber($x23, $global)) && $x25 < $x26));
if (!JS::toBoolean($x24, $global)) { break; }

unset($x27, $W27, $S27, $U27);
$x28 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_arguments, JS::toString($_i, $global), 20, 18, '<image>/05_string.js');
$x27 =& $x28[0]; list(,$W27,$S27,$U27) = $x28;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x27;
$x29 = chr(JS::toNumber($_arg, $global));
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$x30 = JS::toPrimitive($_s, $global);
$x31 = JS::toPrimitive($x29, $global);
$_s = (is_string($x30) || is_string($x31) ? JS::toString($x30, $global) . JS::toString($x31, $global) : JS::toNumber($x30, $global) + JS::toNumber($x31, $global));;
};
return $_s;
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x6=&$scope->properties[\'arguments\'];$x6->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x6->properties[$i]=$args[$i];$x6->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'c\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=\'\';for($x7=0;;++$x7){if($x7===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0.0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x10=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'arguments\',$global),19,22,\'<image>/05_string.js\');$_arguments=&$x10[0];list(,$Warguments,$Sarguments,$Uarguments)=$x10;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x11=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),19,22,\'<image>/05_string.js\');$_ReferenceError=&$x11[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x11;$x12=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',19,22);$x13=$x12($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'&&!isset($x13->properties[\'file\'])&&!isset($x13->properties[\'line\'])&&!isset($x13->properties[\'column\'])){$x13->properties[\'file\']=\'<image>/05_string.js\';$x13->properties[\'line\']=19;$x13->properties[\'column\']=22;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,19,22,\'<image>/05_string.js\');}unset($x14,$W14,$S14,$U14);$x20=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_arguments,JS::toString(\'length\',$global),19,31,\'<image>/05_string.js\');$x14=&$x20[0];list(,$W14,$S14,$U14)=$x20;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x14;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x7!==0){$x21=++$_i;}$x22=JS::toPrimitive($_i,$global);$x23=JS::toPrimitive($_l,$global);$x24=(is_string($x22)&&is_string($x23)?strcmp($x22,$x23)<0:(!is_nan($x25=JS::toNumber($x22,$global))&&!is_nan($x26=JS::toNumber($x23,$global))&&$x25<$x26));if(!JS::toBoolean($x24,$global)){break;}unset($x27,$W27,$S27,$U27);$x28=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_arguments,JS::toString($_i,$global),20,18,\'<image>/05_string.js\');$x27=&$x28[0];list(,$W27,$S27,$U27)=$x28;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x27;$x29=chr(JS::toNumber($_arg,$global));if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$x30=JS::toPrimitive($_s,$global);$x31=JS::toPrimitive($x29,$global);$_s=(is_string($x30)||is_string($x31)?JS::toString($x30,$global).JS::toString($x31,$global):JS::toNumber($x30,$global)+JS::toNumber($x31,$global));}return$_s;return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x38 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x38[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x38;
$x39 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x40 = $x39($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x40->class) && $x40->class === 'Error' && !isset($x40->properties['file']) && !isset($x40->properties['line']) && !isset($x40->properties['column'])) {$x40->properties['file'] = $file;$x40->properties['line'] = $line;$x40->properties['column'] = $column;$x40->attributes['file'] = $x40->attributes['line'] = $x40->attributes['column'] = 0; }
throw new JSException($x40, $line, $column, $file);
}
$W37 = $S37 = $U37 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x37 =& $lookup->properties[$id]; $W37 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S37 = $lookup->setters[$id]; }
else { $x37 = JS::$undefined; $U37 = TRUE; }
return array(&$x37, $W37, $S37, $U37);
}
echo 'function _1062444eb1665286b15372d6a2622cc9_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x38=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x38[0];list(,$WTypeError,$STypeError,$UTypeError)=$x38;$x39=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x40=$x39($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x40->class)&&$x40->class===\'Error\'&&!isset($x40->properties[\'file\'])&&!isset($x40->properties[\'line\'])&&!isset($x40->properties[\'column\'])){$x40->properties[\'file\']=$file;$x40->properties[\'line\']=$line;$x40->properties[\'column\']=$column;$x40->attributes[\'file\']=$x40->attributes[\'line\']=$x40->attributes[\'column\']=0;}throw new JSException($x40,$line,$column,$file);}$W37=$S37=$U37=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x37=&$lookup->properties[$id];$W37=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S37=$lookup->setters[$id];}else{$x37=JS::$undefined;$U37=TRUE;}return array(&$x37,$W37,$S37,$U37);}', "\n";
function _1062444eb1665286b15372d6a2622cc9_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x74 =& $scope->properties['arguments'];
$x74->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x74->properties[$i] = $args[$i];
$x74->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!isset($leThis->class) || $leThis->class !== 'String', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x77 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 35, 13, '<image>/05_string.js');
$_TypeError =& $x77[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x77;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x78 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 35, 13, '<image>/05_string.js');
$_ReferenceError =& $x78[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x78;
$x79 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 13);
$x80 = $x79($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x80->class) && $x80->class === 'Error' && !isset($x80->properties['file']) && !isset($x80->properties['line']) && !isset($x80->properties['column'])) {$x80->properties['file'] = '<image>/05_string.js';$x80->properties['line'] = 35;$x80->properties['column'] = 13;$x80->attributes['file'] = $x80->attributes['line'] = $x80->attributes['column'] = 0; }
throw new JSException($x80, 35, 13, '<image>/05_string.js');
}
$x75 = clone JS::$objectTemplate;
unset($x81, $W81, $S81, $U81);
$x82 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 35, 9, '<image>/05_string.js');
$x81 =& $x82[0]; list(,$W81,$S81,$U81) = $x82;
$x76 = $x81;
$x75->prototype = $x76;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x85 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 9);
$x86 = $x85($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x86->class) && $x86->class === 'Error' && !isset($x86->properties['file']) && !isset($x86->properties['line']) && !isset($x86->properties['column'])) {$x86->properties['file'] = '<image>/05_string.js';$x86->properties['line'] = 35;$x86->properties['column'] = 9;$x86->attributes['file'] = $x86->attributes['line'] = $x86->attributes['column'] = 0; }
throw new JSException($x86, 35, 9, '<image>/05_string.js');
}
$x83 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 9);
$x84 = $x83($global, $x75, $_TypeError, array('String.prototype.toString(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x76 = $x84;
if (is_object($x76) && $x76 !== JS::$undefined) { $x75 = $x76; }
if (isset($x75->class) && $x75->class === 'Error' && !isset($x75->properties['file']) && !isset($x75->properties['line']) && !isset($x75->properties['column'])) {$x75->properties['file'] = '<image>/05_string.js';$x75->properties['line'] = 35;$x75->properties['column'] = 3;$x75->attributes['file'] = $x75->attributes['line'] = $x75->attributes['column'] = 0; }
throw new JSException($x75, 35, 3, '<image>/05_string.js');;
};
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x74=&$scope->properties[\'arguments\'];$x74->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x74->properties[$i]=$args[$i];$x74->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'String\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x77=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),35,13,\'<image>/05_string.js\');$_TypeError=&$x77[0];list(,$WTypeError,$STypeError,$UTypeError)=$x77;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x78=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),35,13,\'<image>/05_string.js\');$_ReferenceError=&$x78[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x78;$x79=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,13);$x80=$x79($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x80->class)&&$x80->class===\'Error\'&&!isset($x80->properties[\'file\'])&&!isset($x80->properties[\'line\'])&&!isset($x80->properties[\'column\'])){$x80->properties[\'file\']=\'<image>/05_string.js\';$x80->properties[\'line\']=35;$x80->properties[\'column\']=13;$x80->attributes[\'file\']=$x80->attributes[\'line\']=$x80->attributes[\'column\']=0;}throw new JSException($x80,35,13,\'<image>/05_string.js\');}$x75=clone JS::$objectTemplate;unset($x81,$W81,$S81,$U81);$x82=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),35,9,\'<image>/05_string.js\');$x81=&$x82[0];list(,$W81,$S81,$U81)=$x82;$x76=$x81;$x75->prototype=$x76;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x85=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x86=$x85($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x86->class)&&$x86->class===\'Error\'&&!isset($x86->properties[\'file\'])&&!isset($x86->properties[\'line\'])&&!isset($x86->properties[\'column\'])){$x86->properties[\'file\']=\'<image>/05_string.js\';$x86->properties[\'line\']=35;$x86->properties[\'column\']=9;$x86->attributes[\'file\']=$x86->attributes[\'line\']=$x86->attributes[\'column\']=0;}throw new JSException($x86,35,9,\'<image>/05_string.js\');}$x83=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x84=$x83($global,$x75,$_TypeError,array(\'String.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x76=$x84;if(is_object($x76)&&$x76!==JS::$undefined){$x75=$x76;}if(isset($x75->class)&&$x75->class===\'Error\'&&!isset($x75->properties[\'file\'])&&!isset($x75->properties[\'line\'])&&!isset($x75->properties[\'column\'])){$x75->properties[\'file\']=\'<image>/05_string.js\';$x75->properties[\'line\']=35;$x75->properties[\'column\']=3;$x75->attributes[\'file\']=$x75->attributes[\'line\']=$x75->attributes[\'column\']=0;}throw new JSException($x75,35,3,\'<image>/05_string.js\');}return$leThis->value;return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x117 =& $scope->properties['arguments'];
$x117->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x117->properties[$i] = $args[$i];
$x117->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['pos'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_pos =& $scope->properties['pos'];
$Upos = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x118 = JS::toNumber($_pos, $global);
if ($Upos) {$global->properties['pos'] = $_pos; $_pos =& $global->properties['pos']; }
$_pos = $x118;
$x120 = JS::toPrimitive($_pos, $global);
$x121 = JS::toPrimitive(0.0, $global);
$x122 = (is_string($x120) && is_string($x121) ? strcmp($x120, $x121) < 0 : (!is_nan($x123 = JS::toNumber($x120, $global)) && !is_nan($x124 = JS::toNumber($x121, $global)) && $x123 < $x124));
$x119 = $x122;
if (!JS::toBoolean($x119, $global)) {
unset($x128, $W128, $S128, $U128);
$x129 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $leThis, JS::toString('length', $global), 46, 28, '<image>/05_string.js');
$x128 =& $x129[0]; list(,$W128,$S128,$U128) = $x129;
$x125 = JS::toPrimitive($_pos, $global);
$x126 = JS::toPrimitive($x128, $global);
$x127 = !(is_string($x125) && is_string($x126) ? strcmp($x125, $x126) < 0 : (!is_nan($x130 = JS::toNumber($x125, $global)) && !is_nan($x131 = JS::toNumber($x126, $global)) && $x130 < $x131));
$x119 = $x127; }
if (JS::toBoolean($x119, $global)) {

return '';;
};
return (string) mb_substr($leThis->value,$_pos, 1);
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x117=&$scope->properties[\'arguments\'];$x117->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x117->properties[$i]=$args[$i];$x117->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;$x118=JS::toNumber($_pos,$global);if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=$x118;$x120=JS::toPrimitive($_pos,$global);$x121=JS::toPrimitive(0.0,$global);$x122=(is_string($x120)&&is_string($x121)?strcmp($x120,$x121)<0:(!is_nan($x123=JS::toNumber($x120,$global))&&!is_nan($x124=JS::toNumber($x121,$global))&&$x123<$x124));$x119=$x122;if(!JS::toBoolean($x119,$global)){unset($x128,$W128,$S128,$U128);$x129=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$leThis,JS::toString(\'length\',$global),46,28,\'<image>/05_string.js\');$x128=&$x129[0];list(,$W128,$S128,$U128)=$x129;$x125=JS::toPrimitive($_pos,$global);$x126=JS::toPrimitive($x128,$global);$x127=!(is_string($x125)&&is_string($x126)?strcmp($x125,$x126)<0:(!is_nan($x130=JS::toNumber($x125,$global))&&!is_nan($x131=JS::toNumber($x126,$global))&&$x130<$x131));$x119=$x127;}if(JS::toBoolean($x119,$global)){return\'\';}return(string)mb_substr($leThis->value,$_pos,1);return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x146 =& $scope->properties['arguments'];
$x146->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x146->properties[$i] = $args[$i];
$x146->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['pos'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_pos =& $scope->properties['pos'];
$Upos = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x147 = JS::toNumber($_pos, $global);
if ($Upos) {$global->properties['pos'] = $_pos; $_pos =& $global->properties['pos']; }
$_pos = $x147;
$x149 = JS::toPrimitive($_pos, $global);
$x150 = JS::toPrimitive(0.0, $global);
$x151 = (is_string($x149) && is_string($x150) ? strcmp($x149, $x150) < 0 : (!is_nan($x152 = JS::toNumber($x149, $global)) && !is_nan($x153 = JS::toNumber($x150, $global)) && $x152 < $x153));
$x148 = $x151;
if (!JS::toBoolean($x148, $global)) {
unset($x157, $W157, $S157, $U157);
$x158 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $leThis, JS::toString('length', $global), 56, 28, '<image>/05_string.js');
$x157 =& $x158[0]; list(,$W157,$S157,$U157) = $x158;
$x154 = JS::toPrimitive($_pos, $global);
$x155 = JS::toPrimitive($x157, $global);
$x156 = !(is_string($x154) && is_string($x155) ? strcmp($x154, $x155) < 0 : (!is_nan($x159 = JS::toNumber($x154, $global)) && !is_nan($x160 = JS::toNumber($x155, $global)) && $x159 < $x160));
$x148 = $x156; }
if (JS::toBoolean($x148, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x161 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('NaN', $global), 57, 10, '<image>/05_string.js');
$_NaN =& $x161[0]; list(,$WNaN,$SNaN,$UNaN) = $x161;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x162 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 57, 10, '<image>/05_string.js');
$_ReferenceError =& $x162[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x162;
$x163 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 57, 10);
$x164 = $x163($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x164->class) && $x164->class === 'Error' && !isset($x164->properties['file']) && !isset($x164->properties['line']) && !isset($x164->properties['column'])) {$x164->properties['file'] = '<image>/05_string.js';$x164->properties['line'] = 57;$x164->properties['column'] = 10;$x164->attributes['file'] = $x164->attributes['line'] = $x164->attributes['column'] = 0; }
throw new JSException($x164, 57, 10, '<image>/05_string.js');
}
return $_NaN;;
};
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x166 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 60, 21, '<image>/05_string.js');
$_TypeError =& $x166[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x166;
$x167 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x168 = $x167($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x168->class) && $x168->class === 'Error' && !isset($x168->properties['file']) && !isset($x168->properties['line']) && !isset($x168->properties['column'])) {$x168->properties['file'] = '<image>/05_string.js';$x168->properties['line'] = 60;$x168->properties['column'] = 21;$x168->attributes['file'] = $x168->attributes['line'] = $x168->attributes['column'] = 0; }
throw new JSException($x168, 60, 21, '<image>/05_string.js');
}
$x165 = JS::toObject($leThis, $global);
unset($x169, $W169, $S169, $U169);
$x170 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x165, JS::toString('charAt', $global), 60, 21, '<image>/05_string.js');
$x169 =& $x170[0]; list(,$W169,$S169,$U169) = $x170;
if (!(is_object($x169) && isset($x169->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x173 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 60, 21, '<image>/05_string.js');
$_TypeError =& $x173[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x173;
$x174 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x175 = $x174($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x175->class) && $x175->class === 'Error' && !isset($x175->properties['file']) && !isset($x175->properties['line']) && !isset($x175->properties['column'])) {$x175->properties['file'] = '<image>/05_string.js';$x175->properties['line'] = 60;$x175->properties['column'] = 21;$x175->attributes['file'] = $x175->attributes['line'] = $x175->attributes['column'] = 0; }
throw new JSException($x175, 60, 21, '<image>/05_string.js');
}
$x171 = $x169->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x172 = $x171($global, $x165, $x169, array($_pos), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['c'] = JS::$undefined; $_c =& $scope->properties['c'];
$Uc = FALSE;
$_c = $x172;
return ord($_c);
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x146=&$scope->properties[\'arguments\'];$x146->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x146->properties[$i]=$args[$i];$x146->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;$x147=JS::toNumber($_pos,$global);if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=$x147;$x149=JS::toPrimitive($_pos,$global);$x150=JS::toPrimitive(0.0,$global);$x151=(is_string($x149)&&is_string($x150)?strcmp($x149,$x150)<0:(!is_nan($x152=JS::toNumber($x149,$global))&&!is_nan($x153=JS::toNumber($x150,$global))&&$x152<$x153));$x148=$x151;if(!JS::toBoolean($x148,$global)){unset($x157,$W157,$S157,$U157);$x158=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$leThis,JS::toString(\'length\',$global),56,28,\'<image>/05_string.js\');$x157=&$x158[0];list(,$W157,$S157,$U157)=$x158;$x154=JS::toPrimitive($_pos,$global);$x155=JS::toPrimitive($x157,$global);$x156=!(is_string($x154)&&is_string($x155)?strcmp($x154,$x155)<0:(!is_nan($x159=JS::toNumber($x154,$global))&&!is_nan($x160=JS::toNumber($x155,$global))&&$x159<$x160));$x148=$x156;}if(JS::toBoolean($x148,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x161=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'NaN\',$global),57,10,\'<image>/05_string.js\');$_NaN=&$x161[0];list(,$WNaN,$SNaN,$UNaN)=$x161;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x162=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),57,10,\'<image>/05_string.js\');$_ReferenceError=&$x162[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x162;$x163=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',57,10);$x164=$x163($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x164->class)&&$x164->class===\'Error\'&&!isset($x164->properties[\'file\'])&&!isset($x164->properties[\'line\'])&&!isset($x164->properties[\'column\'])){$x164->properties[\'file\']=\'<image>/05_string.js\';$x164->properties[\'line\']=57;$x164->properties[\'column\']=10;$x164->attributes[\'file\']=$x164->attributes[\'line\']=$x164->attributes[\'column\']=0;}throw new JSException($x164,57,10,\'<image>/05_string.js\');}return$_NaN;}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x166=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),60,21,\'<image>/05_string.js\');$_TypeError=&$x166[0];list(,$WTypeError,$STypeError,$UTypeError)=$x166;$x167=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x168=$x167($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x168->class)&&$x168->class===\'Error\'&&!isset($x168->properties[\'file\'])&&!isset($x168->properties[\'line\'])&&!isset($x168->properties[\'column\'])){$x168->properties[\'file\']=\'<image>/05_string.js\';$x168->properties[\'line\']=60;$x168->properties[\'column\']=21;$x168->attributes[\'file\']=$x168->attributes[\'line\']=$x168->attributes[\'column\']=0;}throw new JSException($x168,60,21,\'<image>/05_string.js\');}$x165=JS::toObject($leThis,$global);unset($x169,$W169,$S169,$U169);$x170=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x165,JS::toString(\'charAt\',$global),60,21,\'<image>/05_string.js\');$x169=&$x170[0];list(,$W169,$S169,$U169)=$x170;if(!(is_object($x169)&&isset($x169->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x173=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),60,21,\'<image>/05_string.js\');$_TypeError=&$x173[0];list(,$WTypeError,$STypeError,$UTypeError)=$x173;$x174=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x175=$x174($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x175->class)&&$x175->class===\'Error\'&&!isset($x175->properties[\'file\'])&&!isset($x175->properties[\'line\'])&&!isset($x175->properties[\'column\'])){$x175->properties[\'file\']=\'<image>/05_string.js\';$x175->properties[\'line\']=60;$x175->properties[\'column\']=21;$x175->attributes[\'file\']=$x175->attributes[\'line\']=$x175->attributes[\'column\']=0;}throw new JSException($x175,60,21,\'<image>/05_string.js\');}$x171=$x169->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x172=$x171($global,$x165,$x169,array($_pos),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'c\']=JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$_c=$x172;return ord($_c);return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x190 =& $scope->properties['arguments'];
$x190->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x190->properties[$i] = $args[$i];
$x190->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['returnString'] = JS::$undefined; $_returnString =& $scope->properties['returnString'];
$UreturnString = FALSE;
$_returnString = $leThis->value;
for ($x191 = 0;; ++$x191) {
if ($x191 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0.0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x192 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('arguments', $global), 68, 22, '<image>/05_string.js');
$_arguments =& $x192[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x192;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x193 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 68, 22, '<image>/05_string.js');
$_ReferenceError =& $x193[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x193;
$x194 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 68, 22);
$x195 = $x194($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x195->class) && $x195->class === 'Error' && !isset($x195->properties['file']) && !isset($x195->properties['line']) && !isset($x195->properties['column'])) {$x195->properties['file'] = '<image>/05_string.js';$x195->properties['line'] = 68;$x195->properties['column'] = 22;$x195->attributes['file'] = $x195->attributes['line'] = $x195->attributes['column'] = 0; }
throw new JSException($x195, 68, 22, '<image>/05_string.js');
}
unset($x196, $W196, $S196, $U196);
$x197 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_arguments, JS::toString('length', $global), 68, 31, '<image>/05_string.js');
$x196 =& $x197[0]; list(,$W196,$S196,$U196) = $x197;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x196;
}
if ($x191 !== 0) {
$x198 = ++$_i;
}
$x199 = JS::toPrimitive($_i, $global);
$x200 = JS::toPrimitive($_l, $global);
$x201 = (is_string($x199) && is_string($x200) ? strcmp($x199, $x200) < 0 : (!is_nan($x202 = JS::toNumber($x199, $global)) && !is_nan($x203 = JS::toNumber($x200, $global)) && $x202 < $x203));
if (!JS::toBoolean($x201, $global)) { break; }

unset($x204, $W204, $S204, $U204);
$x205 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_arguments, JS::toString($_i, $global), 69, 28, '<image>/05_string.js');
$x204 =& $x205[0]; list(,$W204,$S204,$U204) = $x205;
if ($UreturnString) {$global->properties['returnString'] = $_returnString; $_returnString =& $global->properties['returnString']; }
$x206 = JS::toPrimitive($_returnString, $global);
$x207 = JS::toPrimitive($x204, $global);
$_returnString = (is_string($x206) || is_string($x207) ? JS::toString($x206, $global) . JS::toString($x207, $global) : JS::toNumber($x206, $global) + JS::toNumber($x207, $global));;
};
return $_returnString;
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x190=&$scope->properties[\'arguments\'];$x190->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x190->properties[$i]=$args[$i];$x190->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'returnString\']=JS::$undefined;$_returnString=&$scope->properties[\'returnString\'];$UreturnString=FALSE;$_returnString=$leThis->value;for($x191=0;;++$x191){if($x191===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0.0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x192=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'arguments\',$global),68,22,\'<image>/05_string.js\');$_arguments=&$x192[0];list(,$Warguments,$Sarguments,$Uarguments)=$x192;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x193=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),68,22,\'<image>/05_string.js\');$_ReferenceError=&$x193[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x193;$x194=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',68,22);$x195=$x194($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x195->class)&&$x195->class===\'Error\'&&!isset($x195->properties[\'file\'])&&!isset($x195->properties[\'line\'])&&!isset($x195->properties[\'column\'])){$x195->properties[\'file\']=\'<image>/05_string.js\';$x195->properties[\'line\']=68;$x195->properties[\'column\']=22;$x195->attributes[\'file\']=$x195->attributes[\'line\']=$x195->attributes[\'column\']=0;}throw new JSException($x195,68,22,\'<image>/05_string.js\');}unset($x196,$W196,$S196,$U196);$x197=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_arguments,JS::toString(\'length\',$global),68,31,\'<image>/05_string.js\');$x196=&$x197[0];list(,$W196,$S196,$U196)=$x197;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x196;}if($x191!==0){$x198=++$_i;}$x199=JS::toPrimitive($_i,$global);$x200=JS::toPrimitive($_l,$global);$x201=(is_string($x199)&&is_string($x200)?strcmp($x199,$x200)<0:(!is_nan($x202=JS::toNumber($x199,$global))&&!is_nan($x203=JS::toNumber($x200,$global))&&$x202<$x203));if(!JS::toBoolean($x201,$global)){break;}unset($x204,$W204,$S204,$U204);$x205=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_arguments,JS::toString($_i,$global),69,28,\'<image>/05_string.js\');$x204=&$x205[0];list(,$W204,$S204,$U204)=$x205;if($UreturnString){$global->properties[\'returnString\']=$_returnString;$_returnString=&$global->properties[\'returnString\'];}$x206=JS::toPrimitive($_returnString,$global);$x207=JS::toPrimitive($x204,$global);$_returnString=(is_string($x206)||is_string($x207)?JS::toString($x206,$global).JS::toString($x207,$global):JS::toNumber($x206,$global)+JS::toNumber($x207,$global));}return$_returnString;return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x222 =& $scope->properties['arguments'];
$x222->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x222->properties[$i] = $args[$i];
$x222->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['position'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_position =& $scope->properties['position'];
$Uposition = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x223 = (((gettype($_position) === gettype(JS::$undefined) && $_position === JS::$undefined))|| (((is_float($_position) || is_int($_position)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_position == JS::$undefined));
if (JS::toBoolean($x223, $global)) {
$x224 = 0.0;
if ($Uposition) {$global->properties['position'] = $_position; $_position =& $global->properties['position']; }
$_position = $x224;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x225 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Math', $global), 80, 15, '<image>/05_string.js');
$_Math =& $x225[0]; list(,$WMath,$SMath,$UMath) = $x225;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x226 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 80, 15, '<image>/05_string.js');
$_ReferenceError =& $x226[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x226;
$x227 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 15);
$x228 = $x227($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x228->class) && $x228->class === 'Error' && !isset($x228->properties['file']) && !isset($x228->properties['line']) && !isset($x228->properties['column'])) {$x228->properties['file'] = '<image>/05_string.js';$x228->properties['line'] = 80;$x228->properties['column'] = 15;$x228->attributes['file'] = $x228->attributes['line'] = $x228->attributes['column'] = 0; }
throw new JSException($x228, 80, 15, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x230 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 23, '<image>/05_string.js');
$_TypeError =& $x230[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x230;
$x231 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x232 = $x231($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x232->class) && $x232->class === 'Error' && !isset($x232->properties['file']) && !isset($x232->properties['line']) && !isset($x232->properties['column'])) {$x232->properties['file'] = '<image>/05_string.js';$x232->properties['line'] = 80;$x232->properties['column'] = 23;$x232->attributes['file'] = $x232->attributes['line'] = $x232->attributes['column'] = 0; }
throw new JSException($x232, 80, 23, '<image>/05_string.js');
}
$x229 = JS::toObject($_Math, $global);
unset($x233, $W233, $S233, $U233);
$x234 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x229, JS::toString('min', $global), 80, 23, '<image>/05_string.js');
$x233 =& $x234[0]; list(,$W233,$S233,$U233) = $x234;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x236 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 32, '<image>/05_string.js');
$_TypeError =& $x236[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x236;
$x237 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x238 = $x237($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x238->class) && $x238->class === 'Error' && !isset($x238->properties['file']) && !isset($x238->properties['line']) && !isset($x238->properties['column'])) {$x238->properties['file'] = '<image>/05_string.js';$x238->properties['line'] = 80;$x238->properties['column'] = 32;$x238->attributes['file'] = $x238->attributes['line'] = $x238->attributes['column'] = 0; }
throw new JSException($x238, 80, 32, '<image>/05_string.js');
}
$x235 = JS::toObject($_Math, $global);
unset($x239, $W239, $S239, $U239);
$x240 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x235, JS::toString('max', $global), 80, 32, '<image>/05_string.js');
$x239 =& $x240[0]; list(,$W239,$S239,$U239) = $x240;
if (!(is_object($x239) && isset($x239->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x243 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 32, '<image>/05_string.js');
$_TypeError =& $x243[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x243;
$x244 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x245 = $x244($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x245->class) && $x245->class === 'Error' && !isset($x245->properties['file']) && !isset($x245->properties['line']) && !isset($x245->properties['column'])) {$x245->properties['file'] = '<image>/05_string.js';$x245->properties['line'] = 80;$x245->properties['column'] = 32;$x245->attributes['file'] = $x245->attributes['line'] = $x245->attributes['column'] = 0; }
throw new JSException($x245, 80, 32, '<image>/05_string.js');
}
$x241 = $x239->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x242 = $x241($global, $x235, $x239, array($_position, 0.0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x233) && isset($x233->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x248 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 23, '<image>/05_string.js');
$_TypeError =& $x248[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x248;
$x249 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x250 = $x249($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x250->class) && $x250->class === 'Error' && !isset($x250->properties['file']) && !isset($x250->properties['line']) && !isset($x250->properties['column'])) {$x250->properties['file'] = '<image>/05_string.js';$x250->properties['line'] = 80;$x250->properties['column'] = 23;$x250->attributes['file'] = $x250->attributes['line'] = $x250->attributes['column'] = 0; }
throw new JSException($x250, 80, 23, '<image>/05_string.js');
}
$x246 = $x233->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x247 = $x246($global, $x229, $x233, array($x242, mb_strlen($leThis->value)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = $x247;
$scope->properties['ret'] = JS::$undefined; $_ret =& $scope->properties['ret'];
$Uret = FALSE;
$_ret = mb_strpos($leThis->value, JS::toString($_search, $global),$_offset);
$x251 = (((gettype($_ret) === gettype(false) && $_ret === false))|| (((is_float($_ret) || is_int($_ret)) && (is_float(false) || is_int(false))) && $_ret == false));
if (JS::toBoolean($x251, $global)) {

return (-1.0 * JS::toNumber(1.0, $global));;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x222=&$scope->properties[\'arguments\'];$x222->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x222->properties[$i]=$args[$i];$x222->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x223=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x223,$global)){$x224=0.0;if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=$x224;}unset($_Math,$WMath,$SMath,$UMath);$x225=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'Math\',$global),80,15,\'<image>/05_string.js\');$_Math=&$x225[0];list(,$WMath,$SMath,$UMath)=$x225;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x226=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),80,15,\'<image>/05_string.js\');$_ReferenceError=&$x226[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x226;$x227=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,15);$x228=$x227($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x228->class)&&$x228->class===\'Error\'&&!isset($x228->properties[\'file\'])&&!isset($x228->properties[\'line\'])&&!isset($x228->properties[\'column\'])){$x228->properties[\'file\']=\'<image>/05_string.js\';$x228->properties[\'line\']=80;$x228->properties[\'column\']=15;$x228->attributes[\'file\']=$x228->attributes[\'line\']=$x228->attributes[\'column\']=0;}throw new JSException($x228,80,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x230=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,23,\'<image>/05_string.js\');$_TypeError=&$x230[0];list(,$WTypeError,$STypeError,$UTypeError)=$x230;$x231=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x232=$x231($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x232->class)&&$x232->class===\'Error\'&&!isset($x232->properties[\'file\'])&&!isset($x232->properties[\'line\'])&&!isset($x232->properties[\'column\'])){$x232->properties[\'file\']=\'<image>/05_string.js\';$x232->properties[\'line\']=80;$x232->properties[\'column\']=23;$x232->attributes[\'file\']=$x232->attributes[\'line\']=$x232->attributes[\'column\']=0;}throw new JSException($x232,80,23,\'<image>/05_string.js\');}$x229=JS::toObject($_Math,$global);unset($x233,$W233,$S233,$U233);$x234=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x229,JS::toString(\'min\',$global),80,23,\'<image>/05_string.js\');$x233=&$x234[0];list(,$W233,$S233,$U233)=$x234;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x236=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,32,\'<image>/05_string.js\');$_TypeError=&$x236[0];list(,$WTypeError,$STypeError,$UTypeError)=$x236;$x237=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x238=$x237($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x238->class)&&$x238->class===\'Error\'&&!isset($x238->properties[\'file\'])&&!isset($x238->properties[\'line\'])&&!isset($x238->properties[\'column\'])){$x238->properties[\'file\']=\'<image>/05_string.js\';$x238->properties[\'line\']=80;$x238->properties[\'column\']=32;$x238->attributes[\'file\']=$x238->attributes[\'line\']=$x238->attributes[\'column\']=0;}throw new JSException($x238,80,32,\'<image>/05_string.js\');}$x235=JS::toObject($_Math,$global);unset($x239,$W239,$S239,$U239);$x240=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x235,JS::toString(\'max\',$global),80,32,\'<image>/05_string.js\');$x239=&$x240[0];list(,$W239,$S239,$U239)=$x240;if(!(is_object($x239)&&isset($x239->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x243=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,32,\'<image>/05_string.js\');$_TypeError=&$x243[0];list(,$WTypeError,$STypeError,$UTypeError)=$x243;$x244=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x245=$x244($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x245->class)&&$x245->class===\'Error\'&&!isset($x245->properties[\'file\'])&&!isset($x245->properties[\'line\'])&&!isset($x245->properties[\'column\'])){$x245->properties[\'file\']=\'<image>/05_string.js\';$x245->properties[\'line\']=80;$x245->properties[\'column\']=32;$x245->attributes[\'file\']=$x245->attributes[\'line\']=$x245->attributes[\'column\']=0;}throw new JSException($x245,80,32,\'<image>/05_string.js\');}$x241=$x239->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x242=$x241($global,$x235,$x239,array($_position,0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x233)&&isset($x233->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x248=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,23,\'<image>/05_string.js\');$_TypeError=&$x248[0];list(,$WTypeError,$STypeError,$UTypeError)=$x248;$x249=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x250=$x249($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x250->class)&&$x250->class===\'Error\'&&!isset($x250->properties[\'file\'])&&!isset($x250->properties[\'line\'])&&!isset($x250->properties[\'column\'])){$x250->properties[\'file\']=\'<image>/05_string.js\';$x250->properties[\'line\']=80;$x250->properties[\'column\']=23;$x250->attributes[\'file\']=$x250->attributes[\'line\']=$x250->attributes[\'column\']=0;}throw new JSException($x250,80,23,\'<image>/05_string.js\');}$x246=$x233->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x247=$x246($global,$x229,$x233,array($x242,mb_strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x247;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=mb_strpos($leThis->value,JS::toString($_search,$global),$_offset);$x251=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x251,$global)){return(-1.0*JS::toNumber(1.0,$global));}return$_ret;return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x266 =& $scope->properties['arguments'];
$x266->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x266->properties[$i] = $args[$i];
$x266->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['position'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_position =& $scope->properties['position'];
$Uposition = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x267 = (((gettype($_position) === gettype(JS::$undefined) && $_position === JS::$undefined))|| (((is_float($_position) || is_int($_position)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_position == JS::$undefined));
if (JS::toBoolean($x267, $global)) {
$x268 = 0.0;
if ($Uposition) {$global->properties['position'] = $_position; $_position =& $global->properties['position']; }
$_position = $x268;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x269 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Math', $global), 95, 15, '<image>/05_string.js');
$_Math =& $x269[0]; list(,$WMath,$SMath,$UMath) = $x269;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x270 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 95, 15, '<image>/05_string.js');
$_ReferenceError =& $x270[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x270;
$x271 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 15);
$x272 = $x271($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x272->class) && $x272->class === 'Error' && !isset($x272->properties['file']) && !isset($x272->properties['line']) && !isset($x272->properties['column'])) {$x272->properties['file'] = '<image>/05_string.js';$x272->properties['line'] = 95;$x272->properties['column'] = 15;$x272->attributes['file'] = $x272->attributes['line'] = $x272->attributes['column'] = 0; }
throw new JSException($x272, 95, 15, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x274 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 23, '<image>/05_string.js');
$_TypeError =& $x274[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x274;
$x275 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x276 = $x275($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x276->class) && $x276->class === 'Error' && !isset($x276->properties['file']) && !isset($x276->properties['line']) && !isset($x276->properties['column'])) {$x276->properties['file'] = '<image>/05_string.js';$x276->properties['line'] = 95;$x276->properties['column'] = 23;$x276->attributes['file'] = $x276->attributes['line'] = $x276->attributes['column'] = 0; }
throw new JSException($x276, 95, 23, '<image>/05_string.js');
}
$x273 = JS::toObject($_Math, $global);
unset($x277, $W277, $S277, $U277);
$x278 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x273, JS::toString('min', $global), 95, 23, '<image>/05_string.js');
$x277 =& $x278[0]; list(,$W277,$S277,$U277) = $x278;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x280 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 32, '<image>/05_string.js');
$_TypeError =& $x280[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x280;
$x281 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x282 = $x281($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x282->class) && $x282->class === 'Error' && !isset($x282->properties['file']) && !isset($x282->properties['line']) && !isset($x282->properties['column'])) {$x282->properties['file'] = '<image>/05_string.js';$x282->properties['line'] = 95;$x282->properties['column'] = 32;$x282->attributes['file'] = $x282->attributes['line'] = $x282->attributes['column'] = 0; }
throw new JSException($x282, 95, 32, '<image>/05_string.js');
}
$x279 = JS::toObject($_Math, $global);
unset($x283, $W283, $S283, $U283);
$x284 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x279, JS::toString('max', $global), 95, 32, '<image>/05_string.js');
$x283 =& $x284[0]; list(,$W283,$S283,$U283) = $x284;
if (!(is_object($x283) && isset($x283->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x287 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 32, '<image>/05_string.js');
$_TypeError =& $x287[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x287;
$x288 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x289 = $x288($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x289->class) && $x289->class === 'Error' && !isset($x289->properties['file']) && !isset($x289->properties['line']) && !isset($x289->properties['column'])) {$x289->properties['file'] = '<image>/05_string.js';$x289->properties['line'] = 95;$x289->properties['column'] = 32;$x289->attributes['file'] = $x289->attributes['line'] = $x289->attributes['column'] = 0; }
throw new JSException($x289, 95, 32, '<image>/05_string.js');
}
$x285 = $x283->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x286 = $x285($global, $x279, $x283, array($_position, 0.0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x277) && isset($x277->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x292 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 23, '<image>/05_string.js');
$_TypeError =& $x292[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x292;
$x293 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x294 = $x293($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x294->class) && $x294->class === 'Error' && !isset($x294->properties['file']) && !isset($x294->properties['line']) && !isset($x294->properties['column'])) {$x294->properties['file'] = '<image>/05_string.js';$x294->properties['line'] = 95;$x294->properties['column'] = 23;$x294->attributes['file'] = $x294->attributes['line'] = $x294->attributes['column'] = 0; }
throw new JSException($x294, 95, 23, '<image>/05_string.js');
}
$x290 = $x277->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x291 = $x290($global, $x273, $x277, array($x286, mb_strlen($leThis->value)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = $x291;
$scope->properties['ret'] = JS::$undefined; $_ret =& $scope->properties['ret'];
$Uret = FALSE;
$_ret = mb_strrpos($leThis->value, JS::toString($_search, $global),$_offset);
$x295 = (((gettype($_ret) === gettype(false) && $_ret === false))|| (((is_float($_ret) || is_int($_ret)) && (is_float(false) || is_int(false))) && $_ret == false));
if (JS::toBoolean($x295, $global)) {

return (-1.0 * JS::toNumber(1.0, $global));;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x266=&$scope->properties[\'arguments\'];$x266->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x266->properties[$i]=$args[$i];$x266->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x267=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x267,$global)){$x268=0.0;if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=$x268;}unset($_Math,$WMath,$SMath,$UMath);$x269=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'Math\',$global),95,15,\'<image>/05_string.js\');$_Math=&$x269[0];list(,$WMath,$SMath,$UMath)=$x269;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x270=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),95,15,\'<image>/05_string.js\');$_ReferenceError=&$x270[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x270;$x271=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,15);$x272=$x271($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x272->class)&&$x272->class===\'Error\'&&!isset($x272->properties[\'file\'])&&!isset($x272->properties[\'line\'])&&!isset($x272->properties[\'column\'])){$x272->properties[\'file\']=\'<image>/05_string.js\';$x272->properties[\'line\']=95;$x272->properties[\'column\']=15;$x272->attributes[\'file\']=$x272->attributes[\'line\']=$x272->attributes[\'column\']=0;}throw new JSException($x272,95,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x274=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,23,\'<image>/05_string.js\');$_TypeError=&$x274[0];list(,$WTypeError,$STypeError,$UTypeError)=$x274;$x275=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x276=$x275($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x276->class)&&$x276->class===\'Error\'&&!isset($x276->properties[\'file\'])&&!isset($x276->properties[\'line\'])&&!isset($x276->properties[\'column\'])){$x276->properties[\'file\']=\'<image>/05_string.js\';$x276->properties[\'line\']=95;$x276->properties[\'column\']=23;$x276->attributes[\'file\']=$x276->attributes[\'line\']=$x276->attributes[\'column\']=0;}throw new JSException($x276,95,23,\'<image>/05_string.js\');}$x273=JS::toObject($_Math,$global);unset($x277,$W277,$S277,$U277);$x278=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x273,JS::toString(\'min\',$global),95,23,\'<image>/05_string.js\');$x277=&$x278[0];list(,$W277,$S277,$U277)=$x278;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x280=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,32,\'<image>/05_string.js\');$_TypeError=&$x280[0];list(,$WTypeError,$STypeError,$UTypeError)=$x280;$x281=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x282=$x281($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x282->class)&&$x282->class===\'Error\'&&!isset($x282->properties[\'file\'])&&!isset($x282->properties[\'line\'])&&!isset($x282->properties[\'column\'])){$x282->properties[\'file\']=\'<image>/05_string.js\';$x282->properties[\'line\']=95;$x282->properties[\'column\']=32;$x282->attributes[\'file\']=$x282->attributes[\'line\']=$x282->attributes[\'column\']=0;}throw new JSException($x282,95,32,\'<image>/05_string.js\');}$x279=JS::toObject($_Math,$global);unset($x283,$W283,$S283,$U283);$x284=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x279,JS::toString(\'max\',$global),95,32,\'<image>/05_string.js\');$x283=&$x284[0];list(,$W283,$S283,$U283)=$x284;if(!(is_object($x283)&&isset($x283->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x287=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,32,\'<image>/05_string.js\');$_TypeError=&$x287[0];list(,$WTypeError,$STypeError,$UTypeError)=$x287;$x288=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x289=$x288($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x289->class)&&$x289->class===\'Error\'&&!isset($x289->properties[\'file\'])&&!isset($x289->properties[\'line\'])&&!isset($x289->properties[\'column\'])){$x289->properties[\'file\']=\'<image>/05_string.js\';$x289->properties[\'line\']=95;$x289->properties[\'column\']=32;$x289->attributes[\'file\']=$x289->attributes[\'line\']=$x289->attributes[\'column\']=0;}throw new JSException($x289,95,32,\'<image>/05_string.js\');}$x285=$x283->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x286=$x285($global,$x279,$x283,array($_position,0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x277)&&isset($x277->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x292=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,23,\'<image>/05_string.js\');$_TypeError=&$x292[0];list(,$WTypeError,$STypeError,$UTypeError)=$x292;$x293=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x294=$x293($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x294->class)&&$x294->class===\'Error\'&&!isset($x294->properties[\'file\'])&&!isset($x294->properties[\'line\'])&&!isset($x294->properties[\'column\'])){$x294->properties[\'file\']=\'<image>/05_string.js\';$x294->properties[\'line\']=95;$x294->properties[\'column\']=23;$x294->attributes[\'file\']=$x294->attributes[\'line\']=$x294->attributes[\'column\']=0;}throw new JSException($x294,95,23,\'<image>/05_string.js\');}$x290=$x277->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x291=$x290($global,$x273,$x277,array($x286,mb_strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x291;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=mb_strrpos($leThis->value,JS::toString($_search,$global),$_offset);$x295=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x295,$global)){return(-1.0*JS::toNumber(1.0,$global));}return$_ret;return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x310 =& $scope->properties['arguments'];
$x310->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x310->properties[$i] = $args[$i];
$x310->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['that'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_that =& $scope->properties['that'];
$Uthat = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value === JS::toString($_that, $global);
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x310=&$scope->properties[\'arguments\'];$x310->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x310->properties[$i]=$args[$i];$x310->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'that\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_that=&$scope->properties[\'that\'];$Uthat=FALSE;$global->scope[++$global->scope_sp]=$scope;return$leThis->value===JS::toString($_that,$global);return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x325 =& $scope->properties['arguments'];
$x325->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x325->properties[$i] = $args[$i];
$x325->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['regexp'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_regexp =& $scope->properties['regexp'];
$Uregexp = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean((!JS::toBoolean((is_object($_regexp) && isset($_regexp->class) &&$_regexp->class === 'RegExp'), $global)), $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x328 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('RegExp', $global), 111, 16, '<image>/05_string.js');
$_RegExp =& $x328[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x328;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x329 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 111, 16, '<image>/05_string.js');
$_ReferenceError =& $x329[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x329;
$x330 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 16);
$x331 = $x330($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x331->class) && $x331->class === 'Error' && !isset($x331->properties['file']) && !isset($x331->properties['line']) && !isset($x331->properties['column'])) {$x331->properties['file'] = '<image>/05_string.js';$x331->properties['line'] = 111;$x331->properties['column'] = 16;$x331->attributes['file'] = $x331->attributes['line'] = $x331->attributes['column'] = 0; }
throw new JSException($x331, 111, 16, '<image>/05_string.js');
}
$x326 = clone JS::$objectTemplate;
unset($x332, $W332, $S332, $U332);
$x333 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 111, 12, '<image>/05_string.js');
$x332 =& $x333[0]; list(,$W332,$S332,$U332) = $x333;
$x327 = $x332;
$x326->prototype = $x327;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x336 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 111, 12, '<image>/05_string.js');
$_TypeError =& $x336[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x336;
$x337 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 12);
$x338 = $x337($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x338->class) && $x338->class === 'Error' && !isset($x338->properties['file']) && !isset($x338->properties['line']) && !isset($x338->properties['column'])) {$x338->properties['file'] = '<image>/05_string.js';$x338->properties['line'] = 111;$x338->properties['column'] = 12;$x338->attributes['file'] = $x338->attributes['line'] = $x338->attributes['column'] = 0; }
throw new JSException($x338, 111, 12, '<image>/05_string.js');
}
$x334 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 12);
$x335 = $x334($global, $x326, $_RegExp, array($_regexp), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x327 = $x335;
if (is_object($x327) && $x327 !== JS::$undefined) { $x326 = $x327; }
if ($Uregexp) {$global->properties['regexp'] = $_regexp; $_regexp =& $global->properties['regexp']; }
$_regexp = $x326;;
};
unset($x339, $W339, $S339, $U339);
$x340 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_regexp, JS::toString('global', $global), 114, 13, '<image>/05_string.js');
$x339 =& $x340[0]; list(,$W339,$S339,$U339) = $x340;
if (JS::toBoolean((!JS::toBoolean($x339, $global)), $global)) {
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x342 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 115, 21, '<image>/05_string.js');
$_TypeError =& $x342[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x342;
$x343 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x344 = $x343($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x344->class) && $x344->class === 'Error' && !isset($x344->properties['file']) && !isset($x344->properties['line']) && !isset($x344->properties['column'])) {$x344->properties['file'] = '<image>/05_string.js';$x344->properties['line'] = 115;$x344->properties['column'] = 21;$x344->attributes['file'] = $x344->attributes['line'] = $x344->attributes['column'] = 0; }
throw new JSException($x344, 115, 21, '<image>/05_string.js');
}
$x341 = JS::toObject($_regexp, $global);
unset($x345, $W345, $S345, $U345);
$x346 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x341, JS::toString('exec', $global), 115, 21, '<image>/05_string.js');
$x345 =& $x346[0]; list(,$W345,$S345,$U345) = $x346;
if (!(is_object($x345) && isset($x345->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x349 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 115, 21, '<image>/05_string.js');
$_TypeError =& $x349[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x349;
$x350 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x351 = $x350($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x351->class) && $x351->class === 'Error' && !isset($x351->properties['file']) && !isset($x351->properties['line']) && !isset($x351->properties['column'])) {$x351->properties['file'] = '<image>/05_string.js';$x351->properties['line'] = 115;$x351->properties['column'] = 21;$x351->attributes['file'] = $x351->attributes['line'] = $x351->attributes['column'] = 0; }
throw new JSException($x351, 115, 21, '<image>/05_string.js');
}
$x347 = $x345->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x348 = $x347($global, $x341, $x345, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x348;;
};
$x352 = clone JS::$arrayTemplate;
$x352->properties['length'] = 0;
$x352->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x352;
$scope->properties['n'] = JS::$undefined; $_n =& $scope->properties['n'];
$Un = FALSE;
$_n = 0.0;
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = JS::$undefined;
$scope->properties['currentLastIndex'] = JS::$undefined; $_currentLastIndex =& $scope->properties['currentLastIndex'];
$UcurrentLastIndex = FALSE;
$_currentLastIndex = JS::$undefined;
$x353 = 0.0;
$x354 = JS::toString('lastIndex', $global);
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x355 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 120, 19, '<image>/05_string.js');
$_TypeError =& $x355[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x355;
$x356 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 120, 19);
$x357 = $x356($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x357->class) && $x357->class === 'Error' && !isset($x357->properties['file']) && !isset($x357->properties['line']) && !isset($x357->properties['column'])) {$x357->properties['file'] = '<image>/05_string.js';$x357->properties['line'] = 120;$x357->properties['column'] = 19;$x357->attributes['file'] = $x357->attributes['line'] = $x357->attributes['column'] = 0; }
throw new JSException($x357, 120, 19, '<image>/05_string.js');
}
$_regexp = JS::toObject($_regexp, $global);
unset($x358, $W358, $S358, $U358);
$x359 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $_regexp, JS::toString($x354, $global), 120, 19, '<image>/05_string.js');
$x358 =& $x359[0]; list(,$W358,$S358,$U358) = $x359;
if ($U358 && (!isset($_regexp->extensible) || $_regexp->extensible)) {$_regexp->properties[$x354] = $x358; $x358 =& $_regexp->properties[$x354]; $_regexp->attributes[$x354] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U358 = FALSE; $W358 = TRUE; }
if (isset($_regexp->class) && $_regexp->class === 'Array') {  if (isset($_regexp->properties['length']) && $_regexp->properties['length'] !== JS::$undefined) { $x361 = $_regexp->properties['length']; }  else { $x361 = 0; } }
if (isset($S358)) {
$x362 = $S358->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 120, 19);
$x363 = $x362($global, $_regexp, $S358, array($x353), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x360 = $x363;
} else {
if (!$U358) {$x360 = $x353;if ($W358) { $x358 = $x353; }  }
else { $x360 = JS::$undefined; }
}
if (isset($_regexp->class) && $_regexp->class === 'Array') {if (is_int('lastIndex') && 'lastIndex' >= $_regexp->properties['length']) { $_regexp->properties['length'] = 'lastIndex' + 1; }else if ($x354 === 'length' && is_int($x353) && $x361 > $x353) {  for ($i = $x353; $i < $x361; ++$i) {  unset($_regexp->properties[$i], $_regexp->attributes[$i]); }}};
for ($x364 = 0;; ++$x364) {
if ($x364 === 0) {
$scope->properties['previousLastIndex'] = JS::$undefined; $_previousLastIndex =& $scope->properties['previousLastIndex'];
$UpreviousLastIndex = FALSE;
$_previousLastIndex = 0.0;
$scope->properties['lastMatch'] = JS::$undefined; $_lastMatch =& $scope->properties['lastMatch'];
$UlastMatch = FALSE;
$_lastMatch = true;
}
if ($x364 !== 0) {
$x365 = ++$_n;
}

if (!JS::toBoolean($_lastMatch, $global)) { break; }

if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x367 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 123, 22, '<image>/05_string.js');
$_TypeError =& $x367[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x367;
$x368 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x369 = $x368($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x369->class) && $x369->class === 'Error' && !isset($x369->properties['file']) && !isset($x369->properties['line']) && !isset($x369->properties['column'])) {$x369->properties['file'] = '<image>/05_string.js';$x369->properties['line'] = 123;$x369->properties['column'] = 22;$x369->attributes['file'] = $x369->attributes['line'] = $x369->attributes['column'] = 0; }
throw new JSException($x369, 123, 22, '<image>/05_string.js');
}
$x366 = JS::toObject($_regexp, $global);
unset($x370, $W370, $S370, $U370);
$x371 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x366, JS::toString('exec', $global), 123, 22, '<image>/05_string.js');
$x370 =& $x371[0]; list(,$W370,$S370,$U370) = $x371;
if (!(is_object($x370) && isset($x370->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x374 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 123, 22, '<image>/05_string.js');
$_TypeError =& $x374[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x374;
$x375 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x376 = $x375($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x376->class) && $x376->class === 'Error' && !isset($x376->properties['file']) && !isset($x376->properties['line']) && !isset($x376->properties['column'])) {$x376->properties['file'] = '<image>/05_string.js';$x376->properties['line'] = 123;$x376->properties['column'] = 22;$x376->attributes['file'] = $x376->attributes['line'] = $x376->attributes['column'] = 0; }
throw new JSException($x376, 123, 22, '<image>/05_string.js');
}
$x372 = $x370->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x373 = $x372($global, $x366, $x370, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x373;
$x377 = (!JS::toBoolean((!JS::toBoolean($_match, $global)), $global));
if ($UlastMatch) {$global->properties['lastMatch'] = $_lastMatch; $_lastMatch =& $global->properties['lastMatch']; }
$_lastMatch = $x377;
if (JS::toBoolean($_match, $global)) {
unset($x379, $W379, $S379, $U379);
$x380 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_regexp, JS::toString('lastIndex', $global), 127, 14, '<image>/05_string.js');
$x379 =& $x380[0]; list(,$W379,$S379,$U379) = $x380;
$x378 = (((gettype($x379) === gettype($_previousLastIndex) && $x379 === $_previousLastIndex))|| (((is_float($x379) || is_int($x379)) && (is_float($_previousLastIndex) || is_int($_previousLastIndex))) && $x379 == $_previousLastIndex));
if (JS::toBoolean($x378, $global)) {
unset($x383, $W383, $S383, $U383);
$x384 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_regexp, JS::toString('lastIndex', $global), 128, 50, '<image>/05_string.js');
$x383 =& $x384[0]; list(,$W383,$S383,$U383) = $x384;
$x381 = JS::toPrimitive($x383, $global);
$x382 = JS::toPrimitive(1.0, $global);
$x385 = (is_string($x381) || is_string($x382) ? JS::toString($x381, $global) . JS::toString($x382, $global) : JS::toNumber($x381, $global) + JS::toNumber($x382, $global));
$x386 = JS::toString('lastIndex', $global);
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x387 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 128, 42, '<image>/05_string.js');
$_TypeError =& $x387[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x387;
$x388 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 128, 42);
$x389 = $x388($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x389->class) && $x389->class === 'Error' && !isset($x389->properties['file']) && !isset($x389->properties['line']) && !isset($x389->properties['column'])) {$x389->properties['file'] = '<image>/05_string.js';$x389->properties['line'] = 128;$x389->properties['column'] = 42;$x389->attributes['file'] = $x389->attributes['line'] = $x389->attributes['column'] = 0; }
throw new JSException($x389, 128, 42, '<image>/05_string.js');
}
$_regexp = JS::toObject($_regexp, $global);
unset($x390, $W390, $S390, $U390);
$x391 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $_regexp, JS::toString($x386, $global), 128, 42, '<image>/05_string.js');
$x390 =& $x391[0]; list(,$W390,$S390,$U390) = $x391;
if ($U390 && (!isset($_regexp->extensible) || $_regexp->extensible)) {$_regexp->properties[$x386] = $x390; $x390 =& $_regexp->properties[$x386]; $_regexp->attributes[$x386] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U390 = FALSE; $W390 = TRUE; }
if (isset($_regexp->class) && $_regexp->class === 'Array') {  if (isset($_regexp->properties['length']) && $_regexp->properties['length'] !== JS::$undefined) { $x393 = $_regexp->properties['length']; }  else { $x393 = 0; } }
if (isset($S390)) {
$x394 = $S390->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 128, 42);
$x395 = $x394($global, $_regexp, $S390, array($x385), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x392 = $x395;
} else {
if (!$U390) {$x392 = $x385;if ($W390) { $x390 = $x385; }  }
else { $x392 = JS::$undefined; }
}
if (isset($_regexp->class) && $_regexp->class === 'Array') {if (is_int('lastIndex') && 'lastIndex' >= $_regexp->properties['length']) { $_regexp->properties['length'] = 'lastIndex' + 1; }else if ($x386 === 'length' && is_int($x385) && $x393 > $x385) {  for ($i = $x385; $i < $x393; ++$i) {  unset($_regexp->properties[$i], $_regexp->attributes[$i]); }}}
if ($UpreviousLastIndex) {$global->properties['previousLastIndex'] = $_previousLastIndex; $_previousLastIndex =& $global->properties['previousLastIndex']; }
$_previousLastIndex = $x392;;
}
else {
unset($x396, $W396, $S396, $U396);
$x397 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_regexp, JS::toString('lastIndex', $global), 130, 31, '<image>/05_string.js');
$x396 =& $x397[0]; list(,$W396,$S396,$U396) = $x397;
if ($UpreviousLastIndex) {$global->properties['previousLastIndex'] = $_previousLastIndex; $_previousLastIndex =& $global->properties['previousLastIndex']; }
$_previousLastIndex = $x396;;
};
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x399 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 133, 20, '<image>/05_string.js');
$_TypeError =& $x399[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x399;
$x400 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x401 = $x400($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x401->class) && $x401->class === 'Error' && !isset($x401->properties['file']) && !isset($x401->properties['line']) && !isset($x401->properties['column'])) {$x401->properties['file'] = '<image>/05_string.js';$x401->properties['line'] = 133;$x401->properties['column'] = 20;$x401->attributes['file'] = $x401->attributes['line'] = $x401->attributes['column'] = 0; }
throw new JSException($x401, 133, 20, '<image>/05_string.js');
}
$x398 = JS::toObject($_returnArray, $global);
unset($x402, $W402, $S402, $U402);
$x403 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x398, JS::toString('push', $global), 133, 20, '<image>/05_string.js');
$x402 =& $x403[0]; list(,$W402,$S402,$U402) = $x403;
unset($x404, $W404, $S404, $U404);
$x405 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString(0.0, $global), 133, 26, '<image>/05_string.js');
$x404 =& $x405[0]; list(,$W404,$S404,$U404) = $x405;
if (!(is_object($x402) && isset($x402->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x408 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 133, 20, '<image>/05_string.js');
$_TypeError =& $x408[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x408;
$x409 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x410 = $x409($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x410->class) && $x410->class === 'Error' && !isset($x410->properties['file']) && !isset($x410->properties['line']) && !isset($x410->properties['column'])) {$x410->properties['file'] = '<image>/05_string.js';$x410->properties['line'] = 133;$x410->properties['column'] = 20;$x410->attributes['file'] = $x410->attributes['line'] = $x410->attributes['column'] = 0; }
throw new JSException($x410, 133, 20, '<image>/05_string.js');
}
$x406 = $x402->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x407 = $x406($global, $x398, $x402, array($x404), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};;
};
$x411 = (((gettype($_n) === gettype(0.0) && $_n === 0.0))|| (((is_float($_n) || is_int($_n)) && (is_float(0.0) || is_int(0.0))) && $_n == 0.0));
if (JS::toBoolean($x411, $global)) {

return NULL;;
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x325=&$scope->properties[\'arguments\'];$x325->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x325->properties[$i]=$args[$i];$x325->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'regexp\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_regexp=&$scope->properties[\'regexp\'];$Uregexp=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_regexp)&&isset($_regexp->class)&&$_regexp->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x328=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),111,16,\'<image>/05_string.js\');$_RegExp=&$x328[0];list(,$WRegExp,$SRegExp,$URegExp)=$x328;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x329=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),111,16,\'<image>/05_string.js\');$_ReferenceError=&$x329[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x329;$x330=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,16);$x331=$x330($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x331->class)&&$x331->class===\'Error\'&&!isset($x331->properties[\'file\'])&&!isset($x331->properties[\'line\'])&&!isset($x331->properties[\'column\'])){$x331->properties[\'file\']=\'<image>/05_string.js\';$x331->properties[\'line\']=111;$x331->properties[\'column\']=16;$x331->attributes[\'file\']=$x331->attributes[\'line\']=$x331->attributes[\'column\']=0;}throw new JSException($x331,111,16,\'<image>/05_string.js\');}$x326=clone JS::$objectTemplate;unset($x332,$W332,$S332,$U332);$x333=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),111,12,\'<image>/05_string.js\');$x332=&$x333[0];list(,$W332,$S332,$U332)=$x333;$x327=$x332;$x326->prototype=$x327;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x336=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),111,12,\'<image>/05_string.js\');$_TypeError=&$x336[0];list(,$WTypeError,$STypeError,$UTypeError)=$x336;$x337=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x338=$x337($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x338->class)&&$x338->class===\'Error\'&&!isset($x338->properties[\'file\'])&&!isset($x338->properties[\'line\'])&&!isset($x338->properties[\'column\'])){$x338->properties[\'file\']=\'<image>/05_string.js\';$x338->properties[\'line\']=111;$x338->properties[\'column\']=12;$x338->attributes[\'file\']=$x338->attributes[\'line\']=$x338->attributes[\'column\']=0;}throw new JSException($x338,111,12,\'<image>/05_string.js\');}$x334=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x335=$x334($global,$x326,$_RegExp,array($_regexp),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x327=$x335;if(is_object($x327)&&$x327!==JS::$undefined){$x326=$x327;}if($Uregexp){$global->properties[\'regexp\']=$_regexp;$_regexp=&$global->properties[\'regexp\'];}$_regexp=$x326;}unset($x339,$W339,$S339,$U339);$x340=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_regexp,JS::toString(\'global\',$global),114,13,\'<image>/05_string.js\');$x339=&$x340[0];list(,$W339,$S339,$U339)=$x340;if(JS::toBoolean((!JS::toBoolean($x339,$global)),$global)){if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x342=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),115,21,\'<image>/05_string.js\');$_TypeError=&$x342[0];list(,$WTypeError,$STypeError,$UTypeError)=$x342;$x343=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x344=$x343($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x344->class)&&$x344->class===\'Error\'&&!isset($x344->properties[\'file\'])&&!isset($x344->properties[\'line\'])&&!isset($x344->properties[\'column\'])){$x344->properties[\'file\']=\'<image>/05_string.js\';$x344->properties[\'line\']=115;$x344->properties[\'column\']=21;$x344->attributes[\'file\']=$x344->attributes[\'line\']=$x344->attributes[\'column\']=0;}throw new JSException($x344,115,21,\'<image>/05_string.js\');}$x341=JS::toObject($_regexp,$global);unset($x345,$W345,$S345,$U345);$x346=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x341,JS::toString(\'exec\',$global),115,21,\'<image>/05_string.js\');$x345=&$x346[0];list(,$W345,$S345,$U345)=$x346;if(!(is_object($x345)&&isset($x345->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x349=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),115,21,\'<image>/05_string.js\');$_TypeError=&$x349[0];list(,$WTypeError,$STypeError,$UTypeError)=$x349;$x350=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x351=$x350($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x351->class)&&$x351->class===\'Error\'&&!isset($x351->properties[\'file\'])&&!isset($x351->properties[\'line\'])&&!isset($x351->properties[\'column\'])){$x351->properties[\'file\']=\'<image>/05_string.js\';$x351->properties[\'line\']=115;$x351->properties[\'column\']=21;$x351->attributes[\'file\']=$x351->attributes[\'line\']=$x351->attributes[\'column\']=0;}throw new JSException($x351,115,21,\'<image>/05_string.js\');}$x347=$x345->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x348=$x347($global,$x341,$x345,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x348;}$x352=clone JS::$arrayTemplate;$x352->properties[\'length\']=0;$x352->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x352;$scope->properties[\'n\']=JS::$undefined;$_n=&$scope->properties[\'n\'];$Un=FALSE;$_n=0.0;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'currentLastIndex\']=JS::$undefined;$_currentLastIndex=&$scope->properties[\'currentLastIndex\'];$UcurrentLastIndex=FALSE;$_currentLastIndex=JS::$undefined;$x353=0.0;$x354=JS::toString(\'lastIndex\',$global);if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x355=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),120,19,\'<image>/05_string.js\');$_TypeError=&$x355[0];list(,$WTypeError,$STypeError,$UTypeError)=$x355;$x356=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x357=$x356($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x357->class)&&$x357->class===\'Error\'&&!isset($x357->properties[\'file\'])&&!isset($x357->properties[\'line\'])&&!isset($x357->properties[\'column\'])){$x357->properties[\'file\']=\'<image>/05_string.js\';$x357->properties[\'line\']=120;$x357->properties[\'column\']=19;$x357->attributes[\'file\']=$x357->attributes[\'line\']=$x357->attributes[\'column\']=0;}throw new JSException($x357,120,19,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x358,$W358,$S358,$U358);$x359=_1062444eb1665286b15372d6a2622cc9_5($global,$scope,$_regexp,JS::toString($x354,$global),120,19,\'<image>/05_string.js\');$x358=&$x359[0];list(,$W358,$S358,$U358)=$x359;if($U358&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[$x354]=$x358;$x358=&$_regexp->properties[$x354];$_regexp->attributes[$x354]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U358=FALSE;$W358=TRUE;}if(isset($_regexp->class)&&$_regexp->class===\'Array\'){if(isset($_regexp->properties[\'length\'])&&$_regexp->properties[\'length\']!==JS::$undefined){$x361=$_regexp->properties[\'length\'];}else{$x361=0;}}if(isset($S358)){$x362=$S358->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x363=$x362($global,$_regexp,$S358,array($x353),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x360=$x363;}else{if(!$U358){$x360=$x353;if($W358){$x358=$x353;}}else{$x360=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'){if(is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}else if($x354===\'length\'&&is_int($x353)&&$x361>$x353){for($i=$x353;$i<$x361;++$i){unset($_regexp->properties[$i],$_regexp->attributes[$i]);}}}for($x364=0;;++$x364){if($x364===0){$scope->properties[\'previousLastIndex\']=JS::$undefined;$_previousLastIndex=&$scope->properties[\'previousLastIndex\'];$UpreviousLastIndex=FALSE;$_previousLastIndex=0.0;$scope->properties[\'lastMatch\']=JS::$undefined;$_lastMatch=&$scope->properties[\'lastMatch\'];$UlastMatch=FALSE;$_lastMatch=true;}if($x364!==0){$x365=++$_n;}if(!JS::toBoolean($_lastMatch,$global)){break;}if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x367=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),123,22,\'<image>/05_string.js\');$_TypeError=&$x367[0];list(,$WTypeError,$STypeError,$UTypeError)=$x367;$x368=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x369=$x368($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x369->class)&&$x369->class===\'Error\'&&!isset($x369->properties[\'file\'])&&!isset($x369->properties[\'line\'])&&!isset($x369->properties[\'column\'])){$x369->properties[\'file\']=\'<image>/05_string.js\';$x369->properties[\'line\']=123;$x369->properties[\'column\']=22;$x369->attributes[\'file\']=$x369->attributes[\'line\']=$x369->attributes[\'column\']=0;}throw new JSException($x369,123,22,\'<image>/05_string.js\');}$x366=JS::toObject($_regexp,$global);unset($x370,$W370,$S370,$U370);$x371=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x366,JS::toString(\'exec\',$global),123,22,\'<image>/05_string.js\');$x370=&$x371[0];list(,$W370,$S370,$U370)=$x371;if(!(is_object($x370)&&isset($x370->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x374=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),123,22,\'<image>/05_string.js\');$_TypeError=&$x374[0];list(,$WTypeError,$STypeError,$UTypeError)=$x374;$x375=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x376=$x375($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x376->class)&&$x376->class===\'Error\'&&!isset($x376->properties[\'file\'])&&!isset($x376->properties[\'line\'])&&!isset($x376->properties[\'column\'])){$x376->properties[\'file\']=\'<image>/05_string.js\';$x376->properties[\'line\']=123;$x376->properties[\'column\']=22;$x376->attributes[\'file\']=$x376->attributes[\'line\']=$x376->attributes[\'column\']=0;}throw new JSException($x376,123,22,\'<image>/05_string.js\');}$x372=$x370->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x373=$x372($global,$x366,$x370,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x373;$x377=(!JS::toBoolean((!JS::toBoolean($_match,$global)),$global));if($UlastMatch){$global->properties[\'lastMatch\']=$_lastMatch;$_lastMatch=&$global->properties[\'lastMatch\'];}$_lastMatch=$x377;if(JS::toBoolean($_match,$global)){unset($x379,$W379,$S379,$U379);$x380=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_regexp,JS::toString(\'lastIndex\',$global),127,14,\'<image>/05_string.js\');$x379=&$x380[0];list(,$W379,$S379,$U379)=$x380;$x378=(((gettype($x379)===gettype($_previousLastIndex)&&$x379===$_previousLastIndex))||(((is_float($x379)||is_int($x379))&&(is_float($_previousLastIndex)||is_int($_previousLastIndex)))&&$x379==$_previousLastIndex));if(JS::toBoolean($x378,$global)){unset($x383,$W383,$S383,$U383);$x384=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_regexp,JS::toString(\'lastIndex\',$global),128,50,\'<image>/05_string.js\');$x383=&$x384[0];list(,$W383,$S383,$U383)=$x384;$x381=JS::toPrimitive($x383,$global);$x382=JS::toPrimitive(1.0,$global);$x385=(is_string($x381)||is_string($x382)?JS::toString($x381,$global).JS::toString($x382,$global):JS::toNumber($x381,$global)+JS::toNumber($x382,$global));$x386=JS::toString(\'lastIndex\',$global);if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x387=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),128,42,\'<image>/05_string.js\');$_TypeError=&$x387[0];list(,$WTypeError,$STypeError,$UTypeError)=$x387;$x388=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x389=$x388($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x389->class)&&$x389->class===\'Error\'&&!isset($x389->properties[\'file\'])&&!isset($x389->properties[\'line\'])&&!isset($x389->properties[\'column\'])){$x389->properties[\'file\']=\'<image>/05_string.js\';$x389->properties[\'line\']=128;$x389->properties[\'column\']=42;$x389->attributes[\'file\']=$x389->attributes[\'line\']=$x389->attributes[\'column\']=0;}throw new JSException($x389,128,42,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x390,$W390,$S390,$U390);$x391=_1062444eb1665286b15372d6a2622cc9_5($global,$scope,$_regexp,JS::toString($x386,$global),128,42,\'<image>/05_string.js\');$x390=&$x391[0];list(,$W390,$S390,$U390)=$x391;if($U390&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[$x386]=$x390;$x390=&$_regexp->properties[$x386];$_regexp->attributes[$x386]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U390=FALSE;$W390=TRUE;}if(isset($_regexp->class)&&$_regexp->class===\'Array\'){if(isset($_regexp->properties[\'length\'])&&$_regexp->properties[\'length\']!==JS::$undefined){$x393=$_regexp->properties[\'length\'];}else{$x393=0;}}if(isset($S390)){$x394=$S390->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x395=$x394($global,$_regexp,$S390,array($x385),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x392=$x395;}else{if(!$U390){$x392=$x385;if($W390){$x390=$x385;}}else{$x392=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'){if(is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}else if($x386===\'length\'&&is_int($x385)&&$x393>$x385){for($i=$x385;$i<$x393;++$i){unset($_regexp->properties[$i],$_regexp->attributes[$i]);}}}if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x392;}else{unset($x396,$W396,$S396,$U396);$x397=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_regexp,JS::toString(\'lastIndex\',$global),130,31,\'<image>/05_string.js\');$x396=&$x397[0];list(,$W396,$S396,$U396)=$x397;if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x396;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x399=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),133,20,\'<image>/05_string.js\');$_TypeError=&$x399[0];list(,$WTypeError,$STypeError,$UTypeError)=$x399;$x400=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x401=$x400($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x401->class)&&$x401->class===\'Error\'&&!isset($x401->properties[\'file\'])&&!isset($x401->properties[\'line\'])&&!isset($x401->properties[\'column\'])){$x401->properties[\'file\']=\'<image>/05_string.js\';$x401->properties[\'line\']=133;$x401->properties[\'column\']=20;$x401->attributes[\'file\']=$x401->attributes[\'line\']=$x401->attributes[\'column\']=0;}throw new JSException($x401,133,20,\'<image>/05_string.js\');}$x398=JS::toObject($_returnArray,$global);unset($x402,$W402,$S402,$U402);$x403=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x398,JS::toString(\'push\',$global),133,20,\'<image>/05_string.js\');$x402=&$x403[0];list(,$W402,$S402,$U402)=$x403;unset($x404,$W404,$S404,$U404);$x405=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString(0.0,$global),133,26,\'<image>/05_string.js\');$x404=&$x405[0];list(,$W404,$S404,$U404)=$x405;if(!(is_object($x402)&&isset($x402->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x408=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),133,20,\'<image>/05_string.js\');$_TypeError=&$x408[0];list(,$WTypeError,$STypeError,$UTypeError)=$x408;$x409=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x410=$x409($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x410->class)&&$x410->class===\'Error\'&&!isset($x410->properties[\'file\'])&&!isset($x410->properties[\'line\'])&&!isset($x410->properties[\'column\'])){$x410->properties[\'file\']=\'<image>/05_string.js\';$x410->properties[\'line\']=133;$x410->properties[\'column\']=20;$x410->attributes[\'file\']=$x410->attributes[\'line\']=$x410->attributes[\'column\']=0;}throw new JSException($x410,133,20,\'<image>/05_string.js\');}$x406=$x402->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x407=$x406($global,$x398,$x402,array($x404),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}$x411=(((gettype($_n)===gettype(0.0)&&$_n===0.0))||(((is_float($_n)||is_int($_n))&&(is_float(0.0)||is_int(0.0)))&&$_n==0.0));if(JS::toBoolean($x411,$global)){return NULL;}return$_returnArray;return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x547 =& $scope->properties['arguments'];
$x547->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x547->properties[$i] = $args[$i];
$x547->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['_'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$___ =& $scope->properties['_'];
$U__ = FALSE;
$scope->properties['c'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_c =& $scope->properties['c'];
$Uc = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x548 = (((gettype($_c) === gettype('$') && $_c === '$'))|| (((is_float($_c) || is_int($_c)) && (is_float('$') || is_int('$'))) && $_c == '$'));
if (JS::toBoolean($x548, $global)) {

return '$';;
}
else {
$x549 = (((gettype($_c) === gettype('&') && $_c === '&'))|| (((is_float($_c) || is_int($_c)) && (is_float('&') || is_int('&'))) && $_c == '&'));
if (JS::toBoolean($x549, $global)) {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x550 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('match', $global), 172, 13, '<image>/05_string.js');
$_match =& $x550[0]; list(,$Wmatch,$Smatch,$Umatch) = $x550;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x551 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 172, 13, '<image>/05_string.js');
$_ReferenceError =& $x551[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x551;
$x552 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 172, 13);
$x553 = $x552($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x553->class) && $x553->class === 'Error' && !isset($x553->properties['file']) && !isset($x553->properties['line']) && !isset($x553->properties['column'])) {$x553->properties['file'] = '<image>/05_string.js';$x553->properties['line'] = 172;$x553->properties['column'] = 13;$x553->attributes['file'] = $x553->attributes['line'] = $x553->attributes['column'] = 0; }
throw new JSException($x553, 172, 13, '<image>/05_string.js');
}
unset($x554, $W554, $S554, $U554);
$x555 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString(0.0, $global), 172, 18, '<image>/05_string.js');
$x554 =& $x555[0]; list(,$W554,$S554,$U554) = $x555;
return $x554;;
}
else {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x556 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('match', $global), 175, 13, '<image>/05_string.js');
$_match =& $x556[0]; list(,$Wmatch,$Smatch,$Umatch) = $x556;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x557 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 175, 13, '<image>/05_string.js');
$_ReferenceError =& $x557[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x557;
$x558 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 175, 13);
$x559 = $x558($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x559->class) && $x559->class === 'Error' && !isset($x559->properties['file']) && !isset($x559->properties['line']) && !isset($x559->properties['column'])) {$x559->properties['file'] = '<image>/05_string.js';$x559->properties['line'] = 175;$x559->properties['column'] = 13;$x559->attributes['file'] = $x559->attributes['line'] = $x559->attributes['column'] = 0; }
throw new JSException($x559, 175, 13, '<image>/05_string.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x560 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Number', $global), 175, 19, '<image>/05_string.js');
$_Number =& $x560[0]; list(,$WNumber,$SNumber,$UNumber) = $x560;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x561 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 175, 19, '<image>/05_string.js');
$_ReferenceError =& $x561[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x561;
$x562 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 175, 19);
$x563 = $x562($global, $global, $_ReferenceError, array('Number is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x563->class) && $x563->class === 'Error' && !isset($x563->properties['file']) && !isset($x563->properties['line']) && !isset($x563->properties['column'])) {$x563->properties['file'] = '<image>/05_string.js';$x563->properties['line'] = 175;$x563->properties['column'] = 19;$x563->attributes['file'] = $x563->attributes['line'] = $x563->attributes['column'] = 0; }
throw new JSException($x563, 175, 19, '<image>/05_string.js');
}
if (!(is_object($_Number) && isset($_Number->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x566 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 175, 25, '<image>/05_string.js');
$_TypeError =& $x566[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x566;
$x567 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 175, 25);
$x568 = $x567($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x568->class) && $x568->class === 'Error' && !isset($x568->properties['file']) && !isset($x568->properties['line']) && !isset($x568->properties['column'])) {$x568->properties['file'] = '<image>/05_string.js';$x568->properties['line'] = 175;$x568->properties['column'] = 25;$x568->attributes['file'] = $x568->attributes['line'] = $x568->attributes['column'] = 0; }
throw new JSException($x568, 175, 25, '<image>/05_string.js');
}
$x564 = $_Number->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 175, 25);
$x565 = $x564($global, $global, $_Number, array($_c), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x569, $W569, $S569, $U569);
$x570 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString($x565, $global), 175, 18, '<image>/05_string.js');
$x569 =& $x570[0]; list(,$W569,$S569,$U569) = $x570;
return $x569;;
};
}
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x547=&$scope->properties[\'arguments\'];$x547->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x547->properties[$i]=$args[$i];$x547->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'_\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$___=&$scope->properties[\'_\'];$U__=FALSE;$scope->properties[\'c\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$x548=(((gettype($_c)===gettype(\'$\')&&$_c===\'$\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'$\')||is_int(\'$\')))&&$_c==\'$\'));if(JS::toBoolean($x548,$global)){return\'$\';}else{$x549=(((gettype($_c)===gettype(\'&\')&&$_c===\'&\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'&\')||is_int(\'&\')))&&$_c==\'&\'));if(JS::toBoolean($x549,$global)){unset($_match,$Wmatch,$Smatch,$Umatch);$x550=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'match\',$global),172,13,\'<image>/05_string.js\');$_match=&$x550[0];list(,$Wmatch,$Smatch,$Umatch)=$x550;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x551=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),172,13,\'<image>/05_string.js\');$_ReferenceError=&$x551[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x551;$x552=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',172,13);$x553=$x552($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x553->class)&&$x553->class===\'Error\'&&!isset($x553->properties[\'file\'])&&!isset($x553->properties[\'line\'])&&!isset($x553->properties[\'column\'])){$x553->properties[\'file\']=\'<image>/05_string.js\';$x553->properties[\'line\']=172;$x553->properties[\'column\']=13;$x553->attributes[\'file\']=$x553->attributes[\'line\']=$x553->attributes[\'column\']=0;}throw new JSException($x553,172,13,\'<image>/05_string.js\');}unset($x554,$W554,$S554,$U554);$x555=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString(0.0,$global),172,18,\'<image>/05_string.js\');$x554=&$x555[0];list(,$W554,$S554,$U554)=$x555;return$x554;}else{unset($_match,$Wmatch,$Smatch,$Umatch);$x556=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'match\',$global),175,13,\'<image>/05_string.js\');$_match=&$x556[0];list(,$Wmatch,$Smatch,$Umatch)=$x556;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x557=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),175,13,\'<image>/05_string.js\');$_ReferenceError=&$x557[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x557;$x558=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',175,13);$x559=$x558($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x559->class)&&$x559->class===\'Error\'&&!isset($x559->properties[\'file\'])&&!isset($x559->properties[\'line\'])&&!isset($x559->properties[\'column\'])){$x559->properties[\'file\']=\'<image>/05_string.js\';$x559->properties[\'line\']=175;$x559->properties[\'column\']=13;$x559->attributes[\'file\']=$x559->attributes[\'line\']=$x559->attributes[\'column\']=0;}throw new JSException($x559,175,13,\'<image>/05_string.js\');}unset($_Number,$WNumber,$SNumber,$UNumber);$x560=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'Number\',$global),175,19,\'<image>/05_string.js\');$_Number=&$x560[0];list(,$WNumber,$SNumber,$UNumber)=$x560;if($UNumber){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x561=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),175,19,\'<image>/05_string.js\');$_ReferenceError=&$x561[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x561;$x562=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',175,19);$x563=$x562($global,$global,$_ReferenceError,array(\'Number is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x563->class)&&$x563->class===\'Error\'&&!isset($x563->properties[\'file\'])&&!isset($x563->properties[\'line\'])&&!isset($x563->properties[\'column\'])){$x563->properties[\'file\']=\'<image>/05_string.js\';$x563->properties[\'line\']=175;$x563->properties[\'column\']=19;$x563->attributes[\'file\']=$x563->attributes[\'line\']=$x563->attributes[\'column\']=0;}throw new JSException($x563,175,19,\'<image>/05_string.js\');}if(!(is_object($_Number)&&isset($_Number->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x566=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),175,25,\'<image>/05_string.js\');$_TypeError=&$x566[0];list(,$WTypeError,$STypeError,$UTypeError)=$x566;$x567=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',175,25);$x568=$x567($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x568->class)&&$x568->class===\'Error\'&&!isset($x568->properties[\'file\'])&&!isset($x568->properties[\'line\'])&&!isset($x568->properties[\'column\'])){$x568->properties[\'file\']=\'<image>/05_string.js\';$x568->properties[\'line\']=175;$x568->properties[\'column\']=25;$x568->attributes[\'file\']=$x568->attributes[\'line\']=$x568->attributes[\'column\']=0;}throw new JSException($x568,175,25,\'<image>/05_string.js\');}$x564=$_Number->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',175,25);$x565=$x564($global,$global,$_Number,array($_c),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x569,$W569,$S569,$U569);$x570=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString($x565,$global),175,18,\'<image>/05_string.js\');$x569=&$x570[0];list(,$W569,$S569,$U569)=$x570;return$x569;}}return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x426 =& $scope->properties['arguments'];
$x426->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x426->properties[$i] = $args[$i];
$x426->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['replace'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_replace =& $scope->properties['replace'];
$Ureplace = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!is_object($_search) || !isset($_search->class) ||$_search->class !== 'RegExp', $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x429 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('RegExp', $global), 146, 16, '<image>/05_string.js');
$_RegExp =& $x429[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x429;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x430 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 146, 16, '<image>/05_string.js');
$_ReferenceError =& $x430[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x430;
$x431 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 16);
$x432 = $x431($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x432->class) && $x432->class === 'Error' && !isset($x432->properties['file']) && !isset($x432->properties['line']) && !isset($x432->properties['column'])) {$x432->properties['file'] = '<image>/05_string.js';$x432->properties['line'] = 146;$x432->properties['column'] = 16;$x432->attributes['file'] = $x432->attributes['line'] = $x432->attributes['column'] = 0; }
throw new JSException($x432, 146, 16, '<image>/05_string.js');
}
$x427 = clone JS::$objectTemplate;
unset($x433, $W433, $S433, $U433);
$x434 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 146, 12, '<image>/05_string.js');
$x433 =& $x434[0]; list(,$W433,$S433,$U433) = $x434;
$x428 = $x433;
$x427->prototype = $x428;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x437 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 146, 12, '<image>/05_string.js');
$_TypeError =& $x437[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x437;
$x438 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 12);
$x439 = $x438($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x439->class) && $x439->class === 'Error' && !isset($x439->properties['file']) && !isset($x439->properties['line']) && !isset($x439->properties['column'])) {$x439->properties['file'] = '<image>/05_string.js';$x439->properties['line'] = 146;$x439->properties['column'] = 12;$x439->attributes['file'] = $x439->attributes['line'] = $x439->attributes['column'] = 0; }
throw new JSException($x439, 146, 12, '<image>/05_string.js');
}
$x435 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 12);
$x436 = $x435($global, $x427, $_RegExp, array(preg_quote(JS::toString($_search, $global), '/')), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x428 = $x436;
if (is_object($x428) && $x428 !== JS::$undefined) { $x427 = $x428; }
if ($Usearch) {$global->properties['search'] = $_search; $_search =& $global->properties['search']; }
$_search = $x427;;
};
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = JS::$undefined;
$scope->properties['index'] = JS::$undefined; $_index =& $scope->properties['index'];
$Uindex = FALSE;
$_index = JS::$undefined;
$scope->properties['lastIndex'] = JS::$undefined; $_lastIndex =& $scope->properties['lastIndex'];
$UlastIndex = FALSE;
$_lastIndex = 0.0;
$scope->properties['thisString'] = JS::$undefined; $_thisString =& $scope->properties['thisString'];
$UthisString = FALSE;
$_thisString = $leThis->value;
$scope->properties['newString'] = JS::$undefined; $_newString =& $scope->properties['newString'];
$UnewString = FALSE;
$_newString = '';
$scope->properties['s'] = JS::$undefined; $_s =& $scope->properties['s'];
$Us = FALSE;
$_s = JS::$undefined;
for (;;) {
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x442 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 152, 29, '<image>/05_string.js');
$_TypeError =& $x442[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x442;
$x443 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x444 = $x443($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x444->class) && $x444->class === 'Error' && !isset($x444->properties['file']) && !isset($x444->properties['line']) && !isset($x444->properties['column'])) {$x444->properties['file'] = '<image>/05_string.js';$x444->properties['line'] = 152;$x444->properties['column'] = 29;$x444->attributes['file'] = $x444->attributes['line'] = $x444->attributes['column'] = 0; }
throw new JSException($x444, 152, 29, '<image>/05_string.js');
}
$x441 = JS::toObject($_search, $global);
unset($x445, $W445, $S445, $U445);
$x446 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x441, JS::toString('exec', $global), 152, 29, '<image>/05_string.js');
$x445 =& $x446[0]; list(,$W445,$S445,$U445) = $x446;
if (!(is_object($x445) && isset($x445->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x449 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 152, 29, '<image>/05_string.js');
$_TypeError =& $x449[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x449;
$x450 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x451 = $x450($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x451->class) && $x451->class === 'Error' && !isset($x451->properties['file']) && !isset($x451->properties['line']) && !isset($x451->properties['column'])) {$x451->properties['file'] = '<image>/05_string.js';$x451->properties['line'] = 152;$x451->properties['column'] = 29;$x451->attributes['file'] = $x451->attributes['line'] = $x451->attributes['column'] = 0; }
throw new JSException($x451, 152, 29, '<image>/05_string.js');
}
$x447 = $x445->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x448 = $x447($global, $x441, $x445, array($_thisString), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x448;
$x440 = !(((gettype($_match) === gettype(NULL) && $_match === NULL))|| (((is_float($_match) || is_int($_match)) && (is_float(NULL) || is_int(NULL))) && $_match == NULL));
if (!JS::toBoolean($x440, $global)) { break; }

unset($x452, $W452, $S452, $U452);
$x453 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString('index', $global), 153, 25, '<image>/05_string.js');
$x452 =& $x453[0]; list(,$W452,$S452,$U452) = $x453;
$scope->properties['matchIndex'] = JS::$undefined; $_matchIndex =& $scope->properties['matchIndex'];
$UmatchIndex = FALSE;
$_matchIndex = $x452;
$x454 = mb_strlen(mb_strcut($_thisString, 0,$_matchIndex));
if ($Uindex) {$global->properties['index'] = $_index; $_index =& $global->properties['index']; }
$_index = $x454;
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x456 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 155, 40, '<image>/05_string.js');
$_TypeError =& $x456[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x456;
$x457 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 155, 40);
$x458 = $x457($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x458->class) && $x458->class === 'Error' && !isset($x458->properties['file']) && !isset($x458->properties['line']) && !isset($x458->properties['column'])) {$x458->properties['file'] = '<image>/05_string.js';$x458->properties['line'] = 155;$x458->properties['column'] = 40;$x458->attributes['file'] = $x458->attributes['line'] = $x458->attributes['column'] = 0; }
throw new JSException($x458, 155, 40, '<image>/05_string.js');
}
$x455 = JS::toObject($_thisString, $global);
unset($x459, $W459, $S459, $U459);
$x460 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x455, JS::toString('substring', $global), 155, 40, '<image>/05_string.js');
$x459 =& $x460[0]; list(,$W459,$S459,$U459) = $x460;
if (!(is_object($x459) && isset($x459->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x463 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 155, 40, '<image>/05_string.js');
$_TypeError =& $x463[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x463;
$x464 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 155, 40);
$x465 = $x464($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x465->class) && $x465->class === 'Error' && !isset($x465->properties['file']) && !isset($x465->properties['line']) && !isset($x465->properties['column'])) {$x465->properties['file'] = '<image>/05_string.js';$x465->properties['line'] = 155;$x465->properties['column'] = 40;$x465->attributes['file'] = $x465->attributes['line'] = $x465->attributes['column'] = 0; }
throw new JSException($x465, 155, 40, '<image>/05_string.js');
}
$x461 = $x459->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 155, 40);
$x462 = $x461($global, $x455, $x459, array($_lastIndex, $_index), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$_s = $x462;
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x466 = JS::toPrimitive($_newString, $global);
$x467 = JS::toPrimitive($_s, $global);
$_newString = (is_string($x466) || is_string($x467) ? JS::toString($x466, $global) . JS::toString($x467, $global) : JS::toNumber($x466, $global) + JS::toNumber($x467, $global));
unset($x470, $W470, $S470, $U470);
$x471 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString(0.0, $global), 156, 28, '<image>/05_string.js');
$x470 =& $x471[0]; list(,$W470,$S470,$U470) = $x471;
unset($x472, $W472, $S472, $U472);
$x473 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x470, JS::toString('length', $global), 156, 31, '<image>/05_string.js');
$x472 =& $x473[0]; list(,$W472,$S472,$U472) = $x473;
$x468 = JS::toPrimitive($_index, $global);
$x469 = JS::toPrimitive($x472, $global);
$x474 = (is_string($x468) || is_string($x469) ? JS::toString($x468, $global) . JS::toString($x469, $global) : JS::toNumber($x468, $global) + JS::toNumber($x469, $global));
if ($UlastIndex) {$global->properties['lastIndex'] = $_lastIndex; $_lastIndex =& $global->properties['lastIndex']; }
$_lastIndex = $x474;
$x476 = $_replace;
$x476 = ($x476 === JS::$undefined ? 'undefined' : (is_int($x476) || is_float($x476) ? 'number' : (is_bool($x476) ? 'boolean' : (is_string($x476) ? 'string' : (is_object($x476) && isset($x476->call) ? 'function' : 'object')))));
$x475 = (((gettype($x476) === gettype('function') && $x476 === 'function'))|| (((is_float($x476) || is_int($x476)) && (is_float('function') || is_int('function'))) && $x476 == 'function'));
if (JS::toBoolean($x475, $global)) {
if ($_match === JS::$undefined || $_match === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x478 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 159, 14, '<image>/05_string.js');
$_TypeError =& $x478[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x478;
$x479 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x480 = $x479($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x480->class) && $x480->class === 'Error' && !isset($x480->properties['file']) && !isset($x480->properties['line']) && !isset($x480->properties['column'])) {$x480->properties['file'] = '<image>/05_string.js';$x480->properties['line'] = 159;$x480->properties['column'] = 14;$x480->attributes['file'] = $x480->attributes['line'] = $x480->attributes['column'] = 0; }
throw new JSException($x480, 159, 14, '<image>/05_string.js');
}
$x477 = JS::toObject($_match, $global);
unset($x481, $W481, $S481, $U481);
$x482 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x477, JS::toString('push', $global), 159, 14, '<image>/05_string.js');
$x481 =& $x482[0]; list(,$W481,$S481,$U481) = $x482;
unset($x483, $W483, $S483, $U483);
$x484 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString('index', $global), 159, 20, '<image>/05_string.js');
$x483 =& $x484[0]; list(,$W483,$S483,$U483) = $x484;
if (!(is_object($x481) && isset($x481->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x487 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 159, 14, '<image>/05_string.js');
$_TypeError =& $x487[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x487;
$x488 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x489 = $x488($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x489->class) && $x489->class === 'Error' && !isset($x489->properties['file']) && !isset($x489->properties['line']) && !isset($x489->properties['column'])) {$x489->properties['file'] = '<image>/05_string.js';$x489->properties['line'] = 159;$x489->properties['column'] = 14;$x489->attributes['file'] = $x489->attributes['line'] = $x489->attributes['column'] = 0; }
throw new JSException($x489, 159, 14, '<image>/05_string.js');
}
$x485 = $x481->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x486 = $x485($global, $x477, $x481, array($x483), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($_match === JS::$undefined || $_match === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x491 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 160, 14, '<image>/05_string.js');
$_TypeError =& $x491[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x491;
$x492 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 160, 14);
$x493 = $x492($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x493->class) && $x493->class === 'Error' && !isset($x493->properties['file']) && !isset($x493->properties['line']) && !isset($x493->properties['column'])) {$x493->properties['file'] = '<image>/05_string.js';$x493->properties['line'] = 160;$x493->properties['column'] = 14;$x493->attributes['file'] = $x493->attributes['line'] = $x493->attributes['column'] = 0; }
throw new JSException($x493, 160, 14, '<image>/05_string.js');
}
$x490 = JS::toObject($_match, $global);
unset($x494, $W494, $S494, $U494);
$x495 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x490, JS::toString('push', $global), 160, 14, '<image>/05_string.js');
$x494 =& $x495[0]; list(,$W494,$S494,$U494) = $x495;
unset($x496, $W496, $S496, $U496);
$x497 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString('input', $global), 160, 20, '<image>/05_string.js');
$x496 =& $x497[0]; list(,$W496,$S496,$U496) = $x497;
if (!(is_object($x494) && isset($x494->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x500 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 160, 14, '<image>/05_string.js');
$_TypeError =& $x500[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x500;
$x501 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 160, 14);
$x502 = $x501($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x502->class) && $x502->class === 'Error' && !isset($x502->properties['file']) && !isset($x502->properties['line']) && !isset($x502->properties['column'])) {$x502->properties['file'] = '<image>/05_string.js';$x502->properties['line'] = 160;$x502->properties['column'] = 14;$x502->attributes['file'] = $x502->attributes['line'] = $x502->attributes['column'] = 0; }
throw new JSException($x502, 160, 14, '<image>/05_string.js');
}
$x498 = $x494->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 160, 14);
$x499 = $x498($global, $x490, $x494, array($x496), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!array_key_exists('index', $_match->attributes)) { unset($_match->properties['index']); $x503 = TRUE; }
else if ($_match->attributes['index'] & JS::CONFIGURABLE) { unset($_match->properties['index'], $_match->attributes['index'], $_match->getters['index'], $_match->setters['index']); $x503 = TRUE; }
else { $x503 = FALSE; };
if (!array_key_exists('input', $_match->attributes)) { unset($_match->properties['input']); $x504 = TRUE; }
else if ($_match->attributes['input'] & JS::CONFIGURABLE) { unset($_match->properties['input'], $_match->attributes['input'], $_match->getters['input'], $_match->setters['input']); $x504 = TRUE; }
else { $x504 = FALSE; };
unset($_String, $WString, $SString, $UString);
$x505 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('String', $global), 164, 21, '<image>/05_string.js');
$_String =& $x505[0]; list(,$WString,$SString,$UString) = $x505;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x506 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 164, 21, '<image>/05_string.js');
$_ReferenceError =& $x506[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x506;
$x507 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 164, 21);
$x508 = $x507($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x508->class) && $x508->class === 'Error' && !isset($x508->properties['file']) && !isset($x508->properties['line']) && !isset($x508->properties['column'])) {$x508->properties['file'] = '<image>/05_string.js';$x508->properties['line'] = 164;$x508->properties['column'] = 21;$x508->attributes['file'] = $x508->attributes['line'] = $x508->attributes['column'] = 0; }
throw new JSException($x508, 164, 21, '<image>/05_string.js');
}
if ($_replace === JS::$undefined || $_replace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x510 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 164, 41, '<image>/05_string.js');
$_TypeError =& $x510[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x510;
$x511 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 164, 41);
$x512 = $x511($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x512->class) && $x512->class === 'Error' && !isset($x512->properties['file']) && !isset($x512->properties['line']) && !isset($x512->properties['column'])) {$x512->properties['file'] = '<image>/05_string.js';$x512->properties['line'] = 164;$x512->properties['column'] = 41;$x512->attributes['file'] = $x512->attributes['line'] = $x512->attributes['column'] = 0; }
throw new JSException($x512, 164, 41, '<image>/05_string.js');
}
$x509 = JS::toObject($_replace, $global);
unset($x513, $W513, $S513, $U513);
$x514 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x509, JS::toString('apply', $global), 164, 41, '<image>/05_string.js');
$x513 =& $x514[0]; list(,$W513,$S513,$U513) = $x514;
if (!(is_object($x513) && isset($x513->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x517 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 164, 41, '<image>/05_string.js');
$_TypeError =& $x517[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x517;
$x518 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 164, 41);
$x519 = $x518($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x519->class) && $x519->class === 'Error' && !isset($x519->properties['file']) && !isset($x519->properties['line']) && !isset($x519->properties['column'])) {$x519->properties['file'] = '<image>/05_string.js';$x519->properties['line'] = 164;$x519->properties['column'] = 41;$x519->attributes['file'] = $x519->attributes['line'] = $x519->attributes['column'] = 0; }
throw new JSException($x519, 164, 41, '<image>/05_string.js');
}
$x515 = $x513->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 164, 41);
$x516 = $x515($global, $x509, $x513, array(JS::$undefined, $_match), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x522 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 164, 27, '<image>/05_string.js');
$_TypeError =& $x522[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x522;
$x523 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 164, 27);
$x524 = $x523($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x524->class) && $x524->class === 'Error' && !isset($x524->properties['file']) && !isset($x524->properties['line']) && !isset($x524->properties['column'])) {$x524->properties['file'] = '<image>/05_string.js';$x524->properties['line'] = 164;$x524->properties['column'] = 27;$x524->attributes['file'] = $x524->attributes['line'] = $x524->attributes['column'] = 0; }
throw new JSException($x524, 164, 27, '<image>/05_string.js');
}
$x520 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 164, 27);
$x521 = $x520($global, $global, $_String, array($x516), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$_s = $x521;
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x525 = JS::toPrimitive($_newString, $global);
$x526 = JS::toPrimitive($_s, $global);
$_newString = (is_string($x525) || is_string($x526) ? JS::toString($x525, $global) . JS::toString($x526, $global) : JS::toNumber($x525, $global) + JS::toNumber($x526, $global));;
}
else {
if ($_replace === JS::$undefined || $_replace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x528 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 32, '<image>/05_string.js');
$_TypeError =& $x528[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x528;
$x529 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 167, 32);
$x530 = $x529($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x530->class) && $x530->class === 'Error' && !isset($x530->properties['file']) && !isset($x530->properties['line']) && !isset($x530->properties['column'])) {$x530->properties['file'] = '<image>/05_string.js';$x530->properties['line'] = 167;$x530->properties['column'] = 32;$x530->attributes['file'] = $x530->attributes['line'] = $x530->attributes['column'] = 0; }
throw new JSException($x530, 167, 32, '<image>/05_string.js');
}
$x527 = JS::toObject($_replace, $global);
unset($x531, $W531, $S531, $U531);
$x532 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x527, JS::toString('replace', $global), 167, 32, '<image>/05_string.js');
$x531 =& $x532[0]; list(,$W531,$S531,$U531) = $x532;
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x535 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('RegExp', $global), 167, 33, '<image>/05_string.js');
$_RegExp =& $x535[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x535;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x536 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 167, 33, '<image>/05_string.js');
$_ReferenceError =& $x536[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x536;
$x537 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 167, 33);
$x538 = $x537($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x538->class) && $x538->class === 'Error' && !isset($x538->properties['file']) && !isset($x538->properties['line']) && !isset($x538->properties['column'])) {$x538->properties['file'] = '<image>/05_string.js';$x538->properties['line'] = 167;$x538->properties['column'] = 33;$x538->attributes['file'] = $x538->attributes['line'] = $x538->attributes['column'] = 0; }
throw new JSException($x538, 167, 33, '<image>/05_string.js');
}
$x533 = clone JS::$objectTemplate;
unset($x539, $W539, $S539, $U539);
$x540 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 167, 33, '<image>/05_string.js');
$x539 =& $x540[0]; list(,$W539,$S539,$U539) = $x540;
$x534 = $x539;
$x533->prototype = $x534;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x543 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 33, '<image>/05_string.js');
$_TypeError =& $x543[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x543;
$x544 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 167, 33);
$x545 = $x544($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x545->class) && $x545->class === 'Error' && !isset($x545->properties['file']) && !isset($x545->properties['line']) && !isset($x545->properties['column'])) {$x545->properties['file'] = '<image>/05_string.js';$x545->properties['line'] = 167;$x545->properties['column'] = 33;$x545->attributes['file'] = $x545->attributes['line'] = $x545->attributes['column'] = 0; }
throw new JSException($x545, 167, 33, '<image>/05_string.js');
}
$x541 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 167, 33);
$x542 = $x541($global, $x533, $_RegExp, array('\\$([$&]|[0-9]|[0-9][0-9])', 'g'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x534 = $x542;
if (is_object($x534) && $x534 !== JS::$undefined) { $x533 = $x534; }
$x571 = clone JS::$functionTemplate; $x571->call = '_1062444eb1665286b15372d6a2622cc9_15'; $x571->parameters = array (
  0 => '_',
  1 => 'c',
); $x571->scope = $scope; $x571->properties['prototype'] = clone JS::$objectTemplate; $x571->attributes['prototype'] = JS::WRITABLE; $x571->properties['prototype']->properties['constructor'] = $x571; $x571->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x571->properties['length'] = 2; $x571->attributes['length'] = 0;
if (!(is_object($x531) && isset($x531->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x574 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 32, '<image>/05_string.js');
$_TypeError =& $x574[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x574;
$x575 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 167, 32);
$x576 = $x575($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x576->class) && $x576->class === 'Error' && !isset($x576->properties['file']) && !isset($x576->properties['line']) && !isset($x576->properties['column'])) {$x576->properties['file'] = '<image>/05_string.js';$x576->properties['line'] = 167;$x576->properties['column'] = 32;$x576->attributes['file'] = $x576->attributes['line'] = $x576->attributes['column'] = 0; }
throw new JSException($x576, 167, 32, '<image>/05_string.js');
}
$x572 = $x531->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 167, 32);
$x573 = $x572($global, $x527, $x531, array($x533, $x571), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x577 = JS::toPrimitive($_newString, $global);
$x578 = JS::toPrimitive($x573, $global);
$_newString = (is_string($x577) || is_string($x578) ? JS::toString($x577, $global) . JS::toString($x578, $global) : JS::toNumber($x577, $global) + JS::toNumber($x578, $global));;
};
unset($x579, $W579, $S579, $U579);
$x580 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_search, JS::toString('global', $global), 180, 14, '<image>/05_string.js');
$x579 =& $x580[0]; list(,$W579,$S579,$U579) = $x580;
if (JS::toBoolean((!JS::toBoolean($x579, $global)), $global)) {
break;;
};;
};
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x582 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 185, 35, '<image>/05_string.js');
$_TypeError =& $x582[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x582;
$x583 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 185, 35);
$x584 = $x583($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x584->class) && $x584->class === 'Error' && !isset($x584->properties['file']) && !isset($x584->properties['line']) && !isset($x584->properties['column'])) {$x584->properties['file'] = '<image>/05_string.js';$x584->properties['line'] = 185;$x584->properties['column'] = 35;$x584->attributes['file'] = $x584->attributes['line'] = $x584->attributes['column'] = 0; }
throw new JSException($x584, 185, 35, '<image>/05_string.js');
}
$x581 = JS::toObject($_thisString, $global);
unset($x585, $W585, $S585, $U585);
$x586 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x581, JS::toString('substring', $global), 185, 35, '<image>/05_string.js');
$x585 =& $x586[0]; list(,$W585,$S585,$U585) = $x586;
unset($x587, $W587, $S587, $U587);
$x588 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_thisString, JS::toString('length', $global), 185, 57, '<image>/05_string.js');
$x587 =& $x588[0]; list(,$W587,$S587,$U587) = $x588;
if (!(is_object($x585) && isset($x585->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x591 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 185, 35, '<image>/05_string.js');
$_TypeError =& $x591[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x591;
$x592 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 185, 35);
$x593 = $x592($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x593->class) && $x593->class === 'Error' && !isset($x593->properties['file']) && !isset($x593->properties['line']) && !isset($x593->properties['column'])) {$x593->properties['file'] = '<image>/05_string.js';$x593->properties['line'] = 185;$x593->properties['column'] = 35;$x593->attributes['file'] = $x593->attributes['line'] = $x593->attributes['column'] = 0; }
throw new JSException($x593, 185, 35, '<image>/05_string.js');
}
$x589 = $x585->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 185, 35);
$x590 = $x589($global, $x581, $x585, array($_lastIndex, $x587), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x594 = JS::toPrimitive($_newString, $global);
$x595 = JS::toPrimitive($x590, $global);
$_newString = (is_string($x594) || is_string($x595) ? JS::toString($x594, $global) . JS::toString($x595, $global) : JS::toNumber($x594, $global) + JS::toNumber($x595, $global));
return $_newString;
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x426=&$scope->properties[\'arguments\'];$x426->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x426->properties[$i]=$args[$i];$x426->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'replace\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_replace=&$scope->properties[\'replace\'];$Ureplace=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!is_object($_search)||!isset($_search->class)||$_search->class!==\'RegExp\',$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x429=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),146,16,\'<image>/05_string.js\');$_RegExp=&$x429[0];list(,$WRegExp,$SRegExp,$URegExp)=$x429;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x430=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),146,16,\'<image>/05_string.js\');$_ReferenceError=&$x430[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x430;$x431=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,16);$x432=$x431($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x432->class)&&$x432->class===\'Error\'&&!isset($x432->properties[\'file\'])&&!isset($x432->properties[\'line\'])&&!isset($x432->properties[\'column\'])){$x432->properties[\'file\']=\'<image>/05_string.js\';$x432->properties[\'line\']=146;$x432->properties[\'column\']=16;$x432->attributes[\'file\']=$x432->attributes[\'line\']=$x432->attributes[\'column\']=0;}throw new JSException($x432,146,16,\'<image>/05_string.js\');}$x427=clone JS::$objectTemplate;unset($x433,$W433,$S433,$U433);$x434=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),146,12,\'<image>/05_string.js\');$x433=&$x434[0];list(,$W433,$S433,$U433)=$x434;$x428=$x433;$x427->prototype=$x428;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x437=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),146,12,\'<image>/05_string.js\');$_TypeError=&$x437[0];list(,$WTypeError,$STypeError,$UTypeError)=$x437;$x438=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x439=$x438($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x439->class)&&$x439->class===\'Error\'&&!isset($x439->properties[\'file\'])&&!isset($x439->properties[\'line\'])&&!isset($x439->properties[\'column\'])){$x439->properties[\'file\']=\'<image>/05_string.js\';$x439->properties[\'line\']=146;$x439->properties[\'column\']=12;$x439->attributes[\'file\']=$x439->attributes[\'line\']=$x439->attributes[\'column\']=0;}throw new JSException($x439,146,12,\'<image>/05_string.js\');}$x435=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x436=$x435($global,$x427,$_RegExp,array(preg_quote(JS::toString($_search,$global),\'/\')),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x428=$x436;if(is_object($x428)&&$x428!==JS::$undefined){$x427=$x428;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x427;}$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0.0;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;$scope->properties[\'newString\']=JS::$undefined;$_newString=&$scope->properties[\'newString\'];$UnewString=FALSE;$_newString=\'\';$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=JS::$undefined;for(;;){if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x442=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),152,29,\'<image>/05_string.js\');$_TypeError=&$x442[0];list(,$WTypeError,$STypeError,$UTypeError)=$x442;$x443=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x444=$x443($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x444->class)&&$x444->class===\'Error\'&&!isset($x444->properties[\'file\'])&&!isset($x444->properties[\'line\'])&&!isset($x444->properties[\'column\'])){$x444->properties[\'file\']=\'<image>/05_string.js\';$x444->properties[\'line\']=152;$x444->properties[\'column\']=29;$x444->attributes[\'file\']=$x444->attributes[\'line\']=$x444->attributes[\'column\']=0;}throw new JSException($x444,152,29,\'<image>/05_string.js\');}$x441=JS::toObject($_search,$global);unset($x445,$W445,$S445,$U445);$x446=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x441,JS::toString(\'exec\',$global),152,29,\'<image>/05_string.js\');$x445=&$x446[0];list(,$W445,$S445,$U445)=$x446;if(!(is_object($x445)&&isset($x445->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x449=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),152,29,\'<image>/05_string.js\');$_TypeError=&$x449[0];list(,$WTypeError,$STypeError,$UTypeError)=$x449;$x450=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x451=$x450($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x451->class)&&$x451->class===\'Error\'&&!isset($x451->properties[\'file\'])&&!isset($x451->properties[\'line\'])&&!isset($x451->properties[\'column\'])){$x451->properties[\'file\']=\'<image>/05_string.js\';$x451->properties[\'line\']=152;$x451->properties[\'column\']=29;$x451->attributes[\'file\']=$x451->attributes[\'line\']=$x451->attributes[\'column\']=0;}throw new JSException($x451,152,29,\'<image>/05_string.js\');}$x447=$x445->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x448=$x447($global,$x441,$x445,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x448;$x440=!(((gettype($_match)===gettype(NULL)&&$_match===NULL))||(((is_float($_match)||is_int($_match))&&(is_float(NULL)||is_int(NULL)))&&$_match==NULL));if(!JS::toBoolean($x440,$global)){break;}unset($x452,$W452,$S452,$U452);$x453=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString(\'index\',$global),153,25,\'<image>/05_string.js\');$x452=&$x453[0];list(,$W452,$S452,$U452)=$x453;$scope->properties[\'matchIndex\']=JS::$undefined;$_matchIndex=&$scope->properties[\'matchIndex\'];$UmatchIndex=FALSE;$_matchIndex=$x452;$x454=mb_strlen(mb_strcut($_thisString,0,$_matchIndex));if($Uindex){$global->properties[\'index\']=$_index;$_index=&$global->properties[\'index\'];}$_index=$x454;if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x456=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),155,40,\'<image>/05_string.js\');$_TypeError=&$x456[0];list(,$WTypeError,$STypeError,$UTypeError)=$x456;$x457=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',155,40);$x458=$x457($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x458->class)&&$x458->class===\'Error\'&&!isset($x458->properties[\'file\'])&&!isset($x458->properties[\'line\'])&&!isset($x458->properties[\'column\'])){$x458->properties[\'file\']=\'<image>/05_string.js\';$x458->properties[\'line\']=155;$x458->properties[\'column\']=40;$x458->attributes[\'file\']=$x458->attributes[\'line\']=$x458->attributes[\'column\']=0;}throw new JSException($x458,155,40,\'<image>/05_string.js\');}$x455=JS::toObject($_thisString,$global);unset($x459,$W459,$S459,$U459);$x460=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x455,JS::toString(\'substring\',$global),155,40,\'<image>/05_string.js\');$x459=&$x460[0];list(,$W459,$S459,$U459)=$x460;if(!(is_object($x459)&&isset($x459->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x463=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),155,40,\'<image>/05_string.js\');$_TypeError=&$x463[0];list(,$WTypeError,$STypeError,$UTypeError)=$x463;$x464=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',155,40);$x465=$x464($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x465->class)&&$x465->class===\'Error\'&&!isset($x465->properties[\'file\'])&&!isset($x465->properties[\'line\'])&&!isset($x465->properties[\'column\'])){$x465->properties[\'file\']=\'<image>/05_string.js\';$x465->properties[\'line\']=155;$x465->properties[\'column\']=40;$x465->attributes[\'file\']=$x465->attributes[\'line\']=$x465->attributes[\'column\']=0;}throw new JSException($x465,155,40,\'<image>/05_string.js\');}$x461=$x459->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',155,40);$x462=$x461($global,$x455,$x459,array($_lastIndex,$_index),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x462;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x466=JS::toPrimitive($_newString,$global);$x467=JS::toPrimitive($_s,$global);$_newString=(is_string($x466)||is_string($x467)?JS::toString($x466,$global).JS::toString($x467,$global):JS::toNumber($x466,$global)+JS::toNumber($x467,$global));unset($x470,$W470,$S470,$U470);$x471=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString(0.0,$global),156,28,\'<image>/05_string.js\');$x470=&$x471[0];list(,$W470,$S470,$U470)=$x471;unset($x472,$W472,$S472,$U472);$x473=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x470,JS::toString(\'length\',$global),156,31,\'<image>/05_string.js\');$x472=&$x473[0];list(,$W472,$S472,$U472)=$x473;$x468=JS::toPrimitive($_index,$global);$x469=JS::toPrimitive($x472,$global);$x474=(is_string($x468)||is_string($x469)?JS::toString($x468,$global).JS::toString($x469,$global):JS::toNumber($x468,$global)+JS::toNumber($x469,$global));if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=$x474;$x476=$_replace;$x476=($x476===JS::$undefined?\'undefined\':(is_int($x476)||is_float($x476)?\'number\':(is_bool($x476)?\'boolean\':(is_string($x476)?\'string\':(is_object($x476)&&isset($x476->call)?\'function\':\'object\')))));$x475=(((gettype($x476)===gettype(\'function\')&&$x476===\'function\'))||(((is_float($x476)||is_int($x476))&&(is_float(\'function\')||is_int(\'function\')))&&$x476==\'function\'));if(JS::toBoolean($x475,$global)){if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x478=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),159,14,\'<image>/05_string.js\');$_TypeError=&$x478[0];list(,$WTypeError,$STypeError,$UTypeError)=$x478;$x479=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x480=$x479($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x480->class)&&$x480->class===\'Error\'&&!isset($x480->properties[\'file\'])&&!isset($x480->properties[\'line\'])&&!isset($x480->properties[\'column\'])){$x480->properties[\'file\']=\'<image>/05_string.js\';$x480->properties[\'line\']=159;$x480->properties[\'column\']=14;$x480->attributes[\'file\']=$x480->attributes[\'line\']=$x480->attributes[\'column\']=0;}throw new JSException($x480,159,14,\'<image>/05_string.js\');}$x477=JS::toObject($_match,$global);unset($x481,$W481,$S481,$U481);$x482=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x477,JS::toString(\'push\',$global),159,14,\'<image>/05_string.js\');$x481=&$x482[0];list(,$W481,$S481,$U481)=$x482;unset($x483,$W483,$S483,$U483);$x484=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString(\'index\',$global),159,20,\'<image>/05_string.js\');$x483=&$x484[0];list(,$W483,$S483,$U483)=$x484;if(!(is_object($x481)&&isset($x481->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x487=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),159,14,\'<image>/05_string.js\');$_TypeError=&$x487[0];list(,$WTypeError,$STypeError,$UTypeError)=$x487;$x488=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x489=$x488($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x489->class)&&$x489->class===\'Error\'&&!isset($x489->properties[\'file\'])&&!isset($x489->properties[\'line\'])&&!isset($x489->properties[\'column\'])){$x489->properties[\'file\']=\'<image>/05_string.js\';$x489->properties[\'line\']=159;$x489->properties[\'column\']=14;$x489->attributes[\'file\']=$x489->attributes[\'line\']=$x489->attributes[\'column\']=0;}throw new JSException($x489,159,14,\'<image>/05_string.js\');}$x485=$x481->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x486=$x485($global,$x477,$x481,array($x483),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x491=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),160,14,\'<image>/05_string.js\');$_TypeError=&$x491[0];list(,$WTypeError,$STypeError,$UTypeError)=$x491;$x492=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',160,14);$x493=$x492($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x493->class)&&$x493->class===\'Error\'&&!isset($x493->properties[\'file\'])&&!isset($x493->properties[\'line\'])&&!isset($x493->properties[\'column\'])){$x493->properties[\'file\']=\'<image>/05_string.js\';$x493->properties[\'line\']=160;$x493->properties[\'column\']=14;$x493->attributes[\'file\']=$x493->attributes[\'line\']=$x493->attributes[\'column\']=0;}throw new JSException($x493,160,14,\'<image>/05_string.js\');}$x490=JS::toObject($_match,$global);unset($x494,$W494,$S494,$U494);$x495=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x490,JS::toString(\'push\',$global),160,14,\'<image>/05_string.js\');$x494=&$x495[0];list(,$W494,$S494,$U494)=$x495;unset($x496,$W496,$S496,$U496);$x497=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString(\'input\',$global),160,20,\'<image>/05_string.js\');$x496=&$x497[0];list(,$W496,$S496,$U496)=$x497;if(!(is_object($x494)&&isset($x494->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x500=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),160,14,\'<image>/05_string.js\');$_TypeError=&$x500[0];list(,$WTypeError,$STypeError,$UTypeError)=$x500;$x501=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',160,14);$x502=$x501($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x502->class)&&$x502->class===\'Error\'&&!isset($x502->properties[\'file\'])&&!isset($x502->properties[\'line\'])&&!isset($x502->properties[\'column\'])){$x502->properties[\'file\']=\'<image>/05_string.js\';$x502->properties[\'line\']=160;$x502->properties[\'column\']=14;$x502->attributes[\'file\']=$x502->attributes[\'line\']=$x502->attributes[\'column\']=0;}throw new JSException($x502,160,14,\'<image>/05_string.js\');}$x498=$x494->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',160,14);$x499=$x498($global,$x490,$x494,array($x496),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!array_key_exists(\'index\',$_match->attributes)){unset($_match->properties[\'index\']);$x503=TRUE;}else if($_match->attributes[\'index\']&JS::CONFIGURABLE){unset($_match->properties[\'index\'],$_match->attributes[\'index\'],$_match->getters[\'index\'],$_match->setters[\'index\']);$x503=TRUE;}else{$x503=FALSE;}if(!array_key_exists(\'input\',$_match->attributes)){unset($_match->properties[\'input\']);$x504=TRUE;}else if($_match->attributes[\'input\']&JS::CONFIGURABLE){unset($_match->properties[\'input\'],$_match->attributes[\'input\'],$_match->getters[\'input\'],$_match->setters[\'input\']);$x504=TRUE;}else{$x504=FALSE;}unset($_String,$WString,$SString,$UString);$x505=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'String\',$global),164,21,\'<image>/05_string.js\');$_String=&$x505[0];list(,$WString,$SString,$UString)=$x505;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x506=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),164,21,\'<image>/05_string.js\');$_ReferenceError=&$x506[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x506;$x507=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',164,21);$x508=$x507($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x508->class)&&$x508->class===\'Error\'&&!isset($x508->properties[\'file\'])&&!isset($x508->properties[\'line\'])&&!isset($x508->properties[\'column\'])){$x508->properties[\'file\']=\'<image>/05_string.js\';$x508->properties[\'line\']=164;$x508->properties[\'column\']=21;$x508->attributes[\'file\']=$x508->attributes[\'line\']=$x508->attributes[\'column\']=0;}throw new JSException($x508,164,21,\'<image>/05_string.js\');}if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x510=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),164,41,\'<image>/05_string.js\');$_TypeError=&$x510[0];list(,$WTypeError,$STypeError,$UTypeError)=$x510;$x511=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',164,41);$x512=$x511($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x512->class)&&$x512->class===\'Error\'&&!isset($x512->properties[\'file\'])&&!isset($x512->properties[\'line\'])&&!isset($x512->properties[\'column\'])){$x512->properties[\'file\']=\'<image>/05_string.js\';$x512->properties[\'line\']=164;$x512->properties[\'column\']=41;$x512->attributes[\'file\']=$x512->attributes[\'line\']=$x512->attributes[\'column\']=0;}throw new JSException($x512,164,41,\'<image>/05_string.js\');}$x509=JS::toObject($_replace,$global);unset($x513,$W513,$S513,$U513);$x514=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x509,JS::toString(\'apply\',$global),164,41,\'<image>/05_string.js\');$x513=&$x514[0];list(,$W513,$S513,$U513)=$x514;if(!(is_object($x513)&&isset($x513->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x517=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),164,41,\'<image>/05_string.js\');$_TypeError=&$x517[0];list(,$WTypeError,$STypeError,$UTypeError)=$x517;$x518=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',164,41);$x519=$x518($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x519->class)&&$x519->class===\'Error\'&&!isset($x519->properties[\'file\'])&&!isset($x519->properties[\'line\'])&&!isset($x519->properties[\'column\'])){$x519->properties[\'file\']=\'<image>/05_string.js\';$x519->properties[\'line\']=164;$x519->properties[\'column\']=41;$x519->attributes[\'file\']=$x519->attributes[\'line\']=$x519->attributes[\'column\']=0;}throw new JSException($x519,164,41,\'<image>/05_string.js\');}$x515=$x513->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',164,41);$x516=$x515($global,$x509,$x513,array(JS::$undefined,$_match),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x522=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),164,27,\'<image>/05_string.js\');$_TypeError=&$x522[0];list(,$WTypeError,$STypeError,$UTypeError)=$x522;$x523=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',164,27);$x524=$x523($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x524->class)&&$x524->class===\'Error\'&&!isset($x524->properties[\'file\'])&&!isset($x524->properties[\'line\'])&&!isset($x524->properties[\'column\'])){$x524->properties[\'file\']=\'<image>/05_string.js\';$x524->properties[\'line\']=164;$x524->properties[\'column\']=27;$x524->attributes[\'file\']=$x524->attributes[\'line\']=$x524->attributes[\'column\']=0;}throw new JSException($x524,164,27,\'<image>/05_string.js\');}$x520=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',164,27);$x521=$x520($global,$global,$_String,array($x516),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x521;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x525=JS::toPrimitive($_newString,$global);$x526=JS::toPrimitive($_s,$global);$_newString=(is_string($x525)||is_string($x526)?JS::toString($x525,$global).JS::toString($x526,$global):JS::toNumber($x525,$global)+JS::toNumber($x526,$global));}else{if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x528=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,32,\'<image>/05_string.js\');$_TypeError=&$x528[0];list(,$WTypeError,$STypeError,$UTypeError)=$x528;$x529=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',167,32);$x530=$x529($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x530->class)&&$x530->class===\'Error\'&&!isset($x530->properties[\'file\'])&&!isset($x530->properties[\'line\'])&&!isset($x530->properties[\'column\'])){$x530->properties[\'file\']=\'<image>/05_string.js\';$x530->properties[\'line\']=167;$x530->properties[\'column\']=32;$x530->attributes[\'file\']=$x530->attributes[\'line\']=$x530->attributes[\'column\']=0;}throw new JSException($x530,167,32,\'<image>/05_string.js\');}$x527=JS::toObject($_replace,$global);unset($x531,$W531,$S531,$U531);$x532=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x527,JS::toString(\'replace\',$global),167,32,\'<image>/05_string.js\');$x531=&$x532[0];list(,$W531,$S531,$U531)=$x532;unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x535=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),167,33,\'<image>/05_string.js\');$_RegExp=&$x535[0];list(,$WRegExp,$SRegExp,$URegExp)=$x535;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x536=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),167,33,\'<image>/05_string.js\');$_ReferenceError=&$x536[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x536;$x537=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',167,33);$x538=$x537($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x538->class)&&$x538->class===\'Error\'&&!isset($x538->properties[\'file\'])&&!isset($x538->properties[\'line\'])&&!isset($x538->properties[\'column\'])){$x538->properties[\'file\']=\'<image>/05_string.js\';$x538->properties[\'line\']=167;$x538->properties[\'column\']=33;$x538->attributes[\'file\']=$x538->attributes[\'line\']=$x538->attributes[\'column\']=0;}throw new JSException($x538,167,33,\'<image>/05_string.js\');}$x533=clone JS::$objectTemplate;unset($x539,$W539,$S539,$U539);$x540=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),167,33,\'<image>/05_string.js\');$x539=&$x540[0];list(,$W539,$S539,$U539)=$x540;$x534=$x539;$x533->prototype=$x534;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x543=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,33,\'<image>/05_string.js\');$_TypeError=&$x543[0];list(,$WTypeError,$STypeError,$UTypeError)=$x543;$x544=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',167,33);$x545=$x544($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x545->class)&&$x545->class===\'Error\'&&!isset($x545->properties[\'file\'])&&!isset($x545->properties[\'line\'])&&!isset($x545->properties[\'column\'])){$x545->properties[\'file\']=\'<image>/05_string.js\';$x545->properties[\'line\']=167;$x545->properties[\'column\']=33;$x545->attributes[\'file\']=$x545->attributes[\'line\']=$x545->attributes[\'column\']=0;}throw new JSException($x545,167,33,\'<image>/05_string.js\');}$x541=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',167,33);$x542=$x541($global,$x533,$_RegExp,array(\'\\\\$([$&]|[0-9]|[0-9][0-9])\',\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x534=$x542;if(is_object($x534)&&$x534!==JS::$undefined){$x533=$x534;}$x571=clone JS::$functionTemplate;$x571->call=\'_1062444eb1665286b15372d6a2622cc9_15\';$x571->parameters=array(0=>\'_\',1=>\'c\',);$x571->scope=$scope;$x571->properties[\'prototype\']=clone JS::$objectTemplate;$x571->attributes[\'prototype\']=JS::WRITABLE;$x571->properties[\'prototype\']->properties[\'constructor\']=$x571;$x571->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x571->properties[\'length\']=2;$x571->attributes[\'length\']=0;if(!(is_object($x531)&&isset($x531->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x574=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,32,\'<image>/05_string.js\');$_TypeError=&$x574[0];list(,$WTypeError,$STypeError,$UTypeError)=$x574;$x575=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',167,32);$x576=$x575($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x576->class)&&$x576->class===\'Error\'&&!isset($x576->properties[\'file\'])&&!isset($x576->properties[\'line\'])&&!isset($x576->properties[\'column\'])){$x576->properties[\'file\']=\'<image>/05_string.js\';$x576->properties[\'line\']=167;$x576->properties[\'column\']=32;$x576->attributes[\'file\']=$x576->attributes[\'line\']=$x576->attributes[\'column\']=0;}throw new JSException($x576,167,32,\'<image>/05_string.js\');}$x572=$x531->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',167,32);$x573=$x572($global,$x527,$x531,array($x533,$x571),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x577=JS::toPrimitive($_newString,$global);$x578=JS::toPrimitive($x573,$global);$_newString=(is_string($x577)||is_string($x578)?JS::toString($x577,$global).JS::toString($x578,$global):JS::toNumber($x577,$global)+JS::toNumber($x578,$global));}unset($x579,$W579,$S579,$U579);$x580=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_search,JS::toString(\'global\',$global),180,14,\'<image>/05_string.js\');$x579=&$x580[0];list(,$W579,$S579,$U579)=$x580;if(JS::toBoolean((!JS::toBoolean($x579,$global)),$global)){break;}}if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x582=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),185,35,\'<image>/05_string.js\');$_TypeError=&$x582[0];list(,$WTypeError,$STypeError,$UTypeError)=$x582;$x583=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',185,35);$x584=$x583($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x584->class)&&$x584->class===\'Error\'&&!isset($x584->properties[\'file\'])&&!isset($x584->properties[\'line\'])&&!isset($x584->properties[\'column\'])){$x584->properties[\'file\']=\'<image>/05_string.js\';$x584->properties[\'line\']=185;$x584->properties[\'column\']=35;$x584->attributes[\'file\']=$x584->attributes[\'line\']=$x584->attributes[\'column\']=0;}throw new JSException($x584,185,35,\'<image>/05_string.js\');}$x581=JS::toObject($_thisString,$global);unset($x585,$W585,$S585,$U585);$x586=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x581,JS::toString(\'substring\',$global),185,35,\'<image>/05_string.js\');$x585=&$x586[0];list(,$W585,$S585,$U585)=$x586;unset($x587,$W587,$S587,$U587);$x588=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_thisString,JS::toString(\'length\',$global),185,57,\'<image>/05_string.js\');$x587=&$x588[0];list(,$W587,$S587,$U587)=$x588;if(!(is_object($x585)&&isset($x585->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x591=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),185,35,\'<image>/05_string.js\');$_TypeError=&$x591[0];list(,$WTypeError,$STypeError,$UTypeError)=$x591;$x592=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',185,35);$x593=$x592($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x593->class)&&$x593->class===\'Error\'&&!isset($x593->properties[\'file\'])&&!isset($x593->properties[\'line\'])&&!isset($x593->properties[\'column\'])){$x593->properties[\'file\']=\'<image>/05_string.js\';$x593->properties[\'line\']=185;$x593->properties[\'column\']=35;$x593->attributes[\'file\']=$x593->attributes[\'line\']=$x593->attributes[\'column\']=0;}throw new JSException($x593,185,35,\'<image>/05_string.js\');}$x589=$x585->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',185,35);$x590=$x589($global,$x581,$x585,array($_lastIndex,$x587),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x594=JS::toPrimitive($_newString,$global);$x595=JS::toPrimitive($x590,$global);$_newString=(is_string($x594)||is_string($x595)?JS::toString($x594,$global).JS::toString($x595,$global):JS::toNumber($x594,$global)+JS::toNumber($x595,$global));return$_newString;return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x610 =& $scope->properties['arguments'];
$x610->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x610->properties[$i] = $args[$i];
$x610->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean((!JS::toBoolean((is_object($_search) && isset($_search->class) &&$_search->class === 'RegExp'), $global)), $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x613 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('RegExp', $global), 192, 16, '<image>/05_string.js');
$_RegExp =& $x613[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x613;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x614 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 192, 16, '<image>/05_string.js');
$_ReferenceError =& $x614[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x614;
$x615 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 192, 16);
$x616 = $x615($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x616->class) && $x616->class === 'Error' && !isset($x616->properties['file']) && !isset($x616->properties['line']) && !isset($x616->properties['column'])) {$x616->properties['file'] = '<image>/05_string.js';$x616->properties['line'] = 192;$x616->properties['column'] = 16;$x616->attributes['file'] = $x616->attributes['line'] = $x616->attributes['column'] = 0; }
throw new JSException($x616, 192, 16, '<image>/05_string.js');
}
$x611 = clone JS::$objectTemplate;
unset($x617, $W617, $S617, $U617);
$x618 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 192, 12, '<image>/05_string.js');
$x617 =& $x618[0]; list(,$W617,$S617,$U617) = $x618;
$x612 = $x617;
$x611->prototype = $x612;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x621 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 192, 12, '<image>/05_string.js');
$_TypeError =& $x621[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x621;
$x622 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 192, 12);
$x623 = $x622($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x623->class) && $x623->class === 'Error' && !isset($x623->properties['file']) && !isset($x623->properties['line']) && !isset($x623->properties['column'])) {$x623->properties['file'] = '<image>/05_string.js';$x623->properties['line'] = 192;$x623->properties['column'] = 12;$x623->attributes['file'] = $x623->attributes['line'] = $x623->attributes['column'] = 0; }
throw new JSException($x623, 192, 12, '<image>/05_string.js');
}
$x619 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 192, 12);
$x620 = $x619($global, $x611, $_RegExp, array($_search), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x612 = $x620;
if (is_object($x612) && $x612 !== JS::$undefined) { $x611 = $x612; }
if ($Usearch) {$global->properties['search'] = $_search; $_search =& $global->properties['search']; }
$_search = $x611;;
};
unset($x624, $W624, $S624, $U624);
$x625 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_search, JS::toString('lastIndex', $global), 195, 29, '<image>/05_string.js');
$x624 =& $x625[0]; list(,$W624,$S624,$U624) = $x625;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x624;
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x627 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 196, 22, '<image>/05_string.js');
$_TypeError =& $x627[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x627;
$x628 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 196, 22);
$x629 = $x628($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x629->class) && $x629->class === 'Error' && !isset($x629->properties['file']) && !isset($x629->properties['line']) && !isset($x629->properties['column'])) {$x629->properties['file'] = '<image>/05_string.js';$x629->properties['line'] = 196;$x629->properties['column'] = 22;$x629->attributes['file'] = $x629->attributes['line'] = $x629->attributes['column'] = 0; }
throw new JSException($x629, 196, 22, '<image>/05_string.js');
}
$x626 = JS::toObject($_search, $global);
unset($x630, $W630, $S630, $U630);
$x631 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x626, JS::toString('exec', $global), 196, 22, '<image>/05_string.js');
$x630 =& $x631[0]; list(,$W630,$S630,$U630) = $x631;
if (!(is_object($x630) && isset($x630->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x634 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 196, 22, '<image>/05_string.js');
$_TypeError =& $x634[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x634;
$x635 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 196, 22);
$x636 = $x635($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x636->class) && $x636->class === 'Error' && !isset($x636->properties['file']) && !isset($x636->properties['line']) && !isset($x636->properties['column'])) {$x636->properties['file'] = '<image>/05_string.js';$x636->properties['line'] = 196;$x636->properties['column'] = 22;$x636->attributes['file'] = $x636->attributes['line'] = $x636->attributes['column'] = 0; }
throw new JSException($x636, 196, 22, '<image>/05_string.js');
}
$x632 = $x630->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 196, 22);
$x633 = $x632($global, $x626, $x630, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = $x633;
$x637 = JS::toString('lastIndexOf', $global);
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x638 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 198, 21, '<image>/05_string.js');
$_TypeError =& $x638[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x638;
$x639 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 198, 21);
$x640 = $x639($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x640->class) && $x640->class === 'Error' && !isset($x640->properties['file']) && !isset($x640->properties['line']) && !isset($x640->properties['column'])) {$x640->properties['file'] = '<image>/05_string.js';$x640->properties['line'] = 198;$x640->properties['column'] = 21;$x640->attributes['file'] = $x640->attributes['line'] = $x640->attributes['column'] = 0; }
throw new JSException($x640, 198, 21, '<image>/05_string.js');
}
$_search = JS::toObject($_search, $global);
unset($x641, $W641, $S641, $U641);
$x642 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $_search, JS::toString($x637, $global), 198, 21, '<image>/05_string.js');
$x641 =& $x642[0]; list(,$W641,$S641,$U641) = $x642;
if ($U641 && (!isset($_search->extensible) || $_search->extensible)) {$_search->properties[$x637] = $x641; $x641 =& $_search->properties[$x637]; $_search->attributes[$x637] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U641 = FALSE; $W641 = TRUE; }
if (isset($_search->class) && $_search->class === 'Array') {  if (isset($_search->properties['length']) && $_search->properties['length'] !== JS::$undefined) { $x644 = $_search->properties['length']; }  else { $x644 = 0; } }
if (isset($S641)) {
$x645 = $S641->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 198, 21);
$x646 = $x645($global, $_search, $S641, array($_savedLastIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x643 = $x646;
} else {
if (!$U641) {$x643 = $_savedLastIndex;if ($W641) { $x641 = $_savedLastIndex; }  }
else { $x643 = JS::$undefined; }
}
if (isset($_search->class) && $_search->class === 'Array') {if (is_int('lastIndexOf') && 'lastIndexOf' >= $_search->properties['length']) { $_search->properties['length'] = 'lastIndexOf' + 1; }else if ($x637 === 'length' && is_int($_savedLastIndex) && $x644 > $_savedLastIndex) {  for ($i = $_savedLastIndex; $i < $x644; ++$i) {  unset($_search->properties[$i], $_search->attributes[$i]); }}};
if (JS::toBoolean($_match, $global)) {
unset($x647, $W647, $S647, $U647);
$x648 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString('index', $global), 201, 15, '<image>/05_string.js');
$x647 =& $x648[0]; list(,$W647,$S647,$U647) = $x648;
return $x647;;
};
return (-1.0 * JS::toNumber(1.0, $global));
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x610=&$scope->properties[\'arguments\'];$x610->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x610->properties[$i]=$args[$i];$x610->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_search)&&isset($_search->class)&&$_search->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x613=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),192,16,\'<image>/05_string.js\');$_RegExp=&$x613[0];list(,$WRegExp,$SRegExp,$URegExp)=$x613;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x614=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),192,16,\'<image>/05_string.js\');$_ReferenceError=&$x614[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x614;$x615=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',192,16);$x616=$x615($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x616->class)&&$x616->class===\'Error\'&&!isset($x616->properties[\'file\'])&&!isset($x616->properties[\'line\'])&&!isset($x616->properties[\'column\'])){$x616->properties[\'file\']=\'<image>/05_string.js\';$x616->properties[\'line\']=192;$x616->properties[\'column\']=16;$x616->attributes[\'file\']=$x616->attributes[\'line\']=$x616->attributes[\'column\']=0;}throw new JSException($x616,192,16,\'<image>/05_string.js\');}$x611=clone JS::$objectTemplate;unset($x617,$W617,$S617,$U617);$x618=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),192,12,\'<image>/05_string.js\');$x617=&$x618[0];list(,$W617,$S617,$U617)=$x618;$x612=$x617;$x611->prototype=$x612;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x621=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),192,12,\'<image>/05_string.js\');$_TypeError=&$x621[0];list(,$WTypeError,$STypeError,$UTypeError)=$x621;$x622=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',192,12);$x623=$x622($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x623->class)&&$x623->class===\'Error\'&&!isset($x623->properties[\'file\'])&&!isset($x623->properties[\'line\'])&&!isset($x623->properties[\'column\'])){$x623->properties[\'file\']=\'<image>/05_string.js\';$x623->properties[\'line\']=192;$x623->properties[\'column\']=12;$x623->attributes[\'file\']=$x623->attributes[\'line\']=$x623->attributes[\'column\']=0;}throw new JSException($x623,192,12,\'<image>/05_string.js\');}$x619=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',192,12);$x620=$x619($global,$x611,$_RegExp,array($_search),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x612=$x620;if(is_object($x612)&&$x612!==JS::$undefined){$x611=$x612;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x611;}unset($x624,$W624,$S624,$U624);$x625=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_search,JS::toString(\'lastIndex\',$global),195,29,\'<image>/05_string.js\');$x624=&$x625[0];list(,$W624,$S624,$U624)=$x625;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x624;if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x627=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),196,22,\'<image>/05_string.js\');$_TypeError=&$x627[0];list(,$WTypeError,$STypeError,$UTypeError)=$x627;$x628=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',196,22);$x629=$x628($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x629->class)&&$x629->class===\'Error\'&&!isset($x629->properties[\'file\'])&&!isset($x629->properties[\'line\'])&&!isset($x629->properties[\'column\'])){$x629->properties[\'file\']=\'<image>/05_string.js\';$x629->properties[\'line\']=196;$x629->properties[\'column\']=22;$x629->attributes[\'file\']=$x629->attributes[\'line\']=$x629->attributes[\'column\']=0;}throw new JSException($x629,196,22,\'<image>/05_string.js\');}$x626=JS::toObject($_search,$global);unset($x630,$W630,$S630,$U630);$x631=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x626,JS::toString(\'exec\',$global),196,22,\'<image>/05_string.js\');$x630=&$x631[0];list(,$W630,$S630,$U630)=$x631;if(!(is_object($x630)&&isset($x630->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x634=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),196,22,\'<image>/05_string.js\');$_TypeError=&$x634[0];list(,$WTypeError,$STypeError,$UTypeError)=$x634;$x635=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',196,22);$x636=$x635($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x636->class)&&$x636->class===\'Error\'&&!isset($x636->properties[\'file\'])&&!isset($x636->properties[\'line\'])&&!isset($x636->properties[\'column\'])){$x636->properties[\'file\']=\'<image>/05_string.js\';$x636->properties[\'line\']=196;$x636->properties[\'column\']=22;$x636->attributes[\'file\']=$x636->attributes[\'line\']=$x636->attributes[\'column\']=0;}throw new JSException($x636,196,22,\'<image>/05_string.js\');}$x632=$x630->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',196,22);$x633=$x632($global,$x626,$x630,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=$x633;$x637=JS::toString(\'lastIndexOf\',$global);if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x638=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),198,21,\'<image>/05_string.js\');$_TypeError=&$x638[0];list(,$WTypeError,$STypeError,$UTypeError)=$x638;$x639=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',198,21);$x640=$x639($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x640->class)&&$x640->class===\'Error\'&&!isset($x640->properties[\'file\'])&&!isset($x640->properties[\'line\'])&&!isset($x640->properties[\'column\'])){$x640->properties[\'file\']=\'<image>/05_string.js\';$x640->properties[\'line\']=198;$x640->properties[\'column\']=21;$x640->attributes[\'file\']=$x640->attributes[\'line\']=$x640->attributes[\'column\']=0;}throw new JSException($x640,198,21,\'<image>/05_string.js\');}$_search=JS::toObject($_search,$global);unset($x641,$W641,$S641,$U641);$x642=_1062444eb1665286b15372d6a2622cc9_5($global,$scope,$_search,JS::toString($x637,$global),198,21,\'<image>/05_string.js\');$x641=&$x642[0];list(,$W641,$S641,$U641)=$x642;if($U641&&(!isset($_search->extensible)||$_search->extensible)){$_search->properties[$x637]=$x641;$x641=&$_search->properties[$x637];$_search->attributes[$x637]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U641=FALSE;$W641=TRUE;}if(isset($_search->class)&&$_search->class===\'Array\'){if(isset($_search->properties[\'length\'])&&$_search->properties[\'length\']!==JS::$undefined){$x644=$_search->properties[\'length\'];}else{$x644=0;}}if(isset($S641)){$x645=$S641->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',198,21);$x646=$x645($global,$_search,$S641,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x643=$x646;}else{if(!$U641){$x643=$_savedLastIndex;if($W641){$x641=$_savedLastIndex;}}else{$x643=JS::$undefined;}}if(isset($_search->class)&&$_search->class===\'Array\'){if(is_int(\'lastIndexOf\')&&\'lastIndexOf\'>=$_search->properties[\'length\']){$_search->properties[\'length\']=\'lastIndexOf\'+1;}else if($x637===\'length\'&&is_int($_savedLastIndex)&&$x644>$_savedLastIndex){for($i=$_savedLastIndex;$i<$x644;++$i){unset($_search->properties[$i],$_search->attributes[$i]);}}}if(JS::toBoolean($_match,$global)){unset($x647,$W647,$S647,$U647);$x648=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString(\'index\',$global),201,15,\'<image>/05_string.js\');$x647=&$x648[0];list(,$W647,$S647,$U647)=$x648;return$x647;}return(-1.0*JS::toNumber(1.0,$global));return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x663 =& $scope->properties['arguments'];
$x663->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x663->properties[$i] = $args[$i];
$x663->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['end'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_end =& $scope->properties['end'];
$Uend = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['length'] = JS::$undefined; $_length =& $scope->properties['length'];
$Ulength = FALSE;
$_length = mb_strlen($leThis->value);
$x664 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x664, $global)) {
$x665 = 0.0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x665;;
};
$x666 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x666, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x667 = JS::toPrimitive($_start, $global);
$x668 = JS::toPrimitive(0.0, $global);
$x669 = (is_string($x667) && is_string($x668) ? strcmp($x667, $x668) < 0 : (!is_nan($x670 = JS::toNumber($x667, $global)) && !is_nan($x671 = JS::toNumber($x668, $global)) && $x670 < $x671));
if (JS::toBoolean($x669, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x672 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Math', $global), 219, 11, '<image>/05_string.js');
$_Math =& $x672[0]; list(,$WMath,$SMath,$UMath) = $x672;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x673 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 219, 11, '<image>/05_string.js');
$_ReferenceError =& $x673[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x673;
$x674 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 219, 11);
$x675 = $x674($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x675->class) && $x675->class === 'Error' && !isset($x675->properties['file']) && !isset($x675->properties['line']) && !isset($x675->properties['column'])) {$x675->properties['file'] = '<image>/05_string.js';$x675->properties['line'] = 219;$x675->properties['column'] = 11;$x675->attributes['file'] = $x675->attributes['line'] = $x675->attributes['column'] = 0; }
throw new JSException($x675, 219, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x677 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 219, 19, '<image>/05_string.js');
$_TypeError =& $x677[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x677;
$x678 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 219, 19);
$x679 = $x678($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x679->class) && $x679->class === 'Error' && !isset($x679->properties['file']) && !isset($x679->properties['line']) && !isset($x679->properties['column'])) {$x679->properties['file'] = '<image>/05_string.js';$x679->properties['line'] = 219;$x679->properties['column'] = 19;$x679->attributes['file'] = $x679->attributes['line'] = $x679->attributes['column'] = 0; }
throw new JSException($x679, 219, 19, '<image>/05_string.js');
}
$x676 = JS::toObject($_Math, $global);
unset($x680, $W680, $S680, $U680);
$x681 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x676, JS::toString('max', $global), 219, 19, '<image>/05_string.js');
$x680 =& $x681[0]; list(,$W680,$S680,$U680) = $x681;
$x682 = JS::toPrimitive($_start, $global);
$x683 = JS::toPrimitive($_length, $global);
if (!(is_object($x680) && isset($x680->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x686 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 219, 19, '<image>/05_string.js');
$_TypeError =& $x686[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x686;
$x687 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 219, 19);
$x688 = $x687($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x688->class) && $x688->class === 'Error' && !isset($x688->properties['file']) && !isset($x688->properties['line']) && !isset($x688->properties['column'])) {$x688->properties['file'] = '<image>/05_string.js';$x688->properties['line'] = 219;$x688->properties['column'] = 19;$x688->attributes['file'] = $x688->attributes['line'] = $x688->attributes['column'] = 0; }
throw new JSException($x688, 219, 19, '<image>/05_string.js');
}
$x684 = $x680->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 219, 19);
$x685 = $x684($global, $x676, $x680, array((is_string($x682) || is_string($x683) ? JS::toString($x682, $global) . JS::toString($x683, $global) : JS::toNumber($x682, $global) + JS::toNumber($x683, $global)), 0.0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x685;;
};
$x689 = JS::toPrimitive($_end, $global);
$x690 = JS::toPrimitive(0.0, $global);
$x691 = (is_string($x689) && is_string($x690) ? strcmp($x689, $x690) < 0 : (!is_nan($x692 = JS::toNumber($x689, $global)) && !is_nan($x693 = JS::toNumber($x690, $global)) && $x692 < $x693));
if (JS::toBoolean($x691, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x694 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Math', $global), 223, 9, '<image>/05_string.js');
$_Math =& $x694[0]; list(,$WMath,$SMath,$UMath) = $x694;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x695 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 223, 9, '<image>/05_string.js');
$_ReferenceError =& $x695[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x695;
$x696 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 223, 9);
$x697 = $x696($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x697->class) && $x697->class === 'Error' && !isset($x697->properties['file']) && !isset($x697->properties['line']) && !isset($x697->properties['column'])) {$x697->properties['file'] = '<image>/05_string.js';$x697->properties['line'] = 223;$x697->properties['column'] = 9;$x697->attributes['file'] = $x697->attributes['line'] = $x697->attributes['column'] = 0; }
throw new JSException($x697, 223, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x699 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 223, 17, '<image>/05_string.js');
$_TypeError =& $x699[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x699;
$x700 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 223, 17);
$x701 = $x700($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x701->class) && $x701->class === 'Error' && !isset($x701->properties['file']) && !isset($x701->properties['line']) && !isset($x701->properties['column'])) {$x701->properties['file'] = '<image>/05_string.js';$x701->properties['line'] = 223;$x701->properties['column'] = 17;$x701->attributes['file'] = $x701->attributes['line'] = $x701->attributes['column'] = 0; }
throw new JSException($x701, 223, 17, '<image>/05_string.js');
}
$x698 = JS::toObject($_Math, $global);
unset($x702, $W702, $S702, $U702);
$x703 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x698, JS::toString('max', $global), 223, 17, '<image>/05_string.js');
$x702 =& $x703[0]; list(,$W702,$S702,$U702) = $x703;
$x704 = JS::toPrimitive($_end, $global);
$x705 = JS::toPrimitive($_length, $global);
if (!(is_object($x702) && isset($x702->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x708 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 223, 17, '<image>/05_string.js');
$_TypeError =& $x708[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x708;
$x709 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 223, 17);
$x710 = $x709($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x710->class) && $x710->class === 'Error' && !isset($x710->properties['file']) && !isset($x710->properties['line']) && !isset($x710->properties['column'])) {$x710->properties['file'] = '<image>/05_string.js';$x710->properties['line'] = 223;$x710->properties['column'] = 17;$x710->attributes['file'] = $x710->attributes['line'] = $x710->attributes['column'] = 0; }
throw new JSException($x710, 223, 17, '<image>/05_string.js');
}
$x706 = $x702->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 223, 17);
$x707 = $x706($global, $x698, $x702, array((is_string($x704) || is_string($x705) ? JS::toString($x704, $global) . JS::toString($x705, $global) : JS::toNumber($x704, $global) + JS::toNumber($x705, $global)), 0.0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x707;;
};
return (string) mb_substr($leThis->value,$_start, max($_end-$_start, 0));
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x663=&$scope->properties[\'arguments\'];$x663->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x663->properties[$i]=$args[$i];$x663->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=mb_strlen($leThis->value);$x664=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x664,$global)){$x665=0.0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x665;}$x666=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x666,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x667=JS::toPrimitive($_start,$global);$x668=JS::toPrimitive(0.0,$global);$x669=(is_string($x667)&&is_string($x668)?strcmp($x667,$x668)<0:(!is_nan($x670=JS::toNumber($x667,$global))&&!is_nan($x671=JS::toNumber($x668,$global))&&$x670<$x671));if(JS::toBoolean($x669,$global)){unset($_Math,$WMath,$SMath,$UMath);$x672=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'Math\',$global),219,11,\'<image>/05_string.js\');$_Math=&$x672[0];list(,$WMath,$SMath,$UMath)=$x672;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x673=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),219,11,\'<image>/05_string.js\');$_ReferenceError=&$x673[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x673;$x674=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',219,11);$x675=$x674($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x675->class)&&$x675->class===\'Error\'&&!isset($x675->properties[\'file\'])&&!isset($x675->properties[\'line\'])&&!isset($x675->properties[\'column\'])){$x675->properties[\'file\']=\'<image>/05_string.js\';$x675->properties[\'line\']=219;$x675->properties[\'column\']=11;$x675->attributes[\'file\']=$x675->attributes[\'line\']=$x675->attributes[\'column\']=0;}throw new JSException($x675,219,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x677=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),219,19,\'<image>/05_string.js\');$_TypeError=&$x677[0];list(,$WTypeError,$STypeError,$UTypeError)=$x677;$x678=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',219,19);$x679=$x678($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x679->class)&&$x679->class===\'Error\'&&!isset($x679->properties[\'file\'])&&!isset($x679->properties[\'line\'])&&!isset($x679->properties[\'column\'])){$x679->properties[\'file\']=\'<image>/05_string.js\';$x679->properties[\'line\']=219;$x679->properties[\'column\']=19;$x679->attributes[\'file\']=$x679->attributes[\'line\']=$x679->attributes[\'column\']=0;}throw new JSException($x679,219,19,\'<image>/05_string.js\');}$x676=JS::toObject($_Math,$global);unset($x680,$W680,$S680,$U680);$x681=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x676,JS::toString(\'max\',$global),219,19,\'<image>/05_string.js\');$x680=&$x681[0];list(,$W680,$S680,$U680)=$x681;$x682=JS::toPrimitive($_start,$global);$x683=JS::toPrimitive($_length,$global);if(!(is_object($x680)&&isset($x680->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x686=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),219,19,\'<image>/05_string.js\');$_TypeError=&$x686[0];list(,$WTypeError,$STypeError,$UTypeError)=$x686;$x687=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',219,19);$x688=$x687($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x688->class)&&$x688->class===\'Error\'&&!isset($x688->properties[\'file\'])&&!isset($x688->properties[\'line\'])&&!isset($x688->properties[\'column\'])){$x688->properties[\'file\']=\'<image>/05_string.js\';$x688->properties[\'line\']=219;$x688->properties[\'column\']=19;$x688->attributes[\'file\']=$x688->attributes[\'line\']=$x688->attributes[\'column\']=0;}throw new JSException($x688,219,19,\'<image>/05_string.js\');}$x684=$x680->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',219,19);$x685=$x684($global,$x676,$x680,array((is_string($x682)||is_string($x683)?JS::toString($x682,$global).JS::toString($x683,$global):JS::toNumber($x682,$global)+JS::toNumber($x683,$global)),0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x685;}$x689=JS::toPrimitive($_end,$global);$x690=JS::toPrimitive(0.0,$global);$x691=(is_string($x689)&&is_string($x690)?strcmp($x689,$x690)<0:(!is_nan($x692=JS::toNumber($x689,$global))&&!is_nan($x693=JS::toNumber($x690,$global))&&$x692<$x693));if(JS::toBoolean($x691,$global)){unset($_Math,$WMath,$SMath,$UMath);$x694=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'Math\',$global),223,9,\'<image>/05_string.js\');$_Math=&$x694[0];list(,$WMath,$SMath,$UMath)=$x694;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x695=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),223,9,\'<image>/05_string.js\');$_ReferenceError=&$x695[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x695;$x696=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',223,9);$x697=$x696($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x697->class)&&$x697->class===\'Error\'&&!isset($x697->properties[\'file\'])&&!isset($x697->properties[\'line\'])&&!isset($x697->properties[\'column\'])){$x697->properties[\'file\']=\'<image>/05_string.js\';$x697->properties[\'line\']=223;$x697->properties[\'column\']=9;$x697->attributes[\'file\']=$x697->attributes[\'line\']=$x697->attributes[\'column\']=0;}throw new JSException($x697,223,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x699=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),223,17,\'<image>/05_string.js\');$_TypeError=&$x699[0];list(,$WTypeError,$STypeError,$UTypeError)=$x699;$x700=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',223,17);$x701=$x700($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x701->class)&&$x701->class===\'Error\'&&!isset($x701->properties[\'file\'])&&!isset($x701->properties[\'line\'])&&!isset($x701->properties[\'column\'])){$x701->properties[\'file\']=\'<image>/05_string.js\';$x701->properties[\'line\']=223;$x701->properties[\'column\']=17;$x701->attributes[\'file\']=$x701->attributes[\'line\']=$x701->attributes[\'column\']=0;}throw new JSException($x701,223,17,\'<image>/05_string.js\');}$x698=JS::toObject($_Math,$global);unset($x702,$W702,$S702,$U702);$x703=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x698,JS::toString(\'max\',$global),223,17,\'<image>/05_string.js\');$x702=&$x703[0];list(,$W702,$S702,$U702)=$x703;$x704=JS::toPrimitive($_end,$global);$x705=JS::toPrimitive($_length,$global);if(!(is_object($x702)&&isset($x702->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x708=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),223,17,\'<image>/05_string.js\');$_TypeError=&$x708[0];list(,$WTypeError,$STypeError,$UTypeError)=$x708;$x709=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',223,17);$x710=$x709($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x710->class)&&$x710->class===\'Error\'&&!isset($x710->properties[\'file\'])&&!isset($x710->properties[\'line\'])&&!isset($x710->properties[\'column\'])){$x710->properties[\'file\']=\'<image>/05_string.js\';$x710->properties[\'line\']=223;$x710->properties[\'column\']=17;$x710->attributes[\'file\']=$x710->attributes[\'line\']=$x710->attributes[\'column\']=0;}throw new JSException($x710,223,17,\'<image>/05_string.js\');}$x706=$x702->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',223,17);$x707=$x706($global,$x698,$x702,array((is_string($x704)||is_string($x705)?JS::toString($x704,$global).JS::toString($x705,$global):JS::toNumber($x704,$global)+JS::toNumber($x705,$global)),0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x707;}return(string)mb_substr($leThis->value,$_start,max($_end-$_start,0));return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x725 =& $scope->properties['arguments'];
$x725->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x725->properties[$i] = $args[$i];
$x725->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['separator'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_separator =& $scope->properties['separator'];
$Useparator = FALSE;
$scope->properties['limit'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_limit =& $scope->properties['limit'];
$Ulimit = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x726 = (((gettype($_separator) === gettype(JS::$undefined) && $_separator === JS::$undefined))|| (((is_float($_separator) || is_int($_separator)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_separator == JS::$undefined));
if (JS::toBoolean($x726, $global)) {
$x727 = clone JS::$arrayTemplate;
$x727->properties['length'] = 1;
$x727->attributes['length'] = JS::WRITABLE;
$x727->properties[0] = $leThis->value;
$x727->attributes[0] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x727;;
};
$x728 = (((gettype($_separator) === gettype('') && $_separator === ''))|| (((is_float($_separator) || is_int($_separator)) && (is_float('') || is_int(''))) && $_separator == ''));
if (JS::toBoolean($x728, $global)) {
$x729 = clone JS::$arrayTemplate;
$x729->properties['length'] = 0;
$x729->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x729;
for ($x730 = 0;; ++$x730) {
if ($x730 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0.0;
unset($x731, $W731, $S731, $U731);
$x732 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $leThis, JS::toString('length', $global), 237, 27, '<image>/05_string.js');
$x731 =& $x732[0]; list(,$W731,$S731,$U731) = $x732;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x731;
}
if ($x730 !== 0) {
$x733 = ++$_i;
}
$x734 = JS::toPrimitive($_i, $global);
$x735 = JS::toPrimitive($_l, $global);
$x736 = (is_string($x734) && is_string($x735) ? strcmp($x734, $x735) < 0 : (!is_nan($x737 = JS::toNumber($x734, $global)) && !is_nan($x738 = JS::toNumber($x735, $global)) && $x737 < $x738));
if (!JS::toBoolean($x736, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x740 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 238, 20, '<image>/05_string.js');
$_TypeError =& $x740[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x740;
$x741 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 238, 20);
$x742 = $x741($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x742->class) && $x742->class === 'Error' && !isset($x742->properties['file']) && !isset($x742->properties['line']) && !isset($x742->properties['column'])) {$x742->properties['file'] = '<image>/05_string.js';$x742->properties['line'] = 238;$x742->properties['column'] = 20;$x742->attributes['file'] = $x742->attributes['line'] = $x742->attributes['column'] = 0; }
throw new JSException($x742, 238, 20, '<image>/05_string.js');
}
$x739 = JS::toObject($_returnArray, $global);
unset($x743, $W743, $S743, $U743);
$x744 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x739, JS::toString('push', $global), 238, 20, '<image>/05_string.js');
$x743 =& $x744[0]; list(,$W743,$S743,$U743) = $x744;
if (!(is_object($x743) && isset($x743->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x747 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 238, 20, '<image>/05_string.js');
$_TypeError =& $x747[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x747;
$x748 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 238, 20);
$x749 = $x748($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x749->class) && $x749->class === 'Error' && !isset($x749->properties['file']) && !isset($x749->properties['line']) && !isset($x749->properties['column'])) {$x749->properties['file'] = '<image>/05_string.js';$x749->properties['line'] = 238;$x749->properties['column'] = 20;$x749->attributes['file'] = $x749->attributes['line'] = $x749->attributes['column'] = 0; }
throw new JSException($x749, 238, 20, '<image>/05_string.js');
}
$x745 = $x743->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 238, 20);
$x746 = $x745($global, $x739, $x743, array((string) mb_substr($leThis->value,$_i, 1)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_returnArray;;
};
$x751 = $_separator;
$x751 = ($x751 === JS::$undefined ? 'undefined' : (is_int($x751) || is_float($x751) ? 'number' : (is_bool($x751) ? 'boolean' : (is_string($x751) ? 'string' : (is_object($x751) && isset($x751->call) ? 'function' : 'object')))));
$x750 = (((gettype($x751) === gettype('string') && $x751 === 'string'))|| (((is_float($x751) || is_int($x751)) && (is_float('string') || is_int('string'))) && $x751 == 'string'));
if (JS::toBoolean($x750, $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x754 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('RegExp', $global), 245, 19, '<image>/05_string.js');
$_RegExp =& $x754[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x754;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x755 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 245, 19, '<image>/05_string.js');
$_ReferenceError =& $x755[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x755;
$x756 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 245, 19);
$x757 = $x756($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x757->class) && $x757->class === 'Error' && !isset($x757->properties['file']) && !isset($x757->properties['line']) && !isset($x757->properties['column'])) {$x757->properties['file'] = '<image>/05_string.js';$x757->properties['line'] = 245;$x757->properties['column'] = 19;$x757->attributes['file'] = $x757->attributes['line'] = $x757->attributes['column'] = 0; }
throw new JSException($x757, 245, 19, '<image>/05_string.js');
}
$x752 = clone JS::$objectTemplate;
unset($x758, $W758, $S758, $U758);
$x759 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 245, 15, '<image>/05_string.js');
$x758 =& $x759[0]; list(,$W758,$S758,$U758) = $x759;
$x753 = $x758;
$x752->prototype = $x753;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x762 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 245, 15, '<image>/05_string.js');
$_TypeError =& $x762[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x762;
$x763 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 245, 15);
$x764 = $x763($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x764->class) && $x764->class === 'Error' && !isset($x764->properties['file']) && !isset($x764->properties['line']) && !isset($x764->properties['column'])) {$x764->properties['file'] = '<image>/05_string.js';$x764->properties['line'] = 245;$x764->properties['column'] = 15;$x764->attributes['file'] = $x764->attributes['line'] = $x764->attributes['column'] = 0; }
throw new JSException($x764, 245, 15, '<image>/05_string.js');
}
$x760 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 245, 15);
$x761 = $x760($global, $x752, $_RegExp, array(preg_quote(JS::toString($_separator, $global), '/'), 'g'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x753 = $x761;
if (is_object($x753) && $x753 !== JS::$undefined) { $x752 = $x753; }
if ($Useparator) {$global->properties['separator'] = $_separator; $_separator =& $global->properties['separator']; }
$_separator = $x752;;
};
$x765 = clone JS::$arrayTemplate;
$x765->properties['length'] = 0;
$x765->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x765;
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = JS::$undefined;
$scope->properties['lastIndex'] = JS::$undefined; $_lastIndex =& $scope->properties['lastIndex'];
$UlastIndex = FALSE;
$_lastIndex = 0.0;
$scope->properties['index'] = JS::$undefined; $_index =& $scope->properties['index'];
$Uindex = FALSE;
$_index = JS::$undefined;
$scope->properties['thisString'] = JS::$undefined; $_thisString =& $scope->properties['thisString'];
$UthisString = FALSE;
$_thisString = $leThis->value;
unset($x766, $W766, $S766, $U766);
$x767 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_separator, JS::toString('lastIndex', $global), 249, 29, '<image>/05_string.js');
$x766 =& $x767[0]; list(,$W766,$S766,$U766) = $x767;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x766;
unset($x768, $W768, $S768, $U768);
$x769 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_separator, JS::toString('global', $global), 249, 64, '<image>/05_string.js');
$x768 =& $x769[0]; list(,$W768,$S768,$U768) = $x769;
$scope->properties['savedGlobal'] = JS::$undefined; $_savedGlobal =& $scope->properties['savedGlobal'];
$UsavedGlobal = FALSE;
$_savedGlobal = $x768;
$_separator->properties['global'] = TRUE;
$x770 = (((gettype($_limit) === gettype(JS::$undefined) && $_limit === JS::$undefined))|| (((is_float($_limit) || is_int($_limit)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_limit == JS::$undefined));
if (JS::toBoolean($x770, $global)) {
unset($_Infinity, $WInfinity, $SInfinity, $UInfinity);
$x771 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Infinity', $global), 254, 11, '<image>/05_string.js');
$_Infinity =& $x771[0]; list(,$WInfinity,$SInfinity,$UInfinity) = $x771;
if ($UInfinity) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x772 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 254, 11, '<image>/05_string.js');
$_ReferenceError =& $x772[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x772;
$x773 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 254, 11);
$x774 = $x773($global, $global, $_ReferenceError, array('Infinity is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x774->class) && $x774->class === 'Error' && !isset($x774->properties['file']) && !isset($x774->properties['line']) && !isset($x774->properties['column'])) {$x774->properties['file'] = '<image>/05_string.js';$x774->properties['line'] = 254;$x774->properties['column'] = 11;$x774->attributes['file'] = $x774->attributes['line'] = $x774->attributes['column'] = 0; }
throw new JSException($x774, 254, 11, '<image>/05_string.js');
}
if ($Ulimit) {$global->properties['limit'] = $_limit; $_limit =& $global->properties['limit']; }
$_limit = $_Infinity;;
};
for (;;) {
if ($_separator === JS::$undefined || $_separator === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x778 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 257, 32, '<image>/05_string.js');
$_TypeError =& $x778[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x778;
$x779 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 257, 32);
$x780 = $x779($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x780->class) && $x780->class === 'Error' && !isset($x780->properties['file']) && !isset($x780->properties['line']) && !isset($x780->properties['column'])) {$x780->properties['file'] = '<image>/05_string.js';$x780->properties['line'] = 257;$x780->properties['column'] = 32;$x780->attributes['file'] = $x780->attributes['line'] = $x780->attributes['column'] = 0; }
throw new JSException($x780, 257, 32, '<image>/05_string.js');
}
$x777 = JS::toObject($_separator, $global);
unset($x781, $W781, $S781, $U781);
$x782 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x777, JS::toString('exec', $global), 257, 32, '<image>/05_string.js');
$x781 =& $x782[0]; list(,$W781,$S781,$U781) = $x782;
if (!(is_object($x781) && isset($x781->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x785 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 257, 32, '<image>/05_string.js');
$_TypeError =& $x785[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x785;
$x786 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 257, 32);
$x787 = $x786($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x787->class) && $x787->class === 'Error' && !isset($x787->properties['file']) && !isset($x787->properties['line']) && !isset($x787->properties['column'])) {$x787->properties['file'] = '<image>/05_string.js';$x787->properties['line'] = 257;$x787->properties['column'] = 32;$x787->attributes['file'] = $x787->attributes['line'] = $x787->attributes['column'] = 0; }
throw new JSException($x787, 257, 32, '<image>/05_string.js');
}
$x783 = $x781->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 257, 32);
$x784 = $x783($global, $x777, $x781, array($_thisString), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x784;
$x776 = $_match;
if (JS::toBoolean($x776, $global)) {
$x791 = --$_limit;
$x788 = JS::toPrimitive($x791, $global);
$x789 = JS::toPrimitive(0.0, $global);
$x790 = (is_string($x789) && is_string($x788) ? strcmp($x789, $x788) < 0 : (!is_nan($x792 = JS::toNumber($x789, $global)) && !is_nan($x793 = JS::toNumber($x788, $global)) && $x792 < $x793));
$x776 = $x790; }
$x775 = $x776;
if (JS::toBoolean($x775, $global)) {
unset($x797, $W797, $S797, $U797);
$x798 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $leThis, JS::toString('length', $global), 257, 80, '<image>/05_string.js');
$x797 =& $x798[0]; list(,$W797,$S797,$U797) = $x798;
$x794 = JS::toPrimitive($_lastIndex, $global);
$x795 = JS::toPrimitive($x797, $global);
$x796 = (is_string($x794) && is_string($x795) ? strcmp($x794, $x795) < 0 : (!is_nan($x799 = JS::toNumber($x794, $global)) && !is_nan($x800 = JS::toNumber($x795, $global)) && $x799 < $x800));
$x775 = $x796; }
if (!JS::toBoolean($x775, $global)) { break; }

$scope->properties['unicodeLastIndex'] = JS::$undefined; $_unicodeLastIndex =& $scope->properties['unicodeLastIndex'];
$UunicodeLastIndex = FALSE;
$_unicodeLastIndex = mb_strlen(mb_strcut($_thisString, 0,$_lastIndex));
unset($x801, $W801, $S801, $U801);
$x802 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString('index', $global), 259, 27, '<image>/05_string.js');
$x801 =& $x802[0]; list(,$W801,$S801,$U801) = $x802;
$scope->properties['matchIndex'] = JS::$undefined; $_matchIndex =& $scope->properties['matchIndex'];
$UmatchIndex = FALSE;
$_matchIndex = $x801;
$scope->properties['unicodeMatchIndex'] = JS::$undefined; $_unicodeMatchIndex =& $scope->properties['unicodeMatchIndex'];
$UunicodeMatchIndex = FALSE;
$_unicodeMatchIndex = mb_strlen(mb_strcut($_thisString, 0,$_matchIndex));
unset($x805, $W805, $S805, $U805);
$x806 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString(0.0, $global), 261, 12, '<image>/05_string.js');
$x805 =& $x806[0]; list(,$W805,$S805,$U805) = $x806;
$x804 = (((gettype($x805) === gettype('') && $x805 === ''))|| (((is_float($x805) || is_int($x805)) && (is_float('') || is_int(''))) && $x805 == ''));
$x803 = $x804;
if (JS::toBoolean($x803, $global)) {
unset($x808, $W808, $S808, $U808);
$x809 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString('index', $global), 261, 31, '<image>/05_string.js');
$x808 =& $x809[0]; list(,$W808,$S808,$U808) = $x809;
$x807 = (((gettype($x808) === gettype($_lastIndex) && $x808 === $_lastIndex))|| (((is_float($x808) || is_int($x808)) && (is_float($_lastIndex) || is_int($_lastIndex))) && $x808 == $_lastIndex));
$x803 = $x807; }
if (JS::toBoolean($x803, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x811 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 262, 20, '<image>/05_string.js');
$_TypeError =& $x811[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x811;
$x812 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 262, 20);
$x813 = $x812($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x813->class) && $x813->class === 'Error' && !isset($x813->properties['file']) && !isset($x813->properties['line']) && !isset($x813->properties['column'])) {$x813->properties['file'] = '<image>/05_string.js';$x813->properties['line'] = 262;$x813->properties['column'] = 20;$x813->attributes['file'] = $x813->attributes['line'] = $x813->attributes['column'] = 0; }
throw new JSException($x813, 262, 20, '<image>/05_string.js');
}
$x810 = JS::toObject($_returnArray, $global);
unset($x814, $W814, $S814, $U814);
$x815 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x810, JS::toString('push', $global), 262, 20, '<image>/05_string.js');
$x814 =& $x815[0]; list(,$W814,$S814,$U814) = $x815;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x817 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 262, 35, '<image>/05_string.js');
$_TypeError =& $x817[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x817;
$x818 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 262, 35);
$x819 = $x818($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x819->class) && $x819->class === 'Error' && !isset($x819->properties['file']) && !isset($x819->properties['line']) && !isset($x819->properties['column'])) {$x819->properties['file'] = '<image>/05_string.js';$x819->properties['line'] = 262;$x819->properties['column'] = 35;$x819->attributes['file'] = $x819->attributes['line'] = $x819->attributes['column'] = 0; }
throw new JSException($x819, 262, 35, '<image>/05_string.js');
}
$x816 = JS::toObject($leThis, $global);
unset($x820, $W820, $S820, $U820);
$x821 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x816, JS::toString('substring', $global), 262, 35, '<image>/05_string.js');
$x820 =& $x821[0]; list(,$W820,$S820,$U820) = $x821;
$x822 = JS::toPrimitive($_unicodeLastIndex, $global);
$x823 = JS::toPrimitive(1.0, $global);
if (!(is_object($x820) && isset($x820->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x826 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 262, 35, '<image>/05_string.js');
$_TypeError =& $x826[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x826;
$x827 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 262, 35);
$x828 = $x827($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x828->class) && $x828->class === 'Error' && !isset($x828->properties['file']) && !isset($x828->properties['line']) && !isset($x828->properties['column'])) {$x828->properties['file'] = '<image>/05_string.js';$x828->properties['line'] = 262;$x828->properties['column'] = 35;$x828->attributes['file'] = $x828->attributes['line'] = $x828->attributes['column'] = 0; }
throw new JSException($x828, 262, 35, '<image>/05_string.js');
}
$x824 = $x820->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 262, 35);
$x825 = $x824($global, $x816, $x820, array($_unicodeLastIndex, (is_string($x822) || is_string($x823) ? JS::toString($x822, $global) . JS::toString($x823, $global) : JS::toNumber($x822, $global) + JS::toNumber($x823, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x814) && isset($x814->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x831 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 262, 20, '<image>/05_string.js');
$_TypeError =& $x831[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x831;
$x832 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 262, 20);
$x833 = $x832($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x833->class) && $x833->class === 'Error' && !isset($x833->properties['file']) && !isset($x833->properties['line']) && !isset($x833->properties['column'])) {$x833->properties['file'] = '<image>/05_string.js';$x833->properties['line'] = 262;$x833->properties['column'] = 20;$x833->attributes['file'] = $x833->attributes['line'] = $x833->attributes['column'] = 0; }
throw new JSException($x833, 262, 20, '<image>/05_string.js');
}
$x829 = $x814->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 262, 20);
$x830 = $x829($global, $x810, $x814, array($x825), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x834 = ++$_lastIndex;
unset($x835, $W835, $S835, $U835);
$x836 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_separator, JS::toString('lastIndex', $global), 264, 15, '<image>/05_string.js');
$x835 =& $x836[0]; list(,$W835,$S835,$U835) = $x836;
$x837 = ++$x835;;
}
else {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x839 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 267, 20, '<image>/05_string.js');
$_TypeError =& $x839[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x839;
$x840 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 267, 20);
$x841 = $x840($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x841->class) && $x841->class === 'Error' && !isset($x841->properties['file']) && !isset($x841->properties['line']) && !isset($x841->properties['column'])) {$x841->properties['file'] = '<image>/05_string.js';$x841->properties['line'] = 267;$x841->properties['column'] = 20;$x841->attributes['file'] = $x841->attributes['line'] = $x841->attributes['column'] = 0; }
throw new JSException($x841, 267, 20, '<image>/05_string.js');
}
$x838 = JS::toObject($_returnArray, $global);
unset($x842, $W842, $S842, $U842);
$x843 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x838, JS::toString('push', $global), 267, 20, '<image>/05_string.js');
$x842 =& $x843[0]; list(,$W842,$S842,$U842) = $x843;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x845 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 267, 35, '<image>/05_string.js');
$_TypeError =& $x845[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x845;
$x846 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 267, 35);
$x847 = $x846($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x847->class) && $x847->class === 'Error' && !isset($x847->properties['file']) && !isset($x847->properties['line']) && !isset($x847->properties['column'])) {$x847->properties['file'] = '<image>/05_string.js';$x847->properties['line'] = 267;$x847->properties['column'] = 35;$x847->attributes['file'] = $x847->attributes['line'] = $x847->attributes['column'] = 0; }
throw new JSException($x847, 267, 35, '<image>/05_string.js');
}
$x844 = JS::toObject($leThis, $global);
unset($x848, $W848, $S848, $U848);
$x849 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x844, JS::toString('substring', $global), 267, 35, '<image>/05_string.js');
$x848 =& $x849[0]; list(,$W848,$S848,$U848) = $x849;
if (!(is_object($x848) && isset($x848->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x852 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 267, 35, '<image>/05_string.js');
$_TypeError =& $x852[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x852;
$x853 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 267, 35);
$x854 = $x853($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x854->class) && $x854->class === 'Error' && !isset($x854->properties['file']) && !isset($x854->properties['line']) && !isset($x854->properties['column'])) {$x854->properties['file'] = '<image>/05_string.js';$x854->properties['line'] = 267;$x854->properties['column'] = 35;$x854->attributes['file'] = $x854->attributes['line'] = $x854->attributes['column'] = 0; }
throw new JSException($x854, 267, 35, '<image>/05_string.js');
}
$x850 = $x848->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 267, 35);
$x851 = $x850($global, $x844, $x848, array($_unicodeLastIndex, $_unicodeMatchIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x842) && isset($x842->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x857 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 267, 20, '<image>/05_string.js');
$_TypeError =& $x857[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x857;
$x858 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 267, 20);
$x859 = $x858($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x859->class) && $x859->class === 'Error' && !isset($x859->properties['file']) && !isset($x859->properties['line']) && !isset($x859->properties['column'])) {$x859->properties['file'] = '<image>/05_string.js';$x859->properties['line'] = 267;$x859->properties['column'] = 20;$x859->attributes['file'] = $x859->attributes['line'] = $x859->attributes['column'] = 0; }
throw new JSException($x859, 267, 20, '<image>/05_string.js');
}
$x855 = $x842->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 267, 20);
$x856 = $x855($global, $x838, $x842, array($x851), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
for ($x860 = 0;; ++$x860) {
if ($x860 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1.0;
unset($x861, $W861, $S861, $U861);
$x862 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString('length', $global), 269, 29, '<image>/05_string.js');
$x861 =& $x862[0]; list(,$W861,$S861,$U861) = $x862;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x861;
}
if ($x860 !== 0) {
$x863 = ++$_i;
}
$x864 = JS::toPrimitive($_i, $global);
$x865 = JS::toPrimitive($_l, $global);
$x866 = (is_string($x864) && is_string($x865) ? strcmp($x864, $x865) < 0 : (!is_nan($x867 = JS::toNumber($x864, $global)) && !is_nan($x868 = JS::toNumber($x865, $global)) && $x867 < $x868));
if (!JS::toBoolean($x866, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x870 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 270, 21, '<image>/05_string.js');
$_TypeError =& $x870[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x870;
$x871 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 270, 21);
$x872 = $x871($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x872->class) && $x872->class === 'Error' && !isset($x872->properties['file']) && !isset($x872->properties['line']) && !isset($x872->properties['column'])) {$x872->properties['file'] = '<image>/05_string.js';$x872->properties['line'] = 270;$x872->properties['column'] = 21;$x872->attributes['file'] = $x872->attributes['line'] = $x872->attributes['column'] = 0; }
throw new JSException($x872, 270, 21, '<image>/05_string.js');
}
$x869 = JS::toObject($_returnArray, $global);
unset($x873, $W873, $S873, $U873);
$x874 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x869, JS::toString('push', $global), 270, 21, '<image>/05_string.js');
$x873 =& $x874[0]; list(,$W873,$S873,$U873) = $x874;
unset($x875, $W875, $S875, $U875);
$x876 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString($_i, $global), 270, 27, '<image>/05_string.js');
$x875 =& $x876[0]; list(,$W875,$S875,$U875) = $x876;
if (!(is_object($x873) && isset($x873->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x879 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 270, 21, '<image>/05_string.js');
$_TypeError =& $x879[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x879;
$x880 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 270, 21);
$x881 = $x880($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x881->class) && $x881->class === 'Error' && !isset($x881->properties['file']) && !isset($x881->properties['line']) && !isset($x881->properties['column'])) {$x881->properties['file'] = '<image>/05_string.js';$x881->properties['line'] = 270;$x881->properties['column'] = 21;$x881->attributes['file'] = $x881->attributes['line'] = $x881->attributes['column'] = 0; }
throw new JSException($x881, 270, 21, '<image>/05_string.js');
}
$x877 = $x873->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 270, 21);
$x878 = $x877($global, $x869, $x873, array($x875), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
unset($x884, $W884, $S884, $U884);
$x885 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_match, JS::toString(0.0, $global), 273, 41, '<image>/05_string.js');
$x884 =& $x885[0]; list(,$W884,$S884,$U884) = $x885;
unset($x886, $W886, $S886, $U886);
$x887 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x884, JS::toString('length', $global), 273, 44, '<image>/05_string.js');
$x886 =& $x887[0]; list(,$W886,$S886,$U886) = $x887;
$x882 = JS::toPrimitive($_unicodeMatchIndex, $global);
$x883 = JS::toPrimitive($x886, $global);
$x888 = (is_string($x882) || is_string($x883) ? JS::toString($x882, $global) . JS::toString($x883, $global) : JS::toNumber($x882, $global) + JS::toNumber($x883, $global));
if ($UlastIndex) {$global->properties['lastIndex'] = $_lastIndex; $_lastIndex =& $global->properties['lastIndex']; }
$_lastIndex = $x888;;
};;
};
unset($x892, $W892, $S892, $U892);
$x893 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $leThis, JS::toString('length', $global), 277, 22, '<image>/05_string.js');
$x892 =& $x893[0]; list(,$W892,$S892,$U892) = $x893;
$x889 = JS::toPrimitive($_lastIndex, $global);
$x890 = JS::toPrimitive($x892, $global);
$x891 = (is_string($x889) && is_string($x890) ? strcmp($x889, $x890) < 0 : (!is_nan($x894 = JS::toNumber($x889, $global)) && !is_nan($x895 = JS::toNumber($x890, $global)) && $x894 < $x895));
if (JS::toBoolean($x891, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x897 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 278, 19, '<image>/05_string.js');
$_TypeError =& $x897[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x897;
$x898 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 19);
$x899 = $x898($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x899->class) && $x899->class === 'Error' && !isset($x899->properties['file']) && !isset($x899->properties['line']) && !isset($x899->properties['column'])) {$x899->properties['file'] = '<image>/05_string.js';$x899->properties['line'] = 278;$x899->properties['column'] = 19;$x899->attributes['file'] = $x899->attributes['line'] = $x899->attributes['column'] = 0; }
throw new JSException($x899, 278, 19, '<image>/05_string.js');
}
$x896 = JS::toObject($_returnArray, $global);
unset($x900, $W900, $S900, $U900);
$x901 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x896, JS::toString('push', $global), 278, 19, '<image>/05_string.js');
$x900 =& $x901[0]; list(,$W900,$S900,$U900) = $x901;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x903 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 278, 34, '<image>/05_string.js');
$_TypeError =& $x903[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x903;
$x904 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 34);
$x905 = $x904($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x905->class) && $x905->class === 'Error' && !isset($x905->properties['file']) && !isset($x905->properties['line']) && !isset($x905->properties['column'])) {$x905->properties['file'] = '<image>/05_string.js';$x905->properties['line'] = 278;$x905->properties['column'] = 34;$x905->attributes['file'] = $x905->attributes['line'] = $x905->attributes['column'] = 0; }
throw new JSException($x905, 278, 34, '<image>/05_string.js');
}
$x902 = JS::toObject($leThis, $global);
unset($x906, $W906, $S906, $U906);
$x907 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x902, JS::toString('substring', $global), 278, 34, '<image>/05_string.js');
$x906 =& $x907[0]; list(,$W906,$S906,$U906) = $x907;
unset($x908, $W908, $S908, $U908);
$x909 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $leThis, JS::toString('length', $global), 278, 50, '<image>/05_string.js');
$x908 =& $x909[0]; list(,$W908,$S908,$U908) = $x909;
if (!(is_object($x906) && isset($x906->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x912 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 278, 34, '<image>/05_string.js');
$_TypeError =& $x912[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x912;
$x913 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 34);
$x914 = $x913($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x914->class) && $x914->class === 'Error' && !isset($x914->properties['file']) && !isset($x914->properties['line']) && !isset($x914->properties['column'])) {$x914->properties['file'] = '<image>/05_string.js';$x914->properties['line'] = 278;$x914->properties['column'] = 34;$x914->attributes['file'] = $x914->attributes['line'] = $x914->attributes['column'] = 0; }
throw new JSException($x914, 278, 34, '<image>/05_string.js');
}
$x910 = $x906->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 34);
$x911 = $x910($global, $x902, $x906, array($_lastIndex, $x908), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x900) && isset($x900->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x917 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 278, 19, '<image>/05_string.js');
$_TypeError =& $x917[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x917;
$x918 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 19);
$x919 = $x918($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x919->class) && $x919->class === 'Error' && !isset($x919->properties['file']) && !isset($x919->properties['line']) && !isset($x919->properties['column'])) {$x919->properties['file'] = '<image>/05_string.js';$x919->properties['line'] = 278;$x919->properties['column'] = 19;$x919->attributes['file'] = $x919->attributes['line'] = $x919->attributes['column'] = 0; }
throw new JSException($x919, 278, 19, '<image>/05_string.js');
}
$x915 = $x900->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 19);
$x916 = $x915($global, $x896, $x900, array($x911), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
$_separator->properties['global'] =$_savedGlobal;
$x920 = JS::toString('lastIndex', $global);
if ($_separator === JS::$undefined || $_separator === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x921 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 282, 22, '<image>/05_string.js');
$_TypeError =& $x921[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x921;
$x922 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 282, 22);
$x923 = $x922($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x923->class) && $x923->class === 'Error' && !isset($x923->properties['file']) && !isset($x923->properties['line']) && !isset($x923->properties['column'])) {$x923->properties['file'] = '<image>/05_string.js';$x923->properties['line'] = 282;$x923->properties['column'] = 22;$x923->attributes['file'] = $x923->attributes['line'] = $x923->attributes['column'] = 0; }
throw new JSException($x923, 282, 22, '<image>/05_string.js');
}
$_separator = JS::toObject($_separator, $global);
unset($x924, $W924, $S924, $U924);
$x925 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $_separator, JS::toString($x920, $global), 282, 22, '<image>/05_string.js');
$x924 =& $x925[0]; list(,$W924,$S924,$U924) = $x925;
if ($U924 && (!isset($_separator->extensible) || $_separator->extensible)) {$_separator->properties[$x920] = $x924; $x924 =& $_separator->properties[$x920]; $_separator->attributes[$x920] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U924 = FALSE; $W924 = TRUE; }
if (isset($_separator->class) && $_separator->class === 'Array') {  if (isset($_separator->properties['length']) && $_separator->properties['length'] !== JS::$undefined) { $x927 = $_separator->properties['length']; }  else { $x927 = 0; } }
if (isset($S924)) {
$x928 = $S924->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 282, 22);
$x929 = $x928($global, $_separator, $S924, array($_savedLastIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x926 = $x929;
} else {
if (!$U924) {$x926 = $_savedLastIndex;if ($W924) { $x924 = $_savedLastIndex; }  }
else { $x926 = JS::$undefined; }
}
if (isset($_separator->class) && $_separator->class === 'Array') {if (is_int('lastIndex') && 'lastIndex' >= $_separator->properties['length']) { $_separator->properties['length'] = 'lastIndex' + 1; }else if ($x920 === 'length' && is_int($_savedLastIndex) && $x927 > $_savedLastIndex) {  for ($i = $_savedLastIndex; $i < $x927; ++$i) {  unset($_separator->properties[$i], $_separator->attributes[$i]); }}};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x725=&$scope->properties[\'arguments\'];$x725->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x725->properties[$i]=$args[$i];$x725->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'separator\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_separator=&$scope->properties[\'separator\'];$Useparator=FALSE;$scope->properties[\'limit\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_limit=&$scope->properties[\'limit\'];$Ulimit=FALSE;$global->scope[++$global->scope_sp]=$scope;$x726=(((gettype($_separator)===gettype(JS::$undefined)&&$_separator===JS::$undefined))||(((is_float($_separator)||is_int($_separator))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_separator==JS::$undefined));if(JS::toBoolean($x726,$global)){$x727=clone JS::$arrayTemplate;$x727->properties[\'length\']=1;$x727->attributes[\'length\']=JS::WRITABLE;$x727->properties[0]=$leThis->value;$x727->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x727;}$x728=(((gettype($_separator)===gettype(\'\')&&$_separator===\'\'))||(((is_float($_separator)||is_int($_separator))&&(is_float(\'\')||is_int(\'\')))&&$_separator==\'\'));if(JS::toBoolean($x728,$global)){$x729=clone JS::$arrayTemplate;$x729->properties[\'length\']=0;$x729->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x729;for($x730=0;;++$x730){if($x730===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0.0;unset($x731,$W731,$S731,$U731);$x732=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$leThis,JS::toString(\'length\',$global),237,27,\'<image>/05_string.js\');$x731=&$x732[0];list(,$W731,$S731,$U731)=$x732;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x731;}if($x730!==0){$x733=++$_i;}$x734=JS::toPrimitive($_i,$global);$x735=JS::toPrimitive($_l,$global);$x736=(is_string($x734)&&is_string($x735)?strcmp($x734,$x735)<0:(!is_nan($x737=JS::toNumber($x734,$global))&&!is_nan($x738=JS::toNumber($x735,$global))&&$x737<$x738));if(!JS::toBoolean($x736,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x740=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),238,20,\'<image>/05_string.js\');$_TypeError=&$x740[0];list(,$WTypeError,$STypeError,$UTypeError)=$x740;$x741=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',238,20);$x742=$x741($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x742->class)&&$x742->class===\'Error\'&&!isset($x742->properties[\'file\'])&&!isset($x742->properties[\'line\'])&&!isset($x742->properties[\'column\'])){$x742->properties[\'file\']=\'<image>/05_string.js\';$x742->properties[\'line\']=238;$x742->properties[\'column\']=20;$x742->attributes[\'file\']=$x742->attributes[\'line\']=$x742->attributes[\'column\']=0;}throw new JSException($x742,238,20,\'<image>/05_string.js\');}$x739=JS::toObject($_returnArray,$global);unset($x743,$W743,$S743,$U743);$x744=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x739,JS::toString(\'push\',$global),238,20,\'<image>/05_string.js\');$x743=&$x744[0];list(,$W743,$S743,$U743)=$x744;if(!(is_object($x743)&&isset($x743->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x747=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),238,20,\'<image>/05_string.js\');$_TypeError=&$x747[0];list(,$WTypeError,$STypeError,$UTypeError)=$x747;$x748=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',238,20);$x749=$x748($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x749->class)&&$x749->class===\'Error\'&&!isset($x749->properties[\'file\'])&&!isset($x749->properties[\'line\'])&&!isset($x749->properties[\'column\'])){$x749->properties[\'file\']=\'<image>/05_string.js\';$x749->properties[\'line\']=238;$x749->properties[\'column\']=20;$x749->attributes[\'file\']=$x749->attributes[\'line\']=$x749->attributes[\'column\']=0;}throw new JSException($x749,238,20,\'<image>/05_string.js\');}$x745=$x743->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',238,20);$x746=$x745($global,$x739,$x743,array((string)mb_substr($leThis->value,$_i,1)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;}$x751=$_separator;$x751=($x751===JS::$undefined?\'undefined\':(is_int($x751)||is_float($x751)?\'number\':(is_bool($x751)?\'boolean\':(is_string($x751)?\'string\':(is_object($x751)&&isset($x751->call)?\'function\':\'object\')))));$x750=(((gettype($x751)===gettype(\'string\')&&$x751===\'string\'))||(((is_float($x751)||is_int($x751))&&(is_float(\'string\')||is_int(\'string\')))&&$x751==\'string\'));if(JS::toBoolean($x750,$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x754=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),245,19,\'<image>/05_string.js\');$_RegExp=&$x754[0];list(,$WRegExp,$SRegExp,$URegExp)=$x754;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x755=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),245,19,\'<image>/05_string.js\');$_ReferenceError=&$x755[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x755;$x756=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',245,19);$x757=$x756($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x757->class)&&$x757->class===\'Error\'&&!isset($x757->properties[\'file\'])&&!isset($x757->properties[\'line\'])&&!isset($x757->properties[\'column\'])){$x757->properties[\'file\']=\'<image>/05_string.js\';$x757->properties[\'line\']=245;$x757->properties[\'column\']=19;$x757->attributes[\'file\']=$x757->attributes[\'line\']=$x757->attributes[\'column\']=0;}throw new JSException($x757,245,19,\'<image>/05_string.js\');}$x752=clone JS::$objectTemplate;unset($x758,$W758,$S758,$U758);$x759=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),245,15,\'<image>/05_string.js\');$x758=&$x759[0];list(,$W758,$S758,$U758)=$x759;$x753=$x758;$x752->prototype=$x753;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x762=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),245,15,\'<image>/05_string.js\');$_TypeError=&$x762[0];list(,$WTypeError,$STypeError,$UTypeError)=$x762;$x763=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',245,15);$x764=$x763($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x764->class)&&$x764->class===\'Error\'&&!isset($x764->properties[\'file\'])&&!isset($x764->properties[\'line\'])&&!isset($x764->properties[\'column\'])){$x764->properties[\'file\']=\'<image>/05_string.js\';$x764->properties[\'line\']=245;$x764->properties[\'column\']=15;$x764->attributes[\'file\']=$x764->attributes[\'line\']=$x764->attributes[\'column\']=0;}throw new JSException($x764,245,15,\'<image>/05_string.js\');}$x760=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',245,15);$x761=$x760($global,$x752,$_RegExp,array(preg_quote(JS::toString($_separator,$global),\'/\'),\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x753=$x761;if(is_object($x753)&&$x753!==JS::$undefined){$x752=$x753;}if($Useparator){$global->properties[\'separator\']=$_separator;$_separator=&$global->properties[\'separator\'];}$_separator=$x752;}$x765=clone JS::$arrayTemplate;$x765->properties[\'length\']=0;$x765->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x765;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0.0;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;unset($x766,$W766,$S766,$U766);$x767=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_separator,JS::toString(\'lastIndex\',$global),249,29,\'<image>/05_string.js\');$x766=&$x767[0];list(,$W766,$S766,$U766)=$x767;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x766;unset($x768,$W768,$S768,$U768);$x769=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_separator,JS::toString(\'global\',$global),249,64,\'<image>/05_string.js\');$x768=&$x769[0];list(,$W768,$S768,$U768)=$x769;$scope->properties[\'savedGlobal\']=JS::$undefined;$_savedGlobal=&$scope->properties[\'savedGlobal\'];$UsavedGlobal=FALSE;$_savedGlobal=$x768;$_separator->properties[\'global\']=TRUE;$x770=(((gettype($_limit)===gettype(JS::$undefined)&&$_limit===JS::$undefined))||(((is_float($_limit)||is_int($_limit))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_limit==JS::$undefined));if(JS::toBoolean($x770,$global)){unset($_Infinity,$WInfinity,$SInfinity,$UInfinity);$x771=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'Infinity\',$global),254,11,\'<image>/05_string.js\');$_Infinity=&$x771[0];list(,$WInfinity,$SInfinity,$UInfinity)=$x771;if($UInfinity){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x772=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),254,11,\'<image>/05_string.js\');$_ReferenceError=&$x772[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x772;$x773=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',254,11);$x774=$x773($global,$global,$_ReferenceError,array(\'Infinity is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x774->class)&&$x774->class===\'Error\'&&!isset($x774->properties[\'file\'])&&!isset($x774->properties[\'line\'])&&!isset($x774->properties[\'column\'])){$x774->properties[\'file\']=\'<image>/05_string.js\';$x774->properties[\'line\']=254;$x774->properties[\'column\']=11;$x774->attributes[\'file\']=$x774->attributes[\'line\']=$x774->attributes[\'column\']=0;}throw new JSException($x774,254,11,\'<image>/05_string.js\');}if($Ulimit){$global->properties[\'limit\']=$_limit;$_limit=&$global->properties[\'limit\'];}$_limit=$_Infinity;}for(;;){if($_separator===JS::$undefined||$_separator===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x778=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),257,32,\'<image>/05_string.js\');$_TypeError=&$x778[0];list(,$WTypeError,$STypeError,$UTypeError)=$x778;$x779=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',257,32);$x780=$x779($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x780->class)&&$x780->class===\'Error\'&&!isset($x780->properties[\'file\'])&&!isset($x780->properties[\'line\'])&&!isset($x780->properties[\'column\'])){$x780->properties[\'file\']=\'<image>/05_string.js\';$x780->properties[\'line\']=257;$x780->properties[\'column\']=32;$x780->attributes[\'file\']=$x780->attributes[\'line\']=$x780->attributes[\'column\']=0;}throw new JSException($x780,257,32,\'<image>/05_string.js\');}$x777=JS::toObject($_separator,$global);unset($x781,$W781,$S781,$U781);$x782=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x777,JS::toString(\'exec\',$global),257,32,\'<image>/05_string.js\');$x781=&$x782[0];list(,$W781,$S781,$U781)=$x782;if(!(is_object($x781)&&isset($x781->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x785=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),257,32,\'<image>/05_string.js\');$_TypeError=&$x785[0];list(,$WTypeError,$STypeError,$UTypeError)=$x785;$x786=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',257,32);$x787=$x786($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x787->class)&&$x787->class===\'Error\'&&!isset($x787->properties[\'file\'])&&!isset($x787->properties[\'line\'])&&!isset($x787->properties[\'column\'])){$x787->properties[\'file\']=\'<image>/05_string.js\';$x787->properties[\'line\']=257;$x787->properties[\'column\']=32;$x787->attributes[\'file\']=$x787->attributes[\'line\']=$x787->attributes[\'column\']=0;}throw new JSException($x787,257,32,\'<image>/05_string.js\');}$x783=$x781->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',257,32);$x784=$x783($global,$x777,$x781,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x784;$x776=$_match;if(JS::toBoolean($x776,$global)){$x791=--$_limit;$x788=JS::toPrimitive($x791,$global);$x789=JS::toPrimitive(0.0,$global);$x790=(is_string($x789)&&is_string($x788)?strcmp($x789,$x788)<0:(!is_nan($x792=JS::toNumber($x789,$global))&&!is_nan($x793=JS::toNumber($x788,$global))&&$x792<$x793));$x776=$x790;}$x775=$x776;if(JS::toBoolean($x775,$global)){unset($x797,$W797,$S797,$U797);$x798=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$leThis,JS::toString(\'length\',$global),257,80,\'<image>/05_string.js\');$x797=&$x798[0];list(,$W797,$S797,$U797)=$x798;$x794=JS::toPrimitive($_lastIndex,$global);$x795=JS::toPrimitive($x797,$global);$x796=(is_string($x794)&&is_string($x795)?strcmp($x794,$x795)<0:(!is_nan($x799=JS::toNumber($x794,$global))&&!is_nan($x800=JS::toNumber($x795,$global))&&$x799<$x800));$x775=$x796;}if(!JS::toBoolean($x775,$global)){break;}$scope->properties[\'unicodeLastIndex\']=JS::$undefined;$_unicodeLastIndex=&$scope->properties[\'unicodeLastIndex\'];$UunicodeLastIndex=FALSE;$_unicodeLastIndex=mb_strlen(mb_strcut($_thisString,0,$_lastIndex));unset($x801,$W801,$S801,$U801);$x802=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString(\'index\',$global),259,27,\'<image>/05_string.js\');$x801=&$x802[0];list(,$W801,$S801,$U801)=$x802;$scope->properties[\'matchIndex\']=JS::$undefined;$_matchIndex=&$scope->properties[\'matchIndex\'];$UmatchIndex=FALSE;$_matchIndex=$x801;$scope->properties[\'unicodeMatchIndex\']=JS::$undefined;$_unicodeMatchIndex=&$scope->properties[\'unicodeMatchIndex\'];$UunicodeMatchIndex=FALSE;$_unicodeMatchIndex=mb_strlen(mb_strcut($_thisString,0,$_matchIndex));unset($x805,$W805,$S805,$U805);$x806=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString(0.0,$global),261,12,\'<image>/05_string.js\');$x805=&$x806[0];list(,$W805,$S805,$U805)=$x806;$x804=(((gettype($x805)===gettype(\'\')&&$x805===\'\'))||(((is_float($x805)||is_int($x805))&&(is_float(\'\')||is_int(\'\')))&&$x805==\'\'));$x803=$x804;if(JS::toBoolean($x803,$global)){unset($x808,$W808,$S808,$U808);$x809=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString(\'index\',$global),261,31,\'<image>/05_string.js\');$x808=&$x809[0];list(,$W808,$S808,$U808)=$x809;$x807=(((gettype($x808)===gettype($_lastIndex)&&$x808===$_lastIndex))||(((is_float($x808)||is_int($x808))&&(is_float($_lastIndex)||is_int($_lastIndex)))&&$x808==$_lastIndex));$x803=$x807;}if(JS::toBoolean($x803,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x811=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),262,20,\'<image>/05_string.js\');$_TypeError=&$x811[0];list(,$WTypeError,$STypeError,$UTypeError)=$x811;$x812=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',262,20);$x813=$x812($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x813->class)&&$x813->class===\'Error\'&&!isset($x813->properties[\'file\'])&&!isset($x813->properties[\'line\'])&&!isset($x813->properties[\'column\'])){$x813->properties[\'file\']=\'<image>/05_string.js\';$x813->properties[\'line\']=262;$x813->properties[\'column\']=20;$x813->attributes[\'file\']=$x813->attributes[\'line\']=$x813->attributes[\'column\']=0;}throw new JSException($x813,262,20,\'<image>/05_string.js\');}$x810=JS::toObject($_returnArray,$global);unset($x814,$W814,$S814,$U814);$x815=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x810,JS::toString(\'push\',$global),262,20,\'<image>/05_string.js\');$x814=&$x815[0];list(,$W814,$S814,$U814)=$x815;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x817=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),262,35,\'<image>/05_string.js\');$_TypeError=&$x817[0];list(,$WTypeError,$STypeError,$UTypeError)=$x817;$x818=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',262,35);$x819=$x818($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x819->class)&&$x819->class===\'Error\'&&!isset($x819->properties[\'file\'])&&!isset($x819->properties[\'line\'])&&!isset($x819->properties[\'column\'])){$x819->properties[\'file\']=\'<image>/05_string.js\';$x819->properties[\'line\']=262;$x819->properties[\'column\']=35;$x819->attributes[\'file\']=$x819->attributes[\'line\']=$x819->attributes[\'column\']=0;}throw new JSException($x819,262,35,\'<image>/05_string.js\');}$x816=JS::toObject($leThis,$global);unset($x820,$W820,$S820,$U820);$x821=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x816,JS::toString(\'substring\',$global),262,35,\'<image>/05_string.js\');$x820=&$x821[0];list(,$W820,$S820,$U820)=$x821;$x822=JS::toPrimitive($_unicodeLastIndex,$global);$x823=JS::toPrimitive(1.0,$global);if(!(is_object($x820)&&isset($x820->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x826=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),262,35,\'<image>/05_string.js\');$_TypeError=&$x826[0];list(,$WTypeError,$STypeError,$UTypeError)=$x826;$x827=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',262,35);$x828=$x827($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x828->class)&&$x828->class===\'Error\'&&!isset($x828->properties[\'file\'])&&!isset($x828->properties[\'line\'])&&!isset($x828->properties[\'column\'])){$x828->properties[\'file\']=\'<image>/05_string.js\';$x828->properties[\'line\']=262;$x828->properties[\'column\']=35;$x828->attributes[\'file\']=$x828->attributes[\'line\']=$x828->attributes[\'column\']=0;}throw new JSException($x828,262,35,\'<image>/05_string.js\');}$x824=$x820->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',262,35);$x825=$x824($global,$x816,$x820,array($_unicodeLastIndex,(is_string($x822)||is_string($x823)?JS::toString($x822,$global).JS::toString($x823,$global):JS::toNumber($x822,$global)+JS::toNumber($x823,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x814)&&isset($x814->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x831=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),262,20,\'<image>/05_string.js\');$_TypeError=&$x831[0];list(,$WTypeError,$STypeError,$UTypeError)=$x831;$x832=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',262,20);$x833=$x832($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x833->class)&&$x833->class===\'Error\'&&!isset($x833->properties[\'file\'])&&!isset($x833->properties[\'line\'])&&!isset($x833->properties[\'column\'])){$x833->properties[\'file\']=\'<image>/05_string.js\';$x833->properties[\'line\']=262;$x833->properties[\'column\']=20;$x833->attributes[\'file\']=$x833->attributes[\'line\']=$x833->attributes[\'column\']=0;}throw new JSException($x833,262,20,\'<image>/05_string.js\');}$x829=$x814->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',262,20);$x830=$x829($global,$x810,$x814,array($x825),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x834=++$_lastIndex;unset($x835,$W835,$S835,$U835);$x836=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_separator,JS::toString(\'lastIndex\',$global),264,15,\'<image>/05_string.js\');$x835=&$x836[0];list(,$W835,$S835,$U835)=$x836;$x837=++$x835;}else{if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x839=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),267,20,\'<image>/05_string.js\');$_TypeError=&$x839[0];list(,$WTypeError,$STypeError,$UTypeError)=$x839;$x840=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',267,20);$x841=$x840($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x841->class)&&$x841->class===\'Error\'&&!isset($x841->properties[\'file\'])&&!isset($x841->properties[\'line\'])&&!isset($x841->properties[\'column\'])){$x841->properties[\'file\']=\'<image>/05_string.js\';$x841->properties[\'line\']=267;$x841->properties[\'column\']=20;$x841->attributes[\'file\']=$x841->attributes[\'line\']=$x841->attributes[\'column\']=0;}throw new JSException($x841,267,20,\'<image>/05_string.js\');}$x838=JS::toObject($_returnArray,$global);unset($x842,$W842,$S842,$U842);$x843=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x838,JS::toString(\'push\',$global),267,20,\'<image>/05_string.js\');$x842=&$x843[0];list(,$W842,$S842,$U842)=$x843;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x845=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),267,35,\'<image>/05_string.js\');$_TypeError=&$x845[0];list(,$WTypeError,$STypeError,$UTypeError)=$x845;$x846=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',267,35);$x847=$x846($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x847->class)&&$x847->class===\'Error\'&&!isset($x847->properties[\'file\'])&&!isset($x847->properties[\'line\'])&&!isset($x847->properties[\'column\'])){$x847->properties[\'file\']=\'<image>/05_string.js\';$x847->properties[\'line\']=267;$x847->properties[\'column\']=35;$x847->attributes[\'file\']=$x847->attributes[\'line\']=$x847->attributes[\'column\']=0;}throw new JSException($x847,267,35,\'<image>/05_string.js\');}$x844=JS::toObject($leThis,$global);unset($x848,$W848,$S848,$U848);$x849=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x844,JS::toString(\'substring\',$global),267,35,\'<image>/05_string.js\');$x848=&$x849[0];list(,$W848,$S848,$U848)=$x849;if(!(is_object($x848)&&isset($x848->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x852=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),267,35,\'<image>/05_string.js\');$_TypeError=&$x852[0];list(,$WTypeError,$STypeError,$UTypeError)=$x852;$x853=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',267,35);$x854=$x853($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x854->class)&&$x854->class===\'Error\'&&!isset($x854->properties[\'file\'])&&!isset($x854->properties[\'line\'])&&!isset($x854->properties[\'column\'])){$x854->properties[\'file\']=\'<image>/05_string.js\';$x854->properties[\'line\']=267;$x854->properties[\'column\']=35;$x854->attributes[\'file\']=$x854->attributes[\'line\']=$x854->attributes[\'column\']=0;}throw new JSException($x854,267,35,\'<image>/05_string.js\');}$x850=$x848->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',267,35);$x851=$x850($global,$x844,$x848,array($_unicodeLastIndex,$_unicodeMatchIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x842)&&isset($x842->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x857=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),267,20,\'<image>/05_string.js\');$_TypeError=&$x857[0];list(,$WTypeError,$STypeError,$UTypeError)=$x857;$x858=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',267,20);$x859=$x858($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x859->class)&&$x859->class===\'Error\'&&!isset($x859->properties[\'file\'])&&!isset($x859->properties[\'line\'])&&!isset($x859->properties[\'column\'])){$x859->properties[\'file\']=\'<image>/05_string.js\';$x859->properties[\'line\']=267;$x859->properties[\'column\']=20;$x859->attributes[\'file\']=$x859->attributes[\'line\']=$x859->attributes[\'column\']=0;}throw new JSException($x859,267,20,\'<image>/05_string.js\');}$x855=$x842->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',267,20);$x856=$x855($global,$x838,$x842,array($x851),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);for($x860=0;;++$x860){if($x860===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1.0;unset($x861,$W861,$S861,$U861);$x862=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString(\'length\',$global),269,29,\'<image>/05_string.js\');$x861=&$x862[0];list(,$W861,$S861,$U861)=$x862;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x861;}if($x860!==0){$x863=++$_i;}$x864=JS::toPrimitive($_i,$global);$x865=JS::toPrimitive($_l,$global);$x866=(is_string($x864)&&is_string($x865)?strcmp($x864,$x865)<0:(!is_nan($x867=JS::toNumber($x864,$global))&&!is_nan($x868=JS::toNumber($x865,$global))&&$x867<$x868));if(!JS::toBoolean($x866,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x870=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),270,21,\'<image>/05_string.js\');$_TypeError=&$x870[0];list(,$WTypeError,$STypeError,$UTypeError)=$x870;$x871=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',270,21);$x872=$x871($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x872->class)&&$x872->class===\'Error\'&&!isset($x872->properties[\'file\'])&&!isset($x872->properties[\'line\'])&&!isset($x872->properties[\'column\'])){$x872->properties[\'file\']=\'<image>/05_string.js\';$x872->properties[\'line\']=270;$x872->properties[\'column\']=21;$x872->attributes[\'file\']=$x872->attributes[\'line\']=$x872->attributes[\'column\']=0;}throw new JSException($x872,270,21,\'<image>/05_string.js\');}$x869=JS::toObject($_returnArray,$global);unset($x873,$W873,$S873,$U873);$x874=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x869,JS::toString(\'push\',$global),270,21,\'<image>/05_string.js\');$x873=&$x874[0];list(,$W873,$S873,$U873)=$x874;unset($x875,$W875,$S875,$U875);$x876=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString($_i,$global),270,27,\'<image>/05_string.js\');$x875=&$x876[0];list(,$W875,$S875,$U875)=$x876;if(!(is_object($x873)&&isset($x873->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x879=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),270,21,\'<image>/05_string.js\');$_TypeError=&$x879[0];list(,$WTypeError,$STypeError,$UTypeError)=$x879;$x880=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',270,21);$x881=$x880($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x881->class)&&$x881->class===\'Error\'&&!isset($x881->properties[\'file\'])&&!isset($x881->properties[\'line\'])&&!isset($x881->properties[\'column\'])){$x881->properties[\'file\']=\'<image>/05_string.js\';$x881->properties[\'line\']=270;$x881->properties[\'column\']=21;$x881->attributes[\'file\']=$x881->attributes[\'line\']=$x881->attributes[\'column\']=0;}throw new JSException($x881,270,21,\'<image>/05_string.js\');}$x877=$x873->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',270,21);$x878=$x877($global,$x869,$x873,array($x875),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}unset($x884,$W884,$S884,$U884);$x885=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_match,JS::toString(0.0,$global),273,41,\'<image>/05_string.js\');$x884=&$x885[0];list(,$W884,$S884,$U884)=$x885;unset($x886,$W886,$S886,$U886);$x887=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x884,JS::toString(\'length\',$global),273,44,\'<image>/05_string.js\');$x886=&$x887[0];list(,$W886,$S886,$U886)=$x887;$x882=JS::toPrimitive($_unicodeMatchIndex,$global);$x883=JS::toPrimitive($x886,$global);$x888=(is_string($x882)||is_string($x883)?JS::toString($x882,$global).JS::toString($x883,$global):JS::toNumber($x882,$global)+JS::toNumber($x883,$global));if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=$x888;}}unset($x892,$W892,$S892,$U892);$x893=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$leThis,JS::toString(\'length\',$global),277,22,\'<image>/05_string.js\');$x892=&$x893[0];list(,$W892,$S892,$U892)=$x893;$x889=JS::toPrimitive($_lastIndex,$global);$x890=JS::toPrimitive($x892,$global);$x891=(is_string($x889)&&is_string($x890)?strcmp($x889,$x890)<0:(!is_nan($x894=JS::toNumber($x889,$global))&&!is_nan($x895=JS::toNumber($x890,$global))&&$x894<$x895));if(JS::toBoolean($x891,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x897=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),278,19,\'<image>/05_string.js\');$_TypeError=&$x897[0];list(,$WTypeError,$STypeError,$UTypeError)=$x897;$x898=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,19);$x899=$x898($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x899->class)&&$x899->class===\'Error\'&&!isset($x899->properties[\'file\'])&&!isset($x899->properties[\'line\'])&&!isset($x899->properties[\'column\'])){$x899->properties[\'file\']=\'<image>/05_string.js\';$x899->properties[\'line\']=278;$x899->properties[\'column\']=19;$x899->attributes[\'file\']=$x899->attributes[\'line\']=$x899->attributes[\'column\']=0;}throw new JSException($x899,278,19,\'<image>/05_string.js\');}$x896=JS::toObject($_returnArray,$global);unset($x900,$W900,$S900,$U900);$x901=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x896,JS::toString(\'push\',$global),278,19,\'<image>/05_string.js\');$x900=&$x901[0];list(,$W900,$S900,$U900)=$x901;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x903=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),278,34,\'<image>/05_string.js\');$_TypeError=&$x903[0];list(,$WTypeError,$STypeError,$UTypeError)=$x903;$x904=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,34);$x905=$x904($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x905->class)&&$x905->class===\'Error\'&&!isset($x905->properties[\'file\'])&&!isset($x905->properties[\'line\'])&&!isset($x905->properties[\'column\'])){$x905->properties[\'file\']=\'<image>/05_string.js\';$x905->properties[\'line\']=278;$x905->properties[\'column\']=34;$x905->attributes[\'file\']=$x905->attributes[\'line\']=$x905->attributes[\'column\']=0;}throw new JSException($x905,278,34,\'<image>/05_string.js\');}$x902=JS::toObject($leThis,$global);unset($x906,$W906,$S906,$U906);$x907=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x902,JS::toString(\'substring\',$global),278,34,\'<image>/05_string.js\');$x906=&$x907[0];list(,$W906,$S906,$U906)=$x907;unset($x908,$W908,$S908,$U908);$x909=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$leThis,JS::toString(\'length\',$global),278,50,\'<image>/05_string.js\');$x908=&$x909[0];list(,$W908,$S908,$U908)=$x909;if(!(is_object($x906)&&isset($x906->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x912=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),278,34,\'<image>/05_string.js\');$_TypeError=&$x912[0];list(,$WTypeError,$STypeError,$UTypeError)=$x912;$x913=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,34);$x914=$x913($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x914->class)&&$x914->class===\'Error\'&&!isset($x914->properties[\'file\'])&&!isset($x914->properties[\'line\'])&&!isset($x914->properties[\'column\'])){$x914->properties[\'file\']=\'<image>/05_string.js\';$x914->properties[\'line\']=278;$x914->properties[\'column\']=34;$x914->attributes[\'file\']=$x914->attributes[\'line\']=$x914->attributes[\'column\']=0;}throw new JSException($x914,278,34,\'<image>/05_string.js\');}$x910=$x906->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,34);$x911=$x910($global,$x902,$x906,array($_lastIndex,$x908),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x900)&&isset($x900->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x917=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),278,19,\'<image>/05_string.js\');$_TypeError=&$x917[0];list(,$WTypeError,$STypeError,$UTypeError)=$x917;$x918=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,19);$x919=$x918($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x919->class)&&$x919->class===\'Error\'&&!isset($x919->properties[\'file\'])&&!isset($x919->properties[\'line\'])&&!isset($x919->properties[\'column\'])){$x919->properties[\'file\']=\'<image>/05_string.js\';$x919->properties[\'line\']=278;$x919->properties[\'column\']=19;$x919->attributes[\'file\']=$x919->attributes[\'line\']=$x919->attributes[\'column\']=0;}throw new JSException($x919,278,19,\'<image>/05_string.js\');}$x915=$x900->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,19);$x916=$x915($global,$x896,$x900,array($x911),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}$_separator->properties[\'global\']=$_savedGlobal;$x920=JS::toString(\'lastIndex\',$global);if($_separator===JS::$undefined||$_separator===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x921=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),282,22,\'<image>/05_string.js\');$_TypeError=&$x921[0];list(,$WTypeError,$STypeError,$UTypeError)=$x921;$x922=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',282,22);$x923=$x922($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x923->class)&&$x923->class===\'Error\'&&!isset($x923->properties[\'file\'])&&!isset($x923->properties[\'line\'])&&!isset($x923->properties[\'column\'])){$x923->properties[\'file\']=\'<image>/05_string.js\';$x923->properties[\'line\']=282;$x923->properties[\'column\']=22;$x923->attributes[\'file\']=$x923->attributes[\'line\']=$x923->attributes[\'column\']=0;}throw new JSException($x923,282,22,\'<image>/05_string.js\');}$_separator=JS::toObject($_separator,$global);unset($x924,$W924,$S924,$U924);$x925=_1062444eb1665286b15372d6a2622cc9_5($global,$scope,$_separator,JS::toString($x920,$global),282,22,\'<image>/05_string.js\');$x924=&$x925[0];list(,$W924,$S924,$U924)=$x925;if($U924&&(!isset($_separator->extensible)||$_separator->extensible)){$_separator->properties[$x920]=$x924;$x924=&$_separator->properties[$x920];$_separator->attributes[$x920]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U924=FALSE;$W924=TRUE;}if(isset($_separator->class)&&$_separator->class===\'Array\'){if(isset($_separator->properties[\'length\'])&&$_separator->properties[\'length\']!==JS::$undefined){$x927=$_separator->properties[\'length\'];}else{$x927=0;}}if(isset($S924)){$x928=$S924->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',282,22);$x929=$x928($global,$_separator,$S924,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x926=$x929;}else{if(!$U924){$x926=$_savedLastIndex;if($W924){$x924=$_savedLastIndex;}}else{$x926=JS::$undefined;}}if(isset($_separator->class)&&$_separator->class===\'Array\'){if(is_int(\'lastIndex\')&&\'lastIndex\'>=$_separator->properties[\'length\']){$_separator->properties[\'length\']=\'lastIndex\'+1;}else if($x920===\'length\'&&is_int($_savedLastIndex)&&$x927>$_savedLastIndex){for($i=$_savedLastIndex;$i<$x927;++$i){unset($_separator->properties[$i],$_separator->attributes[$i]);}}}return$_returnArray;return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x944 =& $scope->properties['arguments'];
$x944->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x944->properties[$i] = $args[$i];
$x944->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['end'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_end =& $scope->properties['end'];
$Uend = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['length'] = JS::$undefined; $_length =& $scope->properties['length'];
$Ulength = FALSE;
$_length = strlen($leThis->value);
$x945 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x945, $global)) {
$x946 = 0.0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x946;;
};
$x947 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x947, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x948 = JS::toPrimitive($_start, $global);
$x949 = JS::toPrimitive(0.0, $global);
$x950 = (is_string($x948) && is_string($x949) ? strcmp($x948, $x949) < 0 : (!is_nan($x951 = JS::toNumber($x948, $global)) && !is_nan($x952 = JS::toNumber($x949, $global)) && $x951 < $x952));
if (JS::toBoolean($x950, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x953 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Math', $global), 299, 11, '<image>/05_string.js');
$_Math =& $x953[0]; list(,$WMath,$SMath,$UMath) = $x953;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x954 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 299, 11, '<image>/05_string.js');
$_ReferenceError =& $x954[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x954;
$x955 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 11);
$x956 = $x955($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x956->class) && $x956->class === 'Error' && !isset($x956->properties['file']) && !isset($x956->properties['line']) && !isset($x956->properties['column'])) {$x956->properties['file'] = '<image>/05_string.js';$x956->properties['line'] = 299;$x956->properties['column'] = 11;$x956->attributes['file'] = $x956->attributes['line'] = $x956->attributes['column'] = 0; }
throw new JSException($x956, 299, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x958 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 299, 19, '<image>/05_string.js');
$_TypeError =& $x958[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x958;
$x959 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 19);
$x960 = $x959($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x960->class) && $x960->class === 'Error' && !isset($x960->properties['file']) && !isset($x960->properties['line']) && !isset($x960->properties['column'])) {$x960->properties['file'] = '<image>/05_string.js';$x960->properties['line'] = 299;$x960->properties['column'] = 19;$x960->attributes['file'] = $x960->attributes['line'] = $x960->attributes['column'] = 0; }
throw new JSException($x960, 299, 19, '<image>/05_string.js');
}
$x957 = JS::toObject($_Math, $global);
unset($x961, $W961, $S961, $U961);
$x962 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x957, JS::toString('max', $global), 299, 19, '<image>/05_string.js');
$x961 =& $x962[0]; list(,$W961,$S961,$U961) = $x962;
$x963 = JS::toPrimitive($_start, $global);
$x964 = JS::toPrimitive($_length, $global);
if (!(is_object($x961) && isset($x961->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x967 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 299, 19, '<image>/05_string.js');
$_TypeError =& $x967[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x967;
$x968 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 19);
$x969 = $x968($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x969->class) && $x969->class === 'Error' && !isset($x969->properties['file']) && !isset($x969->properties['line']) && !isset($x969->properties['column'])) {$x969->properties['file'] = '<image>/05_string.js';$x969->properties['line'] = 299;$x969->properties['column'] = 19;$x969->attributes['file'] = $x969->attributes['line'] = $x969->attributes['column'] = 0; }
throw new JSException($x969, 299, 19, '<image>/05_string.js');
}
$x965 = $x961->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 19);
$x966 = $x965($global, $x957, $x961, array((is_string($x963) || is_string($x964) ? JS::toString($x963, $global) . JS::toString($x964, $global) : JS::toNumber($x963, $global) + JS::toNumber($x964, $global)), 0.0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x966;;
};
$x970 = JS::toPrimitive($_end, $global);
$x971 = JS::toPrimitive(0.0, $global);
$x972 = (is_string($x970) && is_string($x971) ? strcmp($x970, $x971) < 0 : (!is_nan($x973 = JS::toNumber($x970, $global)) && !is_nan($x974 = JS::toNumber($x971, $global)) && $x973 < $x974));
if (JS::toBoolean($x972, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x975 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Math', $global), 303, 9, '<image>/05_string.js');
$_Math =& $x975[0]; list(,$WMath,$SMath,$UMath) = $x975;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x976 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 303, 9, '<image>/05_string.js');
$_ReferenceError =& $x976[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x976;
$x977 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 9);
$x978 = $x977($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x978->class) && $x978->class === 'Error' && !isset($x978->properties['file']) && !isset($x978->properties['line']) && !isset($x978->properties['column'])) {$x978->properties['file'] = '<image>/05_string.js';$x978->properties['line'] = 303;$x978->properties['column'] = 9;$x978->attributes['file'] = $x978->attributes['line'] = $x978->attributes['column'] = 0; }
throw new JSException($x978, 303, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x980 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 303, 17, '<image>/05_string.js');
$_TypeError =& $x980[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x980;
$x981 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 17);
$x982 = $x981($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x982->class) && $x982->class === 'Error' && !isset($x982->properties['file']) && !isset($x982->properties['line']) && !isset($x982->properties['column'])) {$x982->properties['file'] = '<image>/05_string.js';$x982->properties['line'] = 303;$x982->properties['column'] = 17;$x982->attributes['file'] = $x982->attributes['line'] = $x982->attributes['column'] = 0; }
throw new JSException($x982, 303, 17, '<image>/05_string.js');
}
$x979 = JS::toObject($_Math, $global);
unset($x983, $W983, $S983, $U983);
$x984 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x979, JS::toString('max', $global), 303, 17, '<image>/05_string.js');
$x983 =& $x984[0]; list(,$W983,$S983,$U983) = $x984;
$x985 = JS::toPrimitive($_end, $global);
$x986 = JS::toPrimitive($_length, $global);
if (!(is_object($x983) && isset($x983->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x989 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 303, 17, '<image>/05_string.js');
$_TypeError =& $x989[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x989;
$x990 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 17);
$x991 = $x990($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x991->class) && $x991->class === 'Error' && !isset($x991->properties['file']) && !isset($x991->properties['line']) && !isset($x991->properties['column'])) {$x991->properties['file'] = '<image>/05_string.js';$x991->properties['line'] = 303;$x991->properties['column'] = 17;$x991->attributes['file'] = $x991->attributes['line'] = $x991->attributes['column'] = 0; }
throw new JSException($x991, 303, 17, '<image>/05_string.js');
}
$x987 = $x983->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 17);
$x988 = $x987($global, $x979, $x983, array((is_string($x985) || is_string($x986) ? JS::toString($x985, $global) . JS::toString($x986, $global) : JS::toNumber($x985, $global) + JS::toNumber($x986, $global)), 0.0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x988;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x992 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Math', $global), 306, 10, '<image>/05_string.js');
$_Math =& $x992[0]; list(,$WMath,$SMath,$UMath) = $x992;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x993 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 306, 10, '<image>/05_string.js');
$_ReferenceError =& $x993[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x993;
$x994 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 306, 10);
$x995 = $x994($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x995->class) && $x995->class === 'Error' && !isset($x995->properties['file']) && !isset($x995->properties['line']) && !isset($x995->properties['column'])) {$x995->properties['file'] = '<image>/05_string.js';$x995->properties['line'] = 306;$x995->properties['column'] = 10;$x995->attributes['file'] = $x995->attributes['line'] = $x995->attributes['column'] = 0; }
throw new JSException($x995, 306, 10, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x997 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 306, 18, '<image>/05_string.js');
$_TypeError =& $x997[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x997;
$x998 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 306, 18);
$x999 = $x998($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x999->class) && $x999->class === 'Error' && !isset($x999->properties['file']) && !isset($x999->properties['line']) && !isset($x999->properties['column'])) {$x999->properties['file'] = '<image>/05_string.js';$x999->properties['line'] = 306;$x999->properties['column'] = 18;$x999->attributes['file'] = $x999->attributes['line'] = $x999->attributes['column'] = 0; }
throw new JSException($x999, 306, 18, '<image>/05_string.js');
}
$x996 = JS::toObject($_Math, $global);
unset($x1000, $W1000, $S1000, $U1000);
$x1001 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x996, JS::toString('min', $global), 306, 18, '<image>/05_string.js');
$x1000 =& $x1001[0]; list(,$W1000,$S1000,$U1000) = $x1001;
if (!(is_object($x1000) && isset($x1000->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1004 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 306, 18, '<image>/05_string.js');
$_TypeError =& $x1004[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1004;
$x1005 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 306, 18);
$x1006 = $x1005($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1006->class) && $x1006->class === 'Error' && !isset($x1006->properties['file']) && !isset($x1006->properties['line']) && !isset($x1006->properties['column'])) {$x1006->properties['file'] = '<image>/05_string.js';$x1006->properties['line'] = 306;$x1006->properties['column'] = 18;$x1006->attributes['file'] = $x1006->attributes['line'] = $x1006->attributes['column'] = 0; }
throw new JSException($x1006, 306, 18, '<image>/05_string.js');
}
$x1002 = $x1000->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 306, 18);
$x1003 = $x1002($global, $x996, $x1000, array($_start, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x1003;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1008 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 307, 16, '<image>/05_string.js');
$_TypeError =& $x1008[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1008;
$x1009 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 307, 16);
$x1010 = $x1009($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1010->class) && $x1010->class === 'Error' && !isset($x1010->properties['file']) && !isset($x1010->properties['line']) && !isset($x1010->properties['column'])) {$x1010->properties['file'] = '<image>/05_string.js';$x1010->properties['line'] = 307;$x1010->properties['column'] = 16;$x1010->attributes['file'] = $x1010->attributes['line'] = $x1010->attributes['column'] = 0; }
throw new JSException($x1010, 307, 16, '<image>/05_string.js');
}
$x1007 = JS::toObject($_Math, $global);
unset($x1011, $W1011, $S1011, $U1011);
$x1012 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x1007, JS::toString('min', $global), 307, 16, '<image>/05_string.js');
$x1011 =& $x1012[0]; list(,$W1011,$S1011,$U1011) = $x1012;
if (!(is_object($x1011) && isset($x1011->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1015 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 307, 16, '<image>/05_string.js');
$_TypeError =& $x1015[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1015;
$x1016 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 307, 16);
$x1017 = $x1016($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1017->class) && $x1017->class === 'Error' && !isset($x1017->properties['file']) && !isset($x1017->properties['line']) && !isset($x1017->properties['column'])) {$x1017->properties['file'] = '<image>/05_string.js';$x1017->properties['line'] = 307;$x1017->properties['column'] = 16;$x1017->attributes['file'] = $x1017->attributes['line'] = $x1017->attributes['column'] = 0; }
throw new JSException($x1017, 307, 16, '<image>/05_string.js');
}
$x1013 = $x1011->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 307, 16);
$x1014 = $x1013($global, $x1007, $x1011, array($_end, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x1014;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1019 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 309, 21, '<image>/05_string.js');
$_TypeError =& $x1019[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1019;
$x1020 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 309, 21);
$x1021 = $x1020($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1021->class) && $x1021->class === 'Error' && !isset($x1021->properties['file']) && !isset($x1021->properties['line']) && !isset($x1021->properties['column'])) {$x1021->properties['file'] = '<image>/05_string.js';$x1021->properties['line'] = 309;$x1021->properties['column'] = 21;$x1021->attributes['file'] = $x1021->attributes['line'] = $x1021->attributes['column'] = 0; }
throw new JSException($x1021, 309, 21, '<image>/05_string.js');
}
$x1018 = JS::toObject($_Math, $global);
unset($x1022, $W1022, $S1022, $U1022);
$x1023 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x1018, JS::toString('min', $global), 309, 21, '<image>/05_string.js');
$x1022 =& $x1023[0]; list(,$W1022,$S1022,$U1022) = $x1023;
if (!(is_object($x1022) && isset($x1022->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1026 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 309, 21, '<image>/05_string.js');
$_TypeError =& $x1026[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1026;
$x1027 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 309, 21);
$x1028 = $x1027($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1028->class) && $x1028->class === 'Error' && !isset($x1028->properties['file']) && !isset($x1028->properties['line']) && !isset($x1028->properties['column'])) {$x1028->properties['file'] = '<image>/05_string.js';$x1028->properties['line'] = 309;$x1028->properties['column'] = 21;$x1028->attributes['file'] = $x1028->attributes['line'] = $x1028->attributes['column'] = 0; }
throw new JSException($x1028, 309, 21, '<image>/05_string.js');
}
$x1024 = $x1022->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 309, 21);
$x1025 = $x1024($global, $x1018, $x1022, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['from'] = JS::$undefined; $_from =& $scope->properties['from'];
$Ufrom = FALSE;
$_from = $x1025;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1030 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 309, 48, '<image>/05_string.js');
$_TypeError =& $x1030[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1030;
$x1031 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 309, 48);
$x1032 = $x1031($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1032->class) && $x1032->class === 'Error' && !isset($x1032->properties['file']) && !isset($x1032->properties['line']) && !isset($x1032->properties['column'])) {$x1032->properties['file'] = '<image>/05_string.js';$x1032->properties['line'] = 309;$x1032->properties['column'] = 48;$x1032->attributes['file'] = $x1032->attributes['line'] = $x1032->attributes['column'] = 0; }
throw new JSException($x1032, 309, 48, '<image>/05_string.js');
}
$x1029 = JS::toObject($_Math, $global);
unset($x1033, $W1033, $S1033, $U1033);
$x1034 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x1029, JS::toString('max', $global), 309, 48, '<image>/05_string.js');
$x1033 =& $x1034[0]; list(,$W1033,$S1033,$U1033) = $x1034;
if (!(is_object($x1033) && isset($x1033->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1037 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 309, 48, '<image>/05_string.js');
$_TypeError =& $x1037[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1037;
$x1038 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 309, 48);
$x1039 = $x1038($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1039->class) && $x1039->class === 'Error' && !isset($x1039->properties['file']) && !isset($x1039->properties['line']) && !isset($x1039->properties['column'])) {$x1039->properties['file'] = '<image>/05_string.js';$x1039->properties['line'] = 309;$x1039->properties['column'] = 48;$x1039->attributes['file'] = $x1039->attributes['line'] = $x1039->attributes['column'] = 0; }
throw new JSException($x1039, 309, 48, '<image>/05_string.js');
}
$x1035 = $x1033->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 309, 48);
$x1036 = $x1035($global, $x1029, $x1033, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['to'] = JS::$undefined; $_to =& $scope->properties['to'];
$Uto = FALSE;
$_to = $x1036;
return (string) substr($leThis->value,$_from,$_to-$_from);
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x944=&$scope->properties[\'arguments\'];$x944->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x944->properties[$i]=$args[$i];$x944->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=strlen($leThis->value);$x945=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x945,$global)){$x946=0.0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x946;}$x947=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x947,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x948=JS::toPrimitive($_start,$global);$x949=JS::toPrimitive(0.0,$global);$x950=(is_string($x948)&&is_string($x949)?strcmp($x948,$x949)<0:(!is_nan($x951=JS::toNumber($x948,$global))&&!is_nan($x952=JS::toNumber($x949,$global))&&$x951<$x952));if(JS::toBoolean($x950,$global)){unset($_Math,$WMath,$SMath,$UMath);$x953=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'Math\',$global),299,11,\'<image>/05_string.js\');$_Math=&$x953[0];list(,$WMath,$SMath,$UMath)=$x953;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x954=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),299,11,\'<image>/05_string.js\');$_ReferenceError=&$x954[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x954;$x955=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,11);$x956=$x955($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x956->class)&&$x956->class===\'Error\'&&!isset($x956->properties[\'file\'])&&!isset($x956->properties[\'line\'])&&!isset($x956->properties[\'column\'])){$x956->properties[\'file\']=\'<image>/05_string.js\';$x956->properties[\'line\']=299;$x956->properties[\'column\']=11;$x956->attributes[\'file\']=$x956->attributes[\'line\']=$x956->attributes[\'column\']=0;}throw new JSException($x956,299,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x958=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),299,19,\'<image>/05_string.js\');$_TypeError=&$x958[0];list(,$WTypeError,$STypeError,$UTypeError)=$x958;$x959=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,19);$x960=$x959($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x960->class)&&$x960->class===\'Error\'&&!isset($x960->properties[\'file\'])&&!isset($x960->properties[\'line\'])&&!isset($x960->properties[\'column\'])){$x960->properties[\'file\']=\'<image>/05_string.js\';$x960->properties[\'line\']=299;$x960->properties[\'column\']=19;$x960->attributes[\'file\']=$x960->attributes[\'line\']=$x960->attributes[\'column\']=0;}throw new JSException($x960,299,19,\'<image>/05_string.js\');}$x957=JS::toObject($_Math,$global);unset($x961,$W961,$S961,$U961);$x962=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x957,JS::toString(\'max\',$global),299,19,\'<image>/05_string.js\');$x961=&$x962[0];list(,$W961,$S961,$U961)=$x962;$x963=JS::toPrimitive($_start,$global);$x964=JS::toPrimitive($_length,$global);if(!(is_object($x961)&&isset($x961->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x967=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),299,19,\'<image>/05_string.js\');$_TypeError=&$x967[0];list(,$WTypeError,$STypeError,$UTypeError)=$x967;$x968=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,19);$x969=$x968($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x969->class)&&$x969->class===\'Error\'&&!isset($x969->properties[\'file\'])&&!isset($x969->properties[\'line\'])&&!isset($x969->properties[\'column\'])){$x969->properties[\'file\']=\'<image>/05_string.js\';$x969->properties[\'line\']=299;$x969->properties[\'column\']=19;$x969->attributes[\'file\']=$x969->attributes[\'line\']=$x969->attributes[\'column\']=0;}throw new JSException($x969,299,19,\'<image>/05_string.js\');}$x965=$x961->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,19);$x966=$x965($global,$x957,$x961,array((is_string($x963)||is_string($x964)?JS::toString($x963,$global).JS::toString($x964,$global):JS::toNumber($x963,$global)+JS::toNumber($x964,$global)),0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x966;}$x970=JS::toPrimitive($_end,$global);$x971=JS::toPrimitive(0.0,$global);$x972=(is_string($x970)&&is_string($x971)?strcmp($x970,$x971)<0:(!is_nan($x973=JS::toNumber($x970,$global))&&!is_nan($x974=JS::toNumber($x971,$global))&&$x973<$x974));if(JS::toBoolean($x972,$global)){unset($_Math,$WMath,$SMath,$UMath);$x975=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'Math\',$global),303,9,\'<image>/05_string.js\');$_Math=&$x975[0];list(,$WMath,$SMath,$UMath)=$x975;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x976=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),303,9,\'<image>/05_string.js\');$_ReferenceError=&$x976[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x976;$x977=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,9);$x978=$x977($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x978->class)&&$x978->class===\'Error\'&&!isset($x978->properties[\'file\'])&&!isset($x978->properties[\'line\'])&&!isset($x978->properties[\'column\'])){$x978->properties[\'file\']=\'<image>/05_string.js\';$x978->properties[\'line\']=303;$x978->properties[\'column\']=9;$x978->attributes[\'file\']=$x978->attributes[\'line\']=$x978->attributes[\'column\']=0;}throw new JSException($x978,303,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x980=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),303,17,\'<image>/05_string.js\');$_TypeError=&$x980[0];list(,$WTypeError,$STypeError,$UTypeError)=$x980;$x981=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,17);$x982=$x981($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x982->class)&&$x982->class===\'Error\'&&!isset($x982->properties[\'file\'])&&!isset($x982->properties[\'line\'])&&!isset($x982->properties[\'column\'])){$x982->properties[\'file\']=\'<image>/05_string.js\';$x982->properties[\'line\']=303;$x982->properties[\'column\']=17;$x982->attributes[\'file\']=$x982->attributes[\'line\']=$x982->attributes[\'column\']=0;}throw new JSException($x982,303,17,\'<image>/05_string.js\');}$x979=JS::toObject($_Math,$global);unset($x983,$W983,$S983,$U983);$x984=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x979,JS::toString(\'max\',$global),303,17,\'<image>/05_string.js\');$x983=&$x984[0];list(,$W983,$S983,$U983)=$x984;$x985=JS::toPrimitive($_end,$global);$x986=JS::toPrimitive($_length,$global);if(!(is_object($x983)&&isset($x983->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x989=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),303,17,\'<image>/05_string.js\');$_TypeError=&$x989[0];list(,$WTypeError,$STypeError,$UTypeError)=$x989;$x990=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,17);$x991=$x990($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x991->class)&&$x991->class===\'Error\'&&!isset($x991->properties[\'file\'])&&!isset($x991->properties[\'line\'])&&!isset($x991->properties[\'column\'])){$x991->properties[\'file\']=\'<image>/05_string.js\';$x991->properties[\'line\']=303;$x991->properties[\'column\']=17;$x991->attributes[\'file\']=$x991->attributes[\'line\']=$x991->attributes[\'column\']=0;}throw new JSException($x991,303,17,\'<image>/05_string.js\');}$x987=$x983->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,17);$x988=$x987($global,$x979,$x983,array((is_string($x985)||is_string($x986)?JS::toString($x985,$global).JS::toString($x986,$global):JS::toNumber($x985,$global)+JS::toNumber($x986,$global)),0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x988;}unset($_Math,$WMath,$SMath,$UMath);$x992=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'Math\',$global),306,10,\'<image>/05_string.js\');$_Math=&$x992[0];list(,$WMath,$SMath,$UMath)=$x992;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x993=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),306,10,\'<image>/05_string.js\');$_ReferenceError=&$x993[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x993;$x994=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',306,10);$x995=$x994($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x995->class)&&$x995->class===\'Error\'&&!isset($x995->properties[\'file\'])&&!isset($x995->properties[\'line\'])&&!isset($x995->properties[\'column\'])){$x995->properties[\'file\']=\'<image>/05_string.js\';$x995->properties[\'line\']=306;$x995->properties[\'column\']=10;$x995->attributes[\'file\']=$x995->attributes[\'line\']=$x995->attributes[\'column\']=0;}throw new JSException($x995,306,10,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x997=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),306,18,\'<image>/05_string.js\');$_TypeError=&$x997[0];list(,$WTypeError,$STypeError,$UTypeError)=$x997;$x998=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',306,18);$x999=$x998($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x999->class)&&$x999->class===\'Error\'&&!isset($x999->properties[\'file\'])&&!isset($x999->properties[\'line\'])&&!isset($x999->properties[\'column\'])){$x999->properties[\'file\']=\'<image>/05_string.js\';$x999->properties[\'line\']=306;$x999->properties[\'column\']=18;$x999->attributes[\'file\']=$x999->attributes[\'line\']=$x999->attributes[\'column\']=0;}throw new JSException($x999,306,18,\'<image>/05_string.js\');}$x996=JS::toObject($_Math,$global);unset($x1000,$W1000,$S1000,$U1000);$x1001=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x996,JS::toString(\'min\',$global),306,18,\'<image>/05_string.js\');$x1000=&$x1001[0];list(,$W1000,$S1000,$U1000)=$x1001;if(!(is_object($x1000)&&isset($x1000->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1004=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),306,18,\'<image>/05_string.js\');$_TypeError=&$x1004[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1004;$x1005=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',306,18);$x1006=$x1005($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1006->class)&&$x1006->class===\'Error\'&&!isset($x1006->properties[\'file\'])&&!isset($x1006->properties[\'line\'])&&!isset($x1006->properties[\'column\'])){$x1006->properties[\'file\']=\'<image>/05_string.js\';$x1006->properties[\'line\']=306;$x1006->properties[\'column\']=18;$x1006->attributes[\'file\']=$x1006->attributes[\'line\']=$x1006->attributes[\'column\']=0;}throw new JSException($x1006,306,18,\'<image>/05_string.js\');}$x1002=$x1000->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',306,18);$x1003=$x1002($global,$x996,$x1000,array($_start,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x1003;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1008=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),307,16,\'<image>/05_string.js\');$_TypeError=&$x1008[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1008;$x1009=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',307,16);$x1010=$x1009($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1010->class)&&$x1010->class===\'Error\'&&!isset($x1010->properties[\'file\'])&&!isset($x1010->properties[\'line\'])&&!isset($x1010->properties[\'column\'])){$x1010->properties[\'file\']=\'<image>/05_string.js\';$x1010->properties[\'line\']=307;$x1010->properties[\'column\']=16;$x1010->attributes[\'file\']=$x1010->attributes[\'line\']=$x1010->attributes[\'column\']=0;}throw new JSException($x1010,307,16,\'<image>/05_string.js\');}$x1007=JS::toObject($_Math,$global);unset($x1011,$W1011,$S1011,$U1011);$x1012=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x1007,JS::toString(\'min\',$global),307,16,\'<image>/05_string.js\');$x1011=&$x1012[0];list(,$W1011,$S1011,$U1011)=$x1012;if(!(is_object($x1011)&&isset($x1011->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1015=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),307,16,\'<image>/05_string.js\');$_TypeError=&$x1015[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1015;$x1016=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',307,16);$x1017=$x1016($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1017->class)&&$x1017->class===\'Error\'&&!isset($x1017->properties[\'file\'])&&!isset($x1017->properties[\'line\'])&&!isset($x1017->properties[\'column\'])){$x1017->properties[\'file\']=\'<image>/05_string.js\';$x1017->properties[\'line\']=307;$x1017->properties[\'column\']=16;$x1017->attributes[\'file\']=$x1017->attributes[\'line\']=$x1017->attributes[\'column\']=0;}throw new JSException($x1017,307,16,\'<image>/05_string.js\');}$x1013=$x1011->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',307,16);$x1014=$x1013($global,$x1007,$x1011,array($_end,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x1014;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1019=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),309,21,\'<image>/05_string.js\');$_TypeError=&$x1019[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1019;$x1020=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',309,21);$x1021=$x1020($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1021->class)&&$x1021->class===\'Error\'&&!isset($x1021->properties[\'file\'])&&!isset($x1021->properties[\'line\'])&&!isset($x1021->properties[\'column\'])){$x1021->properties[\'file\']=\'<image>/05_string.js\';$x1021->properties[\'line\']=309;$x1021->properties[\'column\']=21;$x1021->attributes[\'file\']=$x1021->attributes[\'line\']=$x1021->attributes[\'column\']=0;}throw new JSException($x1021,309,21,\'<image>/05_string.js\');}$x1018=JS::toObject($_Math,$global);unset($x1022,$W1022,$S1022,$U1022);$x1023=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x1018,JS::toString(\'min\',$global),309,21,\'<image>/05_string.js\');$x1022=&$x1023[0];list(,$W1022,$S1022,$U1022)=$x1023;if(!(is_object($x1022)&&isset($x1022->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1026=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),309,21,\'<image>/05_string.js\');$_TypeError=&$x1026[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1026;$x1027=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',309,21);$x1028=$x1027($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1028->class)&&$x1028->class===\'Error\'&&!isset($x1028->properties[\'file\'])&&!isset($x1028->properties[\'line\'])&&!isset($x1028->properties[\'column\'])){$x1028->properties[\'file\']=\'<image>/05_string.js\';$x1028->properties[\'line\']=309;$x1028->properties[\'column\']=21;$x1028->attributes[\'file\']=$x1028->attributes[\'line\']=$x1028->attributes[\'column\']=0;}throw new JSException($x1028,309,21,\'<image>/05_string.js\');}$x1024=$x1022->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',309,21);$x1025=$x1024($global,$x1018,$x1022,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'from\']=JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$_from=$x1025;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1030=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),309,48,\'<image>/05_string.js\');$_TypeError=&$x1030[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1030;$x1031=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',309,48);$x1032=$x1031($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1032->class)&&$x1032->class===\'Error\'&&!isset($x1032->properties[\'file\'])&&!isset($x1032->properties[\'line\'])&&!isset($x1032->properties[\'column\'])){$x1032->properties[\'file\']=\'<image>/05_string.js\';$x1032->properties[\'line\']=309;$x1032->properties[\'column\']=48;$x1032->attributes[\'file\']=$x1032->attributes[\'line\']=$x1032->attributes[\'column\']=0;}throw new JSException($x1032,309,48,\'<image>/05_string.js\');}$x1029=JS::toObject($_Math,$global);unset($x1033,$W1033,$S1033,$U1033);$x1034=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x1029,JS::toString(\'max\',$global),309,48,\'<image>/05_string.js\');$x1033=&$x1034[0];list(,$W1033,$S1033,$U1033)=$x1034;if(!(is_object($x1033)&&isset($x1033->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1037=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),309,48,\'<image>/05_string.js\');$_TypeError=&$x1037[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1037;$x1038=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',309,48);$x1039=$x1038($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1039->class)&&$x1039->class===\'Error\'&&!isset($x1039->properties[\'file\'])&&!isset($x1039->properties[\'line\'])&&!isset($x1039->properties[\'column\'])){$x1039->properties[\'file\']=\'<image>/05_string.js\';$x1039->properties[\'line\']=309;$x1039->properties[\'column\']=48;$x1039->attributes[\'file\']=$x1039->attributes[\'line\']=$x1039->attributes[\'column\']=0;}throw new JSException($x1039,309,48,\'<image>/05_string.js\');}$x1035=$x1033->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',309,48);$x1036=$x1035($global,$x1029,$x1033,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'to\']=JS::$undefined;$_to=&$scope->properties[\'to\'];$Uto=FALSE;$_to=$x1036;return(string)substr($leThis->value,$_from,$_to-$_from);return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1054 =& $scope->properties['arguments'];
$x1054->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1054->properties[$i] = $args[$i];
$x1054->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['end'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_end =& $scope->properties['end'];
$Uend = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['length'] = JS::$undefined; $_length =& $scope->properties['length'];
$Ulength = FALSE;
$_length = mb_strlen($leThis->value);
$x1055 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x1055, $global)) {
$x1056 = 0.0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x1056;;
};
$x1057 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x1057, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x1058 = JS::toPrimitive($_start, $global);
$x1059 = JS::toPrimitive(0.0, $global);
$x1060 = (is_string($x1058) && is_string($x1059) ? strcmp($x1058, $x1059) < 0 : (!is_nan($x1061 = JS::toNumber($x1058, $global)) && !is_nan($x1062 = JS::toNumber($x1059, $global)) && $x1061 < $x1062));
if (JS::toBoolean($x1060, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x1063 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Math', $global), 326, 11, '<image>/05_string.js');
$_Math =& $x1063[0]; list(,$WMath,$SMath,$UMath) = $x1063;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1064 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 326, 11, '<image>/05_string.js');
$_ReferenceError =& $x1064[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1064;
$x1065 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 326, 11);
$x1066 = $x1065($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1066->class) && $x1066->class === 'Error' && !isset($x1066->properties['file']) && !isset($x1066->properties['line']) && !isset($x1066->properties['column'])) {$x1066->properties['file'] = '<image>/05_string.js';$x1066->properties['line'] = 326;$x1066->properties['column'] = 11;$x1066->attributes['file'] = $x1066->attributes['line'] = $x1066->attributes['column'] = 0; }
throw new JSException($x1066, 326, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1068 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 326, 19, '<image>/05_string.js');
$_TypeError =& $x1068[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1068;
$x1069 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 326, 19);
$x1070 = $x1069($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1070->class) && $x1070->class === 'Error' && !isset($x1070->properties['file']) && !isset($x1070->properties['line']) && !isset($x1070->properties['column'])) {$x1070->properties['file'] = '<image>/05_string.js';$x1070->properties['line'] = 326;$x1070->properties['column'] = 19;$x1070->attributes['file'] = $x1070->attributes['line'] = $x1070->attributes['column'] = 0; }
throw new JSException($x1070, 326, 19, '<image>/05_string.js');
}
$x1067 = JS::toObject($_Math, $global);
unset($x1071, $W1071, $S1071, $U1071);
$x1072 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x1067, JS::toString('max', $global), 326, 19, '<image>/05_string.js');
$x1071 =& $x1072[0]; list(,$W1071,$S1071,$U1071) = $x1072;
$x1073 = JS::toPrimitive($_start, $global);
$x1074 = JS::toPrimitive($_length, $global);
if (!(is_object($x1071) && isset($x1071->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1077 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 326, 19, '<image>/05_string.js');
$_TypeError =& $x1077[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1077;
$x1078 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 326, 19);
$x1079 = $x1078($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1079->class) && $x1079->class === 'Error' && !isset($x1079->properties['file']) && !isset($x1079->properties['line']) && !isset($x1079->properties['column'])) {$x1079->properties['file'] = '<image>/05_string.js';$x1079->properties['line'] = 326;$x1079->properties['column'] = 19;$x1079->attributes['file'] = $x1079->attributes['line'] = $x1079->attributes['column'] = 0; }
throw new JSException($x1079, 326, 19, '<image>/05_string.js');
}
$x1075 = $x1071->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 326, 19);
$x1076 = $x1075($global, $x1067, $x1071, array((is_string($x1073) || is_string($x1074) ? JS::toString($x1073, $global) . JS::toString($x1074, $global) : JS::toNumber($x1073, $global) + JS::toNumber($x1074, $global)), 0.0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x1076;;
};
$x1080 = JS::toPrimitive($_end, $global);
$x1081 = JS::toPrimitive(0.0, $global);
$x1082 = (is_string($x1080) && is_string($x1081) ? strcmp($x1080, $x1081) < 0 : (!is_nan($x1083 = JS::toNumber($x1080, $global)) && !is_nan($x1084 = JS::toNumber($x1081, $global)) && $x1083 < $x1084));
if (JS::toBoolean($x1082, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x1085 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Math', $global), 330, 9, '<image>/05_string.js');
$_Math =& $x1085[0]; list(,$WMath,$SMath,$UMath) = $x1085;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1086 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 330, 9, '<image>/05_string.js');
$_ReferenceError =& $x1086[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1086;
$x1087 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 330, 9);
$x1088 = $x1087($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1088->class) && $x1088->class === 'Error' && !isset($x1088->properties['file']) && !isset($x1088->properties['line']) && !isset($x1088->properties['column'])) {$x1088->properties['file'] = '<image>/05_string.js';$x1088->properties['line'] = 330;$x1088->properties['column'] = 9;$x1088->attributes['file'] = $x1088->attributes['line'] = $x1088->attributes['column'] = 0; }
throw new JSException($x1088, 330, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1090 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 330, 17, '<image>/05_string.js');
$_TypeError =& $x1090[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1090;
$x1091 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 330, 17);
$x1092 = $x1091($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1092->class) && $x1092->class === 'Error' && !isset($x1092->properties['file']) && !isset($x1092->properties['line']) && !isset($x1092->properties['column'])) {$x1092->properties['file'] = '<image>/05_string.js';$x1092->properties['line'] = 330;$x1092->properties['column'] = 17;$x1092->attributes['file'] = $x1092->attributes['line'] = $x1092->attributes['column'] = 0; }
throw new JSException($x1092, 330, 17, '<image>/05_string.js');
}
$x1089 = JS::toObject($_Math, $global);
unset($x1093, $W1093, $S1093, $U1093);
$x1094 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x1089, JS::toString('max', $global), 330, 17, '<image>/05_string.js');
$x1093 =& $x1094[0]; list(,$W1093,$S1093,$U1093) = $x1094;
$x1095 = JS::toPrimitive($_end, $global);
$x1096 = JS::toPrimitive($_length, $global);
if (!(is_object($x1093) && isset($x1093->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1099 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 330, 17, '<image>/05_string.js');
$_TypeError =& $x1099[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1099;
$x1100 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 330, 17);
$x1101 = $x1100($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1101->class) && $x1101->class === 'Error' && !isset($x1101->properties['file']) && !isset($x1101->properties['line']) && !isset($x1101->properties['column'])) {$x1101->properties['file'] = '<image>/05_string.js';$x1101->properties['line'] = 330;$x1101->properties['column'] = 17;$x1101->attributes['file'] = $x1101->attributes['line'] = $x1101->attributes['column'] = 0; }
throw new JSException($x1101, 330, 17, '<image>/05_string.js');
}
$x1097 = $x1093->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 330, 17);
$x1098 = $x1097($global, $x1089, $x1093, array((is_string($x1095) || is_string($x1096) ? JS::toString($x1095, $global) . JS::toString($x1096, $global) : JS::toNumber($x1095, $global) + JS::toNumber($x1096, $global)), 0.0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x1098;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x1102 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Math', $global), 333, 10, '<image>/05_string.js');
$_Math =& $x1102[0]; list(,$WMath,$SMath,$UMath) = $x1102;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1103 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 333, 10, '<image>/05_string.js');
$_ReferenceError =& $x1103[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1103;
$x1104 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 333, 10);
$x1105 = $x1104($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1105->class) && $x1105->class === 'Error' && !isset($x1105->properties['file']) && !isset($x1105->properties['line']) && !isset($x1105->properties['column'])) {$x1105->properties['file'] = '<image>/05_string.js';$x1105->properties['line'] = 333;$x1105->properties['column'] = 10;$x1105->attributes['file'] = $x1105->attributes['line'] = $x1105->attributes['column'] = 0; }
throw new JSException($x1105, 333, 10, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1107 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 333, 18, '<image>/05_string.js');
$_TypeError =& $x1107[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1107;
$x1108 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 333, 18);
$x1109 = $x1108($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1109->class) && $x1109->class === 'Error' && !isset($x1109->properties['file']) && !isset($x1109->properties['line']) && !isset($x1109->properties['column'])) {$x1109->properties['file'] = '<image>/05_string.js';$x1109->properties['line'] = 333;$x1109->properties['column'] = 18;$x1109->attributes['file'] = $x1109->attributes['line'] = $x1109->attributes['column'] = 0; }
throw new JSException($x1109, 333, 18, '<image>/05_string.js');
}
$x1106 = JS::toObject($_Math, $global);
unset($x1110, $W1110, $S1110, $U1110);
$x1111 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x1106, JS::toString('min', $global), 333, 18, '<image>/05_string.js');
$x1110 =& $x1111[0]; list(,$W1110,$S1110,$U1110) = $x1111;
if (!(is_object($x1110) && isset($x1110->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1114 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 333, 18, '<image>/05_string.js');
$_TypeError =& $x1114[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1114;
$x1115 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 333, 18);
$x1116 = $x1115($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1116->class) && $x1116->class === 'Error' && !isset($x1116->properties['file']) && !isset($x1116->properties['line']) && !isset($x1116->properties['column'])) {$x1116->properties['file'] = '<image>/05_string.js';$x1116->properties['line'] = 333;$x1116->properties['column'] = 18;$x1116->attributes['file'] = $x1116->attributes['line'] = $x1116->attributes['column'] = 0; }
throw new JSException($x1116, 333, 18, '<image>/05_string.js');
}
$x1112 = $x1110->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 333, 18);
$x1113 = $x1112($global, $x1106, $x1110, array($_start, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x1113;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1118 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 334, 16, '<image>/05_string.js');
$_TypeError =& $x1118[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1118;
$x1119 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 334, 16);
$x1120 = $x1119($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1120->class) && $x1120->class === 'Error' && !isset($x1120->properties['file']) && !isset($x1120->properties['line']) && !isset($x1120->properties['column'])) {$x1120->properties['file'] = '<image>/05_string.js';$x1120->properties['line'] = 334;$x1120->properties['column'] = 16;$x1120->attributes['file'] = $x1120->attributes['line'] = $x1120->attributes['column'] = 0; }
throw new JSException($x1120, 334, 16, '<image>/05_string.js');
}
$x1117 = JS::toObject($_Math, $global);
unset($x1121, $W1121, $S1121, $U1121);
$x1122 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x1117, JS::toString('min', $global), 334, 16, '<image>/05_string.js');
$x1121 =& $x1122[0]; list(,$W1121,$S1121,$U1121) = $x1122;
if (!(is_object($x1121) && isset($x1121->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1125 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 334, 16, '<image>/05_string.js');
$_TypeError =& $x1125[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1125;
$x1126 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 334, 16);
$x1127 = $x1126($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1127->class) && $x1127->class === 'Error' && !isset($x1127->properties['file']) && !isset($x1127->properties['line']) && !isset($x1127->properties['column'])) {$x1127->properties['file'] = '<image>/05_string.js';$x1127->properties['line'] = 334;$x1127->properties['column'] = 16;$x1127->attributes['file'] = $x1127->attributes['line'] = $x1127->attributes['column'] = 0; }
throw new JSException($x1127, 334, 16, '<image>/05_string.js');
}
$x1123 = $x1121->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 334, 16);
$x1124 = $x1123($global, $x1117, $x1121, array($_end, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x1124;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1129 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 336, 21, '<image>/05_string.js');
$_TypeError =& $x1129[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1129;
$x1130 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 336, 21);
$x1131 = $x1130($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1131->class) && $x1131->class === 'Error' && !isset($x1131->properties['file']) && !isset($x1131->properties['line']) && !isset($x1131->properties['column'])) {$x1131->properties['file'] = '<image>/05_string.js';$x1131->properties['line'] = 336;$x1131->properties['column'] = 21;$x1131->attributes['file'] = $x1131->attributes['line'] = $x1131->attributes['column'] = 0; }
throw new JSException($x1131, 336, 21, '<image>/05_string.js');
}
$x1128 = JS::toObject($_Math, $global);
unset($x1132, $W1132, $S1132, $U1132);
$x1133 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x1128, JS::toString('min', $global), 336, 21, '<image>/05_string.js');
$x1132 =& $x1133[0]; list(,$W1132,$S1132,$U1132) = $x1133;
if (!(is_object($x1132) && isset($x1132->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1136 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 336, 21, '<image>/05_string.js');
$_TypeError =& $x1136[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1136;
$x1137 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 336, 21);
$x1138 = $x1137($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1138->class) && $x1138->class === 'Error' && !isset($x1138->properties['file']) && !isset($x1138->properties['line']) && !isset($x1138->properties['column'])) {$x1138->properties['file'] = '<image>/05_string.js';$x1138->properties['line'] = 336;$x1138->properties['column'] = 21;$x1138->attributes['file'] = $x1138->attributes['line'] = $x1138->attributes['column'] = 0; }
throw new JSException($x1138, 336, 21, '<image>/05_string.js');
}
$x1134 = $x1132->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 336, 21);
$x1135 = $x1134($global, $x1128, $x1132, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['from'] = JS::$undefined; $_from =& $scope->properties['from'];
$Ufrom = FALSE;
$_from = $x1135;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1140 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 336, 48, '<image>/05_string.js');
$_TypeError =& $x1140[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1140;
$x1141 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 336, 48);
$x1142 = $x1141($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1142->class) && $x1142->class === 'Error' && !isset($x1142->properties['file']) && !isset($x1142->properties['line']) && !isset($x1142->properties['column'])) {$x1142->properties['file'] = '<image>/05_string.js';$x1142->properties['line'] = 336;$x1142->properties['column'] = 48;$x1142->attributes['file'] = $x1142->attributes['line'] = $x1142->attributes['column'] = 0; }
throw new JSException($x1142, 336, 48, '<image>/05_string.js');
}
$x1139 = JS::toObject($_Math, $global);
unset($x1143, $W1143, $S1143, $U1143);
$x1144 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x1139, JS::toString('max', $global), 336, 48, '<image>/05_string.js');
$x1143 =& $x1144[0]; list(,$W1143,$S1143,$U1143) = $x1144;
if (!(is_object($x1143) && isset($x1143->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1147 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 336, 48, '<image>/05_string.js');
$_TypeError =& $x1147[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1147;
$x1148 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 336, 48);
$x1149 = $x1148($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1149->class) && $x1149->class === 'Error' && !isset($x1149->properties['file']) && !isset($x1149->properties['line']) && !isset($x1149->properties['column'])) {$x1149->properties['file'] = '<image>/05_string.js';$x1149->properties['line'] = 336;$x1149->properties['column'] = 48;$x1149->attributes['file'] = $x1149->attributes['line'] = $x1149->attributes['column'] = 0; }
throw new JSException($x1149, 336, 48, '<image>/05_string.js');
}
$x1145 = $x1143->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 336, 48);
$x1146 = $x1145($global, $x1139, $x1143, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['to'] = JS::$undefined; $_to =& $scope->properties['to'];
$Uto = FALSE;
$_to = $x1146;
return (string) mb_substr($leThis->value,$_from,$_to-$_from);
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1054=&$scope->properties[\'arguments\'];$x1054->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1054->properties[$i]=$args[$i];$x1054->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=mb_strlen($leThis->value);$x1055=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x1055,$global)){$x1056=0.0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x1056;}$x1057=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x1057,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x1058=JS::toPrimitive($_start,$global);$x1059=JS::toPrimitive(0.0,$global);$x1060=(is_string($x1058)&&is_string($x1059)?strcmp($x1058,$x1059)<0:(!is_nan($x1061=JS::toNumber($x1058,$global))&&!is_nan($x1062=JS::toNumber($x1059,$global))&&$x1061<$x1062));if(JS::toBoolean($x1060,$global)){unset($_Math,$WMath,$SMath,$UMath);$x1063=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'Math\',$global),326,11,\'<image>/05_string.js\');$_Math=&$x1063[0];list(,$WMath,$SMath,$UMath)=$x1063;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1064=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),326,11,\'<image>/05_string.js\');$_ReferenceError=&$x1064[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1064;$x1065=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',326,11);$x1066=$x1065($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1066->class)&&$x1066->class===\'Error\'&&!isset($x1066->properties[\'file\'])&&!isset($x1066->properties[\'line\'])&&!isset($x1066->properties[\'column\'])){$x1066->properties[\'file\']=\'<image>/05_string.js\';$x1066->properties[\'line\']=326;$x1066->properties[\'column\']=11;$x1066->attributes[\'file\']=$x1066->attributes[\'line\']=$x1066->attributes[\'column\']=0;}throw new JSException($x1066,326,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1068=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),326,19,\'<image>/05_string.js\');$_TypeError=&$x1068[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1068;$x1069=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',326,19);$x1070=$x1069($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1070->class)&&$x1070->class===\'Error\'&&!isset($x1070->properties[\'file\'])&&!isset($x1070->properties[\'line\'])&&!isset($x1070->properties[\'column\'])){$x1070->properties[\'file\']=\'<image>/05_string.js\';$x1070->properties[\'line\']=326;$x1070->properties[\'column\']=19;$x1070->attributes[\'file\']=$x1070->attributes[\'line\']=$x1070->attributes[\'column\']=0;}throw new JSException($x1070,326,19,\'<image>/05_string.js\');}$x1067=JS::toObject($_Math,$global);unset($x1071,$W1071,$S1071,$U1071);$x1072=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x1067,JS::toString(\'max\',$global),326,19,\'<image>/05_string.js\');$x1071=&$x1072[0];list(,$W1071,$S1071,$U1071)=$x1072;$x1073=JS::toPrimitive($_start,$global);$x1074=JS::toPrimitive($_length,$global);if(!(is_object($x1071)&&isset($x1071->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1077=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),326,19,\'<image>/05_string.js\');$_TypeError=&$x1077[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1077;$x1078=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',326,19);$x1079=$x1078($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1079->class)&&$x1079->class===\'Error\'&&!isset($x1079->properties[\'file\'])&&!isset($x1079->properties[\'line\'])&&!isset($x1079->properties[\'column\'])){$x1079->properties[\'file\']=\'<image>/05_string.js\';$x1079->properties[\'line\']=326;$x1079->properties[\'column\']=19;$x1079->attributes[\'file\']=$x1079->attributes[\'line\']=$x1079->attributes[\'column\']=0;}throw new JSException($x1079,326,19,\'<image>/05_string.js\');}$x1075=$x1071->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',326,19);$x1076=$x1075($global,$x1067,$x1071,array((is_string($x1073)||is_string($x1074)?JS::toString($x1073,$global).JS::toString($x1074,$global):JS::toNumber($x1073,$global)+JS::toNumber($x1074,$global)),0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x1076;}$x1080=JS::toPrimitive($_end,$global);$x1081=JS::toPrimitive(0.0,$global);$x1082=(is_string($x1080)&&is_string($x1081)?strcmp($x1080,$x1081)<0:(!is_nan($x1083=JS::toNumber($x1080,$global))&&!is_nan($x1084=JS::toNumber($x1081,$global))&&$x1083<$x1084));if(JS::toBoolean($x1082,$global)){unset($_Math,$WMath,$SMath,$UMath);$x1085=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'Math\',$global),330,9,\'<image>/05_string.js\');$_Math=&$x1085[0];list(,$WMath,$SMath,$UMath)=$x1085;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1086=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),330,9,\'<image>/05_string.js\');$_ReferenceError=&$x1086[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1086;$x1087=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',330,9);$x1088=$x1087($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1088->class)&&$x1088->class===\'Error\'&&!isset($x1088->properties[\'file\'])&&!isset($x1088->properties[\'line\'])&&!isset($x1088->properties[\'column\'])){$x1088->properties[\'file\']=\'<image>/05_string.js\';$x1088->properties[\'line\']=330;$x1088->properties[\'column\']=9;$x1088->attributes[\'file\']=$x1088->attributes[\'line\']=$x1088->attributes[\'column\']=0;}throw new JSException($x1088,330,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1090=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),330,17,\'<image>/05_string.js\');$_TypeError=&$x1090[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1090;$x1091=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',330,17);$x1092=$x1091($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1092->class)&&$x1092->class===\'Error\'&&!isset($x1092->properties[\'file\'])&&!isset($x1092->properties[\'line\'])&&!isset($x1092->properties[\'column\'])){$x1092->properties[\'file\']=\'<image>/05_string.js\';$x1092->properties[\'line\']=330;$x1092->properties[\'column\']=17;$x1092->attributes[\'file\']=$x1092->attributes[\'line\']=$x1092->attributes[\'column\']=0;}throw new JSException($x1092,330,17,\'<image>/05_string.js\');}$x1089=JS::toObject($_Math,$global);unset($x1093,$W1093,$S1093,$U1093);$x1094=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x1089,JS::toString(\'max\',$global),330,17,\'<image>/05_string.js\');$x1093=&$x1094[0];list(,$W1093,$S1093,$U1093)=$x1094;$x1095=JS::toPrimitive($_end,$global);$x1096=JS::toPrimitive($_length,$global);if(!(is_object($x1093)&&isset($x1093->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1099=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),330,17,\'<image>/05_string.js\');$_TypeError=&$x1099[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1099;$x1100=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',330,17);$x1101=$x1100($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1101->class)&&$x1101->class===\'Error\'&&!isset($x1101->properties[\'file\'])&&!isset($x1101->properties[\'line\'])&&!isset($x1101->properties[\'column\'])){$x1101->properties[\'file\']=\'<image>/05_string.js\';$x1101->properties[\'line\']=330;$x1101->properties[\'column\']=17;$x1101->attributes[\'file\']=$x1101->attributes[\'line\']=$x1101->attributes[\'column\']=0;}throw new JSException($x1101,330,17,\'<image>/05_string.js\');}$x1097=$x1093->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',330,17);$x1098=$x1097($global,$x1089,$x1093,array((is_string($x1095)||is_string($x1096)?JS::toString($x1095,$global).JS::toString($x1096,$global):JS::toNumber($x1095,$global)+JS::toNumber($x1096,$global)),0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x1098;}unset($_Math,$WMath,$SMath,$UMath);$x1102=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'Math\',$global),333,10,\'<image>/05_string.js\');$_Math=&$x1102[0];list(,$WMath,$SMath,$UMath)=$x1102;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1103=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),333,10,\'<image>/05_string.js\');$_ReferenceError=&$x1103[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1103;$x1104=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',333,10);$x1105=$x1104($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1105->class)&&$x1105->class===\'Error\'&&!isset($x1105->properties[\'file\'])&&!isset($x1105->properties[\'line\'])&&!isset($x1105->properties[\'column\'])){$x1105->properties[\'file\']=\'<image>/05_string.js\';$x1105->properties[\'line\']=333;$x1105->properties[\'column\']=10;$x1105->attributes[\'file\']=$x1105->attributes[\'line\']=$x1105->attributes[\'column\']=0;}throw new JSException($x1105,333,10,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1107=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),333,18,\'<image>/05_string.js\');$_TypeError=&$x1107[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1107;$x1108=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',333,18);$x1109=$x1108($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1109->class)&&$x1109->class===\'Error\'&&!isset($x1109->properties[\'file\'])&&!isset($x1109->properties[\'line\'])&&!isset($x1109->properties[\'column\'])){$x1109->properties[\'file\']=\'<image>/05_string.js\';$x1109->properties[\'line\']=333;$x1109->properties[\'column\']=18;$x1109->attributes[\'file\']=$x1109->attributes[\'line\']=$x1109->attributes[\'column\']=0;}throw new JSException($x1109,333,18,\'<image>/05_string.js\');}$x1106=JS::toObject($_Math,$global);unset($x1110,$W1110,$S1110,$U1110);$x1111=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x1106,JS::toString(\'min\',$global),333,18,\'<image>/05_string.js\');$x1110=&$x1111[0];list(,$W1110,$S1110,$U1110)=$x1111;if(!(is_object($x1110)&&isset($x1110->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1114=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),333,18,\'<image>/05_string.js\');$_TypeError=&$x1114[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1114;$x1115=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',333,18);$x1116=$x1115($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1116->class)&&$x1116->class===\'Error\'&&!isset($x1116->properties[\'file\'])&&!isset($x1116->properties[\'line\'])&&!isset($x1116->properties[\'column\'])){$x1116->properties[\'file\']=\'<image>/05_string.js\';$x1116->properties[\'line\']=333;$x1116->properties[\'column\']=18;$x1116->attributes[\'file\']=$x1116->attributes[\'line\']=$x1116->attributes[\'column\']=0;}throw new JSException($x1116,333,18,\'<image>/05_string.js\');}$x1112=$x1110->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',333,18);$x1113=$x1112($global,$x1106,$x1110,array($_start,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x1113;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1118=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),334,16,\'<image>/05_string.js\');$_TypeError=&$x1118[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1118;$x1119=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',334,16);$x1120=$x1119($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1120->class)&&$x1120->class===\'Error\'&&!isset($x1120->properties[\'file\'])&&!isset($x1120->properties[\'line\'])&&!isset($x1120->properties[\'column\'])){$x1120->properties[\'file\']=\'<image>/05_string.js\';$x1120->properties[\'line\']=334;$x1120->properties[\'column\']=16;$x1120->attributes[\'file\']=$x1120->attributes[\'line\']=$x1120->attributes[\'column\']=0;}throw new JSException($x1120,334,16,\'<image>/05_string.js\');}$x1117=JS::toObject($_Math,$global);unset($x1121,$W1121,$S1121,$U1121);$x1122=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x1117,JS::toString(\'min\',$global),334,16,\'<image>/05_string.js\');$x1121=&$x1122[0];list(,$W1121,$S1121,$U1121)=$x1122;if(!(is_object($x1121)&&isset($x1121->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1125=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),334,16,\'<image>/05_string.js\');$_TypeError=&$x1125[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1125;$x1126=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',334,16);$x1127=$x1126($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1127->class)&&$x1127->class===\'Error\'&&!isset($x1127->properties[\'file\'])&&!isset($x1127->properties[\'line\'])&&!isset($x1127->properties[\'column\'])){$x1127->properties[\'file\']=\'<image>/05_string.js\';$x1127->properties[\'line\']=334;$x1127->properties[\'column\']=16;$x1127->attributes[\'file\']=$x1127->attributes[\'line\']=$x1127->attributes[\'column\']=0;}throw new JSException($x1127,334,16,\'<image>/05_string.js\');}$x1123=$x1121->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',334,16);$x1124=$x1123($global,$x1117,$x1121,array($_end,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x1124;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1129=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),336,21,\'<image>/05_string.js\');$_TypeError=&$x1129[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1129;$x1130=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',336,21);$x1131=$x1130($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1131->class)&&$x1131->class===\'Error\'&&!isset($x1131->properties[\'file\'])&&!isset($x1131->properties[\'line\'])&&!isset($x1131->properties[\'column\'])){$x1131->properties[\'file\']=\'<image>/05_string.js\';$x1131->properties[\'line\']=336;$x1131->properties[\'column\']=21;$x1131->attributes[\'file\']=$x1131->attributes[\'line\']=$x1131->attributes[\'column\']=0;}throw new JSException($x1131,336,21,\'<image>/05_string.js\');}$x1128=JS::toObject($_Math,$global);unset($x1132,$W1132,$S1132,$U1132);$x1133=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x1128,JS::toString(\'min\',$global),336,21,\'<image>/05_string.js\');$x1132=&$x1133[0];list(,$W1132,$S1132,$U1132)=$x1133;if(!(is_object($x1132)&&isset($x1132->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1136=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),336,21,\'<image>/05_string.js\');$_TypeError=&$x1136[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1136;$x1137=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',336,21);$x1138=$x1137($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1138->class)&&$x1138->class===\'Error\'&&!isset($x1138->properties[\'file\'])&&!isset($x1138->properties[\'line\'])&&!isset($x1138->properties[\'column\'])){$x1138->properties[\'file\']=\'<image>/05_string.js\';$x1138->properties[\'line\']=336;$x1138->properties[\'column\']=21;$x1138->attributes[\'file\']=$x1138->attributes[\'line\']=$x1138->attributes[\'column\']=0;}throw new JSException($x1138,336,21,\'<image>/05_string.js\');}$x1134=$x1132->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',336,21);$x1135=$x1134($global,$x1128,$x1132,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'from\']=JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$_from=$x1135;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1140=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),336,48,\'<image>/05_string.js\');$_TypeError=&$x1140[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1140;$x1141=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',336,48);$x1142=$x1141($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1142->class)&&$x1142->class===\'Error\'&&!isset($x1142->properties[\'file\'])&&!isset($x1142->properties[\'line\'])&&!isset($x1142->properties[\'column\'])){$x1142->properties[\'file\']=\'<image>/05_string.js\';$x1142->properties[\'line\']=336;$x1142->properties[\'column\']=48;$x1142->attributes[\'file\']=$x1142->attributes[\'line\']=$x1142->attributes[\'column\']=0;}throw new JSException($x1142,336,48,\'<image>/05_string.js\');}$x1139=JS::toObject($_Math,$global);unset($x1143,$W1143,$S1143,$U1143);$x1144=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x1139,JS::toString(\'max\',$global),336,48,\'<image>/05_string.js\');$x1143=&$x1144[0];list(,$W1143,$S1143,$U1143)=$x1144;if(!(is_object($x1143)&&isset($x1143->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1147=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),336,48,\'<image>/05_string.js\');$_TypeError=&$x1147[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1147;$x1148=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',336,48);$x1149=$x1148($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1149->class)&&$x1149->class===\'Error\'&&!isset($x1149->properties[\'file\'])&&!isset($x1149->properties[\'line\'])&&!isset($x1149->properties[\'column\'])){$x1149->properties[\'file\']=\'<image>/05_string.js\';$x1149->properties[\'line\']=336;$x1149->properties[\'column\']=48;$x1149->attributes[\'file\']=$x1149->attributes[\'line\']=$x1149->attributes[\'column\']=0;}throw new JSException($x1149,336,48,\'<image>/05_string.js\');}$x1145=$x1143->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',336,48);$x1146=$x1145($global,$x1139,$x1143,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'to\']=JS::$undefined;$_to=&$scope->properties[\'to\'];$Uto=FALSE;$_to=$x1146;return(string)mb_substr($leThis->value,$_from,$_to-$_from);return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1164 =& $scope->properties['arguments'];
$x1164->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1164->properties[$i] = $args[$i];
$x1164->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['length'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_length =& $scope->properties['length'];
$Ulength = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1165 = (((gettype($_length) === gettype(JS::$undefined) && $_length === JS::$undefined))|| (((is_float($_length) || is_int($_length)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_length == JS::$undefined));
if (JS::toBoolean($x1165, $global)) {

return mb_substr($leThis->value,$_start);;
};
return (string) mb_substr($leThis->value,$_start,$_length);
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1164=&$scope->properties[\'arguments\'];$x1164->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1164->properties[$i]=$args[$i];$x1164->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'length\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1165=(((gettype($_length)===gettype(JS::$undefined)&&$_length===JS::$undefined))||(((is_float($_length)||is_int($_length))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_length==JS::$undefined));if(JS::toBoolean($x1165,$global)){return mb_substr($leThis->value,$_start);}return(string)mb_substr($leThis->value,$_start,$_length);return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1180 =& $scope->properties['arguments'];
$x1180->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1180->properties[$i] = $args[$i];
$x1180->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return mb_strtolower($leThis->value);
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1180=&$scope->properties[\'arguments\'];$x1180->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1180->properties[$i]=$args[$i];$x1180->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return mb_strtolower($leThis->value);return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1211 =& $scope->properties['arguments'];
$x1211->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1211->properties[$i] = $args[$i];
$x1211->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return mb_strtoupper($leThis->value);
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1211=&$scope->properties[\'arguments\'];$x1211->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1211->properties[$i]=$args[$i];$x1211->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return mb_strtoupper($leThis->value);return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_24($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1242 =& $scope->properties['arguments'];
$x1242->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1242->properties[$i] = $args[$i];
$x1242->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return trim($leThis->value);
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_24($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1242=&$scope->properties[\'arguments\'];$x1242->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1242->properties[$i]=$args[$i];$x1242->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return trim($leThis->value);return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_25($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1257 =& $scope->properties['arguments'];
$x1257->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1257->properties[$i] = $args[$i];
$x1257->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['start'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1259 = $_start;
$x1259 = ($x1259 === JS::$undefined ? 'undefined' : (is_int($x1259) || is_float($x1259) ? 'number' : (is_bool($x1259) ? 'boolean' : (is_string($x1259) ? 'string' : (is_object($x1259) && isset($x1259->call) ? 'function' : 'object')))));
$x1258 = !(((gettype($x1259) === gettype('number') && $x1259 === 'number'))|| (((is_float($x1259) || is_int($x1259)) && (is_float('number') || is_int('number'))) && $x1259 == 'number'));
if (JS::toBoolean($x1258, $global)) {
$x1260 = 0.0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x1260;;
};
unset($x1266, $W1266, $S1266, $U1266);
$x1267 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_search, JS::toString('length', $global), 372, 22, '<image>/05_string.js');
$x1266 =& $x1267[0]; list(,$W1266,$S1266,$U1266) = $x1267;
$x1264 = JS::toPrimitive($_start, $global);
$x1265 = JS::toPrimitive($x1266, $global);
unset($x1268, $W1268, $S1268, $U1268);
$x1269 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $leThis, JS::toString('length', $global), 372, 36, '<image>/05_string.js');
$x1268 =& $x1269[0]; list(,$W1268,$S1268,$U1268) = $x1269;
$x1261 = JS::toPrimitive((is_string($x1264) || is_string($x1265) ? JS::toString($x1264, $global) . JS::toString($x1265, $global) : JS::toNumber($x1264, $global) + JS::toNumber($x1265, $global)), $global);
$x1262 = JS::toPrimitive($x1268, $global);
$x1263 = (is_string($x1262) && is_string($x1261) ? strcmp($x1262, $x1261) < 0 : (!is_nan($x1270 = JS::toNumber($x1262, $global)) && !is_nan($x1271 = JS::toNumber($x1261, $global)) && $x1270 < $x1271));
if (JS::toBoolean($x1263, $global)) {

return false;;
}
else {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1274 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 375, 26, '<image>/05_string.js');
$_TypeError =& $x1274[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1274;
$x1275 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 375, 26);
$x1276 = $x1275($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1276->class) && $x1276->class === 'Error' && !isset($x1276->properties['file']) && !isset($x1276->properties['line']) && !isset($x1276->properties['column'])) {$x1276->properties['file'] = '<image>/05_string.js';$x1276->properties['line'] = 375;$x1276->properties['column'] = 26;$x1276->attributes['file'] = $x1276->attributes['line'] = $x1276->attributes['column'] = 0; }
throw new JSException($x1276, 375, 26, '<image>/05_string.js');
}
$x1273 = JS::toObject($leThis, $global);
unset($x1277, $W1277, $S1277, $U1277);
$x1278 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x1273, JS::toString('indexOf', $global), 375, 26, '<image>/05_string.js');
$x1277 =& $x1278[0]; list(,$W1277,$S1277,$U1277) = $x1278;
if (!(is_object($x1277) && isset($x1277->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1281 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 375, 26, '<image>/05_string.js');
$_TypeError =& $x1281[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1281;
$x1282 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 375, 26);
$x1283 = $x1282($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1283->class) && $x1283->class === 'Error' && !isset($x1283->properties['file']) && !isset($x1283->properties['line']) && !isset($x1283->properties['column'])) {$x1283->properties['file'] = '<image>/05_string.js';$x1283->properties['line'] = 375;$x1283->properties['column'] = 26;$x1283->attributes['file'] = $x1283->attributes['line'] = $x1283->attributes['column'] = 0; }
throw new JSException($x1283, 375, 26, '<image>/05_string.js');
}
$x1279 = $x1277->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 375, 26);
$x1280 = $x1279($global, $x1273, $x1277, array($_search, $_start), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1272 = !(((gettype($x1280) === gettype((-1.0 * JS::toNumber(1.0, $global))) && $x1280 === (-1.0 * JS::toNumber(1.0, $global))))|| (((is_float($x1280) || is_int($x1280)) && (is_float((-1.0 * JS::toNumber(1.0, $global))) || is_int((-1.0 * JS::toNumber(1.0, $global))))) && $x1280 == (-1.0 * JS::toNumber(1.0, $global))));
return $x1272;;
};
;
return JS::$undefined;
}
echo 'function _1062444eb1665286b15372d6a2622cc9_25($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1257=&$scope->properties[\'arguments\'];$x1257->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1257->properties[$i]=$args[$i];$x1257->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'start\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1259=$_start;$x1259=($x1259===JS::$undefined?\'undefined\':(is_int($x1259)||is_float($x1259)?\'number\':(is_bool($x1259)?\'boolean\':(is_string($x1259)?\'string\':(is_object($x1259)&&isset($x1259->call)?\'function\':\'object\')))));$x1258=!(((gettype($x1259)===gettype(\'number\')&&$x1259===\'number\'))||(((is_float($x1259)||is_int($x1259))&&(is_float(\'number\')||is_int(\'number\')))&&$x1259==\'number\'));if(JS::toBoolean($x1258,$global)){$x1260=0.0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x1260;}unset($x1266,$W1266,$S1266,$U1266);$x1267=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$_search,JS::toString(\'length\',$global),372,22,\'<image>/05_string.js\');$x1266=&$x1267[0];list(,$W1266,$S1266,$U1266)=$x1267;$x1264=JS::toPrimitive($_start,$global);$x1265=JS::toPrimitive($x1266,$global);unset($x1268,$W1268,$S1268,$U1268);$x1269=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$leThis,JS::toString(\'length\',$global),372,36,\'<image>/05_string.js\');$x1268=&$x1269[0];list(,$W1268,$S1268,$U1268)=$x1269;$x1261=JS::toPrimitive((is_string($x1264)||is_string($x1265)?JS::toString($x1264,$global).JS::toString($x1265,$global):JS::toNumber($x1264,$global)+JS::toNumber($x1265,$global)),$global);$x1262=JS::toPrimitive($x1268,$global);$x1263=(is_string($x1262)&&is_string($x1261)?strcmp($x1262,$x1261)<0:(!is_nan($x1270=JS::toNumber($x1262,$global))&&!is_nan($x1271=JS::toNumber($x1261,$global))&&$x1270<$x1271));if(JS::toBoolean($x1263,$global)){return false;}else{if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1274=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),375,26,\'<image>/05_string.js\');$_TypeError=&$x1274[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1274;$x1275=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',375,26);$x1276=$x1275($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1276->class)&&$x1276->class===\'Error\'&&!isset($x1276->properties[\'file\'])&&!isset($x1276->properties[\'line\'])&&!isset($x1276->properties[\'column\'])){$x1276->properties[\'file\']=\'<image>/05_string.js\';$x1276->properties[\'line\']=375;$x1276->properties[\'column\']=26;$x1276->attributes[\'file\']=$x1276->attributes[\'line\']=$x1276->attributes[\'column\']=0;}throw new JSException($x1276,375,26,\'<image>/05_string.js\');}$x1273=JS::toObject($leThis,$global);unset($x1277,$W1277,$S1277,$U1277);$x1278=_1062444eb1665286b15372d6a2622cc9_4($global,$scope,$x1273,JS::toString(\'indexOf\',$global),375,26,\'<image>/05_string.js\');$x1277=&$x1278[0];list(,$W1277,$S1277,$U1277)=$x1278;if(!(is_object($x1277)&&isset($x1277->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1281=_1062444eb1665286b15372d6a2622cc9_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),375,26,\'<image>/05_string.js\');$_TypeError=&$x1281[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1281;$x1282=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',375,26);$x1283=$x1282($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1283->class)&&$x1283->class===\'Error\'&&!isset($x1283->properties[\'file\'])&&!isset($x1283->properties[\'line\'])&&!isset($x1283->properties[\'column\'])){$x1283->properties[\'file\']=\'<image>/05_string.js\';$x1283->properties[\'line\']=375;$x1283->properties[\'column\']=26;$x1283->attributes[\'file\']=$x1283->attributes[\'line\']=$x1283->attributes[\'column\']=0;}throw new JSException($x1283,375,26,\'<image>/05_string.js\');}$x1279=$x1277->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',375,26);$x1280=$x1279($global,$x1273,$x1277,array($_search,$_start),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1272=!(((gettype($x1280)===gettype((-1.0*JS::toNumber(1.0,$global)))&&$x1280===(-1.0*JS::toNumber(1.0,$global))))||(((is_float($x1280)||is_int($x1280))&&(is_float((-1.0*JS::toNumber(1.0,$global)))||is_int((-1.0*JS::toNumber(1.0,$global)))))&&$x1280==(-1.0*JS::toNumber(1.0,$global))));return$x1272;}return JS::$undefined;}', "\n";
function _1062444eb1665286b15372d6a2622cc9_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/05_string.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/05_string.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_String;
$x4 = clone JS::$functionTemplate; $x4->call = '_1062444eb1665286b15372d6a2622cc9_1'; $x4->parameters = array (
  0 => 'value',
); $x4->name = 'String'; $x4->scope = $scope; $x4->properties['prototype'] = clone JS::$objectTemplate; $x4->attributes['prototype'] = JS::WRITABLE; $x4->properties['prototype']->properties['constructor'] = $x4; $x4->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x4->properties['length'] = 1; $x4->attributes['length'] = 0;
$scope->properties['String'] = JS::$undefined; $_String =& $scope->properties['String'];
$UString = FALSE;
$_String = $x4;
$x32 = clone JS::$functionTemplate; $x32->call = '_1062444eb1665286b15372d6a2622cc9_2'; $x32->parameters = array (
  0 => 'c',
); $x32->scope = $scope; $x32->properties['prototype'] = clone JS::$objectTemplate; $x32->attributes['prototype'] = JS::WRITABLE; $x32->properties['prototype']->properties['constructor'] = $x32; $x32->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x32->properties['length'] = 1; $x32->attributes['length'] = 0;
$x33 = JS::toString('fromCharCode', $global);
if ($_String === JS::$undefined || $_String === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x34 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 16, 21, '<image>/05_string.js');
$_TypeError =& $x34[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x34;
$x35 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 16, 21);
$x36 = $x35($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x36->class) && $x36->class === 'Error' && !isset($x36->properties['file']) && !isset($x36->properties['line']) && !isset($x36->properties['column'])) {$x36->properties['file'] = '<image>/05_string.js';$x36->properties['line'] = 16;$x36->properties['column'] = 21;$x36->attributes['file'] = $x36->attributes['line'] = $x36->attributes['column'] = 0; }
throw new JSException($x36, 16, 21, '<image>/05_string.js');
}
$_String = JS::toObject($_String, $global);
unset($x37, $W37, $S37, $U37);
$x41 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $_String, JS::toString($x33, $global), 16, 21, '<image>/05_string.js');
$x37 =& $x41[0]; list(,$W37,$S37,$U37) = $x41;
if ($U37 && (!isset($_String->extensible) || $_String->extensible)) {$_String->properties[$x33] = $x37; $x37 =& $_String->properties[$x33]; $_String->attributes[$x33] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U37 = FALSE; $W37 = TRUE; }
if (isset($_String->class) && $_String->class === 'Array') {  if (isset($_String->properties['length']) && $_String->properties['length'] !== JS::$undefined) { $x43 = $_String->properties['length']; }  else { $x43 = 0; } }
if (isset($S37)) {
$x44 = $S37->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 16, 21);
$x45 = $x44($global, $_String, $S37, array($x32), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x42 = $x45;
} else {
if (!$U37) {$x42 = $x32;if ($W37) { $x37 = $x32; }  }
else { $x42 = JS::$undefined; }
}
if (isset($_String->class) && $_String->class === 'Array') {if (is_int('fromCharCode') && 'fromCharCode' >= $_String->properties['length']) { $_String->properties['length'] = 'fromCharCode' + 1; }else if ($x33 === 'length' && is_int($x32) && $x43 > $x32) {  for ($i = $x32; $i < $x43; ++$i) {  unset($_String->properties[$i], $_String->attributes[$i]); }}};
$x46 = clone JS::$objectTemplate;
$x47 = JS::toString('prototype', $global);
if ($_String === JS::$undefined || $_String === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x48 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 27, 18, '<image>/05_string.js');
$_TypeError =& $x48[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x48;
$x49 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 27, 18);
$x50 = $x49($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x50->class) && $x50->class === 'Error' && !isset($x50->properties['file']) && !isset($x50->properties['line']) && !isset($x50->properties['column'])) {$x50->properties['file'] = '<image>/05_string.js';$x50->properties['line'] = 27;$x50->properties['column'] = 18;$x50->attributes['file'] = $x50->attributes['line'] = $x50->attributes['column'] = 0; }
throw new JSException($x50, 27, 18, '<image>/05_string.js');
}
$_String = JS::toObject($_String, $global);
unset($x51, $W51, $S51, $U51);
$x52 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $_String, JS::toString($x47, $global), 27, 18, '<image>/05_string.js');
$x51 =& $x52[0]; list(,$W51,$S51,$U51) = $x52;
if ($U51 && (!isset($_String->extensible) || $_String->extensible)) {$_String->properties[$x47] = $x51; $x51 =& $_String->properties[$x47]; $_String->attributes[$x47] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U51 = FALSE; $W51 = TRUE; }
if (isset($_String->class) && $_String->class === 'Array') {  if (isset($_String->properties['length']) && $_String->properties['length'] !== JS::$undefined) { $x54 = $_String->properties['length']; }  else { $x54 = 0; } }
if (isset($S51)) {
$x55 = $S51->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 27, 18);
$x56 = $x55($global, $_String, $S51, array($x46), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x53 = $x56;
} else {
if (!$U51) {$x53 = $x46;if ($W51) { $x51 = $x46; }  }
else { $x53 = JS::$undefined; }
}
if (isset($_String->class) && $_String->class === 'Array') {if (is_int('prototype') && 'prototype' >= $_String->properties['length']) { $_String->properties['length'] = 'prototype' + 1; }else if ($x47 === 'length' && is_int($x46) && $x54 > $x46) {  for ($i = $x46; $i < $x54; ++$i) {  unset($_String->properties[$i], $_String->attributes[$i]); }}};
unset($_Object, $WObject, $SObject, $UObject);
$x57 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('Object', $global), 28, 51, '<image>/05_string.js');
$_Object =& $x57[0]; list(,$WObject,$SObject,$UObject) = $x57;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x58 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 28, 51, '<image>/05_string.js');
$_ReferenceError =& $x58[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x58;
$x59 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 28, 51);
$x60 = $x59($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x60->class) && $x60->class === 'Error' && !isset($x60->properties['file']) && !isset($x60->properties['line']) && !isset($x60->properties['column'])) {$x60->properties['file'] = '<image>/05_string.js';$x60->properties['line'] = 28;$x60->properties['column'] = 51;$x60->attributes['file'] = $x60->attributes['line'] = $x60->attributes['column'] = 0; }
throw new JSException($x60, 28, 51, '<image>/05_string.js');
}
$_String->properties['prototype']->prototype =$_Object->properties['prototype'];
$_String->properties['prototype']->class = 'String';
$_String->properties['prototype']->extensible = TRUE;
unset($x61, $W61, $S61, $U61);
$x62 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 31, 7, '<image>/05_string.js');
$x61 =& $x62[0]; list(,$W61,$S61,$U61) = $x62;
$x63 = JS::toString('constructor', $global);
if ($x61 === JS::$undefined || $x61 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x64 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 31, 30, '<image>/05_string.js');
$_TypeError =& $x64[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x64;
$x65 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 31, 30);
$x66 = $x65($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x66->class) && $x66->class === 'Error' && !isset($x66->properties['file']) && !isset($x66->properties['line']) && !isset($x66->properties['column'])) {$x66->properties['file'] = '<image>/05_string.js';$x66->properties['line'] = 31;$x66->properties['column'] = 30;$x66->attributes['file'] = $x66->attributes['line'] = $x66->attributes['column'] = 0; }
throw new JSException($x66, 31, 30, '<image>/05_string.js');
}
$x61 = JS::toObject($x61, $global);
unset($x67, $W67, $S67, $U67);
$x68 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x61, JS::toString($x63, $global), 31, 30, '<image>/05_string.js');
$x67 =& $x68[0]; list(,$W67,$S67,$U67) = $x68;
if ($U67 && (!isset($x61->extensible) || $x61->extensible)) {$x61->properties[$x63] = $x67; $x67 =& $x61->properties[$x63]; $x61->attributes[$x63] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U67 = FALSE; $W67 = TRUE; }
if (isset($x61->class) && $x61->class === 'Array') {  if (isset($x61->properties['length']) && $x61->properties['length'] !== JS::$undefined) { $x70 = $x61->properties['length']; }  else { $x70 = 0; } }
if (isset($S67)) {
$x71 = $S67->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 31, 30);
$x72 = $x71($global, $x61, $S67, array($_String), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x69 = $x72;
} else {
if (!$U67) {$x69 = $_String;if ($W67) { $x67 = $_String; }  }
else { $x69 = JS::$undefined; }
}
if (isset($x61->class) && $x61->class === 'Array') {if (is_int('constructor') && 'constructor' >= $x61->properties['length']) { $x61->properties['length'] = 'constructor' + 1; }else if ($x63 === 'length' && is_int($_String) && $x70 > $_String) {  for ($i = $_String; $i < $x70; ++$i) {  unset($x61->properties[$i], $x61->attributes[$i]); }}};
$x87 = clone JS::$functionTemplate; $x87->call = '_1062444eb1665286b15372d6a2622cc9_6'; $x87->parameters = array (
); $x87->scope = $scope; $x87->properties['prototype'] = clone JS::$objectTemplate; $x87->attributes['prototype'] = JS::WRITABLE; $x87->properties['prototype']->properties['constructor'] = $x87; $x87->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x87->properties['length'] = 0; $x87->attributes['length'] = 0;
unset($x88, $W88, $S88, $U88);
$x89 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 33, 7, '<image>/05_string.js');
$x88 =& $x89[0]; list(,$W88,$S88,$U88) = $x89;
$x90 = JS::toString('toString', $global);
if ($x88 === JS::$undefined || $x88 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x91 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 33, 27, '<image>/05_string.js');
$_TypeError =& $x91[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x91;
$x92 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 33, 27);
$x93 = $x92($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x93->class) && $x93->class === 'Error' && !isset($x93->properties['file']) && !isset($x93->properties['line']) && !isset($x93->properties['column'])) {$x93->properties['file'] = '<image>/05_string.js';$x93->properties['line'] = 33;$x93->properties['column'] = 27;$x93->attributes['file'] = $x93->attributes['line'] = $x93->attributes['column'] = 0; }
throw new JSException($x93, 33, 27, '<image>/05_string.js');
}
$x88 = JS::toObject($x88, $global);
unset($x94, $W94, $S94, $U94);
$x95 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x88, JS::toString($x90, $global), 33, 27, '<image>/05_string.js');
$x94 =& $x95[0]; list(,$W94,$S94,$U94) = $x95;
if ($U94 && (!isset($x88->extensible) || $x88->extensible)) {$x88->properties[$x90] = $x94; $x94 =& $x88->properties[$x90]; $x88->attributes[$x90] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U94 = FALSE; $W94 = TRUE; }
if (isset($x88->class) && $x88->class === 'Array') {  if (isset($x88->properties['length']) && $x88->properties['length'] !== JS::$undefined) { $x97 = $x88->properties['length']; }  else { $x97 = 0; } }
if (isset($S94)) {
$x98 = $S94->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 33, 27);
$x99 = $x98($global, $x88, $S94, array($x87), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x96 = $x99;
} else {
if (!$U94) {$x96 = $x87;if ($W94) { $x94 = $x87; }  }
else { $x96 = JS::$undefined; }
}
if (isset($x88->class) && $x88->class === 'Array') {if (is_int('toString') && 'toString' >= $x88->properties['length']) { $x88->properties['length'] = 'toString' + 1; }else if ($x90 === 'length' && is_int($x87) && $x97 > $x87) {  for ($i = $x87; $i < $x97; ++$i) {  unset($x88->properties[$i], $x88->attributes[$i]); }}};
unset($x100, $W100, $S100, $U100);
$x101 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 41, 34, '<image>/05_string.js');
$x100 =& $x101[0]; list(,$W100,$S100,$U100) = $x101;
unset($x102, $W102, $S102, $U102);
$x103 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x100, JS::toString('toString', $global), 41, 44, '<image>/05_string.js');
$x102 =& $x103[0]; list(,$W102,$S102,$U102) = $x103;
unset($x104, $W104, $S104, $U104);
$x105 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 41, 7, '<image>/05_string.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
$x106 = JS::toString('valueOf', $global);
if ($x104 === JS::$undefined || $x104 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x107 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 41, 26, '<image>/05_string.js');
$_TypeError =& $x107[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x107;
$x108 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 41, 26);
$x109 = $x108($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x109->class) && $x109->class === 'Error' && !isset($x109->properties['file']) && !isset($x109->properties['line']) && !isset($x109->properties['column'])) {$x109->properties['file'] = '<image>/05_string.js';$x109->properties['line'] = 41;$x109->properties['column'] = 26;$x109->attributes['file'] = $x109->attributes['line'] = $x109->attributes['column'] = 0; }
throw new JSException($x109, 41, 26, '<image>/05_string.js');
}
$x104 = JS::toObject($x104, $global);
unset($x110, $W110, $S110, $U110);
$x111 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x104, JS::toString($x106, $global), 41, 26, '<image>/05_string.js');
$x110 =& $x111[0]; list(,$W110,$S110,$U110) = $x111;
if ($U110 && (!isset($x104->extensible) || $x104->extensible)) {$x104->properties[$x106] = $x110; $x110 =& $x104->properties[$x106]; $x104->attributes[$x106] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U110 = FALSE; $W110 = TRUE; }
if (isset($x104->class) && $x104->class === 'Array') {  if (isset($x104->properties['length']) && $x104->properties['length'] !== JS::$undefined) { $x113 = $x104->properties['length']; }  else { $x113 = 0; } }
if (isset($S110)) {
$x114 = $S110->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 41, 26);
$x115 = $x114($global, $x104, $S110, array($x102), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x112 = $x115;
} else {
if (!$U110) {$x112 = $x102;if ($W110) { $x110 = $x102; }  }
else { $x112 = JS::$undefined; }
}
if (isset($x104->class) && $x104->class === 'Array') {if (is_int('valueOf') && 'valueOf' >= $x104->properties['length']) { $x104->properties['length'] = 'valueOf' + 1; }else if ($x106 === 'length' && is_int($x102) && $x113 > $x102) {  for ($i = $x102; $i < $x113; ++$i) {  unset($x104->properties[$i], $x104->attributes[$i]); }}};
$x132 = clone JS::$functionTemplate; $x132->call = '_1062444eb1665286b15372d6a2622cc9_7'; $x132->parameters = array (
  0 => 'pos',
); $x132->scope = $scope; $x132->properties['prototype'] = clone JS::$objectTemplate; $x132->attributes['prototype'] = JS::WRITABLE; $x132->properties['prototype']->properties['constructor'] = $x132; $x132->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x132->properties['length'] = 1; $x132->attributes['length'] = 0;
unset($x133, $W133, $S133, $U133);
$x134 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 43, 7, '<image>/05_string.js');
$x133 =& $x134[0]; list(,$W133,$S133,$U133) = $x134;
$x135 = JS::toString('charAt', $global);
if ($x133 === JS::$undefined || $x133 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x136 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 43, 25, '<image>/05_string.js');
$_TypeError =& $x136[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x136;
$x137 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 43, 25);
$x138 = $x137($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x138->class) && $x138->class === 'Error' && !isset($x138->properties['file']) && !isset($x138->properties['line']) && !isset($x138->properties['column'])) {$x138->properties['file'] = '<image>/05_string.js';$x138->properties['line'] = 43;$x138->properties['column'] = 25;$x138->attributes['file'] = $x138->attributes['line'] = $x138->attributes['column'] = 0; }
throw new JSException($x138, 43, 25, '<image>/05_string.js');
}
$x133 = JS::toObject($x133, $global);
unset($x139, $W139, $S139, $U139);
$x140 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x133, JS::toString($x135, $global), 43, 25, '<image>/05_string.js');
$x139 =& $x140[0]; list(,$W139,$S139,$U139) = $x140;
if ($U139 && (!isset($x133->extensible) || $x133->extensible)) {$x133->properties[$x135] = $x139; $x139 =& $x133->properties[$x135]; $x133->attributes[$x135] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U139 = FALSE; $W139 = TRUE; }
if (isset($x133->class) && $x133->class === 'Array') {  if (isset($x133->properties['length']) && $x133->properties['length'] !== JS::$undefined) { $x142 = $x133->properties['length']; }  else { $x142 = 0; } }
if (isset($S139)) {
$x143 = $S139->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 43, 25);
$x144 = $x143($global, $x133, $S139, array($x132), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x141 = $x144;
} else {
if (!$U139) {$x141 = $x132;if ($W139) { $x139 = $x132; }  }
else { $x141 = JS::$undefined; }
}
if (isset($x133->class) && $x133->class === 'Array') {if (is_int('charAt') && 'charAt' >= $x133->properties['length']) { $x133->properties['length'] = 'charAt' + 1; }else if ($x135 === 'length' && is_int($x132) && $x142 > $x132) {  for ($i = $x132; $i < $x142; ++$i) {  unset($x133->properties[$i], $x133->attributes[$i]); }}};
$x176 = clone JS::$functionTemplate; $x176->call = '_1062444eb1665286b15372d6a2622cc9_8'; $x176->parameters = array (
  0 => 'pos',
); $x176->scope = $scope; $x176->properties['prototype'] = clone JS::$objectTemplate; $x176->attributes['prototype'] = JS::WRITABLE; $x176->properties['prototype']->properties['constructor'] = $x176; $x176->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x176->properties['length'] = 1; $x176->attributes['length'] = 0;
unset($x177, $W177, $S177, $U177);
$x178 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 53, 7, '<image>/05_string.js');
$x177 =& $x178[0]; list(,$W177,$S177,$U177) = $x178;
$x179 = JS::toString('charCodeAt', $global);
if ($x177 === JS::$undefined || $x177 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x180 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 53, 29, '<image>/05_string.js');
$_TypeError =& $x180[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x180;
$x181 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 53, 29);
$x182 = $x181($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x182->class) && $x182->class === 'Error' && !isset($x182->properties['file']) && !isset($x182->properties['line']) && !isset($x182->properties['column'])) {$x182->properties['file'] = '<image>/05_string.js';$x182->properties['line'] = 53;$x182->properties['column'] = 29;$x182->attributes['file'] = $x182->attributes['line'] = $x182->attributes['column'] = 0; }
throw new JSException($x182, 53, 29, '<image>/05_string.js');
}
$x177 = JS::toObject($x177, $global);
unset($x183, $W183, $S183, $U183);
$x184 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x177, JS::toString($x179, $global), 53, 29, '<image>/05_string.js');
$x183 =& $x184[0]; list(,$W183,$S183,$U183) = $x184;
if ($U183 && (!isset($x177->extensible) || $x177->extensible)) {$x177->properties[$x179] = $x183; $x183 =& $x177->properties[$x179]; $x177->attributes[$x179] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U183 = FALSE; $W183 = TRUE; }
if (isset($x177->class) && $x177->class === 'Array') {  if (isset($x177->properties['length']) && $x177->properties['length'] !== JS::$undefined) { $x186 = $x177->properties['length']; }  else { $x186 = 0; } }
if (isset($S183)) {
$x187 = $S183->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 53, 29);
$x188 = $x187($global, $x177, $S183, array($x176), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x185 = $x188;
} else {
if (!$U183) {$x185 = $x176;if ($W183) { $x183 = $x176; }  }
else { $x185 = JS::$undefined; }
}
if (isset($x177->class) && $x177->class === 'Array') {if (is_int('charCodeAt') && 'charCodeAt' >= $x177->properties['length']) { $x177->properties['length'] = 'charCodeAt' + 1; }else if ($x179 === 'length' && is_int($x176) && $x186 > $x176) {  for ($i = $x176; $i < $x186; ++$i) {  unset($x177->properties[$i], $x177->attributes[$i]); }}};
$x208 = clone JS::$functionTemplate; $x208->call = '_1062444eb1665286b15372d6a2622cc9_9'; $x208->parameters = array (
  0 => 'string',
); $x208->scope = $scope; $x208->properties['prototype'] = clone JS::$objectTemplate; $x208->attributes['prototype'] = JS::WRITABLE; $x208->properties['prototype']->properties['constructor'] = $x208; $x208->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x208->properties['length'] = 1; $x208->attributes['length'] = 0;
unset($x209, $W209, $S209, $U209);
$x210 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 65, 7, '<image>/05_string.js');
$x209 =& $x210[0]; list(,$W209,$S209,$U209) = $x210;
$x211 = JS::toString('concat', $global);
if ($x209 === JS::$undefined || $x209 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x212 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 65, 25, '<image>/05_string.js');
$_TypeError =& $x212[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x212;
$x213 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 65, 25);
$x214 = $x213($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x214->class) && $x214->class === 'Error' && !isset($x214->properties['file']) && !isset($x214->properties['line']) && !isset($x214->properties['column'])) {$x214->properties['file'] = '<image>/05_string.js';$x214->properties['line'] = 65;$x214->properties['column'] = 25;$x214->attributes['file'] = $x214->attributes['line'] = $x214->attributes['column'] = 0; }
throw new JSException($x214, 65, 25, '<image>/05_string.js');
}
$x209 = JS::toObject($x209, $global);
unset($x215, $W215, $S215, $U215);
$x216 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x209, JS::toString($x211, $global), 65, 25, '<image>/05_string.js');
$x215 =& $x216[0]; list(,$W215,$S215,$U215) = $x216;
if ($U215 && (!isset($x209->extensible) || $x209->extensible)) {$x209->properties[$x211] = $x215; $x215 =& $x209->properties[$x211]; $x209->attributes[$x211] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U215 = FALSE; $W215 = TRUE; }
if (isset($x209->class) && $x209->class === 'Array') {  if (isset($x209->properties['length']) && $x209->properties['length'] !== JS::$undefined) { $x218 = $x209->properties['length']; }  else { $x218 = 0; } }
if (isset($S215)) {
$x219 = $S215->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 65, 25);
$x220 = $x219($global, $x209, $S215, array($x208), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x217 = $x220;
} else {
if (!$U215) {$x217 = $x208;if ($W215) { $x215 = $x208; }  }
else { $x217 = JS::$undefined; }
}
if (isset($x209->class) && $x209->class === 'Array') {if (is_int('concat') && 'concat' >= $x209->properties['length']) { $x209->properties['length'] = 'concat' + 1; }else if ($x211 === 'length' && is_int($x208) && $x218 > $x208) {  for ($i = $x208; $i < $x218; ++$i) {  unset($x209->properties[$i], $x209->attributes[$i]); }}};
$x252 = clone JS::$functionTemplate; $x252->call = '_1062444eb1665286b15372d6a2622cc9_10'; $x252->parameters = array (
  0 => 'search',
  1 => 'position',
); $x252->scope = $scope; $x252->properties['prototype'] = clone JS::$objectTemplate; $x252->attributes['prototype'] = JS::WRITABLE; $x252->properties['prototype']->properties['constructor'] = $x252; $x252->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x252->properties['length'] = 2; $x252->attributes['length'] = 0;
unset($x253, $W253, $S253, $U253);
$x254 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 75, 7, '<image>/05_string.js');
$x253 =& $x254[0]; list(,$W253,$S253,$U253) = $x254;
$x255 = JS::toString('indexOf', $global);
if ($x253 === JS::$undefined || $x253 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x256 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 75, 26, '<image>/05_string.js');
$_TypeError =& $x256[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x256;
$x257 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 75, 26);
$x258 = $x257($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x258->class) && $x258->class === 'Error' && !isset($x258->properties['file']) && !isset($x258->properties['line']) && !isset($x258->properties['column'])) {$x258->properties['file'] = '<image>/05_string.js';$x258->properties['line'] = 75;$x258->properties['column'] = 26;$x258->attributes['file'] = $x258->attributes['line'] = $x258->attributes['column'] = 0; }
throw new JSException($x258, 75, 26, '<image>/05_string.js');
}
$x253 = JS::toObject($x253, $global);
unset($x259, $W259, $S259, $U259);
$x260 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x253, JS::toString($x255, $global), 75, 26, '<image>/05_string.js');
$x259 =& $x260[0]; list(,$W259,$S259,$U259) = $x260;
if ($U259 && (!isset($x253->extensible) || $x253->extensible)) {$x253->properties[$x255] = $x259; $x259 =& $x253->properties[$x255]; $x253->attributes[$x255] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U259 = FALSE; $W259 = TRUE; }
if (isset($x253->class) && $x253->class === 'Array') {  if (isset($x253->properties['length']) && $x253->properties['length'] !== JS::$undefined) { $x262 = $x253->properties['length']; }  else { $x262 = 0; } }
if (isset($S259)) {
$x263 = $S259->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 75, 26);
$x264 = $x263($global, $x253, $S259, array($x252), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x261 = $x264;
} else {
if (!$U259) {$x261 = $x252;if ($W259) { $x259 = $x252; }  }
else { $x261 = JS::$undefined; }
}
if (isset($x253->class) && $x253->class === 'Array') {if (is_int('indexOf') && 'indexOf' >= $x253->properties['length']) { $x253->properties['length'] = 'indexOf' + 1; }else if ($x255 === 'length' && is_int($x252) && $x262 > $x252) {  for ($i = $x252; $i < $x262; ++$i) {  unset($x253->properties[$i], $x253->attributes[$i]); }}};
$x296 = clone JS::$functionTemplate; $x296->call = '_1062444eb1665286b15372d6a2622cc9_11'; $x296->parameters = array (
  0 => 'search',
  1 => 'position',
); $x296->scope = $scope; $x296->properties['prototype'] = clone JS::$objectTemplate; $x296->attributes['prototype'] = JS::WRITABLE; $x296->properties['prototype']->properties['constructor'] = $x296; $x296->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x296->properties['length'] = 2; $x296->attributes['length'] = 0;
unset($x297, $W297, $S297, $U297);
$x298 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 90, 7, '<image>/05_string.js');
$x297 =& $x298[0]; list(,$W297,$S297,$U297) = $x298;
$x299 = JS::toString('lastIndexOf', $global);
if ($x297 === JS::$undefined || $x297 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x300 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 90, 30, '<image>/05_string.js');
$_TypeError =& $x300[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x300;
$x301 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 90, 30);
$x302 = $x301($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x302->class) && $x302->class === 'Error' && !isset($x302->properties['file']) && !isset($x302->properties['line']) && !isset($x302->properties['column'])) {$x302->properties['file'] = '<image>/05_string.js';$x302->properties['line'] = 90;$x302->properties['column'] = 30;$x302->attributes['file'] = $x302->attributes['line'] = $x302->attributes['column'] = 0; }
throw new JSException($x302, 90, 30, '<image>/05_string.js');
}
$x297 = JS::toObject($x297, $global);
unset($x303, $W303, $S303, $U303);
$x304 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x297, JS::toString($x299, $global), 90, 30, '<image>/05_string.js');
$x303 =& $x304[0]; list(,$W303,$S303,$U303) = $x304;
if ($U303 && (!isset($x297->extensible) || $x297->extensible)) {$x297->properties[$x299] = $x303; $x303 =& $x297->properties[$x299]; $x297->attributes[$x299] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U303 = FALSE; $W303 = TRUE; }
if (isset($x297->class) && $x297->class === 'Array') {  if (isset($x297->properties['length']) && $x297->properties['length'] !== JS::$undefined) { $x306 = $x297->properties['length']; }  else { $x306 = 0; } }
if (isset($S303)) {
$x307 = $S303->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 90, 30);
$x308 = $x307($global, $x297, $S303, array($x296), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x305 = $x308;
} else {
if (!$U303) {$x305 = $x296;if ($W303) { $x303 = $x296; }  }
else { $x305 = JS::$undefined; }
}
if (isset($x297->class) && $x297->class === 'Array') {if (is_int('lastIndexOf') && 'lastIndexOf' >= $x297->properties['length']) { $x297->properties['length'] = 'lastIndexOf' + 1; }else if ($x299 === 'length' && is_int($x296) && $x306 > $x296) {  for ($i = $x296; $i < $x306; ++$i) {  unset($x297->properties[$i], $x297->attributes[$i]); }}};
$x311 = clone JS::$functionTemplate; $x311->call = '_1062444eb1665286b15372d6a2622cc9_12'; $x311->parameters = array (
  0 => 'that',
); $x311->scope = $scope; $x311->properties['prototype'] = clone JS::$objectTemplate; $x311->attributes['prototype'] = JS::WRITABLE; $x311->properties['prototype']->properties['constructor'] = $x311; $x311->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x311->properties['length'] = 1; $x311->attributes['length'] = 0;
unset($x312, $W312, $S312, $U312);
$x313 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 105, 7, '<image>/05_string.js');
$x312 =& $x313[0]; list(,$W312,$S312,$U312) = $x313;
$x314 = JS::toString('localeCompare', $global);
if ($x312 === JS::$undefined || $x312 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x315 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 105, 32, '<image>/05_string.js');
$_TypeError =& $x315[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x315;
$x316 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 105, 32);
$x317 = $x316($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x317->class) && $x317->class === 'Error' && !isset($x317->properties['file']) && !isset($x317->properties['line']) && !isset($x317->properties['column'])) {$x317->properties['file'] = '<image>/05_string.js';$x317->properties['line'] = 105;$x317->properties['column'] = 32;$x317->attributes['file'] = $x317->attributes['line'] = $x317->attributes['column'] = 0; }
throw new JSException($x317, 105, 32, '<image>/05_string.js');
}
$x312 = JS::toObject($x312, $global);
unset($x318, $W318, $S318, $U318);
$x319 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x312, JS::toString($x314, $global), 105, 32, '<image>/05_string.js');
$x318 =& $x319[0]; list(,$W318,$S318,$U318) = $x319;
if ($U318 && (!isset($x312->extensible) || $x312->extensible)) {$x312->properties[$x314] = $x318; $x318 =& $x312->properties[$x314]; $x312->attributes[$x314] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U318 = FALSE; $W318 = TRUE; }
if (isset($x312->class) && $x312->class === 'Array') {  if (isset($x312->properties['length']) && $x312->properties['length'] !== JS::$undefined) { $x321 = $x312->properties['length']; }  else { $x321 = 0; } }
if (isset($S318)) {
$x322 = $S318->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 105, 32);
$x323 = $x322($global, $x312, $S318, array($x311), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x320 = $x323;
} else {
if (!$U318) {$x320 = $x311;if ($W318) { $x318 = $x311; }  }
else { $x320 = JS::$undefined; }
}
if (isset($x312->class) && $x312->class === 'Array') {if (is_int('localeCompare') && 'localeCompare' >= $x312->properties['length']) { $x312->properties['length'] = 'localeCompare' + 1; }else if ($x314 === 'length' && is_int($x311) && $x321 > $x311) {  for ($i = $x311; $i < $x321; ++$i) {  unset($x312->properties[$i], $x312->attributes[$i]); }}};
$x412 = clone JS::$functionTemplate; $x412->call = '_1062444eb1665286b15372d6a2622cc9_13'; $x412->parameters = array (
  0 => 'regexp',
); $x412->scope = $scope; $x412->properties['prototype'] = clone JS::$objectTemplate; $x412->attributes['prototype'] = JS::WRITABLE; $x412->properties['prototype']->properties['constructor'] = $x412; $x412->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x412->properties['length'] = 1; $x412->attributes['length'] = 0;
unset($x413, $W413, $S413, $U413);
$x414 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 109, 7, '<image>/05_string.js');
$x413 =& $x414[0]; list(,$W413,$S413,$U413) = $x414;
$x415 = JS::toString('match', $global);
if ($x413 === JS::$undefined || $x413 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x416 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 109, 24, '<image>/05_string.js');
$_TypeError =& $x416[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x416;
$x417 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 109, 24);
$x418 = $x417($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x418->class) && $x418->class === 'Error' && !isset($x418->properties['file']) && !isset($x418->properties['line']) && !isset($x418->properties['column'])) {$x418->properties['file'] = '<image>/05_string.js';$x418->properties['line'] = 109;$x418->properties['column'] = 24;$x418->attributes['file'] = $x418->attributes['line'] = $x418->attributes['column'] = 0; }
throw new JSException($x418, 109, 24, '<image>/05_string.js');
}
$x413 = JS::toObject($x413, $global);
unset($x419, $W419, $S419, $U419);
$x420 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x413, JS::toString($x415, $global), 109, 24, '<image>/05_string.js');
$x419 =& $x420[0]; list(,$W419,$S419,$U419) = $x420;
if ($U419 && (!isset($x413->extensible) || $x413->extensible)) {$x413->properties[$x415] = $x419; $x419 =& $x413->properties[$x415]; $x413->attributes[$x415] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U419 = FALSE; $W419 = TRUE; }
if (isset($x413->class) && $x413->class === 'Array') {  if (isset($x413->properties['length']) && $x413->properties['length'] !== JS::$undefined) { $x422 = $x413->properties['length']; }  else { $x422 = 0; } }
if (isset($S419)) {
$x423 = $S419->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 109, 24);
$x424 = $x423($global, $x413, $S419, array($x412), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x421 = $x424;
} else {
if (!$U419) {$x421 = $x412;if ($W419) { $x419 = $x412; }  }
else { $x421 = JS::$undefined; }
}
if (isset($x413->class) && $x413->class === 'Array') {if (is_int('match') && 'match' >= $x413->properties['length']) { $x413->properties['length'] = 'match' + 1; }else if ($x415 === 'length' && is_int($x412) && $x422 > $x412) {  for ($i = $x412; $i < $x422; ++$i) {  unset($x413->properties[$i], $x413->attributes[$i]); }}};
$x596 = clone JS::$functionTemplate; $x596->call = '_1062444eb1665286b15372d6a2622cc9_14'; $x596->parameters = array (
  0 => 'search',
  1 => 'replace',
); $x596->scope = $scope; $x596->properties['prototype'] = clone JS::$objectTemplate; $x596->attributes['prototype'] = JS::WRITABLE; $x596->properties['prototype']->properties['constructor'] = $x596; $x596->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x596->properties['length'] = 2; $x596->attributes['length'] = 0;
unset($x597, $W597, $S597, $U597);
$x598 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 144, 7, '<image>/05_string.js');
$x597 =& $x598[0]; list(,$W597,$S597,$U597) = $x598;
$x599 = JS::toString('replace', $global);
if ($x597 === JS::$undefined || $x597 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x600 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 144, 26, '<image>/05_string.js');
$_TypeError =& $x600[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x600;
$x601 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 144, 26);
$x602 = $x601($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x602->class) && $x602->class === 'Error' && !isset($x602->properties['file']) && !isset($x602->properties['line']) && !isset($x602->properties['column'])) {$x602->properties['file'] = '<image>/05_string.js';$x602->properties['line'] = 144;$x602->properties['column'] = 26;$x602->attributes['file'] = $x602->attributes['line'] = $x602->attributes['column'] = 0; }
throw new JSException($x602, 144, 26, '<image>/05_string.js');
}
$x597 = JS::toObject($x597, $global);
unset($x603, $W603, $S603, $U603);
$x604 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x597, JS::toString($x599, $global), 144, 26, '<image>/05_string.js');
$x603 =& $x604[0]; list(,$W603,$S603,$U603) = $x604;
if ($U603 && (!isset($x597->extensible) || $x597->extensible)) {$x597->properties[$x599] = $x603; $x603 =& $x597->properties[$x599]; $x597->attributes[$x599] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U603 = FALSE; $W603 = TRUE; }
if (isset($x597->class) && $x597->class === 'Array') {  if (isset($x597->properties['length']) && $x597->properties['length'] !== JS::$undefined) { $x606 = $x597->properties['length']; }  else { $x606 = 0; } }
if (isset($S603)) {
$x607 = $S603->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 144, 26);
$x608 = $x607($global, $x597, $S603, array($x596), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x605 = $x608;
} else {
if (!$U603) {$x605 = $x596;if ($W603) { $x603 = $x596; }  }
else { $x605 = JS::$undefined; }
}
if (isset($x597->class) && $x597->class === 'Array') {if (is_int('replace') && 'replace' >= $x597->properties['length']) { $x597->properties['length'] = 'replace' + 1; }else if ($x599 === 'length' && is_int($x596) && $x606 > $x596) {  for ($i = $x596; $i < $x606; ++$i) {  unset($x597->properties[$i], $x597->attributes[$i]); }}};
$x649 = clone JS::$functionTemplate; $x649->call = '_1062444eb1665286b15372d6a2622cc9_16'; $x649->parameters = array (
  0 => 'search',
); $x649->scope = $scope; $x649->properties['prototype'] = clone JS::$objectTemplate; $x649->attributes['prototype'] = JS::WRITABLE; $x649->properties['prototype']->properties['constructor'] = $x649; $x649->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x649->properties['length'] = 1; $x649->attributes['length'] = 0;
unset($x650, $W650, $S650, $U650);
$x651 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 190, 7, '<image>/05_string.js');
$x650 =& $x651[0]; list(,$W650,$S650,$U650) = $x651;
$x652 = JS::toString('search', $global);
if ($x650 === JS::$undefined || $x650 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x653 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 190, 25, '<image>/05_string.js');
$_TypeError =& $x653[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x653;
$x654 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 190, 25);
$x655 = $x654($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x655->class) && $x655->class === 'Error' && !isset($x655->properties['file']) && !isset($x655->properties['line']) && !isset($x655->properties['column'])) {$x655->properties['file'] = '<image>/05_string.js';$x655->properties['line'] = 190;$x655->properties['column'] = 25;$x655->attributes['file'] = $x655->attributes['line'] = $x655->attributes['column'] = 0; }
throw new JSException($x655, 190, 25, '<image>/05_string.js');
}
$x650 = JS::toObject($x650, $global);
unset($x656, $W656, $S656, $U656);
$x657 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x650, JS::toString($x652, $global), 190, 25, '<image>/05_string.js');
$x656 =& $x657[0]; list(,$W656,$S656,$U656) = $x657;
if ($U656 && (!isset($x650->extensible) || $x650->extensible)) {$x650->properties[$x652] = $x656; $x656 =& $x650->properties[$x652]; $x650->attributes[$x652] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U656 = FALSE; $W656 = TRUE; }
if (isset($x650->class) && $x650->class === 'Array') {  if (isset($x650->properties['length']) && $x650->properties['length'] !== JS::$undefined) { $x659 = $x650->properties['length']; }  else { $x659 = 0; } }
if (isset($S656)) {
$x660 = $S656->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 190, 25);
$x661 = $x660($global, $x650, $S656, array($x649), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x658 = $x661;
} else {
if (!$U656) {$x658 = $x649;if ($W656) { $x656 = $x649; }  }
else { $x658 = JS::$undefined; }
}
if (isset($x650->class) && $x650->class === 'Array') {if (is_int('search') && 'search' >= $x650->properties['length']) { $x650->properties['length'] = 'search' + 1; }else if ($x652 === 'length' && is_int($x649) && $x659 > $x649) {  for ($i = $x649; $i < $x659; ++$i) {  unset($x650->properties[$i], $x650->attributes[$i]); }}};
$x711 = clone JS::$functionTemplate; $x711->call = '_1062444eb1665286b15372d6a2622cc9_17'; $x711->parameters = array (
  0 => 'start',
  1 => 'end',
); $x711->scope = $scope; $x711->properties['prototype'] = clone JS::$objectTemplate; $x711->attributes['prototype'] = JS::WRITABLE; $x711->properties['prototype']->properties['constructor'] = $x711; $x711->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x711->properties['length'] = 2; $x711->attributes['length'] = 0;
unset($x712, $W712, $S712, $U712);
$x713 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 207, 7, '<image>/05_string.js');
$x712 =& $x713[0]; list(,$W712,$S712,$U712) = $x713;
$x714 = JS::toString('slice', $global);
if ($x712 === JS::$undefined || $x712 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x715 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 207, 24, '<image>/05_string.js');
$_TypeError =& $x715[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x715;
$x716 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 207, 24);
$x717 = $x716($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x717->class) && $x717->class === 'Error' && !isset($x717->properties['file']) && !isset($x717->properties['line']) && !isset($x717->properties['column'])) {$x717->properties['file'] = '<image>/05_string.js';$x717->properties['line'] = 207;$x717->properties['column'] = 24;$x717->attributes['file'] = $x717->attributes['line'] = $x717->attributes['column'] = 0; }
throw new JSException($x717, 207, 24, '<image>/05_string.js');
}
$x712 = JS::toObject($x712, $global);
unset($x718, $W718, $S718, $U718);
$x719 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x712, JS::toString($x714, $global), 207, 24, '<image>/05_string.js');
$x718 =& $x719[0]; list(,$W718,$S718,$U718) = $x719;
if ($U718 && (!isset($x712->extensible) || $x712->extensible)) {$x712->properties[$x714] = $x718; $x718 =& $x712->properties[$x714]; $x712->attributes[$x714] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U718 = FALSE; $W718 = TRUE; }
if (isset($x712->class) && $x712->class === 'Array') {  if (isset($x712->properties['length']) && $x712->properties['length'] !== JS::$undefined) { $x721 = $x712->properties['length']; }  else { $x721 = 0; } }
if (isset($S718)) {
$x722 = $S718->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 207, 24);
$x723 = $x722($global, $x712, $S718, array($x711), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x720 = $x723;
} else {
if (!$U718) {$x720 = $x711;if ($W718) { $x718 = $x711; }  }
else { $x720 = JS::$undefined; }
}
if (isset($x712->class) && $x712->class === 'Array') {if (is_int('slice') && 'slice' >= $x712->properties['length']) { $x712->properties['length'] = 'slice' + 1; }else if ($x714 === 'length' && is_int($x711) && $x721 > $x711) {  for ($i = $x711; $i < $x721; ++$i) {  unset($x712->properties[$i], $x712->attributes[$i]); }}};
$x930 = clone JS::$functionTemplate; $x930->call = '_1062444eb1665286b15372d6a2622cc9_18'; $x930->parameters = array (
  0 => 'separator',
  1 => 'limit',
); $x930->scope = $scope; $x930->properties['prototype'] = clone JS::$objectTemplate; $x930->attributes['prototype'] = JS::WRITABLE; $x930->properties['prototype']->properties['constructor'] = $x930; $x930->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x930->properties['length'] = 2; $x930->attributes['length'] = 0;
unset($x931, $W931, $S931, $U931);
$x932 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 229, 7, '<image>/05_string.js');
$x931 =& $x932[0]; list(,$W931,$S931,$U931) = $x932;
$x933 = JS::toString('split', $global);
if ($x931 === JS::$undefined || $x931 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x934 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 229, 24, '<image>/05_string.js');
$_TypeError =& $x934[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x934;
$x935 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 229, 24);
$x936 = $x935($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x936->class) && $x936->class === 'Error' && !isset($x936->properties['file']) && !isset($x936->properties['line']) && !isset($x936->properties['column'])) {$x936->properties['file'] = '<image>/05_string.js';$x936->properties['line'] = 229;$x936->properties['column'] = 24;$x936->attributes['file'] = $x936->attributes['line'] = $x936->attributes['column'] = 0; }
throw new JSException($x936, 229, 24, '<image>/05_string.js');
}
$x931 = JS::toObject($x931, $global);
unset($x937, $W937, $S937, $U937);
$x938 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x931, JS::toString($x933, $global), 229, 24, '<image>/05_string.js');
$x937 =& $x938[0]; list(,$W937,$S937,$U937) = $x938;
if ($U937 && (!isset($x931->extensible) || $x931->extensible)) {$x931->properties[$x933] = $x937; $x937 =& $x931->properties[$x933]; $x931->attributes[$x933] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U937 = FALSE; $W937 = TRUE; }
if (isset($x931->class) && $x931->class === 'Array') {  if (isset($x931->properties['length']) && $x931->properties['length'] !== JS::$undefined) { $x940 = $x931->properties['length']; }  else { $x940 = 0; } }
if (isset($S937)) {
$x941 = $S937->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 229, 24);
$x942 = $x941($global, $x931, $S937, array($x930), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x939 = $x942;
} else {
if (!$U937) {$x939 = $x930;if ($W937) { $x937 = $x930; }  }
else { $x939 = JS::$undefined; }
}
if (isset($x931->class) && $x931->class === 'Array') {if (is_int('split') && 'split' >= $x931->properties['length']) { $x931->properties['length'] = 'split' + 1; }else if ($x933 === 'length' && is_int($x930) && $x940 > $x930) {  for ($i = $x930; $i < $x940; ++$i) {  unset($x931->properties[$i], $x931->attributes[$i]); }}};
$x1040 = clone JS::$functionTemplate; $x1040->call = '_1062444eb1665286b15372d6a2622cc9_19'; $x1040->parameters = array (
  0 => 'start',
  1 => 'end',
); $x1040->scope = $scope; $x1040->properties['prototype'] = clone JS::$objectTemplate; $x1040->attributes['prototype'] = JS::WRITABLE; $x1040->properties['prototype']->properties['constructor'] = $x1040; $x1040->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1040->properties['length'] = 2; $x1040->attributes['length'] = 0;
unset($x1041, $W1041, $S1041, $U1041);
$x1042 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 287, 7, '<image>/05_string.js');
$x1041 =& $x1042[0]; list(,$W1041,$S1041,$U1041) = $x1042;
$x1043 = JS::toString('alternativeSubstring', $global);
if ($x1041 === JS::$undefined || $x1041 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1044 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 287, 39, '<image>/05_string.js');
$_TypeError =& $x1044[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1044;
$x1045 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 287, 39);
$x1046 = $x1045($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1046->class) && $x1046->class === 'Error' && !isset($x1046->properties['file']) && !isset($x1046->properties['line']) && !isset($x1046->properties['column'])) {$x1046->properties['file'] = '<image>/05_string.js';$x1046->properties['line'] = 287;$x1046->properties['column'] = 39;$x1046->attributes['file'] = $x1046->attributes['line'] = $x1046->attributes['column'] = 0; }
throw new JSException($x1046, 287, 39, '<image>/05_string.js');
}
$x1041 = JS::toObject($x1041, $global);
unset($x1047, $W1047, $S1047, $U1047);
$x1048 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x1041, JS::toString($x1043, $global), 287, 39, '<image>/05_string.js');
$x1047 =& $x1048[0]; list(,$W1047,$S1047,$U1047) = $x1048;
if ($U1047 && (!isset($x1041->extensible) || $x1041->extensible)) {$x1041->properties[$x1043] = $x1047; $x1047 =& $x1041->properties[$x1043]; $x1041->attributes[$x1043] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1047 = FALSE; $W1047 = TRUE; }
if (isset($x1041->class) && $x1041->class === 'Array') {  if (isset($x1041->properties['length']) && $x1041->properties['length'] !== JS::$undefined) { $x1050 = $x1041->properties['length']; }  else { $x1050 = 0; } }
if (isset($S1047)) {
$x1051 = $S1047->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 287, 39);
$x1052 = $x1051($global, $x1041, $S1047, array($x1040), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1049 = $x1052;
} else {
if (!$U1047) {$x1049 = $x1040;if ($W1047) { $x1047 = $x1040; }  }
else { $x1049 = JS::$undefined; }
}
if (isset($x1041->class) && $x1041->class === 'Array') {if (is_int('alternativeSubstring') && 'alternativeSubstring' >= $x1041->properties['length']) { $x1041->properties['length'] = 'alternativeSubstring' + 1; }else if ($x1043 === 'length' && is_int($x1040) && $x1050 > $x1040) {  for ($i = $x1040; $i < $x1050; ++$i) {  unset($x1041->properties[$i], $x1041->attributes[$i]); }}};
$x1150 = clone JS::$functionTemplate; $x1150->call = '_1062444eb1665286b15372d6a2622cc9_20'; $x1150->parameters = array (
  0 => 'start',
  1 => 'end',
); $x1150->scope = $scope; $x1150->properties['prototype'] = clone JS::$objectTemplate; $x1150->attributes['prototype'] = JS::WRITABLE; $x1150->properties['prototype']->properties['constructor'] = $x1150; $x1150->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1150->properties['length'] = 2; $x1150->attributes['length'] = 0;
unset($x1151, $W1151, $S1151, $U1151);
$x1152 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 314, 7, '<image>/05_string.js');
$x1151 =& $x1152[0]; list(,$W1151,$S1151,$U1151) = $x1152;
$x1153 = JS::toString('substring', $global);
if ($x1151 === JS::$undefined || $x1151 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1154 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 314, 28, '<image>/05_string.js');
$_TypeError =& $x1154[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1154;
$x1155 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 314, 28);
$x1156 = $x1155($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1156->class) && $x1156->class === 'Error' && !isset($x1156->properties['file']) && !isset($x1156->properties['line']) && !isset($x1156->properties['column'])) {$x1156->properties['file'] = '<image>/05_string.js';$x1156->properties['line'] = 314;$x1156->properties['column'] = 28;$x1156->attributes['file'] = $x1156->attributes['line'] = $x1156->attributes['column'] = 0; }
throw new JSException($x1156, 314, 28, '<image>/05_string.js');
}
$x1151 = JS::toObject($x1151, $global);
unset($x1157, $W1157, $S1157, $U1157);
$x1158 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x1151, JS::toString($x1153, $global), 314, 28, '<image>/05_string.js');
$x1157 =& $x1158[0]; list(,$W1157,$S1157,$U1157) = $x1158;
if ($U1157 && (!isset($x1151->extensible) || $x1151->extensible)) {$x1151->properties[$x1153] = $x1157; $x1157 =& $x1151->properties[$x1153]; $x1151->attributes[$x1153] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1157 = FALSE; $W1157 = TRUE; }
if (isset($x1151->class) && $x1151->class === 'Array') {  if (isset($x1151->properties['length']) && $x1151->properties['length'] !== JS::$undefined) { $x1160 = $x1151->properties['length']; }  else { $x1160 = 0; } }
if (isset($S1157)) {
$x1161 = $S1157->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 314, 28);
$x1162 = $x1161($global, $x1151, $S1157, array($x1150), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1159 = $x1162;
} else {
if (!$U1157) {$x1159 = $x1150;if ($W1157) { $x1157 = $x1150; }  }
else { $x1159 = JS::$undefined; }
}
if (isset($x1151->class) && $x1151->class === 'Array') {if (is_int('substring') && 'substring' >= $x1151->properties['length']) { $x1151->properties['length'] = 'substring' + 1; }else if ($x1153 === 'length' && is_int($x1150) && $x1160 > $x1150) {  for ($i = $x1150; $i < $x1160; ++$i) {  unset($x1151->properties[$i], $x1151->attributes[$i]); }}};
$x1166 = clone JS::$functionTemplate; $x1166->call = '_1062444eb1665286b15372d6a2622cc9_21'; $x1166->parameters = array (
  0 => 'start',
  1 => 'length',
); $x1166->scope = $scope; $x1166->properties['prototype'] = clone JS::$objectTemplate; $x1166->attributes['prototype'] = JS::WRITABLE; $x1166->properties['prototype']->properties['constructor'] = $x1166; $x1166->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1166->properties['length'] = 2; $x1166->attributes['length'] = 0;
unset($x1167, $W1167, $S1167, $U1167);
$x1168 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 342, 7, '<image>/05_string.js');
$x1167 =& $x1168[0]; list(,$W1167,$S1167,$U1167) = $x1168;
$x1169 = JS::toString('substr', $global);
if ($x1167 === JS::$undefined || $x1167 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1170 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 342, 25, '<image>/05_string.js');
$_TypeError =& $x1170[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1170;
$x1171 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 342, 25);
$x1172 = $x1171($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1172->class) && $x1172->class === 'Error' && !isset($x1172->properties['file']) && !isset($x1172->properties['line']) && !isset($x1172->properties['column'])) {$x1172->properties['file'] = '<image>/05_string.js';$x1172->properties['line'] = 342;$x1172->properties['column'] = 25;$x1172->attributes['file'] = $x1172->attributes['line'] = $x1172->attributes['column'] = 0; }
throw new JSException($x1172, 342, 25, '<image>/05_string.js');
}
$x1167 = JS::toObject($x1167, $global);
unset($x1173, $W1173, $S1173, $U1173);
$x1174 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x1167, JS::toString($x1169, $global), 342, 25, '<image>/05_string.js');
$x1173 =& $x1174[0]; list(,$W1173,$S1173,$U1173) = $x1174;
if ($U1173 && (!isset($x1167->extensible) || $x1167->extensible)) {$x1167->properties[$x1169] = $x1173; $x1173 =& $x1167->properties[$x1169]; $x1167->attributes[$x1169] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1173 = FALSE; $W1173 = TRUE; }
if (isset($x1167->class) && $x1167->class === 'Array') {  if (isset($x1167->properties['length']) && $x1167->properties['length'] !== JS::$undefined) { $x1176 = $x1167->properties['length']; }  else { $x1176 = 0; } }
if (isset($S1173)) {
$x1177 = $S1173->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 342, 25);
$x1178 = $x1177($global, $x1167, $S1173, array($x1166), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1175 = $x1178;
} else {
if (!$U1173) {$x1175 = $x1166;if ($W1173) { $x1173 = $x1166; }  }
else { $x1175 = JS::$undefined; }
}
if (isset($x1167->class) && $x1167->class === 'Array') {if (is_int('substr') && 'substr' >= $x1167->properties['length']) { $x1167->properties['length'] = 'substr' + 1; }else if ($x1169 === 'length' && is_int($x1166) && $x1176 > $x1166) {  for ($i = $x1166; $i < $x1176; ++$i) {  unset($x1167->properties[$i], $x1167->attributes[$i]); }}};
$x1181 = clone JS::$functionTemplate; $x1181->call = '_1062444eb1665286b15372d6a2622cc9_22'; $x1181->parameters = array (
); $x1181->scope = $scope; $x1181->properties['prototype'] = clone JS::$objectTemplate; $x1181->attributes['prototype'] = JS::WRITABLE; $x1181->properties['prototype']->properties['constructor'] = $x1181; $x1181->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1181->properties['length'] = 0; $x1181->attributes['length'] = 0;
unset($x1182, $W1182, $S1182, $U1182);
$x1183 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 350, 7, '<image>/05_string.js');
$x1182 =& $x1183[0]; list(,$W1182,$S1182,$U1182) = $x1183;
$x1184 = JS::toString('toLowerCase', $global);
if ($x1182 === JS::$undefined || $x1182 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1185 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 350, 30, '<image>/05_string.js');
$_TypeError =& $x1185[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1185;
$x1186 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 350, 30);
$x1187 = $x1186($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1187->class) && $x1187->class === 'Error' && !isset($x1187->properties['file']) && !isset($x1187->properties['line']) && !isset($x1187->properties['column'])) {$x1187->properties['file'] = '<image>/05_string.js';$x1187->properties['line'] = 350;$x1187->properties['column'] = 30;$x1187->attributes['file'] = $x1187->attributes['line'] = $x1187->attributes['column'] = 0; }
throw new JSException($x1187, 350, 30, '<image>/05_string.js');
}
$x1182 = JS::toObject($x1182, $global);
unset($x1188, $W1188, $S1188, $U1188);
$x1189 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x1182, JS::toString($x1184, $global), 350, 30, '<image>/05_string.js');
$x1188 =& $x1189[0]; list(,$W1188,$S1188,$U1188) = $x1189;
if ($U1188 && (!isset($x1182->extensible) || $x1182->extensible)) {$x1182->properties[$x1184] = $x1188; $x1188 =& $x1182->properties[$x1184]; $x1182->attributes[$x1184] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1188 = FALSE; $W1188 = TRUE; }
if (isset($x1182->class) && $x1182->class === 'Array') {  if (isset($x1182->properties['length']) && $x1182->properties['length'] !== JS::$undefined) { $x1191 = $x1182->properties['length']; }  else { $x1191 = 0; } }
if (isset($S1188)) {
$x1192 = $S1188->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 350, 30);
$x1193 = $x1192($global, $x1182, $S1188, array($x1181), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1190 = $x1193;
} else {
if (!$U1188) {$x1190 = $x1181;if ($W1188) { $x1188 = $x1181; }  }
else { $x1190 = JS::$undefined; }
}
if (isset($x1182->class) && $x1182->class === 'Array') {if (is_int('toLowerCase') && 'toLowerCase' >= $x1182->properties['length']) { $x1182->properties['length'] = 'toLowerCase' + 1; }else if ($x1184 === 'length' && is_int($x1181) && $x1191 > $x1181) {  for ($i = $x1181; $i < $x1191; ++$i) {  unset($x1182->properties[$i], $x1182->attributes[$i]); }}};
unset($x1194, $W1194, $S1194, $U1194);
$x1195 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 354, 44, '<image>/05_string.js');
$x1194 =& $x1195[0]; list(,$W1194,$S1194,$U1194) = $x1195;
unset($x1196, $W1196, $S1196, $U1196);
$x1197 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x1194, JS::toString('toLowerCase', $global), 354, 54, '<image>/05_string.js');
$x1196 =& $x1197[0]; list(,$W1196,$S1196,$U1196) = $x1197;
unset($x1198, $W1198, $S1198, $U1198);
$x1199 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 354, 7, '<image>/05_string.js');
$x1198 =& $x1199[0]; list(,$W1198,$S1198,$U1198) = $x1199;
$x1200 = JS::toString('toLocaleLowerCase', $global);
if ($x1198 === JS::$undefined || $x1198 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1201 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 354, 36, '<image>/05_string.js');
$_TypeError =& $x1201[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1201;
$x1202 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 354, 36);
$x1203 = $x1202($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1203->class) && $x1203->class === 'Error' && !isset($x1203->properties['file']) && !isset($x1203->properties['line']) && !isset($x1203->properties['column'])) {$x1203->properties['file'] = '<image>/05_string.js';$x1203->properties['line'] = 354;$x1203->properties['column'] = 36;$x1203->attributes['file'] = $x1203->attributes['line'] = $x1203->attributes['column'] = 0; }
throw new JSException($x1203, 354, 36, '<image>/05_string.js');
}
$x1198 = JS::toObject($x1198, $global);
unset($x1204, $W1204, $S1204, $U1204);
$x1205 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x1198, JS::toString($x1200, $global), 354, 36, '<image>/05_string.js');
$x1204 =& $x1205[0]; list(,$W1204,$S1204,$U1204) = $x1205;
if ($U1204 && (!isset($x1198->extensible) || $x1198->extensible)) {$x1198->properties[$x1200] = $x1204; $x1204 =& $x1198->properties[$x1200]; $x1198->attributes[$x1200] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1204 = FALSE; $W1204 = TRUE; }
if (isset($x1198->class) && $x1198->class === 'Array') {  if (isset($x1198->properties['length']) && $x1198->properties['length'] !== JS::$undefined) { $x1207 = $x1198->properties['length']; }  else { $x1207 = 0; } }
if (isset($S1204)) {
$x1208 = $S1204->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 354, 36);
$x1209 = $x1208($global, $x1198, $S1204, array($x1196), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1206 = $x1209;
} else {
if (!$U1204) {$x1206 = $x1196;if ($W1204) { $x1204 = $x1196; }  }
else { $x1206 = JS::$undefined; }
}
if (isset($x1198->class) && $x1198->class === 'Array') {if (is_int('toLocaleLowerCase') && 'toLocaleLowerCase' >= $x1198->properties['length']) { $x1198->properties['length'] = 'toLocaleLowerCase' + 1; }else if ($x1200 === 'length' && is_int($x1196) && $x1207 > $x1196) {  for ($i = $x1196; $i < $x1207; ++$i) {  unset($x1198->properties[$i], $x1198->attributes[$i]); }}};
$x1212 = clone JS::$functionTemplate; $x1212->call = '_1062444eb1665286b15372d6a2622cc9_23'; $x1212->parameters = array (
); $x1212->scope = $scope; $x1212->properties['prototype'] = clone JS::$objectTemplate; $x1212->attributes['prototype'] = JS::WRITABLE; $x1212->properties['prototype']->properties['constructor'] = $x1212; $x1212->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1212->properties['length'] = 0; $x1212->attributes['length'] = 0;
unset($x1213, $W1213, $S1213, $U1213);
$x1214 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 356, 7, '<image>/05_string.js');
$x1213 =& $x1214[0]; list(,$W1213,$S1213,$U1213) = $x1214;
$x1215 = JS::toString('toUpperCase', $global);
if ($x1213 === JS::$undefined || $x1213 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1216 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 356, 30, '<image>/05_string.js');
$_TypeError =& $x1216[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1216;
$x1217 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 356, 30);
$x1218 = $x1217($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1218->class) && $x1218->class === 'Error' && !isset($x1218->properties['file']) && !isset($x1218->properties['line']) && !isset($x1218->properties['column'])) {$x1218->properties['file'] = '<image>/05_string.js';$x1218->properties['line'] = 356;$x1218->properties['column'] = 30;$x1218->attributes['file'] = $x1218->attributes['line'] = $x1218->attributes['column'] = 0; }
throw new JSException($x1218, 356, 30, '<image>/05_string.js');
}
$x1213 = JS::toObject($x1213, $global);
unset($x1219, $W1219, $S1219, $U1219);
$x1220 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x1213, JS::toString($x1215, $global), 356, 30, '<image>/05_string.js');
$x1219 =& $x1220[0]; list(,$W1219,$S1219,$U1219) = $x1220;
if ($U1219 && (!isset($x1213->extensible) || $x1213->extensible)) {$x1213->properties[$x1215] = $x1219; $x1219 =& $x1213->properties[$x1215]; $x1213->attributes[$x1215] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1219 = FALSE; $W1219 = TRUE; }
if (isset($x1213->class) && $x1213->class === 'Array') {  if (isset($x1213->properties['length']) && $x1213->properties['length'] !== JS::$undefined) { $x1222 = $x1213->properties['length']; }  else { $x1222 = 0; } }
if (isset($S1219)) {
$x1223 = $S1219->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 356, 30);
$x1224 = $x1223($global, $x1213, $S1219, array($x1212), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1221 = $x1224;
} else {
if (!$U1219) {$x1221 = $x1212;if ($W1219) { $x1219 = $x1212; }  }
else { $x1221 = JS::$undefined; }
}
if (isset($x1213->class) && $x1213->class === 'Array') {if (is_int('toUpperCase') && 'toUpperCase' >= $x1213->properties['length']) { $x1213->properties['length'] = 'toUpperCase' + 1; }else if ($x1215 === 'length' && is_int($x1212) && $x1222 > $x1212) {  for ($i = $x1212; $i < $x1222; ++$i) {  unset($x1213->properties[$i], $x1213->attributes[$i]); }}};
unset($x1225, $W1225, $S1225, $U1225);
$x1226 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 360, 44, '<image>/05_string.js');
$x1225 =& $x1226[0]; list(,$W1225,$S1225,$U1225) = $x1226;
unset($x1227, $W1227, $S1227, $U1227);
$x1228 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $x1225, JS::toString('toUpperCase', $global), 360, 54, '<image>/05_string.js');
$x1227 =& $x1228[0]; list(,$W1227,$S1227,$U1227) = $x1228;
unset($x1229, $W1229, $S1229, $U1229);
$x1230 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 360, 7, '<image>/05_string.js');
$x1229 =& $x1230[0]; list(,$W1229,$S1229,$U1229) = $x1230;
$x1231 = JS::toString('toLocaleUpperCase', $global);
if ($x1229 === JS::$undefined || $x1229 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1232 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 360, 36, '<image>/05_string.js');
$_TypeError =& $x1232[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1232;
$x1233 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 360, 36);
$x1234 = $x1233($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1234->class) && $x1234->class === 'Error' && !isset($x1234->properties['file']) && !isset($x1234->properties['line']) && !isset($x1234->properties['column'])) {$x1234->properties['file'] = '<image>/05_string.js';$x1234->properties['line'] = 360;$x1234->properties['column'] = 36;$x1234->attributes['file'] = $x1234->attributes['line'] = $x1234->attributes['column'] = 0; }
throw new JSException($x1234, 360, 36, '<image>/05_string.js');
}
$x1229 = JS::toObject($x1229, $global);
unset($x1235, $W1235, $S1235, $U1235);
$x1236 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x1229, JS::toString($x1231, $global), 360, 36, '<image>/05_string.js');
$x1235 =& $x1236[0]; list(,$W1235,$S1235,$U1235) = $x1236;
if ($U1235 && (!isset($x1229->extensible) || $x1229->extensible)) {$x1229->properties[$x1231] = $x1235; $x1235 =& $x1229->properties[$x1231]; $x1229->attributes[$x1231] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1235 = FALSE; $W1235 = TRUE; }
if (isset($x1229->class) && $x1229->class === 'Array') {  if (isset($x1229->properties['length']) && $x1229->properties['length'] !== JS::$undefined) { $x1238 = $x1229->properties['length']; }  else { $x1238 = 0; } }
if (isset($S1235)) {
$x1239 = $S1235->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 360, 36);
$x1240 = $x1239($global, $x1229, $S1235, array($x1227), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1237 = $x1240;
} else {
if (!$U1235) {$x1237 = $x1227;if ($W1235) { $x1235 = $x1227; }  }
else { $x1237 = JS::$undefined; }
}
if (isset($x1229->class) && $x1229->class === 'Array') {if (is_int('toLocaleUpperCase') && 'toLocaleUpperCase' >= $x1229->properties['length']) { $x1229->properties['length'] = 'toLocaleUpperCase' + 1; }else if ($x1231 === 'length' && is_int($x1227) && $x1238 > $x1227) {  for ($i = $x1227; $i < $x1238; ++$i) {  unset($x1229->properties[$i], $x1229->attributes[$i]); }}};
$x1243 = clone JS::$functionTemplate; $x1243->call = '_1062444eb1665286b15372d6a2622cc9_24'; $x1243->parameters = array (
); $x1243->scope = $scope; $x1243->properties['prototype'] = clone JS::$objectTemplate; $x1243->attributes['prototype'] = JS::WRITABLE; $x1243->properties['prototype']->properties['constructor'] = $x1243; $x1243->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1243->properties['length'] = 0; $x1243->attributes['length'] = 0;
unset($x1244, $W1244, $S1244, $U1244);
$x1245 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 362, 7, '<image>/05_string.js');
$x1244 =& $x1245[0]; list(,$W1244,$S1244,$U1244) = $x1245;
$x1246 = JS::toString('trim', $global);
if ($x1244 === JS::$undefined || $x1244 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1247 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 362, 23, '<image>/05_string.js');
$_TypeError =& $x1247[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1247;
$x1248 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 362, 23);
$x1249 = $x1248($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1249->class) && $x1249->class === 'Error' && !isset($x1249->properties['file']) && !isset($x1249->properties['line']) && !isset($x1249->properties['column'])) {$x1249->properties['file'] = '<image>/05_string.js';$x1249->properties['line'] = 362;$x1249->properties['column'] = 23;$x1249->attributes['file'] = $x1249->attributes['line'] = $x1249->attributes['column'] = 0; }
throw new JSException($x1249, 362, 23, '<image>/05_string.js');
}
$x1244 = JS::toObject($x1244, $global);
unset($x1250, $W1250, $S1250, $U1250);
$x1251 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x1244, JS::toString($x1246, $global), 362, 23, '<image>/05_string.js');
$x1250 =& $x1251[0]; list(,$W1250,$S1250,$U1250) = $x1251;
if ($U1250 && (!isset($x1244->extensible) || $x1244->extensible)) {$x1244->properties[$x1246] = $x1250; $x1250 =& $x1244->properties[$x1246]; $x1244->attributes[$x1246] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1250 = FALSE; $W1250 = TRUE; }
if (isset($x1244->class) && $x1244->class === 'Array') {  if (isset($x1244->properties['length']) && $x1244->properties['length'] !== JS::$undefined) { $x1253 = $x1244->properties['length']; }  else { $x1253 = 0; } }
if (isset($S1250)) {
$x1254 = $S1250->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 362, 23);
$x1255 = $x1254($global, $x1244, $S1250, array($x1243), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1252 = $x1255;
} else {
if (!$U1250) {$x1252 = $x1243;if ($W1250) { $x1250 = $x1243; }  }
else { $x1252 = JS::$undefined; }
}
if (isset($x1244->class) && $x1244->class === 'Array') {if (is_int('trim') && 'trim' >= $x1244->properties['length']) { $x1244->properties['length'] = 'trim' + 1; }else if ($x1246 === 'length' && is_int($x1243) && $x1253 > $x1243) {  for ($i = $x1243; $i < $x1253; ++$i) {  unset($x1244->properties[$i], $x1244->attributes[$i]); }}};
$x1284 = clone JS::$functionTemplate; $x1284->call = '_1062444eb1665286b15372d6a2622cc9_25'; $x1284->parameters = array (
  0 => 'search',
  1 => 'start',
); $x1284->scope = $scope; $x1284->properties['prototype'] = clone JS::$objectTemplate; $x1284->attributes['prototype'] = JS::WRITABLE; $x1284->properties['prototype']->properties['constructor'] = $x1284; $x1284->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1284->properties['length'] = 2; $x1284->attributes['length'] = 0;
unset($x1285, $W1285, $S1285, $U1285);
$x1286 = _1062444eb1665286b15372d6a2622cc9_4($global, $scope, $_String, JS::toString('prototype', $global), 366, 7, '<image>/05_string.js');
$x1285 =& $x1286[0]; list(,$W1285,$S1285,$U1285) = $x1286;
$x1287 = JS::toString('includes', $global);
if ($x1285 === JS::$undefined || $x1285 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1288 = _1062444eb1665286b15372d6a2622cc9_3($global, $scope, $scope, JS::toString('TypeError', $global), 366, 27, '<image>/05_string.js');
$_TypeError =& $x1288[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1288;
$x1289 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 366, 27);
$x1290 = $x1289($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1290->class) && $x1290->class === 'Error' && !isset($x1290->properties['file']) && !isset($x1290->properties['line']) && !isset($x1290->properties['column'])) {$x1290->properties['file'] = '<image>/05_string.js';$x1290->properties['line'] = 366;$x1290->properties['column'] = 27;$x1290->attributes['file'] = $x1290->attributes['line'] = $x1290->attributes['column'] = 0; }
throw new JSException($x1290, 366, 27, '<image>/05_string.js');
}
$x1285 = JS::toObject($x1285, $global);
unset($x1291, $W1291, $S1291, $U1291);
$x1292 = _1062444eb1665286b15372d6a2622cc9_5($global, $scope, $x1285, JS::toString($x1287, $global), 366, 27, '<image>/05_string.js');
$x1291 =& $x1292[0]; list(,$W1291,$S1291,$U1291) = $x1292;
if ($U1291 && (!isset($x1285->extensible) || $x1285->extensible)) {$x1285->properties[$x1287] = $x1291; $x1291 =& $x1285->properties[$x1287]; $x1285->attributes[$x1287] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1291 = FALSE; $W1291 = TRUE; }
if (isset($x1285->class) && $x1285->class === 'Array') {  if (isset($x1285->properties['length']) && $x1285->properties['length'] !== JS::$undefined) { $x1294 = $x1285->properties['length']; }  else { $x1294 = 0; } }
if (isset($S1291)) {
$x1295 = $S1291->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 366, 27);
$x1296 = $x1295($global, $x1285, $S1291, array($x1284), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1293 = $x1296;
} else {
if (!$U1291) {$x1293 = $x1284;if ($W1291) { $x1291 = $x1284; }  }
else { $x1293 = JS::$undefined; }
}
if (isset($x1285->class) && $x1285->class === 'Array') {if (is_int('includes') && 'includes' >= $x1285->properties['length']) { $x1285->properties['length'] = 'includes' + 1; }else if ($x1287 === 'length' && is_int($x1284) && $x1294 > $x1284) {  for ($i = $x1284; $i < $x1294; ++$i) {  unset($x1285->properties[$i], $x1285->attributes[$i]); }}};
;
return JS::$undefined;
}
