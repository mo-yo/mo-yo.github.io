function socialicons_imSideBar_pluginAppObj_02(){function resizeSocials_imSideBar_pluginAppObj_02(){var buttonPerRow,fact;$("#imSideBar_pluginAppObj_02 .social-icon").removeClass("last-item-row");$("#imSideBar_pluginAppObj_02 .social-icon").removeClass("last-row");$("#imSideBar_pluginAppObj_02 .social-icon").removeClass("one-row");containerWidth=$("#imSideBar_pluginAppObj_02").width();buttonPerRow=1;!0&&(buttonPerRow=getButtonPerRow());buttonPerRow==1?$("#imSideBar_pluginAppObj_02 .social-icon:last-child").addClass("last-row"):numBtn==buttonPerRow?($("#imSideBar_pluginAppObj_02 .social-icon").addClass("last-row"),$("#imSideBar_pluginAppObj_02 .social-icon:last-child").addClass("last-item-row")):($("#imSideBar_pluginAppObj_02 .social-icon:nth-child("+buttonPerRow+"n)").addClass("last-item-row"),$("#imSideBar_pluginAppObj_02 .social-icon:nth-child(n+"+parseInt(buttonPerRow+1)+")").addClass("last-row"));fact=containerWidth<btnWidth?containerWidth/btnWidth:1;$("#imSideBar_pluginAppObj_02 .social-icon, #imSideBar_pluginAppObj_02 .sides-container").css({width:btnWidth*fact,height:btnHeight*fact})}function getButtonPerRow(){for(var remaining=containerWidth-btnWidth,count=1;remaining>=btnWidth+(count==numBtn-1?0:btnMargin);){if(count++,count==numBtn)break;remaining-=btnWidth+btnMargin}return count}var containerWidth,btnWidth,btnHeight,btnMargin,numBtn;x5engine.boot.push(function(){btnWidth=35;btnHeight=35;btnMargin=9;numBtn=$("#imSideBar_pluginAppObj_02 .social-icon").length;$("#imContent").on("breakpointChangedOrFluid",function(){resizeSocials_imSideBar_pluginAppObj_02()});resizeSocials_imSideBar_pluginAppObj_02()})}