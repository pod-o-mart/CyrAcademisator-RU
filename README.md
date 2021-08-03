# CyrAcademisator-RU
Academic transliteration for Russian

## About
This transiteration tool was initially published in 2010 on [podolak.net](https://podolak.net/en/transliteration/russian) and later on the [Danish Portal for Slavonic, Balkan and East European Studies](https://oesteuropastudier.dk/en/tools/transliteration/russian). As I do not have the ressources to maintain the code anymore, I have decided to publish the code to anyone under the [CC BY-NC-SA 4.0](https://github.com/pod-o-mart/CyrAcademisator-RU/blob/main/LICENCE.md)-licence.

The code was my first step into PHP. Although it is quite messy and there is much trash left from disused functions, it works without problems. The recent years there were no complaints on wrong transliterations, the different transliteration styles seem to be in order.

You might have a look at the [documentation](https://pod-o-mart.github.io/documentation/english.html).

## Installation
Just copy all files to a folder on your server/webspace and point to it with your browser. The script is ready-to-go.

## Bookmarklet
Once you have installed the script to your server/webspace, you might consider creating a transliteration bookmarklet. The function allows to mark text on any website and to send it to CyrAcademisator-RU for transliteration with one click. 

Create a boomark with following code as the address. Name the bookmark whatever you want.

`javascript:(function(){var%20t=window.getSelection?window.getSelection():document.getSelection?document.getSelection():(document.selection&&document.selection.createRange)?document.selection.createRange().text:'';if(t!=''){t=encodeURIComponent(t.toString());window.open('PATH_TO_YOUR_INSTALLATION?text='+t+'&in=INPUT_STYLE&out=OUTPUT_STYLE&senden=Translitter%C3%A9r')}})()`

Adapt the string accourding to your needs. Change following:
- PATH_TO_YOUR_INSTALLATION - e.g. https://example.com/cyracademisator
- INPUT_STYLE - choose one of the following: *auto, isor9, iso9, gost779b, wissenschaftlich, alalc, bgndigr, british, kyrillisch*
- OUTPUT_STYLE - choose one of the following: *isor9, iso9, gost779b, wissenschaftlich, alalc, bgndigr, bgn, british, duden, sprognaevn, kyrillisch*
