var Hyphenator=(function(window){var
supportedLang={'be':'be.js','ca':'ca.js','cs':'cs.js','da':'da.js','bn':'bn.js','de':'de.js','el':'el-monoton.js','el-monoton':'el-monoton.js','el-polyton':'el-polyton.js','en':'en-us.js','en-gb':'en-gb.js','en-us':'en-us.js','es':'es.js','fi':'fi.js','fr':'fr.js','grc':'grc.js','gu':'gu.js','hi':'hi.js','hu':'hu.js','hy':'hy.js','it':'it.js','kn':'kn.js','la':'la.js','lt':'lt.js','lv':'lv.js','ml':'ml.js','no':'no-nb.js','no-nb':'no-nb.js','nl':'nl.js','or':'or.js','pa':'pa.js','pl':'pl.js','pt':'pt.js','ru':'ru.js','sl':'sl.js','sv':'sv.js','ta':'ta.js','te':'te.js','tr':'tr.js','uk':'uk.js'},languageHint=(function(){var k,r='';for(k in supportedLang){if(supportedLang.hasOwnProperty(k)){r+=k+', ';}}r=r.substring(0,r.length-2);return r;}()),prompterStrings={'be':'Мова гэтага сайта не можа быць вызначаны аўтаматычна. Калі ласка пакажыце мову:','cs':'Jazyk této internetové stránky nebyl automaticky rozpoznán. Určete prosím její jazyk:','da':'Denne websides sprog kunne ikke bestemmes. Angiv venligst sprog:','de':'Die Sprache dieser Webseite konnte nicht automatisch bestimmt werden. Bitte Sprache angeben:','en':'The language of this website could not be determined automatically. Please indicate the main language:','es':'El idioma del sitio no pudo determinarse autom%E1ticamente. Por favor, indique el idioma principal:','fi':'Sivun kielt%E4 ei tunnistettu automaattisesti. M%E4%E4rit%E4 sivun p%E4%E4kieli:','fr':'La langue de ce site n%u2019a pas pu %EAtre d%E9termin%E9e automatiquement. Veuillez indiquer une langue, s.v.p.%A0:','hu':'A weboldal nyelvét nem sikerült automatikusan megállapítani. Kérem adja meg a nyelvet:','hy':'Չհաջողվեց հայտնաբերել այս կայքի լեզուն։ Խնդրում ենք նշեք հիմնական լեզուն՝','it':'Lingua del sito sconosciuta. Indicare una lingua, per favore:','kn':'ಜಾಲ ತಾಣದ ಭಾಷೆಯನ್ನು ನಿರ್ಧರಿಸಲು ಸಾಧ್ಯವಾಗುತ್ತಿಲ್ಲ. ದಯವಿಟ್ಟು ಮುಖ್ಯ ಭಾಷೆಯನ್ನು ಸೂಚಿಸಿ:','lt':'Nepavyko automatiškai nustatyti šios svetainės kalbos. Prašome įvesti kalbą:','lv':'Šīs lapas valodu nevarēja noteikt automātiski. Lūdzu norādiet pamata valodu:','ml':'ഈ വെ%u0D2C%u0D4D%u200Cസൈറ്റിന്റെ ഭാഷ കണ്ടുപിടിയ്ക്കാ%u0D28%u0D4D%u200D കഴിഞ്ഞില്ല. ഭാഷ ഏതാണെന്നു തിരഞ്ഞെടുക്കുക:','nl':'De taal van deze website kan niet automatisch worden bepaald. Geef de hoofdtaal op:','no':'Nettstedets språk kunne ikke finnes automatisk. Vennligst oppgi språk:','pt':'A língua deste site não pôde ser determinada automaticamente. Por favor indique a língua principal:','ru':'Язык этого сайта не может быть определен автоматически. Пожалуйста укажите язык:','sl':'Jezika te spletne strani ni bilo mogoče samodejno določiti. Prosim navedite jezik:','sv':'Spr%E5ket p%E5 den h%E4r webbplatsen kunde inte avg%F6ras automatiskt. V%E4nligen ange:','tr':'Bu web sitesinin dili otomatik olarak tespit edilememiştir. Lütfen dökümanın dilini seçiniz%A0:','uk':'Мова цього веб-сайту не може бути визначена автоматично. Будь ласка, вкажіть головну мову:'},basePath=(function(){var s=document.getElementsByTagName('script'),i=0,p,src,t;while(!!(t=s[i++])){if(!t.src){continue;}src=t.src;p=src.indexOf('Hyphenator.js');if(p!==-1){return src.substring(0,p);}}return'http://hyphenator.googlecode.com/svn/trunk/';}()),isLocal=(function(){var re=false;if(window.location.href.indexOf(basePath)!==-1){re=true;}return re;}()),documentLoaded=false,documentCount=0,persistentConfig=false,contextWindow=window,doFrames=false,dontHyphenate={'script':true,'code':true,'pre':true,'img':true,'br':true,'samp':true,'kbd':true,'var':true,'abbr':true,'acronym':true,'sub':true,'sup':true,'button':true,'option':true,'label':true,'textarea':true,'input':true},enableCache=true,storageType='local',storage,enableReducedPatternSet=false,enableRemoteLoading=true,displayToggleBox=false,hyphenateClass='hyphenate',dontHyphenateClass='donthyphenate',min=6,orphanControl=1,isBookmarklet=(function(){var loc=null,re=false,jsArray=document.getElementsByTagName('script'),i,l;for(i=0,l=jsArray.length;i<l;i++){if(!!jsArray[i].getAttribute('src')){loc=jsArray[i].getAttribute('src');}if(!loc){continue;}else if(loc.indexOf('Hyphenator.js?bm=true')!==-1){re=true;}}return re;}()),mainLanguage=null,defaultLanguage='',elements=[],exceptions={},countObjProps=function(obj){var k,l=0;for(k in obj){if(obj.hasOwnProperty(k)){l++;}}return l;},docLanguages={},state=0,url='(\\w*:\/\/)?((\\w*:)?(\\w*)@)?((([\\d]{1,3}\\.){3}([\\d]{1,3}))|((www\\.|[a-zA-Z]\\.)?[a-zA-Z0-9\\-\\.]+\\.([a-z]{2,4})))(:\\d*)?(\/[\\w#!:\\.?\\+=&%@!\\-]*)*',mail='[\\w-\\.]+@[\\w\\.]+',urlOrMailRE=new RegExp('('+url+')|('+mail+')','i'),zeroWidthSpace=(function(){var zws,ua=navigator.userAgent.toLowerCase();zws=String.fromCharCode(8203);if(ua.indexOf('msie 6')!==-1){zws='';}if(ua.indexOf('opera')!==-1&&ua.indexOf('version/10.00')!==-1){zws='';}return zws;}()),createElem=function(tagname,context){context=context||contextWindow;if(document.createElementNS){return context.document.createElementNS('http://www.w3.org/1999/xhtml',tagname);}else if(document.createElement){return context.document.createElement(tagname);}},onHyphenationDone=function(){},onError=function(e){window.alert("Hyphenator.js says:\n\nAn Error ocurred:\n"+e.message);},selectorFunction=function(){var tmp,el=[],i,l;if(document.getElementsByClassName){el=contextWindow.document.getElementsByClassName(hyphenateClass);}else{tmp=contextWindow.document.getElementsByTagName('*');l=tmp.length;for(i=0;i<l;i++){if(tmp[i].className.indexOf(hyphenateClass)!==-1&&tmp[i].className.indexOf(dontHyphenateClass)===-1){el.push(tmp[i]);}}}return el;},intermediateState='hidden',hyphen=String.fromCharCode(173),urlhyphen=zeroWidthSpace,safeCopy=true,Expando=(function(){var container={},name="HyphenatorExpando_"+Math.random(),uuid=0;return{getDataForElem:function(elem){return container[elem[name].id];},setDataForElem:function(elem,data){var id;if(elem[name]&&elem[name].id!==''){id=elem[name].id;}else{id=uuid++;elem[name]={'id':id};}container[id]=data;},appendDataForElem:function(elem,data){var k;for(k in data){if(data.hasOwnProperty(k)){container[elem[name].id][k]=data[k];}}},delDataOfElem:function(elem){delete container[elem[name]];}};}()),runOnContentLoaded=function(w,f){var DOMContentLoaded=function(){},toplevel,hyphRunForThis={};if(documentLoaded&&!hyphRunForThis[w.location.href]){f();hyphRunForThis[w.location.href]=true;return;}function init(context){contextWindow=context||window;if(!hyphRunForThis[contextWindow.location.href]&&(!documentLoaded||contextWindow!=window.parent)){documentLoaded=true;f();hyphRunForThis[contextWindow.location.href]=true;}}function doScrollCheck(){try{document.documentElement.doScroll("left");}catch(error){setTimeout(doScrollCheck,1);return;}init(window);}function doOnLoad(){var i,haveAccess,fl=window.frames.length;if(doFrames&&fl>0){for(i=0;i<fl;i++){haveAccess=undefined;try{haveAccess=window.frames[i].document.toString();}catch(e){haveAccess=undefined;}if(!!haveAccess){init(window.frames[i]);}}contextWindow=window;f();hyphRunForThis[window.location.href]=true;}else{init(window);}}if(document.addEventListener){DOMContentLoaded=function(){document.removeEventListener("DOMContentLoaded",DOMContentLoaded,false);if(doFrames&&window.frames.length>0){return;}else{init(window);}};}else if(document.attachEvent){DOMContentLoaded=function(){if(document.readyState==="complete"){document.detachEvent("onreadystatechange",DOMContentLoaded);if(doFrames&&window.frames.length>0){return;}else{init(window);}}};}if(document.addEventListener){document.addEventListener("DOMContentLoaded",DOMContentLoaded,false);window.addEventListener("load",doOnLoad,false);}else if(document.attachEvent){document.attachEvent("onreadystatechange",DOMContentLoaded);window.attachEvent("onload",doOnLoad);toplevel=false;try{toplevel=window.frameElement===null;}catch(e){}if(document.documentElement.doScroll&&toplevel){doScrollCheck();}}},getLang=function(el,fallback){if(!!el.getAttribute('lang')){return el.getAttribute('lang').toLowerCase();}try{if(!!el.getAttribute('xml:lang')){return el.getAttribute('xml:lang').toLowerCase();}}catch(ex){}if(el.tagName!=='HTML'){return getLang(el.parentNode,true);}if(fallback){return mainLanguage;}return null;},autoSetMainLanguage=function(w){w=w||contextWindow;var el=w.document.getElementsByTagName('html')[0],m=w.document.getElementsByTagName('meta'),i,text,e,ul;mainLanguage=getLang(el,false);if(!mainLanguage){for(i=0;i<m.length;i++){if(!!m[i].getAttribute('http-equiv')&&(m[i].getAttribute('http-equiv').toLowerCase()==='content-language')){mainLanguage=m[i].getAttribute('content').toLowerCase();}if(!!m[i].getAttribute('name')&&(m[i].getAttribute('name').toLowerCase()==='dc.language')){mainLanguage=m[i].getAttribute('content').toLowerCase();}if(!!m[i].getAttribute('name')&&(m[i].getAttribute('name').toLowerCase()==='language')){mainLanguage=m[i].getAttribute('content').toLowerCase();}}}if(!mainLanguage&&doFrames&&contextWindow!=window.parent){autoSetMainLanguage(window.parent);}if(!mainLanguage&&defaultLanguage!==''){mainLanguage=defaultLanguage;}if(!mainLanguage){text='';ul=navigator.language?navigator.language:navigator.userLanguage;ul=ul.substring(0,2);if(prompterStrings.hasOwnProperty(ul)){text=prompterStrings[ul];}else{text=prompterStrings.en;}text+=' (ISO 639-1)\n\n'+languageHint;mainLanguage=window.prompt(unescape(text),ul).toLowerCase();}if(!supportedLang.hasOwnProperty(mainLanguage)){if(supportedLang.hasOwnProperty(mainLanguage.split('-')[0])){mainLanguage=mainLanguage.split('-')[0];}else{e=new Error('The language "'+mainLanguage+'" is not yet supported.');throw e;}}},gatherDocumentInfos=function(){var elToProcess,tmp,i=0,process=function(el,hide,lang){var n,i=0,hyphenatorSettings={};if(hide&&intermediateState==='hidden'){if(!!el.getAttribute('style')){hyphenatorSettings.hasOwnStyle=true;}else{hyphenatorSettings.hasOwnStyle=false;}hyphenatorSettings.isHidden=true;el.style.visibility='hidden';}if(el.lang&&typeof(el.lang)==='string'){hyphenatorSettings.language=el.lang.toLowerCase();}else if(lang){hyphenatorSettings.language=lang.toLowerCase();}else{hyphenatorSettings.language=getLang(el,true);}lang=hyphenatorSettings.language;if(supportedLang[lang]){docLanguages[lang]=true;}else{if(supportedLang.hasOwnProperty(lang.split('-')[0])){lang=lang.split('-')[0];hyphenatorSettings.language=lang;}else if(!isBookmarklet){onError(new Error('Language '+lang+' is not yet supported.'));}}Expando.setDataForElem(el,hyphenatorSettings);elements.push(el);while(!!(n=el.childNodes[i++])){if(n.nodeType===1&&!dontHyphenate[n.nodeName.toLowerCase()]&&n.className.indexOf(dontHyphenateClass)===-1&&!(n in elToProcess)){process(n,false,lang);}}};if(isBookmarklet){elToProcess=contextWindow.document.getElementsByTagName('body')[0];process(elToProcess,false,mainLanguage);}else{elToProcess=selectorFunction();while(!!(tmp=elToProcess[i++])){process(tmp,true,'');}}if(!Hyphenator.languages.hasOwnProperty(mainLanguage)){docLanguages[mainLanguage]=true;}else if(!Hyphenator.languages[mainLanguage].prepared){docLanguages[mainLanguage]=true;}if(elements.length>0){Expando.appendDataForElem(elements[elements.length-1],{isLast:true});}},convertPatterns=function(lang){var plen,anfang,ende,pats,pat,key,tmp={};pats=Hyphenator.languages[lang].patterns;for(plen in pats){if(pats.hasOwnProperty(plen)){plen=parseInt(plen,10);anfang=0;ende=plen;while(!!(pat=pats[plen].substring(anfang,ende))){key=pat.replace(/\d/g,'');tmp[key]=pat;anfang=ende;ende+=plen;}}}Hyphenator.languages[lang].patterns=tmp;Hyphenator.languages[lang].patternsConverted=true;},convertExceptionsToObject=function(exc){var w=exc.split(', '),r={},i,l,key;for(i=0,l=w.length;i<l;i++){key=w[i].replace(/-/g,'');if(!r.hasOwnProperty(key)){r[key]=w[i];}}return r;},loadPatterns=function(lang){var url,xhr,head,script;if(supportedLang[lang]&&!Hyphenator.languages[lang]){url=basePath+'patterns/'+supportedLang[lang];}else{return;}if(isLocal&&!isBookmarklet){xhr=null;if(typeof XMLHttpRequest!=='undefined'){xhr=new XMLHttpRequest();}if(!xhr){try{xhr=new ActiveXObject("Msxml2.XMLHTTP");}catch(e){xhr=null;}}if(xhr){xhr.open('HEAD',url,false);xhr.setRequestHeader('Cache-Control','no-cache');xhr.send(null);if(xhr.status===404){onError(new Error('Could not load\n'+url));delete docLanguages[lang];return;}}}if(createElem){head=window.document.getElementsByTagName('head').item(0);script=createElem('script',window);script.src=url;script.type='text/javascript';head.appendChild(script);}},prepareLanguagesObj=function(lang){var lo=Hyphenator.languages[lang],wrd;if(!lo.prepared){if(enableCache){lo.cache={};lo['cache']=lo.cache;}if(enableReducedPatternSet){lo.redPatSet={};}if(lo.hasOwnProperty('exceptions')){Hyphenator.addExceptions(lang,lo.exceptions);delete lo.exceptions;}if(exceptions.hasOwnProperty('global')){if(exceptions.hasOwnProperty(lang)){exceptions[lang]+=', '+exceptions.global;}else{exceptions[lang]=exceptions.global;}}if(exceptions.hasOwnProperty(lang)){lo.exceptions=convertExceptionsToObject(exceptions[lang]);delete exceptions[lang];}else{lo.exceptions={};}convertPatterns(lang);wrd='[\\w'+lo.specialChars+'@'+String.fromCharCode(173)+String.fromCharCode(8204)+'-]{'+min+',}';lo.genRegExp=new RegExp('('+url+')|('+mail+')|('+wrd+')','gi');lo.prepared=true;}if(!!storage){try{storage.setItem('Hyphenator_'+lang,window.JSON.stringify(lo));}catch(e){}}},prepare=function(callback){var lang,interval,tmp1,tmp2;if(!enableRemoteLoading){for(lang in Hyphenator.languages){if(Hyphenator.languages.hasOwnProperty(lang)){prepareLanguagesObj(lang);}}state=2;callback();return;}state=1;for(lang in docLanguages){if(docLanguages.hasOwnProperty(lang)){if(!!storage&&storage.getItem('Hyphenator_'+lang)){Hyphenator.languages[lang]=window.JSON.parse(storage.getItem('Hyphenator_'+lang));if(exceptions.hasOwnProperty('global')){tmp1=convertExceptionsToObject(exceptions.global);for(tmp2 in tmp1){if(tmp1.hasOwnProperty(tmp2)){Hyphenator.languages[lang].exceptions[tmp2]=tmp1[tmp2];}}}if(exceptions.hasOwnProperty(lang)){tmp1=convertExceptionsToObject(exceptions[lang]);for(tmp2 in tmp1){if(tmp1.hasOwnProperty(tmp2)){Hyphenator.languages[lang].exceptions[tmp2]=tmp1[tmp2];}}delete exceptions[lang];}tmp1='[\\w'+Hyphenator.languages[lang].specialChars+'@'+String.fromCharCode(173)+String.fromCharCode(8204)+'-]{'+min+',}';Hyphenator.languages[lang].genRegExp=new RegExp('('+url+')|('+mail+')|('+tmp1+')','gi');delete docLanguages[lang];continue;}else{loadPatterns(lang);}}}if(countObjProps(docLanguages)===0){state=2;callback();return;}interval=window.setInterval(function(){var finishedLoading=true,lang;for(lang in docLanguages){if(docLanguages.hasOwnProperty(lang)){finishedLoading=false;if(!!Hyphenator.languages[lang]){delete docLanguages[lang];prepareLanguagesObj(lang);}}}if(finishedLoading){window.clearInterval(interval);state=2;callback();}},100);},toggleBox=function(){var myBox,bdy,myIdAttribute,myTextNode,myClassAttribute,text=(Hyphenator.doHyphenation?'Hy-phen-a-tion':'Hyphenation');if(!!(myBox=contextWindow.document.getElementById('HyphenatorToggleBox'))){myBox.firstChild.data=text;}else{bdy=contextWindow.document.getElementsByTagName('body')[0];myBox=createElem('div',contextWindow);myIdAttribute=contextWindow.document.createAttribute('id');myIdAttribute.nodeValue='HyphenatorToggleBox';myClassAttribute=contextWindow.document.createAttribute('class');myClassAttribute.nodeValue=dontHyphenateClass;myTextNode=contextWindow.document.createTextNode(text);myBox.appendChild(myTextNode);myBox.setAttributeNode(myIdAttribute);myBox.setAttributeNode(myClassAttribute);myBox.onclick=Hyphenator.toggleHyphenation;myBox.style.position='absolute';myBox.style.top='0px';myBox.style.right='0px';myBox.style.margin='0';myBox.style.backgroundColor='#AAAAAA';myBox.style.color='#FFFFFF';myBox.style.font='6pt Arial';myBox.style.letterSpacing='0.2em';myBox.style.padding='3px';myBox.style.cursor='pointer';myBox.style.WebkitBorderBottomLeftRadius='4px';myBox.style.MozBorderRadiusBottomleft='4px';bdy.appendChild(myBox);}},hyphenateWord=function(lang,word){var lo=Hyphenator.languages[lang],parts,i,l,w,wl,s,hypos,p,maxwins,win,pat=false,patk,c,t,n,numb3rs,inserted,hyphenatedword,val,subst,ZWNJpos=[];if(word===''){return'';}if(word.indexOf(hyphen)!==-1){return word;}if(enableCache&&lo.cache.hasOwnProperty(word)){return lo.cache[word];}if(lo.exceptions.hasOwnProperty(word)){return lo.exceptions[word].replace(/-/g,hyphen);}if(word.indexOf('-')!==-1){parts=word.split('-');for(i=0,l=parts.length;i<l;i++){parts[i]=hyphenateWord(lang,parts[i]);}return parts.join('-');}w='_'+word+'_';if(word.indexOf(String.fromCharCode(8204))!==-1){parts=w.split(String.fromCharCode(8204));w=parts.join('');for(i=0,l=parts.length;i<l;i++){parts[i]=parts[i].length.toString();}parts.pop();ZWNJpos=parts;}wl=w.length;s=w.split('');if(!!lo.charSubstitution){for(subst in lo.charSubstitution){if(lo.charSubstitution.hasOwnProperty(subst)){w=w.replace(new RegExp(subst,'g'),lo.charSubstitution[subst]);}}}if(word.indexOf("'")!==-1){w=w.toLowerCase().replace("'","'");}else{w=w.toLowerCase();}hypos=[];numb3rs={'0':0,'1':1,'2':2,'3':3,'4':4,'5':5,'6':6,'7':7,'8':8,'9':9};n=wl-lo.shortestPattern;for(p=0;p<=n;p++){maxwins=Math.min((wl-p),lo.longestPattern);for(win=lo.shortestPattern;win<=maxwins;win++){if(lo.patterns.hasOwnProperty(patk=w.substring(p,p+win))){pat=lo.patterns[patk];if(enableReducedPatternSet&&(typeof pat==='string')){lo.redPatSet[patk]=pat;}if(typeof pat==='string'){t=0;val=[];for(i=0;i<pat.length;i++){if(!!(c=numb3rs[pat.charAt(i)])){val.push(i-t,c);t++;}}pat=lo.patterns[patk]=val;}}else{continue;}for(i=0;i<pat.length;i++){c=p-1+pat[i];if(!hypos[c]||hypos[c]<pat[i+1]){hypos[c]=pat[i+1];}i++;}}}inserted=0;for(i=lo.leftmin;i<=(wl-2-lo.rightmin);i++){if(ZWNJpos.length>0&&ZWNJpos[0]===i){ZWNJpos.shift();s.splice(i+inserted-1,0,String.fromCharCode(8204));inserted++;}if(!!(hypos[i]&1)){s.splice(i+inserted+1,0,hyphen);inserted++;}}hyphenatedword=s.slice(1,-1).join('');if(enableCache){lo.cache[word]=hyphenatedword;}return hyphenatedword;},hyphenateURL=function(url){return url.replace(/([:\/\.\?#&_,;!@]+)/gi,'$&'+urlhyphen);},removeHyphenationFromElement=function(el){var h,i=0,n;switch(hyphen){case'|':h='\\|';break;case'+':h='\\+';break;case'*':h='\\*';break;default:h=hyphen;}while(!!(n=el.childNodes[i++])){if(n.nodeType===3){n.data=n.data.replace(new RegExp(h,'g'),'');n.data=n.data.replace(new RegExp(zeroWidthSpace,'g'),'');}else if(n.nodeType===1){removeHyphenationFromElement(n);}}},registerOnCopy=function(el){var body=el.ownerDocument.getElementsByTagName('body')[0],shadow,selection,range,rangeShadow,restore,oncopyHandler=function(e){e=e||window.event;var target=e.target||e.srcElement,currDoc=target.ownerDocument,body=currDoc.getElementsByTagName('body')[0],targetWindow='defaultView'in currDoc?currDoc.defaultView:currDoc.parentWindow;if(target.tagName&&dontHyphenate[target.tagName.toLowerCase()]){return;}shadow=currDoc.createElement('div');shadow.style.overflow='hidden';shadow.style.position='absolute';shadow.style.top='-5000px';shadow.style.height='1px';body.appendChild(shadow);if(!!window.getSelection){selection=targetWindow.getSelection();range=selection.getRangeAt(0);shadow.appendChild(range.cloneContents());removeHyphenationFromElement(shadow);selection.selectAllChildren(shadow);restore=function(){shadow.parentNode.removeChild(shadow);selection.addRange(range);};}else{selection=targetWindow.document.selection;range=selection.createRange();shadow.innerHTML=range.htmlText;removeHyphenationFromElement(shadow);rangeShadow=body.createTextRange();rangeShadow.moveToElementText(shadow);rangeShadow.select();restore=function(){shadow.parentNode.removeChild(shadow);if(range.text!==""){range.select();}};}window.setTimeout(restore,0);};if(!body){return;}el=el||body;if(window.addEventListener){el.addEventListener("copy",oncopyHandler,false);}else{el.attachEvent("oncopy",oncopyHandler);}},hyphenateElement=function(el){var hyphenatorSettings=Expando.getDataForElem(el),lang=hyphenatorSettings.language,hyphenate,n,i,controlOrphans=function(part){var h,r;switch(hyphen){case'|':h='\\|';break;case'+':h='\\+';break;case'*':h='\\*';break;default:h=hyphen;}if(orphanControl>=2){r=part.split(' ');r[1]=r[1].replace(new RegExp(h,'g'),'');r[1]=r[1].replace(new RegExp(zeroWidthSpace,'g'),'');r=r.join(' ');}if(orphanControl===3){r=r.replace(/[ ]+/g,String.fromCharCode(160));}return r;};if(Hyphenator.languages.hasOwnProperty(lang)){hyphenate=function(word){if(!Hyphenator.doHyphenation){return word;}else if(urlOrMailRE.test(word)){return hyphenateURL(word);}else{return hyphenateWord(lang,word);}};if(safeCopy&&(el.tagName.toLowerCase()!=='body')){registerOnCopy(el);}i=0;while(!!(n=el.childNodes[i++])){if(n.nodeType===3&&n.data.length>=min){n.data=n.data.replace(Hyphenator.languages[lang].genRegExp,hyphenate);if(orphanControl!==1){n.data=n.data.replace(/[\S]+ [\S]+$/,controlOrphans);}}}}if(hyphenatorSettings.isHidden&&intermediateState==='hidden'){el.style.visibility='visible';if(!hyphenatorSettings.hasOwnStyle){el.setAttribute('style','');el.removeAttribute('style');}else{if(el.style.removeProperty){el.style.removeProperty('visibility');}else if(el.style.removeAttribute){el.style.removeAttribute('visibility');}}}if(hyphenatorSettings.isLast){state=3;documentCount--;if(documentCount>(-1000)&&documentCount<=0){documentCount=(-2000);onHyphenationDone();}}},hyphenateDocument=function(){function bind(fun,arg){return function(){return fun(arg);};}var i=0,el;while(!!(el=elements[i++])){if(el.ownerDocument.location.href===contextWindow.location.href){window.setTimeout(bind(hyphenateElement,el),0);}}},removeHyphenationFromDocument=function(){var i=0,el;while(!!(el=elements[i++])){removeHyphenationFromElement(el);}state=4;},createStorage=function(){try{if(storageType!=='none'&&typeof(window.localStorage)!=='undefined'&&typeof(window.sessionStorage)!=='undefined'&&typeof(window.JSON.stringify)!=='undefined'&&typeof(window.JSON.parse)!=='undefined'){switch(storageType){case'session':storage=window.sessionStorage;break;case'local':storage=window.localStorage;break;default:storage=undefined;break;}}}catch(f){}},storeConfiguration=function(){if(!storage){return;}var settings={'STORED':true,'classname':hyphenateClass,'donthyphenateclassname':dontHyphenateClass,'minwordlength':min,'hyphenchar':hyphen,'urlhyphenchar':urlhyphen,'togglebox':toggleBox,'displaytogglebox':displayToggleBox,'remoteloading':enableRemoteLoading,'enablecache':enableCache,'onhyphenationdonecallback':onHyphenationDone,'onerrorhandler':onError,'intermediatestate':intermediateState,'selectorfunction':selectorFunction,'safecopy':safeCopy,'doframes':doFrames,'storagetype':storageType,'orphancontrol':orphanControl,'dohyphenation':Hyphenator.doHyphenation,'persistentconfig':persistentConfig,'defaultlanguage':defaultLanguage};storage.setItem('Hyphenator_config',window.JSON.stringify(settings));},restoreConfiguration=function(){var settings;if(storage.getItem('Hyphenator_config')){settings=window.JSON.parse(storage.getItem('Hyphenator_config'));Hyphenator.config(settings);}};return{version:'3.3.0',doHyphenation:true,languages:{},config:function(obj){var assert=function(name,type){if(typeof obj[name]===type){return true;}else{onError(new Error('Config onError: '+name+' must be of type '+type));return false;}},key;if(obj.hasOwnProperty('storagetype')){if(assert('storagetype','string')){storageType=obj.storagetype;}if(!storage){createStorage();}}if(!obj.hasOwnProperty('STORED')&&storage&&obj.hasOwnProperty('persistentconfig')&&obj.persistentconfig===true){restoreConfiguration();}for(key in obj){if(obj.hasOwnProperty(key)){switch(key){case'STORED':break;case'classname':if(assert('classname','string')){hyphenateClass=obj[key];}break;case'donthyphenateclassname':if(assert('donthyphenateclassname','string')){dontHyphenateClass=obj[key];}break;case'minwordlength':if(assert('minwordlength','number')){min=obj[key];}break;case'hyphenchar':if(assert('hyphenchar','string')){if(obj.hyphenchar==='&shy;'){obj.hyphenchar=String.fromCharCode(173);}hyphen=obj[key];}break;case'urlhyphenchar':if(obj.hasOwnProperty('urlhyphenchar')){if(assert('urlhyphenchar','string')){urlhyphen=obj[key];}}break;case'togglebox':if(assert('togglebox','function')){toggleBox=obj[key];}break;case'displaytogglebox':if(assert('displaytogglebox','boolean')){displayToggleBox=obj[key];}break;case'remoteloading':if(assert('remoteloading','boolean')){enableRemoteLoading=obj[key];}break;case'enablecache':if(assert('enablecache','boolean')){enableCache=obj[key];}break;case'enablereducedpatternset':if(assert('enablereducedpatternset','boolean')){enableReducedPatternSet=obj[key];}break;case'onhyphenationdonecallback':if(assert('onhyphenationdonecallback','function')){onHyphenationDone=obj[key];}break;case'onerrorhandler':if(assert('onerrorhandler','function')){onError=obj[key];}break;case'intermediatestate':if(assert('intermediatestate','string')){intermediateState=obj[key];}break;case'selectorfunction':if(assert('selectorfunction','function')){selectorFunction=obj[key];}break;case'safecopy':if(assert('safecopy','boolean')){safeCopy=obj[key];}break;case'doframes':if(assert('doframes','boolean')){doFrames=obj[key];}break;case'storagetype':if(assert('storagetype','string')){storageType=obj[key];}break;case'orphancontrol':if(assert('orphancontrol','number')){orphanControl=obj[key];}break;case'dohyphenation':if(assert('dohyphenation','boolean')){Hyphenator.doHyphenation=obj[key];}break;case'persistentconfig':if(assert('persistentconfig','boolean')){persistentConfig=obj[key];}break;case'defaultlanguage':if(assert('defaultlanguage','string')){defaultLanguage=obj[key];}break;default:onError(new Error('Hyphenator.config: property '+key+' not known.'));}}}if(storage&&persistentConfig){storeConfiguration();}},run:function(){documentCount=0;var process=function(){try{if(contextWindow.document.getElementsByTagName('frameset').length>0){return;}documentCount++;autoSetMainLanguage(undefined);gatherDocumentInfos();prepare(hyphenateDocument);if(displayToggleBox){toggleBox();}}catch(e){onError(e);}},i,haveAccess,fl=window.frames.length;if(!storage){createStorage();}if(!documentLoaded&&!isBookmarklet){runOnContentLoaded(window,process);}if(isBookmarklet||documentLoaded){if(doFrames&&fl>0){for(i=0;i<fl;i++){haveAccess=undefined;try{haveAccess=window.frames[i].document.toString();}catch(e){haveAccess=undefined;}if(!!haveAccess){contextWindow=window.frames[i];process();}}}contextWindow=window;process();}},addExceptions:function(lang,words){if(lang===''){lang='global';}if(exceptions.hasOwnProperty(lang)){exceptions[lang]+=", "+words;}else{exceptions[lang]=words;}},hyphenate:function(target,lang){var hyphenate,n,i;if(Hyphenator.languages.hasOwnProperty(lang)){if(!Hyphenator.languages[lang].prepared){prepareLanguagesObj(lang);}hyphenate=function(word){if(urlOrMailRE.test(word)){return hyphenateURL(word);}else{return hyphenateWord(lang,word);}};if(typeof target==='string'||target.constructor===String){return target.replace(Hyphenator.languages[lang].genRegExp,hyphenate);}else if(typeof target==='object'){i=0;while(!!(n=target.childNodes[i++])){if(n.nodeType===3&&n.data.length>=min){n.data=n.data.replace(Hyphenator.languages[lang].genRegExp,hyphenate);}else if(n.nodeType===1){if(n.lang!==''){Hyphenator.hyphenate(n,n.lang);}else{Hyphenator.hyphenate(n,lang);}}}}}else{onError(new Error('Language "'+lang+'" is not loaded.'));}},getRedPatternSet:function(lang){return Hyphenator.languages[lang].redPatSet;},isBookmarklet:function(){return isBookmarklet;},getConfigFromURI:function(){var loc=null,re={},jsArray=document.getElementsByTagName('script'),i,j,l,s,gp,option;for(i=0,l=jsArray.length;i<l;i++){if(!!jsArray[i].getAttribute('src')){loc=jsArray[i].getAttribute('src');}if(!loc){continue;}else{s=loc.indexOf('Hyphenator.js?');if(s===-1){continue;}gp=loc.substring(s+14).split('&');for(j=0;j<gp.length;j++){option=gp[j].split('=');if(option[0]==='bm'){continue;}if(option[1]==='true'){re[option[0]]=true;continue;}if(option[1]==='false'){re[option[0]]=false;continue;}if(isFinite(option[1])){re[option[0]]=parseInt(option[1],10);continue;}if(option[0]==='onhyphenationdonecallback'){re[option[0]]=new Function('',option[1]);continue;}re[option[0]]=option[1];}break;}}return re;},toggleHyphenation:function(){if(Hyphenator.doHyphenation){removeHyphenationFromDocument();Hyphenator.doHyphenation=false;storeConfiguration();toggleBox();}else{hyphenateDocument();Hyphenator.doHyphenation=true;storeConfiguration();toggleBox();}}};}(window));Hyphenator['languages']=Hyphenator.languages;Hyphenator['config']=Hyphenator.config;Hyphenator['run']=Hyphenator.run;Hyphenator['addExceptions']=Hyphenator.addExceptions;Hyphenator['hyphenate']=Hyphenator.hyphenate;Hyphenator['getRedPatternSet']=Hyphenator.getRedPatternSet;Hyphenator['isBookmarklet']=Hyphenator.isBookmarklet;Hyphenator['getConfigFromURI']=Hyphenator.getConfigFromURI;Hyphenator['toggleHyphenation']=Hyphenator.toggleHyphenation;window['Hyphenator']=Hyphenator;if(Hyphenator.isBookmarklet()){Hyphenator.config({displaytogglebox:true,intermediatestate:'visible',doframes:true});Hyphenator.config(Hyphenator.getConfigFromURI());Hyphenator.run();}Hyphenator.languages['pt']={leftmin:2,rightmin:4,shortestPattern:1,longestPattern:3,specialChars:"áéíóúãõàçâêô",patterns:{2:"1-",3:"1ba1be1bi1bo1bu1bá1bâ1bã1bé1bí1bó1bú1bê1bõ1ca1ce1ci1co1cu1cá1câ1cã1cé1cí1có1cú1cê1cõ1ça1çe1çi1ço1çu1çá1çâ1çã1çé1çí1çó1çú1çê1çõ1da1de1di1do1du1dá1dâ1dã1dé1dí1dó1dú1dê1dõ1fa1fe1fi1fo1fu1fá1fâ1fã1fé1fí1fó1fú1fê1fõ1ga1ge1gi1go1gu1gá1gâ1gã1gé1gí1gó1gú1gê1gõ1ja1je1ji1jo1ju1já1jâ1jã1jé1jí1jó1jú1jê1jõ1ka1ke1ki1ko1ku1ká1kâ1kã1ké1kí1kó1kú1kê1kõ1la1le1li1lo1lu1lá1lâ1lã1lé1lí1ló1lú1lê1lõ1ma1me1mi1mo1mu1má1mâ1mã1mé1mí1mó1mú1mê1mõ1na1ne1ni1no1nu1ná1nâ1nã1né1ní1nó1nú1nê1nõ1pa1pe1pi1po1pu1pá1pâ1pã1pé1pí1pó1pú1pê1põ1ra1re1ri1ro1ru1rá1râ1rã1ré1rí1ró1rú1rê1rõ1sa1se1si1so1su1sá1sâ1sã1sé1sí1só1sú1sê1sõ1ta1te1ti1to1tu1tá1tâ1tã1té1tí1tó1tú1tê1tõ1va1ve1vi1vo1vu1vá1vâ1vã1vé1ví1vó1vú1vê1võ1xa1xe1xi1xo1xu1xá1xâ1xã1xé1xí1xó1xú1xê1xõ1za1ze1zi1zo1zu1zá1zâ1zã1zé1zí1zó1zú1zê1zõa3aa3ea3oc3ce3ae3ee3oi3ai3ei3ii3oi3âi3êi3ôo3ao3eo3or3rs3su3au3eu3ou3u",4:"1b2l1b2r1c2h1c2l1c2r1d2l1d2r1f2l1f2r1g2l1g2r1k2l1k2r1l2h1n2h1p2l1p2r1t2l1t2r1v2l1v2r1w2l1w2r",5:"1gu4a1gu4e1gu4i1gu4o1qu4a1qu4e1qu4i1qu4o"}};Hyphenator.run();