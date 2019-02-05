"use strict";

var sourceCodeInEle = document.getElementById('source-code-in');
var sourceCodeOutPreEle = document.getElementById('source-code-out-pre');
var sourceCodeOutEle = document.getElementById('source-code-out');
var sourceCodeFontSizeEle = document.getElementById('source-code-font');


var sourceCodeFormatEle = document.getElementById('source-code-format');
var sourceCodeLineNumberStartEle = document.getElementById('source-code-line-number-start');
var sourceCodeLanguageEle = document.getElementById('source-code-language');


sourceCodeFormatEle.addEventListener("click", sourceCodeFormatEleClickHandler);
function sourceCodeFormatEleClickHandler(){
	reformatCode();
}
function reformatCode(){
	var language = sourceCodeLanguageEle.value;
	sourceCodeOutPreEle.className = '';
	sourceCodeOutEle.className = 'language-' + language;
	sourceCodeOutPreEle.removeAttribute('data-start');
	var lineNumberStart = sourceCodeLineNumberStartEle.value;
	if (parseInt(lineNumberStart, 10) > 0){
		sourceCodeOutPreEle.setAttribute('data-start', lineNumberStart);
		sourceCodeOutEle.className += ' line-numbers';
	}
console.log(sourceCodeFontSizeEle.value +"px");
	sourceCodeOutEle.style['font-size'] = sourceCodeFontSizeEle.value +"px";
	sourceCodeOutEle.textContent = sourceCodeInEle.value;
	Prism.highlightElement(sourceCodeOutEle);
}
function getSrcFromURL(keyName){
	var searchString = document.location.search;
	var returnVal = undefined;
	// strip off the leading '?'
	searchString = searchString.substring(1);
	var nvPairs = searchString.split("&");
	for (i = 0; i < nvPairs.length; i++){
		var nvPair = nvPairs[i].split("=");
		var name = nvPair[0];
		if (name == keyName){
			returnVal = nvPair[1];
		}
	}
	return returnVal;
}