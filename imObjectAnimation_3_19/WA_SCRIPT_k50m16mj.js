(function($){function loadjscssfile(filename,filetype){var fileref;filetype=="js"?(fileref=document.createElement("script"),fileref.setAttribute("type","text/javascript"),fileref.setAttribute("src",filename)):filetype=="css"&&(fileref=document.createElement("link"),fileref.setAttribute("rel","stylesheet"),fileref.setAttribute("type","text/css"),fileref.setAttribute("href",filename));typeof fileref!="undefined"&&document.getElementsByTagName("head")[0].appendChild(fileref)}function addLoadEvent(func){functs.push(func);var oldonload=window.onload;window.onload=typeof onload!="function"?func:function(){oldonload&&oldonload();func()}}function loadResources(thisId){var firstWaDiv=$(".wascript:first"),firstId=$(firstWaDiv).attr("id");firstId==thisId&&(loadjscssfile(""+x5engine.settings.currentPath+"imObjectAnimation_3_19/WA.min.js","js"),loadjscssfile(""+x5engine.settings.currentPath+"wa-animations/modernizr.custom.43133.min.js","js"),loadjscssfile(""+x5engine.settings.currentPath+"wa-animations/spin.min.js","js"),loadjscssfile(""+x5engine.settings.currentPath+"imObjectAnimation_3_19/JQ_Textualizer.min.js","js"),loadjscssfile(""+x5engine.settings.currentPath+"imObjectAnimation_3_19/WA.min.css","css"));loadjscssfile(""+x5engine.settings.currentPath+"imObjectAnimation_3_19/ani.css","css")}function New_Projectstart(){try{if(navigator.userAgent.match(/msie/i))return;var New_Project=new WA;New_Project.custom={};New_Project.stage=[{Oid:"X793541d_c589c307c1c9b366b727d28bf9d29169",Name:"SCENE_1",Autostart:"true",BackgroundColor:"#FFFFFF",SceneEnd:100,Position:"absolute",Perspective:"800px",Top:"0px",Left:"0px",Timelines:[{Oid:"MAIN_TIMELINE",Name:"Main timeline",Objects:[{Oid:"X793543d_c589c307c1c9b366b727d28bf9d29169",Type:"box",InnerHTML:"Привет Всем",Tag:"div",Position:"absolute",Top:"152px",Left:"35px",Height:"28px",Width:"148px",ZIndex:"1",Display:"block",TextAlign:"center",Bold:"true",TextColor:"#F20B7B",Opacity:"1",FontFamily:"Arial",FontSize:"20px",LineHeight:"1em",Visible:"true",Pressed:[],Hover:[]},{Oid:"X793548d_c589c307c1c9b366b727d28bf9d29169",Type:"box",InnerHTML:'<title="Ванна" alt="Ванна"/>',Tag:"div",Position:"absolute",Top:"2px",Left:"1px",Height:"143px",Width:"218px",ZIndex:"2",BackgroundImage:""+x5engine.settings.currentPath+"imObjectAnimation_3_19/v3.jpg",BackgroundSize:"100% 100%",Display:"block",TextAlign:"center",TextColor:"#000000",Opacity:"1",FontFamily:"Arial",FontSize:"14px",LineHeight:"1em",Visible:"true",Pressed:[],Hover:[]},{Oid:"X79354d4_c589c307c1c9b366b727d28bf9d29169",Type:"box",InnerHTML:'<svg viewBox="0 0 24 24" width="100%" height="100%" preserveAspectRatio="none"><rect width="24" height="24" x="0" y="0" style="fill:#F7DA71;stroke:#000000;stroke-width:1;" vector-effect="non-scaling-stroke" /><\/svg>',Tag:"div",Position:"absolute",Top:"2px",Left:"1px",Height:"225px",Width:"220px",ZIndex:"0",Display:"block",TextAlign:"left",TextColor:"#000000",Opacity:"1",FontFamily:"Arial",FontSize:"14px",LineHeight:"1em",Visible:"true",Pressed:[],Hover:[]}],Transforms:[],Transitions:[],Changes:[],Events:[]}]}];New_Project.init();New_Project.stageHeight=227;New_Project.stageWidth=221;New_Project.t="413002711221533250853107850719651035805";New_Project.stageInitialTransition="instant";New_Project.stageInitialTransitionDirection="left";New_Project.stageInitialTransitionSpeed=1e3;New_Project.responsiveStage=!1;New_Project.responsiveStageKeepRatio=!1;New_Project.scaleX=1;New_Project.scaleY=1;New_Project.scale=1;New_Project.showBrowserCompatibilityCheck=!1;New_Project.loaderType=1;New_Project.loaderBackgroundColor="#000";New_Project.loaderForegroundColor="#fff";New_Project.stageInitialScene="X793541d_c589c307c1c9b366b727d28bf9d29169";New_Project.debug=!1;New_Project.preloadImages=!0;New_Project.imagesToPreload=[""+x5engine.settings.currentPath+"imObjectAnimation_3_19/v3.jpg"];New_Project.createWorkspace("imObjectAnimation_3_19_stage")}catch(e){}}var functs=Array();window.fD8C72F587160904BD075FD67F5823C82=function(callback){if(window.WA){for(var i=0;i<functs.length;i++)functs[i]();$.isFunction(callback)&&callback()}else setTimeout(function(){fD8C72F587160904BD075FD67F5823C82(callback)},100)};loadResources("imObjectAnimation_3_19_stage");addLoadEvent(New_Projectstart)})(wajq)