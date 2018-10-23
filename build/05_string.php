function _d783f9f345d98dc295c060ae0345bc6a_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'String\']=$fn;$_String=&$scope->properties[\'String\'];$global->scope[++$global->scope_sp]=$scope;$x2=(((gettype($leThis)===gettype($global)&&$leThis===$global))||(((is_float($leThis)||is_int($leThis))&&(is_float($global)||is_int($global)))&&$leThis==$global));if(JS::toBoolean($x2,$global)){return JS::toString($_value,$global);}$x3=clone JS::$objectTemplate;$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=$x3;$_s->prototype=$_String->properties[\'prototype\'];$_s->class=\'String\';$_s->extensible=true;$_s->value=JS::toString($_value,$global);return$_s;return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$base,$id,$line,$column,$file){$Warguments=$Sarguments=$Uarguments=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_arguments=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x8=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x9=$x8($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_arguments=$x9;}else{$_arguments=JS::$undefined;$Uarguments=TRUE;}return array(&$_arguments,$Warguments,$Sarguments,$Uarguments);}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x15 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x15=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x15[0];list(,$WTypeError,$STypeError,$UTypeError)=$x15;$x16=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x17=$x16($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x17->class)&&$x17->class===\'Error\'&&!isset($x17->properties[\'file\'])&&!isset($x17->properties[\'line\'])&&!isset($x17->properties[\'column\'])){$x17->properties[\'file\']=$file;$x17->properties[\'line\']=$line;$x17->properties[\'column\']=$column;$x17->attributes[\'file\']=$x17->attributes[\'line\']=$x17->attributes[\'column\']=0;}throw new JSException($x17,$line,$column,$file);}$W14=$S14=$U14=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x14=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x18=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x19=$x18($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14=$x19;}else{$x14=JS::$undefined;$U14=TRUE;}return array(&$x14,$W14,$S14,$U14);}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_2($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x10 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('arguments', $global), 19, 22, '<image>/05_string.js');
$_arguments =& $x10[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x10;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x11 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 19, 22, '<image>/05_string.js');
$_ReferenceError =& $x11[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x11;
$x12 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 19, 22);
$x13 = $x12($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x13->class) && $x13->class === 'Error' && !isset($x13->properties['file']) && !isset($x13->properties['line']) && !isset($x13->properties['column'])) {$x13->properties['file'] = '<image>/05_string.js';$x13->properties['line'] = 19;$x13->properties['column'] = 22;$x13->attributes['file'] = $x13->attributes['line'] = $x13->attributes['column'] = 0; }
throw new JSException($x13, 19, 22, '<image>/05_string.js');
}
unset($x14, $W14, $S14, $U14);
$x20 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_arguments, JS::toString('length', $global), 19, 31, '<image>/05_string.js');
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
$x28 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_arguments, JS::toString($_i, $global), 20, 18, '<image>/05_string.js');
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x6=&$scope->properties[\'arguments\'];$x6->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x6->properties[$i]=$args[$i];$x6->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'c\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=\'\';for($x7=0;;++$x7){if($x7===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0.0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x10=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'arguments\',$global),19,22,\'<image>/05_string.js\');$_arguments=&$x10[0];list(,$Warguments,$Sarguments,$Uarguments)=$x10;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x11=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),19,22,\'<image>/05_string.js\');$_ReferenceError=&$x11[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x11;$x12=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',19,22);$x13=$x12($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'&&!isset($x13->properties[\'file\'])&&!isset($x13->properties[\'line\'])&&!isset($x13->properties[\'column\'])){$x13->properties[\'file\']=\'<image>/05_string.js\';$x13->properties[\'line\']=19;$x13->properties[\'column\']=22;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,19,22,\'<image>/05_string.js\');}unset($x14,$W14,$S14,$U14);$x20=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_arguments,JS::toString(\'length\',$global),19,31,\'<image>/05_string.js\');$x14=&$x20[0];list(,$W14,$S14,$U14)=$x20;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x14;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x7!==0){$x21=++$_i;}$x22=JS::toPrimitive($_i,$global);$x23=JS::toPrimitive($_l,$global);$x24=(is_string($x22)&&is_string($x23)?strcmp($x22,$x23)<0:(!is_nan($x25=JS::toNumber($x22,$global))&&!is_nan($x26=JS::toNumber($x23,$global))&&$x25<$x26));if(!JS::toBoolean($x24,$global)){break;}unset($x27,$W27,$S27,$U27);$x28=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_arguments,JS::toString($_i,$global),20,18,\'<image>/05_string.js\');$x27=&$x28[0];list(,$W27,$S27,$U27)=$x28;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x27;$x29=chr(JS::toNumber($_arg,$global));if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$x30=JS::toPrimitive($_s,$global);$x31=JS::toPrimitive($x29,$global);$_s=(is_string($x30)||is_string($x31)?JS::toString($x30,$global).JS::toString($x31,$global):JS::toNumber($x30,$global)+JS::toNumber($x31,$global));}return$_s;return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x38 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x38=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x38[0];list(,$WTypeError,$STypeError,$UTypeError)=$x38;$x39=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x40=$x39($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x40->class)&&$x40->class===\'Error\'&&!isset($x40->properties[\'file\'])&&!isset($x40->properties[\'line\'])&&!isset($x40->properties[\'column\'])){$x40->properties[\'file\']=$file;$x40->properties[\'line\']=$line;$x40->properties[\'column\']=$column;$x40->attributes[\'file\']=$x40->attributes[\'line\']=$x40->attributes[\'column\']=0;}throw new JSException($x40,$line,$column,$file);}$W37=$S37=$U37=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x37=&$lookup->properties[$id];$W37=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S37=$lookup->setters[$id];}else{$x37=JS::$undefined;$U37=TRUE;}return array(&$x37,$W37,$S37,$U37);}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x77 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 35, 13, '<image>/05_string.js');
$_TypeError =& $x77[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x77;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x78 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 35, 13, '<image>/05_string.js');
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
$x82 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 35, 9, '<image>/05_string.js');
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x74=&$scope->properties[\'arguments\'];$x74->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x74->properties[$i]=$args[$i];$x74->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'String\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x77=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),35,13,\'<image>/05_string.js\');$_TypeError=&$x77[0];list(,$WTypeError,$STypeError,$UTypeError)=$x77;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x78=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),35,13,\'<image>/05_string.js\');$_ReferenceError=&$x78[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x78;$x79=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,13);$x80=$x79($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x80->class)&&$x80->class===\'Error\'&&!isset($x80->properties[\'file\'])&&!isset($x80->properties[\'line\'])&&!isset($x80->properties[\'column\'])){$x80->properties[\'file\']=\'<image>/05_string.js\';$x80->properties[\'line\']=35;$x80->properties[\'column\']=13;$x80->attributes[\'file\']=$x80->attributes[\'line\']=$x80->attributes[\'column\']=0;}throw new JSException($x80,35,13,\'<image>/05_string.js\');}$x75=clone JS::$objectTemplate;unset($x81,$W81,$S81,$U81);$x82=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),35,9,\'<image>/05_string.js\');$x81=&$x82[0];list(,$W81,$S81,$U81)=$x82;$x76=$x81;$x75->prototype=$x76;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x85=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x86=$x85($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x86->class)&&$x86->class===\'Error\'&&!isset($x86->properties[\'file\'])&&!isset($x86->properties[\'line\'])&&!isset($x86->properties[\'column\'])){$x86->properties[\'file\']=\'<image>/05_string.js\';$x86->properties[\'line\']=35;$x86->properties[\'column\']=9;$x86->attributes[\'file\']=$x86->attributes[\'line\']=$x86->attributes[\'column\']=0;}throw new JSException($x86,35,9,\'<image>/05_string.js\');}$x83=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x84=$x83($global,$x75,$_TypeError,array(\'String.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x76=$x84;if(is_object($x76)&&$x76!==JS::$undefined){$x75=$x76;}if(isset($x75->class)&&$x75->class===\'Error\'&&!isset($x75->properties[\'file\'])&&!isset($x75->properties[\'line\'])&&!isset($x75->properties[\'column\'])){$x75->properties[\'file\']=\'<image>/05_string.js\';$x75->properties[\'line\']=35;$x75->properties[\'column\']=3;$x75->attributes[\'file\']=$x75->attributes[\'line\']=$x75->attributes[\'column\']=0;}throw new JSException($x75,35,3,\'<image>/05_string.js\');}return$leThis->value;return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_7($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x129 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $leThis, JS::toString('length', $global), 46, 28, '<image>/05_string.js');
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x117=&$scope->properties[\'arguments\'];$x117->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x117->properties[$i]=$args[$i];$x117->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;$x118=JS::toNumber($_pos,$global);if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=$x118;$x120=JS::toPrimitive($_pos,$global);$x121=JS::toPrimitive(0.0,$global);$x122=(is_string($x120)&&is_string($x121)?strcmp($x120,$x121)<0:(!is_nan($x123=JS::toNumber($x120,$global))&&!is_nan($x124=JS::toNumber($x121,$global))&&$x123<$x124));$x119=$x122;if(!JS::toBoolean($x119,$global)){unset($x128,$W128,$S128,$U128);$x129=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$leThis,JS::toString(\'length\',$global),46,28,\'<image>/05_string.js\');$x128=&$x129[0];list(,$W128,$S128,$U128)=$x129;$x125=JS::toPrimitive($_pos,$global);$x126=JS::toPrimitive($x128,$global);$x127=!(is_string($x125)&&is_string($x126)?strcmp($x125,$x126)<0:(!is_nan($x130=JS::toNumber($x125,$global))&&!is_nan($x131=JS::toNumber($x126,$global))&&$x130<$x131));$x119=$x127;}if(JS::toBoolean($x119,$global)){return\'\';}return(string)mb_substr($leThis->value,$_pos,1);return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_8($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x158 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $leThis, JS::toString('length', $global), 56, 28, '<image>/05_string.js');
$x157 =& $x158[0]; list(,$W157,$S157,$U157) = $x158;
$x154 = JS::toPrimitive($_pos, $global);
$x155 = JS::toPrimitive($x157, $global);
$x156 = !(is_string($x154) && is_string($x155) ? strcmp($x154, $x155) < 0 : (!is_nan($x159 = JS::toNumber($x154, $global)) && !is_nan($x160 = JS::toNumber($x155, $global)) && $x159 < $x160));
$x148 = $x156; }
if (JS::toBoolean($x148, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x161 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('NaN', $global), 57, 10, '<image>/05_string.js');
$_NaN =& $x161[0]; list(,$WNaN,$SNaN,$UNaN) = $x161;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x162 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 57, 10, '<image>/05_string.js');
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
$x166 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 60, 21, '<image>/05_string.js');
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
$x170 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x165, JS::toString('charAt', $global), 60, 21, '<image>/05_string.js');
$x169 =& $x170[0]; list(,$W169,$S169,$U169) = $x170;
if (!(is_object($x169) && isset($x169->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x173 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 60, 21, '<image>/05_string.js');
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x146=&$scope->properties[\'arguments\'];$x146->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x146->properties[$i]=$args[$i];$x146->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;$x147=JS::toNumber($_pos,$global);if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=$x147;$x149=JS::toPrimitive($_pos,$global);$x150=JS::toPrimitive(0.0,$global);$x151=(is_string($x149)&&is_string($x150)?strcmp($x149,$x150)<0:(!is_nan($x152=JS::toNumber($x149,$global))&&!is_nan($x153=JS::toNumber($x150,$global))&&$x152<$x153));$x148=$x151;if(!JS::toBoolean($x148,$global)){unset($x157,$W157,$S157,$U157);$x158=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$leThis,JS::toString(\'length\',$global),56,28,\'<image>/05_string.js\');$x157=&$x158[0];list(,$W157,$S157,$U157)=$x158;$x154=JS::toPrimitive($_pos,$global);$x155=JS::toPrimitive($x157,$global);$x156=!(is_string($x154)&&is_string($x155)?strcmp($x154,$x155)<0:(!is_nan($x159=JS::toNumber($x154,$global))&&!is_nan($x160=JS::toNumber($x155,$global))&&$x159<$x160));$x148=$x156;}if(JS::toBoolean($x148,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x161=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'NaN\',$global),57,10,\'<image>/05_string.js\');$_NaN=&$x161[0];list(,$WNaN,$SNaN,$UNaN)=$x161;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x162=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),57,10,\'<image>/05_string.js\');$_ReferenceError=&$x162[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x162;$x163=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',57,10);$x164=$x163($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x164->class)&&$x164->class===\'Error\'&&!isset($x164->properties[\'file\'])&&!isset($x164->properties[\'line\'])&&!isset($x164->properties[\'column\'])){$x164->properties[\'file\']=\'<image>/05_string.js\';$x164->properties[\'line\']=57;$x164->properties[\'column\']=10;$x164->attributes[\'file\']=$x164->attributes[\'line\']=$x164->attributes[\'column\']=0;}throw new JSException($x164,57,10,\'<image>/05_string.js\');}return$_NaN;}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x166=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),60,21,\'<image>/05_string.js\');$_TypeError=&$x166[0];list(,$WTypeError,$STypeError,$UTypeError)=$x166;$x167=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x168=$x167($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x168->class)&&$x168->class===\'Error\'&&!isset($x168->properties[\'file\'])&&!isset($x168->properties[\'line\'])&&!isset($x168->properties[\'column\'])){$x168->properties[\'file\']=\'<image>/05_string.js\';$x168->properties[\'line\']=60;$x168->properties[\'column\']=21;$x168->attributes[\'file\']=$x168->attributes[\'line\']=$x168->attributes[\'column\']=0;}throw new JSException($x168,60,21,\'<image>/05_string.js\');}$x165=JS::toObject($leThis,$global);unset($x169,$W169,$S169,$U169);$x170=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x165,JS::toString(\'charAt\',$global),60,21,\'<image>/05_string.js\');$x169=&$x170[0];list(,$W169,$S169,$U169)=$x170;if(!(is_object($x169)&&isset($x169->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x173=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),60,21,\'<image>/05_string.js\');$_TypeError=&$x173[0];list(,$WTypeError,$STypeError,$UTypeError)=$x173;$x174=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x175=$x174($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x175->class)&&$x175->class===\'Error\'&&!isset($x175->properties[\'file\'])&&!isset($x175->properties[\'line\'])&&!isset($x175->properties[\'column\'])){$x175->properties[\'file\']=\'<image>/05_string.js\';$x175->properties[\'line\']=60;$x175->properties[\'column\']=21;$x175->attributes[\'file\']=$x175->attributes[\'line\']=$x175->attributes[\'column\']=0;}throw new JSException($x175,60,21,\'<image>/05_string.js\');}$x171=$x169->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x172=$x171($global,$x165,$x169,array($_pos),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'c\']=JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$_c=$x172;return ord($_c);return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_9($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x192 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('arguments', $global), 68, 22, '<image>/05_string.js');
$_arguments =& $x192[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x192;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x193 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 68, 22, '<image>/05_string.js');
$_ReferenceError =& $x193[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x193;
$x194 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 68, 22);
$x195 = $x194($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x195->class) && $x195->class === 'Error' && !isset($x195->properties['file']) && !isset($x195->properties['line']) && !isset($x195->properties['column'])) {$x195->properties['file'] = '<image>/05_string.js';$x195->properties['line'] = 68;$x195->properties['column'] = 22;$x195->attributes['file'] = $x195->attributes['line'] = $x195->attributes['column'] = 0; }
throw new JSException($x195, 68, 22, '<image>/05_string.js');
}
unset($x196, $W196, $S196, $U196);
$x197 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_arguments, JS::toString('length', $global), 68, 31, '<image>/05_string.js');
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
$x205 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_arguments, JS::toString($_i, $global), 69, 28, '<image>/05_string.js');
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x190=&$scope->properties[\'arguments\'];$x190->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x190->properties[$i]=$args[$i];$x190->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'returnString\']=JS::$undefined;$_returnString=&$scope->properties[\'returnString\'];$UreturnString=FALSE;$_returnString=$leThis->value;for($x191=0;;++$x191){if($x191===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0.0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x192=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'arguments\',$global),68,22,\'<image>/05_string.js\');$_arguments=&$x192[0];list(,$Warguments,$Sarguments,$Uarguments)=$x192;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x193=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),68,22,\'<image>/05_string.js\');$_ReferenceError=&$x193[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x193;$x194=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',68,22);$x195=$x194($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x195->class)&&$x195->class===\'Error\'&&!isset($x195->properties[\'file\'])&&!isset($x195->properties[\'line\'])&&!isset($x195->properties[\'column\'])){$x195->properties[\'file\']=\'<image>/05_string.js\';$x195->properties[\'line\']=68;$x195->properties[\'column\']=22;$x195->attributes[\'file\']=$x195->attributes[\'line\']=$x195->attributes[\'column\']=0;}throw new JSException($x195,68,22,\'<image>/05_string.js\');}unset($x196,$W196,$S196,$U196);$x197=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_arguments,JS::toString(\'length\',$global),68,31,\'<image>/05_string.js\');$x196=&$x197[0];list(,$W196,$S196,$U196)=$x197;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x196;}if($x191!==0){$x198=++$_i;}$x199=JS::toPrimitive($_i,$global);$x200=JS::toPrimitive($_l,$global);$x201=(is_string($x199)&&is_string($x200)?strcmp($x199,$x200)<0:(!is_nan($x202=JS::toNumber($x199,$global))&&!is_nan($x203=JS::toNumber($x200,$global))&&$x202<$x203));if(!JS::toBoolean($x201,$global)){break;}unset($x204,$W204,$S204,$U204);$x205=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_arguments,JS::toString($_i,$global),69,28,\'<image>/05_string.js\');$x204=&$x205[0];list(,$W204,$S204,$U204)=$x205;if($UreturnString){$global->properties[\'returnString\']=$_returnString;$_returnString=&$global->properties[\'returnString\'];}$x206=JS::toPrimitive($_returnString,$global);$x207=JS::toPrimitive($x204,$global);$_returnString=(is_string($x206)||is_string($x207)?JS::toString($x206,$global).JS::toString($x207,$global):JS::toNumber($x206,$global)+JS::toNumber($x207,$global));}return$_returnString;return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_10($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x225 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('Math', $global), 80, 15, '<image>/05_string.js');
$_Math =& $x225[0]; list(,$WMath,$SMath,$UMath) = $x225;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x226 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 80, 15, '<image>/05_string.js');
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
$x230 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 23, '<image>/05_string.js');
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
$x234 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x229, JS::toString('min', $global), 80, 23, '<image>/05_string.js');
$x233 =& $x234[0]; list(,$W233,$S233,$U233) = $x234;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x236 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 32, '<image>/05_string.js');
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
$x240 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x235, JS::toString('max', $global), 80, 32, '<image>/05_string.js');
$x239 =& $x240[0]; list(,$W239,$S239,$U239) = $x240;
if (!(is_object($x239) && isset($x239->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x243 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 32, '<image>/05_string.js');
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
$x248 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 23, '<image>/05_string.js');
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x222=&$scope->properties[\'arguments\'];$x222->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x222->properties[$i]=$args[$i];$x222->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x223=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x223,$global)){$x224=0.0;if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=$x224;}unset($_Math,$WMath,$SMath,$UMath);$x225=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'Math\',$global),80,15,\'<image>/05_string.js\');$_Math=&$x225[0];list(,$WMath,$SMath,$UMath)=$x225;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x226=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),80,15,\'<image>/05_string.js\');$_ReferenceError=&$x226[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x226;$x227=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,15);$x228=$x227($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x228->class)&&$x228->class===\'Error\'&&!isset($x228->properties[\'file\'])&&!isset($x228->properties[\'line\'])&&!isset($x228->properties[\'column\'])){$x228->properties[\'file\']=\'<image>/05_string.js\';$x228->properties[\'line\']=80;$x228->properties[\'column\']=15;$x228->attributes[\'file\']=$x228->attributes[\'line\']=$x228->attributes[\'column\']=0;}throw new JSException($x228,80,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x230=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,23,\'<image>/05_string.js\');$_TypeError=&$x230[0];list(,$WTypeError,$STypeError,$UTypeError)=$x230;$x231=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x232=$x231($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x232->class)&&$x232->class===\'Error\'&&!isset($x232->properties[\'file\'])&&!isset($x232->properties[\'line\'])&&!isset($x232->properties[\'column\'])){$x232->properties[\'file\']=\'<image>/05_string.js\';$x232->properties[\'line\']=80;$x232->properties[\'column\']=23;$x232->attributes[\'file\']=$x232->attributes[\'line\']=$x232->attributes[\'column\']=0;}throw new JSException($x232,80,23,\'<image>/05_string.js\');}$x229=JS::toObject($_Math,$global);unset($x233,$W233,$S233,$U233);$x234=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x229,JS::toString(\'min\',$global),80,23,\'<image>/05_string.js\');$x233=&$x234[0];list(,$W233,$S233,$U233)=$x234;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x236=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,32,\'<image>/05_string.js\');$_TypeError=&$x236[0];list(,$WTypeError,$STypeError,$UTypeError)=$x236;$x237=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x238=$x237($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x238->class)&&$x238->class===\'Error\'&&!isset($x238->properties[\'file\'])&&!isset($x238->properties[\'line\'])&&!isset($x238->properties[\'column\'])){$x238->properties[\'file\']=\'<image>/05_string.js\';$x238->properties[\'line\']=80;$x238->properties[\'column\']=32;$x238->attributes[\'file\']=$x238->attributes[\'line\']=$x238->attributes[\'column\']=0;}throw new JSException($x238,80,32,\'<image>/05_string.js\');}$x235=JS::toObject($_Math,$global);unset($x239,$W239,$S239,$U239);$x240=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x235,JS::toString(\'max\',$global),80,32,\'<image>/05_string.js\');$x239=&$x240[0];list(,$W239,$S239,$U239)=$x240;if(!(is_object($x239)&&isset($x239->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x243=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,32,\'<image>/05_string.js\');$_TypeError=&$x243[0];list(,$WTypeError,$STypeError,$UTypeError)=$x243;$x244=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x245=$x244($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x245->class)&&$x245->class===\'Error\'&&!isset($x245->properties[\'file\'])&&!isset($x245->properties[\'line\'])&&!isset($x245->properties[\'column\'])){$x245->properties[\'file\']=\'<image>/05_string.js\';$x245->properties[\'line\']=80;$x245->properties[\'column\']=32;$x245->attributes[\'file\']=$x245->attributes[\'line\']=$x245->attributes[\'column\']=0;}throw new JSException($x245,80,32,\'<image>/05_string.js\');}$x241=$x239->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x242=$x241($global,$x235,$x239,array($_position,0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x233)&&isset($x233->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x248=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,23,\'<image>/05_string.js\');$_TypeError=&$x248[0];list(,$WTypeError,$STypeError,$UTypeError)=$x248;$x249=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x250=$x249($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x250->class)&&$x250->class===\'Error\'&&!isset($x250->properties[\'file\'])&&!isset($x250->properties[\'line\'])&&!isset($x250->properties[\'column\'])){$x250->properties[\'file\']=\'<image>/05_string.js\';$x250->properties[\'line\']=80;$x250->properties[\'column\']=23;$x250->attributes[\'file\']=$x250->attributes[\'line\']=$x250->attributes[\'column\']=0;}throw new JSException($x250,80,23,\'<image>/05_string.js\');}$x246=$x233->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x247=$x246($global,$x229,$x233,array($x242,mb_strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x247;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=mb_strpos($leThis->value,JS::toString($_search,$global),$_offset);$x251=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x251,$global)){return(-1.0*JS::toNumber(1.0,$global));}return$_ret;return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_11($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x269 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('Math', $global), 95, 15, '<image>/05_string.js');
$_Math =& $x269[0]; list(,$WMath,$SMath,$UMath) = $x269;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x270 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 95, 15, '<image>/05_string.js');
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
$x274 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 23, '<image>/05_string.js');
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
$x278 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x273, JS::toString('min', $global), 95, 23, '<image>/05_string.js');
$x277 =& $x278[0]; list(,$W277,$S277,$U277) = $x278;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x280 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 32, '<image>/05_string.js');
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
$x284 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x279, JS::toString('max', $global), 95, 32, '<image>/05_string.js');
$x283 =& $x284[0]; list(,$W283,$S283,$U283) = $x284;
if (!(is_object($x283) && isset($x283->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x287 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 32, '<image>/05_string.js');
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
$x292 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 23, '<image>/05_string.js');
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x266=&$scope->properties[\'arguments\'];$x266->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x266->properties[$i]=$args[$i];$x266->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x267=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x267,$global)){$x268=0.0;if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=$x268;}unset($_Math,$WMath,$SMath,$UMath);$x269=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'Math\',$global),95,15,\'<image>/05_string.js\');$_Math=&$x269[0];list(,$WMath,$SMath,$UMath)=$x269;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x270=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),95,15,\'<image>/05_string.js\');$_ReferenceError=&$x270[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x270;$x271=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,15);$x272=$x271($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x272->class)&&$x272->class===\'Error\'&&!isset($x272->properties[\'file\'])&&!isset($x272->properties[\'line\'])&&!isset($x272->properties[\'column\'])){$x272->properties[\'file\']=\'<image>/05_string.js\';$x272->properties[\'line\']=95;$x272->properties[\'column\']=15;$x272->attributes[\'file\']=$x272->attributes[\'line\']=$x272->attributes[\'column\']=0;}throw new JSException($x272,95,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x274=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,23,\'<image>/05_string.js\');$_TypeError=&$x274[0];list(,$WTypeError,$STypeError,$UTypeError)=$x274;$x275=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x276=$x275($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x276->class)&&$x276->class===\'Error\'&&!isset($x276->properties[\'file\'])&&!isset($x276->properties[\'line\'])&&!isset($x276->properties[\'column\'])){$x276->properties[\'file\']=\'<image>/05_string.js\';$x276->properties[\'line\']=95;$x276->properties[\'column\']=23;$x276->attributes[\'file\']=$x276->attributes[\'line\']=$x276->attributes[\'column\']=0;}throw new JSException($x276,95,23,\'<image>/05_string.js\');}$x273=JS::toObject($_Math,$global);unset($x277,$W277,$S277,$U277);$x278=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x273,JS::toString(\'min\',$global),95,23,\'<image>/05_string.js\');$x277=&$x278[0];list(,$W277,$S277,$U277)=$x278;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x280=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,32,\'<image>/05_string.js\');$_TypeError=&$x280[0];list(,$WTypeError,$STypeError,$UTypeError)=$x280;$x281=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x282=$x281($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x282->class)&&$x282->class===\'Error\'&&!isset($x282->properties[\'file\'])&&!isset($x282->properties[\'line\'])&&!isset($x282->properties[\'column\'])){$x282->properties[\'file\']=\'<image>/05_string.js\';$x282->properties[\'line\']=95;$x282->properties[\'column\']=32;$x282->attributes[\'file\']=$x282->attributes[\'line\']=$x282->attributes[\'column\']=0;}throw new JSException($x282,95,32,\'<image>/05_string.js\');}$x279=JS::toObject($_Math,$global);unset($x283,$W283,$S283,$U283);$x284=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x279,JS::toString(\'max\',$global),95,32,\'<image>/05_string.js\');$x283=&$x284[0];list(,$W283,$S283,$U283)=$x284;if(!(is_object($x283)&&isset($x283->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x287=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,32,\'<image>/05_string.js\');$_TypeError=&$x287[0];list(,$WTypeError,$STypeError,$UTypeError)=$x287;$x288=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x289=$x288($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x289->class)&&$x289->class===\'Error\'&&!isset($x289->properties[\'file\'])&&!isset($x289->properties[\'line\'])&&!isset($x289->properties[\'column\'])){$x289->properties[\'file\']=\'<image>/05_string.js\';$x289->properties[\'line\']=95;$x289->properties[\'column\']=32;$x289->attributes[\'file\']=$x289->attributes[\'line\']=$x289->attributes[\'column\']=0;}throw new JSException($x289,95,32,\'<image>/05_string.js\');}$x285=$x283->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x286=$x285($global,$x279,$x283,array($_position,0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x277)&&isset($x277->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x292=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,23,\'<image>/05_string.js\');$_TypeError=&$x292[0];list(,$WTypeError,$STypeError,$UTypeError)=$x292;$x293=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x294=$x293($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x294->class)&&$x294->class===\'Error\'&&!isset($x294->properties[\'file\'])&&!isset($x294->properties[\'line\'])&&!isset($x294->properties[\'column\'])){$x294->properties[\'file\']=\'<image>/05_string.js\';$x294->properties[\'line\']=95;$x294->properties[\'column\']=23;$x294->attributes[\'file\']=$x294->attributes[\'line\']=$x294->attributes[\'column\']=0;}throw new JSException($x294,95,23,\'<image>/05_string.js\');}$x290=$x277->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x291=$x290($global,$x273,$x277,array($x286,mb_strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x291;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=mb_strrpos($leThis->value,JS::toString($_search,$global),$_offset);$x295=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x295,$global)){return(-1.0*JS::toNumber(1.0,$global));}return$_ret;return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_12($global, $leThis, $fn, $args, $constructor = FALSE) {

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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x310=&$scope->properties[\'arguments\'];$x310->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x310->properties[$i]=$args[$i];$x310->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'that\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_that=&$scope->properties[\'that\'];$Uthat=FALSE;$global->scope[++$global->scope_sp]=$scope;return$leThis->value===JS::toString($_that,$global);return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_13($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x328 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('RegExp', $global), 111, 16, '<image>/05_string.js');
$_RegExp =& $x328[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x328;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x329 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 111, 16, '<image>/05_string.js');
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
$x333 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 111, 12, '<image>/05_string.js');
$x332 =& $x333[0]; list(,$W332,$S332,$U332) = $x333;
$x327 = $x332;
$x326->prototype = $x327;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x336 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 111, 12, '<image>/05_string.js');
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
$x340 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_regexp, JS::toString('global', $global), 114, 13, '<image>/05_string.js');
$x339 =& $x340[0]; list(,$W339,$S339,$U339) = $x340;
if (JS::toBoolean((!JS::toBoolean($x339, $global)), $global)) {
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x342 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 115, 21, '<image>/05_string.js');
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
$x346 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x341, JS::toString('exec', $global), 115, 21, '<image>/05_string.js');
$x345 =& $x346[0]; list(,$W345,$S345,$U345) = $x346;
if (!(is_object($x345) && isset($x345->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x349 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 115, 21, '<image>/05_string.js');
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
$x355 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 120, 19, '<image>/05_string.js');
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
$x359 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $_regexp, JS::toString($x354, $global), 120, 19, '<image>/05_string.js');
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
$x367 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 123, 22, '<image>/05_string.js');
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
$x371 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x366, JS::toString('exec', $global), 123, 22, '<image>/05_string.js');
$x370 =& $x371[0]; list(,$W370,$S370,$U370) = $x371;
if (!(is_object($x370) && isset($x370->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x374 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 123, 22, '<image>/05_string.js');
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
$x380 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_regexp, JS::toString('lastIndex', $global), 127, 14, '<image>/05_string.js');
$x379 =& $x380[0]; list(,$W379,$S379,$U379) = $x380;
$x378 = (((gettype($x379) === gettype($_previousLastIndex) && $x379 === $_previousLastIndex))|| (((is_float($x379) || is_int($x379)) && (is_float($_previousLastIndex) || is_int($_previousLastIndex))) && $x379 == $_previousLastIndex));
if (JS::toBoolean($x378, $global)) {
unset($x383, $W383, $S383, $U383);
$x384 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_regexp, JS::toString('lastIndex', $global), 128, 50, '<image>/05_string.js');
$x383 =& $x384[0]; list(,$W383,$S383,$U383) = $x384;
$x381 = JS::toPrimitive($x383, $global);
$x382 = JS::toPrimitive(1.0, $global);
$x385 = (is_string($x381) || is_string($x382) ? JS::toString($x381, $global) . JS::toString($x382, $global) : JS::toNumber($x381, $global) + JS::toNumber($x382, $global));
$x386 = JS::toString('lastIndex', $global);
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x387 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 128, 42, '<image>/05_string.js');
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
$x391 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $_regexp, JS::toString($x386, $global), 128, 42, '<image>/05_string.js');
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
$x397 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_regexp, JS::toString('lastIndex', $global), 130, 31, '<image>/05_string.js');
$x396 =& $x397[0]; list(,$W396,$S396,$U396) = $x397;
if ($UpreviousLastIndex) {$global->properties['previousLastIndex'] = $_previousLastIndex; $_previousLastIndex =& $global->properties['previousLastIndex']; }
$_previousLastIndex = $x396;;
};
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x399 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 133, 20, '<image>/05_string.js');
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
$x403 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x398, JS::toString('push', $global), 133, 20, '<image>/05_string.js');
$x402 =& $x403[0]; list(,$W402,$S402,$U402) = $x403;
unset($x404, $W404, $S404, $U404);
$x405 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_match, JS::toString(0.0, $global), 133, 26, '<image>/05_string.js');
$x404 =& $x405[0]; list(,$W404,$S404,$U404) = $x405;
if (!(is_object($x402) && isset($x402->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x408 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 133, 20, '<image>/05_string.js');
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x325=&$scope->properties[\'arguments\'];$x325->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x325->properties[$i]=$args[$i];$x325->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'regexp\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_regexp=&$scope->properties[\'regexp\'];$Uregexp=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_regexp)&&isset($_regexp->class)&&$_regexp->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x328=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),111,16,\'<image>/05_string.js\');$_RegExp=&$x328[0];list(,$WRegExp,$SRegExp,$URegExp)=$x328;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x329=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),111,16,\'<image>/05_string.js\');$_ReferenceError=&$x329[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x329;$x330=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,16);$x331=$x330($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x331->class)&&$x331->class===\'Error\'&&!isset($x331->properties[\'file\'])&&!isset($x331->properties[\'line\'])&&!isset($x331->properties[\'column\'])){$x331->properties[\'file\']=\'<image>/05_string.js\';$x331->properties[\'line\']=111;$x331->properties[\'column\']=16;$x331->attributes[\'file\']=$x331->attributes[\'line\']=$x331->attributes[\'column\']=0;}throw new JSException($x331,111,16,\'<image>/05_string.js\');}$x326=clone JS::$objectTemplate;unset($x332,$W332,$S332,$U332);$x333=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),111,12,\'<image>/05_string.js\');$x332=&$x333[0];list(,$W332,$S332,$U332)=$x333;$x327=$x332;$x326->prototype=$x327;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x336=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),111,12,\'<image>/05_string.js\');$_TypeError=&$x336[0];list(,$WTypeError,$STypeError,$UTypeError)=$x336;$x337=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x338=$x337($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x338->class)&&$x338->class===\'Error\'&&!isset($x338->properties[\'file\'])&&!isset($x338->properties[\'line\'])&&!isset($x338->properties[\'column\'])){$x338->properties[\'file\']=\'<image>/05_string.js\';$x338->properties[\'line\']=111;$x338->properties[\'column\']=12;$x338->attributes[\'file\']=$x338->attributes[\'line\']=$x338->attributes[\'column\']=0;}throw new JSException($x338,111,12,\'<image>/05_string.js\');}$x334=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x335=$x334($global,$x326,$_RegExp,array($_regexp),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x327=$x335;if(is_object($x327)&&$x327!==JS::$undefined){$x326=$x327;}if($Uregexp){$global->properties[\'regexp\']=$_regexp;$_regexp=&$global->properties[\'regexp\'];}$_regexp=$x326;}unset($x339,$W339,$S339,$U339);$x340=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_regexp,JS::toString(\'global\',$global),114,13,\'<image>/05_string.js\');$x339=&$x340[0];list(,$W339,$S339,$U339)=$x340;if(JS::toBoolean((!JS::toBoolean($x339,$global)),$global)){if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x342=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),115,21,\'<image>/05_string.js\');$_TypeError=&$x342[0];list(,$WTypeError,$STypeError,$UTypeError)=$x342;$x343=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x344=$x343($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x344->class)&&$x344->class===\'Error\'&&!isset($x344->properties[\'file\'])&&!isset($x344->properties[\'line\'])&&!isset($x344->properties[\'column\'])){$x344->properties[\'file\']=\'<image>/05_string.js\';$x344->properties[\'line\']=115;$x344->properties[\'column\']=21;$x344->attributes[\'file\']=$x344->attributes[\'line\']=$x344->attributes[\'column\']=0;}throw new JSException($x344,115,21,\'<image>/05_string.js\');}$x341=JS::toObject($_regexp,$global);unset($x345,$W345,$S345,$U345);$x346=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x341,JS::toString(\'exec\',$global),115,21,\'<image>/05_string.js\');$x345=&$x346[0];list(,$W345,$S345,$U345)=$x346;if(!(is_object($x345)&&isset($x345->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x349=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),115,21,\'<image>/05_string.js\');$_TypeError=&$x349[0];list(,$WTypeError,$STypeError,$UTypeError)=$x349;$x350=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x351=$x350($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x351->class)&&$x351->class===\'Error\'&&!isset($x351->properties[\'file\'])&&!isset($x351->properties[\'line\'])&&!isset($x351->properties[\'column\'])){$x351->properties[\'file\']=\'<image>/05_string.js\';$x351->properties[\'line\']=115;$x351->properties[\'column\']=21;$x351->attributes[\'file\']=$x351->attributes[\'line\']=$x351->attributes[\'column\']=0;}throw new JSException($x351,115,21,\'<image>/05_string.js\');}$x347=$x345->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x348=$x347($global,$x341,$x345,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x348;}$x352=clone JS::$arrayTemplate;$x352->properties[\'length\']=0;$x352->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x352;$scope->properties[\'n\']=JS::$undefined;$_n=&$scope->properties[\'n\'];$Un=FALSE;$_n=0.0;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'currentLastIndex\']=JS::$undefined;$_currentLastIndex=&$scope->properties[\'currentLastIndex\'];$UcurrentLastIndex=FALSE;$_currentLastIndex=JS::$undefined;$x353=0.0;$x354=JS::toString(\'lastIndex\',$global);if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x355=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),120,19,\'<image>/05_string.js\');$_TypeError=&$x355[0];list(,$WTypeError,$STypeError,$UTypeError)=$x355;$x356=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x357=$x356($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x357->class)&&$x357->class===\'Error\'&&!isset($x357->properties[\'file\'])&&!isset($x357->properties[\'line\'])&&!isset($x357->properties[\'column\'])){$x357->properties[\'file\']=\'<image>/05_string.js\';$x357->properties[\'line\']=120;$x357->properties[\'column\']=19;$x357->attributes[\'file\']=$x357->attributes[\'line\']=$x357->attributes[\'column\']=0;}throw new JSException($x357,120,19,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x358,$W358,$S358,$U358);$x359=_d783f9f345d98dc295c060ae0345bc6a_5($global,$scope,$_regexp,JS::toString($x354,$global),120,19,\'<image>/05_string.js\');$x358=&$x359[0];list(,$W358,$S358,$U358)=$x359;if($U358&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[$x354]=$x358;$x358=&$_regexp->properties[$x354];$_regexp->attributes[$x354]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U358=FALSE;$W358=TRUE;}if(isset($_regexp->class)&&$_regexp->class===\'Array\'){if(isset($_regexp->properties[\'length\'])&&$_regexp->properties[\'length\']!==JS::$undefined){$x361=$_regexp->properties[\'length\'];}else{$x361=0;}}if(isset($S358)){$x362=$S358->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x363=$x362($global,$_regexp,$S358,array($x353),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x360=$x363;}else{if(!$U358){$x360=$x353;if($W358){$x358=$x353;}}else{$x360=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'){if(is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}else if($x354===\'length\'&&is_int($x353)&&$x361>$x353){for($i=$x353;$i<$x361;++$i){unset($_regexp->properties[$i],$_regexp->attributes[$i]);}}}for($x364=0;;++$x364){if($x364===0){$scope->properties[\'previousLastIndex\']=JS::$undefined;$_previousLastIndex=&$scope->properties[\'previousLastIndex\'];$UpreviousLastIndex=FALSE;$_previousLastIndex=0.0;$scope->properties[\'lastMatch\']=JS::$undefined;$_lastMatch=&$scope->properties[\'lastMatch\'];$UlastMatch=FALSE;$_lastMatch=true;}if($x364!==0){$x365=++$_n;}if(!JS::toBoolean($_lastMatch,$global)){break;}if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x367=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),123,22,\'<image>/05_string.js\');$_TypeError=&$x367[0];list(,$WTypeError,$STypeError,$UTypeError)=$x367;$x368=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x369=$x368($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x369->class)&&$x369->class===\'Error\'&&!isset($x369->properties[\'file\'])&&!isset($x369->properties[\'line\'])&&!isset($x369->properties[\'column\'])){$x369->properties[\'file\']=\'<image>/05_string.js\';$x369->properties[\'line\']=123;$x369->properties[\'column\']=22;$x369->attributes[\'file\']=$x369->attributes[\'line\']=$x369->attributes[\'column\']=0;}throw new JSException($x369,123,22,\'<image>/05_string.js\');}$x366=JS::toObject($_regexp,$global);unset($x370,$W370,$S370,$U370);$x371=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x366,JS::toString(\'exec\',$global),123,22,\'<image>/05_string.js\');$x370=&$x371[0];list(,$W370,$S370,$U370)=$x371;if(!(is_object($x370)&&isset($x370->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x374=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),123,22,\'<image>/05_string.js\');$_TypeError=&$x374[0];list(,$WTypeError,$STypeError,$UTypeError)=$x374;$x375=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x376=$x375($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x376->class)&&$x376->class===\'Error\'&&!isset($x376->properties[\'file\'])&&!isset($x376->properties[\'line\'])&&!isset($x376->properties[\'column\'])){$x376->properties[\'file\']=\'<image>/05_string.js\';$x376->properties[\'line\']=123;$x376->properties[\'column\']=22;$x376->attributes[\'file\']=$x376->attributes[\'line\']=$x376->attributes[\'column\']=0;}throw new JSException($x376,123,22,\'<image>/05_string.js\');}$x372=$x370->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x373=$x372($global,$x366,$x370,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x373;$x377=(!JS::toBoolean((!JS::toBoolean($_match,$global)),$global));if($UlastMatch){$global->properties[\'lastMatch\']=$_lastMatch;$_lastMatch=&$global->properties[\'lastMatch\'];}$_lastMatch=$x377;if(JS::toBoolean($_match,$global)){unset($x379,$W379,$S379,$U379);$x380=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_regexp,JS::toString(\'lastIndex\',$global),127,14,\'<image>/05_string.js\');$x379=&$x380[0];list(,$W379,$S379,$U379)=$x380;$x378=(((gettype($x379)===gettype($_previousLastIndex)&&$x379===$_previousLastIndex))||(((is_float($x379)||is_int($x379))&&(is_float($_previousLastIndex)||is_int($_previousLastIndex)))&&$x379==$_previousLastIndex));if(JS::toBoolean($x378,$global)){unset($x383,$W383,$S383,$U383);$x384=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_regexp,JS::toString(\'lastIndex\',$global),128,50,\'<image>/05_string.js\');$x383=&$x384[0];list(,$W383,$S383,$U383)=$x384;$x381=JS::toPrimitive($x383,$global);$x382=JS::toPrimitive(1.0,$global);$x385=(is_string($x381)||is_string($x382)?JS::toString($x381,$global).JS::toString($x382,$global):JS::toNumber($x381,$global)+JS::toNumber($x382,$global));$x386=JS::toString(\'lastIndex\',$global);if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x387=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),128,42,\'<image>/05_string.js\');$_TypeError=&$x387[0];list(,$WTypeError,$STypeError,$UTypeError)=$x387;$x388=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x389=$x388($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x389->class)&&$x389->class===\'Error\'&&!isset($x389->properties[\'file\'])&&!isset($x389->properties[\'line\'])&&!isset($x389->properties[\'column\'])){$x389->properties[\'file\']=\'<image>/05_string.js\';$x389->properties[\'line\']=128;$x389->properties[\'column\']=42;$x389->attributes[\'file\']=$x389->attributes[\'line\']=$x389->attributes[\'column\']=0;}throw new JSException($x389,128,42,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x390,$W390,$S390,$U390);$x391=_d783f9f345d98dc295c060ae0345bc6a_5($global,$scope,$_regexp,JS::toString($x386,$global),128,42,\'<image>/05_string.js\');$x390=&$x391[0];list(,$W390,$S390,$U390)=$x391;if($U390&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[$x386]=$x390;$x390=&$_regexp->properties[$x386];$_regexp->attributes[$x386]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U390=FALSE;$W390=TRUE;}if(isset($_regexp->class)&&$_regexp->class===\'Array\'){if(isset($_regexp->properties[\'length\'])&&$_regexp->properties[\'length\']!==JS::$undefined){$x393=$_regexp->properties[\'length\'];}else{$x393=0;}}if(isset($S390)){$x394=$S390->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x395=$x394($global,$_regexp,$S390,array($x385),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x392=$x395;}else{if(!$U390){$x392=$x385;if($W390){$x390=$x385;}}else{$x392=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'){if(is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}else if($x386===\'length\'&&is_int($x385)&&$x393>$x385){for($i=$x385;$i<$x393;++$i){unset($_regexp->properties[$i],$_regexp->attributes[$i]);}}}if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x392;}else{unset($x396,$W396,$S396,$U396);$x397=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_regexp,JS::toString(\'lastIndex\',$global),130,31,\'<image>/05_string.js\');$x396=&$x397[0];list(,$W396,$S396,$U396)=$x397;if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x396;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x399=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),133,20,\'<image>/05_string.js\');$_TypeError=&$x399[0];list(,$WTypeError,$STypeError,$UTypeError)=$x399;$x400=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x401=$x400($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x401->class)&&$x401->class===\'Error\'&&!isset($x401->properties[\'file\'])&&!isset($x401->properties[\'line\'])&&!isset($x401->properties[\'column\'])){$x401->properties[\'file\']=\'<image>/05_string.js\';$x401->properties[\'line\']=133;$x401->properties[\'column\']=20;$x401->attributes[\'file\']=$x401->attributes[\'line\']=$x401->attributes[\'column\']=0;}throw new JSException($x401,133,20,\'<image>/05_string.js\');}$x398=JS::toObject($_returnArray,$global);unset($x402,$W402,$S402,$U402);$x403=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x398,JS::toString(\'push\',$global),133,20,\'<image>/05_string.js\');$x402=&$x403[0];list(,$W402,$S402,$U402)=$x403;unset($x404,$W404,$S404,$U404);$x405=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_match,JS::toString(0.0,$global),133,26,\'<image>/05_string.js\');$x404=&$x405[0];list(,$W404,$S404,$U404)=$x405;if(!(is_object($x402)&&isset($x402->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x408=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),133,20,\'<image>/05_string.js\');$_TypeError=&$x408[0];list(,$WTypeError,$STypeError,$UTypeError)=$x408;$x409=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x410=$x409($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x410->class)&&$x410->class===\'Error\'&&!isset($x410->properties[\'file\'])&&!isset($x410->properties[\'line\'])&&!isset($x410->properties[\'column\'])){$x410->properties[\'file\']=\'<image>/05_string.js\';$x410->properties[\'line\']=133;$x410->properties[\'column\']=20;$x410->attributes[\'file\']=$x410->attributes[\'line\']=$x410->attributes[\'column\']=0;}throw new JSException($x410,133,20,\'<image>/05_string.js\');}$x406=$x402->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x407=$x406($global,$x398,$x402,array($x404),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}$x411=(((gettype($_n)===gettype(0.0)&&$_n===0.0))||(((is_float($_n)||is_int($_n))&&(is_float(0.0)||is_int(0.0)))&&$_n==0.0));if(JS::toBoolean($x411,$global)){return NULL;}return$_returnArray;return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_15($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x550 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('match', $global), 172, 13, '<image>/05_string.js');
$_match =& $x550[0]; list(,$Wmatch,$Smatch,$Umatch) = $x550;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x551 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 172, 13, '<image>/05_string.js');
$_ReferenceError =& $x551[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x551;
$x552 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 172, 13);
$x553 = $x552($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x553->class) && $x553->class === 'Error' && !isset($x553->properties['file']) && !isset($x553->properties['line']) && !isset($x553->properties['column'])) {$x553->properties['file'] = '<image>/05_string.js';$x553->properties['line'] = 172;$x553->properties['column'] = 13;$x553->attributes['file'] = $x553->attributes['line'] = $x553->attributes['column'] = 0; }
throw new JSException($x553, 172, 13, '<image>/05_string.js');
}
unset($x554, $W554, $S554, $U554);
$x555 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_match, JS::toString(0.0, $global), 172, 18, '<image>/05_string.js');
$x554 =& $x555[0]; list(,$W554,$S554,$U554) = $x555;
return $x554;;
}
else {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x556 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('match', $global), 175, 13, '<image>/05_string.js');
$_match =& $x556[0]; list(,$Wmatch,$Smatch,$Umatch) = $x556;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x557 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 175, 13, '<image>/05_string.js');
$_ReferenceError =& $x557[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x557;
$x558 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 175, 13);
$x559 = $x558($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x559->class) && $x559->class === 'Error' && !isset($x559->properties['file']) && !isset($x559->properties['line']) && !isset($x559->properties['column'])) {$x559->properties['file'] = '<image>/05_string.js';$x559->properties['line'] = 175;$x559->properties['column'] = 13;$x559->attributes['file'] = $x559->attributes['line'] = $x559->attributes['column'] = 0; }
throw new JSException($x559, 175, 13, '<image>/05_string.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x560 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('Number', $global), 175, 19, '<image>/05_string.js');
$_Number =& $x560[0]; list(,$WNumber,$SNumber,$UNumber) = $x560;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x561 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 175, 19, '<image>/05_string.js');
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
$x566 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 175, 25, '<image>/05_string.js');
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
$x570 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_match, JS::toString($x565, $global), 175, 18, '<image>/05_string.js');
$x569 =& $x570[0]; list(,$W569,$S569,$U569) = $x570;
return $x569;;
};
}
;
return JS::$undefined;
}
echo 'function _d783f9f345d98dc295c060ae0345bc6a_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x547=&$scope->properties[\'arguments\'];$x547->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x547->properties[$i]=$args[$i];$x547->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'_\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$___=&$scope->properties[\'_\'];$U__=FALSE;$scope->properties[\'c\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$x548=(((gettype($_c)===gettype(\'$\')&&$_c===\'$\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'$\')||is_int(\'$\')))&&$_c==\'$\'));if(JS::toBoolean($x548,$global)){return\'$\';}else{$x549=(((gettype($_c)===gettype(\'&\')&&$_c===\'&\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'&\')||is_int(\'&\')))&&$_c==\'&\'));if(JS::toBoolean($x549,$global)){unset($_match,$Wmatch,$Smatch,$Umatch);$x550=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'match\',$global),172,13,\'<image>/05_string.js\');$_match=&$x550[0];list(,$Wmatch,$Smatch,$Umatch)=$x550;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x551=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),172,13,\'<image>/05_string.js\');$_ReferenceError=&$x551[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x551;$x552=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',172,13);$x553=$x552($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x553->class)&&$x553->class===\'Error\'&&!isset($x553->properties[\'file\'])&&!isset($x553->properties[\'line\'])&&!isset($x553->properties[\'column\'])){$x553->properties[\'file\']=\'<image>/05_string.js\';$x553->properties[\'line\']=172;$x553->properties[\'column\']=13;$x553->attributes[\'file\']=$x553->attributes[\'line\']=$x553->attributes[\'column\']=0;}throw new JSException($x553,172,13,\'<image>/05_string.js\');}unset($x554,$W554,$S554,$U554);$x555=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_match,JS::toString(0.0,$global),172,18,\'<image>/05_string.js\');$x554=&$x555[0];list(,$W554,$S554,$U554)=$x555;return$x554;}else{unset($_match,$Wmatch,$Smatch,$Umatch);$x556=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'match\',$global),175,13,\'<image>/05_string.js\');$_match=&$x556[0];list(,$Wmatch,$Smatch,$Umatch)=$x556;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x557=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),175,13,\'<image>/05_string.js\');$_ReferenceError=&$x557[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x557;$x558=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',175,13);$x559=$x558($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x559->class)&&$x559->class===\'Error\'&&!isset($x559->properties[\'file\'])&&!isset($x559->properties[\'line\'])&&!isset($x559->properties[\'column\'])){$x559->properties[\'file\']=\'<image>/05_string.js\';$x559->properties[\'line\']=175;$x559->properties[\'column\']=13;$x559->attributes[\'file\']=$x559->attributes[\'line\']=$x559->attributes[\'column\']=0;}throw new JSException($x559,175,13,\'<image>/05_string.js\');}unset($_Number,$WNumber,$SNumber,$UNumber);$x560=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'Number\',$global),175,19,\'<image>/05_string.js\');$_Number=&$x560[0];list(,$WNumber,$SNumber,$UNumber)=$x560;if($UNumber){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x561=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),175,19,\'<image>/05_string.js\');$_ReferenceError=&$x561[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x561;$x562=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',175,19);$x563=$x562($global,$global,$_ReferenceError,array(\'Number is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x563->class)&&$x563->class===\'Error\'&&!isset($x563->properties[\'file\'])&&!isset($x563->properties[\'line\'])&&!isset($x563->properties[\'column\'])){$x563->properties[\'file\']=\'<image>/05_string.js\';$x563->properties[\'line\']=175;$x563->properties[\'column\']=19;$x563->attributes[\'file\']=$x563->attributes[\'line\']=$x563->attributes[\'column\']=0;}throw new JSException($x563,175,19,\'<image>/05_string.js\');}if(!(is_object($_Number)&&isset($_Number->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x566=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),175,25,\'<image>/05_string.js\');$_TypeError=&$x566[0];list(,$WTypeError,$STypeError,$UTypeError)=$x566;$x567=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',175,25);$x568=$x567($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x568->class)&&$x568->class===\'Error\'&&!isset($x568->properties[\'file\'])&&!isset($x568->properties[\'line\'])&&!isset($x568->properties[\'column\'])){$x568->properties[\'file\']=\'<image>/05_string.js\';$x568->properties[\'line\']=175;$x568->properties[\'column\']=25;$x568->attributes[\'file\']=$x568->attributes[\'line\']=$x568->attributes[\'column\']=0;}throw new JSException($x568,175,25,\'<image>/05_string.js\');}$x564=$_Number->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',175,25);$x565=$x564($global,$global,$_Number,array($_c),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x569,$W569,$S569,$U569);$x570=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_match,JS::toString($x565,$global),175,18,\'<image>/05_string.js\');$x569=&$x570[0];list(,$W569,$S569,$U569)=$x570;return$x569;}}return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_14($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x429 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('RegExp', $global), 146, 16, '<image>/05_string.js');
$_RegExp =& $x429[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x429;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x430 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 146, 16, '<image>/05_string.js');
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
$x434 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 146, 12, '<image>/05_string.js');
$x433 =& $x434[0]; list(,$W433,$S433,$U433) = $x434;
$x428 = $x433;
$x427->prototype = $x428;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x437 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 146, 12, '<image>/05_string.js');
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
$x442 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 152, 29, '<image>/05_string.js');
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
$x446 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x441, JS::toString('exec', $global), 152, 29, '<image>/05_string.js');
$x445 =& $x446[0]; list(,$W445,$S445,$U445) = $x446;
if (!(is_object($x445) && isset($x445->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x449 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 152, 29, '<image>/05_string.js');
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
$x453 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_match, JS::toString('index', $global), 153, 25, '<image>/05_string.js');
$x452 =& $x453[0]; list(,$W452,$S452,$U452) = $x453;
$scope->properties['matchIndex'] = JS::$undefined; $_matchIndex =& $scope->properties['matchIndex'];
$UmatchIndex = FALSE;
$_matchIndex = $x452;
$x454 = mb_strlen(mb_strcut($_thisString, 0,$_matchIndex));
if ($Uindex) {$global->properties['index'] = $_index; $_index =& $global->properties['index']; }
$_index = $x454;
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x456 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 155, 40, '<image>/05_string.js');
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
$x460 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x455, JS::toString('substring', $global), 155, 40, '<image>/05_string.js');
$x459 =& $x460[0]; list(,$W459,$S459,$U459) = $x460;
if (!(is_object($x459) && isset($x459->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x463 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 155, 40, '<image>/05_string.js');
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
$x471 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_match, JS::toString(0.0, $global), 156, 28, '<image>/05_string.js');
$x470 =& $x471[0]; list(,$W470,$S470,$U470) = $x471;
unset($x472, $W472, $S472, $U472);
$x473 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x470, JS::toString('length', $global), 156, 31, '<image>/05_string.js');
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
$x478 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 159, 14, '<image>/05_string.js');
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
$x482 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x477, JS::toString('push', $global), 159, 14, '<image>/05_string.js');
$x481 =& $x482[0]; list(,$W481,$S481,$U481) = $x482;
unset($x483, $W483, $S483, $U483);
$x484 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_match, JS::toString('index', $global), 159, 20, '<image>/05_string.js');
$x483 =& $x484[0]; list(,$W483,$S483,$U483) = $x484;
if (!(is_object($x481) && isset($x481->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x487 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 159, 14, '<image>/05_string.js');
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
$x491 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 160, 14, '<image>/05_string.js');
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
$x495 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x490, JS::toString('push', $global), 160, 14, '<image>/05_string.js');
$x494 =& $x495[0]; list(,$W494,$S494,$U494) = $x495;
unset($x496, $W496, $S496, $U496);
$x497 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_match, JS::toString('input', $global), 160, 20, '<image>/05_string.js');
$x496 =& $x497[0]; list(,$W496,$S496,$U496) = $x497;
if (!(is_object($x494) && isset($x494->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x500 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 160, 14, '<image>/05_string.js');
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
$x505 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('String', $global), 164, 21, '<image>/05_string.js');
$_String =& $x505[0]; list(,$WString,$SString,$UString) = $x505;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x506 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 164, 21, '<image>/05_string.js');
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
$x510 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 164, 41, '<image>/05_string.js');
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
$x514 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x509, JS::toString('apply', $global), 164, 41, '<image>/05_string.js');
$x513 =& $x514[0]; list(,$W513,$S513,$U513) = $x514;
if (!(is_object($x513) && isset($x513->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x517 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 164, 41, '<image>/05_string.js');
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
$x522 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 164, 27, '<image>/05_string.js');
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
$x528 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 32, '<image>/05_string.js');
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
$x532 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x527, JS::toString('replace', $global), 167, 32, '<image>/05_string.js');
$x531 =& $x532[0]; list(,$W531,$S531,$U531) = $x532;
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x535 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('RegExp', $global), 167, 33, '<image>/05_string.js');
$_RegExp =& $x535[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x535;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x536 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 167, 33, '<image>/05_string.js');
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
$x540 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 167, 33, '<image>/05_string.js');
$x539 =& $x540[0]; list(,$W539,$S539,$U539) = $x540;
$x534 = $x539;
$x533->prototype = $x534;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x543 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 33, '<image>/05_string.js');
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
$x571 = clone JS::$functionTemplate; $x571->call = '_d783f9f345d98dc295c060ae0345bc6a_15'; $x571->parameters = array (
  0 => '_',
  1 => 'c',
); $x571->scope = $scope; $x571->properties['prototype'] = clone JS::$objectTemplate; $x571->attributes['prototype'] = JS::WRITABLE; $x571->properties['prototype']->properties['constructor'] = $x571; $x571->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x571->properties['length'] = 2; $x571->attributes['length'] = 0;
if (!(is_object($x531) && isset($x531->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x574 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 167, 32, '<image>/05_string.js');
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
$x580 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_search, JS::toString('global', $global), 180, 14, '<image>/05_string.js');
$x579 =& $x580[0]; list(,$W579,$S579,$U579) = $x580;
if (JS::toBoolean((!JS::toBoolean($x579, $global)), $global)) {
break;;
};;
};
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x582 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 185, 35, '<image>/05_string.js');
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
$x586 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x581, JS::toString('substring', $global), 185, 35, '<image>/05_string.js');
$x585 =& $x586[0]; list(,$W585,$S585,$U585) = $x586;
unset($x587, $W587, $S587, $U587);
$x588 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_thisString, JS::toString('length', $global), 185, 57, '<image>/05_string.js');
$x587 =& $x588[0]; list(,$W587,$S587,$U587) = $x588;
if (!(is_object($x585) && isset($x585->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x591 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 185, 35, '<image>/05_string.js');
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x426=&$scope->properties[\'arguments\'];$x426->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x426->properties[$i]=$args[$i];$x426->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'replace\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_replace=&$scope->properties[\'replace\'];$Ureplace=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!is_object($_search)||!isset($_search->class)||$_search->class!==\'RegExp\',$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x429=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),146,16,\'<image>/05_string.js\');$_RegExp=&$x429[0];list(,$WRegExp,$SRegExp,$URegExp)=$x429;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x430=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),146,16,\'<image>/05_string.js\');$_ReferenceError=&$x430[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x430;$x431=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,16);$x432=$x431($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x432->class)&&$x432->class===\'Error\'&&!isset($x432->properties[\'file\'])&&!isset($x432->properties[\'line\'])&&!isset($x432->properties[\'column\'])){$x432->properties[\'file\']=\'<image>/05_string.js\';$x432->properties[\'line\']=146;$x432->properties[\'column\']=16;$x432->attributes[\'file\']=$x432->attributes[\'line\']=$x432->attributes[\'column\']=0;}throw new JSException($x432,146,16,\'<image>/05_string.js\');}$x427=clone JS::$objectTemplate;unset($x433,$W433,$S433,$U433);$x434=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),146,12,\'<image>/05_string.js\');$x433=&$x434[0];list(,$W433,$S433,$U433)=$x434;$x428=$x433;$x427->prototype=$x428;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x437=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),146,12,\'<image>/05_string.js\');$_TypeError=&$x437[0];list(,$WTypeError,$STypeError,$UTypeError)=$x437;$x438=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x439=$x438($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x439->class)&&$x439->class===\'Error\'&&!isset($x439->properties[\'file\'])&&!isset($x439->properties[\'line\'])&&!isset($x439->properties[\'column\'])){$x439->properties[\'file\']=\'<image>/05_string.js\';$x439->properties[\'line\']=146;$x439->properties[\'column\']=12;$x439->attributes[\'file\']=$x439->attributes[\'line\']=$x439->attributes[\'column\']=0;}throw new JSException($x439,146,12,\'<image>/05_string.js\');}$x435=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x436=$x435($global,$x427,$_RegExp,array(preg_quote(JS::toString($_search,$global),\'/\')),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x428=$x436;if(is_object($x428)&&$x428!==JS::$undefined){$x427=$x428;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x427;}$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0.0;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;$scope->properties[\'newString\']=JS::$undefined;$_newString=&$scope->properties[\'newString\'];$UnewString=FALSE;$_newString=\'\';$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=JS::$undefined;for(;;){if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x442=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),152,29,\'<image>/05_string.js\');$_TypeError=&$x442[0];list(,$WTypeError,$STypeError,$UTypeError)=$x442;$x443=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x444=$x443($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x444->class)&&$x444->class===\'Error\'&&!isset($x444->properties[\'file\'])&&!isset($x444->properties[\'line\'])&&!isset($x444->properties[\'column\'])){$x444->properties[\'file\']=\'<image>/05_string.js\';$x444->properties[\'line\']=152;$x444->properties[\'column\']=29;$x444->attributes[\'file\']=$x444->attributes[\'line\']=$x444->attributes[\'column\']=0;}throw new JSException($x444,152,29,\'<image>/05_string.js\');}$x441=JS::toObject($_search,$global);unset($x445,$W445,$S445,$U445);$x446=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x441,JS::toString(\'exec\',$global),152,29,\'<image>/05_string.js\');$x445=&$x446[0];list(,$W445,$S445,$U445)=$x446;if(!(is_object($x445)&&isset($x445->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x449=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),152,29,\'<image>/05_string.js\');$_TypeError=&$x449[0];list(,$WTypeError,$STypeError,$UTypeError)=$x449;$x450=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x451=$x450($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x451->class)&&$x451->class===\'Error\'&&!isset($x451->properties[\'file\'])&&!isset($x451->properties[\'line\'])&&!isset($x451->properties[\'column\'])){$x451->properties[\'file\']=\'<image>/05_string.js\';$x451->properties[\'line\']=152;$x451->properties[\'column\']=29;$x451->attributes[\'file\']=$x451->attributes[\'line\']=$x451->attributes[\'column\']=0;}throw new JSException($x451,152,29,\'<image>/05_string.js\');}$x447=$x445->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x448=$x447($global,$x441,$x445,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x448;$x440=!(((gettype($_match)===gettype(NULL)&&$_match===NULL))||(((is_float($_match)||is_int($_match))&&(is_float(NULL)||is_int(NULL)))&&$_match==NULL));if(!JS::toBoolean($x440,$global)){break;}unset($x452,$W452,$S452,$U452);$x453=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_match,JS::toString(\'index\',$global),153,25,\'<image>/05_string.js\');$x452=&$x453[0];list(,$W452,$S452,$U452)=$x453;$scope->properties[\'matchIndex\']=JS::$undefined;$_matchIndex=&$scope->properties[\'matchIndex\'];$UmatchIndex=FALSE;$_matchIndex=$x452;$x454=mb_strlen(mb_strcut($_thisString,0,$_matchIndex));if($Uindex){$global->properties[\'index\']=$_index;$_index=&$global->properties[\'index\'];}$_index=$x454;if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x456=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),155,40,\'<image>/05_string.js\');$_TypeError=&$x456[0];list(,$WTypeError,$STypeError,$UTypeError)=$x456;$x457=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',155,40);$x458=$x457($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x458->class)&&$x458->class===\'Error\'&&!isset($x458->properties[\'file\'])&&!isset($x458->properties[\'line\'])&&!isset($x458->properties[\'column\'])){$x458->properties[\'file\']=\'<image>/05_string.js\';$x458->properties[\'line\']=155;$x458->properties[\'column\']=40;$x458->attributes[\'file\']=$x458->attributes[\'line\']=$x458->attributes[\'column\']=0;}throw new JSException($x458,155,40,\'<image>/05_string.js\');}$x455=JS::toObject($_thisString,$global);unset($x459,$W459,$S459,$U459);$x460=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x455,JS::toString(\'substring\',$global),155,40,\'<image>/05_string.js\');$x459=&$x460[0];list(,$W459,$S459,$U459)=$x460;if(!(is_object($x459)&&isset($x459->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x463=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),155,40,\'<image>/05_string.js\');$_TypeError=&$x463[0];list(,$WTypeError,$STypeError,$UTypeError)=$x463;$x464=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',155,40);$x465=$x464($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x465->class)&&$x465->class===\'Error\'&&!isset($x465->properties[\'file\'])&&!isset($x465->properties[\'line\'])&&!isset($x465->properties[\'column\'])){$x465->properties[\'file\']=\'<image>/05_string.js\';$x465->properties[\'line\']=155;$x465->properties[\'column\']=40;$x465->attributes[\'file\']=$x465->attributes[\'line\']=$x465->attributes[\'column\']=0;}throw new JSException($x465,155,40,\'<image>/05_string.js\');}$x461=$x459->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',155,40);$x462=$x461($global,$x455,$x459,array($_lastIndex,$_index),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x462;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x466=JS::toPrimitive($_newString,$global);$x467=JS::toPrimitive($_s,$global);$_newString=(is_string($x466)||is_string($x467)?JS::toString($x466,$global).JS::toString($x467,$global):JS::toNumber($x466,$global)+JS::toNumber($x467,$global));unset($x470,$W470,$S470,$U470);$x471=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_match,JS::toString(0.0,$global),156,28,\'<image>/05_string.js\');$x470=&$x471[0];list(,$W470,$S470,$U470)=$x471;unset($x472,$W472,$S472,$U472);$x473=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x470,JS::toString(\'length\',$global),156,31,\'<image>/05_string.js\');$x472=&$x473[0];list(,$W472,$S472,$U472)=$x473;$x468=JS::toPrimitive($_index,$global);$x469=JS::toPrimitive($x472,$global);$x474=(is_string($x468)||is_string($x469)?JS::toString($x468,$global).JS::toString($x469,$global):JS::toNumber($x468,$global)+JS::toNumber($x469,$global));if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=$x474;$x476=$_replace;$x476=($x476===JS::$undefined?\'undefined\':(is_int($x476)||is_float($x476)?\'number\':(is_bool($x476)?\'boolean\':(is_string($x476)?\'string\':(is_object($x476)&&isset($x476->call)?\'function\':\'object\')))));$x475=(((gettype($x476)===gettype(\'function\')&&$x476===\'function\'))||(((is_float($x476)||is_int($x476))&&(is_float(\'function\')||is_int(\'function\')))&&$x476==\'function\'));if(JS::toBoolean($x475,$global)){if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x478=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),159,14,\'<image>/05_string.js\');$_TypeError=&$x478[0];list(,$WTypeError,$STypeError,$UTypeError)=$x478;$x479=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x480=$x479($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x480->class)&&$x480->class===\'Error\'&&!isset($x480->properties[\'file\'])&&!isset($x480->properties[\'line\'])&&!isset($x480->properties[\'column\'])){$x480->properties[\'file\']=\'<image>/05_string.js\';$x480->properties[\'line\']=159;$x480->properties[\'column\']=14;$x480->attributes[\'file\']=$x480->attributes[\'line\']=$x480->attributes[\'column\']=0;}throw new JSException($x480,159,14,\'<image>/05_string.js\');}$x477=JS::toObject($_match,$global);unset($x481,$W481,$S481,$U481);$x482=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x477,JS::toString(\'push\',$global),159,14,\'<image>/05_string.js\');$x481=&$x482[0];list(,$W481,$S481,$U481)=$x482;unset($x483,$W483,$S483,$U483);$x484=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_match,JS::toString(\'index\',$global),159,20,\'<image>/05_string.js\');$x483=&$x484[0];list(,$W483,$S483,$U483)=$x484;if(!(is_object($x481)&&isset($x481->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x487=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),159,14,\'<image>/05_string.js\');$_TypeError=&$x487[0];list(,$WTypeError,$STypeError,$UTypeError)=$x487;$x488=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x489=$x488($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x489->class)&&$x489->class===\'Error\'&&!isset($x489->properties[\'file\'])&&!isset($x489->properties[\'line\'])&&!isset($x489->properties[\'column\'])){$x489->properties[\'file\']=\'<image>/05_string.js\';$x489->properties[\'line\']=159;$x489->properties[\'column\']=14;$x489->attributes[\'file\']=$x489->attributes[\'line\']=$x489->attributes[\'column\']=0;}throw new JSException($x489,159,14,\'<image>/05_string.js\');}$x485=$x481->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x486=$x485($global,$x477,$x481,array($x483),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x491=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),160,14,\'<image>/05_string.js\');$_TypeError=&$x491[0];list(,$WTypeError,$STypeError,$UTypeError)=$x491;$x492=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',160,14);$x493=$x492($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x493->class)&&$x493->class===\'Error\'&&!isset($x493->properties[\'file\'])&&!isset($x493->properties[\'line\'])&&!isset($x493->properties[\'column\'])){$x493->properties[\'file\']=\'<image>/05_string.js\';$x493->properties[\'line\']=160;$x493->properties[\'column\']=14;$x493->attributes[\'file\']=$x493->attributes[\'line\']=$x493->attributes[\'column\']=0;}throw new JSException($x493,160,14,\'<image>/05_string.js\');}$x490=JS::toObject($_match,$global);unset($x494,$W494,$S494,$U494);$x495=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x490,JS::toString(\'push\',$global),160,14,\'<image>/05_string.js\');$x494=&$x495[0];list(,$W494,$S494,$U494)=$x495;unset($x496,$W496,$S496,$U496);$x497=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_match,JS::toString(\'input\',$global),160,20,\'<image>/05_string.js\');$x496=&$x497[0];list(,$W496,$S496,$U496)=$x497;if(!(is_object($x494)&&isset($x494->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x500=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),160,14,\'<image>/05_string.js\');$_TypeError=&$x500[0];list(,$WTypeError,$STypeError,$UTypeError)=$x500;$x501=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',160,14);$x502=$x501($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x502->class)&&$x502->class===\'Error\'&&!isset($x502->properties[\'file\'])&&!isset($x502->properties[\'line\'])&&!isset($x502->properties[\'column\'])){$x502->properties[\'file\']=\'<image>/05_string.js\';$x502->properties[\'line\']=160;$x502->properties[\'column\']=14;$x502->attributes[\'file\']=$x502->attributes[\'line\']=$x502->attributes[\'column\']=0;}throw new JSException($x502,160,14,\'<image>/05_string.js\');}$x498=$x494->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',160,14);$x499=$x498($global,$x490,$x494,array($x496),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!array_key_exists(\'index\',$_match->attributes)){unset($_match->properties[\'index\']);$x503=TRUE;}else if($_match->attributes[\'index\']&JS::CONFIGURABLE){unset($_match->properties[\'index\'],$_match->attributes[\'index\'],$_match->getters[\'index\'],$_match->setters[\'index\']);$x503=TRUE;}else{$x503=FALSE;}if(!array_key_exists(\'input\',$_match->attributes)){unset($_match->properties[\'input\']);$x504=TRUE;}else if($_match->attributes[\'input\']&JS::CONFIGURABLE){unset($_match->properties[\'input\'],$_match->attributes[\'input\'],$_match->getters[\'input\'],$_match->setters[\'input\']);$x504=TRUE;}else{$x504=FALSE;}unset($_String,$WString,$SString,$UString);$x505=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'String\',$global),164,21,\'<image>/05_string.js\');$_String=&$x505[0];list(,$WString,$SString,$UString)=$x505;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x506=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),164,21,\'<image>/05_string.js\');$_ReferenceError=&$x506[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x506;$x507=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',164,21);$x508=$x507($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x508->class)&&$x508->class===\'Error\'&&!isset($x508->properties[\'file\'])&&!isset($x508->properties[\'line\'])&&!isset($x508->properties[\'column\'])){$x508->properties[\'file\']=\'<image>/05_string.js\';$x508->properties[\'line\']=164;$x508->properties[\'column\']=21;$x508->attributes[\'file\']=$x508->attributes[\'line\']=$x508->attributes[\'column\']=0;}throw new JSException($x508,164,21,\'<image>/05_string.js\');}if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x510=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),164,41,\'<image>/05_string.js\');$_TypeError=&$x510[0];list(,$WTypeError,$STypeError,$UTypeError)=$x510;$x511=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',164,41);$x512=$x511($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x512->class)&&$x512->class===\'Error\'&&!isset($x512->properties[\'file\'])&&!isset($x512->properties[\'line\'])&&!isset($x512->properties[\'column\'])){$x512->properties[\'file\']=\'<image>/05_string.js\';$x512->properties[\'line\']=164;$x512->properties[\'column\']=41;$x512->attributes[\'file\']=$x512->attributes[\'line\']=$x512->attributes[\'column\']=0;}throw new JSException($x512,164,41,\'<image>/05_string.js\');}$x509=JS::toObject($_replace,$global);unset($x513,$W513,$S513,$U513);$x514=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x509,JS::toString(\'apply\',$global),164,41,\'<image>/05_string.js\');$x513=&$x514[0];list(,$W513,$S513,$U513)=$x514;if(!(is_object($x513)&&isset($x513->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x517=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),164,41,\'<image>/05_string.js\');$_TypeError=&$x517[0];list(,$WTypeError,$STypeError,$UTypeError)=$x517;$x518=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',164,41);$x519=$x518($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x519->class)&&$x519->class===\'Error\'&&!isset($x519->properties[\'file\'])&&!isset($x519->properties[\'line\'])&&!isset($x519->properties[\'column\'])){$x519->properties[\'file\']=\'<image>/05_string.js\';$x519->properties[\'line\']=164;$x519->properties[\'column\']=41;$x519->attributes[\'file\']=$x519->attributes[\'line\']=$x519->attributes[\'column\']=0;}throw new JSException($x519,164,41,\'<image>/05_string.js\');}$x515=$x513->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',164,41);$x516=$x515($global,$x509,$x513,array(JS::$undefined,$_match),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x522=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),164,27,\'<image>/05_string.js\');$_TypeError=&$x522[0];list(,$WTypeError,$STypeError,$UTypeError)=$x522;$x523=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',164,27);$x524=$x523($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x524->class)&&$x524->class===\'Error\'&&!isset($x524->properties[\'file\'])&&!isset($x524->properties[\'line\'])&&!isset($x524->properties[\'column\'])){$x524->properties[\'file\']=\'<image>/05_string.js\';$x524->properties[\'line\']=164;$x524->properties[\'column\']=27;$x524->attributes[\'file\']=$x524->attributes[\'line\']=$x524->attributes[\'column\']=0;}throw new JSException($x524,164,27,\'<image>/05_string.js\');}$x520=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',164,27);$x521=$x520($global,$global,$_String,array($x516),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x521;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x525=JS::toPrimitive($_newString,$global);$x526=JS::toPrimitive($_s,$global);$_newString=(is_string($x525)||is_string($x526)?JS::toString($x525,$global).JS::toString($x526,$global):JS::toNumber($x525,$global)+JS::toNumber($x526,$global));}else{if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x528=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,32,\'<image>/05_string.js\');$_TypeError=&$x528[0];list(,$WTypeError,$STypeError,$UTypeError)=$x528;$x529=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',167,32);$x530=$x529($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x530->class)&&$x530->class===\'Error\'&&!isset($x530->properties[\'file\'])&&!isset($x530->properties[\'line\'])&&!isset($x530->properties[\'column\'])){$x530->properties[\'file\']=\'<image>/05_string.js\';$x530->properties[\'line\']=167;$x530->properties[\'column\']=32;$x530->attributes[\'file\']=$x530->attributes[\'line\']=$x530->attributes[\'column\']=0;}throw new JSException($x530,167,32,\'<image>/05_string.js\');}$x527=JS::toObject($_replace,$global);unset($x531,$W531,$S531,$U531);$x532=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x527,JS::toString(\'replace\',$global),167,32,\'<image>/05_string.js\');$x531=&$x532[0];list(,$W531,$S531,$U531)=$x532;unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x535=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),167,33,\'<image>/05_string.js\');$_RegExp=&$x535[0];list(,$WRegExp,$SRegExp,$URegExp)=$x535;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x536=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),167,33,\'<image>/05_string.js\');$_ReferenceError=&$x536[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x536;$x537=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',167,33);$x538=$x537($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x538->class)&&$x538->class===\'Error\'&&!isset($x538->properties[\'file\'])&&!isset($x538->properties[\'line\'])&&!isset($x538->properties[\'column\'])){$x538->properties[\'file\']=\'<image>/05_string.js\';$x538->properties[\'line\']=167;$x538->properties[\'column\']=33;$x538->attributes[\'file\']=$x538->attributes[\'line\']=$x538->attributes[\'column\']=0;}throw new JSException($x538,167,33,\'<image>/05_string.js\');}$x533=clone JS::$objectTemplate;unset($x539,$W539,$S539,$U539);$x540=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),167,33,\'<image>/05_string.js\');$x539=&$x540[0];list(,$W539,$S539,$U539)=$x540;$x534=$x539;$x533->prototype=$x534;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x543=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,33,\'<image>/05_string.js\');$_TypeError=&$x543[0];list(,$WTypeError,$STypeError,$UTypeError)=$x543;$x544=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',167,33);$x545=$x544($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x545->class)&&$x545->class===\'Error\'&&!isset($x545->properties[\'file\'])&&!isset($x545->properties[\'line\'])&&!isset($x545->properties[\'column\'])){$x545->properties[\'file\']=\'<image>/05_string.js\';$x545->properties[\'line\']=167;$x545->properties[\'column\']=33;$x545->attributes[\'file\']=$x545->attributes[\'line\']=$x545->attributes[\'column\']=0;}throw new JSException($x545,167,33,\'<image>/05_string.js\');}$x541=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',167,33);$x542=$x541($global,$x533,$_RegExp,array(\'\\\\$([$&]|[0-9]|[0-9][0-9])\',\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x534=$x542;if(is_object($x534)&&$x534!==JS::$undefined){$x533=$x534;}$x571=clone JS::$functionTemplate;$x571->call=\'_d783f9f345d98dc295c060ae0345bc6a_15\';$x571->parameters=array(0=>\'_\',1=>\'c\',);$x571->scope=$scope;$x571->properties[\'prototype\']=clone JS::$objectTemplate;$x571->attributes[\'prototype\']=JS::WRITABLE;$x571->properties[\'prototype\']->properties[\'constructor\']=$x571;$x571->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x571->properties[\'length\']=2;$x571->attributes[\'length\']=0;if(!(is_object($x531)&&isset($x531->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x574=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),167,32,\'<image>/05_string.js\');$_TypeError=&$x574[0];list(,$WTypeError,$STypeError,$UTypeError)=$x574;$x575=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',167,32);$x576=$x575($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x576->class)&&$x576->class===\'Error\'&&!isset($x576->properties[\'file\'])&&!isset($x576->properties[\'line\'])&&!isset($x576->properties[\'column\'])){$x576->properties[\'file\']=\'<image>/05_string.js\';$x576->properties[\'line\']=167;$x576->properties[\'column\']=32;$x576->attributes[\'file\']=$x576->attributes[\'line\']=$x576->attributes[\'column\']=0;}throw new JSException($x576,167,32,\'<image>/05_string.js\');}$x572=$x531->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',167,32);$x573=$x572($global,$x527,$x531,array($x533,$x571),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x577=JS::toPrimitive($_newString,$global);$x578=JS::toPrimitive($x573,$global);$_newString=(is_string($x577)||is_string($x578)?JS::toString($x577,$global).JS::toString($x578,$global):JS::toNumber($x577,$global)+JS::toNumber($x578,$global));}unset($x579,$W579,$S579,$U579);$x580=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_search,JS::toString(\'global\',$global),180,14,\'<image>/05_string.js\');$x579=&$x580[0];list(,$W579,$S579,$U579)=$x580;if(JS::toBoolean((!JS::toBoolean($x579,$global)),$global)){break;}}if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x582=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),185,35,\'<image>/05_string.js\');$_TypeError=&$x582[0];list(,$WTypeError,$STypeError,$UTypeError)=$x582;$x583=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',185,35);$x584=$x583($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x584->class)&&$x584->class===\'Error\'&&!isset($x584->properties[\'file\'])&&!isset($x584->properties[\'line\'])&&!isset($x584->properties[\'column\'])){$x584->properties[\'file\']=\'<image>/05_string.js\';$x584->properties[\'line\']=185;$x584->properties[\'column\']=35;$x584->attributes[\'file\']=$x584->attributes[\'line\']=$x584->attributes[\'column\']=0;}throw new JSException($x584,185,35,\'<image>/05_string.js\');}$x581=JS::toObject($_thisString,$global);unset($x585,$W585,$S585,$U585);$x586=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x581,JS::toString(\'substring\',$global),185,35,\'<image>/05_string.js\');$x585=&$x586[0];list(,$W585,$S585,$U585)=$x586;unset($x587,$W587,$S587,$U587);$x588=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_thisString,JS::toString(\'length\',$global),185,57,\'<image>/05_string.js\');$x587=&$x588[0];list(,$W587,$S587,$U587)=$x588;if(!(is_object($x585)&&isset($x585->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x591=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),185,35,\'<image>/05_string.js\');$_TypeError=&$x591[0];list(,$WTypeError,$STypeError,$UTypeError)=$x591;$x592=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',185,35);$x593=$x592($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x593->class)&&$x593->class===\'Error\'&&!isset($x593->properties[\'file\'])&&!isset($x593->properties[\'line\'])&&!isset($x593->properties[\'column\'])){$x593->properties[\'file\']=\'<image>/05_string.js\';$x593->properties[\'line\']=185;$x593->properties[\'column\']=35;$x593->attributes[\'file\']=$x593->attributes[\'line\']=$x593->attributes[\'column\']=0;}throw new JSException($x593,185,35,\'<image>/05_string.js\');}$x589=$x585->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',185,35);$x590=$x589($global,$x581,$x585,array($_lastIndex,$x587),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x594=JS::toPrimitive($_newString,$global);$x595=JS::toPrimitive($x590,$global);$_newString=(is_string($x594)||is_string($x595)?JS::toString($x594,$global).JS::toString($x595,$global):JS::toNumber($x594,$global)+JS::toNumber($x595,$global));return$_newString;return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_16($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x613 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('RegExp', $global), 192, 16, '<image>/05_string.js');
$_RegExp =& $x613[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x613;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x614 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 192, 16, '<image>/05_string.js');
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
$x618 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 192, 12, '<image>/05_string.js');
$x617 =& $x618[0]; list(,$W617,$S617,$U617) = $x618;
$x612 = $x617;
$x611->prototype = $x612;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x621 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 192, 12, '<image>/05_string.js');
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
$x625 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_search, JS::toString('lastIndex', $global), 195, 29, '<image>/05_string.js');
$x624 =& $x625[0]; list(,$W624,$S624,$U624) = $x625;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x624;
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x627 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 196, 22, '<image>/05_string.js');
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
$x631 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x626, JS::toString('exec', $global), 196, 22, '<image>/05_string.js');
$x630 =& $x631[0]; list(,$W630,$S630,$U630) = $x631;
if (!(is_object($x630) && isset($x630->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x634 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 196, 22, '<image>/05_string.js');
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
$x638 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 198, 21, '<image>/05_string.js');
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
$x642 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $_search, JS::toString($x637, $global), 198, 21, '<image>/05_string.js');
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
$x648 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_match, JS::toString('index', $global), 201, 15, '<image>/05_string.js');
$x647 =& $x648[0]; list(,$W647,$S647,$U647) = $x648;
return $x647;;
};
return (-1.0 * JS::toNumber(1.0, $global));
;
return JS::$undefined;
}
echo 'function _d783f9f345d98dc295c060ae0345bc6a_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x610=&$scope->properties[\'arguments\'];$x610->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x610->properties[$i]=$args[$i];$x610->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_search)&&isset($_search->class)&&$_search->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x613=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),192,16,\'<image>/05_string.js\');$_RegExp=&$x613[0];list(,$WRegExp,$SRegExp,$URegExp)=$x613;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x614=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),192,16,\'<image>/05_string.js\');$_ReferenceError=&$x614[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x614;$x615=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',192,16);$x616=$x615($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x616->class)&&$x616->class===\'Error\'&&!isset($x616->properties[\'file\'])&&!isset($x616->properties[\'line\'])&&!isset($x616->properties[\'column\'])){$x616->properties[\'file\']=\'<image>/05_string.js\';$x616->properties[\'line\']=192;$x616->properties[\'column\']=16;$x616->attributes[\'file\']=$x616->attributes[\'line\']=$x616->attributes[\'column\']=0;}throw new JSException($x616,192,16,\'<image>/05_string.js\');}$x611=clone JS::$objectTemplate;unset($x617,$W617,$S617,$U617);$x618=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),192,12,\'<image>/05_string.js\');$x617=&$x618[0];list(,$W617,$S617,$U617)=$x618;$x612=$x617;$x611->prototype=$x612;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x621=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),192,12,\'<image>/05_string.js\');$_TypeError=&$x621[0];list(,$WTypeError,$STypeError,$UTypeError)=$x621;$x622=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',192,12);$x623=$x622($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x623->class)&&$x623->class===\'Error\'&&!isset($x623->properties[\'file\'])&&!isset($x623->properties[\'line\'])&&!isset($x623->properties[\'column\'])){$x623->properties[\'file\']=\'<image>/05_string.js\';$x623->properties[\'line\']=192;$x623->properties[\'column\']=12;$x623->attributes[\'file\']=$x623->attributes[\'line\']=$x623->attributes[\'column\']=0;}throw new JSException($x623,192,12,\'<image>/05_string.js\');}$x619=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',192,12);$x620=$x619($global,$x611,$_RegExp,array($_search),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x612=$x620;if(is_object($x612)&&$x612!==JS::$undefined){$x611=$x612;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x611;}unset($x624,$W624,$S624,$U624);$x625=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_search,JS::toString(\'lastIndex\',$global),195,29,\'<image>/05_string.js\');$x624=&$x625[0];list(,$W624,$S624,$U624)=$x625;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x624;if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x627=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),196,22,\'<image>/05_string.js\');$_TypeError=&$x627[0];list(,$WTypeError,$STypeError,$UTypeError)=$x627;$x628=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',196,22);$x629=$x628($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x629->class)&&$x629->class===\'Error\'&&!isset($x629->properties[\'file\'])&&!isset($x629->properties[\'line\'])&&!isset($x629->properties[\'column\'])){$x629->properties[\'file\']=\'<image>/05_string.js\';$x629->properties[\'line\']=196;$x629->properties[\'column\']=22;$x629->attributes[\'file\']=$x629->attributes[\'line\']=$x629->attributes[\'column\']=0;}throw new JSException($x629,196,22,\'<image>/05_string.js\');}$x626=JS::toObject($_search,$global);unset($x630,$W630,$S630,$U630);$x631=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x626,JS::toString(\'exec\',$global),196,22,\'<image>/05_string.js\');$x630=&$x631[0];list(,$W630,$S630,$U630)=$x631;if(!(is_object($x630)&&isset($x630->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x634=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),196,22,\'<image>/05_string.js\');$_TypeError=&$x634[0];list(,$WTypeError,$STypeError,$UTypeError)=$x634;$x635=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',196,22);$x636=$x635($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x636->class)&&$x636->class===\'Error\'&&!isset($x636->properties[\'file\'])&&!isset($x636->properties[\'line\'])&&!isset($x636->properties[\'column\'])){$x636->properties[\'file\']=\'<image>/05_string.js\';$x636->properties[\'line\']=196;$x636->properties[\'column\']=22;$x636->attributes[\'file\']=$x636->attributes[\'line\']=$x636->attributes[\'column\']=0;}throw new JSException($x636,196,22,\'<image>/05_string.js\');}$x632=$x630->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',196,22);$x633=$x632($global,$x626,$x630,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=$x633;$x637=JS::toString(\'lastIndexOf\',$global);if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x638=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),198,21,\'<image>/05_string.js\');$_TypeError=&$x638[0];list(,$WTypeError,$STypeError,$UTypeError)=$x638;$x639=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',198,21);$x640=$x639($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x640->class)&&$x640->class===\'Error\'&&!isset($x640->properties[\'file\'])&&!isset($x640->properties[\'line\'])&&!isset($x640->properties[\'column\'])){$x640->properties[\'file\']=\'<image>/05_string.js\';$x640->properties[\'line\']=198;$x640->properties[\'column\']=21;$x640->attributes[\'file\']=$x640->attributes[\'line\']=$x640->attributes[\'column\']=0;}throw new JSException($x640,198,21,\'<image>/05_string.js\');}$_search=JS::toObject($_search,$global);unset($x641,$W641,$S641,$U641);$x642=_d783f9f345d98dc295c060ae0345bc6a_5($global,$scope,$_search,JS::toString($x637,$global),198,21,\'<image>/05_string.js\');$x641=&$x642[0];list(,$W641,$S641,$U641)=$x642;if($U641&&(!isset($_search->extensible)||$_search->extensible)){$_search->properties[$x637]=$x641;$x641=&$_search->properties[$x637];$_search->attributes[$x637]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U641=FALSE;$W641=TRUE;}if(isset($_search->class)&&$_search->class===\'Array\'){if(isset($_search->properties[\'length\'])&&$_search->properties[\'length\']!==JS::$undefined){$x644=$_search->properties[\'length\'];}else{$x644=0;}}if(isset($S641)){$x645=$S641->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',198,21);$x646=$x645($global,$_search,$S641,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x643=$x646;}else{if(!$U641){$x643=$_savedLastIndex;if($W641){$x641=$_savedLastIndex;}}else{$x643=JS::$undefined;}}if(isset($_search->class)&&$_search->class===\'Array\'){if(is_int(\'lastIndexOf\')&&\'lastIndexOf\'>=$_search->properties[\'length\']){$_search->properties[\'length\']=\'lastIndexOf\'+1;}else if($x637===\'length\'&&is_int($_savedLastIndex)&&$x644>$_savedLastIndex){for($i=$_savedLastIndex;$i<$x644;++$i){unset($_search->properties[$i],$_search->attributes[$i]);}}}if(JS::toBoolean($_match,$global)){unset($x647,$W647,$S647,$U647);$x648=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_match,JS::toString(\'index\',$global),201,15,\'<image>/05_string.js\');$x647=&$x648[0];list(,$W647,$S647,$U647)=$x648;return$x647;}return(-1.0*JS::toNumber(1.0,$global));return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_17($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x672 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('Math', $global), 219, 11, '<image>/05_string.js');
$_Math =& $x672[0]; list(,$WMath,$SMath,$UMath) = $x672;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x673 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 219, 11, '<image>/05_string.js');
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
$x677 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 219, 19, '<image>/05_string.js');
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
$x681 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x676, JS::toString('max', $global), 219, 19, '<image>/05_string.js');
$x680 =& $x681[0]; list(,$W680,$S680,$U680) = $x681;
$x682 = JS::toPrimitive($_start, $global);
$x683 = JS::toPrimitive($_length, $global);
if (!(is_object($x680) && isset($x680->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x686 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 219, 19, '<image>/05_string.js');
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
$x694 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('Math', $global), 223, 9, '<image>/05_string.js');
$_Math =& $x694[0]; list(,$WMath,$SMath,$UMath) = $x694;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x695 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 223, 9, '<image>/05_string.js');
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
$x699 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 223, 17, '<image>/05_string.js');
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
$x703 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x698, JS::toString('max', $global), 223, 17, '<image>/05_string.js');
$x702 =& $x703[0]; list(,$W702,$S702,$U702) = $x703;
$x704 = JS::toPrimitive($_end, $global);
$x705 = JS::toPrimitive($_length, $global);
if (!(is_object($x702) && isset($x702->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x708 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 223, 17, '<image>/05_string.js');
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
echo 'function _d783f9f345d98dc295c060ae0345bc6a_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x663=&$scope->properties[\'arguments\'];$x663->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x663->properties[$i]=$args[$i];$x663->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=mb_strlen($leThis->value);$x664=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x664,$global)){$x665=0.0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x665;}$x666=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x666,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x667=JS::toPrimitive($_start,$global);$x668=JS::toPrimitive(0.0,$global);$x669=(is_string($x667)&&is_string($x668)?strcmp($x667,$x668)<0:(!is_nan($x670=JS::toNumber($x667,$global))&&!is_nan($x671=JS::toNumber($x668,$global))&&$x670<$x671));if(JS::toBoolean($x669,$global)){unset($_Math,$WMath,$SMath,$UMath);$x672=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'Math\',$global),219,11,\'<image>/05_string.js\');$_Math=&$x672[0];list(,$WMath,$SMath,$UMath)=$x672;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x673=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),219,11,\'<image>/05_string.js\');$_ReferenceError=&$x673[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x673;$x674=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',219,11);$x675=$x674($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x675->class)&&$x675->class===\'Error\'&&!isset($x675->properties[\'file\'])&&!isset($x675->properties[\'line\'])&&!isset($x675->properties[\'column\'])){$x675->properties[\'file\']=\'<image>/05_string.js\';$x675->properties[\'line\']=219;$x675->properties[\'column\']=11;$x675->attributes[\'file\']=$x675->attributes[\'line\']=$x675->attributes[\'column\']=0;}throw new JSException($x675,219,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x677=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),219,19,\'<image>/05_string.js\');$_TypeError=&$x677[0];list(,$WTypeError,$STypeError,$UTypeError)=$x677;$x678=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',219,19);$x679=$x678($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x679->class)&&$x679->class===\'Error\'&&!isset($x679->properties[\'file\'])&&!isset($x679->properties[\'line\'])&&!isset($x679->properties[\'column\'])){$x679->properties[\'file\']=\'<image>/05_string.js\';$x679->properties[\'line\']=219;$x679->properties[\'column\']=19;$x679->attributes[\'file\']=$x679->attributes[\'line\']=$x679->attributes[\'column\']=0;}throw new JSException($x679,219,19,\'<image>/05_string.js\');}$x676=JS::toObject($_Math,$global);unset($x680,$W680,$S680,$U680);$x681=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x676,JS::toString(\'max\',$global),219,19,\'<image>/05_string.js\');$x680=&$x681[0];list(,$W680,$S680,$U680)=$x681;$x682=JS::toPrimitive($_start,$global);$x683=JS::toPrimitive($_length,$global);if(!(is_object($x680)&&isset($x680->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x686=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),219,19,\'<image>/05_string.js\');$_TypeError=&$x686[0];list(,$WTypeError,$STypeError,$UTypeError)=$x686;$x687=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',219,19);$x688=$x687($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x688->class)&&$x688->class===\'Error\'&&!isset($x688->properties[\'file\'])&&!isset($x688->properties[\'line\'])&&!isset($x688->properties[\'column\'])){$x688->properties[\'file\']=\'<image>/05_string.js\';$x688->properties[\'line\']=219;$x688->properties[\'column\']=19;$x688->attributes[\'file\']=$x688->attributes[\'line\']=$x688->attributes[\'column\']=0;}throw new JSException($x688,219,19,\'<image>/05_string.js\');}$x684=$x680->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',219,19);$x685=$x684($global,$x676,$x680,array((is_string($x682)||is_string($x683)?JS::toString($x682,$global).JS::toString($x683,$global):JS::toNumber($x682,$global)+JS::toNumber($x683,$global)),0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x685;}$x689=JS::toPrimitive($_end,$global);$x690=JS::toPrimitive(0.0,$global);$x691=(is_string($x689)&&is_string($x690)?strcmp($x689,$x690)<0:(!is_nan($x692=JS::toNumber($x689,$global))&&!is_nan($x693=JS::toNumber($x690,$global))&&$x692<$x693));if(JS::toBoolean($x691,$global)){unset($_Math,$WMath,$SMath,$UMath);$x694=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'Math\',$global),223,9,\'<image>/05_string.js\');$_Math=&$x694[0];list(,$WMath,$SMath,$UMath)=$x694;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x695=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),223,9,\'<image>/05_string.js\');$_ReferenceError=&$x695[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x695;$x696=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',223,9);$x697=$x696($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x697->class)&&$x697->class===\'Error\'&&!isset($x697->properties[\'file\'])&&!isset($x697->properties[\'line\'])&&!isset($x697->properties[\'column\'])){$x697->properties[\'file\']=\'<image>/05_string.js\';$x697->properties[\'line\']=223;$x697->properties[\'column\']=9;$x697->attributes[\'file\']=$x697->attributes[\'line\']=$x697->attributes[\'column\']=0;}throw new JSException($x697,223,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x699=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),223,17,\'<image>/05_string.js\');$_TypeError=&$x699[0];list(,$WTypeError,$STypeError,$UTypeError)=$x699;$x700=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',223,17);$x701=$x700($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x701->class)&&$x701->class===\'Error\'&&!isset($x701->properties[\'file\'])&&!isset($x701->properties[\'line\'])&&!isset($x701->properties[\'column\'])){$x701->properties[\'file\']=\'<image>/05_string.js\';$x701->properties[\'line\']=223;$x701->properties[\'column\']=17;$x701->attributes[\'file\']=$x701->attributes[\'line\']=$x701->attributes[\'column\']=0;}throw new JSException($x701,223,17,\'<image>/05_string.js\');}$x698=JS::toObject($_Math,$global);unset($x702,$W702,$S702,$U702);$x703=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x698,JS::toString(\'max\',$global),223,17,\'<image>/05_string.js\');$x702=&$x703[0];list(,$W702,$S702,$U702)=$x703;$x704=JS::toPrimitive($_end,$global);$x705=JS::toPrimitive($_length,$global);if(!(is_object($x702)&&isset($x702->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x708=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),223,17,\'<image>/05_string.js\');$_TypeError=&$x708[0];list(,$WTypeError,$STypeError,$UTypeError)=$x708;$x709=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',223,17);$x710=$x709($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x710->class)&&$x710->class===\'Error\'&&!isset($x710->properties[\'file\'])&&!isset($x710->properties[\'line\'])&&!isset($x710->properties[\'column\'])){$x710->properties[\'file\']=\'<image>/05_string.js\';$x710->properties[\'line\']=223;$x710->properties[\'column\']=17;$x710->attributes[\'file\']=$x710->attributes[\'line\']=$x710->attributes[\'column\']=0;}throw new JSException($x710,223,17,\'<image>/05_string.js\');}$x706=$x702->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',223,17);$x707=$x706($global,$x698,$x702,array((is_string($x704)||is_string($x705)?JS::toString($x704,$global).JS::toString($x705,$global):JS::toNumber($x704,$global)+JS::toNumber($x705,$global)),0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x707;}return(string)mb_substr($leThis->value,$_start,max($_end-$_start,0));return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_18($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x729 = $_separator;
$x729 = ($x729 === JS::$undefined ? 'undefined' : (is_int($x729) || is_float($x729) ? 'number' : (is_bool($x729) ? 'boolean' : (is_string($x729) ? 'string' : (is_object($x729) && isset($x729->call) ? 'function' : 'object')))));
$x728 = (((gettype($x729) === gettype('string') && $x729 === 'string'))|| (((is_float($x729) || is_int($x729)) && (is_float('string') || is_int('string'))) && $x729 == 'string'));
if (JS::toBoolean($x728, $global)) {
$x730 = (((gettype($_separator) === gettype('') && $_separator === ''))|| (((is_float($_separator) || is_int($_separator)) && (is_float('') || is_int(''))) && $_separator == ''));
if (JS::toBoolean($x730, $global)) {
$x731 = clone JS::$arrayTemplate;
$x731->properties['length'] = 0;
$x731->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x731;
for ($x732 = 0;; ++$x732) {
if ($x732 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0.0;
unset($_Math, $WMath, $SMath, $UMath);
$x733 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('Math', $global), 237, 30, '<image>/05_string.js');
$_Math =& $x733[0]; list(,$WMath,$SMath,$UMath) = $x733;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x734 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 237, 30, '<image>/05_string.js');
$_ReferenceError =& $x734[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x734;
$x735 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 30);
$x736 = $x735($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x736->class) && $x736->class === 'Error' && !isset($x736->properties['file']) && !isset($x736->properties['line']) && !isset($x736->properties['column'])) {$x736->properties['file'] = '<image>/05_string.js';$x736->properties['line'] = 237;$x736->properties['column'] = 30;$x736->attributes['file'] = $x736->attributes['line'] = $x736->attributes['column'] = 0; }
throw new JSException($x736, 237, 30, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x738 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 237, 38, '<image>/05_string.js');
$_TypeError =& $x738[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x738;
$x739 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 38);
$x740 = $x739($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x740->class) && $x740->class === 'Error' && !isset($x740->properties['file']) && !isset($x740->properties['line']) && !isset($x740->properties['column'])) {$x740->properties['file'] = '<image>/05_string.js';$x740->properties['line'] = 237;$x740->properties['column'] = 38;$x740->attributes['file'] = $x740->attributes['line'] = $x740->attributes['column'] = 0; }
throw new JSException($x740, 237, 38, '<image>/05_string.js');
}
$x737 = JS::toObject($_Math, $global);
unset($x741, $W741, $S741, $U741);
$x742 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x737, JS::toString('min', $global), 237, 38, '<image>/05_string.js');
$x741 =& $x742[0]; list(,$W741,$S741,$U741) = $x742;
unset($x743, $W743, $S743, $U743);
$x744 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $leThis, JS::toString('length', $global), 237, 43, '<image>/05_string.js');
$x743 =& $x744[0]; list(,$W743,$S743,$U743) = $x744;
$x746 = (((gettype($_limit) === gettype(JS::$undefined) && $_limit === JS::$undefined))|| (((is_float($_limit) || is_int($_limit)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_limit == JS::$undefined));
if (JS::toBoolean($x746, $global)) {
unset($x747, $W747, $S747, $U747);
$x748 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $leThis, JS::toString('length', $global), 237, 78, '<image>/05_string.js');
$x747 =& $x748[0]; list(,$W747,$S747,$U747) = $x748;
$x745 = $x747;
} else {
$x745 = $_limit;
}
if (!(is_object($x741) && isset($x741->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x751 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 237, 38, '<image>/05_string.js');
$_TypeError =& $x751[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x751;
$x752 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 38);
$x753 = $x752($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x753->class) && $x753->class === 'Error' && !isset($x753->properties['file']) && !isset($x753->properties['line']) && !isset($x753->properties['column'])) {$x753->properties['file'] = '<image>/05_string.js';$x753->properties['line'] = 237;$x753->properties['column'] = 38;$x753->attributes['file'] = $x753->attributes['line'] = $x753->attributes['column'] = 0; }
throw new JSException($x753, 237, 38, '<image>/05_string.js');
}
$x749 = $x741->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 38);
$x750 = $x749($global, $x737, $x741, array($x743, $x745), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x750;
}
if ($x732 !== 0) {
$x754 = ++$_i;
}
$x755 = JS::toPrimitive($_i, $global);
$x756 = JS::toPrimitive($_l, $global);
$x757 = (is_string($x755) && is_string($x756) ? strcmp($x755, $x756) < 0 : (!is_nan($x758 = JS::toNumber($x755, $global)) && !is_nan($x759 = JS::toNumber($x756, $global)) && $x758 < $x759));
if (!JS::toBoolean($x757, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x761 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 238, 29, '<image>/05_string.js');
$_TypeError =& $x761[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x761;
$x762 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 238, 29);
$x763 = $x762($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x763->class) && $x763->class === 'Error' && !isset($x763->properties['file']) && !isset($x763->properties['line']) && !isset($x763->properties['column'])) {$x763->properties['file'] = '<image>/05_string.js';$x763->properties['line'] = 238;$x763->properties['column'] = 29;$x763->attributes['file'] = $x763->attributes['line'] = $x763->attributes['column'] = 0; }
throw new JSException($x763, 238, 29, '<image>/05_string.js');
}
$x760 = JS::toObject($_returnArray, $global);
unset($x764, $W764, $S764, $U764);
$x765 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x760, JS::toString('push', $global), 238, 29, '<image>/05_string.js');
$x764 =& $x765[0]; list(,$W764,$S764,$U764) = $x765;
if (!(is_object($x764) && isset($x764->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x768 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 238, 29, '<image>/05_string.js');
$_TypeError =& $x768[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x768;
$x769 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 238, 29);
$x770 = $x769($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x770->class) && $x770->class === 'Error' && !isset($x770->properties['file']) && !isset($x770->properties['line']) && !isset($x770->properties['column'])) {$x770->properties['file'] = '<image>/05_string.js';$x770->properties['line'] = 238;$x770->properties['column'] = 29;$x770->attributes['file'] = $x770->attributes['line'] = $x770->attributes['column'] = 0; }
throw new JSException($x770, 238, 29, '<image>/05_string.js');
}
$x766 = $x764->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 238, 29);
$x767 = $x766($global, $x760, $x764, array((string) mb_substr($leThis->value,$_i, 1)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_returnArray;;
};
$x771 = (((gettype($_limit) === gettype(JS::$undefined) && $_limit === JS::$undefined))|| (((is_float($_limit) || is_int($_limit)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_limit == JS::$undefined));
if (JS::toBoolean($x771, $global)) {

return JS::fromNative(explode($_separator, $leThis->value));;
}
else {
$scope->properties['tmpArray'] = JS::$undefined; $_tmpArray =& $scope->properties['tmpArray'];
$UtmpArray = FALSE;
$_tmpArray = JS::fromNative(explode($_separator, $leThis->value,$_limit+ 1));
if ($_tmpArray === JS::$undefined || $_tmpArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x773 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 246, 34, '<image>/05_string.js');
$_TypeError =& $x773[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x773;
$x774 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 246, 34);
$x775 = $x774($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x775->class) && $x775->class === 'Error' && !isset($x775->properties['file']) && !isset($x775->properties['line']) && !isset($x775->properties['column'])) {$x775->properties['file'] = '<image>/05_string.js';$x775->properties['line'] = 246;$x775->properties['column'] = 34;$x775->attributes['file'] = $x775->attributes['line'] = $x775->attributes['column'] = 0; }
throw new JSException($x775, 246, 34, '<image>/05_string.js');
}
$x772 = JS::toObject($_tmpArray, $global);
unset($x776, $W776, $S776, $U776);
$x777 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x772, JS::toString('slice', $global), 246, 34, '<image>/05_string.js');
$x776 =& $x777[0]; list(,$W776,$S776,$U776) = $x777;
unset($_Math, $WMath, $SMath, $UMath);
$x778 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('Math', $global), 246, 38, '<image>/05_string.js');
$_Math =& $x778[0]; list(,$WMath,$SMath,$UMath) = $x778;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x779 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 246, 38, '<image>/05_string.js');
$_ReferenceError =& $x779[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x779;
$x780 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 246, 38);
$x781 = $x780($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x781->class) && $x781->class === 'Error' && !isset($x781->properties['file']) && !isset($x781->properties['line']) && !isset($x781->properties['column'])) {$x781->properties['file'] = '<image>/05_string.js';$x781->properties['line'] = 246;$x781->properties['column'] = 38;$x781->attributes['file'] = $x781->attributes['line'] = $x781->attributes['column'] = 0; }
throw new JSException($x781, 246, 38, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x783 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 246, 46, '<image>/05_string.js');
$_TypeError =& $x783[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x783;
$x784 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 246, 46);
$x785 = $x784($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x785->class) && $x785->class === 'Error' && !isset($x785->properties['file']) && !isset($x785->properties['line']) && !isset($x785->properties['column'])) {$x785->properties['file'] = '<image>/05_string.js';$x785->properties['line'] = 246;$x785->properties['column'] = 46;$x785->attributes['file'] = $x785->attributes['line'] = $x785->attributes['column'] = 0; }
throw new JSException($x785, 246, 46, '<image>/05_string.js');
}
$x782 = JS::toObject($_Math, $global);
unset($x786, $W786, $S786, $U786);
$x787 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x782, JS::toString('min', $global), 246, 46, '<image>/05_string.js');
$x786 =& $x787[0]; list(,$W786,$S786,$U786) = $x787;
unset($x788, $W788, $S788, $U788);
$x789 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_tmpArray, JS::toString('length', $global), 246, 62, '<image>/05_string.js');
$x788 =& $x789[0]; list(,$W788,$S788,$U788) = $x789;
if (!(is_object($x786) && isset($x786->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x792 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 246, 46, '<image>/05_string.js');
$_TypeError =& $x792[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x792;
$x793 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 246, 46);
$x794 = $x793($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x794->class) && $x794->class === 'Error' && !isset($x794->properties['file']) && !isset($x794->properties['line']) && !isset($x794->properties['column'])) {$x794->properties['file'] = '<image>/05_string.js';$x794->properties['line'] = 246;$x794->properties['column'] = 46;$x794->attributes['file'] = $x794->attributes['line'] = $x794->attributes['column'] = 0; }
throw new JSException($x794, 246, 46, '<image>/05_string.js');
}
$x790 = $x786->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 246, 46);
$x791 = $x790($global, $x782, $x786, array($_limit, $x788), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x776) && isset($x776->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x797 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 246, 34, '<image>/05_string.js');
$_TypeError =& $x797[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x797;
$x798 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 246, 34);
$x799 = $x798($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x799->class) && $x799->class === 'Error' && !isset($x799->properties['file']) && !isset($x799->properties['line']) && !isset($x799->properties['column'])) {$x799->properties['file'] = '<image>/05_string.js';$x799->properties['line'] = 246;$x799->properties['column'] = 34;$x799->attributes['file'] = $x799->attributes['line'] = $x799->attributes['column'] = 0; }
throw new JSException($x799, 246, 34, '<image>/05_string.js');
}
$x795 = $x776->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 246, 34);
$x796 = $x795($global, $x772, $x776, array(0.0, $x791), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x796;;
};;
}
else {
unset($x804, $W804, $S804, $U804);
$x805 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_separator, JS::toString('source', $global), 249, 39, '<image>/05_string.js');
$x804 =& $x805[0]; list(,$W804,$S804,$U804) = $x805;
$x802 = JS::toPrimitive('/', $global);
$x803 = JS::toPrimitive($x804, $global);
$x800 = JS::toPrimitive((is_string($x802) || is_string($x803) ? JS::toString($x802, $global) . JS::toString($x803, $global) : JS::toNumber($x802, $global) + JS::toNumber($x803, $global)), $global);
$x801 = JS::toPrimitive('/', $global);
$scope->properties['pattern'] = JS::$undefined; $_pattern =& $scope->properties['pattern'];
$Upattern = FALSE;
$_pattern = (is_string($x800) || is_string($x801) ? JS::toString($x800, $global) . JS::toString($x801, $global) : JS::toNumber($x800, $global) + JS::toNumber($x801, $global));
$x806 = (((gettype($_limit) === gettype(JS::$undefined) && $_limit === JS::$undefined))|| (((is_float($_limit) || is_int($_limit)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_limit == JS::$undefined));
if (JS::toBoolean($x806, $global)) {

return JS::fromNative(preg_split($_pattern, $leThis->value));;
}
else {
$scope->properties['tmpArray'] = JS::$undefined; $_tmpArray =& $scope->properties['tmpArray'];
$UtmpArray = FALSE;
$_tmpArray = JS::fromNative(preg_split($_pattern, $leThis->value,$_limit+ 1));
if ($_tmpArray === JS::$undefined || $_tmpArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x808 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 254, 31, '<image>/05_string.js');
$_TypeError =& $x808[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x808;
$x809 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 254, 31);
$x810 = $x809($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x810->class) && $x810->class === 'Error' && !isset($x810->properties['file']) && !isset($x810->properties['line']) && !isset($x810->properties['column'])) {$x810->properties['file'] = '<image>/05_string.js';$x810->properties['line'] = 254;$x810->properties['column'] = 31;$x810->attributes['file'] = $x810->attributes['line'] = $x810->attributes['column'] = 0; }
throw new JSException($x810, 254, 31, '<image>/05_string.js');
}
$x807 = JS::toObject($_tmpArray, $global);
unset($x811, $W811, $S811, $U811);
$x812 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x807, JS::toString('slice', $global), 254, 31, '<image>/05_string.js');
$x811 =& $x812[0]; list(,$W811,$S811,$U811) = $x812;
unset($_Math, $WMath, $SMath, $UMath);
$x813 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('Math', $global), 254, 35, '<image>/05_string.js');
$_Math =& $x813[0]; list(,$WMath,$SMath,$UMath) = $x813;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x814 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 254, 35, '<image>/05_string.js');
$_ReferenceError =& $x814[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x814;
$x815 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 254, 35);
$x816 = $x815($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x816->class) && $x816->class === 'Error' && !isset($x816->properties['file']) && !isset($x816->properties['line']) && !isset($x816->properties['column'])) {$x816->properties['file'] = '<image>/05_string.js';$x816->properties['line'] = 254;$x816->properties['column'] = 35;$x816->attributes['file'] = $x816->attributes['line'] = $x816->attributes['column'] = 0; }
throw new JSException($x816, 254, 35, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x818 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 254, 43, '<image>/05_string.js');
$_TypeError =& $x818[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x818;
$x819 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 254, 43);
$x820 = $x819($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x820->class) && $x820->class === 'Error' && !isset($x820->properties['file']) && !isset($x820->properties['line']) && !isset($x820->properties['column'])) {$x820->properties['file'] = '<image>/05_string.js';$x820->properties['line'] = 254;$x820->properties['column'] = 43;$x820->attributes['file'] = $x820->attributes['line'] = $x820->attributes['column'] = 0; }
throw new JSException($x820, 254, 43, '<image>/05_string.js');
}
$x817 = JS::toObject($_Math, $global);
unset($x821, $W821, $S821, $U821);
$x822 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x817, JS::toString('min', $global), 254, 43, '<image>/05_string.js');
$x821 =& $x822[0]; list(,$W821,$S821,$U821) = $x822;
unset($x823, $W823, $S823, $U823);
$x824 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_tmpArray, JS::toString('length', $global), 254, 59, '<image>/05_string.js');
$x823 =& $x824[0]; list(,$W823,$S823,$U823) = $x824;
if (!(is_object($x821) && isset($x821->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x827 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 254, 43, '<image>/05_string.js');
$_TypeError =& $x827[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x827;
$x828 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 254, 43);
$x829 = $x828($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x829->class) && $x829->class === 'Error' && !isset($x829->properties['file']) && !isset($x829->properties['line']) && !isset($x829->properties['column'])) {$x829->properties['file'] = '<image>/05_string.js';$x829->properties['line'] = 254;$x829->properties['column'] = 43;$x829->attributes['file'] = $x829->attributes['line'] = $x829->attributes['column'] = 0; }
throw new JSException($x829, 254, 43, '<image>/05_string.js');
}
$x825 = $x821->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 254, 43);
$x826 = $x825($global, $x817, $x821, array($_limit, $x823), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x811) && isset($x811->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x832 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 254, 31, '<image>/05_string.js');
$_TypeError =& $x832[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x832;
$x833 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 254, 31);
$x834 = $x833($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x834->class) && $x834->class === 'Error' && !isset($x834->properties['file']) && !isset($x834->properties['line']) && !isset($x834->properties['column'])) {$x834->properties['file'] = '<image>/05_string.js';$x834->properties['line'] = 254;$x834->properties['column'] = 31;$x834->attributes['file'] = $x834->attributes['line'] = $x834->attributes['column'] = 0; }
throw new JSException($x834, 254, 31, '<image>/05_string.js');
}
$x830 = $x811->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 254, 31);
$x831 = $x830($global, $x807, $x811, array(0.0, $x826), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x831;;
};;
};
;
return JS::$undefined;
}
echo 'function _d783f9f345d98dc295c060ae0345bc6a_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x725=&$scope->properties[\'arguments\'];$x725->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x725->properties[$i]=$args[$i];$x725->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'separator\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_separator=&$scope->properties[\'separator\'];$Useparator=FALSE;$scope->properties[\'limit\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_limit=&$scope->properties[\'limit\'];$Ulimit=FALSE;$global->scope[++$global->scope_sp]=$scope;$x726=(((gettype($_separator)===gettype(JS::$undefined)&&$_separator===JS::$undefined))||(((is_float($_separator)||is_int($_separator))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_separator==JS::$undefined));if(JS::toBoolean($x726,$global)){$x727=clone JS::$arrayTemplate;$x727->properties[\'length\']=1;$x727->attributes[\'length\']=JS::WRITABLE;$x727->properties[0]=$leThis->value;$x727->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x727;}$x729=$_separator;$x729=($x729===JS::$undefined?\'undefined\':(is_int($x729)||is_float($x729)?\'number\':(is_bool($x729)?\'boolean\':(is_string($x729)?\'string\':(is_object($x729)&&isset($x729->call)?\'function\':\'object\')))));$x728=(((gettype($x729)===gettype(\'string\')&&$x729===\'string\'))||(((is_float($x729)||is_int($x729))&&(is_float(\'string\')||is_int(\'string\')))&&$x729==\'string\'));if(JS::toBoolean($x728,$global)){$x730=(((gettype($_separator)===gettype(\'\')&&$_separator===\'\'))||(((is_float($_separator)||is_int($_separator))&&(is_float(\'\')||is_int(\'\')))&&$_separator==\'\'));if(JS::toBoolean($x730,$global)){$x731=clone JS::$arrayTemplate;$x731->properties[\'length\']=0;$x731->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x731;for($x732=0;;++$x732){if($x732===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0.0;unset($_Math,$WMath,$SMath,$UMath);$x733=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'Math\',$global),237,30,\'<image>/05_string.js\');$_Math=&$x733[0];list(,$WMath,$SMath,$UMath)=$x733;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x734=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),237,30,\'<image>/05_string.js\');$_ReferenceError=&$x734[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x734;$x735=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,30);$x736=$x735($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x736->class)&&$x736->class===\'Error\'&&!isset($x736->properties[\'file\'])&&!isset($x736->properties[\'line\'])&&!isset($x736->properties[\'column\'])){$x736->properties[\'file\']=\'<image>/05_string.js\';$x736->properties[\'line\']=237;$x736->properties[\'column\']=30;$x736->attributes[\'file\']=$x736->attributes[\'line\']=$x736->attributes[\'column\']=0;}throw new JSException($x736,237,30,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x738=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),237,38,\'<image>/05_string.js\');$_TypeError=&$x738[0];list(,$WTypeError,$STypeError,$UTypeError)=$x738;$x739=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,38);$x740=$x739($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x740->class)&&$x740->class===\'Error\'&&!isset($x740->properties[\'file\'])&&!isset($x740->properties[\'line\'])&&!isset($x740->properties[\'column\'])){$x740->properties[\'file\']=\'<image>/05_string.js\';$x740->properties[\'line\']=237;$x740->properties[\'column\']=38;$x740->attributes[\'file\']=$x740->attributes[\'line\']=$x740->attributes[\'column\']=0;}throw new JSException($x740,237,38,\'<image>/05_string.js\');}$x737=JS::toObject($_Math,$global);unset($x741,$W741,$S741,$U741);$x742=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x737,JS::toString(\'min\',$global),237,38,\'<image>/05_string.js\');$x741=&$x742[0];list(,$W741,$S741,$U741)=$x742;unset($x743,$W743,$S743,$U743);$x744=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$leThis,JS::toString(\'length\',$global),237,43,\'<image>/05_string.js\');$x743=&$x744[0];list(,$W743,$S743,$U743)=$x744;$x746=(((gettype($_limit)===gettype(JS::$undefined)&&$_limit===JS::$undefined))||(((is_float($_limit)||is_int($_limit))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_limit==JS::$undefined));if(JS::toBoolean($x746,$global)){unset($x747,$W747,$S747,$U747);$x748=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$leThis,JS::toString(\'length\',$global),237,78,\'<image>/05_string.js\');$x747=&$x748[0];list(,$W747,$S747,$U747)=$x748;$x745=$x747;}else{$x745=$_limit;}if(!(is_object($x741)&&isset($x741->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x751=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),237,38,\'<image>/05_string.js\');$_TypeError=&$x751[0];list(,$WTypeError,$STypeError,$UTypeError)=$x751;$x752=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,38);$x753=$x752($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x753->class)&&$x753->class===\'Error\'&&!isset($x753->properties[\'file\'])&&!isset($x753->properties[\'line\'])&&!isset($x753->properties[\'column\'])){$x753->properties[\'file\']=\'<image>/05_string.js\';$x753->properties[\'line\']=237;$x753->properties[\'column\']=38;$x753->attributes[\'file\']=$x753->attributes[\'line\']=$x753->attributes[\'column\']=0;}throw new JSException($x753,237,38,\'<image>/05_string.js\');}$x749=$x741->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,38);$x750=$x749($global,$x737,$x741,array($x743,$x745),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x750;}if($x732!==0){$x754=++$_i;}$x755=JS::toPrimitive($_i,$global);$x756=JS::toPrimitive($_l,$global);$x757=(is_string($x755)&&is_string($x756)?strcmp($x755,$x756)<0:(!is_nan($x758=JS::toNumber($x755,$global))&&!is_nan($x759=JS::toNumber($x756,$global))&&$x758<$x759));if(!JS::toBoolean($x757,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x761=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),238,29,\'<image>/05_string.js\');$_TypeError=&$x761[0];list(,$WTypeError,$STypeError,$UTypeError)=$x761;$x762=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',238,29);$x763=$x762($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x763->class)&&$x763->class===\'Error\'&&!isset($x763->properties[\'file\'])&&!isset($x763->properties[\'line\'])&&!isset($x763->properties[\'column\'])){$x763->properties[\'file\']=\'<image>/05_string.js\';$x763->properties[\'line\']=238;$x763->properties[\'column\']=29;$x763->attributes[\'file\']=$x763->attributes[\'line\']=$x763->attributes[\'column\']=0;}throw new JSException($x763,238,29,\'<image>/05_string.js\');}$x760=JS::toObject($_returnArray,$global);unset($x764,$W764,$S764,$U764);$x765=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x760,JS::toString(\'push\',$global),238,29,\'<image>/05_string.js\');$x764=&$x765[0];list(,$W764,$S764,$U764)=$x765;if(!(is_object($x764)&&isset($x764->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x768=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),238,29,\'<image>/05_string.js\');$_TypeError=&$x768[0];list(,$WTypeError,$STypeError,$UTypeError)=$x768;$x769=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',238,29);$x770=$x769($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x770->class)&&$x770->class===\'Error\'&&!isset($x770->properties[\'file\'])&&!isset($x770->properties[\'line\'])&&!isset($x770->properties[\'column\'])){$x770->properties[\'file\']=\'<image>/05_string.js\';$x770->properties[\'line\']=238;$x770->properties[\'column\']=29;$x770->attributes[\'file\']=$x770->attributes[\'line\']=$x770->attributes[\'column\']=0;}throw new JSException($x770,238,29,\'<image>/05_string.js\');}$x766=$x764->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',238,29);$x767=$x766($global,$x760,$x764,array((string)mb_substr($leThis->value,$_i,1)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;}$x771=(((gettype($_limit)===gettype(JS::$undefined)&&$_limit===JS::$undefined))||(((is_float($_limit)||is_int($_limit))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_limit==JS::$undefined));if(JS::toBoolean($x771,$global)){return JS::fromNative(explode($_separator,$leThis->value));}else{$scope->properties[\'tmpArray\']=JS::$undefined;$_tmpArray=&$scope->properties[\'tmpArray\'];$UtmpArray=FALSE;$_tmpArray=JS::fromNative(explode($_separator,$leThis->value,$_limit+1));if($_tmpArray===JS::$undefined||$_tmpArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x773=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),246,34,\'<image>/05_string.js\');$_TypeError=&$x773[0];list(,$WTypeError,$STypeError,$UTypeError)=$x773;$x774=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',246,34);$x775=$x774($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x775->class)&&$x775->class===\'Error\'&&!isset($x775->properties[\'file\'])&&!isset($x775->properties[\'line\'])&&!isset($x775->properties[\'column\'])){$x775->properties[\'file\']=\'<image>/05_string.js\';$x775->properties[\'line\']=246;$x775->properties[\'column\']=34;$x775->attributes[\'file\']=$x775->attributes[\'line\']=$x775->attributes[\'column\']=0;}throw new JSException($x775,246,34,\'<image>/05_string.js\');}$x772=JS::toObject($_tmpArray,$global);unset($x776,$W776,$S776,$U776);$x777=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x772,JS::toString(\'slice\',$global),246,34,\'<image>/05_string.js\');$x776=&$x777[0];list(,$W776,$S776,$U776)=$x777;unset($_Math,$WMath,$SMath,$UMath);$x778=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'Math\',$global),246,38,\'<image>/05_string.js\');$_Math=&$x778[0];list(,$WMath,$SMath,$UMath)=$x778;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x779=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),246,38,\'<image>/05_string.js\');$_ReferenceError=&$x779[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x779;$x780=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',246,38);$x781=$x780($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x781->class)&&$x781->class===\'Error\'&&!isset($x781->properties[\'file\'])&&!isset($x781->properties[\'line\'])&&!isset($x781->properties[\'column\'])){$x781->properties[\'file\']=\'<image>/05_string.js\';$x781->properties[\'line\']=246;$x781->properties[\'column\']=38;$x781->attributes[\'file\']=$x781->attributes[\'line\']=$x781->attributes[\'column\']=0;}throw new JSException($x781,246,38,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x783=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),246,46,\'<image>/05_string.js\');$_TypeError=&$x783[0];list(,$WTypeError,$STypeError,$UTypeError)=$x783;$x784=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',246,46);$x785=$x784($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x785->class)&&$x785->class===\'Error\'&&!isset($x785->properties[\'file\'])&&!isset($x785->properties[\'line\'])&&!isset($x785->properties[\'column\'])){$x785->properties[\'file\']=\'<image>/05_string.js\';$x785->properties[\'line\']=246;$x785->properties[\'column\']=46;$x785->attributes[\'file\']=$x785->attributes[\'line\']=$x785->attributes[\'column\']=0;}throw new JSException($x785,246,46,\'<image>/05_string.js\');}$x782=JS::toObject($_Math,$global);unset($x786,$W786,$S786,$U786);$x787=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x782,JS::toString(\'min\',$global),246,46,\'<image>/05_string.js\');$x786=&$x787[0];list(,$W786,$S786,$U786)=$x787;unset($x788,$W788,$S788,$U788);$x789=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_tmpArray,JS::toString(\'length\',$global),246,62,\'<image>/05_string.js\');$x788=&$x789[0];list(,$W788,$S788,$U788)=$x789;if(!(is_object($x786)&&isset($x786->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x792=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),246,46,\'<image>/05_string.js\');$_TypeError=&$x792[0];list(,$WTypeError,$STypeError,$UTypeError)=$x792;$x793=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',246,46);$x794=$x793($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x794->class)&&$x794->class===\'Error\'&&!isset($x794->properties[\'file\'])&&!isset($x794->properties[\'line\'])&&!isset($x794->properties[\'column\'])){$x794->properties[\'file\']=\'<image>/05_string.js\';$x794->properties[\'line\']=246;$x794->properties[\'column\']=46;$x794->attributes[\'file\']=$x794->attributes[\'line\']=$x794->attributes[\'column\']=0;}throw new JSException($x794,246,46,\'<image>/05_string.js\');}$x790=$x786->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',246,46);$x791=$x790($global,$x782,$x786,array($_limit,$x788),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x776)&&isset($x776->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x797=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),246,34,\'<image>/05_string.js\');$_TypeError=&$x797[0];list(,$WTypeError,$STypeError,$UTypeError)=$x797;$x798=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',246,34);$x799=$x798($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x799->class)&&$x799->class===\'Error\'&&!isset($x799->properties[\'file\'])&&!isset($x799->properties[\'line\'])&&!isset($x799->properties[\'column\'])){$x799->properties[\'file\']=\'<image>/05_string.js\';$x799->properties[\'line\']=246;$x799->properties[\'column\']=34;$x799->attributes[\'file\']=$x799->attributes[\'line\']=$x799->attributes[\'column\']=0;}throw new JSException($x799,246,34,\'<image>/05_string.js\');}$x795=$x776->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',246,34);$x796=$x795($global,$x772,$x776,array(0.0,$x791),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x796;}}else{unset($x804,$W804,$S804,$U804);$x805=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_separator,JS::toString(\'source\',$global),249,39,\'<image>/05_string.js\');$x804=&$x805[0];list(,$W804,$S804,$U804)=$x805;$x802=JS::toPrimitive(\'/\',$global);$x803=JS::toPrimitive($x804,$global);$x800=JS::toPrimitive((is_string($x802)||is_string($x803)?JS::toString($x802,$global).JS::toString($x803,$global):JS::toNumber($x802,$global)+JS::toNumber($x803,$global)),$global);$x801=JS::toPrimitive(\'/\',$global);$scope->properties[\'pattern\']=JS::$undefined;$_pattern=&$scope->properties[\'pattern\'];$Upattern=FALSE;$_pattern=(is_string($x800)||is_string($x801)?JS::toString($x800,$global).JS::toString($x801,$global):JS::toNumber($x800,$global)+JS::toNumber($x801,$global));$x806=(((gettype($_limit)===gettype(JS::$undefined)&&$_limit===JS::$undefined))||(((is_float($_limit)||is_int($_limit))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_limit==JS::$undefined));if(JS::toBoolean($x806,$global)){return JS::fromNative(preg_split($_pattern,$leThis->value));}else{$scope->properties[\'tmpArray\']=JS::$undefined;$_tmpArray=&$scope->properties[\'tmpArray\'];$UtmpArray=FALSE;$_tmpArray=JS::fromNative(preg_split($_pattern,$leThis->value,$_limit+1));if($_tmpArray===JS::$undefined||$_tmpArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x808=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),254,31,\'<image>/05_string.js\');$_TypeError=&$x808[0];list(,$WTypeError,$STypeError,$UTypeError)=$x808;$x809=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',254,31);$x810=$x809($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x810->class)&&$x810->class===\'Error\'&&!isset($x810->properties[\'file\'])&&!isset($x810->properties[\'line\'])&&!isset($x810->properties[\'column\'])){$x810->properties[\'file\']=\'<image>/05_string.js\';$x810->properties[\'line\']=254;$x810->properties[\'column\']=31;$x810->attributes[\'file\']=$x810->attributes[\'line\']=$x810->attributes[\'column\']=0;}throw new JSException($x810,254,31,\'<image>/05_string.js\');}$x807=JS::toObject($_tmpArray,$global);unset($x811,$W811,$S811,$U811);$x812=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x807,JS::toString(\'slice\',$global),254,31,\'<image>/05_string.js\');$x811=&$x812[0];list(,$W811,$S811,$U811)=$x812;unset($_Math,$WMath,$SMath,$UMath);$x813=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'Math\',$global),254,35,\'<image>/05_string.js\');$_Math=&$x813[0];list(,$WMath,$SMath,$UMath)=$x813;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x814=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),254,35,\'<image>/05_string.js\');$_ReferenceError=&$x814[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x814;$x815=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',254,35);$x816=$x815($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x816->class)&&$x816->class===\'Error\'&&!isset($x816->properties[\'file\'])&&!isset($x816->properties[\'line\'])&&!isset($x816->properties[\'column\'])){$x816->properties[\'file\']=\'<image>/05_string.js\';$x816->properties[\'line\']=254;$x816->properties[\'column\']=35;$x816->attributes[\'file\']=$x816->attributes[\'line\']=$x816->attributes[\'column\']=0;}throw new JSException($x816,254,35,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x818=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),254,43,\'<image>/05_string.js\');$_TypeError=&$x818[0];list(,$WTypeError,$STypeError,$UTypeError)=$x818;$x819=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',254,43);$x820=$x819($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x820->class)&&$x820->class===\'Error\'&&!isset($x820->properties[\'file\'])&&!isset($x820->properties[\'line\'])&&!isset($x820->properties[\'column\'])){$x820->properties[\'file\']=\'<image>/05_string.js\';$x820->properties[\'line\']=254;$x820->properties[\'column\']=43;$x820->attributes[\'file\']=$x820->attributes[\'line\']=$x820->attributes[\'column\']=0;}throw new JSException($x820,254,43,\'<image>/05_string.js\');}$x817=JS::toObject($_Math,$global);unset($x821,$W821,$S821,$U821);$x822=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x817,JS::toString(\'min\',$global),254,43,\'<image>/05_string.js\');$x821=&$x822[0];list(,$W821,$S821,$U821)=$x822;unset($x823,$W823,$S823,$U823);$x824=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_tmpArray,JS::toString(\'length\',$global),254,59,\'<image>/05_string.js\');$x823=&$x824[0];list(,$W823,$S823,$U823)=$x824;if(!(is_object($x821)&&isset($x821->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x827=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),254,43,\'<image>/05_string.js\');$_TypeError=&$x827[0];list(,$WTypeError,$STypeError,$UTypeError)=$x827;$x828=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',254,43);$x829=$x828($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x829->class)&&$x829->class===\'Error\'&&!isset($x829->properties[\'file\'])&&!isset($x829->properties[\'line\'])&&!isset($x829->properties[\'column\'])){$x829->properties[\'file\']=\'<image>/05_string.js\';$x829->properties[\'line\']=254;$x829->properties[\'column\']=43;$x829->attributes[\'file\']=$x829->attributes[\'line\']=$x829->attributes[\'column\']=0;}throw new JSException($x829,254,43,\'<image>/05_string.js\');}$x825=$x821->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',254,43);$x826=$x825($global,$x817,$x821,array($_limit,$x823),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x811)&&isset($x811->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x832=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),254,31,\'<image>/05_string.js\');$_TypeError=&$x832[0];list(,$WTypeError,$STypeError,$UTypeError)=$x832;$x833=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',254,31);$x834=$x833($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x834->class)&&$x834->class===\'Error\'&&!isset($x834->properties[\'file\'])&&!isset($x834->properties[\'line\'])&&!isset($x834->properties[\'column\'])){$x834->properties[\'file\']=\'<image>/05_string.js\';$x834->properties[\'line\']=254;$x834->properties[\'column\']=31;$x834->attributes[\'file\']=$x834->attributes[\'line\']=$x834->attributes[\'column\']=0;}throw new JSException($x834,254,31,\'<image>/05_string.js\');}$x830=$x811->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',254,31);$x831=$x830($global,$x807,$x811,array(0.0,$x826),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x831;}}return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x849 =& $scope->properties['arguments'];
$x849->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x849->properties[$i] = $args[$i];
$x849->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x850 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x850, $global)) {
$x851 = 0.0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x851;;
};
$x852 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x852, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x853 = JS::toPrimitive($_start, $global);
$x854 = JS::toPrimitive(0.0, $global);
$x855 = (is_string($x853) && is_string($x854) ? strcmp($x853, $x854) < 0 : (!is_nan($x856 = JS::toNumber($x853, $global)) && !is_nan($x857 = JS::toNumber($x854, $global)) && $x856 < $x857));
if (JS::toBoolean($x855, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x858 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('Math', $global), 336, 11, '<image>/05_string.js');
$_Math =& $x858[0]; list(,$WMath,$SMath,$UMath) = $x858;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x859 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 336, 11, '<image>/05_string.js');
$_ReferenceError =& $x859[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x859;
$x860 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 336, 11);
$x861 = $x860($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x861->class) && $x861->class === 'Error' && !isset($x861->properties['file']) && !isset($x861->properties['line']) && !isset($x861->properties['column'])) {$x861->properties['file'] = '<image>/05_string.js';$x861->properties['line'] = 336;$x861->properties['column'] = 11;$x861->attributes['file'] = $x861->attributes['line'] = $x861->attributes['column'] = 0; }
throw new JSException($x861, 336, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x863 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 336, 19, '<image>/05_string.js');
$_TypeError =& $x863[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x863;
$x864 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 336, 19);
$x865 = $x864($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x865->class) && $x865->class === 'Error' && !isset($x865->properties['file']) && !isset($x865->properties['line']) && !isset($x865->properties['column'])) {$x865->properties['file'] = '<image>/05_string.js';$x865->properties['line'] = 336;$x865->properties['column'] = 19;$x865->attributes['file'] = $x865->attributes['line'] = $x865->attributes['column'] = 0; }
throw new JSException($x865, 336, 19, '<image>/05_string.js');
}
$x862 = JS::toObject($_Math, $global);
unset($x866, $W866, $S866, $U866);
$x867 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x862, JS::toString('max', $global), 336, 19, '<image>/05_string.js');
$x866 =& $x867[0]; list(,$W866,$S866,$U866) = $x867;
$x868 = JS::toPrimitive($_start, $global);
$x869 = JS::toPrimitive($_length, $global);
if (!(is_object($x866) && isset($x866->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x872 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 336, 19, '<image>/05_string.js');
$_TypeError =& $x872[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x872;
$x873 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 336, 19);
$x874 = $x873($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x874->class) && $x874->class === 'Error' && !isset($x874->properties['file']) && !isset($x874->properties['line']) && !isset($x874->properties['column'])) {$x874->properties['file'] = '<image>/05_string.js';$x874->properties['line'] = 336;$x874->properties['column'] = 19;$x874->attributes['file'] = $x874->attributes['line'] = $x874->attributes['column'] = 0; }
throw new JSException($x874, 336, 19, '<image>/05_string.js');
}
$x870 = $x866->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 336, 19);
$x871 = $x870($global, $x862, $x866, array((is_string($x868) || is_string($x869) ? JS::toString($x868, $global) . JS::toString($x869, $global) : JS::toNumber($x868, $global) + JS::toNumber($x869, $global)), 0.0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x871;;
};
$x875 = JS::toPrimitive($_end, $global);
$x876 = JS::toPrimitive(0.0, $global);
$x877 = (is_string($x875) && is_string($x876) ? strcmp($x875, $x876) < 0 : (!is_nan($x878 = JS::toNumber($x875, $global)) && !is_nan($x879 = JS::toNumber($x876, $global)) && $x878 < $x879));
if (JS::toBoolean($x877, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x880 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('Math', $global), 340, 9, '<image>/05_string.js');
$_Math =& $x880[0]; list(,$WMath,$SMath,$UMath) = $x880;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x881 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 340, 9, '<image>/05_string.js');
$_ReferenceError =& $x881[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x881;
$x882 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 340, 9);
$x883 = $x882($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x883->class) && $x883->class === 'Error' && !isset($x883->properties['file']) && !isset($x883->properties['line']) && !isset($x883->properties['column'])) {$x883->properties['file'] = '<image>/05_string.js';$x883->properties['line'] = 340;$x883->properties['column'] = 9;$x883->attributes['file'] = $x883->attributes['line'] = $x883->attributes['column'] = 0; }
throw new JSException($x883, 340, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x885 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 340, 17, '<image>/05_string.js');
$_TypeError =& $x885[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x885;
$x886 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 340, 17);
$x887 = $x886($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x887->class) && $x887->class === 'Error' && !isset($x887->properties['file']) && !isset($x887->properties['line']) && !isset($x887->properties['column'])) {$x887->properties['file'] = '<image>/05_string.js';$x887->properties['line'] = 340;$x887->properties['column'] = 17;$x887->attributes['file'] = $x887->attributes['line'] = $x887->attributes['column'] = 0; }
throw new JSException($x887, 340, 17, '<image>/05_string.js');
}
$x884 = JS::toObject($_Math, $global);
unset($x888, $W888, $S888, $U888);
$x889 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x884, JS::toString('max', $global), 340, 17, '<image>/05_string.js');
$x888 =& $x889[0]; list(,$W888,$S888,$U888) = $x889;
$x890 = JS::toPrimitive($_end, $global);
$x891 = JS::toPrimitive($_length, $global);
if (!(is_object($x888) && isset($x888->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x894 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 340, 17, '<image>/05_string.js');
$_TypeError =& $x894[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x894;
$x895 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 340, 17);
$x896 = $x895($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x896->class) && $x896->class === 'Error' && !isset($x896->properties['file']) && !isset($x896->properties['line']) && !isset($x896->properties['column'])) {$x896->properties['file'] = '<image>/05_string.js';$x896->properties['line'] = 340;$x896->properties['column'] = 17;$x896->attributes['file'] = $x896->attributes['line'] = $x896->attributes['column'] = 0; }
throw new JSException($x896, 340, 17, '<image>/05_string.js');
}
$x892 = $x888->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 340, 17);
$x893 = $x892($global, $x884, $x888, array((is_string($x890) || is_string($x891) ? JS::toString($x890, $global) . JS::toString($x891, $global) : JS::toNumber($x890, $global) + JS::toNumber($x891, $global)), 0.0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x893;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x897 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('Math', $global), 343, 10, '<image>/05_string.js');
$_Math =& $x897[0]; list(,$WMath,$SMath,$UMath) = $x897;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x898 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 343, 10, '<image>/05_string.js');
$_ReferenceError =& $x898[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x898;
$x899 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 343, 10);
$x900 = $x899($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x900->class) && $x900->class === 'Error' && !isset($x900->properties['file']) && !isset($x900->properties['line']) && !isset($x900->properties['column'])) {$x900->properties['file'] = '<image>/05_string.js';$x900->properties['line'] = 343;$x900->properties['column'] = 10;$x900->attributes['file'] = $x900->attributes['line'] = $x900->attributes['column'] = 0; }
throw new JSException($x900, 343, 10, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x902 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 343, 18, '<image>/05_string.js');
$_TypeError =& $x902[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x902;
$x903 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 343, 18);
$x904 = $x903($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x904->class) && $x904->class === 'Error' && !isset($x904->properties['file']) && !isset($x904->properties['line']) && !isset($x904->properties['column'])) {$x904->properties['file'] = '<image>/05_string.js';$x904->properties['line'] = 343;$x904->properties['column'] = 18;$x904->attributes['file'] = $x904->attributes['line'] = $x904->attributes['column'] = 0; }
throw new JSException($x904, 343, 18, '<image>/05_string.js');
}
$x901 = JS::toObject($_Math, $global);
unset($x905, $W905, $S905, $U905);
$x906 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x901, JS::toString('min', $global), 343, 18, '<image>/05_string.js');
$x905 =& $x906[0]; list(,$W905,$S905,$U905) = $x906;
if (!(is_object($x905) && isset($x905->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x909 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 343, 18, '<image>/05_string.js');
$_TypeError =& $x909[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x909;
$x910 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 343, 18);
$x911 = $x910($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x911->class) && $x911->class === 'Error' && !isset($x911->properties['file']) && !isset($x911->properties['line']) && !isset($x911->properties['column'])) {$x911->properties['file'] = '<image>/05_string.js';$x911->properties['line'] = 343;$x911->properties['column'] = 18;$x911->attributes['file'] = $x911->attributes['line'] = $x911->attributes['column'] = 0; }
throw new JSException($x911, 343, 18, '<image>/05_string.js');
}
$x907 = $x905->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 343, 18);
$x908 = $x907($global, $x901, $x905, array($_start, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x908;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x913 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 344, 16, '<image>/05_string.js');
$_TypeError =& $x913[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x913;
$x914 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 344, 16);
$x915 = $x914($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x915->class) && $x915->class === 'Error' && !isset($x915->properties['file']) && !isset($x915->properties['line']) && !isset($x915->properties['column'])) {$x915->properties['file'] = '<image>/05_string.js';$x915->properties['line'] = 344;$x915->properties['column'] = 16;$x915->attributes['file'] = $x915->attributes['line'] = $x915->attributes['column'] = 0; }
throw new JSException($x915, 344, 16, '<image>/05_string.js');
}
$x912 = JS::toObject($_Math, $global);
unset($x916, $W916, $S916, $U916);
$x917 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x912, JS::toString('min', $global), 344, 16, '<image>/05_string.js');
$x916 =& $x917[0]; list(,$W916,$S916,$U916) = $x917;
if (!(is_object($x916) && isset($x916->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x920 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 344, 16, '<image>/05_string.js');
$_TypeError =& $x920[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x920;
$x921 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 344, 16);
$x922 = $x921($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x922->class) && $x922->class === 'Error' && !isset($x922->properties['file']) && !isset($x922->properties['line']) && !isset($x922->properties['column'])) {$x922->properties['file'] = '<image>/05_string.js';$x922->properties['line'] = 344;$x922->properties['column'] = 16;$x922->attributes['file'] = $x922->attributes['line'] = $x922->attributes['column'] = 0; }
throw new JSException($x922, 344, 16, '<image>/05_string.js');
}
$x918 = $x916->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 344, 16);
$x919 = $x918($global, $x912, $x916, array($_end, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x919;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x924 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 346, 21, '<image>/05_string.js');
$_TypeError =& $x924[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x924;
$x925 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 346, 21);
$x926 = $x925($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x926->class) && $x926->class === 'Error' && !isset($x926->properties['file']) && !isset($x926->properties['line']) && !isset($x926->properties['column'])) {$x926->properties['file'] = '<image>/05_string.js';$x926->properties['line'] = 346;$x926->properties['column'] = 21;$x926->attributes['file'] = $x926->attributes['line'] = $x926->attributes['column'] = 0; }
throw new JSException($x926, 346, 21, '<image>/05_string.js');
}
$x923 = JS::toObject($_Math, $global);
unset($x927, $W927, $S927, $U927);
$x928 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x923, JS::toString('min', $global), 346, 21, '<image>/05_string.js');
$x927 =& $x928[0]; list(,$W927,$S927,$U927) = $x928;
if (!(is_object($x927) && isset($x927->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x931 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 346, 21, '<image>/05_string.js');
$_TypeError =& $x931[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x931;
$x932 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 346, 21);
$x933 = $x932($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x933->class) && $x933->class === 'Error' && !isset($x933->properties['file']) && !isset($x933->properties['line']) && !isset($x933->properties['column'])) {$x933->properties['file'] = '<image>/05_string.js';$x933->properties['line'] = 346;$x933->properties['column'] = 21;$x933->attributes['file'] = $x933->attributes['line'] = $x933->attributes['column'] = 0; }
throw new JSException($x933, 346, 21, '<image>/05_string.js');
}
$x929 = $x927->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 346, 21);
$x930 = $x929($global, $x923, $x927, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['from'] = JS::$undefined; $_from =& $scope->properties['from'];
$Ufrom = FALSE;
$_from = $x930;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x935 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 346, 48, '<image>/05_string.js');
$_TypeError =& $x935[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x935;
$x936 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 346, 48);
$x937 = $x936($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x937->class) && $x937->class === 'Error' && !isset($x937->properties['file']) && !isset($x937->properties['line']) && !isset($x937->properties['column'])) {$x937->properties['file'] = '<image>/05_string.js';$x937->properties['line'] = 346;$x937->properties['column'] = 48;$x937->attributes['file'] = $x937->attributes['line'] = $x937->attributes['column'] = 0; }
throw new JSException($x937, 346, 48, '<image>/05_string.js');
}
$x934 = JS::toObject($_Math, $global);
unset($x938, $W938, $S938, $U938);
$x939 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x934, JS::toString('max', $global), 346, 48, '<image>/05_string.js');
$x938 =& $x939[0]; list(,$W938,$S938,$U938) = $x939;
if (!(is_object($x938) && isset($x938->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x942 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 346, 48, '<image>/05_string.js');
$_TypeError =& $x942[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x942;
$x943 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 346, 48);
$x944 = $x943($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x944->class) && $x944->class === 'Error' && !isset($x944->properties['file']) && !isset($x944->properties['line']) && !isset($x944->properties['column'])) {$x944->properties['file'] = '<image>/05_string.js';$x944->properties['line'] = 346;$x944->properties['column'] = 48;$x944->attributes['file'] = $x944->attributes['line'] = $x944->attributes['column'] = 0; }
throw new JSException($x944, 346, 48, '<image>/05_string.js');
}
$x940 = $x938->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 346, 48);
$x941 = $x940($global, $x934, $x938, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['to'] = JS::$undefined; $_to =& $scope->properties['to'];
$Uto = FALSE;
$_to = $x941;
return (string) mb_substr($leThis->value,$_from,$_to-$_from);
;
return JS::$undefined;
}
echo 'function _d783f9f345d98dc295c060ae0345bc6a_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x849=&$scope->properties[\'arguments\'];$x849->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x849->properties[$i]=$args[$i];$x849->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=mb_strlen($leThis->value);$x850=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x850,$global)){$x851=0.0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x851;}$x852=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x852,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x853=JS::toPrimitive($_start,$global);$x854=JS::toPrimitive(0.0,$global);$x855=(is_string($x853)&&is_string($x854)?strcmp($x853,$x854)<0:(!is_nan($x856=JS::toNumber($x853,$global))&&!is_nan($x857=JS::toNumber($x854,$global))&&$x856<$x857));if(JS::toBoolean($x855,$global)){unset($_Math,$WMath,$SMath,$UMath);$x858=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'Math\',$global),336,11,\'<image>/05_string.js\');$_Math=&$x858[0];list(,$WMath,$SMath,$UMath)=$x858;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x859=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),336,11,\'<image>/05_string.js\');$_ReferenceError=&$x859[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x859;$x860=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',336,11);$x861=$x860($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x861->class)&&$x861->class===\'Error\'&&!isset($x861->properties[\'file\'])&&!isset($x861->properties[\'line\'])&&!isset($x861->properties[\'column\'])){$x861->properties[\'file\']=\'<image>/05_string.js\';$x861->properties[\'line\']=336;$x861->properties[\'column\']=11;$x861->attributes[\'file\']=$x861->attributes[\'line\']=$x861->attributes[\'column\']=0;}throw new JSException($x861,336,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x863=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),336,19,\'<image>/05_string.js\');$_TypeError=&$x863[0];list(,$WTypeError,$STypeError,$UTypeError)=$x863;$x864=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',336,19);$x865=$x864($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x865->class)&&$x865->class===\'Error\'&&!isset($x865->properties[\'file\'])&&!isset($x865->properties[\'line\'])&&!isset($x865->properties[\'column\'])){$x865->properties[\'file\']=\'<image>/05_string.js\';$x865->properties[\'line\']=336;$x865->properties[\'column\']=19;$x865->attributes[\'file\']=$x865->attributes[\'line\']=$x865->attributes[\'column\']=0;}throw new JSException($x865,336,19,\'<image>/05_string.js\');}$x862=JS::toObject($_Math,$global);unset($x866,$W866,$S866,$U866);$x867=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x862,JS::toString(\'max\',$global),336,19,\'<image>/05_string.js\');$x866=&$x867[0];list(,$W866,$S866,$U866)=$x867;$x868=JS::toPrimitive($_start,$global);$x869=JS::toPrimitive($_length,$global);if(!(is_object($x866)&&isset($x866->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x872=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),336,19,\'<image>/05_string.js\');$_TypeError=&$x872[0];list(,$WTypeError,$STypeError,$UTypeError)=$x872;$x873=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',336,19);$x874=$x873($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x874->class)&&$x874->class===\'Error\'&&!isset($x874->properties[\'file\'])&&!isset($x874->properties[\'line\'])&&!isset($x874->properties[\'column\'])){$x874->properties[\'file\']=\'<image>/05_string.js\';$x874->properties[\'line\']=336;$x874->properties[\'column\']=19;$x874->attributes[\'file\']=$x874->attributes[\'line\']=$x874->attributes[\'column\']=0;}throw new JSException($x874,336,19,\'<image>/05_string.js\');}$x870=$x866->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',336,19);$x871=$x870($global,$x862,$x866,array((is_string($x868)||is_string($x869)?JS::toString($x868,$global).JS::toString($x869,$global):JS::toNumber($x868,$global)+JS::toNumber($x869,$global)),0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x871;}$x875=JS::toPrimitive($_end,$global);$x876=JS::toPrimitive(0.0,$global);$x877=(is_string($x875)&&is_string($x876)?strcmp($x875,$x876)<0:(!is_nan($x878=JS::toNumber($x875,$global))&&!is_nan($x879=JS::toNumber($x876,$global))&&$x878<$x879));if(JS::toBoolean($x877,$global)){unset($_Math,$WMath,$SMath,$UMath);$x880=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'Math\',$global),340,9,\'<image>/05_string.js\');$_Math=&$x880[0];list(,$WMath,$SMath,$UMath)=$x880;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x881=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),340,9,\'<image>/05_string.js\');$_ReferenceError=&$x881[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x881;$x882=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',340,9);$x883=$x882($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x883->class)&&$x883->class===\'Error\'&&!isset($x883->properties[\'file\'])&&!isset($x883->properties[\'line\'])&&!isset($x883->properties[\'column\'])){$x883->properties[\'file\']=\'<image>/05_string.js\';$x883->properties[\'line\']=340;$x883->properties[\'column\']=9;$x883->attributes[\'file\']=$x883->attributes[\'line\']=$x883->attributes[\'column\']=0;}throw new JSException($x883,340,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x885=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),340,17,\'<image>/05_string.js\');$_TypeError=&$x885[0];list(,$WTypeError,$STypeError,$UTypeError)=$x885;$x886=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',340,17);$x887=$x886($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x887->class)&&$x887->class===\'Error\'&&!isset($x887->properties[\'file\'])&&!isset($x887->properties[\'line\'])&&!isset($x887->properties[\'column\'])){$x887->properties[\'file\']=\'<image>/05_string.js\';$x887->properties[\'line\']=340;$x887->properties[\'column\']=17;$x887->attributes[\'file\']=$x887->attributes[\'line\']=$x887->attributes[\'column\']=0;}throw new JSException($x887,340,17,\'<image>/05_string.js\');}$x884=JS::toObject($_Math,$global);unset($x888,$W888,$S888,$U888);$x889=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x884,JS::toString(\'max\',$global),340,17,\'<image>/05_string.js\');$x888=&$x889[0];list(,$W888,$S888,$U888)=$x889;$x890=JS::toPrimitive($_end,$global);$x891=JS::toPrimitive($_length,$global);if(!(is_object($x888)&&isset($x888->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x894=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),340,17,\'<image>/05_string.js\');$_TypeError=&$x894[0];list(,$WTypeError,$STypeError,$UTypeError)=$x894;$x895=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',340,17);$x896=$x895($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x896->class)&&$x896->class===\'Error\'&&!isset($x896->properties[\'file\'])&&!isset($x896->properties[\'line\'])&&!isset($x896->properties[\'column\'])){$x896->properties[\'file\']=\'<image>/05_string.js\';$x896->properties[\'line\']=340;$x896->properties[\'column\']=17;$x896->attributes[\'file\']=$x896->attributes[\'line\']=$x896->attributes[\'column\']=0;}throw new JSException($x896,340,17,\'<image>/05_string.js\');}$x892=$x888->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',340,17);$x893=$x892($global,$x884,$x888,array((is_string($x890)||is_string($x891)?JS::toString($x890,$global).JS::toString($x891,$global):JS::toNumber($x890,$global)+JS::toNumber($x891,$global)),0.0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x893;}unset($_Math,$WMath,$SMath,$UMath);$x897=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'Math\',$global),343,10,\'<image>/05_string.js\');$_Math=&$x897[0];list(,$WMath,$SMath,$UMath)=$x897;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x898=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),343,10,\'<image>/05_string.js\');$_ReferenceError=&$x898[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x898;$x899=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',343,10);$x900=$x899($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x900->class)&&$x900->class===\'Error\'&&!isset($x900->properties[\'file\'])&&!isset($x900->properties[\'line\'])&&!isset($x900->properties[\'column\'])){$x900->properties[\'file\']=\'<image>/05_string.js\';$x900->properties[\'line\']=343;$x900->properties[\'column\']=10;$x900->attributes[\'file\']=$x900->attributes[\'line\']=$x900->attributes[\'column\']=0;}throw new JSException($x900,343,10,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x902=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),343,18,\'<image>/05_string.js\');$_TypeError=&$x902[0];list(,$WTypeError,$STypeError,$UTypeError)=$x902;$x903=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',343,18);$x904=$x903($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x904->class)&&$x904->class===\'Error\'&&!isset($x904->properties[\'file\'])&&!isset($x904->properties[\'line\'])&&!isset($x904->properties[\'column\'])){$x904->properties[\'file\']=\'<image>/05_string.js\';$x904->properties[\'line\']=343;$x904->properties[\'column\']=18;$x904->attributes[\'file\']=$x904->attributes[\'line\']=$x904->attributes[\'column\']=0;}throw new JSException($x904,343,18,\'<image>/05_string.js\');}$x901=JS::toObject($_Math,$global);unset($x905,$W905,$S905,$U905);$x906=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x901,JS::toString(\'min\',$global),343,18,\'<image>/05_string.js\');$x905=&$x906[0];list(,$W905,$S905,$U905)=$x906;if(!(is_object($x905)&&isset($x905->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x909=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),343,18,\'<image>/05_string.js\');$_TypeError=&$x909[0];list(,$WTypeError,$STypeError,$UTypeError)=$x909;$x910=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',343,18);$x911=$x910($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x911->class)&&$x911->class===\'Error\'&&!isset($x911->properties[\'file\'])&&!isset($x911->properties[\'line\'])&&!isset($x911->properties[\'column\'])){$x911->properties[\'file\']=\'<image>/05_string.js\';$x911->properties[\'line\']=343;$x911->properties[\'column\']=18;$x911->attributes[\'file\']=$x911->attributes[\'line\']=$x911->attributes[\'column\']=0;}throw new JSException($x911,343,18,\'<image>/05_string.js\');}$x907=$x905->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',343,18);$x908=$x907($global,$x901,$x905,array($_start,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x908;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x913=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),344,16,\'<image>/05_string.js\');$_TypeError=&$x913[0];list(,$WTypeError,$STypeError,$UTypeError)=$x913;$x914=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',344,16);$x915=$x914($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x915->class)&&$x915->class===\'Error\'&&!isset($x915->properties[\'file\'])&&!isset($x915->properties[\'line\'])&&!isset($x915->properties[\'column\'])){$x915->properties[\'file\']=\'<image>/05_string.js\';$x915->properties[\'line\']=344;$x915->properties[\'column\']=16;$x915->attributes[\'file\']=$x915->attributes[\'line\']=$x915->attributes[\'column\']=0;}throw new JSException($x915,344,16,\'<image>/05_string.js\');}$x912=JS::toObject($_Math,$global);unset($x916,$W916,$S916,$U916);$x917=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x912,JS::toString(\'min\',$global),344,16,\'<image>/05_string.js\');$x916=&$x917[0];list(,$W916,$S916,$U916)=$x917;if(!(is_object($x916)&&isset($x916->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x920=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),344,16,\'<image>/05_string.js\');$_TypeError=&$x920[0];list(,$WTypeError,$STypeError,$UTypeError)=$x920;$x921=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',344,16);$x922=$x921($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x922->class)&&$x922->class===\'Error\'&&!isset($x922->properties[\'file\'])&&!isset($x922->properties[\'line\'])&&!isset($x922->properties[\'column\'])){$x922->properties[\'file\']=\'<image>/05_string.js\';$x922->properties[\'line\']=344;$x922->properties[\'column\']=16;$x922->attributes[\'file\']=$x922->attributes[\'line\']=$x922->attributes[\'column\']=0;}throw new JSException($x922,344,16,\'<image>/05_string.js\');}$x918=$x916->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',344,16);$x919=$x918($global,$x912,$x916,array($_end,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x919;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x924=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),346,21,\'<image>/05_string.js\');$_TypeError=&$x924[0];list(,$WTypeError,$STypeError,$UTypeError)=$x924;$x925=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',346,21);$x926=$x925($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x926->class)&&$x926->class===\'Error\'&&!isset($x926->properties[\'file\'])&&!isset($x926->properties[\'line\'])&&!isset($x926->properties[\'column\'])){$x926->properties[\'file\']=\'<image>/05_string.js\';$x926->properties[\'line\']=346;$x926->properties[\'column\']=21;$x926->attributes[\'file\']=$x926->attributes[\'line\']=$x926->attributes[\'column\']=0;}throw new JSException($x926,346,21,\'<image>/05_string.js\');}$x923=JS::toObject($_Math,$global);unset($x927,$W927,$S927,$U927);$x928=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x923,JS::toString(\'min\',$global),346,21,\'<image>/05_string.js\');$x927=&$x928[0];list(,$W927,$S927,$U927)=$x928;if(!(is_object($x927)&&isset($x927->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x931=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),346,21,\'<image>/05_string.js\');$_TypeError=&$x931[0];list(,$WTypeError,$STypeError,$UTypeError)=$x931;$x932=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',346,21);$x933=$x932($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x933->class)&&$x933->class===\'Error\'&&!isset($x933->properties[\'file\'])&&!isset($x933->properties[\'line\'])&&!isset($x933->properties[\'column\'])){$x933->properties[\'file\']=\'<image>/05_string.js\';$x933->properties[\'line\']=346;$x933->properties[\'column\']=21;$x933->attributes[\'file\']=$x933->attributes[\'line\']=$x933->attributes[\'column\']=0;}throw new JSException($x933,346,21,\'<image>/05_string.js\');}$x929=$x927->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',346,21);$x930=$x929($global,$x923,$x927,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'from\']=JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$_from=$x930;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x935=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),346,48,\'<image>/05_string.js\');$_TypeError=&$x935[0];list(,$WTypeError,$STypeError,$UTypeError)=$x935;$x936=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',346,48);$x937=$x936($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x937->class)&&$x937->class===\'Error\'&&!isset($x937->properties[\'file\'])&&!isset($x937->properties[\'line\'])&&!isset($x937->properties[\'column\'])){$x937->properties[\'file\']=\'<image>/05_string.js\';$x937->properties[\'line\']=346;$x937->properties[\'column\']=48;$x937->attributes[\'file\']=$x937->attributes[\'line\']=$x937->attributes[\'column\']=0;}throw new JSException($x937,346,48,\'<image>/05_string.js\');}$x934=JS::toObject($_Math,$global);unset($x938,$W938,$S938,$U938);$x939=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x934,JS::toString(\'max\',$global),346,48,\'<image>/05_string.js\');$x938=&$x939[0];list(,$W938,$S938,$U938)=$x939;if(!(is_object($x938)&&isset($x938->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x942=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),346,48,\'<image>/05_string.js\');$_TypeError=&$x942[0];list(,$WTypeError,$STypeError,$UTypeError)=$x942;$x943=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',346,48);$x944=$x943($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x944->class)&&$x944->class===\'Error\'&&!isset($x944->properties[\'file\'])&&!isset($x944->properties[\'line\'])&&!isset($x944->properties[\'column\'])){$x944->properties[\'file\']=\'<image>/05_string.js\';$x944->properties[\'line\']=346;$x944->properties[\'column\']=48;$x944->attributes[\'file\']=$x944->attributes[\'line\']=$x944->attributes[\'column\']=0;}throw new JSException($x944,346,48,\'<image>/05_string.js\');}$x940=$x938->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',346,48);$x941=$x940($global,$x934,$x938,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'to\']=JS::$undefined;$_to=&$scope->properties[\'to\'];$Uto=FALSE;$_to=$x941;return(string)mb_substr($leThis->value,$_from,$_to-$_from);return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x959 =& $scope->properties['arguments'];
$x959->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x959->properties[$i] = $args[$i];
$x959->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['length'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_length =& $scope->properties['length'];
$Ulength = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x960 = (((gettype($_length) === gettype(JS::$undefined) && $_length === JS::$undefined))|| (((is_float($_length) || is_int($_length)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_length == JS::$undefined));
if (JS::toBoolean($x960, $global)) {

return mb_substr($leThis->value,$_start);;
};
return (string) mb_substr($leThis->value,$_start,$_length);
;
return JS::$undefined;
}
echo 'function _d783f9f345d98dc295c060ae0345bc6a_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x959=&$scope->properties[\'arguments\'];$x959->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x959->properties[$i]=$args[$i];$x959->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'length\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$global->scope[++$global->scope_sp]=$scope;$x960=(((gettype($_length)===gettype(JS::$undefined)&&$_length===JS::$undefined))||(((is_float($_length)||is_int($_length))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_length==JS::$undefined));if(JS::toBoolean($x960,$global)){return mb_substr($leThis->value,$_start);}return(string)mb_substr($leThis->value,$_start,$_length);return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x975 =& $scope->properties['arguments'];
$x975->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x975->properties[$i] = $args[$i];
$x975->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return mb_strtolower($leThis->value);
;
return JS::$undefined;
}
echo 'function _d783f9f345d98dc295c060ae0345bc6a_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x975=&$scope->properties[\'arguments\'];$x975->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x975->properties[$i]=$args[$i];$x975->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return mb_strtolower($leThis->value);return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1006 =& $scope->properties['arguments'];
$x1006->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1006->properties[$i] = $args[$i];
$x1006->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return mb_strtoupper($leThis->value);
;
return JS::$undefined;
}
echo 'function _d783f9f345d98dc295c060ae0345bc6a_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1006=&$scope->properties[\'arguments\'];$x1006->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1006->properties[$i]=$args[$i];$x1006->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return mb_strtoupper($leThis->value);return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1037 =& $scope->properties['arguments'];
$x1037->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1037->properties[$i] = $args[$i];
$x1037->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return trim($leThis->value);
;
return JS::$undefined;
}
echo 'function _d783f9f345d98dc295c060ae0345bc6a_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1037=&$scope->properties[\'arguments\'];$x1037->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1037->properties[$i]=$args[$i];$x1037->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return trim($leThis->value);return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_24($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1052 =& $scope->properties['arguments'];
$x1052->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1052->properties[$i] = $args[$i];
$x1052->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['start'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1054 = $_start;
$x1054 = ($x1054 === JS::$undefined ? 'undefined' : (is_int($x1054) || is_float($x1054) ? 'number' : (is_bool($x1054) ? 'boolean' : (is_string($x1054) ? 'string' : (is_object($x1054) && isset($x1054->call) ? 'function' : 'object')))));
$x1053 = !(((gettype($x1054) === gettype('number') && $x1054 === 'number'))|| (((is_float($x1054) || is_int($x1054)) && (is_float('number') || is_int('number'))) && $x1054 == 'number'));
if (JS::toBoolean($x1053, $global)) {
$x1055 = 0.0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x1055;;
};
unset($x1061, $W1061, $S1061, $U1061);
$x1062 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_search, JS::toString('length', $global), 382, 22, '<image>/05_string.js');
$x1061 =& $x1062[0]; list(,$W1061,$S1061,$U1061) = $x1062;
$x1059 = JS::toPrimitive($_start, $global);
$x1060 = JS::toPrimitive($x1061, $global);
unset($x1063, $W1063, $S1063, $U1063);
$x1064 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $leThis, JS::toString('length', $global), 382, 36, '<image>/05_string.js');
$x1063 =& $x1064[0]; list(,$W1063,$S1063,$U1063) = $x1064;
$x1056 = JS::toPrimitive((is_string($x1059) || is_string($x1060) ? JS::toString($x1059, $global) . JS::toString($x1060, $global) : JS::toNumber($x1059, $global) + JS::toNumber($x1060, $global)), $global);
$x1057 = JS::toPrimitive($x1063, $global);
$x1058 = (is_string($x1057) && is_string($x1056) ? strcmp($x1057, $x1056) < 0 : (!is_nan($x1065 = JS::toNumber($x1057, $global)) && !is_nan($x1066 = JS::toNumber($x1056, $global)) && $x1065 < $x1066));
if (JS::toBoolean($x1058, $global)) {

return false;;
}
else {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1069 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 385, 26, '<image>/05_string.js');
$_TypeError =& $x1069[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1069;
$x1070 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 385, 26);
$x1071 = $x1070($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1071->class) && $x1071->class === 'Error' && !isset($x1071->properties['file']) && !isset($x1071->properties['line']) && !isset($x1071->properties['column'])) {$x1071->properties['file'] = '<image>/05_string.js';$x1071->properties['line'] = 385;$x1071->properties['column'] = 26;$x1071->attributes['file'] = $x1071->attributes['line'] = $x1071->attributes['column'] = 0; }
throw new JSException($x1071, 385, 26, '<image>/05_string.js');
}
$x1068 = JS::toObject($leThis, $global);
unset($x1072, $W1072, $S1072, $U1072);
$x1073 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x1068, JS::toString('indexOf', $global), 385, 26, '<image>/05_string.js');
$x1072 =& $x1073[0]; list(,$W1072,$S1072,$U1072) = $x1073;
if (!(is_object($x1072) && isset($x1072->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1076 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 385, 26, '<image>/05_string.js');
$_TypeError =& $x1076[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1076;
$x1077 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 385, 26);
$x1078 = $x1077($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1078->class) && $x1078->class === 'Error' && !isset($x1078->properties['file']) && !isset($x1078->properties['line']) && !isset($x1078->properties['column'])) {$x1078->properties['file'] = '<image>/05_string.js';$x1078->properties['line'] = 385;$x1078->properties['column'] = 26;$x1078->attributes['file'] = $x1078->attributes['line'] = $x1078->attributes['column'] = 0; }
throw new JSException($x1078, 385, 26, '<image>/05_string.js');
}
$x1074 = $x1072->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 385, 26);
$x1075 = $x1074($global, $x1068, $x1072, array($_search, $_start), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1067 = !(((gettype($x1075) === gettype((-1.0 * JS::toNumber(1.0, $global))) && $x1075 === (-1.0 * JS::toNumber(1.0, $global))))|| (((is_float($x1075) || is_int($x1075)) && (is_float((-1.0 * JS::toNumber(1.0, $global))) || is_int((-1.0 * JS::toNumber(1.0, $global))))) && $x1075 == (-1.0 * JS::toNumber(1.0, $global))));
return $x1067;;
};
;
return JS::$undefined;
}
echo 'function _d783f9f345d98dc295c060ae0345bc6a_24($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1052=&$scope->properties[\'arguments\'];$x1052->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1052->properties[$i]=$args[$i];$x1052->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'start\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1054=$_start;$x1054=($x1054===JS::$undefined?\'undefined\':(is_int($x1054)||is_float($x1054)?\'number\':(is_bool($x1054)?\'boolean\':(is_string($x1054)?\'string\':(is_object($x1054)&&isset($x1054->call)?\'function\':\'object\')))));$x1053=!(((gettype($x1054)===gettype(\'number\')&&$x1054===\'number\'))||(((is_float($x1054)||is_int($x1054))&&(is_float(\'number\')||is_int(\'number\')))&&$x1054==\'number\'));if(JS::toBoolean($x1053,$global)){$x1055=0.0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x1055;}unset($x1061,$W1061,$S1061,$U1061);$x1062=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$_search,JS::toString(\'length\',$global),382,22,\'<image>/05_string.js\');$x1061=&$x1062[0];list(,$W1061,$S1061,$U1061)=$x1062;$x1059=JS::toPrimitive($_start,$global);$x1060=JS::toPrimitive($x1061,$global);unset($x1063,$W1063,$S1063,$U1063);$x1064=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$leThis,JS::toString(\'length\',$global),382,36,\'<image>/05_string.js\');$x1063=&$x1064[0];list(,$W1063,$S1063,$U1063)=$x1064;$x1056=JS::toPrimitive((is_string($x1059)||is_string($x1060)?JS::toString($x1059,$global).JS::toString($x1060,$global):JS::toNumber($x1059,$global)+JS::toNumber($x1060,$global)),$global);$x1057=JS::toPrimitive($x1063,$global);$x1058=(is_string($x1057)&&is_string($x1056)?strcmp($x1057,$x1056)<0:(!is_nan($x1065=JS::toNumber($x1057,$global))&&!is_nan($x1066=JS::toNumber($x1056,$global))&&$x1065<$x1066));if(JS::toBoolean($x1058,$global)){return false;}else{if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1069=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),385,26,\'<image>/05_string.js\');$_TypeError=&$x1069[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1069;$x1070=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',385,26);$x1071=$x1070($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1071->class)&&$x1071->class===\'Error\'&&!isset($x1071->properties[\'file\'])&&!isset($x1071->properties[\'line\'])&&!isset($x1071->properties[\'column\'])){$x1071->properties[\'file\']=\'<image>/05_string.js\';$x1071->properties[\'line\']=385;$x1071->properties[\'column\']=26;$x1071->attributes[\'file\']=$x1071->attributes[\'line\']=$x1071->attributes[\'column\']=0;}throw new JSException($x1071,385,26,\'<image>/05_string.js\');}$x1068=JS::toObject($leThis,$global);unset($x1072,$W1072,$S1072,$U1072);$x1073=_d783f9f345d98dc295c060ae0345bc6a_4($global,$scope,$x1068,JS::toString(\'indexOf\',$global),385,26,\'<image>/05_string.js\');$x1072=&$x1073[0];list(,$W1072,$S1072,$U1072)=$x1073;if(!(is_object($x1072)&&isset($x1072->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1076=_d783f9f345d98dc295c060ae0345bc6a_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),385,26,\'<image>/05_string.js\');$_TypeError=&$x1076[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1076;$x1077=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',385,26);$x1078=$x1077($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1078->class)&&$x1078->class===\'Error\'&&!isset($x1078->properties[\'file\'])&&!isset($x1078->properties[\'line\'])&&!isset($x1078->properties[\'column\'])){$x1078->properties[\'file\']=\'<image>/05_string.js\';$x1078->properties[\'line\']=385;$x1078->properties[\'column\']=26;$x1078->attributes[\'file\']=$x1078->attributes[\'line\']=$x1078->attributes[\'column\']=0;}throw new JSException($x1078,385,26,\'<image>/05_string.js\');}$x1074=$x1072->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',385,26);$x1075=$x1074($global,$x1068,$x1072,array($_search,$_start),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1067=!(((gettype($x1075)===gettype((-1.0*JS::toNumber(1.0,$global)))&&$x1075===(-1.0*JS::toNumber(1.0,$global))))||(((is_float($x1075)||is_int($x1075))&&(is_float((-1.0*JS::toNumber(1.0,$global)))||is_int((-1.0*JS::toNumber(1.0,$global)))))&&$x1075==(-1.0*JS::toNumber(1.0,$global))));return$x1067;}return JS::$undefined;}', "\n";
function _d783f9f345d98dc295c060ae0345bc6a_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/05_string.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/05_string.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_String;
$x4 = clone JS::$functionTemplate; $x4->call = '_d783f9f345d98dc295c060ae0345bc6a_1'; $x4->parameters = array (
  0 => 'value',
); $x4->name = 'String'; $x4->scope = $scope; $x4->properties['prototype'] = clone JS::$objectTemplate; $x4->attributes['prototype'] = JS::WRITABLE; $x4->properties['prototype']->properties['constructor'] = $x4; $x4->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x4->properties['length'] = 1; $x4->attributes['length'] = 0;
$scope->properties['String'] = JS::$undefined; $_String =& $scope->properties['String'];
$UString = FALSE;
$_String = $x4;
$x32 = clone JS::$functionTemplate; $x32->call = '_d783f9f345d98dc295c060ae0345bc6a_2'; $x32->parameters = array (
  0 => 'c',
); $x32->scope = $scope; $x32->properties['prototype'] = clone JS::$objectTemplate; $x32->attributes['prototype'] = JS::WRITABLE; $x32->properties['prototype']->properties['constructor'] = $x32; $x32->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x32->properties['length'] = 1; $x32->attributes['length'] = 0;
$x33 = JS::toString('fromCharCode', $global);
if ($_String === JS::$undefined || $_String === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x34 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 16, 21, '<image>/05_string.js');
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
$x41 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $_String, JS::toString($x33, $global), 16, 21, '<image>/05_string.js');
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
$x48 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 27, 18, '<image>/05_string.js');
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
$x52 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $_String, JS::toString($x47, $global), 27, 18, '<image>/05_string.js');
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
$x57 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('Object', $global), 28, 51, '<image>/05_string.js');
$_Object =& $x57[0]; list(,$WObject,$SObject,$UObject) = $x57;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x58 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 28, 51, '<image>/05_string.js');
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
$x62 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 31, 7, '<image>/05_string.js');
$x61 =& $x62[0]; list(,$W61,$S61,$U61) = $x62;
$x63 = JS::toString('constructor', $global);
if ($x61 === JS::$undefined || $x61 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x64 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 31, 30, '<image>/05_string.js');
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
$x68 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x61, JS::toString($x63, $global), 31, 30, '<image>/05_string.js');
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
$x87 = clone JS::$functionTemplate; $x87->call = '_d783f9f345d98dc295c060ae0345bc6a_6'; $x87->parameters = array (
); $x87->scope = $scope; $x87->properties['prototype'] = clone JS::$objectTemplate; $x87->attributes['prototype'] = JS::WRITABLE; $x87->properties['prototype']->properties['constructor'] = $x87; $x87->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x87->properties['length'] = 0; $x87->attributes['length'] = 0;
unset($x88, $W88, $S88, $U88);
$x89 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 33, 7, '<image>/05_string.js');
$x88 =& $x89[0]; list(,$W88,$S88,$U88) = $x89;
$x90 = JS::toString('toString', $global);
if ($x88 === JS::$undefined || $x88 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x91 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 33, 27, '<image>/05_string.js');
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
$x95 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x88, JS::toString($x90, $global), 33, 27, '<image>/05_string.js');
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
$x101 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 41, 34, '<image>/05_string.js');
$x100 =& $x101[0]; list(,$W100,$S100,$U100) = $x101;
unset($x102, $W102, $S102, $U102);
$x103 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x100, JS::toString('toString', $global), 41, 44, '<image>/05_string.js');
$x102 =& $x103[0]; list(,$W102,$S102,$U102) = $x103;
unset($x104, $W104, $S104, $U104);
$x105 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 41, 7, '<image>/05_string.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
$x106 = JS::toString('valueOf', $global);
if ($x104 === JS::$undefined || $x104 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x107 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 41, 26, '<image>/05_string.js');
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
$x111 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x104, JS::toString($x106, $global), 41, 26, '<image>/05_string.js');
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
$x132 = clone JS::$functionTemplate; $x132->call = '_d783f9f345d98dc295c060ae0345bc6a_7'; $x132->parameters = array (
  0 => 'pos',
); $x132->scope = $scope; $x132->properties['prototype'] = clone JS::$objectTemplate; $x132->attributes['prototype'] = JS::WRITABLE; $x132->properties['prototype']->properties['constructor'] = $x132; $x132->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x132->properties['length'] = 1; $x132->attributes['length'] = 0;
unset($x133, $W133, $S133, $U133);
$x134 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 43, 7, '<image>/05_string.js');
$x133 =& $x134[0]; list(,$W133,$S133,$U133) = $x134;
$x135 = JS::toString('charAt', $global);
if ($x133 === JS::$undefined || $x133 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x136 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 43, 25, '<image>/05_string.js');
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
$x140 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x133, JS::toString($x135, $global), 43, 25, '<image>/05_string.js');
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
$x176 = clone JS::$functionTemplate; $x176->call = '_d783f9f345d98dc295c060ae0345bc6a_8'; $x176->parameters = array (
  0 => 'pos',
); $x176->scope = $scope; $x176->properties['prototype'] = clone JS::$objectTemplate; $x176->attributes['prototype'] = JS::WRITABLE; $x176->properties['prototype']->properties['constructor'] = $x176; $x176->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x176->properties['length'] = 1; $x176->attributes['length'] = 0;
unset($x177, $W177, $S177, $U177);
$x178 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 53, 7, '<image>/05_string.js');
$x177 =& $x178[0]; list(,$W177,$S177,$U177) = $x178;
$x179 = JS::toString('charCodeAt', $global);
if ($x177 === JS::$undefined || $x177 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x180 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 53, 29, '<image>/05_string.js');
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
$x184 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x177, JS::toString($x179, $global), 53, 29, '<image>/05_string.js');
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
$x208 = clone JS::$functionTemplate; $x208->call = '_d783f9f345d98dc295c060ae0345bc6a_9'; $x208->parameters = array (
  0 => 'string',
); $x208->scope = $scope; $x208->properties['prototype'] = clone JS::$objectTemplate; $x208->attributes['prototype'] = JS::WRITABLE; $x208->properties['prototype']->properties['constructor'] = $x208; $x208->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x208->properties['length'] = 1; $x208->attributes['length'] = 0;
unset($x209, $W209, $S209, $U209);
$x210 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 65, 7, '<image>/05_string.js');
$x209 =& $x210[0]; list(,$W209,$S209,$U209) = $x210;
$x211 = JS::toString('concat', $global);
if ($x209 === JS::$undefined || $x209 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x212 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 65, 25, '<image>/05_string.js');
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
$x216 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x209, JS::toString($x211, $global), 65, 25, '<image>/05_string.js');
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
$x252 = clone JS::$functionTemplate; $x252->call = '_d783f9f345d98dc295c060ae0345bc6a_10'; $x252->parameters = array (
  0 => 'search',
  1 => 'position',
); $x252->scope = $scope; $x252->properties['prototype'] = clone JS::$objectTemplate; $x252->attributes['prototype'] = JS::WRITABLE; $x252->properties['prototype']->properties['constructor'] = $x252; $x252->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x252->properties['length'] = 2; $x252->attributes['length'] = 0;
unset($x253, $W253, $S253, $U253);
$x254 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 75, 7, '<image>/05_string.js');
$x253 =& $x254[0]; list(,$W253,$S253,$U253) = $x254;
$x255 = JS::toString('indexOf', $global);
if ($x253 === JS::$undefined || $x253 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x256 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 75, 26, '<image>/05_string.js');
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
$x260 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x253, JS::toString($x255, $global), 75, 26, '<image>/05_string.js');
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
$x296 = clone JS::$functionTemplate; $x296->call = '_d783f9f345d98dc295c060ae0345bc6a_11'; $x296->parameters = array (
  0 => 'search',
  1 => 'position',
); $x296->scope = $scope; $x296->properties['prototype'] = clone JS::$objectTemplate; $x296->attributes['prototype'] = JS::WRITABLE; $x296->properties['prototype']->properties['constructor'] = $x296; $x296->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x296->properties['length'] = 2; $x296->attributes['length'] = 0;
unset($x297, $W297, $S297, $U297);
$x298 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 90, 7, '<image>/05_string.js');
$x297 =& $x298[0]; list(,$W297,$S297,$U297) = $x298;
$x299 = JS::toString('lastIndexOf', $global);
if ($x297 === JS::$undefined || $x297 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x300 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 90, 30, '<image>/05_string.js');
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
$x304 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x297, JS::toString($x299, $global), 90, 30, '<image>/05_string.js');
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
$x311 = clone JS::$functionTemplate; $x311->call = '_d783f9f345d98dc295c060ae0345bc6a_12'; $x311->parameters = array (
  0 => 'that',
); $x311->scope = $scope; $x311->properties['prototype'] = clone JS::$objectTemplate; $x311->attributes['prototype'] = JS::WRITABLE; $x311->properties['prototype']->properties['constructor'] = $x311; $x311->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x311->properties['length'] = 1; $x311->attributes['length'] = 0;
unset($x312, $W312, $S312, $U312);
$x313 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 105, 7, '<image>/05_string.js');
$x312 =& $x313[0]; list(,$W312,$S312,$U312) = $x313;
$x314 = JS::toString('localeCompare', $global);
if ($x312 === JS::$undefined || $x312 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x315 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 105, 32, '<image>/05_string.js');
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
$x319 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x312, JS::toString($x314, $global), 105, 32, '<image>/05_string.js');
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
$x412 = clone JS::$functionTemplate; $x412->call = '_d783f9f345d98dc295c060ae0345bc6a_13'; $x412->parameters = array (
  0 => 'regexp',
); $x412->scope = $scope; $x412->properties['prototype'] = clone JS::$objectTemplate; $x412->attributes['prototype'] = JS::WRITABLE; $x412->properties['prototype']->properties['constructor'] = $x412; $x412->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x412->properties['length'] = 1; $x412->attributes['length'] = 0;
unset($x413, $W413, $S413, $U413);
$x414 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 109, 7, '<image>/05_string.js');
$x413 =& $x414[0]; list(,$W413,$S413,$U413) = $x414;
$x415 = JS::toString('match', $global);
if ($x413 === JS::$undefined || $x413 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x416 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 109, 24, '<image>/05_string.js');
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
$x420 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x413, JS::toString($x415, $global), 109, 24, '<image>/05_string.js');
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
$x596 = clone JS::$functionTemplate; $x596->call = '_d783f9f345d98dc295c060ae0345bc6a_14'; $x596->parameters = array (
  0 => 'search',
  1 => 'replace',
); $x596->scope = $scope; $x596->properties['prototype'] = clone JS::$objectTemplate; $x596->attributes['prototype'] = JS::WRITABLE; $x596->properties['prototype']->properties['constructor'] = $x596; $x596->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x596->properties['length'] = 2; $x596->attributes['length'] = 0;
unset($x597, $W597, $S597, $U597);
$x598 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 144, 7, '<image>/05_string.js');
$x597 =& $x598[0]; list(,$W597,$S597,$U597) = $x598;
$x599 = JS::toString('replace', $global);
if ($x597 === JS::$undefined || $x597 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x600 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 144, 26, '<image>/05_string.js');
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
$x604 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x597, JS::toString($x599, $global), 144, 26, '<image>/05_string.js');
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
$x649 = clone JS::$functionTemplate; $x649->call = '_d783f9f345d98dc295c060ae0345bc6a_16'; $x649->parameters = array (
  0 => 'search',
); $x649->scope = $scope; $x649->properties['prototype'] = clone JS::$objectTemplate; $x649->attributes['prototype'] = JS::WRITABLE; $x649->properties['prototype']->properties['constructor'] = $x649; $x649->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x649->properties['length'] = 1; $x649->attributes['length'] = 0;
unset($x650, $W650, $S650, $U650);
$x651 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 190, 7, '<image>/05_string.js');
$x650 =& $x651[0]; list(,$W650,$S650,$U650) = $x651;
$x652 = JS::toString('search', $global);
if ($x650 === JS::$undefined || $x650 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x653 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 190, 25, '<image>/05_string.js');
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
$x657 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x650, JS::toString($x652, $global), 190, 25, '<image>/05_string.js');
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
$x711 = clone JS::$functionTemplate; $x711->call = '_d783f9f345d98dc295c060ae0345bc6a_17'; $x711->parameters = array (
  0 => 'start',
  1 => 'end',
); $x711->scope = $scope; $x711->properties['prototype'] = clone JS::$objectTemplate; $x711->attributes['prototype'] = JS::WRITABLE; $x711->properties['prototype']->properties['constructor'] = $x711; $x711->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x711->properties['length'] = 2; $x711->attributes['length'] = 0;
unset($x712, $W712, $S712, $U712);
$x713 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 207, 7, '<image>/05_string.js');
$x712 =& $x713[0]; list(,$W712,$S712,$U712) = $x713;
$x714 = JS::toString('slice', $global);
if ($x712 === JS::$undefined || $x712 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x715 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 207, 24, '<image>/05_string.js');
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
$x719 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x712, JS::toString($x714, $global), 207, 24, '<image>/05_string.js');
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
$x835 = clone JS::$functionTemplate; $x835->call = '_d783f9f345d98dc295c060ae0345bc6a_18'; $x835->parameters = array (
  0 => 'separator',
  1 => 'limit',
); $x835->scope = $scope; $x835->properties['prototype'] = clone JS::$objectTemplate; $x835->attributes['prototype'] = JS::WRITABLE; $x835->properties['prototype']->properties['constructor'] = $x835; $x835->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x835->properties['length'] = 2; $x835->attributes['length'] = 0;
unset($x836, $W836, $S836, $U836);
$x837 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 229, 7, '<image>/05_string.js');
$x836 =& $x837[0]; list(,$W836,$S836,$U836) = $x837;
$x838 = JS::toString('split', $global);
if ($x836 === JS::$undefined || $x836 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x839 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 229, 24, '<image>/05_string.js');
$_TypeError =& $x839[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x839;
$x840 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 229, 24);
$x841 = $x840($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x841->class) && $x841->class === 'Error' && !isset($x841->properties['file']) && !isset($x841->properties['line']) && !isset($x841->properties['column'])) {$x841->properties['file'] = '<image>/05_string.js';$x841->properties['line'] = 229;$x841->properties['column'] = 24;$x841->attributes['file'] = $x841->attributes['line'] = $x841->attributes['column'] = 0; }
throw new JSException($x841, 229, 24, '<image>/05_string.js');
}
$x836 = JS::toObject($x836, $global);
unset($x842, $W842, $S842, $U842);
$x843 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x836, JS::toString($x838, $global), 229, 24, '<image>/05_string.js');
$x842 =& $x843[0]; list(,$W842,$S842,$U842) = $x843;
if ($U842 && (!isset($x836->extensible) || $x836->extensible)) {$x836->properties[$x838] = $x842; $x842 =& $x836->properties[$x838]; $x836->attributes[$x838] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U842 = FALSE; $W842 = TRUE; }
if (isset($x836->class) && $x836->class === 'Array') {  if (isset($x836->properties['length']) && $x836->properties['length'] !== JS::$undefined) { $x845 = $x836->properties['length']; }  else { $x845 = 0; } }
if (isset($S842)) {
$x846 = $S842->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 229, 24);
$x847 = $x846($global, $x836, $S842, array($x835), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x844 = $x847;
} else {
if (!$U842) {$x844 = $x835;if ($W842) { $x842 = $x835; }  }
else { $x844 = JS::$undefined; }
}
if (isset($x836->class) && $x836->class === 'Array') {if (is_int('split') && 'split' >= $x836->properties['length']) { $x836->properties['length'] = 'split' + 1; }else if ($x838 === 'length' && is_int($x835) && $x845 > $x835) {  for ($i = $x835; $i < $x845; ++$i) {  unset($x836->properties[$i], $x836->attributes[$i]); }}};
$x945 = clone JS::$functionTemplate; $x945->call = '_d783f9f345d98dc295c060ae0345bc6a_19'; $x945->parameters = array (
  0 => 'start',
  1 => 'end',
); $x945->scope = $scope; $x945->properties['prototype'] = clone JS::$objectTemplate; $x945->attributes['prototype'] = JS::WRITABLE; $x945->properties['prototype']->properties['constructor'] = $x945; $x945->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x945->properties['length'] = 2; $x945->attributes['length'] = 0;
unset($x946, $W946, $S946, $U946);
$x947 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 324, 7, '<image>/05_string.js');
$x946 =& $x947[0]; list(,$W946,$S946,$U946) = $x947;
$x948 = JS::toString('substring', $global);
if ($x946 === JS::$undefined || $x946 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x949 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 324, 28, '<image>/05_string.js');
$_TypeError =& $x949[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x949;
$x950 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 324, 28);
$x951 = $x950($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x951->class) && $x951->class === 'Error' && !isset($x951->properties['file']) && !isset($x951->properties['line']) && !isset($x951->properties['column'])) {$x951->properties['file'] = '<image>/05_string.js';$x951->properties['line'] = 324;$x951->properties['column'] = 28;$x951->attributes['file'] = $x951->attributes['line'] = $x951->attributes['column'] = 0; }
throw new JSException($x951, 324, 28, '<image>/05_string.js');
}
$x946 = JS::toObject($x946, $global);
unset($x952, $W952, $S952, $U952);
$x953 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x946, JS::toString($x948, $global), 324, 28, '<image>/05_string.js');
$x952 =& $x953[0]; list(,$W952,$S952,$U952) = $x953;
if ($U952 && (!isset($x946->extensible) || $x946->extensible)) {$x946->properties[$x948] = $x952; $x952 =& $x946->properties[$x948]; $x946->attributes[$x948] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U952 = FALSE; $W952 = TRUE; }
if (isset($x946->class) && $x946->class === 'Array') {  if (isset($x946->properties['length']) && $x946->properties['length'] !== JS::$undefined) { $x955 = $x946->properties['length']; }  else { $x955 = 0; } }
if (isset($S952)) {
$x956 = $S952->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 324, 28);
$x957 = $x956($global, $x946, $S952, array($x945), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x954 = $x957;
} else {
if (!$U952) {$x954 = $x945;if ($W952) { $x952 = $x945; }  }
else { $x954 = JS::$undefined; }
}
if (isset($x946->class) && $x946->class === 'Array') {if (is_int('substring') && 'substring' >= $x946->properties['length']) { $x946->properties['length'] = 'substring' + 1; }else if ($x948 === 'length' && is_int($x945) && $x955 > $x945) {  for ($i = $x945; $i < $x955; ++$i) {  unset($x946->properties[$i], $x946->attributes[$i]); }}};
$x961 = clone JS::$functionTemplate; $x961->call = '_d783f9f345d98dc295c060ae0345bc6a_20'; $x961->parameters = array (
  0 => 'start',
  1 => 'length',
); $x961->scope = $scope; $x961->properties['prototype'] = clone JS::$objectTemplate; $x961->attributes['prototype'] = JS::WRITABLE; $x961->properties['prototype']->properties['constructor'] = $x961; $x961->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x961->properties['length'] = 2; $x961->attributes['length'] = 0;
unset($x962, $W962, $S962, $U962);
$x963 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 352, 7, '<image>/05_string.js');
$x962 =& $x963[0]; list(,$W962,$S962,$U962) = $x963;
$x964 = JS::toString('substr', $global);
if ($x962 === JS::$undefined || $x962 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x965 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 352, 25, '<image>/05_string.js');
$_TypeError =& $x965[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x965;
$x966 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 352, 25);
$x967 = $x966($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x967->class) && $x967->class === 'Error' && !isset($x967->properties['file']) && !isset($x967->properties['line']) && !isset($x967->properties['column'])) {$x967->properties['file'] = '<image>/05_string.js';$x967->properties['line'] = 352;$x967->properties['column'] = 25;$x967->attributes['file'] = $x967->attributes['line'] = $x967->attributes['column'] = 0; }
throw new JSException($x967, 352, 25, '<image>/05_string.js');
}
$x962 = JS::toObject($x962, $global);
unset($x968, $W968, $S968, $U968);
$x969 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x962, JS::toString($x964, $global), 352, 25, '<image>/05_string.js');
$x968 =& $x969[0]; list(,$W968,$S968,$U968) = $x969;
if ($U968 && (!isset($x962->extensible) || $x962->extensible)) {$x962->properties[$x964] = $x968; $x968 =& $x962->properties[$x964]; $x962->attributes[$x964] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U968 = FALSE; $W968 = TRUE; }
if (isset($x962->class) && $x962->class === 'Array') {  if (isset($x962->properties['length']) && $x962->properties['length'] !== JS::$undefined) { $x971 = $x962->properties['length']; }  else { $x971 = 0; } }
if (isset($S968)) {
$x972 = $S968->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 352, 25);
$x973 = $x972($global, $x962, $S968, array($x961), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x970 = $x973;
} else {
if (!$U968) {$x970 = $x961;if ($W968) { $x968 = $x961; }  }
else { $x970 = JS::$undefined; }
}
if (isset($x962->class) && $x962->class === 'Array') {if (is_int('substr') && 'substr' >= $x962->properties['length']) { $x962->properties['length'] = 'substr' + 1; }else if ($x964 === 'length' && is_int($x961) && $x971 > $x961) {  for ($i = $x961; $i < $x971; ++$i) {  unset($x962->properties[$i], $x962->attributes[$i]); }}};
$x976 = clone JS::$functionTemplate; $x976->call = '_d783f9f345d98dc295c060ae0345bc6a_21'; $x976->parameters = array (
); $x976->scope = $scope; $x976->properties['prototype'] = clone JS::$objectTemplate; $x976->attributes['prototype'] = JS::WRITABLE; $x976->properties['prototype']->properties['constructor'] = $x976; $x976->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x976->properties['length'] = 0; $x976->attributes['length'] = 0;
unset($x977, $W977, $S977, $U977);
$x978 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 360, 7, '<image>/05_string.js');
$x977 =& $x978[0]; list(,$W977,$S977,$U977) = $x978;
$x979 = JS::toString('toLowerCase', $global);
if ($x977 === JS::$undefined || $x977 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x980 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 360, 30, '<image>/05_string.js');
$_TypeError =& $x980[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x980;
$x981 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 360, 30);
$x982 = $x981($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x982->class) && $x982->class === 'Error' && !isset($x982->properties['file']) && !isset($x982->properties['line']) && !isset($x982->properties['column'])) {$x982->properties['file'] = '<image>/05_string.js';$x982->properties['line'] = 360;$x982->properties['column'] = 30;$x982->attributes['file'] = $x982->attributes['line'] = $x982->attributes['column'] = 0; }
throw new JSException($x982, 360, 30, '<image>/05_string.js');
}
$x977 = JS::toObject($x977, $global);
unset($x983, $W983, $S983, $U983);
$x984 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x977, JS::toString($x979, $global), 360, 30, '<image>/05_string.js');
$x983 =& $x984[0]; list(,$W983,$S983,$U983) = $x984;
if ($U983 && (!isset($x977->extensible) || $x977->extensible)) {$x977->properties[$x979] = $x983; $x983 =& $x977->properties[$x979]; $x977->attributes[$x979] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U983 = FALSE; $W983 = TRUE; }
if (isset($x977->class) && $x977->class === 'Array') {  if (isset($x977->properties['length']) && $x977->properties['length'] !== JS::$undefined) { $x986 = $x977->properties['length']; }  else { $x986 = 0; } }
if (isset($S983)) {
$x987 = $S983->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 360, 30);
$x988 = $x987($global, $x977, $S983, array($x976), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x985 = $x988;
} else {
if (!$U983) {$x985 = $x976;if ($W983) { $x983 = $x976; }  }
else { $x985 = JS::$undefined; }
}
if (isset($x977->class) && $x977->class === 'Array') {if (is_int('toLowerCase') && 'toLowerCase' >= $x977->properties['length']) { $x977->properties['length'] = 'toLowerCase' + 1; }else if ($x979 === 'length' && is_int($x976) && $x986 > $x976) {  for ($i = $x976; $i < $x986; ++$i) {  unset($x977->properties[$i], $x977->attributes[$i]); }}};
unset($x989, $W989, $S989, $U989);
$x990 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 364, 44, '<image>/05_string.js');
$x989 =& $x990[0]; list(,$W989,$S989,$U989) = $x990;
unset($x991, $W991, $S991, $U991);
$x992 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x989, JS::toString('toLowerCase', $global), 364, 54, '<image>/05_string.js');
$x991 =& $x992[0]; list(,$W991,$S991,$U991) = $x992;
unset($x993, $W993, $S993, $U993);
$x994 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 364, 7, '<image>/05_string.js');
$x993 =& $x994[0]; list(,$W993,$S993,$U993) = $x994;
$x995 = JS::toString('toLocaleLowerCase', $global);
if ($x993 === JS::$undefined || $x993 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x996 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 364, 36, '<image>/05_string.js');
$_TypeError =& $x996[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x996;
$x997 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 364, 36);
$x998 = $x997($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x998->class) && $x998->class === 'Error' && !isset($x998->properties['file']) && !isset($x998->properties['line']) && !isset($x998->properties['column'])) {$x998->properties['file'] = '<image>/05_string.js';$x998->properties['line'] = 364;$x998->properties['column'] = 36;$x998->attributes['file'] = $x998->attributes['line'] = $x998->attributes['column'] = 0; }
throw new JSException($x998, 364, 36, '<image>/05_string.js');
}
$x993 = JS::toObject($x993, $global);
unset($x999, $W999, $S999, $U999);
$x1000 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x993, JS::toString($x995, $global), 364, 36, '<image>/05_string.js');
$x999 =& $x1000[0]; list(,$W999,$S999,$U999) = $x1000;
if ($U999 && (!isset($x993->extensible) || $x993->extensible)) {$x993->properties[$x995] = $x999; $x999 =& $x993->properties[$x995]; $x993->attributes[$x995] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U999 = FALSE; $W999 = TRUE; }
if (isset($x993->class) && $x993->class === 'Array') {  if (isset($x993->properties['length']) && $x993->properties['length'] !== JS::$undefined) { $x1002 = $x993->properties['length']; }  else { $x1002 = 0; } }
if (isset($S999)) {
$x1003 = $S999->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 364, 36);
$x1004 = $x1003($global, $x993, $S999, array($x991), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1001 = $x1004;
} else {
if (!$U999) {$x1001 = $x991;if ($W999) { $x999 = $x991; }  }
else { $x1001 = JS::$undefined; }
}
if (isset($x993->class) && $x993->class === 'Array') {if (is_int('toLocaleLowerCase') && 'toLocaleLowerCase' >= $x993->properties['length']) { $x993->properties['length'] = 'toLocaleLowerCase' + 1; }else if ($x995 === 'length' && is_int($x991) && $x1002 > $x991) {  for ($i = $x991; $i < $x1002; ++$i) {  unset($x993->properties[$i], $x993->attributes[$i]); }}};
$x1007 = clone JS::$functionTemplate; $x1007->call = '_d783f9f345d98dc295c060ae0345bc6a_22'; $x1007->parameters = array (
); $x1007->scope = $scope; $x1007->properties['prototype'] = clone JS::$objectTemplate; $x1007->attributes['prototype'] = JS::WRITABLE; $x1007->properties['prototype']->properties['constructor'] = $x1007; $x1007->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1007->properties['length'] = 0; $x1007->attributes['length'] = 0;
unset($x1008, $W1008, $S1008, $U1008);
$x1009 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 366, 7, '<image>/05_string.js');
$x1008 =& $x1009[0]; list(,$W1008,$S1008,$U1008) = $x1009;
$x1010 = JS::toString('toUpperCase', $global);
if ($x1008 === JS::$undefined || $x1008 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1011 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 366, 30, '<image>/05_string.js');
$_TypeError =& $x1011[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1011;
$x1012 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 366, 30);
$x1013 = $x1012($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1013->class) && $x1013->class === 'Error' && !isset($x1013->properties['file']) && !isset($x1013->properties['line']) && !isset($x1013->properties['column'])) {$x1013->properties['file'] = '<image>/05_string.js';$x1013->properties['line'] = 366;$x1013->properties['column'] = 30;$x1013->attributes['file'] = $x1013->attributes['line'] = $x1013->attributes['column'] = 0; }
throw new JSException($x1013, 366, 30, '<image>/05_string.js');
}
$x1008 = JS::toObject($x1008, $global);
unset($x1014, $W1014, $S1014, $U1014);
$x1015 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x1008, JS::toString($x1010, $global), 366, 30, '<image>/05_string.js');
$x1014 =& $x1015[0]; list(,$W1014,$S1014,$U1014) = $x1015;
if ($U1014 && (!isset($x1008->extensible) || $x1008->extensible)) {$x1008->properties[$x1010] = $x1014; $x1014 =& $x1008->properties[$x1010]; $x1008->attributes[$x1010] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1014 = FALSE; $W1014 = TRUE; }
if (isset($x1008->class) && $x1008->class === 'Array') {  if (isset($x1008->properties['length']) && $x1008->properties['length'] !== JS::$undefined) { $x1017 = $x1008->properties['length']; }  else { $x1017 = 0; } }
if (isset($S1014)) {
$x1018 = $S1014->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 366, 30);
$x1019 = $x1018($global, $x1008, $S1014, array($x1007), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1016 = $x1019;
} else {
if (!$U1014) {$x1016 = $x1007;if ($W1014) { $x1014 = $x1007; }  }
else { $x1016 = JS::$undefined; }
}
if (isset($x1008->class) && $x1008->class === 'Array') {if (is_int('toUpperCase') && 'toUpperCase' >= $x1008->properties['length']) { $x1008->properties['length'] = 'toUpperCase' + 1; }else if ($x1010 === 'length' && is_int($x1007) && $x1017 > $x1007) {  for ($i = $x1007; $i < $x1017; ++$i) {  unset($x1008->properties[$i], $x1008->attributes[$i]); }}};
unset($x1020, $W1020, $S1020, $U1020);
$x1021 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 370, 44, '<image>/05_string.js');
$x1020 =& $x1021[0]; list(,$W1020,$S1020,$U1020) = $x1021;
unset($x1022, $W1022, $S1022, $U1022);
$x1023 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $x1020, JS::toString('toUpperCase', $global), 370, 54, '<image>/05_string.js');
$x1022 =& $x1023[0]; list(,$W1022,$S1022,$U1022) = $x1023;
unset($x1024, $W1024, $S1024, $U1024);
$x1025 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 370, 7, '<image>/05_string.js');
$x1024 =& $x1025[0]; list(,$W1024,$S1024,$U1024) = $x1025;
$x1026 = JS::toString('toLocaleUpperCase', $global);
if ($x1024 === JS::$undefined || $x1024 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1027 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 370, 36, '<image>/05_string.js');
$_TypeError =& $x1027[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1027;
$x1028 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 370, 36);
$x1029 = $x1028($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1029->class) && $x1029->class === 'Error' && !isset($x1029->properties['file']) && !isset($x1029->properties['line']) && !isset($x1029->properties['column'])) {$x1029->properties['file'] = '<image>/05_string.js';$x1029->properties['line'] = 370;$x1029->properties['column'] = 36;$x1029->attributes['file'] = $x1029->attributes['line'] = $x1029->attributes['column'] = 0; }
throw new JSException($x1029, 370, 36, '<image>/05_string.js');
}
$x1024 = JS::toObject($x1024, $global);
unset($x1030, $W1030, $S1030, $U1030);
$x1031 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x1024, JS::toString($x1026, $global), 370, 36, '<image>/05_string.js');
$x1030 =& $x1031[0]; list(,$W1030,$S1030,$U1030) = $x1031;
if ($U1030 && (!isset($x1024->extensible) || $x1024->extensible)) {$x1024->properties[$x1026] = $x1030; $x1030 =& $x1024->properties[$x1026]; $x1024->attributes[$x1026] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1030 = FALSE; $W1030 = TRUE; }
if (isset($x1024->class) && $x1024->class === 'Array') {  if (isset($x1024->properties['length']) && $x1024->properties['length'] !== JS::$undefined) { $x1033 = $x1024->properties['length']; }  else { $x1033 = 0; } }
if (isset($S1030)) {
$x1034 = $S1030->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 370, 36);
$x1035 = $x1034($global, $x1024, $S1030, array($x1022), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1032 = $x1035;
} else {
if (!$U1030) {$x1032 = $x1022;if ($W1030) { $x1030 = $x1022; }  }
else { $x1032 = JS::$undefined; }
}
if (isset($x1024->class) && $x1024->class === 'Array') {if (is_int('toLocaleUpperCase') && 'toLocaleUpperCase' >= $x1024->properties['length']) { $x1024->properties['length'] = 'toLocaleUpperCase' + 1; }else if ($x1026 === 'length' && is_int($x1022) && $x1033 > $x1022) {  for ($i = $x1022; $i < $x1033; ++$i) {  unset($x1024->properties[$i], $x1024->attributes[$i]); }}};
$x1038 = clone JS::$functionTemplate; $x1038->call = '_d783f9f345d98dc295c060ae0345bc6a_23'; $x1038->parameters = array (
); $x1038->scope = $scope; $x1038->properties['prototype'] = clone JS::$objectTemplate; $x1038->attributes['prototype'] = JS::WRITABLE; $x1038->properties['prototype']->properties['constructor'] = $x1038; $x1038->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1038->properties['length'] = 0; $x1038->attributes['length'] = 0;
unset($x1039, $W1039, $S1039, $U1039);
$x1040 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 372, 7, '<image>/05_string.js');
$x1039 =& $x1040[0]; list(,$W1039,$S1039,$U1039) = $x1040;
$x1041 = JS::toString('trim', $global);
if ($x1039 === JS::$undefined || $x1039 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1042 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 372, 23, '<image>/05_string.js');
$_TypeError =& $x1042[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1042;
$x1043 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 372, 23);
$x1044 = $x1043($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1044->class) && $x1044->class === 'Error' && !isset($x1044->properties['file']) && !isset($x1044->properties['line']) && !isset($x1044->properties['column'])) {$x1044->properties['file'] = '<image>/05_string.js';$x1044->properties['line'] = 372;$x1044->properties['column'] = 23;$x1044->attributes['file'] = $x1044->attributes['line'] = $x1044->attributes['column'] = 0; }
throw new JSException($x1044, 372, 23, '<image>/05_string.js');
}
$x1039 = JS::toObject($x1039, $global);
unset($x1045, $W1045, $S1045, $U1045);
$x1046 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x1039, JS::toString($x1041, $global), 372, 23, '<image>/05_string.js');
$x1045 =& $x1046[0]; list(,$W1045,$S1045,$U1045) = $x1046;
if ($U1045 && (!isset($x1039->extensible) || $x1039->extensible)) {$x1039->properties[$x1041] = $x1045; $x1045 =& $x1039->properties[$x1041]; $x1039->attributes[$x1041] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1045 = FALSE; $W1045 = TRUE; }
if (isset($x1039->class) && $x1039->class === 'Array') {  if (isset($x1039->properties['length']) && $x1039->properties['length'] !== JS::$undefined) { $x1048 = $x1039->properties['length']; }  else { $x1048 = 0; } }
if (isset($S1045)) {
$x1049 = $S1045->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 372, 23);
$x1050 = $x1049($global, $x1039, $S1045, array($x1038), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1047 = $x1050;
} else {
if (!$U1045) {$x1047 = $x1038;if ($W1045) { $x1045 = $x1038; }  }
else { $x1047 = JS::$undefined; }
}
if (isset($x1039->class) && $x1039->class === 'Array') {if (is_int('trim') && 'trim' >= $x1039->properties['length']) { $x1039->properties['length'] = 'trim' + 1; }else if ($x1041 === 'length' && is_int($x1038) && $x1048 > $x1038) {  for ($i = $x1038; $i < $x1048; ++$i) {  unset($x1039->properties[$i], $x1039->attributes[$i]); }}};
$x1079 = clone JS::$functionTemplate; $x1079->call = '_d783f9f345d98dc295c060ae0345bc6a_24'; $x1079->parameters = array (
  0 => 'search',
  1 => 'start',
); $x1079->scope = $scope; $x1079->properties['prototype'] = clone JS::$objectTemplate; $x1079->attributes['prototype'] = JS::WRITABLE; $x1079->properties['prototype']->properties['constructor'] = $x1079; $x1079->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1079->properties['length'] = 2; $x1079->attributes['length'] = 0;
unset($x1080, $W1080, $S1080, $U1080);
$x1081 = _d783f9f345d98dc295c060ae0345bc6a_4($global, $scope, $_String, JS::toString('prototype', $global), 376, 7, '<image>/05_string.js');
$x1080 =& $x1081[0]; list(,$W1080,$S1080,$U1080) = $x1081;
$x1082 = JS::toString('includes', $global);
if ($x1080 === JS::$undefined || $x1080 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1083 = _d783f9f345d98dc295c060ae0345bc6a_3($global, $scope, $scope, JS::toString('TypeError', $global), 376, 27, '<image>/05_string.js');
$_TypeError =& $x1083[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1083;
$x1084 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 376, 27);
$x1085 = $x1084($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1085->class) && $x1085->class === 'Error' && !isset($x1085->properties['file']) && !isset($x1085->properties['line']) && !isset($x1085->properties['column'])) {$x1085->properties['file'] = '<image>/05_string.js';$x1085->properties['line'] = 376;$x1085->properties['column'] = 27;$x1085->attributes['file'] = $x1085->attributes['line'] = $x1085->attributes['column'] = 0; }
throw new JSException($x1085, 376, 27, '<image>/05_string.js');
}
$x1080 = JS::toObject($x1080, $global);
unset($x1086, $W1086, $S1086, $U1086);
$x1087 = _d783f9f345d98dc295c060ae0345bc6a_5($global, $scope, $x1080, JS::toString($x1082, $global), 376, 27, '<image>/05_string.js');
$x1086 =& $x1087[0]; list(,$W1086,$S1086,$U1086) = $x1087;
if ($U1086 && (!isset($x1080->extensible) || $x1080->extensible)) {$x1080->properties[$x1082] = $x1086; $x1086 =& $x1080->properties[$x1082]; $x1080->attributes[$x1082] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1086 = FALSE; $W1086 = TRUE; }
if (isset($x1080->class) && $x1080->class === 'Array') {  if (isset($x1080->properties['length']) && $x1080->properties['length'] !== JS::$undefined) { $x1089 = $x1080->properties['length']; }  else { $x1089 = 0; } }
if (isset($S1086)) {
$x1090 = $S1086->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 376, 27);
$x1091 = $x1090($global, $x1080, $S1086, array($x1079), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1088 = $x1091;
} else {
if (!$U1086) {$x1088 = $x1079;if ($W1086) { $x1086 = $x1079; }  }
else { $x1088 = JS::$undefined; }
}
if (isset($x1080->class) && $x1080->class === 'Array') {if (is_int('includes') && 'includes' >= $x1080->properties['length']) { $x1080->properties['length'] = 'includes' + 1; }else if ($x1082 === 'length' && is_int($x1079) && $x1089 > $x1079) {  for ($i = $x1079; $i < $x1089; ++$i) {  unset($x1080->properties[$i], $x1080->attributes[$i]); }}};
;
return JS::$undefined;
}
