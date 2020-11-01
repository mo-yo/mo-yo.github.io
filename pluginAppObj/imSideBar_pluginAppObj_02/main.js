function socialicons_imSideBar_pluginAppObj_02() {
    
    var containerWidth;
    var btnWidth;
    var btnHeight;
    var btnMargin;
    var numBtn; 
    
    x5engine.boot.push(function(){
        
        btnWidth = 35;
        btnHeight = 35;
        btnMargin = 9;
        numBtn = $("#imSideBar_pluginAppObj_02 .social-icon").length;
        
        $('#imContent').on('breakpointChangedOrFluid', function (e, breakpoint) {
            resizeSocials_imSideBar_pluginAppObj_02();
        });
        resizeSocials_imSideBar_pluginAppObj_02();
    });

       function resizeSocials_imSideBar_pluginAppObj_02() {
           
           /*reset margins*/
           $("#imSideBar_pluginAppObj_02 .social-icon").removeClass("last-item-row");
           $("#imSideBar_pluginAppObj_02 .social-icon").removeClass("last-row");
           $("#imSideBar_pluginAppObj_02 .social-icon").removeClass("one-row");
                 
           containerWidth = $('#imSideBar_pluginAppObj_02').width();
           
           var buttonPerRow = 1;
           if("horizontal" === "horizontal")
                buttonPerRow = getButtonPerRow();
               
           if(buttonPerRow == 1){
               $("#imSideBar_pluginAppObj_02 .social-icon:last-child").addClass("last-row");
           }
           else if(numBtn == buttonPerRow){
               $("#imSideBar_pluginAppObj_02 .social-icon").addClass("last-row");
               $("#imSideBar_pluginAppObj_02 .social-icon:last-child").addClass("last-item-row");  
            }
           else{
               $("#imSideBar_pluginAppObj_02 .social-icon:nth-child(" + buttonPerRow + "n)").addClass("last-item-row");
               $("#imSideBar_pluginAppObj_02 .social-icon:nth-child(n+" + parseInt(buttonPerRow+1) + ")").addClass("last-row");
           }
             
           var fact = containerWidth < btnWidth ? containerWidth / btnWidth : 1;
           $('#imSideBar_pluginAppObj_02 .social-icon, #imSideBar_pluginAppObj_02 .sides-container').css({
               width: btnWidth * fact,
               height: btnHeight * fact
           });
       }

        function getButtonPerRow() {
            var remaining = containerWidth - btnWidth;
            var count = 1;
            while (remaining >= btnWidth + (count == numBtn-1 ? 0 : btnMargin)) {
                count++;
                if(count == numBtn)
                    break;
                
                remaining -= btnWidth + btnMargin;
            }           
            return count;
        }
}