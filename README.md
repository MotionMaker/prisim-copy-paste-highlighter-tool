# PrismJS Code Syntax Highlighting Authoring Tool
Simple web page using Prisim color syntax highlighter to generate formatted code for authoring.

Useful for pasting color syntax highlighted code into Apple software like Keynote and Pages so it can be copied by others who have a edoc or pdf version, in other words instead of screen shot images pasted in.

Useful in general for screen shots to add to other authoring software.

Uses PHP to support theme switching.

Sample themes in repo are PrismJS 1.15.0 and include all languages.

You need to <a href="https://prismjs.com/download.html" target="_blank">download</a> the particular theme to the themes folder you want and modify the HTML code for it by adding or modifying the links in the `<div class="center-box center-text color-black">` container.

Example `<a href="?theme=default" >Default</a>&nbsp;|`

Sample screen.

![image](https://drive.google.com/uc?export=view&id=15wDwsW_s0AY4X12wFMwk-0oqsLezZYbB)


Demo UI list dropdown only has a small set of languages however sample themes in repo include all languages. You need to include the languages you want when you download the theme. Then modify the `<select id="source-code-language" >` element `<option...`  elements for the languages.

Example: `<option value="html">HTML</option>`

Language option value needs to come from the  <a href="https://prismjs.com/index.html#languages-list" target="_blank">Prism supported languages</a> you included.  

Set start line number value to blank if you do not want line numbers.

This code was not designed to be a perfect polished rich feature set. Just some basics for authoring with copyable color syntax highlighed code in Apple Keynote.


Issues: 

1. Copy/Paste: You cannot copy the line numbers and vertical bar. Best workaround is to create a second text or shape/text object in the target software and simply number using the same font and background color then use the align tools. Add a verticle line if you want a divider. Another is to screen shot the output area.

2. Saw Keynote crash intermittently when pasting. It may be that the copy included areas outside the output box. Still investigating. Workround is to try copying again and only using the area in the output box and delete any previous paste in the target software. Bottom line its a Apple issue.

3. Some font sizes might cause issues with line number alignment. PrismJS issue.
