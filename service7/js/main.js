(function(b){var a={ru:{months:["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],monthsRp:["января","февраля","марта","апреля","мая","июня","июля","августа","сентября","октября","ноября","декабря"],monthsPp:["январе","феврале","марте","апреле","мае","июне","июле","августе","сентябре","октябре","ноябре","декабре"],maxPurchase:"Больше всего заказов (_COUNT_) было _DATE_ _MONTH_ 2015 года.",stockInfoTitle:"Более 100 000 продаж в ",stockInfoTime:"Сроки проведения акции с _STARTDATE_ _STARTMONTH_ по _ENDDATE_ _ENDMONTH_"},gr:{months:["Ιανουάριος","Φεβρουάριος","Μάρτιος","Απρίλιος","Μάιος","Ιούνιος","Ιούλιος","Αύγουστος","Σεπτέμβριος","Οκτώβριος","Νοέμβριος","Δεκέμβριος"],monthsRp:["ιανουάριο","φεβρουάριο","μάρτιο","απρίλιο","μάιο","ιούνιο","ιούλιο","αύγουστο","σεπτέμβριο","οκτώβριο","νοέμβριο","δεκέμβριο"],monthsPp:["ιανουάριο","φεβρουάριο","μάρτιο","απρίλιο","μάιο","ιούνιο","ιούλιο","αύγουστο","σεπτέμβριο","οκτώβριο","νοέμβριο","δεκέμβριο"],maxPurchase:"Ο μεγαλύτερος αριθμός παραγγελιών (_COUNT_) δόθηκε σε _DATE_ _MONTH_ 2016.",stockInfoTitle:"Περισσότερς από 100 000 πωλήσεις τον",stockInfoTime:"Η περίοδος εκπτώσεων ξεκινά _STARTDATE_ _STARTMONTH_ και τελειώνει _ENDDATE_ _ENDMONTH_"}};var c=function(){this.nowDate=new Date();this.params={lang:"gr",maxPurchase:2419,maxPurchaseDate:2,startStockDate:29,endStockDate:1,lastPackTime:15,countDownDiff:Math.ceil((24*60*60)-(this.nowDate.getHours()*60*60+this.nowDate.getMinutes()*60+this.nowDate.getSeconds())),selectors:{countDown:".landing__countdown",maxPurcahesDate:".landing__maxpurcashe",stockInfo:".landing__stockinfo",stockInfoTitle:".landing__stockinfo_title",lastPack:".landing__lastpack"}};this.initCountDown();this.initMaxPurcasheDate();this.initStockInfo();this.initLastPack();this.initEvents()};c.prototype.initEvents=function(){};c.prototype.initLastPack=function(){var e=this;var d=setTimeout(function(){b(e.params.selectors.lastPack).each(function(f,g){var h=parseFloat(b(g).text(),10);b(g).html((h-1))})},this.params.lastPackTime*1000)};c.prototype.initStockInfo=function(){var h=a[this.params.lang];var g=h.stockInfoTitle+h.monthsPp[this.nowDate.getUTCMonth()];var f=new Date(this.nowDate.getTime()+(this.params.endStockDate*24*60*60*1000));var e=new Date(this.nowDate.getTime()-(this.params.startStockDate*24*60*60*1000));var d=h.stockInfoTime;d=d.replace("_STARTDATE_",e.getUTCDate());d=d.replace("_ENDDATE_",f.getUTCDate());d=d.replace("_STARTMONTH_",h.monthsRp[e.getMonth()]);d=d.replace("_ENDMONTH_",h.monthsRp[f.getMonth()]);b(this.params.selectors.stockInfoTitle).html(g);b(this.params.selectors.stockInfo).html(d)};c.prototype.initMaxPurcasheDate=function(){var d=new Date(this.nowDate.getTime()-(this.params.maxPurchaseDate*24*60*60*1000));var e=a[this.params.lang].maxPurchase;e=e.replace("_COUNT_",this.params.maxPurchase);e=e.replace("_DATE_",d.getUTCDate());e=e.replace("_MONTH_",a[this.params.lang].monthsRp[d.getUTCMonth()]);b(this.params.selectors.maxPurcahesDate).html(e)};c.prototype.initCountDown=function(){var f=this,e=new Date(this.nowDate.getTime()+this.params.countDownDiff*1000);var d=setInterval(function(){var i=new Date(e.getTime()-Date.now()),k=(i.getHours()>9)?i.getHours():"0"+i.getHours(),g=(i.getMinutes()>9)?i.getMinutes():"0"+i.getMinutes(),j=(i.getSeconds()>9)?i.getSeconds():"0"+i.getSeconds();k=new String(k);g=new String(g);j=new String(j);var l='<div class=timebox><span class="hours">'+k[0]+'</span><span class="hours">'+k[1]+'</span></div><div class=timebox><span class="minutes">'+g[0]+'</span><span class="minutes">'+g[1]+'</span></div><div class=timebox><span class="seconds">'+j[0]+'</span><span class="seconds">'+j[1]+"</span></div>";b(f.params.selectors.countDown).html(l)},1000)};b(function(){window.landing=new c()})})(jQuery);