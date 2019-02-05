# Prism Code Syntax Highlighting Authoring Tool
Simple web page using Prisim color syntax highlighter to generate formatted code for authoring.

Useful for pasting color syntax highlighted code into Apple software like Keynote and Pages.

Sample themes in repo include all languages.

You need to download the particular theme to the themes folder you want and modify the HTML code for it by adding or modifying the links in the `<div class="center-box center-text color-black">` container.

Example `<a href="?theme=default" >Default</a>&nbsp;|`

Sample screen.

![image](https://drive.google.com/uc?export=view&id=15wDwsW_s0AY4X12wFMwk-0oqsLezZYbB)


Demo UI list dropdown only has a small set of languages however sample themes in repo include all languages. You need to include the languages you want when you download the theme. Then modify the `<select id="source-code-language" >` element `<option...`  elements for the languages.

Example: `<option value="html">HTML</option>`

Language option value needs to come from the Prism list of supported languages you included. https://prismjs.com/index.html#languages-list 

PrismJS 1.15.0
